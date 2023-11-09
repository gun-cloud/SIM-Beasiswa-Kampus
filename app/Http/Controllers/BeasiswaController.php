<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.beasiswa', [
            'title' => 'Beasiswa',
            'beasiswas' => Beasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required',
            'jenis'      => 'required',
            'sumber'     => 'required',
            'deskripsi'  => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        Beasiswa::create([
            'gambar'     => $imagePath,
            'nama'     => $request->nama,
            'jenis'   => $request->jenis,
            'sumber'   => $request->sumber,
            'deskripsi'   => $request->deskripsi,
        ]);


        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'sumber' => 'required',
        ]);
        $beasiswa = Beasiswa::find($id);
        $beasiswa->update($request->all());
        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();
        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa Berhasil Di Hapus');
    }
}
