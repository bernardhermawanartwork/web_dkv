<?php

namespace App\Http\Controllers;

use DOMDocument;
use Goutte\Client;
use App\Models\Event;
use App\Models\Karya;
use App\Models\Berita;
use App\Models\Beranda;
use App\Models\Penawaran;
use App\Models\BerandaHero;
use Illuminate\Http\Request;
use App\Models\KenapaHarusDkv;
use InstagramScraper\Instagram;
use Illuminate\Routing\Controller;
use App\Models\BerandaVideoSection;
use Phpfastcache\Helper\Psr16Adapter;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBerandaRequest;
use App\Http\Requests\UpdateBerandaRequest;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sambutan = [
            "heading"       => "Sambutan KaProdi",
            "isi_sambutan"  => "<p style='text-indent:20px'>Kami dengan bangga menyambut Anda di dunia kreativitas. Program Studi DKV ITTP berkomitmen untuk memberikan pendidikan berkualitas dalam bidang Desain Grafis, Ilustrasi, Animasi, Fotografi, Videografi dan bidang kreatif lainnya. Kami berusaha untuk melahirkan desainer yang tidak hanya mahir dalam teknik desain, tetapi juga berdaya cipta tinggi, berpikiran kritis, dan siap menghadapi tantangan dunia desain modern. Kami menekankan pentingnya pengembangan bakat kreatif, kerja tim, penerapan teknologi terkini dalam desain, serta penerapan keilmuan pada masyarakat.</p>
            <p style='text-indent:20px'>
Kami berharap Anda mengeksplorasi lebih lanjut halaman web kami untuk mendapatkan informasi lebih lanjut tentang program studi, kurikulum, acara-acara, dan prestasi mahasiswa dan alumni kami. Jika Anda memiliki pertanyaan atau ingin memulai perjalanan Anda di DKV, jangan ragu untuk menghubungi kami.</p>
Terima kasih atas kunjungan Anda, dan selamat berpetualang dalam dunia desain komunikasi visual!

Salam kreatif,
<br>
",
            "kaprodi"       => "<p align='left'><b>Riri Irma Suryani, S.Sn., M.Sn</b><br>Kepala Program Studi Desain Komunikasi Visual<br>dkv@ittelkom-pwt.ac.id</p>",
            "gambar"        => "images/foto_dosen/png/foto_sambutan.png",
        ];
        return view('home',[
            "page_title"    =>  "Beranda",
            "hero"        => BerandaHero::where('default', 1)->first(),
            "sambutan"     => $sambutan,
            "video_section" => BerandaVideoSection::where('default', 1)->first(),
            "kenapa_harus_dkv"  => KenapaHarusDkv::all(),
            "karya" => Karya::take(6)->get(),
            "event" => Event::take(3)->get(),
            "berita" => Berita::take(3)->get(),
            "penawaran" => Penawaran::where('default', 1)->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBerandaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBerandaRequest $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }

    //ADMIN PAGES

    //SECTION 1
    public function section1_index()
    {
        return view('admin.beranda.section1', [
            "title" => "Section 1",
            "form_description"  => "form untuk Section 1",
            "datas" => BerandaHero::all()
        ]);
    }
    public function section1_store(Request $request)
    {        
        $data = $request->validate([
                    'headline' => 'required|max:255',
                    'isi' => 'required',
                    'action_link' => 'required|max:255',
                    'action_label' => 'required|max:255',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
        $data['default'] = false;
        $path = $request->file('gambar')->store('image/beranda');
        BerandaHero::create(array_merge($data,['gambar' => $path]));        
        return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section1_update(Request $request, $id)
    {
        $hero = BerandaHero::findOrFail($id);

        // Validasi data yang diunggah
        $request->validate([
            'headline' => 'required|max:255',
            'isi' => 'required',
            'action_link' => 'required|max:255',
            'action_label' => 'required|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Format dan ukuran gambar yang diizinkan
        ]);

        // Perbarui data
        $hero->headline = $request->input('headline');
        $hero->isi = $request->input('isi');
        $hero->action_link = $request->input('action_link');

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$hero->gambar);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('gambar')->store('image/beranda');
            $hero->gambar = $gambarPath;
        }

        $hero->save();

        return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section1_delete($id)
    {
        $hero = BerandaHero::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($hero->gambar);
        // Hapus data dari database
        $hero->delete();
        return  redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil dihapus.');
    }
    public function section1_setDefault($id)
    {
        // Langkah 1: Set semua record 'default' menjadi 0
        BerandaHero::query()->update(['default' => 0]);

        // Langkah 2: Set record dengan ID tertentu menjadi 'default' = 1
        $hero = BerandaHero::find($id);
        if ($hero) {
            $hero->default = 1;
            $hero->save();
        }

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil diperbarui.');
    }


    //SECTION 2
    public function section2_index()
    {
        return view('admin.beranda.section2', [
            "title" => "Section 2",
            "form_description"  => "form untuk Section 2",
            "datas" => BerandaVideoSection::all()
        ]);
    }
    public function section2_store(Request $request)
    {        
        $data = $request->validate([
                    'headline' => 'required|max:255',
                    'isi' => 'required',
                    'action_link' => 'required',
                    'action_label' => 'required',
                    'video_url' => 'required', 
                ]);
        $data['default'] = false;
        BerandaVideoSection::create($data); 
        return redirect()->route('beranda.section2')->with('success', 'Data berhasil disimpan.');
    }
    public function section2_update(Request $request, $id)
    {
        $video_section = BerandaVideoSection::findOrFail($id);
        // Validasi data yang diunggah
        $data = $request->validate([
            'headline' => 'required|max:255',
            'isi' => 'required',
            'action_link' => 'required',
            'action_label' => 'required',
            'video_url' => 'required', 
        ]);
        BerandaVideoSection::where('id', $video_section->id)->update($data);
        return redirect()->route('beranda.section2')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section2_delete($id)
    {
        $data = BerandaVideoSection::findOrFail($id);
        $data->delete();
        return  redirect()->route('beranda.section2')->with('success', 'Data Hero berhasil dihapus.');
    }
    public function section2_setDefault($id)
    {
        // Langkah 1: Set semua record 'default' menjadi 0
        BerandaVideoSection::query()->update(['default' => 0]);

        // Langkah 2: Set record dengan ID tertentu menjadi 'default' = 1
        $data = BerandaVideoSection::find($id);
        if ($data) {
            $data->default = 1;
            $data->save();
        }
        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('beranda.section2')->with('success', 'Data Hero berhasil diperbarui.');
    }


    //SECTION 3
    public function section3_index()
    {
        return view('admin.beranda.section3', [
            "title" => "Section 3",
            "form_description"  => "form untuk Section 3",
            "datas" => KenapaHarusDkv::all()
        ]);
    }
    public function section3_store(Request $request)
    {        
        $data = $request->validate([
                    'headline' => 'required|max:255',
                    'isi' => 'required',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
        $path = $request->file('gambar')->store('image/beranda/section3');
        KenapaHarusDkv::create(array_merge($data,['gambar' => $path]));        
        return redirect()->route('beranda.section3')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section3_update(Request $request, $id)
    {
        $data = KenapaHarusDkv::findOrFail($id);

        // Validasi data yang diunggah
        $request->validate([
            'headline' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Format dan ukuran gambar yang diizinkan
        ]);

        // Perbarui data
        $data->headline = $request->input('headline');
        $data->isi = $request->input('isi');

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$data->gambar);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('gambar')->store('image/beranda/section3');
            $data->gambar = $gambarPath;
        }

        $data->save();

        return redirect()->route('beranda.section3')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section3_delete($id)
    {
        $data = KenapaHarusDkv::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($data->gambar);
        // Hapus data dari database
        $data->delete();
        return  redirect()->route('beranda.section3')->with('success', 'Data Hero berhasil dihapus.');
    }


    //SECTION 4
    public function section4_index()
    {
        return view('admin.beranda.section4', [
            "title" => "Section 4",
            "form_description"  => "form untuk Section 4",
            "datas" => Karya::all()
        ]);
    }
    public function section4_store(Request $request)
    {        
        $data = $request->validate([
                    'judul_karya' => 'required|max:255',
                    'deskripsi' => 'required',
                    'tahun' => 'required',
                    'author' => 'required',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
        $path = $request->file('gambar')->store('image/beranda/section4');
        Karya::create(array_merge($data,['gambar' => $path]));        
        return redirect()->route('beranda.section4')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section4_update(Request $request, $id)
    {
        $data = Karya::findOrFail($id);

        // Validasi data yang diunggah
        $request->validate([
                    'judul_karya' => 'required|max:255',
                    'deskripsi' => 'required',
                    'tahun' => 'required',
                    'author' => 'required',
                ]);
        // Perbarui data
        $data->judul_karya = $request->input('judul_karya');
        $data->deskripsi = $request->input('deskripsi');
        $data->tahun = $request->input('tahun');
        $data->author = $request->input('author');

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$data->gambar);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('gambar')->store('image/beranda/section4');
            $data->gambar = $gambarPath;
        }

        $data->save();

        return redirect()->route('beranda.section4')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section4_delete($id)
    {
        $data = Karya::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($data->gambar);
        // Hapus data dari database
        $data->delete();
        return  redirect()->route('beranda.section4')->with('success', 'Data Hero berhasil dihapus.');
    }

    public function instagramScrape()
    {
        return view('instagram-scrape');
    }

    //SECTION 5
    public function section5_index()
    {
        return view('admin.beranda.section5', [
            "title" => "Section 5",
            "form_description"  => "form untuk Section 5",
            "datas" => Event::all()
        ]);
    }
    public function section5_store(Request $request)
    {        
        
        $bodytext = $request->bodytext;

        $dom = new DOMDocument();
        $dom->loadHTML($bodytext,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/image/events/" . time(). $key.'.png';
            Storage::put($image_name,$data);
            $img->removeAttribute('src');
            $img->setAttribute('src','/storage'.$image_name);
        }
        $bodytext = $dom->saveHTML();

        $path = $request->file('thumbnail')->store('image/events/thumbnail');
        Event::create([
            'judul' => $request->judul,
            'thumbnail' => $path,
            'bodytext' => $bodytext
        ]);
         return redirect()->route('beranda.section5')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section5_update(Request $request, $id)
    {
        $post = Event::find($id);

        $bodytext = $request->bodytext;

        $dom = new DOMDocument();
        $dom->loadHTML($bodytext,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
              
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/image/events/" . time(). $key.'.png';
                Storage::put($image_name,$data);
                $img->removeAttribute('src');
                $img->setAttribute('src','/storage'.$image_name);
            }

        }
        $bodytext = $dom->saveHTML();

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('thumbnail')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$post->thumbnail);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('thumbnail')->store('image/events/thumbnail');
            $post->thumbnail= $gambarPath;
            $post->save();
        }

        $post->update([
            'judul' => $request->judul,
            'bodytext' => $bodytext
        ]);

        return redirect()->route('beranda.section5')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section5_delete($id)
    {
        $data = Event::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($data->thumbnail);
        // Hapus data dari database
        $data->delete();
        return  redirect()->route('beranda.section5')->with('success', 'Data Hero berhasil dihapus.');
    }

    //SECTION 6
    public function section6_index()
    {
        return view('admin.beranda.section6', [
            "title" => "Section 6",
            "form_description"  => "form untuk Section 6",
            "datas" => Berita::all()
        ]);
    }
    public function section6_store(Request $request)
    {        
        
        // $bodytext = $request->bodytext;
        // $bodytext = preg_replace('/<o:p>.*?<\/o:p>/', '', $bodytext);

        // $dom = new DOMDocument();
        // $dom->loadHTML($bodytext, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // Tambahkan flags LIBXML_HTML_NOIMPLIED dan LIBXML_HTML_NODEFDTD untuk menghindari penambahan tag <html> dan <body> secara otomatis

        // $images = $dom->getElementsByTagName('img');

        // foreach ($images as $key => $img) {
        //     $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
        //     $image_name = "images/news/" . time(). $key.'.png'; // Simpan gambar ke dalam folder 'images/news/'
        //     Storage::put($image_name, $data);
        //     $img->removeAttribute('src');
        //     $img->setAttribute('src', asset('/storage/' . $image_name)); // Ubah path src gambar untuk menunjuk ke folder penyimpanan
        // }
        // $bodytext = $dom->saveHTML();

        // Berita::create([
        //     'headline' => $request->headline,
        //     'subheadline' => $request->subheadline,
        //     'thumbnail' => $request->file('thumbnail')->store('images/news'), // Simpan thumbnail ke dalam folder 'images/news/thumbnail'
        //     'bodytext' => $bodytext
        // ]);

        // return redirect()->route('beranda.section6')->with('success', 'Data Hero berhasil diperbarui.');
        $bodytext = $request->bodytext;
        $bodytext = preg_replace('/<o:p>.*?<\/o:p>/', '', $bodytext);

        $dom = new DOMDocument();
        $dom->loadHTML($bodytext, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "images/news/" . time(). $key.'.png'; // Simpan gambar ke dalam folder 'images/news/'
            $path = public_path($image_name); // Path untuk menyimpan gambar di direktori publik

            // Simpan gambar langsung ke direktori publik menggunakan file_put_contents
            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', asset($image_name)); // Ubah path src gambar untuk menunjuk ke folder penyimpanan
        }
        $bodytext = $dom->saveHTML();

        Berita::create([
            'headline' => $request->headline,
            'subheadline' => $request->subheadline,
            'thumbnail' => $request->file('thumbnail')->store('images/news'), // Simpan thumbnail ke dalam folder 'images/news/thumbnail'
            'bodytext' => $bodytext
        ]);

        return redirect()->route('beranda.section6')->with('success', 'Data Hero berhasil diperbarui.');

   
    }
    public function section6_update(Request $request, $id)
    {
        $post = Berita::find($id);

        $bodytext = $request->bodytext;
        $bodytext = preg_replace('/<o:p>.*?<\/o:p>/', '', $bodytext);

        $dom = new DOMDocument();
        $dom->loadHTML($bodytext,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
              
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/image/events/" . time(). $key.'.png';
                Storage::put($image_name,$data);
                $img->removeAttribute('src');
                $img->setAttribute('src','/storage'.$image_name);
            }

        }
        $bodytext = $dom->saveHTML();

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('thumbnail')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$post->thumbnail);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('thumbnail')->store('image/berita/thumbnail');
            $post->thumbnail= $gambarPath;
            $post->save();
        }

        $post->update([
            'headline' => $request->headline,
            'subheadline' => $request->subheadline,
            'bodytext' => $bodytext
        ]);

        return redirect()->route('beranda.section6')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section6_delete($id)
    {
        $data = Berita::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($data->thumbnail);
        // Hapus data dari database
        $data->delete();
        return  redirect()->route('beranda.section6')->with('success', 'Data Hero berhasil dihapus.');
    }

    //SECTION 7
    public function section7_index()
    {
        return view('admin.beranda.section7', [
            "title" => "Section 7",
            "form_description"  => "form untuk Section 7",
            "datas" => Penawaran::all()
        ]);
    }
    public function section7_store(Request $request)
    {        
        $data = $request->validate([
                    'headline' => 'required|max:255',
                    'isi' => 'required',
                    'action_link' => 'required|max:255',
                    'action_label' => 'required|max:255',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
        $data['default'] = false;
        $path = $request->file('gambar')->store('image/beranda');
        Penawaran::create(array_merge($data,['gambar' => $path]));        
        return redirect()->route('beranda.section7')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section7_update(Request $request, $id)
    {
        $hero = Penawaran::findOrFail($id);

        // Validasi data yang diunggah
        $request->validate([
            'headline' => 'required|max:255',
            'isi' => 'required',
            'action_link' => 'required|max:255',
            'action_label' => 'required|max:255',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Format dan ukuran gambar yang diizinkan
        ]);

        // Perbarui data
        $hero->headline = $request->input('headline');
        $hero->isi = $request->input('isi');
        $hero->action_link = $request->input('action_link');

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$hero->gambar);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('gambar')->store('image/beranda');
            $hero->gambar = $gambarPath;
        }

        $hero->save();

        return redirect()->route('beranda.section7')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section7_delete($id)
    {
        $hero = Penawaran::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($hero->gambar);
        // Hapus data dari database
        $hero->delete();
        return  redirect()->route('beranda.section7')->with('success', 'Data Hero berhasil dihapus.');
    }
    public function section7_setDefault($id)
    {
        // Langkah 1: Set semua record 'default' menjadi 0
        Penawaran::query()->update(['default' => 0]);

        // Langkah 2: Set record dengan ID tertentu menjadi 'default' = 1
        $hero = Penawaran::find($id);
        if ($hero) {
            $hero->default = 1;
            $hero->save();
        }

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('beranda.section7')->with('success', 'Data Hero berhasil diperbarui.');
    }

}
