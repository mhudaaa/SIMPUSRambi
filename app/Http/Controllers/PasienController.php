<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Pasien;
use PDF;

class PasienController extends Controller{
    
    // Menampilkan daftar pasien
    public function index(){
        $pasiens = Pasien::all();
        return view('loket/pasien', compact('pasiens'));
    }

    // Menampilkan rincian data pasien
    public function detailPasien($IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/detail-pasien', compact('pasien'));
    }

    // Fungsi cari pasien
    public function cariPasien(Request $request){
        $pasien = Pasien::where('NamaPasien', 'like', '%'.$request->NamaPasien.'%')->get();
        $jmlHasil = $pasien->count();
        $request->session()->flash('message', 'Menampilkan Data pasien dengan nama = '.$request->NamaPasien.'');
        return view('loket/cari-pasien', compact('pasien', 'jmlHasil'));
    }    

    // Menampilkan form ubah data pasien
    public function formUbahPasien($IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        return view('loket/ubah-pasien', compact('pasien'));
    }

    // Fungsi ubah data pasien
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

    // Menampilkan form tambah pasien
    public function formTambahPasien(){
        return view('loket/tambah-pasien');
    }

    // Fungsi tambah data pasien
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

    public function kartuPasien(Request $request, $IdPasien){
        $pasien = Pasien::findOrFail($IdPasien);
        // view()->share('pasien',$pasien);
        // if($request->has('download')){
            $pdf = PDF::loadView('loket/kartu-pasien', compact('pasien'));
            return $pdf->stream();
            // return $pdf->download('kartu-pasien.pdf');
        // }
        // return view('loket/kartu-pasien', compact('pasien'));
    }

    public function htmltopdfview(Request $request){
        $products = Pasien::all();
        view()->share('products',$products);
        if($request->has('download')){
            $pdf = PDF::loadView('htmltopdfview');
            return $pdf->download('htmltopdfview');
        }
        return view('htmltopdfview');
    }

}
