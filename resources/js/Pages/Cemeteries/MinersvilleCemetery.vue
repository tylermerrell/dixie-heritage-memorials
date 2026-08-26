<template>
  <AppLayout>
    <Head>
      <title>Minersville Cemetery — Beaver County Mining Heritage Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Minersville Cemetery in Beaver County — 1859 mining heritage community, cemetery rules and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/minersville-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Minersville Cemetery · Minersville · Beaver County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Minersville Cemetery — 1859 Mining Heritage Community</h1>
        <p class="text-white/70 text-lg max-w-3xl">Minersville was founded in 1859 to work the lead-silver deposits in the Cove Fort area — one of the first mining communities in Southern Utah. The cemetery holds four generations of miners, farmers, and ranching families.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Town</p><p class="text-sm text-white mt-1">Minersville, UT 84752</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1859 — mining era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,300 ft — real winters</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Small mining-heritage cemetery</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Mining-Heritage Cemetery</h2>
            <p>Minersville Cemetery serves a small Beaver County community with an unusual founding history — it was established specifically to work the lead and silver deposits in the region rather than as an LDS agricultural mission. Miners and mission-called families settled together, giving the town a mixed identity from the outset. Upright monuments permitted; concrete borders required.</p>
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
            <h2>History of Minersville</h2>
            <p>Minersville was founded in 1859 as a mission-called community with a specific industrial purpose: work the lead and silver deposits north of Beaver to supply the growing Latter-day Saint economy in the Utah Territory. The town grew slowly through the 1860s and 1870s. When mining faded, the community pivoted to farming and ranching in the Beaver Valley. Today Minersville is a small rural town whose cemetery reflects both threads of its history — mining families\' surnames alongside agricultural pioneer names.</p>
            <p>Search for people buried at Minersville Cemetery on <a href="https://memorialmapper.com/cemetery/347/minersville-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Minersville Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Minersville</h3>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Minersville Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Coordination', value: 'Town office.' },
  { label: 'Installation Season', value: 'March–November preferred for pours.' },
  { label: 'Approval Required', value: 'Yes.' },
  { label: 'Historic Sensitivity', value: '1859 mining-era stones present.' },
  { label: 'Plot Availability', value: 'Contact Minersville town office.' },
  { label: 'Setting Coordination', value: 'Town office.' },
];

const decorationRules = [
  'Flowers must be secured.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures prohibited.',
  'Winter décor subject to freeze damage.',
  'Solar lights subject to town office approval.',
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
  { title: 'Confirm the plot', body: 'Minersville town office maintains plot records.' },
  { title: 'Rules verified', body: 'Small-community coordination.' },
  { title: 'Design proof', body: 'Digital proof before production.' },
  { title: 'Manufacturing', body: 'Typical lead time 8–16 weeks.' },
  { title: 'Setting', body: 'Concrete apron, setting coordinated with town office.' },
];

const faqs = [
  { q: 'Where is Minersville?', a: 'Southwest of Beaver in Beaver County, Utah. Small rural town.' },
  { q: 'Why "Minersville"?', a: 'The town was established in 1859 to work lead and silver deposits north of Beaver. The mining industry gave it its name.' },
  { q: 'Is there still mining?', a: 'Not on the original scale. The town today is primarily ranching and farming, with mining as historical heritage.' },
];

const related = [
  { label: 'Milford Cemetery', href: '/cemeteries/milford-cemetery' },
  { label: 'Adamsville Cemetery', href: '/cemeteries/adamsville-cemetery' },
  { label: 'Mountain View Cemetery (Beaver)', href: '/cemeteries/mountain-view-cemetery' },
  { label: 'Minersville Service Area', href: '/service-areas/minersville' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
