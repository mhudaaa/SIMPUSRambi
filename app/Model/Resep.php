<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model{
    protected $table = 'tb_resep';
    protected $primaryKey = 'IdResep';
    public $timestamps = false;

    protected $fillable = [
		'Catatan'
	];

    public function obat(){
    	return $this->belongsToMany(Obat::class, 'tb_detail_resep', 'IdResep', 'IdObat')->withPivot('Jumlah', 'Dosis');
    }

    public function kunjungan(){
    	return $this->hasOne(Kunjungan::class, 'IdResep');
    }
}
