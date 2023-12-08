@extends('layout.main')
@section('section')
    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <div id="top"></div>

        <!-- section begin -->
        <section id="title" class="jarallax text-light">
            <img src="images/dkv/pattern.jpg" class="jarallax-img" alt="">
            <div class="t50">

                <div class="container mt-5 mt20 text-center">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <h1>{{ $page_title }}</h1>
                            <p>Galeri DKV</p>
                        </div>
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
        style="margin-top:1600px; margin-left : -250px;right:0;margin-right:-50px;">
        <section id="program_internal" data-bgcolor="#f9f9f9" class="jarallax">
            <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
            

 <div class="container">
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <li class="btn btn-outline-dark active" data-filter="*">Semua</li>
               @foreach ( $kategoris as $kategori)
                <li class="btn btn-outline-dark" data-filter=".{{ $kategori->kategori }}">{{ $kategori->kategori }}</li>
               @endforeach
            </ul>
         </div>
         <div class="portfolio-item row">
            @foreach ($gambar as $data)
            <div class="item {{ $data->kategori_gambar->kategori }} col-lg-3 col-md-4 col-6 col-sm mb-3">
               <a href="" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset('storage/'.$data->gambar) }}" alt="">
               <img class="img-fluid" src="{{ $data->gambar }}" alt="">
               </a>
            </div>
            @endforeach
         </div>
      </div>
        </section>
        </div>
       
        

    </div>
    <!-- content close -->
@endsection
