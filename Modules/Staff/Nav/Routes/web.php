<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Nav\Http\Controllers\StaffNavController;

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

Route::domain('staff.diginova.test')->prefix('nav-locations')->name('staff.navs.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/', [StaffNavController::class, 'index'])
        ->name('index');

    Route::get('{id}/navs', [StaffNavController::class, 'navs'])
      ->name('navs');
//
//    Route::get('nav/{id}', [StaffNavController::class, 'nav'])
//      ->name('nav');
//
//    Route::get('nav/{id}/images', [StaffNavController::class, 'navImages'])
//      ->name('navImages');
//
//    Route::post('custom-ajax-upload', [StaffNavController::class, 'customUploadImage'])
//      ->name('customUploadImage');
//
    Route::post('upload-image', [StaffNavController::class, 'UploadImage'])
      ->name('UploadImage');
//
//    Route::post('updateNav', [StaffNavController::class, 'updateNav'])
//      ->name('updateNav');
//
//    Route::post('updateNavImagesRow', [StaffNavController::class, 'updateNavImagesRow'])
//      ->name('updateNavImagesRow');

});
