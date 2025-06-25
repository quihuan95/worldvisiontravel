<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tầm nhìn Thế giới - Du lịch và Sự kiện</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- GSAP CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <!-- Google Fonts: Playfair Display & Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <style>
    [x-cloak] {
      display: none !important;
    }

    body {
      font-family: 'Inter', Arial, sans-serif;
    }

    /* .font-display {
      font-family: 'Playfair Display', serif;
    } */
    .lux-primary {
      color: #17375e;
    }

    /* blue-600 */
    .lux-primary-bg {
      background: #f8fafc;
    }

    .lux-accent {
      color: #ea903c;
    }

    /* teal-500 */
    .lux-accent-bg {
      background: linear-gradient(341deg, #87bfb8 0%, #917354 100%);
    }

    .lux-card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 1.25rem;
      box-shadow: 0 4px 24px 0 rgba(23, 55, 94, 0.07);
    }

    .lux-btn {
      background-color: #ea903c;
      color: #fff;
      font-weight: 600;
      border-radius: 9999px;
      box-shadow: 0 2px 8px 0 rgba(234, 144, 60, 0.15);
      transition: box-shadow 0.2s, transform 0.2s, background-color 0.2s;
    }

    .lux-btn:hover {
      background-color: #d88135;
      box-shadow: 0 4px 16px 0 rgba(234, 144, 60, 0.25);
      transform: translateY(-2px) scale(1.04);
    }

    .lux-section {
      background: #f8fafc;
    }

    .lux-icon {
      color: #ea903c !important;
    }

    .lux-border {
      border-color: #ea903c !important;
    }

    .lux-input:focus {
      border-color: #17375e !important;
      box-shadow: 0 0 0 2px rgba(23, 55, 94, 0.2) !important;
      outline: none;
    }
  </style>
</head>

