<?php

namespace Database\Seeders;

use App\Models\KategoriGambar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriGambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataKategori = [
            ["kategori"=> "Akademik"],
            ["kategori"=> "Penelitian"],
            ["kategori"=> "Program"],
            ["kategori"=> "Karya"],
        ];
        foreach($dataKategori as $key=>$val){KategoriGambar::create($val);}
    }
}
