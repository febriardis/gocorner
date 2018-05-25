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
        //$this->validate($req, [
        //    'nama' => 'required|string|max:255',
        //    'email' => 'required|email|max:255|regex:/(.*)@myemail\.com/i',
        //    'no_hp' => 'required|regex:/(01)[0-9]{9}/',
        //    'alamat' => 'required|string|min:6|max:255',
        //    'password' => 'required|string|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9]).*$/',//|confirmed',
        //]);
        $cek = User::where('email', $req->input('email'))->first();
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
            return response()->json('Email Sudah Terdaftar' );    
        }
    }

    public function login(Request $req) {
        $hasher   = app()->make('hash');
        $email = $req->input('email');
        $password = $req->input('password');

        $cek = User::where('email', $email)->first();
        if (!$cek) {
            return response()->json('Email Tidak Terdaftar');
        }else {
            if ($hasher->check($password, $cek->password)) {
                return response()->json(['MessageSuccesLogin' => 'Berhasil Login']);
            }else{
                return response()->json('Password Salah!');
            }
        }
    }

    public function show(){
        $tb = User::all();
        return response()->json($tb);
    }

    public function delete($id){
        User::destroy($id);   
        return response()->json('Data Berhasil Dihapus');
    }
}
