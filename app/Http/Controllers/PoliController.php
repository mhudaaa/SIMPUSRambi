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
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
        }

        $antrians   = Kunjungan::belumDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/poli/beranda', compact('antrians', 'pasiens', 'poliTujuan'));
    }

    // Menampilkan daftar antrian pasien (pasien yang belum ditangani)
    public function index(){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
            $antrians   = Kunjungan::belumDitangani()->poliUmum()->paginate(10);
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
            $antrians   = Kunjungan::belumDitangani()->poliGigi()->paginate(10);
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
            $antrians   = Kunjungan::belumDitangani()->poliKia()->paginate(10);
        }
        $jmlHasil   = $antrians->count();
        $pasiens    = Pasien::all();
        return view('/poli/antrian', compact('antrians', 'pasiens', 'poliTujuan', 'jmlHasil'));
    }

    // Fungsi untuk mencari data kunjungan berdasarkan nama pasien
    public function cariPasien(Request $request){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
        }
        $antrians = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->belumDitangani()->get();
        $jmlHasil = $antrians->count();
        $request->session()->flash('message', 'Menampilkan Data kunjungan dengan nama pasien = '.$request->NamaPasien.'');
        return view('poli/cari-antrian', compact('antrians', 'jmlHasil', 'poliTujuan'));
    }  

    //tambah pemeriksaan 
    public function tambahPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
        }
        $detailKunjungan = Kunjungan::findOrFail($id);
        $obats           = Obat::all();
        $dokters         = Pegawai::dokter()->get();
        return view('/poli/tambah-pemeriksaan', compact('detailKunjungan', 'obats', 'dokters', 'poliTujuan'));
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
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliUmum()->paginate(10);
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliGigi()->paginate(10);
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliKia()->paginate(10);
        }
        $jmlHasil = $pemeriksaans->count();
        return view('/poli/rekap-pemeriksaan', compact('pemeriksaans', 'poliTujuan', 'jmlHasil'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "poli") === false) abort(502);
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
        }
        $detailPemeriksaan = Kunjungan::findOrFail($id);
        return view('/poli/detail-pemeriksaan', compact('detailPemeriksaan', 'poliTujuan'));
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
        if (Auth::user()->Jabatan == "poliumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "poligigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "polikia") {
            $poliTujuan = "Kia";
        }
        $pemeriksaans = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->sudahDitangani()->get();
        $jmlHasil = $pemeriksaans->count();
        $request->session()->flash('message', 'Menampilkan Data pemeriksaan dengan nama pasien = '.$request->NamaPasien.'');
        return view('poli/cari-rekap', compact('pemeriksaans', 'jmlHasil', 'poliTujuan'));
    }  

}
