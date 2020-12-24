<?php

use Modules\UserAuth\Http\Controllers\CustomerAuthController;

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


Route::prefix('users')->group(function(){
    Route::get('login-register',function () {
        return view('userauth::login-register');
    })->name('login-register.step1');

    Route::post('login-register', [CustomerAuthController::class, 'check'])->name('login-register.check');
    Route::get('confirm', [CustomerAuthController::class, 'confirm'])->name('login-register.step2');
});



