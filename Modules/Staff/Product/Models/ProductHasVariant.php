<?php

namespace Modules\Staff\Product\Models;

use App\Models\SeoContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Staff\Attribute\Models\Attribute;
use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Attribute\Models\AttributeProduct;
use Modules\Staff\Attribute\Models\ProductAttributes;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Type\Models\Type;
use App\Models\Media;


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
    ];

}
