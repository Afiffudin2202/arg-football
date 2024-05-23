<?php

namespace App\Http\Controllers;

use App\Models\Institusi;
use Illuminate\Http\Request;

class InstitusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institusi = Institusi::latest()->first();
        return view('admin.institusi.institusi', compact('institusi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $rules = [
            'nama_institusi' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
           
        ];
        

        $validatedData = $request->validate($rules);
        // dd($validatedData);
        Institusi::create($validatedData);
        return redirect('admin/institusi')->with('success', 'berhasil');
    }

  
}
