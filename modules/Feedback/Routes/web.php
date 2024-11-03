<?php

use Illuminate\Support\Facades\Route;

use Modules\Feedback\Http\Controllers\FeedbackController;


Route::group(['as'=>'feedback.', 'prefix'=>'/feedback', 'middleware'=>['auth:admin,doctor']], function (){
    Route::get('/', [FeedbackController::class, 'index'])->name('index');
});

Route::group(['as'=>'feedback.', 'prefix'=>'/feedback', 'middleware'=>['auth:doctor,chamber']], function(){
    Route::get('/create', [FeedbackController::class, 'create'])->name('create');
    Route::post('/store', [FeedbackController::class, 'store'])->name('store');
});
