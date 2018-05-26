<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
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
		$tb = Transaksi::all();
		return response()->json($tb);
	}
	public function find($id){
		$tb = Transaksi::find($id);
		return response()->json($tb);
	}
	public function insert(Request $req){
		Transaksi::create($req->all());
		return response()->json('Data Berhasil Disimpan');
	}
	public function update(Request $req, $id){
		$tb = Transaksi::find($id);
		$tb->update($req->all());
		return response()->json('Data Berhasil Diupdate');
	}
	public function delete($id){
		$tb = Transaksi::destroy($id);
		return response()->json('Data Berhasil Dihapus');
	}
}