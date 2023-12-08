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
                                <h1 class="big"></h1>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- section close -->
        <!-- section begin -->
        <section id="kurikulum" class="jarallax">
            <img src="images/dkv/pattern_5.jpg" alt="" class="jarallax-img">
            <div class="container" hidden>
                <div class="row align-items-center">

                    <div class="col-md-12" >
                        <h2 class="mb20 text-center">Kurikulum <span>Mata Kuliah<span class="underline"></span></span> </h2>
                        
                        <div class="spacer-half"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">        
                <h2 class="mb20 text-center text-light">Kurikulum <span>Mata Kuliah<span class="underline"></span></span> </h2>        
                <div class="row sequence">                    
                
                </div>
            </div>
        </section>
        <!-- section close -->
        <!-- section begin -->
        <section id="mbkm" class="jarallax">
            <img src="images/dkv/pattern.jpg" alt="" class="jarallax-img">

            <div class="container">
                <div class="row bottom">
                    <div class="col-md-12 text-light">
                        <h2>MBKM</h2>
                    </div>
                </div>
                {{-- <div class="row sequence">
                    <div class="col-md-4 p-2 sq-item wow">
                        <div class="card text-dark ">
                            <div class="card-body">
                                <div class="row align-items-center text-center">
                                    <div class="col-md-12">
                                        <figure class="picframe invert transparent rounded hover-shadow m-0">
                                            <span class="overlay-v">
                                                <span class="v-center">
                                                </span>
                                            </span>
                                            <img src="images/dkv/Bitmap (3).jpg" class="img-fullwidth" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <h3 class="mb20 mt-3">Akreditasi A</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2 sq-item wow">
                        <div class="card text-dark ">
                            <div class="card-body">
                                <div class="row align-items-center text-center">
                                    <div class="col-md-12">
                                        <figure class="picframe invert transparent rounded hover-shadow m-0">
                                            <span class="overlay-v">
                                                <span class="v-center">
                                                </span>
                                            </span>
                                            <img src="images/dkv/Bitmap (7).jpg" class="img-fullwidth" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <h3 class="mb20 mt-3">Fasilitas Lengkap</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2 sq-item wow">
                        <div class="card text-dark ">
                            <div class="card-body">
                                <div class="row align-items-center text-center">
                                    <div class="col-md-12">
                                        <figure class="picframe invert transparent rounded hover-shadow m-0">
                                            <span class="overlay-v">
                                                <span class="v-center">
                                                </span>
                                            </span>
                                            <img src="images/dkv/Bitmap (8).jpg" class="img-fullwidth" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <h3 class="mb20 mt-3">Prospek Terjamin</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}



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

        {{-- <div class="row text-light sequence">

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

        </div> --}}
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
                @for($i=0;$i<8;$i++)
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
