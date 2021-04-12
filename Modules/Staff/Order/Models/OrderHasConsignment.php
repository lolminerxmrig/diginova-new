<?php

namespace Modules\Staff\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Customers\Auth\Models\Customer;
use Modules\Staff\Shiping\Models\DeliveryMethod;
use Modules\Staff\Shiping\Models\DeliveryStatus;


class OrderHasConsignment extends Model
{
    use HasFactory;

    protected $fillable = ['consignment_code', 'shiping_cost', 'delivery_code', 'tracking_postal_code', 'delivery_at', 'delivery_status_id', 'delivery_method_id', 'order_id'];


    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

    public function consignment_variants()
    {
      return $this->hasMany(ConsignmentHasProductVariants::class, 'consignment_id');
    }

    public function delivery_method()
    {
      return $this->belongsTo(DeliveryMethod::class, 'delivery_method_id');
    }

    public function delivery_status()
    {
      return $this->belongsTo(DeliveryStatus::class, 'delivery_status_id');
    }

    public function order()
    {
      return $this->belongsTo(Order::class);
    }

}
