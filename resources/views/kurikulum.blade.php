@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
        <!-- section begin -->
        <section id="kurikulum" class="jarallax">
            <img src="../../../images/dkv/pattern_2.jpg" alt="" class="jarallax-img">
            <h2 class="mb20 text-center text-dark">Kurikulum <span>Mata Kuliah<span class="underline"></span></span> </h2>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-12">
                        {{-- TABS --}}
                        <div class="card text-dark">
                            <nav class="kurikulum-nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                        @php
                                            $num = $no++;
                                        @endphp
                                        <button class="nav-link @if ($num == 1) active @endif"
                                            id="nav-semester{{ $num }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-semester{{ $num }}" type="button" role="tab"
                                            aria-controls="nav-semester{{ $num }}" aria-selected="true">Semester
                                            {{ $num }}</button>
                                    @endfor
                                </div>
                            </nav>
                            <div class="tab-content text-left p-5" id="nav-tabContent">
                                @php
                                    $nos = 1;
                                @endphp
                                @foreach ($kurikulum as $matkul)
                                    @php
                                        $num = $nos++;
                                    @endphp
                                    <div class="tab-pane fade @if ($num == 1) show active @endif"
                                        id="nav-semester{{ $num }}" role="tabpanel"
                                        aria-labelledby="nav-semester{{ $num }}-tab">
                                        <table width="100%">
                                            <th>Nama Mata Kuliah</th>
                                            <th>Jumlah SKS</th>
                                            @foreach ($matkul as $data)
                                                <tr>
                                                    <td>{{ $data->mata_kuliah }}</td>
                                                    <td>{{ $data->sks }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- END TAB --}}
                        <div class="spacer-half"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            
        </section>
        <!-- section close -->
@endsection