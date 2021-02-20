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

        if (count($attributes = Attribute::where('group_id', $id)->get()))
        {
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

    public function store(Request $request)
    {
        // update attribute group
        if (!is_null($request->group_name)) {
            AttributeGroup::where('id', $request->category_id)->update([
                'name' => $request->group_name,
                'description' => $request->group_desc,
            ]);
        }


        if (isset($request->db_attr_names))
        {
            return $this->update($request);
        }

        $i = 0;
        if (isset($request->attr_names)) {
            foreach ($request->attr_names as $attr_name) {

                if ($attr_name == null) {
                    $i++;
                    continue;
                }

                $created_attr = Attribute::create([
                    'name' => $request->attr_names[$i],
                    'type' => $request->attr_types[$i],
                    'is_required' => $request->attr_requireds[$i],
                    'is_filterable' => $request->attr_filterables[$i],
                    'is_favorite' => $request->attr_favorites[$i],
                    'group_id' => $request->category_id,
                ]);

                $created_attr->categories()->attach($created_attr);

                if (!is_null($request->attr_values[$i]) && ($request->attr_types[$i] == 3) || ($request->attr_types[$i] == 4)) {
                    foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                        $val = [];
                        foreach ($attr_value as $attr_val) {
                            if (($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) && is_null($attr_val)) {
                                continue;
                            }

                            $val[] = $attr_val;

                            if (isset($val[0]) && !is_null($val[0])) {
                                $value = new AttributeValue();
                                $value->value = $val[0];
                                $value->attribute_id = $created_attr->id;
                                Attribute::find($created_attr->id)->values()->save($value);
                            }

                            $attr_group = AttributeGroup::find($request->category_id);
                            $attr_group->attributes()->attach($created_attr->id);
                        }
                    }
                }
                $i++;
            }
        }
    }

    public function update($request)
    {
        $i = 0;
        if ($request->db_attr_names) {
            foreach ($request->db_attr_names as $attr_name) {
                if ($attr_name == null) {
                    $i++;
                    continue;
                }

                if ($attr_name == 'deleted')
                {
                    Attribute::find($request->db_attribute_ids[$i])->delete();
                }


                Attribute::find($request->db_attribute_ids[$i])->update([
                    'name' => $request->db_attr_names[$i],
                    'type' => $request->db_attr_types[$i],
                    'is_required' => $request->db_attr_requireds[$i],
                    'is_filterable' => $request->db_attr_filterables[$i],
                ]);


                if (!is_null($request->db_attr_values[$i])) {

                    foreach (json_decode($request->db_attr_values[$i]) as $attr_value) {
                        $val = [];
                        foreach ($attr_value as $attr_val) {

                            if (($request->db_attr_values[$i] == 1 || $request->db_attr_values[$i] == 2) && is_null($attr_val)) {
                                continue;
                            }

                            $val[] = $attr_val;

                            if (isset($val[1]) && !is_null($val[1])) {
                                AttributeValue::find($val[0])->update([
                                    'value' => $val[1],
                                    'attribute_id' => $request->db_attribute_ids[$i],
                                ]);
                            }
                        }
                    }
                }

                $i++;
            }
        }
    }

    public function unitSelector()
    {
        $units = Unit::all();
        return view::make('staffattribute::layouts.ajax.unit-selector', compact('units'));
    }


    public function updatetemp($request)
    {
        $i = 0;
        if ($request->db_attr_names) {
            foreach ($request->db_attr_names as $attr_name) {
                if ($attr_name == null) {
                    $i++;
                    continue;
                }

                if (!is_null($request->attr_values[$i])) {

                    $id = Attribute::insertGetId([
                        'name' => $request->attr_names[$i],
                        'type' => $request->attr_types[$i],
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                    ]);

                    Categorizable::create([
                        'category_id' => $request->category_id,
                        'categorizable_type' => 'Attribute',
                        'categorizable_id' => $id,
                    ]);



                    foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                        $val = [];
                        foreach ($attr_value as $attr_val) {

                            if (($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) && is_null($attr_val)) {
                                continue;
                            }

                            $val[] = $attr_val;

                            if (isset($val[0]) && !is_null($val[0])) {
                                $value = new AttributeValue();
                                $value->value = $val[0];
                                $value->attribute_id = $id;
                                Attribute::find($id)->values()->save($value);
                            }

                            $attr_group = AttributeGroup::find($request->category_id);
                            $attr_group->attributes()->attach($id);
                        }
                    }
                } elseif ($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) {
                    $created_attr = Attribute::create([
                        'name' => $request->attr_names[$i],
                        'type' => $request->attr_types[$i],
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                        'is_favorite' => $request->attr_favorites[$i],
                    ]);

                    $attr_group = AttributeGroup::find($request->category_id);
                    $attr_group->attributes()->attach($created_attr);

                    Categorizable::create([
                        'category_id' => $request->category_id,
                        'categorizable_type' => 'Attribute',
                        'categorizable_id' => $created_attr->id,
                    ]);
                }

                $i++;
            }
        }
    }


}