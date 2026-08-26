<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Orderville, Utah — United Order Heritage | St. George Memorials</title>
      <meta name="description" content="Headstones for Orderville, Utah families — the historic 1875 United Order communal community in Kane County. Heritage-appropriate design and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/orderville" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Kane County · Service Area · 100 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Orderville — United Order Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Orderville was founded in 1875 as one of the most complete and long-lasting experiments in the Latter-day Saint "United Order" — a communal economic system in which members held property in common and lived as extended family. The town's name preserves that heritage, and the cemetery holds the descendants of the founding generation.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Kane</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">1875 (United Order)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~100 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Character</p>
            <p class="text-sm text-white mt-1">Small, historic</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The United Order Experiment</h2>
            <p>The United Order was a Latter-day Saint communal economic model that Brigham Young encouraged in the mid-1870s. Members contributed their property to a shared community treasury and drew from it according to need. Most Utah communities that experimented with the Order abandoned it within a year or two — the practical challenges of communal ownership proved formidable. Orderville was the exception. Its practice of the Order lasted more than a decade, from 1875 into the mid-1880s, and the town's cemetery contains the descendants of the families who made it work.</p>
            <p>That heritage is part of the design conversation in Orderville. Some families incorporate United Order motifs into headstones — a stylized circle, a communal wheat sheaf, or explicit textual reference to United Order membership.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Orderville</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus nearby Kane County pioneer cemeteries.</p>
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
            <h2>Orderville Cemetery — Rules Snapshot</h2>
            <p>Orderville Cemetery is administered by the Town of Orderville. Because the town is small, coordination happens through the town office. Elevation is around 5,500 feet — real winter freeze-thaw territory. We engineer deeper foundations and schedule concrete pours around forecasted weather. The cemetery contains an unusually cohesive pioneer section reflecting the community's continuity.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Heritage Design in a Historic Community</h2>
            <p>Orderville's memorial aesthetic reflects the town's history: understated, community-oriented, and often referencing the United Order heritage in subtle ways. Straightforward polished granite uprights with clean lettering are the most common commission, sometimes with small symbolic elements — a wheat sheaf, a communal beehive, or a family surname linking back to the founding generation.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Orderville</h2>
            <p class="text-granite text-sm mb-6">Heritage-appropriate uprights and LDS pioneer designs dominate.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Orderville</h2>
            <p>Orderville is 100 minutes east of our St. George shop via US-89. We consolidate Orderville, Glendale, and Kanab installations on the same trip whenever possible to reduce freight cost. Lead time is 12–20 weeks, with foundation-pour scheduling around winter forecasts.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Orderville</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design an Orderville Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Heritage-appropriate design for one of Utah's most historically significant small towns.</p>
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
  { name: 'Orderville Cemetery', note: 'United Order heritage community', href: '/cemeteries/orderville-cemetery' },
  { name: 'Glendale Cemetery', note: '5 min south, small pioneer', href: '/cemeteries/glendale-cemetery' },
  { name: 'Alton Cemetery', note: '25 min north, high-desert pioneer', href: '/cemeteries/alton-cemetery' },
  { name: 'Kanab City Cemetery', note: '25 min south, county seat', href: '/cemeteries/kanab-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'What was the United Order?',
    a: 'A Latter-day Saint communal economic system encouraged by Brigham Young in the 1870s. Members contributed their property to a shared community treasury. Orderville practiced it for over a decade — one of the longest-running examples of the Order in Utah.',
  },
  {
    q: 'Can you incorporate United Order motifs into a design?',
    a: 'Yes, when families choose to reference that heritage. Wheat sheaves, communal beehives, and explicit textual references to Order membership are all options we\'ve designed.',
  },
  {
    q: 'How is Orderville different from Glendale for cemetery purposes?',
    a: 'They are separate towns with separate cemeteries but only 5 minutes apart. Some families have plots in both. We frequently schedule installations in both on the same trip.',
  },
  {
    q: 'Why does an Orderville installation take longer than Kanab?',
    a: 'Slightly higher elevation (5,500 ft vs. 4,900 ft) means deeper foundations and slightly more freeze-window sensitivity. Lead time is 12–20 weeks vs. 12–20 for Kanab — comparable in practice.',
  },
];

const related = [
  { label: 'Orderville Cemetery Guide', href: '/cemeteries/orderville-cemetery' },
  { label: 'Glendale Cemetery Guide', href: '/cemeteries/glendale-cemetery' },
  { label: 'Kanab Service Area', href: '/service-areas/kanab' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'Headstone Restoration', href: '/headstones/restoration' },
  { label: 'All Kane County Cemeteries', href: '/cemeteries' },
];
</script>
