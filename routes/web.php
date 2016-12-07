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


// Auth
Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/poli/rekap/detail', function () {
    return view('poli.detail-pemeriksaan');
});

Route::get('/poli', 'PoliController@index');
Route::get('/poli/tambah/{id}', 'PoliController@tambahPemeriksaan');

Route::get('/poli/tambah-pemeriksaan', function () {
    return view('poli.tambah-pemeriksaan');
});

Route::post('/poli/tambah/add', 'PoliController@buatPemeriksaan');

// Tambah data pemeriksaan
Route::post('/poli/tambah/diagnosa', 'PoliController@tambahDiagnosa');
Route::post('/poli/tambah/rujukan', 'PoliController@tambahRujukan');
Route::post('/poli/tambah/obat', 'PoliController@tambahObat');
Route::post('/poli/tambah/catatanResep', 'PoliController@tambahCatatanResep');
Route::get('/poli/hapus/obat/{resep}/{obat}', 'PoliController@hapusObat');

// Rekap pemeriksaan
Route::get('/poli/rekap', 'PoliController@rekapPemeriksaan');
Route::get('/poli/rekap/detail/{id}', 'PoliController@detailPemeriksaan');

