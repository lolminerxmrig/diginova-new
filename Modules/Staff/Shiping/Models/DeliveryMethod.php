<?php

namespace Modules\Staff\Shiping\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Product\Models\ProductWeight;

class DeliveryMethod extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'status', 'free_shipping_min_cost', 'cost_det_type_id'];


    public function media()
    {
      return $this->morphToMany(Media::class, 'mediable');
    }

    public function weights()
    {
      return $this->morphToMany(ProductWeight::class, 'weightable', 'weightables', 'weightable_id', 'wheight_id');
    }

}
