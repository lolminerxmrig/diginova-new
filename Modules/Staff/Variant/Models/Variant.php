<?php

namespace Modules\Staff\Variant\Models;

use Illuminate\Database\Eloquent\Model;


class Variant extends Model
{

    protected $fillable = ['name', 'value', 'status', 'position', 'group_id'];

    public function variant_group()
    {
      return $this->belongsTo(VariantGroup::class);
    }

}
