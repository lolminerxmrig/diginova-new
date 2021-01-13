<?php

namespace Modules\Staff\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Media extends Model
{
    use HasFactory;

    protected $table = 'media';
    protected $fillable = ['name', 'path', 'person_role', 'person_id'];

    public function mediable()
    {
        return $this->morphTo();
    }
}

