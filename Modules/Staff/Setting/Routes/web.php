<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Setting\Http\Controllers\StaffSettingController;

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

Route::domain('staff.diginova.test')->prefix('settings')->name('staff.settings.')
    ->middleware('web', 'staff')->group(function () {


    Route::get('/', [StaffSettingController::class, 'index'])
        ->name('index');

//    Route::get('create', [StaffSettingController::class, 'create'])
//        ->name('create');
//
//    Route::post('store', [StaffSettingController::class, 'store'])
//        ->name('store');
//
//    Route::get('edit/{id}', [StaffSettingController::class, 'edit'])
//        ->name('edit');
//
//    Route::post('update', [StaffSettingController::class, 'update'])
//        ->name('update');
//
//    Route::post('delete', [StaffSettingController::class, 'delete'])
//        ->name('delete');
//
//    Route::get('searchSetting', [StaffSettingController::class, 'searchSetting'])
//        ->name('searchSetting');
//
//    Route::post('searchSetting', [StaffSettingController::class, 'searchSetting'])
//        ->name('searchSetting');
//
//    Route::post('removeSetting/{id}', [StaffSettingController::class, 'removeSetting'])
//        ->name('removeSetting');
//
//    Route::post('statusSetting', [StaffSettingController::class, 'statusSetting'])
//        ->name('statusSetting');

});
