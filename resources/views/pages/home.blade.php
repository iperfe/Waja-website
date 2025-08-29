@extends('layouts.app')
@section('content')
<!-- Hero Slider Section with Images -->
<section class="relative h-screen overflow-hidden">
  <!-- Swiper -->
  <div class="swiper heroSwiper h-full">
    <div class="swiper-wrapper">
      <!-- Slide 1 - Insurance Protection -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-waja-1.png') }}')"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-5xl mx-auto px-4 text-center text-white">
            <div class="animate-fade-in-up">
              <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                Safeguarding your future with 
                <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">tailored insurance</span>
              </h1>
              <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8">
                We provide comprehensive and affordable insurance coverage, building long-term relationships based on trust and transparency.
              </p>
              <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('products') }}" class="px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                  Our Services
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transform hover:scale-105 transition-all duration-300">
                  Get Free Quote
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 2 - Mining Industry -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-waja-2.png') }}')"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-5xl mx-auto px-4 text-center text-white">
            <div class="animate-fade-in-up">
              <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                Specialized Insurance for 
                <span class="bg-gradient-to-r from-green-400 to-teal-400 bg-clip-text text-transparent">Mining & Transport</span>
              </h1>
              <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8">
                Expert coverage for high-risk industries with customized solutions for mining operations and transport logistics.
              </p>
              <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('products') }}" class="px-8 py-4 bg-green-500 text-white rounded-lg font-semibold hover:bg-green-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                  View Industries
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transform hover:scale-105 transition-all duration-300">
                  Contact Expert
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 3 - Manufacturing -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-waja-3.png') }}')"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-5xl mx-auto px-4 text-center text-white">
            <div class="animate-fade-in-up">
              <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                Comprehensive Coverage for 
                <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Manufacturing</span>
              </h1>
              <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8">
                Protecting your production lines, equipment, and supply chain with specialized manufacturing insurance solutions.
              </p>
              <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('products') }}" class="px-8 py-4 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                  Manufacturing Coverage
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transform hover:scale-105 transition-all duration-300">
                  Get Assessment
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  
  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce z-30">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
    </svg>
  </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Trusted by Industry Leaders</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our numbers speak for themselves - delivering excellence across all sectors</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
          <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold text-gray-900 mb-2 counter" data-target="500">0</div>
        <div class="text-gray-600 font-medium">Happy Clients</div>
        <div class="text-sm text-gray-500 mt-1">Across East Africa</div>
      </div>
      
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
          <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold text-gray-900 mb-2 counter" data-target="15">0</div>
        <div class="text-gray-600 font-medium">Years Experience</div>
        <div class="text-sm text-gray-500 mt-1">Industry Leadership</div>
      </div>
      
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
          <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
          </svg>
        </div>
        <div class="text-4xl font-bold text-gray-900 mb-2">$50M+</div>
        <div class="text-gray-600 font-medium">Claims Processed</div>
        <div class="text-sm text-gray-500 mt-1">Successfully Settled</div>
      </div>
      
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
          <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <div class="text-4xl font-bold text-gray-900 mb-2">24/7</div>
        <div class="text-gray-600 font-medium">Support Available</div>
        <div class="text-sm text-gray-500 mt-1">Round the Clock</div>
      </div>
    </div>
  </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Our Foundation
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mission, Vision & Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Building the foundation of trust and excellence in insurance services</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
        <p class="text-gray-600 leading-relaxed">To safeguard our customers' futures by providing comprehensive and affordable insurance coverage, and build long-term relationships through trust, transparency and outstanding service.</p>
      </div>
      
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
        <p class="text-gray-600 leading-relaxed">To be a trusted leader offering customer-centric insurance solutions that empower individuals and businesses to achieve financial security.</p>
      </div>
      
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Our Values</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-center gap-3">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            <span class="font-medium">Integrity</span>
          </li>
          <li class="flex items-center gap-3">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            <span class="font-medium">Excellence</span>
          </li>
          <li class="flex items-center gap-3">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            <span class="font-medium">Trust</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Target Audiences -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Industry Expertise
      </div>
      <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Industries We Serve</h3>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Specialized insurance solutions for key industries across Tanzania and East Africa</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl border border-yellow-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-yellow-400/20 to-orange-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Mining</h4>
          <p class="text-gray-600 leading-relaxed mb-6">Companies in extraction of minerals and metals — safety, risk management, regulatory compliance.</p>
          <a href="#" class="inline-flex items-center text-yellow-600 font-medium hover:text-yellow-700 transition-colors duration-300 group/link">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="group relative overflow-hidden bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl border border-green-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Transport & Logistics</h4>
          <p class="text-gray-600 leading-relaxed mb-6">Fleet & cargo insurance, route & safety management.</p>
          <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-300 group/link">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="group relative overflow-hidden bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl border border-red-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-400/20 to-pink-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-red-600 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Manufacturing</h4>
          <p class="text-gray-600 leading-relaxed mb-6">Coverage for production, equipment, supply chain risks.</p>
          <a href="#" class="inline-flex items-center text-red-600 font-medium hover:text-red-700 transition-colors duration-300 group/link">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Client Testimonials
      </div>
      <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h3>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Real feedback from businesses who trust us with their insurance needs</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
        </div>
        <p class="text-gray-600 leading-relaxed mb-6">"Waja Insurance provided excellent coverage for our mining operations. Their team understood our unique risks and delivered comprehensive protection."</p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-full flex items-center justify-center text-white font-bold">
            JM
          </div>
          <div>
            <div class="font-semibold text-gray-900">John Mwanza</div>
            <div class="text-sm text-gray-500">CEO, Mwanza Mining Ltd</div>
          </div>
        </div>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
        </div>
        <p class="text-gray-600 leading-relaxed mb-6">"Outstanding service and competitive rates. Our fleet insurance is comprehensive and the claims process is incredibly smooth."</p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold">
            AS
          </div>
          <div>
            <div class="font-semibold text-gray-900">Anna Simba</div>
            <div class="text-sm text-gray-500">Operations Manager, Swift Logistics</div>
          </div>
        </div>
      </div>

      <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
        <div class="flex items-center gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
        </div>
        <p class="text-gray-600 leading-relaxed mb-6">"Professional team with deep industry knowledge. They've helped us secure comprehensive coverage for our manufacturing facility."</p>
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-pink-600 rounded-full flex items-center justify-center text-white font-bold">
            RK
          </div>
          <div>
            <div class="font-semibold text-gray-900">Robert Kamau</div>
            <div class="text-sm text-gray-500">Plant Manager, TechPro Manufacturing</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 relative overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/90 to-indigo-600/90"></div>
    <div class="absolute top-20 left-20 w-32 h-32 bg-white/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-48 h-48 bg-white/10 rounded-full filter blur-3xl"></div>
  </div>
  
  <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
    <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Protect Your Future?</h3>
    <p class="text-xl text-blue-100 mb-8 leading-relaxed">Get personalized insurance solutions tailored to your specific industry needs. Join 500+ satisfied clients who trust us with their protection.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
        Get Free Quote
      </a>
      <a href="{{ route('products') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transform hover:scale-105 transition-all duration-300">
        View Our Services
      </a>
    </div>
  </div>
