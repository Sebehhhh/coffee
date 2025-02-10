<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('c_panel.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('c_panel.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|max:2048',
            'sampel' => 'required',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('uploads/galleries', 'public');
        }

        Gallery::create([
            'gambar' => $gambar,
            'sampel' => $request->sampel,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('c_panel.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'gambar' => 'image|max:2048',
            'sampel' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            if ($gallery->gambar) {
                Storage::disk('public')->delete($gallery->gambar);
            }

            $gambar = $request->file('gambar')->store('uploads/galleries', 'public');
        } else {
            $gambar = $gallery->gambar;
        }

        $gallery->update([
            'gambar' => $gambar,
            'sampel' => $request->sampel,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil diubah.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->gambar) {
            Storage::disk('public')->delete($gallery->gambar);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil dihapus.');
    }
}
