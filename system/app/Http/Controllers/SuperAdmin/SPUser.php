<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Str;

class SPUser extends Controller
{
    public function index()
    {
        $data['list'] = User::get();
        return view('SuperAdmin.user.index', $data);
    }

    public function add()
    {
        return view('SuperAdmin.user.add');
    }

    public function tambahAct(Request $req)
    {
        $user = new User;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->handleUploadFoto();
        $user->level = $req->level;
        $user->save();
    
        return redirect('SuperAdmin/user')->with('success', 'Data berhasil disimpan!');
    }

    public function update(User $user)
    {
        $data['list'] = $user;
        return view('SuperAdmin.user.update', $data);
    }

    public function updateAct(User $user, Request $req)
    {
        if ($req->gambar_user == null) {
            if ($req->password == null) {
                $user->username = $req->username;
                $user->email = $req->email;
                $user->level = $req->level;
                $user->update();
                return redirect('SuperAdmin/user')->with('success', 'Data berhasil diupdate!');
            } else {
                $user->username = $req->username;
                $user->email = $req->email;
                $user->level = $req->level;
                $user->password = bcrypt($req->password);
                $user->update();
                return redirect('SuperAdmin/user')->with('success', 'Data berhasil diupdate!');
            }
        } else {
            if ($req->password == null) {
                $user->username = $req->username;
                $user->email = $req->email;
                $user->level = $req->level;
                $user->handleUploadFoto();
                $user->update();
                return redirect('SuperAdmin/user')->with('success', 'Data berhasil diupdate!');
            } else {
                $user->username = $req->username;
                $user->email = $req->email;
                $user->level = $req->level;
                $user->password = bcrypt($req->password);
                $user->handleUploadFoto();
                $user->update();
                return redirect('SuperAdmin/user')->with('success', 'Data berhasil diupdate!');
            }
        }
    }    

    public function hapus(User $user)
    {
        $user->delete();
        return back()->with('danger', 'Data berhasil dihapus!');
    }
}
