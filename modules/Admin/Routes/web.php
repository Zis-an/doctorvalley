<?php

use Illuminate\Support\Facades\Route;

use Modules\Admin\Http\Controllers\V1\AuthController;
use Modules\Admin\Http\Controllers\V1\HomeController;

Route::group(['as'=>'admin.', 'middleware'=>'guest:admin'], function (){
    Route::get('/login', [AuthController::class, 'loginShowFrom'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::group(['as'=>'backoffice.', 'middleware'=>['auth:admin']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/notifications', [HomeController::class, 'notification'])->name('notification');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
});
