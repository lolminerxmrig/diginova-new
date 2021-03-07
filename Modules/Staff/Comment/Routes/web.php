<?php

use Illuminate\Support\Facades\Route;
use Modules\Staff\Comment\Http\Controllers\StaffCommentController;

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

Route::domain('staff.diginova.test')->prefix('comments')->name('staff.comments.')
    ->middleware('web', 'staff')->group(function () {

    Route::get('/', [StaffCommentController::class, 'index'])
        ->name('index');

    Route::post('filter', [StaffCommentController::class, 'filterByType'])
        ->name('filterByType');

    Route::post('comment-search', [StaffCommentController::class, 'commentSearch'])
        ->name('commentSearch');

    Route::post('comment-cat-search', [StaffCommentController::class, 'commentCatSearch'])
        ->name('commentCatSearch');

    Route::post('ajax-pagination', [StaffCommentController::class, 'ajaxPagination'])
        ->name('ajaxPagination');

    Route::get('create', [StaffCommentController::class, 'create'])
        ->name('create');

    Route::post('store', [StaffCommentController::class, 'store'])
        ->name('store');

    Route::get('edit/{id}', [StaffCommentController::class, 'edit'])
        ->name('edit');

    Route::post('update', [StaffCommentController::class, 'update'])
        ->name('update');

    Route::post('delete', [StaffCommentController::class, 'moveToTrash'])
        ->name('moveToTrash');

    Route::get('trash', [StaffCommentController::class, 'trash'])
        ->name('trash');

    Route::post('trash-pagination', [StaffCommentController::class, 'trashPagination'])
        ->name('trashPagination');

    Route::post('force-delete', [StaffCommentController::class, 'removeFromTrash'])
        ->name('removeFromTrash');

    Route::post('restore', [StaffCommentController::class, 'restoreFromTrash'])
        ->name('restoreFromTrash');

    Route::post('ajaxupload', [StaffCommentController::class, 'uploadImage'])
        ->name('ajaxupload');

    Route::post('upload-update', [StaffCommentController::class, 'uploadUpdate'])
        ->name('uploadUpdate');

    Route::post('ajaxdelete', [StaffCommentController::class, 'deleteImage'])
    ->name('ajaxdelete');

});
