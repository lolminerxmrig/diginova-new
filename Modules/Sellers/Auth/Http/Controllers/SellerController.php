<?php

namespace Modules\Sellers\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Modules\Sellers\Auth\Models\Seller;

class SellerController extends Controller
{
    public function indexPage()
    {
        return redirect()->route('seller-login');
    }

    public function loginPage()
    {
        return view('sellerauth::login');
    }

    public function dashboardPage()
    {
        return view('sellerauth::dashboard');
    }

    public function confirm(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('seller')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('seller.dashboardPage');
        }

        return back()->withErrors([
            'wrongEmailPass' => 'نام کاربری یا رمز عبور اشتباه است لطفا دوباره تلاش نمایید',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('seller')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('seller.indexPage');
    }

    public function forgotPage()
    {
        return view('sellerauth::forgot');
    }

    public function forgot(Request $request)
    {
        if(Seller::where('email', $request->email)->first())
        {

        }
        else
        {
            return back()->withErrors([
                'wrongEmailPass' => 'کسی با این ایمیل در دیجی‌کالا ثبت نام نکرده است',
            ]);
        }
    }

    public function regStepOne()
    {
        return view('sellerauth::register-step1');
    }

}
