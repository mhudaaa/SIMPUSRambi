<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Pasien;
use PDF;
use Auth;

class PasienController extends Controller{
    
    // Menampilkan daftar pasien
    public function index(){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasiens = Pasien::paginate(10);
        return view('loket/pasien', compact('pasiens'));
    }

    // Menampilkan rincian data pasien
    public function detailPasien($IdPasien){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/detail-pasien', compact('pasien'));
    }

    // Fungsi cari pasien
    public function cariPasien(Request $request){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasien = Pasien::where('NamaPasien', 'like', '%'.$request->NamaPasien.'%')->get();
        $jmlHasil = $pasien->count();
        $request->session()->flash('message', 'Menampilkan Data pasien dengan nama = '.$request->NamaPasien.'');
        return view('loket/cari-pasien', compact('pasien', 'jmlHasil'));
    }    

    // Menampilkan form ubah data pasien
    public function formUbahPasien($IdPasien){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/ubah-pasien', compact('pasien'));
    }

    // Fungsi ubah data pasien
    public function ubahPasien(Request $request, $id){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasien = Pasien::find($id);
        $pasien->NamaPasien = $request->nama;
        $pasien->Alamat = $request->alamat;
        $pasien->NoKtp = $request->ktp;
        $pasien->TanggalLahir = $request->ttl;
        $pasien->JenisKelamin = $request->jenkel;
        $pasien->Agama = $request->agama;
        $pasien->NamaOrangtua = $request->namaOrtu;
        $pasien->NoTelepon = $request->telp;
        $pasien->JenisPasien = $request->jenisPasien;
        $pasien->NoBpjs = $request->noBpjs;
        $pasien->save();
        return redirect('/loket/pasien/')->with('message', 'Data Pasien berhasil ubah');
    }

    // Menampilkan form tambah pasien
    public function formTambahPasien(){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        return view('loket/tambah-pasien');
    }

    // Fungsi tambah data pasien
    public function tambahPasien(Request $request){
        if (strpos(Auth::user()->Jabatan, "loket") === false) abort(502);
        $pasien = new Pasien();
        $pasien->NamaPasien = $request->nama;
        $pasien->Alamat = $request->alamat;
        $pasien->NoKtp = $request->ktp;
        $pasien->TanggalLahir = $request->tgl;
        $pasien->JenisKelamin = $request->jenkel;
        $pasien->Agama = $request->agama;
        $pasien->NamaOrangtua = $request->ortu;
        $pasien->NoTelepon = $request->telp;
        $pasien->JenisPasien = $request->jenisPasien;
        $pasien->NoBpjs = $request->noBpjs;
        $pasien->save();
        return redirect('/loket/pasien')->with('message', 'Data Pasien berhasil ditambahkan.');
    }

    public function kartuPasien($IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/kartu-pasien', compact('pasien'));
    }

}
