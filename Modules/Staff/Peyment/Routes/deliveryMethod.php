<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Shiping\Http\Controllers\StaffPeymentMethodController;

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

Route::domain('staff.diginova.test')->name('staff.peyment.')->prefix('peyment-method')
  ->middleware('web', 'staff')->group(function () {


    Route::get('/', [StaffPeymentMethodController::class, 'index'])
      ->name('index');

    Route::get('edit/{id}', [StaffPeymentMethodController::class, 'edit'])
      ->name('edit');

    Route::post('edit/{id}/contentLoader', [StaffPeymentMethodController::class, 'contentLoader'])
      ->name('contentLoader');

    Route::post('storePeymentMethod', [StaffPeymentMethodController::class, 'storePeymentMethod'])
      ->name('storePeymentMethod');

    Route::post('deleteIcon', [StaffPeymentMethodController::class, 'deleteIcon'])
      ->name('deleteIcon');

    Route::post('upload-image', [StaffPeymentMethodController::class, 'UploadImage'])
      ->name('UploadImage');

    Route::post('status', [StaffPeymentMethodController::class, 'status'])
      ->name('status');

  });
