@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 py-20 overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-20 left-10 w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
    <div class="absolute top-40 right-20 w-3 h-3 bg-indigo-400 rounded-full animate-pulse"></div>
    <div class="absolute bottom-32 left-1/4 w-1 h-1 bg-blue-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-20 right-1/3 w-2 h-2 bg-indigo-300 rounded-full animate-pulse"></div>
  </div>
  
  <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
    <div class="inline-block px-4 py-2 bg-blue-100/20 backdrop-blur-sm border border-blue-200/30 text-blue-100 rounded-full text-sm font-medium mb-6 animate-fade-in-up">
      Our Services
    </div>
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 animate-fade-in-up animation-delay-300">
      Products & <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Verticals</span>
    </h1>
    <p class="text-lg md:text-xl max-w-3xl mx-auto text-blue-100 mb-8 animate-fade-in-up animation-delay-600">
      Comprehensive insurance solutions across diverse industries, tailored to meet your specific business needs and risk management requirements.
    </p>
  </div>
</section>

<!-- Main Products Grid -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Industry Solutions
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Specialized Insurance Coverage</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Professional insurance solutions designed for specific industries and business requirements</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Chemicals -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Chemicals</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive coverage for chemical manufacturing, storage, and transportation including industrial reagents, lime, and MgO operations.</p>
            
            <!-- Features List -->
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-green-600 rounded-full"></div>
                Hazardous material coverage
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-green-600 rounded-full"></div>
                Environmental liability
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-green-600 rounded-full"></div>
                Product liability insurance
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-green-50 text-green-700 rounded-lg font-medium hover:bg-green-100 transition-colors duration-300 group-hover:bg-green-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Steel -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-gray-400/20 to-slate-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-gray-600 to-slate-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Steel & Metal</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Specialized insurance for steel production, processing, and distribution including coils, sheets, profiles, and roofing materials.</p>
            
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-gray-600 rounded-full"></div>
                Equipment breakdown coverage
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-gray-600 rounded-full"></div>
                Business interruption
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-gray-600 rounded-full"></div>
                Cargo protection
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-gray-50 text-gray-700 rounded-lg font-medium hover:bg-gray-100 transition-colors duration-300 group-hover:bg-gray-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Salt -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-cyan-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Salt Production</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Complete insurance solutions for salt processing and distribution, including triple refined edible and bakery salt operations.</p>
            
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
                Food safety compliance
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
                Quality assurance coverage
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
                Distribution protection
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-blue-50 text-blue-700 rounded-lg font-medium hover:bg-blue-100 transition-colors duration-300 group-hover:bg-blue-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Mining & Metals -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-yellow-400/20 to-orange-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Mining & Metals</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Comprehensive mining insurance covering limestone, magnesite, iron, and lead extraction with specialized risk management.</p>
            
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full"></div>
                Mining operations coverage
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full"></div>
                Equipment insurance
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-yellow-600 rounded-full"></div>
                Environmental liability
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-yellow-50 text-yellow-700 rounded-lg font-medium hover:bg-yellow-100 transition-colors duration-300 group-hover:bg-yellow-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Real Estate & Hospitality -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Real Estate & Hospitality</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Specialized insurance for hotels and commercial properties with comprehensive coverage for hospitality businesses.</p>
            
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-purple-600 rounded-full"></div>
                Property damage coverage
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-purple-600 rounded-full"></div>
                Guest liability protection
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-purple-600 rounded-full"></div>
                Business interruption
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-purple-50 text-purple-700 rounded-lg font-medium hover:bg-purple-100 transition-colors duration-300 group-hover:bg-purple-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Cables -->
      <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden">
        <div class="relative p-8">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-indigo-400/20 to-blue-400/20 rounded-full -translate-y-16 translate-x-16"></div>
          <div class="relative">
            <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Cables & Electrical</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">Complete coverage for electrical cable manufacturing including LV/MV cables, conductors, and special cable applications.</p>
            
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-indigo-600 rounded-full"></div>
                Manufacturing equipment
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-indigo-600 rounded-full"></div>
                Product liability
              </li>
              <li class="flex items-center gap-2 text-sm text-gray-600">
                <div class="w-1.5 h-1.5 bg-indigo-600 rounded-full"></div>
                Electrical safety coverage
              </li>
            </ul>
            
            <a href="#" class="inline-flex items-center justify-between w-full px-4 py-3 bg-indigo-50 text-indigo-700 rounded-lg font-medium hover:bg-indigo-100 transition-colors duration-300 group-hover:bg-indigo-600 group-hover:text-white">
              <span>Learn More</span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Our Insurance Section -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Our Advantage
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Our Insurance Solutions</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Professional expertise and comprehensive coverage across all industry verticals</p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Feature 1 -->
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Industry Expertise</h4>
        <p class="text-gray-600 text-sm leading-relaxed">Deep understanding of industry-specific risks and regulatory requirements across all sectors.</p>
      </div>

      <!-- Feature 2 -->
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-green-600 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Quick Response</h4>
        <p class="text-gray-600 text-sm leading-relaxed">Fast quote generation and rapid claims processing to minimize business downtime.</p>
      </div>

      <!-- Feature 3 -->
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Dedicated Support</h4>
        <p class="text-gray-600 text-sm leading-relaxed">Personal account managers and 24/7 support for all your insurance needs.</p>
      </div>

      <!-- Feature 4 -->
      <div class="text-center group">
        <div class="w-20 h-20 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
          </svg>
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Competitive Rates</h4>
        <p class="text-gray-600 text-sm leading-relaxed">Best-in-market pricing with comprehensive coverage options tailored to your budget.</p>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        How It Works
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple Insurance Process</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Get comprehensive coverage in just a few simple steps</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <!-- Step 1 -->
      <div class="relative text-center">
        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-xl font-bold">
          1
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Contact Us</h4>
        <p class="text-gray-600 mb-6">Reach out to our experts to discuss your specific insurance needs and industry requirements.</p>
        
        <!-- Connector Line -->
        <div class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-gradient-to-r from-blue-600 to-transparent"></div>
      </div>

      <!-- Step 2 -->
      <div class="relative text-center">
        <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-xl font-bold">
          2
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Get Quote</h4>
        <p class="text-gray-600 mb-6">Receive a customized quote based on your specific business needs and risk assessment.</p>
        
        <!-- Connector Line -->
        <div class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-gradient-to-r from-indigo-600 to-transparent"></div>
      </div>

      <!-- Step 3 -->
      <div class="text-center">
        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-xl font-bold">
          3
        </div>
        <h4 class="text-lg font-bold text-gray-900 mb-3">Get Protected</h4>
        <p class="text-gray-600 mb-6">Finalize your coverage and enjoy comprehensive protection for your business operations.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600">
  <div class="max-w-4xl mx-auto px-4 text-center text-white">
    <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Protect Your Business?</h3>
    <p class="text-xl text-blue-100 mb-8">Get a customized insurance quote for your industry today</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
        Get Free Quote
      </a>
      <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transform hover:scale-105 transition-all duration-300">
        Speak with Expert
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

.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

.animation-delay-300 {
  animation-delay: 0.3s;
  opacity: 0;
}

.animation-delay-600 {
  animation-delay: 0.6s;
  opacity: 0;
}

/* Custom scrollbar */
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

/* Hover effects for cards */
.group:hover .w-16.h-16 {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>
@endsection
