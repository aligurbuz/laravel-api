<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Customer\ProfilesController;

Route::prefix('customer')->group(function(){

    Route::get('/profiles', [ProfilesController::class,'get']);
    Route::post('/profiles', [ProfilesController::class,'create']);
    Route::put('/profiles', [ProfilesController::class,'update']);
});