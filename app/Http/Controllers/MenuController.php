<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea; // Tambahkan ini untuk mengimpor model Tea

class MenuController extends Controller
{
    public function menu()
    {
        $teas = Tea::all(); // Mengambil semua produk dari database
        return view('menu', compact('teas'));
    }
}
