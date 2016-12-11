<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model{
    protected $table = 'tb_pasien';
    protected $primaryKey = 'IdPasien';

	protected $fillable = [
		'NamaPasien', 'Alamat', 'NoKtp', 'TanggalLahir', 'JenisKelamin', 'Agama', 'NamaOrangTua', 'NoTelepon', 'JenisPasien', 'NoBpjs'
	];
}
