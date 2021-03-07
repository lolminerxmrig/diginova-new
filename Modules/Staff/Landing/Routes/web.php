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


Route::domain('staff.diginova.test')->prefix('landings')->name('staff.landings.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/', [StaffLandingController::class, 'index'])
        ->name('index');

    Route::get('create', [StaffLandingController::class, 'create'])
        ->name('create');

    Route::get('{id}', [StaffLandingController::class, 'manageLanding'])
        ->name('manageLanding');




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
