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
)->name('pegawai.index');

Route::get('/pegawai/create', [PegawaiController::class, 'create']
)->name('pegawai.create');

Route::post('/pegawai/store', [PegawaiController::class, 'store']
)->name('pegawai.store');

Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit']
)->name('pegawai.edit');

Route::put('/pegawai/{pegawai}/update', [PegawaiController::class, 'update']
)->name('pegawai.update');

Route::delete('/pegawai/{id}/destroy', [PegawaiController::class, 'destroy']
)->name('pegawai.destroy');


