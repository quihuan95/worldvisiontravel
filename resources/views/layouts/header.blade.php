<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="w-full xl:container mx-auto px-4 py-4">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded-lg h-[60px] object-contain">
        <!-- Language Switcher -->
      </a>
      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex space-x-8">
        <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('home') }}</a>
        <a href="#services" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('services') }}</a>
        <a href="#news" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('news') }}</a>
        <a href="#destinations" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('destination') }}</a>
        <a href="#events" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('event') }}</a>
        <a href="#contact" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">{{ __('contact') }}</a>
      </nav>

      <form method="POST" action="{{ route('lang.switch') }}" class="ml-4 w-[70px]" x-data="{ lang: '{{ app()->getLocale() }}' }">
        @csrf
        <select name="lang" x-model="lang" @change="$root.submit()" class="rounded px-2 py-1 w-[70px]">
          <option value="vi">VI</option>
          <option value="en">EN</option>
        </select>
      </form>

      <!-- CTA Button -->
      <div class="hidden md:block lg:hidden xl:block">
        <a href="tel:0913199866" class="lux-btn px-7 py-2 text-base">
          {{ __('free_consultation') }}
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button x-on:click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden">
        <i :class="mobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'" class="h-6 w-6"></i>
      </button>
    </div>

    <!-- Mobile Navigation -->
    <nav x-show="mobileMenuOpen" x-cloak class="lg:hidden mt-4 pb-4">
      <a href="#" x-on:click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">{{ __('home') }}</a>
      <a href="#services" x-on:click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">{{ __('services') }}</a>
      <a href="#destinations" x-on:click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">{{ __('destination') }}</a>
      <a href="#events" x-on:click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">{{ __('event') }}</a>
      <a href="#contact" x-on:click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">{{ __('contact') }}</a>
      <a href="tel:0913199866" class="mt-4 w-full block text-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold">
        {{ __('free_consultation') }}
      </a>
    </nav>
  </div>
</header>
