<div class="project-view">
    <div id="btn-close">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-4 wow fadeInUp d-flex justify-content-center align-items-center" data-wow-delay="0">
            <img src="{{ asset('storage/'.$data->gambar) }}" alt="" class="img-fluid" style="max-height: 500px;text-align:center" />
			<div class="spacer-single"></div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
            <div class="project-info">
                <h2>{{ $data->judul_karya }}</h2>
                <p>{{ $data->deskripsi }}</p>

                <span class="title">Tahun</span>
                <span class="val">{{ $data->tahun }}</span>

                <span class="title">Author</span>
                <span class="val">{{ $data->author }}</span>

                <span class="title">Link Portofolio</span>
                <span class="val"><a href="{{ $data->link_portofolio }}>{{ $data->link_portofolio }}</a></span>

            </div>
        </div>
    </div>
</div>