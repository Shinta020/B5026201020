<?php

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

Route::get('praktikum1', function () {
    return view('prak1web');
});
Route::get('tugas4', function () {
    return view('task4web');
});
Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ets', 'ViewController@showETS');
Route::get('showcalculator', 'ViewController@showCalForm');
Route::post('result', 'ViewController@showResultPHP');

//pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{ID}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{ID}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

Route::get('home', function () {
    return view('layout.ceria');
});

Route::get('home', function () {
    return view('absen.index');
});

Route::get('home', function () {
    return view('mutasi.index');
});

Route::get('home', function () {
    return view('pegawai.index');
});

Route::get('home', function () {
    return view('mobil.index');
});

//Mobil
Route::get('/mobil','MobilController@index');
Route::get('/mobil/tambah','MobilController@tambah');
Route::post('/mobil/store','MobilController@store');
Route::get('/mobil/edit/{id}','MobilController@edit');
Route::post('/mobil/update','MobilController@update');
Route::get('/mobil/hapus/{id}','MobilController@hapus');
Route::get('/mobil/cari','MobilController@cari');
Route::get('/mobil/detail/{id}','MobilController@view');
