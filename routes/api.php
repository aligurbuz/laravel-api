<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Countries\CountriesController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\Logger\LoggerController;
use App\Http\Controllers\Register\RegisterController;

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
Route::post('/register', [RegisterController::class,'register']);

Route::middleware(['auth:api'])->group(function(){

    Route::get('/countries', [CountriesController::class,'get']);
    Route::post('/countries', [CountriesController::class,'create']);
    Route::put('/countries', [CountriesController::class,'update']);

    Route::post('/logout', [LogoutController::class,'logout']);

    Route::get('/user/comment', [CommentController::class,'get']);
    Route::post('/user/comment', [CommentController::class,'create']);
    Route::put('/user/comment', [CommentController::class,'update']);

    Route::get('/logger', [LoggerController::class,'get']);
    Route::post('/logger', [LoggerController::class,'create']);
    Route::put('/logger', [LoggerController::class,'update']);

    Route::get('/user', [UserController::class,'get']);
    Route::post('/user', [UserController::class,'create']);
    Route::put('/user', [UserController::class,'update']);

});
