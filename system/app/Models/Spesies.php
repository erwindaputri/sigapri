<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesies extends Model
{
    use HasFactory;
    protected $table ='spesies';
   
    public function galeri(){
        return $this->hasMany(Spesiesgaleri::class, 'id_spesies', 'id');
    }
   
}
