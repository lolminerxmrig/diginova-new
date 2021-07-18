<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Warranty\Models\Warranty;

class CategoryController extends Controller
{

  public function searchFilterLogic($request, $products)
  {
    $products = $products->newQuery();
//    $products = $products->first()->newQuery();

//    if (isset($request['brand']))
//    {
//      foreach ($request['brand'] as $key => $brand_id)
//      {
//        if ($key == 0) {
//          $products->where('brand_id', $brand_id);
//        } else
//        {
//          $products->orWhere('brand_id', $brand_id);
//        }
//      }
//    }
//
//
//    if (isset($request['has_selling_stock'])) {
//      $products->variants()->where('stock_count', '>', 0);
//    }
//
//    if (isset($request['only_original'])) {
//      $products->where('brand_id', '!=', Brand::where('en_name', 'miscellaneous')->first()->id);
//    }
//
//    if (isset($request['sortby']))
//    {
//      if ($request['sortby'] == 'newest') {
//
//      }
//
//      if ($request['sortby'] == 'best_selling') {
//        $products->variants()->where('sale_count', '>', 0);
//      }
//
//      if ($request['sortby'] == 'popular') {
//        $products->orderBy('variants.sale_count', 'desc');
//      }
//
//      if ($request['sortby'] == 'cheapest') {
//
//      }
//
//      if ($request['sortby'] == 'most_expensive') {
//
//      }
//    }
//    else
//    {
//
//    }
//    return dd($products);

  }

  public function searchFilter(Request $request)
  {

//    (!$request->paginatorNum) ? $request->paginatorNum = 1 : '';
    $products = Product::all();
//    $products = Product::join('product_has_variants', 'products.id', '=', 'product_has_variants.product_id')->get();
//    return dd($products);

    $products = $this->searchFilterLogic($request, $products);

  }

}
