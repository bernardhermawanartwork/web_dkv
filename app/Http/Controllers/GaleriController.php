<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Models\KategoriGambar;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori = KategoriGambar::all();
        $gambar = Galeri::all();    
        return view('galeri',[
            "page_title"=> "Galeri DKV",
            "kategoris"  => $kategori,
            "gambar" => $gambar
        ]);
    }

    public function section1_index()
    {
        return view('admin.galeri.section1', [
            "title" => "Section 1",
            "form_description"  => "form untuk Section 1",
            "datas" => Galeri::all(),
            "kategori"  => KategoriGambar::all()
        ]);
    }
    public function section1_store(Request $request)
    {        
        $data = $request->validate([                    
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                    'judul' => 'required',
                    'deskripsi' => 'required',
                    'kategori_gambar_id'  =>'required' 
                ]);
        $path = $request->file('gambar')->store('image/galeri/section1');
        Galeri::create(array_merge($data,['gambar' => $path]));        
        return redirect()->route('galeri.section1')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section1_update(Request $request, $id)
    {
        $data = Galeri::findOrFail($id);

        // Validasi data yang diunggah
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Format dan ukuran gambar yang diizinkan
        ]);

        // Perbarui data
        $data->judul = $request->input('headline');
        $data->deskripsi = $request->input('isi');
        $data->kategori = $request->input('kategori');

        // Periksa apakah ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika perlu
            Storage::delete('storage/'.$data->gambar);

            // Simpan gambar baru ke dalam direktori storage
            $gambarPath = $request->file('gambar')->store('image/galeri/section1');
            $data->gambar = $gambarPath;
        }

        $data->save();

        return redirect()->route('galeri.section1')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section1_delete($id)
    {
        $data = Galeri::findOrFail($id);
        // Hapus gambar dari storage jika perlu
        Storage::delete($data->gambar);
        // Hapus data dari database
        $data->delete();
        return  redirect()->route('galeri.section1')->with('success', 'Data Hero berhasil dihapus.');
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
    public function store(StoreGaleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
