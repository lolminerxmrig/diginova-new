<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
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

  public function productPageTest($product_code)
  {
    $product = Product::where('product_code', $product_code)->with('variants')->firstOrFail();
    $variant_ids = [];
    foreach ($product->variants as $item) {
      if (!in_array($item->variant->id, $variant_ids)) {
        $variant_ids[] = $item->variant->id;
      }
    }

    dd($variant_ids);
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

  public function addToCart($product_variant)
  {

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
          Log::info('a1');
          if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->exists()) {
            CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->update([
              'status' => 'like',
            ]);
          }
          $likeFlag = 1;
        }
      }
      else {
        Log::info('a2');
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



}
