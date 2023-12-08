<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use InstagramScraper\Instagram;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Phpfastcache\Helper\Psr16Adapter;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Berita::all();
        return view('berita',
        [
            "page_title"        => "Artikel",
            "datas"             => $artikel
        ]);
        
    }

    public function detailArtikel_index($id)
    {
        return view('detail-berita',
        [
            "page_title"        => "Artikel",
            "datas"             => Berita::where('id',$id)->get()
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
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }

    
}
