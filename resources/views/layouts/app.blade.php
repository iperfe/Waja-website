<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'WajaCompany' }}</title>
  <meta name="description" content="Waja Insurance Brokers - trusted broker providing tailored, affordable insurance solutions.">
  @vite(['resources/css/app.css','resources/js/app.js'])
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased text-gray-800 bg-gray-50">
  <!-- Top Bar -->
  <div class="bg-blue-900 text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 py-2">
      <div class="flex flex-col md:flex-row justify-between items-center gap-2">
        <!-- Contact Info -->
        <div class="flex flex-col md:flex-row items-center gap-4">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <span>+255 680 277 640</span>
            <span class="hidden sm:inline">|</span>
            <span class="hidden sm:inline">+255 755 666 677</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <a href="mailto:wajainsurance@wajageneral.co.tz" class="hover:text-blue-200 transition-colors duration-300">wajainsurance@wajageneral.co.tz</a>
          </div>
        </div>
        
        <!-- Social Links & Hours -->
        <div class="flex items-center gap-4">
          <span class="text-blue-200 text-xs">Mon-Fri: 8AM-6PM</span>
          <div class="flex gap-2">
            <a href="#" class="w-6 h-6 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
              <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="#" class="w-6 h-6 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
              <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
            <a href="#" class="w-6 h-6 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
              <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
            <a href="#" class="w-6 h-6 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
              <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.748.097.118.112.222.083.343-.09.36-.293 1.175-.334 1.336-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.621 0 11.988-5.367 11.988-11.987C24.005 5.367 18.638.001 12.017.001z"/>
              </svg>
            </a>
            <a href="#" class="w-6 h-6 bg-blue-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
              <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 0">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex items-center justify-between h-20">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
          <img src="{{ asset('images/logo.svg') }}" alt="Waja Logo" class="h-12 w-12 object-contain group-hover:scale-105 transition-transform duration-300" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
          <div class="h-12 w-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center text-white font-bold text-xl transform group-hover:scale-105 transition-transform duration-300" style="display: none;">
            W
          </div>
          <div>
            <div class="font-bold text-xl text-gray-900 group-hover:text-blue-600 transition-colors duration-300">Waja General Company</div>
            <div class="text-sm text-gray-500">Insurance Brokers</div>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-8">
          <a href="{{ route('home') }}" class="relative py-2 px-3 text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 group">
            Home
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="{{ route('about') }}" class="relative py-2 px-3 text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 group">
            About Us
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
          </a>
          
          <!-- Mega Menu Services Dropdown -->
          <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
            <button class="relative py-2 px-3 text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 group flex items-center gap-1">
              Our Services
              <svg class="w-4 h-4 transform transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
              <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </button>
            
            <!-- Mega Menu Panel -->
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform -translate-y-2" 
                 x-transition:enter-end="opacity-100 transform translate-y-0" 
                 x-transition:leave="transition ease-in duration-200" 
                 x-transition:leave-start="opacity-100 transform translate-y-0" 
                 x-transition:leave-end="opacity-0 transform -translate-y-2" 
                 class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-screen max-w-6xl z-50">
              
              <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-6">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-2xl font-bold text-white">Our Insurance Services</h3>
                      <p class="text-blue-100 mt-1">Comprehensive coverage for every industry</p>
                    </div>
                    <div class="hidden md:block">
                      <div class="text-right text-white">
                        <div class="text-3xl font-bold">500+</div>
                        <div class="text-sm text-blue-100">Happy Clients</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Main Content -->
                <div class="p-8">
                  <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">
                    <!-- Industrial Services -->
                    <div class="space-y-4">
                      <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                          <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                          </svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Industrial Coverage</h4>
                      </div>
                      
                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-yellow-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-yellow-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-yellow-700">Mining Insurance</div>
                            <div class="text-sm text-gray-600">Comprehensive mining operations coverage</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-yellow-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-yellow-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-yellow-700">Chemical Products</div>
                            <div class="text-sm text-gray-600">Industrial reagents and chemicals</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-yellow-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-yellow-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-yellow-700">Steel & Metal</div>
                            <div class="text-sm text-gray-600">Steel production and processing</div>
                          </div>
                        </div>
                      </a>
                    </div>

                    <!-- Transport & Logistics -->
                    <div class="space-y-4">
                      <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                          </svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Transport & Logistics</h4>
                      </div>
                      
                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-green-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-green-700">Fleet Insurance</div>
                            <div class="text-sm text-gray-600">Commercial vehicle protection</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-green-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-green-700">Cargo Insurance</div>
                            <div class="text-sm text-gray-600">Goods in transit coverage</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-green-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-green-700">Logistics Coverage</div>
                            <div class="text-sm text-gray-600">Supply chain protection</div>
                          </div>
                        </div>
                      </a>
                    </div>

                    <!-- Manufacturing & Production -->
                    <div class="space-y-4">
                      <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                          </svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Manufacturing</h4>
                      </div>
                      
                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-blue-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-blue-700">Production Coverage</div>
                            <div class="text-sm text-gray-600">Manufacturing operations protection</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-blue-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-blue-700">Equipment Insurance</div>
                            <div class="text-sm text-gray-600">Machinery and equipment coverage</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-blue-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-blue-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-blue-700">Product Liability</div>
                            <div class="text-sm text-gray-600">Product safety and liability</div>
                          </div>
                        </div>
                      </a>
                    </div>

                    <!-- Commercial & Property -->
                    <div class="space-y-4">
                      <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                          <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                          </svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Commercial & Property</h4>
                      </div>
                      
                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-purple-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-purple-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-purple-700">Real Estate</div>
                            <div class="text-sm text-gray-600">Property and building coverage</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-purple-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-purple-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-purple-700">Hospitality</div>
                            <div class="text-sm text-gray-600">Hotels and commercial properties</div>
                          </div>
                        </div>
                      </a>

                      <a href="#" class="block group">
                        <div class="flex items-start gap-3 p-3 rounded-lg hover:bg-purple-50 transition-colors duration-300">
                          <div class="w-2 h-2 bg-purple-600 rounded-full mt-2 group-hover:scale-125 transition-transform duration-300"></div>
                          <div>
                            <div class="font-medium text-gray-900 group-hover:text-purple-700">Business Liability</div>
                            <div class="text-sm text-gray-600">General liability protection</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

                <!-- Footer CTA -->
                <div class="bg-gray-50 px-8 py-6 border-t border-gray-100">
                  <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <div>
                      <h4 class="font-semibold text-gray-900">Need a Custom Solution?</h4>
                      <p class="text-sm text-gray-600">Get personalized insurance coverage for your specific industry</p>
                    </div>
                    <div class="flex gap-3">
                      <a href="{{ route('products') }}" class="px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors duration-300">
                        View All Services
                      </a>
                      <a href="{{ route('contact') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-300">
                        Get Quote
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="{{ route('products') }}" class="relative py-2 px-3 text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 group">
            Products
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
          </a>
          
          <a href="{{ route('contact') }}" class="relative py-2 px-3 text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-300 group">
            Contact
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
          </a>
        </nav>

        <!-- CTA Button -->
        <div class="hidden lg:block">
          <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
            Get Quote
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
          <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

       <!-- Mobile Navigation -->
