<?php

namespace Modules\Customers\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Modules\Customers\Panel\Models\Customer;

class FrontController extends Controller
{
    public function index()
    {
        $customer = Auth::guard('customer')->user();
        return view('front::index', compact('customer'));
    }
}
