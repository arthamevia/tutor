<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    protected $table = "penjuals";
    public function Buku()
    {
        return $this->hasMany('App\Buku');
    }
}
