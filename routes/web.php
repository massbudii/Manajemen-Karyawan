<?php

// use Illuminate\Container\Attributes\Auth;

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Auth::routes();

// Route::get('/pegawai', )

Route::get('/Data Pegawai', [PegawaiController::class, 'index']
)->name('pegawai');

Route::get('/pegawai/create', [PegawaiController::class, 'create']
)->name('pegawai.create');
