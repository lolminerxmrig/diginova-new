<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Shiping\Http\Controllers\StaffDeliveryMethodController;

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

Route::domain('staff.diginova.test')->name('staff.delivery.')->prefix('delivery-method')
  ->middleware('web', 'staff')->group(function () {


    Route::get('/', [StaffDeliveryMethodController::class, 'index'])
      ->name('index');

    Route::get('edit/{id}', [StaffDeliveryMethodController::class, 'edit'])
      ->name('edit');

//    Route::get('nav-location/{id}/navs', [StaffDeliveryMethodController::class, 'navs'])
//      ->name('navs');
//
//    Route::get('nav/{id}/items', [StaffDeliveryMethodController::class, 'navItems'])
//      ->name('navItems');
//
//    Route::post('upload-image', [StaffDeliveryMethodController::class, 'UploadImage'])
//      ->name('UploadImage');
//
//    Route::post('storeDeliveryMethod', [StaffDeliveryMethodController::class, 'storeDeliveryMethod'])
//      ->name('storeDeliveryMethod');
//
//    Route::post('statusDeliveryMethod', [StaffDeliveryMethodController::class, 'statusDeliveryMethod'])
//      ->name('statusDeliveryMethod');
//
//    Route::post('reloadDeliveryMethodsTable', [StaffDeliveryMethodController::class, 'reloadDeliveryMethodsTable'])
//      ->name('reloadDeliveryMethodsTable');
//
//    Route::post('navChangePosition', [StaffDeliveryMethodController::class, 'navChangePosition'])
//      ->name('navChangePosition');
//
//    Route::post('deleteDeliveryMethod', [StaffDeliveryMethodController::class, 'deleteDeliveryMethod'])
//      ->name('deleteDeliveryMethod');
//
//    Route::post('updateDeliveryMethod', [StaffDeliveryMethodController::class, 'updateDeliveryMethod'])
//      ->name('updateDeliveryMethod');
//
//
//    Route::post('storeItem', [StaffDeliveryMethodController::class, 'storeItem'])
//      ->name('storeItem');
//
//    Route::post('reloadMegamenuTable', [StaffDeliveryMethodController::class, 'reloadMegamenuTable'])
//      ->name('reloadMegamenuTable');
//
//    Route::post('storeMegaMenu', [StaffDeliveryMethodController::class, 'storeMegaMenu'])
//      ->name('storeMegaMenu');
//
//    Route::post('storeMenus', [StaffDeliveryMethodController::class, 'storeMenus'])
//      ->name('storeMenus');
//
//    Route::post('itemChangePosition', [StaffDeliveryMethodController::class, 'itemChangePosition'])
//      ->name('itemChangePosition');
//
//    Route::post('deleteItem', [StaffDeliveryMethodController::class, 'deleteItem'])
//      ->name('deleteItem');
//
//    Route::post('deleteIcon', [StaffDeliveryMethodController::class, 'deleteIcon'])
//      ->name('deleteIcon');
//
//    Route::get('item/{id}/menus', [StaffDeliveryMethodController::class, 'ItemMenus'])
//      ->name('ItemMenus');
//
//    Route::get('megamenu/{id}/items', [StaffDeliveryMethodController::class, 'megamenuItems'])
//      ->name('megamenuItems');

  });
