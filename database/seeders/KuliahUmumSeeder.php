<?php

namespace Database\Seeders;

use App\Models\KuliahUmum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KuliahUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $kuliahUmum = [
            [
                "pembicara"      => "Hanes dan Gilang",
                "moderator" => "",
                "tema"  => "Video Maping dan Video Jokey",
                "deskripsi" => "Acara talk show tntg Video Mapping. / Video mapping adalah teknik seni visual dgn pendekatan video / motion graphic yg di proyeksikan untuk menciptakan ilusi optic pada objek. Pembicara video mapping kali ini adalah yg mengerjakan video mapping Asean games 2018 di Monas dan pernah mewakili Indonesia di festival video mapping dunia di Rusia.",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/75352162_216105679387808_7304766995438592142_n.jpg",
            ],
            [
                "pembicara"      => "Luqman Hidayat",
                "moderator" => "",
                "tema"  => "Creative Sharing: Font Dalam Kehidupan ",
                "deskripsi" => "Creative Sharing Font dalam Kehidupan memberikan pandangan alternatif terhadap aplikasi desain tulisan pada berbagai media. Lukman Hidayat memberikan gambaran bahwa tipografi memiliki makna serta fungsi yang luas. Apa lagi hal sederhana ini dapat membantu banyak kegiatan dan aktivitas seluruh kehidupan manusia.",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/145091872_2901219846868609_800046148206095762_n.jpg",
            ],
            [
                "pembicara"      => "Muklay dan Satriadi ",
                "moderator" => "",
                "tema"  => "Tantangan Branding Visual di Era Pandemi",
                "deskripsi" => "",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/163237654_748454979151234_7808856988305635512_n.jpg",
            ],
            [
                "pembicara"      => "Ipung Kurniawan",
                "moderator" => "",
                "tema"  => "Implementasi Konsep (Accetable + Relevance) sebagai Pendekatan Komunikasi Visual dalam Revitalisasi Kawasan Urban Jono Kampoeng Hepi",
                "deskripsi" => "Berbagai macam definisi yang lazim terdengar saat ini seperti; kampung wisata, village tourism, ecotourism merupakan pendekatan pengembangan kepariwisataan yang berupaya untuk menjamin agar wisata dapat dilaksanakan di daerah tujuan wisata bukan perkotaan. Dengan pendekatan desain komunikasi visual citra kampung tidak hanya berpusat pada ‘kunjungan wisata’ tapi kampung juga menjadi kegiatan yang melibatkan masyarakat sehingga mampu berdampak ekonomi yang membuat masyarakat setempat mengalami metamorphose dalam berbagai aspeknya. Untuk membicarakan lebih lanjut tentang proses kreatif dalam membangun komunikasi visual kampung wisata Prodi DKV ITTP mengadakan webinar dengan tema:*“Implemetasi konsep (Acceptable + Relevance) sebagai Pendekatan Komunikasi Visual dalam Revitalisasi Kawasan Urban Joho Kampoeng Hepi.”",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/196321648_4142633175804853_3141678964112779382_n.jpg",
            ],
            [
                "pembicara"      => "Aditya Febrian ",
                "moderator" => "",
                "tema"  => "Public Lecture: Visual Merchandising",
                "deskripsi" => "Display dan ruang telah mengkonsepsikan dirinya sebagai situs yang mampu mengarahkan pada tindakan konsumen, pengalaman, dan kesenangan. Dengan cara inilah hasil desain dari merchandising pada ruang konsumsen, membuatnya tampak menjadi solusi, pilihan, dan terobosan yang masuk akal dan tak dapat di hindarkan.",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/202275440_828316387805331_8915891323027600403_n.jpg",
            ],
            [
                "pembicara"      => "Misbachul Munir ",
                "moderator" => "",
                "tema"  => "Advertising Photography",
                "deskripsi" => "Strategi dalam menjual foto dalam microstock merupakan salah solusi ketika karya foto hanya diarsipkan di hard drive penyimpanan. Misbachul Munir memberikan cara bagaimana menyimpan foto dengan resolusi tinggi namun juga mendapatkan pendapatan pasif.  Beliau adalah salah satu orang yang aktif dan memiliki reputasi yang baik pada platform shutterstock. Tidak hanya itu, fotografi ternyata dapat digunakan sebagai media periklanan dan menjadikan sebuah lini bisnis yang cukup menghasilkan.",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/205482868_965261554307028_325027636446022803_n.jpg",
            ],
            [
                "pembicara"      => "Takuro Kotaka",
                "moderator" => "",
                "tema"  => "Proses Kreatif dalam Sinema",
                "deskripsi" => "TAKURO KOTAKA merupakan sutrada film dan seniman kontemporer yang berkarya secara lintas media. Karya-karyanya banyak mengangkat tema yang melekat pada narasi keseharian seperti mitos, rumor, simbol-simbol yang sudah mulai dilupakan dan disajikan dengan pendekatan humor, scient fiction dan fiksi/dokumenter.",
                "tanggal"   => null,
                "gambar"    => "images/kuliah_umum/243443384_279223324025294_4025955599924146214_n.jpg",
            ],
            

        ];
        foreach($kuliahUmum as $key=>$val)
        {
            KuliahUmum::create($val);
        }
    }
}
