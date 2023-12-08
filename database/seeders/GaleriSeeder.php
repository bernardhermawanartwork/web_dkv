<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataGaleri = [
            [
                "gambar"             => "images/galeri/DSCF5122.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/DSCF5197.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/Screenshot (749).jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/DSC02888.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/DSCF5333.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/DSCF5350.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/galeri/DSCF5360.jpg",
                "kategori_gambar_id" => "3",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (1).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (2).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (3).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (4).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (5).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/dkv/Bitmap (6).jpg",
                "kategori_gambar_id" => "1",
            ],
            [
                "gambar"             => "images/gallery/a.webp",
                "kategori_gambar_id" => "4",
            ],
            [
                "gambar"             => "images/gallery/b.webp",
                "kategori_gambar_id" => "4",
            ],
            [
                "gambar"             => "images/gallery/c.webp",
                "kategori_gambar_id" => "4",
            ],
            [
                "gambar"             => "images/gallery/d.webp",
                "kategori_gambar_id" => "4",
            ],
            [
                "gambar"             => "images/gallery/e.webp",
                "kategori_gambar_id" => "4",
            ],[
                "gambar"             => "images/gallery/f.webp",
                "kategori_gambar_id" => "4",
            ],
        ];
        foreach($dataGaleri as $key=>$val)
        {
            Galeri::create($val);
        }
    }
}
