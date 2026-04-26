<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Illuminate\Http\Request;

class MemoryController extends Controller
{
    // Home page
    public function home()
    {
        $recent = Memory::latest()->take(3)->get();
        return view('home', compact('recent'));
    }

    // Show all memories
    public function index()
    {
        $memories = Memory::latest()->get();
        return view('memories.index', compact('memories'));
    }

    // Show form to add new memory
    public function create()
    {
        return view('memories.create');
    }

    // Save new memory to database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'mood' => 'required',
            'date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['is_favorite'] = $request->has('is_favorite');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('photos'), $filename);
            $data['photo'] = $filename;
        }

        Memory::create($data);
        return redirect()->route('memories.index')
            ->with('success', 'Memory added successfully! 🤎');
    }

    // Show single memory
    public function show(Memory $memory)
    {
        return view('memories.show', compact('memory'));
    }

    // Show form to edit memory
    public function edit(Memory $memory)
    {
        return view('memories.edit', compact('memory'));
    }

    // Update memory
    public function update(Request $request, Memory $memory)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'mood' => 'required',
            'date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['is_favorite'] = $request->has('is_favorite');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('photos'), $filename);
            $data['photo'] = $filename;
        }

        $memory->update($data);
        return redirect()->route('memories.index')
            ->with('success', 'Memory updated! 🌸');
    }

    // Delete memory
    public function destroy(Memory $memory)
    {
        if ($memory->photo) {
            $photoPath = public_path('photos/' . $memory->photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $memory->delete();
        return redirect()->route('memories.index')
            ->with('success', 'Memory deleted! 🤎');
    }
}