<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;


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


Route::get('halo',function() {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});


Route::get('halo2',function() {
    return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog2',function() {
    return view('blog');
});

Route::get('berita',function() {
    return view('berita');
});

Route::get('hello',function() {
    return view('hello');
});

Route::get('badges',function() {
    return view('badges');
});

Route::get('welcome',function() {
    return view('welcome');
});

Route::get('js1',function() {
    return view('js1');
});

Route::get('js2',function() {
    return view('js2');
});

Route::get('validasi1',function() {
    return view('validasi1');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('5026221090', function() {
    return view('5026221090-linktree');
});

Route::get('ETS', function() {
    return view('ETS');
});

Route::get('perkalian', [DosenController::class, 'index']);

Route::get('show', [DosenController::class, 'showBlog']);

Route::get('/employee/{nama}', [DosenController::class, 'showNama']);

Route::get('/formulir', [DosenController::class,'formulir']);
Route::post('/formulir/proses', [DosenController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);
Route::get('/pegawai/view/{id}',[PegawaiController::class, 'view']);
Route::get('/pegawai/warna',[PegawaiController::class, 'view']);
