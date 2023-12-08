@extends('layout.main')
@section('section')
    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <div id="top"></div>

        <!-- section begin -->
        <section id="layanan_akademik" class="text-light jarallax">
            <img src="images/dkv/pattern.jpg" alt="" class="jarallax-img">
            <div class="center-y relative">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="spacer-double d-block d-sm-none d-md-block"></div>
                            <h1 class="big">{{ $layanan_akademik['headline'] }}</h1>
                            <div class="spacer-single"></div>
                            <a href="{{ $layanan_akademik['link'] }}" class="btn btn-lg btn-light text-dark"
                                style="border-radius:100px">Akses Layanan</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- section close -->
        <!-- section begin -->
        <section id="kurikulum" class="jarallax">
            <img src="images/dkv/pattern_5.jpg" alt="" class="jarallax-img">
            <h2 class="mb20 text-center text-light">Kurikulum <span>Mata Kuliah<span class="underline"></span></span> </h2>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-12">
                        {{-- TABS --}}
                        <div class="card text-dark">
                            <nav class="kurikulum-nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                        @php
                                            $num = $no++;
                                        @endphp
                                        <button class="nav-link @if ($num == 1) active @endif"
                                            id="nav-semester{{ $num }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-semester{{ $num }}" type="button" role="tab"
                                            aria-controls="nav-semester{{ $num }}" aria-selected="true">Semester
                                            {{ $num }}</button>
                                    @endfor
                                </div>
                            </nav>
                            <div class="tab-content text-left p-5" id="nav-tabContent">
                                @php
                                    $nos = 1;
                                @endphp
                                @foreach ($kurikulum as $matkul)
                                    @php
                                        $num = $nos++;
                                    @endphp
                                    <div class="tab-pane fade @if ($num == 1) show active @endif"
                                        id="nav-semester{{ $num }}" role="tabpanel"
                                        aria-labelledby="nav-semester{{ $num }}-tab">
                                        <table width="100%">
                                            <th>Nama Mata Kuliah</th>
                                            <th>Jumlah SKS</th>
                                            @foreach ($matkul as $data)
                                                <tr>
                                                    <td>{{ $data->mata_kuliah }}</td>
                                                    <td>{{ $data->sks }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- END TAB --}}
                        <div class="spacer-half"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            {{-- <div class="container" hidden>        
                <h2 class="mb20 text-center text-light">Kurikulum <span>Mata Kuliah<span class="underline"></span></span> </h2>        
                <div class="row sequence">                    
                @php
                    $no = 1;
                @endphp
                @for ($i = 0; $i < count($kurikulum); $i++)
                    @php
                        $num = $no++;
                    @endphp
                    <div class="col-md-3 p-2 sq-item wow">
                        <div class="card text-dark ">
                            <div class="card-body" style="height:350px">
                                <div class="row align-items-center text-center">
                                    <div class="col-md-12 p-3">
                                        <h3 class="mb20 mt-3 text-dark">Semester {{ $num }}</h3>
                                        <p>
                                            <ul class="list-matkul" style="padding-left:0px;list-style:none">
                                                @php
                                                    $listno = 1;
                                                @endphp
                                                @foreach ($kurikulum['semester' . $num] as $matkul)
                                                @php
                                                    $listnum = $listno++;
                                                @endphp
                                                <li class="@if ($listnum % 2 == 0) stripe @endif">{{ $matkul }}</li>
                                                @endforeach
                                            </ul>                                            
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                </div>
            </div> --}}
        </section>
        <!-- section close -->
        <!-- section begin -->
        <section id="mbkm" class="jarallax">
            <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">

            <div class="container">
                <div class="row bottom">
                    <div class="col-md-12">
                        <h2>MBKM</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                            <div class="col-md-4">    
                                <img alt="" src="images/blog/1.jpg" class="img-fullwidth">
                                <div class="spacer-single"></div>                                
                            </div>
    
                            <div class="col-md-8">
                                    <p>Kampus Merdeka adalah program pendidikan bagi pendidikan tinggi yang memberikan hak belajar (secara sukarela) kepada mahasiswa untuk mengambil SKS di luar program studinya sebanyak maksimal 3 semester.
                                    <br>
                                    Bentuk dan ruang lingkup hak belajar di luar program studi diantaranya adalah :
                                    <ul>
                                        <li>Mahasiswa dapat mengambil kesempatan belajar secara sukarela selama 1 semester pada program studi lain dalam perguruan tinggi yang sama.</li>
                                        <li>Mahasiswa dapat mengambil kesempatan belajar secara sukarela selama 1 semester diluar perguruan tinggi.</li>
                                    </p>
                            </div>
                    </div>
                    
                    <div class="row">
                            <div class="widget widget-post col-md-6">
                                <h4>Ketentuan Umum:</h4>
                                <div class="small-border"></div>
                                <ol>                                   
                                    
                                    <li>Setiap program studi di Institut Teknologi Telkom Purwokerto wajib menyediakan kurikulum pendidikan yang dapat memenuhi kebutuhan belajar bagi mahasiswa baik yang akan menyelesaikan seluruh studinya pada program studi tersebut atau menyelesaikan sebagian studinya di luar program studi.</li>
                                    <li>Setiap program studi di Institut Teknologi Telkom Purwokerto wajib memberikan kesempatan kepada mahasiswanya untuk belajar sedikitnya 1 semester dan maksimal 3 semester di luar program studi dengan ketentuan sebagai berikut : Mengambil kesempatan belajar di program studi lain maksimal 1 semester atau setara dengan 20 sks, Mengambil kesempatan belajar di luar kampus Institut Teknologi Telkom Purwokerto maksimal 2 semester atau setara dengan 40 sks.</li>
                                    <li>Perkuliahan dan kegiatan di luar program studi yang akan diambil oleh mahasiswa harus mendapat persetujuan dosen wali dan Ketua Program Studi.</li>
                                    <li>Perkuliahan dan kegiatan yang diambil oleh mahasiswa di luar program studi wajib memiliki dosen pendamping dari program studi asal.</li>
                                    <li>Institusi yang dijadikan tujuan belajar pada program pendidikan di luar program studi khususnya yang termaktub dalam pasal 2 ayat 2, harus memiliki MOU atau PKS dengan Institut Teknologi Telkom Purwokerto.</li>
                                    <li>Institusi yang dijadikan tujuan belajar pada program pendidikan di luar program studi khususnya yang termaktub dalam pasal 2 ayat 2, harus memiliki MOU atau PKS dengan Institut Teknologi Telkom Purwokerto.</li>
                                </ol>
                            </div>
    
                            <div class="widget widget-text col-md-6">
                                <h4>Pelaksanaan Kampus Merdeka</h4>
                                <div class="small-border"></div>
                                <ol >                
                                    <li>Mahasiswa yang akan mengambil kesempatan belajar di luar program studi wajib mengajukan permohonan satu semester sebelum pelaksanaan perkuliahan atau kegiatan</li>
                                    <li>Mahasiswa yang akan mengambil kesempatan belajar di luar program studi wajib mengajukan permohonan satu semester sebelum pelaksanaan perkuliahan atau kegiatan</li>
                                    <li>Mahasiswa yang akan mengambil kesempatan belajar di luar program studi wajib mengajukan permohonan satu semester sebelum pelaksanaan perkuliahan atau kegiatan</li>
                                    <li>Mahasiswa yang akan mengambil kesempatan belajar di luar program studi wajib mengajukan permohonan satu semester sebelum pelaksanaan perkuliahan atau kegiatan</li>                                    
                                </ol>
                                <h4>Jenis Kesempatan Belajar di Luar Program Studi</h4>
                                <div class="small-border"></div>
                                <ol >                
                                    <li>Pertukaran Pelajar</li>
                                    <li>Magang / Praktek Kerja</li>
                                    <li>Asistensi Mengajar di Satuan Pendidikan</li>
                                    <li>Penelitian / Riset</li>
                                    <li>Proyek Kemanusiaan</li>
                                    <li>Kegiatan Wirausaha</li>
                                    <li>Studi / Proyek Independen</li>
                                    <li>Membangun Desa / Kuliah Kerja Nyata Tematik</li>
                                    <li>Visiting Professor / Lecturer</li>                              
                                </ol>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="widget widget-text col-md-6">
                                <h4>Persyaratan Umum Peserta Program Kampus Merdeka</h4>
                                <div class="small-border"></div>
                                Persyaratan Umum Peserta Program Kampus Merdeka:
                                <ol >                
                                    <li>Mahasiswa adalah mahasiswa aktif dibuktikan dengan Kartu Studi Mahasiswa (KSM).</li>
                                    <li>Mahasiswa peserta adalah merupakan mahasiswa reguler (bukan mahasiswa alih jenjang, dan program lainnya) pada program studi Strata 1.</li>
                                    <li>Mahasiswa mengajukan program kampus merdeka dengan membuat proposal yang disetujui oleh dosen wali dan ketua program studi.</li>
                                    <li>Mahasiswa wajib mengikuti proses evaluasi / seleksi program kampus merdeka.</li>
                                    <li>Mahasiswa mendapatkan SK pelaksanaan program kampus merdeka yang memuat diantaranya bentuk / jenis program yang diambil, durasi / periode waktu pelaksanaan, materi belajar / mata kuliah ekuivalensi yang diambil, dan dosen pendamping.</li>                           
                                </ol>
                                <br>
                                
                            </div>    
                            <div class="widget widget-text col-md-6">
                                <h4>Persyaratan Khusus Peserta Program Kampus Merdeka</h4>
                                <div class="small-border"></div>
                                Persyaratan Khusus Peserta Program Kampus Merdeka:
                                <ol >                
                                    <li>Mahasiswa telah lulus dari sedikitnya 84 sks pada program studi asal, yaitu tidak ada nilai E dan mendapatkan nilai minimal C untuk mata kuliah Agama, Bahasa Indonesia, Kewarganegaraan (Pancasila), dan mata kuliah praktikum.</li>
                                    <li>Perkuliahan atau kegiatan kampus merdeka dapat mulai dilaksanakan saat semester 6.</li>
                                    <li>Pendaftar kampus merdeka memiliki IPK >= 2,75.</li>
                                    <li>Mahasiswa yang mengajukan pendaftaran program kampus merdeka wajib melampirkan surat keterangan sehat dan bebas narkoba dari rumah sakit yang masih berlaku.</li>
                                    <li>Peserta program wajib memenuhi ketentuan lain baik yang ditetapkan oleh fakultas maupun pihak institusi tujuan.</li>           
                                </ol>
                            </div>    

                        </div>
                </div>



            </div>
    </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="kuliah_umum" class="jarallax">
        <img src="images/dkv/pattern_3.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color"></h4>
            <h2 class="text-light">Kuliah Umum</h2>
        </div>
        <div class="container">

            <div class="row text-light sequence">
            @foreach ($kuliahumum as $data)
            <div class="col-md-4 mb30 sq-item wow sq-item wow">
                <div class="picframe wow mb20">
                    <a href="blog-single.html">
                        <span class="overlay">
                            <span class="title">
                                <span>Baca Selengkapnya</span>
                            </span>
                        </span>
                        <img src="{{ $data->gambar }}" class="wow" alt="" />
                    </a>
                </div>
                {{--
                <div class="post-item s1 item">
                    <div class="date-box">
                        <div class="m"></div>
                        <div class="d">JUN</div>
                    </div>

                    <div class="post-content">
                        <div class="post-text">
                            <h3><a href="blog-single.html" class="text-light">{{ $data->tema }}</a></h3>
                            <p>@php echo substr($data->deskripsi,0,100); @endphp</p>
                        </div>
                    </div>
                </div>
                --}}
            </div>
            @endforeach
        </div>
            <div class="spacer-half"></div>
            <div class="col-md-12 text-center mt-5 mb-5">
                <a href="#section-portfolio" class="btn-custom scroll-to btn-lg">Selengkapnya ></a>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="pengmas" aria-label="section-portfolio" class="top no-bottom jarallax">
        <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color">Social Project</h4>
            <h2>Pengabdian Masyarakat</h2>
        </div>
        <div class="container">
            <div class="row gallery-wrap sequence_pf mb-5">
                @for ($i = 0; $i < 8; $i++)
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 col-xs-6 sq-item mb-3">
                        <div class="picframe wow">
                            <div class="pf-click" data-value="project-details-image.html">
                                <span class="overlay">
                                    <span class="title">
                                        <span>Single Image</span>
                                    </span>
                                </span>
                                <img src="images/gallery/a.webp" class="wow" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- close gallery item -->
                @endfor
                <div class="spacer-half"></div>
                <div class="col-md-12 text-center mt-5 mb-5">
                    <a href="#section-portfolio" class="btn-custom scroll-to btn-lg">Selengkapnya ></a>
                </div>


            </div>
        </div>
    </section>
    <!-- section close -->

    <div id="loader-area" data-bgcolor="#fafafa">
        <div class="container">
            <div class="project-load"></div>
        </div>
    </div>

    <!-- section begin -->
    <section id="tugas_akhir" class="jarallax">
        <img src="images/dkv/pattern_3.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color">Sidang</h4>
            <h2 class="text-light">Tugas Akhir</h2>
        </div>
        <div class="container">

            <div class="row text-light sequence">

                <div class="col-md-4 mb30 sq-item wow sq-item wow">
                    <div class="picframe wow mb20">
                        <a href="blog-single.html">
                            <span class="overlay">
                                <span class="title">
                                    <span>Read this article</span>
                                </span>
                            </span>
                            <img src="images/dkv/Bitmap (1).jpg" class="wow" alt="" />
                        </a>
                    </div>

                    <div class="post-item s1 item">
                        <div class="date-box">
                            <div class="m">22</div>
                            <div class="d">JUN</div>
                        </div>

                        <div class="post-content">
                            <div class="post-text">
                                <h3><a href="blog-single.html" class="text-light">Make Better User Interface</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb30 sq-item wow sq-item wow">
                    <div class="picframe wow mb20">
                        <a href="blog-single.html">
                            <span class="overlay">
                                <span class="title">
                                    <span>Read this article</span>
                                </span>
                            </span>
                            <img src="images/dkv/Bitmap (2).jpg" class="wow" alt="" />
                        </a>
                    </div>

                    <div class="post-item s1 item">
                        <div class="date-box">
                            <div class="m">22</div>
                            <div class="d">JUN</div>
                        </div>

                        <div class="post-content">
                            <div class="post-text">
                                <h3><a href="blog-single.html" class="text-light">Make Better User Interface</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb30 sq-item wow sq-item wow">
                    <div class="picframe wow mb20">
                        <a href="blog-single.html">
                            <span class="overlay">
                                <span class="title">
                                    <span>Read this article</span>
                                </span>
                            </span>
                            <img src="images/dkv/Bitmap (7).jpg" class="wow" alt="" />
                        </a>
                    </div>

                    <div class="post-item s1 item">
                        <div class="date-box">
                            <div class="m">22</div>
                            <div class="d">JUN</div>
                        </div>

                        <div class="post-content">
                            <div class="post-text">
                                <h3><a href="blog-single.html" class="text-light">Make Better User Interface</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="spacer-half"></div>
            <div class="col-md-12 text-center mt-5 mb-5">
                <a href="#section-portfolio" class="btn-custom scroll-to btn-lg">Lihat Event Lain ></a>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="kerja_praktek" class="jarallax">
        <img src="images/dkv/pattern_4.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color"></h4>
            <h2>Kerja Praktek</h2>
        </div>
        <div class="container">

            <div class="col-md-12">
                <div class="row sequence">
                    <div class="col-md-4 sq-item wow p-2">
                        <div class="card card-round p-1">
                            <div class="card-body">
                                <div class=" mb30 sq-item">
                                    <div class="picframe mb20">
                                        <a href="blog-single.html">
                                            <span class="overlay">
                                                <span class="title">
                                                    <span>Read this article</span>
                                                </span>
                                            </span>
                                            <img src="images/blog/4.jpg" class="wow" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-item s1 item">
                                        <div class="date-box">
                                            <div class="m">22</div>
                                            <div class="d">JUN</div>
                                        </div>

                                        <div class="post-content">
                                            <div class="post-text">
                                                <h3><a href="blog-single.html">Make Better User Interface</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sq-item wow p-2">
                        <div class="card card-round p-1">
                            <div class="card-body">
                                <div class=" mb30 sq-item">
                                    <div class="picframe mb20">
                                        <a href="blog-single.html">
                                            <span class="overlay">
                                                <span class="title">
                                                    <span>Read this article</span>
                                                </span>
                                            </span>
                                            <img src="images/blog/4.jpg" class="wow" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-item s1 item">
                                        <div class="date-box">
                                            <div class="m">22</div>
                                            <div class="d">JUN</div>
                                        </div>

                                        <div class="post-content">
                                            <div class="post-text">
                                                <h3><a href="blog-single.html">Make Better User Interface</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 sq-item wow p-2">
                        <div class="card card-round p-1">
                            <div class="card-body">
                                <div class=" mb30 sq-item">
                                    <div class="picframe mb20">
                                        <a href="blog-single.html">
                                            <span class="overlay">
                                                <span class="title">
                                                    <span>Read this article</span>
                                                </span>
                                            </span>
                                            <img src="images/blog/4.jpg" class="wow" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-item s1 item">
                                        <div class="date-box">
                                            <div class="m">22</div>
                                            <div class="d">JUN</div>
                                        </div>

                                        <div class="post-content">
                                            <div class="post-text">
                                                <h3><a href="blog-single.html">Make Better User Interface</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-half"></div>
            <div class="col-md-12 text-center mt-5 mb-5">
                <a href="#section-portfolio" class="btn-custom scroll-to btn-lg">Lihat Berita Lain ></a>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="section-clients" aria-label="section" class="pt60 pb40 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp align-items-center">
                    <div class="owl-carousel owl-sponsors gray">
                        <div class="item"><img src="images/logo/telkom.png" alt=""></div>
                        <div class="item"><img src="images/logo/Logo_Yayasan_Pendidikan_Telkom.png" alt="">
                        </div>
                        <div class="item"><img src="images/logo/LOGO-ITTP-Tagline-1.png" alt=""></div>
                        <div class="item"><img src="images/logo/frid_logo.png" alt=""></div>
                        <div class="item"><img src="images/logo/askara_logo.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    </div>
@endsection
