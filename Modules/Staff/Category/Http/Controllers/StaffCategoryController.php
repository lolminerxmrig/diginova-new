<?php

namespace Modules\Staff\Category\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\View;
use Modules\Staff\Category\Http\Requests\StaffCategoryImageRequest;
use Modules\Staff\Category\Http\Requests\StaffCategoryRequest;
use Modules\Staff\Category\Models\Category;
use App\Models\Media;
use phpDocumentor\Reflection\Php\Factory\Type;
use Modules\Staff\Variant\Models\VariantGroup;


class StaffCategoryController extends Controller
{

  public function index()
  {
    $categories = Category::orderBy('created_at', 'asc')->get();
    $media = Media::all();

    return view('staffcategory::index', compact('categories', 'media'));
  }

  public function create()
  {
    $categories = Category::orderBy('created_at', 'asc')->get();
    return view('staffcategory::create', compact('categories'));
  }

  public function store(StaffCategoryRequest $request)
  {

    Category::updateOrCreate(['en_name' => $request->en_name],
    [
      'name' => $request->name,
      'slug' => $request->slug,
      'parent_id' => $request->parent_id,
      'description' => $request->description,
    ]);

    $category = Category::where('en_name', $request->en_name)->first();

    if (Media::where('id', $request->image)->exists()) {
      Media::find($request->image)->categories()->attach($category);
      Media::find($request->image)->update([
        'status' => 1,
      ]);
    }

    if (VariantGroup::whereId(1)->exists())
    {
      $variantGroup = VariantGroup::find(1);
      $category->variantGroup()->attach($variantGroup);
    }


  }

  public function getData(Request $request)
  {

    $category = Category::find($request->id);

    if ($category->media()->exists()) {
      $cat_media = $category->media()->first();
      return response()->json([
        'image' => View::make('staffcategory::layouts.ajax.image-box.uploaded-image', compact('cat_media'))->render(),
        'category' => $category,
      ], 200);
    }

    return response()->json([
      'category' => $category,
    ], 200);

  }

  public function update(Request $request)
  {

    $user_id = auth()->guard('staff')->user()->id;
    $category = Category::find($request->id);
    $media = ($category->media()->exists()) ? $category->media()->first() : null;

    $category->update([
      'name' => $request->name,
      'en_name' => $request->en_name,
      'slug' => $request->slug,
      'description' => $request->description,
    ]);

    if ($request->image_id !== null && $media !== null){
      $this->deleteImage($category->media()->first()->id);
      $category->media()->detach();
    }

    if ($request->image_id !== null) {
      Media::find($request->image_id)->categories()->attach($category->id);
      Media::find($request->image_id)->update([
        'status' => 1,
      ]);
    }

    if ($request->image_id == null && $media !== null){
      $request->id =  $category->media()->first()->id;
      $category->media()->detach();
      $this->deleteImage($request);
    }

  }

  public function childCatsLoader(Request $request)
  {
    $categories = Category::orderBy('created_at', 'asc')->get()->unique('name');
    $id = $request->id;
    // حل مشکل ستون های خالی
    if (Category::where('parent_id', $id)->exists()) {
      return View::make("staffcategory::layouts.ajax.category-box.child", compact('id', 'categories'));
    }
  }

  public function breadcrumbLoader(Request $request)
  {
    $category = Category::find($request->id);
    return View::make("staffcategory::layouts.ajax.category-box.breadcrumb", compact('category'));
  }

  public function mainCatReloader(Request $request)
  {
    $categories = Category::orderBy('created_at', 'asc')->get()->unique('name');
    return View::make("staffcategory::layouts.ajax.category-box.main", compact('categories'));
  }

  public function ajaxSearch(Request $request)
  {
    $categories = Category::query()->where('name', 'LIKE', "%{$request->search}%")->get();
    return View::make("staffcategory::layouts.ajax.category-box.search", compact('categories'));
  }

  public function deleteImage(Request $request)
  {

    $media = Media::find($request->id);
    $user_id = auth()->guard('staff')->user()->id;

    if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
    {
      unlink(public_path("$media->path/") . $media->name);
      $media->delete();
    }

  }

  public function destroy(Request $request)
  {
    $seleted_category = Category::find($request->id);
    $this->deleteSubCategory($seleted_category->id);

    if ($seleted_category->media()->exists())
    {
      $media = $seleted_category->media()->first();
      unlink(public_path("$media->path/") . $media->name);
      $seleted_category->media()->detach();
      $seleted_category->media()->delete();
    }

    $seleted_category->delete();
  }

  public function deleteSubCategory($cat_id)
  {
    $sub_categories = Category::where('parent_id', $cat_id)->get();
    foreach ($sub_categories as $sub_category) {
      $sub_category_id = $sub_category->id;

      if ($sub_category_id->media()->exists())
      {
        $media = $sub_category_id->media()->first();
        unlink(public_path("$media->path/") . $media->name);
        $sub_category_id->media()->detach();
        $sub_category_id->media()->delete();
      }
      $sub_category->delete();

      if (Category::where('parent_id', $sub_category_id)->exists()) {
        $this->deleteSubCategory($sub_category_id);
      }
    }
  }

  public function uploadImage(Request $request)
  {

    if ($request->old_img) {
      $request->id = $request->old_img;

      if (isset($request->category_id)) {
        Category::find($request->category_id)->media()->detach();
      }

      $this->deleteImage($request);
    }

    $imageSize = $request->file('image')->getSize();
    $imageExtension = $request->file('image')->extension();

    $input['image'] = time() . '.' . $imageExtension;
    $request->file('image')->move(public_path('media/categories'), $input['image']);

    $media = Media::create([
      'name' => $input['image'],
      'path' => 'media/categories',
      'person_id' => auth()->guard('staff')->user()->id,
      'person_role' => 'staff' ,
    ]);

    return View::make("staffcategory::layouts.ajax.image-box.upload-image",
      compact('input', 'imageSize', 'request', 'media'));
  }

}
