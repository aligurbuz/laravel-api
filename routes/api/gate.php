<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Gate\PermissionsController;
use App\Http\Controllers\Api\Gate\RolesController;

Route::prefix('gate')->group(function(){

    Route::get('/permissions', [PermissionsController::class,'get']);
    Route::post('/permissions', [PermissionsController::class,'create']);
    Route::put('/permissions', [PermissionsController::class,'update']);

    Route::get('/roles', [RolesController::class,'get']);
    Route::post('/roles', [RolesController::class,'create']);
    Route::put('/roles', [RolesController::class,'update']);

});
