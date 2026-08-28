<template>
  <AppLayout>
    <Head>
      <title>Headstones in Washington City, Utah — Oldest Continuously Used Cemetery | St. George Memorials</title>
      <meta name="description" content="Custom headstones and monuments for Washington City, Utah — home to the oldest continuously used cemetery in Washington County, predating the 1861 Cotton Mission. Sexton approvals, pioneer sandstone restoration, and delivery from our nearby St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/washington-city" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 5 min east of St. George</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones & Monuments in Washington City, Utah</h1>
        <p class="text-white/70 text-lg max-w-3xl">Washington City is the older sister of St. George — settled before it, cotton-farming since the 1850s, and home to what is arguably the oldest continuously used cemetery in Washington County. That heritage shapes how families here mark their loved ones' graves, and it shapes what we design and install.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">1857 (pre-Mission)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~10 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Specialty</p>
            <p class="text-sm text-white mt-1">Pioneer sandstone restoration</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Older Than St. George, and Still Growing</h2>
            <p>Washington City was settled in 1857 by pioneers sent to raise cotton — four years before the larger Cotton Mission call that brought Brigham Young's settlers to found St. George in 1861. That means the earliest burials at Washington City Cemetery predate St. George itself, and many of the sandstone markers in the oldest sections were carved before the St. George Utah Temple was even a plan on a page. Today the city is a growing suburb of St. George, but the pioneer roots are still visible on any walk through the cemetery grounds.</p>
            <p>Families here often have a five-generation connection to the land. We work with those families the same way we work with newcomers — verify the sexton's current rules first, then design. But the design conversation in Washington City is frequently different: heritage motifs, historic surname continuity across plots, and coordinating the aesthetic of a new stone with pioneer sandstone markers already standing in the same family row.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Washington City</h2>
            <p class="text-granite text-sm mb-6">One municipal cemetery, plus adjacent options within a 10-minute drive.</p>
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
            <h2>Washington City Cemetery Rules at a Glance</h2>
            <p>Washington City Cemetery is administered by the City of Washington and follows most of the standard Southern Utah patterns: 24-hour advance notice to the sexton before installation, concrete base required, decorative fencing generally not encouraged. Uprights are permitted in most sections, though the historic pioneer sections have their own aesthetic sensitivities that families choosing to install new stones nearby should honor.</p>
            <p>For current plot fees, section availability, and specific dimension limits, we recommend contacting the city directly. We verify current rules with them on every quote before design begins — the full cemetery guide is at our <Link href="/cemeteries/washington-city-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Washington City Cemetery page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Pioneer Sandstone Restoration — a Washington City Specialty</h2>
            <p>Washington City has more surviving pre-1900 pioneer sandstone grave markers per acre than any other cemetery in Washington County. Sandstone was the material of choice for the earliest Cotton Mission carvers because it was locally quarried and workable with pioneer tools, but it weathers dramatically faster than granite. Many of those original markers are actively eroding — some to the point where the inscriptions are barely legible.</p>
            <p>Restoration is a specialty we take seriously in Washington City. That includes assessment (is the stone salvageable or is a replacement more appropriate?), cleaning (gentle non-ionic protocols only — pioneer sandstone will not tolerate acid or pressure washing), and where necessary, a matched granite replacement placed alongside the original historic stone so both remain visible. Full details on our <Link href="/headstones/restoration" class="text-bronze font-medium underline hover:text-evergreen transition-colors">headstone restoration page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Washington City</h2>
            <p class="text-granite text-sm mb-6">Washington City families often gravitate toward heritage-compatible designs.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Washington City</h2>
            <p>Washington City is about ten minutes east of our St. George shop — one of the shortest delivery routes we run. Because it's inside the same freeze-free zone as St. George itself, we install year-round with no seasonal delay. Typical lead time from proof approval to set stone is 8–14 weeks.</p>
            <p>The one Washington-specific consideration: because so many families have pioneer plots with existing headstones, we do a plot survey at the design stage to make sure the new stone aesthetically integrates with what's already standing. That's included in every Washington City quote at no charge.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Washington City families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Washington City`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Washington City</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Washington City Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and cemetery verification before any design begins. Ten minutes from our St. George shop.</p>
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
  { name: 'Washington City Cemetery', note: 'Established pre-1861, oldest continuously used in the county', href: '/cemeteries/washington-city-cemetery' },
  { name: 'St. George City Cemetery', note: '10 min west, historic downtown', href: '/cemeteries/st-george-city-cemetery' },
  { name: 'Tonaquint Cemetery', note: '15 min southwest, modern memorial park', href: '/cemeteries/tonaquint-cemetery' },
  { name: 'Hurricane City Cemetery', note: '15 min east, agricultural pioneer', href: '/cemeteries/hurricane-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'St. George Temple Engraving', price: 'From $1,400', href: '/headstones/st-george-temple-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Can you restore a pioneer sandstone grave marker at Washington City Cemetery?',
    a: 'In most cases yes, though we always assess first. Some pioneer stones have weathered past the point where restoration is meaningful, and a matched granite replacement placed alongside the original is a better solution. We do the assessment at no charge.',
  },
  {
    q: 'Is the Washington City Cemetery the same as the St. George City Cemetery?',
    a: 'No — they are separate cemeteries operated by different municipalities. Washington City Cemetery is administered by the City of Washington. St. George City Cemetery is administered by the City of St. George. They are about 10 minutes apart.',
  },
  {
    q: 'Can I design a modern upright monument next to my grandparents\' pioneer sandstone marker?',
    a: 'Yes, and we do this often. The design conversation focuses on integrating the aesthetic — matching lettering style, positioning, and granite tone so the new stone honors the historic one rather than competing with it.',
  },
  {
    q: 'How long from order to install?',
    a: 'Typical 10–18 weeks for a new monument, longer for restoration work depending on the condition assessment. Because Washington City is inside the freeze-free zone, we install year-round.',
  },
];

const related = [
  { label: 'Washington City Cemetery Guide', href: '/cemeteries/washington-city-cemetery' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
  { label: 'Hurricane Service Area', href: '/service-areas/hurricane' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-8.jpg',
  '/images/products/upright-headstones-9.jpg',
  '/images/products/flat-headstone.jpg',
  '/images/products/slant-headstone-4.jpg',
  '/images/products/bronze-headstone-6.jpg',
  '/images/products/bench-headstone-1.jpg',
];
</script>
