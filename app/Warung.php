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
}