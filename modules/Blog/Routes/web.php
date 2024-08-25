<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\V1\BlogManagementController;

Route::group(['as'=>'backoffice.blog.', 'prefix'=>'/blog', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [BlogManagementController::class, 'index'])->name('index');
    Route::get('/create', [BlogManagementController::class, 'create'])->name('create');
    Route::post('/store', [BlogManagementController::class, 'store'])->name('store');
    Route::get('/{chamber_id}/edit', [BlogManagementController::class, 'edit'])->name('edit');
    Route::put('/{chamber_id}/update', [BlogManagementController::class, 'update'])->name('update');
    Route::delete('/{chamber_id}', [BlogManagementController::class, 'destroy'])->name('delete');
});
