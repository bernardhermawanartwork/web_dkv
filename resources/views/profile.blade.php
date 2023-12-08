@extends('layout.main')
@section('section')
    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <div id="top"></div>

        <section id="section-about" class="text-light jarallax pt-5">

            <img src="images/dkv/pattern.jpg" alt="" class="jarallax-img">
            <div class="container" style="margin-top:200px">
                <div class="row align-items-center">
                    
                    <div class="col-md-5">                            
                        <h2 class="mb20">Tentang DKV IT Telkom Purwokerto</h2>
                        <p>{{ $video_section->isi }}</p>
                        <div class="spacer-half"></div>
                        
                    </div>  

                    <div class="col-md-6">
                        <iframe class="picframe rounded gray" width="740" height="400"
                            src="{{ $video_section->video_url }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
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
                style="margin-top:1800px; margin-left : -250px;right:0;margin-right:-50px;">

            <section id="dosen" class="bg-dark text-dark jarallax">
                <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
                <div class="col-md-12 text-center mb-5 mt-5">
                    {{-- <h4 class="uptitle id-color">Arts</h4> --}}
                    <h2>Dosen-Dosen DKV</h2>
                </div>
                <div class="container">

                    <div class="row sequence">
                        @foreach ($dosens as $dosen)
                            <!-- feature box begin -->
                            <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 mb-md-30 mb-5 sq-item wow">
                                <div class="text-center">
                                    <figure class="photo-rounded sc-icon mb20 ">
                                        <a href="{{ route('detail.dosen',['nama'=>$dosen->nama] ) }}">
                                            <img src="images/foto_dosen/{{ $dosen['foto'] }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <h3>{{ $dosen->nama }}</h3>
                                    <span class="subtitle">{{ $dosen['jabatan'] }}</span>
                                </div>
                            </div>
                        @endforeach
                        <!-- feature box close -->
                    </div>

                </div>
            </section>
        </div>
        <!-- section close -->






        <!-- section begin -->
        <section id="visimisi" class="bg-dark jarallax">
            <img src="images/dkv/pattern_5.jpg" alt="" class="jarallax-img">
            <div class="container">

                <div class="row align-items-center text-light">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- feature box begin -->
                            <div class="col-md-6 mb40   sq-item wow sq-item wow">
                                <div class="feature-box style-2">                                   
                                    <h2><i class="icon-pencil mr-1"></i> Visi</h2>
                                    <div class="text">
                                        {{ $visimisi->visi }}
                                    </div>
                                </div>
                            </div>
                            <!-- feature box close -->

                            <!-- feature box begin -->
                            <div class="col-md-6 feature-box mb40 sq-item wow">
                                <div class="feature-box style-2">
                                    
                                    <h2><i class="icon-envelope mr-1"></i> Misi</h2>
                                    <div class="text">
                                        {!! $visimisi->misi !!}
                                    </div>
                                </div>
                            </div>
                            <!-- feature box close -->

                        </div>
                    {{-- </div>

                    <div class="col-md-4">
                        <figure class="picframe invert transparent hover-shadow">

                            <img src="{{ $visimisi->gambar }}" class="img-fullwidth" alt="">
                        </figure>
                    </div> --}}
                </div>

            </div>
        </section>
        <!-- section close -->
        <section id="fasilitas" class="bg-dark jarallax">
            <img src="images/dkv/pattern.jpg" alt="" class="jarallax-img">
            <div class="col-md-12 text-center mb-5 text-light">
                <h2>Fasilitas</h2>
            </div>
            <div class="container">
                <div class="row gallery-wrap sequence_pf mb-5">
                    @foreach($fasilitas as $data)
                    <!-- gallery item -->
                    
                    <div class="col-lg-4 col-md-6 col-xs-6 sq-item mb-3 text-light">
                        <div class="picframe wow">
                            <div>
                                <img src="{{ $data->gambar }}" class="wow" alt="" />
                                <h3 class="mt-3">{{ $data->nama }}</h3>
                                {{ $data->deskripsi }}
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
                    <div id="loader-area" data-bgcolor="#fafafa">
                        <div class="container">
                            <div class="project-load"></div>
                        </div>
                    </div>         

                </div>
            </div>
        </section>
        <!-- section begin -->
        <section id="alumni" class="bg-dark jarallax">
            <img src="images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
            <div class="col-md-12 text-center mb-5 text-dark">
                {{-- <h4 class="uptitle id-color">Arts</h4> --}}
                <h2>Alumni DKV</h2>
            </div>
            <div class="container">

                <div class="row ">
                    @foreach ($alumni as $data)
                        <!-- feature box begin -->

                        <div class="col-md-4 p-2 sq-item wow p-2">
                            <div class="card text-dark">
                                <div class="card-body">
                                    <div class="row align-items-center text-center">
                                        <div class="col-md-5 d-flex justify-content-center">
                                            <div class=""
                                                style="width:120px;height:120px;border-radius:100%;overflow:hidden">
                                                <img src="{{ $data->gambar }}" class="img-fullwidth" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-7 d-flex text-left">
                                            <div class="">
                                                <h3 class="mt-3" style="margin-bottom:10px;">{{ $data->nama }}</h3>
                                                <span class="mb-20" style="color:brown">{{ $data->status }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- feature box close -->
                </div>

            </div>
        </section>
        <!-- section close -->
    </div>
    <!-- content close -->
@endsection
