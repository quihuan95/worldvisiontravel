@extends('layouts.app')
@section('content')
  <!-- Hero Banner -->
  <section class="relative h-screen flex items-center justify-center overflow-hidden section-gsap lux-section">
    <div class="absolute inset-0">
      <img src="{{ asset('images/bg.jpg') }}" alt="Global Travel Background" class="w-full h-full object-cover opacity-100">
      <div class="absolute inset-0 lux-accent-bg opacity-70"></div>
    </div>

    <div class="relative z-10 text-center text-[#17375e] px-4 max-w-5xl mx-auto">
      <h1 class="text-5xl md:text-7xl font-display font-bold mb-6 leading-tight lux-primary" id="hero-title">
        <span class="lux-accent">Tầm nhìn Thế giới</span>
        <div>Viết nên chuẩn mực mới của sự kiện</div>
      </h1>
      <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
        Đơn vị dẫn đầu trong tổ chức sự kiện, du lịch, MICE theo tiêu chuẩn quốc tế với hơn 15 năm kinh nghiệm
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="tel:0913199866" class="lux-btn px-10 py-4 text-lg">
          Liên hệ ngay
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
          <div class="opacity-70">Sự kiện thành công</div>
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
          <div class="opacity-70">Quốc gia phục vụ</div>
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
          <div class="opacity-70">Đối tác khách hàng</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0, displayCount: '0' }" x-init="setInterval(() => {
              if (count < 15) {
                  count += 1;
                  displayCount = count.toLocaleString('de-DE');
              }
          }, 80)">
            <span x-text="displayCount"></span>+
          </div>
          <div class="opacity-70">Năm kinh nghiệm</div>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section id="news" class="py-16 bg-gray-50 section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">Tin tức & Sự kiện</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Cập nhật những tin tức mới nhất về tổ chức sự kiện và du lịch
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/width_1600.webp') }}" alt="News 1" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'to-chuc-su-kien-chuyen-nghiep-a-z-cung-world-vision-events']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              Tổ chức sự kiện chuyên nghiệp A-Z cùng World Vision Events
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'to-chuc-su-kien-chuyen-nghiep-a-z-cung-world-vision-events']) }}" class="text-[#17375e] font-semibold hover:underline">Xem chi
              tiết <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-2.webp') }}" alt="News 2" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'du-lich-mice-la-gi-dich-vu-to-chuc-mice-tai-world-vision-events']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              Du lịch MICE là gì? Dịch vụ tổ chức MICE tại World Vision Events
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'du-lich-mice-la-gi-dich-vu-to-chuc-mice-tai-world-vision-events']) }}"
              class="text-[#17375e] font-semibold hover:underline">Xem
              chi tiết <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-3.webp') }}" alt="News 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'cam-nang-to-chuc-hoi-nghi-hoi-thao-quoc-te-tai-viet-nam']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              Cẩm nang tổ chức hội nghị, hội thảo quốc tế tại Việt Nam
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'cam-nang-to-chuc-hoi-nghi-hoi-thao-quoc-te-tai-viet-nam']) }}" class="text-[#17375e] font-semibold hover:underline">Xem chi
              tiết <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>

        <!-- News Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow">
          <img src="{{ asset('images/blog-4.webp') }}" alt="News 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <a href="{{ route('blogs.show', ['slug' => 'hoi-nghi-khoa-hoc-thuong-nien-apscvir-2025']) }}"
              class="text-xl font-bold block mb-4 text-[#17375e] hover:underline cursor-pointer">
              HỘI NGHỊ KHOA HỌC THƯỜNG NIÊN APSCVIR 2025
            </a>
            <a href="{{ route('blogs.show', ['slug' => 'hoi-nghi-khoa-hoc-thuong-nien-apscvir-2025']) }}" class="text-[#17375e] font-semibold hover:underline">Xem chi
              tiết <i class="fas fa-arrow-right ml-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 lux-primary">Dịch vụ của chúng tôi</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Chúng tôi cung cấp đa dạng các dịch vụ du lịch và tổ chức sự kiện chuyên nghiệp
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-globe text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">Tổ chức Hội nghị – Hội thảo Quốc tế</h3>
          <p class="text-gray-600 mb-6">Tổ chức hội nghị, hội thảo chuyên nghiệp theo tiêu chuẩn quốc tế, từ quy mô doanh nghiệp đến các sự kiện cấp khu vực và toàn cầu.</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Kịch bản & vận hành chỉn chu
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Hệ thống hậu cần – kỹ thuật hiện đại
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Đội ngũ tổ chức tận tâm, giàu kinh nghiệm
            </li>
          </ul>
        </div>

        <!-- Service 2 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-calendar-alt text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">Tổ chức Sự kiện</h3>
          <p class="text-gray-600 mb-6">Lên kế hoạch và thực hiện các sự kiện doanh nghiệp, hội nghị quốc tế với quy mô lớn.</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Thiết kế sự kiện độc đáo
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Quản lý logistics
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Hỗ trợ công nghệ
            </li>
          </ul>
        </div>

        <!-- Service 3 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-users text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">MICE Tourism</h3>
          <p class="text-gray-600 mb-6">Giải pháp du lịch kết hợp hội họp, hội thảo, triển lãm và khen thưởng dành cho doanh nghiệp.</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Venue booking
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Team building
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Networking events
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
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">Điểm đến phổ biến</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Khám phá những điểm đến tuyệt vời nhất cùng chúng tôi
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
    </div>
  </section>

  <!-- Slider Section -->
  <section id="events" class="py-20 bg-white text-[#17375e] section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">Sự kiện và Dự án Nổi bật</h2>
        <p class="text-xl opacity-80 max-w-3xl mx-auto">
          Những dự án thành công đã khẳng định uy tín và chất lượng dịch vụ của chúng tôi
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
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">Đối tác khách hàng của chúng tôi</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Chúng tôi tự hào đồng hành cùng các đối tác uy tín trong và ngoài nước
        </p>
      </div>

      <!-- Swiper Slider -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/techcombank-logo.png') }}" alt="Techcombank" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/egis-logo.png') }}" alt="Egis Việt Nam" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/isuzu-logo.png') }}" alt="Isuzu" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 4 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/vietcombank-logo.png') }}" alt="Vietcombank" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 5 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/kita-logo.png') }}" alt="Kita Group" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 6 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/adelaide-logo.png') }}" alt="Trường Adelaide" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 7 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/nhidong-logo.png') }}" alt="BV Nhi Đồng" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 8 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/unicef-logo.png') }}" alt="UNICEF" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 9 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/bvbank-logo.png') }}" alt="BV Bank" class="h-16 object-contain mx-auto">
          </div>
          <!-- Slide 10 -->
          <div class="swiper-slide flex justify-center">
            <img src="{{ asset('images/vcci-logo.png') }}" alt="VCCI" class="h-16 object-contain mx-auto">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Information Section -->
  <section id="contact" class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">Liên hệ với chúng tôi</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Hãy để chúng tôi giúp bạn tạo ra những trải nghiệm du lịch và sự kiện đáng nhớ
        </p>
      </div>

      <div class="grid lg:grid-cols-3 gap-8 mb-16">
        <!-- Contact Info Cards -->
        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-map-marker-alt text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">Địa chỉ</h3>
          <p class="text-gray-600">
            Số 05 Hoa Cau, phường 07, quận Phú Nhuận, thành phố Hồ Chí Minh, Việt Nam
          </p>
        </div>

        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-phone text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">Điện thoại</h3>
          <p class="text-gray-600">
            Hotline 1: +84 945 683 355<br>
            Hotline 2: +84 913 199 866
          </p>
        </div>

        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-envelope text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">Email</h3>
          <p class="text-gray-600">
            events.worldvision@gmail.com
          </p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl p-8 shadow-lg lux-card">
          <h3 class="text-2xl font-bold text-center mb-8 text-[#17375e]">Gửi yêu cầu tư vấn</h3>
          <form class="grid md:grid-cols-2 gap-6" x-data="contactForm()" @submit.prevent="submitForm()">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Họ và tên *</label>
              <input x-model="form.name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="Nhập họ và tên" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
              <input x-model="form.email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="Nhập email" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Số điện thoại *</label>
              <input x-model="form.phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="Nhập số điện thoại"
                required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Dịch vụ quan tâm</label>
              <select x-model="form.service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input">
                <option value="">Chọn dịch vụ</option>
                <option value="du-lich">Du lịch quốc tế</option>
                <option value="su-kien">Tổ chức sự kiện</option>
                <option value="mice">MICE Tourism</option>
                <option value="vip">Dịch vụ VIP</option>
              </select>
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-medium text-gray-700 mb-2">Nội dung tin nhắn</label>
              <textarea x-model="form.message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
                placeholder="Mô tả chi tiết yêu cầu của bạn..."></textarea>
            </div>
            <div class="md:col-span-2 text-center">
              <button type="submit" :disabled="submitting" class="lux-btn px-12 py-4 text-lg rounded-full transition-colors">
                <span x-show="!submitting">Gửi yêu cầu <i class="fas fa-arrow-right ml-2"></i></span>
                <span x-show="submitting">Đang gửi...</span>
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
      <h2 class="text-3xl md:text-4xl font-display font-bold mb-4">Đăng ký nhận tin tức mới nhất</h2>
      <p class="text-xl opacity-80 mb-8 max-w-2xl mx-auto">
        Cập nhật những ưu đãi du lịch hấp dẫn và thông tin sự kiện mới nhất
      </p>
      <div class="max-w-md mx-auto flex gap-4" x-data="newsletter()">
        <input x-model="email" type="email" placeholder="Nhập email của bạn"
          class="flex-1 px-4 py-3 rounded-lg text-gray-900 border border-gray-300 focus:outline-none focus:ring-2 lux-input">
        <button x-on:click="subscribe()" :disabled="subscribing"
          class="bg-[#17375e] text-white hover:bg-[#ea903c] disabled:opacity-50 px-6 py-3 rounded-lg font-semibold transition-colors">
          <span x-show="!subscribing">Đăng ký</span>
          <span x-show="subscribing">Đang xử lý...</span>
        </button>
      </div>
    </div>
  </section>
@endsection
