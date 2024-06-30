<?php

use Illuminate\Support\Facades\Route;

use Modules\Location\Http\Controllers\AreaController;
use Modules\Location\Http\Controllers\CityController;
use Modules\Location\Http\Controllers\CountryController;
use Modules\Location\Http\Controllers\ProvinceController;


//Area
Route::group(['as'=>'backoffice.area.', 'prefix'=>'/area', 'middleware'=>[]], function (){
    Route::get('/', [AreaController::class, 'index'])->name('index');
    Route::get('/create', [AreaController::class, 'create'])->name('create');
    Route::post('/store', [AreaController::class, 'store'])->name('store');
    Route::get('/{area_id}/edit', [AreaController::class, 'edit'])->name('edit');
    Route::put('/{area_id}/update', [AreaController::class, 'update'])->name('update');
    Route::delete('/{area_id}', [AreaController::class, 'destroy'])->name('delete');
    Route::get('/{area_id}/by-city', [AreaController::class, 'getAreaByCityId'])->name('byCity');

});

//City
Route::group(['as'=>'backoffice.city.', 'prefix'=>'/city', 'middleware'=>[]], function (){
    Route::get('/', [CityController::class, 'index'])->name('index');
    Route::get('/create', [CityController::class, 'create'])->name('create');
    Route::post('/store', [CityController::class, 'store'])->name('store');
    Route::get('/{city_id}/edit', [CityController::class, 'edit'])->name('edit');
    Route::put('/{city_id}/update', [CityController::class, 'update'])->name('update');
    Route::delete('/{city_id}', [CityController::class, 'destroy'])->name('delete');
    Route::get('/{province_id}/by-province', [CityController::class, 'getCityByProvinceId'])->name('byProvince');;
});

//Province
Route::group(['as'=>'backoffice.province.', 'prefix'=>'/province', 'middleware'=>[]], function (){
    Route::get('/', [ProvinceController::class, 'index'])->name('index');
    Route::get('/create', [ProvinceController::class, 'create'])->name('create');
    Route::post('/store', [ProvinceController::class, 'store'])->name('store');
    Route::get('/{province_id}/edit', [ProvinceController::class, 'edit'])->name('edit');
    Route::put('/{province_id}/update', [ProvinceController::class, 'update'])->name('update');
    Route::delete('/{province_id}', [ProvinceController::class, 'destroy'])->name('delete');
    Route::get('/{country_id}/by-country', [ProvinceController::class, 'getProvinceByCountryId'])->name('byCountry');
});

//Country
Route::group(['as'=>'backoffice.country.', 'prefix'=>'/country', 'middleware'=>[]], function (){
    Route::get('/', [CountryController::class, 'index'])->name('index');
    Route::get('/create', [CountryController::class, 'create'])->name('create');
    Route::post('/store', [CountryController::class, 'store'])->name('store');
    Route::get('/edit/{country_id}', [CountryController::class, 'edit'])->name('edit');
    Route::put('/{country_id}/update', [CountryController::class, 'update'])->name('update');
    Route::delete('/{country_id}', [CountryController::class, 'destroy'])->name('delete');
});
