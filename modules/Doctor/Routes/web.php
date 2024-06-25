<?php

use Illuminate\Support\Facades\Route;
use Modules\Doctor\Http\Controllers\V1\DoctorManagementController;


Route::group(['prefix'=>'doctors', 'as'=>'doctor.', 'middleware'=>['web']], function (){
    Route::get('/', [DoctorManagementController::class, 'index'])->name('index');
});
