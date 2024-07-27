<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index(){
        return view("user/index");
    }
    function validasi(Request $request){
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi', //jika email tidak diisi maka akan tampil pesan tersebut
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [ //variabel untuk menampung data email dan password yang diambil dari variabel request
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){ 
            if(Auth::user()->level == 'admin'){
                return redirect('/dashboard');
            }elseif(Auth::user()->level == 'pembeli'){
                return redirect('/dashboard/pembeli');
            }
        }else{
            return redirect('user')->withErrors('Email atau Password salah ')->withInput();
        }
    }
}
