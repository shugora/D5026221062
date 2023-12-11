<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use  App\Http\Controllers\SepatuController;
use  App\Http\Controllers\NilaikuliahController;
use  App\Http\Controllers\MahasiswaController;
use  App\Http\Controllers\KaryawanController;
use  App\Http\Controllers\ChatController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('asha');
});

Route::get('/asha', function () {
    return ('halo ini page asha');
});

Route::get('/ContohController',[ContohController::class, 'index']);


//route CRUD
Route::get('/sepatu', [SepatuController::class, 'index']);
Route::get('/sepatu/tambah',[SepatuController::class, 'tambah']);
Route::post('/sepatu/store',[SepatuController::class, 'store']);
Route::get('/sepatu/edit/{id}',[SepatuController::class, 'edit']);
Route::post('/sepatu/update',[SepatuController::class, 'update']);
Route::get('/sepatu/hapus/{id}',[SepatuController::class, 'hapus']);
Route::get('/sepatu/cari',[SepatuController::class, 'cari']);
Route::get('/sepatu/view/{id}',[SepatuController::class, 'view']);
Route::get('/sepatu/warna',[SepatuController::class, 'view']);
Route::get('/nilaikuliah', [NilaikuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaikuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaikuliahController::class, 'store'])->name('nilaikuliah.store');


//route mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Route hapus data mahasiswa
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);


//Route karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::get('/karyawan/{kodepegawai}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{kodepegawai}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{kodepegawai}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');


Route::get('/chat', [ChatController::class, 'index']);
