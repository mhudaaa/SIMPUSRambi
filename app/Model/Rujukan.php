<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model{
    protected $table = 'tb_rujukan';
    protected $primaryKey = 'idRujukan';

 	// protected $fillable = [
	// 	'NamaPasien', 'Alamat', 'NoKtp', 'JenisKelamin'
	// ];

	protected $hidden = [
		'idKunjungan'
	];

	// Join
	public function pemeriksaan(){
		return $this->belongsTo(Pemeriksaan::class, 'IdPemeriksaan');
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
