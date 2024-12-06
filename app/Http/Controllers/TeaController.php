<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeaController extends Controller
{
    public function index()
    {
        $teas = Tea::all(); // Ambil semua data dari tabel `teas`
        return view('teas.index', compact('teas'));
    }

    public function create()
    {
        return view('teas.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file gambar jika ada
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        // Simpan produk ke database
        Tea::create($validated);

        return redirect()->route('teas.index')->with('success', 'Product added successfully.');
    }

    public function edit(Tea $tea)
    {
        return view('teas.edit', compact('tea'));
    }

    public function update(Request $request, Tea $tea)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $tea->update($validated);

        return redirect()->route('teas.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Tea $tea)
    {
        $tea->delete();
        return redirect()->route('teas.index')->with('success', 'Tea deleted successfully!');
    }
}
