<?php

namespace Modules\Staff\Shiping\Models;

use App\Models\Media;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Product\Models\ProductWeight;
use Modules\Staff\Shiping\Models\DeliveryMethodValue;

class DeliveryStatus extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'en_name'];

    protected $table = 'delivery_status';

}
