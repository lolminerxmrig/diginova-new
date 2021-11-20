<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;


class CategoryController extends Controller
{

  private $category_childs = [];

  public function searchFilter($slug ,Request $request)
  {
      $category = Category::whereSlug($slug)->firstOrFail();

      $products = QueryBuilder::for(Product::class)
        ->allowedFilters([
          AllowedFilter::scope('search'),
        ])
        ->defaultSort('-has_stock')
        ->whereHas('category', function(Builder $query) use ($category) {
            foreach($this->getCategoryChilds($category) as $key => $id) {
                if ($key = 0) {
                    $query->where('id', $id);
                } else {
                    $query->orWhere('id', $id);
                }
            }
        })
        ->when($request->has_selling_stock == 1, function ($q) {
          $q->whereRelation('variants', 'stock_count', '>', 0);
          Log::info('a');
        })
        ->when(filled($request->brand), function ($q) use ($request) {
            Log::info('b');
            $q->whereHas('brand', function ($q) use ($request) {
                Log::info('c');
                $q->whereIn('id', $request->brand);
            });
        })
        ->when($request->only_original == 1 && Brand::where('en_name', 'miscellaneous')->exists(), function ($q) {
            Log::info('d');
          $q->whereRelation('brand', 'id', '<>' ,Brand::where('en_name', 'miscellaneous')->first()->id);
        })
        ->when(isset($request->price['min']), function ($q) use ($request) {
            Log::info('i');
            $q->where('min_price', '>', $request->price['min']);
        })
        ->when(isset($request->price['max']), function ($q) use ($request) {
            Log::info('j');
            $q->where('min_price', '<', $request->price['max']);
        })
        ->when(filled($request->attribute), function ($q) use ($request) {
            Log::info('k');
                $q->whereHas('attributes', function($q) use ($request) {
                    Log::info('L');
                    $q->whereHas('values', function($q) use ( $request) {
                        Log::info('m');
                        foreach($request->attribute as $attribute_key => $attribute_id) {
                            Log::info('n');
                            foreach($attribute_id as $value_key => $value_id) {
                                Log::info('o');
                                if ($value_key == 0) {
                                    Log::info('p');
                                    Log::info("where ");
                                    Log::info($value_id);
                                    $q->whereId($value_id);
                                } else {
                                    Log::info('q');
                                    Log::info("orWhere ");
                                    Log::info($value_id);
                                    $q->orWhere('id', $value_id);
                                }
                            }
                        }
                    });
                });
        })
        ->when($request->input('sortby') == 'newest', function ($q){
            Log::info('e');
            $q->orderBy('created_at', 'desc');
        })
        ->when($request->input('sortby') == 'cheapest', function ($q){
            Log::info('f');
            $q->orderBy('min_price', 'asc');
        })
        ->when($request->input('sortby') == 'most_expensive', function ($q){
            Log::info('g');
            $q->orderBy('min_price', 'desc');
        })
        ->when($request->input('sortby') == 'best_selling', function ($q){
            Log::info('h');
            $q->orderBy('sales_count', 'desc');
        })
        ->orderBy('has_stock', 'desc')
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


    public function findCategoryChilds(Category $category)
    {
        $this->category_childs[] = $category->id;

        if($category->children){
            foreach($category->children as $child){
                $this->findCategoryChilds($child);
            }
        }
    }

    public function getCategoryChilds(Category $category)
    {
        $this->findCategoryChilds($category);
        return $this->category_childs;
    }
}
