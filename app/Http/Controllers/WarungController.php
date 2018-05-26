<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warung;

class WarungController extends Controller
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
		$tb = Warung::all();
		return response()->json($tb);
	}
	public function find($id){
		$tb = Warung::find($id);
		return response()->json($tb);
	}
	public function insert(Request $req){
        //$tb = new Warung;
        //$tb->nm_warung = $req->input('nm_warung');
        //$tb->hp_warung = $req->input('hp_warung');
        //$tb->almt_warung = $req->input('almt_warung');
        //$tb->lokasi = $req->input('lokasi');
        //$tb->deskripsi = $req->input('deskripsi');
		//$tb->save();
		Warung::create($req->all());
		return response()->json('Data Berhasil Disimpan');
	}
	public function update(Request $req, $id){
		$tb = Warung::find($id);
		$tb->update($req->all());
		return response()->json('Data Berhasil Diupdate');
	}
	public function delete($id){
		$tb = Warung::destroy($id);
		return response()->json('Data Berhasil Dihapus');
	}
}