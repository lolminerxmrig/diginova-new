<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Category\Http\Controllers\StaffCategoryController;

/*
|-----------categories/ajaxcategory---------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('staff.diginova.test')->middleware('web', 'staff')->group(function () {
    Route::get('categories/create', [StaffCategoryController::class, 'createPage'])
        ->name('staff.categoryCreatePage');

    Route::post('categories/create', [StaffCategoryController::class, 'create'])
    ->name('staff.categoryCreate');

    Route::post('categories/ajax', [StaffCategoryController::class, 'categoryAjax'])
        ->name('staff.categoryAjax');

    Route::post('categories/ajaxbreadcrumb', [StaffCategoryController::class, 'breadcrumbAjax'])
        ->name('staff.breadcrumbAjax');

    Route::post('categories/reload', [StaffCategoryController::class, 'reloadAjax'])
    ->name('staff.reloadAjax');

    Route::post('categories/ajaxsearch', [StaffCategoryController::class, 'searchAjax'])
    ->name('staff.searchAjax');

    Route::post('categories/ajaxupload', [StaffCategoryController::class, 'uploadImage'])
    ->name('staff.uploadAjax');

    Route::post('categories/ajaxdelete', [StaffCategoryController::class, 'deleteImage'])
    ->name('staff.deleteAjax');
});
