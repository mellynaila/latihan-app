<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;

// login
Route::get('/', [LoginController::class, 'loginForm']);
Route::post('/login', [LoginController::class, 'login']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// logout
Route::post('/logout', [LoginController::class, 'logout']);
