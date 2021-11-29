<?php

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Report\ReportController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('store.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('auth:store')->group(function (){
    Route::get('/', [HomeController::class, 'getIndex'])->name('dashboard');

    Route::prefix('/report')->group(function(){
        Route::get('/', [ReportController::class, 'index'])->name('report.index');
        Route::get('/{report}', [ReportController::class, 'show'])->name('report.show');
    });
});
Route::get('/signup', [LoginController::class, 'getSignUp']);
Route::post('/signup', [LoginController::class, 'signUp'])->name('signup');

