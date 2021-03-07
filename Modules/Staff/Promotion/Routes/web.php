<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Promotion\Http\Controllers\StaffPromotionController;

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
//    Route::get('/', [StaffPromotionController::class, 'index'])
//        ->name('index');
//
//    Route::post('filter', [StaffPromotionController::class, 'filterByType'])
//        ->name('filterByType');
//
//    Route::post('promotion-search', [StaffPromotionController::class, 'promotionSearch'])
//        ->name('promotionSearch');
//
//    Route::post('promotion-cat-search', [StaffPromotionController::class, 'promotionCatSearch'])
//        ->name('promotionCatSearch');
//
//    Route::post('ajax-pagination', [StaffPromotionController::class, 'ajaxPagination'])
//        ->name('ajaxPagination');
//
//    Route::get('create', [StaffPromotionController::class, 'create'])
//        ->name('create');
//
//    Route::post('store', [StaffPromotionController::class, 'store'])
//        ->name('store');
//
//    Route::get('edit/{id}', [StaffPromotionController::class, 'edit'])
//        ->name('edit');
//
//    Route::post('update', [StaffPromotionController::class, 'update'])
//        ->name('update');
//
//    Route::post('delete', [StaffPromotionController::class, 'moveToTrash'])
//        ->name('moveToTrash');
//
//    Route::get('trash', [StaffPromotionController::class, 'trash'])
//        ->name('trash');
//
//    Route::post('trash-pagination', [StaffPromotionController::class, 'trashPagination'])
//        ->name('trashPagination');
//
//    Route::post('force-delete', [StaffPromotionController::class, 'removeFromTrash'])
//        ->name('removeFromTrash');
//
//    Route::post('restore', [StaffPromotionController::class, 'restoreFromTrash'])
//        ->name('restoreFromTrash');
//
//    Route::post('ajaxupload', [StaffPromotionController::class, 'uploadImage'])
//        ->name('ajaxupload');
//
//    Route::post('upload-update', [StaffPromotionController::class, 'uploadUpdate'])
//        ->name('uploadUpdate');
//
//
//    Route::post('ajaxdelete', [StaffPromotionController::class, 'deleteImage'])
//    ->name('ajaxdelete');
//
//});



Route::domain('staff.diginova.test')->prefix('periodic-prices')->name('staff.periodic-prices.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/active', [StaffPromotionController::class, 'active'])
        ->name('index');

    Route::post('/active/search', [StaffPromotionController::class, 'search'])
        ->name('search');

    Route::get('/active/search', [StaffPromotionController::class, 'search'])
        ->name('search');

    Route::get('/ended', [StaffPromotionController::class, 'ended'])
        ->name('ended');

    Route::post('{id}/load-product-variants', [StaffPromotionController::class, 'loadProductVariants'])
        ->name('loadProductVariants');

    Route::get('{id}/load-product-variants', [StaffPromotionController::class, 'loadProductVariants'])
        ->name('loadProductVariants');

    Route::post('render-add-variants-rows', [StaffPromotionController::class, 'renderAddVariantsRows'])
        ->name('renderAddVariantsRows');

    Route::post('save', [StaffPromotionController::class, 'save'])
        ->name('save');

    Route::post('{id}/delete', [StaffPromotionController::class, 'delete'])
        ->name('delete');

    Route::get('done/index', [StaffPromotionController::class, 'done'])
        ->name('done');
});
