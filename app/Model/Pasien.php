<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model{
    protected $table = 'tb_pasien';
    protected $primaryKey = 'idPasien';

	protected $hidden = [
		'idPasien'
	];
}
