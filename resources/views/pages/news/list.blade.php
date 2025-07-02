@extends('layouts.app')
@section('content')
  <div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">News & Events</h1>
      <p class="text-gray-600 text-lg">Update the latest news about event organization and travel</p>
    </div>

    <!-- Grid Blog List -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow p-4 hover:shadow-lg transition">
        <img src="/mnt/data/e80735b1-1179-49e4-a05b-de9a85a01ecf.png" alt="Event Image" class="rounded-xl mb-4">
        <h2 class="text-xl font-semibold mb-2">Professional event organization A-Z with World Vision Events</h2>
        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
      </div>

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow p-4 hover:shadow-lg transition">
        <img src="/mnt/data/e80735b1-1179-49e4-a05b-de9a85a01ecf.png" alt="Event Image" class="rounded-xl mb-4">
        <h2 class="text-xl font-semibold mb-2">What is MICE travel? MICE services at World Vision Events</h2>
        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
      </div>

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow p-4 hover:shadow-lg transition">
        <img src="/mnt/data/e80735b1-1179-49e4-a05b-de9a85a01ecf.png" alt="Event Image" class="rounded-xl mb-4">
        <h2 class="text-xl font-semibold mb-2">Guide to organizing international conferences and seminars in Vietnam</h2>
        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
      </div>

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow p-4 hover:shadow-lg transition">
        <img src="/mnt/data/e80735b1-1179-49e4-a05b-de9a85a01ecf.png" alt="Event Image" class="rounded-xl mb-4">
        <h2 class="text-xl font-semibold mb-2">APSCVIR 2025 ANNUAL SCIENTIFIC CONFERENCE</h2>
        <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
      </div>
    </div>
  </div>
@endsection
