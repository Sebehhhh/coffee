<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('c_panel.menus.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('c_panel.menus.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'best_seller' => 'boolean',
            'sampel' => 'boolean',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('uploads/menus', 'public');
        }

        Menu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'category_id' => $request->category_id,
            'best_seller' => $request->best_seller ?? false,
            'sampel' => $request->sampel ?? false,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('c_panel.menus.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'best_seller' => 'boolean',
            'sampel' => 'boolean',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'category_id' => $request->category_id,
            'best_seller' => $request->best_seller ?? false,
            'sampel' => $request->sampel ?? false,
        ];

        if ($request->hasFile('gambar')) {
            if ($menu->gambar) {
                Storage::disk('public')->delete($menu->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('uploads/menus', 'public');
        }

        $menu->update($data);
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        if ($menu->gambar) {
            $imagePath = str_replace('storage/', 'public/', $menu->gambar);
            Storage::disk('public')->delete($imagePath);
        }

        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus.');
    }
}
