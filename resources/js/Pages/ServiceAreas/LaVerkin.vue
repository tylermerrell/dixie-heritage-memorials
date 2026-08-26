<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in La Verkin, Utah — Agricultural Pioneer Country | St. George Memorials</title>
      <meta name="description" content="Headstones for La Verkin, Utah families served by the LaVerkin City Cemetery. Fruit-orchard pioneer heritage, Hurricane Cliff country, and delivery from our St. George shop 30 minutes west." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/la-verkin" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 30 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones for La Verkin Families — Hurricane Cliff Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">La Verkin sits on the bench above the Virgin River at the base of the Hurricane Cliffs, an agricultural pioneer community that has spent more than a century supplying fruit and produce to the wider Washington County. We serve LaVerkin City Cemetery families with the same standards we bring to St. George — sexton coordination, transparent pricing, and no rejected stones.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Heritage</p>
            <p class="text-sm text-white mt-1">Fruit-orchard pioneer</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~30 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Hurricane Cliffs</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Small Pioneer Community with Deep Roots</h2>
            <p>La Verkin was settled in the late 1890s by pioneers who moved south from the older Cotton Mission settlements to farm the bench above the Virgin River. The town's name is thought to derive from a Spanish or Native American origin — "La Verkin" appearing on the earliest maps of the region. Fruit orchards, alfalfa, and small-scale ranching defined the community for most of the twentieth century, and while La Verkin has grown as a residential community, its pioneer identity remains visible in the surnames repeated across the cemetery.</p>
            <p>The town shares much of its economic and social life with Hurricane, its larger neighbor to the south. Families here often maintain plots in both LaVerkin City Cemetery and Hurricane City Cemetery, and we treat the two as a connected memorial market.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near La Verkin</h2>
            <p class="text-granite text-sm mb-6">The city cemetery plus Hurricane, Toquerville, and Virgin nearby.</p>
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
            <h2>LaVerkin City Cemetery — Rules Snapshot</h2>
            <p>LaVerkin City Cemetery is administered by the City of La Verkin. It follows standard Washington County installation patterns: sexton coordination in advance, concrete apron required, and section-specific rules for uprights vs. flush markers. Because La Verkin is a smaller municipality than Hurricane or St. George, we recommend calling ahead to confirm current plot availability, especially in the older pioneer sections.</p>
            <p>Because the town sits at slightly higher elevation than St. George, brief overnight freeze events do occur in December and January. This does not affect our installation window meaningfully — we install year-round — but it does affect the concrete-pour scheduling for foundations, which we plan around forecasted temperatures.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Memorial Culture Along the Hurricane Bench</h2>
            <p>La Verkin, Hurricane, and Virgin together form a corridor of agricultural pioneer communities with a shared memorial aesthetic — practical, understated, often referencing the fruit-orchard heritage in a simple engraved motif. Peach blossoms and orchard silhouettes occasionally appear on La Verkin headstones. The Hurricane Cliffs to the south are sometimes rendered as a background horizon on larger uprights.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in La Verkin</h2>
            <p class="text-granite text-sm mb-6">Practical uprights, flat markers, and heritage-appropriate custom designs.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to La Verkin</h2>
            <p>La Verkin is about 30 minutes east of our St. George shop via I-15 and SR-9. Because it is adjacent to Hurricane, we often schedule La Verkin and Hurricane installations on the same day to consolidate the trip. That is a small cost-efficiency we can pass along — ask about it when quoting.</p>
            <p>Lead time is typical: 10–18 weeks from first consultation to set stone. Year-round install window applies.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — La Verkin</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a La Verkin Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and cemetery verification before design begins.</p>
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
  { name: 'LaVerkin City Cemetery', note: 'City-administered, agricultural pioneer', href: '/cemeteries/laverkin-city-cemetery' },
  { name: 'Hurricane City Cemetery', note: '5 min south, affordable municipal', href: '/cemeteries/hurricane-city-cemetery' },
  { name: 'Toquerville Cemetery', note: '10 min north, pioneer', href: '/cemeteries/toquerville-cemetery' },
  { name: 'Virgin City Cemetery', note: '15 min east, pioneer', href: '/cemeteries/virgin-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Slant Markers', price: 'From $700', href: '/headstones/slant-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Can I be buried in La Verkin if I do not live there?',
    a: 'Yes, but non-resident plot fees are typically higher than resident fees. Contact La Verkin City for current rates.',
  },
  {
    q: 'Do you handle both LaVerkin City Cemetery and Hurricane City Cemetery?',
    a: 'Yes. We often schedule installations at both on the same day to consolidate the trip and reduce freight cost — ask about combined-installation pricing.',
  },
  {
    q: 'How much does a headstone cost in La Verkin?',
    a: 'Comparable to the rest of Washington County. Basic flat markers start at $500. Standard uprights run $1,200–$3,500 depending on granite color and engraving. See our pricing page for detail.',
  },
  {
    q: 'How long does installation take from first consultation?',
    a: 'Typical 10–18 weeks. Design proof within 5 business days. Manufacturing and freight are the longest step.',
  },
];

const related = [
  { label: 'Hurricane Service Area', href: '/service-areas/hurricane' },
  { label: 'Toquerville Service Area', href: '/service-areas/toquerville' },
  { label: 'Hurricane City Cemetery Guide', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Buying Guide — Southern Utah', href: '/resources/buying-guide' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
