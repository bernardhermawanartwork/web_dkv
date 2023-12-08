<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $program_internal = Program::where('kategori','internal')->get();
        $program_eksternal = Program::where('kategori','kolaborasi')->get();
        return view('program',
        [
            "page_title"        => "Program DKV",
            "program_internal"  => $program_internal,
            "program_eksternal" => $program_eksternal
        ]);
    }

    public function detailProgram_index($nama)
    {
        return view('detail-program',
        [
            "page_title"        => "Program DKV",
            "datas"             => Program::where('nama',$nama)->get()
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
    public function store(StoreProgramRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
