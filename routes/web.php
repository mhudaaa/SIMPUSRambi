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

Route::get('/login', function () {
    return view('login');
});

Route::get('/poli', 'PoliController@index');
Route::get('/poli/rekap', 'PoliController@rekapPemeriksaan');
Route::get('/poli/rekap/detail/{id}', 'PoliController@detailPemeriksaan');
Route::get('/poli/tambah/{id}', 'PoliController@tambahPemeriksaan');

Route::get('/poli/tambah-pemeriksaan', function () {
    return view('poli.tambah-pemeriksaan');
});

Route::post('/poli/tambah/add', 'PoliController@buatPemeriksaan');

// Tambah Diagnosa
Route::post('/poli/tambah/diagnosa', 'PoliController@tambahDiagnosa');
