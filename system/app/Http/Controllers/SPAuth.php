<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SPAuth extends Controller
{
    public function login()
    {
        return view('login');
    }  

    function aksiLogin(Request $request){
        if(Auth::guard('user')->attempt(['email'=> request('email'), 'password' => request('password')])){

			$level = Auth::guard('user')->user()->level;

            if($level === 'Super Admin'){
                return redirect('SuperAdmin/dashboard')->with('success', 'Login Berhasil');
            }
            
            if($level === 'Admin'){
                return redirect('Admin/dashboard')->with('success', 'Login Berhasil');
            }
            
            if($level === 'Anggota'){
                return redirect('A/dashboard')->with('success', 'Login Berhasil');
            }else{

                return redirect('Anggota/home')->with('success', 'Login Berhasil');
            }

            return back()->with('danger', 'Login gagal !');
			
            
		}
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $anggota = new Anggota();
        $anggota->nik = $request->nik;
        $anggota->nama = $request->nama;
        $anggota->username = $request->username;
        $anggota->email = $request->email;
        $anggota->confir_password = $request->confir_password;
        $anggota->alamat = $request->alamat;
        $anggota->handleUploadFoto();
        $anggota->status = '1';
        $anggota->save();

        return redirect('/login')->with('success', 'Registrasi berhasil');
    }
}
