<?php

namespace Modules\Customers\Front\Http\Controllers;

use _HumbugBox7eb78fbcc73e\http\Env\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Modules\Customers\Panel\Models\Customer;

class FrontController extends Controller
{

  public function index()
  {
    $customer = Auth::guard('customer')->user();
    return view('front::index', compact('customer'));
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

}
