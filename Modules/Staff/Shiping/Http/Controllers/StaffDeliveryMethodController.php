<?php

namespace Modules\Staff\Shiping\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Shiping\Models\DeliveryMethodGroup;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Shiping\Models\DeliveryMethod;
use Modules\Staff\Shiping\Models\DeliveryMethodLocation;
use App\Models\Media;
use Illuminate\Support\Facades\View;

class StaffDeliveryMethodController extends Controller
{

  public function index()
  {
    $delivery_methods = DeliveryMethod::paginate(100);
    return view('staffdelivery::deliveryMethod.index', compact('delivery_methods'));
  }

  public function edit($id)
  {
    $delivery_method = DeliveryMethod::find($id);
    return view('staffdelivery::deliveryMethod.edit', compact('delivery_method'));
  }



//  public function navs($id)
//  {
//    $nav_location = DeliveryMethodLocation::find($id);
//    $navs = $nav_location->navs()->orderBy('name', 'asc')->paginate(1000000);
//
//    return view('staffdelivery::navs', compact('navs', 'nav_location'));
//  }
//
//  public function UploadImage(Request $request)
//  {
//    $imageExtension = $request->image->extension();
//
//    $input['image'] = time() . '.' . $imageExtension;
//    $request->image->move(public_path('media/images'), $input['image']);
//
//    $media = Media::create([
//      'name' => $input['image'],
//      'path' => 'media/images',
//      'person_id' => auth()->guard('staff')->user()->id,
//      'person_role' => 'staff' ,
//    ]);
//
//    $settings = Setting::select('name', 'value')->get();
//    $site_url = $settings->where('name', 'site_url')->first()->value;
//
//    return response()->json([
//      'status' => true,
//      'data' => [
//        'id' => "$media->id",
//        'url' => "$site_url/$media->path/$media->name",
//        'tempFile' => true,
//        'slot' => null,
//      ]
//    ]);
//  }
//
//  public function storeDeliveryMethod(Request $request)
//  {
//
//    $messages = [
//      'unique' => 'نام فهرست تکراری است',
//    ];
//
//    $validator = Validator::make($request->all(), [
//      'nav_name' => 'required',
//      'nav_link' => 'nullable|string',
//      'nav_type' => 'required',
//      'uploaded_icon_id' => 'nullable',
//    ], $messages);
//
//    if ($validator->fails()) {
//      $errors = $validator->errors();
//      return response()->json([
//        'status' => false,
//        'data' => [
//          'errors' => $errors,
//        ]
//      ], 400);
//    }
//
//    if ((DeliveryMethod::max('position')) || (DeliveryMethod::max('position') == 0)) {
//      $position = DeliveryMethod::max('position') + 1;
//    } else {
//      $position = 0;
//    }
//
//    $created_nav = DeliveryMethod::create([
//      'name' => $request->nav_name,
//      'link' => $request->nav_link,
//      'type' => $request->nav_type,
//      'position' => $position,
//      'location_id' => $request->location_id,
//    ]);
//
//    if (!is_null($request->uploaded_icon_id))
//    {
//      $media = Media::find($request->uploaded_icon_id);
//      $created_nav->media()->attach($media);
//    }
//
//    return response()->json([
//      'status' => true,
//      'data' => true,
//    ]);
//
//  }
//
//  public function statusDeliveryMethod(Request $request)
//  {
//    DeliveryMethod::where('id',$request->nav_id)->update([
//      'status' => $request->status,
//    ]);
//  }
//
//  public function navChangePosition(Request $request)
//  {
//    foreach ($request->item as $postion => $id) {
//      DeliveryMethod::where('id', $id)->update([
//        'position' => $postion,
//      ]);
//    }
//  }
//
//  public function reloadDeliveryMethodsTable(Request $request)
//  {
//    $navs = DeliveryMethod::where('location_id', $request->location_id)->paginate(10000);
//    return View::make('staffdelivery::ajax.reload-nav-table', compact('navs'));
//  }
//
//  public function deleteDeliveryMethod(Request $request)
//  {
//    DeliveryMethod::find($request->id)->delete();
//
//    $navs = DeliveryMethod::where('location_id', $request->nav_location)->paginate(10000);
//    return View::make('staffdelivery::ajax.reload-nav-table', compact('navs'));
//  }
//
//  public function navItems($id)
//  {
//    $nav = DeliveryMethod::find($id);
//    $items = DeliveryMethod::where('parent_id', $id)->paginate(100000);
//    return view('staffdelivery::navItems', compact('items', 'nav'));
//  }
//
//  public function updateDeliveryMethod(Request $request)
//  {
//
//    $messages = [
//      'unique' => 'نام فهرست تکراری است',
//      'required' => 'وارد کردن نام فهرست ضروری است',
//    ];
//
//    $validator = Validator::make($request->all(), [
//      'nav_name' => 'required',
//      'nav_link' => 'nullable|string',
//      'uploaded_icon_id' => 'nullable',
//    ], $messages);
//
//    if ($validator->fails()) {
//      $errors = $validator->errors();
//      return response()->json([
//        'status' => false,
//        'data' => [
//          'errors' => $errors,
//        ]
//      ], 400);
//    }
//
//    DeliveryMethod::where('id', $request->nav_id)->update([
//      'name' => $request->nav_name,
//      'link' => $request->nav_link,
//    ]);
//
//    if (!is_null($request->uploaded_icon_id))
//    {
//      $media = Media::find($request->uploaded_icon_id);
//      $nav = DeliveryMethod::find($request->nav_id);
//      $nav->media()->sync($media);
//    }
//
//    return response()->json([
//      'status' => true,
//      'data' => true,
//    ]);
//
//  }
//
//  public function storeMegaMenu(Request $request)
//  {
//
//    $messages = [
//      'required' => 'وارد کردن نام مگا‌منو اجباری است.',
//    ];
//
//    $validator = Validator::make($request->all(), [
//      'megamenu_name' => 'required',
//      'megamenu_link' => 'nullable|string',
//      'uploaded_icon_id' => 'nullable',
//    ], $messages);
//
//    if ($validator->fails()) {
//      $errors = $validator->errors();
//      return response()->json([
//        'status' => false,
//        'data' => [
//          'errors' => $errors,
//        ]
//      ], 400);
//    }
//
//    if ((DeliveryMethod::max('position')) || (DeliveryMethod::max('position') == 0)) {
//      $position = DeliveryMethod::max('position') + 1;
//    } else {
//      $position = 0;
//    }
//
//    $created_nav = DeliveryMethod::create([
//      'name' => $request->megamenu_name,
//      'link' => $request->nav_link,
//      'type' => 'megamenu',
//      'position' => $position,
//      'location_id' => $request->location_id,
//      'parent_id' => $request->nav_id,
//    ]);
//
//    if (!is_null($request->uploaded_icon_id))
//    {
//      $media = Media::find($request->uploaded_icon_id);
//      $created_nav->media()->attach($media);
//    }
//
//    return response()->json([
//      'status' => true,
//      'data' => true,
//    ]);
//
//  }
//
//  public function reloadMegamenuTable(Request $request)
//  {
//    $nav = DeliveryMethod::find($request->nav_id);
//    $items = DeliveryMethod::where('parent_id', $request->nav_id)->paginate(10000);
//
//    return View::make('staffdelivery::ajax.reload-megamenu-table', compact('items', 'nav'));
//  }
//
//  public function deleteItem(Request $request)
//  {
//    DeliveryMethod::find($request->id)->delete();
//
//    $nav = DeliveryMethod::find($request->nav_id);
//    $items = DeliveryMethod::where('parent_id', $request->nav_id)->paginate(10000);
//
//    return View::make('staffdelivery::ajax.reload-megamenu-table', compact('items', 'nav'));
//  }
//
//  public function storeMenus(Request $request)
//  {
//
//    // delete nav
//    if (isset($request->deleted_rows) && (!is_null($request->deleted_rows))) {
//      foreach ($request->deleted_rows as $deleted_row) {
//        DeliveryMethod::find($deleted_row)->delete();
//      }
//    }
//
//    // output: array clean position
//    $positions = str_replace('item[]=', '', $request->positions);
//    $positions = str_replace('&', ',', $positions);
//    $positions = explode(',', $positions);
//    $positions = array_map(function ($value) {
//      return intval($value);
//    }, $positions);
//
//    if (count($request->menu_names)) {
//
//      $i = 0;
//      foreach ($request->menu_names as $menu_name) {
//
//        if ($menu_name == null) {
//          $i++;
//          continue;
//        }
//
//        DeliveryMethod::updateOrCreate(['id' => $positions[$i]], [
//          'name' => $request->menu_names[$i],
//          'link' => $request->menu_links[$i],
//          'style' => isset($request->menu_styles) ? $request->menu_styles[$i] : null,
//          'position' => $i,
//          'type' => 'menu',
//          'parent_id' => $request->parent_id,
//        ]);
//
//        $i++;
//      }
//
//    }
//
//    return response()->json([
//      'status' => true,
//      'data' => true,
//    ]);
//
//  }
//
//  public function deleteIcon(Request $request)
//  {
//    $nav = DeliveryMethod::find($request->nav_id);
//    $media_id = $nav->media()->first()->id;
//    $nav->media()->detach();
//    Media::find($media_id)->delete();
//
//    return response()->json([
//      'status' => true,
//      'data' => true,
//    ]);
//  }
//
//  public function megamenuItems($id)
//  {
//    $nav = DeliveryMethod::find($id);
//    $items = DeliveryMethod::where('parent_id', $id)->paginate(100000);
//    return view('staffdelivery::megamenuItems', compact('items', 'nav'));
//  }

}
