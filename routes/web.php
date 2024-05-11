<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);

//menampilkan data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//menampilkan form tambah mahasiswa
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
//menyimpan data mahasiswa ke DB
Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'simpan']);
//menampilkan form edit mahasiswa
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
//mengupdate data mahasiswa ke DB
Route::post('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update']);
//mendelete data mahasiswa di DB
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
//untuk mencetak data
Route::get('/mahasiswa/cetak-pdf', [MahasiswaController::class, 'cetak']);
