<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model{
    protected $table = 'tb_pemeriksaan';
    protected $primaryKey = 'idPemeriksaan';

 	// protected $fillable = [
	// 	'NamaPasien', 'Alamat', 'NoKtp', 'JenisKelamin'
	// ];

    protected $fillable = [
		'RiwayatPenyakit', 'KeadaanUmum', 'KeadaanFisik', 'TinggiBadan', 'BeratBadan', 'Suhu', 'Tensi', 'Diagnosa'
	];

	protected $hidden = [
		'idKunjungan'
	];

	// Join
	public function diagnosa(){
		return $this->belongsTo(Diagnosa::class, 'IdDiagnosa');
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
