<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;

class KelolaAlumni extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $alumni=alumni::all();
     return view('admin/kelolaalumni/index',[
        'alumni' => $alumni
     ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumni = alumni::all();
        return view('admin/kelolaalumni/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alumni::create([
        'nim' =>$request->nim,
        'name' =>$request->name,   
        'tempat' =>$request->tempat,   
        'tanggal_lahir' =>$request->tanggal_lahir,   
        'jurusan' =>$request->jurusan,   
        'prodi' =>$request->prodi,   
        'angkatan' =>$request->angkatan,   
        ]);
        return redirect()-> route('alumni.index')->with('success', 'Data alumni berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumni $alumni)
    {
        //
    }
}
