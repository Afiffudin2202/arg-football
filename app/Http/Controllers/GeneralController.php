<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $general = General::all();
        return view('admin.general.general', compact('general'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.general.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        General::create($validatedData);

        return redirect('admin/general')->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(General $general)
    {
        return view('admin.general.general_show', compact('general'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(General $general)
    {
        return view('admin.general.general_edit', compact('general'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, General $general)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $general->update($validatedData);

        return redirect('admin/general')->with('success', ' berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(General $general)
    {
        $general->delete();

        return redirect('admin/general')->with('success', 'berhasil');
    }
}
