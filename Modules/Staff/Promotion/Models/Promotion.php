<?php

namespace Modules\Staff\Promotion\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Media;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;


class Promotion extends Model
{

    protected $table = 'promotions';
    protected $fillable = ['promotion_price', 'percent', 'start_at', 'end_at', 'promotion_limit', 'promotion_order_limit', 'status', 'campain_id'];


    public function productVariants()
    {
        return $this->morphToMany(ProductHasVariant::class, 'variantable', 'product_variantables', '', 'product_variant_id', 'id', 'id');
    }


}
