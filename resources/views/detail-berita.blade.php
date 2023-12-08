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
            <div class="col-md-4 wow fadeInUp mb-5" data-wow-delay="0">
                    <div class="item"><img src="../../{{ $data->thumbnail }}" width="100%"/></div>
            </div>
            <br>
            <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="project-info">
                    <h2>{{ $data->headline }}</h2>
                    <h3>{{ $data->subheadline }}</h3>
                    
                    {!! $data->bodytext !!}
                    
                 </div>
            </div>
                
            @endforeach
            
        </div>
    </div>

</section>

@endsection