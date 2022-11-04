<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\VerifyingController;
use App\Http\Controllers\GlobalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginController::class, 'login']);

Route::get('testing', function () {
    return response()->json(['status' => 1]);
});

Route::middleware([])->group(function () {
    Route::post('/verifying', [VerifyingController::class, 'verifying']);
    Route::post('/logout', [LogoutController::class, 'logout']);
    Route::post('global', [GlobalController::class, 'handle']);

});
