<?php

use Illuminate\Support\Facades\Route;

use Modules\Course\Http\Controllers\CourseController;

//Course
Route::group(['as'=>'backoffice.course.', 'prefix'=>'/course', 'middleware'=>['auth:admin']], function (){
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::get('/{course_id}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::put('/{course_id}/update', [CourseController::class, 'update'])->name('update');
    Route::delete('/{course_id}', [CourseController::class, 'destroy'])->name('delete');
});
