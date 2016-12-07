<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model{
    protected $table = 'tb_rujukan';
    protected $primaryKey = 'IdRujukan';

 	protected $fillable = [
		'Tujuan', 'TanggalRujukan', 'Catatan'
	];

	// Join
	public function kunjungan(){
		return $this->belongsTo(Kunjungan::class, 'IdKunjungan');
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
