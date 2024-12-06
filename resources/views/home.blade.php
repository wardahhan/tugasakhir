@extends('layout')
@section('container')

<!-- Utama -->
<div class="max-w-screen-lg mx-auto py-8 ">
    <div id="carousel" class="relative w-full h-[90vh]" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-full overflow-hidden rounded-lg">
        <!-- Slide 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="images/one.png" class="block w-full h-full object-contain" alt="Slide 1">
        </div>
        <!-- Slide 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="images/three.png" class="block w-full h-full object-contain" alt="Slide 2">
        </div>
        <!-- Slide 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="images/two.png" class="block w-full h-full object-contain" alt="Slide 3">
        </div>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-700 group-hover:bg-green-700 focus:ring-2 focus:ring-purple-700 focus:ring-offset-2">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-700 group-hover:bg-green-700 focus:ring-2 focus:ring-purple-700 focus:ring-offset-2">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </span>
      </button>
    </div>
</div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


 <!-- our menu -->
<header class="py-6" style="background-color: #626F47;">
    <div class="text-center text-white text-3xl font-bold">Our Menu</div>
    <p class="text-center text-white mt-2">Semua menu Tea Bliss dibuat dengan bahan-bahan pilihan terbaik untuk menghasilkan minuman yang menyegarkan dan menenangkan.</p>
</header>

<section class="py-12 px-6">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
      <!-- Card 1 -->
      <div class="flex flex-col items-center text-center">
        <img src="images/frosty lemon.jpeg" alt="Frosty Lemon Mint" class="w-40 h-40 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mt-4">Frosty Lemon Mint</h3>
      </div>
      <!-- Card 2 -->
      <div class="flex flex-col items-center text-center">
        <img src="images/matcha latte.jpeg" alt="Matcha Tea Latte" class="w-40 h-40 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mt-4">Matcha Tea Latte</h3>
      </div>
      <!-- Card 3 -->
      <div class="flex flex-col items-center text-center">
        <img src="images/strawberry.jpeg" alt="Strawberry Milkshake" class="w-40 h-40 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mt-4">Strawberry Milkshake</h3>
      </div>
      <!-- Card 4 -->
      <div class="flex flex-col items-center text-center">
        <img src="images/brwnsugar.jpeg" alt="Brown Sugar Milk Tea" class="w-40 h-40 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mt-4">Brown Sugar Milk Tea</h3>
      </div>
      <!-- Card 5 -->
      <div class="flex flex-col items-center text-center">
        <img src="images/oreo.jpeg" alt="Oreo Milkshake" class="w-40 h-40 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mt-4">Oreo Milkshakea</h3>
      </div>
    </div>
  </section>


  <!-- tiga -->
  <div class="relative bg-[#F2EED7]">
  <!-- Wave Shape -->
  <svg class="absolute top-0 w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#798645" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,234.7C384,245,480,203,576,176C672,149,768,139,864,133.3C960,128,1056,128,1152,128C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>

  <!-- Content -->
  <div class="container mx-auto py-16 px-4 pt-20 relative">
    <!-- Title -->
    <div class="text-center mb-12">
      <h1 class="text-3xl font-bold text-white">Best Quality Ingredients</h1>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
      <!-- Text Section - Left -->
      <div class="space-y-8 text-center md:text-left">
        <div>
          <h2 class="text-xl font-bold text-gray-800">Premium Ingredients</h2>
          <p class="text-gray-600">Dibuat dari bahan-bahan premium menggunakan teknik khusus untuk minuman segar.</p>
        </div>
        <div>
          <h2 class="text-xl font-bold text-gray-800">Tea</h2>
          <p class="text-gray-600">Daun teh pilihan dengan rasa menyegarkan dan aroma menenangkan.</p>
        </div>
      </div>

      <!-- Center Image -->
      <div class="flex justify-center pt-12">
        <img src="images/tengah.png" alt="Bubble Tea" class="h-96 drop-shadow-2xl rounded-lg">
      </div>

      <!-- Text Section - Right -->
      <div class="space-y-8 text-center md:text-right">
        <div>
          <h2 class="text-xl font-bold text-gray-800">Fresh Milk</h2>
          <p class="text-gray-600">Susu segar terbaik menghasilkan cita rasa yang unik.</p>
        </div>
        <div>
          <h2 class="text-xl font-bold text-gray-800">Chewy Pearl</h2>
          <p class="text-gray-600">Topping kenyal menghadirkan kenikmatan di tiap gigitan.</p>
        </div>
      </div>
    </div>
  </div>
</div>


  
  @endsection


