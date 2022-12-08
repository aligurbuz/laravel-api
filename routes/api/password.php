<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Password\ChangesController;

Route::prefix('password')->group(function(){

    Route::get('/changes', [ChangesController::class,'get']);
    Route::post('/changes', [ChangesController::class,'create']);
    //Route::put('/changes', [ChangesController::class,'update']);
});
