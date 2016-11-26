<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kunjungan;
use App\Model\Pemeriksaan;
use App\Model\Diagnosa;
use App\Model\Pasien;
use App\Model\Rujukan;

class PoliController extends Controller{

    public function index(){
    	// $pasiens = Pasien::laki()->get();
        $antrians   = Kunjungan::all();
        $pasiens    = Pasien::all();
    	// $antrians = Kunjungan::umum()->get();
    	return view('/poli/antrian', compact('antrians', 'pasiens'));
    }

    public function tambahDiagnosa(Request $request){
        Diagnosa::create($request->all());
        return redirect('/poli/tambah-pemeriksaan');
    }

    // Menampilkan daftar rekap pemeriksaan
    public function rekapPemeriksaan(){
        $diagnosas      = Diagnosa::all();
        $pasiens        = Pasien::all();
        $pemeriksaans   = Pemeriksaan::all();
        return view('/poli/rekap-pemeriksaan', compact('diagnosas', 'pasiens', 'pemeriksaans'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        $detailDiagnosa = Diagnosa::findOrFail($id);
        $detailRujukan  = Rujukan::findOrFail($id);
        return view('/poli/detail-pemeriksaan', compact('detailDiagnosa', 'detailRujukan'));
    }

    //tambah pemeriksaan 
    public function tambahPemeriksaan($id){
        $detailKunjungan = Kunjungan::findOrFail($id);
        // $detailPasien    = Pasien::findOrFail($id);
        return view('/poli/tambah-pemeriksaan', compact('detailKunjungan'));
    }

    public function buatPemeriksaan(Request $request){
        $input = ([
            'IdKunjungan' => $request->IdKunjungan
        ]);

        Diagnosa::create($input);
        return redirect('/poli');
    }

}
