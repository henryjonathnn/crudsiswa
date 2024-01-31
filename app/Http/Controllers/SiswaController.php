<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mengambil data dari DB
        $data = siswa::all();

        // Mengirimkan data dari DB
        return view('siswa.index', ['data' => $data]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasiData = $request->validate(
            [
                'id_siswa' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'umur' => 'required'
            ]
        );
        $simpan = siswa::create($validasiData);
        return redirect('/siswa')->with('success', 'Record created successfully');
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
        $data = siswa::findOrFail($id);

        return view('siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validasiData = $request->validate(
            [
                'id_siswa' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'umur' => 'required'
            ]
        );

        $data = siswa::findOrFail($id);

        $data->update($validasiData);

        return redirect('/siswa')->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = siswa::findOrFail($id);

        $data->delete();
        return redirect('/siswa')
        ->with('success', 'Record deleted successfully!');
    }
}
