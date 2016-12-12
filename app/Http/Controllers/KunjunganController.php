<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Kunjungan;
use App\Model\Unit;
use App\Model\Pasien;


class KunjunganController extends Controller{

    // Menampilkan daftar kunjungan
    public function index(){
        $kunjungans = Kunjungan::belumDitangani()->orderBy('created_at', 'desc')->get();
        $unit = Unit::all();
        return view('loket/kunjungan', compact('kunjungans','unit'));
    }

    // Menampilkan detail data kunjungan pasien
    public function detailKunjungan($IdKunjungan){
        $kunjungans = Kunjungan::findOrFail($IdKunjungan);
        return view('loket/detail-kunjungan', compact('kunjungans'));
    }

    // Fungsi untuk mencari data kunjungan berdasarkan nama pasien
    public function cariKunjungan(Request $request){
        $kunjungans = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->get();
        $jmlHasil = $kunjungans->count();
        $request->session()->flash('message', 'Menampilkan Data kunjungan dengan nama pasien = '.$request->NamaPasien.'');
        return view('loket/cari-kunjungan', compact('kunjungans', 'jmlHasil'));
    }  

    // Menampilkan halaman ubah pasien
    public function formUbahKunjungan($IdKunjungan){
        $kunjungans = Kunjungan::findOrFail($IdKunjungan);
        $pasien = Pasien::all();
        $unit = Unit::all();
        return view('loket/ubah-kunjungan', compact('kunjungans','pasien','unit'));
    }

    public function ubahKunjungan(Request $request, $id){
        $kunjungan = Kunjungan::find($id);
        $kunjungan->Keluhan = $request->Keluhan;
        $kunjungan->JenisPerawatan = $request->JenisPerawatan;
        $kunjungan->UnitTujuan = $request->UnitTujuan;
        $kunjungan->save();
        return redirect('/loket/kunjungan')->with('message', 'Data Kunjungan berhasil diubah.');
    }

    // Menampilkan form tambah kunjungan
    public function formTambahKunjungan(){
        $pasiens = Pasien::all();
        $polis = Unit::poli()->get();
        $kamars = Unit::kamar()->get();
        return view('loket/tambah-kunjungan', compact('pasiens', 'polis', 'kamars'));
    }

    // Fungsi untuk menambahkan kunjungan
    public function tambahKunjungan(Request $request){
        $kunjungan = new Kunjungan();
        $kunjungan->IdPasien = $request->IdPasien;
        $kunjungan->Keluhan = $request->Keluhan;
        $kunjungan->CaraBayar = $request->CaraBayar;
        $kunjungan->JenisPerawatan = $request->JenisPerawatan;
        $kunjungan->UnitTujuan = $request->UnitTujuan;
        $kunjungan->IdDiagnosa = 0;
        $kunjungan->IdRujukan = 0;
        $kunjungan->IdResep = 0;
        $kunjungan->IdPemeriksaanLab = 0;
        $kunjungan->IdRawatInap = 0;
        $kunjungan->status = 0;
        $kunjungan->save();
        return redirect('loket/kunjungan')->with('message', 'Data Kunjungan berhasil ditambahkan.');
    }


}