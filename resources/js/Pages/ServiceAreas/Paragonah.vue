<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Paragonah, Utah — Little Salt Lake Pioneer Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Paragonah, Utah — a small historic Iron County town near the Little Salt Lake. Paragonah Cemetery service, pioneer restoration, deep-foundation engineering, and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/paragonah" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Iron County · Service Area · 70 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Paragonah — Little Salt Lake Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Paragonah is a small historic Iron County town north of Parowan, near the dry playa known as the Little Salt Lake. Settled in the 1850s as part of the Iron Mission's expansion, it remains one of the smallest and quietest cemeteries we serve — and one of the most historically continuous.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Iron</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">1850s pioneer settlement</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~70 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~5,800 ft</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Small Iron County Pioneer Town</h2>
            <p>Paragonah was settled in the mid-1850s as one of the Iron Mission's satellite communities, established after Parowan and Cedar City had taken root. The name derives from a Paiute word for the region. The town never grew large — its population has hovered under 500 for more than a century — and the cemetery reflects that stability. Family lines are deep, and the same surnames repeat across generations of stones.</p>
            <p>Because Paragonah is small, cemetery matters are handled directly through the town office rather than through a dedicated sexton bureaucracy. We call the town on every design to confirm current rules.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Paragonah</h2>
            <p class="text-granite text-sm mb-6">Paragonah Cemetery plus nearby Parowan and other Iron County pioneer options.</p>
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
            <h2>Paragonah Cemetery — Rules Snapshot</h2>
            <p>Paragonah Cemetery is administered by the Town of Paragonah. Because the town is small, installation scheduling is coordinated with the town office directly. Elevation is around 5,800 feet — similar to Cedar City — so we engineer deeper foundations and schedule concrete pours around freeze forecasts. Otherwise the cemetery follows standard Iron County patterns.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Multi-Generational Family Continuity</h2>
            <p>The most common design conversation in Paragonah centers on integrating a new monument with existing family plots that may span four or five generations. We survey the family's existing stones at the design stage — matching granite tone, lettering, and proportion so the new stone honors the continuity rather than breaking it. That survey is included in every Paragonah quote at no charge.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Paragonah</h2>
            <p class="text-granite text-sm mb-6">Heritage-compatible uprights and restoration dominate our Paragonah work.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Paragonah</h2>
            <p>Paragonah is about 70 minutes north of our St. George shop, just past Parowan on I-15. Freight cost is higher because of the distance. We consolidate installations here with Parowan trips whenever possible to reduce cost. Lead time is 12–22 weeks, with the foundation-pour window being the main scheduling variable.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Paragonah</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Paragonah Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and family-plot survey. Heritage-appropriate design across four and five generations of family stones.</p>
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
  { name: 'Paragonah Cemetery', note: 'Small town cemetery, town-office administered', href: '/cemeteries/paragonah-cemetery' },
  { name: 'Parowan City Cemetery', note: '10 min south, Iron Mission founding', href: '/cemeteries/parowan-city-cemetery' },
  { name: 'Summit Cemetery', note: '15 min south, small pioneer', href: '/cemeteries/summit-cemetery' },
  { name: 'Cedar City Cemetery', note: '30 min south, main Iron County municipal', href: '/cemeteries/cedar-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Where does the name Paragonah come from?',
    a: 'The name is generally understood to derive from a Paiute word referring to the local marsh or spring landscape. The town was settled by Iron Mission pioneers in the mid-1850s.',
  },
  {
    q: 'How do I schedule an installation at Paragonah Cemetery?',
    a: 'We handle it through the Town of Paragonah office directly. Because the town is small, installation is coordinated on a personal basis rather than through a formal sexton bureaucracy.',
  },
  {
    q: 'Can you match a new stone to my family\'s pioneer-era stones from the 1860s?',
    a: 'Yes. We survey the family plot at the design stage and match granite tone, lettering, and proportion for aesthetic continuity across generations. Free service.',
  },
  {
    q: 'Why does the installation take up to 22 weeks?',
    a: 'Paragonah\'s elevation requires deeper foundations, and concrete pours must avoid subfreezing weeks. If you\'re working around a specific date (a memorial service, an anniversary), tell us early so we can plan accordingly.',
  },
];

const related = [
  { label: 'Paragonah Cemetery Guide', href: '/cemeteries/paragonah-cemetery' },
  { label: 'Parowan Service Area', href: '/service-areas/parowan' },
  { label: 'Cedar City Service Area', href: '/service-areas/cedar-city' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Iron County Cemeteries', href: '/cemeteries' },
];
</script>
