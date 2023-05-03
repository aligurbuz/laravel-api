<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Definition\GendersController;

Route::prefix('definition')->group(function(){

    Route::get('/genders', [GendersController::class,'get']);
    Route::post('/genders', [GendersController::class,'create']);
    Route::put('/genders', [GendersController::class,'update']);
});