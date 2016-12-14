<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailRawatInap extends Model{
    protected $table = 'tb_detail_rawatinap';
    protected $primaryKey = 'idDetail';

    protected $fillable = ['CatatanPemeriksaan','IdRawatInap','IdPegawai','TanggalPeriksa','WaktuPemeriksaan'];

	protected $hidden = [
		'IdPegawai' 
	];

	public $timestamps = false;
	
	//Join
	public function kunjungan(){
		return $this->belongsTo(Kunjungan::class, 'IdKunjungan');
	}
	public function rawatInap(){
		return $this->belongsTo(RawatInap::class,'IdRawatInap');
	}
	public function unit(){
		return $this->belongsTo(Ruangan::class, 'IdUnit');
	}
	public function pegawai(){
		return $this->belongsTo(Pegawai::class,'IdPegawai');
	}
}
