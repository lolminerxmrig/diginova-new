<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Customers\Auth\Models\Customer;
use Modules\Customers\Panel\Models\CustomerLegal;

class State extends Model
{
    use HasFactory;

    public function city()
    {
      return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function state()
    {
      return $this->belongsTo(self::class, 'parent_id');
    }

}
