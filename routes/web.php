<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use  App\Http\Controllers\SepatuController;

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
