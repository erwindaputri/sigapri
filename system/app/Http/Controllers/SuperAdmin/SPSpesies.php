<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spesies;
use App\Models\Spesiesgaleri;
use Str;

class SPSpesies extends Controller{

    function index(){
        
        $data['list'] = Spesies::with('galeri')->get();
        return view('SuperAdmin.spesies.index',$data);
    }

    function add(){
        return view('SuperAdmin.spesies.add');
    }

    function tambahAct(Request $req){

        $spesies = new Spesies;
        $spesies->nama_spesies = $req->nama_spesies;
        $spesies->nama_latin = $req->nama_latin;
        $spesies->kategori_spesies = $req->kategori_spesies;
        $spesies->kategori_jenis = $req->kategori_jenis;
        $spesies->famili = $req->famili;
        $spesies->nama_daerah = $req->nama_daerah;
        $spesies->lat = $req->lat;
        $spesies->lng = $req->lng;
        $spesies->deskripsi = $req->deskripsi;
        $simpanSpesies = $spesies->save();
        if ($simpanSpesies == 1) {
            $filest = $req->file('gambar_spesies');
            for ($i=0; $i < count($filest); $i++) { 
                    
                $name = time().rand(1,10).'.'.$filest[$i]->extension();
                $filest[$i]->move(public_path('app/spesies'), $name);  
                $galeri = new Spesiesgaleri;
                $galeri->id_spesies = $spesies->id;
                $galeri->gambar_spesies =  'app/spesies/'.$name;
                $simpanGaleri = $galeri->save();
            }
            return redirect('SuperAdmin/spesies')->with('success', 'Data Spesies berhasil diproses!');
        }
        return back()->with('danger', 'Data Spesies gagal diproses!, coba ulangi kembali.');
    }

    function detail($spesies){
        $id = decrypt($spesies);
        $data['list'] =  Spesies::with('galeri')->find($id);
        return view('SuperAdmin.spesies.detail',$data);
    } 
    
    function tambahGambar(Request $req){
        $filest = $req->file('gambar_spesies');
        for ($i=0; $i < count($filest); $i++) { 
                
            $name = time().rand(1,10).'.'.$filest[$i]->extension();
            $filest[$i]->move(public_path('app/spesies'), $name);  
            $galeri = new Spesiesgaleri;
            $galeri->id_spesies = $req->id_spesies;
            $galeri->gambar_spesies =  'app/spesies/'.$name;
            $simpanGaleri = $galeri->save();
        }

        if ($simpanGaleri == 1) {
            return back()->with('success', 'Data berhasil ditambahkan !');
        }
        return back()->with('danger', 'Data gagal ditambahkan !');
    }

    function updateGambar(Spesiesgaleri $gambar, Request $req){

        $filest = $req->file('gambar_spesies');
        $name = time().rand(1,10).'.'.$filest->extension();
        $filest->move(public_path('app/spesies'), $name);  
        $gambar->gambar_spesies =  'app/spesies/'.$name;
        $simpanGaleri = $gambar->update();

        if ($simpanGaleri == 1) {
            return back()->with('success', 'Data berhasil diupdate !');
        }
        return back()->with('danger', 'Data gagal diupdate !');
           
    }

    function update(Spesies $spesies){
        $data['list'] = $spesies;
        return view('SuperAdmin.spesies.update', $data);
    }

    function updateAct(Spesies $spesies, Request $req){

        $spesies->nama_spesies = $req->nama_spesies;
        $spesies->nama_latin = $req->nama_latin;
        $spesies->kategori_spesies = $req->kategori_spesies;
        $spesies->kategori_jenis = $req->kategori_jenis;
        $spesies->famili = $req->famili;
        $spesies->nama_daerah = $req->nama_daerah;
        $spesies->lat = $req->lat;
        $spesies->lng = $req->lng;
        $spesies->deskripsi = $req->deskripsi;
        $simpanSpesies = $spesies->update();
        
        return back()->with('success','Data Berhasil Diedit');
    }

    function hapus(Spesies $spesies){

        $ambilDataspeSpesies = $spesies->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }


}
