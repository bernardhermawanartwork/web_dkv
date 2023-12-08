<?php

namespace App\Http\Controllers;

use App\Models\Pengmas;
use App\Models\Akademik;
use App\Models\Kurikulum;
use App\Models\KuliahUmum;
use App\Http\Requests\StoreAkademikRequest;
use App\Http\Requests\UpdateAkademikRequest;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //LAYANAN AKADEMIK
        $layanan_akademik = [
            "headline"   => "Akses Layanan Akademik untuk Mengetahui Informasi Lebih Lanjut",
            "link"       => "https://akademik.ittelkom-pwt.ac.id/layanan/",
            "background" => "pattern.jpg",
        ];
        //END LAYANAN AKADEMIK
        
        $mbkm = "";
        $kuliah_umum = KuliahUmum::take(6)->get();
        $pengmas = "";
        $tugas_akhir = "";
        $kerja_praktek = "";
        return view('akademik',[
            "page_title"       => "Akademik",
            "layanan_akademik" => $layanan_akademik,
            
            "kuliahumum"       => $kuliah_umum,
            "pengmas"          => $pengmas,
            "tugas_akhir"      => $tugas_akhir,
            "kerja_praktek"    => $kerja_praktek
        ]);
    }

    public function kurikulum_index()
    {
        $kurikulum = [
            "1" => Kurikulum::where('semester','1')->get(),
            "2" => Kurikulum::where('semester','2')->get(),
            "3" => Kurikulum::where('semester','3')->get(),
            "4" => Kurikulum::where('semester','4')->get(),
            "5" => Kurikulum::where('semester','5')->get(),
            "6" => Kurikulum::where('semester','6')->get(),
            "7" => Kurikulum::where('semester','7')->get(),
            "8" => Kurikulum::where('semester','8')->get(),
        ];
        return view('kurikulum',[
            "page_title"       => "Kurikulum",
            "kurikulum"        => $kurikulum,
        ]);
    }

    public function mbkm_index()
    {
        return view('mbkm',[
            "page_title"       => "Kurikulum",
        ]);
    }

    public function kuliahUmum_index()
    {
        
        $kuliah_umum = KuliahUmum::take(6)->get();
        return view('kuliah-umum',[
            "page_title"       => "Kuliah Umum",
            "kuliahumum"       => $kuliah_umum,
            
        ]);
    }
    public function detailKuliahUmum_index($id)
    {
        
        $kuliah_umum = KuliahUmum::where('id',$id)->get();
        return view('detail-kuliahUmum',[
            "page_title"       => "Kuliah Umum",
            "kuliahumum"       => $kuliah_umum,
            
        ]);
    }

    public function pengmas_index()
    {
        
        $pengmas = Pengmas::all();
        return view('pengmas',[
            "page_title"       => "Pengabdian Masyarakat",
            "pengmas"       => $pengmas,
            
        ]);
    }

    public function detailPengmas_index($id)
    {
        
        $pengmas = Pengmas::where('id',$id)->get();
        return view('detail-pengmas',[
            "page_title"       => "Pengabdian Masyarakat",
            "pengmas"       => $pengmas,
            
        ]);
    }

    public function tugasAkhir_index()
    {
        return view('tugas-akhir',[
            "page_title"       => "Tugas Akhir",
        ]);
    }

    public function kerjaPraktek_index()
    {
        return view('kerja-praktek',[
            "page_title"       => "Kerja Praktek",
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
    public function store(StoreAkademikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Akademik $akademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akademik $akademik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkademikRequest $request, Akademik $akademik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akademik $akademik)
    {
        //
    }
}
