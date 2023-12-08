@extends('layout.main')
@section('section')
<!-- content begin -->
<div id="content" class="no-bottom no-top">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/13.jpg" class="jarallax-img" alt="">
        <div class="overlay-bg t50">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Artikel DKV</h1>
                        <p>Update terbaru dari DKV ITTP</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- section close -->

    <!-- section begin -->
    
    <section id="section-services" data-bgcolor="#f9f9f9">
        <div class="container">
            <div class="row">
                @foreach($datas as $data)
                <div class="col-md-4 mb30">
                    <div class="picframe wow mb20">
                        <a href="{{ route('detail.artikel',['id'=>$data->id]) }}">
                            <span class="overlay">
                                <span class="title">
                                    <span>Baca artikel ini</span>
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
                @endforeach
                
            </div>

        </div>
    </section>
    <!-- section close -->

</div>
<!-- content close -->
@endsection