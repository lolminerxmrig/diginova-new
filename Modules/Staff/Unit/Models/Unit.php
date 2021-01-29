<?php

namespace Modules\Staff\Unit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Category\Models\Category;


class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'value', 'position'];

}
