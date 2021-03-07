<?php

namespace Modules\Customers\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Staff\Comment\Models\Comment;


class Customer extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['mobile', 'email', 'password', 'verify_token'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
