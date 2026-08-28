<template>
  <AppLayout>
    <Head>
      <title>Upright Monuments & Headstones St. George Utah | St. George Memorials</title>
      <meta name="description" content="Custom upright monuments and standing headstones for Washington County cemeteries. Granite, blue pearl, and specialty options — cemetery approval guaranteed. Starting around $1,200." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/upright-monuments" />
      <meta property="og:title" content="Upright Monuments & Headstones St. George Utah | St. George Memorials" />
      <meta property="og:description" content="Custom standing headstones for Southern Utah cemeteries. Jet black, gray, blue pearl, and specialty granites. Cemetery approval guaranteed before production." />
      <meta property="og:url" content="https://stgeorgememorials.com/headstones/upright-monuments" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Traditional Headstones</p>
          <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Upright Monuments & Headstones in St. George</h1>
          <p class="text-white/70 text-lg max-w-2xl">Classic standing headstones crafted in granite, marble, or blue pearl for Southern Utah families. Custom engraving included. Cemetery approval guaranteed.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-white/5">
          <img :src="heroImage" alt="Upright granite headstone" class="w-full h-auto max-h-[560px] object-contain" />
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">
          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Most Recognized Headstone Style in Southern Utah</h2>
            <p>Upright monuments — also called standing headstones — are the most traditional and widely used memorial style across Southern Utah cemeteries. They stand vertically from a base, providing ample space for custom engraving, portraits, scripture, military insignia, and meaningful artwork.</p>
            <p>At St. George Memorials, every upright monument is quarried from premium granite, finished to your specifications, and submitted to your cemetery for approval before production begins. We work with every major cemetery in Washington, Iron, Kane, Beaver, and Garfield counties.</p>

            <h3>Materials We Work With</h3>
            <ul>
              <li><strong>Black Granite</strong> — The most popular choice in Utah. Black granite provides the highest contrast for laser-etched portraits and white-filled lettering, and it resists UV fading better than lighter stones — important given Southern Utah's intense high-desert sun.</li>
              <li><strong>Gray Granite</strong> — A timeless, understated choice available in several shades from light gray to charcoal.</li>
              <li><strong>Blue Pearl Granite</strong> — Imported Norwegian granite with a distinctive blue shimmer. Highly durable across all climates.</li>
              <li><strong>Red and Pink Granites</strong> — Available for families seeking a warmer tone that complements Southern Utah's iconic red rock landscape.</li>
            </ul>

            <h3>Southern Utah Climate Considerations</h3>
            <p>St. George's desert climate creates unique challenges for headstones. The region receives over 300 days of sunshine per year, and UV exposure at elevation can fade porous or unfinished stones significantly faster than in other climates. Hard-water mineral deposits from the area's calcium-rich groundwater can stain light-colored stones over time.</p>
            <p>We address these by specifying polished finishes that resist mineral absorption and recommending stone types proven in the Southern Utah environment. The extreme temperature swings between summer highs and winter freezes also require properly engineered concrete foundations.</p>

            <h3>Cemetery Requirements Across Southern Utah</h3>
            <p>Every cemetery in our service area has its own rules regarding monument height, width, base requirements, and foundation specifications. Washington County cemeteries vary widely — St. George City Cemetery allows uprights while some sections require flush markers. Hurricane City Cemetery has a 42-inch height maximum. We handle all foundation work and submit the required documentation to your cemetery before installation.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5">Photo Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Upright monument photo ${i + 1}`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
        </div>

        <aside class="space-y-6">
          <div class="bg-evergreen rounded-2xl p-6 text-white sticky top-36">
            <h3 class="font-serif text-xl font-semibold mb-3">Request a Quote</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We verify your cemetery's rules before any payment is due.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>

      </div>
    </section>

    <Teleport to="body">
      <div
        v-if="lightboxIndex !== null"
        class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
        @click.self="lightboxIndex = null"
      >
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <img :src="gallery[lightboxIndex]" :alt="`Upright monument photo ${lightboxIndex + 1}`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
        <button v-if="lightboxIndex < gallery.length - 1" class="absolute right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex++" aria-label="Next">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </Teleport>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import RelatedLinks from '@/Components/RelatedLinks.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';
import { useJsonLd } from '@/composables/useJsonLd.js';

useJsonLd({
  '@context': 'https://schema.org',
  '@type': 'Product',
  name: 'Upright Monument / Standing Headstone',
  description: 'Custom upright granite monuments and standing headstones for Washington County cemeteries. Available in jet black, gray, blue pearl, and specialty granites. Custom engraving, temple silhouettes, and laser-etched portraits included.',
  url: 'https://stgeorgememorials.com/headstones/upright-monuments',
  image: 'https://stgeorgememorials.com/images/products/upright-headstones-8.png',
  brand: { '@id': 'https://stgeorgememorials.com/#business' },
  offers: {
    '@type': 'AggregateOffer',
    priceCurrency: 'USD',
    lowPrice: '1200',
    highPrice: '4000',
    offerCount: '1',
    seller: { '@id': 'https://stgeorgememorials.com/#business' },
  },
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Home', item: 'https://stgeorgememorials.com/' },
      { '@type': 'ListItem', position: 2, name: 'Products', item: 'https://stgeorgememorials.com/headstones' },
      { '@type': 'ListItem', position: 3, name: 'Upright Monuments', item: 'https://stgeorgememorials.com/headstones/upright-monuments' },
    ],
  },
});

const { openModal } = useDesignModal();
const lightboxIndex = ref(null);

const heroImage = '/images/products/upright-headstones-8.jpg';

const gallery = [
  '/images/products/upright-headstones.jpg',
  '/images/products/upright-headstones-1.jpg',
  '/images/products/upright-headstones-2.jpg',
  '/images/products/upright-headstones-3.jpg',
  '/images/products/upright-headstones-4.jpg',
  '/images/products/upright-headstones-5.jpg',
  '/images/products/upright-headstones-6.jpg',
  '/images/products/upright-headstones-7.jpg',
  '/images/products/upright-headstones-8.jpg',
];

const related = [
  { label: 'Flat Grave Markers', href: '/headstones/flat-markers' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Headstone Pricing Guide', href: '/resources/pricing' },
  { label: 'Cemetery Rules We Know', href: '/cemeteries' },
];
</script>
