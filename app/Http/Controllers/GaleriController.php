<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('admin.galeri.galeri_admin', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' =>  'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('post-image');
            $validatedData['gambar'] = $gambarPath;
        }

        Galeri::create($validatedData);

        return redirect('admin/galeri')->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.update', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        // dd($request);
        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'gambar' =>  'image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldimage);
            }
            $gambarPath = $request->file('gambar')->store('post-image');
            $validatedData['gambar'] = $gambarPath;
        }

        $galeri->update($validatedData);
        return redirect('admin/galeri')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect('admin/galeri')->with('success', 'berhasil');
    }



   
}
