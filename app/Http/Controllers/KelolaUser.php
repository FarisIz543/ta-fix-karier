<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class KelolaUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::all();
        return view('admin/kelolauser/index',[
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();   
        return view('admin/kelolauser/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
        'name'  => $request->name,
        'email'  => $request->email,
        'password'  => $request->password
    ]);
     return redirect()-> route('user.index')->with('success', 'Data User Berhasil ditambahkan');  
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
        $user = User::find($id);
        // dd($user);
        $user->delete();
        return redirect()->back();
    }
}
