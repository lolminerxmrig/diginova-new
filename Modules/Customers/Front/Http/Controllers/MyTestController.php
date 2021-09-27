<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MyTestController extends Controller
{
  public function index()
  {
      $sliders = ['slider 1', 'slider 2', 'slider 3', 'slider 4', 'slider 5', 'slider 6', 'slider 7', 'slider 8', 'slider 9', 'slider 10'];
      $banners = ['banner 1', 'banner 2', 'banner 3', 'banner 4', 'banner 5', 'banner 6', 'banner 7'];


      if (count($sliders) / (count($banners)? count($banners) : 1)) {
          $primary = $sliders;
          $secondary = $banners;
      }
      else {
          $primary = $banners;
          $secondary = $sliders;
      }


      $second = 0; // شمارنده ارایه دومی
      $default = 0; // شمارنده ارایه اصلی
      $avg = count($primary) / (count($secondary)? count($secondary) : 1);    // 2
      $avg = floor($avg);    // 2

      foreach ($primary as $item)
      {
          echo $item ;
          $default++;
          if ($default >= $avg) {
              if (isset($secondary[$second])) {
                echo '<span style="color:red">' . $secondary[$second] . '</span><br>';
                $second++;
                $default = 0;
              }
          }
      }



  }
}
