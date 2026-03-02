<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarCipherController;

Route::get('/caesar', [CaesarCipherController::class, 'index']);
Route::post('/caesar', [CaesarCipherController::class, 'process'])
    ->name('caesar.process');
