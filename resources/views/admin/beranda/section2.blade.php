@extends('admin.layout.main')
@section('section')
<!-- Page Container START -->

                

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Form Layouts</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Forms</a>
                    <span class="breadcrumb-item active">{{ $title }}</span>
                </nav>
            </div>
        </div>
        
        <div class="row col-md-12">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Input {{ $title }}</h4>
                        <p>{{ $form_description }}</p>
                        <div class="m-t-25" style="max-width: 700px">
                            <form action="{{ route('beranda.section2.store') }}" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <label for="headline">Headline</label>
                                    <input type="text" class="form-control" placeholder="Headline" name="headline" value="{{ old('headline') }}">
                                </div>
                                <div class="form-group">
                                    <label for="isi">isi</label>
                                    <textarea class="form-control" placeholder="Isi" name="isi" >{{ old('isi') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Action Link</label>
                                    <input type="text" class="form-control"  placeholder="https://www.example.com" name="action_link" value="{{ old('action_link') }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Action Label</label>
                                    <input type="text" class="form-control"  placeholder="Contoh : Baca Selengkapnya, Daftar Sekarang, dsb." name="action_label" value="{{ old('action_label') }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Video URL</label>
                                    <input type="text" class="form-control"  name="video_url" value="{{ old('video') }}">
                                </div>                             
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-default">Bersihkan</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <iframe src="/" id="iframe1" width="100%"></iframe>
                    </div>
                </div>                
            </div> --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Data {{ $title }}</h4>
                        <p></p>
                        <div class="m-t-25">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Headline</th>
                                        <th>Isi</th>
                                        <th>Action Link</th>
                                        <th>Video_url</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td style="max-width:200px">{{ $data->headline }}</td>
                                        <td style="max-width:200px">{{ $data->isi }}</td>
                                        <td><a href="{{ $data->action_link }}">{{ $data->action_link }}</a></td>
                                        <td><button class="btn btn-default" data-toggle="modal" data-target="#modal_view_{{ $data->id }}">Lihat Video_url</button></td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal_{{ $data->id }}"><i class="anticon anticon-edit"></i></button> | <a href="{{ route('beranda.section2.delete',$data->id) }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"><i class="anticon anticon-delete"></i></a> | @if($data->default == 0)<a href="{{ route('beranda.section2.setDefault',$data->id) }}" class="btn btn-success">Jadikan Default</a>@else<i class="anticon anticon-check"></i> Default @endif</td>
                                    </tr>
                                    {{-- MODAL--}}
                                    <div class="modal fade" id="modal_{{ $data->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('beranda.section2.update',$data->id) }}" method="POST" >
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="headline">Headline</label>
                                                            <input type="text" class="form-control" placeholder="Headline" name="headline" value="{{ $data->headline }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi">isi</label>
                                                            <textarea class="form-control" placeholder="Isi" name="isi" >{{ $data->isi }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Action Link</label>
                                                            <input type="text" class="form-control"  placeholder="https://www.example.com" name="action_link" value="{{ $data->action_link }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Action Label</label>
                                                            <input type="text" class="form-control"  placeholder="Contoh : Baca Selengkapnya, Daftar Sekarang, dsb." name="action_label" value="{{ $data->action_label }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Video URL</label>                                                            
                                                            <input type="text" class="form-control"  placeholder="video url" name="video_url" value="{{ $data->video_url }}">
                                                        </div>                             
                                                                                                            
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>                                                
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal_view_{{ $data->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Lihat Video URL</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe class="picframe rounded gray" width="640" height="400"
                                                    src="{{ $data->video_url }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen>
                                                    </iframe>                                                  
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>          
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        
       
    </div>
    <!-- Content Wrapper END -->


@endsection