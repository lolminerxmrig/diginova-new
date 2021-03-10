<?php

namespace Modules\Staff\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;


class StaffLoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('staff')->attempt($credentials, true)) {
            $request->session()->regenerate('');


            return redirect()->route('staff.dashboardPage');
        }

        return back()->withErrors([
            'email' => 'خطا',
        ]);
    }
}
