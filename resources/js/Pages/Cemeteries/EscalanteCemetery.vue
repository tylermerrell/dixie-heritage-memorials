<template>
  <AppLayout>
    <Head>
      <title>Escalante Cemetery — Grand Staircase Pioneer Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Escalante Cemetery in Garfield County — 1876 remote pioneer settlement, Grand Staircase-Escalante gateway. High-elevation cemetery rules and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/escalante-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Escalante Cemetery · Escalante · Garfield County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Escalante Cemetery — 1876 Remote Pioneer Ground</h1>
        <p class="text-white/70 text-lg max-w-3xl">Escalante was one of the most remote LDS pioneer settlements ever established — a foothold on the edge of the Grand Staircase in 1876. The cemetery holds the founders who chose this landscape and the four generations of ranching families who kept the town alive.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Escalante, UT 84726</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1876 — remote settlement era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,800 ft</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Setting</p><p class="text-sm text-white mt-1">Grand Staircase gateway</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Remote Pioneer Cemetery</h2>
            <p>Escalante is one of the most historically remote Latter-day Saint settlements in the state — founded in 1876 in landscape that today lies in Grand Staircase-Escalante National Monument. The cemetery reflects that isolation. Its founding families chose this land deliberately and kept it inhabited for 150 years. Upright monuments permitted; concrete borders required.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Rules & Regulations</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="rule in rules" :key="rule.label" class="bg-stone rounded-xl p-4">
                <p class="text-xs font-semibold uppercase tracking-widest text-granite mb-1">{{ rule.label }}</p>
                <p class="text-sm text-evergreen font-medium leading-snug">{{ rule.value }}</p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Grave Decoration Rules</h2>
            <ul class="space-y-3">
              <li v-for="rule in decorationRules" :key="rule" class="flex gap-3">
                <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-bronze mt-2"></span>
                <span class="text-sm text-granite leading-relaxed">{{ rule }}</span>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>History of Escalante</h2>
            <p>Escalante takes its name from the Franciscan friar Silvestre Vélez de Escalante, whose 1776 expedition passed through the region — the first Europeans documented in this landscape. The LDS settlement was founded a century later in 1876 by pioneer families from Panguitch. The town became the base for cattle-ranching operations across the Grand Staircase and remained one of the most physically isolated communities in the American West well into the 20th century. Today Escalante is a small town best known as a gateway to Grand Staircase-Escalante National Monument, but the cemetery preserves the pioneer identity of the founding ranching families.</p>
            <p>Search for people buried at Escalante Cemetery on <a href="https://memorialmapper.com/cemetery/145/escalante-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Escalante Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order</h2>
            <ol class="space-y-6">
              <li v-for="(step, i) in steps" :key="i" class="flex gap-4">
                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-evergreen text-white flex items-center justify-center text-sm font-bold">{{ i + 1 }}</div>
                <div><p class="font-semibold text-evergreen mb-1">{{ step.title }}</p><p class="text-sm text-granite leading-relaxed">{{ step.body }}</p></div>
              </li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">FAQ</h2>
            <div class="space-y-5">
              <div v-for="faq in faqs" :key="faq.q"><p class="font-semibold text-evergreen mb-1">{{ faq.q }}</p><p class="text-sm text-granite leading-relaxed">{{ faq.a }}</p></div>
            </div>
          </div>

        </div>

        <aside class="space-y-6">
          <div class="bg-evergreen rounded-2xl p-6 text-white sticky top-36">
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Escalante</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Remote-location freight included.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>
      </div>
    </section>

    <Teleport to="body">
      <div v-if="lightboxIndex !== null" class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" @click.self="lightboxIndex = null">
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg></button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Escalante Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
        <button v-if="lightboxIndex < gallery.length - 1" class="absolute right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex++" aria-label="Next"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></button>
      </div>
    </Teleport>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import RelatedLinks from '@/Components/RelatedLinks.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();
const lightboxIndex = ref(null);

const rules = [
  { label: 'Upright Headstones', value: 'Permitted.' },
  { label: 'Concrete Border', value: 'Required.' },
  { label: 'Installation Notice', value: '24 hours to town office.' },
  { label: 'Installation Season', value: 'March–November for pours.' },
  { label: 'Approval Required', value: 'Yes.' },
  { label: 'Remote-Location Freight', value: 'Included in quoted price.' },
  { label: 'Plot Availability', value: 'Contact Escalante town office.' },
  { label: 'Setting Coordination', value: 'Town office coordinates.' },
];

const decorationRules = [
  'Flowers must be secured.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures prohibited.',
  'Winter décor subject to freeze damage.',
  'Solar lights and hanging décor subject to town office approval.',
  'Items obstructing mowing removed without notice.',
];

const gallery = [
  '/images/products/upright-headstones-8.jpg',
  '/images/products/upright-headstones-1.jpg',
  '/images/products/flat-headstone.jpg',
  '/images/products/bronze-headstone.jpg',
  '/images/products/slant-headstone.jpg',
  '/images/products/upright-headstones-4.jpg',
];

const pricing = [
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Bevel Markers', price: 'From $650', href: '/headstones/bevel-markers' },
  { name: 'Slant Markers', price: 'From $700', href: '/headstones/slant-markers' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Upright Granite Headstones', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Headstones', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
];

const steps = [
  { title: 'Confirm the plot', body: 'Escalante town office maintains plot records.' },
  { title: 'Rules verified', body: 'Small-community coordination.' },
  { title: 'Design proof', body: 'Digital proof before production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Remote-location freight included.' },
  { title: 'Setting', body: 'Concrete apron, monument set with town office coordination.' },
];

const faqs = [
  { q: 'Where is Escalante, Utah?', a: 'On Utah State Route 12 (the Scenic Byway) in Garfield County. About 2.5 hours east of St. George.' },
  { q: 'How did the town get its name?', a: 'Named for Franciscan friar Silvestre Vélez de Escalante whose 1776 expedition passed through the region.' },
  { q: 'Is it really remote?', a: 'Historically among the most remote LDS settlements. Even today Escalante is more than an hour from any city larger than a few thousand residents.' },
  { q: 'What about Grand Staircase-Escalante National Monument?', a: 'The 1996-designated national monument surrounds the town. Its designation and subsequent boundary changes have shaped local politics and economy for the last three decades.' },
];

const related = [
  { label: 'Boulder Cemetery', href: '/cemeteries/boulder-cemetery' },
  { label: 'Panguitch City Cemetery', href: '/cemeteries/panguitch-city-cemetery' },
  { label: 'Tropic City Cemetery', href: '/cemeteries/tropic-city-cemetery' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
