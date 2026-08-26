<template>
  <AppLayout>
    <Head>
      <title>Headstones for Parowan — The Mother Town of Southern Utah | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Parowan, Utah — settled 1851, the oldest incorporated town in Southern Utah and the founding site of the Iron Mission. Pioneer restoration, LDS heritage design, and deep-foundation engineering for the 6,000-foot elevation." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/parowan" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Iron County · Service Area · 65 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones for Parowan — The Mother Town of Southern Utah</h1>
        <p class="text-white/70 text-lg max-w-3xl">Parowan was founded in January 1851 — the first permanent Anglo-American settlement in Southern Utah and the base camp for the Iron Mission that would soon establish Cedar City. Nearly 175 years later, its cemetery holds the region's founding families. We build headstones with the weight of that pioneer legacy in mind.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Iron</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">January 1851</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~65 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~6,000 ft</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Oldest Anglo-American Settlement in Southern Utah</h2>
            <p>Parley P. Pratt led an expedition south from Provo in December 1850. In January 1851 the party established Parowan — the first permanent Anglo-American settlement in what became Southern Utah, and the base camp from which the Iron Mission would soon establish Cedar City to extract iron from the Iron Mountain ore. That founding role earned Parowan the informal title "mother town of Southern Utah."</p>
            <p>Parowan Cemetery reflects that history. The earliest sections contain 1850s and 1860s burials — pioneer sandstone markers of the first generation to attempt permanent settlement in the region. Design conversations here often center on continuity: a new upright placed near a fifth-generation ancestor's stone, matching the aesthetic of the pioneer sections without imitating them.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Parowan</h2>
            <p class="text-granite text-sm mb-6">The city cemetery plus small Iron County pioneer cemeteries within a 30-minute drive.</p>
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
            <h2>Parowan Cemetery — Rules Snapshot</h2>
            <p>Parowan Cemetery is administered by the City of Parowan. At ~6,000 feet, Parowan is meaningfully higher than Cedar City and experiences a longer, harder winter — freeze-thaw cycles from November through March. We engineer foundations here to the deepest set-depth in our practice and schedule concrete pours carefully around forecasted weather. The cemetery follows standard Iron County installation patterns otherwise: sexton advance notice, concrete apron, section-specific upright vs. flush rules.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Pioneer Restoration in the Founding Sections</h2>
            <p>Parowan Cemetery contains more surviving 1850s and 1860s pioneer sandstone markers than any cemetery outside Washington City. Restoration is a real specialty here — and a sensitive one. Some pioneer markers can be preserved with gentle cleaning; others have weathered past meaningful text legibility, and the family may choose to place a matched granite replacement next to the original historic stone rather than replace it. Our <Link href="/headstones/restoration" class="text-bronze font-medium underline hover:text-evergreen transition-colors">restoration page</Link> details our assessment process. It is free.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Parowan</h2>
            <p class="text-granite text-sm mb-6">Heritage-appropriate designs, restoration, and LDS pioneer motifs dominate here.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Parowan</h2>
            <p>Parowan is 65 minutes north of our St. George shop via I-15. Foundation depth and freeze-window scheduling both matter more here than anywhere else in our regular service footprint. We often consolidate Parowan installations with Cedar City and Enoch trips to reduce freight cost. Lead time is 12–22 weeks, with foundation-pour scheduling the largest variable.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Parowan</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Parowan Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation, pioneer plot survey, and deep-foundation engineering for the 6,000-foot elevation.</p>
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
  { name: 'Parowan City Cemetery', note: '1851 pioneer sections + modern expansion', href: '/cemeteries/parowan-city-cemetery' },
  { name: 'Paragonah Cemetery', note: '10 min north, Little Salt Lake pioneer', href: '/cemeteries/paragonah-cemetery' },
  { name: 'Summit Cemetery', note: '5 min south, small pioneer', href: '/cemeteries/summit-cemetery' },
  { name: 'Cedar City Cemetery', note: '20 min south, main Iron County', href: '/cemeteries/cedar-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
];

const faqs = [
  {
    q: 'Can you restore an 1850s or 1860s pioneer sandstone marker at Parowan?',
    a: 'Often yes, though we assess first. Some pioneer sandstone has weathered past meaningful restoration; a matched granite replacement placed alongside the historic stone is sometimes the best solution. Assessment is free.',
  },
  {
    q: 'Why does a Parowan installation take longer than Cedar City?',
    a: 'Parowan is at ~6,000 feet — higher than Cedar City. Foundations are deeper and concrete pours must avoid subfreezing weeks. Lead time is typically 12–22 weeks vs. 10–18 for Cedar City.',
  },
  {
    q: 'Are pioneer families still buried in Parowan Cemetery?',
    a: 'Yes. Many families have five and six generations of continuous burial. Design conversations here often center on aesthetic continuity across generations of family stones.',
  },
  {
    q: 'What was the Iron Mission?',
    a: 'A pioneer expedition sent by Brigham Young in 1850 to establish an iron-smelting operation in the newly explored Iron Mountain area. Parowan was the base camp, founded January 1851; Cedar City was established shortly after.',
  },
];

const related = [
  { label: 'Parowan Cemetery Guide', href: '/cemeteries/parowan-city-cemetery' },
  { label: 'Paragonah Service Area', href: '/service-areas/paragonah' },
  { label: 'Cedar City Service Area', href: '/service-areas/cedar-city' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Iron County Cemeteries', href: '/cemeteries' },
];
</script>
