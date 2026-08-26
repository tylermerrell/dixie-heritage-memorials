<template>
  <AppLayout>
    <Head>
      <title>Milford Cemetery — Beaver County Railroad Heritage Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Milford Cemetery in Beaver County — 1880 railroad town, Union Pacific heritage, cemetery rules and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/milford-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Milford Cemetery · Milford · Beaver County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Milford Cemetery — Railroad Town Cemetery Guide</h1>
        <p class="text-white/70 text-lg max-w-3xl">Milford is a Beaver County railroad town — one of the few Southern Utah communities founded by rail rather than by pioneer wagon party. The cemetery reflects that distinct history alongside the ranching and mining families who joined the railroaders.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Milford, UT 84751</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1880 — Union Pacific railroad</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~4,900 ft — moderate winters</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Railroad-era municipal cemetery</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Railroad-Era Cemetery</h2>
            <p>Milford Cemetery serves the town of Milford — a Beaver County community that grew up as a Union Pacific rail division point in 1880. Unlike the LDS pioneer communities elsewhere in Southern Utah, Milford was populated substantially by railroaders, mining supply workers, and their families from the outset. That gives the cemetery a distinctly non-pioneer character — the historic sections don\'t look like Iron Mission or Cotton Mission cemeteries.</p>
            <p>Upright monuments permitted. Concrete borders required. City clerk handles arrangements.</p>
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
            <h2>History of Milford</h2>
            <p>Milford was founded in 1880 by the Union Pacific Railroad as a division point on the line to the mining districts west of Beaver. The town grew rapidly through the 1880s and 1890s as a hub for shipping ore, ranching supplies, and passengers. Its economy was tied to the railroad rather than to agricultural mission colonization. The cemetery holds railroaders, mining supply merchants, ranch hands, and (eventually) LDS families who moved into the town in the 20th century. Today Milford is a small ranching community — the railroad still runs through, but the division point activity has scaled down.</p>
            <p>Search for people buried at Milford Cemetery on <a href="https://memorialmapper.com/cemetery/342/milford-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Milford Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Milford</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Milford Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Installation Notice', value: '24 hours to city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred for pours.' },
  { label: 'Approval Required', value: 'Yes.' },
  { label: 'Non-Pioneer Character', value: 'Railroad-era history — different design context than Iron Mission cemeteries.' },
  { label: 'Plot Availability', value: 'Contact Milford city clerk.' },
  { label: 'Setting Coordination', value: 'City clerk.' },
];

const decorationRules = [
  'Flowers must be secured.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures prohibited.',
  'Winter décor subject to freeze damage.',
  'Solar lights subject to city clerk approval.',
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
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
];

const steps = [
  { title: 'Confirm the plot', body: 'Milford city clerk maintains records.' },
  { title: 'Rules verified', body: '24-hour notice, current rules confirmed.' },
  { title: 'Design proof', body: 'Digital proof before production.' },
  { title: 'Manufacturing', body: 'Typical lead time 8–16 weeks.' },
  { title: 'Setting', body: 'Concrete apron, setting coordinated with city clerk.' },
];

const faqs = [
  { q: 'Where is Milford?', a: 'In Beaver County, Southern Utah — a small railroad town on Union Pacific track, about two hours north of St. George.' },
  { q: 'Was Milford really founded by the railroad?', a: 'Yes. Unlike LDS pioneer cemeteries, Milford grew up around a Union Pacific division point in 1880. Its founding families were railroaders and mining supply workers.' },
  { q: 'Can I have railroad-heritage motifs on a headstone?', a: 'Yes. We\'ve designed railroad-heritage motifs for Milford families — historic locomotive imagery, rail spike or engineer\'s cap symbolism, and similar.' },
];

const related = [
  { label: 'Minersville Cemetery', href: '/cemeteries/minersville-cemetery' },
  { label: 'Mountain View Cemetery (Beaver)', href: '/cemeteries/mountain-view-cemetery' },
  { label: 'Adamsville Cemetery', href: '/cemeteries/adamsville-cemetery' },
  { label: 'Milford Service Area', href: '/service-areas/milford' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
