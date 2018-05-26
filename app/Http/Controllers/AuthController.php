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

    public function regist(Request $req) {
        $cek = User::where('email', $req->input('email'))->first();
        if (!$cek) {
            $tb = new User;
            $tb->nama     = $req->input('nama');
            $tb->email    = $req->input('email');
            $tb->no_hp    = $req->input('no_hp');
            $tb->alamat   = $req->input('alamat');
            $tb->password = Hash::make($req->input('password'));
            $tb->save();
            return response()->json($tb, 200);//json('Berhasil Mendaftar Goner',200);    
        }else{
            return response()->json($tb, 200);    
        }
    }

    public function login(Request $req) {
        $hasher   = app()->make('hash');
        $email = $req->input('email');
        $password = $req->input('password');

        $cek = User::where('email', $email)->first();
        if (!$cek) {
            return response()->json('Email Tidak Terdaftar', 200);
        }else {
            if ($hasher->check($password, $cek->password)) {
                return response()->json('Anda Berhasil Login Goner', 200);
            }else{
                return response()->json('Password Salah!', 200);
            }
        }
    }

    public function show(){
        $tb = User::all();
        return response()->json($tb, 200);
    }

    public function delete($id){
        User::destroy($id);   
        return response()->json('Data Berhasil Dihapus', 200);
    }
}

// DB_CONNECTION=mysql
// DB_HOST=localhost
// DB_PORT=3306
// DB_DATABASE=warung-corner
// DB_USERNAME=root
// DB_PASSWORD=