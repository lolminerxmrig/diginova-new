<?php

namespace Modules\Staff\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\View;
use Modules\Staff\Category\Http\Requests\StaffCategoryImageRequest;
use Modules\Staff\Category\Http\Requests\StaffCategoryRequest;
use Modules\Staff\Category\Models\Categoriable;
use Modules\Staff\Category\Models\Category;
use App\Models\Media;


class StaffCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $media = Media:: all();
        $trashed_categories = Category::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('staffcategory::index', compact('categories', 'media', 'trashed_categories'));
    }

    public function create()
    {
        $categories = Category::get()->unique('name');
        return view('staffcategory::create', compact('categories'));
    }

    public function store(StaffCategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        if ($request->image !== 'not_required')
        {
            Media::find($request->image)->update([
                'mediable_type' => 'categories',
                'mediable_id' => $category->id,
            ]);
        }
    }

    public function getData(Request $request)
    {
        $cat= Category::find($request->id);
        $cat_media = Category::find($request->id)->media;
        $categories = Category::all();
        if ($cat_media)
        {
            return response()->json([
                'options' => View::make('staffcategory::select-cat-loader', compact('categories', 'cat'))->render(),
                'image' => View::make('staffcategory::uploaded-image', compact('cat_media'))->render(),
                'category' => $cat,
            ], 200);
        }
        else
        {
            return response()->json([
                'options' => View::make('staffcategory::select-cat-loader', compact('categories', 'cat'))->render(),
                'category' => $cat,
            ], 200);
        }



    }

    public function update(StaffCategoryRequest $request)
    {
        Category::find($request->id)->update([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        Media::where('mediable_type', 'categories')->where('mediable_id', $request->id)->delete();

        Media::where('id', $request->image)->update([
            'mediable_type' => 'categories',
            'mediable_id' => $request->id,
        ]);

    }

    public function childCatsLoader(Request $request)
    {
        $categories = Category::get()->unique('name');
        $id = $request->id;
        // حل مشکل ستون های خالی
        if (count(Category::where('parent_id', $id)->get()) !== 0)
        {
            return View::make("staffcategory::layouts.ajax.category-box.child", compact('id', 'categories'));
        }
    }

    public function breadcrumbLoader(Request $request)
    {
        $category = Category::find($request->id);
        return View::make("staffcategory::ajax.layouts.breadcrumb", compact('category'));
    }

    public function mainCatReloader(Request $request)
    {
        $categories = Category::get()->unique('name');
        return View::make("staffcategory::layouts.ajax.category-box.main", compact('categories'));
    }

    public function ajaxSearch(Request $request)
    {
        $categories = Category::query()->where('name', 'LIKE', "%{$request->search}%")->get();

        return View::make("staffcategory::layouts.ajax.category-box.search", compact('categories'));
    }

    public function uploadImage(StaffCategoryImageRequest $request)
    {
        if ($request->old_img){
            $request->id = $request->old_img;
            $this->deleteImage($request);
        }

        $imageSize = $request->file('image')->getSize();

        // convert to blob
        // $path = $request->file('image')->getRealPath();
        // $image = file_get_contents($path);
        // $filename = time().'.'.$request->image->extension();
        // $base64 = base64_encode($image);

        $input['image'] = time().'.'.$request->image->extension();
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);

        return View::make("staffcategory::upload-image" ,
            compact('input','imageSize', 'request' , 'media'));
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
        $categories = Category::onlyTrashed()->paginate(1);
        return view('staffcategory::trash', compact('categories'));
    }

    public function trashPagination(){
        $categories = Category::onlyTrashed()->paginate(10);
        return View::make('staffcategory::ajax-trash-content', compact('categories'));
    }

    public function moveToTrash(Request $request)
    {
        Category::find($request->id)->delete();
    }

    public function restoreFromTrash(Request $request)
    {
        Category::withTrashed()->find($request->id)->restore();
        $categories = Category::onlyTrashed()->paginate(10);
        return View::make('staffcategory::ajax-trash-content', compact('categories'));
    }

    public function removeFromTrash(Request $request)
    {
        Category::withTrashed()->find($request->id)->forceDelete();
        $categories = Category::onlyTrashed()->paginate(10);
        return View::make('staffcategory::ajax-trash-content', compact('categories'));
    }

}
