<?php

namespace Modules\Customers\Front\Http\Controllers;

use App\Models\State;
use App\Models\StoreAddress;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
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
use Modules\Staff\Order\Models\ConsignmentHasProductVariants;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Order\Models\OrderAddress;
use Modules\Staff\Order\Models\OrderHasConsignment;
use Modules\Staff\Order\Models\OrderStaticDetail;
use Modules\Staff\Peyment\Models\PeymentMethod;
use Modules\Staff\Peyment\Models\PeymentRecord;
use Modules\Staff\Product\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Product\Models\ProductWeight;
use Modules\Staff\Setting\Models\Setting;
use GuzzleHttp\Client;
use Modules\Customers\Auth\Models\Customer;
use Modules\Staff\Shiping\Http\postPishtaz;
use Modules\Staff\Shiping\Http\postSefareshi;
use Modules\Staff\Shiping\Models\DeliveryMethod;
use Illuminate\Http\Response;
use Modules\Staff\Shiping\Models\OrderStatus;
use Modules\Staff\Voucher\Models\Voucher;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;


class FrontController extends Controller
{

  public function test()
  {
    return view('front::shipping');
  }

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

  public function profileOrders($order_code)
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
      'data' => isset($districtArray) ? $districtArray : '',
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
    } else {
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
      $responseItems[$key] = ['title' => $item['title'], 'address' => $item['address'], 'longitude' => $item['geom']['coordinates'][0], 'latitude' => $item['geom']['coordinates'][1],];
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
    $customer = Auth::guard('customer')->user();

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
      'is_recipient_self' => (isset($request->address['recipient_is_self']) && ($request->address['recipient_is_self'] == "true")) ? true : false,
      'recipient_firstname' => (isset($request->address['first_name']) && !is_null($request->address['first_name'])) ? $request->address['first_name'] : null,
      'recipient_lastname' => (isset($request->address['last_name']) && !is_null($request->address['last_name'])) ? $request->address['last_name'] : null,
      'recipient_national_code' => (isset($request->address['national_id']) && !is_null($request->address['national_id'])) ? $request->address['national_id'] : null,
      'recipient_mobile' => (isset($request->address['mobile_phone']) && !is_null($request->address['mobile_phone'])) ? ltrim($request->address['mobile_phone'], 0) : null,
//      'is_main' => $request->address[''],
      'customer_id' => $customer_id,
      'state_id' => (isset($request->address['district_id']) && !is_null($request->address['district_id'])) ? $request->address['district_id'] : $request->address['city_id'],
    ]);

    if (!$customer->delivery_address()->exists()) {
      $defualt_address_id = $customer->addresses()->latest()->first()->id;
      $customer->update([
        'address_type' => 'CustomerAddress',
        'address_id' => $defualt_address_id,
      ]);
    }

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
    } else {
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

    foreach ($weights as $i => $weight) {
      foreach ($first_carts as $item) {
        if ($item->product_variant()->first()->product->weight()->id == $weight->id) {
          $has_consignment = true;
        }

        if (isset($has_consignment) && $has_consignment) {
          $sum_weight = 0;
          foreach ($first_carts as $key => $cart) {
            if ($cart->product_variant()->first()->product->weight()->id == $weight->id) {
              $sum_weight += $cart->product_variant()->first()->product->weight;
              if ($first_carts->count() - 1 == $key) {
                if ($weight->deliveryMethods()->exists()) {
                  foreach ($weight->deliveryMethods()->where('status', 'active')->get() as $key => $method) {
                    if ($sum_weight > 5000 && $method->id == 1) {
                      continue;
                    }
                    $method_ids[] = $method->id;
                  }
                }
              }
            }
          }
        }
      }
    }

    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    return view('front::shipping', compact('states', 'customer', 'first_carts', 'store_addresses', 'weights', 'consignment_shipping_cost', 'method_ids'));

  }

  public function shippingCost(Request $request)
  {
    $customer = Auth::guard('customer')->user();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $weights = ProductWeight::all();
    $method_ids = $request->method_ids;

    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);
    return response()->json([
      "status" => true,
      "data" => [
        "data" => View::make('front::ajax.shipping.changeAddressUpdatePrice', compact('customer', 'first_carts', 'weights', 'consignment_shipping_cost', 'method_ids'))->render(),
      ]
    ]);
  }

  public function shippingCostLogic($customer, $weights, $method_ids)
  {

    $store_addresses = StoreAddress::all();

    if ($customer->where('address_type', 'CustomerAddress')->exists()) {
      $delivery_type = 'customer';
    } else {
      $delivery_type = 'store';
    }

    $cart = $customer->carts()->where('type', 'first')->get();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $weights = ProductWeight::all();

    $settings = Setting::all();
    $store_state_id = ($settings->where('name', 'store_city')->count() && $settings->where('name', 'store_city')->first()->states()->exists()) ? $settings->where('name', 'store_city')->first()->states()->first()->id : 1;

    if ($customer->where('address_type', 'CustomerAddress')->exists()) {
      $customer_state_id = $customer->delivery_address->id;
    } else {
      $customer_state_id = 0;
    }

    foreach ($weights as $i => $weight) {
      foreach ($cart as $key => $item) {
        if (($item->product_variant()->first()->product->weight()->id == $weight->id)) {
          $fillable_weight_ids[] = $weight->id;
          if (isset($consignment_weight[$weight->id])) {
            $consignment_weight[$weight->id] += $item->product_variant()->first()->product->weight;
          } else {
            $consignment_weight[$weight->id] = $item->product_variant()->first()->product->weight;
          }
        }
      }
    }

    $fillable_weight_ids = array_unique($fillable_weight_ids);

    foreach ($fillable_weight_ids as $j => $f_weight_id) {
      if (!isset($method_ids[$j])) {
        $method_ids[$j] = $weight->deliveryMethods()->where('status', 'active')->first()->id;
      }

      if ($method_ids[$j] == 2 && $customer_state_id !== 0) {
        $consignment_shipping_cost[$f_weight_id] = postPishtaz::pishtaz($store_state_id, $customer_state_id, $consignment_weight[$f_weight_id])->getPrice();
        if (($consignment_shipping_cost[$f_weight_id] % 10000) > 5000) {
          $consignment_shipping_cost[$f_weight_id] = $consignment_shipping_cost[$f_weight_id] + (10000 - $consignment_shipping_cost[$f_weight_id] % 10000);
        } else {
          $consignment_shipping_cost[$f_weight_id] = $consignment_shipping_cost[$f_weight_id] - ($consignment_shipping_cost[$f_weight_id] % 10000);
        }
      }

      if ($method_ids[$j] == 1 && $customer_state_id !== 0) {
        $consignment_shipping_cost[$f_weight_id] = postSefareshi::sefarshi($store_state_id, $customer_state_id, $consignment_weight[$f_weight_id])->getPrice();
        if (($consignment_shipping_cost[$f_weight_id] % 10000) > 5000) {
          $consignment_shipping_cost[$f_weight_id] = $consignment_shipping_cost[$f_weight_id] + (10000 - $consignment_shipping_cost[$f_weight_id] % 10000);
        } else {
          $consignment_shipping_cost[$f_weight_id] = $consignment_shipping_cost[$f_weight_id] - ($consignment_shipping_cost[$f_weight_id] % 10000);
        }
      } elseif ($method_ids[$j] == 3) {
        $consignment_shipping_cost[$f_weight_id] = -1;
      } elseif ($method_ids[$j] == 4) {
        $consignment_shipping_cost[$f_weight_id] = !is_null(DeliveryMethod::find(4)->delivery_cost) ? DeliveryMethod::find(4)->delivery_cost : 0;
      }
      if (($method_ids[$j] == 1 || $method_ids[$j] == 2) && $customer_state_id == 0) {
        $consignment_shipping_cost[$f_weight_id] = 0;
      }

    }

    return $consignment_shipping_cost;

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

    if (CustomerAddress::where('customer_id', $customer->id)->where('id', $id)->exists()) {
      CustomerAddress::where('customer_id', $customer->id)->where('id', $id)->first()->delete();
    }

    $store_addresses = StoreAddress::all();

    if ($customer->where('address_type', 'CustomerAddress')->exists()) {
      $delivery_type = 'customer';
    } else {
      $delivery_type = 'store';
    }

    if (!$customer->delivery_address()->exists() && $customer->addresses()->exists()) {
      $defualt_address_id = $customer->addresses()->latest()->first()->id;
      $customer->update([
        'address  _type' => 'CustomerAddress',
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

  public function saveShippingToCookie(Request $request)
  {
    $method_ids = json_encode($request->method_ids);

    setcookie('method_ids', $method_ids, time() + (10 * 365 * 24 * 60 * 60), "/");
    return $_COOKIE["method_ids"];

  }

  public function returnError($errorMessage)
  {
    return response()->json([
      'status' => false,
      'data' => [
        'errors' => $errorMessage,
      ]
    ]);
  }

  public function payment()
  {
    if (!isset($_COOKIE['method_ids'])) {
      return abort(404);
    }

    $customer = Auth::guard('customer')->user();
    $weights = ProductWeight::all();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);
    $peyment_methods = PeymentMethod::where('status', 'active')->get();

    return view('front::peyment', compact('customer', 'weights', 'first_carts', 'consignment_shipping_cost', 'method_ids', 'peyment_methods'));
  }

  public function paymentVoucher(Request $request)
  {

    $customer = Auth::guard('customer')->user();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $weights = ProductWeight::all();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    $code = $request->code;
    $code = 'PZOD2';


    if (!Voucher::where('code', $code)->where('status', 'active')->exists()) {
      return $this->returnError('این کد تخفیف قابل استفاده نیست.');
    }

    $voucher = Voucher::where('code', $code)->where('status', 'active')->first();

    if (!is_null($voucher->start_at) && $voucher->where('start_at', '>=', Carbon::now())->exists()) {
      return $this->returnError('زمان استفاده از کد تخفیف هنوز شروع نشده است.');
    }

    if (!is_null($voucher->end_at) && $voucher->where('end_at', '<=', Carbon::now())->exists()) {
      return $this->returnError('زمان استفاده از این کد تخفیف پایان یافته است.');
    }

    if (!is_null($voucher->max_usable) && $voucher->max_usable == 0) {
      return $this->returnError('تعداد قابل استفاده از این کد تخفیف پایان یافته است.');
    }

    if ($voucher->type == 'first_purchase' && $customer->orders()->exists()) {
      return $this->returnError('این کد تخفیف فقط برای مشتریان خرید اولی قابل استفاده می باشد.');
    }

    $voucher_varints_cost =  $this->voucherCostLogic($customer, $voucher, $method_ids);

    if (PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->exists()) {
      PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->delete();
    }

    PeymentRecord::create([
      'status' => 'unsuccessful',
      'price' => $voucher_varints_cost,
      'method_type' => 'Voucher',
      'method_id' => $voucher->id,
      'customer_id' => $customer->id,
    ]);

    return response()->json([
      "status" => true,
      "data" => [
        "voucherDiscount" => $voucher_varints_cost,
        "voucher_code" => $code,
      ],
    ]);

  }

  public function voucherCostLogic($customer, $voucher, $method_ids)
  {

    $cart = $customer->carts()->where('type', 'first')->get();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $weights = ProductWeight::all();
    $voucher_varints_cost = 0;
    $voucher_categories_id = [];

    if ($voucher->categories()->exists()) {
      $category = $voucher->categories()->first();
      do {
        $voucher_categories_id[] = $category->id;
        $category = $category->parent;
      } while (isset($category));
    }

    foreach ($weights as $i => $weight) {
      foreach ($cart as $key => $item) {
        if (($item->product_variant()->first()->product->weight()->id == $weight->id)) {
          // چک میکنه که تنوع کالایی پروموشن داره یا نه
          $product_variant = $item->product_variant()->first();
          if ($product_variant->promotions()->exists()) {
            if ($product_variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->exists()) {
              $promotion_price = $product_variant->promotions()->whereDate('start_at', '<=', now())->whereDate('end_at', '>=', now())->where('status', 'active')->orWhere('status', 1)->min('promotion_price');
            }
            else {
              $promotion_price = $product_variant->sale_price;
            }
          }

          // اگه پروموشن داشت رد میکنه
          if ($product_variant->sale_price !== $promotion_price) {
            continue;
          }

          // اگه مبلغ کل سبد خرید کمتر از حداقل مبلغ مورد نیاز برای اعمال کد تخفیف بود رد کنه
          $sum_cart_cost = $this->sumCartCost($first_carts);
          if ($voucher->min_product_price !== null && $sum_cart_cost <= $voucher->min_product_price) {
            continue;
          }

          // اگه کد تخفیف محدود به دسته بندی خاصی بود چک کنه سبد رو و هرکدوم که تو اون دسته و زیر مجموعه هاش نبود رو رد کنه
          if ($voucher->categories()->exists()) {
            $variant_category_id = $item->product_variant()->first()->product->category()->first()->id;
            if (count($voucher_categories_id) && !in_array($variant_category_id, $voucher_categories_id)) {
              continue;
            }
          }

          $voucher_varints_cost += (($product_variant->sale_price / 100) * $voucher->percent);

        }
      }
    }

    if (!is_null($voucher->up_to) && $voucher_varints_cost > $voucher->up_to) {
      $voucher_varints_cost = $voucher->up_to;
    }

    $sum_cart_cost = $this->sumCartCost($first_carts);
    if (!is_null($voucher->up_to) && $voucher_varints_cost > $voucher->up_to && $sum_cart_cost < $voucher_varints_cost) {
      $voucher_varints_cost = $sum_cart_cost;
    }

    return $voucher_varints_cost;

  }

  public function sumCartCost($first_carts)
  {
    $sum_sale_price = 0;
    $sum_promotion_price = 0;

    foreach($first_carts as $priceItem)
    {
      $sum_sale_price += ($priceItem->new_sale_price * $priceItem->count);
      if ($priceItem->new_sale_price > $priceItem->new_promotion_price) {
        $sum_promotion_price += (($priceItem->new_sale_price - $priceItem->new_promotion_price) * $priceItem->count);
      }
    }

    return $sum_sale_price - $sum_promotion_price;
  }

  public function removeVoucher()
  {

    $customer = Auth::guard('customer')->user();

    if (PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->exists()) {
      PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->delete();
    }

    return response()->json([
      'status' => true,
      'data' => null,
    ], 200);

  }

  public function finalGetOrderCartAmount()
  {
    // اگه کوکی سیو نشده بود یا یوزر دیلیت زده بود ریدایررکت بشه به صفحه shipping
    if (!isset($_COOKIE['method_ids'])) {
      return redirect()->route('front.shipping');
    }

    $customer = Auth::guard('customer')->user();
    $weights = ProductWeight::all();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $peyment_methods = PeymentMethod::where('status', 'active')->get();
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    // مجموع قیمت اصلی فروش محصول بدون پروموشن
    $sum_sale_price = 0;
    foreach($first_carts as $priceItem){
      $sum_sale_price += ($priceItem->new_sale_price * $priceItem->count);
    }

    // مجموع قیمت پروموشن
    $sum_promotion_price = 0;
    foreach($first_carts as $priceItem) {
      if ($priceItem->new_sale_price > $priceItem->new_promotion_price) {
        $sum_promotion_price += (($priceItem->new_sale_price - $priceItem->new_promotion_price) * $priceItem->count);
      }
    }

    // هزینه حمل
    $m = 1;
    $sum_shipping_cost = 0;
    foreach($consignment_shipping_cost as $key => $item) {
      $delivery_method = \Modules\Staff\Shiping\Models\DeliveryMethod::find($method_ids[$m-1]);
      $sum_shipping_cost =+ $item;
      $m++;
    }

    // مبلغ نهایی بدون کد تخفیف
    return $final_sum_price = $sum_sale_price - $sum_promotion_price + $sum_shipping_cost;

  }

  public function finalGetOrderVoucherAmount()
  {

    $customer = Auth::guard('customer')->user();

    if (!PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->exists()) {
      return null;
    }

    $first_carts = $customer->carts()->where('type', 'first')->get();
    $weights = ProductWeight::all();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);

    $voucher_id = PeymentRecord::where('customer_id', $customer->id)->where('method_type', 'Voucher')->where('status', 'unsuccessful')->first()->id;
    $voucher = Voucher::find($voucher_id);
    $code = Voucher::find($voucher_id)->code;

    if (!Voucher::where('code', $code)->where('status', 'active')->exists()) {
      return null;
    }

    if (!is_null($voucher->start_at) && $voucher->where('start_at', '>=', Carbon::now())->exists()) {
      return null;
    }

    if (!is_null($voucher->end_at) && $voucher->where('end_at', '<=', Carbon::now())->exists()) {
      return null;
    }

    if (!is_null($voucher->max_usable) && $voucher->max_usable == 0) {
      return null;
    }

    if ($voucher->type == 'first_purchase' && $customer->orders()->exists()) {
      return null;
    }

    $voucher_varints_cost =  $this->voucherCostLogic($customer, $voucher, $method_ids);

    return $voucher_varints_cost;

  }

  public function submitOrder(Request $request)
  {
//    dd($request->all());
    $customer = Auth::guard('customer')->user();
    $final_sum_price = $this->finalGetOrderCartAmount();
    $final_sum_voucher = $this->finalGetOrderVoucherAmount();
    $first_carts = $customer->carts()->where('type', 'first')->get();
    $method_ids = json_decode($_COOKIE['method_ids'], true);
    $weights = ProductWeight::all();
    $consignment_shipping_cost = $this->shippingCostLogic($customer, $weights, $method_ids);
    $gateway_name = PeymentMethod::findOrFail($request->bank_id)->en_name;
    $gateway = PeymentMethod::findOrFail($request->bank_id);


    // مجموع قیمت پروموشن
    $sum_promotion_price = 0;
    foreach($first_carts as $priceItem) {
      if ($priceItem->new_sale_price > $priceItem->new_promotion_price) {
        $sum_promotion_price += (($priceItem->new_sale_price - $priceItem->new_promotion_price) * $priceItem->count);
      }
    }


    if (!is_null($final_sum_voucher) && $final_sum_price > $final_sum_voucher) {
      $final_sum_price = $final_sum_price - $final_sum_voucher;
    }


    if (Order::count()) {
      $order_code = Order::max('order_code')+1;
    }
    else {
      $order_code = 3000000;
    }

    $order_status_id = OrderStatus::where('en_name', 'awaiting_peyment')->first()->id;

    //ایجاد سفارش
    Order::create([
      'order_code' => $order_code,
      'order_status_id' => $order_status_id,
      'customer_id' => $customer->id,
      'cost' => $final_sum_price,
      'discount' => $sum_promotion_price + $final_sum_voucher,
    ]);

    $order_id = Order::where('order_code', $order_code)->first()->id;

    if (OrderHasConsignment::count()) {
      $delivery_code = OrderHasConsignment::max('delivery_code')+1;
      $consignment_code = OrderHasConsignment::max('consignment_code')+1;
    }
    else {
      $delivery_code = 10000;
      $consignment_code = 4000000;
    }


    $i = 0;
    foreach ($consignment_shipping_cost as $key => $shipping_cost)
    {

      // ایجاد مرسوله
      OrderHasConsignment::create([
        'consignment_code' => $consignment_code,
        'shiping_cost' => $shipping_cost,
        'delivery_code' => $delivery_code,
        'tracking_code' => null,
        'delivery_at' => null,
        'order_status_id' => $order_status_id,
        'delivery_method_id' => $method_ids[$i],
        'order_id' => $order_id,
      ]);

      $consignment_id = OrderHasConsignment::where('consignment_code', $consignment_code)->first()->id;

      // اضافه کردن تنوع به مرسوله
      foreach ($first_carts as $item)
      {

        // ایدی حجم: key
        if ($item->product_variant()->first()->product->weight()->id == $key)
        {
          $consignment_p_v_id = ConsignmentHasProductVariants::insertGetId([
            'count' => $item->count,
            'variant_price' => $item->new_sale_price,
            'promotion_price' => $item->new_promotion_price,
            'product_id' => $item->product_variant()->first()->product->id,
            'consignment_id' => $consignment_id,
            'order_id' => $order_id,
            'order_status_id' => $order_status_id,
            'product_variant_id' => $item->product_variant_id,
//            'promotion_type' => ,
//            'promotion_percent' => ,
          ]);

//          $product_variant = ProductHasVariant::find($item->product_variant_id);
//          $consignment_p_v = ConsignmentHasProductVariants::find($consignment_p_v_id);
//
//          $consignment_p_v->product_variant()->attach($product_variant);




          $consignment_product_variant_id = ConsignmentHasProductVariants::where('product_variant_id', $item->product_variant_id)->first()->id;

          OrderStaticDetail::create([
            'product_title_fa' => $item->product_variant()->first()->product->title_fa,
            'variant_name' => $item->product_variant()->first()->variant->name,
            'warranty_name' => $item->product_variant()->first()->warranty->name,
            'seller' => 'site',
            'consignment_product_variant_id' => $consignment_product_variant_id,
          ]);
        }

      }

      $i++;
    }

    $default_address = $customer->delivery_address;

    OrderAddress::create([
      'lan' => $default_address->lan,
      'len' => $default_address->len,
      'address' => $default_address->address,
      'plaque' => $default_address->plaque,
      'unit' => $default_address->unit,
      'postal_code' => $default_address->postal_code,
      'firstname' => !is_null($default_address->recipient_firstname)? $default_address->recipient_firstname : $customer->first_name,
      'lastname' => !is_null($default_address->recipient_lastname)? $default_address->recipient_lastname : $customer->last_name,
      'national_code' => !is_null($default_address->recipient_national_code)? $default_address->recipient_national_code : $customer->national_code,
      'mobile' => !is_null($default_address->recipient_mobile)? $default_address->recipient_mobile : $customer->mobile,
      'customer_id' => $default_address->customer_id,
      'state_id' => $default_address->state_id,
      'order_id' => $order_id,
    ]);


    config()->set([
      'payment.default' => $gateway_name,
    ]);

    $order = Order::find($order_id);

    invoiceـnumber:
    $invoiceـnumber = rand(1000000000, 9999999999);
    if (PeymentRecord::where('invoiceـnumber', $invoiceـnumber)->exists()) {
      goto invoiceـnumber;
    }


    if ($gateway_name !== 'cod') {
      $invoice = new Invoice;
      $invoice->amount($order->cost/10);
      $invoice->via($gateway_name);

      return Payment::purchase(
        $invoice,
        function($driver, $transactionId) use ($order, $gateway, $invoiceـnumber, $customer) {
//          dd($order->cost);
          PeymentRecord::create([
            'invoiceـnumber' => $invoiceـnumber,
            'status' => 'awaitingـayment',
            'price' => $order->cost,
            'order_id' => $order->id,
            'method_type' => 'PeymentMethod',
            'method_id' => $gateway->id,
            'customer_id' => $customer->id,
          ]);

          setcookie('invoiceـnumber', $invoiceـnumber, time() + (10 * 365 * 24 * 60 * 60), "/");

        }
      )->pay()->render();

    }

  }

  public function paymentTest(Request $request)
  {

    $transaction_id = $request->token;
    $invoiceـnumber = $_COOKIE["invoiceـnumber"];

    try {

      $receipt = Payment::transactionId($transaction_id)->verify();
      PeymentRecord::where('invoiceـnumber', $invoiceـnumber)->update([
        'tracking_code' => $receipt->getReferenceId(),
        'status' => 'successful',
      ]);


    } catch (InvalidPaymentException $exception) {
      /**
      when payment is not verified, it will throw an exception.
      We can catch the exception to handle invalid payments.
      getMessage method, returns a suitable message that can be used in user interface.
       **/
      echo $exception->getMessage();

    }
  }

  public function orderStatus($order_code)
  {

    if (!Order::where('order_code', $order_code)->exists()) {
      abort(404);
    }

    $order = Order::where('order_code', $order_code)->first();

    if ($order->status->en_name !== 'accepted' && $order->status->en_name !== 'unsuccessfulـpayment') {
      abort(404);
    }

    return view('front::order-status', compact('order'));

  }

  public function repaymentOrder($order_code)
  {

    $order = Order::where('order_code', [$order_code])->first();
    $gateway = $order->peyment_records()->where('method_type', 'PeymentMethod')->first()->peymentMethod;
    $gateway_name = $order->peyment_records()->where('method_type', 'PeymentMethod')->first()->peymentMethod->name;

    if ($gateway_name !== 'cod') {
      $invoice = new Invoice;
      $invoice->amount($order->cost/10);
      $invoice->via($gateway_name);

      return Payment::purchase($invoice)->pay()->render();
    }

  }

}
