<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataProgram = [
            [
                "nama"      => "PostHuman International Poster Exhibition",
                "subheadline" => "Sebagai event pameran poster internasional, PostHuman Exhibition berorientasi untuk merespon dan berefleksi gejala global yang terjadi dewasa ini.",
                "deskripsi" => "Post Human #2 merupakan event tahunan Prodi DKV ITTP yang berupa pameran poster internasional yang bergerak di bidang Visual Art & Design. Tujuan dari acara ini adalah untuk menumbuhkan ruang belajar bersama bagi mahasiswa, dosen maupun artist yg terlibat dalam menyelenggarakan event pameran dan juga sebagai ajang kreatifitas bagi kreator, desainer, dan akademisi dalam ranah industri kreatif. Partisipan yang terlibat terdiri dari 20 negara dan 160 artist.

                Selain diselenggarakan di Galeri Satria IT Telkom Purwokerto, Post Human #2 juga digelar di Hetero Space Banyumas. Dua tempat tersebut menjadi pilihan penyelenggaraan event pameran dikarenakan tempat yang representatif dan lokasi yang sangat strategis di pusat kota.
                
                “Space Hetero sangat luas, sehingga mempermudah panitia dalam menyeting dan ploting tempat. Fasilitas sangat memadai, pelayanan sangat baik, ramah dan interaktif serta komunikatif, suasanya sangat nyaman” jelas salah satu panitia.
                
                Pameran hari pertama (30/01/2023) dimulai Pukul 10.00 WIB-18.00 WIB dengan peserta yang hadir lebih dari 200 orang.
                
                Gelaran pameran ini diharapkan dapat menjadi media pembacaan terhadap kondisi sosial atau perubahan social yg hadir di masyarakat. Mulai dari kritik sosial sampai ungkapan harapan bagi kehidupan manusia yg lebih baik.",
                "foto"  => "posthuman.jpg",
                "kategori"=>"internal"
            ],
            [
                "nama"      => "Rekarya - International Video Festival",
                "subheadline" => "Festival yang melibatkan 12 negara, 44 partisipan, 60 video+film beserta 25 brand showcase ini bertempat di galeri satria, basement gedung DSP, dan lab auvi ITTP.",
                "deskripsi" => "Festival yang melibatkan 12 negara, 44 partisipan, 60 video+film beserta 25 brand showcase ini bertempat di galeri satria, basement gedung DSP, dan lab auvi ITTP.",
                "foto"  => "rekarya.jpg",
                "kategori"=>"internal"
            ],
            [
                "nama"      => "Djagongan Kreatif",
                "subheadline" => "Salah satu event kreatif khusus mahasiswa DKV yang menghadirkan praktisi dalam dunia desain. Seperti halnya kuliah umum untuk para mahasiswa DKV.",
                "deskripsi" => "Salah satu event kreatif khusus mahasiswa DKV yang menghadirkan praktisi dalam dunia desain. Seperti halnya kuliah umum untuk para mahasiswa DKV. Selain itu mahasiswa juga mendapatkan ilmu dari dunia akademis kampus sekaligus juga mendapatkan  ilmu dari dunia profesional kerja desain.
                <br>
                Berbagai program event telah terlaksana seperti 
                Mengundang praktisi profesional Ilustrator  Muklay dan Sony Wicaksana, Fotografer Roy Genggam, videographer Afton Brewok, hingga Hanes dan Gilang dari studio lepaskendali membahas video mapping dan video jockey.
                <br>
                Selain hal tersebut untuk menunjang pembelajaran, di beberapa mata kuliah kami juga mengundang Dosen Tamu dari Rege Luhur ketua ADGI, Hadi Ismanto founder Manual Jakarta, Adin ketua Komite Kreatif Jateng.
                <br>
                Untuk mendiskusikan desain secara lingkup global kami mengadakan International Symposium : Artificial Being. Mengundang Speaker:
                <br>
                <b>Rene TA Lyslof</b>, (Professor at University of California Riverside and Faculty Member. Studies Music, Electronic Music, and Media Arts)
                Jeong-Ok Jeon (Korean curator who is actively engaging in Southeast Asian contemporary art)
                <br>
                <b>Venzha Christ</b> (Founder of and current director of HONF Foundation, v.u.fo.c and ISSS (Indonesia Space Science Society)
                <br>
                <b>Gilang Ramadhan</b> (Creative Brandpreneur, Founder Pasar Wiguna, Visual Communication Design lecturer Institut Teknologi Telkom Purwokerto)
                <br>
                <b>Obed Bima Wicandra</b>(Lecturer, Street Artist. Visual Communication Design, Petra Christian University and member of XDKVISIYK)
                ",
                "foto"  => "djagongan.jpg",
                "kategori"=>"internal"
            ],
            [
                "nama"      => "Aurora",
                "subheadline" => "Prodi DKV ITTP memiliki program pameran tahunan bernama Pameran Aurora. Pameran Aurora adalah pameran yang khusus menampilkan karya-karya mahasiswa DKV baik melalui jalur pilihan dosen maupun melalui open submission.",
                "deskripsi" => "Prodi DKV ITTP memiliki program pameran tahunan bernama Pameran Aurora. Pameran Aurora adalah pameran yang khusus menampilkan karya-karya mahasiswa DKV baik melalui jalur pilihan dosen maupun melalui open submission. Karya pilihan dosen merupakan karya-karya yang dipamerkan hasil dari tugas-tugas dari mata kuliah DKV dari beberapa semester. Sementara karya open submission merupakan karya di luar tugas mata kuliah DKV. Pameran ini dilaksanakan setiap tahun ajaran baru dengan tujuan untuk memperkenalkan prodi DKV kepada mahasiswa baru setiap tahunnya.",
                "foto"  => "aurora.jpg",
                "kategori"=>"internal"
            ],
            [
                "nama"      => "Biorama",
                "subheadline" => "Biorama merupakan manifestasi kolaborasi antara tim BKRWL*1939 yang notabenenya berasal dari DKV ITTP, Bank Indonesia, dan Hetero Space Banyumas dalam upaya menumbuhkan ekosistem publik yang mendukung proses aktivasi lingkungan Eks.",
                "deskripsi" => "Biorama merupakan manifestasi kolaborasi antara tim BKRWL*1939 yang notabenenya berasal dari DKV ITTP, Bank Indonesia, dan Hetero Space Banyumas dalam upaya menumbuhkan ekosistem publik yang mendukung proses aktivasi lingkungan Eks. Rumah Jabatan Bakorwil sebagai ruang kreatif. Tempat ideal untuk bertemunya artisan, komunitas hingga seluruh lapisan masyarakat untuk bercengkrama dan berjejaring.
                Biorama hadir di tengah hingar-bingar pusat Kabupaten Banyumas (Purwokerto) dengan mengusung konsep berpiknik santai dimana pengunjung dapat menikmati waktu akhir pekan. Melakukan aktivitas kreatif dengan suguhan berbagai macam sarapan sehat dan didukung oleh creative market dan suasana bersejarah nan tentram.",
                "foto"  => "biorama.jpg",
                "kategori"  => "kolaborasi"
            ],
            [
                "nama"      => "Peken Banyumasan",
                "subheadline" => "Peken Banyumasan hadir di tengah-tengah kearifan lokal budaya Banyumasan sebagai ruang insan kreatif untuk mengeksplorasi ide, berkarya, dan berjejaring dengan prinsip metode kolaborasi hexa helix. Ruang kreatif yang diinisiasi oleh dosen DKV ITTP ini diselenggarakan setiap satu bulan sekali.",
                "deskripsi" => "Peken Banyumasan hadir di tengah-tengah kearifan lokal budaya Banyumasan sebagai ruang insan kreatif untuk mengeksplorasi ide, berkarya, dan berjejaring dengan prinsip metode kolaborasi hexa helix. Ruang kreatif yang diinisiasi oleh dosen DKV ITTP ini diselenggarakan setiap satu bulan sekali.
                Dalam setiap gelaran acaranya, Peken Banyumasan menggunakan tagar #Mrapat sebagai bentuk penghargaan terhadap Adipati Mrapat yang telah mendirikan Banyumas dan sebagai bentuk campaign ajakan untuk merapat. Peken Banyumasan telah berjalan selama satu tahun pelaksanaan dan menjadi inspirasi pertumbuhan ekosistem kreatif di wilayah Banyumas dan sekitarnya.
                Keberhasilan Peken Banyumasan sebagai ruang kreatif sempat disorot oleh Kemenparekraf dan terabadikan dalam sebuah film dokumenter singkat berjudul Mrapat Banyumasan yang ditayangkan di Lift Off Global Session 2023, United Kingdom.",
                "foto"  => "peken.jpg",
                "kategori"  => "kolaborasi"
            ],
            [
                "nama"      => "Mlampah Sareng",
                "subheadline" => "Mlampah Sareng sebagai program walking tour yang diinisiasi oleh program studi DKV ITTP berupaya mengajak dan turut serta melibatkan berbagai elemen seperti akademisi, pemerintahan setempat, tokoh masyarakat, hingga warga lokal untuk berkolaborasi bersama.",
                "deskripsi" => "Sebuah tempat atau lokasi tentu memiliki histori. Sejarah dapat dikatakan bernilai tinggi dan memuat potensi untuk dikembangkan di bidang ilmu pengetahuan lainnya. Banyak tempat yang bisa dieksplorasi khususnya di beberapa titik seperti Pasar Manis, Sokaraja, dan Banyumas Kota Lama. Tiga titik tersebut menyimpan cerita dan sejarahnya masing-masing.
                Mlampah Sareng sebagai program walking tour yang diinisiasi oleh program studi DKV ITTP berupaya mengajak dan turut serta melibatkan berbagai elemen seperti akademisi, pemerintahan setempat, tokoh masyarakat, hingga warga lokal untuk berkolaborasi bersama. Dengan tujuan bisa saling bertukar cerita, harapannya peserta Mlampah Sareng dapat lebih mengenal potensi suatu daerah sehingga diperoleh insight dari setiap perjalanan dan tempat yang dikunjungi.",
                "foto"  => "mlampah.jpg",
                "kategori"  => "kolaborasi"
            ],
            [
                "nama"      => "Soetedja Makerfest",
                "subheadline" => "oetedja Makerfest merupakan bentuk pergerakan yang dijalankan oleh program studi DKV ITTP untuk memberikan ruang kepada para insan kreatif untuk mengeksplorasi ide, berkarya, dan menjalin koneksi sehingga bisa tercipta ekosistem kreatif di dalam pasar yang memberikan dampak baik bagi pasar dan masyarkat di sekitar.",
                "deskripsi" => "Soetedja Makerfest merupakan bentuk pergerakan yang dijalankan oleh program studi DKV ITTP untuk memberikan ruang kepada para insan kreatif untuk mengeksplorasi ide, berkarya, dan menjalin koneksi sehingga bisa tercipta ekosistem kreatif di dalam pasar yang memberikan dampak baik bagi pasar dan masyarkat di sekitar.
                Soetedja Makerfest menyuguhkan enam program meliputi local makers, exhibition, pasar walking tour, workshop, creative sharing, dan performance.",
                "foto"  => "soetedja.jpg",
                "kategori"  => "kolaborasi"
            ],
        ];
        foreach($dataProgram as $key=>$val){ Program::create($val);}
    }
}
