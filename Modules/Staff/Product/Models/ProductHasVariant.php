<?php

namespace Modules\Staff\Product\Models;

use App\Models\SeoContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Staff\Attribute\Models\Attribute;
use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Attribute\Models\AttributeProduct;
use Modules\Staff\Attribute\Models\ProductAttributes;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Landing\Models\Landing;
use Modules\Staff\Promotion\Models\Campain;
use Modules\Staff\Type\Models\Type;
use App\Models\Media;
use Modules\Staff\Variant\Models\Variant;
use Modules\Staff\Warranty\Models\Warranty;
use function _HumbugBox7eb78fbcc73e\iter\rewindable\product;


class ProductHasVariant extends Model
{

    protected $fillable = [
      'product_id',
      'variant_id',
      'warranty_id',
      'shipping_type',
      'status',
      'post_time',
      'buy_price',
      'sale_price',
      'max_order_count',
      'stock_count',
      'variantable_type',
      'variantable_id',
      'variant_code',
    ];

    protected $table = "product_has_variants";

    public function warranty(){
        return $this->belongsTo(Warranty::class);
    }

    public function variant(){
        return $this->belongsTo(Variant::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

//    public function product_variant_category()
//    {
//        return $this->hasManyThrough(Category::class, Product::class);
//    }

    public function categories()
    {
        return $this->hasManyThrough(ProductHasVariant::class, Product::class)->where('categorizable_type', array_search(static::class, Relation::morphMap()) ?: static::class);
    }

    public function campains()
    {
        return $this->morphedByMany(Campain::class, 'variantable', 'product_variantables', 'product_variant_id', 'variantable_id');
    }

    public function landings()
    {
//        return $this->morphedByMany(Landing::class, 'variantable', 'product_variantables', 'product_variant_id', 'variantable_id');

        return $this->morphedByMany(Landing::class, 'variantable', 'product_variantables', '', 'product_variant_id', 'id', 'id');
    }



}
