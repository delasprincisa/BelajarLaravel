<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Mahasiswa::get();
        return view('mahasiswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('sukses', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Mahasiswa::where('id',$id)->first();
        return view('mahasiswa.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Mahasiswa::where('id', $id)->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data berdasarkan ID, jika tidak ditemukan akan error 404
        Mahasiswa::findOrFail($id)->delete();
    
        // Redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with('sukses', 'Data berhasil dihapus');
    }
}
