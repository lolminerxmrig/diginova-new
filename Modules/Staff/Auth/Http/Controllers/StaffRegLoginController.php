<?php

namespace Modules\Staff\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Modules\Staff\Auth\Models\Staff;


class StaffRegLoginController extends Controller
{
    public function indexPage()
    {
        return redirect()->route('staff.loginPage');
    }

    public function loginPage()
    {
        return view('staffauth::login');
    }

    public function dashboardPage()
    {
        return view('staffauth::dashboard');
    }

    public function confirm(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('staff')->attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect()->route('staff.dashboardPage');
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
