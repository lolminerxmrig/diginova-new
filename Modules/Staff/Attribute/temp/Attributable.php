<?php

namespace Modules\Staff\Attribute\Models;

use Illuminate\Database\Eloquent\Model;

class Attributable extends Model
{
    protected $fillable = ['attribute_id', 'attributable_type', 'attributable_id'];
}
