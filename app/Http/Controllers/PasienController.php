<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Pasien;

class PasienController extends Controller
{
    
    public function index(){
        $pasiens = Pasien::all();
        return view('loket/pasien', compact('pasiens'));
    }

    public function detailPasien($IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/detail-pasien', compact('pasien'));
    }

    public function formUbahPasien($IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/ubah-pasien', compact('pasien'));
    }

    public function ubahPasien(Request $request, $id){
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

    public function formTambahPasien(){
        return view('loket/tambah-pasien');
    }

    public function tambahPasien(Request $request){
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

}
