<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model{
    protected $table = 'tb_diagnosa';
    protected $primaryKey = 'idDiagnosa';

 	protected $fillable = [
		'IdKunjungan', 'NamaPasien', 'Alamat', 'NoKtp', 'JenisKelamin'
	];


	protected $hidden = [
		'idDiagnosa'
	];

	
	// Join
	public function kunjungan(){
		return $this->belongsTo(Kunjungan::class, 'IdKunjungan');
	}

	public function pasien(){
		return $this->belongsTo(Pasien::class, 'IdPasien');
	}

	// Menampilkan data kunjungan yang ke poli umum
	public function scopeUmum($query) {
		return $query->where('IdUnit', 1);
	}

	// Menampilkan data kunjungan yang ke poli gigi
	public function scopeGigi($query) {
		return $query->where('IdUnit', 2);
	}

	// Menampilkan data kunjungan yang ke poli kia
	public function scopeKia($query) {
		return $query->where('IdUnit', 3);
	}
}
