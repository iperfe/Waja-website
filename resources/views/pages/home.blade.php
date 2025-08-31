@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900/95 via-gray-900/90 to-blue-900/95"></div>
        
        <!-- Animated Background Shapes -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>
        
        <!-- Pattern Overlay -->
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%239C92AC\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <!-- Hero Swiper -->
    <div class="swiper heroSwiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 - Main Company -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-blue-900/80 z-10"></div>
                <div class="absolute inset-0 bg-cover bg-center scale-105 animate-ken-burns" 
                     style="background-image: url('{{ asset('images/hero/hero-1.jpg') }}')"></div>
                <div class="relative z-20 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="text-center">
                            <div class="reveal-on-scroll fade-up">
                                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                                    Excellence Through 
                                    <span class="text-gradient bg-gradient-to-r from-blue-400 to-indigo-400">Innovation</span>
                                </h1>
                                <p class="text-lg sm:text-xl text-gray-200 max-w-3xl mx-auto mb-8 leading-relaxed">
                                    Leading provider of comprehensive solutions across multiple industries, 
                                    delivering excellence in insurance, bio-medical, and education sectors.
                                </p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('contact') }}" 
                                       class="btn-primary transform hover:scale-105 transition-all duration-300">
                                        Get Started
                                    </a>
                                    <a href="{{ route('about') }}" 
                                       class="btn-secondary transform hover:scale-105 transition-all duration-300">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Insurance Excellence -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-blue-900/80 z-10"></div>
                <div class="absolute inset-0 bg-cover bg-center scale-105 animate-ken-burns" 
                     style="background-image: url('{{ asset('images/hero/hero-2.jpg') }}')"></div>
                <div class="relative z-20 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="text-center">
                            <div class="reveal-on-scroll fade-up">
                                <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                                    Leading in 
                                    <span class="text-gradient bg-gradient-to-r from-green-400 to-teal-400">Insurance Protection</span>
                                </h2>
                                <p class="text-lg sm:text-xl text-gray-200 max-w-3xl mx-auto mb-8 leading-relaxed">
                                    Comprehensive insurance solutions tailored for diverse industry needs across Tanzania and East Africa.
                                </p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('services') }}" 
                                       class="btn-primary transform hover:scale-105 transition-all duration-300">
                                        Our Services
                                    </a>
                                    <a href="{{ route('contact') }}" 
                                       class="btn-secondary transform hover:scale-105 transition-all duration-300">
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Bio-Medical Excellence -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/80 via-gray-900/70 to-blue-900/80 z-10"></div>
                <div class="absolute inset-0 bg-cover bg-center scale-105 animate-ken-burns" 
                     style="background-image: url('{{ asset('images/hero/hero-3.jpg') }}')"></div>
                <div class="relative z-20 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="text-center">
                            <div class="reveal-on-scroll fade-up">
                                <h2 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                                    Advanced 
                                    <span class="text-gradient bg-gradient-to-r from-purple-400 to-pink-400">Bio-Medical Solutions</span>
                                </h2>
                                <p class="text-lg sm:text-xl text-gray-200 max-w-3xl mx-auto mb-8 leading-relaxed">
                                    Pioneering healthcare innovation with cutting-edge bio-medical products and services.
                                </p>
                                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                    <a href="{{ route('biomedical') }}" 
                                       class="btn-primary transform hover:scale-105 transition-all duration-300">
                                        Discover More
                                    </a>
                                    <a href="{{ route('contact') }}" 
                                       class="btn-secondary transform hover:scale-105 transition-all duration-300">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Elements -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30">
            <div class="animate-bounce text-white cursor-pointer scroll-indicator">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute inset-0">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <rect width="10" height="10" fill="none"/>
                    <circle cx="5" cy="5" r="1" fill="currentColor"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#grid)"/>
            </svg>
        </div>
        
        <!-- Animated Shapes -->
        <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-blue-500/10 rounded-full animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-40 h-40 bg-purple-500/10 rounded-full animate-float animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Our Impact in Numbers</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Delivering excellence and creating lasting value across multiple sectors</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-gray-900 mb-2" data-target="1000">0</div>
                <div class="text-gray-600 font-medium">Happy Clients</div>
                <div class="text-sm text-gray-500 mt-1">And Growing</div>
            </div>

            <!-- Stat 2 -->
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-green-100 to-green-200 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-gray-900 mb-2" data-target="20">0</div>
                <div class="text-gray-600 font-medium">Years Experience</div>
                <div class="text-sm text-gray-500 mt-1">Of Excellence</div>
            </div>

            <!-- Stat 3 -->
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-gray-900 mb-2" data-target="3">0</div>
                <div class="text-gray-600 font-medium">Business Sectors</div>
                <div class="text-sm text-gray-500 mt-1">Integrated Solutions</div>
            </div>

            <!-- Stat 4 -->
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                    <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-gray-900 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Support Available</div>
                <div class="text-sm text-gray-500 mt-1">Always Here</div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision & Values Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="currentColor"/>
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"/>
            </svg>
        </div>
        
        <!-- Animated Gradient Blobs -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full transform -translate-x-1/2 -translate-y-1/2 animate-float"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-gradient-to-br from-indigo-400/10 to-pink-400/10 rounded-full transform translate-x-1/2 translate-y-1/2 animate-float animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                Our Foundation
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Mission, Vision & Values</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Building trust and excellence across all our business ventures
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Mission Card -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be a leading diversified company providing exceptional solutions across insurance, 
                    biochemical, and educational sectors while fostering sustainable growth and community development.
                </p>
            </div>

            <!-- Vision Card -->
            <div class="group p-8 bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be the most trusted and innovative group of companies in East Africa, creating 
                    lasting value for stakeholders while contributing to societal advancement.
                </p>
            </div>

            <!-- Values Card -->
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
                        <span class="font-medium">Integrity & Transparency</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                        <span class="font-medium">Innovation & Excellence</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                        <span class="font-medium">Community Impact</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Business Sectors Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                <pattern id="hexagons" width="50" height="43.4" patternUnits="userSpaceOnUse" patternTransform="scale(0.5)">
                    <path d="M25 0L0 43.3h50L25 0zm0 86.6l25-43.3H0l25 43.3z" fill="currentColor"/>
                </pattern>
                <rect width="100%" height="100%" fill="url(#hexagons)"/>
            </svg>
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                Our Portfolio
            </span>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Business Sectors We Serve</h3>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Diversified solutions across multiple industries, delivering excellence and innovation in every sector we operate
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Insurance Services Card -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl border border-blue-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/20 to-indigo-400/20 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Insurance Services</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Comprehensive insurance solutions for businesses and individuals across multiple industries 
                        including mining, transport, manufacturing, and commercial sectors.
                    </p>
                    <a href="{{ route('services') }}" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors duration-300 group/link">
                        <span class="text-sm">Learn more</span>
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bio-Medical Solutions Card -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl border border-green-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/20 to-emerald-400/20 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Bio-Medical Solutions</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Advanced biochemical products and solutions for agricultural, industrial, and research 
                        applications, driving innovation in chemical sciences.
                    </p>
                    <a href="{{ route('biomedical') }}" class="inline-flex items-center text-green-600 font-medium hover:text-green-700 transition-colors duration-300 group/link">
                        <span class="text-sm">Learn more</span>
                        <svg class="w-4 h-4 ml-2 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Educational Excellence Card -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl border border-purple-100 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Educational Excellence</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Quality education services and institutions dedicated to nurturing future leaders and 
                        contributing to educational development in our communities.
                    </p>
                    <a href="{{ route('education') }}" class="inline-flex items-center text-purple-600 font-medium hover:text-purple-700 transition-colors duration-300 group/link">
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
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="waves" x="0" y="0" width="100" height="20" patternUnits="userSpaceOnUse">
                    <path d="M0 15c5 0 5-10 10-10s5 10 10 10 5-10 10-10 5 10 10 10 5-10 10-10 5 10 10 10 5-10 10-10 5 10 10 10 5-10 10-10 5 10 10 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#waves)"/>
            </svg>
        </div>
        
        <!-- Animated Blobs -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-400/10 rounded-full filter blur-3xl animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-400/10 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                Client Testimonials
            </span>
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h3>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Real feedback from businesses and individuals who trust us across all our service sectors
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <!-- Star Rating -->
                <div class="flex gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>

                <!-- Testimonial Content -->
                <p class="text-gray-600 leading-relaxed mb-6">
                    "Waja General Company has been our trusted partner across multiple business needs. 
                    Their insurance solutions protected our mining operations while their professional 
                    approach impressed us."
                </p>

                <!-- Author Info -->
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold">
                        JM
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">John Mwanza</div>
                        <div class="text-sm text-gray-500">CEO, Mwanza Mining Ltd</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">
                    "Outstanding service across all their business divisions. From biochemical solutions 
                    to educational support, they've consistently delivered excellence and innovation."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold">
                        AS
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Anna Simba</div>
                        <div class="text-sm text-gray-500">Director, AgroTech Solutions</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                <div class="flex gap-1 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">
                    "A reliable partner with diverse expertise. Their comprehensive approach and commitment 
                    to quality has made them our go-to company for multiple business solutions."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-full flex items-center justify-center text-white font-bold">
                        RK
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Robert Kamau</div>
                        <div class="text-sm text-gray-500">Principal, Kamau Educational Institute</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/90 to-indigo-600/90"></div>
        <div class="absolute top-20 left-20 w-32 h-32 bg-white/10 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-white/10 rounded-full filter blur-3xl"></div>
        
        <!-- Animated Particles -->
        <div class="absolute inset-0">
            @for ($i = 0; $i < 20; $i++)
                <div class="particle absolute w-1 h-1 bg-white rounded-full"></div>
            @endfor
        </div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-3xl sm:text-4xl font-bold text-white mb-4">Ready to Transform Your Business?</h3>
        <p class="text-xl text-blue-100 mb-8 leading-relaxed">
            Partner with Waja General Company for comprehensive solutions across insurance, 
            biochemical, and educational sectors. Join 1000+ satisfied clients who trust us 
            with their success.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" 
               class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 
                      transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                Get Started Today
            </a>
            <a href="{{ route('about') }}" 
               class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold 
                      hover:bg-white hover:text-blue-600 transform hover:scale-105 
                      transition-all duration-300">
                Learn About Us
            </a>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
