@extends('layouts.app')
@section('content')
<section class="relative bg-cover bg-center" style="background-image:url('{{ asset('hero-waja.jpg') }}')">
  <div class="bg-black/30">
    <div class="max-w-6xl mx-auto px-4 py-28 text-white">
      <h1 class="text-4xl md:text-5xl font-bold">Safeguarding your future with tailored insurance</h1>
      <p class="mt-4 max-w-2xl">We provide comprehensive and affordable insurance coverage, building long-term relationships based on trust and transparency. :contentReference[oaicite:3]{index=3}</p>
      <div class="mt-8 flex gap-4">
        <a href="{{ route('products') }}" class="px-6 py-3 bg-white text-gray-900 rounded-lg">Our Verticals</a>
        <a href="{{ route('contact') }}" class="px-6 py-3 border border-white rounded-lg">Request Quote</a>
      </div>
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-2xl font-semibold">Our Mission, Vision & Values</h2>
  <div class="mt-6 grid md:grid-cols-3 gap-6">
    <div class="p-6 border rounded-xl">
      <h3 class="font-semibold">Mission</h3>
      <p class="text-sm mt-2">To safeguard our customers’ futures by providing comprehensive and affordable insurance coverage, and build long-term relationships through trust, transparency and outstanding service. :contentReference[oaicite:4]{index=4}</p>
    </div>
    <div class="p-6 border rounded-xl">
      <h3 class="font-semibold">Vision</h3>
      <p class="text-sm mt-2">To be a trusted leader offering customer-centric insurance solutions that empower individuals and businesses to achieve financial security. :contentReference[oaicite:5]{index=5}</p>
    </div>
    <div class="p-6 border rounded-xl">
      <h3 class="font-semibold">Values</h3>
      <ul class="mt-2 text-sm space-y-1">
        <li>Integrity</li>
        <li>Excellence</li>
        <li>Trust</li>
      </ul>
    </div>
  </div>
</section>

<section class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-6">
    <div class="md:col-span-2">
      <h3 class="text-xl font-semibold">Our Project</h3>
      <p class="text-gray-700 mt-3">Waja Insurance Brokers provides personalized insurance solutions by partnering with multiple leading insurance providers to offer a wide range of coverage options across life, health, property and business policies. :contentReference[oaicite:6]{index=6}</p>
    </div>
    <div>
      <h3 class="text-xl font-semibold">Goals</h3>
      <ul class="mt-3 text-sm space-y-2">
        <li>Customer satisfaction</li>
        <li>Financial strength</li>
        <li>Community impact</li>
      </ul>
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12">
  <h3 class="text-xl font-semibold">Target Audiences</h3>
  <div class="mt-6 grid md:grid-cols-3 gap-6">
    <div class="p-6 border rounded-xl">
      <h4 class="font-semibold">Mining</h4>
      <p class="text-sm mt-2">Companies in extraction of minerals and metals — safety, risk management, regulatory compliance. :contentReference[oaicite:7]{index=7}</p>
    </div>
    <div class="p-6 border rounded-xl">
      <h4 class="font-semibold">Transport & Logistics</h4>
      <p class="text-sm mt-2">Fleet & cargo insurance, route & safety management. :contentReference[oaicite:8]{index=8}</p>
    </div>
    <div class="p-6 border rounded-xl">
      <h4 class="font-semibold">Manufacturing</h4>
      <p class="text-sm mt-2">Coverage for production, equipment, supply chain risks. :contentReference[oaicite:9]{index=9}</p>
    </div>
  </div>
</section>
@endsection
