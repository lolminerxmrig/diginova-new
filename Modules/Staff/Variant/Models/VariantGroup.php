<?php

namespace Modules\Staff\Variant\Models;

use Illuminate\Database\Eloquent\Model;


class VariantGroup extends Model
{

    protected $fillable = ['name', 'description', 'type', 'status', 'position'];

    public function variant()
    {
      return $this->hasMany(Variant::class, 'group_id');
    }

}
