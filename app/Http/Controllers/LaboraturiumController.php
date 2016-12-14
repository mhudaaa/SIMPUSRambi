<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Laboraturium;
use App\Model\Kunjungan;
use App\Model\Pegawai;


class LaboraturiumController extends Controller{

    public function home(){
        $laboraturiums   = Laboraturium::all();
        return view('/lab/beranda', compact('laboraturiums'));
    }

    // menampilkan rekap pemeriksaan laboraturium
    public function lab(){
        $laboraturiums   = Laboraturium::all();
        return view('/lab/laboraturium', compact('laboraturiums', 'petugaslab'));
    }

    public function formTambahLab(){
        $petugaslab = Pegawai::petugasLab()->get();
        return view('/lab/tambah-lab', compact('petugaslab'));
    }

     // menambah data lab
     public function tambahLab(Request $request){
        $laboraturium=new laboraturium();
        $laboraturium->PetugasLab = $request->PetugasLab;
        $laboraturium->Warna = $request->Warna;
        $laboraturium->Protein = $request->Protein;
        $laboraturium->Reduksi = $request->Reduksi;
        $laboraturium->PH = $request->PH;
        $laboraturium->Keton = $request->Keton;
        $laboraturium->BeratJenis = $request->BeratJenis;
        $laboraturium->Urobilin = $request->Urobilin;
        $laboraturium->Bilirubin = $request->Bilirubin;
        $laboraturium->Status = 0;
        $laboraturium->save();
       	return redirect('/lab/laboraturium')->with('message', 'Data Laboraturium berhasil ditambahkan');
    }

    // detail pemereiksaan
     public function detailLab($id){
        $laboraturiums = Laboraturium::findOrFail($id);
        return view('/lab/detail-pemeriksaan', compact('laboraturiums'));
        
    }

}
