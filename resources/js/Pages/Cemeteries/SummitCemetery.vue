<template>
  <AppLayout>
    <Head>
      <title>Summit Cemetery — Small Iron County Farming Community Cemetery | St. George Memorials</title>
      <meta name="description" content="Summit Cemetery in Iron County — small pioneer farming community south of Parowan. Rules, elevation considerations, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/summit-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Summit Cemetery · Summit · Iron County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Summit Cemetery — High-Elevation Iron County Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">Summit is a small unincorporated Iron County community between Parowan and Cedar City. Its cemetery sits at ~6,000 feet — one of the highest municipal cemeteries in the region — and reflects the elevation in foundation depth and installation seasonality.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Community</p><p class="text-sm text-white mt-1">Summit, UT 84772</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~6,000 ft — deep winter</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Small rural cemetery</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Install Season</p><p class="text-sm text-white mt-1">March–November for pours</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Small High-Elevation Cemetery</h2>
            <p>Summit Cemetery is a small unincorporated community cemetery. Coordination goes through Iron County or community stewards. Foundation depth at Summit\'s elevation is meaningful — pours effectively pause December through February. Upright monuments permitted; concrete borders required.</p>
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
            <h2>History of Summit</h2>
            <p>Summit is a small farming community founded by LDS families in the 1850s as part of the broader Iron Mission expansion. The name refers to the summit of the pass between the Parowan and Cedar valleys. The community has remained small — a few dozen ranching and farming families — and never incorporated as a city. The cemetery has served four generations of these families.</p>
            <p>Search for people buried at Summit Cemetery on <a href="https://memorialmapper.com/cemetery/508/summit-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Summit Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Summit</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>
      </div>
    </section>

    <Teleport to="body">
      <div v-if="lightboxIndex !== null" class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" @click.self="lightboxIndex = null">
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg></button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Summit Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Concrete Border', value: 'Required — deep foundation for high-elevation frost line.' },
  { label: 'Coordination', value: 'Unincorporated — through Iron County or community stewards.' },
  { label: 'Installation Season', value: 'March–November for concrete pours.' },
  { label: 'Approval Required', value: 'Verify with county before larger monuments.' },
  { label: 'Historic Sensitivity', value: 'Small pioneer cemetery — design context matters.' },
  { label: 'Plot Availability', value: 'Contact Iron County recorder.' },
  { label: 'Setting Coordination', value: 'Direct with community stewards.' },
];

const decorationRules = [
  'Flowers must be secured.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor subject to significant freeze damage.',
  'Wind-vulnerable items should be avoided at Summit elevation.',
  'Items obstructing access removed by stewards.',
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
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
];

const steps = [
  { title: 'Confirm the plot', body: 'We coordinate with Iron County or community stewards.' },
  { title: 'Rules verified', body: 'Small-community coordination.' },
  { title: 'Design layout', body: 'Digital layout before production.' },
  { title: 'Manufacturing', body: 'Typical lead time 8–16 weeks. March–November preferred for pours.' },
  { title: 'Setting', body: 'Deep frost-line foundation, monument set with community coordination.' },
];

const faqs = [
  { q: 'Where is Summit, Utah?', a: 'Between Parowan and Cedar City in Iron County — a small unincorporated community.' },
  { q: 'Why the name Summit?', a: 'It refers to the summit of the pass between the Parowan and Cedar valleys.' },
  { q: 'How\'s winter installation?', a: 'Deep winter at ~6,000 ft. Concrete pours pause December–February. Plan installation around the March–November season.' },
];

const related = [
  { label: 'Parowan City Cemetery', href: '/cemeteries/parowan-city-cemetery' },
  { label: 'Cedar City Cemetery', href: '/cemeteries/cedar-city-cemetery' },
  { label: 'Paragonah Cemetery', href: '/cemeteries/paragonah-cemetery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
