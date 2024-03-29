<?php

namespace Modules\Staff\Category\Models;

use Illuminate\Database\Eloquent\Model;

class Categorizable extends Model
{
    public $timestamps = false;
    protected $fillable = ['category_id', 'categorizable_type', 'categorizable_id'];
}

