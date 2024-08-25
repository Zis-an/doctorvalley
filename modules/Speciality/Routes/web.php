<?php

use Illuminate\Support\Facades\Route;

use Modules\Speciality\Http\Controllers\SpecialityController;

//Speciality
Route::group(['as'=>'backoffice.speciality.', 'prefix'=>'/speciality', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [SpecialityController::class, 'index'])->name('index');
    Route::get('/create', [SpecialityController::class, 'create'])->name('create');
    Route::post('/store', [SpecialityController::class, 'store'])->name('store');
    Route::get('/{speciality_id}/edit', [SpecialityController::class, 'edit'])->name('edit');
    Route::put('/{speciality_id}/update', [SpecialityController::class, 'update'])->name('update');
    Route::delete('/{speciality_id}', [SpecialityController::class, 'destroy'])->name('delete');
});
