<?php

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Auth::routes();

// Route::get('/pegawai', )
