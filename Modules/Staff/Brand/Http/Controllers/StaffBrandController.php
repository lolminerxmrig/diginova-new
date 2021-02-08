<?php

namespace Modules\Staff\Brand\Http\Controllers;

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
            $paginatorNum = 10;
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
        else {
            $brands = Brand::where('type', 1)->distinct('name')->orderBy('created_at', 'desc')->paginate(10);
            $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            $pageType = 'only_special';

            if ($brands){
                return View::make('staffbrand::ajax-content', compact('brands', 'pageType', 'trashed_brands'));
            }

        }
    }

    public function create()
    {
        $categories = Category::get()->unique('name');
        return view('staffbrand::create', compact('categories'));
    }

    public function edit($brand)
    {
        $brand = Brand::where('en_name', $brand)->first();
        $brands = Brand::all();
        $categories = Category::get()->unique('name');
        $media = Media:: all();
        return view('staffbrand::edit', compact('categories', 'brand', 'brands', 'media'));
    }

    public function update(StaffBrandRequest $request)
    {
        Brand::find($request->id)->update([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'description' => $request->description,
            'slug' => $request->slug,
        ]);

        $brand = Brand::find($request->id);

        Media::find($request->image)->brands()->attach($brand);
        Media::find($request->image)->update([
            'status' => 1,
        ]);

        $brand->categories()->delete();


        foreach ($request->categories as $key => $id)
        {
            $category = Category::find($id);
//            $brand->categories()->attach($category);

            Categorizable::create([
                'category_id' => $id,
                'categorizable_type' => 'Brand',
                'categorizable_id' => $request->id,
            ]);
        }

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
//            'type' => $request->type,
        ]);

        foreach ($categories as $category)
        {
            Categorizable::create([
                'category_id' => $category,
                'categorizable_type' => 'Brand',
                'categorizable_id' => $brand->id,
            ]);
        }

        if ($request->image !== 'not_required')
        {
//            $first_brand = Brand::where('name', $request->name)->first()->id;

//            Media::find($request->image)->update([
//                'mediable_type' => 'brands',
//                'mediable_id' => $first_brand,
//            ]);

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
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);


        return View::make("staffbrand::upload-image" ,
            compact('input', 'imageSize', 'request' , 'media'));
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
        Brand::withTrashed()->find($request->id)->restore();
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffbrand::ajax-trash-content', compact('brands'));
    }

    public function removeFromTrash(Request $request)
    {
        Brand::withTrashed()->find($request->id)->forceDelete();
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
        })->paginate(5);

        if ($brands) {
            $pageType = 'brandCatSearch';
            $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            return View::make("staffbrand::ajax-content", compact('brands', 'pageType', 'trashed_brands'));
        }
    }

}
