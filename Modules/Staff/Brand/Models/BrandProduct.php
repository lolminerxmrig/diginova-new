<?php

namespace Modules\Staff\Brand\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Media;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;


class BrandProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brand_product';
    protected $fillable = ['brand_id', 'product_id'];


}
