<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Alumni;
use App\Models\Visimisi;
use App\Models\Fasilitas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dosens = [
            [
                "nama"      => "Arsita Pinandita, S.Sn., M.Sn",
                "jabatan"   => "",
                "email"     => "arsita@ittelkom-pwt.ac.id",
                "instagram" => "@arsita_pinandita",
                "foto"      => "dito.jpg",
                "tentang"   => "Selain sebagai ketua program studi di DKV IT Telkom Purwokerto ia juga aktif dalam beberapa agenda kreatif di luar kampus. Beberapa diantaranya ialah menjadi kurator untuk pameran international ‘Nandur Srawung’ (2018-sekarang), Taman Budaya Yogyakarta.  Creative Director ‘Hari Olah Raga Nasional”, Kemenpora R1 (2016-2018). Kurator pameran In Absurdum-Jogja Bandung, Djarum Coklat.com (2022-2023). Kurator ‘Collective Collegia’ Stone & Water, Korea (2022). Kurator pameran Beda ‘Segaris Art Center’, Malaysia (2019). Project Director Pameran perupa muda, Festival Kesenian Yogyakarta (2015-2018). Selain itu juga aktif menjadi juri & pemateri diantaranya; Pembicara seminar nasional ‘Inovasi dalam penciptaan seni’, UNESA Surabaya (2022). Juri Lomba Poster Nasional, UMP (2022). Pembicara Diskusi ‘MISINFORMATION’, Indonesia-Jerman, HONF (2021). Juri ADuin - Creative Advertising Festival Indonesia, UIN SUKA (2016-2022). Telah menulis beberapa buku & Zine, diantaranya; buku visual ‘Punk’ Fesyen, Subkultur dan Identitas’ (Halilintar Books) dan Rasa-rasa Emosional Desainer grafis (Bakbuk). 
                "
            ],
            [
                "nama"      => "Riri Irma Suryani, S.Sn., M.Sn",
                "jabatan"   => "",
                "email"     => "riri@ittelkom-pwt.ac.id",
                "instagram" => "@riri_irma_s",
                "foto"      => "riri.jpg",
                "tentang"   => "Merupakan dosen sekaligus Sekretaris Prodi DKV ITTP. Selain aktif secara akademisi, Riri juga aktif dalam industri perfilman. Beberapa kali diundang sebagai narasumber praktisi film dan juga menjadi juri Lomba, seperti Juri Lomba Video bertemakan teknologi tingkat Nasional yang diadakan oleh Universitas Pertamina (2022), Juri Lomba Video Company Profile tingkat SMK se-Kabupaten Banyumas (2022), dan lain-lain. Riri juga pernah terpilih sebagai Nominator Sutradara Perempuan terbaik dalam Jogja-NETPAC Asian Film Festival (JAFF) #17 Tahun 2022 dengan judul film dokumenter “Parsan The Legend of Rajawali”. Karya terakhirnya selain film Parsan, juga Film Omnibus dengan Judul “Don’t Just Shut Up” (2022) dan film Pendek “Demi Nama Baik?” (2022), 2 film ini bertemakan kekerasan seksual pada perempuan yang beberapa waktu lalu hangat dibicarakan media. Kedua film ini juga telah diputar dalam Ajang Internasional seperti Re:Karya International Video Festival. Selain konsen dalam dunia film, Riri juga beberapa kali mengikuti Pameran Internasional dalam bidang desain poster, seperti karya poster “Let’s Let & Enjoy” (2022)  yang dipamerkan pada Collective Exhibition Korea Selatan dan karya poster “Live in Pixel” (2022) yang dipamerkan pada International Poster Exhibition. Dalam bidang Tri Dharma, sebagai dosen Riri juga telah melakukan Pengabdian ke masyarakat seperti menjadi narasumber dalam “Pelatihan Pengembangan Media KIE dalam bentuk Video” tingkat nasional yang diselenggarakan oleh UPT Balai diklat Banyumas (2022), Pelatihan “Pembuatan Media ajar yang menarik” dengan peserta guru-guru yang tergabung dalam HIMPAUDI Banyumas (2022), dan lain-lain. Masih dalam lingkup Tri Dharma, Riri juga pernah menerima Hibah Pendanaan Penelitian baik dari Kemendikbud (2022), Internal ITTP (2022) dan Matching Fund Kedai Reka sebagai Ketua Peneliti (2023).
                "
            ],
            [
                "nama"      => "Elianna Gerda Pertiwi, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "elianna@ittelkom-pwt.ac.id",
                "instagram" => "",
                "foto"      => "gerda.jpg",
                "tentang"   => "Merupakan dosen lulusan Magister Pengkajian dan Penciptaan Seni ISI Yogyakarta yang kini aktif mengajar di prodi DKV ITTP. Kompetensi pada bidang desain dan memiliki Roadmap Penelitian jangka panjang pada topik rumah adat tradisional Indonesia. Selain Sebagai dosen, Gerda juga pernah menduduki beberapa jabatan struktural sebagai Sekretaris Prodi DKV dan kini menjadi Wakil Dekan Fakultas Rekayasa Industri dan Desain. Beberapa kali berhasil meraih pendanaan hibah penelitian baik sebagai ketua maupun anggota. Pendanaan yang berhasil diraih diantaranya adalah Hibah Penelitian Dosen Pemula Kementerian Pendidikan dan Kebudayaan, Program Pendampingan SMK Pusat Keunggulan Kemendikbud Ristek,  Program Pembelajaran Daring Kolaboratif oleh Kementerian Pendidikan dan Kebudayaan yang berkolaborasi dengan Universitas Bumigora Nusa Tenggara Barat. 
                "
            ],
            [
                "nama"      => "Luqman Wahyudi, S.Sn., M.Sn",
                "jabatan"   => "",
                "email"     => "luqman@ittelkom-pwt.ac.id",
                "instagram" => "@antekwahyudi",
                "foto"      => "luqman.jpg",
                "tentang"   => "Luqman Wahyudi merupakan pengajar aktif di IT Telkom Purwokerto yang berasal Solo, Jawa Tengah. Selain sebagai dosen, Luqman aktif sebagai freelance designer sejak 2013. Memiliki fokus keahlian dan riset pada visual identity / logo design. Beberapa tahun terakhir ikut berpartisipasi dalam visual exhibition seperti Post Human Exhibition (2022, 2023), dan Ampersand International Logo Exhibition (2022). Beberapa portofolio dapat diakses di instagram @antekwahyudi.
                "
            ],
            [
                "nama"      => "Alfiandi Eka Kusuma, S.Sn., M.Sn",
                "jabatan"   => "",
                "email"     => "alfiandi@ittelkom-pwt.ac.id",
                "instagram" => "@alfiandikid",
                "foto"      => "alfiandi.jpg",
                "tentang"   => "Selain aktif mengajar, ia juga aktif sebagai ilustrator lepas mengerjakan project-project ilustrasi t-shirt dan album untuk beberapa band serta brand internasional. Beberapa band yang pernah berkolaborasi diantaranya Inter Arma, Bort, Demonauta, dan Regicide. Dimana sebagian besar band tersebut beraliran metal. Brand yang pernah berkolaborasi diantaranya Central Standard Brewing, Source Coffee, dan Zenith Climbing co. Portofolio karyanya dapat diakses melalui profil Instagram pribadinya @alfiandikid.
                "
            ],
            [
                "nama"      => "Gilang Ramadhan, S.Sn., M.Sn",
                "jabatan"   => "",
                "email"     => "gilang@ittelkom-pwt.ac.id",
                "instagram" => "",
                "foto"      => "gram.jpg",
                "tentang"   => "Selain menjadi Dosen aktif di IT Telkom Purwokerto,  Dosen satu ini senang mengembangkan komunitas yang berkolaborasi dengan budaya daerah. Komunitas yang dikemas secara kreatif dalam berbagai bentuk event ini, mampu menciptakan sesuatu yang baru untuk Banyumas. Terdapat 10 program yang telah diciptakan dan dikembangkan sehingga dapat beroperasi dengan baik di wilayah Banyumas. Kemudian 3 program terpopuler diantaranya seperti: 
                    1. ‘Peken Banyumasan’ yang mengangkat history & budaya luhur Banyumas supaya tidak punah yang terletak di kawasan Banyumas Kota Lama (Bale Adipati Mrapat). 
                    2. ‘Biorama’ merupakan ruang bertemu dari para artisan lokal Komunitas Organik yang berlokasi di Hetero Space, yang termasuk Bangunan Cagar Budaya (Gedung Karesidenan sejak tahun 1939).  
                    3. ‘Soetedja Maker Fest’ memberikan ruang bagi para Makers untuk memperkenalkan proses dibalik Karya dan sarana bertukar ide yang berlokasi di Pasar Manis (Ex-Gedung Kesenian Soetedja). Yang menjadi Creative Hub para aktor kreatif kesenian berkumpul pada tahun 1970
                    
                "
            ],
            [
                "nama"      => "Adnan Setyoko, S.Pd., M.Pd.",
                "jabatan"   => "",
                "email"     => "adnan@ittelkom-pwt.ac.id",
                "instagram" => "@adnansetyoko",
                "foto"      => "adnan.jpg",
                "tentang"   => "Adnan setyoko berasal dari Semarang, saat ini bekerja sebagai dosen di Institut Teknologi Telkom Purwokerto (ITTP). Selain sebagai dosen, beliau juga aktif sebagai ilustrator dan desainer grafis untuk produk merchandise. Dia menyukai semua bagian dari proses kreatif dan mempelajari keterampilan baru. Adnan saat ini tinggal dan bekerja di Purwokerto – Indonesia. Beberapa projek pribadinya dapat diakses melalui portal berikut https://linktr.ee/adnansetyoko
                "
            ],
            [
                "nama"      => "Aditya Tama Isdiarto S.Sn, M.Sn.",
                "jabatan"   => "",
                "email"     => "aditya.tama@ittelkom-pwt.ac.id",
                "instagram" => "@adit505",
                "foto"      => "nn.jpg",
                "tentang"   => "Selain menjadi pemimpi paruh waktu, Aditya Tama Isdiarto membagikan literasinya yang berfokus pada Audio Visual. Terkadang beliau juga mengisi waktu luangnya untuk kerja riset media alternatif secara personal dan akhir pekannya disibukan dengan kerja-kerja skema kolektif musik dan bandnya yang berada di Yogyakarta. Sosok yang suka mengoleksi CD sebagai arsip musik independen nasional ini juga tergabung dalam AV Node (AV Node merupakan jaringan internasional database seniman dan organisasi profesional yang berfokus pada pertunjukan seni Audio Visual). Beberapa proyek yang pernah dikerjakan adalah AV archives Japan Foundation dengan isu kerentanan masyarakat pesisir pantai selatan pulau Jawa dengan bencana Tsunami serta membuat peta 3D jalur evakuasi dengan melihat kontur tanah di 2019, Visual Jockey Jogja Noise Bombing Festival 2019 & 2020, ARKO art & Tech Festival Seoul, Korea Selatan sebagai Augmented Reality artist bersama dengan Honf Lab 2022,  Komisi AR artist merespon fasad kolektif grafis Krack! Pameran Internasional Nandur Srawung #9 Yogyakarta 2022.

                "
            ],
            [
                "nama"      => "Ajeng Tita Negoro, S.Pd., M.Sn.",
                "jabatan"   => "",
                "email"     => "ajeng.tita@ittelkom-pwt.ac.id",
                "instagram" => "@a.tita.n",
                "foto"      => "ajeng.jpg",
                "tentang"   => "Deskripsi kegiatan/prestasi: Ajeng Tita Negoro, yang kerap dipanggil Tita berasal dari Samarinda, Kalimantan Timur. Saat ini menjadi tenaga pengajar aktif di IT Telkom Purwokerto Prodi Desain Komunikasi Visual. Selain mengajar Tita juga menjadi illustrator lepas dan juri lomba. Karya-karyanya banyak berfokus pada illustrasi dan komik, salah satunya yang dapat diakses yaitu Komik “Cemeng” di Webtoon. Beberapa penghargaan yang juga pernah diraih diantaranya:
                    Juara 5 - International Children’s Painting Competition for the Environment ke 19, Region Asia-Pacific, yang diselenggarakan oleh UNEP tahun 2011.  
                    Juara 3 - Lomba Komik Strip PEKSIMINAS (Pekan Seni Mahasiswa Nasional) XIV D.I.Yogyakarta, yang diselenggarakan oleh Kementerian Riset, Teknologi dan Pendidikan Tinggi tahun 2018.
                    Juara 1 - Lomba Komik Strip PEKSIMIDA (Pekan Seni Mahasiswa Daerah) XIV D.I.Yogyakarta, yang diselenggarakan oleh Badan Pembina Seni Mahasiswa Indonesia D.I.Y tahun 2018.
                    Juara 1 - Lomba Komik Strip PEKSIMIDA (Pekan Seni Mahasiswa Daerah) XIII D.I.Yogyakarta, yang diselenggarakan oleh Badan Pembina Seni Mahasiswa Indonesia D.I.Y tahun 2016.
                    Juara 1 - Lomba Desain Grafis HUT ke-71 Skadron 2 AU Halim Perdanakusuma yang diselenggarakan oleh Skadron 2 Angkatan Udara Halim Perdanakusuma tahun 2021.
                    Juara Favorit - Lomba Komik 1000 Hari Mas Hasmi (creator Gundala Putra Petir) tahun 2019.
                    "
            ],
            [
                "nama"      => "Bachrul Restu Bagja, S.Pd., M.Sn.",
                "jabatan"   => "",
                "email"     => "bachrul@ittelkom-pwt.ac.id",
                "instagram" => "@bachrulbach",
                "foto"      => "bachrul.jpg",
                "tentang"   => "Bachrul Restu Bagja berasal dari salah satu kecamatan di kabupaten Majalengka, Jawa Barat. Seorang yang aktif sebagai tenaga pendidik, pekerja lepas pada bidang desain grafis serta terlibat dalam sebuah kolektif seni di Bandung dengan kegiatannya, yaitu pameran seni di ruang publik, diskusi seputar seni dan/atau pergerakan lain yang beririsan. Selain itu, Bachrul aktif mengikuti pameran seni rupa serta terlibat dalam beberapa projek seni dan projek penelitian yang beririsan dengan bidang keilmuan Seni Rupa dan Desain.
                "
            ],
            [
                "nama"      => "Galih Putra Pamungkas, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "galih@ittelkom-pwt.ac.id",
                "instagram" => "@galihcokrowardoyo",
                "foto"      => "galih.jpg",
                "tentang"   => "Deskripsi kegiatan/prestasi: Galih adalah tenaga pengajar di Prodi DKV ITTP sejak 2019. Saat ini Galih juga sebagai Ketua Kelompok Keahlian Media Kreatif dan Periklanan ITTP. Beberapa tahun belakangan ini, Galih beberapa kali mendapatkan pendanaan hibah dengan topik pengembangan ekosistem kreatif sebuah wilayah. Selain itu Galih juga aktif sebagai editor / reviewer Jurnal ilmiah serta chair conference ilmiah international.
                "
            ],
            [
                "nama"      => "Gladi Pawestri Utami, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "gladi@ittelkom-pwt.ac.id",
                "instagram" => "@gladipawestri",
                "foto"      => "gladi.jpg",
                "tentang"   => "Deskripsi kegiatan/prestasi: Gladi Pawestri Utami yang akrab dipanggil Gladi merupakan Ibu anak satu yang selain menjadi Dosen di Institut Teknologi Telkom Purwokerto Program Studi Desain Komunikasi Visual, juga berkegiatan mengelola bisnis keluarga di bidang FnB. Sehingga beberapa penelitiannya berkisar pada visual branding FnB. Gladi juga tertarik dan menyukai crafting kerajinan tangan dan merupakan founder Oh My Glad Craft. Beberapa kali mengikuti pameran poster internasional yang diadakan baik di dalam maupun di luar negeri.
                "
            ],
            [
                "nama"      => "Gusnita Linda, S.Sn., M.Hum.",
                "jabatan"   => "",
                "email"     => "gusnita@ittelkom-pwt.ac.id",
                "instagram" => "@lindagusnita",
                "foto"      => "linda.jpg",
                "tentang"   => "Selain menjadi dosen pada Prodi DKV IT Telkom Purwokerto, Gusnita Linda yang akrab disapa Linda menjadi Koordinator ASKARA: Jurnal Seni dan Desain, sekaligus Pembimbing Kelompok Riset Mahasiswa yang bernama Askara Creative Club. Linda juga  bertanggung jawab sebagai Gugus Humas dan Kerjasama Fakultas Rekayasa Industri dan Desain, IT Telkom Purwokerto. Selain aktif sebagai pengajar, Linda aktif sebagai supervisor peneliti di beberapa lembaga survei nasional, seperti CSIS dan Indoriset Konsultan. 
                Bersama Riri Irma Suryani, Linda terpilih sebagai Nominator Sutradara Perempuan terbaik dalam Jogja-NETPAC Asian Film Festival (JAFF) #17 Tahun 2022 dengan judul film dokumenter “Parsan The Legend of Rajawali”. Beberapa karya film dan audio visual Linda lainnya baik sebagai produser, di antaranya: Film Omnibus dengan Judul “Don’t Just Shut Up” (2022), film Pendek “Demi Nama Baik?” (2022), film “Menembus “Cakrawala” (2021), dan sutradara video “Gender Vertigo” (2022). Selain itu sebagai editor buku “Menatap yang Sehari-Hari” (2023), penulis pada buku “Seni Rupa Kontemporer di Indonesia: Anotasi Bibliografi IVAA 1973-2020, jilid 1 s.d 3” (2020), serta penulis buku “Demokrasi dan Pandemi: Bunga Rampai Pengetahuan Masyarakat Sipil di Indonesia” (2021). Secara khusus, minat penelitian Linda saat ini fokus pada seni visual, studi gender dan humaniora.
                "
            ],
            [
                "nama"      => "Ratih Alifah Putri, S.Ds., M.Ds",
                "jabatan"   => "",
                "email"     => "ratih.alifah@ittelkom-pwt.ac.id",
                "instagram" => "@ratihalifah",
                "foto"      => "ratih.jpg",
                "tentang"   => "Selain menjadi Dosen Animasi di IT Telkom Purwokerto, ia juga aktif dirumah dan diluar rumah. Ketika diluar rumah ia aktif sebagai Juri dan Praktisi penggiat event skala Nasional. Ibu beranak dua ini sering diundang sebagai juri di berbagai acara Instansi maupun pemerintahan. Salah satunya sebagai juri pada Lomba Mewarnai Anak-Anak dan juri Lomba Poster Digital tingkat Nasional pada Event yang diselenggarakan oleh Bank Indonesia Purwokerto dari tahun 2019 hingga saat ini. Kemudian pernah menjadi juri Lomba Mewarnai Anak-Anak dan juri Lomba Film Animasi Anak tingkat Nasional pada berbagai Event yang dilangsungkan oleh Otoritas Jasa Keuangan (OJK) Purwokerto. Selain menjadi juri, Ratih juga aktif menjadi praktisi dan penggiat berbagai event. Salah satu event yang pernah digarap seperti Virtual Event Festival UMKM & Ekonomi Syariah Bank Indonesia tahun 2020 dengan konsep event virtual pertama di Jawa Tengah dengan bintang tamu Fadly Padi Reborn  (ketika pandemi). Ia juga aktif sebagai praktisi dan juga ikut membantu dalam program branding desa serang kabupaten Purbalingga pada Festival Gunung Slamet (FGS) dalam rangka memperkenalkan budaya asli desa serang dalam skala Internasional dengan konsep Jazz diatas awan (kabut lembut) tahun 2019 dan tahun 2023.
                "
            ],
            [
                "nama"      => "Robert Hendra Yudianto, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "robert@ittelkom-pwt.ac.id",
                "instagram" => "@roberthendra",
                "foto"      => "robert.jpg",
                "tentang"   => "Sebagai dosen fotografi dan videografi serta menjadi praktisi fotografi dan juri nasional perlombaan fotografi. 
                "
            ],
            [
                "nama"      => "Yanuar Ikhsan Pamuji, S. Pd., M. Sn.",
                "jabatan"   => "",
                "email"     => "yanuar@ittelkom-pwt.ac.id",
                "instagram" => "@yanuartuyul",
                "foto"      => "yanuar.jpg",
                "tentang"   => "Deskripsi kegiatan/prestasi: aktif dalam dunia pameran seni rupa seperti :  underline” Redbase Gallery Sydney Australia.  “Collective Collegia” Stone & Water Gallery South Korea.   “Passion Of Three Kingdom” Redbase Gallery Sydney Australia.   “Hidup Berdampingan Dengan Musuh” Ciputra Artpreneur Jakarta.   “Manifesto VII : Pandemi” Galeri Nasional indonesia. Pernah mendapatkan penghargaan karya terbaik dalam ajang “Basoeki Abdullah Art Award #3” Museum Basoeki Abdullah. 
                "
            ],
            [
                "nama"      => "Achmad Sultoni, S.Pd., M.Pd.",
                "jabatan"   => "",
                "email"     => "sultoni@ittelkom-pwt.ac.id",
                "instagram" => "@a.su_ltoni",
                "foto"      => "sultoni.jpg",
                "tentang"   => "Ia merupakan dosen di Prodi DKV, Institut Teknologi Telkom Purwokerto. Saat ini sedang menyelesaikan Program Doktor Pendidikan Bahasa Indonesia, FKIP, Universitas Sebelas Maret, Surakarta.Ia menyelesaikan jenjang pendidikan S-1 di Program Studi Pendidikan Bahasa dan Sastra Indonesia, FKIP, Universitas Muhammadiyah Purwokerto; S-2 di Program Studi Pendidikan Bahasa Indonesia, FKIP, Universitas Sebelas Maret, Surakarta. Bebeberapa tulisannya berupa puisi, cerpen, dan esai pernah dimuat di media-media massa lokal dan nasional. Demikian halnya tulisan-tulisan ilmiah sudah terpublikasikan di berbagai jurnal dan konferensi bereputasi, baik nasional maupun internasional. Ia kerap menjadi pembicara dalam forum-forum akademik. Pernah menjadi juara 2 penulisan kreatif BKKBN Jateng 2013 dan juara 1 penulisan artikel opini 2016. Karya buku yang pernah ditulis di antaranya buku puisi anak Dongeng Pohon Pisang (2019); Buku puisi Selepas Musim Menjauh (2021);. Buku kumpulan esai Perjumpaan dan Percakapan: Sepilihan Esai-esai Sastra (2022); Buku Cerita Rakyat Banyumas Sumber Bacaan Berwawasan Ekologis (2023); dan Cerita Rakyat Berwawasan Ekologis: Teori dan Aplikasi Kajian Ekokritik (2023).
                "
            ],
            [
                "nama"      => "Ferdinanda, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "",
                "instagram" => "",
                "foto"      => "nn.jpg",
                "tentang"   => "Saat ini sedang melanjutkan Program Doktor di Institut Seni Indonesia Solo.
                "
            ],
            [
                "nama"      => "Nofrizaldi, S.Sn., M.Sn.",
                "jabatan"   => "",
                "email"     => "",
                "instagram" => "",
                "foto"      => "nn.jpg",
                "tentang"   => "Saat ini sedang melanjutkan Program Doktor di Institut Seni Indonesia Yogyakarta.
                "
            ],
        ];
        $visimisi = [
            [
                "visi"  => "Menjadi Program Studi Desain Komunikasi Visual berbasis Teknologi Informasi dan Komunikasi dalam mendukung bisnis industri kreatif pada sektor Healthcare, Agro Industry, Tourism dan Small Medium Enterprise dengan menghasilkan lulusan berkarakter dan berwawasan global.",
                "misi"  => "<ol>
                <li>Menyelenggarakan Pendidikan Desain Komunikasi Visual yang adaptif terhadap kebaruan teknologi informasi dan komunikasi.</li>
                <li>Melaksanakan penelitian di bidang industri kreatif yang bermanfaat bagi pengembangan ilmu pengetahuan dan teknologi.</li>
                <li>Menyelenggarakan pengabdian masyarakat yang relevan dan berkelanjutan.</li>
                 </ol>",
                "gambar" => "images/profile/104203041_FOTOKAMPUS_1617176874376.png"
            ]
        ];
        $alumni = [
            [
                "nama"      => "Mutia Putri Soliha",
                "status"    => "Character and Environtment Illustrator di Koff and Gold Studio",
                "quote"     => "",
                "gambar"    => "images/alumni/336514406_1937873806559314_5217981116728666124_n.jpg",      
            ],
            [
                "nama"      => "Aulia Nabila Fikra Ayu .L",
                "status"    => " Digital Communication di Syngenta Indonesia",
                "quote"     => "",
                "gambar"    => "images/foto_dosen/nn.jpg",      
            ],
            [
                "nama"      => "Umnia Afifah",
                "status"    => "Pattern and Fashion Illustrator di PT.Gagaclo",
                "quote"     => "",
                "gambar"    => "images/alumni/329820867_1591958457946618_7468688796556899521_n.jpg",      
            ],
            [
                "nama"      => "Baharudin",
                "status"    => " Creative Director di Sanskara Studio
                ",
                "quote"     => "",
                "gambar"    => "",      
            ],
        ];
        $fasilitas = [
            [
                "nama"      => "Laboratorium Komputer Grafis",
                "deskripsi" => "Laboratorium dilengkapi dengan 32 unit iMac",
                "gambar"    => "images/fasilitas/20221223_122908-300x225.jpg"
            ],
            [
                "nama"      => "Laboratorium Audio dan Visual",
                "deskripsi" => "Bengkel Desain sama dengan Studio AUVI dari segi fungsi untuk kegiatan praktikum berkaitan dengan mata kuliah praktek yang masuk dalam kurikulum prodi desain komunikasi visual. Laboratorium ini dikelola oleh kepala laboratorium dan dibantu tenaga laboran.",
                "gambar"    => "images/fasilitas/1J5A8407-300x226.jpg"
            ],
            [
                "nama"      => "Laboratorium Gambar",
                "deskripsi" => "Laboratorium gambar adalah tempat yang mendalam bagi seniman dan pelajar seni. Dengan meja gambar, pensil, cat air, dan alat seni tradisional lainnya, ruang ini memberikan lingkungan yang tenang untuk eksplorasi kreatif, pelatihan keterampilan seni visual, dan pengembangan ekspresi artistik tanpa gangguan teknologi. Ini adalah tempat di mana individu dapat fokus sepenuhnya pada proses menggambar",
                "gambar"    => "images/dkv/Bitmap.jpg"
            ],
            [
                "nama"      => "Bengkel DKV",
                "deskripsi" => "Bengkel DKV merupakan tempat di mana mahasiswa dapat berkreasi dan eksplorasi segala jenis bidang seni visual",
                "gambar"    => "images/fasilitas/1J5A8410-300x226.jpg"
            ],
            [
                "nama"      => "Galeri Seni (SATRIA)",
                "deskripsi" => "ITTP memiliki sebuah ruang pamer bernama Galeri Satria yang mulai berdiri pada tahun 2021. Bertempat di Gedung DSP Lantai 2, Galeri ini berfungsi untuk memamerkan dan menampilkan buah karya mahasiswa dan civitas akademika ITTP. Adapun karya yang ditampilkan berupa Desain, Grafis, Poster, Lukisan, Branding, Video Interaktif, dan lain sebagainya.",
                "gambar"    => "images/fasilitas/IMG_9960-300x200.jpg"
            ],
        ];
        foreach($dosens as $key => $val){ Dosen::create($val); }
        foreach($visimisi as $key => $val){ Visimisi::create($val); }
        foreach($alumni as $key => $val){ Alumni::create($val); }
        foreach($fasilitas as $key => $val){ Fasilitas::create($val); }
    }
}
