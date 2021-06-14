<?php


namespace Modules\Customers\Front\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Staff\Order\Models\ConsignmentHasProductVariants;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Order\Models\OrderAddress;
use Modules\Staff\Order\Models\OrderHasConsignment;
use Modules\Staff\Order\Models\OrderStaticDetail;
use Modules\Staff\Peyment\Models\PeymentMethod;
use Modules\Staff\Peyment\Models\PeymentRecord;
use Modules\Staff\Product\Models\ProductWeight;
use Modules\Staff\Shiping\Models\OrderStatus;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class TestController
{
  public function submitOrder(Request $request)
  {

    $customer = Auth::guard('customer')->user();
    $final_sum_price = $this->finalGetOrderCartAmount();
    $final_sum_voucher = $this->finalGetOrderVoucherAmount();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $weights = ProductWeight::all();
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    //customizable
    $gateway_name = PeymentMethod::findOrFail($request->bank_id)->en_name;
    $gateway = PeymentMethod::findOrFail($request->bank_id);

    // مجموع قیمت پروموشن
    $sum_promotion_price = 0;
    foreach($first_carts as $priceItem) {
      if ($priceItem->new_sale_price > $priceItem->new_promotion_price) {
        $sum_promotion_price += (($priceItem->new_sale_price - $priceItem->new_promotion_price) * $priceItem->count);
      }
    }

    if (!is_null($final_sum_voucher) && $final_sum_price > $final_sum_voucher) {
      $final_sum_price = $final_sum_price - $final_sum_voucher;
    }

    if (Order::count()) {
      $order_code = Order::max('order_code')+1;
    }
    else {
      $order_code = 3000000;
    }

    $order_status_id = OrderStatus::where('en_name', 'awaiting_payment')->first()->id;

    //ایجاد سفارش
    Order::create([
      'order_code' => $order_code,
      'order_status_id' => $order_status_id,
      'customer_id' => $customer->id,
      'cost' => $final_sum_price,
      'discount' => $sum_promotion_price + $final_sum_voucher,
    ]);

    $order_id = Order::where('order_code', $order_code)->first()->id;

    if (OrderHasConsignment::count()) {
      $delivery_code = OrderHasConsignment::max('delivery_code')+1;
      $consignment_code = OrderHasConsignment::max('consignment_code')+1;
    }
    else {
      $delivery_code = 10000;
      $consignment_code = 4000000;
    }

    $i = 0;
    foreach ($consignment_shipping_cost as $key => $shipping_cost)
    {

      // ایجاد مرسوله
      OrderHasConsignment::create([
        'consignment_code' => $consignment_code,
        'shiping_cost' => $shipping_cost,
        'delivery_code' => $delivery_code,
        'tracking_code' => null,
        'delivery_at' => null,
        'order_status_id' => $order_status_id,
        'delivery_method_id' => $method_ids[$i],
        'order_id' => $order_id,
      ]);

      $consignment_id = OrderHasConsignment::where('consignment_code', $consignment_code)->first()->id;

      // اضافه کردن تنوع ها به مرسوله
      foreach ($first_carts as $item)
      {

        // ایدی حجم: key
        if ($item->product_variant()->first()->product->weight()->id == $key)
        {

          $consignment_p_v_id = ConsignmentHasProductVariants::insertGetId([
            'count' => $item->count,
            'variant_price' => $item->new_sale_price,
            'promotion_price' => $item->new_promotion_price,
            'product_id' => $item->product_variant()->first()->product->id,
            'consignment_id' => $consignment_id,
            'order_id' => $order_id,
            'order_status_id' => $order_status_id,
            'product_variant_id' => $item->product_variant_id,
            'promotion_type' => null,
            'promotion_percent' => null,
          ]);

          $consignment_product_variant_id = ConsignmentHasProductVariants::where('product_variant_id', $item->product_variant_id)->first()->id;

          OrderStaticDetail::create([
            'product_title_fa' => $item->product_variant()->first()->product->title_fa,
            'variant_name' => $item->product_variant()->first()->variant->name,
            'warranty_name' => $item->product_variant()->first()->warranty->name,
            'seller' => 'site',
            'consignment_product_variant_id' => $consignment_product_variant_id,
          ]);

        }

      }

      $i++;

    }

    $default_address = $customer->delivery_address;

    OrderAddress::create([
      'lan' => $default_address->lan,
      'len' => $default_address->len,
      'address' => $default_address->address,
      'plaque' => $default_address->plaque,
      'unit' => $default_address->unit,
      'postal_code' => $default_address->postal_code,
      'firstname' => !is_null($default_address->recipient_firstname)? $default_address->recipient_firstname : $customer->first_name,
      'lastname' => !is_null($default_address->recipient_lastname)? $default_address->recipient_lastname : $customer->last_name,
      'national_code' => !is_null($default_address->recipient_national_code)? $default_address->recipient_national_code : $customer->national_code,
      'mobile' => !is_null($default_address->recipient_mobile)? $default_address->recipient_mobile : $customer->mobile,
      'customer_id' => $default_address->customer_id,
      'state_id' => $default_address->state_id,
      'order_id' => $order_id,
    ]);

    config()->set([
      'payment.default' => $gateway_name,
    ]);

    if ($gateway_name == 'cod')
    {

      // ایجاد رکورد پرداخت موفق سفارش
      PeymentRecord::create([
        'invoiceـnumber' => null,
        'status' => 'successful',
        'price' => $order->cost,
        'order_id' => $order->id,
        'method_type' => 'PeymentMethod',
        'method_id' => $gateway->id,
        'customer_id' => $customer->id,
      ]);

      // تغییر وضعیت سفارش به تایید شده
      $order->update([
        'order_status_id' => OrderStatus::where('en_name', 'accepted')->first()->id,
      ]);

      // تغییر وضعیت مرسوله های سفارش به در انتظار بررسی awaiting_review
      OrderHasConsignment::where('order_id', $order->id)->update([
        'order_status_id' => OrderStatus::where('en_name', 'awaiting_review')->first()->id,
      ]);

      // تغییر وضعیت تنوع های مرسولات سفارش به بفروش رفته sold
      ConsignmentHasProductVariants::where('order_id', $order->id)->update([
        'order_status_id' => OrderStatus::where('en_name', 'sold')->first()->id,
      ]);

      // کم کردن موجودی تنوع
      foreach (ConsignmentHasProductVariants::where('order_id', $order->id)->get() as $consignment_product_variant) {
        $consignment_product_variant->product_variant()->update([
          'stock_count' =>  $consignment_product_variant->product_variant->stock_count - $consignment_product_variant->count,
        ]);
      }

      // خالی کردن سبد خرید اول
      $customer->carts()->where('type', 'first')->delete();

      // انتقال سبد خرید دوم به اول
      $customer->carts()->where('type', 'second')->update([
        'type' => 'first',
      ]);

      return $this->orderStatus($order->order_code);

    }

    if ($gateway_name !== 'cod')
    {

      // ایجاد شماره سفارش تصادفی
      invoiceـnumber:
      $invoiceـnumber = rand(1000000000, 9999999999);
      if (PeymentRecord::where('invoiceـnumber', $invoiceـnumber)->exists()) {
        goto invoiceـnumber;
      }

      $invoice = new Invoice;
      $invoice->amount($order->cost/10);
      $invoice->via($gateway_name);

      // ایجاد صورتحساب و انتقال به درگاه
      return Payment::purchase($invoice, function($driver, $transactionId) use ($order, $gateway, $invoiceـnumber, $customer) {
        // ایجاد رکورد در انتظار پرداخت سفارش
        PeymentRecord::create([
          'invoiceـnumber' => $invoiceـnumber,
          'status' => 'awaiting_payment',
          'price' => $order->cost,
          'order_id' => $order->id,
          'method_type' => 'PeymentMethod',
          'method_id' => $gateway->id,
          'customer_id' => $customer->id,
        ]);

        // ایجاد کوکی شماره سفارش
        setcookie('invoiceـnumber', $invoiceـnumber, time() + (10 * 365 * 24 * 60 * 60), "/");
      })->pay()->render();

    }

    // خالی کردن سبد خرید اول
    $customer->carts()->where('type', 'first')->delete();

    // انتقال سبد خرید دوم به اول
    $customer->carts()->where('type', 'second')->update([
      'type' => 'first',
    ]);

  }

}
