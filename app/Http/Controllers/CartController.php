<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Mengambil item dari cart
         $cartItems = session()->get('cart', []);

        // Menghitung total harga
        $total = array_sum(array_column($cart, 'price'));

        return view('cart.index', ['carts' => $cartItems]);
    }

    public function add(Request $request)
    {
        // Ambil data item yang akan ditambahkan ke cart
        $cart = session()->get('cart', []);

        $cart[] = [
            'item' => $request->item,
            'price' => $request->price,
        ];

        // Simpan ke session
        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);

        // Hapus item dari cart berdasarkan ID
        unset($cart[$request->key]);

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
}
