<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Spesies;
use App\Models\Kegiatan;
use App\Models\Ebook;
use App\Models\Rescue;
use App\Models\anggota;
use App\Models\HakAkses;

class LPHome extends Controller{

    function index(){


        return view('landingPage.home');
    }

    function amfibi(){

        $data['list'] =  Spesies::with('galeri')->where('kategori_spesies', 'Amfibi')->get();
        return view('landingPage.amfibi', $data);
    }
    function reptil(){

        $data['list'] =  Spesies::with('galeri')->where('kategori_spesies', 'Reptil')->get();
        return view('landingPage.reptil', $data);
    }

    function detailReptil($spesies)
    {
        $id = decrypt($spesies);
        $data['list'] = Spesies::find($id);
        
        return view('landingPage.detailReptil', $data);
    }
    
    function seminar(){

        $data['list'] =  Kegiatan::where('kategori_kegiatan', 'Seminar')->get();
        
        return view('landingPage.seminar', $data);
    }

   function detailSeminar($kegiatan){

        $id = decrypt($kegiatan);
        $data['list'] = Kegiatan::find($id);
        return view('landingPage.detailSeminar', $data);
   }
    function trip(){

        $data['list'] =  Kegiatan::where('kategori_kegiatan', 'Trip')->get();
        
        return view('landingPage.trip', $data);
    }

   function detailTrip($kegiatan){

        $id = decrypt($kegiatan);
        $data['list'] = Kegiatan::find($id);
        return view('landingPage.detailTrip', $data);
   }

   function ebook(){

    $data['list'] = Ebook::get();
    
    return view('landingPage.ebook', $data);
}

    function berita(){

        $data['list'] =  Kegiatan::where('kategori_kegiatan', 'Berita')->get();
        
        return view('landingPage.berita', $data);
    }

   function detailBerita($kegiatan){

        $id = decrypt($kegiatan);
        $data['list'] = Kegiatan::find($id);
        return view('landingPage.detailBerita', $data);
   }

}