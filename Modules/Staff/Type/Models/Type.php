<?php

namespace Modules\Staff\Type\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;


class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position'];

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'typable');
    }

    public function products()
    {
      return $this->belongsToMany(Product::class);
    }
}

