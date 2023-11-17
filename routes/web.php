<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', [HomeController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route::resource('/jurusan', JurusanController::class);
// Route::resource('/prodi', ProdiController::class);
// Route::resource('/mahasiswa', MahasiswaController::class);
// Route::resource('/beasiswa', BeasiswaController::class);
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/prodi', ProdiController::class);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/beasiswa', BeasiswaController::class);
});
