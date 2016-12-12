<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model{
    protected $table = 'tb_kasir';
    protected $primaryKey = 'idPembayaran';

	protected $hidden = [
		'idPembayaran'
	];


public function kunjungan(){
	return $this->belongsTo(Kunjungan::class,'IdKungjungan');
}
public function Pemeriksaan(){
	return $this->belongsTo(Pemeriksaan::class,'IdPemeriksaan');
}

public function Pasien(){
	return $this->belongsTo(Pasie::class,'IdPasien');
}
public function Resep(){
	return $this->belongsTo(Resep::class,'IdResep');
}


}