<?php

namespace Modules\Staff\Brand\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Category\Models\Media;
use Modules\Staff\Brand\Models\Brand;


class StaffBrandController extends Controller
{
    public function createPage()
    {
        $categories = Category::all();
        return view('staffbrand::brands', compact('categories'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'en_name' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'slug' => 'required',
            'type' => 'nullable',
            'image' => 'required',
        ]);

        if ($validator->passes())
        {
            foreach ($request->categories as $category)
            {
                Brand::create([
                    'name' => $request->name,
                    'en_name' => $request->en_name,
                    'description' => $request->description,
                    'category_id' => $category,
                    'slug' => $request->slug,
                    'type' => $request->type,
                    'image_id' => $request->image,
                ]);
            }

        }
    }

    public function reloadAjax(Request $request)
    {
        $categories = Category::all();
        return View::make("staffbrand::defualt-box", compact('categories'));
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
