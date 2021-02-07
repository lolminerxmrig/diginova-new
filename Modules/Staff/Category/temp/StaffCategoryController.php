<?php

namespace Modules\Staff\Category\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
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

        return view('staffcategory::index', compact('categories', 'media'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('staffcategory::create', compact('categories'));
    }

    public function store(StaffCategoryRequest $request)
    {
        $exist_category = Category::where('name', $request->name)->get();
        if(count($exist_category) == 0){
            $category = Category::create([
                'name' => $request->name,
                'en_name' => $request->en_name,
                'slug' => $request->slug,
                'parent_id' => $request->parent_id,
            ]);

            if ($request->image !== 'not_required') {
                Media::find($request->image)->categories()->attach($category);
                Media::find($request->image)->update([
                    'status' => 1,
                ]);
            }
        }
    }

    public function getData(Request $request)
    {
        $cat = Category::find($request->id);
        $cat_media = $cat->media()->first();
//        $categories = Category::all();
        if ($cat_media) {
            return response()->json([
//                'options' => View::make('staffcategory::select-cat-loader', compact('categories', 'cat'))->render(),
                'image' => View::make('staffcategory::layouts.ajax.image-box.uploaded-image', compact('cat_media'))->render(),
                'category' => $cat,
            ], 200);
        } else {
            return response()->json([
//                'options' => View::make('staffcategory::select-cat-loader', compact('categories', 'cat'))->render(),
                'category' => $cat,
            ], 200);
        }


    }

    public function update(StaffCategoryRequest $request)
    {

        $category = Category::find($request->id)->update([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'slug' => $request->slug,
        ]);

        Mediable::where('mediable_type', 'Category')->where('mediable_id', $request->id)->delete();

        if ($request->image)
        {
            $old_img = Mediable::where('media_id', $request->image)->first();
            if($old_img == null)
            {
                if (Category::find($request->id)->media()->first() !== null){
                    Category::find($request->id)->media()->first()->delete();
                }

                Media::find($request->image)->update([
                    'status' => 1,
                ]);


                $this_cat = Category::find($request->id)->id;
                Media::find($request->image)->categories()->attach($this_cat);
            }
        }
    }

    public function childCatsLoader(Request $request)
    {
        $categories = Category::get()->unique('name');
        $id = $request->id;
        // حل مشکل ستون های خالی
        if (count(Category::where('parent_id', $id)->get()) !== 0) {
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
        if ($request->old_img) {
            $request->id = $request->old_img;
            $this->deleteImage($request);
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time() . '.' . $request->image->extension();
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);

//        if($request->update == 'true')
//        {
//            Mediable::where('mediable_type', 'Category')->where('mediable_id', $request->id)->delete();
//        }

        return View::make("staffcategory::layouts.ajax.image-box.upload-image",
            compact('input', 'imageSize', 'request', 'media'));
    }


    public function uploadUpdate(StaffCategoryImageRequest $request)
    {
        $validated = $request->validated();
        if ($request->old_img) {
            $request->id = $request->old_img;
            if(Mediable::where('media_id', $request->old_img)->first() == null)
            {
                $this->deleteImage($request);
            }
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time() . '.' . $request->image->extension();
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);



//        if($request->update == 'true')
//        {
//            Mediable::where('mediable_type', 'Category')->where('mediable_id', $request->id)->delete();
//        }

        return View::make("staffcategory::layouts.ajax.image-box.upload-image",
            compact('input', 'imageSize', 'request', 'media'));
    }


    public function deleteImage(Request $request)
    {
        $media = Media::find($request->id);
        $user_id = auth()->guard('staff')->user()->id;

        if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id)) {
            unlink(public_path("$media->path/") . $media->name);
            $media->delete();
        }
    }

}
