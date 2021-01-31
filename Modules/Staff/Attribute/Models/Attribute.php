<?php

namespace Modules\Staff\Attribute\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;


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
}

