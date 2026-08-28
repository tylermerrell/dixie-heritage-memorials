<template>
  <Teleport to="body">
    <div
      class="fixed inset-0 z-50 flex items-center justify-center p-4"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modal-title"
    >
      <!-- Backdrop -->
      <div class="absolute inset-0 bg-evergreen-deeper/70 backdrop-blur-sm" @click="$emit('close')" />

      <!-- Modal panel -->
      <div class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">
        <!-- Header -->
        <div class="bg-evergreen px-8 py-6 flex-shrink-0">
          <h2 id="modal-title" class="font-serif text-2xl text-white">Request a Quote</h2>
          <p class="text-white/80 text-sm mt-1">A local specialist will follow up within one business day.</p>
          <button
            @click="$emit('close')"
            class="absolute top-4 right-5 text-white/60 hover:text-white text-2xl leading-none"
            aria-label="Close"
          >&times;</button>
        </div>

        <!-- Form (scrollable) -->
        <form @submit.prevent="submit" class="px-8 py-6 space-y-4 overflow-y-auto">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">First Name <span class="text-red-500">*</span></label>
              <input v-model="form.first_name" type="text" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="Jane" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Last Name <span class="text-red-500">*</span></label>
              <input v-model="form.last_name" type="text" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="Smith" />
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
            <input v-model="form.email" type="email" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="jane@example.com" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input v-model="form.phone" type="tel" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="(435) 555-0100" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Cemetery Name</label>
            <input v-model="form.cemetery" type="text" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="e.g. St. George City Cemetery" />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Type of Memorial</label>
            <select v-model="form.type" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen">
              <option value="">Select one...</option>
              <option>Upright Headstone</option>
              <option>Flat / Flush Marker</option>
              <option>Slant Marker</option>
              <option>Bevel Marker</option>
              <option>Companion / Double Stone</option>
              <option>Bench Memorial</option>
              <option>Bronze Marker</option>
              <option>Infant / Child Memorial</option>
              <option>Pet Memorial</option>
              <option>Still Deciding</option>
              <option>Other</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tell us about your loved one</label>
            <textarea v-model="form.message" rows="3" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="Names, dates, special symbols or verses you'd like included..." />
          </div>

          <!-- Terms checkbox -->
          <div class="bg-stone rounded-xl p-4 border" :class="termsError ? 'border-red-300 bg-red-50' : 'border-stone-dark'">
            <label class="flex items-start gap-3 cursor-pointer">
              <input
                v-model="termsAccepted"
                type="checkbox"
                class="mt-0.5 h-4 w-4 rounded border-sage text-evergreen focus:ring-evergreen flex-shrink-0"
              />
              <span class="text-xs text-granite leading-relaxed">
                I have read and agree to the
                <a href="/terms-of-service" target="_blank" class="text-evergreen underline hover:text-evergreen-light">Terms of Service</a>
                and
                <a href="/privacy-policy" target="_blank" class="text-evergreen underline hover:text-evergreen-light">Privacy Policy</a>.
                <span class="text-red-500"> *</span>
              </span>
            </label>
            <p v-if="termsError" class="text-red-600 text-xs mt-2 ml-7">Please check the box to continue.</p>
          </div>

          <div v-if="submitted" class="bg-evergreen/10 border border-evergreen rounded-lg px-4 py-3 text-evergreen text-sm font-medium">
            Thank you — we'll be in touch within one business day.
          </div>

          <button
            v-else
            type="submit"
            :disabled="form.processing"
            class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors disabled:opacity-60"
          >
            {{ form.processing ? 'Sending...' : 'Request a Quote' }}
          </button>

          <p class="text-center text-xs text-granite">No payment required. We contact you to finalize details.</p>
        </form>
      </div>
    </div>
  </Teleport>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const emit = defineEmits(['close']);

const form = useForm({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  cemetery: '',
  type: '',
  message: '',
});

const submitted = ref(false);
const termsAccepted = ref(false);
const termsError = ref(false);

function submit() {
  if (!termsAccepted.value) {
    termsError.value = true;
    return;
  }
  termsError.value = false;
  form.post(route('leads.store'), {
    preserveScroll: true,
    onSuccess: () => {
      submitted.value = true;
      setTimeout(() => emit('close'), 5000);
    },
  });
}
</script>
