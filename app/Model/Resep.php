<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model{
    protected $table = 'tb_resep';
    protected $primaryKey = 'idResep';

	protected $hidden = [
		'idDiagnosa'
	];
}
