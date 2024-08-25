<?php

use Illuminate\Support\Facades\Route;
use Modules\ChamberAdmin\Http\Controllers\ChamberAdminManagementController;
use Modules\ChamberAdmin\Http\Controllers\V1\AuthController;
use Modules\ChamberAdmin\Http\Controllers\V1\HomeController;

// ChamberAdmin
Route::group(['as'=>'backoffice.chamber.admin.', 'prefix'=>'/chamber-admin', 'middleware'=>[]], function (){
    Route::get('/', [ChamberAdminManagementController::class, 'index'])->name('index');
    Route::get('/create', [ChamberAdminManagementController::class, 'create'])->name('create');
    Route::post('/store', [ChamberAdminManagementController::class, 'store'])->name('store');
    Route::get('/{chamber_id}/edit', [ChamberAdminManagementController::class, 'edit'])->name('edit');
    Route::put('/{chamber_id}/update', [ChamberAdminManagementController::class, 'update'])->name('update');
    Route::delete('/{chamber_id}', [ChamberAdminManagementController::class, 'destroy'])->name('delete');
});


Route::group(['as'=>'chamber.', 'prefix'=> '/chamber', 'middleware'=>'guest:chamber'], function (){
    Route::get('/login', [AuthController::class, 'loginShowFrom'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::group(['as'=>'chamber.', 'prefix'=> '/chamber', 'middleware'=>['auth:chamber']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/notifications', [HomeController::class, 'notification'])->name('notification');
});
