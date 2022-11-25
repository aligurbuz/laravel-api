<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Store\ProductsController;

Route::prefix('store')->group(function(){

    Route::get('/products', [ProductsController::class,'get']);
    Route::post('/products', [ProductsController::class,'create']);
    Route::put('/products', [ProductsController::class,'update']);
});