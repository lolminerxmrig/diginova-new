<?php

namespace Modules\Staff\Type\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Staff\Type\Http\Requests\StaffTypeRequest;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Type\Models\Type;


class StaffTypeController extends Controller
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
            foreach (array_reverse(array_filter($request->type_fields)) as $key => $type) {

                $insert_type = Type::create([
                    'name' => $type,
                ]);

                $category = Category::find($request->category);
                $category->types()->save($insert_type);
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
                Log::info('key: ' . $key);
                Log::info('value: ' . $value);

                if ($value == 'deleted'){
                    Category::find($data)->types()->where('id', $key)->delete();
                }

                if (!is_null($value)){
                    Type::find($key)->update([
                        'name' => $value,
                    ]);
                } else {
                    Log::info('is null: '. $key);

                    Category::find($request->category)->types()->where('id', $key)->delete();
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
//            return View::make("stafftype::child-cat-loaader", compact('id', 'categories'));
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
        if ($category->types())
        {
            return View::make('stafftype::ajax-content', compact('category'));
        }
        else
        {
            return response()->json('saved data not found', 200);
        }
    }

}