/* Base Animations */
@keyframes fade-up {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scale-up {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes blob {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
}

@keyframes particle {
    0% {
        transform: translate(0, 0);
        opacity: 0;
    }
    50% {
        opacity: 0.5;
    }
    100% {
        transform: translate(var(--tx), var(--ty));
        opacity: 0;
    }
}

/* Animation Classes */
.animate-fade-up {
    animation: fade-up 0.6s ease-out forwards;
}

.animate-scale-up {
    animation: scale-up 0.6s ease-out forwards;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
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

/* Particle Animation Setup */
.particle {
    --tx: 0px;
    --ty: 0px;
    animation: particle 10s ease-in infinite;
}

.particle:nth-child(1) { --tx: 100px; --ty: -100px; }
.particle:nth-child(2) { --tx: -150px; --ty: -120px; animation-delay: 0.2s; }
.particle:nth-child(3) { --tx: 130px; --ty: 150px; animation-delay: 0.4s; }
.particle:nth-child(4) { --tx: -120px; --ty: 130px; animation-delay: 0.6s; }
.particle:nth-child(5) { --tx: 150px; --ty: -150px; animation-delay: 0.8s; }

/* Swiper Customization */
.heroSwiper .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.4);
    opacity: 1;
    transition: all 0.3s ease;
}

.heroSwiper .swiper-pagination-bullet-active {
    width: 32px;
    border-radius: 6px;
    background: white;
}

.heroSwiper .swiper-button-next,
.heroSwiper .swiper-button-prev {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    backdrop-filter: blur(4px);
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
    color: white;
}
</style>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const heroSwiper = new Swiper('.heroSwiper', {
        loop: true,
        effect: 'fade',
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Intersection Observer for Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                if (entry.target.classList.contains('counter')) {
                    animateCounter(entry.target);
                }
            }
        });
    }, observerOptions);

    // Observe elements with animations
    document.querySelectorAll('.reveal-on-scroll, .counter').forEach((element) => {
        observer.observe(element);
    });

    // Counter Animation Function
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const steps = 50;
        const stepValue = target / steps;
        let current = 0;

        const timer = setInterval(() => {
            current += stepValue;
            element.textContent = Math.round(current);

            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, duration / steps);
    }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Particle System
    document.querySelectorAll('.particle').forEach((particle, index) => {
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.animationDelay = `${Math.random() * 5}s`;
    });
});
</script>
@endsection
