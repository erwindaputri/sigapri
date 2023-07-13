<?php

namespace App\Models;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Anggota extends ModelAuthenticate
{

    protected $table ='anggota';
    public $primaryKey ="nik";

    function handleUploadFoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "anggota";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;
           

        }
    }


}
