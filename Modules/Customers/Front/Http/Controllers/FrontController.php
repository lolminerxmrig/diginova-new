<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Modules\Customers\Front\Models\Cart;
use Modules\Customers\Front\Models\CustomerFavorite;
use Modules\Customers\Panel\Models\Customer;
use Modules\Staff\Comment\Models\Comment;
use Modules\Staff\Comment\Models\CommentFeedback;
use Modules\Staff\Product\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
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
    $variant_defualt = variant_defualt($product);

    $variant_ids = [];
    foreach ($product->variants as $item) {
      if (!in_array($item->variant->id, $variant_ids)) {
        $variant_ids[] = $item->variant->id;
      }
    }
    $ratings = $product->ratings;

    return view('front::product', compact('product', 'variant_defualt', 'variant_ids'));
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

  public function productComments(Request $request, $product_id)
  {
    $product = Product::where('product_code', $product_id)->first();

    if ($request['mode'] == 'buyers'){
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'buyers';
    }
    else {
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'newest_comment';
    }

    if (Auth::guard('customer')->check()) {
      $customer_id = Auth::guard('customer')->user()->id;
    } else {
      $customer_id = null;
    }

    return view('front::ajax.product.comments', compact('comments', 'product', 'customer_id', 'mode'));
  }

  public function productCommentList(Request $request, $product_id)
  {

    $product = Product::where('product_code', $product_id)->first();

    if ($request['mode'] == 'buyers'){
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'buyers';
    }
    else {
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'newest_comment';
    }

    if (Auth::guard('customer')->check()) {
      $customer_id = Auth::guard('customer')->user()->id;
    } else {
      $customer_id = null;
    }

    return view('front::ajax.product.commentList', compact('comments', 'product', 'customer_id', 'mode'));
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

  public function addToFavorites($product_id)
  {
    $customer_id = Auth::guard('customer')->user()->id;
    $product_id = Product::where('product_code', $product_id)->first()->id;
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
      'status' => true,
      'data' => null,
    ]);

  }

  public function removeFromFavorites($product_id)
  {
    $customer_id = Auth::guard('customer')->user()->id;
    $product_id = Product::where('product_code', $product_id)->first()->id;
    CustomerFavorite::where('product_id', $product_id)->where('customer_id', $customer_id)->first()->delete();

    return response()->json([
      'status' => true,
      'data' => null,
    ]);
  }

  public function likeComment($comment_id)
  {

      if (Auth::guard('customer')->check()) {
        $customer_id = Auth::guard('customer')->user()->id;
      } else {
        return null;
      }

      if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->exists()) {
        if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->exists()) {
          CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->delete();
          $likeFlag = -1;
        }
        else {
          if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->exists()) {
            CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->update([
              'status' => 'like',
            ]);
          }
          $likeFlag = 1;
        }
      }
      else {
        CommentFeedback::create([
          'comment_id' => $comment_id,
          'customer_id' => $customer_id,
          'status' => 'like',
        ]);
        $likeFlag = 1;
      }

      $comment_likes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'like')->count();
      $comment_dislikes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'dislike')->count();

      return response()->json([
        'status' => true,
        'data' => [
          "likes" => $comment_likes_count,
          "dislikes" => $comment_dislikes_count,
          "type" => 1,
          "LikeFlag" => $likeFlag,
          "DislikeFlag" => 0,
        ],
      ], 200);

  }

  public function dislikeComment($comment_id)
  {

      if (Auth::guard('customer')->check()) {
        $customer_id = Auth::guard('customer')->user()->id;
      } else {
        return null;
      }

      if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->exists()) {
        if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->exists()) {
          CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->delete();
          $dislikeFlag = -1;
        }
        else {
          if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->exists()) {
            CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->update([
              'status' => 'dislike',
            ]);
          }
          $dislikeFlag = 1;
        }
      }
      else {
        CommentFeedback::create([
          'comment_id' => $comment_id,
          'customer_id' => $customer_id,
          'status' => 'dislike',
        ]);
        $dislikeFlag = 1;
      }

      $comment_likes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'like')->count();
      $comment_dislikes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'dislike')->count();

      return response()->json([
        'status' => true,
        'data' => [
          "likes" => $comment_likes_count,
          "dislikes" => $comment_dislikes_count,
          "type" => 1,
          "LikeFlag" => 0,
          "DislikeFlag" => $dislikeFlag,
        ],
      ], 200);

  }


  public function cart()
  {
    $customer_id = auth()->guard('customer')->user()->id;
    $carts = Cart::where('customer_id', $customer_id)->get();
    $this->updateCartPrices($carts);
    return view('front::cart', compact('carts'));
  }

  public function updateCartPrices($carts)
  {
    foreach ($carts as $cart)
    {
      Log::info('id: ' . $cart);
      $old_sale_price = $cart->old_sale_price;
      $new_sale_price = $cart->new_sale_price;

      $old_promotion_price = $cart->old_promotion_price;
      $new_promotion_price = $cart->new_promotion_price;
      Log::info('old');
      Log::info('old_promotion_price' . $old_promotion_price);
      Log::info('new_promotion_price' . $new_promotion_price);

      Log::info('new');
      Log::info('old_promotion_price' . $new_promotion_price);
      Log::info('new_promotion_price' . $cart->product_variant()->first()->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price'));

      $cart->update([
        'old_sale_price' => $new_sale_price,
        'new_sale_price' => $cart->product_variant()->first()->sale_price,

        'old_promotion_price' => $new_promotion_price,
        'new_promotion_price' => $cart->product_variant()->first()->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price'),
      ]);
    }
  }

  public function addToCart($variant_code)
  {

    $product_variant = ProductHasVariant::where('variant_code', $variant_code)->first();
    $promotion_price = $product_variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price');

    if (auth()->guard('customer')->check() && !Cart::where('product_variant_id', $product_variant->id)->exists()) {
      Cart::create([
        'customer_id' => Auth::guard('customer')->user()->id,
        'type' => 'first',
        'count' => 1,
        'old_sale_price' => $product_variant->sale_price,
        'old_promotion_price' => $promotion_price,
        'new_sale_price' => $product_variant->sale_price,
        'new_promotion_price' => $promotion_price,
        'product_variant_id' => $product_variant->id,
      ]);
    }

    return redirect()->route('front.cart');

  }

  public function cartChange($variant_code, $count)
  {
    $product_variant_id = ProductHasVariant::where('variant_code', $variant_code)->first()->id;
    $customer = Auth::guard('customer')->user();
    Cart::where('customer_id', $customer->id)->where('product_variant_id', $product_variant_id)->first()->update([
      'count' => $count,
    ]);

    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::layouts.cart.changeCartResponseData')->render(),
        "miniCartData" => View::make('front::layouts.cart.miniCartData')->render(),
        "data_layer" => [
          "event" => "eec.addToCart",
          "ecommerce" => [
            "currencyCode" => "EUR",
            "add" => [
              "actionField" => [
                "list" => "رنگ"
              ],
              "products" => [
                [
                  "name" => "درزگیر ترک سطوح نیپون مدل S100 وزن 1 کیلوگرم",
                  "id" => 4826524,
                  "price" => 415000,
                  "brand" => "رنگ نیپون",
                  "category" => "رنگ",
                  "variant" => 15477082,
                  "quantity" => 1,
                  "dimension6" => 1,
                  "dimension2" => 0,
                  "dimension9" => 5,
                  "metric6" => 1,
                  "metric7" => 2.2,
                  "metric8" => 1,
                  "dimension10" => 4,
                  "metric11" => 0,
                  "metric12" => 0,
                  "dimension11" => 0,
                  "dimension15" => 0,
                  "metric15" => false,
                  "dimension3" => "marketplace",
                  "dimension20" => "marketable",
                  "dimension7" => "none"
                ]
              ]
            ]
          ]
        ],
        "userRecommendationSidebar" => [],
        "userRecommendationCarousel" => []
      ]
    ]);
  }

  public function saveForLater($variant_code)
  {

    $product_variant_id = ProductHasVariant::where('variant_code', $variant_code)->first()->id;
    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $product_variant_id)->first()->update([
      'type' => 'second',
    ]);

    return response()->json([
      'status' => true,
      'data' => [
        'redirectUrl' => route('front.cart'),
      ],
    ]);

  }

  public function removeFromCart($variant_code)
  {
    $product_variant_id = ProductHasVariant::where('variant_code', $variant_code)->first()->id;
    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $product_variant_id)->first()->delete();

    return redirect()->route('front.cart');
  }

}
