<?php

use Illuminate\Support\Facades\Route;
use Modules\Chamber\Http\Controllers\V1\ChamberManagementController;

// Chamber
Route::group(['as'=>'backoffice.chamber.', 'prefix'=>'/chamber', 'middleware'=>[]], function (){
    Route::get('/', [ChamberManagementController::class, 'index'])->name('index');
    Route::get('/create', [ChamberManagementController::class, 'create'])->name('create');
    Route::post('/store', [ChamberManagementController::class, 'store'])->name('store');
    Route::get('/{chamber_id}/edit', [ChamberManagementController::class, 'edit'])->name('edit');
    Route::put('/{chamber_id}/update', [ChamberManagementController::class, 'update'])->name('update');
    Route::delete('/{chamber_id}', [ChamberManagementController::class, 'destroy'])->name('delete');
});
