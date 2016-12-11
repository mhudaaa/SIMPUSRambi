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
    return view('login');
});

// POLI --------------------------------------------------------------------------
// Pemeriksaan
Route::get('/poli', 'PoliController@home');
Route::get('/poli/antrian', 'PoliController@index');
Route::get('/poli/tambah/{id}', 'PoliController@tambahPemeriksaan');
Route::get('/poli/tambah-pemeriksaan', function () {
    return view('poli.tambah-pemeriksaan');
});
Route::get('/poli/submit/pemeriksaan/{id}', 'PoliController@ubahStatusPemeriksaan');

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


// LOKET ---------------------------------------------------------------------------
Route::get('/loket', function () {
    return view('loket.v_homeLoket');
});
//Pasien
Route::resource('pasien', 'c_pasien');
Route::get('Form Pasien','c_pasien@fPasien');
Route::post('Tambah Pasien','c_pasien@tambahPasien');
Route::get('Form Ubah Pasien/{id}','c_pasien@fUpdatePasien');
Route::post('Ubah Pasien/{id}','c_pasien@ubahPasien');
//Kunjungan
Route::resource('kunjungan', 'c_kunjungan');
Route::get('Form Kunjungan','c_kunjungan@fKunjungan');
Route::post('Tambah Kunjungan','c_kunjungan@tambahKunjungan');
Route::get('Form Ubah Kunjungan/{IdKunjungan}','c_kunjungan@fUpdateKunjungan');
Route::post('Ubah Kunjungan/{IdKunjungan}','c_kunjungan@ubahKunjungan');

