@extends('layout')
@section('container')

<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Keranjang Belanja</h2>

    <div class="cart-container mb-6">
        <ul id="cart-list" class="space-y-4">
            <!-- Item akan ditampilkan di sini -->
        </ul>
        <p id="total-price" class="text-xl font-bold text-right mt-4">Total: Rp0</p>
    </div>

    <div class="buttons flex justify-between mt-6">
        <a href="menu" class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
            <i class="fa fa-arrow-left mr-2"></i> Kembali ke Menu
        </a>
        
        <button onclick="checkout()" class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
            Checkout
        </button>
    </div>
</div>

<script>
function loadCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartList = document.getElementById("cart-list");
    const totalPriceElement = document.getElementById("total-price");

    cartList.innerHTML = ""; 
    let totalPrice = 0;

    cart.forEach((item, index) => {
        const li = document.createElement("li");
        li.classList.add("flex", "justify-between", "items-center", "p-4", "bg-gray-100", "rounded-lg");

        li.innerHTML = `
            <div>
                <span class="font-semibold">${item.name}</span>
                <div class="text-sm text-gray-500">Rp ${item.price.toLocaleString()} x ${item.quantity}</div>
            </div>
            <div class="flex items-center space-x-2">
                <button onclick="updateCart(${index}, -1)" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                <span>${item.quantity}</span>
                <button onclick="updateCart(${index}, 1)" class="px-2 py-1 bg-green-500 text-white rounded hover:bg-green-600">+</button>
            </div>
            <span class="text-gray-600 font-bold">Rp ${(item.price * item.quantity).toLocaleString()}</span>
        `;
        
        cartList.appendChild(li);
        totalPrice += item.price * item.quantity;
    });

    totalPriceElement.textContent = `Total: Rp${totalPrice.toLocaleString()}`;
}

function updateCart(index, change) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (!cart[index]) return;

    cart[index].quantity += change;

    if (cart[index].quantity <= 0) {
        cart.splice(index, 1); // Hapus item jika jumlahnya 0
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function checkout() {
    const confirmation = confirm("Apakah Anda yakin ingin checkout?");
    if (confirmation) {
        localStorage.removeItem('cart');
        alert("Checkout berhasil! Terima kasih atas pembelian Anda.");
        location.reload();
    }
}

window.onload = loadCart;
</script>
@endsection