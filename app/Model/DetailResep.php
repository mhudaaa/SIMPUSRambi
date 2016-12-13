<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailResep extends Model{
    protected $table = 'tb_detail_resep';
    protected $primaryKey = 'idDetailResep';

	protected $hidden = [
		'idDiagnosa'
	];

	// Join
	public function resep(){
		return $this->belongsTo(Resep::class, 'IdResep');
	}
}
