<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Warranty\Models\Warranty;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedSort;


class CategoryController extends Controller
{

  public function searchFilter($slug ,Request $request)
  {
      $category = Category::whereSlug($slug)->firstOrFail();

      $products = QueryBuilder::for(Product::class)
        ->allowedFilters([
          AllowedFilter::scope('search'),
        ])
        ->defaultSort('-has_stock')
        ->whereRelation('category', 'category_id', $category->id)
        ->when($request->has_selling_stock == 1, function ($q) {
          $q->whereRelation('variants', 'stock_count', '>', 0);
        })
        ->when(filled($request->brand), function ($q) use ($request) {
            $q->whereHas('brand', function ($q) use ($request) {
                $q->whereIn('id', $request->brand);
            });
        })
        ->when($request->only_original == 1 && Brand::where('en_name', 'miscellaneous')->exists(), function ($q) {
          $q->whereRelation('brand', 'id', '<>' ,Brand::where('en_name', 'miscellaneous')->first()->id);
        })
        ->orderBy('has_stock', 'desc')
        ->when($request->input('sortby') == 'newest', function ($q){
            $q->orderBy('created_at', 'desc');
        })
        ->when($request->input('sortby') == 'cheapest', function ($q){
            $q->orderBy('min_price', 'asc');
        })
        ->when($request->input('sortby') == 'most_expensive', function ($q){
            $q->orderBy('min_price', 'desc');
        })
        ->when($request->input('sortby') == 'best_selling', function ($q){
            $q->orderBy('sales_count', 'desc');
        })
        ->when(isset($request->price['min']), function ($q) use ($request) {
            $q->where('min_price', '>', $request->price['min']);
        })
        ->when(isset($request->price['max']), function ($q) use ($request) {
            $q->where('min_price', '<', $request->price['max']);
        })
        ->when(filled($request->attribute), function ($q) use ($request) {
                $q->whereHas('attributes', function($q) use ($request) {
                    $q->whereHas('values', function($q) use ( $request) {
                        foreach($request->attribute as $attribute_key => $attribute_id) {
                            foreach($attribute_id as $value_key => $value_id) {
                                if ($value_key == 0) {
                                    Log::info("where ");
                                    Log::info($value_id);
                                    $q->whereId($value_id);
                                } else {
                                    Log::info("orWhere ");
                                    Log::info($value_id);
                                    $q->orWhere('id', $value_id);
                                }
                            }
                        }
                    });
                });
        })
        ->paginate(1);

      $sort_by = $request->input('sortby');

      return response()->json([
        'status' => true,
        'data' => [
          'products' => view('front::ajax.product_category.products',
              compact('products', 'sort_by', 'slug'))->render(),
        ]
      ]);
  }

}
