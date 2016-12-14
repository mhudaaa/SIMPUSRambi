<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model{
    protected $table = 'tb_unit';
    protected $primaryKey = 'idUnit';

	protected $hidden = [
		'idUnit'
	];
}