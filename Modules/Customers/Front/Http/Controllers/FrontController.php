<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Modules\Customers\Front\Models\CustomerFavorite;
use Modules\Customers\Panel\Models\Customer;
use Modules\Staff\Comment\Models\Comment;
use Modules\Staff\Product\Models\Product;
use Illuminate\Http\Request;
use Modules\Staff\Product\Models\ProductHasVariant;

class FrontController extends Controller
{

  public function index()
  {
    $customer = Auth::guard('customer')->user();
    return view('front::index', compact('customer'));
  }

  public function productPage($product_code)
  {
    $product = Product::where('product_code', $product_code)->with('variants')->firstOrFail();

    if ($product->variants()->exists())
    {
      $min_variant_price = $product->variants->min('sale_price');
      $min_variants = $product->variants()->where('sale_price', $min_variant_price)->get();

      $min_promotion_price = 0;
      $min_promotion_variants = null;
      foreach ($product->variants as $variant)
      {
        if ($variant->promotions()->exists() && $variant->promotions()->min('promotion_price') > $min_promotion_price)
        {
          $min_promotion_price = ($variant->promotions()->exists())? $variant->promotions()->min('promotion_price') : $min_promotion_price;
          $min_promotion_variants = $variant->whereHas('promotions', function (Builder $query) use ($min_promotion_price) {
            $query->where('promotion_price', $min_promotion_price);
          })->get();
        }
      }

      if ($min_variant_price < $min_promotion_price) {
        $max_stock_count = $min_variants->max('stock_count');
        $variant_defualt = $min_variants->where('stock_count', $max_stock_count)->first();
      }
      else {
        $max_stock_count = $min_promotion_variants->max('stock_count');
        $variant_defualt = $min_promotion_variants->where('stock_count', $max_stock_count)->first();
      }
    }

    return view('front::product', compact('product', 'variant_defualt'));

  }

  public function addToFavorites($product_id)
  {
    $customer_id = Auth::guard('customer')->user()->id;
    if (!CustomerFavorite::where('product_id', $product_id)->where('customer_id', $customer_id)->exists()) {
      CustomerFavorite::create([
        'customer_id' => $customer_id,
        'product_id' => $product_id,
      ]);

      return response()->json([
        'status' => true,
        'data' => null,
      ]);

    }

    return response()->json([
      'status' => false,
      'data' => null,
    ]);

  }

  public function removeFromFavorites($product_id)
  {
      $customer_id = Auth::guard('customer')->user()->id;
      CustomerFavorite::where('product_id', $product_id)->where('customer_id', $customer_id)->first()->delete();

      return response()->json([
        'status' => true,
        'data' => null,
      ]);
  }

  public function mainSearch(Request $request)
  {

    $this->mainSearchFilters($request);

    return response()->json([
      'status' => true,
      'data' => View::make('front::ajax.mainSearch')->render(),
    ], 200);
  }

  public function mainSearchFilters()
  {

  }

  public function categoryPage()
  {

  }

  public function productComments($product_id)
  {
    $product = Product::find($product_id);
    $comments = Product::find($product_id)->comments()->where('publish_status', 'accepted')->get();
    return view('front::ajax.product.comments', compact('comments', 'product'));
  }

  public function createComment($product_id)
  {
    $product = Product::where('product_code', $product_id)->first();
    return view('front::create-comment', compact('product'));
  }

  public function createComments(Request $request, $product_code)
  {

    $product = Product::where('product_code', $product_code)->first();
    $is_buyed = is_buyed($product);

    $validator = Validator::make($request->all(), [
      'title' => 'nullable',
      'text' => 'required',
      'recommend' => "nullable|required_if:$is_buyed,true",
      'advantages' => 'nullable',
      'disadvantages' => 'nullable',
    ]);

    if ($validator->fails()) {
//      $errors = $validator->errors();
      return response()->json([
        'status' => false,
        'data' => [
          'errors' => 'خطا',
        ]
      ]);
    }

    Comment::create([
      'title' => $request->title,
      'text' => $request->text,
      'recommend' => isset($request->recommend)? $request->recommend : '',
      'advantages' => isset($request->advantages)? json_encode($request->advantages) : '',
      'disadvantages' => isset($request->disadvantages)? json_encode($request->disadvantages) : '',
      'product_id' => $product->id,
      'customer_id' => auth()->guard('customer')->user()->id,
    ]);

    return response()->json([
      'status' => true,
      'data' => null,
    ], 200);

  }




}
