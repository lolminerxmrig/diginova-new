<?php

namespace Modules\Staff\Type\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;


class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'typable');
    }
}

