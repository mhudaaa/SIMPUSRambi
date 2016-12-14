<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laboraturium extends Model{

    protected $table= "tb_pemeriksaan_lab";
    protected $primaryKey ="IdPemeriksaanLab";

    protected $fillable = [
		'Warna', 'PH','BeratJenis', 'Protein', 'Reduksi', 'Keton', 'Urobilin', 'Bilirubin'
	];

// 	public function kunjungan(){
//     	return $this->hasOne(Kunjungan::class, 'IdPemeriksaanLab');
//     }
}

