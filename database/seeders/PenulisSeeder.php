<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Buku;
use App\Models\Penulis;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penulis = ['nama' => 'Yuli'];

        DB::table('penulis')->insert($penulis);
    }
}
