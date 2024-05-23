<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::latest()->get();

        return view('admin.team.team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'nama_lengkap' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|max:2048|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('post-image');
            $validatedData['foto'] = $fotoPath;
        }
        Team::create($validatedData);
        return redirect('admin/staff')->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.team.update', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        // dd($team);
        $validatedData =  $request->validate([
            'nama_lengkap' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|max:2048|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('post-image');
            $validatedData['foto'] = $fotoPath;
        }
        $team->update($validatedData);
        return redirect('admin/staff')->with('success', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $team = Team::find($id);
        $team->delete();
        return redirect('admin/staff')->with('success', 'berhasil');
    }
}
