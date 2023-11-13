<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bootstrap-jumbotron', function () {
    return view('BOOTSTRAPJUMBOTRON');
});
Route::get('/js2', function () {
    return view('JS2');
});
Route::get('/latihan1', function () {
    return view('Latihan1');
});
Route::get('/linktree-hangry', function () {
    return view('LinktreeHangry');
});
Route::get('/tes', function () {
    return view('tes');
});
Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenControllerr@proses');
