<?php

use Illuminate\Support\Facades\Route;
use Modules\Doctor\Http\Controllers\V1\DoctorAuthController;
use Modules\Doctor\Http\Controllers\V1\DoctorHomeController;
use Modules\Doctor\Http\Controllers\V1\DoctorManagementController;
use Modules\Doctor\Http\Controllers\V1\DoctorRegistrationController;


/* Doctor management */
Route::group(['as' => 'doctor.', 'prefix' => 'doctors' ], function () {

    /* Admin and Chamber Routes */
    Route::group(['middleware' => ['auth:admin,chamber']], function(){
        Route::get('/all-doctors', [DoctorManagementController::class, 'index'])->name('index');
        Route::get('/create', [DoctorManagementController::class, 'personalInfo'])->name('create');
        Route::get('/profile/personal', [DoctorManagementController::class, 'personalInfo'])->name('profile.personal');
        Route::get('/profile/professional', [DoctorManagementController::class, 'professionalInfo'])->name('profile.professional');
        Route::get('/profile/educational', [DoctorManagementController::class, 'educationalInfo'])->name('profile.educational');
        Route::get('/profile/image', [DoctorManagementController::class, 'profileImage'])->name('profile.image');

        Route::post('/store/personal', [DoctorManagementController::class, 'storePersonal'])->name('store.personal');
        Route::post('/store/professional', [DoctorManagementController::class, 'storeProfessional'])->name('store.professional');
        Route::post('/store/qualification', [DoctorManagementController::class, 'storeQualification'])->name('store.qualification');
        Route::post('/store/image', [DoctorManagementController::class, 'storeImage'])->name('store.image');

        Route::get('/doctor-info/{doctor_id}', [DoctorManagementController::class, 'info'])->name('info');
    });
    /* Admin and Chamber Routes */

    /* Admin Only Routes */
    Route::group(['middleware' => ['auth:admin,doctor']], function(){
        // Route::get('/edit/{doctor_id}', [DoctorManagementController::class, 'edit'])->name('edit');

        Route::get('/edit/personal/{doctor_id}', [DoctorManagementController::class, 'personalInfoEdit'])->name('profile.personal.edit');
        Route::get('/edit/professional/{doctor_id}', [DoctorManagementController::class, 'professionalInfoEdit'])->name('profile.professional.edit');
        Route::get('/edit/educational/{doctor_id}', [DoctorManagementController::class, 'educationalInfoEdit'])->name('profile.educational.edit');
        Route::get('/edit/image/{doctor_id}', [DoctorManagementController::class, 'profileImageEdit'])->name('profile.image.edit');

        Route::put('/update/personal/{doctor_id}', [DoctorManagementController::class, 'updatePersonal'])->name('update.personal');
        Route::put('/update/professional/{doctor_id}', [DoctorManagementController::class, 'updateProfessional'])->name('update.professional');
        Route::put('/update/educational/{doctor_id}', [DoctorManagementController::class, 'updateEducational'])->name('update.educational');
        Route::put('/update/image/{doctor_id}', [DoctorManagementController::class, 'updateImage'])->name('update.image');

        Route::delete('/{doctor_id}', [DoctorManagementController::class, 'destroy'])->name('delete');
    });
    /* Admin Only Routes */

});
/* Doctor management */



Route::group(['as' => 'doctor.', 'prefix' => '/doctor', 'middleware' => 'guest:doctor'], function () {
    Route::get('/login', [DoctorAuthController::class, 'loginShowFrom'])->name('login');
    Route::post('/login', [DoctorAuthController::class, 'login']);

    Route::get('/registration', [DoctorRegistrationController::class, 'registrationForm'])->name('registrationForm');
    Route::post('/registration/store', [DoctorRegistrationController::class, 'registration'])->name('registration');
});

Route::group(['as' => 'doctor.', 'prefix' => '/doctor', 'middleware' => ['auth:doctor']], function () {
    Route::get('/dashboard', [DoctorHomeController::class, 'index'])->name('dashboard');
    Route::get('/profile/{doctor_id}', [DoctorHomeController::class, 'profile'])->name('profile');
    Route::get('/notifications', [DoctorHomeController::class, 'notification'])->name('notification');
    Route::get('/blogs', [DoctorHomeController::class, 'blog'])->name('blog');
    Route::get('/schedules', [DoctorHomeController::class, 'schedule'])->name('schedule');

    Route::get('/{doctor_id}/schedule', [DoctorHomeController::class, 'schedule'])->name('schedule');
    Route::get('/doctor-info/{doctor_id}', [DoctorManagementController::class, 'info'])->name('info');
});
