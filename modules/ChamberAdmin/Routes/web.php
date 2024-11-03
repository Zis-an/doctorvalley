<?php

use Illuminate\Support\Facades\Route;
use Modules\ChamberAdmin\Http\Controllers\ChamberAdminManagementController;
use Modules\ChamberAdmin\Http\Controllers\V1\AuthController;
use Modules\ChamberAdmin\Http\Controllers\V1\HomeController;
use Modules\ChamberAdmin\Http\Controllers\V1\ChamberAdminProfileController;
use Modules\ChamberAdmin\Http\Controllers\ChamberAdminRegistrationController;

// ChamberAdmin
Route::group(['as'=>'backoffice.chamber.admin.', 'prefix'=>'/chamber-admin', 'middleware'=>['auth:admin,chamber']], function (){
    Route::get('/', [ChamberAdminManagementController::class, 'index'])->name('index');
    Route::get('/create', [ChamberAdminManagementController::class, 'create'])->name('create');
    Route::post('/store', [ChamberAdminManagementController::class, 'store'])->name('store');
    Route::get('/{chamber_admin_id}/edit', [ChamberAdminManagementController::class, 'edit'])->name('edit');
    Route::put('/{chamber_admin_id}/update', [ChamberAdminManagementController::class, 'update'])->name('update');
    Route::delete('/{chamber_admin_id}', [ChamberAdminManagementController::class, 'destroy'])->name('delete');
});


Route::group(['as'=>'chamber.', 'prefix'=> '/chamber', 'middleware'=>'guest:chamber'], function (){
    Route::get('/login', [AuthController::class, 'loginShowFrom'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/registration', [ChamberAdminRegistrationController::class, 'registrationFrom'])->name('registrationForm');
    Route::post('/registration/store', [ChamberAdminRegistrationController::class, 'registration'])->name('registration');
});


Route::group(['as'=>'chamber.', 'prefix'=> '/chamber', 'middleware'=>['auth:chamber']], function (){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //Chamber Admin Profile
    Route::get('/admin/profile/{chamber_admin_id}', [ChamberAdminProfileController::class, 'chamberAdminProfile'])->name('admin.profile');
    Route::put('/admin/update/profile/{chamber_admin_id}', [ChamberAdminProfileController::class, 'chamberAdminProfileUpdate'])->name('admin.profile.update');

    // Chamber Admin Password
    Route::get('/admin/password', [ChamberAdminProfileController::class, 'chamberAdminPassword'])->name('admin.password');
    Route::post('/admin/update/password', [ChamberAdminProfileController::class, 'chamberAdminPasswordUpdate'])->name('admin.password.update');


    Route::get('/notifications', [HomeController::class, 'notification'])->name('notification');
});
