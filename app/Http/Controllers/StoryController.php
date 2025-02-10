<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('c_panel.stories.index', compact('stories'));
    }

    public function create()
    {
        return view('c_panel.stories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cerita' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('uploads/stories', 'public');
            $validated['gambar'] = $gambar;
        }

        Story::create($validated);
        return redirect()->route('story.index')->with('success', 'Story created successfully.');
    }

    public function edit(Story $story)
    {
        return view('c_panel.stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {
        $validated = $request->validate([
            'cerita' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($story->gambar && file_exists(public_path('storage/' . $story->gambar))) {
                unlink(public_path('storage/' . $story->gambar));
            }
            $validated['gambar'] = $request->file('gambar')->store('uploads/stories', 'public');
        }

        $story->update($validated);
        return redirect()->route('story.index')->with('success', 'Story updated successfully.');
    }

    public function destroy(Story $story)
    {
        if ($story->gambar && file_exists(public_path('images/' . $story->gambar))) {
            unlink(public_path('images/' . $story->gambar));
        }

        $story->delete();
        return redirect()->route('story.index')->with('success', 'Story deleted successfully.');
    }
}
