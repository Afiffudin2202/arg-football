<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Galeri;
use App\Models\General;
use App\Models\Institusi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControlller extends Controller
{
    public function index()
    {
        $galeri = Galeri::take(4)->get();
        $tentang = General::where('judul', 'Tentang')->first();
        $fasilitas = General::where('judul', 'Fasilitas')->first();
        $program = General::where('judul', 'Program')->first();
        $institusi = Institusi::latest()->first();
        return view('menu.home', [
            'galeri' => $galeri,
            'tentang' => $tentang,
            'fasilitas' => $fasilitas,
            'program' => $program,
            'institusi' => $institusi
        ]);
    }

    public function about()
    {
        $foto = Galeri::take(2)->get();
        $tentang = General::where('judul', 'Tentang')->first();
        $visi = General::where('judul', 'Visi')->first();
        $misi = General::where('judul', 'Misi')->first();
        $team = Team::latest()->get();
        $institusi = Institusi::latest()->first();

        return view('menu.about', compact('foto', 'tentang', 'visi', 'misi', 'team', 'institusi'));
    }

    // galeri landing page
    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        $institusi = Institusi::latest()->first();
        return view('menu.galeri', [
            'galeri' => $galeri,
            'institusi' => $institusi
        ]);
    }

    public function contact(){
        $institusi = Institusi::latest()->first();
        return view('menu.contact', compact('institusi'));
    }
}
