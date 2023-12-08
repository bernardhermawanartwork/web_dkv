<?php

namespace Database\Seeders;

use App\Models\Hibah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HibahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataHibah = [
            [
                "jenis_hibah"   => "Kedaireka",
                "judul_hibah"   => "Akselerasi Platform Hompimpaa.id Menggunakan AI untuk Menunjang Ekonomi Digital dalam Bentuk Industri Animasi",
                "nama_dosen"   => "Riri Irma Suryani",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Kemendikbud (Hibah Dosen Pemula) ",
                "judul_hibah"   => "Learning Management System dan Peningkatan Kemampuan Pembuatan Video Himpaudi Kabupaten Banyumas.",
                "nama_dosen"   => "Riri Irma Suryani",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Kemendikbud (Hibah Dosen Pemula)",
                "judul_hibah"   => 'Strategi Pencegahan Kekerasan Seksual pada anak-anak dan Perempuan melalui film Omnibus "Don’t Just Shut Up”.',
                "nama_dosen"   => "Riri Irma Suryani, Gusnita Linda",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Kemendikbud (Hibah Dosen Pemula)",
                "judul_hibah"   => "Kampanye Pencegahan dan Penanggulangan Kekerasan Seksual di Perguruan Tinggi melalui Motion Graphic.",
                "nama_dosen"   => "Riri Irma Suryani",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Institut Teknologi Telkom Purwokerto (Hibah Internal LPPM) ",
                "judul_hibah"   => 'Strategi Pencegahan Kekerasan Seksual Pada Perempuan melalui Film Pendek "Demi Nama Baik, #Don’t Just Shut UP".',
                "nama_dosen"   => "Riri Irma Suryani, Gusnita Linda",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Institut Teknologi Telkom Purwokerto (Hibah Internal LPPM) ",
                "judul_hibah"   => 'Perancangan Kreatif Digital Advertising (CDA) Dalam Promosi Kuliner Tradisional Banyumas untuk Mendukung Peningkatan Sektor Pariwisata di Masa New Normal.',
                "nama_dosen"   => "Riri Irma Suryani, Galih Putra Pamungkas, Ferdinanda",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "LPPM Universitas Sanata Dharma ",
                "judul_hibah"   => "Gender sebagai Jalan: Pengalaman Keberagamaan dan Pembentukan Diri Perempuan",
                "nama_dosen"   => "Gusnita Linda",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "LPPM Universitas Sanata Dharma ",
                "judul_hibah"   => "Kekerasan Seksual di Ranah Pendidikan Tinggi: Narasi dan Aktivisme di Dunia Maya",
                "nama_dosen"   => "Gusnita Linda",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Kedaireka",
                "judul_hibah"   => "Akselerasi Ruang Kreatif Biorama sebagai Optimalisasi Peningkatan Wisata Sejarah Kota Purwokerto",
                "nama_dosen"   => "Riri Irma Suryani, Gusnita Linda, Robert Hendra Yudianto, Adnan Setioko, Gilang Ramadhan ",
                "tahun"   => "2023",
            ],
            [
                "jenis_hibah"   => "Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023",
                "judul_hibah"   => "PKM Artisanal Business Scaling pada Industri Kreatif Akar Jati Desa Kedungbenda Melalui Digitalisasi Pemasaran dan Efisiensi Produksi ",
                "nama_dosen"   => "Gladi Pawestri Utami ",
                "tahun"   => "2023",
            ],
            [
                "jenis_hibah"   => "Penelitian Dosen Pemula KEMENDIKBUD",
                "judul_hibah"   => "Infografis Digital sebagai Panduan Wisata Religi Masjid Saka Tunggal Cikakak dalam Menghadapi Era New Norma di Kabupaten Banyumas ",
                "nama_dosen"   => "Gladi Pawestri Utami, Arsita Pinandita ",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto ",
                "judul_hibah"   => "Coffee Table Book Kesenian Lengger Lanang dalam Fotografi Dokumenter ",
                "nama_dosen"   => "Ferdinanda ",
                "tahun"   => "2018",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto ",
                "judul_hibah"   => "Perancangan Video Iklan Layanan Masyarakat Diet Plastik ",
                "nama_dosen"   => "Ferdinanda, Elianna Gerda",
                "tahun"   => "2019",
            ],
            [
                "jenis_hibah"   => "Kemenristekdikti",
                "judul_hibah"   => "Pemetaan Kesenian Tradisional Banyumas Melalui Film Dokumenter sebagai Upaya Pelestarian Budaya Lokal ",
                "nama_dosen"   => "Ferdinanda, Elianna Gerda Pertiwi ",
                "tahun"   => "2020",
            ],
            [
                "jenis_hibah"   => "Pengprov Jateng",
                "judul_hibah"   => "Festival Panggung Kahanan-Gondolio",
                "nama_dosen"   => "Ferdinanda",
                "tahun"   => "2020",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Perancangan Creative Digital Advertising (CDA) dalam Promosi Kuliner Tradisional Banyumas untuk Mendukung Peningkatan Sektor Pariwisata di Masa New Normal ",
                "nama_dosen"   => "Ferdinanda, Galih Putra Pamungkas ",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "HONF Foundation",
                "judul_hibah"   => "The Ungovernable Structure Design With The Living ",
                "nama_dosen"   => "FFerdinanda, Galih Putra Pamungkas ",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto ",
                "judul_hibah"   => 'OPTIMALISASI LOCAL CREATIVE “BAWOR” DALAM DIGITAL EDUCATIONAL RESOURCE SEBAGAI PENGUATAN IKON BANYUMAS',
                "nama_dosen"   => "Ajeng Tita Negoro ",
                "tahun"   => "2023",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Perancangan Motion Graphic Iklan layanan masyarakat: Stop Tolak Pemakaman Korban Covid-19",
                "nama_dosen"   => "Luqman Wahyudi",
                "tahun"   => "2020",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Perancangan animasi 3d iklan layanan Masyarakat untuk kampanye sosial vaksinasi Covid-19 di Banyumas",
                "nama_dosen"   => "Luqman Wahyudi, Elliana Gerda ",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "Kemendikbud (Hibah Dosen Pemula)",
                "judul_hibah"   => "Perancangan Prototype Mokit Rumah adat tradisional indonesia seri 1: Rumah Joglo",
                "nama_dosen"   => "Luqman Wahyudi, Elliana Gerda ",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Perancangan buku panduan Mokit Rumah Adat Indonesia: Joglo",
                "nama_dosen"    => "Luqman Wahyudi, Elliana Gerda",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Hibah Dosen Pemula Kemdikbudristek ",
                "judul_hibah"   => "Pembelajaran Berbasis Video Pengolahan Sampah Plastik Rumah Tangga di Masa Pandemi",
                "nama_dosen"   => "Bachrul Restu Begja, Yanuar",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Goethe Institute",
                "judul_hibah"   => "Tritangtu: Pengaruh Musik Tradisional Terhadap Pertumbuhan Tanaman",
                "nama_dosen"   => "Bachrul Restu Begja ",
                "tahun"   => "2021",
            ],
            [
                "jenis_hibah"   => "Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023",
                "judul_hibah"   => "Optimalisasi Pengelolaan Sampah Plastik Bank Sampang Inyong serta Pemberdayaan Masyarakat dalam Peningkatan Ekonomi Warga Dusun Semingkir Purwokerto ",
                "nama_dosen"   => "Bachrul Restu Begja, Luqman Wahyudi ",
                "tahun"   => "2023",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Analisis Poster Gejayan Memanggil ",
                "nama_dosen"   => "Galih Putra Pamungkas, Arsita Pinandita",
                "tahun"   => "2020",
            ],
            [
                "jenis_hibah"   => "LPPM IT Telkom Purwokerto",
                "judul_hibah"   => "Sosialisasi KPU Kabupaten Banyumas bagi 100 Desa di Kabupaten Banyumas dengan Memanfaatkan Sinematografi dan Poster ",
                "nama_dosen"   => "Galih Putra Pamungkas, Robert Hendra Yudianto",
                "tahun"   => "2022",
            ],
            [
                "jenis_hibah"   => "Hibah Skema Pemberdayaan Berbasis Masyarakat (PBM) Kemendikbud 2023",
                "judul_hibah"   => "Peken Banyumasan: Strategi Inovasi Kreatif pada Pemulihan Usaha Mikro Kecil Menengah (UMKM) Akibat Pandemi Covid-19 ",
                "nama_dosen"   => "Galih Putra Pamungkas, Gilang Ramadhan",
                "tahun"   => "2022",
            ],

        ];
        foreach($dataHibah as $key=>$val)
        {
           Hibah::create($val);
        }
    }
}
