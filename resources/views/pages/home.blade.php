@extends('layouts.app')
@section('content')
<!-- Hero Slider Section -->
<section class="relative h-screen overflow-hidden">
  <!-- Swiper -->
  <div class="swiper heroSwiper h-full">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-indigo-800/90 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%)"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 animate-fade-in-up">
              Safeguarding your future with 
              <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">tailored insurance</span>
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8 animate-fade-in-up animation-delay-300">
              We provide comprehensive and affordable insurance coverage, building long-term relationships based on trust and transparency.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-600">
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
      
      <!-- Slide 2 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/90 to-teal-800/90 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-4xl mx-auto px-4 text-center text-white">
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
      
      <!-- Slide 3 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 to-pink-800/90 z-10"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%)"></div>
        <div class="relative z-20 h-full flex items-center justify-center">
          <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
              Trusted by 
              <span class="bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">500+ Companies</span>
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8">
              Join hundreds of satisfied clients who trust us with their insurance needs. Experience exceptional service and comprehensive coverage.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <a href="{{ route('about') }}" class="px-8 py-4 bg-purple-500 text-white rounded-lg font-semibold hover:bg-purple-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                About Us
              </a>
              <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transform hover:scale-105 transition-all duration-300">
                Join Today
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Navigation buttons -->
    <div class="swiper-button-next text-white after:text-2xl"></div>
    <div class="swiper-button-prev text-white after:text-2xl"></div>
    
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
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center group">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition-colors duration-300">
          <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">500+</div>
        <div class="text-gray-600">Happy Clients</div>
      </div>
      
      <div class="text-center group">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition-colors duration-300">
          <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">15+</div>
        <div class="text-gray-600">Years Experience</div>
      </div>
      
      <div class="text-center group">
        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
          <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
          </svg>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">$50M+</div>
        <div class="text-gray-600">Claims Processed</div>
      </div>
      
      <div class="text-center group">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition-colors duration-300">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">24/7</div>
        <div class="text-gray-600">Support</div>
      </div>
    </div>
  </div>
</section>

<!-- Mission, Vision & Values -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Mission, Vision & Values</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Building the foundation of trust and excellence in insurance services</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Mission</h3>
        <p class="text-gray-600 leading-relaxed">To safeguard our customers' futures by providing comprehensive and affordable insurance coverage, and build long-term relationships through trust, transparency and outstanding service.</p>
      </div>
      
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Vision</h3>
        <p class="text-gray-600 leading-relaxed">To be a trusted leader offering customer-centric insurance solutions that empower individuals and businesses to achieve financial security.</p>
      </div>
      
      <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
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

<!-- Target Audiences -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-16">
      <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Industries We Serve</h3>
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
          <p class="text-gray-600 leading-relaxed mb-6">Companies in extraction of minerals and metals — safety, risk management, regulatory compliance.</p>
          <a href="#" class="inline-flex items-center text-yellow-600 font-medium hover:text-yellow-700 transition-colors duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
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
          <p class="text-gray-600 leading-relaxed mb-6">Fleet & cargo insurance, route & safety management.</p>
          <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
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
          <p class="text-gray-600 leading-relaxed mb-6">Coverage for production, equipment, supply chain risks.</p>
          <a href="#" class="inline-flex items-center text-red-600 font-medium hover:text-red-700 transition-colors duration-300">
            <span class="text-sm">Learn more</span>
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
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

/* Swiper customizations */
.heroSwiper .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background: rgba(255, 255, 255, 0.5);
  opacity: 1;
}

.heroSwiper .swiper-pagination-bullet-active {
  background: white;
  transform: scale(1.2);
}

.heroSwiper .swiper-button-next,
.heroSwiper .swiper-button-prev {
  width: 50px;
  height: 50px;
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
}

.heroSwiper .swiper-button-next::after,
.heroSwiper .swiper-button-prev::after {
  font-size: 20px;
  font-weight: bold;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize Hero Swiper
  const heroSwiper = new Swiper('.heroSwiper', {
    loop: true,
    autoplay: {
      delay: 5000,
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
    speed: 1000,
    on: {
      slideChange: function() {
        // Reset animations on slide change
        const activeSlide = this.slides[this.activeIndex];
        const animatedElements = activeSlide.querySelectorAll('.animate-fade-in-up');
        animatedElements.forEach((el, index) => {
          el.style.animation = 'none';
          setTimeout(() => {
            el.style.animation = `fade-in-up 0.6s ease-out forwards`;
            if (index > 0) {
              el.style.animationDelay = `${index * 0.3}s`;
            }
          }, 100);
        });
      }
    }
  });
});
</script>
@endsection
