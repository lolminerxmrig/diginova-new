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
