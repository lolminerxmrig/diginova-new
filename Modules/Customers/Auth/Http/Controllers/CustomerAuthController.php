<?php

namespace Modules\Customers\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class CustomerAuthController extends Controller
{
    public function check(Request $request)
    {
        if(is_numeric($request->email_phone))
        {
            $validated = $request->validate([
                'email_phone' => 'required|unique:mobile|regex:/^09[0-9]{9}/',
            ]);
            $mobile = User::where('mobile', $request->email_phone)->get();

            if($mobile->count())
            {

            }
            else
            {

            }
        }
        else
        {
            $validated = $request->validate([
                'email_phone' => 'email|unique:mobile',
            ]);
        }

    }
}
