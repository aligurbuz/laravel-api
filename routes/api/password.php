<?php

use App\Http\Controllers\Api\Password\ChangesController;
use Illuminate\Support\Facades\Route;

Route::prefix('password')->group(function () {

    Route::get('/changes', [ChangesController::class, 'get']);
    Route::post('/changes', [ChangesController::class, 'create']);
    Route::put('/changes', [ChangesController::class, 'update']);
});
