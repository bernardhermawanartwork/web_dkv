@extends('layout.main')
@section('section')
<section class="jarallax">
    <img src="../../../images/dkv/pattern.jpg" alt="" class="jarallax-img">
</section>
    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <div id="top"></div>

        <!-- section begin -->
        <section id="hibah" class="jarallax">
            <img src="../../../images/dkv/pattern_2.jpg" alt="" class="jarallax-img">

            <div class="container">
                <div class="row bottom">
                    <div class="col-md-12">
                        <h2>{{ $page_title }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="stripe">
                                <thead>                            
                                    <tr>
                                        <th>Jenis Hibah</th>
                                        <th>Judul Hibah</th>
                                        <th>Nama Dosen</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>                            
                                    @foreach ($hibah as $data)                        
                                    <tr>
                                        <td>{{ $data->jenis_hibah }}</td>
                                        <td>{{ $data->judul_hibah }}</td>
                                        <td>{{ $data->nama_dosen }}</td>
                                        <td>{{ $data->tahun }}</td>
                                    </tr>                            
                                    @endforeach
                                </tbody>
                                
                            </table>

                        </div>
                    </div>
                    
                </div>
            </div>
    </div>
    </section>
    <!-- section close -->

    </div>
@endsection
