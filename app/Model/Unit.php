<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model{
	protected $table = 'tb_unit';
    protected $primaryKey = 'IdUnit';

    public function scopePoli($query) {
		return $query->where('JenisUnit', 'poli');
	}

	public function scopeKamar($query) {
		return $query->where('JenisUnit', 'kamar');
	}
}