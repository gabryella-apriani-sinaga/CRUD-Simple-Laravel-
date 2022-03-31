<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan data ke view "index"
Route::get('mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk menambahkan data ke view "index"
Route::get('mahasiswa/tambah', [MahasiswaController::class, 'tambah']);

// Route Menyimpan inputan ke database
Route::post('/mahasiswa/store', [MahasiswaController::class,'store']);

// Route untuk Edit data mahasiswa
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);

// Route untuk Update data
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update']);

//Route Untuk Hapus Data
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class,'hapus']);

//Route untuk mencari mahasiswa berdasarkan id
Route::get('/mahasiswa/cari',[MahasiswaController::class, 'cari']);

