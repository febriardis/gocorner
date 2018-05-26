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

            return response()->json('Berhasil Mendaftar Goner', 200);    
        }else{
            return response()->json('Email Sudah Terdaftar', 201);    
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
            return response()->json(User::all());
        }

        public function delete($id){
            User::findOrFail($id)->delete();   
            return response()->json('Data Berhasil Dihapus', 200);
        }
}

// DB_CONNECTION=mysql
// DB_HOST=localhost
// DB_PORT=3306
// DB_DATABASE=warung-corner
// DB_USERNAME=root
// DB_PASSWORD=

// DB_CONNECTION=pgsql
// DB_HOST=ec2-23-23-130-158.compute-1.amazonaws.com
// DB_PORT=5432
// DB_DATABASE=d2hr7qrtt2aalt
// DB_USERNAME=ckfqodnspmikaz
// DB_PASSWORD=334d385d42b2e03cd2ac412ad5ea79b5ebd6713e658684b610522e6a6cec6600
