<?php

namespace Modules\Staff\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Shiping\Models\DeliveryMethod;


class ProductWeight extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    public function deliveryMethod()
    {
      return $this->morphedByMany(DeliveryMethod::class, 'weightable', 'weightables');
    }

}

