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
                        <h4>Input Hero</h4>
                        <p>{{ $form_description }}</p>
                        <div class="m-t-25" style="max-width: 700px">
                            <form action="{{ route('beranda.section4.store') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="headline">Judul</label>
                                    <input type="text" class="form-control" placeholder="Judul Karya" name="judul_karya" value="{{ old('judul_karya') }}">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Deskripsi</label>
                                    <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" >{{ old('deskripsi') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="headline">Tahun</label>
                                    <input type="text" class="form-control" placeholder="Tahun" name="tahun" value="{{ old('tahun') }}">
                                </div>
                                <div class="form-group">
                                    <label for="headline">Author</label>
                                    <input type="text" class="form-control" placeholder="Author" name="author" value="{{ old('author') }}">
                                </div>
                                <div class="form-group">
                                    <label for="headline">Link Portofolio</label>
                                    <input type="text" class="form-control" placeholder="link_portofolio" name="link_portofolio" value="{{ old('link_portofolio') }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Gambar</label>
                                    <input type="file" class="form-control"  placeholder="Apartment, studio, or floor" name="gambar" value="{{ old('gambar') }}">
                                </div>                             
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-default">Bersihkan</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Data {{ $title }}</h4>
                        <p></p>
                        <div class="m-t-25">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tahun</th>
                                        <th>Author</th>
                                        <th>Link Portofolio</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td style="max-width:200px">{{ $data->judul_karya }}</td>
                                        <td style="max-width:200px">{{ $data->deskripsi }}</td>                                        
                                        <td style="max-width:200px">{{ $data->tahun }}</td>                                        
                                        <td style="max-width:200px">{{ $data->author }}</td>                                        
                                        <td style="max-width:200px">{{ $data->link_portofolio }}</td>                                        
                                        <td><button class="btn btn-default" data-toggle="modal" data-target="#modal_view_{{ $data->id }}">Lihat Gambar</button></td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal_{{ $data->id }}"><i class="anticon anticon-edit"></i></button> | <a href="{{ route('beranda.section4.delete',$data->id) }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"><i class="anticon anticon-delete"></i></a>
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
                                                    <form action="{{ route('beranda.section4.update',$data->id) }}" method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="headline">Judul</label>
                                                            <input type="text" class="form-control" placeholder="Judul Karya" name="judul_karya" value="{{ $data->judul_karya }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi">Deskripsi</label>
                                                            <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" >{{ $data->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headline">Tahun</label>
                                                            <input type="text" class="form-control" placeholder="Tahun" name="tahun" value="{{ $data->tahun }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headline">Author</label>
                                                            <input type="text" class="form-control" placeholder="Author" name="author" value="{{ $data->author }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headline">Link Portofolio</label>
                                                            <input type="text" class="form-control" placeholder="link_portofolio" name="link_portofolio" value="{{ $data->link_portofolio }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Gambar</label>
                                                            <img src="{{ asset('storage/'.$data->gambar) }}" alt="" width="100px" class="mb-3">
                                                            <input type="file" class="form-control"  placeholder="Apartment, studio, or floor" name="gambar" >
                                                        </div>                             
                                                                                                            
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal_view_{{ $data->id }}">
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