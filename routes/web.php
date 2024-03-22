<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\RegisterController;

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'store']);

Route::get('/', [HomeController::class, 'homepages']);
Route::get('/home', [HomeController::class, 'home']);

Route::get('/panduan', [PanduanController::class, 'panduan']);

Route::get('/pesan', [PesanController::class, 'pesan']);
Route::get('/tambah', [PesanController::class, 'tambah']);
Route::post('/tambah/store', [PesanController::class, 'store']);

Route::get('/laporan', [LaporanController::class, 'laporan']);
