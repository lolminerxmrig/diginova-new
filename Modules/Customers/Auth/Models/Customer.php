<?php

namespace Modules\Customers\Auth\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Customers\Panel\Models\CustomerLegal;
use Modules\Staff\Comment\Models\Comment;
use Modules\Staff\Customer\Models\CustomerAddresses;
use Modules\Staff\Order\Models\Order;


class Customer extends Authenticatable
{

    use HasFactory;

    protected $fillable = [
      'mobile',
      'email',
      'password',
      'verify_token',
      'first_name',
      'last_name',
      'national_code',
      'birthdate',
      'bank_card_number',
      'job_id',
      'newsletters',
      'return_money_method',
      'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function legal()
    {
        return $this->hasOne(CustomerLegal::class);
    }

    public function addresses()
    {
      return $this->hasMany(CustomerAddresses::class);
    }

    public function state()
    {
      return $this->hasOne(State::class);
    }

    public function orders()
    {
      return $this->hasMany(Order::class);
    }
}
