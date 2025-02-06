<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rute untuk halaman utama (welcome) jika pengguna belum login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rute untuk dashboard berdasarkan role setelah login
Route::middleware('auth')->get('/dashboard', function () {
    // Cek role pengguna
    if (Auth::user()->hasRole('admin')) {
        // Jika admin, arahkan ke dashboard admin
        return view('AdminDashboard');
    } else {
        // Jika user biasa, arahkan ke dashboard user
        return view('UserDashboard');
    }
})->name('dashboard');

// Rute untuk profil pengguna, hanya bisa diakses jika sudah login
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memuat file untuk rute otentikasi
require __DIR__.'/auth.php';
