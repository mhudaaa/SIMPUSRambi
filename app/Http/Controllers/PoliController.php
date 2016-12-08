<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kunjungan;
use App\Model\Pemeriksaan;
use App\Model\Diagnosa;
use App\Model\Pasien;
use App\Model\Rujukan;
use App\Model\Obat;
use App\Model\Resep;
use App\Model\Pegawai;
use Auth;

class PoliController extends Controller{

    public function index(){
        $antrians   = Kunjungan::belumDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/poli/antrian', compact('antrians', 'pasiens'));
    }

    
    //tambah pemeriksaan 
    public function tambahPemeriksaan($id){
        $detailKunjungan = Kunjungan::findOrFail($id);
        $obats           = Obat::all();
        $dokters         = Pegawai::dokter()->get();
        return view('/poli/tambah-pemeriksaan', compact('detailKunjungan', 'obats', 'dokters'));
    }


    // tambah diagnosa
    public function tambahDiagnosa(Request $request){
        $diagnosa = Diagnosa::create($request->all());
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $kunjungan->IdDiagnosa = $diagnosa->IdDiagnosa;
        $kunjungan->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan);
    }

    // tambah rujukan
    public function tambahRujukan(Request $request){
        $rujukan = Rujukan::create($request->all());
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $kunjungan->IdRujukan = $rujukan->IdRujukan;
        $kunjungan->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan);
    }
    
    // Tambah obat
    public function tambahObat(Request $request){
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        if ($kunjungan->IdResep == 0) {
            $data = $request->all();
            $data['Catatan'] = "";
            $resep = Resep::create($data);
            $kunjungan->IdResep = $resep->IdResep;
            $kunjungan->update();
        }else{
            $resep = $kunjungan->resep;
        }

        $resep->obat()->attach($request->IdObat, ['Jumlah' => $request->Jumlah, 'Dosis' => $request->Dosis]);
        return redirect('/poli/tambah/'.$request->IdKunjungan);
    }

    // Tambah catatan resep
    public function tambahCatatanResep(Request $request){
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $resep = Resep::find($request->IdResep);
        $resep->Catatan = $request->Catatan;
        $resep->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan);
    }

    // Hapus obat
    public function hapusObat($resep, $obat){
        $resep = Resep::find($resep);
        $resep->obat()->detach($obat);
        return redirect('/poli/tambah/'.$resep->kunjungan->IdKunjungan);
    }

    // Menampilkan daftar rekap pemeriksaan
    public function rekapPemeriksaan(){
        $pemeriksaans = Kunjungan::sudahDitangani()->get();
        return view('/poli/rekap-pemeriksaan', compact('pemeriksaans'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        $detailPemeriksaan = Kunjungan::findOrFail($id);
        return view('/poli/detail-pemeriksaan', compact('detailPemeriksaan'));
    }

    // Update status kunjungan
    public function ubahStatusPemeriksaan($id){
        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->status = 1;
        $kunjungan->update();
        return redirect('/poli');
    }


}
