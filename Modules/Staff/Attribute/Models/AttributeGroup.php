<?php

namespace Modules\Staff\Attribute\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Attribute\Models\Attribute;

class AttributeGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'position'];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }


    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable');
    }
}

