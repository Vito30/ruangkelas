<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use SoftDeletes;
     public function rooms()
     {
         return $this->hasOne(Rooms::class);
     }
   
}



