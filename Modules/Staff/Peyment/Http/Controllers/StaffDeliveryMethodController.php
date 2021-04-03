<?php

namespace Modules\Staff\Shiping\Http\Controllers;

use Modules\Staff\Setting\Models\Setting;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Product\Models\ProductWeight;
use Modules\Staff\Shiping\Models\PeymentCostDetType;
use Modules\Staff\Shiping\Models\PeymentMethodGroup;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Shiping\Models\PeymentMethod;
use Modules\Staff\Shiping\Models\PeymentMethodLocation;
use App\Models\Media;
use Illuminate\Support\Facades\View;
use Modules\Staff\Shiping\Models\PeymentMethodValue;

class StaffPeymentMethodController extends Controller
{

    public function index()
    {
      $peyment_methods = PeymentMethod::paginate(100);
      return view('staffpeyment::peymentMethod.index', compact('peyment_methods'));
    }

    public function edit($id)
    {
      $peyment_method = PeymentMethod::find($id);
      $peymentCostDetTypes = PeymentCostDetType::all();
      $weights = ProductWeight::all();
      $states = State::all();
      $values = $peyment_method->values()->orderBy('type', 'desc')->paginate();
      return view('staffpeyment::peymentMethod.edit', compact('peyment_method', 'peymentCostDetTypes', 'states', 'values', 'weights'));
    }

    public function storePeymentMethod(Request $request)
    {
        $messages = [
          'weights.required' => 'فیلد نوع کالا اجباری است',
          'peyment_cost.required_if' => 'در وضعیت انتخابی وارد کردن هزینه ارسال اجباری است',
          'min_card_cost.required_if' => 'در وضعیت انتخابی وارد کردن حداقل ارزش سبد خرید اجباری است',
          'states.required_if' => 'در وضعیت انتخابی وارد کردن حداقل یک شهر اجباری است',
        ];

        $validator = Validator::make($request->all(),[
          'name' => 'required',
          'weights' => 'required',
          'iconImageTempId' => 'nullable',
          'cost__det_type' => 'required',
          'peyment_cost' => 'nullable|required_if:cost__det_type,2,3',
          'has_free_peyment' => 'nullable',
          'min_card_cost' => 'nullable|required_if:has_free_peyment, 1',
          'has_state_limit' => 'nullable',
          'states' => 'nullable|required_if:has_state_limit, 1',
        ], $messages);

        if ($validator->fails()) {
          $errors = $validator->errors();
          return response()->json([
            'status' => false,
            'data' => [
              'errors' => $errors,
            ]
          ], 400);
        }

        $peymentMethod = PeymentMethod::find($request->method_id);

        $peymentMethod->update([
          'name' => $request->name,
          'cost_det_type_id' => $request->cost__det_type,
        ]);

        if ($request->cost__det_type == 2 || $request->cost__det_type == 3) {
          Log::info('dddvvv');
          Log::info($request->peyment_cost);

          $peymentMethod->update([
            'peyment_cost' => $request->peyment_cost,
          ]);
        }

        if (isset($request->has_free_peyment) && ($request->has_free_peyment == 1) ) {
          $peymentMethod->update([
            'free_shipping_min_cost' => $request->min_card_cost,
          ]);
        } else {
          $peymentMethod->update([
            'free_shipping_min_cost' => null,
          ]);
        }

        if (isset($request->intra_provinces) && count($request->intra_provinces)) {
          $peymentMethodValues = PeymentMethodValue::where('peyment_method_id', $request->method_id)->orderBy('type', 'desc')->get();
          foreach ($peymentMethodValues as $key => $peymentMethodValue) {
            $peymentMethodValue->update([
              'intra_province' => isset($request->intra_provinces[$key])? $request->intra_provinces[$key] : null,
              'extra_province' => isset($request->extra_provinces[$key])? $request->extra_provinces[$key] : null,
              'neighboring_provinces' => isset($request->neighboring_provinces[$key])? $request->neighboring_provinces[$key] : null,
            ]);
          }
        }

        $peymentMethod->weights()->detach();
        foreach ($request->weights as $weight) {
          $methodWeight = ProductWeight::find(intval($weight));
          $peymentMethod->weights()->attach($methodWeight);
        }

        if (isset($request->has_state_limit) && ($request->has_state_limit == 1) && isset($request->states)) {
          $peymentMethod->states()->detach();
          foreach ($request->states as $state) {
            $methodState = ProductWeight::find($state);
            $peymentMethod->states()->attach($methodState);
          }
        }
        else {
          $peymentMethod->states()->detach();
        }

        if (!is_null($request->uploaded_icon_id))
        {
          $media = Media::find($request->uploaded_icon_id);
          $peymentMethod->media()->sync($media);
        }

    }

    public function deleteIcon(Request $request)
    {
      $method = PeymentMethod::find($request->method_id);
      $media_id = $method->media()->first()->id;
      $method->media()->detach();
      Media::find($media_id)->delete();

      return response()->json([
        'status' => true,
        'data' => true,
      ]);
    }

    public function UploadImage(Request $request)
  {
    $imageExtension = $request->image->extension();

    $input['image'] = time() . '.' . $imageExtension;
    $request->image->move(public_path('media/images'), $input['image']);

    $media = Media::create([
      'name' => $input['image'],
      'path' => 'media/images',
      'person_id' => auth()->guard('staff')->user()->id,
      'person_role' => 'staff' ,
    ]);

    $settings = Setting::select('name', 'value')->get();
    $site_url = $settings->where('name', 'site_url')->first()->value;

    return response()->json([
      'status' => true,
      'data' => [
        'id' => "$media->id",
        'url' => "$site_url/$media->path/$media->name",
        'tempFile' => true,
        'slot' => null,
      ]
    ]);
  }

    public function status(Request $request)
    {
      PeymentMethod::where('id', $request->peyment_id)->update([
        'status' => $request->status,
      ]);
    }

}
