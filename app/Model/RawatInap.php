<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model{
    protected $table = 'tb_rawat_inap';
    protected $primaryKey = 'IdRawatInap';

    protected $fillable = ['IdPasien','IdUnit','IdResep','IdRujukan','TanggalMasuk','TanggalKeluar'];

	protected $hidden = [
		'idRawatInap' 
	];

	public $timestamps = false;
	
	//Join
	public function pegawai(){
		return $this->belongsTo(Pegawai::class,'IdPegawai');
	}
	public function kunjungan(){
		return $this->belongsTo(Kunjungan::class, 'IdKunjungan');
	}
	public function pasien(){
		return $this->belongsTo(Pasien::class, 'IdPasien');
	}
	public function unit(){
		return $this->belongsTo(Ruangan::class,'IdUnit');
	}
	public function rujukan(){
		return $this->belongsTo(Rujukan::class,'IdRujukan');
}
	public function resep(){
		return $this->belongsTo(Resep::class, 'IdResep');
	}
	public function detail(){
		return $this->belongsTo(DetailRawatInap::class, 'IdDetail');
	}
}	