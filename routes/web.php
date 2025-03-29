<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pegawai', PegawaiController::class);

Route::resource('mahasiswa', MahasiswaController::class);