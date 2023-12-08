<?php

namespace Database\Seeders;

use App\Models\Kurikulum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $matakuliah = [
           [
             "mata_kuliah"  => "Bahasa Inggris Umum",
             "deskripsi"    => "",
             "sks"          => null,
             "semester"     => 1
           ],
           [
            "mata_kuliah"  => "Nirmana",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 1
          ],
          [
            "mata_kuliah"  => "Pengantar Seni Budaya",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 1
          ],
          [
            "mata_kuliah"  => "Pengantar Ilmu Komunikasi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 1
          ],
          [
            "mata_kuliah"  => "Gambar Bentuk",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 1
          ],
          [
            "mata_kuliah"  => "Fotografi Dasar",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 1
          ],
          [
            "mata_kuliah"  => "Studio DKV 1",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Bahasa Indonesia",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Pendidikan Agama",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Gambar Karakter",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Komputer Grafis 1",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Fotografi Desain",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 2
          ],
          [
            "mata_kuliah"  => "Studio DKV 2",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Bahasa Inggris Komunikasi Bisnis",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Literasi Teknologi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Tipografi Desan",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Komputer Grafis 2",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Estetika",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Manajemen Umum",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Kapita Selekta",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 3
          ],
          [
            "mata_kuliah"  => "Studio DKV 3",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Ilustrasi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "SDesign Thinking",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Videografi 1",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Desain Kemasan",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Semiotika Visual",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Periklanan",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 4
          ],
          [
            "mata_kuliah"  => "Studio DKV 4",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Ekosistem Kreatif",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Psikologi Persepsi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Videografi 2",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Animasi 2D",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Metodologi Perancangan",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Metodologi Penelitian",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 5
          ],
          [
            "mata_kuliah"  => "Tinjauan Penelitian",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Pendidikan Pancasila",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "MK Pilihan 1",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Animasi 3D",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Creativepreneurship",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Portofolio Strategi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Etika Profesi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 6
          ],
          [
            "mata_kuliah"  => "Media Strategi",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Seminar",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Kerja Praktek",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Kritik Desain",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Desain Pameran",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "New Media",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Kewarganegaraan",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "MK Pilihan 2",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 7
          ],
          [
            "mata_kuliah"  => "Tugas Akhir",
            "deskripsi"    => "",
            "sks"          => null,
            "semester"     => 8
          ],
        ];
        foreach($matakuliah as $key => $val)
        {
            Kurikulum::create($val);
        }
    }
}
