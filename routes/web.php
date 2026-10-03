<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKioskController;

// Route Halaman Form Laporan
Route::get('/', [LaporanKioskController::class, 'create'])->name('kiosk.create');

// Route Proses Simpan Laporan (POST)
Route::post('/laporan', [LaporanKioskController::class, 'store'])->name('kiosk.store');

// Route Halaman Daftar Laporan
Route::get('/laporan', [LaporanKioskController::class, 'index'])->name('kiosk.index');
