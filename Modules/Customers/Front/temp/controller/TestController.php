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
use Modules\Staff\Comment\Models\CommentFeedback;
use Modules\Staff\Product\Models\Product;
use Illuminate\Http\Request;
use Modules\Staff\Product\Models\ProductHasVariant;

class TestController extends Controller
{

  public function likeComment($comment_id)
  {
    $customer_id = Auth::guard('customer')->user()->id;
    if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->exists()) {
      $comment_feedback = CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->first();
      $comment_feedback->update([
        'status' => 'like',
      ]);

      $comment_likes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'like')->count();
      $comment_dislikes_count = CommentFeedback::where('comment_id', $comment_id)->where('status', 'dislike')->count();

      return response()->json([
        'status' => true,
        'data' => [
          "likes" => $comment_likes_count,
          "dislikes" => $comment_dislikes_count,
          "type" => 1,
          "LikeFlag" => 0,
          "DislikeFlag" => 0,
        ],
      ], 200);

    }
  }

}
