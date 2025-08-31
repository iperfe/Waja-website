@extends('layouts.app')
@section('content')

<!-- Hero Section with Animated Pattern Background -->
<section class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 py-24 overflow-hidden">
  <!-- Animated Pattern Background -->
  <div class="absolute inset-0">
    <!-- Grid Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Animated Gradient Blobs -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-500/30 to-purple-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-500/30 to-pink-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-gradient-to-br from-purple-500/30 to-cyan-500/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
    
    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden">
      <div class="particles-container"></div>
    </div>
  </div>

  <!-- Hero Content -->
  <div class="relative z-10 max-w-6xl mx-auto px-4">
    <div class="text-center">
      <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-8 tracking-tight animate-fade-in-up">
        About 
        <span class="relative">
          <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
            Waja Group
          </span>
          <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></span>
        </span>
      </h1>
      <p class="text-xl md:text-2xl text-blue-100/90 max-w-3xl mx-auto mb-12 leading-relaxed animate-fade-in-up animation-delay-300">
        A dynamic group of companies pioneering innovation across Insurance, Biochemical Solutions, and Education in East Africa.
      </p>
      
      <!-- Hero CTAs -->
      <div class="flex flex-wrap justify-center gap-6 animate-fade-in-up animation-delay-600">
        <a href="#our-companies" class="group relative px-8 py-4 bg-white text-blue-900 rounded-xl font-semibold overflow-hidden">
          <span class="relative z-10 flex items-center gap-2">
            Discover Our Companies
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
          <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-purple-100 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
        </a>
        <a href="{{ route('contact') }}" class="group relative px-8 py-4 bg-transparent text-white rounded-xl font-semibold overflow-hidden">
          <span class="relative z-10 flex items-center gap-2">
            Partner With Us
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
          <div class="absolute inset-0 border-2 border-white rounded-xl"></div>
          <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
          <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </a>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center animate-bounce">
        <span class="text-white/60 text-sm mb-2">Scroll to explore</span>
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Group Overview Section with Parallax -->
<section class="relative py-24 bg-white overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 bg-gradient-to-b from-gray-50/50 to-white pointer-events-none"></div>
  <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23f3f4f6\' fill-opacity=\'0.8\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'50\' cy=\'50\' r=\'3\'/%3E%3Ccircle cx=\'0\' cy=\'50\' r=\'3\'/%3E%3Ccircle cx=\'100\' cy=\'50\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>

  <div class="relative max-w-7xl mx-auto px-4">
    <!-- Section Header -->
    <div class="max-w-3xl mx-auto text-center mb-20">
      <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 rounded-full text-sm font-medium mb-4 animate-fade-in">
        Our Story
      </span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight animate-fade-in">
        Building Tomorrow's
        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          Solutions Today
        </span>
      </h2>
      <p class="text-xl text-gray-600 leading-relaxed animate-fade-in">
        From our humble beginnings to becoming a leading diversified group, our journey has been driven by innovation, excellence, and a commitment to positive impact.
      </p>
    </div>

    <!-- Timeline -->
    <div class="relative">
      <!-- Timeline Line -->
      <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-200 via-purple-200 to-pink-200"></div>

      <!-- Timeline Items -->
      <div class="space-y-24">
        <!-- Timeline Item 1 -->
        <div class="relative group">
          <div class="flex items-center justify-center mb-8">
            <div class="w-16 h-16 bg-white rounded-full border-4 border-blue-200 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-blue-600">1</span>
            </div>
          </div>
          <div class="max-w-2xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Foundation & Early Growth</h3>
            <p class="text-gray-600">Started as a small insurance brokerage, laying the groundwork for what would become a diverse business group...</p>
          </div>
        </div>

        <!-- Timeline Item 2 -->
        <div class="relative group">
          <div class="flex items-center justify-center mb-8">
            <div class="w-16 h-16 bg-white rounded-full border-4 border-purple-200 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-purple-600">2</span>
            </div>
          </div>
          <div class="max-w-2xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Expansion into Biochemicals</h3>
            <p class="text-gray-600">Diversified into biochemical solutions, bringing innovation to agriculture and industry...</p>
          </div>
        </div>

        <!-- Timeline Item 3 -->
        <div class="relative group">
          <div class="flex items-center justify-center mb-8">
            <div class="w-16 h-16 bg-white rounded-full border-4 border-pink-200 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-pink-600">3</span>
            </div>
          </div>
          <div class="max-w-2xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Educational Excellence</h3>
            <p class="text-gray-600">Launched our educational institutions, committed to nurturing future leaders...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24">
      <!-- Stat 1 -->
      <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-50 p-8 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-20 h-20 bg-blue-200 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative">
          <div class="text-4xl font-bold text-blue-600 mb-2 group-hover:scale-110 transition-transform duration-300">3</div>
          <div class="text-sm text-gray-600">Business Divisions</div>
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-purple-50 to-pink-50 p-8 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-20 h-20 bg-purple-200 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative">
          <div class="text-4xl font-bold text-purple-600 mb-2 group-hover:scale-110 transition-transform duration-300">20+</div>
          <div class="text-sm text-gray-600">Years Experience</div>
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-50 to-emerald-50 p-8 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-20 h-20 bg-green-200 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative">
          <div class="text-4xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform duration-300">1000+</div>
          <div class="text-sm text-gray-600">Satisfied Clients</div>
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-cyan-50 to-blue-50 p-8 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 w-20 h-20 bg-cyan-200 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative">
          <div class="text-4xl font-bold text-cyan-600 mb-2 group-hover:scale-110 transition-transform duration-300">100+</div>
          <div class="text-sm text-gray-600">Team Members</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Companies Section -->
