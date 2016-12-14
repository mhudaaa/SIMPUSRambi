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

// LOKET ---------------------------------------------------------------------------
Route::get('/loket', 'KunjunganController@home');
//Pasien
Route::get('/loket/pasien', 'PasienController@index');
Route::get('/loket/pasien/detail/{IdPasien}', 'PasienController@detailPasien');
Route::get('/loket/pasien/ubah/{IdPasien}', 'PasienController@formUbahPasien');
Route::post('/loket/pasien/ubah-pasien/{IdPasien}', 'PasienController@ubahPasien');
Route::get('/loket/pasien/tambah-pasien', 'PasienController@formTambahPasien');
Route::post('/loket/pasien/tambah', 'PasienController@tambahPasien');
Route::post('/loket/pasien/cari', 'PasienController@cariPasien');
// Route::get('/loket/pasien/kartu/{IdPasien}', 'PasienController@kartuPasien');
Route::get('/loket/pasien/kartu/{IdPasien}', array(
	'as'=>'kartu',
	'uses'=>'PasienController@kartuPasien'
));

// Kunjungan
Route::get('/loket/kunjungan','KunjunganController@index');
Route::get('/loket/kunjungan/detail/{IdKunjungan}', 'KunjunganController@detailKunjungan');
Route::get('/loket/kunjungan/ubah/{IdKunjungan}', 'KunjunganController@formUbahKunjungan');
Route::post('/loket/kunjungan/ubah-kunjungan/{IdKunjungan}', 'KunjunganController@ubahKunjungan');
Route::get('/loket/kunjungan/tambah-kunjungan', 'KunjunganController@formTambahKunjungan');
Route::post('/loket/kunjungan/tambah', 'KunjunganController@tambahKunjungan');
Route::post('/loket/kunjungan/cari', 'KunjunganController@cariKunjungan');



// POLI --------------------------------------------------------------------------
// Pemeriksaan
Route::get('/poli', 'PoliController@home');
Route::get('/poli/antrian', 'PoliController@index');
Route::get('/poli/tambah/{id}', 'PoliController@tambahPemeriksaan');
Route::get('/poli/tambah-pemeriksaan', function () {
    return view('poli.tambah-pemeriksaan');
});
Route::get('/poli/submit/pemeriksaan/{id}', 'PoliController@ubahStatusPemeriksaan');
Route::post('/poli/cari/pasien', 'PoliController@cariPasien');
Route::post('/poli/tambah/add', 'PoliController@buatPemeriksaan');

// Tambah data pemeriksaan
Route::post('/poli/tambah/diagnosa', 'PoliController@tambahDiagnosa');
Route::post('/poli/tambah/rujukan', 'PoliController@tambahRujukan');
Route::post('/poli/tambah/obat', 'PoliController@tambahObat');
Route::post('/poli/tambah/catatanResep', 'PoliController@tambahCatatanResep');
Route::get('/poli/hapus/obat/{resep}/{obat}', 'PoliController@hapusObat');

// Rekap pemeriksaan
Route::get('/poli/rekap', 'PoliController@rekapPemeriksaan');
Route::post('/poli/rekap/cari/', 'PoliController@cariRekap');
Route::get('/poli/rekap/detail/{id}', 'PoliController@detailPemeriksaan');


// DOKTER --------------------------------------------------------------------------
Route::get('/dokter', 'DokterController@home');
Route::get('/dokter/rekap', 'DokterController@rekapPemeriksaan');
Route::post('/dokter/rekap/cari/', 'DokterController@cariRekap');
Route::get('/dokter/rekap/detail/{id}', 'DokterController@detailPemeriksaan');


// DOKTER --------------------------------------------------------------------------
Route::get('/apoteker', 'ApotekerController@home');
Route::get('/apoteker/obat', 'ApotekerController@obat');

Route::get('/apoteker/tambah-obat', function () {
    return view('apoteker/tambah-obat');
});
Route::post('/apoteker/tambah/obat', 'ApotekerController@tambahObat');

Route::get('/apoteker/ubah-obat/{id}', 'ApotekerController@detailObat');
Route::post('/apoteker/ubah/obat/{id}', 'ApotekerController@ubahDataObat');

Route::get('/apoteker/resep', 'ApotekerController@resep');
Route::get('/apoteker/detail/resep/{id}', 'ApotekerController@detailResep');

// DOKTER --------------------------------------------------------------------------
Route::get('/lab', 'LaboraturiumController@home');
Route::get('/lab/laboraturium', 'LaboraturiumController@lab');
Route::get('/lab/tambah-lab', 'LaboraturiumController@formTambahLab');
Route::post('/lab/laboraturium', 'LaboraturiumController@tambahLab');
Route::get('/lab/detail/lab/{id}', 'LaboraturiumController@detailLab');


