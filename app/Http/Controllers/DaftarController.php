<?php

namespace App\Http\Controllers;

use App\Models\Institusi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Daftar;

class DaftarController extends Controller
{
    public function index()
    {
        $institusi = Institusi::latest()->first();
        return view('menu.daftar', compact('institusi'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'no_hp' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Daftar::create($validatedData);

        return redirect('konfirmasi_daftar')->with('success', 'Berhasil');
    }

    public function konfirmasiDaftar(){
        $institusi = Institusi::latest()->first();
        return view('menu.konfirmasi_daftar', compact('institusi'));
    }

    public function dataDaftar(){
        $data_pendaftaran = Daftar::latest()->get();
        return view('admin.pendaftaran.dataDaftar', compact('data_pendaftaran'));
    }

    public function show($id) {
        $daftar = Daftar::find($id);
        return view('admin.pendaftaran.pendaftaran_detail', compact('daftar'));
    }

    public function destroy($id){
        $daftar = Daftar::find($id);
        $daftar->delete();
         return redirect('admin/pendaftaran')->with('success', "data telah di hapus");
    }
}
