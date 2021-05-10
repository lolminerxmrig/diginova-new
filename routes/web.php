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
Route::get("cart/add/{variant_code}/1/", [FrontController::class, 'addToCart'])->name('front.addToCart');
Route::get("product/comment/$product_code_prefix-{product_code}", [FrontController::class, 'createComment'])->name('front.createComment');
Route::get('search/category-{slug}', [FrontController::class, 'categoryPage'])->name('category');

Route::prefix('ajax')->name('front.ajax.')->group(function () {
  Route::get('product/comments/{product_id}', [FrontController::class, 'productComments'])->name('productComments');
  Route::get('product/comments/list/{product_id}/', [FrontController::class, 'productCommentList'])->name('productCommentList');
  Route::post('product/comments/add/{product_id}', [FrontController::class, 'createComments'])->name('createComments');

  Route::get('product/comments/like/{product_id}', [FrontController::class, 'likeComment'])->name('likeComment');
  Route::get('product/comments/dislike/{product_id}', [FrontController::class, 'dislikeComment'])->name('dislikeComment');

  Route::post('favorites/product/add/{product_id}', [FrontController::class, 'addToFavorites'])->name('addToFavorites');
  Route::get('favorites/product/remove/{product_id}', [FrontController::class, 'removeFromFavorites'])->name('removeFromFavorites');

  Route::get('cart/move/save-for-later/{variant_code}', [FrontController::class, 'saveForLater'])->name('saveForLater');

  Route::post('save-for-later/variant/remove/{variant_id}', [FrontController::class, 'removeFromSaveForLater'])->name('removeFromSaveForLater');
  Route::get('save-for-later/move/cart/{variant_id}', [FrontController::class, 'moveToFirstCart'])->name('moveToFirstCart');
  Route::get('save-for-later/move/all/cart', [FrontController::class, 'moveAllToFirstCart'])->name('moveAllToFirstCart');

  Route::get('state/cities/{id}', [FrontController::class, 'cityLoader'])->name('cityLoader');
  Route::get('city/districts/{id}', [FrontController::class, 'districtLoader'])->name('districtLoader');

});

Route::get('cart/remove/{variant_code}', [FrontController::class, 'removeFromCart'])->name('removeFromCart');

Route::name('front.')->middleware('web', 'customer')->group(function () {
  Route::get("cart", [FrontController::class, 'cart'])->name('cart');
  Route::get("cart/change/{variant_code}/{count}", [FrontController::class, 'cartChange'])->name('cartChange');
  Route::get('addresses/add', [FrontController::class, 'addAddress'])->name('addAddress');
  Route::post('addresses/add/save', [FrontController::class, 'saveAddress'])->name('saveAddress');
  Route::post('addresses/search-address-reverse', [FrontController::class, 'searchAddressReverse'])->name('searchAddressReverse');
  Route::post('addresses/search-address', [FrontController::class, 'searchAddress'])->name('searchAddress');
  Route::get('shipping', [FrontController::class, 'shipping'])->name('shipping');

});

