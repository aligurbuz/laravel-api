<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Support\ExcelController;
use App\Http\Controllers\Api\Registration\RegistrationController;
use App\Http\Controllers\Api\Timezones\TimezonesController;
use App\Http\Controllers\Api\Currencies\CurrenciesController;
use App\Http\Controllers\Api\SuperAdmins\SuperAdminsController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Logger\LoggerController;
use App\Http\Controllers\Api\Auth\VerifyingController;
use App\Http\Controllers\GlobalController;

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

Route::get('testing',function(){
   return response()->json(['status' => 1]);
});

Route::middleware([])->group(function(){

    Route::post('/support/excel', [ExcelController::class,'create']);

    Route::post('/registration', [RegistrationController::class,'create']);
    Route::post('/verifying', [VerifyingController::class,'verifying']);

    Route::get('/timezones', [TimezonesController::class,'get']);
    Route::post('/timezones', [TimezonesController::class,'create']);
    Route::put('/timezones', [TimezonesController::class,'update']);

    Route::get('/currencies', [CurrenciesController::class,'get']);
    Route::post('/currencies', [CurrenciesController::class,'create']);
    Route::put('/currencies', [CurrenciesController::class,'update']);

    Route::get('/superAdmins', [SuperAdminsController::class,'get']);
    Route::post('/superAdmins', [SuperAdminsController::class,'create']);
    Route::put('/superAdmins', [SuperAdminsController::class,'update']);

    Route::post('/logout', [LogoutController::class,'logout']);

    Route::get('/logger', [LoggerController::class,'get']);
    Route::post('/logger', [LoggerController::class,'create']);
    Route::put('/logger', [LoggerController::class,'update']);

    Route::post('global',[GlobalController::class,'handle']);

});
