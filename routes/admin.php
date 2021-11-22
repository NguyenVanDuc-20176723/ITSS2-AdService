<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('adminAuth:admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('admin-home');
});
