<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Alumni;
use App\Models\Profil;
use App\Models\Visimisi;
use App\Models\Fasilitas;
use App\Models\BerandaHero;
use App\Models\BerandaVideoSection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dosens = Dosen::all();
        $visimisi = Visimisi::first();
        $fasilitas = Fasilitas::all();
        $alumni = Alumni::take(3)->get();
        return view("profile",[
            "dosens"        => $dosens,
            "video_section" => BerandaVideoSection::where('default', 1)->first(),
            "visimisi"      => $visimisi,
            "fasilitas"   => $fasilitas,
            "alumni"       => $alumni,
            "page_title"    => "Profil"
        ]);
    }

    public function detail_dosen($nama)
    {
        return view('detail-dosen',[
            "dosen" => Dosen::where('nama',$nama)->get(),
            "page_title" => $nama
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
    public function store(StoreProfilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilRequest $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }

    //SECTION 1
    public function section1_index()
    {
        return view('admin.profil.section1', [
            "title" => "Profil Section 1",
            "form_description"  => "form untuk Section 1",
            "datas" => Dosen::all()
        ]);
    }
    public function section1_store(Request $request)
    {        
        // $data = $request->validate([
        //             'headline' => 'required|max:255',
        //             'isi' => 'required',
        //             'action_link' => 'required|max:255',
        //             'action_label' => 'required|max:255',
        //             'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        //         ]);
        // $data['default'] = false;
        // $path = $request->file('gambar')->store('image/beranda');
        // BerandaHero::create(array_merge($data,['gambar' => $path]));        
        // return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil disimpan.');
    }
    public function section1_update(Request $request, $id)
    {
        // $hero = BerandaHero::findOrFail($id);

        // // Validasi data yang diunggah
        // $request->validate([
        //     'headline' => 'required|max:255',
        //     'isi' => 'required',
        //     'action_link' => 'required|max:255',
        //     'action_label' => 'required|max:255',
        //     'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Format dan ukuran gambar yang diizinkan
        // ]);

        // // Perbarui data
        // $hero->headline = $request->input('headline');
        // $hero->isi = $request->input('isi');
        // $hero->action_link = $request->input('action_link');

        // // Periksa apakah ada gambar baru yang diunggah
        // if ($request->hasFile('gambar')) {
        //     // Hapus gambar lama jika perlu
        //     Storage::delete('storage/'.$hero->gambar);

        //     // Simpan gambar baru ke dalam direktori storage
        //     $gambarPath = $request->file('gambar')->store('image/beranda');
        //     $hero->gambar = $gambarPath;
        // }

        // $hero->save();

        // return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil diperbarui.');
   
    }
    public function section1_delete($id)
    {
        // $hero = BerandaHero::findOrFail($id);
        // // Hapus gambar dari storage jika perlu
        // Storage::delete($hero->gambar);
        // // Hapus data dari database
        // $hero->delete();
        // return  redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil dihapus.');
    }
    public function section1_setDefault($id)
    {
        // // Langkah 1: Set semua record 'default' menjadi 0
        // BerandaHero::query()->update(['default' => 0]);

        // // Langkah 2: Set record dengan ID tertentu menjadi 'default' = 1
        // $hero = BerandaHero::find($id);
        // if ($hero) {
        //     $hero->default = 1;
        //     $hero->save();
        // }

        // // Redirect atau berikan respons sesuai kebutuhan Anda
        // return redirect()->route('beranda.section1')->with('success', 'Data Hero berhasil diperbarui.');
    }


}
