<?php

namespace Modules\Staff\Rating\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Staff\Rating\Http\Requests\StaffRatingRequest;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Rating\Models\Rating;


class StaffRatingController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('stafftype::index', compact('categories'));
    }

    public function store(Request $request)
    {
        if(!is_null($request->type_fields))
        {
            foreach (array_reverse(array_filter($request->type_fields)) as $key => $rating) {

                $insert_type = Rating::create([
                    'name' => $rating,
                ]);

                $category = Category::find($request->category);
                $category->ratings()->save($insert_type);
            }
        }

//        if ($request->database_data) {
        return $this->update($request);
        Log::info('go to update method');
//        }

    }

    public function update($request)
    {
        if (isset($request->database_data) && !is_null($request->database_data)){
            $data = array_filter($request->database_data);
            foreach ($data as $key => $value){

                if ($value == 'deleted'){
                    Category::find($data)->ratings()->where('id', $key)->delete();
                }

                if (!is_null($value)){
                    Rating::find($key)->update([
                        'name' => $value,
                    ]);
                } else {
                    Category::find($request->category)->ratings()->where('id', $key)->delete();
                }
            }
        }
    }

    public function childCatsLoader(Request $request)
    {
        $categories = Category::get()->unique('name');
        $id = $request->id;
        // حل مشکل ستون های خالی
        if (count(Category::where('parent_id', $id)->get()) !== 0)
        {
            return View::make("stafftype::layouts.ajax.category-box.child", compact('id', 'categories'));
        }
    }

    public function breadcrumbLoader(Request $request)
    {
        $category = Category::find($request->id);
        return View::make("stafftype::layouts.ajax.category-box.breadcrumb", compact('category'));
    }

    public function mainCatReloader(Request $request)
    {
        $categories = Category::get()->unique('name');
        return View::make("stafftype::layouts.ajax.category-box.main", compact('categories'));
    }

    public function ajaxSearch(Request $request)
    {
        $categories = Category::query()->where('name', 'LIKE', "%{$request->search}%")->get();

        if($categories)
        {
            return View::make("stafftype::layouts.ajax.category-box.search", compact('categories'));
        }
    }

    public function getData(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        if ($category->ratings())
        {
            return View::make('stafftype::ajax-content', compact('category'));
        }
        else
        {
            return response()->json('saved data not found', 200);
        }
    }

}
