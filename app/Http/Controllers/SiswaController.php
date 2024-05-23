<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Institusi;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('admin.siswa.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Siswa $siswa)
    {
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'posisi' => 'required',
            'ku_umur' => 'required',
            'no_punggung' => 'numeric',
            'foto' => 'image|max:2048|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('post-image'); // Simpan foto ke direktori 'post-image'
            $validatedData['foto'] = $fotoPath; // Simpan nama file foto ke dalam data yang akan disimpan dalam database

        }

        Siswa::create($validatedData);

        return redirect('admin/siswa')->with('success', 'Berhasil menambah sata baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.update', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'posisi' => 'required',
            'ku_umur' => 'required',
            'no_punggung' => 'numeric',
            'foto' => 'image|max:2048|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $fotoPath = $request->file('foto')->store('post-image'); // Simpan foto ke direktori 'post-image'
            $validatedData['foto'] = $fotoPath; // Simpan nama file foto ke dalam data yang akan disimpan dalam database
        }

        $siswa->update($validatedData);

        return redirect('admin/siswa')->with('success', 'Berhasil menambah sata baru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        if ($siswa->foto) {
            Storage::delete($siswa->foto);
        }

        $siswa->delete();

        return redirect('admin/siswa')->with('success', 'Data berhasil di hapus');
    }


    public function getSiswa12(Request $request)
    {
        $currentUrl = $request->url();
        $institusi = Institusi::latest()->first();
        if ($currentUrl == 'http://127.0.0.1:8000/u-12') {
            $siswa = Siswa::where('ku_umur', 'U-12')->get();
            $ku_umur = 12;
            return view('menu.soccer_school', ['siswa' => $siswa, 'ku_umur' => $ku_umur, 'institusi' => $institusi]);
        } elseif ($currentUrl == 'http://127.0.0.1:8000/u-15') {
            $siswa15 = Siswa::where('ku_umur', 'U-15')->get();
            $ku_umur = 15;
            return view('menu.soccer_school', ['siswa15' => $siswa15, 'ku_umur' => $ku_umur, 'institusi' => $institusi]);
        } elseif ($currentUrl == 'http://127.0.0.1:8000/u-17') {
            $siswa = Siswa::where('ku_umur', 'U-17')->get();
            $ku_umur = 17;
            return view('menu.soccer_school', ['siswa' => $siswa, 'ku_umur' => $ku_umur, 'institusi' => $institusi]);
        } elseif ($currentUrl == 'http://127.0.0.1:8000/u-19') {
            $siswa19 = Siswa::where('ku_umur', 'U-19')->get();
            $ku_umur = 19;
            return view('menu.soccer_school', ['siswa19' => $siswa19, 'ku_umur' => $ku_umur, 'institusi' => $institusi]);
        }
    }
}
