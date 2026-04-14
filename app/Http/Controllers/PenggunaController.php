<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('daftarpengguna', compact('data'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        Pengguna::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('pengguna.index');
    }

    public function show($id_pengguna)
    {
        $item = Pengguna::findOrFail($id_pengguna);
        return view('pengguna.show', compact('item'));
    }

    public function edit($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id_pengguna)
    {
        $item = Pengguna::findOrFail($id_pengguna);

        $item->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('pengguna.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_pengguna)
    {
        $data = Pengguna::findOrFail($id_pengguna);
        $data->delete();

        return redirect()->route('pengguna.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
