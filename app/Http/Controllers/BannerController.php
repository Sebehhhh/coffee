<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        // Fetch all banners from the database
        $banners = Banner::all();

        // Pass the banners to the view
        return view('c_panel.banners.index', compact('banners'));
    }

    public function create()
    {
        // Return the view to create a new banner
        return view('c_panel.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('uploads/banners', 'public');
        }

        Banner::create([
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
            'gambar' => $gambar,
        ]);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
    }

    public function edit(Banner $banner)
    {
        return view('c_panel.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'sub_judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($banner->gambar) {
                Storage::disk('public')->delete(str_replace('storage/', 'public/', $banner->gambar));
            }
            $validated['gambar'] = $request->file('gambar')->store('uploads/banners', 'public');
        }

        $banner->update($validated);
        return redirect()->route('banner.index')->with('success', 'Banner berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Find the banner by ID
        $banner = Banner::findOrFail($id);

        // Delete the banner image from storage
        if ($banner->gambar) {
            $imagePath = str_replace('storage/', 'public/', $banner->gambar);
            Storage::disk('public')->delete($imagePath);
        }

        // Delete the banner from the database
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner berhasil dihapus.');
    }
}
