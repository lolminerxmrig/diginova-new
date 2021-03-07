<?php

namespace Modules\Staff\Promotion\Http\Controllers;


use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

use Modules\Staff\Product\Models\Product;
use Modules\Staff\Product\Models\ProductHasVariant;
use Modules\Staff\Promotion\Models\Promotion;

class StaffCampainController extends Controller
{
    public function index()
    {
        return view('staffpromotion::campains.index');
    }

    public function create()
    {
        return view('staffpromotion::campains.create');
    }
}
