<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengguna::all();
        return view('daftarpengguna', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengguna::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_pengguna)
    {
        $item = Pengguna::findOrFail($id_pengguna);
        return view('pengguna.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pengguna)
    {
        $item = Pengguna::findOrFail($id_pengguna);

        $item->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('pengguna.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
