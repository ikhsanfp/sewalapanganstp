<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/panduan', function () {
    return view('panduan');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/homepages', function () {
    return view('homepages');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'store']);


