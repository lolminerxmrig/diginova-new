<?php

namespace Modules\Staff\Attribute\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Attribute\Models\ProductAttributes;


class Attribute extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'types', 'is_required', 'is_filterable'];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function values()
    {
      return $this->hasMany(AttributeValue::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

//    public function products()
//    {
//        return $this->belongsToMany(Product::class)
//            ->withPivot('value')
//            ->using(ProductAttributes::class);
//    }


}

