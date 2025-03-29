<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Pegawai::get();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('sukses', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pegawai::where('id',$id)->first();
        return view('detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pegawai::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Pegawai::where('id', $id)->update([
            'name' => $request->name,
            'nip' => $request->nip,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data berdasarkan ID, jika tidak ditemukan akan error 404
        Pegawai::findOrFail($id)->delete();
    
        // Redirect dengan pesan sukses
        return redirect()->route('pegawai.index')->with('sukses', 'Data berhasil dihapus');
    }
}