<body class="min-h-screen bg-white lux-primary-bg" x-data="landingPage()">
  <!-- Header -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded-lg h-[60px]">
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex space-x-8">
          <a href="#" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Trang chủ</a>
          <a href="#services" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Dịch vụ</a>
          <a href="#destinations" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Điểm đến</a>
          <a href="#events" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Sự kiện</a>
          <a href="#about" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Về chúng tôi</a>
          <a href="#contact" class="text-gray-700 hover:text-[#17375e] font-medium transition-colors">Liên hệ</a>
        </nav>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <button class="lux-btn px-7 py-2 text-base">
            Nhận tư vấn miễn phí
          </button>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden">
          <i :class="mobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'" class="h-6 w-6"></i>
        </button>
      </div>

      <!-- Mobile Navigation -->
      <nav x-show="mobileMenuOpen" x-cloak class="lg:hidden mt-4 pb-4">
        <a href="#" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Trang chủ</a>
        <a href="#services" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Dịch vụ</a>
        <a href="#destinations" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Điểm đến</a>
        <a href="#events" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Sự kiện</a>
        <a href="#about" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Về chúng tôi</a>
        <a href="#contact" @click="mobileMenuOpen = false" class="block py-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">Liên hệ</a>
        <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold">
          Nhận tư vấn miễn phí
        </button>
      </nav>
    </div>
  </header>

  <!-- Hero Banner -->
  <section class="relative h-screen flex items-center justify-center overflow-hidden section-gsap lux-section">
    <div class="absolute inset-0">
      <img src="{{ asset('images/bg.jpg') }}" alt="Global Travel Background" class="w-full h-full object-cover opacity-100">
      <div class="absolute inset-0 lux-accent-bg opacity-70"></div>
    </div>

    <div class="relative z-10 text-center text-[#17375e] px-4 max-w-5xl mx-auto">
      <h1 class="text-5xl md:text-7xl font-display font-bold mb-6 leading-tight lux-primary" id="hero-title">
        Khám phá thế giới cùng <span class="lux-accent">Tầm nhìn Thế giới</span>
      </h1>
      <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-3xl mx-auto">
        Dẫn đầu trong tổ chức sự kiện và du lịch toàn cầu với hơn 15 năm kinh nghiệm
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <button class="lux-btn px-10 py-4 text-lg">
          Liên hệ ngay <i class="fas fa-arrow-right ml-2 lux-icon"></i>
        </button>
        <button @click="videoPlaying = true"
          class="border-2 border-[#ea903c] text-[#17375e] hover:bg-[#ea903c] hover:text-white px-10 py-4 text-lg rounded-full transition-all font-semibold">
          <i class="fas fa-play mr-2 lux-icon"></i> Xem video giới thiệu
        </button>
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
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 500) count += 10 }, 50)">
            <span x-text="count"></span>+
          </div>
          <div class="opacity-70">Sự kiện thành công</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 50) count += 1 }, 100)">
            <span x-text="count"></span>+
          </div>
          <div class="opacity-70">Quốc gia phục vụ</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 10000) count += 200 }, 50)">
            <span x-text="count"></span>+
          </div>
          <div class="opacity-70">Khách hàng hài lòng</div>
        </div>
        <div class="text-center">
          <div class="text-4xl md:text-5xl font-bold mb-2" x-data="{ count: 0 }" x-init="setInterval(() => { if (count < 15) count += 1 }, 200)">
            <span x-text="count"></span>+
          </div>
          <div class="opacity-70">Năm kinh nghiệm</div>
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

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Service 1 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-globe text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">Du lịch Quốc tế</h3>
          <p class="text-gray-600 mb-6">Tổ chức các tour du lịch cao cấp đến những điểm đến hấp dẫn nhất thế giới với dịch vụ 5 sao.</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Hướng dẫn viên chuyên nghiệp
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Khách sạn 4-5 sao
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Vận chuyển VIP
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
          <p class="text-gray-600 mb-6">Chuyên về du lịch doanh nghiệp, hội nghị, triển lãm và các chương trình khuyến khích.</p>
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

        <!-- Service 4 -->
        <div class="group lux-card p-8 text-center hover:shadow-2xl transition-all duration-300 gsap-item gsap-service">
          <div class="mb-6 flex justify-center group-hover:scale-110 transition-transform">
            <i class="fas fa-award text-5xl lux-icon"></i>
          </div>
          <h3 class="text-xl font-bold mb-4 text-[#17375e]">Dịch vụ VIP</h3>
          <p class="text-gray-600 mb-6">Dịch vụ cao cấp dành cho khách hàng VIP với sự chăm sóc tận tình và chu đáo.</p>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Butler cá nhân
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Xe riêng + tài xế
            </li>
            <li class="flex items-center text-sm text-gray-500">
              <i class="fas fa-check-circle lux-accent mr-2"></i>
              Ưu tiên check-in
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
          Khám phá những điểm đến tuyệt vời nhất thế giới cùng chúng tôi
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <template x-for="destination in destinations" :key="destination.name">
          <div class="group cursor-pointer gsap-item gsap-destination lux-card hover:shadow-xl transition-all duration-300">
            <div class="relative overflow-hidden rounded-2xl">
              <img :src="destination.image" :alt="destination.name" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <h3 class="text-xl font-bold mb-1" x-text="destination.name"></h3>
                <p class="lux-accent" x-text="destination.tours"></p>
              </div>
            </div>
          </div>
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
            <div x-show="currentSlide === index" x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0 transform translate-x-full"
              x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in-out duration-700"
              x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
              <img :src="slide.image" :alt="slide.caption" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
              <div class="absolute bottom-8 left-8 right-8">
                <h3 class="text-white text-3xl md:text-4xl font-display font-bold mb-4" x-text="slide.caption"></h3>
                <p class="text-gray-200 text-lg max-w-2xl" x-text="slide.description"></p>
              </div>
            </div>
          </template>
        </div>

        <!-- Navigation Buttons -->
        <button @click="prevSlide()"
          class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-left text-white"></i>
        </button>
        <button @click="nextSlide()"
          class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-4 shadow-lg transition-all">
          <i class="fas fa-chevron-right text-white"></i>
        </button>

        <!-- Slide Indicators -->
        <div class="flex justify-center mt-8 space-x-3">
          <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index" :class="index === currentSlide ? 'bg-[#ea903c] scale-125' : 'bg-gray-500'" class="w-4 h-4 rounded-full transition-all"></button>
          </template>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-20 lux-section section-gsap">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-[#17375e]">Khách hàng nói gì về chúng tôi</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Những phản hồi tích cực từ khách hàng là động lực để chúng tôi không ngừng cải thiện
        </p>
      </div>

      <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl gsap-item gsap-testimonial lux-card">
          <i class="fas fa-quote-left text-4xl lux-accent mb-6 block text-center"></i>

          <div class="text-center">
            <p class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed" x-text="testimonials[currentTestimonial].content"></p>

            <div class="flex items-center justify-center space-x-4">
              <img :src="testimonials[currentTestimonial].image" :alt="testimonials[currentTestimonial].name" class="w-20 h-20 rounded-full border-2 lux-border">
              <div class="text-left">
                <h4 class="font-bold text-[#17375e]" x-text="testimonials[currentTestimonial].name"></h4>
                <p class="text-gray-600" x-text="testimonials[currentTestimonial].position"></p>
                <div class="flex mt-2">
                  <template x-for="i in testimonials[currentTestimonial].rating" :key="i">
                    <i class="fas fa-star text-yellow-400"></i>
                  </template>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial Indicators -->
        <div class="flex justify-center mt-8 space-x-3">
          <template x-for="(testimonial, index) in testimonials" :key="index">
            <button @click="currentTestimonial = index" :class="index === currentTestimonial ? 'bg-[#17375e]' : 'bg-gray-300'"
              class="w-3 h-3 rounded-full transition-all"></button>
          </template>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white section-gsap">
    <div class="container mx-auto px-4">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="text-4xl md:text-5xl font-display font-bold mb-8 text-[#17375e]">
            Công ty TNHH Du lịch và Sự kiện Tầm nhìn Thế giới
          </h2>
          <div class="space-y-6 text-lg text-gray-700">
            <p>
              Được thành lập từ năm 2008, chúng tôi là công ty hàng đầu trong lĩnh vực tổ chức du lịch và sự kiện
              với tầm nhìn toàn cầu. Với hơn 15 năm kinh nghiệm và đội ngũ chuyên nghiệp, chúng tôi đã phục vụ hàng
              nghìn khách hàng trên toàn thế giới.
            </p>
            <p>
              Sứ mệnh của chúng tôi là kết nối mọi người với thế giới thông qua những chuyến du lịch ý nghĩa và các
              sự kiện đáng nhớ, góp phần xây dựng cầu nối văn hóa và thúc đẩy sự hiểu biết quốc tế.
            </p>
            <p>
              Chúng tôi cam kết mang đến những trải nghiệm độc đáo, dịch vụ chất lượng cao và sự hài lòng tuyệt đối
              cho mọi khách hàng.
            </p>
          </div>

          <div class="mt-8 grid grid-cols-2 gap-6">
            <div class="text-center p-4 bg-[#fef5ec] rounded-lg border lux-border">
              <i class="fas fa-award text-3xl lux-accent mb-2"></i>
              <div class="font-bold text-[#17375e]">ISO 9001:2015</div>
              <div class="text-sm text-gray-600">Chứng nhận chất lượng</div>
            </div>
            <div class="text-center p-4 bg-[#fef5ec] rounded-lg border lux-border">
              <i class="fas fa-users text-3xl lux-accent mb-2"></i>
              <div class="font-bold text-[#17375e]">100+ Nhân viên</div>
              <div class="text-sm text-gray-600">Đội ngũ chuyên nghiệp</div>
            </div>
          </div>
        </div>

        <div class="relative">
          <img src="https://placehold.co/500x600?text=About+Us" alt="About Us" class="rounded-2xl shadow-2xl w-full border-2 lux-border">
          <div class="absolute -bottom-6 -left-6 bg-[#ea903c] text-white p-6 rounded-xl shadow-lg">
            <div class="text-2xl font-bold">15+</div>
            <div class="opacity-90">Năm kinh nghiệm</div>
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
            Hotline: +84 28 1234 5678<br>
            Mobile: +84 901 234 567
          </p>
        </div>

        <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow lux-card">
          <i class="fas fa-envelope text-5xl lux-accent mb-4"></i>
          <h3 class="text-xl font-bold text-[#17375e] mb-4">Email</h3>
          <p class="text-gray-600">
            info@tamnhinthegioi.com<br>
            sales@tamnhinthegioi.com
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
        <button @click="subscribe()" :disabled="subscribing"
          class="bg-[#17375e] text-white hover:bg-[#ea903c] disabled:opacity-50 px-6 py-3 rounded-lg font-semibold transition-colors">
          <span x-show="!subscribing">Đăng ký</span>
          <span x-show="subscribing">Đang xử lý...</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white text-[#17375e] py-16 section-gsap border-t border-[#e5e7eb]">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <!-- Company Info -->
        <div class="lg:col-span-2">
          <div class="flex items-center space-x-2 mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-[60px]">
          </div>
          <p class="text-gray-600 mb-6 max-w-md">
            Công ty TNHH Du lịch và Sự kiện Tầm nhìn Thế giới - Dẫn đầu trong tổ chức sự kiện và du lịch toàn cầu
            với hơn 15 năm kinh nghiệm.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="bg-[#17375e] text-white hover:bg-[#ea903c] p-3 rounded-full transition-colors">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="bg-[#17375e] text-white hover:bg-[#ea903c] p-3 rounded-full transition-colors">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="bg-[#17375e] text-white hover:bg-[#ea903c] p-3 rounded-full transition-colors">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-lg font-semibold mb-6">Liên kết nhanh</h4>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-600 hover:text-[#ea903c] transition-colors">Trang chủ</a></li>
            <li><a href="#services" class="text-gray-600 hover:text-[#ea903c] transition-colors">Dịch vụ</a></li>
            <li><a href="#destinations" class="text-gray-600 hover:text-[#ea903c] transition-colors">Điểm đến</a></li>
            <li><a href="#events" class="text-gray-600 hover:text-[#ea903c] transition-colors">Sự kiện</a></li>
            <li><a href="#about" class="text-gray-600 hover:text-[#ea903c] transition-colors">Về chúng tôi</a></li>
            <li><a href="#contact" class="text-gray-600 hover:text-[#ea903c] transition-colors">Liên hệ</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h4 class="text-lg font-semibold mb-6">Thông tin liên hệ</h4>
          <div class="space-y-3 text-gray-600">
            <div class="flex items-start space-x-3">
              <i class="fas fa-map-marker-alt mt-1 lux-accent"></i>
              <span class="text-sm">Số 05 Hoa Cau, phường 07, quận Phú Nhuận, TP.HCM</span>
            </div>
            <div class="flex items-center space-x-3">
              <i class="fas fa-phone lux-accent"></i>
              <span class="text-sm">+84 28 1234 5678</span>
            </div>
            <div class="flex items-center space-x-3">
              <i class="fas fa-envelope lux-accent"></i>
              <span class="text-sm">info@tamnhinthegioi.com</span>
            </div>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-200 pt-8 text-center">
        <p class="text-gray-500">
          © <span x-text="new Date().getFullYear()"></span> Công ty TNHH Du lịch và Sự kiện Tầm nhìn Thế giới. Tất cả quyền được bảo lưu.
        </p>
      </div>
    </div>
  </footer>

  <script>
    function landingPage() {
      return {
        mobileMenuOpen: false,
        currentSlide: 0,
        currentTestimonial: 0,
        videoPlaying: false,

        slides: [{
            image: 'https://placehold.co/1200x600?text=Paris+Conference',
            caption: 'Hội nghị quốc tế tại Paris',
            description: 'Tổ chức thành công hội nghị với hơn 500 đại biểu quốc tế'
          },
          {
            image: 'https://placehold.co/1200x600?text=Tokyo+Tour',
            caption: 'Tour khám phá Tokyo',
            description: 'Trải nghiệm văn hóa Nhật Bản độc đáo với hướng dẫn viên chuyên nghiệp'
          },
          {
            image: 'https://placehold.co/1200x600?text=Sydney+Event',
            caption: 'Sự kiện ngoài trời tại Sydney',
            description: 'Festival âm nhạc quốc tế với 10,000 khách tham dự'
          },
          {
            image: 'https://placehold.co/1200x600?text=Singapore+Business',
            caption: 'Hội thảo kinh doanh tại Singapore',
            description: 'Kết nối doanh nghiệp Đông Nam Á với các đối tác toàn cầu'
          }
        ],

        destinations: [{
            name: 'Paris, Pháp',
            image: 'https://placehold.co/400x300?text=Paris',
            tours: '25 tours'
          },
          {
            name: 'Tokyo, Nhật Bản',
            image: 'https://placehold.co/400x300?text=Tokyo',
            tours: '18 tours'
          },
          {
            name: 'New York, Mỹ',
            image: 'https://placehold.co/400x300?text=New+York',
            tours: '22 tours'
          },
          {
            name: 'London, Anh',
            image: 'https://placehold.co/400x300?text=London',
            tours: '20 tours'
          },
          {
            name: 'Dubai, UAE',
            image: 'https://placehold.co/400x300?text=Dubai',
            tours: '15 tours'
          },
          {
            name: 'Singapore',
            image: 'https://placehold.co/400x300?text=Singapore',
            tours: '12 tours'
          }
        ],

        testimonials: [{
            name: 'Nguyễn Văn An',
            position: 'Giám đốc ABC Corporation',
            content: 'Dịch vụ tuyệt vời! Công ty đã tổ chức thành công hội nghị quốc tế cho chúng tôi với hơn 300 đại biểu từ 15 quốc gia.',
            rating: 5,
            image: 'https://placehold.co/80x80?text=An'
          },
          {
            name: 'Trần Thị Bình',
            position: 'Trưởng phòng Marketing XYZ',
            content: 'Tour du lịch Châu Âu được tổ chức rất chuyên nghiệp. Mọi chi tiết đều được chăm sóc tỉ mỉ.',
            rating: 5,
            image: 'https://placehold.co/80x80?text=Binh'
          },
          {
            name: 'Lê Minh Cường',
            position: 'CEO Tech Startup',
            content: 'Sự kiện ra mắt sản phẩm của chúng tôi đã thành công ngoài mong đợi nhờ sự hỗ trợ của đội ngũ chuyên nghiệp.',
            rating: 5,
            image: 'https://placehold.co/80x80?text=Cuong'
          }
        ],

        init() {
          // Auto slide functionality
          setInterval(() => {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
          }, 6000);

          // Auto testimonial functionality
          setInterval(() => {
            this.currentTestimonial = (this.currentTestimonial + 1) % this.testimonials.length;
          }, 4000);
        },

        nextSlide() {
          this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },

        prevSlide() {
          this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        }
      }
    }

    function contactForm() {
      return {
        submitting: false,
        form: {
          name: '',
          email: '',
          phone: '',
          service: '',
          message: ''
        },

        async submitForm() {
          this.submitting = true;

          // Simulate API call
          await new Promise(resolve => setTimeout(resolve, 2000));

          alert('Cảm ơn bạn đã gửi yêu cầu! Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');

          // Reset form
          this.form = {
            name: '',
            email: '',
            phone: '',
            service: '',
            message: ''
          };

          this.submitting = false;
        }
      }
    }

    function newsletter() {
      return {
        email: '',
        subscribing: false,

        async subscribe() {
          if (!this.email) {
            alert('Vui lòng nhập email!');
            return;
          }

          this.subscribing = true;

          // Simulate API call
          await new Promise(resolve => setTimeout(resolve, 1500));

          alert('Đăng ký thành công! Cảm ơn bạn đã quan tâm.');
          this.email = '';
          this.subscribing = false;
        }
      }
    }

    // GSAP animation for hero title
    document.addEventListener('DOMContentLoaded', function() {
      if (window.gsap) {
        gsap.from('#hero-title', {
          duration: 1.2,
          y: 60,
          opacity: 0,
          ease: 'power3.out'
        });
      }
    });

    // GSAP animation for all sections and items
    document.addEventListener('DOMContentLoaded', function() {
      if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
        // Animate sections
        gsap.utils.toArray('.section-gsap').forEach((section, i) => {
          gsap.from(section, {
            opacity: 0,
            y: 60,
            duration: 1,
            delay: 0.1 + i * 0.15,
            ease: 'power3.out',
            scrollTrigger: {
              trigger: section,
              start: 'top 80%',
              toggleActions: 'play none none none'
            }
          });
        });
        // Animate service items (scale + fade)
        gsap.utils.toArray('.gsap-service').forEach((item, i) => {
          gsap.from(item, {
            opacity: 0,
            scale: 0.7,
            duration: 0.8,
            delay: 0.2 + (i % 10) * 0.08,
            ease: 'back.out(1.7)',
            scrollTrigger: {
              trigger: item,
              start: 'top 90%',
              toggleActions: 'play none none none'
            }
          });
        });
        // Animate destination items (rotate + fade)
        gsap.utils.toArray('.gsap-destination').forEach((item, i) => {
          gsap.from(item, {
            opacity: 0,
            rotate: 8,
            y: 40,
            duration: 0.8,
            delay: 0.25 + (i % 10) * 0.09,
            ease: 'power2.out',
            scrollTrigger: {
              trigger: item,
              start: 'top 92%',
              toggleActions: 'play none none none'
            }
          });
        });
        // Animate testimonial (bounce)
        gsap.utils.toArray('.gsap-testimonial').forEach((item, i) => {
          gsap.from(item, {
            opacity: 0,
            y: 80,
            duration: 1,
            delay: 0.3 + i * 0.1,
            ease: 'bounce.out',
            scrollTrigger: {
              trigger: item,
              start: 'top 95%',
              toggleActions: 'play none none none'
            }
          });
        });
        // Animate other items (default fade+slide)
        gsap.utils.toArray('.gsap-item').forEach((item, i) => {
          if (!item.classList.contains('gsap-service') && !item.classList.contains('gsap-destination') && !item.classList.contains('gsap-testimonial')) {
            gsap.from(item, {
              opacity: 0,
              y: 40,
              duration: 0.7,
              delay: 0.2 + (i % 10) * 0.08,
              ease: 'power3.out',
              scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                toggleActions: 'play none none none'
              }
            });
          }
        });
      }
    });
  </script>
</body>

</html>
