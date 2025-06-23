<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\ValidatedData;

class MahasiswaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'
        ];
        $mahasiswa = Mahasiswa::with('prodi')->get();

        return view('mahasiswa.index', compact('data', 'mahasiswa'));
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
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('data', 'prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nim' => 'required|unique:mahasiswa|',
                'password' => 'required',
                'nama' => 'required',
                'tanggallahir' => 'required',
                'telp' => 'required|max:24',
                'foto' => 'required',
                'email' => 'required',
            ],
            [
                'nim.required' => 'NIM harus diisi!',
                'password.required' => 'password harus diisi!',
                'nama.required' => 'nama harus diisi!',
                'tanggallahir.required' => 'tanggal lahir harus diisi!',
                'telp.required' => 'nomor harus diisi!',
                'foto.required' => 'foto harus diisi!',
                'email.required' => 'email harus diisi!',
            ]
        );
        $validateData['password'] = Hash::make($validateData['password']);
        $data = array_merge($validateData, $request->only('id_prodi'));

        Mahasiswa::create($data);
        return redirect('mahasiswa');
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
    public function edit($id)
    {
        $data = [
            'nama' => 'Dody Putra Ramadhan',
            'foto' => 'wong ganteng.jpg'

        ];
        $mahasiswa = Mahasiswa::find($id);
        $prodi = Prodi::all();
        return view('mahasiswa.edit', compact('data', 'mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'nim' => 'required|unique:mahasiswa|',
                'password' => 'required',
                'nama' => 'required',
                'tanggallahir' => 'required',
                'telp' => 'required|max:24',
                'foto' => 'required',
                'email' => 'required',
            ],
            [
                'nim.required' => 'NIM harus diisi!',
                'password.required' => 'password harus diisi!',
                'nama.required' => 'nama harus diisi!',
                'tanggallahir.required' => 'tanggal lahir harus diisi!',
                'telp.required' => 'nomor harus diisi!',
                'foto.required' => 'foto harus diisi!',
                'email.required' => 'email harus diisi!',
            ]
        );
       // $mahasiswa = Mahasiswa::find($id);
        //if ($request->file('foto')) {
          //  if ($mahasiswa->foto) {
            //    Storage::delete($mahasiswa->foto);
            //}
            //$validateData['foto'] = $request->file('foto')->store('mahasiswa');
        //}
        //if ($request->input(['password'])) {
          //  $validateData['password'] = Hash::make($request->password);
        //}
        //$data = array_merge($validateData, $request->only('id_prodi'));
        //Mahasiswa::where('nim', $id)->update($data);
        //return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    //{
      //  $mahasiswa = Mahasiswa::find($id);
    //    if ($mahasiswa->foto) {
        //    storage::delete($mahasiswa->foto);
    //    }
      //  Mahasiswa::destroy($id);
        //return redirect('mahasiswa');
  //  }
}