<section id="our-companies" class="relative py-24 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 overflow-hidden">
  <!-- Background Effects -->
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-blue-900/50 to-transparent"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-20">
      <span class="inline-block px-4 py-2 bg-white/10 text-blue-200 backdrop-blur-sm rounded-full text-sm font-medium mb-4">
        Our Companies
      </span>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
        Excellence Across Sectors
      </h2>
      <p class="text-xl text-blue-200 max-w-3xl mx-auto">
        Each of our companies is a leader in its sector, working together to create comprehensive solutions for our clients
      </p>
    </div>

    <!-- Companies Grid -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Insurance Company Card -->
      <div class="group relative bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-blue-600/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Waja Insurance</h3>
          <p class="text-blue-200 mb-6">Comprehensive insurance solutions for businesses and individuals across multiple industries.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center text-blue-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Commercial Insurance
            </li>
            <li class="flex items-center text-blue-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Risk Management
            </li>
            <li class="flex items-center text-blue-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Claims Support
            </li>
          </ul>
          <a href="{{ route('products') }}" class="inline-flex items-center text-blue-200 font-medium group-hover:text-white transition-colors duration-300">
            Learn More
            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Biochemical Company Card -->
      <div class="group relative bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-br from-green-600 to-emerald-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-green-600/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Waja Biochemical</h3>
          <p class="text-green-200 mb-6">Advanced biochemical solutions for agriculture, research, and industrial applications.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center text-green-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Agricultural Solutions
            </li>
            <li class="flex items-center text-green-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Research Products
            </li>
            <li class="flex items-center text-green-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Industrial Chemicals
            </li>
          </ul>
          <a href="#" class="inline-flex items-center text-green-200 font-medium group-hover:text-white transition-colors duration-300">
            Learn More
            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Education Company Card -->
      <div class="group relative bg-white/10 backdrop-blur-sm rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-500">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-pink-800 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-purple-600/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
            <svg class="w-8 h-8 text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-4">Waja Schools</h3>
          <p class="text-purple-200 mb-6">Quality education services focused on nurturing future leaders through modern learning approaches.</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center text-purple-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Modern Facilities
            </li>
            <li class="flex items-center text-purple-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Expert Faculty
            </li>
            <li class="flex items-center text-purple-200">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              Holistic Development
            </li>
          </ul>
          <a href="#" class="inline-flex items-center text-purple-200 font-medium group-hover:text-white transition-colors duration-300">
            Learn More
            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Team Section -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center mb-20">
      <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-100 to-indigo-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Our Leadership
      </span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
        Meet The Team Behind Our Success
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Our experienced leadership team brings diverse expertise across insurance, biochemical, and education sectors
      </p>
    </div>

    <!-- Team Grid -->
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Team Member Card 1 -->
      <div class="group relative">
        <div class="relative rounded-2xl overflow-hidden mb-4">
          <div class="aspect-w-4 aspect-h-5">
            <img src="{{ asset('images/team-1.jpg') }}" alt="CEO" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
            <div class="absolute bottom-0 left-0 right-0 p-6">
              <div class="flex justify-center gap-3">
                <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm hover:bg-white/40 transition-colors duration-300">
                  <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                  </svg>
                </a>
                <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm hover:bg-white/40 transition-colors duration-300">
                  <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <h4 class="text-xl font-bold text-gray-900 mb-1">John Doe</h4>
          <p class="text-blue-600 font-medium mb-2">Group CEO</p>
          <p class="text-gray-600 text-sm">Leading our vision across all business verticals</p>
        </div>
      </div>

      <!-- Team Member Card 2 -->
      <div class="group relative">
        <!-- Similar structure as above, different image and details -->
      </div>

      <!-- Team Member Card 3 -->
      <div class="group relative">
        <!-- Similar structure as above, different image and details -->
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-500/20 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
  </div>

  <!-- Content -->
  <div class="relative max-w-5xl mx-auto px-4 text-center">
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Partner With Us?</h2>
    <p class="text-xl text-blue-200 mb-12 max-w-3xl mx-auto">
      Whether you're looking for insurance solutions, biochemical products, or educational services, we're here to help you succeed
    </p>
    <div class="flex flex-wrap justify-center gap-6">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-900 rounded-xl font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
        Get in Touch
      </a>
      <a href="{{ route('products') }}" class="px-8 py-4 border-2 border-white text-white rounded-xl font-semibold hover:bg-white hover:text-blue-900 transform hover:scale-105 transition-all duration-300">
        Explore Our Services
      </a>
    </div>
  </div>
</section>

<style>
/* Animation Keyframes */
@keyframes fade-in-up {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes blob {
  0%, 100% {
    transform: translate(0, 0) scale(1);
  }
  25% {
    transform: translate(20px, -50px) scale(1.1);
  }
  50% {
    transform: translate(-20px, 20px) scale(0.9);
  }
  75% {
    transform: translate(50px, 50px) scale(1.05);
  }
}

/* Animation Classes */
.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

.animate-blob {
  animation: blob 7s infinite;
}

.animation-delay-2000 {
  animation-delay: 2s;
}

.animation-delay-4000 {
  animation-delay: 4s;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f5f9;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #3b82f6, #1d4ed8);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #1d4ed8, #1e40af);
}
</style>

@endsection
