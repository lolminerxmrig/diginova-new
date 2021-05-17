<?php

namespace Modules\Customers\Front\Http\Controllers;

use App\Models\State;
use App\Models\StoreAddress;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Modules\Customers\Front\Models\Cart;
use Modules\Customers\Front\Models\CustomerFavorite;
use Modules\Staff\Comment\Models\Comment;
use Modules\Staff\Comment\Models\CommentFeedback;
use Modules\Staff\Customer\Models\CustomerAddress;
use Modules\Staff\Product\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Product\Models\ProductWeight;
use Modules\Staff\Setting\Models\Setting;
use GuzzleHttp\Client;
use Modules\Customers\Auth\Models\Customer;


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

    if ($request['mode'] == 'buyers') {
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'buyers';
    } else {
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

    if ($request['mode'] == 'buyers') {
      $comments = $product->comments()->where('publish_status', 'accepted')->paginate(2);
      $mode = 'buyers';
    } else {
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
      'recommend' => isset($request->recommend) ? $request->recommend : '',
      'advantages' => isset($request->advantages) ? json_encode($request->advantages) : '',
      'disadvantages' => isset($request->disadvantages) ? json_encode($request->disadvantages) : '',
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
      } else {
        if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->exists()) {
          CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'dislike')->update([
            'status' => 'like',
          ]);
        }
        $likeFlag = 1;
      }
    } else {
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
      } else {
        if (CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->exists()) {
          CommentFeedback::where('comment_id', $comment_id)->where('customer_id', $customer_id)->where('status', 'like')->update([
            'status' => 'dislike',
          ]);
        }
        $dislikeFlag = 1;
      }
    } else {
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

    $customer = auth()->guard('customer')->user();
    $carts = $customer->carts;

    foreach ($carts as $item) {
      $old_sale_price = $item->old_sale_price;
      $old_promotion_price = $item->old_promotion_price;

      $new_sale_price = $item->new_sale_price;
      $new_promotion_price = $item->new_promotion_price;

      $item->update([
        'old_sale_price' => $new_sale_price,
        'new_sale_price' => $item->product_variant()->first()->sale_price,

        'old_promotion_price' => $new_promotion_price,
        'new_promotion_price' => $item->product_variant()->first()->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price'),
      ]);
    }

    $first_carts = $customer->carts()->where('type', 'first')->get();
    $second_carts = $customer->carts()->where('type', 'second')->get();
    $carts = $customer->carts;

    return view('front::cart', compact('carts', 'first_carts', 'second_carts'));

  }

  public function cartChange($variant_id, $count)
  {
    $customer = Auth::guard('customer')->user();
    $carts = $customer->carts;

    foreach ($carts as $item) {
      $old_sale_price = $item->old_sale_price;
      $new_sale_price = $item->new_sale_price;

      $old_promotion_price = $item->old_promotion_price;
      $new_promotion_price = $item->new_promotion_price;

      $item->update([
        'old_sale_price' => $new_sale_price,
        'new_sale_price' => $item->product_variant()->first()->sale_price,

        'old_promotion_price' => $new_promotion_price,
        'new_promotion_price' => $item->product_variant()->first()->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price'),
      ]);
    }

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $variant_id)->first()->update([
      'count' => $count,
    ]);
    $first_carts = $customer->carts()->where('type', 'first')->get();
    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::layouts.cart.changeCartResponseData', compact('first_carts'))->render(),
