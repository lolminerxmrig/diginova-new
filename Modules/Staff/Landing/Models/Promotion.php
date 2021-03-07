<?php

namespace Modules\Staff\Landing\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Media;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;


class Landing extends Model
{

    protected $table = 'promotions';
    protected $fillable = ['promotion_price', 'percent', 'start_at', 'end_at', 'promotion_limit', 'promotion_order_limit', 'status', 'product_variant_id'];


    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }


    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_variant_id');
    }

    public function variant()
    {
        return $this->belongsTo(ProductHasVariant::class, 'product_variant_id');
    }


}
