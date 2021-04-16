<?php

function persianNum($str){
    $english = array('0','1','2','3','4','5','6','7','8','9');
    $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    $convertedStr = str_replace($english, $persian, $str);
    return $convertedStr;
}

function EnNum($str){
  $english = array('0','1','2','3','4','5','6','7','8','9');
  $persian = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
  $convertedStr = str_replace($persian, $english, $str);
  return $convertedStr;
}

function convertByte($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 0) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

function fullZone($id, $stateBeginWith = null, $cityBeginWith = ' - ', $districtBeginWith = ' - ')
{
    if (\App\Models\State::where('id', $id)->exists())
    {
      $zone = \App\Models\State::find($id);
    }
    else {
      return null;
    }

    if ($zone->type == 'district') {
      $district = $zone->name;
      $city = $zone->parent->name;
      $state = $zone->parent->parent->name;
    }
    elseif ($zone->type == 'city')
    {
      $city = $zone->name;
      $state = $zone->parent->name;
    }

    $output = !is_null($stateBeginWith)? $stateBeginWith  : '';   // استان
    $output .= $state; // نام استان
    $output .= $cityBeginWith . $city; // پیشوند + نام شهر
    $output .= (isset($district))? $districtBeginWith . $district : ''; // پیشوند +نام محله

    return $output;
}

function getState($id)
{
  if (\App\Models\State::where('id', $id)->exists())
  {
    $zone = \App\Models\State::find($id);
  }
  else {
    return null;
  }

  if ($zone->type == 'district')
  {
    $state = $zone->parent->parent;
  }
  elseif ($zone->type == 'city')
  {
    $state = $zone->parent;
  }
  else{
    $state = $zone;
  }

  return $state;

}

function getSingleImage($model)
{
  if($model->images()->first()->media()->exists())
  {
    return $output = $site_url . '/' . $model->images()->first()->media->first()->path . '/'. $model->images()->first()->media->first()->name;
  }
  return null;
}



