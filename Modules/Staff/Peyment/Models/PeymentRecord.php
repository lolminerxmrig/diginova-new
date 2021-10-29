<?php

namespace Modules\Staff\Peyment\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Customers\Auth\Models\Customer;
use Modules\Staff\Order\Models\Order;

class PeymentRecord extends Model
{

    use HasFactory;

    protected $fillable = ['tracking_code', 'status', 'price', 'order_id', 'method_type', 'method_id', 'customer_id', 'invoiceـnumber'];

    public function peymentMethod()
    {
      return $this->morphTo('method');
    }

    public function order()
    {
      return $this->belongsTo(Order::class);
    }

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

    public function scopeSuccessfulPeyment($query)
    {
        return $query->where('status', 'successful')->where('method_type', 'PeymentMethod');
    }

}
