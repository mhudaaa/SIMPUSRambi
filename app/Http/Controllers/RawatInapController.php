<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kunjungan;
use App\Model\Pemeriksaan;
use App\Model\Pasien;
use App\Model\Resep;
use App\Model\Rujukan;
use App\Model\Obat;
use App\Model\RawatInap;
use App\Model\Pegawai;
use App\Model\Ruangan;
use App\Model\DetailRawatInap;
use Auth;

class RawatInapController extends Controller{

    public function index(){
        $rawatinaps   = RawatInap::all();
        $pasiens    = Pasien::all();    
        return view('/rawatinap/rawatinap', compact('rawatinaps', 'pasiens'));
    }

    
    //tambah pemeriksaan 
    public function tambahPemeriksaanRawatInap($id){
        $rawatinaps   = RawatInap::find($id);
        // $tambahinaps = DetailRawatInap::find($id);
        $obats = Obat::all();
        return view('/rawatinap/tambah-rawatinap', compact('rawatinaps','obats'));
    }


    // tambah rujukan
    public function tambahRujukan(Request $request){
        $rujukan = Rujukan::create($request->all());
        $rawatinaps = RawatInap::find($request->IdRawatInap);
        $rawatinaps->IdRujukan = $rujukan->IdRujukan;
        $rawatinaps->update();
        return redirect('/rawatinap/tambah/'.$request->IdRawatInap);
    }
    
    // Tambah obat
    public function tambahObat(Request $request){
        $rawatinaps = RawatInap::find($request->IdRawatInap);
        if ($rawatinaps->IdResep == 0) {
            $data = $request->all();
            $data['Catatan'] = "";
            $resep = Resep::create($data);
            $rawatinaps->IdResep = $resep->IdResep;
            $rawatinaps->update();
        }else{
            $resep = $rawatinaps->resep;
        }

        $resep->obat()->attach($request->IdObat, ['Jumlah' => $request->Jumlah, 'Dosis' => $request->Dosis]);
        return redirect('/rawatinap/pemeriksaan/'.$request->IdRawatInap);
    }

    // Tambah catatan resep
    public function tambahCatatanResep(Request $request){
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $resep = Resep::find($request->IdResep);
        $resep->Catatan = $request->Catatan;
        $resep->update();
        return redirect('/rawatinap/tambah/'.$request->IdKunjungan);
    }

    // Hapus obat
    public function hapusObat($resep, $obat){
        $resep = Resep::find($resep);
        $resep->obat()->detach($obat);
        return redirect('/rawatinap/pemeriksaan/'.$resep->kunjungan->IdKunjungan);
    }

    // Menampilkan daftar rekap pemeriksaan
    public function rekapPemeriksaan(){
        $pemeriksaans = Kunjungan::all();
        return view('/rawatinap/rekap-rawatinap', compact('pemeriksaans'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        return view('/rawatnap/detail-pemeriksaan');
    }


}
