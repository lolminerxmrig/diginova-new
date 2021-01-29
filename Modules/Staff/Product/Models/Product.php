<?php

namespace Modules\Staff\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Type\Models\Type;
use App\Models\Media;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'en_name', 'parent_id', 'slug'];

    public function types()
    {
      return $this->belongsToMany(Type::class);
    }

    public function categories()
    {
      return $this->morphToMany(Category::class);
    }
}

