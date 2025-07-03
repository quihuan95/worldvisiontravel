@extends('layouts.app')
@section('content')
  <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row gap-8">

    <!-- Nội dung bài viết -->
    <div class="w-full md:w-4/5">
      <div class="prose max-w-none">
        @include($contentView)
      </div>
    </div>

    <!-- Sidebar -->
    <div class="w-full md:w-1/5 space-y-4">
      <h2 class="text-xl font-semibold mb-2">Bài viết khác</h2>
      <ul class="space-y-2">
        @foreach ($listNews as $slug => $item)
          @if ($slug != $currentSlug)
            <li>
              <a href="{{ route('news.show', ['slug' => $slug]) }}" class="text-blue-600 hover:underline">
                {{ $item['title'][app()->getLocale()] ?? $item['title']['vi'] }}
              </a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>

  </div>
@endsection
