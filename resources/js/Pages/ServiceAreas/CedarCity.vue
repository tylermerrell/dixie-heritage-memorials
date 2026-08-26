<template>
  <AppLayout>
    <Head>
      <title>Cedar City Utah Headstones — Iron Mission Country & the Veterans Corridor | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Cedar City, Utah families — home to Cedar City Cemetery, the historic Pioneer Cemetery, the Cedar City Utah Temple, and the Southern Utah National Cemetery (opened September 2025). Iron Mission heritage and full veteran-benefit coordination." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/cedar-city" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Iron County · Service Area · 50 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Cedar City Headstones — Iron Mission Country and the New Veterans Corridor</h1>
        <p class="text-white/70 text-lg max-w-3xl">Cedar City was founded in 1851 by the Iron Mission — pioneers sent to smelt iron from the Iron Mountain ore. Today it's a college town (SUU), home to the Utah Shakespeare Festival, and — as of September 2025 — the site of the Southern Utah National Cemetery. That combination makes Cedar City one of the most significant memorial markets outside St. George itself.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Iron</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">1851 (Iron Mission)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~50 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Southern Utah National Cemetery (2025)</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Three Cemeteries, One Temple, and a New National Cemetery</h2>
            <p>Cedar City has one of the richest memorial landscapes in Southern Utah. It has the Cedar City Cemetery (the main municipal cemetery), the historic Cedar City Pioneer Cemetery (containing the earliest Iron Mission burials), the Cedar City Utah Temple (dedicated 2017 — a design consideration for the LDS families here), and the recently dedicated <a href="/cemeteries/southern-utah-national-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Southern Utah National Cemetery</a> — the first VA-operated national cemetery in Southern Utah, opened September 2025.</p>
            <p>For veteran families, that last one changes everything. Before September 2025, the closest national cemetery for Cedar City families was Fort Douglas in Salt Lake City — a four-hour drive. Now graveside services and Memorial Day visits are local. We help families work through the choice between a free VA marker at the national cemetery versus a private custom headstone at Cedar City Cemetery with a VA medallion.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Cedar City</h2>
            <p class="text-granite text-sm mb-6">Municipal, pioneer, and national cemeteries within a 15-minute drive of downtown.</p>
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
            <h2>Cedar City Cemetery — Rules Snapshot</h2>
            <p>Cedar City Cemetery is administered by Cedar City Corporation. Because Cedar City sits at 5,800 feet, freeze-thaw cycles are real — we engineer deeper foundations for uprights and schedule concrete pours around forecasted freeze windows. Otherwise the cemetery follows standard patterns: sexton advance notice, concrete apron under monuments, section-specific upright vs. flush rules. Full details on our <Link href="/cemeteries/cedar-city-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Cedar City Cemetery guide</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Southern Utah National Cemetery — the Veteran Path</h2>
            <p>The Southern Utah National Cemetery at 2181 W. 1600 S. in Cedar City opened its interment operations in September 2025. For eligible veterans, the VA provides a free flat marker (granite, marble, or bronze) or a free upright monument (granite or marble) at no cost to the family. This is a real benefit — a $900–$3,500 monument for free.</p>
            <p>The alternative for veterans who want a fully custom design is a private headstone at Cedar City Cemetery with a VA-issued bronze medallion affixed. That's the path when the family wants a temple silhouette, a photorealistic portrait, or a companion monument that a national-cemetery template cannot accommodate. We handle both paths and help families work through the tradeoff — full detail on our <Link href="/cemeteries/southern-utah-national-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Southern Utah National Cemetery guide page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Cedar City</h2>
            <p class="text-granite text-sm mb-6">Iron Mission heritage designs, veteran markers, and Cedar City Temple engravings dominate our production mix here.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Cedar City</h2>
            <p>Cedar City is 50 minutes north of our St. George shop via I-15. Freight is slightly higher because of the distance, and foundations are deeper because of the elevation freeze-thaw. Our setting crew often makes a same-day round trip for Cedar City installations. Lead time is 10–20 weeks from proof approval, with foundation-pour scheduling being the main variable.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Cedar City</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Cedar City Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Veteran benefits coordination — we help you weigh the VA marker vs. private headstone tradeoff at no cost.</p>
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
  { name: 'Cedar City Cemetery', note: 'Main municipal cemetery', href: '/cemeteries/cedar-city-cemetery' },
  { name: 'Southern Utah National Cemetery', note: 'VA-operated, opened September 2025', href: '/cemeteries/southern-utah-national-cemetery' },
  { name: 'Enoch City Cemetery', note: '10 min north, Fort Johnson 1851 heritage', href: '/cemeteries/enoch-city-cemetery' },
  { name: 'Parowan City Cemetery', note: '20 min north, mother town of Southern Utah', href: '/cemeteries/parowan-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
];

const faqs = [
  {
    q: 'Is the Southern Utah National Cemetery a free option for veterans?',
    a: 'Yes. For eligible veterans, the VA provides burial and a free government marker (flat or upright, granite or bronze) at no cost to the family. Only Cedar City is close enough for Southern Utah families to reasonably use as their primary memorial site.',
  },
  {
    q: 'Can I have a private custom headstone AND VA recognition?',
    a: 'Yes. Veterans who died on or after November 1, 1990 can have a bronze VA medallion affixed to a privately purchased headstone in a private or municipal cemetery. This is the path when families want a fully custom design — a Cedar City Temple silhouette, a portrait engraving, or a companion monument.',
  },
  {
    q: 'How does Cedar City\'s elevation affect installation?',
    a: 'At 5,800 feet, Cedar City experiences real freeze-thaw cycles. We engineer deeper foundations and schedule concrete pours to avoid subfreezing forecasts, typically avoiding late December through mid-February. Setting existing monuments on cured foundations can happen year-round.',
  },
  {
    q: 'Can you engrave the Cedar City Utah Temple on a headstone?',
    a: 'Yes. The Cedar City Utah Temple (dedicated 2017) is a design option we produce regularly for Iron County families. Its clean contemporary silhouette pairs particularly well with jet black granite and laser etching.',
  },
];

const related = [
  { label: 'Cedar City Cemetery Guide', href: '/cemeteries/cedar-city-cemetery' },
  { label: 'Southern Utah National Cemetery Guide', href: '/cemeteries/southern-utah-national-cemetery' },
  { label: 'Enoch Service Area', href: '/service-areas/enoch' },
  { label: 'Parowan Service Area', href: '/service-areas/parowan' },
  { label: 'Bronze / VA Markers', href: '/headstones/bronze-memorials' },
  { label: 'All Iron County Cemeteries', href: '/cemeteries' },
];
</script>
