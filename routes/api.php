<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;

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

Route::post('/login', [LoginController::class,'login']);

Route::middleware(['auth:api','apiKey','accessLogger'])->group(function(){

    Route::get('/user', [UserController::class,'get']);
    Route::post('/user', [UserController::class,'create']);
    Route::put('/user', [UserController::class,'update']);

});
