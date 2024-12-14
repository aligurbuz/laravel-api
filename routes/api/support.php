<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Support\CryptController;

Route::prefix('support')->group(function(){

    //Route::get('/crypt', [CryptController::class,'get']);
    Route::post('/crypt', [CryptController::class,'create']);
    //Route::put('/crypt', [CryptController::class,'update']);
});
