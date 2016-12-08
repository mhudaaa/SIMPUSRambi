<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model{
    protected $table = 'tb_kunjungan';
    protected $primaryKey = 'IdKunjungan';

    protected $fillable = [
		'RiwayatPenyakit', 'KeadaanUmum', 'KeadaanFisik', 'TinggiBadan', 'BeratBadan', 'Suhu', 'Tensi', 'Diagnosa'
	];

	protected $hidden = [
		'idKunjungan'
	];

	// Join
	public function pasien(){
		return $this->belongsTo(Pasien::class, 'IdPasien');
	}

	public function diagnosa(){
		return $this->belongsTo(Diagnosa::class, 'IdDiagnosa');
	}
	
	public function rujukan(){
		return $this->belongsTo(Rujukan::class, 'IdRujukan');
	}

	public function resep(){
		return $this->belongsTo(Resep::class, 'IdResep');
	}


	// Menampilkan data pasien yang belum ditangani
	public function scopeBelumDitangani($query) {
		return $query->where('status', 0);
	}

	public function scopeSudahDitangani($query) {
		return $query->where('status', 1);
	}
}
