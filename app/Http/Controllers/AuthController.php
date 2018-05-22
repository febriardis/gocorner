<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller
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

    public function show(){
        $tb = User::all();
        return response()->json($tb);
    }

    public function regist(Request $req) {
        $cek = User::where('email', $req->input('email'))->first();
        if ($req->all() == "") {
            return response()->json('Data Belum Lengkap');
        }else{
        if (!$cek) {
            $tb = new User;
            $tb->nama     = $req->input('nama');
            $tb->email    = $req->input('email');
            $tb->no_hp    = $req->input('no_hp');
            $tb->alamat   = $req->input('alamat');
            $tb->password = Hash::make($req->input('password'));
            $tb->save();

            return response()->json('Berhasil Mendaftar');
        }else{
            return response()->json([ 'message' => 'Email Sudah Terdaftar' ]);    
        }
        }
    }

    public function login(Request $req) {
        $hasher   = app()->make('hash');
        $email = $req->input('email');
        $password = $req->input('password');

        $cek = User::where('email', $email)->first();
        if (!$cek) {
            return response()->json(['message' => 'Email Tidak Terdaftar']);
        }else {
            if ($hasher->check($password, $cek->password)) {
                return response()->json(['message'=>'Berhasil Login']);
            }else{
                return response()->json(['message'=>'Password Salah!']);
            }
        }
    }


    public function delete($id){
        User::destroy($id);   
        return response()->json('Data Berhasil Dihapus');
    }
}
