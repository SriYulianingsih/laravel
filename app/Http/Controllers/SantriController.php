<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    // Menampilkan daftar santri
    public function index()
{
    // Mengambil semua data santri dari database
    $santris = Santri::all();

    return view('santri.index', compact('santris'));
}
    // Menampilkan form untuk menambah santri
    public function create()
    {
        return view('santri.create');
    }

    // Menyimpan data santri baru
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'umur' => 'required|integer',
        'status' => 'required|string',
    ]);

    Santri::create($request->only(['nama', 'umur', 'status']));

    return redirect()->route('santri.index')->with('success', 'Santri berhasil ditambahkan!');

}


    // Menampilkan form untuk mengedit data santri
    public function edit($id)
    {
        $santri = Santri::findOrFail($id); // Mengambil data santri berdasarkan ID

        return view('santri.edit', compact('santri'));
    }

    // Mengupdate data santri
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'status' => 'required',
        ]);

        $santri = Santri::findOrFail($id); // Mengambil data santri berdasarkan ID
        $santri->update($request->all()); // Mengupdate data santri

        return redirect()->route('santri.index')->with('success', 'Santri berhasil diperbarui!');
    }

    // Menghapus data santri
    public function destroy($id)
    {
        $santri = Santri::findOrFail($id); // Mengambil data santri berdasarkan ID
        $santri->delete(); // Menghapus data santri

        return redirect()->route('santri.index')->with('success', 'Santri berhasil dihapus!');
    }
}

