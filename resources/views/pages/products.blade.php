@extends('layouts.app')
@section('content')
<section class="max-w-7xl mx-auto px-4 py-16">
  <h1 class="text-3xl font-bold">Products & Verticals</h1>
  <p class="mt-2 text-gray-600">Browse our key lines. Detailed pages coming soon.</p>

  <div class="mt-8 grid md:grid-cols-3 gap-6">
    @foreach ([
      ['Chemicals','Industrial reagents, lime, MgO'],
      ['Steel','Coils, sheets, profiles, roofing'],
      ['Salt','Triple refined edible & bakery salt'],
      ['Mining & Metals','Limestone, magnesite, iron, lead'],
      ['Real Estate & Hospitality','Hotels and commercial properties'],
      ['Cables','LV/MV cables, conductors, special cables'],
    ] as [$title,$desc])
    <div class="p-6 border rounded-2xl">
      <h3 class="font-semibold">{{ $title }}</h3>
      <p class="text-sm text-gray-600 mt-2">{{ $desc }}</p>
      <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Learn more</a>
    </div>
    @endforeach
  </div>
</section>
@endsection
