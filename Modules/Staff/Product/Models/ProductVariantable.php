<?php

namespace Modules\Staff\Product\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantable extends Model
{
    protected $fillable = ['product_variant_id', 'variantable_type', 'variantable_id'];
    public $timestamps = false;
}
