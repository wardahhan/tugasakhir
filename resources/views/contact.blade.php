@extends('layout')
@section('container')

    <!-- Hero Section -->
    <section class="bg-green-600 text-white py-16" id="contact">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
            <p class="text-lg">We are here to help. Please fill out the form below and we will get back to you shortly!</p>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Get In Touch</h2>
                    <p class="text-lg text-gray-600 mb-4">Tea Bliss is always here to assist you. Reach out for any queries!</p>
                    <ul class="space-y-4 text-lg text-gray-600">
                        <li class="flex items-center">
                            <span class="mr-3">📍</span>
                            <span>Tea Bliss, 123 Supernova Park, Kwangya City</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-3">📧</span>
                            <span>support@teabliss.com</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-3">📞</span>
                            <span>(+62) 123-456-789</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Form Section -->
                <div>
                    <form id="contact-form" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full p-4 mt-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full p-4 mt-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Your Email" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full p-4 mt-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">
                            Send Message
                        </button>
                    </form>
                    
                    <!-- Response Message -->
                    <div id="response-message" class="mt-6 hidden text-center text-gray-600">
                        <p class="font-semibold" id="response-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Handle form submission with JavaScript
        const form = document.getElementById('contact-form');
        const responseMessage = document.getElementById('response-message');
        const responseText = document.getElementById('response-text');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting normally

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Simple form validation
            if (name === '' || email === '' || message === '') {
                responseMessage.classList.remove('hidden');
                responseText.textContent = 'Please fill in all fields.';
                responseText.classList.add('text-red-600');
                return;
            }

            // Further validation for email
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                responseMessage.classList.remove('hidden');
                responseText.textContent = 'Please enter a valid email address.';
                responseText.classList.add('text-red-600');
                return;
            }

            // Simulate successful form submission
            responseMessage.classList.remove('hidden');
            responseText.textContent = 'Thank you for reaching out to Tea Bliss! We will get back to you soon.';
            responseText.classList.add('text-green-600');

            // Reset the form after submission
            form.reset();
        });
    </script>
@endsection