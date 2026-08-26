<template>
  <AppLayout>
    <Head>
      <title>Headstones for Rural Utah — Beaver, Panguitch & the High-Desert Corridor | St. George Memorials</title>
      <meta name="description" content="Custom headstones and monuments for the Beaver–Panguitch high-desert corridor of Utah — a regional overview covering Beaver, Milford, Minersville, Panguitch, Tropic, Hatch, Escalante, Cannonville, and the surrounding rural Beaver and Garfield County communities." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/beaver-panguitch" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Beaver & Garfield Counties · Regional Overview</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones for Rural Utah — The Beaver–Panguitch Corridor</h1>
        <p class="text-white/70 text-lg max-w-3xl">Beaver and Garfield counties together form a corridor of ranching, pioneer, and high-desert communities that stretches from Butch Cassidy's hometown of Beaver east through Panguitch and down toward Bryce Canyon and Escalante. This is our regional overview — see the city and cemetery pages for detail.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Counties</p>
            <p class="text-sm text-white mt-1">Beaver, Garfield</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Character</p>
            <p class="text-sm text-white mt-1">Ranching, high-desert</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation Range</p>
            <p class="text-sm text-white mt-1">5,000 – 6,700 ft</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Install Season</p>
            <p class="text-sm text-white mt-1">Apr–Oct, weather-dependent</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Regional View of Rural Southern Utah</h2>
            <p>The high-desert corridor from Beaver east through Panguitch and out to Tropic and Escalante is one of the more historically rich and physically demanding memorial markets in Utah. Elevations run from 5,000 feet at Milford to nearly 6,700 feet at Panguitch. Winters are real. Freight distances from St. George range from 100 minutes (Minersville) to nearly three hours (Escalante). And the memorial identity of each town differs significantly — Beaver's ranching and Butch Cassidy heritage, Milford's railroad past, Panguitch's Quilt Walk pioneer endurance, Tropic's Bryce Canyon backdrop, Escalante's Grand Staircase homesteader story.</p>
            <p>We treat the corridor as a connected market. We consolidate installations across multiple towns on the same trip to reduce per-monument freight cost. And we plan every project timeline around the region's seasonal installation window — mostly April through October for foundation pours, with more flexibility for setting on already-cured foundations.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">City & Town Service Areas in the Corridor</h2>
            <p class="text-granite text-sm mb-6">Deep-detail service-area pages for each town in the corridor.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="area in serviceAreas" :key="area.href" :href="area.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <div>
                  <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light block">{{ area.name }}</span>
                  <span class="text-xs text-granite">{{ area.note }}</span>
                </div>
                <svg class="w-4 h-4 text-bronze flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in the Beaver–Panguitch Corridor</h2>
            <p class="text-granite text-sm mb-6">Cemetery guide pages with rules, fees, sections, and history.</p>
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
            <h2>High-Desert Engineering — Why It Matters</h2>
            <p>The single technical distinction of this corridor from our Washington County work is elevation. St. George sits at 2,800 feet with no freeze; Panguitch is at 6,700. That means:</p>
            <ul>
              <li><strong>Deeper foundations.</strong> Freeze-thaw cycles heave shallow foundations over time. We engineer to the local elevation.</li>
              <li><strong>Narrower installation windows.</strong> Concrete cannot be poured in subfreezing weeks. In Panguitch and Escalante this narrows the effective installation season to April–October.</li>
              <li><strong>Careful scheduling around Memorial Day.</strong> Some cemeteries (Tropic explicitly, others informally) require placement complete by mid-to-late May. Timeline planning starts backward from that date.</li>
              <li><strong>Higher freight cost.</strong> 2–3 hour drives from St. George add real cost. We consolidate multiple corridor installations on a single trip whenever possible.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in the Corridor</h2>
            <p class="text-granite text-sm mb-6">Practical, durable designs suited to ranching heritage and hard winters.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — The Corridor</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Corridor Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Deep-foundation engineering, seasonal scheduling, and multi-city trip consolidation to reduce freight.</p>
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

const serviceAreas = [
  { name: 'Beaver', note: 'Butch Cassidy\'s hometown, county seat', href: '/service-areas/beaver' },
  { name: 'Milford', note: 'Union Pacific railroad heritage', href: '/service-areas/milford' },
  { name: 'Minersville', note: '1860s silver and lead mining', href: '/service-areas/minersville' },
  { name: 'Panguitch', note: 'Garfield County seat, Bryce Canyon gateway', href: '/service-areas/panguitch' },
  { name: 'Tropic', note: 'Bryce Canyon amphitheater country', href: '/service-areas/tropic' },
];

const cemeteries = [
  { name: 'Mountain View Cemetery (Beaver)', note: 'Main Beaver County municipal', href: '/cemeteries/mountain-view-cemetery' },
  { name: 'Milford Cemetery', note: 'Railroad-era stones', href: '/cemeteries/milford-cemetery' },
  { name: 'Minersville Cemetery', note: 'Silver / lead mining heritage', href: '/cemeteries/minersville-cemetery' },
  { name: 'Adamsville Cemetery', note: 'Small Beaver County pioneer', href: '/cemeteries/adamsville-cemetery' },
  { name: 'Panguitch City Cemetery', note: 'Highest-elevation cemetery we serve', href: '/cemeteries/panguitch-city-cemetery' },
  { name: 'Tropic City Cemetery', note: 'Beneath Bryce Canyon amphitheater', href: '/cemeteries/tropic-city-cemetery' },
  { name: 'Hatch Town Cemetery', note: 'Small Garfield County pioneer', href: '/cemeteries/hatch-town-cemetery' },
  { name: 'Cannonville Cemetery', note: 'Small pioneer near Bryce', href: '/cemeteries/cannonville-cemetery' },
  { name: 'Escalante Cemetery', note: 'Grand Staircase homesteader heritage', href: '/cemeteries/escalante-cemetery' },
  { name: 'Boulder Cemetery', note: 'Remote Garfield County community', href: '/cemeteries/boulder-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Why is the Beaver–Panguitch corridor treated as one page?',
    a: 'It\'s a legacy regional overview. Individual towns and cemeteries have their own detail pages linked above. This page exists for families who want a regional summary before drilling in.',
  },
  {
    q: 'What is the seasonal installation window in the corridor?',
    a: 'Concrete pours are typically limited to April through October due to freeze-thaw. Setting existing monuments on cured foundations can happen in more months of the year, weather permitting.',
  },
  {
    q: 'Do you consolidate installations across multiple corridor cities?',
    a: 'Yes. We often bundle Beaver + Milford + Minersville trips, or Panguitch + Tropic + Hatch + Cannonville trips, on the same day to reduce per-monument freight cost. Ask us about it.',
  },
  {
    q: 'How much longer does a corridor installation take vs. St. George?',
    a: 'Typically 12–24 weeks vs. 8–14 for St. George. The variables are distance, elevation-driven foundation depth, and seasonal concrete-pour scheduling.',
  },
];

const related = [
  { label: 'Beaver Service Area', href: '/service-areas/beaver' },
  { label: 'Panguitch Service Area', href: '/service-areas/panguitch' },
  { label: 'Tropic Service Area', href: '/service-areas/tropic' },
  { label: 'Mountain View Cemetery Guide', href: '/cemeteries/mountain-view-cemetery' },
  { label: 'Panguitch Cemetery Guide', href: '/cemeteries/panguitch-city-cemetery' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
