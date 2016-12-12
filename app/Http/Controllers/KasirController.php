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
use Auth;

class KasirController extends Controller{

    public function index(){
        $antrians   = Kunjungan::sudahDitangani()->get();
        $pasiens    = Pasien::all();
        return view('/kasir/kasir', compact('antrians', 'pasiens'));
    }

    public function detailpembayaran(){
    	
    	return view('/kasir/detail-pembayaran',compact(''));
    }

}