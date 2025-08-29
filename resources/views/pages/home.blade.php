@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900"></div>
  <div class="absolute inset-0 bg-black/40"></div>
  
  <!-- Animated background particles -->
  <div class="absolute inset-0">
    <div class="absolute top-20 left-10 w-2 h-2 bg-blue-400 rounded-full animate-ping"></div>
    <div class="absolute top-40 right-20 w-3 h-3 bg-indigo-400 rounded-full animate-pulse"></div>
    <div class="absolute bottom-32 left-1/4 w-1 h-1 bg-blue-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-20 right-1/3 w-2 h-2 bg-indigo-300 rounded-full animate-pulse"></div>
  </div>
  
  <div class="relative z-10 max-w-6xl mx-auto px-4 py-20 text-center text-white">
    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight animate-fade-in-up">
      Safeguarding your future with 
      <span class="bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">tailored insurance</span>
    </h1>
    <p class="mt-6 text-lg md:text-xl max-w-3xl mx-auto text-gray-200 animate-fade-in-up animation-delay-300">
      We provide comprehensive and affordable insurance coverage, building long-term relationships based on trust and transparency.
    </p>
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-600">
      <a href="{{ route('products') }}" class="px-8 py-4 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
        Our Verticals
      </a>
      <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transform hover:scale-105 transition-all duration-300">
        Request Quote
      </a>
    </div>
  </div>
  
  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
    </svg>
  </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Mission, Vision & Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Building the foundation of trust and excellence in insurance services</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="group p-8 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Mission</h3>
        <p class="text-gray-600 leading-relaxed">To safeguard our customers' futures by providing comprehensive and affordable insurance coverage, and build long-term relationships through trust, transparency and outstanding service.</p>
      </div>
      
      <div class="group p-8 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl border border-indigo-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Vision</h3>
        <p class="text-gray-600 leading-relaxed">To be a trusted leader offering customer-centric insurance solutions that empower individuals and businesses to achieve financial security.</p>
      </div>
      
      <div class="group p-8 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Values</h3>
        <ul class="space-y-2 text-gray-600">
          <li class="flex items-center gap-2">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            Integrity
          </li>
          <li class="flex items-center gap-2">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            Excellence
          </li>
          <li class="flex items-center gap-2">
            <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
            Trust
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Our Project & Goals -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div>
        <h3 class="text-3xl font-bold text-gray-900 mb-6">Our Project</h3>
        <p class="text-lg text-gray-600 leading-relaxed mb-8">
          Waja Insurance Brokers provides personalized insurance solutions by partnering with multiple leading insurance providers to offer a wide range of coverage options across life, health, property and business policies.
        </p>
        <div class="space-y-4">
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Comprehensive Coverage</h4>
              <p class="text-gray-600">Multiple insurance providers under one roof</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Personalized Service</h4>
              <p class="text-gray-600">Tailored solutions for your specific needs</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <div>
              <h4 class="font-semibold text-gray-900">Quick Response</h4>
              <p class="text-gray-600">Fast claims processing and support</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-white p-8 rounded-2xl shadow-lg">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Goals</h3>
        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
            <div>
              <h4 class="font-semibold text-gray-900">Customer Satisfaction</h4>
              <p class="text-gray-600 text-sm mt-1">Ensuring every client receives exceptional service and optimal coverage</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
            <div>
              <h4 class="font-semibold text-gray-900">Financial Strength</h4>
              <p class="text-gray-600 text-sm mt-1">Building robust financial partnerships for long-term stability</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
            <div>
              <h4 class="font-semibold text-gray-900">Community Impact</h4>
              <p class="text-gray-600 text-sm mt-1">Contributing to community development and social responsibility</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Target Audiences -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Target Audiences</h3>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Specialized insurance solutions for key industries</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl border border-yellow-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-yellow-400/20 to-orange-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-yellow-600 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Mining</h4>
          <p class="text-gray-600 leading-relaxed">Companies in extraction of minerals and metals — safety, risk management, regulatory compliance.</p>
          <div class="mt-6 flex items-center text-yellow-600 font-medium">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
      
      <div class="group relative overflow-hidden bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl border border-green-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Transport & Logistics</h4>
          <p class="text-gray-600 leading-relaxed">Fleet & cargo insurance, route & safety management.</p>
          <div class="mt-6 flex items-center text-green-600 font-medium">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
      
      <div class="group relative overflow-hidden bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl border border-red-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-red-400/20 to-pink-400/20 rounded-full -translate-y-16 translate-x-16"></div>
        <div class="relative p-8">
          <div class="w-16 h-16 bg-gradient-to-br from-red-600 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <h4 class="text-xl font-bold text-gray-900 mb-4">Manufacturing</h4>
          <p class="text-gray-600 leading-relaxed">Coverage for production, equipment, supply chain risks.</p>
          <div class="mt-6 flex items-center text-red-600 font-medium">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600">
  <div class="max-w-4xl mx-auto px-4 text-center text-white">
    <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Protect Your Future?</h3>
    <p class="text-xl text-blue-100 mb-8">Get personalized insurance solutions tailored to your needs</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
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
</style>
@endsection
