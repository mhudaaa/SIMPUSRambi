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

class DokterController extends Controller{

    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('auth', except=>['index', ['cariPasien']);
    }

    public function home(){
        if (strpos(Auth::user()->Jabatan, "dokter") === false) abort(502);
        if (Auth::user()->Jabatan == "dokterumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "doktergigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "dokterkia") {
            $poliTujuan = "Kia";
        }

        $antrians   = Kunjungan::belumDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/dokter/beranda', compact('antrians', 'pasiens', 'poliTujuan'));
    }
    
    // Menampilkan daftar rekap pemeriksaan
    public function rekapPemeriksaan(){
        if (strpos(Auth::user()->Jabatan, "dokter") === false) abort(502);
        if (Auth::user()->Jabatan == "dokterumum") {
            $poliTujuan = "Umum";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliUmum()->get();
        } elseif (Auth::user()->Jabatan == "doktergigi") {
            $poliTujuan = "Gigi";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliGigi()->get();
        } elseif (Auth::user()->Jabatan == "dokterkia") {
            $poliTujuan = "Kia";
            $pemeriksaans = Kunjungan::sudahDitangani()->poliKia()->get();
        }
        $jmlHasil = $pemeriksaans->count();
        return view('/dokter/rekap-pemeriksaan', compact('pemeriksaans', 'poliTujuan', 'jmlHasil'));
    }

    // Menampilkan detail data pemeriksaan
    public function detailPemeriksaan($id){
        if (strpos(Auth::user()->Jabatan, "dokter") === false) abort(502);
        if (Auth::user()->Jabatan == "dokterumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "doktergigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "dokterkia") {
            $poliTujuan = "Kia";
        }
        $detailPemeriksaan = Kunjungan::findOrFail($id);
        return view('/dokter/detail-pemeriksaan', compact('detailPemeriksaan', 'poliTujuan'));
    }


    // Cari data pasien di rekap pemeriksaan
    public function cariRekap(Request $request){
        if (strpos(Auth::user()->Jabatan, "dokter") === false) abort(502);
        if (Auth::user()->Jabatan == "dokterumum") {
            $poliTujuan = "Umum";
        } elseif (Auth::user()->Jabatan == "doktergigi") {
            $poliTujuan = "Gigi";
        } elseif (Auth::user()->Jabatan == "dokterkia") {
            $poliTujuan = "Kia";
        }
        $pemeriksaans = Kunjungan::whereHas('pasien', function($query) use ($request) {
            $query->where('NamaPasien', 'like', '%'.$request->NamaPasien.'%');
        })->sudahDitangani()->get();
        $jmlHasil = $pemeriksaans->count();
        $request->session()->flash('message', 'Menampilkan Data pemeriksaan dengan nama pasien = '.$request->NamaPasien.'');
        return view('dokter/cari-rekap', compact('pemeriksaans', 'jmlHasil', 'poliTujuan'));
    }  

}
