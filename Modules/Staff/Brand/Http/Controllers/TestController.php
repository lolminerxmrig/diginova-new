<?php

namespace Modules\Staff\Brand\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

use Modules\Staff\Brand\Http\Requests\StaffBrandImageRequest;
use Modules\Staff\Brand\Http\Requests\StaffBrandRequest;
use Modules\Staff\Category\Models\Categorizable;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Brand\Models\Brand;
use App\Models\Media;

class TestController extends Controller
{

  public function update(StaffBrandRequest $request)
  {
    $brand = Brand::findOrFail($request->id);
    $user_id = auth()->guard('staff')->user()->id;
    $media = $brand->media()->first();

    // برند عکس داشته و عکسش تغییر کرده
    if ($brand->media()->exists() && $request->image && $request->image !== $brand->media()->first()->id) {
      // حذف عکس قبلی
      $brand->media()->detach();

      // عکس جدید
      $new_image = Media::findOrFail($request->image);
      $brand->media()->attach($new_image);
      $brand->media()->update([
        'status' => 1,
      ]);
    }

    // برند عکس داشته و عکسش پاک شده
    if ($brand->media()->exists() && $request->image == 0) {
      $brand->media()->detach();
    }

    // برند عکس نداشته و عکس براش آپلود شده
    if ($brand->media()->doesntExist() && $request->image) {
      // عکس جدید
      $new_image = Media::findOrFail($request->image);
      $brand->media()->attach($new_image);
      $brand->media()->update([
        'status' => 1,
      ]);
    }

  }

}
