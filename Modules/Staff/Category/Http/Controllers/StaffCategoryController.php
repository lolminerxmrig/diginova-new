<?php

namespace Modules\Staff\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Modules\Staff\Category\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Modules\Staff\Category\Models\Media;
use Illuminate\Support\Facades\Auth;


class StaffCategoryController extends Controller
{
    public function createPage()
    {
        $categories = Category::all();
        return view('staffcategory::categories', compact('categories'));
    }

    public function categoryAjax(Request $request)
    {
        $categories = Category::all();
        $id = $request->id;

        if (count(Category::where('parent_id', $id)->get()) !== 0)
        {
            return View::make("staffcategory::category-loop", compact('id', 'categories'));
        }
    }

    public function breadcrumbAjax(Request $request)
    {
        $category = Category::find($request->id);
        return View::make("staffcategory::breadcrumb", compact('category'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
            'en_name' => 'required',
            'image' => 'required',
            'parent_id' => 'required',
        ]);

        if ($validator->passes())
        {
            Category::create([
                'name' => $request->name,
                'en_name' => $request->en_name,
                'image_id' => $request->image,
                'slug' => $request->slug,
                'parent_id' => $request->parent_id,
            ]);
        }
    }

    public function searchAjax(Request $request)
    {
        $categories = Category::query()
            ->where('name', 'LIKE', "%{$request->search}%")
            ->get();

        if($categories)
        {
            return View::make("staffcategory::search", compact('categories'));
        }
    }

    public function reloadAjax(Request $request)
    {
        $categories = Category::all();
        return View::make("staffcategory::defualt-box", compact('categories'));
    }

    public function uploadImage(Request $request)
    {
        $imageSize = $request->file('image')->getSize();

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpg|max:2048',
        ]);

        if ($validator->passes())
        {
            // convert to blob
            // $path = $request->file('image')->getRealPath();
            // $image = file_get_contents($path);
            // $filename = time().'.'.$request->image->extension();
            // $base64 = base64_encode($image);

            //save file to "pubic/media/images" folder
            $input = $request->all();
            $input['image'] = time().'.'.$request->image->extension();
            $request->image->move(public_path('media/images'), $input['image']);

            $media = Media::create([
                'name' => $input['image'],
                'path' => 'media/images',
                'person_id' => auth()->guard('staff')->user()->id,
                'person_role' => 'staff',
            ]);
            return View::make("staffcategory::upload-image" , compact('input', 'imageSize', 'request' , 'media'));
        }
        else {
            return response()->json(['error' => 'فرمت تصویر غیر مجاز است'], 400);
        }
    }

    public function deleteImage(Request $request)
    {
        $media = Media::find($request->id);
        if(($media->person_role == 'staff') && ($media->person_id ==  auth()->guard('staff')->user()->id)){
            unlink(public_path("$media->path/"). $media->name);
            $media->delete();
        }
    }


}
