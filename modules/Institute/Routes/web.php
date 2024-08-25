<?php

use Illuminate\Support\Facades\Route;

use Modules\Institute\Http\Controllers\InstituteController;

//Speciality
Route::group(['as'=>'backoffice.institute.', 'prefix'=>'/institute', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [InstituteController::class, 'index'])->name('index');
    Route::get('/create', [InstituteController::class, 'create'])->name('create');
    Route::post('/store', [InstituteController::class, 'store'])->name('store');
    Route::get('/{institute_id}/edit', [InstituteController::class, 'edit'])->name('edit');
    Route::put('/{institute_id}/update', [InstituteController::class, 'update'])->name('update');
    Route::delete('/{institute_id}', [InstituteController::class, 'destroy'])->name('delete');
});
