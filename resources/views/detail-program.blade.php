@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
<section class="jarallax">
    <img src="../../../images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
    <div class="container">
        
        <div class="row">
            @foreach ( $datas as $data)
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0">
                    <div class="item"><img src="../../../images/program/{{ $data->foto }}" width="100%"/></div>
            </div>
            <div class="col-md-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="project-info">
                    <h2>{{ $data->nama }}</h2>
                    <h3>{{ $data->subheadline }}</h3>
                    <p>{!! $data->deskripsi !!}</p>
                 </div>
            </div>
                
            @endforeach
            
        </div>
    </div>

</section>

@endsection