</section>

<style>
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

@keyframes counter {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fade-in-up 0.8s ease-out forwards;
}

.counter {
  animation: counter 1s ease-out forwards;
}

/* Swiper customizations */
.heroSwiper .swiper-pagination-bullet {
  width: 14px;
  height: 14px;
  background: rgba(255, 255, 255, 0.4);
  opacity: 1;
  margin: 0 8px;
  transition: all 0.3s ease;
}

.heroSwiper .swiper-pagination-bullet-active {
  background: white;
  transform: scale(1.4);
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
}

.heroSwiper .swiper-button-next,
.heroSwiper .swiper-button-prev {
  width: 60px;
  height: 60px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: all 0.3s ease;
}

.heroSwiper .swiper-button-next:hover,
.heroSwiper .swiper-button-prev:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: scale(1.1);
  box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
}

.heroSwiper .swiper-button-next::after,
.heroSwiper .swiper-button-prev::after {
  font-size: 24px;
  font-weight: bold;
  color: white;
}

.heroSwiper .swiper-pagination {
  bottom: 30px;
}

/* Custom animations for stats */
@keyframes countUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.stats-animate {
  animation: countUp 0.6s ease-out forwards;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Hero Swiper
  const heroSwiper = new Swiper('.heroSwiper', {
    loop: true,
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    speed: 1500,
    on: {
      slideChange: function() {
        // Reset animations on slide change
        const activeSlide = this.slides[this.activeIndex];
        const animatedElements = activeSlide.querySelectorAll('.animate-fade-in-up');
        animatedElements.forEach((el) => {
          el.style.animation = 'none';
          setTimeout(() => {
            el.style.animation = 'fade-in-up 0.8s ease-out forwards';
          }, 100);
        });
      }
    }
  });

  // Counter animation
  const counters = document.querySelectorAll('.counter');
  const animateCounters = () => {
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'));
      const count = parseInt(counter.innerText);
      const increment = target / 100;
      
      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(animateCounters, 30);
      } else {
        counter.innerText = target;
      }
    });
  };

  // Intersection Observer for stats animation
  const statsSection = document.querySelector('.py-16');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters();
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  if (statsSection) {
    observer.observe(statsSection);
  }
});
</script>
@endsection
