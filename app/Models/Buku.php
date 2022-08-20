<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
    {
        protected $table = "bukus";
     
        // public function penulis()
        // {
        //     return $this->belongsTo('App\Penulis');
        // }

        public function penulis() 
        {
            return $this->belongsToMany(Penulis::class,'id_penulis');
        }
    }
