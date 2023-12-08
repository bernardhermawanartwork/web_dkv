@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
<section class="jarallax">
    <img src="../../../images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
    <div class="container">
        
        <div class="row">
            @foreach ( $pengmas as $data)
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0">
                    <div class="item"><img src="../../../{{ $data->gambar }}" width="100%"/></div>
            </div>
            <div class="col-md-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="project-info d-flex flex-column justify-content-center align-items-center">
                    <h2>{{ $data->headline }}</h2>
                    <p>{!! $data->isi !!}</p>
                 </div>
            </div>
                
            @endforeach
            
        </div>
    </div>

</section>

@endsection