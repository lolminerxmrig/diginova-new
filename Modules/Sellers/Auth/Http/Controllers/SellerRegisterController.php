<?php

namespace Modules\Sellers\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Modules\Sellers\Auth\Models\Seller;
use Modules\Sellers\Auth\Repositories\SellerRegisterRepository;


class SellerRegisterController extends Controller
{
    protected $seller;
    public function __construct(Seller $seller)
    {
        $this->seller = new SellerRegisterRepository($seller);
    }

    public function saveStepOne(Request $request)
    {
        dd($request->all());
        $this->seller->saveStepOne($request->all());
    }

}
