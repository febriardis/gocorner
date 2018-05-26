<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{    
	/**
    * Create a new controller instance.
    *
    * @return void
    */
    
    public function __construct()
    {
        //
    }
	
	public function showall(){
		$tb = Kategori::all();
		return response()->json($tb);
	}
	public function find($id){
		$tb = Kategori::find($id);
		return response()->json($tb);
	}
	public function insert(Request $req){
		Kategori::create($req->all());
		return response()->json('Data Berhasil Disimpan');
	}
	public function update(Request $req, $id){
		$tb = Kategori::find($id);
		$tb->update($req->all());
		return response()->json('Data Berhasil Diupdate');
	}
	public function delete($id){
		$tb = Kategori::destroy($id);
		return response()->json('Data Berhasil Dihapus');
	}
}