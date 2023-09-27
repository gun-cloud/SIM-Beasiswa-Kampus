<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdiController;
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

Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/mahasiswa', function () {
    return view('admin.mahasiswa');
});

Route::resource('/jurusan', JurusanController::class);
Route::resource('/prodi', ProdiController::class);
