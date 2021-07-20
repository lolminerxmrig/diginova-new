<?php

namespace Modules\Staff\Auth\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Modules\Staff\Auth\Models\Staff;
use Modules\Staff\Order\Models\ConsignmentHasProductVariants;
use Modules\Staff\Order\Models\Order;
use Modules\Staff\Peyment\Models\PeymentMethod;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Setting\Models\Setting;


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

    public function forgotPage()
    {
        return view('staffauth::forgot');
    }

    public function forgot(Request $request)
    {
        if(Staff::where('email', $request->email)->first())
        {

        }
        else
        {
            return back()->withErrors([
                'wrongEmailPass' => 'کسی با این ایمیل در دیجی‌کالا ثبت نام نکرده است',
            ]);
        }
    }
}
