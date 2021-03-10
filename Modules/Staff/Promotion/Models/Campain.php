<?php

namespace Modules\Staff\Promotion\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Media;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;


class Campain extends Model
{

    protected $fillable = ['name', 'min_percent', 'start_at', 'end_at', 'type', 'status'];


    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_variant_id');
    }

    public function category()
    {
        return $this->morphTo(ProductHasVariant::class);
    }

    public function productVariants()
    {
//        return $this->morphToMany(ProductHasVariant::class, 'variantable', 'product_variantables', 'product_variant_id', 'variantable_id');
        return $this->morphToMany(ProductHasVariant::class, 'variantable', 'product_variantables', '', 'variantable_id');
    }
}
