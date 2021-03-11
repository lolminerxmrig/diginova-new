<?php

namespace Modules\Staff\Promotion\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Promotion\Models\Campain;
use Modules\Staff\Promotion\Models\Promotion;

class StaffPromotionController extends Controller
{

    public function active()
    {
        if (count(Promotion::where('status', '!=', 'ended')->get())) {
            $promotions = Promotion::where('status', '!=', 'ended')->paginate(10);
        } else {
            $promotions = [];
        }

        if (count(Promotion::where('status', 'ended')->get())) {
            $ended_status = true;
        } else {
            $ended_status = false;
        }

        return view('staffpromotion::periodic-prices.active', compact('promotions', 'ended_status'));
    }

    public function loadProductVariants(Request $request, ProductHasVariant $product_variants)
    {
        (!$request->paginatorNum)? $request->paginatorNum = 10 : '';

        $product_variants = $this->ProductVariantsSearch($request, $product_variants);

        (!is_null($request['query'])? $query = $request['query'] : $query = '');
        (!is_null($request['type'])? $type = $request['type'] : $type = '');

        return view('staffpromotion::periodic-prices.ajax-load-variants',
             compact('product_variants', 'query', 'type'));
    }

    public function ProductVariantsSearch($request, $product_variants)
    {
        $product_variants = $product_variants->newQuery();

        $search_keyword = ltrim($request['query'], Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
        $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');

        if ($request->type == 'all' && !is_null($request['query'])) {
            $product_variants = $product_variants->whereHas('product', function ($query) use ($search_keyword) {
                $query->where('product_code', 'LIKE', '%' . $search_keyword . '%');
                $query->orWhere('title_fa', 'LIKE', '%' . $search_keyword . '%');
            });
            $product_variants = $product_variants->orWhere('variant_code', 'LIKE', "%{$search_keyword}%");
        }

        if ($request->type == 'product_id' && !is_null($request['query'])) {
            $product_variants = $product_variants->whereHas('product', function ($query) use ($search_keyword) {
                $query->where('product_code', 'LIKE', '%' . $search_keyword . '%');
            });
        }

        if ($request->type == 'product_name' && !is_null($request['query'])) {
            $product_variants = $product_variants->whereHas('product', function ($query) use ($search_keyword) {
                $query->where('title_fa', 'LIKE', '%' . $search_keyword . '%');
            });
        }

        if ($request->type == 'product_variant_id' && !is_null($request['query'])) {
            $product_variants = $product_variants->where('variant_code', 'LIKE', "%{$search_keyword}%");
        }

        if (!is_null($request->sort)) {
            if ($request->sort == 'desc') {
                $product_variants->orderBy('created_at', 'desc');
            }

            if ($request->sort == 'price_low') {
                $product_variants->orderBy('sale_price', 'asc');
            }

            if ($request->sort == 'price_high') {
                $product_variants->orderBy('sale_price', 'desc');
            }
        }

        return $product_variants->paginate($request->paginatorNum);

    }

    public function renderAddVariantsRows(Request $request)
    {
        if (isset($request->variantIds)){
            $variantIds = $request->variantIds;
            $product_variants = ProductHasVariant::all();
            return response()->json([
                'status' => true,
                'data' => view('staffpromotion::periodic-prices.render-add-variants-rows', compact('variantIds', 'product_variants'))->render(),
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
        $start_at = $request->start_at;
        $end_at = $request->end_at;

        $request->start_at = date_create($request->start_at);
        $request->end_at = date_create($request->end_at);

        $messages = [
            'after' => 'زمان پایان باید بیشتر از زمان شروع باشد.',
            'promotion_limit.required' => 'وارد کردن فیلد تعداد در تخفیف اجباری است.',
            'promotion_limit.integer' => 'وارد کردن فیلد تعداد در تخفیف اجباری است.',
            'promotion_order_limit.required' => 'وارد کردن فیلد تعداد در سبد اجباری است.',
            'promotion_price.ends_with' => 'دو رقم انتهای قیمت باید ۰ باشد.',
            'promotion_price.required' => 'وارد کردن فیلد قیمت پس از تخفیف اجباری است.',
            'start_at.required_if' => 'در حالت زمان دار وارد کردن زمان شروع و پایان اجباری است.',
        ];

        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'promotion_price' => 'required|ends_with:00',
            'start_at' => 'nullable|required_if:time_status,1|date',
            'end_at' => 'nullable|required_if:time_status,1|date|after:start_at',
            'promotion_limit' => 'required',
            'promotion_order_limit' => 'required',
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

        if ($product_variant->stock_count < $request->promotion_limit)
        {
            $errors = 'عددی که برای تعداد در تخفیف در نظر گرفته اید از ';
        }

        if (!Campain::where('type', 'amazing_offer')->first())
        {
            Campain::create([
                'name' => 'تخفیف شگفت انگیز',
                'type' => 'amazing_offer',
                'status' => 'active',
            ]);
        }

        if (!Campain::where('type', 'special_offer')->first())
        {
            Campain::create([
                'name' => 'تخفیف شگفت انگیز',
                'type' => 'special_offer',
                'status' => 'active',
            ]);
        }

        if (!is_null($start_at) && !is_null($end_at)) {
            $campain_id = Campain::where('type', 'amazing_offer')->first()->id;
        } else {
            $campain_id = Campain::where('type', 'special_offer')->first()->id;
        }

        if ($request->status == 0) {
            $status = 'inactive';
        } elseif ($request->status == 1) {
            $status = 'active';
        }

        $promotion = Promotion::updateOrCreate(['id' => $request->promotion_variant_id], [
            'promotion_price' => $request->promotion_price,
            'start_at' => $start_at,
            'end_at' => $end_at,
            'percent' => $request->promotion_percent,
            'promotion_limit' => $request->promotion_limit,
            'promotion_order_limit' => $request->promotion_order_limit,
            'status' => $status,
            'campain_id' => $campain_id,
        ]);

        $product_variant = ProductHasVariant::find($request->id);
        $promotion->productVariants()->sync($product_variant);

        return response()->json([
            'status' => true,
            'data' => [
                'promotion_variant_id' => 0,
            ]
        ]);

    }

    public function done()
    {
        return view('staffpromotion::periodic-prices.done');
    }

    public function delete(Request $request){
        Promotion::find($request->promotionVariantId)->delete();
        return response()->json([
           'status' => true,
           'data' => true,
        ]);
    }

    public function ended()
    {
        if (count(Promotion::where('status', 'ended')->get())) {
            $promotions = Promotion::where('status', 'ended')->paginate(10);
        } else {
            $promotions = [];
        }

        return view('staffpromotion::periodic-prices.ended', compact('promotions'));
    }

    public function search(Request $request, Promotion $promotions)
    {
        $paginate_type = 'active';
        (!$request->paginatorNum)? $request->paginatorNum = 10 : '';
        $promotions = $promotions->with('productVariants');

        $search_keyword = ltrim($request->search['title'], Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
        $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');

        $promotions = $this->promotionSearch($request, $promotions, $paginate_type);


        (!is_null($request->search['title'])? $query = $request->search['title'] : $query = '');
        (!is_null($request['type'])? $request['type'] : $type = '');

        $paginate_type = 'active';

        return view('staffpromotion::periodic-prices.ajax-load-promotions',
            compact('promotions', 'query', 'type', 'paginate_type'));

    }

    public function endedSearch(Request $request, Promotion $promotions)
    {
        $paginate_type = 'ended';
        (!$request->paginatorNum)? $request->paginatorNum = 10 : '';
        $promotions = $promotions->with('productVariants');

        $search_keyword = ltrim($request->search['title'], Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
        $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');

        $promotions = $this->promotionSearch($request, $promotions, $paginate_type);


        (!is_null($request->search['title'])? $query = $request->search['title'] : $query = '');
        (!is_null($request['type'])? $request['type'] : $type = '');

        return view('staffpromotion::periodic-prices.ajax-load-promotions',
            compact('promotions', 'query', 'type', 'paginate_type'));

    }

    public function promotionSearch($request, $promotions, $paginate_type)
    {
        $promotions = $promotions->newQuery();

        $search_keyword = ltrim($request->search['title'], Setting::where('name', 'product_code_prefix')->first()->value . 'C-');
        $search_keyword = ltrim($search_keyword, Setting::where('name', 'product_code_prefix')->first()->value . '-');

        if ($request->search['type'] == 'all' && !is_null($search_keyword)) {
            $promotions->whereHas('productVariants', function ($query) use ($search_keyword) {
                $query->whereHas('product', function ($query) use ($search_keyword) {
                    $query->where('title_fa', 'LIKE', '%' . $search_keyword . '%');
                    $query->orWhere('product_code', 'LIKE', '%' . $search_keyword . '%');
                });
                $query->orWhere('variant_code', 'LIKE', "%{$search_keyword}%");
            });

            if ($paginate_type == 'active') {
                $promotions->where('status', '!=', 'ended');
            }
        }

        if ($request->search['type'] == 'product_id' && !is_null($search_keyword)) {
            $promotions->whereHas('productVariants', function ($query) use ($search_keyword) {
                $query->whereHas('product', function ($query) use ($search_keyword) {
                    $query->where('product_code', 'LIKE', '%' . $search_keyword . '%');
                });
            });
        }

        if ($request->search['type'] == 'product_name' && !is_null($search_keyword)) {
            $promotions->whereHas('productVariants', function ($query) use ($search_keyword) {
                $query->whereHas('product', function ($query) use ($search_keyword) {
                    $query->where('title_fa', 'LIKE', '%' . $search_keyword . '%');
                });
            });
        }

        if ($request->search['type'] == 'product_variant_id' && !is_null($search_keyword)) {
            $promotions->whereHas('productVariants', function ($query) use ($search_keyword) {
                $query->where('variant_code', 'LIKE', "%{$search_keyword}%");
            });
        }

        if (isset($request->search['status']) && $request->search['status'] == 'active') {
            if ($paginate_type == 'active') {
                $promotions->where('status', 'active');
            }
        }

        if (isset($request->search['status']) && $request->search['status'] == 'inactive') {
            $promotions->where('status', 'inactive');
        }

        if (isset($request->search['status']) && !is_null($request->search['start_from'])) {
            $promotions->where('start_at', '>=', $request->search['start_from']);
        }

        if (isset($request->search['status']) && !is_null($request->search['end_to'])) {
            $promotions->where('start_at', '<=', $request->search['end_to']);
        }

        if ($paginate_type == 'ended') {
            $promotions->where('status', 'ended');
        }

        return $promotions->paginate($request->paginatorNum);
    }

}