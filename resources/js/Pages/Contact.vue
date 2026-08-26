<template>
  <AppLayout>
    <Head>
      <title>Contact St. George Memorials | Southern Utah Headstone Consultation</title>
      <meta name="description" content="Talk to a Southern Utah headstone specialist. We contact your cemetery — Tonaquint, Hurricane, Ivins, Santa Clara, St. George City — before quoting your stone. Free digital design proof. One business day response." />
      <link rel="canonical" href="https://stgeorgememorials.com/contact" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Contact</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Talk to a Southern Utah Specialist</h1>
        <p class="text-white/70 text-lg max-w-2xl">Families across Washington, Iron, Kane, Beaver, and Garfield counties trust us with what may be their most permanent public statement about a loved one. We answer every question directly and start every inquiry by calling the cemetery.</p>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Contact form -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Send Us a Message</h2>
          <p class="text-granite text-sm mb-6">Include the cemetery name, section or block if you know it, and anything about the loved one and the memorial you have in mind. The more you can tell us up front, the more useful our first response will be.</p>

          <form @submit.prevent="submit" class="space-y-5">
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">First Name <span class="text-red-500">*</span></label>
                <input v-model="form.first_name" type="text" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" />
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name <span class="text-red-500">*</span></label>
                <input v-model="form.last_name" type="text" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" />
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Phone or Email <span class="text-red-500">*</span></label>
              <input v-model="form.contact" type="text" required class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="(435) 254-3122 or email@example.com" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Cemetery Name</label>
              <input v-model="form.cemetery" type="text" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="e.g. Tonaquint Cemetery, block 3 row 4" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Is this a veteran memorial?</label>
              <select v-model="form.type" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen">
                <option value="">Not sure / prefer not to say</option>
                <option value="veteran-sunc">Yes — burial at Southern Utah National Cemetery</option>
                <option value="veteran-private">Yes — private cemetery, want VA medallion</option>
                <option value="not-veteran">No</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">How can we help? <span class="text-red-500">*</span></label>
              <textarea v-model="form.message" rows="5" class="w-full border-sage rounded-lg text-sm focus:border-evergreen focus:ring-evergreen" placeholder="Tell us about the loved one, the type of memorial you're considering, any temple engraving preferences (St. George Utah Temple, Red Cliffs Temple), or any questions..." />
            </div>

            <div v-if="submitted" class="bg-evergreen/10 border border-evergreen rounded-lg px-4 py-3 text-evergreen font-medium">
              Thank you — we'll be in touch within one business day. Usually sooner.
            </div>
            <button v-else type="submit" :disabled="form.processing" class="w-full bg-evergreen hover:bg-evergreen-light text-white font-semibold py-3 rounded-lg transition-colors disabled:opacity-60">
              {{ form.processing ? 'Sending...' : 'Send Message' }}
            </button>
          </form>
        </div>

        <!-- Contact info -->
        <div class="space-y-8">
          <div>
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Other Ways to Reach Us</h2>
            <div class="space-y-5">
              <div class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen">Phone / Text</p>
                  <a href="tel:+14352543122" class="text-granite hover:text-evergreen">(435) 254-3122</a>
                  <p class="text-granite text-sm">Call or text anytime. Texts often get the fastest reply.</p>
                </div>
              </div>
              <div class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen">Email</p>
                  <a href="mailto:hello@stgeorgememorials.com" class="text-granite hover:text-evergreen">hello@stgeorgememorials.com</a>
                  <p class="text-granite text-sm">One-business-day response. Include the cemetery name for the fastest useful reply.</p>
                </div>
              </div>
              <div class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen">Service Area</p>
                  <p class="text-granite">Washington, Iron, Kane, Beaver, and Garfield Counties</p>
                  <p class="text-granite text-sm">St. George, Hurricane, Ivins, Santa Clara, Cedar City, Kanab, and every community in between.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- What to include -->
          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h3 class="font-semibold text-evergreen mb-4">What to include in your inquiry</h3>
            <p class="text-granite text-sm mb-4">The more you can tell us up front, the more precisely we can respond. A useful first message includes:</p>
            <ul class="space-y-2.5 text-sm text-granite">
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">The cemetery</strong> — Tonaquint, St. George City, Hurricane, Ivins, or whichever. Section and row if you know them (Tonaquint's rules vary by row).</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">The name and dates</strong> of the loved one, as you'd want them engraved.</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">Whether this is a companion (double) monument</strong> — many Southern Utah retiree couples plan the design while both are living.</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">Veteran status</strong> — this changes the entire path. Free VA marker at Southern Utah National Cemetery or private stone with VA medallion are both options.</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">Any temple engraving preference</strong> — St. George Utah Temple (1877), Red Cliffs Utah Temple (2024), Cedar City Utah Temple, or none.</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">Timeline</strong> — some families are pre-planning, others need a stone set by a specific anniversary. Southern Utah's mild winters mean we install year-round.</span>
              </li>
              <li class="flex gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0 mt-2"></span>
                <span><strong class="text-evergreen">Whether you're in Southern Utah or out of state</strong> — snowbird families often coordinate everything remotely. We handle it.</span>
              </li>
            </ul>
          </div>

          <div class="bg-stone rounded-2xl p-6 border border-stone-dark">
            <h3 class="font-semibold text-evergreen mb-3">What happens after you contact us</h3>
            <ol class="space-y-3 text-sm text-granite">
              <li class="flex gap-3"><span class="font-semibold text-evergreen">1.</span> A Southern Utah specialist reads your message and responds within one business day (usually the same day, often within an hour during business hours).</li>
              <li class="flex gap-3"><span class="font-semibold text-evergreen">2.</span> We call the sexton at your cemetery — Tonaquint, St. George City, Hurricane, or wherever — and confirm the current rules for your specific section, block, and row.</li>
              <li class="flex gap-3"><span class="font-semibold text-evergreen">3.</span> You receive a free digital design proof showing granite color, engraving layout, and any temple silhouette at exact scale. Plus an itemized quote — stone, apron, freight, sexton coordination, first cleaning.</li>
              <li class="flex gap-3"><span class="font-semibold text-evergreen">4.</span> Nothing goes to production until you approve the proof in writing. No pressure. No hidden add-ons at delivery.</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  first_name: '', last_name: '', contact: '',
  cemetery: '', type: '', message: '',
});
const submitted = ref(false);

function submit() {
  form.post(route('leads.store'), {
    preserveScroll: true,
    onSuccess: () => {
      submitted.value = true;
      form.reset();
    },
  });
}
</script>
