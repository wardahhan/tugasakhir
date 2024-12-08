<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teas = Tea::all(); // Ambil semua data dari tabel `teas`
        return view('teas.index', compact('teas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        Tea::create($validatedData);

        return redirect()->route('teas.index')->with('success', 'Product added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tea $tea)
    {
        return view('teas.edit', compact('tea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tea $tea)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($tea->image) {
                \Storage::disk('public')->delete($tea->image);
            }

            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        $tea->update($validatedData);

        return redirect()->route('teas.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tea $tea)
    {
        // Hapus gambar jika ada
        if ($tea->image) {
            \Storage::disk('public')->delete($tea->image);
        }

        $tea->delete();

        return redirect()->route('teas.index')->with('success', 'Tea deleted successfully!');
    }
}
