<?php

use App\Services\Postman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\Api\DocumentationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/doc', [DocumentationController::class,'index']);
Route::post('/deployment/{key}', [DeploymentController::class,'handle']);

Route::get('/postman/collection',function(){
    return response()->json(Postman::collection());
});

Route::get('/postman/environment',function(){
    return response()->json(Postman::environment());
});
