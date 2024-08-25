<?php

use Illuminate\Support\Facades\Route;
use Modules\Doctor\Http\Controllers\V1\DoctorAuthController;
use Modules\Doctor\Http\Controllers\V1\DoctorHomeController;
use Modules\Doctor\Http\Controllers\V1\DoctorManagementController;

Route::group(['as' => 'backoffice.doctor.', 'prefix' => 'doctors', 'middleware' => ['auth:admin']], function () {

    Route::get('/', [DoctorManagementController::class, 'index'])->name('index');

    // Route::get('/create', [DoctorManagementController::class, 'create'])->name('create');
    Route::get('/create', [DoctorManagementController::class, 'personalInfo'])->name('create');


    Route::get('/profile/personal', [DoctorManagementController::class, 'personalInfo'])->name('profile.personal');
    Route::get('/profile/professional', [DoctorManagementController::class, 'professionalInfo'])->name('profile.professional');
    Route::get('/profile/educational', [DoctorManagementController::class, 'educationalInfo'])->name('profile.educational');
    Route::get('/profile/image', [DoctorManagementController::class, 'profileImage'])->name('profile.image');


    Route::post('/store-personal', [DoctorManagementController::class, 'storePersonal'])->name('store.personal');
    Route::post('/store-professional', [DoctorManagementController::class, 'storeProfessional'])->name('store.professional');
    Route::post('/store-qualification', [DoctorManagementController::class, 'storeQualification'])->name('store.qualification');
    Route::post('/store-image', [DoctorManagementController::class, 'storeImage'])->name('store.image');

    Route::get('/{doctor_id}/edit', [DoctorManagementController::class, 'edit'])->name('edit');

    Route::put('/{doctor_id}/update', [DoctorManagementController::class, 'update'])->name('update');
    Route::delete('/{doctor_id}', [DoctorManagementController::class, 'destroy'])->name('delete');

    Route::get('/doctor-info/{doctor_id}', [DoctorManagementController::class, 'info'])->name('info');

});

Route::group(['as' => 'doctor.', 'prefix' => '/doctor', 'middleware' => 'guest:doctor'], function () {
    Route::get('/login', [DoctorAuthController::class, 'loginShowFrom'])->name('login');
    Route::post('/login', [DoctorAuthController::class, 'login']);
});

Route::group(['as' => 'doctor.', 'prefix' => '/doctor', 'middleware' => ['auth:doctor']], function () {
    Route::get('/dashboard', [DoctorHomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DoctorHomeController::class, 'profile'])->name('profile');
    Route::get('/notifications', [DoctorHomeController::class, 'notification'])->name('notification');
});
