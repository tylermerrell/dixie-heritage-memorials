<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Milford, Utah — Union Pacific Junction Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Milford, Utah families — a Beaver County railroad town founded on the Union Pacific line, and now a small ranching and geothermal-energy community. Delivery from our St. George shop, deep-foundation engineering, and heritage-appropriate design." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/milford" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Beaver County · Service Area · 115 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Milford — Union Pacific Junction Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Milford was founded as a railroad junction on the Union Pacific line — a supply and switching point for the mines and ranches of Beaver County. Its heritage today is a mix of the railroad, ranching, and (more recently) geothermal energy production. The Milford Cemetery reflects those layered identities across its stones.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Beaver</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Heritage</p>
            <p class="text-sm text-white mt-1">Union Pacific railroad</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~115 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~5,000 ft</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Railroad Junction in the Beaver County High Desert</h2>
            <p>Milford was established in the 1880s as a Union Pacific Railroad terminus, serving as the connecting point between the transcontinental line and the mines of the Frisco / Newhouse area. The town's identity as a railroad and supply hub shaped its population — a mix of railroad workers, ranchers supplying beef to the mining camps, and later, the families who stayed after the boom.</p>
            <p>Milford Cemetery reflects that layered history: pioneer ranching family names, railroad-era stones with the occasional locomotive or rail motif, and modern additions serving the town's current geothermal-energy and ranching population. Design conversations here often center on that mixed heritage.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Milford</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus Beaver County outlying options.</p>
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
            <h2>Milford Cemetery — Rules Snapshot</h2>
            <p>Milford Cemetery is administered by the City of Milford. Standard installation patterns apply: sexton advance notice, concrete apron under monuments, section-specific rules. Elevation is around 5,000 feet — milder than Beaver but real freeze-thaw territory nonetheless. We engineer foundations to the elevation and schedule concrete pours around forecasted weather.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Railroad and Ranching Motifs</h2>
            <p>Milford families sometimes incorporate railroad heritage into headstones — a small locomotive, a rail signal, or a Union Pacific reference for families with generations in the rail trade. Ranching motifs (cattle brand, mountain silhouette) are also common. Both are custom engraving; both are priced per design.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Milford</h2>
            <p class="text-granite text-sm mb-6">Practical uprights and heritage-motif custom designs.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Milford</h2>
            <p>Milford is 115 minutes north of our St. George shop via I-15 and SR-21. Freight is higher because of the distance. We consolidate Milford with Beaver and Minersville installations whenever possible to reduce cost. Lead time is 12–22 weeks with foundation-pour scheduling around freeze forecasts.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Milford</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Milford Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Railroad-heritage and ranching-motif custom designs available.</p>
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
  { name: 'Milford Cemetery', note: 'City-administered, railroad heritage', href: '/cemeteries/milford-cemetery' },
  { name: 'Minersville Cemetery', note: '15 min south, silver / lead mining', href: '/cemeteries/minersville-cemetery' },
  { name: 'Mountain View Cemetery (Beaver)', note: '20 min east, main county cemetery', href: '/cemeteries/mountain-view-cemetery' },
  { name: 'Adamsville Cemetery', note: '25 min east, small pioneer', href: '/cemeteries/adamsville-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
];

const faqs = [
  {
    q: 'Can you engrave a locomotive or railroad motif on a Milford headstone?',
    a: 'Yes. We\'ve designed stones with locomotive silhouettes, rail signal motifs, and Union Pacific references for families with generations in the rail trade. Custom engraving priced per design.',
  },
  {
    q: 'How much does freight to Milford add to the installation cost?',
    a: 'Typically $200–$400 above a St. George base, depending on monument size and whether we consolidate with other Beaver County installations on the same trip.',
  },
  {
    q: 'Does Milford have a settling rule like Beaver?',
    a: 'Verify with the city — settling rules vary. We call the cemetery office as part of every design to confirm current requirements.',
  },
  {
    q: 'Can I install at Milford in winter?',
    a: 'Setting an existing monument on a cured foundation, yes. Pouring a new foundation, we schedule around forecasted subfreezing weeks. Elevation is ~5,000 feet, so the winter constraints are real but not as strict as Cedar City or Parowan.',
  },
];

const related = [
  { label: 'Milford Cemetery Guide', href: '/cemeteries/milford-cemetery' },
  { label: 'Beaver Service Area', href: '/service-areas/beaver' },
  { label: 'Minersville Service Area', href: '/service-areas/minersville' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Bronze / VA Markers', href: '/headstones/bronze-memorials' },
  { label: 'All Beaver County Cemeteries', href: '/cemeteries' },
];
</script>
