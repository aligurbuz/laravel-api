<?php

use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(static function () {
    Route::get('/login', [AuthenticateController::class, 'login'])->name('admin.get.login');
    Route::post('/login', [AuthenticateController::class, 'login'])->name('admin.post.login');

    Route::middleware(['admin'])->get('/logout', [AuthenticateController::class, 'logout'])->name('admin.logout');
    Route::middleware(['admin'])->get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::middleware(['admin'])->get('/pages/{route}', [PagesController::class, 'index'])->name('admin.pages.index');
    Route::middleware(['admin'])->post('/pages/store', [PagesController::class, 'store'])->name('admin.pages.store');
    Route::middleware(['admin'])->put('/pages/update', [PagesController::class, 'update'])->name('admin.pages.update');
    Route::middleware(['admin'])->get('/pages/{route}/edit/{code}', [PagesController::class, 'edit'])->name('admin.pages.edit');
});
