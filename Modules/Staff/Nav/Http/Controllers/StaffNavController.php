<?php

namespace Modules\Staff\Nav\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Nav\Models\Nav;
use Modules\Staff\Nav\Models\NavLocation;
use App\Models\Media;
use Illuminate\Support\Facades\View;

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

    public function UploadImage(Request $request)
    {
        $imageExtension = $request->image->extension();

        $input['image'] = time() . '.' . $imageExtension;
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
          'name' => $input['image'],
          'path' => 'media/images',
          'person_id' => auth()->guard('staff')->user()->id,
          'person_role' => 'staff' ,
        ]);

        $settings = Setting::select('name', 'value')->get();
        $site_url = $settings->where('name', 'site_url')->first()->value;

        return response()->json([
            'status' => true,
            'data' => [
              'id' => "$media->id",
              'url' => "$site_url/$media->path/$media->name",
              'tempFile' => true,
              'slot' => null,
            ]
          ]);
    }

    public function storeNav(Request $request)
    {

        $messages = [
          'unique' => 'نام فهرست تکراری است',
        ];

        $validator = Validator::make($request->all(), [
          'nav_name' => 'required',
          'nav_link' => 'nullable|string',
          'nav_type' => 'required',
          'uploaded_icon_id' => 'nullable',
        ], $messages);

        if ($validator->fails()) {
          $errors = $validator->errors();
          return response()->json([
            'status' => false,
            'data' => [
              'errors' => $errors,
            ]
          ], 400);
        }

        if ((Nav::max('position')) || (Nav::max('position') == 0)) {
          $position = Nav::max('position') + 1;
        } else {
          $position = 0;
        }

        $created_nav = Nav::create([
          'name' => $request->nav_name,
          'link' => $request->nav_link,
          'type' => $request->nav_type,
          'position' => $position,
          'location_id' => $request->location_id,
        ]);

        if (!is_null($request->uploaded_icon_id))
        {
            $media = Media::find($request->uploaded_icon_id);
            $created_nav->media()->attach($media);
        }

        return response()->json([
          'status' => true,
          'data' => true,
        ]);

    }

    public function statusNav(Request $request)
    {
        Nav::where('id',$request->nav_id)->update([
          'status' => $request->status,
        ]);
    }

    public function navChangePosition(Request $request)
    {
      foreach ($request->item as $postion => $id) {
        Nav::where('id', $id)->update([
          'position' => $postion,
        ]);
      }
    }

    public function reloadNavsTable(Request $request)
    {
      $navs = Nav::where('location_id', $request->location_id)->paginate(10000);
      return View::make('staffnav::ajax.reload-nav-table', compact('navs'));
    }

    public function deleteNav(Request $request)
    {
        Nav::find($request->id)->delete();

        $navs = Nav::where('location_id', $request->nav_location)->paginate(10000);
        return View::make('staffnav::ajax.reload-nav-table', compact('navs'));
    }




    public function navItems($id)
    {
      $nav = Nav::find($id);
      $items = Nav::where('parent_id', $id)->paginate(100000);
      return view('staffnav::navItems', compact('items', 'nav'));
    }

    public function updateNav(Request $request)
    {

      $messages = [
        'unique' => 'نام فهرست تکراری است',
        'required' => 'وارد کردن نام فهرست ضروری است',
      ];

      $validator = Validator::make($request->all(), [
        'nav_name' => 'required',
        'nav_link' => 'nullable|string',
        'uploaded_icon_id' => 'nullable',
      ], $messages);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json([
          'status' => false,
          'data' => [
            'errors' => $errors,
          ]
        ], 400);
      }

      Nav::where('id', $request->nav_id)->update([
        'name' => $request->nav_name,
        'link' => $request->nav_link,
      ]);

      if (!is_null($request->uploaded_icon_id))
      {
        $media = Media::find($request->uploaded_icon_id);
        $nav = Nav::find($request->nav_id);
        $nav->media()->sync($media);
      }

      return response()->json([
        'status' => true,
        'data' => true,
      ]);

    }

    public function storeMegaMenu(Request $request)
    {

      $messages = [
        'required' => 'وارد کردن نام مگا‌منو اجباری است.',
      ];

      $validator = Validator::make($request->all(), [
        'megamenu_name' => 'required',
        'megamenu_link' => 'nullable|string',
        'uploaded_icon_id' => 'nullable',
      ], $messages);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json([
          'status' => false,
          'data' => [
            'errors' => $errors,
          ]
        ], 400);
      }

      if ((Nav::max('position')) || (Nav::max('position') == 0)) {
        $position = Nav::max('position') + 1;
      } else {
        $position = 0;
      }

      $created_nav = Nav::create([
        'name' => $request->megamenu_name,
        'link' => $request->nav_link,
        'type' => 'megamenu',
        'position' => $position,
        'location_id' => $request->location_id,
        'parent_id' => $request->nav_id,
      ]);

      if (!is_null($request->uploaded_icon_id))
      {
        $media = Media::find($request->uploaded_icon_id);
          $created_nav->media()->attach($media);
      }

      return response()->json([
        'status' => true,
        'data' => true,
      ]);

    }

    public function reloadMegamenuTable(Request $request)
    {
      $nav = Nav::find($request->nav_id);
      $items = Nav::where('parent_id', $request->nav_id)->paginate(10000);

      return View::make('staffnav::ajax.reload-megamenu-table', compact('items', 'nav'));
    }

    public function deleteItem(Request $request)
    {
      Nav::find($request->id)->delete();

      $nav = Nav::find($request->nav_id);
      $items = Nav::where('parent_id', $request->nav_id)->paginate(10000);

      return View::make('staffnav::ajax.reload-megamenu-table', compact('items', 'nav'));
    }


}
