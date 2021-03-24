<?php

namespace Modules\Staff\Nav\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Staff\Nav\Models\Nav;
use Modules\Staff\Nav\Models\NavLocation;

class StaffNavController extends Controller
{

    public function index()
    {
        $nav_locations = NavLocation::paginate(100);
        return view('staffnav::index', compact('nav_locations'));
    }

    public function navs($id)
    {
      $nav_location = NavLocation::find($id);
      $navs = $nav_location->navs()->orderBy('name', 'asc')->paginate(1000000);

      return view('staffnav::navs', compact('navs', 'nav_location'));
    }

//    public function customUploadImage(Request $request)
//    {
//        if ($request->old_img) {
//          $request->id = $request->old_img;
//          Nav::find($request->nav_id)->media()->detach(3);
//          $this->deleteImage($request);
//        }
//
//        $imageExtension = $request->file('image')->extension();
//
//        $input['image'] = time() . '.' . $imageExtension;
//        $request->file('image')->move(public_path('media/images'), $input['image']);
//
//        $media = Media::create([
//          'name' => $input['image'],
//          'path' => 'media/images',
//          'person_id' => auth()->guard('staff')->user()->id,
//          'person_role' => 'staff' ,
//        ]);
//
////        $nav = Nav::find($request->nav_id);
////        $nav->media()->attach($media);1
//        NavImage::updateOrCreate(['nav_id' => $request->nav_id], [
//          'nav_id' => $request->nav_id,
//        ]);
//
//        $image = NavImage::where('nav_id', $request->nav_id)->first();
//        $image->media()->attach($media);
//
//        return $media->id;
//    }
//
//    public function UploadImage(Request $request)
//    {
//      if ($request->old_img) {
//        $request->id = $request->old_img;
//        NavImage::find($request->row_id)->media()->detach();
//
//        $this->deleteImage($request);
//      }
//
//      $imageExtension = $request->file('image')->extension();
//
//      $input['image'] = time() . '.' . $imageExtension;
//      $request->file('image')->move(public_path('media/images'), $input['image']);
//
//      $media = Media::create([
//        'name' => $input['image'],
//        'path' => 'media/images',
//        'person_id' => auth()->guard('staff')->user()->id,
//        'person_role' => 'staff' ,
//      ]);
//
//  //        $nav = Nav::find($request->nav_id);
//  //        $nav->media()->attach($media);1
//
//
//      if (!is_null($request->row_id))
//      {
//        $image = NavImage::find($request->row_id);
//        $image->media()->attach($media);
//      } else {
//        return $media->id;
//      }
//
//    }
//
//    public function deleteImage(Request $request)
//        {
//        $media = Media::find($request->id);
//        $user_id = auth()->guard('staff')->user()->id;
//
//        if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id)) {
//          unlink(public_path("$media->path/") . $media->name);
//          $media->delete();
//        }
//      }
//
//    public function navImages($id)
//    {
//        $nav_images = Nav::find($id)->images()->paginate();
//        $nav = Nav::find($id);
//        return view('staffnav::navImages', compact('nav_images', 'nav'));
//    }
//
//    public function updateNav(Request $request)
//    {
//        // output: array clean position
//        $positions = str_replace('item[]=', '', $request->positions);
//        $positions = str_replace('&', ',', $positions);
//        $positions = explode(',', $positions);
//        $positions = array_map(function ($value) {
//          return intval($value);
//        }, $positions);
//
//        foreach($positions as $key => $position) {
//            Log::info($position);
//            Nav::find($position)->update([
//              'status' => $request->status[$key],
//            ]);
//
//            NavImage::updateOrCreate(['nav_id' => $position], [
//              'alt' => $request->images_alt[$key],
//              'link' => $request->nav_links[$key],
//              'nav_id' => $position,
//            ]);
//        }
//
//    }
//
//    public function updateNavImagesRow(Request $request)
//    {
//        // delete rows
//        if (isset($request->deleted_rows) && (!is_null($request->deleted_rows))) {
//          foreach ($request->deleted_rows as $deleted_row) {
//            NavImage::find($deleted_row)->media()->detach();
//            NavImage::find($deleted_row)->delete();
//          }
//        }
//
//        // output: array clean position
//        $positions = str_replace('item[]=', '', $request->positions);
//        $positions = str_replace('&', ',', $positions);
//        $positions = explode(',', $positions);
//        $positions = array_map(function ($value) {
//          return intval($value);
//        }, $positions);
//
//        foreach($positions as $i => $id)
//        {
//            NavImage::updateOrCreate(['id' => $id], [
//                'alt' => $request->images_alt[$i],
//                'link' => $request->nav_links[$i],
//                'position' => $i,
//                'status' => $request->status[$i],
//                'nav_id' => $request->nav_id,
//            ]);
//        }
//
//    }

}
