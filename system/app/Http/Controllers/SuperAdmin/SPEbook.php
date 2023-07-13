<?php
 
 namespace App\Http\Controllers\SuperAdmin;
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use App\Models\Ebook;
 use Str;
 
class SPEbook extends Controller
{
   
    function index(){
        $data['list'] = Ebook::get();
        return view('SuperAdmin.ebook.index', $data);
    }
    function add(){
        return view('SuperAdmin.ebook.add');
    }

    function tambahAct(Request $req){

        $sampul = $req->file('sampul');
        $namaSampul = time().rand(1,10).'.'.$sampul->extension();
        $sampul->move(public_path('app/sampul'), $namaSampul);  

        $pdf = $req->file('pdf');
        $namapdf = time().rand(1,10).'.'.$pdf->extension();
        $pdf->move(public_path('app/pdf'), $namapdf);  

        
        $ebook = new Ebook;
        $ebook->nama_ebook = $req->nama_ebook;
        $ebook->sampul =  'app/sampul/'.$namaSampul;
        $ebook->pdf =  'app/pdf/'.$namapdf;
        $ebook->save();
        return redirect('SuperAdmin/ebook')->with('success', 'Data berhasil disimpan !');
    }
    function update(Ebook $ebook){
        $data['list'] = $ebook;
        return view('SuperAdmin.ebook.update', $data);
    }


    function updateAct(Ebook $ebook, Request $req) {
        $sampul = $req->file('sampul');
        $pdf = $req->file('pdf');
    
        if ($sampul != null) {
            $namaSampul = time().rand(1,10).'.'.$sampul->extension();
            $sampul->move(public_path('app/sampul'), $namaSampul);
            $ebook->sampul = 'app/sampul/'.$namaSampul;
        }
    
        if ($pdf != null) {
            $namapdf = time().rand(1,10).'.'.$pdf->extension();
            $pdf->move(public_path('app/pdf'), $namapdf);
            $ebook->pdf = 'app/pdf/'.$namapdf;
        }
    
        $ebook->nama_ebook = $req->nama_ebook;
        $ebook->update();
    
        return redirect('SuperAdmin/ebook')->with('success', 'Data berhasil diupdate !');
    }
    

    function hapus(Ebook $ebook){

        $ambilDataEbook = $ebook->delete();
        return back()->with('danger', 'Data berhasil dihapus !');
    }
}