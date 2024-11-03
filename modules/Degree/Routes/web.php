<?php

use Illuminate\Support\Facades\Route;

use Modules\Degree\Http\Controllers\DegreeController;

//Course
Route::group(['as'=>'backoffice.degree.', 'prefix'=>'/degree', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [DegreeController::class, 'index'])->name('index');
    Route::get('/create', [DegreeController::class, 'create'])->name('create');
    Route::post('/store', [DegreeController::class, 'store'])->name('store');
    Route::get('/{degree_id}/edit', [DegreeController::class, 'edit'])->name('edit');
    Route::put('/{degree_id}/update', [DegreeController::class, 'update'])->name('update');
    Route::delete('/{degree_id}', [DegreeController::class, 'destroy'])->name('delete');
});
