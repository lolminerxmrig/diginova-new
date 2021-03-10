<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Promotion\Http\Controllers\StaffCampainController;

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



Route::domain('staff.diginova.test')->prefix('campains')->name('staff.campains.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/', [StaffCampainController::class, 'index'])
        ->name('index');

    Route::get('create', [StaffCampainController::class, 'create'])
        ->name('create');

    Route::post('update/{id}', [StaffCampainController::class, 'update'])
        ->name('update');

    Route::get('{id}', [StaffCampainController::class, 'manage'])
        ->name('manage');

    Route::get('{id}/search', [StaffCampainController::class, 'search'])
        ->name('search');

    Route::post('addVariant/{id}', [StaffCampainController::class, 'addVariant'])
        ->name('addVariant');

    Route::get('variants/{id}', [StaffCampainController::class, 'variants'])
        ->name('variants');

    Route::post('removeVariant/{id}', [StaffCampainController::class, 'removeVariant'])
    ->name('removeVariant');

    Route::post('removeAll/{id}', [StaffCampainController::class, 'removeAll'])
        ->name('removeAll');

});
