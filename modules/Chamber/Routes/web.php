<?php

use Illuminate\Support\Facades\Route;
use Modules\Chamber\Http\Controllers\V1\ChamberManagementController;


Route::group(['prefix'=>'doctors', 'as'=>'doctor.', 'middleware'=>['web']], function (){
    Route::get('/', [ChamberManagementController::class, 'index'])->name('index');
});
