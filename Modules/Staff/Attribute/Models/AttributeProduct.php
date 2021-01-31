<?php

namespace Modules\Staff\Attribute\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AttributeProduct extends Model
{
    use HasFactory;

    protected $fillable = ['attribute_id', 'product_id', 'value'];

    protected $table = 'attribute_product';

}

