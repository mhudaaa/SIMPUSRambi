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
	public function scopeDokter($query) {
		return $query->where('Jabatan', 'Dokter');
	}
}
