<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable{
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'IdPegawai';

    // protected $fillable = ['Id'];
    // protected $hidden = ['password'];

    public $increment = false;

    // Menampilkan dokter
	public function scopeDokterUmum($query) {
		return $query->where('Jabatan', 'dokterumum');
	}
	public function scopeDokterKia($query) {
		return $query->where('Jabatan', 'dokterkia');
	}
	public function scopeDokterGigi($query) {
		return $query->where('Jabatan', 'doktergigi');
	}

	public function scopePetugasLab($query) {
		return $query->where('Jabatan', 'petugaslab');
	}
}
