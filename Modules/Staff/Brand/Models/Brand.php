<?php

namespace Modules\Staff\Brand\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'en_name', 'type' ,'image_id', 'category_id', 'slug', 'description'];

}

