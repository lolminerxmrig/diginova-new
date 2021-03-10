<?php

namespace Modules\Staff\Promotion\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Promotion\Models\Campain;
use Modules\Staff\Promotion\Models\Promotion;

class StaffCampainController extends Controller
{
    public function index()
    {
        return view('staffpromotion::campains.index');
    }

    public function create()
    {
        return view('staffpromotion::campains.create');
    }

    public function update(Request $request, $id)
    {
        $request->start_at = date_create($request->start_at);
        $request->end_at = date_create($request->end_at);

        $messages = [
            'after' => 'زمان پایان باید بیشتر از زمان شروع باشد.',
            'name.required' => 'نام کمپین الزامی است.',
            'status.required' => 'وضعیت کمپین الزامی است.',
            'start_at.required' => 'تاریخ و زمان شروع کمپین الزامی است.',
            'end_at.required' => 'تاریخ و زمان پایان کمپین الزامی است.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => false,
                'data' => [
                    'errors' => $errors,
                ]
            ]);
        }

        $campain = Campain::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'min_percent' => null,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'type' => 'custom',
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => true,
            'data' => [
                'redirectUrl' => $campain->id,
            ],
        ]);

    }

    public function manage($id)
    {
        $campain = Campain::find($id);
        return view('staffpromotion::campains.manageCampain', compact('campain'));
    }

    public function search(Request $request)
    {
        ($request->paginatorNum)? $paginatorNum = $request->paginatorNum : $paginatorNum = 2;
        if($request->sort == 'desc') { $sort_type = 'created_at'; $sort_value = 'desc'; }
        if($request->sort == 'price_low') { $sort_type = 'sale_price'; $sort_value = 'asc'; }
        if($request->sort == 'price_high') { $sort_type = 'sale_price'; $sort_value = 'desc'; }


        if(is_null($request['query']))
        {
            $product_variants = ProductHasVariant::orderBy($sort_type, $sort_value)->paginate($paginatorNum);
        }
        else
        {
            $product_variants = ProductHasVariant::orderBy($sort_type, $sort_value)->paginate($paginatorNum);
        }

        (is_null($product_variants))? $product_variants = [] : '';
        return view('staffpromotion::campains.variantsLoader',
            compact('product_variants'));

    }


    public function addVariant(Request $request, $id) {
        $campain = Campain::find($id);
        foreach ($request->variantIds as $variantId) {
            $product_variant = ProductHasVariant::find($variantId);
            $product_variant->campains()->attach($campain);
        }

        return response()->json([
           'status' => true,
            'data' => [],
        ]);
    }

    public function variants(Request $request, $id) {
        $product_variants = Campain::find($id)->productVariants;
        return view('staffpromotion::campains.addVariants', compact('product_variants'));
    }

    public function removeVariant(Request $request,$id)
    {
        $variant_id = $request->promotionVariantId;
        Log::info($variant_id);
        $campain = Campain::find($id);
        Log::info($campain);
        $campain->productVariants()->delete(1);
        return response()->json([
            'status' => true,
            'data' => true,
        ]);
    }

    public function removeAll($id)
    {
        Campain::find($id)->productVariants()->detach();
        return response()->json([
           'status' => true,
           'data' => true,
        ]);
    }

}
