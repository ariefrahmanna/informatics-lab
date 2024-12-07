<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TpController;

// Route::get('/tes-pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
// Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
// Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/tp', [TpController::class, 'index'])->name('tp.index');
Route::get('/tp/create', [TpController::class, 'create'])->name('tp.create');
Route::post('/tp/store', [PegawaiController::class, 'store'])->name('tp.store');
