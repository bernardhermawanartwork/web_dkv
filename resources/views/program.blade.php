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
                            <p>Program DKV</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="program_internal" data-bgcolor="#f9f9f9" class="jarallax">
            <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
            <div class="container">
                <div class="col-md-12 text-center mb-5">
                    <h4 class="uptitle id-color">Internal Programs</h4>
                    <h2>Program Internal</h2>
                </div>
                <div class="row sequence">
                    <div class="card-deck ">
                        @foreach ($program_internal as $data)
                            <div class="card float-left p-4 col-md-6 mb30 sq-item wow" style="background:none;border:none">
                                <div class="picframe wow mb20">
                                    <a href="{{ $data['detail_link'] }}">
                                        <img src="images/program/{{ $data['foto'] }}" class="wow" alt="" />
                                    </a>
                                </div>

                                <div class="card-body">
                                    <h2>{{ $data['nama'] }}</h2>
                                    <p>{!! $data['subheadline'] !!}</p>
                                    
                                </div>
                                <div class="card-footer" style="background:none;border:none">
                                    <a href="{{ route('detail.program',['nama'=>$data->nama]) }}" class="btn btn-custom">Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- section close -->
        <div>
            <img src="images/decoration/_0002_pallete.png" alt="" class="decoration"
        style="margin-top:-150px; margin-left : -100px;">
        <img src="images/decoration/_0004_acrylic.png" alt="" class="decoration"
        style="margin-top:1600px; margin-left : -250px;right:0;margin-right:-50px;">
            <section id="program_kolaborasi" class="jarallax text-light">
                <img src="images/dkv/pattern_3.jpg" alt="" class="jarallax-img">
                <div class="container">
                    <div class="col-md-12 text-center mb-5">
                        <h4 class="uptitle id-color">Colaboration Programs</h4>
                        <h2>Program Kolaborasi</h2>
                    </div>
                    <div class="row">
                        <div class="card-deck ">
                            @foreach ($program_eksternal as $data)
                                <div class="card float-left p-4 col-md-6 mb30" style="background:none;border:none">
                                    <div class="picframe wow mb20">
                                        <a href="{{ $data['detail_link'] }}">
                                            <img src="images/program/{{ $data['foto'] }}" class="wow" alt="" />
                                        </a>
                                    </div>
    
                                    <div class="card-body">
                                        <h2>{{ $data['nama'] }}</h2>
                                        <p>{!! $data['subheadline'] !!}</p>
                                        
                                    </div>
                                    <div class="card-footer" style="background:none;border:none">
                                        <a href="{{ route('detail.program',['nama'=>$data->nama]) }}" class="btn btn-custom">Selengkapnya</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
        

    </div>
    <!-- content close -->
@endsection
