<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Product\Models\Product;


class Media extends Model
{
    use HasFactory;

    protected $table = 'media';
    protected $fillable = ['name', 'path', 'person_role', 'person_id','mediable_type', 'mediable_id', 'status'];

    public function mediable()
    {
        return $this->morphTo();
    }

    public function products()
    {
        return $this->morphedByMany(Product::class);
    }
}