<div x-show="mobileMenuOpen"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform -translate-y-2"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform -translate-y-2"
     class="lg:hidden border-t bg-white">
  
  <div class="px-4 py-6 space-y-4">
    <a href="{{ route('home') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 font-medium">Home</a>
    <a href="{{ route('about') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 font-medium">About Us</a>
    
    <!-- Mobile Mega Menu -->
    <div x-data="{ open: false }">
      <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 font-medium">
        Our Services
        <svg class="w-4 h-4 transform transition-transform duration-300" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      
      <div x-show="open" x-transition class="mt-2 pl-4 space-y-4">
        <!-- Industrial Coverage -->
        <div class="space-y-2">
          <div class="font-medium text-gray-700 text-sm">Industrial Coverage</div>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-yellow-50 transition-colors duration-300 text-gray-600 text-sm">Mining Insurance</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-yellow-50 transition-colors duration-300 text-gray-600 text-sm">Chemical Products</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-yellow-50 transition-colors duration-300 text-gray-600 text-sm">Steel & Metal</a>
        </div>

        <!-- Transport & Logistics -->
        <div class="space-y-2 border-t pt-4">
          <div class="font-medium text-gray-700 text-sm">Transport & Logistics</div>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-green-50 transition-colors duration-300 text-gray-600 text-sm">Fleet Insurance</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-green-50 transition-colors duration-300 text-gray-600 text-sm">Cargo Insurance</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-green-50 transition-colors duration-300 text-gray-600 text-sm">Logistics Coverage</a>
        </div>

        <!-- Manufacturing -->
        <div class="space-y-2 border-t pt-4">
          <div class="font-medium text-gray-700 text-sm">Manufacturing</div>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors duration-300 text-gray-600 text-sm">Production Coverage</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors duration-300 text-gray-600 text-sm">Equipment Insurance</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors duration-300 text-gray-600 text-sm">Product Liability</a>
        </div>

        <!-- Commercial & Property -->
        <div class="space-y-2 border-t pt-4">
          <div class="font-medium text-gray-700 text-sm">Commercial & Property</div>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-purple-50 transition-colors duration-300 text-gray-600 text-sm">Real Estate</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-purple-50 transition-colors duration-300 text-gray-600 text-sm">Hospitality</a>
          <a href="#" class="block py-2 px-4 rounded-lg hover:bg-purple-50 transition-colors duration-300 text-gray-600 text-sm">Business Liability</a>
        </div>

        <!-- View All Services -->
        <div class="border-t pt-4">
          <a href="{{ route('products') }}" class="block py-3 px-4 rounded-lg bg-blue-600 text-white text-center font-medium hover:bg-blue-700 transition-colors duration-300">
            View All Services
          </a>
        </div>
      </div>
    </div>

    <a href="{{ route('products') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 font-medium">Products</a>
    <a href="{{ route('contact') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-50 transition-colors duration-300 font-medium">Contact</a>
  </div>
