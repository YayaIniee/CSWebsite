<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;

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
    return view('guest/home');
});

Route::get('/guest', function () {
    return view('guest/home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/admin', function () {
    return view('home');
});

Route::get('/intern', function () {
    return view('guest/intern');
});

Route::get('/prestasi', function () {
    return view('guest/prestasi');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@experimental');

Route::post('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@store');

Route::get('/mahasiswa/tambah','App\Http\Controllers\MahasiswaController@tambah');

Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaController@edit');

Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');