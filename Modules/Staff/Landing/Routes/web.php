<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Landing\Http\Controllers\StaffLandingController;

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

//Route::domain('staff.diginova.test')->prefix('promotions')->name('staff.promotions.')
//    ->middleware('web', 'staff')->group(function () {
//
//    Route::get('/', [StaffLandingController::class, 'index'])
//        ->name('index');
//
//    Route::post('filter', [StaffLandingController::class, 'filterByType'])
//        ->name('filterByType');
//
//    Route::post('promotion-search', [StaffLandingController::class, 'promotionSearch'])
//        ->name('promotionSearch');
//
//    Route::post('promotion-cat-search', [StaffLandingController::class, 'promotionCatSearch'])
//        ->name('promotionCatSearch');
//
//    Route::post('ajax-pagination', [StaffLandingController::class, 'ajaxPagination'])
//        ->name('ajaxPagination');
//
//    Route::get('create', [StaffLandingController::class, 'create'])
//        ->name('create');
//
//    Route::post('store', [StaffLandingController::class, 'store'])
//        ->name('store');
//
//    Route::get('edit/{id}', [StaffLandingController::class, 'edit'])
//        ->name('edit');
//
//    Route::post('update', [StaffLandingController::class, 'update'])
//        ->name('update');
//
//    Route::post('delete', [StaffLandingController::class, 'moveToTrash'])
//        ->name('moveToTrash');
//
//    Route::get('trash', [StaffLandingController::class, 'trash'])
//        ->name('trash');
//
//    Route::post('trash-pagination', [StaffLandingController::class, 'trashPagination'])
//        ->name('trashPagination');
//
//    Route::post('force-delete', [StaffLandingController::class, 'removeFromTrash'])
//        ->name('removeFromTrash');
//
//    Route::post('restore', [StaffLandingController::class, 'restoreFromTrash'])
//        ->name('restoreFromTrash');
//
//    Route::post('ajaxupload', [StaffLandingController::class, 'uploadImage'])
//        ->name('ajaxupload');
//
//    Route::post('upload-update', [StaffLandingController::class, 'uploadUpdate'])
//        ->name('uploadUpdate');
//
//
//    Route::post('ajaxdelete', [StaffLandingController::class, 'deleteImage'])
//    ->name('ajaxdelete');
//
//});



Route::domain('staff.diginova.test')->prefix('periodic-prices')->name('staff.periodic-prices.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/active', [StaffLandingController::class, 'active'])
        ->name('index');

    Route::post('/active/search', [StaffLandingController::class, 'search'])
        ->name('search');

    Route::get('/active/search', [StaffLandingController::class, 'search'])
        ->name('search');

    Route::get('/ended', [StaffLandingController::class, 'ended'])
        ->name('ended');

    Route::post('{id}/load-product-variants', [StaffLandingController::class, 'loadProductVariants'])
        ->name('loadProductVariants');

    Route::get('{id}/load-product-variants', [StaffLandingController::class, 'loadProductVariants'])
        ->name('loadProductVariants');

    Route::post('render-add-variants-rows', [StaffLandingController::class, 'renderAddVariantsRows'])
        ->name('renderAddVariantsRows');

    Route::post('save', [StaffLandingController::class, 'save'])
        ->name('save');

    Route::post('{id}/delete', [StaffLandingController::class, 'delete'])
        ->name('delete');

    Route::get('done/index', [StaffLandingController::class, 'done'])
        ->name('done');
});
