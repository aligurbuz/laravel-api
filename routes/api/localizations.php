<?php

use App\Http\Controllers\Api\Localizations\FrontController;
use Illuminate\Support\Facades\Route;

Route::prefix('localizations')->group(function () {

    Route::get('/front', [FrontController::class, 'get']);
    Route::post('/front', [FrontController::class, 'create']);
    Route::put('/front', [FrontController::class, 'update']);
});