</div>
          
          <div class="pt-4 border-t">
            <a href="{{ route('contact') }}" class="block w-full bg-blue-600 text-white text-center py-3 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors duration-300">
              Get Quote
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="min-h-screen">
    @yield('content')
  </main>

  <!-- Enhanced Footer -->
  <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-blue-900 text-gray-200 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full filter blur-3xl animate-pulse"></div>
      <div class="absolute bottom-20 right-20 w-48 h-48 bg-indigo-500 rounded-full filter blur-3xl animate-pulse animation-delay-1000"></div>
      <div class="absolute top-1/2 left-1/3 w-20 h-20 bg-cyan-500 rounded-full filter blur-2xl animate-pulse animation-delay-2000"></div>
    </div>

    <div class="relative z-10">
      <!-- Main Footer Content -->
      <div class="max-w-7xl mx-auto px-4 pt-16 pb-8">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
          <!-- Company Info -->
          <div class="lg:col-span-2">
            <div class="flex items-center gap-3 mb-6 group">
              <img src="{{ asset('images/logo.svg') }}" alt="Waja Logo" class="h-12 w-12 object-contain group-hover:scale-110 transition-transform duration-300" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
              <div class="h-12 w-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform duration-300" style="display: none;">
                W
              </div>
              <div>
                <div class="font-bold text-xl text-white group-hover:text-blue-400 transition-colors duration-300">Waja General Company</div>
                <div class="text-sm text-gray-400">Insurance Brokers</div>
              </div>
            </div>
            <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
              We help clients find the best coverage by offering access to multiple insurance providers and personalized solutions. Your trusted partner in comprehensive insurance protection.
            </p>
            
            <!-- Newsletter Signup -->
            <div class="mb-6">
              <h4 class="text-white font-semibold mb-3 flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Stay Updated
              </h4>
              <div class="flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 backdrop-blur-sm">
                <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-lg font-medium hover:from-blue-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                  Subscribe
                </button>
              </div>
              <p class="text-xs text-gray-400 mt-2">Get the latest insurance tips and industry news</p>
            </div>

            <!-- Social Links -->
            <div>
              <h4 class="text-white font-semibold mb-3">Follow Us</h4>
              <div class="flex gap-3">
                <a href="#" class="group w-12 h-12 bg-gray-800/50 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                  <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                  </svg>
                </a>
                <a href="#" class="group w-12 h-12 bg-gray-800/50 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                  <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                  </svg>
                </a>
                <a href="#" class="group w-12 h-12 bg-gray-800/50 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                  <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                </a>
                <a href="#" class="group w-12 h-12 bg-gray-800/50 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                  <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.748.097.118.112.222.083.343-.09.36-.293 1.175-.334 1.336-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.621 0 11.988-5.367 11.988-11.987C24.005 5.367 18.638.001 12.017.001z"/>
                  </svg>
                </a>
                <a href="#" class="group w-12 h-12 bg-gray-800/50 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-all duration-300 transform hover:scale-110 backdrop-blur-sm">
                  <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Quick Links -->
          <div>
            <h4 class="text-white font-semibold mb-6 flex items-center gap-2">
              <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
              </svg>
              Quick Links
            </h4>
            <ul class="space-y-3">
              <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Home
              </a></li>
              <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                About Us
              </a></li>
              <li><a href="{{ route('products') }}" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Our Services
              </a></li>
              <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Contact
              </a></li>
              <li><a href="#" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Blog
              </a></li>
              <li><a href="#" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Privacy Policy
              </a></li>
            </ul>
          </div>

          <!-- Services -->
          <div>
            <h4 class="text-white font-semibold mb-6 flex items-center gap-2">
              <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
              </svg>
              Our Services
            </h4>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                Mining Insurance
              </a></li>
              <li><a href="#" class="text-gray-300 hover:text-white hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group">
                <svg class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
               </svg>
                #
              </a></li>