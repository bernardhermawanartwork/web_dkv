<?php

namespace App\Http\Controllers;

use App\Models\Hibah;
use App\Models\Penelitian;
use App\Http\Requests\StorePenelitianRequest;
use App\Http\Requests\UpdatePenelitianRequest;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hibah         = "";
        $aksara_jurnal = "";
        return view('penelitian',[
            "hibah"         => $hibah,
            "aksara_jurnal" => $aksara_jurnal,
            "page_title"    => "Penelitian"
        ]);
    }

    public function hibah_index()
    {
        return view('hibah',[
            "page_title"    => "Hibah",
            "hibah"         => Hibah::all()
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
    public function store(StorePenelitianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penelitian $penelitian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penelitian $penelitian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenelitianRequest $request, Penelitian $penelitian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penelitian $penelitian)
    {
        //
    }
}
