<?php

use App\Http\Controllers\Admin\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(static function () {
    Route::get('/login', [AuthenticateController::class, 'login'])->name('admin.get.login');
    Route::post('/login', [AuthenticateController::class, 'login'])->name('admin.post.login');
});
