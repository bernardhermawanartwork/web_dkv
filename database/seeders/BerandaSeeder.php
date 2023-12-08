<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Karya;
use App\Models\Berita;
use App\Models\Penawaran;
use App\Models\BerandaHero;
use App\Models\KenapaHarusDkv;
use Illuminate\Database\Seeder;
use App\Models\BerandaVideoSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dataSection1 = [
                [
                    "headline"  => "Kuliah di DKV jadi Makin Seru",
                    "isi"       => "Yuk, jadilah bagian dari komunitas kreatif kami di DKV IT Telkom Purwokerto! Bergabunglah dan wujudkan bakat desainmu bersama kami.",
                    "action_link"  => "https://pmb.ittelkom-pwt.ac.id",
                    "action_label"  => "Daftar Sekarang",
                    "gambar"        => "image/beranda/eegsINmj4hzBuvHPJNF77aIJZtduv889ixpk6Cce.png",
                    "default"   => 1
                ]
            ];
        $dataSection2 = [
                [
                    "headline"  => "Sekilas Tentang DKV IT Telkom Purwokerto",
                    "isi"       => "Program Studi Desain Komunikasi Visual di IT Telkom Purwokerto adalah pilihan ideal bagi calon mahasiswa yang tertarik dalam menggabungkan kreativitas dan teknologi. Dengan kurikulum yang berfokus pada pengembangan desain grafis, ilustrasi, dan multimedia, program ini memberikan wawasan mendalam tentang bagaimana visual dapat memengaruhi komunikasi modern. Dengan bimbingan dari para pengajar yang berpengalaman dan akses ke fasilitas terbaru, mahasiswa akan siap untuk mengembangkan kemampuan desain yang diperlukan dalam berbagai industri.",
                    "action_link"  => "/profil",
                    "action_label"  => "Yuk Kenal Lebih Dekat",
                    "video_url"        => "https://www.youtube.com/embed/xLipDbGB1QI?start=47&autoplay=1&mute=1",
                    "default"   => 1
                ]
        ];
        $dataSection3 = [
            [
                "headline"  => "Dosen-dosen Berpengalaman",
                "isi"       => "Dosen-dosen yang ada di DKV ITTP memiliki pengalaman yang banyak lho di industri desain, jadi temen-temen dijamin bisa mendapatkan ilmu yang berkualitas tentunya",
                "gambar"    => "image/beranda/section3/uxatwVyzFVBD5GKiowC9Fgf7vzwk1vbJFVe0Uls7.jpg"
            ],
            [
                "headline"  => "Fasilitas Lengkap",
                "isi"       => "Program Studi Desain Komunikasi Visual (DKV) di Institut Teknologi Telkom Purwokerto (ITTP) menawarkan fasilitas lengkap dan modern yang mendukung pengembangan kreativitas mahasiswa dalam desain grafis, seni digital, dan komunikasi visual.",
                "gambar"    => "image/beranda/section3/BJsCjnn2L0I1H12a1rezI6EtPXrklKLq6Eiluybz.jpg"
            ],
            [
                "headline"  => "Prospek Terjamin",
                "isi"       => "Program Studi Desain Komunikasi Visual (DKV) di Institut Teknologi Telkom Purwokerto (ITTP) menjamin prospek karier yang cerah bagi lulusannya dengan koneksi industri yang kuat dan fokus pada keterampilan yang sangat dicari oleh pasar kerja.",
                "gambar"    => "image/beranda/section3/FEoUmohPHEI4reyFSRaO4Bi9H5XL4puDoTJPJdAn.jpg"
            ],
        ];
        $dataSection4 = [
            [
                "judul_karya"       => "Cybernatic Geisha",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Ajay Hidayat",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/TB3h8ymDizmdJS3PceRLxkWSha0YwajfPXYuXFWk.png"
            ],
            [
                "judul_karya"       => "In.fact.ious",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Ajeng Tita Negoro",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/Ti6rjo6eLhtWfSnRMLQXvfqMk4Xay8qetYrYqHzh.png"
            ],
            [
                "judul_karya"       => "Massive Infection",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Aka Krisnawan",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/u5binHfRjY0mUZKXnag4NDQWpiDsysFQF0e7Dsce.png"
            ],
            [
                "judul_karya"       => "Human Machine Intellegence",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Esra Jan",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/iXAuK6VzuDgVeNnVofy3CgT5C1MTtW16KyUYUgdV.png"
            ],
            [
                "judul_karya"       => "Problematic",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Muhammad Tegar Pangestu",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/9uWjtV8jVC23acajnBzsN0rkyRG96kg55sXv4zG6.png"
            ],
            [
                "judul_karya"       => "The Future Life",
                "deskripsi"         => "no description.",
                "tahun"             => "2023",
                "author"            => "Ganang Prioyudis Tyo Anggoro",
                "link_portofolio"   => "",
                "gambar"            => "image/beranda/section4/XJqFeB0uvBJ4olXTCwen73xSOSZUVvrAcxPqnEPU.png"
            ],
        ];
        $dataSection5 = [
            [
                "judul"             => "Post Human Exhibition 2023",
                "thumbnail"         => "image/events/thumbnail/UxqrkkyFgujLeNG0GbflTZbsezPpFWZo7SMVNGg1.png",
                "bodytext"          => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                <img data-filename="news-2338.jpeg" style="width: 50%;" src="/storage/image/events/16956588080.png">
                </p><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                Post Human #2 merupakan event tahunan Prodi DKV ITTP yang berupa pameran poster internasional yang bergerak di bidang Visual Art &amp; Design. Tujuan dari acara ini adalah untuk menumbuhkan ruang belajar bersama bagi mahasiswa, dosen maupun artist yg terlibat dalam menyelenggarakan event pameran dan juga sebagai ajang kreatifitas bagi kreator, desainer, dan akademisi dalam ranah industri kreatif. Partisipan yang terlibat terdiri dari 20 negara dan 160 artist.
                </p><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                Selain diselenggarakan di Galeri Satria IT Telkom Purwokerto, Post Human #2 juga digelar di Hetero Space Banyumas. Dua tempat tersebut menjadi pilihan penyelenggaraan event pameran dikarenakan tempat yang representatif dan lokasi yang sangat strategis di pusat kota.
                </p><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                &acirc;&#128;&#156;Space Hetero sangat luas, sehingga mempermudah panitia dalam menyeting dan ploting tempat. Fasilitas sangat memadai, pelayanan sangat baik, ramah dan interaktif serta komunikatif, suasanya sangat nyaman&acirc;&#128;&#157; jelas salah satu panitia.
                </p><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                Pameran hari pertama (30/01/2023) dimulai Pukul 10.00 WIB-18.00 WIB dengan peserta yang hadir lebih dari 200 orang.
                </p><p style="margin-right: 0px; margin-left: 0px; color: rgb(102, 102, 102); font-family: \'Open Sans\', sans-serif;">
                Gelaran pameran ini diharapkan dapat menjadi media pembacaan terhadap kondisi sosial atau perubahan social yg hadir di masyarakat. Mulai dari kritik sosial sampai ungkapan harapan bagi kehidupan manusia yg lebih baik.
                </p></body></html>'
            ],
            [
                "judul"             => "Pameran Seni AURORA #6 Kembali Digelar di IT Telkom Purwokerto",
                "thumbnail"         => "image/events/thumbnail/0juHlAhde5oo6y8IVrd0AlNdpGT62p06qTvYPlPm.jpg",
                "bodytext"          => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><p style="margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;"><img data-filename="Bitmap (2).jpg" style="width: 25%;" src="/storage/image/events/16956601160.png"></p><p style="margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;">Himpunan Mahasiswa (HIMA) Desain Komunikasi Visual (DKV) IT Telkom Purwokerto gelar pembukaan AURORA edisi ke #6 yang mengangkat tema &acirc;&#128;&#156;The Soul of Creativity in Diversity&acirc;&#128;&#157;, Senin (17/10) kemarin.&nbsp;</p><p style="margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;">Sesuai dengan temanya, AURORA #6 membicarakan tentang bagaimana mengekspresikan karya dengan kebebasan, sehingga tidak ada batasan untuk karya yang dipamerkan. Meningkat dari tahun sebelumnya, AURORA #6 berhasil menampilkan sebanyak 66 karya terbaik mahasiswa hasil seleksi oleh dosen maupun&nbsp;<em>open submission</em>.</p></body></html>'
            ],
            [
                "judul"             => "Peken Banyumasan Edisi Mrapat 6",
                "thumbnail"         => "image/events/thumbnail/aXz3CzLiYXEKQ6jPfEfGFK7Yx7OtnKMMo8JxZgwI.jpg",
                "bodytext"          => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><p style="margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;"><img data-filename="Bitmap (12).jpg" style="width: 50%;" src="/storage/image/events/16956605550.png"><br>Peken Banyumasan Edisi Mrapat 6 Garapan DKV IT Telkom Purwokerto tampak berbeda dari sebelumnya. Acara yang diadakan pada (18/6) ini menghadirkan inovasi baru, yaitu Program Banyumas Culinary Taste.</p><p style="margin-bottom: 1rem; margin-block: 0px 0.9rem; color: rgb(26, 26, 26); font-family: poppins, Verdana, sans-serif; font-size: 16px;">Banyumas Culinary Taste sendiri merupakan program yang menyajikan berbagai sajian kuliner khas Banyumas, sekaligus sebagai jawaban dari rasa penasaran dan permintaan para pengunjung sebelumnya yang merasa rindu dengan makanan khas dan cita rasanya yang sudah semakin langka.&nbsp;</p></body></html>'
            ],
        ];
        $dataSection6 = [
            [
                "headline"             => "Mahasiswa DKV Meraih Juara 1 Gemastik",
                "subheadline"          => "Mahasiswa DKV Meraih Juara 1 Gemastik",
                "thumbnail"            => "image/events/thumbnail/aqMLPrQyjwdTHMljHqaxlLB81r32feWLrH4M76du.jpg",
                "bodytext"          => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">'
                . '<html><body><span style=\'color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; text-align: justify;\'>'
                . '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
                . 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
                . 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '
                . 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></body></html>'
            ],
        ];
        $dataSection7 = [
            [
                "headline"  => "Wujudkan Mimpimu dengan Menjadi Mahasiswa ITTP",
                "isi"       => "Institut Teknologi Telkom Purwokerto menawarkan peluang pendidikan berkualitas dengan lingkungan inspiratif dan fasilitas modern. Dosen berpengalaman akan membimbing kamu meraih prestasi gemilang serta mengembangkan potensi. Bergabunglah untuk mengasah keterampilan sosial dan kepemimpinan dalam komunitas yang mendorong kesuksesan di masa depan.",
                "action_link"  => "https://pmb.ittelkom-pwt.ac.id",
                "action_label"  => "Daftar Sekarang",
                "gambar"        => "images/dkv/join.jpg",
                "default"   => 1
            ]
        ];
        
        foreach($dataSection1 as $key => $val){ BerandaHero::create($val); }
        foreach($dataSection2 as $key => $val){ BerandaVideoSection::create($val); }
        foreach($dataSection3 as $key => $val){ KenapaHarusDkv::create($val); }
        foreach($dataSection4 as $key => $val){ Karya::create($val); }
        foreach($dataSection5 as $key => $val){ Event::create($val); }
        foreach($dataSection6 as $key => $val){ Berita::create($val); }
        foreach($dataSection7 as $key => $val){ Penawaran::create($val); }
    }
}
