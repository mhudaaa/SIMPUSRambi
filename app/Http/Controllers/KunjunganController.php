<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Kunjungan;
use App\Model\Unit;
use App\Model\Pasien;


class KunjunganController extends Controller{

    public function index(){
        $kunjungans = Kunjungan::belumDitangani()->orderBy('created_at', 'desc')->get();
        $unit = Unit::all();
        return view('loket/kunjungan', compact('kunjungans','unit'));
    }

    public function detailKunjungan($IdKunjungan){
        $kunjungans = Kunjungan::findOrFail($IdKunjungan);
        return view('loket/detail-kunjungan', compact('kunjungans'));
    }

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
        return redirect('/loket/kunjungan');
    }

    public function formTambahKunjungan(){
        $pasiens = Pasien::all();
        return view('loket/tambah-kunjungan', compact('pasiens'));
    }

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