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

    public function beranda(){
        return view('/rawatinap/beranda');
    }
    public function index(){
        $rawatinaps   = RawatInap::whereNull('TanggalKeluar')->get();
        $pasiens    = Pasien::all();    
        return view('/rawatinap/rawatinap', compact('rawatinaps', 'pasiens'));
    }

    // Menampilkan daftar rekap pemeriksaan
    public function rekapRawatInap(){
        $rawatinaps = RawatInap::whereNotNull('TanggalMasuk')->get();
        $pasiens = Pasien::all();
        return view('/rawatinap/rekap-rawatinap', compact('rawatinaps','pasiens'));
    }
    
    //tambah pemeriksaan 
    public function tambahPemeriksaanRawatInap($id){
        $rawatinaps = RawatInap::find($id);
        $obats = Obat::all();
        $pegawais = Pegawai::all();
        return view('/rawatinap/tambah-rawatinap', compact('rawatinaps','obats','pegawais'));
    }

    public function tambahPemeriksaan(Request $request){
        $data = $request->all();
        $rawatinap = RawatInap::find($request->IdRawatInap);
        if ($request->TanggalKeluar!='') {
            $rawatinap->TanggalKeluar=$request->TanggalKeluar;
        }
        $rawatinap->update();
        $data['IdRawatInap']=$rawatinap->IdRawatInap;
        DetailRawatInap::create($data);
        if ($request->TanggalKeluar=='') {
        return redirect('/rawatinap/pemeriksaan/'.$request->IdRawatInap);
        } else {
            return redirect('/rawatinap/rekap');
        }
        
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
        return redirect('/rawatinap/tambah/obat'.$request->IdRawatInap);
    }

    // Tambah catatan resep
    public function tambahCatatanResep(Request $request){
        $rawatinaps = RawatInap::find($request->IdRawatInap);
        if ($request->IdResep=='') {
            $resep=Resep::create($request->all());
            $rawatinaps->IdResep = $resep->IdResep;
            $rawatinaps->update();
        }
        else{
            
            $resep = Resep::find($request->IdResep);
            $resep->Catatan = $request->Catatan;
            $resep->update();
        
        }
        return redirect('/rawatinap/pemeriksaan/'.$request->IdRawatInap);
    }
    public function tambahRujukan(Request $request){
        $rujukan = Rujukan::create($request->all());
        $rawatinaps = RawatInap::find($request->IdRawatInap);
        $rawatinaps->IdRujukan = $rujukan->IdRujukan;
        $rawatinaps->update();
        return redirect('/rawatinap/tambah/'.$request->IdRawatInap)->with('message', 'Data Rujukan Berhasil disimpan');
    }

    // Hapus obat
    public function hapusObat($resep, $obat){
        $resep = Resep::find($resep);
        $resep->obat()->detach($obat);
        return redirect('/rawatinap/tambah/obat'.$resep->kunjungan->IdRawatInap);
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        return view('/rawatnap/detail-pemeriksaan');
    }


}
