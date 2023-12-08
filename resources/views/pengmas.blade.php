@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
    <!-- section begin -->
    <section id="program_internal" data-bgcolor="#f9f9f9" class="jarallax">
        <img src="../../../images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
        <div class="container">
            <div class="col-md-12 text-center mb-5">
                <h2>Pengabdian Masyarakat</h2>
            </div>
            <div class="row sequence">
                <div class="card-deck ">
                    @foreach ($pengmas as $data)
                        <div class="card float-left p-4 col-md-6 mb30 sq-item wow" style="background:none;border:none">
                            <div class="picframe wow mb20" style="max-height:300px;">
                                <a href="{{ route('akademik.detailPengmas',['id'=>$data->id]) }}">
                                    <img src="../../../{{ $data['gambar'] }}" class="wow" alt="" />
                                </a>
                            </div>

                            <div class="card-body">
                                <h2>{{ $data->headline }}</h2>
                                <p><?php echo substr($data->isi,0,100);?>...</p>
                                
                            </div>
                            <div class="card-footer" style="background:none;border:none">
                                <a href="{{ route('akademik.detailPengmas',['id'=>$data->id]) }}" class="btn btn-custom">Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- section close -->
@endsection
