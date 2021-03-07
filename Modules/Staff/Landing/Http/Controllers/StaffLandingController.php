<?php

namespace Modules\Staff\Landing\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Landing\Models\Landing;

class StaffLandingController extends Controller
{

    public function index()
    {
        if (count(Landing::all())) {
            $landings = Landing::all();
        } else {
            $landings = [];
        }
        return view('stafflanding::index', compact('landings'));
    }

    public function loadProductVariants(Request $request, ProductHasVariant $product_variant)
    {
        ($request->paginatorNum)? $paginatorNum = $request->paginatorNum : $paginatorNum = 2;

//        if(isset($request->type) && !is_null($request->type) && ($request->type !== 'product_name')){
        if(isset($request->type) && !is_null($request->type) && ($request->type !== 'all')){
            Log::info('pos 1');
            $search_keyword = $request['query'];
            if (isset($request->type) && isset($search_keyword)) {
                Log::info('pos 2');
                if ($request->type == 'product_id') {
                    Log::info('pos 3');
                    $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');
                    $product_variants = $product_variant->whereHas('product', function ($query) use ($search_keyword) {
                        $query->where('product_code', 'LIKE', '%' . $search_keyword . '%');
                    })->paginate(3);
                    if (!count($product_variants)){
                        Log::info('pos 4');
                        $product_variants = [];
                    }
                }
                elseif ($request->type == 'product_variant_id') {
                    Log::info('pos 5');
                    $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
                    $product_variants = ProductHasVariant::query()->where('variant_code', 'LIKE', "%{$search_keyword}%")->paginate(3);
                }
                elseif ($request->type == 'product_category') {
                    Log::info('pos 6');
                }
            }
        }
        elseif ($request->type == 'product_name') {
            if (!is_null($request['query'])) {
                Log::info('pos 8');
                $search_keyword = $request['query'];
                $product_variants = Product::where('title_fa', 'like', "گوشی موبایل")->get();
                Log::info($product_variants);

//                $products = Product::query()->where('name', 'LIKE', "%{$search_keyword}%")->paginate(10);
                $product_variants = Product::query()->where('title_fa', 'LIKE', "%{$search_keyword}%")->with('variants')->paginate(10);
                $products = Product::query()->where('title_fa', 'LIKE', "%{$search_keyword}%")->with('variants')->variants->paginate(10);
                Log::info('product');
                Log::info($product_variants);
            } else {
                $product_variants = ProductHasVariant::orderBy('created_at', 'desc')->paginate($paginatorNum);
                Log::info('pos 8.5');
            }
        }
        elseif (count(ProductHasVariant::all())) {
            Log::info('pos 7');
            $product_variants = ProductHasVariant::orderBy('created_at', 'desc')->paginate($paginatorNum);
        }
        else {
            Log::info('pos 9');
            $product_variants = [];
        }


        (!is_null($request['query'])? $query = $request['query'] : $query = '');
            (!is_null($request['type'])? $type = $request['type'] : $type = '');

        return view('stafflanding::periodic-prices.ajax-load-variants',
             compact('product_variants', 'query', 'type'));

    }

    public function renderAddVariantsRows(Request $request)
    {
        if (isset($request->variantIds)){
            $variantIds = $request->variantIds;
            $product_variants = ProductHasVariant::all();
            return response()->json([
                'status' => true,
                'data' => view('stafflanding::periodic-prices.render-add-variants-rows', compact('variantIds', 'product_variants'))->render(),
            ]);
        } else {
            return response()->json([
                'status' => true,
                'data' => "\n\n\n\n\n",
            ]);
        }
    }

