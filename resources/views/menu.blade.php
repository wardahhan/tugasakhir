@extends('layout')
@section('container')

<!-- Coffee Card -->
<section class="py-10">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-2xl font-bold mb-6">Our Menu</h2>
    <!-- Add Products Button -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/boba.jpeg" alt="Thaitea boba" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Thaitea Boba</h3>
          <p class="text-sm text-gray-600">Rp. 16.000</p>
          <button onclick="redirectTocart('Thaitea Boba', 16000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/brwnsugar.jpeg" alt="brown sugar milk tea" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Brown Sugar Milk Tea</h3>
          <p class="text-sm text-gray-600">Rp. 17.000</p>
          <button onclick="redirectTocart('Brown Sugar Milk Tea', 17000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/coklat.jpeg" alt="choco milkshake" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Choco Milkshake</h3>
          <p class="text-sm text-gray-600">Rp. 17.000</p>
          <button onclick="redirectTocart('Choco Milkshake', 17000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/oreo.jpeg" alt="oreo milkshake" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Oreo Milkshake</h3>
          <p class="text-sm text-gray-600">Rp. 15.000</p>
          <button onclick="redirectTocart('Oreo Milkshake', 15000)"
          class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>
    
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/strawberry.jpeg" alt="strawberry milkshake" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Strawberry Milkshake</h3>
          <p class="text-sm text-gray-600">Rp. 15.000</p>
          <button onclick="redirectTocart('Strawberry Milkshake', 15000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/frosty lemon.jpeg" alt="Dalgona Coffee" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Frosty Lemon Mint</h3>
          <p class="text-sm text-gray-600">Rp. 16.000</p>
          <button onclick="redirectTocart('Frosty Lemon Mint', 16000)"
          class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/teh.jpeg" alt="Ice Tea Clasic" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Ice Tea Clasic</h3>
          <p class="text-sm text-gray-600">Rp. 10.000</p>
          <button onclick="redirectTocart('Ice Tea Clasic', 10000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="images/matcha latte.jpeg" alt="matcha tea latte" class="w-full h-56 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Matcha Tea Latte</h3>
          <p class="text-sm text-gray-600">Rp. 17.000</p>
          <button onclick="redirectTocart('Matcha Tea Latte', 17000)"
           class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
            Order Now
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonials -->
<section class="py-10">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-2xl font-bold mb-6">Our Happy Customers</h2>
    <div class="flex flex-wrap justify-center gap-6">
      <!-- Testimonial Card 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <p class="text-sm text-gray-600">"I loved the cappuccino and service. Definitely coming back!"</p>
        <div class="mt-4 flex items-center space-x-4">
          <img src="images/1.jpeg" alt="Customer" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">Jaemin</p>
            <p class="text-xs text-yellow-500">★★★★★</p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 2 -->
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <p class="text-sm text-gray-600">"The iced coffee was refreshing, and the atmosphere is great!"</p>
        <div class="mt-4 flex items-center space-x-4">
          <img src="images/2.jpeg" alt="Customer" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">Irene</p>
            <p class="text-xs text-yellow-500">★★★★★</p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 3 -->
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <p class="text-sm text-gray-600">"The best coffee shop in town! Highly recommended for coffee lovers."</p>
        <div class="mt-4 flex items-center space-x-4">
          <img src="images/3.jpeg" alt="Customer" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">Dede Jay</p>
            <p class="text-xs text-yellow-500">★★★★★</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function redirectTocart(name, price) {
    // Ambil cart yang sudah ada di LocalStorage, jika tidak ada buat array baru
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Tambahkan item baru ke dalam cart
    cart.push({ name: name, price: price });

    // Simpan kembali cart ke LocalStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Redirect ke halaman cart
    window.location.href = "/cart"; // Pastikan route '/cart' ada di aplikasi Anda
  }
</script>



@endsection
