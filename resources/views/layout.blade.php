<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tea bliss</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body>

<!-- navbar -->
<nav class="bg-white border-white dark:bg-white" style="position: sticky; top: 0; z-index: 1000;">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="images/logoijo.jpeg" class="h-10 w-10 rounded-full" alt="Teabliss Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black ">Tea Bliss</span>
    </a>
   <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
   <a href="cart">
    <button type="button" 
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mr-2">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M5 3a1 1 0 0 0 0 2h.687L7.82 15.24A3 3 0 1 0 11.83 17h2.34A3 3 0 1 0 17 15H9.813l-.208-1h8.145a1 1 0 0 0 .979-.796l1.25-6A1 1 0 0 0 19 6h-2.268A2 2 0 0 1 15 9a2 2 0 1 1-4 0 2 2 0 0 1-1.732-3h-1.33L7.48 3.796A1 1 0 0 0 6.5 3H5Z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M14 5a1 1 0 1 0-2 0v1h-1a1 1 0 1 0 0 2h1v1a1 1 0 1 0 2 0V8h1a1 1 0 1 0 0-2h-1V5Z" clip-rule="evenodd"/>
        </svg>
    </button>
</a> 

<a href="{{ url('teas/index') }}">
    <button type="button" 
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
        </svg>
    </button>
</a>


   </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-white rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:white md:dark:bg-white dark:border-white">
        <li>
          <a href="home" class="block py-2 px-3 md:p-0 text-black bg-green-900 rounded md:bg-transparent md:text-blue-700 md:dark:text-green-600" aria-current="page">Home</a>
        </li>
        <li>
          <a href="about" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-900 md:dark:hover:text-green-600 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About us</a>
        </li>
        <li>
          <a href="menu" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-900 md:dark:hover:text-green-600 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Menu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@yield('container')

<!-- footer -->
<footer class="bg-gray-100 py-8">
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Section 1 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Our Story</h3>
        <ul class="text-gray-600 space-y-2">
          <li><a href="menu" class="hover:underline">Our Products</a></li>
          <li><a href="home" class="hover:underline">Home</a></li>
          <li><a href="about" class="hover:underline">About Us</a></li>
        </ul>
      </div>

      <!-- Section 2 -->
      <div>
        <h3 class="text-lg font-semibold mb-4">Get In Touch</h3>
        <ul class="text-gray-600 space-y-2">
          <li><a href="#" class="hover:underline">Instagram</a></li>
          <li><a href="#" class="hover:underline">YouTube</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="mt-8 border-t border-gray-300 pt-6 text-gray-600 text-sm">
      <p>© 2024 TEA BLISS. All Rights Reserved.</p>
      <p>
        <a href="#" class="hover:underline">Terms of Use</a> | 
        <a href="#" class="hover:underline">Privacy Policy</a>
      </p>
    </div>
  </div>
</footer>
 
</body>
</html>