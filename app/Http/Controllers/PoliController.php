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
use PDF;
use Auth;

class PoliController extends Controller{

    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('auth', except=>['index', ['cariPasien']);
    }

    public function home(){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $antrians   = Kunjungan::belumDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/poli/beranda', compact('antrians', 'pasiens'));
    }

    // Menampilkan daftar antrian pasien (pasien yang belum ditangani)
    public function index(){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $antrians   = Kunjungan::belumDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/poli/antrian', compact('antrians', 'pasiens'));
    }

    // Fungsi untuk mencari data kunjungan berdasarkan nama pasien
    public function cariPasien(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $antrians = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->belumDitangani()->get();
        $jmlHasil = $antrians->count();
        $request->session()->flash('message', 'Menampilkan Data kunjungan dengan nama pasien = '.$request->NamaPasien.'');
        return view('poli/cari-antrian', compact('antrians', 'jmlHasil'));
    }  

    //tambah pemeriksaan 
    public function tambahPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $detailKunjungan = Kunjungan::findOrFail($id);
        $obats           = Obat::all();
        $dokters         = Pegawai::dokter()->get();
        return view('/poli/tambah-pemeriksaan', compact('detailKunjungan', 'obats', 'dokters'));
    }


    // tambah diagnosa
    public function tambahDiagnosa(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $diagnosa = Diagnosa::create($request->all());
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $kunjungan->IdDiagnosa = $diagnosa->IdDiagnosa;
        $kunjungan->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan)->with('message', 'Data Diagnosa berhasil ditambahkan');
    }

    // tambah rujukan
    public function tambahRujukan(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $rujukan = Rujukan::create($request->all());
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $kunjungan->IdRujukan = $rujukan->IdRujukan;
        $kunjungan->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan)->with('message', 'Data Rujukan berhasil disimpan');
    }
    
    // Tambah obat
    public function tambahObat(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
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
        return redirect('/poli/tambah/'.$request->IdKunjungan)->with('message', 'Resep berhasil ditambahkan');
    }

    // Tambah catatan resep
    public function tambahCatatanResep(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $kunjungan = Kunjungan::find($request->IdKunjungan);
        $resep = Resep::find($request->IdResep);
        $resep->Catatan = $request->Catatan;
        $resep->update();
        return redirect('/poli/tambah/'.$request->IdKunjungan)->with('message', 'Catatan resep berhasil disimpan');
    }

    // Hapus obat
    public function hapusObat($resep, $obat){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $resep = Resep::find($resep);
        $resep->obat()->detach($obat);
        return redirect('/poli/tambah/'.$resep->kunjungan->IdKunjungan)->with('message', 'Obat berhasil dihapus dari daftar resep');
    }

    // Menampilkan daftar rekap pemeriksaan
    public function rekapPemeriksaan(){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $pemeriksaans = Kunjungan::sudahDitangani()->get();
        return view('/poli/rekap-pemeriksaan', compact('pemeriksaans'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $detailPemeriksaan = Kunjungan::findOrFail($id);
        return view('/poli/detail-pemeriksaan', compact('detailPemeriksaan'));
    }

    // Update status kunjungan
    public function ubahStatusPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $kunjungan = Kunjungan::findOrFail($id);
        $kunjungan->status = 1;
        $kunjungan->update();
        return redirect('/poli')->with('message', 'Selesai. Data pemeriksaan telah dimasukkan ke Rekap Pemeriksaan');
    }

    // Cari data pasien di rekap pemeriksaan
    public function cariRekap(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        $pemeriksaans = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->sudahDitangani()->get();
        $jmlHasil = $pemeriksaans->count();
        $request->session()->flash('message', 'Menampilkan Data pemeriksaan dengan nama pasien = '.$request->NamaPasien.'');
        return view('poli/cari-rekap', compact('pemeriksaans', 'jmlHasil'));
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
