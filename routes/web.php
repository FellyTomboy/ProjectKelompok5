<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController; // Tambahkan use untuk AdminController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk profil pengguna, hanya bisa diakses jika sudah login
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard'); // Dashboard admin
    })->name('admin.dashboard');
});

// Memuat file untuk rute otentikasi
require __DIR__.'/auth.php';
