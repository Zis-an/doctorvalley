<?php

use Illuminate\Support\Facades\Route;
use Modules\Chamber\Http\Controllers\V1\ChamberManagementController;
use Modules\Chamber\Http\Controllers\V1\ChamberProfileManagementController;
use Modules\Chamber\Http\Controllers\V1\ChamberDoctorController;
use Modules\Chamber\Http\Controllers\V1\ChamberScheduleController;

// Chamber
Route::group(['as'=>'backoffice.chamber.', 'prefix'=>'/chamber', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [ChamberManagementController::class, 'index'])->name('index');
    Route::get('/create', [ChamberManagementController::class, 'create'])->name('create');
    Route::post('/store', [ChamberManagementController::class, 'store'])->name('store');
    Route::get('/{chamber_id}/edit', [ChamberManagementController::class, 'edit'])->name('edit');
    Route::put('/{chamber_id}/update', [ChamberManagementController::class, 'update'])->name('update');
    Route::delete('/{chamber_id}', [ChamberManagementController::class, 'destroy'])->name('delete');
});

Route::group(['as'=>'chamber.', 'prefix'=> '/chamber', 'middleware'=>['auth:chamber']], function (){

    //Chamber Profile
    Route::get('/profile/{chamber_id}', [ChamberProfileManagementController::class, 'chamberProfile'])->name('profile');
    Route::put('/update/profile/{chamber_id}', [ChamberProfileManagementController::class, 'chamberProfileUpdate'])->name('profile.update');

    // Find doctors, chamber doctors, doctor add to chamber
    Route::get('/find-doctors', [ChamberDoctorController::class, 'findDoctors'])->name('find-doctors');
    Route::post('/doctor/schedule-date', [ChamberDoctorController::class, 'doctorScheduleDate'])->name('doctor.scheduleDate');
    Route::get('/my-doctors', [ChamberDoctorController::class, 'chamberDoctorsList'])->name('my-doctors');

    // Doctor Schedule, special note, delete
    Route::get('/doctor/schedule/{doctorId}', [ChamberScheduleController::class, 'chamberSchedule'])->name('schedule.create');
    Route::post('/storeOrUpdate-schedule', [ChamberScheduleController::class, 'chamberStoreUpdateSchedule'])->name('schedule.storeOrUpdate');

    Route::post('/store/schedule-special-note', [ChamberScheduleController::class, 'StoreScheduleSpecialNote'])->name('schedule.specialNote');
    Route::delete('/doctor/delete/{doctorId}', [ChamberScheduleController::class, 'deleteChamberDoctor'])->name('doctor.delete');

    // Doctor weekly schedule
    Route::get('/weekly-schedules', [ChamberScheduleController::class, 'chamberWeeklySchedule'])->name('weekly-schedules');

});
