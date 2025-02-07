<?php

use App\Http\Controllers\Api\Countries\CitiesController;
use App\Http\Controllers\Api\Countries\CountriesController;
use App\Http\Controllers\Api\Countries\DistrictsController;
use Illuminate\Support\Facades\Route;

Route::prefix('countries')->group(function () {

    Route::get('/', [CountriesController::class, 'get']);
    Route::post('/', [CountriesController::class, 'create']);
    Route::put('/', [CountriesController::class, 'update']);

    Route::get('/districts', [DistrictsController::class, 'get']);
    Route::post('/districts', [DistrictsController::class, 'create']);
    Route::put('/districts', [DistrictsController::class, 'update']);

    Route::get('/cities', [CitiesController::class, 'get']);
    Route::post('/cities', [CitiesController::class, 'create']);
    Route::put('/cities', [CitiesController::class, 'update']);
});
