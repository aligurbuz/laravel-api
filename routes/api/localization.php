<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Localizations\LocalizationsController;
use App\Http\Controllers\Api\Localizations\LanguageController;

Route::prefix('localizations')->group(function(){

    Route::get('/', [LocalizationsController::class,'get']);
    Route::post('/', [LocalizationsController::class,'create']);
    Route::put('/', [LocalizationsController::class,'update']);

    Route::get('/language', [LanguageController::class,'get']);
    Route::post('/language', [LanguageController::class,'create']);
    Route::put('/language', [LanguageController::class,'update']);
});
