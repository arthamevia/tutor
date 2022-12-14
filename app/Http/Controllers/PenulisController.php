<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;
use App\Models\Buku;
use App\Models\Penjual;
 
class PenulisController extends Controller
{
    public function index()
    {
    	// mengambil semua data penulis
    	$penulis = Penulis::all();
		$buku = Buku::all();
		$penjual = Penjual::all();
    	// return data ke view
    	return view('penulis', compact('penulis', 'buku', 'penjual'));
    }
}
