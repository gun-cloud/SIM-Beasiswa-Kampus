<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Spatie\Backtrace\File;

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
            'beasiswas' => Beasiswa::paginate(4),
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
            'nama'       => 'required',
            'jenis'      => 'required',
            'sumber'     => 'required',
            'deskripsi'  => 'required',
            'gambar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $beasiswa = Beasiswa::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $oldImagePath = public_path($beasiswa->gambar);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;

            $beasiswa->update([
                'gambar'     => $imagePath,
                'nama'       => $request->nama,
                'jenis'      => $request->jenis,
                'sumber'     => $request->sumber,
                'deskripsi'  => $request->deskripsi,
            ]);
        } else {
            $beasiswa->update([
                'nama'       => $request->nama,
                'jenis'      => $request->jenis,
                'sumber'     => $request->sumber,
                'deskripsi'  => $request->deskripsi,
            ]);
        }

        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa Berhasil Di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $oldImagePath = public_path($beasiswa->gambar);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        $beasiswa->delete();
        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa Berhasil Di Hapus');
    }
}
