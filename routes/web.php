<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('logar');

// Route::get('dashboard', fn() => 'dashboard :: '. Auth::user()->id)->middleware('auth')->name('dashboard');
Route::get('dashboard', function() {
    return 'dashboard :: '. Auth::user()->id;
})->middleware('auth')->name('dashboard');