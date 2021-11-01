<?php

use App\Services\Postman;
use Illuminate\Support\Facades\Route;
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

Route::get('/postman/collection',function(){
    return json_encode(Postman::collection());
});

Route::get('/postman/environment',function(){
    return json_encode(Postman::environment());
});
