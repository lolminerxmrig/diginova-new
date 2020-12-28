<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Auth\Http\Controllers\StaffRegLoginController;

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

Route::domain('staff.diginova.test')->middleware('web')->group(function () {
    Route::get('/', [StaffRegLoginController::class, 'indexPage'])
        ->name('staff.indexPage');

    Route::get('account/dashboard', [StaffRegLoginController::class, 'dashboardPage'])
        ->middleware('staff')->name('staff.dashboardPage');

    Route::get('account/login', [StaffRegLoginController::class, 'loginPage'])
        ->name('staff.loginPage');

    Route::get('account/forgotpassword', [StaffRegLoginController::class, 'forgotPage'])
        ->name('staff.forgotPage');

    Route::post('account/login', [StaffRegLoginController::class, 'confirm'])
        ->name('staff.confirm');

    Route::get('account/logout', [StaffRegLoginController::class, 'logout'])
        ->name('staff.logout');

    Route::post('account/forgotpassword', [StaffRegLoginController::class, 'forgot'])
        ->name('staff.forgot');
});
