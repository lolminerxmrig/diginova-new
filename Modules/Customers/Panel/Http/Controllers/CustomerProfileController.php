<?php

namespace Modules\Customers\Panel\Http\Controllers;

use App\Models\State;
use App\Models\VerifyAccount;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\Customers\Panel\Models\Customer;
use Modules\Customers\Panel\Models\CustomerLegal;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Shiping\Models\OrderStatus;


class CustomerProfileController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function index()
    {
        $customer = Auth::guard('customer')->user();
        return view('customerpanel::profile.index', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function personalInfo()
    {
      $customer = Auth::guard('customer')->user();
      $states = State::all();

      is_null($states)? $states = [] : '';

      if (!is_null($customer->birthdate)) {
        $date = date_create($customer->birthdate);
        $date = gregorian_to_jalali($date->format('Y'),$date->format('m'),$date->format('d'));
      } else {
          $date = [];
      }
      return view('customerpanel::profile.personalInfo', compact('customer', 'date', 'states'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function orders()
    {
        return view('customerpanel::profile.favorites');
    }

  /**
   * @param Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function personalInfoUpdate(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        if(isset($request->additionalinfo['first_name'])) {
          $validator = Validator::make($request->all(), [
            "*.first_name" => "required",
            "*.last_name" => "required",
          ]);
        }

        if(isset($request->additionalinfo['mobile_phone'])) {
            $validator = Validator::make($request->all(), [
              '*.mobile_phone' => 'required|unique:customers,mobile',
            ]);
        }

        if(isset($request->additionalinfo['email'])) {
            $validator = Validator::make($request->all(), [
              '*.email' => 'required',
            ]);
        }

        if(isset($request->additionalinfo['company_name'])) {
            $validator = Validator::make($request->all(), [
                '*.company_name' => 'required',
                '*.company_economic_number' => 'required',
                '*.company_national_identity_number' => 'required',
                '*.company_registration_number' => 'required',
                '*.company_state_id' => 'required',
                '*.company_city_id' => 'required',
                '*.company_phone' => 'required',
            ]);
        }

        if (isset($request->additionalinfo['national_identity_number'])) {
           $validator = Validator::make($request->all(), [
            '*.national_identity_number' => 'required|integer',
          ]);
        }

        if (isset($request->additionalinfo['is_wallet_preferred_for_refund'])) {
          $validator = Validator::make($request->all(), [
            '*.is_wallet_preferred_for_refund' => 'required',
          ]);
        }

        if (isset($request->additionalinfo['birth_year']) || isset($request->additionalinfo['birth_month']) || isset($request->additionalinfo['birth_day'])) {
             $validator = Validator::make($request->all(), [
                '*.birth_year' => 'required|integer',
                '*.birth_month' => 'required|integer',
                '*.birth_day' => 'required|integer',
            ]);
        }


        if ($validator->fails()) {
          $errors = $validator->errors();
          return response()->json([
            'status' => false,
            'data' => [
              'errors' => $errors,
            ]
          ]);
        }

        if(isset($request->additionalinfo['first_name'])) {
            Customer::find($customer->id)->update([
              'first_name' => $request->additionalinfo['first_name'],
              'last_name' => $request->additionalinfo['last_name'],
            ]);
        }

        if(isset($request->additionalinfo['mobile_phone'])) {
            $mobile_phone = ltrim($request->additionalinfo['mobile_phone'], 0);

            VerifyAccount::updateOrCreate(['mobile' => $mobile_phone],
                ['account_type' => 'customer',
                  'token' => rand(10000, 99999),
                ]);

            return response()->json([
                  'status' => true,
                  'data' => [
                      'phone' => false,
                      'email' => true,
                      'phoneCodeTtl' => 180,
                      'cryptFields' => '<input type="hidden" name="rc" value="' . $mobile_phone . '"/><input type="hidden" name="rd" value="ditJczZRVDFBQlQ2Qmc0V3B0RUZvdmYweTQ4aUpqUC9BUEo5K1lvcU9JajBidDk1MG40QkE1SnBXdFhVUjE2QXI2K2hMOWtGeUxpamxqZWFEWi8zbUE9PQ~~"/>',
                  ],
            ]);

        }

        if(isset($request->additionalinfo['national_identity_number'])) {
            Customer::find($customer->id)->update([
              'national_code' => $request->additionalinfo['national_identity_number'],
            ]);
        }

        if(isset($request->additionalinfo['email'])) {
            Customer::find($customer->id)->update([
              'email' => $request->additionalinfo['email'],
            ]);
        }

        if(isset($request->additionalinfo['is_wallet_preferred_for_refund'])) {
          Customer::find($customer->id)->update([
            'return_money_method' => 'wallet',
          ]);
        }

        if (isset($request->additionalinfo['birth_year'])) {
            $date = jalali_to_gregorian($request->additionalinfo['birth_year'], $request->additionalinfo['birth_month'], $request->additionalinfo['birth_day'], '-');
            $date = date_create($date);
            Customer::find($customer->id)->update([
              'birthdate' => $date,
            ]);
        }

        if(isset($request->additionalinfo['company_name'])) {
            CustomerLegal::create([
              'company_name' => $request->additionalinfo['company_name'],
              'economic_number' => $request->additionalinfo['company_economic_number'],
              'nationalـidentity' => $request->additionalinfo['company_national_identity_number'],
              'registration_number' => $request->additionalinfo['company_registration_number'],
              'phone' => $request->additionalinfo['company_phone'],
              'city_id' => $request->additionalinfo['company_city_id'],
              'customer_id' => $customer->id,
            ]);
        }

        return response()->json([
          'status' => true,
          'data' => true,
        ]);

    }

  /**
   * @param Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function ChangePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            '*.password_old' => 'required|integer',
            '*.password' => 'required|integer',
            '*.password2' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
              'status' => false,
            ]);
        }

        $customer = Auth::guard('customer')->user();

        if (!Hash::check($request->changepassword['password_old'], $customer->password))
        {
            return response()->json([
              'status' => false,
              'data' => [
                'errors' => [
                  'password_old' => 'رمز عبور فعلی را درست وارد نمایید'
                ]
              ]
            ]);
        }
        elseif ($request->changepassword['password'] == $request->changepassword['password2']) {
            Customer::find($customer->id)->update([
                'password' => Hash::make($request->changepassword['password']),
            ]);

            return response()->json([
              'status' => true,
              'data' => true,
            ]);
        }
        else {
            return response()->json([
              'status' => false,
            ]);
        }
    }

  /**
   * @param Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function confirmPhone(Request $request)
    {
        $mobile = VerifyAccount::where('mobile', $request->rc)->first();
        $token = VerifyAccount::where('mobile', $request->rc)->first()->token;

        if($mobile->created_at->addMinutes(3) < now())
        {
            if(EnNum($request->confirm['code']) == $token ) {
                $customer = Auth::guard('customer')->user();

                Customer::find($customer->id)->update([
                  'mobile' => $request->rc,
                ]);

                return response()->json([
                  'status' => true,
                  'data' => true,
                ]);

            } else {
                return response()->json([
                  'status' => false,
                  'data' => [
                    'errors' => [
                      'code' => 'کد وارد شده اشتباه است',
                    ]
                  ]
                ]);
            }
        } else {
            return response()->json([
              'status' => false,
              'data' => [
                'errors' => [
                  'code' => 'کد ارسالی منقضی شذه است',
                ]
              ]
            ]);
        }

    }

  /**
   * @param Request $request
   */
  public function sendConfirmCode(Request $request)
    {
        $mobile_phone = ltrim($request->rc, 0);

        VerifyAccount::updateOrCreate(['mobile' => $mobile_phone],
          ['account_type' => 'customer',
            'token' => rand(10000, 99999),
          ]);
    }

  /**
   * @return \Illuminate\Http\JsonResponse
   */
  public function wallet()
    {
        return response()->json([
          'status' => true,
          'data' => [
            'amount' => null,
            'activationUrl' => '',
          ]
        ]);
    }

  /**
   * @param Request $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function cardToIban(Request $request)
    {

      $customer = Auth::guard('customer')->user();
      Customer::find($customer->id)->update([
          'return_money_method' => 'bank_card',
          'bank_card_number' => $request->card_number,
      ]);

      return response()->json([
        'status' => true,
        'data' => true,
      ]);

    }

  /**
   * @param $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function cityLoader($id)
    {

        $cities = State::where('parent_id', $id)->get();

        foreach ($cities as $city) {
          $cityArray[] = ['id' => $city->id, 'name' => $city->name, 'state_id' => $city->state_id];
        }

        return response()->json([
            'status' => true,
            'data' =>
              $cityArray,
        ]);
    }

  /**
   * @param $id
   * @return \Illuminate\Http\JsonResponse
   */
  public function districtLoader($id)
    {
        $districts = State::where('parent_id', $id)->get();

        foreach ($districts as $district) {
            $districtArray[] = ['id' => $district->id, 'name' => $district->name, 'city_id' => $district->state_id];
        }

        return response()->json([
          'status' => true,
          'data' =>
            $districtArray,
        ]);
    }

  /**
   * @param $id
   */
  public function test($id)
    {
      $cities = State::where('parent_id', $id)->get();


      foreach ($cities as $city) {

        $citys[] = [
          'id' => $city->id,
          'name' => $city->name,
          'state_id' => $city->state_id
        ];
      }

      dd($citys);


    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function userHistory()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.userHistory', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function notification()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.notification', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function giftcards()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.notification', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function addresses()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.addresses', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function comments()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.comments', compact('customer'));
    }

  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function favorites()
    {
      $customer = Auth::guard('customer')->user();
      return view('customerpanel::profile.favorites', compact('customer'));
    }


  /**
   * customer orders page
   *
   * @param null $activeTab
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
  public function myOrders($activeTab = null)
  {

    $customer = Auth::guard('customer')->user();

    switch ($activeTab) {
      case "wait-for-payment":
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'awaiting_payment')->first()->id)->get();
        break;
      case "paid-in-progress":
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'processing')->first()->id)->get();
        break;
      case "delivered":
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'deliverd')->first()->id)->get();
        break;
      case "returned":
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'returned')->first()->id)->get();
        break;
      case "canceled":
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'canceled')->first()->id)->get();
        break;
      default:
        $orders = Order::where('order_status_id', OrderStatus::where('en_name', 'awaiting_payment')->first()->id)->get();
    }

    return view('customerpanel::profile.myOrders', compact('customer', 'orders'));

  }

  public function orderDetails($order_code)
  {

  }

}
