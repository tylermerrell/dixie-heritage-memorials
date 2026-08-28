<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Minersville, Utah — Silver & Lead Pioneer Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Minersville, Utah families — a small Beaver County town founded on silver and lead mining in the 1860s. Heritage-appropriate design, restoration for pioneer stones, and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/minersville" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Beaver County · Service Area · 100 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Minersville — Silver & Lead Pioneer Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Minersville was founded in the 1860s on silver and lead mining that predated many of the more famous Utah boom towns. The town's name preserves that industrial heritage, and its cemetery contains four generations of mining and ranching families whose lives were built around the ore in the hills above.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Beaver</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Heritage</p>
            <p class="text-sm text-white mt-1">1860s silver / lead mining</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~100 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~5,300 ft</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Mining, Ranching, and a Small Beaver County Town</h2>
            <p>Minersville was settled in the 1860s alongside the silver and lead deposits that made Beaver County briefly one of Utah's more significant mining regions in the pioneer era. The mining eventually faded — most of Utah's mineral wealth was concentrated in Park City and the Wasatch — but the town persisted as a small ranching and farming community, and its identity remains tied to the mining founding.</p>
            <p>Minersville Cemetery reflects the layered heritage: pioneer ranching family names, occasional stones with mining or industrial motifs, and the modern generation of families still farming the land around the Beaver River. Design conversations here often echo Milford's — practical, heritage-conscious, understated.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Minersville</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus Beaver County adjacent options.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="cem in cemeteries" :key="cem.href" :href="cem.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <div>
                  <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light block">{{ cem.name }}</span>
                  <span class="text-xs text-granite">{{ cem.note }}</span>
                </div>
                <svg class="w-4 h-4 text-bronze flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Minersville Cemetery — Rules Snapshot</h2>
            <p>Minersville Cemetery is administered by the Town of Minersville. Because the town is small, cemetery matters are handled through the town office directly. Elevation is ~5,300 feet — meaningful winter freeze, deeper foundations required. We call the town for every design to confirm current rules.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Mining Heritage in Design</h2>
            <p>A distinctive Minersville motif is the mining reference — a small pick, a mine cart, a headframe silhouette — for families whose ancestors were part of the 1860s silver and lead operations. Restoration of pioneer stones from the founding generation is also a real specialty here; the town's oldest surviving markers date to the 1870s and 1880s.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Minersville</h2>
            <p class="text-granite text-sm mb-6">Practical uprights, restoration work, and mining-heritage custom designs.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Minersville</h2>
            <p>Minersville is 100 minutes north of our St. George shop via I-15 and SR-21. We consolidate with Milford and Beaver installations on the same trip to reduce freight cost. Lead time is 12–20 weeks. Foundation-pour scheduling avoids forecasted freezes in December through February.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Minersville families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Minersville`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Minersville</h2>
            <div class="space-y-5">
              <div v-for="faq in faqs" :key="faq.q">
                <p class="font-semibold text-evergreen mb-1">{{ faq.q }}</p>
                <p class="text-sm text-granite leading-relaxed">{{ faq.a }}</p>
              </div>
            </div>
          </div>

        </div>

        <aside class="space-y-6">
          <div class="bg-evergreen rounded-2xl p-6 text-white sticky top-36">
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Minersville Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and free assessment for pioneer sandstone restoration.</p>
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
        <img :src="gallery[lightboxIndex]" alt="Memorial style example" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
        <button v-if="lightboxIndex < gallery.length - 1" class="absolute right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex++" aria-label="Next">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
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

const cemeteries = [
  { name: 'Minersville Cemetery', note: 'Town-administered, silver / lead mining heritage', href: '/cemeteries/minersville-cemetery' },
  { name: 'Milford Cemetery', note: '15 min north, railroad heritage', href: '/cemeteries/milford-cemetery' },
  { name: 'Mountain View Cemetery (Beaver)', note: '15 min east, main county cemetery', href: '/cemeteries/mountain-view-cemetery' },
  { name: 'Adamsville Cemetery', note: '20 min east, small pioneer', href: '/cemeteries/adamsville-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
];

const faqs = [
  {
    q: 'Can you incorporate mining heritage into a design?',
    a: 'Yes. Pick motifs, mine cart or headframe silhouettes, and other mining references are all options for families with ancestors in the 1860s silver and lead operations.',
  },
  {
    q: 'How do I contact the Minersville Town office?',
    a: 'Contact the Town of Minersville directly for cemetery matters. Because the town is small, matters are handled personally through the town office. We call them for every design.',
  },
  {
    q: 'Can you restore an 1870s pioneer marker at Minersville Cemetery?',
    a: 'Often yes, though we assess first. Some pioneer sandstone has weathered past meaningful restoration; a matched granite replacement alongside the historic stone is sometimes the best solution. Assessment is free.',
  },
  {
    q: 'Why is Minersville considered a Beaver County service area?',
    a: 'Minersville lies within Beaver County, roughly 15 minutes west of Beaver City. It shares the county\'s pioneer and mining heritage but has its own separate town cemetery and administration.',
  },
];

const related = [
  { label: 'Minersville Cemetery Guide', href: '/cemeteries/minersville-cemetery' },
  { label: 'Milford Service Area', href: '/service-areas/milford' },
  { label: 'Beaver Service Area', href: '/service-areas/beaver' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'All Beaver County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-9.jpg',
  '/images/products/upright-headstones-10.jpg',
  '/images/products/flat-headstone-1.jpg',
  '/images/products/slant-headstone.jpg',
  '/images/products/bevel-headstone-2.jpg',
  '/images/products/bench-headstone-4.jpg',
];
</script>
