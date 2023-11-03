<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login']);
Route::get('/beranda', [BerandaController::class, 'beranda']);

//ini routing mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'show']);
Route::get('/mahasiswa/add', [MahasiswaController::class, 'add']);
Route::post('/mahasiswa/save', [MahasiswaController::class, 'save']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswa/print/{id}', [MahasiswaController::class, 'print']);
