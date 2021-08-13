<?php

namespace Modules\Staff\Brand\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

use Modules\Staff\Brand\Http\Requests\StaffBrandImageRequest;
use Modules\Staff\Brand\Http\Requests\StaffBrandRequest;
use Modules\Staff\Category\Models\Categorizable;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Brand\Models\Brand;
use App\Models\Media;

class StaffBrandController extends Controller
{
    public function index()
    {
        $brands = Brand::distinct('name')->orderBy('created_at', 'desc')->paginate(10);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        $media = Media:: all();
        $categories = Category:: all();
        return view('staffbrand::index', compact('brands', 'media', 'categories', 'trashed_brands'));
    }

    public  function ajaxPagination(Request $request)
    {
        if ($request->paginatorNum){
            $paginatorNum = $request->paginatorNum;
        }
        else {
            $paginatorNum = 1;
        }

        $brands = Brand::distinct('name')->orderBy('created_at', 'desc')->paginate($paginatorNum);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        $media = Media::all();
        $categories = Category::all();

        $pageType = 'index';

        return View::make('staffbrand::ajax-content',
            compact('brands', 'media', 'categories', 'pageType', 'trashed_brands'))->render();
    }

    public function filterByType(Request $request)
    {
        if ($request->search_type == 'all')
        {
            return $this->ajaxPagination($request);
        }

        $brands = Brand::where('type', 1)->distinct('name')->orderBy('created_at', 'desc')->paginate(10);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        $pageType = 'only_special';

        if ($brands){
          return View::make('staffbrand::ajax-content', compact('brands', 'pageType', 'trashed_brands'));
        }
    }

    public function create()
    {
        $categories = Category::orderBy('created_at', 'asc')->get()->unique('name');
        return view('staffbrand::create', compact('categories'));
    }

    public function edit($brand)
    {
        $brand = Brand::where('en_name', $brand)->firstOrFail();
        $brands = Brand::all();
        $categories = Category::orderBy('created_at', 'asc')->get()->unique('name');
        $media = Media:: all();
        return view('staffbrand::edit', compact('categories', 'brand', 'brands', 'media'));
    }

    public function store(StaffBrandRequest $request)
    {
        // تبدیل آرایه ای از اعداد با فرمت رشته به آرایه عددی
        $categories = array_map(function($value) {
            return intval($value);
        }, $request->categories);

        $brand = Brand::create([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'description' => $request->description,
            'slug' => $request->slug,
        ]);

        foreach ($categories as $category)
        {
            $this_cat = Category::find($category);
            $brand->categories()->attach($this_cat);
        }

        if ($request->image !== 'not_required' && $request->image !== "0")
        {
            Media::find($request->image)->brands()->attach($brand);
            Media::find($request->image)->update([
                'status' => 1,
            ]);
        }
    }

    public function uploadImage(StaffBrandImageRequest $request)
    {
        if ($request->old_img){
            $request->id = $request->old_img;
            $this->deleteImage($request);
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time().'.'.$request->image->extension();
        $request->image->move(public_path('media/brands'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/brands',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);


        return View::make("staffbrand::layouts.ajax.image-box.upload-image" ,
            compact('input', 'imageSize', 'request' , 'media'));
    }

    public function uploadUpdate(StaffBrandImageRequest $request)
    {
        if ($request->old_img) {
            $request->id = $request->old_img;
            if(Mediable::where('media_id', $request->old_img)->first() == null)
            {
                $this->deleteImage($request);
            }
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time() . '.' . $request->image->extension();
        $request->image->move(public_path('media/brands'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/brands',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);

        return View::make("staffbrand::layouts.ajax.image-box.upload-image",
            compact('input', 'imageSize', 'request', 'media'));
    }

    public function deleteImage(Request $request)
    {
        $media = Media::find($request->id);
        $user_id = auth()->guard('staff')->user()->id;

        if(($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
        {
            unlink(public_path("$media->path/"). $media->name);
            $media->delete();
        }
    }

    public function trash()
    {
        $brands = Brand::onlyTrashed()->paginate(10);
        return view('staffbrand::trash', compact('brands'));
    }

    public function trashPagination(){
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffbrand::ajax-trash-content', compact('brands'));
    }

    public function moveToTrash(Request $request)
    {
        Brand::find($request->id)->delete();
        return $this->ajaxPagination($request);
    }

    public function restoreFromTrash(Request $request)
    {
        Brand::onlyTrashed()->find($request->id)->restore();
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffbrand::ajax-trash-content', compact('brands'));
    }

    public function removeFromTrash(Request $request)
    {
        $brand = Brand::withTrashed()->find($request->id);
        $media = $brand->media()->first();
        $user_id = auth()->guard('staff')->user()->id;
        if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id)) {
            unlink(public_path("$media->path/") . $media->name);
            $media->delete();
            Mediable::where('mediable_type', 'Brand')->where('mediable_id', $request->id)->delete();
        }

        Categorizable::where('categorizable_type', 'Brand')->where('categorizable_id', $request->id)->delete();
        if($brand->products)
        {
            foreach ($brand->products as $product)
            {
                $product->update([
                   'brand_id' => 1,
                ]);
            }
        }
        $brand->forceDelete();
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffbrand::ajax-trash-content', compact('brands'));

    }

    public function brandSearch(Request $request, Brand $brands)
    {
        $search_keyword = $request->search_keyword;

        $brands = Brand::query()->where('name', 'LIKE', "%{$search_keyword}%")->paginate(10);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        if ($brands) {
            $pageType = 'brandSearch';
            return View::make("staffbrand::ajax-content",
                compact('brands', 'pageType', 'trashed_brands'));
        }
    }

    public function brandCatSearch(Request $request, Brand $brands)
    {
        $search_keyword = $request->search_keyword;

        $brands = $brands->whereHas('categories', function ($query) use ($search_keyword) {
            $query->where('name', 'LIKE', '%' . $search_keyword . '%');
        })->paginate(10);

        if ($brands) {
            $pageType = 'brandCatSearch';
            $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            return View::make("staffbrand::ajax-content", compact('brands', 'pageType', 'trashed_brands'));
        }
    }




  public function update(StaffBrandRequest $request)
  {
    $categories = string_to_int_array($request->categories);
    $brand = Brand::findOrFail($request->id);
    $user_id = auth()->guard('staff')->user()->id;
    $media = $brand->media()->first();

    $brand->update([
      'name' => $request->name,
      'en_name' => $request->en_name,
      'description' => $request->description,
      'slug' => $request->slug,
    ]);

    // برند عکس داشته و عکسش تغییر کرده
    if ($brand->media()->exists() && $request->image && intval($request->image) !== $brand->media()->first()->id) {
      // حذف عکس قبلی
      if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
      {
        unlink(public_path("$media->path/") . $media->name);
        $media->delete();
        $brand->media()->detach();
      }

      // عکس جدید
      $new_image = Media::findOrFail($request->image);
      $brand->media()->attach($new_image);
      $brand->media()->update([
        'status' => 1,
      ]);
    }

    // برند عکس داشته و عکسش پاک شده
    if ($brand->media()->exists() && $request->image == 0) {
      if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
      {
        unlink(public_path("$media->path/") . $media->name);
        $media->delete();
        $brand->media()->detach();
      }
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

    // حدف ریلیشن دسته بندی ها و ایجاد دوباره ریلیشن ها
    $brand->categories()->detach();
    foreach ($categories as $category)
    {
      $this_cat = Category::find($category);
      $brand->categories()->attach($this_cat);
    }

  }





}
