<?php

use App\Http\Controllers\Api\Localizations\LanguageController;
use App\Http\Controllers\Api\Localizations\LocalizationsController;
use Illuminate\Support\Facades\Route;

Route::prefix('localizations')->group(function () {

    Route::get('/', [LocalizationsController::class, 'get']);
    Route::post('/', [LocalizationsController::class, 'create']);
    Route::put('/', [LocalizationsController::class, 'update']);

    Route::get('/language', [LanguageController::class, 'get']);
    Route::post('/language', [LanguageController::class, 'create']);
    Route::put('/language', [LanguageController::class, 'update']);
});
