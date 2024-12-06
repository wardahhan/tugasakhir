@extends('layout')
@section('container')

<section class="bg-WHITE py-10">
  <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center md:items-start">
    <!-- Text Section -->
    <div class="md:w-1/2 text-left">
      <h1 class="text-4xl font-bold text-green-800">Tentang Tea Bliss</h1>
      <p class="text-gray-700 mt-4">
      Tea Bliss menghadirkan minuman brewed tea dengan lebih dari 10 varian rasa, dibuat dari bahan berkualitas untuk rasa autentik.
      Nikmati kehangatan dan kebahagiaan teh klasik hingga kreasi terbaru bersama Tea Bliss.
      </p>
    </div>
    <!-- Image Section -->
    <div class="md:w-1/2 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-6 md:mt-0 md:ml-10">
      <!-- Images -->
      <img src="images/blueberry.jpeg" class="w-full rounded-lg shadow-md" alt="Boba 1">
      <img src="images/boba.jpeg" class="w-full rounded-lg shadow-md" alt="Boba 2">
      <img src="images/teh.jpeg" class="w-full rounded-lg shadow-md" alt="Boba 3">
      <img src="images/matcha latte.jpeg" class="w-full rounded-lg shadow-md" alt="Boba 4">
      <img src="images/coklat.jpeg" class="w-full rounded-lg shadow-md" alt="Boba 5">
    </div>
  </div>
</section>

<!-- Section Pilihan Minuman -->
<section class="bg-white py-10">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
      <!-- Gambar -->
      <div class="flex justify-center">
        <img src="images/bobasplash.png" class="w-full max-w-md rounded-lg shadow-lg" alt="Boba Splash">
      </div>
      <!-- Teks -->
      <div class="px-4">
        <h2 class="text-4xl font-bold text-green-800 mb-4">Pilihan Minuman</h2>
        <p class="text-gray-700 mb-4">
          Tea Bliss hadir dengan enam kategori minuman yang dapat dinikmati oleh segala usia. Terdiri dari:
        </p>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li><strong>Signature Milk Tea</strong> (menu minuman milk tea terfavorit)</li>
          <li><strong>Tea Presso</strong> (menu olahan klasik dari berbagai macam teh pilihan)</li>
          <li><strong>Smoothies</strong> (menu spesial ice blended)</li>
          <li><strong>Milkshake</strong> (menu minuman susu dan es krim beraneka rasa)</li>
          <li><strong>Coffee and Latte</strong> (menu minuman brewed coffee dari barista Chatime)</li>
          <li><strong>Mood Refresh</strong> (menu minuman yang menyegarkan)</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="bg-white py-10">
  <div class="max-w-screen-xl mx-auto text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-green-800">ALASAN UTAMA UNTUK DATANG KE TEA BLISS</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
      <!-- Fun -->
      <div class="text-center">
        <img src="images/fun.jpeg" class="w-full rounded-lg shadow-lg" alt="Fun">
        <h2 class="text-xl font-bold text-green-800 mt-4">FUN</h2>
        <p class="text-gray-700 mt-2">
          Momen ceria Anda adalah prioritas kami. Mulai dari menikmati teh bersama hingga menciptakan pengalaman baru yang berkesan.
        </p>
      </div>
      <!-- Fresh -->
      <div class="text-center">
        <img src="images/frosty lemon.jpeg" class="w-full rounded-lg shadow-lg" alt="Fresh">
        <h2 class="text-xl font-bold text-green-800 mt-4">FRESH</h2>
        <p class="text-gray-700 mt-2">
          Kami menggunakan bahan segar berkualitas tinggi untuk menciptakan minuman yang otentik dan penuh rasa.
        </p>
      </div>
      <!-- Happiness -->
      <div class="text-center">
        <img src="images/hapinnes.jpeg" class="w-full rounded-lg shadow-lg" alt="Happiness">
        <h2 class="text-xl font-bold text-green-800 mt-4">HAPPINESS</h2>
        <p class="text-gray-700 mt-2">
          Kebahagiaan Anda adalah tujuan kami. Nikmati setiap tegukan teh yang dirancang untuk menyempurnakan momen Anda.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Talk To Our Staff</h2>
            <p class="text-gray-600 text-lg mb-6">I'm a paragraph. Click here to add your own text and edit me.</p>
            <a href="contact">
            <button class="bg-green-800 text-white px-8 py-3 rounded-md">Let's Talk</button>
            </a>
        </div>
    </section>




  @endsection