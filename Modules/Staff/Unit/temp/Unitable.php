<?php

namespace Modules\Staff\Unit\Models;

use Illuminate\Database\Eloquent\Model;

class Unitable extends Model
{
    protected $fillable = ['unit_id', 'unitable_type', 'unitable_id'];
}