    public function save(Request $request)
    {
        $request->start_at = date_create($request->start_at);
        $request->end_at = date_create($request->end_at);

        $messages = [
            'after' => 'زمان پایان باید بیشتر از زمان شروع باشد.',
            'landing_limit.required' => 'وارد کردن فیلد تعداد در تخفیف اجباری است.',
            'landing_limit.integer' => 'وارد کردن فیلد تعداد در تخفیف اجباری است.',
            'landing_order_limit.required' => 'وارد کردن فیلد تعداد در سبد اجباری است.',
            'landing_price.ends_with' => 'دو رقم انتهای قیمت باید ۰ باشد.',
            'landing_price.required' => 'وارد کردن فیلد قیمت پس از تخفیف اجباری است.',
            'start_at.required_if' => 'در حالت زمان دار وارد کردن زمان شروع و پایان اجباری است.',
        ];

        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'landing_price' => 'required|ends_with:00',
            'start_at' => 'nullable|required_if:time_status,1|date',
            'end_at' => 'nullable|required_if:time_status,1|date|after:start_at',
            'landing_limit' => 'required',
            'landing_order_limit' => 'required',
        ], $messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->first();
            return response()->json([
                'status' => false,
                'data' => [
                    'errors' => $errors,
                ]
            ]);
        }


        $product_variant = ProductHasVariant::find($request->id);
        if ($product_variant->stock_count < $request->landing_limit)
        {
            $errors = 'عددی که برای تعداد در تخفیف در نظر گرفته اید از ';
        }

            Landing::updateOrCreate(['id' => $request->landing_variant_id], [
                'landing_price' => $request->landing_price,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'percent' => $request->landing_percent,
                'landing_limit' => $request->landing_limit,
                'landing_order_limit' => $request->landing_order_limit,
                'status' => $request->status,
                'product_variant_id' => $request->id,
            ]);


        return response()->json([
            'status' => true,
            'data' => [
                'landing_variant_id' => 0,
            ]
        ]);
    }

    public function done()
    {
        return view('stafflanding::periodic-prices.done');
    }

    public function delete(Request $request){
        Landing::find($request->landingVariantId)->delete();
        return response()->json([
           'status' => true,
           'data' => true,
        ]);
    }

    public function ended()
    {
        if (count(Landing::all())) {
            $landings = Landing::all();
        } else {
            $landings = [];
        }
        return view('stafflanding::periodic-prices.ended', compact('landings'));
    }

    public function search(Request $request)
    {
        ($request->paginatorNum)? $paginatorNum = $request->paginatorNum : $paginatorNum = 2;

//        if(isset($request->search['type']) && !is_null($request->search['type']) && ($request->search['type'] !== 'product_name')){
        if(isset($request->search['type']) && !is_null($request->search['type']) && ($request->search['type'] !== 'all')){
            Log::info('pos 1');
            $search_keyword = $request->search['title'];
            if (isset($request->search['type']) && isset($search_keyword)) {
                Log::info('pos 2');
                if ($request->search['type'] == 'product_id') {
                    Log::info('pos 3');
                    $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');
                    $products = Product::where('product_code', $search_keyword)->get();

                    if (!count($product_variants)){
                        Log::info('pos 4');
                        $product_variants = [];
                    }
                }
                elseif ($request->search['type'] == 'product_variant_id') {
                    Log::info('pos 5');
                    $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
                    $product_variants = ProductHasVariant::query()->where('variant_code', 'LIKE', "%{$search_keyword}%")->paginate(3);
                }
                elseif ($request->search['type'] == 'product_category') {
                    Log::info('pos 6');
                }
            }
        }
        elseif ($request->search['type'] == 'product_name') {
            if (!is_null($request->search['title'])) {
                Log::info('pos 8');
                $search_keyword = $request->search['title'];
                $product_variants = Product::where('title_fa', 'LIKE', "%{$search_keyword}%")->get();
                Log::info($product_variants);

//                $products = Product::query()->where('name', 'LIKE', "%{$search_keyword}%")->paginate(10);
                $product_variants = Product::query()->where('title_fa', 'LIKE', "%{$search_keyword}%")->with('variants')->paginate(10);
                $products = Product::query()->where('title_fa', 'LIKE', "%{$search_keyword}%")->with('variants')->variants->paginate(10);
                Log::info('product');
                Log::info($product_variants);
            } else {
                $product_variants = ProductHasVariant::orderBy('created_at', 'desc')->paginate($paginatorNum);
                Log::info('pos 8.5');
            }
        }
        elseif (count(ProductHasVariant::all())) {
            Log::info('pos 7');
            $product_variants = ProductHasVariant::orderBy('created_at', 'desc')->paginate($paginatorNum);
        }
        else {
            Log::info('pos 9');
            $product_variants = [];
        }


        (!is_null($request->search['title'])? $query = $request->search['title'] : $query = '');
        (!is_null($request['type'])? $request['type'] : $type = '');

        return view('stafflanding::periodic-prices.ajax-load-landings',
            compact('landings', 'query', 'type'));

    }

    public function create()
    {
        return view('stafflanding::create');
    }

    public function manageLanding($id)
    {
        return view('stafflanding::manageLanding');
    }
}
