<?php

use Illuminate\Support\Facades\Route;
use Modules\Customers\Front\Http\Controllers\FrontController;
use Modules\Staff\Setting\Models\Setting;

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

Route::get('/', [FrontController::class, 'index'])->name('front.indexPage');


$product_code_prefix = mb_strtolower(Setting::where('name', 'product_code_prefix')->first()->value);

Route::get("product/$product_code_prefix-{product_code}", [FrontController::class, 'productPage'])->name('front.productPage');

Route::get("product/comment/$product_code_prefix-{product_code}", [FrontController::class, 'createComment'])->name('front.createComment');

Route::get('search/category-{slug}', [FrontController::class, 'categoryPage'])->name('category');

Route::prefix('ajax')->name('front.ajax.')->group(function () {
  Route::get('product/comments/add/{product_id}/', [FrontController::class, 'createComments'])->name('createComments');
  Route::post('product/comments/{product_id}/', [FrontController::class, 'productComments'])->name('productComments');
  Route::get('favorites/product/add/{product_id}/', [FrontController::class, 'addToFavorites'])->name('addToFavorites');
  Route::get('favorites/product/remove/{product_id}/', [FrontController::class, 'removeFromFavorites'])->name('removeFromFavorites');

});
