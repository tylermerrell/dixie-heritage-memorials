<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Tropic, Utah — Bryce Canyon Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Tropic, Utah families — a small Garfield County town beneath the Bryce Canyon amphitheater. Placement-by-Memorial-Day scheduling, high-elevation foundation engineering, and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/tropic" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Garfield County · Service Area · 165 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Tropic — Bryce Canyon Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Tropic is a small Garfield County town in the valley beneath the Bryce Canyon amphitheater — settled in the 1890s by pioneers who engineered an irrigation tunnel through the mountain to bring water to the valley floor. The town's cemetery holds four generations of that community.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Garfield</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~6,300 ft</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~2 hours 45 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Scheduling Note</p>
            <p class="text-sm text-white mt-1">Placement by May 20 for Memorial Day</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Beneath the Bryce Canyon Amphitheater</h2>
            <p>Tropic was founded in the 1890s by Latter-day Saint pioneers who built the Tropic Ditch — an irrigation tunnel through the mountain that brought water from the East Fork of the Sevier River to the Paria Valley floor. That engineering feat made the town possible. Its cemetery sits in the shadow of the Bryce Canyon amphitheater — one of the most striking natural backdrops of any burial ground in Utah.</p>
            <p>The town remains small and mostly agricultural, though tourism through nearby Bryce Canyon National Park has changed its character in recent decades. The cemetery is still the town's — held closely by families whose ancestors dug the ditch.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Tropic</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus surrounding Garfield County pioneer options.</p>
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
            <h2>Tropic City Cemetery — Rules & the Memorial Day Scheduling Rule</h2>
            <p>Tropic City Cemetery is administered by the Town of Tropic. A distinctive local rule: monument placement must be completed by May 20 for Memorial Day visitors. That means we plan every Tropic installation timeline around the May 20 deadline when a family wants the stone in place for Memorial Day. Otherwise standard installation patterns apply: sexton advance notice, concrete apron, deeper foundations for the ~6,300-foot elevation.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Design Inspired by Bryce Canyon</h2>
            <p>Some Tropic families incorporate elements of the surrounding landscape into headstones — a stylized amphitheater silhouette, a hoodoo formation, or a horizon line drawing that references the view over the valley. The engineering heritage (the Tropic Ditch, the town's pioneer irrigation) is a subtler design theme families sometimes reference. Both are custom engraving priced per design.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Tropic</h2>
            <p class="text-granite text-sm mb-6">Practical uprights, LDS pioneer designs, and landscape-inspired custom engraving.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Tropic</h2>
            <p>Tropic is 2 hours 45 minutes east of our St. George shop via I-15, US-89, and SR-12 — one of the longest regular runs we make. Freight is significant. We consolidate Tropic installations with Panguitch, Hatch, and Cannonville trips whenever possible. Lead time is 14–24 weeks; families targeting Memorial Day placement should contact us by early February at the latest.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Tropic</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Tropic Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Memorial Day scheduling and Bryce Canyon–inspired design options available.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>

      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import RelatedLinks from '@/Components/RelatedLinks.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();

const cemeteries = [
  { name: 'Tropic City Cemetery', note: 'Memorial Day placement by May 20', href: '/cemeteries/tropic-city-cemetery' },
  { name: 'Cannonville Cemetery', note: '10 min south, small pioneer', href: '/cemeteries/cannonville-cemetery' },
  { name: 'Panguitch City Cemetery', note: '25 min west, county seat', href: '/cemeteries/panguitch-city-cemetery' },
  { name: 'Hatch Town Cemetery', note: '45 min west, small pioneer', href: '/cemeteries/hatch-town-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Custom Engraving (landscape motifs)', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
];

const faqs = [
  {
    q: 'What is the May 20 rule at Tropic Cemetery?',
    a: 'Monument placement must be completed by May 20 for Memorial Day. Families wanting a stone in place for the holiday must plan the timeline backward: contact us by early February at the latest.',
  },
  {
    q: 'What is the Tropic Ditch?',
    a: 'A pioneer irrigation tunnel through the mountain that brought water from the Sevier River to the Paria Valley in the 1890s. It made Tropic possible as a settlement. Some families reference the engineering heritage in memorial design.',
  },
  {
    q: 'Can I have a Bryce Canyon amphitheater or hoodoo silhouette on a headstone?',
    a: 'Yes. Stylized landscape motifs referencing the surrounding red-rock formations are among our custom engraving options for Tropic families.',
  },
  {
    q: 'How much longer is a Tropic installation than a St. George installation?',
    a: 'Distance, elevation, and freight all add up. Lead time is typically 14–24 weeks vs. 8–14 for St. George.',
  },
];

const related = [
  { label: 'Tropic Cemetery Guide', href: '/cemeteries/tropic-city-cemetery' },
  { label: 'Panguitch Service Area', href: '/service-areas/panguitch' },
  { label: 'Cannonville Cemetery Guide', href: '/cemeteries/cannonville-cemetery' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Garfield County Cemeteries', href: '/cemeteries' },
];
</script>
