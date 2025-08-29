<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'WajaCompany' }}</title>
  <meta name="description" content="Waja Insurance Brokers - trusted broker providing tailored, affordable insurance solutions.">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-gray-800 bg-gray-50">
  <!-- Header -->
  <header class="border-b bg-white shadow-sm sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center gap-3 group">
        <div class="h-10 w-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center text-white font-bold text-lg transform group-hover:scale-105 transition-transform duration-300">
          W
        </div>
        <div>
          <div class="font-bold text-lg text-gray-900 group-hover:text-blue-600 transition-colors duration-300">Waja General Company</div>
          <div class="text-xs text-gray-500">Insurance Brokers</div>
        </div>
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex gap-8 items-center">
        <a href="{{ route('home') }}" class="text-sm font-medium hover:text-blue-600 transition-colors duration-300 relative group">
          Home
          <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="{{ route('about') }}" class="text-sm font-medium hover:text-blue-600 transition-colors duration-300 relative group">
          About Us
          <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="{{ route('products') }}" class="text-sm font-medium hover:text-blue-600 transition-colors duration-300 relative group">
          Verticals
          <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="{{ route('contact') }}" class="text-sm font-medium hover:text-blue-600 transition-colors duration-300 relative group">
          Contact
          <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
        </a>
      </nav>

      <!-- Contact Info -->
      <div class="hidden lg:flex items-center gap-4 text-sm text-gray-600">
        <div class="flex items-center gap-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
          </svg>
          <span>+255 680 277 640</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
          </svg>
          <a href="mailto:wajainsurance@wajageneral.co.tz" class="hover:text-blue-600 transition-colors duration-300">wajainsurance@wajageneral.co.tz</a>
        </div>
      </div>

      <!-- Mobile Menu Button -->
      <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300" x-data @click="$dispatch('toggle-mobile')">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <div x-data="{open:false}" @toggle-mobile.window="open=!open" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden border-t bg-white">
      <div class="px-4 py-4 space-y-2">
        <a href="{{ route('home') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300">Home</a>
        <a href="{{ route('about') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300">About Us</a>
        <a href="{{ route('products') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300">Verticals</a>
        <a href="{{ route('contact') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300">Contact</a>
        <div class="pt-4 border-t">
          <p class="text-sm text-gray-600 px-4">+255 680 277 640</p>
          <p class="text-sm text-gray-600 px-4">wajainsurance@wajageneral.co.tz</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="min-h-screen">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-16">
      <div class="grid md:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div class="md:col-span-2">
          <div class="flex items-center gap-3 mb-4">
            <div class="h-10 w-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center text-white font-bold text-lg">
              W
            </div>
            <div>
              <div class="font-bold text-lg text-white">Waja General Company</div>
              <div class="text-xs text-gray-400">Insurance Brokers</div>
            </div>
          </div>
          <p class="text-gray-300 mb-6 max-w-md">We help clients find the best coverage by offering access to multiple insurance providers and personalized solutions.</p>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors duration-300">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-white font-semibold mb-4">Quick Links</h4>
          <ul class="space-y-3">
            <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors duration-300">About Us</a></li>
            <li><a href="{{ route('products') }}" class="text-gray-300 hover:text-white transition-colors duration-300">Verticals</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-300">Contact</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-white font-semibold mb-4">Contact</h4>
          <div class="space-y-3 text-gray-300">
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 mt-0.5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
              </svg>
              <p class="text-sm">Uhuru Street, Mwanza</p>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
              </svg>
              <div class="text-sm">
                <p>+255 680 277 640</p>
                <p>+255 755 666 677</p>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
              </svg>
              <a href="mailto:wajainsurance@wajageneral.co.tz" class="text-sm hover:text-white transition-colors duration-300">wajainsurance@wajageneral.co.tz</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Copyright -->
    <div class="border-t border-gray-800">
      <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center">
        <p class="text-sm text-gray-400">© {{ date('Y') }} Waja Insurance Brokers. All rights reserved.</p>
        <div class="flex gap-6 mt-4 md:mt-0">
          <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a>
          <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors duration-300">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to top button -->
  <button id="scrollToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 transform scale-0 z-50">
    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
  </button>

  <script>
    // Scroll to top functionality
    window.addEventListener('scroll', function() {
      const scrollToTop = document.getElementById('scrollToTop');
      if (window.pageYOffset > 300) {
        scrollToTop.classList.remove('scale-0');
      } else {
        scrollToTop.classList.add('scale-0');
      }
    });

    document.getElementById('scrollToTop').addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>
</body>
</html>
