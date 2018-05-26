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
		return response()->json(Warung::all());
	}
	public function find($id){
		return response()->json(Warung::find($id));
	}
	public function insert(Request $req){
		Warung::create($req->all());
		return response()->json('Data Berhasil Disimpan', 200);
	}
	public function update(Request $req, $id){
		$tb = Warung::findOrFail($id)->update($req->all());
		return response()->json('Data Berhasil Diupdate', 200);
	}
	public function delete($id){
		Warung::findOrFail($id)->update($req->all());
		return response()->json('Data Berhasil Dihapus', 200);
	}
}

//$tb = new Warung;
//$tb->nm_warung = $req->input('nm_warung');
//$tb->hp_warung = $req->input('hp_warung');
//$tb->almt_warung = $req->input('almt_warung');
//$tb->lokasi = $req->input('lokasi');
//$tb->deskripsi = $req->input('deskripsi');
//$tb->save();