@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
    <!-- section begin -->
    <section id="kuliah_umum" class="jarallax">
        <img src="images/dkv/pattern_3.jpg" alt="" class="jarallax-img">
        <div class="col-md-12 text-center">
            <h4 class="uptitle id-color"></h4>
            <h2 class="text-dark">Kuliah Umum</h2>
        </div>
        <div class="container">

            <div class="row text-light sequence">
            @foreach ($kuliahumum as $data)
            <div class="col-md-4 mb30 sq-item wow sq-item wow">
                <div class="picframe wow mb20">
                    <a href="{{ route('akademik.detailKuliahUmum',['id'=>$data->id]) }}">
                        <span class="overlay">
                            <span class="title">
                                <span>Baca Selengkapnya</span>
                            </span>
                        </span>
                        <img src="../../../{{ $data->gambar }}" class="wow" alt="" />
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
        </div>
    </section>
    <!-- section close -->
@endsection
