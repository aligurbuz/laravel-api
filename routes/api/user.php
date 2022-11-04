<?php

use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {

    Route::get('/', [UserController::class, 'get']);
    Route::post('/', [UserController::class, 'create']);
    Route::put('/', [UserController::class, 'update']);
});
