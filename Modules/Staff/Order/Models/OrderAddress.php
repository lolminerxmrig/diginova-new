<?php

namespace Modules\Staff\Order\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Modules\Customers\Auth\Models\Customer;


class OrderAddress extends Model
{

    protected $fillable = ['lan', 'len', 'address', 'plaque', 'unit', 'postal_code', 'recipient_firstname', 'recipient_lastname', 'recipient_national_code', 'recipient_mobile', 'customer_id', 'state_id', 'order_id'];

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

//    public function zone()
//    {
//      return $this->morphToMany(State::class, 'zonable', 'zonables', 'zonable_id', 'zone_id');
//    }

}
