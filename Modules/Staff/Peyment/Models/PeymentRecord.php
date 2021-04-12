<?php

namespace Modules\Staff\Peyment\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeymentRecord extends Model
{

    use HasFactory;

    protected $fillable = ['tracking_code', 'status', 'price', 'order_id', 'method_type', 'method_id'];

}
