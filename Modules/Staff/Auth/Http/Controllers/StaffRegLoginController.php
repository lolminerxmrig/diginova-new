<?php

namespace Modules\Staff\Auth\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\Staff\Auth\Models\Staff;
use Modules\Staff\Order\Models\ConsignmentHasProductVariants;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Peyment\Models\PeymentMethod;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Setting\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class StaffRegLoginController extends Controller
{
    public function indexPage()
    {
      if (Auth::guard('staff')->check()) {
        return redirect()->route('staff.dashboardPage');
      }
      else {
        return redirect()->route('staff.loginPage');
      }
    }

    public function loginPage()
    {
      if (Auth::guard('staff')->check()) {
        return redirect()->route('staff.dashboardPage');
      }
      else {
        return view('staffauth::login');
      }
    }

    public function dashboardPage()
    {
        $peyment_methods = PeymentMethod::all();
        $settings = Setting::all();
        $products = Product::all();
        $consignments = ConsignmentHasProductVariants::all();

        $send_today_only = Order::whereHas('consignments', function (Builder $query){
          $query->where('delivery_at','<=' , Carbon::today());
        })->count();

        $send_tomorrow_only = Order::whereHas('consignments', function (Builder $query){
          $query->where('delivery_at','>' , Carbon::today());
        })->count();

        $delivery_order_delay = Order::whereHas('consignments', function (Builder $query){
          $query->whereDate('delivery_at','<' , Carbon::today());
        })->where('order_status_id', '!=', 1)->where('order_status_id', '!=', 7)->count();

        return view('staffauth::dashboard',
          compact('peyment_methods', 'settings', 'products', 'consignments', 'send_tomorrow_only', 'send_today_only', 'delivery_order_delay'));
    }

    public function confirm(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (isset($request->remember) && $request->remember == "true") {
          if (Auth::guard('staff')->attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect()->route('staff.dashboardPage');
          }
        } else {
          if (Auth::guard('staff')->attempt($credentials, false)) {
            $request->session()->regenerate();
            return redirect()->route('staff.dashboardPage');
          }
        }


        return back()->withErrors([
            'wrongEmailPass' => 'نام کاربری یا رمز عبور اشتباه است لطفا دوباره تلاش نمایید',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('staff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('staff.indexPage');
    }

    public function forgotPage(Request $request)
    {
      return view('staffauth::forgot');
    }

    public function forgot(Request $request)
    {

          $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:staff',
          ]);

          if ($validator->fails()) {
            return back()->withErrors([
                'wrongEmailPass' => 'کاربری با این ایمیل ثبت نام نکرده است',
            ]);
          }

          $token = Str::random(64);

          Staff::where('email', $request->email)->update([
            'remember_token' => $token,
            'created_at' => Carbon::now(),
          ]);

          if (Setting::where('name', 'fa_store_name')->exists()){
            $fa_store_name = Setting::where('name', 'fa_store_name')->first()->value;
          } else {
            $fa_store_name = 'دیجی نوا';
          }

          $email = $request->email;

          Mail::send('staffauth::verify', compact('token', 'fa_store_name', 'email'), function($message) use($request, $fa_store_name){
            $message->to($request->email);
            $message->subject('فراموشی رمز عبور' . ' ' . $fa_store_name);
          });

          return redirect()->route('staff.succcessfulSent');

    }

    public function succcessfulSent()
    {
      return view('staffauth::successful-sent');
    }

    public function resetPassword($token)
    {
      if ($token !== '' && !is_null($token) && Staff::where('remember_token', $token)->exists()){
        $email = Staff::where('remember_token', $token)->first()->email;
      } else {
//        abort(404);
      }
      return view('staffauth::reset', compact('email', 'token'));
    }

    public function updatePassword(Request $request)
    {

      $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:staff',
        'password' => 'required|string|min:6|confirmed',
        'password_confirmation' => 'required',
      ]);

      if ($validator->fails()) {
        return back()->withErrors([
          'wrongEmailPass' => 'کاربری با این ایمیل ثبت نام نکرده است',
        ]);
      }

      if ($request->token !== '' && !is_null($request->token) && Staff::where('remember_token', $request->token)->where('email', $request->email)->exists() && $request->password == $request->password_confirmation)
      {
        Staff::where('email', $request->email)->update([
          'password' => Hash::make($request->password),
        ]);
      }
      else {
//        abort(404);
      }

      return redirect()->route('staff.loginPage');

    }
}
