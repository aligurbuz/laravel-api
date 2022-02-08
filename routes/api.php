<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Registration\RegistrationController;
use App\Http\Controllers\Api\User\PhotosController;
use App\Http\Controllers\Api\Timezones\TimezonesController;
use App\Http\Controllers\Api\Currencies\CurrenciesController;
use App\Http\Controllers\Api\Countries\DistrictsController;
use App\Http\Controllers\Api\Countries\CitiesController;
use App\Http\Controllers\Api\Mix\TableChangesController;
use App\Http\Controllers\Api\Gate\PermissionsController;
use App\Http\Controllers\Api\Gate\RolesController;
use App\Http\Controllers\Api\SuperAdmins\SuperAdminsController;
use App\Http\Controllers\Api\Localizations\LanguageController;
use App\Http\Controllers\Api\Localizations\LocalizationsController;
use App\Http\Controllers\Api\Countries\CountriesController;
use App\Http\Controllers\Api\User\UserController;
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

    Route::post('/registration', [RegistrationController::class,'create']);
    Route::post('/verifying', [VerifyingController::class,'verifying']);

    Route::get('/user/photos', [PhotosController::class,'get']);
    Route::post('/user/photos', [PhotosController::class,'create']);
    Route::put('/user/photos', [PhotosController::class,'update']);

    Route::get('/timezones', [TimezonesController::class,'get']);
    Route::post('/timezones', [TimezonesController::class,'create']);
    Route::put('/timezones', [TimezonesController::class,'update']);

    Route::get('/currencies', [CurrenciesController::class,'get']);
    Route::post('/currencies', [CurrenciesController::class,'create']);
    Route::put('/currencies', [CurrenciesController::class,'update']);

    Route::get('/countries/districts', [DistrictsController::class,'get']);
    Route::post('/countries/districts', [DistrictsController::class,'create']);
    Route::put('/countries/districts', [DistrictsController::class,'update']);

    Route::get('/countries/cities', [CitiesController::class,'get']);
    Route::post('/countries/cities', [CitiesController::class,'create']);
    Route::put('/countries/cities', [CitiesController::class,'update']);

    Route::get('/mix/tableChanges', [TableChangesController::class,'get']);
    Route::post('/mix/tableChanges', [TableChangesController::class,'create']);
    Route::put('/mix/tableChanges', [TableChangesController::class,'update']);

    Route::get('/gate/permissions', [PermissionsController::class,'get']);
    Route::post('/gate/permissions', [PermissionsController::class,'create']);
    Route::put('/gate/permissions', [PermissionsController::class,'update']);

    Route::get('/gate/roles', [RolesController::class,'get']);
    Route::post('/gate/roles', [RolesController::class,'create']);
    Route::put('/gate/roles', [RolesController::class,'update']);

    Route::get('/superAdmins', [SuperAdminsController::class,'get']);
    Route::post('/superAdmins', [SuperAdminsController::class,'create']);
    Route::put('/superAdmins', [SuperAdminsController::class,'update']);

    Route::get('/localizations/language', [LanguageController::class,'get']);
    Route::post('/localizations/language', [LanguageController::class,'create']);
    Route::put('/localizations/language', [LanguageController::class,'update']);

    Route::get('/localizations', [LocalizationsController::class,'get']);
    Route::post('/localizations', [LocalizationsController::class,'create']);
    Route::put('/localizations', [LocalizationsController::class,'update']);

    Route::get('/countries', [CountriesController::class,'get']);
    Route::post('/countries', [CountriesController::class,'create']);
    Route::put('/countries', [CountriesController::class,'update']);

    Route::post('/logout', [LogoutController::class,'logout']);

    Route::get('/logger', [LoggerController::class,'get']);
    Route::post('/logger', [LoggerController::class,'create']);
    Route::put('/logger', [LoggerController::class,'update']);

    Route::get('/user', [UserController::class,'get']);
    Route::post('/user', [UserController::class,'create']);
    Route::put('/user', [UserController::class,'update']);

    Route::post('global',[GlobalController::class,'handle']);

});
