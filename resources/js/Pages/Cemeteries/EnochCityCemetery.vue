<template>
  <AppLayout>
    <Head>
      <title>Enoch City Cemetery — Iron County Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Enoch City Cemetery in Iron County — 1851 Fort Johnson pioneer settlement, 1996 expansion sections, monument rules and headstone guidance." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/enoch-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Enoch City Cemetery · Enoch · Iron County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Enoch City Cemetery — 1851 Fort Johnson Pioneer Ground</h1>
        <p class="text-white/70 text-lg max-w-3xl">Enoch\'s cemetery is one of the older continuously used cemeteries in Iron County, tracing back to the 1851 Fort Johnson settlement. A 1996 expansion added significant new burial space, making Enoch one of the larger cemeteries in the Cedar City metro.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Enoch, UT 84721</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Enoch</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Est.</p><p class="text-sm text-white mt-1">1851 — Fort Johnson era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,600 ft — cool winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Enoch\'s Two-Era Cemetery</h2>
            <p>Enoch City Cemetery reflects two distinct eras. The historic sections hold pioneer families from the 1851 Fort Johnson founding and the decades of quiet Cedar City suburb growth that followed. The 1996 expansion added modern sections with defined rules for uprights, flushes, and cremation markers. The historic sections carry more design context; the newer sections carry more procedural formality.</p>
            <p>Cedar City metro elevation (~5,600 ft) means real winters — installation season March through November for concrete pours.</p>
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
            <h2>History of Enoch</h2>
            <p>Enoch began as Fort Johnson in 1851 — a fortified pioneer outpost established the same year Cedar City itself was founded, positioned to defend the northern approach to the Iron Mission settlement. The community\'s early years were shaped by the conflicts of the Utah War era and by ongoing negotiations with Southern Paiute nations. The town later renamed itself Enoch after the biblical patriarch and grew slowly as a farming and ranching suburb of Cedar City. Enoch City was formally incorporated in the 1980s and grew rapidly in the 1990s and 2000s alongside the Cedar City metro area.</p>
            <p>The 1996 cemetery expansion added significant capacity that continues to serve the growing city. Historic and modern sections coexist on the same grounds.</p>
            <p>Search for people buried at Enoch City Cemetery on <a href="https://memorialmapper.com/cemetery/138/enoch-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Enoch City Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Enoch</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Design proof before any payment.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Enoch City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted — subject to lot spacing.' },
  { label: 'Concrete Border', value: 'Required per municipal ordinance.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred for concrete pours.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Post-1996 Sections', value: 'New burial space with defined modern rules.' },
  { label: 'Historic Sections', value: 'Design should respect neighboring pioneer stones.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its border.',
  'Glass containers are not permitted.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor is subject to freeze damage.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'Items obstructing mowing are removed without notice.',
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
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  { title: 'Confirm the section', body: 'Enoch has historic and post-1996 sections with different rules. We verify with the city clerk.' },
  { title: 'We contact the city clerk', body: 'The 24-hour notice, current dimensions rules, any approvals verified before production.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving. Written approval starts production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. March–November installation window for pours.' },
  { title: 'Foundation and setting', body: 'Deeper frost-line foundation. Setting coordinated with the city clerk.' },
];

const faqs = [
  { q: 'Where is Enoch?', a: 'Immediately north of Cedar City on I-15, Iron County. Effectively a suburb of Cedar City.' },
  { q: 'What was Fort Johnson?', a: 'The original 1851 fortified pioneer settlement at Enoch — a defensive position for the Iron Mission during the volatile early settlement years.' },
  { q: 'What did the 1996 expansion do?', a: 'Added significant new burial space to serve the growing Cedar City metro area. The expansion sections have codified modern rules distinct from the historic sections.' },
  { q: 'Is Enoch connected to Cedar City?', a: 'Yes — Enoch is a separately incorporated city but functions as part of the Cedar City metro. Many families have plots in both cemeteries across generations.' },
];

const related = [
  { label: 'Cedar City Cemetery', href: '/cemeteries/cedar-city-cemetery' },
  { label: 'Southern Utah National Cemetery', href: '/cemeteries/southern-utah-national-cemetery' },
  { label: 'Parowan City Cemetery', href: '/cemeteries/parowan-city-cemetery' },
  { label: 'Enoch Service Area', href: '/service-areas/enoch' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
