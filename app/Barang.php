<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table = 'tb_barang';
	protected $fillable = [
		'warung_id', 
		'kategori_id',
		'nm_barang',
		'desk_barang',
		'harga',
	];
}