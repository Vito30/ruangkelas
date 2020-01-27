<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $filable = ['nama_kelas','kode_ruangan','angkatan','nama_gedung'];
    public function Rooms()
     {
         return $this->hasOne(Rooms::class,'kelas_id');
     }
}
