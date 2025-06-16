<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

//Route::get('/', function () {
  //  return view("dashboard");
//});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//route ::get('/mahasiswa', [MahasiswaController::class, 'index']);
//route ::post('/mahasiswa', [MahasiswaController::class, 'store']);
//route ::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::resource('/mahasiswa', MahasiswaController::class);