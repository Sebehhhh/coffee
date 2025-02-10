<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('c_panel.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('c_panel.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('uploads/blogs', 'public');
        }

        Blog::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambahkan.');
    }

    public function edit(Blog $blog)
    {
        return view('c_panel.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($blog->gambar) {
                Storage::disk('public')->delete($blog->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('uploads/blogs', 'public');
        }

        $validated['user_id'] = Auth::id();
        $blog->update($validated);
        
        return redirect()->route('blog.index')->with('success', 'Blog berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->gambar) {
            Storage::disk('public')->delete($blog->gambar);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus.');
    }
}
