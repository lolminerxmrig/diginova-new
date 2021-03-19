<?php

namespace Modules\Customers\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Customers\Panel\Models\CustomerLegal;
use Modules\Staff\Comment\Models\Comment;


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
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function legal()
    {
        return $this->hasOne(CustomerLegal::class);
    }

}
