<?php

namespace Modules\Staff\Attribute\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Staff\Attribute\Models\Attributable;
use Modules\Staff\Attribute\Models\Attribute;
use Modules\Staff\Attribute\Models\AttributeValue;
use Modules\Staff\Category\Models\Categorizable;
use Modules\Staff\Type\Http\Requests\StaffTypeRequest;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Type\Models\Type;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Unit\Models\Unit;


class StaffAttributeController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('staffattribute::index', compact('categories'));
    }

    public function edit($id)
    {
        $attributeGroup = AttributeGroup::where('id', $id)->firstOrFail();

        if (count($attributes = Attribute::where('group_id', $id)->get())) {
            $attributes = Attribute::where('group_id', $id)->get();
        } else {
            $attributes = collect();
        }

        $units = Unit::all();

        return view('staffattribute::edit', compact('attributeGroup', 'attributes', 'units'));
    }

    public function getData(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        if ($category->attributeGroups()) {
            return View::make('staffattribute::ajax-content', compact('category'));
        } else {
            return response()->json('saved data not found', 200);
        }
    }

    public function storeGroup(Request $request)
    {
        $messages = [
            'unique' => 'نام وارد شده تکراری است',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:attribute_groups',
            'description' => 'nullable|string',
            'category_id' => 'required|integer',
        ], $messages);


        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        } else {
            if ((AttributeGroup::max('position')) || (AttributeGroup::max('position') == 0)) {
                $position = AttributeGroup::max('position') + 1;
            } else {
                $position = 0;
            }

            $created_attrGroup = AttributeGroup::create([
                'name' => $request->name,
                'description' => $request->description,
                'position' => $position,
            ]);

            $category = Category::find($request->category_id);
            $category->attributeGroups()->save($created_attrGroup);
            return response()->json('', 200);
        }
    }

    public function childCatsLoader(Request $request)
    {
        $categories = Category::get()->unique('name');
        $id = $request->id;
        // حل مشکل ستون های خالی
        if (count(Category::where('parent_id', $id)->get()) !== 0) {
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

        if ($categories) {
            return View::make("stafftype::layouts.ajax.category-box.search", compact('categories'));
        }
    }

    public function indexChangePosition(Request $request)
    {
        foreach ($request->item as $postion => $id) {
            AttributeGroup::where('id', $id)->update([
                'position' => $postion,
            ]);
        }
    }

    public function deleteGroup(Request $request)
    {
        AttributeGroup::find($request->id)->delete();
    }

    public function statusGroup(Request $request)
    {
        AttributeGroup::where('id', $request->group_id)->update([
            'status' => $request->status,
        ]);
    }

    public function unitSelector()
    {
        $units = Unit::all();
        return view::make('staffattribute::layouts.ajax.unit-selector', compact('units'));
    }


//    public function store(Request $request)
//    {
//        // update attribute group
//        if (!is_null($request->group_name)) {
//            AttributeGroup::where('id', $request->category_id)->update([
//                'name' => $request->group_name,
//                'description' => $request->group_desc,
//            ]);
//        }
//
//        $i = 0;
//        if (isset($request->attr_names)) {
//            foreach ($request->attr_names as $attr_name) {
//
//                if ($attr_name == null) {
//                    $i++;
//                    continue;
//                }
//
//                $created_attr = Attribute::create([
//                    'name' => $request->attr_names[$i],
//                    'type' => $request->attr_types[$i],
//                    'is_required' => $request->attr_requireds[$i],
//                    'is_filterable' => $request->attr_filterables[$i],
//                    'is_favorite' => $request->attr_favorites[$i],
//                    'group_id' => $request->category_id,
//                ]);
//
//                $created_attr->categories()->attach($created_attr);
//
//                if (!is_null($request->attr_values[$i]) && ($request->attr_types[$i] == 3) || ($request->attr_types[$i] == 4)) {
//                    foreach (json_decode($request->attr_values[$i]) as $attr_value) {
//                        $val = [];
//                        foreach ($attr_value as $attr_val) {
//                            if (($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) && is_null($attr_val)) {
//                                continue;
//                            }
//
//                            $val[] = $attr_val;
//
//                            if (isset($val[0]) && !is_null($val[0])) {
//                                $value = new AttributeValue();
//                                $value->value = $val[0];
//                                $value->attribute_id = $created_attr->id;
//                                Attribute::find($created_attr->id)->values()->save($value);
//                            }
//
//                            $attr_group = AttributeGroup::find($request->category_id);
//                            $attr_group->attributes()->attach($created_attr->id);
//                        }
//                    }
//                }
//                $i++;
//            }
//        }
//    }


    public function store(Request $request)
    {

        // update attribute group
        if (!is_null($request->group_name)) {
            AttributeGroup::where('id', $request->category_id)->update([
                'name' => $request->group_name,
                'description' => $request->group_desc,
            ]);
        }

        // delete attribute
        if (isset($request->deleted_rows) && (!is_null($request->deleted_row))) {
            foreach ($request->deleted_rows as $deleted_row) {
                Attribute::find($deleted_row)->values()->delete();
                Attribute::find($deleted_row)->delete();
            }
        }

        // delete value
        if (isset($request->deleted_values)) {
            foreach ($request->deleted_values as $deleted_value) {
                AttributeValue::find($deleted_value)->delete();
            }
        }

        // output: array clean position
        $positions = str_replace('item[]=', '', $request->positions);
        $positions = str_replace('&', ',', $positions);
        $positions = explode(',', $positions);
        $positions = array_map(function ($value) {
            return intval($value);
        }, $positions);


        if (!is_null($request->attr_names) && count($request->attr_names)) {
            $i = 0;
            foreach ($request->attr_names as $attr_name) {
                if ($attr_name == null) {
                    $i++;
                    continue;
                } // if is null unit name ignore
                $type = $request->attr_types[$i];

                if (((($type == 3) || ($type == 4)) && (is_null($request->attr_values[$i])))) {
                    $i++;
                    continue;
                }

                if ($positions[$i] == 0) {

                    // اگه جدید بود
                    $created_attr = Attribute::create([
                        'name' => $attr_name,
                        'type' => $request->attr_types[$i],
                        'position' => $i,
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                        'is_favorite' => $request->attr_favorites[$i],
                        'group_id' => $request->category_id,
                    ]);


                    if (($request->attr_types[$i] == 1) || ($request->attr_types[$i] == 2)) {
                        $i++;
                        continue;
                    } elseif (($request->attr_types[$i] == 3) || ($request->attr_types[$i] == 4)) {
                        foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                            $val = [];
                            $val_position = 0;
                            foreach ($attr_value as $attr_val) {
                                $val[] = $attr_val;
                                if (isset($val[0]) && !is_null($attr_val)) {
                                    AttributeValue::create([
                                        'value' => $attr_val,
                                        'attribute_id' => $created_attr->id,
                                        'position' => $val_position,
                                    ]);
                                    $val_position++;
                                }
                            }
                        }
                    } elseif ($request->attr_types[$i] == 5) {
//                            Attribute::find($created_attr->id)::update([
//                                'unit_id' => '',
//                            ]);
                    }
                    $i++;
                } else {  // اگه سطر جدید نبود
                    Log::info('ffff');
                    Log::info($positions[$i]);

                    if (!Attribute::find($positions[$i])) {
                        $i++;
                        continue;
                    }

                    Attribute::find($positions[$i])->update([
                        'name' => $attr_name,
                        'type' => $request->attr_types[$i],
                        'position' => $i,
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                        'is_favorite' => $request->attr_favorites[$i],
                        'group_id' => $request->category_id,
                    ]);

                    $attr = Attribute::find($positions[$i]);

                    if ($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) {
                        $i++;
                        continue;
                    }

                    if ($request->attr_types[$i] == 5) {
                        $val_position = 0;

                        if (is_string($request->attr_values[$i])) {
                            $attr_value = (array)$request->attr_values[$i];
                            if (isset($attr_value['id'])) { // جدید نیست
                                AttributeValue::find($attr_value['id'])->update([
                                    'value' => $attr_value['value'],
                                    'attribute_id' => $attr->id,
                                    'position' => $val_position,
                                ]);
                            } else {  // جدیده
                                AttributeValue::create([
                                    'value' => $attr_value[0],
                                    'attribute_id' => $attr->id,
                                    'position' => $val_position,
                                ]);
                            }
                            $val_position++;
                        } else {
                            Log::info($request->attr_types[$i]);
                            foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                                $attr_value = (array)$attr_value;
                                if (isset($attr_value['id'])) { // جدید نیست
                                    AttributeValue::find($attr_value['id'])->update([
                                        'value' => $attr_value['value'],
                                        'unit_id' => $attr->id,
                                        'position' => $val_position,
                                    ]);
                                } else {  // جدیده
                                    AttributeValue::create([
                                        'value' => $attr_value['value'],
                                        'unit_id' => $attr->id,
                                        'position' => $val_position,
                                    ]);
                                }
                                $val_position++;
                            }
                        }

                    }

                    $i++;
                }
            }
        }
    }

}
