<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Auth\Http\Controllers\LoginController;

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


Route::domain('staff.diginova.test')->group(function () {
    Route::get('/',function () {
        return redirect()->route('staff-show');
    })->middleware('web')->name('staff-index');

    Route::get('account/login', [LoginController::class, 'show'])->middleware('web')->name('staff-show');
    Route::get('account/dashboard', function(){
        return view('staffauth::dashboard')->name('staff-dashboard');
    })->middleware('web');
    Route::post('account/login', [LoginController::class, 'login'])->middleware('web')->name('staff-login');
    Route::post('account/logout', [LoginController::class, 'logout'])->middleware('web')->name('staff-logout');
});

