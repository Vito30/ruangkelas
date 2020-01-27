<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $filable =['nama','angkatan'];
    public function ruang()
    {
        return $this->belongsTo(kelas::class,'kelas_id');
    }
}
