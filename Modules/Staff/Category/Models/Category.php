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

    protected $fillable = ['name', 'en_name', 'parent_id', 'slug', 'description'];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');

    }

    public function brands()
    {
        return $this->morphedByMany(Brand::class, 'categorizable');
    }

    public function attributeGroups()
    {
        return $this->morphedByMany(AttributeGroup::class, 'categorizable');
    }

    public function attributes()
    {
        return $this->morphedByMany(Attribute::class, 'categorizable');
    }

    public function types()
    {
        return $this->morphedByMany(Type::class, 'categorizable');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class);
    }

    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

}