//        "miniCartData" => View::make('front::layouts.cart.miniCartData')->render(),
      ]
    ]);
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

  public function saveForLater($variant_id)
  {

    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $variant_id)->where('type', 'first')->first()->update([
      'type' => 'second',
    ]);

    return response()->json([
      'status' => true,
      'data' => [
        'redirectUrl' => route('front.cart'),
      ],
    ]);

  }

  public function removeFromCart($variant_id)
  {
    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $variant_id)->first()->delete();

    return redirect()->route('front.cart');
  }

  public function removeFromSaveForLater($variant_id)
  {
    $customer = Auth::guard('customer')->user();

    Cart::where('product_variant_id', $variant_id)->where('customer_id', $customer->id)->where('type', 'second')->first()->delete();

    return response()->json([
      'status' => true,
      'data' => [
        'redirectUrl' => route('front.cart'),
      ],
    ]);

  }

  public function moveToFirstCart($variant_id)
  {
    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('product_variant_id', $variant_id)->where('type', 'second')->first()->update([
      'type' => 'first',
      'count' => 1,
    ]);

    return response()->json([
      'status' => true,
      'data' => [
        'redirectUrl' => route('front.cart'),
      ],
    ]);
  }

  public function moveAllToFirstCart()
  {
    $customer = Auth::guard('customer')->user();

    Cart::where('customer_id', $customer->id)->where('type', 'second')->first()->update([
      'type' => 'first',
    ]);

    return response()->json([
      'status' => true,
      'data' => [
        'redirectUrl' => route('front.cart'),
      ],
    ]);
  }

  public function addAddress()
  {
    $states = State::all();
    $customer = Auth::guard('customer')->user();
    return view('front::add-address', compact('states', 'customer'));
  }

  public function cityLoader($state_id)
  {

    $state = State::find($state_id);
    $cities = $state->childs()->where('type', 'city')->get();

    foreach ($cities as $city) {
      $cityArray[] = ['id' => $city->id, 'name' => $city->name, 'state_id' => $city->state_id];
    }

    return response()->json([
      'status' => true,
      'data' => $cityArray,
    ]);

  }

  public function districtLoader($district_id)
  {

    $city = State::find($district_id);
    $districts = $city->childs()->where('type', 'district')->get();

    foreach ($districts as $district) {
      $districtArray[] = ['id' => $district->id, 'name' => $district->name, 'state_id' => $district->state_id];
    }

    return response()->json([
      'status' => true,
      'data' => isset($districtArray)? $districtArray : '',
    ]);

  }

  public function searchAddressReverse(Request $request)
  {

    $client = new Client();
    $map_apikey = Setting::where('name', 'map_apikey')->first()->value;
    $response = $client->get("https://map.ir/reverse?lat=$request->latitude&lon=$request->longitude&x-api-key={$map_apikey}");
    $response = json_decode($response->getBody(), true);

//    return $response;

    if (State::where('name', $response['city'])->where('type', 'city')->exists()) {
      $city_id = State::where('name', $response['city'])->where('type', 'city')->first()->id;
    }
    else {
      $city_id = State::where('name', $response['district'])->where('type', 'city')->first()->id;
    }
    $state_id = State::where('name', $response['province'])->where('type', 'state')->first()->id;

    return response()->json([
      'status' => true,
      'data' => [
        'address' => $response['address_compact'],
        'city_id' => $city_id,
        'state_id' => $state_id,
      ],
    ]);

  }

  public function searchAddress(Request $request)
  {

    $client = new Client();
    $map_apikey = Setting::where('name', 'map_apikey')->first()->value;
    $response = $client->get("https://map.ir/search/v2/autocomplete?text={$request->address}&x-api-key={$map_apikey}");
    $response = json_decode($response->getBody(), true);

    foreach ($response['value'] as $key => $item) {
      $responseItems[$key] = ['title' => $item['title'], 'address' => $item['address'], 'longitude' => $item['geom']['coordinates'][0], 'latitude' => $item['geom']['coordinates'][1], ];
    }


    return response()->json([
      'status' => true,
      'data' => $responseItems,

//      'data' => [
//        'title' => $response['value'],
//        'address' => $response['address_compact'],
//        'latitude' => $response['address_compact'],
//        'longitude' => $response['address_compact'],
//      ],

    ]);

  }

  public function saveAddressLogic($request)
  {
    $customer_id = Auth::guard('customer')->user()->id;

    $validator = Validator::make($request->all(), [
      "address.lat" => "required",
      "address.lng" => "required",
      "address.address" => "required",
      "address.bld_num" => "required",
      "address.apt_id" => "nullable",
      "address.post_code" => "required",
      "address.recipient_is_self" => "nullable",
      "address.first_name" => "nullable",
      "address.last_name" => "nullable",
      "address.national_id" => "nullable",
      "address.mobile_phone" => "nullable",
    ]);

    if ($validator->fails()) {
      $errors = $validator->errors();
      return response()->json([
        'status' => false,
        'data' => [
          'errors' => $errors,
        ]
      ]);
    }

    CustomerAddress::create([
      'lan' => $request->address['lat'],
      'len' => $request->address['lng'],
      'address' => $request->address['address'],
      'plaque' => $request->address['bld_num'],
      'unit' => $request->address['apt_id'],
      'postal_code' => $request->address['post_code'],
      'is_recipient_self' => (isset($request->address['recipient_is_self']) && ($request->address['recipient_is_self'] == "true"))? true : false,
      'recipient_firstname' => (isset($request->address['first_name']) && !is_null($request->address['first_name']))? $request->address['first_name'] : null,
      'recipient_lastname' => (isset($request->address['last_name']) && !is_null($request->address['last_name']))? $request->address['last_name'] : null,
      'recipient_national_code' => (isset($request->address['national_id']) && !is_null($request->address['national_id']))? $request->address['national_id'] : null,
      'recipient_mobile' => (isset($request->address['mobile_phone']) && !is_null($request->address['mobile_phone']))? ltrim($request->address['mobile_phone'], 0) : null,
//      'is_main' => $request->address[''],
      'customer_id' => $customer_id,
      'state_id' => (isset($request->address['district_id']) && !is_null($request->address['district_id']))? $request->address['district_id'] : $request->address['city_id'],
    ]);
  }

  public function saveAddress(Request $request)
  {
    $this->saveAddressLogic($request);
    return redirect()->route('front.shipping');
  }

  public function saveAddressFromShipping(Request $request)
  {

    $this->saveAddressLogic($request);

    $store_addresses = StoreAddress::all();
    $customer = Auth::guard('customer')->user();
    if ($customer->where('address_type', 'CustomerAddress')->exists()) {
      $delivery_type = 'customer';
    }
    else {
      $delivery_type = 'store';
    }

    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::ajax.shipping.changeAddress', compact('customer', 'store_addresses', 'delivery_type'))->render(),
        "stickyCart" => View::make('front::ajax.shipping.changeAddressUpdatePrice')->render(),
        "invalidData" => '<div class="swiper-container swiper-container-horizontal js-swiper-delivery-limit"><div class="swiper-wrapper"></div><div class="swiper-button-prev js-swiper-button-prev"></div><div class="swiper-button-next js-swiper-button-next"></div></div>',
        "hasInvalidItems" => false,
        "changeAddress" => false,
        "errorMessageForInvalidItems" => null,
        "nonInteraction" => false,
        "skipItemIds" => [],
        "errorMessage" => null
      ]
    ]);

  }

  public function shipping()
  {
    $customer = Auth::guard('customer')->user();

    if (!$customer->addresses()->exists()) {
      return redirect()->route('front.addAddress');
    }

    $states = State::all();
    $customer = Auth::guard('customer')->user();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $store_addresses = StoreAddress::all();
    $weights = ProductWeight::all();

    return view('front::shipping', compact('states', 'customer', 'first_carts', 'store_addresses', 'weights'));
  }

  public function changeSharedDeliveryAddress($id)
  {

    $store_addresses = StoreAddress::all();

    $customer = Auth::guard('customer')->user();

    $customer->update([
      "address_type" => "StoreAddress",
      "address_id" => $id
    ]);

    $delivery_type = 'store';

    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::ajax.shipping.changeAddress', compact('customer', 'store_addresses', 'delivery_type'))->render(),
        "stickyCart" => View::make('front::ajax.shipping.changeAddressUpdatePrice')->render(),
        "invalidData" => '<div class="swiper-container swiper-container-horizontal js-swiper-delivery-limit"><div class="swiper-wrapper"></div><div class="swiper-button-prev js-swiper-button-prev"></div><div class="swiper-button-next js-swiper-button-next"></div></div>',
        "hasInvalidItems" => false,
        "changeAddress" => false,
        "errorMessageForInvalidItems" => null,
        "nonInteraction" => false,
        "skipItemIds" => [],
        "errorMessage" => null
      ]
    ]);

  }

  public function changeCustomerDeliveryAddress($id)
  {
    $store_addresses = StoreAddress::all();

    $customer = Auth::guard('customer')->user();

    $customer->update([
      "address_type" => "CustomerAddress",
      "address_id" => $id
    ]);

    $delivery_type = 'customer';

    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::ajax.shipping.changeAddress', compact('customer', 'store_addresses', 'delivery_type'))->render(),
        "stickyCart" => View::make('front::ajax.shipping.changeAddressUpdatePrice')->render(),
        "invalidData" => '<div class="swiper-container swiper-container-horizontal js-swiper-delivery-limit"><div class="swiper-wrapper"></div><div class="swiper-button-prev js-swiper-button-prev"></div><div class="swiper-button-next js-swiper-button-next"></div></div>',
        "hasInvalidItems" => false,
        "changeAddress" => false,
        "errorMessageForInvalidItems" => null,
        "nonInteraction" => false,
        "skipItemIds" => [],
        "errorMessage" => null
      ]
    ]);
  }

  public function removeCustomerDeliveryAddress($id)
  {

    $customer = Auth::guard('customer')->user();

    CustomerAddress::where('customer_id', $customer->id)->where('id', $id)->first()->delete();

    $store_addresses = StoreAddress::all();

    if ($customer->where('address_type', 'CustomerAddress')->exists()) {
      $delivery_type = 'customer';
    }
    else {
      $delivery_type = 'store';
    }

    if (!$customer->delivery_address()->exists()) {
        $defualt_address_id = $customer->addresses()->latest()->first()->id;
        $customer->update([
          'address_type' => 'CustomerAddress',
          'address_id' => $defualt_address_id,
        ]);
    }

    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::ajax.shipping.changeAddress', compact('customer', 'store_addresses', 'delivery_type'))->render(),
        "stickyCart" => View::make('front::ajax.shipping.changeAddressUpdatePrice')->render(),
        "invalidData" => '<div class="swiper-container swiper-container-horizontal js-swiper-delivery-limit"><div class="swiper-wrapper"></div><div class="swiper-button-prev js-swiper-button-prev"></div><div class="swiper-button-next js-swiper-button-next"></div></div>',
        "hasInvalidItems" => false,
        "changeAddress" => false,
        "errorMessageForInvalidItems" => null,
        "nonInteraction" => false,
        "skipItemIds" => [],
        "errorMessage" => null
      ]
    ]);

  }

}
