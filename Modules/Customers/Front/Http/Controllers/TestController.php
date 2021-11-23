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
[
  public function submitOrder(Request $request)
  [

    $customer = Auth => =>guard('customer')->user();
    $final_sum_price = $this->finalGetOrderCartAmount();
    $final_sum_voucher = $this->finalGetOrderVoucherAmount();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $weights = ProductWeight => =>all();
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    //customizable
    $gateway_name = PeymentMethod => =>findOrFail($request->bank_id)->en_name;
    $gateway = PeymentMethod => =>findOrFail($request->bank_id);

    // مجموع قیمت پروموشن
    $sum_promotion_price = 0;
    foreach($first_carts as $priceItem) [
      if ($priceItem->new_sale_price > $priceItem->new_promotion_price) [
        $sum_promotion_price += (($priceItem->new_sale_price - $priceItem->new_promotion_price) * $priceItem->count);
      ]
    ]

    if (!is_null($final_sum_voucher) && $final_sum_price > $final_sum_voucher) [
      $final_sum_price = $final_sum_price - $final_sum_voucher;
    ]

    if (Order => =>count()) [
      $order_code = Order => =>max('order_code')+1;
    ]
    else [
      $order_code = 3000000;
    ]

    $order_status_id = OrderStatus => =>where('en_name', 'awaiting_payment')->first()->id;

    //ایجاد سفارش
    Order => =>create([
      'order_code' => $order_code,
      'order_status_id' => $order_status_id,
      'customer_id' => $customer->id,
      'cost' => $final_sum_price,
      'discount' => $sum_promotion_price + $final_sum_voucher,
    ]);

    $order_id = Order => =>where('order_code', $order_code)->first()->id;

    if (OrderHasConsignment => =>count()) [
      $delivery_code = OrderHasConsignment => =>max('delivery_code')+1;
      $consignment_code = OrderHasConsignment => =>max('consignment_code')+1;
    ]
    else [
      $delivery_code = 10000;
      $consignment_code = 4000000;
    ]

    $i = 0;
    foreach ($consignment_shipping_cost as $key => $shipping_cost)
    [

      // ایجاد مرسوله
      OrderHasConsignment => =>create([
        'consignment_code' => $consignment_code,
        'shiping_cost' => $shipping_cost,
        'delivery_code' => $delivery_code,
        'tracking_code' => null,
        'delivery_at' => null,
        'order_status_id' => $order_status_id,
        'delivery_method_id' => $method_ids[$i],
        'order_id' => $order_id,
      ]);

      $consignment_id = OrderHasConsignment => =>where('consignment_code', $consignment_code)->first()->id;

      // اضافه کردن تنوع‌ها به مرسوله
      foreach ($first_carts as $item)
      [

        // ایدی حجم => key
        if ($item->product_variant()->first()->product->weight()->id == $key)
        [

          $consignment_p_v_id = ConsignmentHasProductVariants => =>insertGetId([
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

          $consignment_product_variant_id = ConsignmentHasProductVariants => =>where('product_variant_id', $item->product_variant_id)->first()->id;

          OrderStaticDetail => =>create([
            'product_title_fa' => $item->product_variant()->first()->product->title_fa,
            'variant_name' => $item->product_variant()->first()->variant->name,
            'warranty_name' => $item->product_variant()->first()->warranty->name,
            'seller' => 'site',
            'consignment_product_variant_id' => $consignment_product_variant_id,
          ]);

        ]

      ]

      $i++;

    ]

    $default_address = $customer->delivery_address;

    OrderAddress => =>create([
      'lan' => $default_address->lan,
      'len' => $default_address->len,
      'address' => $default_address->address,
      'plaque' => $default_address->plaque,
      'unit' => $default_address->unit,
      'postal_code' => $default_address->postal_code,
      'firstname' => !is_null($default_address->recipient_firstname)? $default_address->recipient_firstname  => $customer->first_name,
      'lastname' => !is_null($default_address->recipient_lastname)? $default_address->recipient_lastname  => $customer->last_name,
      'national_code' => !is_null($default_address->recipient_national_code)? $default_address->recipient_national_code  => $customer->national_code,
      'mobile' => !is_null($default_address->recipient_mobile)? $default_address->recipient_mobile  => $customer->mobile,
      'customer_id' => $default_address->customer_id,
      'state_id' => $default_address->state_id,
      'order_id' => $order_id,
    ]);

    config()->set([
      'payment.default' => $gateway_name,
    ]);

    if ($gateway_name == 'cod')
    [

      // ایجاد رکورد پرداخت موفق سفارش
      PeymentRecord => =>create([
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
        'order_status_id' => OrderStatus => =>where('en_name', 'accepted')->first()->id,
      ]);

      // تغییر وضعیت مرسوله های سفارش به در انتظار بررسی awaiting_review
      OrderHasConsignment => =>where('order_id', $order->id)->update([
        'order_status_id' => OrderStatus => =>where('en_name', 'awaiting_review')->first()->id,
      ]);

      // تغییر وضعیت تنوع‌های مرسولات سفارش به بفروش رفته sold
      ConsignmentHasProductVariants => =>where('order_id', $order->id)->update([
        'order_status_id' => OrderStatus => =>where('en_name', 'sold')->first()->id,
      ]);

      // کم کردن موجودی تنوع
      foreach (ConsignmentHasProductVariants => =>where('order_id', $order->id)->get() as $consignment_product_variant) [
        $consignment_product_variant->product_variant()->update([
          'stock_count' =>  $consignment_product_variant->product_variant->stock_count - $consignment_product_variant->count,
          'sale_count' => $consignment_product_variant->product_variant->sale_count + $consignment_product_variant->count,
        ]);
      ]

      // خالی کردن سبد خرید اول
      $customer->carts()->where('type', 'first')->delete();

      // انتقال سبد خرید دوم به اول
      $customer->carts()->where('type', 'second')->update([
        'type' => 'first',
      ]);

      return $this->orderStatus($order->order_code);

    ]

    if ($gateway_name !== 'cod')
    [

      // ایجاد شماره سفارش تصادفی
      invoiceـnumber =>
      $invoiceـnumber = rand(1000000000, 9999999999);
      if (PeymentRecord => =>where('invoiceـnumber', $invoiceـnumber)->exists()) [
        goto invoiceـnumber;
      ]

      $invoice = new Invoice;
      $invoice->amount($order->cost/10);
      $invoice->via($gateway_name);

      // ایجاد صورتحساب و انتقال به درگاه
      return Payment => =>purchase($invoice, function($driver, $transactionId) use ($order, $gateway, $invoiceـnumber, $customer) [
        // ایجاد رکورد در انتظار پرداخت سفارش
        PeymentRecord => =>create([
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
      ])->pay()->render();

    ]

    // خالی کردن سبد خرید اول
    $customer->carts()->where('type', 'first')->delete();

    // انتقال سبد خرید دوم به اول
    $customer->carts()->where('type', 'second')->update([
      'type' => 'first',
    ]);

  ]

  public function test()
  [
    [
      "status" => true,
      "data" => [
         "search_result" => [
            [
               "url" => "/search/category-cell-phone-pouch-cover/?q=%D9%82%D8%A7%D8%A8%20%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=1",
               "label" => "قاب گوشی موبایل در دسته",
               "category_name" => "کیف و کاور گوشی"
            ],
            [
               "url" => "/search/category-cell-phone-kits/?q=%D8%B1%DB%8C%D9%86%DA%AF%20%D9%84%D8%A7%DB%8C%D8%AA%20%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=2",
               "label" => "رینگ لایت گوشی موبایل در دسته",
               "category_name" => "قطعات جانبی موبایل و تبلت"
            ]
         ],
         "auto_complete" => [
            [
               "url" => "/search/?q=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=1",
               "label" => "گوشی موبایل"
            ],
            [
               "url" => "/search/?q=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84%20%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=2",
               "label" => "گوشی موبایل شیائومی"
            ],
            [
               "url" => "/search/?q=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84%20%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=3",
               "label" => "گوشی موبایل سامسونگ"
            ],
            [
               "url" => "/search/?q=%D9%82%D8%A7%D8%A8%20%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=4",
               "label" => "قاب گوشی موبایل"
            ],
            [
               "url" => "/search/?q=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84%20%D9%86%D9%88%DA%A9%DB%8C%D8%A7&key=%DA%AF%D9%88%D8%B4%DB%8C%20%D9%85&pos=5",
               "label" => "گوشی موبایل نوکیا"
            ]
         ],
         "trends_result" => [],
         "advance_links" => [
            [
               "title_prefix" => "همه کالاها دسته‌بندی",
               "title" => "گوشی موبایل",
               "url" => "/search/category-mobile-phone/",
               "icon_image" => null
            ]
         ],
         "suggestion_products" => [
            [
               "id" => 4958276,
               "title" => "گوشی موبایل شیائومی مدل POCO X3 Pro M2102J20SG دو سیم‌ کارت ظرفیت 256 گیگابایت و 8 گیگابایت رم ",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/77f6b5b39b58f0b81c7707e3626f55b74ee348aa_1623857594.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-4958276/"
            ],
            [
               "id" => 3868296,
               "title" => "گوشی موبایل اپل مدل iPhone 12 A2404 دو سیم‌ کارت ظرفیت 128 گیگابایت ",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/9f5d8f6583a7289a096a9180ac88708856f4bd8f_1607433653.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-3868296/"
            ],
            [
               "id" => 4122136,
               "title" => "گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/c5c4a0bb88dc312a4c2f6de0b1567ef0da31a2d9_1624085323.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-4122136/"
            ],
            [
               "id" => 3893718,
               "title" => "گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433995.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-3893718/"
            ],
            [
               "id" => 5744950,
               "title" => "گوشی موبایل شیائومی مدل POCO F3 5G M2012K11AG دو سیم‌ کارت ظرفیت 256 گیگابایت و 8 گیگابایت رم ",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/d39d1ae019b5c5454f86c9e3754d03bacdf7dba2_1626177843.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-5744950/"
            ],
            [
               "id" => 4834144,
               "title" => "گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/1aaa7ff34f7bec773c4baea959b652ed5dff9f30_1619596674.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-4834144/"
            ],
            [
               "id" => 4230579,
               "title" => "گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/c5c4a0bb88dc312a4c2f6de0b1567ef0da31a2d9_1624089067.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-4230579/"
            ],
            [
               "id" => 3007747,
               "title" => "گوشی موبایل اپل مدل  iPhone SE 2020 A2275 ظرفیت 128 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/122045219.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-3007747/"
            ],
            [
               "id" => 5543971,
               "title" => "گوشی موبایل شیائومی مدل Redmi Note 10 pro M2101K6G دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 6 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/3049dd8c073305e494f86d2959ac679febba7467_1624253960.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-5543971/"
            ],
            [
               "id" => 4884468,
               "title" => "گوشی موبایل سامسونگ مدل  A52 SM-A525F/DS دو سیم‌کارت ظرفیت 128 گیگابایت و رم 8 گیگابایت",
               "image" => "https =>//dkstatics-public.digikala.com/digikala-products/17b055a0f2eee543f3b25a1bd4ced02032278d23_1626014129.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60",
               "url" => "https =>//www.digikala.com/product/dkp-4884468/"
            ]
         ],
         "query" => "گوشی م"
      ]
   ]
  ]

]
