<?php

namespace Modules\Staff\Nav\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Staff\Nav\Models\NavGroup;

class Nav extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'link', 'style', 'position', 'type', 'has_ads', 'location_id'];


    public function media()
    {
      return $this->morphToMany(Media::class, 'mediable');
    }






    public function group()
    {
       return $this->belongsTo(NavGroup::class, 'group_id');
    }



    public function images()
    {
      return $this->hasMany(NavImage::class);
    }

//    public function image()
//    {
//      return $this->hasOne(NavImage::class);
//    }

}
