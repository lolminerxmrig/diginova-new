<?php

namespace Modules\Staff\Setting\Models;

use App\Models\Media;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function states()
    {
      return $this->morphToMany(State::class, 'zonable', 'zonables', 'zonable_id', 'zone_id');
    }

    public function media()
    {
      return $this->morphToMany(Media::class, 'mediable', 'mediables', 'mediable_id', 'media_id');
    }
}
