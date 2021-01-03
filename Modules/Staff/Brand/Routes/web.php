<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Brand\Http\Controllers\StaffBrandController;

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

Route::domain('staff.diginova.test')->middleware('web', 'staff')->group(function () {
    Route::get('brands/create', [StaffBrandController::class, 'createPage'])
        ->name('staff.brand.brandCreatePage');

    Route::post('brands/create', [StaffBrandController::class, 'create'])
        ->name('staff.brand.brandCreate');

    Route::post('brands/ajax', [StaffBrandController::class, 'categoryAjax'])
        ->name('staff.brand.categoryAjax');

    Route::post('brands/ajaxbreadcrumb', [StaffBrandController::class, 'breadcrumbAjax'])
        ->name('staff.brand.breadcrumbAjax');

    Route::post('brands/reload', [StaffBrandController::class, 'reloadAjax'])
        ->name('staff.brand.reloadAjax');

    Route::post('brands/ajaxupload', [StaffBrandController::class, 'uploadImage'])
        ->name('staff.brand.uploadAjax');

    Route::post('brands/ajaxdelete', [StaffBrandController::class, 'deleteImage'])
        ->name('staff.brand.deleteAjax');
});
