<!-- Popup -->
<div x-data x-show="$store.popup.open" x-transition class="fixed inset-0 flex items-center justify-center z-50">
  <!-- Overlay -->
  <div class="fixed inset-0 bg-black/25" @click="$store.popup.open = false"></div>

  <!-- Form -->
  <div class="bg-white rounded-2xl p-8 shadow-lg lux-card max-w-4xl mx-auto relative z-10" @close-popup.window="$store.popup.open = false">
    <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl" @click="$store.popup.open = false">
      &times;
    </button>
    <h3 class="text-2xl font-bold text-center mb-8 text-[#17375e]">{{ __('send') }} {{ __('contact') }}</h3>
    <form class="grid md:grid-cols-2 gap-6" x-data="contactForm()" @submit.prevent="submitForm()">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('name') }} *</label>
        <input x-model="form.name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="{{ __('your_name_placeholder') }}"
          required>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('email') }} *</label>
        <input x-model="form.email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
          placeholder="{{ __('your_email_placeholder') }}" required>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('phone') }} *</label>
        <input x-model="form.phone" type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input"
          placeholder="{{ __('your_phone_placeholder') }}" required>
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
        <textarea x-model="form.message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 lux-input" placeholder="{{ __('describe_request') }}"></textarea>
      </div>
      <div class="md:col-span-2 text-center">
        <button type="submit" :disabled="submitting" class="lux-btn bg-[#17375e] text-white px-12 py-4 text-lg rounded-full transition-colors">
          <span x-show="!submitting">{{ __('send') }} <i class="fas fa-arrow-right ml-2"></i></span>
          <span x-show="submitting">{{ __('sending') }}</span>
        </button>
      </div>
    </form>
  </div>
</div>
