<?php

use App\Http\Controllers\Api\Support\CryptController;
use App\Http\Controllers\Api\Support\DummyController;
use Illuminate\Support\Facades\Route;

Route::prefix('support')->group(function () {

    //Route::get('/crypt', [CryptController::class,'get']);
    Route::post('/crypt', [CryptController::class, 'create']);
    //Route::put('/crypt', [CryptController::class,'update']);

    //Route::get('/dummy', [DummyController::class,'get']);
    Route::post('/dummy', [DummyController::class, 'create']);
    //Route::put('/dummy', [DummyController::class,'update']);
});
