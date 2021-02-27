<?php

namespace Modules\Staff\Warranty\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Media;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;


class Warranty extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'warranties';
    protected $fillable = ['name', 'month', 'has_insurance'];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

//    public function products()
//    {
//      return $this->hasMany(Product::class, 'warranty_id');
//    }

}
