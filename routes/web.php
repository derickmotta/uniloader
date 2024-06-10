<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'loged'])->name('loged');

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/download', [DownloadController::class, 'storage']);

Route::post('/download', [DownloadController::class, 'storage']);

Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::view('/login', 'auth.login')->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
