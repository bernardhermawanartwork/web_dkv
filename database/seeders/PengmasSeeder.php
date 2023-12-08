<?php

namespace Database\Seeders;

use App\Models\Pengmas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataPengmas = [
            [
                "headline"  => "Pengabdian Masyarakat Desa Kemutug Kidul",
                "isi"       => "Kemutug Kidul merupakan desa pengrajin bambu yang berada di Kecamatan Baturraden, Kabupaten Banyumas. Desa ini berada di jalur pariwisata Baturraden. Desa Kemutug Kidul merupakan sentra pengrajin bambu terbesar dan menjadi satu-satunya desa yang menjadi sentra pengrajin bambu di Kabupaten Banyumas. Produk kerajinan bambu yang terkenal dari desa ini adalah kursi malas dan gazebo.<br>
                Desa Kemutug Kidul juga memiliki lokal wisata yang bagus namun masih kurang dalam memaksimalkan potensinya. Curug Orak-Arik dan Curug Carang merupakan salah satu lokal wisata di desa Kemutug Kidul yang masih belum terawat sepenuhnya. Beberapa akses dan penanda pada lokasi wisata tersebut belum tersedia.<br>
                Pada pengabdian masyarakat ini dosen beserta mahasiswa merancang infografis terkait profil desa, katalog produk kerajinan bambu, aktivasi media sosial, dan sign system. Selain itu juga mencanangkan program yang bertujuan untuk membantu serta melestarikan wisata curug desa Kemutug Kidul dengan mengalokasikan sebagian penghasilan dari para pengrajin bambu, untuk pemberdayaan wisata curug agar berkembang dan lebih terawat.
                <br>
                Pelaksanaan sosialasasi dilakukan pada event Peken Banyumasan dan juga di Desa Kemutug Kidul. Program pengabdian masyarakat ini juga sebagai bentuk peran Institusi dalam tanggung jawab sosial kepada masyarakat sekitar, dan merupakan bentuk luaran dari mata kuliah Studio DKV 4.
                ",
                "gambar"    => "images/pengmas/kemutug_kidul.png"
            ],
            [
                "headline"  => "Pengabdian Masyarakat Bamboonesia",
                "isi"       => "Pada Desa Bokol ditemukan sumber daya bambu yang melimpah dan belum dimaksimalkan potensinya sehingga Bambonesia ingin memakasimalkan potensi desa melalui workshop atau edukasi masyarakat desa tentang keunikan bambu dan bagaimana bambu dapat menjadi produk yang bernilai.<br>
                Bambonesia.id merupakan sebuah wadah kreativitas yang bergerak di bidang pemberdayaan masyarakat berkelanjutan dengan mengoptimalkan potensi sosial dan lingkungan. Seni pengelolaan dan kerajinan dari bambu. Bambonesia.id memberikan layanan Jasa hasil seni dan konstruksi berbahan dasar bambu serta program satu juta pohon bambu sebagai program konservasi lingkungan.<br>
                Pada pengabdian masyarakat ini dosen beserta mahasiswa melakukan riset mengenai UKM Kerajinan lokal Bambonesia untuk menemukan permasalahan yang bisa diselesaikan dengan keilmuan DKV. Terdapat dua program yang dilakukan sebagai solusi atas masalah yang telah diidentifikasi. Pertama, membantu Bamboonesia sendiri sebagai suatu brand lokal agar lebih dikenal dengan merancang branding dan juga promosi. Kedua mengangkat isu sosial sebagai konsep kampanye yang direalisasikan dengan memberdayakan masyarakat di sekitar Bambonesia. Pada realisasi program pemberdayaan masyarakat desa dilakukan dengan memberikan pelatihan berupa workshop yang dapat menambah skill mereka. Dengan adanya kampanye ini diharapkan dapat meningkatkan perekonomian masyarakat sekitar melalui kerajinan bambu.<br>
                Pelaksanaan sosialasasi dilakukan pada event Peken Banyumasan. Program pengabdian masyarakat ini juga sebagai bentuk peran Institusi dalam tanggung jawab sosial kepada masyarakat sekitar, dan merupakan bentuk luaran dari mata kuliah Studio DKV 4.
                .
                ",
                "gambar"    => "images/pengmas/bamboonesia.png"
            ],
        ];
        foreach ($dataPengmas as $key=>$val)
        {
            Pengmas::create($val);
        }
    }
}
