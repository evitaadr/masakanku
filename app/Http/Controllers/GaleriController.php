<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_galeri' => 'required|string|max:255',
            'description_galeri' => 'required|string',
            'image_galeri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image_galeri')->store('galeri', 'public');

        Galeri::create([
            'name_galeri' => $request->name_galeri,
            'description_galeri' => $request->description_galeri,
            'image_galeri' => $path,
        ]);

        return redirect()->route('galeris.index')
            ->with('success', 'Galeri berhasil ditambahkan');
    }


    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
{
    $request->validate([
        'name_galeri' => 'required|string|max:255',
        'description_galeri' => 'required|string',
        'image_galeri' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $data = [
        'name_galeri' => $request->name_galeri,
        'description_galeri' => $request->description_galeri,
    ];

    if ($request->hasFile('image_galeri')) {
        // Hapus gambar lama jika ada
        if ($galeri->image_galeri && file_exists(storage_path('app/public/' . $galeri->image_galeri))) {
            unlink(storage_path('app/public/' . $galeri->image_galeri));
        }

        $path = $request->file('image_galeri')->store('galeri', 'public');
        $data['image_galeri'] = $path;
    }

    $galeri->update($data);

    return redirect()->route('galeris.index')
        ->with('success', 'Galeri berhasil diperbarui');
}


    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect()->route('galeris.index')
            ->with('success', 'Galeri berhasil dihapus');
    }
}
