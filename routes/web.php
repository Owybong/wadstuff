<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware('auth')->group(function () {  
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::middleware('role:mahasiswa')->group(function () {
        Route::get('/mahasiswa/krs', [MahasiswaController::class, 'krs']);
    });
    Route::middleware('role:dosen_wali')->group(function () {
        Route::get('/dosen-wali/mahasiswa-bimbingan', [DosenWaliController::class, 'index']);
    });
    Route::middleware('role:kaprodi')->group(function () {
        Route::get('/kaprodi/laporan', [KaprodiController::class, 'index']);
    });
});

require __DIR__.'/settings.php';
