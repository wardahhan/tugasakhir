@extends('layout')
@section('container')

<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-center text-green-800">Our Menu</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
        @foreach ($teas as $tea)
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                @if ($tea->image)
                    <img src="{{ asset('storage/' . $tea->image) }}" alt="{{ $tea->name }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        No Image
                    </div>
                @endif
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-700">{{ $tea->name }}</h3>
                    <p class="text-gray-600">{{ $tea->description }}</p>
                    <p class="text-green-600 font-bold">Rp. {{ number_format($tea->price, 0, ',', '.') }}</p>
                    <button 
                        onclick="redirectTocart('{{ $tea->name }}', {{ $tea->price }})"
                        class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg focus:ring-4 focus:ring-yellow-300">
                        Order Now
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>



<!-- Testimonials -->
<section class="py-10">
  <div class="container mx-auto px-4">
    <h2 class="text-center text-2xl font-bold mb-6">Our Happy Customers</h2>
    <div class="flex flex-wrap justify-center gap-6">
      <!-- Testimonial Card 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <p class="text-sm text-gray-600">"I loved the Americano and service. Definitely coming back!"</p>
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
        <p class="text-sm text-gray-600">"The iced Tea was refreshing, and the atmosphere is great!"</p>
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
        <p class="text-sm text-gray-600">"The best Milkshake shop in town! Highly recommended for milkshake lovers."</p>
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
