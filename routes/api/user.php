<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\ActivationsController;
use App\Http\Controllers\Api\User\PhotosController;
use App\Http\Controllers\Api\User\UserController;

Route::prefix('user')->group(function(){

    Route::get('/', [UserController::class,'get']);
    Route::post('/', [UserController::class,'create']);
    Route::put('/', [UserController::class,'update']);

    Route::get('/photos', [PhotosController::class,'get']);
    Route::post('/photos', [PhotosController::class,'create']);
    Route::put('/photos', [PhotosController::class,'update']);

    Route::get('/activations', [ActivationsController::class,'get']);
    Route::post('/activations', [ActivationsController::class,'create']);
    Route::put('/activations', [ActivationsController::class,'update']);
});
