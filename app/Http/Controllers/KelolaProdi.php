<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class KelolaProdi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi=prodi::all();
        return view ('admin/kelolaprodi/index', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = prodi::all();
        return view('admin/kelolaprodi/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        prodi::create([
            'nama_prodi' =>$request->nama_prodi,
            // 'jumlah_alumni' =>$request->jumlah_alumni,
            'jurusan' =>$request->jurusan
        ]);
        return redirect()-> route('prodi.index')->with('success', 'Data prodi Berhasil ditambahkan');  

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
