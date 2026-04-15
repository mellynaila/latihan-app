<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BukuController;

// login
Route::get('/', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD pengguna
Route::resource('pengguna', PenggunaController::class);

// Perpustakaan_buku
Route::resource('buku', BukuController::class);

// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
