<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\V1\BlogManagementController;

Route::group(['as'=>'blog.', 'prefix'=>'/blog', 'middleware'=>['auth:admin,doctor']], function (){
    Route::get('/', [BlogManagementController::class, 'index'])->name('index');
    Route::get('/create', [BlogManagementController::class, 'create'])->name('create');
    Route::post('/store', [BlogManagementController::class, 'store'])->name('store');
    Route::get('/{blog_id}/edit', [BlogManagementController::class, 'edit'])->name('edit');
    Route::put('/{blog_id}/update', [BlogManagementController::class, 'update'])->name('update');
    Route::delete('/{blog_id}', [BlogManagementController::class, 'destroy'])->name('delete');

    Route::get('/{blog_id}/details', [BlogManagementController::class, 'details'])->name('details');
    Route::post('/blogs/{blog_id}/feature', [BlogManagementController::class, 'featureBlog'])->name('featured');

});
