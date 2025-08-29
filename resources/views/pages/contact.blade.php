@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 py-20">
  <div class="max-w-7xl mx-auto px-4 text-center text-white">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
    <p class="text-xl text-blue-100">Let's discuss your insurance needs</p>
  </div>
</section>

<!-- Contact Form & Info -->
<section class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h2>
        <p class="text-gray-600 mb-8">Our team will get back to you within 24 hours</p>
        
        <form action="{{ route('contact.submit') }}" method="post" class="space-y-6">
          @csrf
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
              <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
              <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
            </div>
          </div>
          
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
            </div>
            <div>
              <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
              <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                <option value="">Select a service</option>
                <option value="mining">Mining Insurance</option>
                <option value="transport">Transport & Logistics</option>
                <option value="manufacturing">Manufacturing</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Tell us about your insurance needs..."></textarea>
          </div>
          
          <button type="submit" class="w-full md:w-auto px-8 py-4 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
            </svg>
            Send Message
          </button>
        </form>
      </div>
      
      <!-- Contact Information -->
      <div class="space-y-8">
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Get in touch</h2>
          <p class="text-gray-600 mb-8">We're here to help you find the perfect insurance solution for your needs.</p>
        </div>
        
        <!-- Contact Cards -->
        <div class="space-y-6">
          <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Phone</h3>
                <p class="text-gray-600">+255 680 277 640</p>
                <p class="text-gray-600">+255 755 666 677</p>
                <p class="text-sm text-blue-600 mt-1">Mon-Fri 8AM-6PM</p>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                <a href="mailto:wajainsurance@wajageneral.co.tz" class="text-blue-600 hover:underline">wajainsurance@wajageneral.co.tz</a>
                <p class="text-sm text-gray-500 mt-1">We'll respond within 24 hours</p>
              </div>
            </div>
          </div>
          
          <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Office Location</h3>
                <p class="text-gray-600">Uhuru Street, Mwanza</p>
                <p class="text-gray-600">Tanzania</p>
                <p class="text-sm text-purple-600 mt-1">Visit us for consultation</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Quick Stats -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6 rounded-xl text-white">
          <h3 class="font-semibold mb-4">Why Choose Waja Insurance?</h3>
          <div class="grid grid-cols-2 gap-4">
            <div class="text-center">
              <div class="text-2xl font-bold">500+</div>
              <div class="text-sm text-blue-100">Happy Clients</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold">24/7</div>
              <div class="text-sm text-blue-100">Support</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold">15+</div>
              <div class="text-sm text-blue-100">Years Experience</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold">98%</div>
              <div class="text-sm text-blue-100">Satisfaction Rate</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
      <p class="text-gray-600">Quick answers to common questions</p>
    </div>
    
    <div class="space-y-4" x-data="{ activeTab: 0 }">
      <div class="border border-gray-200 rounded-lg">
        <button @click="activeTab = activeTab === 0 ? -1 : 0" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-300">
          <span class="font-semibold text-gray-900">How quickly can I get a quote?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" :class="activeTab === 0 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div x-show="activeTab === 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="px-6 pb-4">
          <p class="text-gray-600">We provide quotes within 24 hours of receiving your inquiry. For urgent requests, we can often provide preliminary quotes within 2-4 hours during business hours.</p>
        </div>
      </div>
      
      <div class="border border-gray-200 rounded-lg">
        <button @click="activeTab = activeTab === 1 ? -1 : 1" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-300">
          <span class="font-semibold text-gray-900">What types of insurance do you offer?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" :class="activeTab === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div x-show="activeTab === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="px-6 pb-4">
          <p class="text-gray-600">We offer comprehensive insurance solutions including Mining, Transport & Logistics, Manufacturing, Life, Health, Property, and Business insurance through our network of trusted providers.</p>
        </div>
      </div>
      
      <div class="border border-gray-200 rounded-lg">
        <button @click="activeTab = activeTab === 2 ? -1 : 2" class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-300">
          <span class="font-semibold text-gray-900">Do you provide claims support?</span>
          <svg class="w-5 h-5 transform transition-transform duration-300" :class="activeTab === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div x-show="activeTab === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="px-6 pb-4">
          <p class="text-gray-600">Yes, we provide full claims support and advocacy. Our team will assist you throughout the claims process to ensure fair and timely settlements.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
