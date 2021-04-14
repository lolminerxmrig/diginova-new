<?php

namespace Modules\Staff\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Customers\Auth\Models\Customer;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Shiping\Models\OrderStatus;


class ConsignmentHasProductVariants extends Model
{
    use HasFactory;

    protected $fillable = ['count', 'variant_price', 'promotion_price', 'promotion_percent', 'product_id', 'product_variant_id', 'consignment_id', 'order_id', 'promotion_type' , 'order_status_id'];

    public function consignment()
    {
      return $this->belongsTo(OrderHasConsignment::class, 'consignment_id');
    }

    public function product_variant()
    {
      return $this->morphToMany(ProductHasVariant::class, 'variantable', 'product_variantables', 'variantable_id', 'product_variant_id');
    }

    public function status()
    {
      return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

}
