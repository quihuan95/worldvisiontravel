@extends('layouts.app')
@section('content')
  <!-- Hero Banner -->
  <section class="relative h-screen flex items-center justify-center overflow-hidden section-gsap lux-section">
    <div class="absolute inset-0">
      <img src="{{ asset('images/bg.jpg') }}" alt="Global Travel Background" class="w-full  h-screen object-cover opacity-100 blur-[5px]">
      <div class="absolute inset-0 lux-accent-bg opacity-60"></div>
    </div>

    <div class="relative z-10 text-center text-[#17375e] px-4 max-w-5xl mx-auto">
      <h1 class="text-5xl md:text-7xl font-display font-bold mb-6 leading-tight lux-primary" id="hero-title">
        <span class="lux-accent">{{ __('hero_title') }}</span>
        <div>{{ __('hero_subtitle') }}</div>
      </h1>
      <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
        {{ __('hero_description') }}
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="tel:0913199866" class="lux-btn px-10 py-4 text-lg">
          {{ __('contact_now') }}
        </a>
      </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
      <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
        <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-16 bg-white text-[#17375e] section-gsap">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0, displayCount: '0' }" x-init="setInterval(() => {
              if (count < 1000) {
                  count += 20;
                  displayCount = count.toLocaleString('de-DE');
              }
          }, 50)">
            <span x-text="displayCount"></span>+
          </div>
          <div class="opacity-70">{{ __('successful_events') }}</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0, displayCount: '0' }" x-init="setInterval(() => {
              if (count < 10) {
                  count += 1;
                  displayCount = count.toLocaleString('de-DE');
              }
          }, 100)">
            <span x-text="displayCount"></span>+
          </div>
          <div class="opacity-70">{{ __('served_countries') }}</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0, displayCount: '0' }" x-init="setInterval(() => {
              if (count < 500) {
                  count += 10;
                  displayCount = count.toLocaleString('de-DE');
              }
          }, 50)">
            <span x-text="displayCount"></span>+
          </div>
          <div class="opacity-70">{{ __('customer_partners') }}</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0, displayCount: '0' }" x-init="setInterval(() => {
              if (count < 10) {
                  count += 1;
                  displayCount = count.toLocaleString('de-DE');
              }
          }, 150)">
            <span x-text="displayCount"></span>+
          </div>
          <div class="opacity-70">{{ __('years_experience') }}</div>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="news" class="py-16 bg-gray-50 section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">{{ __('news') }} & {{ __('event') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('news_description') }}
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/width_1600.webp') }}" alt="News 1" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'to-chuc-su-kien-chuyen-nghiep-a-z-cung-world-vision-events']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              {{ __('pro_event_title') }}
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'to-chuc-su-kien-chuyen-nghiep-a-z-cung-world-vision-events']) }}"
              class="text-[#17375e] font-semibold hover:underline">{{ __('read_more') }} <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-2.webp') }}" alt="News 2" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'du-lich-mice-la-gi-dich-vu-to-chuc-mice-tai-world-vision-events']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              {{ __('mice_title') }}
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'du-lich-mice-la-gi-dich-vu-to-chuc-mice-tai-world-vision-events']) }}"
              class="text-[#17375e] font-semibold hover:underline">{{ __('read_more') }} <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-3.webp') }}" alt="News 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'cam-nang-to-chuc-hoi-nghi-hoi-thao-quoc-te-tai-viet-nam']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              {{ __('guide_title') }}
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'cam-nang-to-chuc-hoi-nghi-hoi-thao-quoc-te-tai-viet-nam']) }}"
              class="text-[#17375e] font-semibold hover:underline">{{ __('read_more') }} <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-4.webp') }}" alt="News 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'hoi-nghi-khoa-hoc-thuong-nien-apscvir-2025']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              {{ __('apscvir_title') }}
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'hoi-nghi-khoa-hoc-thuong-nien-apscvir-2025']) }}" class="text-[#17375e] font-semibold hover:underline">{{ __('read_more') }}
              <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <div class="text-center mt-10">
        <a href="#" class="lux-btn px-10 py-4 text-lg">
          {{ __('view_all') }}
        </a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 lux-primary">{{ __('services') }} {{ __('about') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('services_description') }}
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-globe text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">{{ __('service1_title') }}</h3>
          <p class="text-gray-600 mb-6">{{ __('service1_desc') }}</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service1_bullet1') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service1_bullet2') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service1_bullet3') }}
            </li>
          </ul>
        </div>

        <!-- Service 2 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-calendar-alt text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">{{ __('service2_title') }}</h3>
          <p class="text-gray-600 mb-6">{{ __('service2_desc') }}</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service2_bullet1') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service2_bullet2') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service2_bullet3') }}
            </li>
          </ul>
        </div>

        <!-- Service 3 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-users text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">{{ __('service3_title') }}</h3>
          <p class="text-gray-600 mb-6">{{ __('service3_desc') }}</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service3_bullet1') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service3_bullet2') }}
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              {{ __('service3_bullet3') }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Destinations Section -->
  <section id="destinations" class="py-20 bg-white section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">{{ __('destination') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('destinations_description') }}
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <template x-for="destination in destinations" :key="destination.name">
          <a :href="destination.link" class="group cursor-pointer gsap-item gsap-destination lux-card hover:shadow-xl transition-all duration-300">
            <div class="relative overflow-hidden rounded-2xl">
              <img :src="destination.image" :alt="destination.name" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <h3 class="text-xl font-bold mb-1" x-text="destination.name"></h3>
                <p class="lux-accent" x-text="destination.tours"></p>
              </div>
            </div>
          </a>
        </template>
      </div>
      <div class="text-center mt-10">
        <a href="#" class="lux-btn px-10 py-4 text-lg">
          {{ __('view_all') }}
        </a>
      </div>
    </div>
  </section>

  <!-- Slider Section -->
  <section id="events" class="py-20 bg-white text-[#17375e] section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">{{ __('highlighted_events_projects') }}</h2>
        <p class="text-xl opacity-80 max-w-3xl mx-auto">
          {{ __('highlighted_projects_desc') }}
        </p>
      </div>

      <div class="relative max-w-6xl mx-auto">
        <div class="relative h-[500px] rounded-2xl overflow-hidden shadow-2xl lux-card">
          <template x-for="(slide, index) in slides" :key="index">
            <a :href="slide.link" target="_blank" x-show="currentSlide === index" x-transition:enter="transition ease-in-out duration-700"
              x-transition:enter-start="opacity-0 transform translate-x-full" x-transition:enter-end="opacity-100 transform translate-x-0"
              x-transition:leave="transition ease-in-out duration-700" x-transition:leave-start="opacity-100 transform translate-x-0"
              x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
              <img :src="slide.image" :alt="slide.caption" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
              <div class="absolute bottom-8 left-8 right-8">
                <h3 class="text-white text-3xl md:text-4xl font-display font-bold mb-4" x-text="slide.caption"></h3>
                <p class="text-gray-200 text-lg max-w-2xl" x-text="slide.description"></p>
              </div>
            </a>
          </template>
        </div>

        <!-- Navigation Buttons -->
        <button x-on:click="prevSlide()"
          class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-left text-white"></i>
        </button>
        <button x-on:click="nextSlide()"
          class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-right text-white"></i>
        </button>

        <!-- Slide Indicators -->
        <div class="flex justify-center mt-8 space-x-3">
          <template x-for="(slide, index) in slides" :key="index">
            <button x-on:click="currentSlide = index" :class="index === currentSlide ? 'bg-[#ea903c] scale-125' : 'bg-gray-500'"
              class="w-4 h-4 rounded-full transition-all"></button>
          </template>
        </div>
      </div>
    </div>
  </section>

  <!-- Customer Partners Section -->
  <section class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">{{ __('customer_partners_title') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('customer_partners_desc') }}
        </p>
      </div>

      <!-- Swiper Slider -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/1.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/2.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/3.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/4.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/4.1.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/5.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/6.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/7.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/8.1.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/8.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/9.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/9.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/10.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/11.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/12.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/13.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/14.png') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/15.jpg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/doi_tac/16.jpeg') }}" alt="Techcombank" class="h-24 object-contain mx-auto">
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Information Section -->
  <section id="contact" class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">{{ __('contact') }} {{ __('with_us') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          {{ __('contact_desc') }}
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-8 mb-16">
        <!-- Contact Info Cards -->
        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-map-marker-alt text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">{{ __('address') }}</h3>
          <p class="text-gray-600">
            Số 05 Hoa Cau, phường 07, quận Phú Nhuận, thành phố Hồ Chí Minh, Việt Nam
          </p>
        </div>

        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-phone text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">{{ __('phone') }}</h3>
          <p class="text-gray-600">
            Hotline 1: +84 945 683 355<br>
            Hotline 2: +84 913 199 866
          </p>
        </div>

        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-envelope text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">{{ __('email') }}</h3>
          <p class="text-gray-600">
            events.worldvision@gmail.com
          </p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl p-8 shadow-lg lux-card">
          <h3 class="text-2xl font-bold text-center mb-8 text-[#17375e]">{{ __('send') }} {{ __('contact') }}</h3>
          <form class="grid md:grid-cols-2 gap-6" x-data="contactForm()" @submit.prevent="submitForm()">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('name') }} *</label>
              <input x-model="form.name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
                placeholder="{{ __('your_name_placeholder') }}" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('email') }} *</label>
              <input x-model="form.email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
                placeholder="{{ __('your_email_placeholder') }}" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('services') }}</label>
              <select x-model="form.service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input">
                <option value="">{{ __('choose_service') }}</option>
                <option value="du-lich">{{ __('international_travel') }}</option>
                <option value="su-kien">{{ __('event_organization') }}</option>
                <option value="mice">{{ __('mice_tourism') }}</option>
                <option value="vip">{{ __('vip_service') }}</option>
              </select>
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('message') }}</label>
              <textarea x-model="form.message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
                placeholder="{{ __('your_message_placeholder') }}"></textarea>
            </div>
            <div class="md:col-span-2 text-center">
              <button type="submit" :disabled="submitting" class="lux-btn px-12 py-4 text-lg rounded-full transition-colors">
                <span x-show="!submitting">{{ __('send') }} <i class="fas fa-arrow-right ml-2"></i></span>
                <span x-show="submitting">{{ __('processing') }}</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="py-16 lux-accent-bg text-[#17375e] section-gsap">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl md:text-4xl font-display font-bold mb-4">{{ __('subscribe_newsletter') }}</h2>
      <p class="text-xl opacity-80 mb-8 max-w-2xl mx-auto">
        {{ __('subscribe_newsletter_desc') }}
      </p>
      <div class="max-w-md mx-auto flex gap-4" x-data="newsletter()">
        <input x-model="email" type="email" placeholder="{{ __('your_email_placeholder') }}"
          class="flex-1 px-4 py-3 rounded-lg text-gray-900 border border-gray-300 focus:outline-none focus:ring-2 lux-input">
        <button x-on:click="subscribe()" :disabled="subscribing"
          class="bg-[#17375e] text-white hover:bg-[#ea903c] disabled:opacity-50 px-6 py-3 rounded-lg font-semibold transition-colors">
          <span x-show="!subscribing">{{ __('subscribe') }}</span>
          <span x-show="subscribing">{{ __('processing') }}</span>
        </button>
      </div>
    </div>
  </section>
@endsection
