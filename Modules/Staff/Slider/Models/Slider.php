<?php

namespace Modules\Staff\Slider\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Slider\Models\SliderGroup;

class Slider extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'link', 'alt', 'status', 'group_id'];

    public function group()
    {
       return $this->belongsTo(SliderGroup::class, 'group_id');
    }

    public function media()
    {
      return $this->morphToMany(Media::class, 'mediable');
    }

    public function images()
    {
      return $this->hasMany(SliderImage::class);
    }

//    public function image()
//    {
//      return $this->hasOne(SliderImage::class);
//    }

}