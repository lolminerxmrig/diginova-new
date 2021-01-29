<?php

namespace Modules\Staff\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Attribute\Models\Attribute;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Type\Models\Type;
use App\Models\Media;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'en_name', 'parent_id', 'slug'];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');

    }

    public function media()
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function brands()
    {
        return $this->morphedByMany(Brand::class, 'categorizable');
    }

    public function attributeGroups()
    {
        return $this->morphedByMany(AttributeGroup::class, 'categorizable');
    }

    public function types()
    {
        return $this->morphToMany(Type::class, 'typable');
    }

    public function attribute()
    {
        return $this->morphedByMany(Attribute::class, 'categorizable');
    }

  public function products()
  {
    return $this->morphedByMany(Product::class, 'categorizable');
  }
}

