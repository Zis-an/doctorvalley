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

    Route::get('/profile/{adminId}', [HomeController::class, 'profile'])->name('admin.profile');
    Route::put('/profile/update/{adminId}', [HomeController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::get('/change-password', [HomeController::class, 'password'])->name('password');
    Route::post('/update-password', [HomeController::class, 'passwordUpdate'])->name('password.update');


});
