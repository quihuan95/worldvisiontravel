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
          <a href="tel:0913199866" class="relative w-[50px] h-[50px]">
            <img src="{{ asset('images/hotline.png') }}" class="absolute w-full h-full object-contain" alt="hotline">
          </a>
          <a href="https://zalo.me/0913199866" target="_blank" class="relative w-[50px] h-[50px]">
            <img src="{{ asset('images/zalo-icon.png') }}" class="absolute w-full h-full object-contain" alt="zalo">
          </a>
          <a href="https://wa.me/0913199866" target="_blank" class="relative w-[60px] h-[60px] -translate-y-1">
            <img src="{{ asset('images/WhatsApp.png') }}" class="absolute w-full h-full object-contain" alt="WhatsApp">
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
            <span class="text-sm">+84 913 199 866</span>
            <span class="text-sm">+84 945 683 355</span>
          </div>
          <div class="flex items-center space-x-3">
            <i class="fas fa-envelope lux-accent"></i>
            <span class="text-sm">events.worldvision@gmail.com</span>
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
