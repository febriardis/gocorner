<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
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
		$tb = Barang::all();
		return response()->json($tb);
	}
	public function find($id){
		$tb = Barang::find($id);
		return response()->json($tb);
	}
	public function insert(Request $req){
		Barang::create($req->all());
		return response()->json('Data Berhasil Disimpan');
	}
	public function update(Request $req, $id){
		$tb = Barang::find($id);
		$tb->update($req->all());
		return response()->json('Data Berhasil Diupdate');
	}
	public function delete($id){
		$tb = Barang::destroy($id);
		return response()->json('Data Berhasil Dihapus');
	}
}