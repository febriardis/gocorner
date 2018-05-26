<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
	protected $table = 'tb_warung';
	protected $fillable = [
		'nm_warung', 
		'hp_warung',
		'almt_warung',
		'lokasi',
		'deskripsi',
	];
	public function FKwarung() {
    	return $this->belongsTo(User::class);//punya foreign dari user
    }
    public function PKwarung() {
        return $this->hasMany(Barang::class);//punya primary
    } 
}