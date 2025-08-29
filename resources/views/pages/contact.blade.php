@extends('layouts.app')
@section('content')
<section class="max-w-3xl mx-auto px-4 py-16">
  <h1 class="text-3xl font-bold">Contact Us</h1>
  <p class="mt-2 text-gray-600">Reach out and our team will get back shortly. Phone: +255 680 277 640 / +255 755 666 677</p>

  <form action="{{ route('contact.submit') }}" method="post" class="mt-8 grid gap-4">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required class="border rounded-lg px-4 py-3">
    <input type="email" name="email" placeholder="Email" required class="border rounded-lg px-4 py-3">
    <input type="text" name="phone" placeholder="Phone" class="border rounded-lg px-4 py-3">
    <textarea name="message" rows="5" placeholder="Message" required class="border rounded-lg px-4 py-3"></textarea>
    <button class="px-6 py-3 bg-blue-600 text-white rounded-lg w-fit">Send Message</button>
  </form>

  <div class="mt-10 text-sm text-gray-700">
    <p><strong>Address:</strong> Uhuru Street, Mwanza</p>
    <p><strong>Email:</strong> wajainsurance@wajageneral.co.tz</p>
    <p><strong>Phone:</strong> +255 680 277 640 / +255 755 666 677</p>
  </div>
</section>
@endsection
