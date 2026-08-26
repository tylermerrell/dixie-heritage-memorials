<template>
  <AppLayout>
    <Head>
      <title>Santa Clara Utah Headstones — Swiss Pioneer Country & Jacob Hamblin's Valley | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Santa Clara, Utah families — a Swiss pioneer settlement founded in the 1850s and home of the Jacob Hamblin Home. We build heritage-appropriate memorials for Santa Clara City Cemetery and design designs that honor the town's peacemaker legacy." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/santa-clara" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 6 minutes west of St. George</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Serving Santa Clara — Swiss Pioneer Country and Jacob Hamblin's Valley</h1>
        <p class="text-white/70 text-lg max-w-3xl">Santa Clara has a heritage no other town in Washington County shares: settled in the 1850s by Swiss LDS converts and served as the home base of Jacob Hamblin, the "Peacemaker of the West." We build headstones for the descendants of both those pioneer families — and for the newer residents who chose this town for its quiet, red-rock-framed character.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Heritage</p>
            <p class="text-sm text-white mt-1">Swiss LDS pioneer</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~10 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Jacob Hamblin Home (1862)</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Town Founded by Swiss Converts and a Peacemaker</h2>
            <p>Santa Clara was settled in the mid-1850s by Swiss Latter-day Saint converts sent south from Salt Lake to establish a European-style agricultural community on the Santa Clara River. The town's name traces back to Spanish exploration in the region, and its identity today still carries the mark of that Swiss founding — evident in surnames still common in the local cemetery. Around the same time, Jacob Hamblin — the missionary who became known as the "Peacemaker of the West" for his diplomacy with Southern Paiute and other Native nations — made Santa Clara his home. His sandstone house, built in 1862, still stands as a historic site.</p>
            <p>That combination of Swiss agricultural pioneers and a mission-focused peacemaking founder gives Santa Clara a distinct memorial character. We design headstones that honor that heritage — sometimes explicitly, with pioneer-era motifs, but more often with a quiet dignity of proportion and finish that reflects the town's understated identity.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Santa Clara</h2>
            <p class="text-granite text-sm mb-6">Santa Clara's own cemetery plus nearby Ivins and St. George options.</p>
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
            <h2>Santa Clara City Cemetery — Rules Snapshot</h2>
            <p>Santa Clara City Cemetery is located at 3780 Windmill Drive and administered by the City of Santa Clara. The cemetery follows standard Washington County patterns: 24-hour advance notice to the sexton, concrete apron under every monument, and section-specific rules for uprights vs. flush markers. For families with plots near the historic pioneer sections, we do a plot survey at the design stage to ensure the new monument is aesthetically compatible with the earlier stones nearby.</p>
            <p>Current plot fees, section availability, and dimension limits are best confirmed directly with the city. We verify rules on every quote — full details on our <Link href="/cemeteries/santa-clara-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Santa Clara Cemetery guide page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Heritage Design Elements Unique to Santa Clara</h2>
            <p>Several distinctive motifs appear on Santa Clara headstones more than anywhere else in the county. The Swiss cross (subtle, not always centered), edelweiss and alpine floral references, and family surnames of Swiss origin in traditional lettering. Where families have direct descent from Hamblin or from the Swiss founding families, we sometimes include a simple pioneer wagon, a sandstone house silhouette, or a symbolic peace element referencing the town's founding narrative. All of this is optional — most families choose more conventional designs — but the option is worth knowing about.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Santa Clara</h2>
            <p class="text-granite text-sm mb-6">Understated, heritage-compatible designs are the most common commissions in Santa Clara.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Santa Clara</h2>
            <p>Santa Clara is about ten minutes west of our St. George shop — one of the shortest delivery routes we run, and inside the same year-round installation window that governs our home city. Typical timeline from proof approval to set stone is 8–14 weeks.</p>
            <p>Because so many Santa Clara plots are near pioneer sandstone markers, we always survey the neighboring stones before finalizing lettering size and monument dimensions. Integration matters here more than in newer memorial parks.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Santa Clara</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Santa Clara Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation, sexton verification, and a digital proof before any payment is due. We honor the town's Swiss and Hamblin heritage in every design.</p>
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
  { name: 'Santa Clara City Cemetery', note: '3780 Windmill Dr — Swiss pioneer heritage', href: '/cemeteries/santa-clara-cemetery' },
  { name: 'Ivins City Cemetery', note: '5 min west, retirement community', href: '/cemeteries/ivins-city-cemetery' },
  { name: 'St. George City Cemetery', note: '10 min east, historic', href: '/cemeteries/st-george-city-cemetery' },
  { name: 'Gunlock Cemetery', note: '25 min northwest, small pioneer', href: '/cemeteries/gunlock-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
];

const faqs = [
  {
    q: 'Can I include Swiss heritage elements on a Santa Clara headstone?',
    a: 'Yes. We regularly design headstones with Swiss cross, edelweiss, or family surnames in traditional lettering for Santa Clara families with pioneer Swiss descent. The choice is entirely optional and often quite understated.',
  },
  {
    q: 'Is the Jacob Hamblin Home a cemetery?',
    a: 'No. The Jacob Hamblin Home is a historic site preserved as a museum. Jacob Hamblin himself is buried in Alpine, Arizona. But his family and neighbors are represented in Santa Clara City Cemetery.',
  },
  {
    q: 'Can you restore a pioneer sandstone marker at Santa Clara Cemetery?',
    a: 'In most cases yes, though we assess first. Some pioneer stones have weathered past meaningful restoration; a matched granite replacement placed alongside the original is sometimes the better solution. Assessment is free.',
  },
  {
    q: 'How far is Santa Clara from your St. George shop?',
    a: 'About 10 minutes via the Santa Clara Parkway. Delivery and installation are inside our home-base zone with no long-haul surcharge.',
  },
];

const related = [
  { label: 'Santa Clara Cemetery Guide', href: '/cemeteries/santa-clara-cemetery' },
  { label: 'Ivins Service Area', href: '/service-areas/ivins' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
