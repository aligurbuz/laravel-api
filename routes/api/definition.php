<?php

use App\Http\Controllers\Api\Definition\GendersController;
use Illuminate\Support\Facades\Route;

Route::prefix('definition')->group(function () {

    Route::get('/genders', [GendersController::class, 'get']);
    Route::post('/genders', [GendersController::class, 'create']);
    Route::put('/genders', [GendersController::class, 'update']);
});
