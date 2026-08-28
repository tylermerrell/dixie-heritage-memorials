<template>
  <AppLayout>
    <Head>
      <title>Mountain View Cemetery Beaver — Beaver City Municipal Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Mountain View Cemetery in Beaver City, Utah — Beaver County\'s municipal cemetery, 1856 pioneer heritage, cemetery rules, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/mountain-view-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Mountain View Cemetery · Beaver City · Beaver County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Mountain View Cemetery — Beaver City\'s Municipal Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">Mountain View Cemetery is Beaver City\'s main municipal cemetery — Beaver County seat, birthplace of Butch Cassidy, and one of the region\'s earliest pioneer settlements. The cemetery holds four generations of Beaver Valley families.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Beaver, UT 84713</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Beaver</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1856 — Beaver pioneer era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,900 ft — real winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Beaver County\'s Municipal Cemetery</h2>
            <p>Mountain View Cemetery serves Beaver City — the county seat of Beaver County. Beaver has an unusual pioneer heritage: founded in 1856 by LDS pioneer families, it became the birthplace of Robert LeRoy Parker (better known as Butch Cassidy) in 1866. The cemetery reflects the town\'s municipal, agricultural, and folk-outlaw layers. Upright monuments permitted; concrete borders required.</p>
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
            <h2>History of Beaver City</h2>
            <p>Beaver was founded in 1856 by LDS pioneer families and grew as a farming and ranching center in the Beaver Valley. In the mid-1860s, a family named Parker settled outside town; their son Robert LeRoy Parker was born in 1866 and grew up to become one of the most famous outlaws of the American West — Butch Cassidy. Beaver became the seat of Beaver County and has served as the county\'s civic center for over 150 years. Fort Cameron, a short-lived U.S. Army post established in the 1870s, briefly gave the town federal military significance.</p>
            <p>The cemetery holds the founding LDS pioneer families and the succession of ranching families that have populated the Beaver Valley since.</p>
            <p>Search for people buried at Mountain View Cemetery Beaver on <a href="https://memorialmapper.com/cemetery/354/mountain-view-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Mountain View Cemetery Beaver`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Beaver</h3>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Mountain View Cemetery Beaver`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted in most sections.' },
  { label: 'Concrete Border', value: 'Required — deep foundation for local frost line.' },
  { label: 'Installation Notice', value: '24 hours minimum to city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred for pours.' },
  { label: 'Approval Required', value: 'Yes.' },
  { label: 'Historic Sensitivity', value: '1856 pioneer stones present.' },
  { label: 'Plot Availability', value: 'Contact Beaver city clerk.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its border.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor subject to freeze damage.',
  'Solar lights and wind chimes subject to city clerk approval.',
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
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
];

const steps = [
  { title: 'Confirm the plot', body: 'Beaver city clerk maintains plot records.' },
  { title: 'Rules verified', body: '24-hour notice, current rules confirmed.' },
  { title: 'Design layout', body: 'Digital layout before production.' },
  { title: 'Manufacturing', body: 'Typical lead time 8–16 weeks.' },
  { title: 'Setting', body: 'Deep frost-line foundation, setting coordinated with city clerk.' },
];

const faqs = [
  { q: 'Is Butch Cassidy buried here?', a: 'No. Robert LeRoy Parker was born in Beaver in 1866 but died in unclear circumstances (likely 1908 in Bolivia). He is not buried at Mountain View. His birthplace still stands in town.' },
  { q: 'What was Fort Cameron?', a: 'A short-lived 1870s U.S. Army post at Beaver, part of federal presence in Utah Territory during the anti-polygamy era.' },
  { q: 'Are there multiple cemeteries in Beaver?', a: 'Mountain View is the main municipal cemetery. Adamsville, Minersville, and Milford have separate small cemeteries elsewhere in Beaver County.' },
];

const related = [
  { label: 'Milford Cemetery', href: '/cemeteries/milford-cemetery' },
  { label: 'Minersville Cemetery', href: '/cemeteries/minersville-cemetery' },
  { label: 'Adamsville Cemetery', href: '/cemeteries/adamsville-cemetery' },
  { label: 'Beaver Service Area', href: '/service-areas/beaver' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
