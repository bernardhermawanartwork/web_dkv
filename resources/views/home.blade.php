@extends('layout.main')
@section('section')
    <!-- content begin -->

    <div id="content" class="no-bottom no-top">
        <div id="top"></div>

        <!-- section begin -->
        <section id="section-intro" class="full-height relative owl-slide-wrapper text-light no-top no-bottom">
            <div class="overlay-bg t50">

                <div class="owl-slider-nav">
                    <div class="next"></div>
                    <div class="prev"></div>
                </div>

                <div id="custom-owl-slider" class="owl-carousel owl-theme owl-slide" data-scroll-speed="2">
                    <div class="item">
                        <img src="images/galeri/DSCF5333.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (1).jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (2).jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (3).jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (4).jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (5).jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/dkv/Bitmap (6).jpg" alt="">
                    </div>
                </div>

                <div class="center-y relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="spacer-double d-block d-sm-none d-md-block"></div>
                                <h1 class="big">{{ $hero->headline }}</h1>
                                <div class="spacer-single"></div>
                                <p style="font-size:24px">{!! $hero->isi !!}</p>
                                <div class="spacer-single"></div>
                                <a href="{{ $hero->action_link }}" class="btn btn-lg btn-custom">{{ $hero->action_label }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- section close -->
        <!-- section begin -->

        <div>
            <img src="images/decoration/_0007_laptop.png" alt="" class="decoration"
                style="margin-top:-150px; margin-left : -250px;">
            <img src="images/decoration/_0013_camera.png" alt="" class="decoration"
                style="margin-top:600px; margin-left : -250px;right:0;margin-right:-50px;">
            <section id="section-about" class="text-dark jarallax">

                <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                           <img src="{{ $sambutan['gambar'] }}" alt="" width="100%" style="margin-bottom:0px;"> 
                        </div>                        
                        <div class="col-md-7 d-flex justify-content-center align-items-center flex-column">                            
                            <h2 class="mb20 mt-3">{{ $sambutan['heading'] }}</h2>
                            {!! $sambutan['isi_sambutan'] !!}
                            <div class="spacer_half">- <i>{!! $sambutan['kaprodi'] !!}</i></div>                            
                        </div>      
                    </div>
                </div>
            </section>
        </div>

        <div>
            
            <section id="section-about" class="text-light jarallax">

                <img src="images/dkv/pattern.jpg" alt="" class="jarallax-img">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-md-5">                            
                            <h2 class="mb20">{{ $video_section->headline }}</h2>
                            <p>{{ $video_section->isi }}</p>
                            <div class="spacer-half"></div>
                            <a href="{{ $video_section->action_link }}" class="btn-custom scroll-to" style="background-color:white !important;color:black">{{ $video_section->action_label }}</a>
                        </div>

                        <div class="col-md-6">
                            <iframe class="picframe rounded gray" width="640" height="400"
                                src="{{ $video_section->video_url }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </div>

        <!-- section close -->
        <!-- section begin -->
        <section id="section-services" class="jarallax">
            <img src="images/dkv/pattern_5.jpg" alt="" class="jarallax-img">

            <div class="container">
                <div class="row bottom">
                    <div class="col-md-12 text-light">
                        <h2>Kenapa Harus <span>DKV ITTP?<span class="underline" style="background:white"></span></span></h2>
                    </div>
                </div>
                <div class="row sequence">
                    @foreach ($kenapa_harus_dkv as $data)
                    <div class="col-md-4 p-2 sq-item wow">
                        <div class=" text-light " style="min-height:450px">
                            <div class="card-body">
                                <div class="row align-items-center text-center">
                                    <div class="col-md-12">
                                        <figure class="picframe invert transparent rounded hover-shadow m-0">
                                            <span class="overlay-v">
                                                <span class="v-center">
                                                </span>
                                            </span>
                                            <img src="images/{{ $data->gambar }}" class="img-fullwidth" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <h3 class="mb20 mt-3">{{ $data->headline }}</h3>
                                        <p>
                                            {{ $data->isi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    @endforeach                    
                </div>



            </div>
    </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <div>
        <img src="images/decoration/_0002_pallete.png" alt="" class="decoration"
        style="margin-top:-150px; margin-left : -100px;">
        <img src="images/decoration/_0004_acrylic.png" alt="" class="decoration"
        style="margin-top:1300px; margin-left : -250px;right:0;margin-right:-50px;">
        <section id="section-portfolio" aria-label="section-portfolio" class="top no-bottom jarallax">
            <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
            <div class="col-md-12 text-center">
                <h4 class="uptitle id-color">Arts</h4>
                <h2>Karya-karya Mahasiswa DKV</h2>
            </div>
            <div class="container">
                <div class="row gallery-wrap sequence_pf mb-5">
                    @foreach($karya as $data)
                    <!-- gallery item -->
                    
                    <div class="col-lg-4 col-md-6 col-xs-6 sq-item mb-3">
                        <div class="picframe wow">
                            <div class="pf-click" data-toggle="modal" data-value="{{ route('detail.karya',$data->id) }}">
                                <span class="overlay">
                                    <span class="title">
                                        <span>Lihat Detail</span>
                                    </span>
                                </span>
                                <img src="images/{{ $data->gambar }}" class="wow" alt="" />
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="modal fade" id="modal_karya_{{ $data->id }}">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Lihat Gambar</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('storage/'.$data->gambar) }}" alt="" style="max-width:100%">                                                      
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- close gallery item -->
                    
                    @endforeach      
                    <div class="spacer-half"></div>
                    {{-- @foreach ( $karya as $data)
                    <div id="loader-area" data-bgcolor="#fafafa">
                        <div class="container">
                            <div class="project-load"></div>
                        </div>
                    </div>                        
                    @endforeach --}}
                    <div class="col-md-12 text-center mt-5 mb-5">
                        <a href="/galeri" class="btn-custom scroll-to btn-lg">Selengkapnya ></a>
                    </div>
                    <div id="loader-area" data-bgcolor="#fafafa">
                        <div class="container">
                            <div class="project-load"></div>
                        </div>
                    </div>         

                </div>
            </div>
        </section>
    </div>
    <!-- section close -->

    <!-- section begin -->
    {{-- <div>
        <img src="images/decoration/_0006_notes_2.png" alt="" class="decoration"
        style="margin-top:550px; margin-left : -100px;">
        <img src="images/decoration/_0011_notes_3.png" alt="" class="decoration"
        style="margin-top:1500px; margin-left : -250px;right:0;margin-right:-50px;">
        <section id="section-services" class="jarallax">
            <img src="images/dkv/pattern_3.jpg" alt="" class="jarallax-img">
            <div class="col-md-12 text-center">
                <h4 class="uptitle id-color">Our Latest Events</h4>
                <h2 class="text-light">Event Terkini</h2>
            </div>
            <div class="container">
    
                <div class="row text-light sequence">
                    @foreach ($event as $data)
                    <div class="col-md-4 mb30 sq-item wow sq-item wow">
                        <div class="picframe wow mb20">
                            <a href="/events/{{ $data->id }}">
                                <span class="overlay">
                                    <span class="title">
                                        <span>Selengkapnya</span>
                                    </span>
                                </span>
                                <img src="{{ asset('storage/'.$data->thumbnail) }}" class="wow" alt="" />
                            </a>
                        </div>
    
                        <div class="post-item s1 item">
                            @php                                
                            $dateTimeString = $data->updated_at;
                            // Ubah tanggal dan waktu menjadi objek DateTime
                            $dateTime = new DateTime($dateTimeString);
                            // Format tanggal dan bulan sesuai keinginan
                            $tanggal = $dateTime->format('d');
                            $bulan = $dateTime->format('m');
                            @endphp
                            <div class="date-box">
                                <div class="m">{{ $tanggal }}</div>
                                <div class="d">{{ $bulan }}</div>
                            </div>
    
                            <div class="post-content">
                                <div class="post-text">
                                    <h3><a href="blog-single.html" class="text-light">{{ $data->judul }}</a></h3>
                                    <p>..</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                      
                </div>
                <div class="spacer-half"></div>
                <div class="col-md-12 text-center mt-5 mb-5">
                    <a href="#section-portfolio" class="btn-custom scroll-to btn-lg">Lihat Event Lain ></a>
                </div>
            </div>
        </section>
    </div> --}}
    
    <!-- section close -->

    <!-- section begin -->
    <section id="section-services" class="jarallax">
        <img src="images/dkv/pattern_4.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color">Our Latest News</h4>
            <h2>Berita Terkini</h2>
        </div>
        <div class="container">

            <div class="col-md-12">
                <div class="row sequence">
                    @foreach ($berita as $data)
                    <div class="col-md-4 sq-item wow p-2">
                        <div class="card card-round p-1">
                            <div class="card-body">
                                <div class=" mb30 sq-item">
                                    <div class="picframe mb20">
                                        <a href="{{ route('detail.artikel',['id'=>$data->id]) }}">
                                            <span class="overlay">
                                                <span class="title">
                                                    <span>Baca Artikel Selengkapnya</span>
                                                </span>
                                            </span>
                                            <img src="{{ $data->thumbnail }}" class="wow" alt="" height="200px"/>
                                        </a>
                                    </div>

                                    <div class="post-item s1 item">
                                        @php                                
                                        $dateTimeString = $data->updated_at;
                                        // Ubah tanggal dan waktu menjadi objek DateTime
                                        $dateTime = new DateTime($dateTimeString);
                                        // Format tanggal dan bulan sesuai keinginan
                                        $tanggal = $dateTime->format('d');
                                        $bulan = $dateTime->format('m');
                                        @endphp
                                        <div class="date-box">
                                            <div class="m">{{ $tanggal }}</div>
                                            <div class="d">{{ $bulan }}</div>
                                        </div>

                                        <div class="post-content">
                                            <div class="post-text">
                                                <h3><a href="{{ route('detail.artikel',['id'=>$data->id]) }}">{{ $data->headline }}</a></h3>
                                                <p>{{ $data->subheadline }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
            <div class="spacer-half"></div>
            <div class="col-md-12 text-center mt-5 mb-5">
                <a href="/artikel" class="btn-custom scroll-to btn-lg">Lihat Berita Lain ></a>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section service begin -->
    <section id="section-side" class="side-bg no-padding bg-color text-light">
        <div class="image-container jarallax col-md-6 pull-left d-block d-sm-none d-md-block">
            <img src="{{ $penawaran->gambar }}" class="jarallax-img" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="inner-padding">
                    <div class="col-md-5 offset-md-7 wow fadeIn">
                        <h2 class="mb20">{{ $penawaran->headline }}</h2>
                        <p>
                            {{ $penawaran->isi }}
                        </p>
                        <div class="spacer-half"></div>
                        <a href="{{ $penawaran->action_link }}" class="btn-border scroll-to">{{ $penawaran->action_label }}</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section service close -->

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
