<?php

namespace Modules\Staff\Unit\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Staff\Attribute\Models\Attributable;
use Modules\Staff\Attribute\Models\Attribute;
use Modules\Staff\Type\Http\Requests\StaffTypeRequest;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Type\Models\Type;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Attribute\Models\AttributeGroup;
use Modules\Staff\Unit\Models\Unit;
use Modules\Staff\Unit\Models\UnitValue;


class StaffUnitController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $units = Unit::all()->sortBy('position');
        return view('staffunit::index', compact('units'));
    }

    /**
     * Store data to database.
     * @return Response
     */
    public function store(Request $request)
    {

        $positions = str_replace('item[]=', '', $request->positions);
        $positions = str_replace('&', ',', $positions);
        $positions = explode(',', $positions);
        $positions = array_map(function ($value) {
            return intval($value);
        }, $positions);
        $db_position = [];
        $new_position = [];
        foreach ($positions as $position => $value) {
            if ($value == 0) {
                $new_position[$position] = $value;
            } else {
                $db_position[$position] = $value;
            }
        }

        $db_position = array_flip($db_position);


        $new_pos = [];
        foreach ($new_position as $pos => $value) {
            $new_pos[] = $pos;
        }

//        Log::info('new pos');
//        Log::info($new_pos);
//
//        Log::info('new db pos');
//        Log::info($db_position);




        if (!is_null($request->unit_names) && count($request->unit_names)) {
            $i = 0;
            foreach ($request->unit_names as $unit_name) {

                if ($unit_name == null) {
                    $i++;
                    continue;
                }

                if ($request->unit_types[$i] == 1 && !is_null($request->unit_values[$i])) {
                    $created_unit = Unit::create([
                        'name' => $unit_name,
                        'type' => $request->unit_types[$i],
                        'position' => $new_pos[$i],
                    ]);

                    foreach (json_decode($request->unit_values[$i]) as $unit_value) {
                        $val = [];
                        foreach ($unit_value as $unit_val) {
                            $val[] = $unit_val;
                            if (isset($val[0]) && !is_null($unit_val)) {
                                UnitValue::create([
                                    'value' => $unit_val,
                                    'unit_id' => $created_unit->id,
//                               'position' => '',
                                ]);
                            }
                        }
                    }

                    $i++;
                    continue;
                } elseif ($request->unit_types[$i] == 1 && is_null($request->unit_values[$i])) {
                    $i++;
                    continue;
                } elseif ($request->unit_types[$i] == 0) {
                    Unit::create([
                        'name' => $unit_name,
                        'type' => $request->unit_types[$i],
                        'position' => $new_pos[$i],
                    ]);

                    $i++;
                    continue;
                }
            }
        }



        if (!is_null($request->db_unit_names))
        {
            return $this->update($request, $db_position);
        }


    }

    public function update($request, $db_position)
    {

        $db_ids = [];
        foreach ($db_position as $db_id => $value)
        {
            $db_ids[] = $db_id;
        }

        if (!is_null($request->db_unit_names) && count($request->db_unit_names)) {
            $i = 0;
            foreach ($request->db_unit_names as $db_unit_name) {
//                Log::info('true 2');
                if ($db_unit_name == null) {
                    $i++;
                    continue;
                }


//                Log::info('db pos');
//                Log::info($db_position);
//
//                Log::info('db pos i ');
//                Log::info($db_position[$db_ids[$i]]);

//                Log::info($db_position);
//                Log::info('i: ' . $i);
                if ($request->db_unit_types[$i] == 1 && ($request->db_unit_values[$i] !== '')) {


                    Unit::find($db_ids[$i])->update([
                        'name' => $db_unit_name,
                        'type' => $request->db_unit_types[$i],
                        'position' => $db_position[$db_ids[$i]],
                    ]);

                    foreach ($request->db_unit_values as $unit_value) {
                        if (is_null($unit_value)){
                            continue;
                        }
                        $val = [];
                        $y = 0;

                        $unit_value = array_map(function($object){
                            return (array) $object;
                        }, json_decode($unit_value));

//                        Log::info($unit_value);

                        foreach ($unit_value as $unit_val) {
                            Log::info($unit_val);
                            Log::info($unit_val['id']);

                            if (!is_null($unit_val)) {
                                UnitValue::find($unit_val['id'])->update([
                                    'unit_id' => $unit_val['unit_id'],
                                    'value' => $unit_val['value'],
                                    'position' => $y,
                                ]);
                                $y++;
                            }

//                            $val[] = $unit_val;
//                            if (isset($val[0]) && !is_null($unit_val)) {
////                                UnitValue::create([
////                                    'value' => $unit_val,
////                                    'unit_id' => $created_unit->id,
//////                               'position' => '',
////                                ]);
//                            }


                        }
                    }

                    $i++;
                    continue;
                } elseif ($request->db_unit_types[$i] == 1 && is_null($request->db_unit_values[$i])) {
                    $i++;
                    continue;
                } elseif ($request->db_unit_types[$i] == 0) {
//                    Log::info('runnnnn');
//                    Log::info($db_ids[$i]);
                    Unit::find($db_ids[$i])->update([
                        'name' => $db_unit_name,
                        'type' => $request->db_unit_types[$i],
                        'position' => $db_position[$db_ids[$i]],
                    ]);

                    $i++;
                    continue;
                }
            }
        }

    }

    public function delete(Request $request)
    {
        Unit::where('name', $request->unit_name)->delete();
    }

    public function edit(Request $request)
    {
        $units = Unit::where('name', $request->name)->get();

//        Log::info($units);
        return View::make('staffunit::ajax.edit-modal', compact('units'));
    }

//  public function update(Request $request)
//  {
//      if ($request->type == 1)
//      {
//
//      }
//      else {
//
//      }
////      foreach ($request->values as $key => $value) {
////        if($key == '')
////        {
////          unset($key);
////        } else {
////          Unit::find($key)->update([
////            'value' => $value,
////          ]);
////        }
////      }
////
////      foreach ($request->vals as $val) {
////        $type
////        Unit::create([
////          'name' => $request->title,
////          'type' => ('2'),
////          'value' => '',
////          'position' => '',
////        ]);
////      }
//  }

}
