<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'
        ];
        $prodi = Prodi::all();
        return view('prodi.index', compact('data', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'
        ];
        return view('prodi.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'kaprodi' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama Prodi harus diisi!',
            'kaprodi.required' => 'Kaprodi harus diisi!',
            'jurusan.required' => 'Jurusan harus diisi!',
        ]
        );
        Prodi::create($validateData);
        return redirect()->route('prodi.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'
        ];
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('data', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'kaprodi' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ], [
            'nama.required' => 'Nama Prodi harus diisi!',
            'kaprodi.required' => 'Kaprodi harus diisi!',
            'jurusan.required' => 'Jurusan harus diisi!',
        ]
        );
        $prodi = Prodi::find($id);
        $prodi->update($validateData);
        return redirect()->route('prodi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect()->route('prodi.index');
    }
}
