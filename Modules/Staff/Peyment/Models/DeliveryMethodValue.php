<?php

namespace Modules\Staff\Shiping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Shiping\Models\PeymentMethod;

class PeymentMethodValue extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'status', 'intra_province', 'extra_province', 'neighboring_provinces', 'peyment_method_id'];

    protected $table = 'peyment_method_values';

    public function peymentMethods()
    {
      return $this->belongsToMany(PeymentMethod::class);
    }

}
