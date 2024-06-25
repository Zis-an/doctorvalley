<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\V1\BlogManagementController;

Route::group(['prefix'=>'blogs', 'as'=>'blog.', 'middleware'=>['web']], function (){
    Route::get('/', [BlogManagementController::class, 'index'])->name('index');
});
