<?php

use Illuminate\Database\Eloquent\Builder;

function persianNum($str){
    $english = array('0','1','2','3','4','5','6','7','8','9');
    $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    $convertedStr = str_replace($english, $persian, $str);
    return $convertedStr;
}

function EnNum($str){
  $english = array('0','1','2','3','4','5','6','7','8','9');
  $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
  $convertedStr = str_replace($persian, $english, $str);
  return $convertedStr;
}

function convertByte($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 0) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

function fullZone($id, $stateBeginWith = null, $cityBeginWith = ' - ', $districtBeginWith = ' - ')
{
    if (\App\Models\State::where('id', $id)->exists())
    {
      $zone = \App\Models\State::find($id);
    }
    else {
      return null;
    }

    if ($zone->type == 'district') {
      $district = $zone->name;
      $city = $zone->parent->name;
      $state = $zone->parent->parent->name;
    }
    elseif ($zone->type == 'city')
    {
      $city = $zone->name;
      $state = $zone->parent->name;
    }

    $output = !is_null($stateBeginWith)? $stateBeginWith  : '';   // استان
    $output .= $state; // نام استان
    $output .= $cityBeginWith . $city; // پیشوند + نام شهر
    $output .= (isset($district))? $districtBeginWith . $district : ''; // پیشوند +نام محله

    return $output;
}

function getState($id)
{
  if (\App\Models\State::where('id', $id)->exists())
  {
    $zone = \App\Models\State::find($id);
  }
  else {
    return null;
  }

  if ($zone->type == 'district')
  {
    $state = $zone->parent->parent;
  }
  elseif ($zone->type == 'city')
  {
    $state = $zone->parent;
  }
  else{
    $state = $zone;
  }

  return $state;

}

function getSingleImage($model)
{
  if($model->images()->first()->media()->exists())
  {
    return $output = $site_url . '/' . $model->images()->first()->media->first()->path . '/'. $model->images()->first()->media->first()->name;
  }
  return null;
}

function customerFullName()
{
    if (auth()->guard('customer')->check()) {
      if (!is_null(auth()->guard('customer')->user()->first_name)) {
        return auth()->guard('customer')->user()->first_name . ' ' . auth()->guard('customer')->user()->last_name;
      }
      return persianNum(0 . auth()->guard('customer')->user()->mobile);
    }
    return null;
}

function fullBreadcrumb($id, $stateBeginWith = null, $cityBeginWith = ' - ', $districtBeginWith = ' - ')
{
  if (\App\Models\State::where('id', $id)->exists())
  {
    $zone = \App\Models\State::find($id);
  }
  else {
    return null;
  }

  if ($zone->type == 'district') {
    $district = $zone->name;
    $city = $zone->parent->name;
    $state = $zone->parent->parent->name;
  }
  elseif ($zone->type == 'city')
  {
    $city = $zone->name;
    $state = $zone->parent->name;
  }

  $output = !is_null($stateBeginWith)? $stateBeginWith  : '';   // استان
  $output .= $state; // نام استان
  $output .= $cityBeginWith . $city; // پیشوند + نام شهر
  $output .= (isset($district))? $districtBeginWith . $district : ''; // پیشوند +نام محله

  return $output;
}

function is_buyed($product)
{
  $customer = auth()->guard('customer')->user();

  if (auth()->guard('customer')->check()) {
    return $is_buyed = $customer->orders()->whereHas('consignment_variants', function ($q) use ($product) {
      $q->where('product_id', $product->id);
      $q->where('order_status_id', 4);
    })->exists();
  }
  else
  {
    return $is_buyed = false;
  }
}

function variant_defualt($product, $type = 'model')
{

    if ($type == 'id') {
      $product = \Modules\Staff\Product\Models\Product::find($product);
    }

    if ($product->variants()->exists())
    {
      $min_variant_price = $product->variants->min('sale_price');
      $min_variants = $product->variants()->where('sale_price', $min_variant_price)->get();

      $min_promotion_price = 0;
      $min_promotion_variants = null;
      foreach ($product->variants as $variant)
      {
        if ($variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->exists() && $variant->promotions()->min('promotion_price') > $min_promotion_price)
        {
          $min_promotion_price = ($variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->exists())? $variant->promotions()->min('promotion_price') : $min_promotion_price;
          if ($variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->exists()) {
            $min_promotion_variants = $variant->whereHas('promotions', function (Builder $query) use ($min_promotion_price) {
              $query->where('promotion_price', $min_promotion_price);
            })->get();
          }
        }
      }

      \Illuminate\Support\Facades\Log::info('min variant ' . $min_variant_price);
      if (($min_variant_price <= $min_promotion_price) || ($min_promotion_price == 0)) {
        $max_stock_count = $min_variants->max('stock_count');
        return $variant_defualt = $min_variants->where('stock_count', $max_stock_count)->first();
      }
      else {
        $max_stock_count = $min_promotion_variants->max('stock_count');
        return $variant_defualt = $min_promotion_variants->where('stock_count', $max_stock_count)->first();
      }
    }

    return null;

}

function product_price($product, $type = 'model')
{

  $promotion_min_price = 0;

  $variant_defualt = variant_defualt($product, $type);

  if ($variant_defualt->promotions()->exists()) {
    $promotion_min_price = $variant_defualt->promotions()->min('promotion_price');
  }

  if ($promotion_min_price < $variant_defualt->sale_price) {
    return $product_price = $promotion_min_price;
  }
  else {
    return $product_price = $variant_defualt->sale_price;
  }

}

function toman($price) {
  if (is_numeric($price)) {
    return $price/10;
  }
  return null;
}

function defualtCartOldPrice($cart){
  if ($cart->old_promotion_price < $cart->old_sale_price) {
    return $cart->old_promotion_price;
  } else {
    return $cart->old_sale_price;
  }
}

function defualtCartNewPrice($cart){
  if ($cart->new_promotion_price < $cart->new_sale_price) {
    return $cart->new_promotion_price;
  } else {
    return $cart->new_sale_price;
  }
}
