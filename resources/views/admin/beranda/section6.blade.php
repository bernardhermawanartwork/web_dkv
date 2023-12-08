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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Input Hero</h4>
                        <p>{{ $form_description }}</p>
                        <div class="m-t-25">
                            <form action="{{ route('beranda.section6.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="headline">Headline</label>
                                    <input type="text" class="form-control" placeholder="Headline" name="headline"
                                        value="{{ old('headline') }}">
                                </div>
                                <div class="form-group">
                                    <label for="headline">Subheadline</label>
                                    <input type="text" class="form-control" placeholder="Subheadline" name="subheadline"
                                        value="{{ old('headline') }}">
                                </div>
                                <div class="form-group">
                                    <label for="headline">Thumbnail</label>
                                    <input type="file" class="form-control"  name="thumbnail">
                                </div>
                                <div class="form-group">
                                    <label for="isi">BodyText</label>
                                    <textarea class="form-control" placeholder="BodyText" name="bodytext" id="bodytext"> </textarea>
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
                                        <th>Headline</th>
                                        <th>Subheadline</th>
                                        <th>Thumbnail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td style="max-width:200px">{{ $data->headline}}</td>
                                            <td style="max-width:200px">{{ $data->subheadline}}</td>
                                            <td style="max-width:200px"><img src="../../{{ $data->thumbnail }}" alt="" style="max-width:100px"></td>
                                            
                                            <td><button class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modal_{{ $data->id }}"><i
                                                        class="anticon anticon-edit"></i></button> | <a
                                                    href="{{ route('beranda.section6.delete', $data->id) }}"
                                                    class="btn btn-danger"
                                                    onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"><i
                                                        class="anticon anticon-delete"></i></a>
                                        </tr>
                                        {{-- MODAL --}}
                                        <div class="modal fade" id="modal_{{ $data->id }}">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('beranda.section6.update',$data->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="headline">Headline</label>
                                                            <input type="text" class="form-control" placeholder="Headline Event" name="headline"
                                                                value="{{ $data->headline }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headline">Subheadline</label>
                                                            <input type="text" class="form-control" placeholder="Headline Event" name="subheadline"
                                                                value="{{ $data->subheadline }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headline">Thumbnail</label>
                                                            <img src="{{ asset('storage/'.$data->thumbnail) }}" alt="" style="max-width:100px">
                                                            <input type="file" class="form-control" name="thumbnail">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi">BodyText</label>
                                                            <textarea class="form-control" placeholder="BodyText" name="bodytext" id="bodytext_{{ $data->id }}"> {{ $data->bodytext }} </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan
                                                            Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $('#bodytext_{{ $data->id }}').summernote({
                                                placeholder : 'description..',
                                                tabsize     : 2,
                                                height      : 400
                                            });
                                        </script>
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
    <script>
        $('#bodytext').summernote({
            placeholder : 'description..',
            tabsize     : 2,
            height      : 400
        });
        
    </script>
@endsection
