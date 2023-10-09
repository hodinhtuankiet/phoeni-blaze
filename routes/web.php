<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\User\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/main', [MainController::class, 'index']);

    Route::get('/admin', [MainController::class, 'index'])
        ->name(name: 'admin');
});
