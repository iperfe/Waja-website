<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'WajaCompany' }}</title>
  <meta name="description" content="Waja Insurance Brokers - trusted broker providing tailored, affordable insurance solutions.">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-gray-800">
  <header class="border-b bg-white">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center gap-3">
        <img src="{{ asset('logo.svg') }}" alt="Waja Logo" class="h-10 w-10 object-contain">
        <div>
          <div class="font-bold text-lg">Waja Genaral Company</div>
          <div class="text-xs text-gray-500">Insurance Brokers</div>
        </div>
      </a>

      <nav class="hidden md:flex gap-6 items-center text-sm">
        <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        <a href="{{ route('about') }}" class="hover:text-blue-600">About Us</a>
        <a href="{{ route('products') }}" class="hover:text-blue-600">Verticals</a>
        <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
      </nav>

      <div class="hidden md:block text-sm text-gray-600">
        <span>+255 680 277 640</span> · <a href="mailto:wajainsurance@wajageneral.co.tz" class="hover:underline">wajainsurance@wajageneral.co.tz</a>
      </div>

      <button class="md:hidden" x-data @click="$dispatch('toggle-mobile')">☰</button>
    </div>

    <!-- mobile -->
    <div x-data="{open:false}" @toggle-mobile.window="open=!open" x-show="open" class="md:hidden px-4 pb-4">
      <a href="{{ route('home') }}" class="block py-2">Home</a>
      <a href="{{ route('about') }}" class="block py-2">About Us</a>
      <a href="{{ route('products') }}" class="block py-2">Verticals</a>
      <a href="{{ route('contact') }}" class="block py-2">Contact</a>
    </div>
  </header>

  <main>@yield('content')</main>

  <footer class="mt-16 bg-gray-900 text-gray-200">
    <div class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-8">
      <div>
        <h4 class="text-white font-semibold">About Waja</h4>
        <p class="text-sm mt-2">We help clients find the best coverage by offering access to multiple insurance providers and personalized solutions. :contentReference[oaicite:2]{index=2}</p>
      </div>
      <div>
        <h4 class="text-white font-semibold">Quick Links</h4>
        <ul class="mt-3 space-y-2 text-sm">
          <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
          <li><a href="{{ route('products') }}" class="hover:underline">Verticals</a></li>
          <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-semibold">Contact</h4>
        <p class="text-sm mt-2">Phone: +255 680 277 640 / +255 755 666 677</p>
        <p class="text-sm">Email: wajainsurance@wajageneral.co.tz</p>
        <p class="text-sm">Address: Uhuru Street, Mwanza</p>
      </div>
    </div>
    <div class="text-center py-3 text-xs bg-gray-800">© {{ date('Y') }} Waja Insurance Brokers. All rights reserved.</div>
  </footer>
</body>
</html>
