<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tầm nhìn Thế giới - Du lịch và Sự kiện</title>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- GSAP CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <!-- Google Fonts: Playfair Display & Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body class="min-h-screen bg-white lux-primary-bg overflow-x-hidden" x-data="landingPage()">
  <!-- Header -->
  @include('layouts.header')
  {{-- popup --}}
  @include('layouts.popup')

  @include('layouts.contact')

  @yield('content')
  <!-- Footer -->
  @include('layouts.footer')
  <script>
    function landingPage() {
      return {
        mobileMenuOpen: false,
        currentSlide: 0,
        currentTestimonial: 0,
        videoPlaying: false,

        slides: [{
            image: `{{ asset('images/16.png') }}`,
            caption: 'APAC DNS Forum 2025 ',
            link: 'https://drive.google.com/file/d/1BKkHI5WyOQiBF8tz9kYyMuZKVOnP0s17/view?usp=drive_link',
            description: 'Từ ngày 8 – 9/5/2025, Hà Nội đã trở thành tâm điểm của ngành CNTT châu Á - Thái Bình Dương với sự kiện APAC DNS Forum 2025 – diễn đàn quốc tế quy mô lớn nhất về hệ thống tên miền (DNS) do ICANN phối hợp cùng VNNIC tổ chức.'
          },
          {
            image: `{{ asset('images/17.png') }}`,
            caption: 'Tour khám phá Tokyo',
            link: 'https://drive.google.com/file/d/1l1Rsa6JLf6Itbmdd0H8TLoMYKsfyI8KH/view?usp=drive_link',
            description: 'Trải nghiệm văn hóa Nhật Bản độc đáo với hướng dẫn viên chuyên nghiệp'
          },
          {
            image: `{{ asset('images/18.png') }}`,
            caption: 'Sự kiện ngoài trời tại Sydney',
            link: 'https://drive.google.com/file/d/1eKYe-WiKOXDhZOZtonG6YpM99tysIFFl/view?usp=drive_link',
            description: 'Festival âm nhạc quốc tế với 10,000 khách tham dự'
          },
          {
            image: `{{ asset('images/19.png') }}`,
            caption: 'Lễ Kỷ Niệm 70 Năm Ngày Truyền Thống Bảo Đảm An Toàn Hàng Hải Việt Nam',
            link: 'https://drive.google.com/file/d/1MMkBJCbtJZucaVqD5SQz90eABDlo7tjU/view?usp=drive_link',
            description: 'Ngày 9–10/5/2025, Tổng công ty Bảo đảm An toàn hàng hải Việt Nam long trọng tổ chức Lễ Kỷ niệm 70 năm ngày truyền thống. Sự kiện diễn ra thành công tốt đẹp quy tụ 500 đại biểu trong ngành tham gia'
          },
          {
            image: `{{ asset('images/20.png') }}`,
            caption: 'Hội Nghị Khoa Học Thường Niên #APSCVIR 2025',
            link: 'https://drive.google.com/file/d/12yvipz-XpvYewHgQOpLup_mx3Vv6K7uk/view?usp=drive_link',
            description: 'Từ ngày 25–27/4/2025, Hội nghị khoa học thường niên APSCVIR đã diễn ra thành công tại thành phố Đà Nẵng, quy tụ hơn 1200 chuyên gia, bác sĩ đầu ngành trong lĩnh vực can thiệp mạch và điện quang.'
          }
        ],

        destinations: [{
            name: 'HÀ NỘI – HẠ LONG – HÀ NỘI',
            link: `{{ route('news.show', ['slug' => 'hanoi-halong-hanoi']) }}`,
            image: `{{ asset('images/HÀ NỘI – HẠ LONG – HÀ NỘI.jpg') }}`,
            tours: '(3 NGÀY 2 ĐÊM)'
          },
          {
            name: 'ĐÀ NẴNG – SƠN TRÀ – HỘI AN – BÀ NÀ HILLS – NGŨ HÀNH SƠN',
            link: `{{ route('news.show', ['slug' => 'danang-sontra-hoian-banahills-nguhanhson-3n2d']) }}`,
            image: `{{ asset('images/ĐÀ NẴNG – SƠN TRÀ – HỘI AN – BÀ NÀ HILLS – NGŨ HÀNH SƠN 3N2Đ.jpg') }}`,
            tours: '(3 NGÀY 2 ĐÊM)'
          },
          {
            name: 'HÀ NỘI - HÀ KHẨU - BÌNH BIÊN - KIẾN THỦY - MÔNG TỰ - HÀ NỘI',
            link: `{{ route('news.show', ['slug' => 'hanoi-hakhau-binhbien-kienthuy-mongtu-hanoi']) }}`,
            image: `{{ asset('images/HÀ NỘI - HÀ KHẨU - BÌNH BIÊN - KIẾN THỦY - MÔNG TỰ - HÀ NỘI.jpg') }}`,
            tours: '(3 NGÀY 3 ĐÊM)'
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

    function contactForm() {
      return {
        form: {
          name: '',
          email: '',
          phone: '',
          service: '',
          message: ''
        },
        submitting: false,
        submitForm() {
          this.submitting = true;
          // Bạn có thể thay bằng logic gửi form thực tế ở đây
          setTimeout(() => {
            alert('Form đã được gửi thành công!');
            this.submitting = false;
            this.$dispatch('close-popup');
          }, 2000);
        }
      }
    }

    // document.addEventListener('alpine:init', () => {
    //   Alpine.store('popup', {
    //     open: false
    //   }); // Ban đầu ẩn

    //   setTimeout(() => {
    //     Alpine.store('popup').open = true; // Sau 2 giây mới hiện popup
    //   }, 2000);
    // });
  </script>
</body>
@vite('resources/js/app.js')

</html>
