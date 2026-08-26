<template>
  <AppLayout>
    <Head>
      <title>Cross-Border Headstone Service to Fredonia, Arizona | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Fredonia, Arizona — the Arizona Strip's northernmost town, adjacent to the Kaibab Paiute reservation and across the state line from Kanab, Utah. Cross-border delivery from our St. George shop, VA benefits, and Arizona-registered installation." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/fredonia" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Coconino County, Arizona · Cross-Border Service · 95 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Cross-Border Headstone Service to Fredonia, Arizona</h1>
        <p class="text-white/70 text-lg max-w-3xl">Fredonia is the northernmost town on the Arizona Strip, sitting across the state line from Kanab, Utah. It's an isolated community — no monument company based in Arizona serves it well, and no major monument company based in Southern Utah crosses the line. We do both. From our St. George shop we deliver, install, and coordinate cemetery approvals in Fredonia and its neighboring communities.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">State</p>
            <p class="text-sm text-white mt-1">Arizona</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Coconino</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~95 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Region</p>
            <p class="text-sm text-white mt-1">Arizona Strip</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Arizona Strip's Northernmost Town</h2>
            <p>Fredonia is a small town in the northernmost tip of Coconino County, Arizona — part of the "Arizona Strip" region north of the Grand Canyon that is more accessible from Utah than from the rest of Arizona. Settled by pioneers pushed south from the Cotton Mission communities in the 1880s, Fredonia shares heritage, family names, and economic ties with Kanab across the Utah-Arizona line.</p>
            <p>For monument service, that isolation matters. Phoenix-area monument companies don't serve the Strip; Utah companies typically don't cross the state line. We treat Fredonia as an extension of our Kane County service — same pricing structure, same design process, same lead time. The state line is a bureaucratic distinction, not a service distinction.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Fredonia</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus Kanab across the border and Kaibab Paiute reservation cemeteries nearby.</p>
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
            <h2>Fredonia Cemetery — Rules Snapshot</h2>
            <p>Fredonia Cemetery is administered by the Town of Fredonia. Because the town is small and Arizona law governs, we call the town office directly to confirm current rules for every design. Foundation depths are matched to the Arizona Strip's elevation (~4,600 feet), which experiences mild winters similar to Kanab.</p>
            <p>Arizona has its own regulations for monument installation that differ subtly from Utah. We navigate those as part of our cross-border service — including any Kaibab Paiute reservation coordination if the burial is on tribal land, though we approach that with deference to community protocols and rely on family guidance for any culturally sensitive design.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Fredonia's Isolation Is Our Advantage</h2>
            <p>Kenworthy Monuments, Utah Monument Company, and other Southern Utah competitors typically don't serve Fredonia — the state line is a friction they don't bother crossing. Arizona-based monument companies are hundreds of miles away. For Fredonia families, that has traditionally meant limited options and mail-order stones from national vendors who never verify the local cemetery rules. We are the alternative: a local monument company that treats Fredonia like the natural extension of Kanab that it is.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Fredonia</h2>
            <p class="text-granite text-sm mb-6">Mixed — pioneer heritage and modern uprights both common.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation Across the State Line</h2>
            <p>Fredonia is about 95 minutes east of our St. George shop, just past Kanab. We consolidate Fredonia installations with Kanab whenever possible to reduce freight cost. Interstate freight paperwork is trivial — the state line adds no meaningful delay. Lead time is 12–20 weeks, comparable to Kanab.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Fredonia</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Fredonia Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Cross-border service. Same pricing, same process, same lead time as our Utah service area.</p>
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
  { name: 'Fredonia Cemetery (AZ)', note: 'Arizona Strip, cross-border service', href: '/cemeteries/fredonia-cemetery' },
  { name: 'Kanab City Cemetery', note: '10 min north across state line', href: '/cemeteries/kanab-city-cemetery' },
  { name: 'Orderville Cemetery', note: '35 min north, United Order heritage', href: '/cemeteries/orderville-cemetery' },
  { name: 'Glendale Cemetery', note: '40 min north, small pioneer', href: '/cemeteries/glendale-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Do you actually deliver to Arizona?',
    a: 'Yes. We treat Fredonia as an extension of our Kane County service. Interstate freight paperwork is standard and adds no meaningful delay. Cross-border service is one of our specialties.',
  },
  {
    q: 'Does the state line change pricing?',
    a: 'No. Fredonia pricing follows the same freight structure as Kanab — 90-plus minutes east of our shop, same per-mile cost. State-line does not change what we charge.',
  },
  {
    q: 'What about VA benefits for Fredonia veterans?',
    a: 'VA benefits are federal and apply across state lines. Eligible veterans can receive a free VA-issued marker at Fredonia Cemetery through VA Form 40-1330, or a bronze VA medallion affixed to a private stone. We handle both.',
  },
  {
    q: 'Can you serve the Kaibab Paiute reservation?',
    a: 'Yes, when families of the Kaibab Band of Paiutes wish to work with an outside monument company. We approach every reservation-adjacent design with deference to community protocols and rely on family guidance for any culturally sensitive design elements. Direct engagement with the tribal government may be required for reservation land.',
  },
];

const related = [
  { label: 'Fredonia Cemetery Guide', href: '/cemeteries/fredonia-cemetery' },
  { label: 'Kanab Service Area', href: '/service-areas/kanab' },
  { label: 'Bronze / VA Markers', href: '/headstones/bronze-memorials' },
  { label: 'Buying Guide — Cross-State Orders', href: '/resources/buying-guide' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'All Cemeteries We Serve', href: '/cemeteries' },
];
</script>
