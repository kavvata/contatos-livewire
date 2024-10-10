<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/dashboard', [AdminDashboard::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::resource('contato', ContatoController::class)->middleware(['auth']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
