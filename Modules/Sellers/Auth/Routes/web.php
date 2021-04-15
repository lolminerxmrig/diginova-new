<?php

use Illuminate\Support\Facades\Route;
use Modules\Sellers\Auth\Http\Controllers\SellerController;
use Modules\Sellers\Auth\Http\Controllers\SellerRegisterController;

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


Route::domain('seller.diginova.test')->middleware('web')->group(function () {

    Route::get('account/dashboard', [SellerController::class, 'dashboardPage'])
        ->middleware('seller')->name('seller.dashboardPage');

    Route::get('/', [SellerController::class, 'indexPage'])
        ->name('seller.indexPage');

    Route::get('account/login', [SellerController::class, 'loginPage'])
        ->name('seller.loginPage');

    Route::post('account/login', [SellerController::class, 'confirm'])
        ->name('seller.confirm');

    Route::get('account/logout', [SellerController::class, 'logout'])
        ->name('seller.logout');

    Route::get('account/forgotpassword', [SellerController::class, 'forgotPage'])
        ->name('seller.forgotPage');

    Route::post('account/forgotpassword', [SellerController::class, 'forgot'])
        ->name('seller.forgot');
});


Route::domain('seller.diginova.test')->middleware('web')->group(function () {
    Route::get('registration', [SellerController::class, 'regStepOne'])
        ->name('seller.regStepOne');

    Route::post('registration', [SellerRegisterController::class, 'saveStepOne'])
        ->name('seller.saveStepOne');

//    Route::get('registration/email', [SellerRegLoginController::class, 'regStep2'])
//        ->name('seller.regStep2');
//
//    Route::get('registration/business-details', [SellerRegLoginController::class, 'regStep3'])
//        ->name('seller.regStep3');


});
