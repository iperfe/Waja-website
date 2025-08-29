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
  
  <div class="relative z-10 max-w-5xl mx-auto px-4 text-center text-white">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 animate-fade-in-up">
      About <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Waja Insurance</span>
    </h1>
    <p class="text-lg md:text-xl max-w-3xl mx-auto text-blue-100 animate-fade-in-up animation-delay-300">
      Founded with a vision to revolutionize insurance services, we deliver consistently high quality products & services across our industry segments.
    </p>
  </div>
</section>

<!-- Company Story Section -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="space-y-6">
        <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
          Our Story
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
          Building Trust Through 
          <span class="text-blue-600">Excellence</span>
        </h2>
        <p class="text-lg text-gray-600 leading-relaxed">
          With years of dedicated service in the insurance industry, Waja Insurance has grown from a small brokerage firm to a trusted partner for businesses across Tanzania. Our journey is marked by continuous innovation, unwavering commitment to our clients, and a deep understanding of the unique challenges faced by different industries.
        </p>
        <p class="text-gray-600 leading-relaxed">
          We pride ourselves on building long-lasting relationships with our clients, understanding their specific needs, and providing tailored insurance solutions that offer real value and comprehensive protection.
        </p>
        
        <!-- Key Stats -->
        <div class="grid grid-cols-2 gap-6 pt-6">
          <div class="text-center p-4 bg-blue-50 rounded-lg transform hover:scale-105 transition-all duration-300">
            <div class="text-2xl font-bold text-blue-600">15+</div>
            <div class="text-sm text-gray-600">Years Experience</div>
          </div>
          <div class="text-center p-4 bg-indigo-50 rounded-lg transform hover:scale-105 transition-all duration-300">
            <div class="text-2xl font-bold text-indigo-600">500+</div>
            <div class="text-sm text-gray-600">Satisfied Clients</div>
          </div>
        </div>
      </div>
      
      <div class="relative">
        <div class="absolute -top-4 -left-4 w-full h-full bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl"></div>
        <div class="relative bg-white p-8 rounded-2xl shadow-xl">
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Trusted Partnership</h4>
                <p class="text-sm text-gray-600 mt-1">Building relationships based on trust and transparency</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Quick Response</h4>
                <p class="text-sm text-gray-600 mt-1">Fast and efficient service delivery</p>
              </div>
            </div>
            
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-cyan-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Expert Knowledge</h4>
                <p class="text-sm text-gray-600 mt-1">Deep industry expertise across all sectors</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Our Foundation
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mission, Vision & Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">The core principles that guide everything we do</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Mission -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl transform rotate-3 group-hover:rotate-6 transition-transform duration-300"></div>
        <div class="relative bg-white p-8 rounded-2xl shadow-xl transform group-hover:-translate-y-2 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
          <p class="text-gray-600 leading-relaxed">To lead in every segment we operate by serving customer needs relentlessly, providing comprehensive insurance solutions that protect and empower our clients to achieve their goals.</p>
          
          <div class="mt-6 flex items-center text-blue-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
      
      <!-- Vision -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-2xl transform -rotate-3 group-hover:-rotate-6 transition-transform duration-300"></div>
        <div class="relative bg-white p-8 rounded-2xl shadow-xl transform group-hover:-translate-y-2 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
          <p class="text-gray-600 leading-relaxed">Creating possibilities through innovation and quality, becoming the most trusted insurance partner in Tanzania and beyond, known for our exceptional service and comprehensive coverage.</p>
          
          <div class="mt-6 flex items-center text-indigo-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
      
      <!-- Values -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-cyan-700 rounded-2xl transform rotate-2 group-hover:rotate-4 transition-transform duration-300"></div>
        <div class="relative bg-white p-8 rounded-2xl shadow-xl transform group-hover:-translate-y-2 transition-all duration-300">
          <div class="w-16 h-16 bg-gradient-to-br from-cyan-600 to-cyan-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-4">Our Values</h3>
          <div class="space-y-3">
            <div class="flex items-center gap-3">
              <div class="w-2 h-2 bg-cyan-600 rounded-full"></div>
              <span class="text-gray-600 font-medium">Integrity</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-2 h-2 bg-cyan-600 rounded-full"></div>
              <span class="text-gray-600 font-medium">Safety</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-2 h-2 bg-cyan-600 rounded-full"></div>
              <span class="text-gray-600 font-medium">Sustainability</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-2 h-2 bg-cyan-600 rounded-full"></div>
              <span class="text-gray-600 font-medium">Excellence</span>
            </div>
          </div>
          
          <div class="mt-6 flex items-center text-cyan-600 font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 transform translate-x-0 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Our Team
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Experts</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Experienced professionals dedicated to your success</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Team Member 1 -->
      <div class="group text-center">
        <div class="relative mb-6 mx-auto w-32 h-32">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-full transform group-hover:scale-110 transition-transform duration-300"></div>
          <div class="relative w-full h-full bg-gray-200 rounded-full flex items-center justify-center text-white text-3xl font-bold">
            JD
          </div>
        </div>
        <h4 class="text-xl font-bold text-gray-900 mb-2">John Doe</h4>
        <p class="text-blue-600 font-medium mb-3">Chief Executive Officer</p>
        <p class="text-gray-600 text-sm leading-relaxed">Leading our company with over 15 years of insurance industry experience.</p>
        
        <div class="flex justify-center gap-3 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
          <a href="#" class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Team Member 2 -->
      <div class="group text-center">
        <div class="relative mb-6 mx-auto w-32 h-32">
          <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full transform group-hover:scale-110 transition-transform duration-300"></div>
          <div class="relative w-full h-full bg-gray-200 rounded-full flex items-center justify-center text-white text-3xl font-bold">
            JS
          </div>
        </div>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Jane Smith</h4>
        <p class="text-indigo-600 font-medium mb-3">Operations Manager</p>
        <p class="text-gray-600 text-sm leading-relaxed">Ensuring smooth operations and exceptional client service delivery.</p>
        
        <div class="flex justify-center gap-3 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <a href="#" class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white hover:bg-indigo-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
          <a href="#" class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white hover:bg-indigo-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Team Member 3 -->
      <div class="group text-center">
        <div class="relative mb-6 mx-auto w-32 h-32">
          <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-blue-600 rounded-full transform group-hover:scale-110 transition-transform duration-300"></div>
          <div class="relative w-full h-full bg-gray-200 rounded-full flex items-center justify-center text-white text-3xl font-bold">
            MJ
          </div>
        </div>
        <h4 class="text-xl font-bold text-gray-900 mb-2">Michael Johnson</h4>
        <p class="text-cyan-600 font-medium mb-3">Senior Insurance Advisor</p>
        <p class="text-gray-600 text-sm leading-relaxed">Providing expert guidance and tailored insurance solutions.</p>
        
        <div class="flex justify-center gap-3 mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <a href="#" class="w-8 h-8 bg-cyan-600 rounded-full flex items-center justify-center text-white hover:bg-cyan-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>
          <a href="#" class="w-8 h-8 bg-cyan-600 rounded-full flex items-center justify-center text-white hover:bg-cyan-700 transition-colors duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-16">
      <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
        Why Choose Us
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Sets Us Apart</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover the advantages of choosing Waja Insurance as your trusted partner</p>
    </div>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Feature 1 -->
      <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
          </svg>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Secure & Reliable</h4>
        <p class="text-sm text-gray-600">Your assets are protected with our robust security measures and reliable coverage options.</p>
      </div>
      
      <!-- Feature 2 -->
      <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Fast Processing</h4>
        <p class="text-sm text-gray-600">Quick quote generation and rapid claims processing to minimize your downtime.</p>
      </div>
      
      <!-- Feature 3 -->
      <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-12 h-12 bg-cyan-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Expert Support</h4>
        <p class="text-sm text-gray-600">Dedicated insurance professionals ready to assist you with personalized service.</p>
      </div>
      
      <!-- Feature 4 -->
      <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h4 class="font-bold text-gray-900 mb-2">Proven Track Record</h4>
        <p class="text-sm text-gray-600">Years of successful partnerships and satisfied clients across various industries.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600">
  <div class="max-w-4xl mx-auto px-4 text-center text-white">
    <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h3>
    <p class="text-xl text-blue-100 mb-8">Join hundreds of satisfied clients who trust us with their insurance needs</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
        Contact Us Today
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

.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out forwards;
}

.animation-delay-300 {
  animation-delay: 0.3s;
  opacity: 0;
}

/* Custom scrollbar for better aesthetics */
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
