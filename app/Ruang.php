<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $filable = ['nama_kelas','kode_ruangan','nama_gedung'];
}
