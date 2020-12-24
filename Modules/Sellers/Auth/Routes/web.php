<?php

use Modules\Sellers\Auth\Http\Controllers\SellerAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::domain('seller.diginova.test')->group(function () {
    Route::get('account/login',function () {
        return view('sellerauth::login');
    })->name('seller-login');
});

