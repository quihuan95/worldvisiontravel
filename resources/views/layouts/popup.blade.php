<!-- Popup -->
<div x-data x-show="$store.popup.open" x-transition class="fixed inset-0 flex items-center justify-center z-50">
  <!-- Overlay -->
  <div class="fixed inset-0 bg-black/25" @click="$store.popup.open = false"></div>

  <!-- Form -->
  <div class="bg-white rounded-2xl p-8 shadow-lg lux-card max-w-4xl mx-auto relative z-10" @close-popup.window="$store.popup.open = false">
    <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl" @click="$store.popup.open = false">
      &times;
    </button>
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
        <input x-model="form.phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="Nhập số điện thoại" required>
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
        <textarea x-model="form.message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="Mô tả chi tiết yêu cầu của bạn..."></textarea>
      </div>
      <div class="md:col-span-2 text-center">
        <button type="submit" :disabled="submitting" class="lux-btn bg-[#17375e] text-white px-12 py-4 text-lg rounded-full transition-colors">
          <span x-show="!submitting">Gửi yêu cầu <i class="fas fa-arrow-right ml-2"></i></span>
          <span x-show="submitting">Đang gửi...</span>
        </button>
      </div>
    </form>
  </div>
</div>
