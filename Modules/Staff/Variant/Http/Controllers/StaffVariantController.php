<?php

namespace Modules\Staff\Variant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Staff\Variant\Models\Variant;
use Modules\Staff\Variant\Models\VariantValue;
use Modules\Staff\Category\Models\Category;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Variant\Models\VariantGroup;
use Modules\Staff\Unit\Models\Unit;


class StaffVariantController extends Controller
{

    public function index()
    {
        $variant_groups = VariantGroup::paginate(10)->sortBy('position');
        return view('staffvariant::index', compact('variant_groups'));
    }

    public function edit($id)
    {
        $variantGroup = VariantGroup::where('id', $id)->firstOrFail();

        if (count($variants = Variant::where('group_id', $id)->get())) {
            $variants = Variant::where('group_id', $id)->orderBy('position')->get();
        } else {
            $variants = collect();
        }

        return view('staffvariant::edit', compact('variantGroup', 'variants'));
    }

    public function getData(Request $request)
    {
        $variant_groups = VariantGroup::paginate(10)->sortBy('position');
        return view('staffvariant::ajax-content', compact('variant_groups'));
    }

    public function storeGroup(Request $request)
    {
        $messages = [
            'unique' => 'نام وارد شده تکراری است',
            'required' => 'وارد کردن نام اجباری است',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:variant_groups',
            'type' => 'required',
            'description' => 'nullable|string',
        ], $messages);


        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        } else {
            if ((VariantGroup::max('position')) || (VariantGroup::max('position') == 0)) {
                $position = VariantGroup::max('position') + 1;
            } else {
                $position = 0;
            }

            VariantGroup::create([
                'name' => $request->name,
                'description' => $request->description,
                'type' => $request->type,
                'position' => $position,
                'status' => 1,
            ]);

            $variant_groups = VariantGroup::paginate(10)->sortBy('position');
            return view('staffvariant::ajax-content', compact('variant_groups'));
        }
    }

    public function indexChangePosition(Request $request)
    {
        foreach ($request->item as $postion => $id) {
            VariantGroup::where('id', $id)->update([
                'position' => $postion,
            ]);
        }
    }

    public function deleteGroup(Request $request)
    {
        VariantGroup::find($request->id)->delete();
    }

    public function statusGroup(Request $request)
    {
        VariantGroup::where('id', $request->group_id)->update([
            'status' => $request->status,
        ]);
    }

    public function store(Request $request)
    {

        // update variant group
        if (!is_null($request->group_name)) {
            VariantGroup::where('id', $request->category_id)->update([
                'name' => $request->group_name,
                'description' => $request->group_desc,
            ]);
        }

        // delete variant
        if (isset($request->deleted_rows) && (!is_null($request->deleted_rows))) {
            foreach ($request->deleted_rows as $deleted_row) {
                Variant::find($deleted_row)->values()->delete();
                Variant::find($deleted_row)->delete();
            }
        }

        // delete value
        if (isset($request->deleted_values)) {
            foreach ($request->deleted_values as $deleted_value) {
                $this_attr_id = VariantValue::find($deleted_value)->variant_id;
                if (VariantValue::where('variant_id', $this_attr_id)->count() > 2){
                    VariantValue::find($deleted_value)->delete();
                }
            }
        }

        // output: array clean position
        $positions = str_replace('item[]=', '', $request->positions);
        $positions = str_replace('&', ',', $positions);
        $positions = explode(',', $positions);
        $positions = array_map(function ($value) {
            return intval($value);
        }, $positions);


        if (count($request->attr_names)) {
            $i = 0;
            foreach ($request->attr_names as $attr_name) {
                if ($attr_name == null) {
                    $i++;
                    continue;
                }

                $type = $request->attr_types[$i];

                if (($type == 3 || $type == 4 || $type == 5) && is_null($request->attr_values[$i])) {
                    $i++;
                    continue;
                }


                if ($positions[$i] == 0) {
                    // اگه جدید بود
                    $created_attr = Variant::create([
                        'name' => $attr_name,
                        'type' => $request->attr_types[$i],
                        'position' => $i,
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                        'is_favorite' => $request->attr_favorites[$i],
                        'group_id' => $request->category_id,
                    ]);
                    Log::info($request->attr_values);

                    if (($request->attr_types[$i] == 1) || ($request->attr_types[$i] == 2)) {
                        $i++;
                        continue;
                    }
                    elseif (($request->attr_types[$i] == 3) || ($request->attr_types[$i] == 4)) {
                        foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                            $attr_value = (array)$attr_value;
                            $val = [];
                            $val_position = 0;
                            foreach ($attr_value as $attr_val) {
                                $val[] = $attr_val;
                                if (isset($val[0]) && !is_null($attr_val)) {
                                    VariantValue::create([
                                        'value' => $attr_val,
                                        'variant_id' => $created_attr->id,
                                        'position' => $val_position,
                                    ]);
                                    $val_position++;
                                }
                            }
                        }
                    }
                    elseif ($request->attr_types[$i] == 5) {
                        Variant::find($created_attr->id)->update([
                            'unit_id' => $request->attr_values[$i],
                        ]);
                    }

                }
                else {  // اگه سطر جدید نبود
                    if (!Variant::find($positions[$i])) {
                        $i++;
                        continue;
                    }

                    Variant::find($positions[$i])->update([
                        'name' => $attr_name,
                        'type' => $request->attr_types[$i],
                        'position' => $i,
                        'is_required' => $request->attr_requireds[$i],
                        'is_filterable' => $request->attr_filterables[$i],
                        'is_favorite' => $request->attr_favorites[$i],
                        'group_id' => $request->category_id,
                    ]);

                    $attr = Variant::find($positions[$i]);

                    if ($request->attr_types[$i] == 1 || $request->attr_types[$i] == 2) {
                        $i++;
                        continue;
                    }

                    if ($request->attr_types[$i] == 5) {
                        Variant::find($positions[$i])->update([
                            'unit_id' => $request->attr_values[$i],
                        ]);
                    }

                    if ($request->attr_types[$i] == 3 || $request->attr_types[$i] == 4) {
                        $val_position = 0;

                        foreach (json_decode($request->attr_values[$i]) as $attr_value) {
                            $attr_value = (array)$attr_value;
                            if (isset($attr_value['id'])) { // جدید نیست
                                VariantValue::find($attr_value['id'])->update([
                                    'variant_id' => $attr->id,
                                    'value' => $attr_value['value'],
                                    'position' => $val_position,
                                ]);
                            } else {  // جدیده
                                VariantValue::create([
                                    'variant_id' => $attr->id,
                                    'value' => $attr_value['value'],
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
