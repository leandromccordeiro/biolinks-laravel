<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('logar');
    
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('registrar');
});

Route::middleware('auth')->group(function () {
    // Route::get('logout', fn () => 'logout')->middleware('auth')->name('logout');
    Route::get('logout', LogoutController::class)->name('logout');
    
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    // Route::get('dashboard', function() {
    //     return 'dashboard :: '. Auth::user()->id;
    // })->name('dashboard');

    Route::get('links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('links/create', [LinkController::class, 'store']);
});