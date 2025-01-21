<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('logar');
    
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('registrar');
});

// Route::get('logout', fn () => 'logout')->middleware('auth')->name('logout');
Route::get('logout', LogoutController::class)->middleware('auth')->name('logout');

// Route::get('dashboard', fn() => 'dashboard :: '. Auth::user()->id)->middleware('auth')->name('dashboard');
Route::get('dashboard', function() {
    return 'dashboard :: '. Auth::user()->id;
})->middleware('auth')->name('dashboard');