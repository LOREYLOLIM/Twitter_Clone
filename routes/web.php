<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwitterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/twitter', [TwitterController::class, 'store'])->name('twitter.create');
Route::get('/profile', [ProfileController::class, 'index']);