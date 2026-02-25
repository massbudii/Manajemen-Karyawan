<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pegawai = Pegawai::all();
       return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama_pegawai'=> 'required',
            'nik' => 'required|numeric|unique:pegawais,nik,',
            'alamat'=> 'required',
            'umur'=> 'required|numeric',
            'tanggal_lahir'=> 'required|date',
            'tempat_lahir'=> 'required',
            'jenis_kelamin'=> 'required|in:laki-laki,perempuan',
        ], [
            'nama_pegawai.required' => 'Kolom wajib diisi.',
            'nik.required' => 'Kolom wajib diisi.',
            'nik.numeric' => 'Nik harus berupa angka',
            'nik.unique' => 'Nik sudah terdaftar',
            'alamat.required' => 'Kolom wajib diisi.',
            'umur.required' => 'Kolom wajib diisi.',
            'umur.numeric' => 'Umur harus berupa angka.',
            'tanggal_lahir.required' => 'Kolom wajib diisi.',
            'tempat_lahir.required' => 'Kolom wajib diisi.',
            'jenis_kelamin.required' => 'Kolom wajib diisi.',
        ]);

       Pegawai::create($validated);
       return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan');


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
        $pegawai = Pegawai::find($id);
        // dd($pegawai);
        return view('pegawai.edit' , compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        // dd($pegawai->toArray());
            $validated = $request->validate([
           'nama_pegawai'=> 'required',
            'nik' => 'required|numeric|unique:pegawais,nik,' . $pegawai->id,
            'alamat'=> 'required',
            'umur'=> 'required|numeric',
            'tanggal_lahir'=> 'required|date',
            'tempat_lahir'=> 'required',
            'jenis_kelamin'=> 'required|in:laki-laki,perempuan',

            ]);

            $pegawai->update($validated);
            return redirect()->route('pegawai.index')->with('success', 'Data berhasil di update');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Pegawai::destroy($id);
       return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
