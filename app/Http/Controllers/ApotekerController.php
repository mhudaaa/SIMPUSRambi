<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Obat;
use App\Model\Kunjungan;
use App\Model\Pasien;
use App\Model\Resep;
use App\Model\DetailResep;
use Auth;

class ApotekerController extends Controller{

    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('auth', except=>['index', ['cariPasien']);
    }


    public function home(){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        $obats   = Obat::all();
        return view('/apoteker/beranda', compact('obats'));
    }

	// menampilkan rekap obat
    public function obat(){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        $obats   = Obat::paginate(10);
        return view('/apoteker/obat', compact('obats'));
    }

    // menambah data obat
     public function tambahObat(Request $request){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        Obat::create($request->all());
       	return redirect('/apoteker/obat'.$request->IdObat)->with('message', 'Obat berhasil ditambahkan');
    }

    // menampilkan detail obat
    public function detailObat($id){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        $obat = Obat::findOrFail($id);
        return view('/apoteker/ubah-obat', compact('obat'));
    }

    // mengubah data obat
    public function ubahDataObat(Request $request, $id){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        $obat = Obat::findOrFail($id);
        $obat->NamaObat  = $request->NamaObat;
        $obat->JumlahObat  = $request->JumlahObat;
        $obat->HargaObat  = $request->HargaObat; 
        $obat->save();
        return redirect('/apoteker/obat')->with('message', 'Data Obat berhasil diperbarui');
    }

    public function resep(){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
        $reseps = Kunjungan::sudahDitangani()->get();
        return view('/apoteker/resep', compact('reseps'));
    }

    public function detailResep($id){
        if (strpos(Auth::user()->Jabatan, "apoteker") === false) abort(502);
    	$detailResep = Kunjungan::findOrFail($id);
        return view('/apoteker/detail-resep', compact('detailResep'));
    }

}
   