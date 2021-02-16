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


class StaffUnitController extends Controller
{

  /**
   * Display a listing of the resource.
   * @return Response
   */
  public function index()
  {
    $units = Unit::all();
    return view('staffunit::index', compact('units'));
  }


  /**
   * Store data to database.
   * @return Response
   */
  public function store(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'title' => 'required',
      'unit_type' => 'required',
      'names' => 'nullable',
    ]);

    if ($validator->fails()){
      return response()->json('error', 400);
    }

    if (Unit::count() == 0) {
      $position = 0;
    } else {
      $position = Unit::max('position')+1;
    }



    if (($request->unit_type == 2) && count($request->names)) {

      foreach ($request->names as $name){
        Unit::create([
          'name' => $request->title,
          'type' => $request->unit_type,
          'value' => $name,
          'position' => $position,
        ]);
        $position ++;
      }
    }
    elseif ($request->unit_type == 1)
    {

      Unit::create([
        'name' => $request->title,
        'type' => $request->unit_type,
        'position' => $position,
      ]);
    }

    $units = Unit::all();
    return View::make('staffunit::ajax.index-content', compact('units'));
  }



  public function delete(Request $request)
  {
    Unit::where('name', $request->unit_name)->delete();
  }

  public function edit(Request $request)
  {
    $units = Unit::where('name', $request->name)->get();

    Log::info($units);
    return View::make('staffunit::ajax.edit-modal', compact('units'));
  }

  public function update(Request $request)
  {
      if ($request->type == 1)
      {

      }
      else {

      }
//      foreach ($request->values as $key => $value) {
//        if($key == '')
//        {
//          unset($key);
//        } else {
//          Unit::find($key)->update([
//            'value' => $value,
//          ]);
//        }
//      }
//
//      foreach ($request->vals as $val) {
//        $type
//        Unit::create([
//          'name' => $request->title,
//          'type' => ('2'),
//          'value' => '',
//          'position' => '',
//        ]);
//      }
  }


  public function indexChangePosition(Request $request)
  {
    foreach($request->item as $postion => $id){

      Unit::where('id', $id)->update([
        'position' => $postion,
      ]);
    }
  }


}
