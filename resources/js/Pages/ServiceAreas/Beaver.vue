<template>
  <AppLayout>
    <Head>
      <title>Headstones in Beaver, Utah — Butch Cassidy's Hometown | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Beaver, Utah families — Butch Cassidy's birthplace and a historic Beaver County ranching community. Deep-foundation engineering for the 5,900-foot elevation and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/beaver" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Beaver County · Service Area · 110 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones in Beaver — Butch Cassidy's Hometown</h1>
        <p class="text-white/70 text-lg max-w-3xl">Beaver is the seat of Beaver County — a ranching and mining community founded in 1856, home to Fort Cameron (an 1870s military post), and famously the birthplace of Robert LeRoy Parker in 1866, better known as Butch Cassidy. Its cemetery holds four generations of Beaver County ranching families.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Beaver (seat)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~5,900 ft</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~110 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Butch Cassidy birthplace, Fort Cameron</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Beaver — Ranching Country, Fort Cameron, and Butch Cassidy</h2>
            <p>Beaver was founded in 1856 by Latter-day Saint settlers who found the meadows and streams of the Beaver River valley suitable for ranching and farming. Fort Cameron was established nearby in 1872 as a US Army post to enforce federal authority in the region — the cemetery includes soldiers from that era. Robert LeRoy Parker was born in Beaver in April 1866; he later took the name Butch Cassidy and became the region's most famous outlaw. The town celebrates that heritage.</p>
            <p>Mountain View Cemetery in Beaver serves as the primary municipal cemetery. Its stones trace both the pioneer ranching heritage and the more recent history of the town — including families connected to the Cassidy story.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Beaver</h2>
            <p class="text-granite text-sm mb-6">Mountain View Cemetery plus outlying Beaver County pioneer cemeteries.</p>
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
            <h2>Mountain View Cemetery (Beaver) — Rules Snapshot</h2>
            <p>Mountain View Cemetery is administered by the City of Beaver. At ~5,900 feet, Beaver experiences a real winter — freeze-thaw cycles run November through March, and a 90-day rule may apply requiring settling time before monument placement on new burials. We engineer deeper foundations and schedule concrete pours around forecasted weather. Sexton coordination is required for every installation.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Ranching, Military, and Frontier Heritage in Design</h2>
            <p>Beaver families sometimes incorporate their ranching heritage into headstone design — a cattle brand, a mountain silhouette, a barn or homestead reference. Military families with Fort Cameron connections may choose military insignia and, for eligible veterans, a VA medallion or free VA marker. We handle all of it.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Beaver</h2>
            <p class="text-granite text-sm mb-6">Practical uprights, veteran markers, and ranching-heritage custom designs.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Beaver</h2>
            <p>Beaver is 110 minutes north of our St. George shop via I-15 — the longest regular run in our service footprint before Panguitch and Tropic. Freight cost reflects that distance. We consolidate Beaver with Milford, Minersville, and other Beaver County installations whenever possible. Lead time is 12–22 weeks with foundation-pour scheduling and the 90-day settling rule affecting timeline.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Beaver families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Beaver`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Beaver</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Beaver Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Deep-foundation engineering for the 5,900-foot elevation, veteran benefits coordination, ranching-heritage design.</p>
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
  { name: 'Mountain View Cemetery (Beaver)', note: 'Main Beaver County municipal, 90-day rule may apply', href: '/cemeteries/mountain-view-cemetery' },
  { name: 'Milford Cemetery', note: '20 min west, railroad heritage', href: '/cemeteries/milford-cemetery' },
  { name: 'Minersville Cemetery', note: '15 min west, silver-mining heritage', href: '/cemeteries/minersville-cemetery' },
  { name: 'Adamsville Cemetery', note: '10 min west, small pioneer', href: '/cemeteries/adamsville-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
];

const faqs = [
  {
    q: 'Was Butch Cassidy really born in Beaver?',
    a: 'Yes. Robert LeRoy Parker was born in Beaver on April 13, 1866. He later took the alias Butch Cassidy. The town celebrates that heritage and it occasionally appears in memorial design conversations.',
  },
  {
    q: 'What is the 90-day rule at Mountain View Cemetery?',
    a: 'Some Beaver County cemeteries require a 90-day settling period after burial before a monument can be installed. This is a soil-settlement rule to prevent shifting. We factor it into the timeline for every Beaver installation.',
  },
  {
    q: 'Was Fort Cameron a cemetery?',
    a: 'Fort Cameron was an 1870s US Army post near Beaver. It is not a cemetery, though soldiers from the fort era are represented in Mountain View Cemetery. Military-heritage design is available for veteran families.',
  },
  {
    q: 'Why is a Beaver installation so much longer than St. George?',
    a: 'Distance (110 min each way), elevation (deeper foundations), freeze-window scheduling, and potentially the 90-day settling rule all contribute. Full timeline is typically 12–22 weeks.',
  },
];

const related = [
  { label: 'Mountain View Cemetery Guide', href: '/cemeteries/mountain-view-cemetery' },
  { label: 'Milford Service Area', href: '/service-areas/milford' },
  { label: 'Minersville Service Area', href: '/service-areas/minersville' },
  { label: 'Bronze / VA Markers', href: '/headstones/bronze-memorials' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Beaver County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-1.jpg',
  '/images/products/upright-headstones-2.jpg',
  '/images/products/flat-headstone-2.jpg',
  '/images/products/slant-headstone-8.jpg',
  '/images/products/slant-headstone-9.jpg',
  '/images/products/bevel-headstone.jpg',
];
</script>
