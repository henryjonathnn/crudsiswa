<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = guru::all();

        // Mengirimkan data dari DB
        return view('guru.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasiData = $request->validate(
            [
                'id_guru' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'umur' => 'required',
                'mapel' => 'required'
            ]
        );
        $simpan = guru::create($validasiData);
        return redirect('/guru')->with('success', 'Record created successfully');
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
        $data = guru::findOrFail($id);

        return view('guru.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validasiData = $request->validate(
            [
                'id_guru' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'umur' => 'required',
                'mapel' => 'required'
            ]
        );

        $data = guru::findOrFail($id);

        $data->update($validasiData);

        return redirect('/guru')->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = guru::findOrFail($id);

        $data->delete();
        return redirect('/guru')
        ->with('success', 'Record deleted successfully!');
    }
}
