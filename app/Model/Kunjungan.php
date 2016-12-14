<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model{
    protected $table = 'tb_kunjungan';
    protected $primaryKey = 'IdKunjungan';

    protected $fillable = [
		'IdPasien', 'UnitTujuan', 'IdDiagnosa', 'IdRujukan', 'IdResep', 'IdPemeriksaanLab', 'IdRawatInap', 'status'
	];

	// protected $hidden = [
	// 	'IdKunjungan'
	// ];

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

	public function unit(){
		return $this->belongsTo(Unit::class,'UnitTujuan');
	}

	// Menampilkan data pasien yang belum ditangani
	public function scopeBelumDitangani($query) {
		return $query->where('status', 0);
	}

	public function scopeSudahDitangani($query) {
		return $query->where('status', 1);
	}

	// Membedakan berdasarkan poli
	public function scopePoliUmum($query) {
		return $query->where('UnitTujuan', 1);
	}
	public function scopePoliGigi($query) {
		return $query->where('UnitTujuan', 2);
	}
	public function scopePoliKia($query) {
		return $query->where('UnitTujuan', 3);
	}

}
