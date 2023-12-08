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
        {{-- <div class="card">
            <div class="card-body">
                <h4>Form groups</h4>
                <p>The <code>.form-group</code> class is the easiest way to add some structure to forms. It provides a flexible class that encourages proper grouping of labels, controls, optional help text, and form validation messaging. By default it only applies <code>margin-bottom</code>, but it picks up additional styles in <code>.form-inline</code> as needed. Use it with <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or nearly any other element.</p>
                <div class="m-t-25" style="max-width: 500px">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-body">
                <h4>Form grid</h4>
                <p>More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.</p>
                <div class="m-t-25" style="max-width: 500px">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-body">
                <h4>Form row</h4>
                <p>You may also swap <code>.row</code> for <code>.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.</p>
                <div class="m-t-25" style="max-width: 500px">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> --}}
        <div class="row col-md-12">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Input Hero</h4>
                        <p>{{ $form_description }}</p>
                        <div class="m-t-25" style="max-width: 700px">
                            <form action="{{ route('galeri.section1.store') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="inputAddress2">Gambar</label>
                                    <input type="file" class="form-control"  name="gambar" value="{{ old('gambar') }}">
                                </div>   
                                <div class="form-group">
                                    <label for="headline">Judul</label>
                                    <input type="text" class="form-control" placeholder=Judul" name="judul" value="{{ old('judul') }}">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Deskripsi</label>
                                    <textarea class="form-control" placeholder="deskripsi" name="deskripsi" >{{ old('deskripsi') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Kategori</label>
                                    <select name="kategori_gambar_id" class="form-control">
                                        @foreach ($kategori as $data)
                                            <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                        @endforeach
                                    </select>
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
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td style="max-width:200px"><img src="{{ asset('storage/'.$data->gambar) }}" alt="" style="max-width:100%">  </td>
                                        <td style="max-width:200px">{{ $data->judul }}</td>
                                        <td style="max-width:200px">{{ $data->deskripsi }}</td>                                        
                                        <td>{{ $data->kategori_gambar->kategori }}</td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modal_{{ $data->id }}"><i class="anticon anticon-edit"></i></button> | <a href="{{ route('galeri.section1.delete',$data->id) }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"><i class="anticon anticon-delete"></i></a>
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
                                                    <form action="{{ route('galeri.section1.update',$data->id) }}" method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Gambar</label>
                                                            <img src="{{ asset('storage/'.$data->gambar) }}" alt="" width="100px" class="mb-3">
                                                            <input type="file" class="form-control"  placeholder="Apartment, studio, or floor" name="gambar" >
                                                        </div>       
                                                        <div class="form-group">
                                                            <label for="headline">Judul</label>
                                                            <input type="text" class="form-control" placeholder=Judul" name="judul" value="{{ $data->judul }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi">Deskripsi</label>
                                                            <textarea class="form-control" placeholder="deskripsi" name="deskripsi" >{{ $data->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi">Kategori</label>
                                                            {{ $data->kategoriGambar }}
                                                            <select name="kategori_gambar_id" class="form-control">
                                                                @foreach ($kategori as $dataKategori)
                                                                    <option value="{{ $dataKategori->id }}">{{ $dataKategori->kategori }}</option>
                                                                @endforeach
                                                            </select>
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
        
        {{-- <div class="card">
            <div class="card-body">
                <h4>Horizontal form</h4>
                <p>Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>
                <p>At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we’ve removed the <code>padding-top</code> on our stacked radio inputs label to better align the text baseline.</p>
                <div class="m-t-25" style="max-width: 700px">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                        <label for="gridRadios3">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <input type="checkbox" id="gridCheck1">
                                    <label for="gridCheck1">
                                    Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-body">
                <h4>Column sizing</h4>
                <p>As shown in the previous examples, our grid system allows you to place any number of <code>.col</code>s within a <code>.row</code> or <code>.form-row</code>. They’ll split the available width equally between them. You may also pick a subset of your columns to take up more or less space, while the remaining <code>.col</code>s equally split the rest, with specific column classes like <code>.col-7</code>.</p>
                <div class="m-t-25" style="max-width: 700px">
                    <form>
                        <div class="form-row">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-body">
                <h4>Auto-sizing</h4>
                <p>The example below uses a flexbox utility to vertically center the contents and changes <code class="highlighter-rouge">.col</code> to <code class="highlighter-rouge">.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.</p>
                <div class="m-t-25">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto">
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="checkbox mb-2">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div> --}}
    </div>
    <!-- Content Wrapper END -->


@endsection