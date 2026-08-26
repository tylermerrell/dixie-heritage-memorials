<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Enterprise, Utah — High-Desert Farming Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Enterprise, Utah families — a high-desert farming town at nearly 5,300 feet, home to the Enterprise Reservoir and Enterprise City Cemetery. Deep-foundation installation for freeze-thaw soil and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/enterprise" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 45 minutes north</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones for Enterprise Families — High-Desert Farming Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Enterprise sits on the Escalante Desert plateau at nearly 5,300 feet — high enough that freeze-thaw cycles change the way monuments have to be built. It is a farming town with a reservoir-based irrigation heritage, and the memorial market here reflects that practical, work-ethic identity.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~5,300 ft</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~45 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Foundation Depth</p>
            <p class="text-sm text-white mt-1">Deeper for freeze-thaw</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Northwest Corner of Washington County</h2>
            <p>Enterprise was settled in the early 20th century as a farming community made possible by the construction of the Enterprise Reservoir, which impounded the Shoal Creek waters for irrigation of the surrounding desert. The town became a center of alfalfa, grain, and cattle production for the northwest quadrant of Washington County. That agricultural identity remains — Enterprise is the least suburbanized town in the county.</p>
            <p>The Enterprise cemetery reflects the town's stability: multi-generational family plots, mostly Cotton Mission and later homesteader surnames, and a memorial aesthetic that prizes durability and readability over ornamentation. We build headstones here with an eye to that identity.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Enterprise</h2>
            <p class="text-granite text-sm mb-6">The town cemetery plus New Harmony, Central, and Veyo cemeteries within a longer drive.</p>
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
            <h2>Enterprise City Cemetery — Rules Snapshot</h2>
            <p>Enterprise City Cemetery is administered by the City of Enterprise. Because the town is smaller, rules are coordinated with the town office rather than a dedicated sexton. Elevation matters here: at ~5,300 feet, Enterprise experiences a real winter with hard freezes and freeze-thaw cycles absent from St. George. That translates into deeper concrete foundations for upright monuments and a narrower installation window — we typically avoid pouring concrete during forecasted subfreezing weeks.</p>
            <p>Otherwise the cemetery follows standard Southern Utah patterns: advance sexton notice, apron under every monument, section-specific rules for upright vs. flush markers.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>High-Desert Foundation Engineering</h2>
            <p>Foundations in Enterprise must be deeper than St. George standard — the freeze-thaw cycles that shape northern Washington County's high-desert soil cause monuments with shallow foundations to shift over time. We engineer every Enterprise foundation for the elevation, using deeper set-depth and continuous rebar. That is a real cost difference (typically $100–$300 more per install than a St. George base) and we itemize it in the quote so families understand what they are paying for.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Enterprise</h2>
            <p class="text-granite text-sm mb-6">Practical, durable uprights dominate. Enterprise families skew toward straightforward, work-ethic memorials.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Enterprise</h2>
            <p>Enterprise is about 45 minutes northwest of our St. George shop via SR-18. Freight cost is slightly higher because of the distance and the deeper foundation work. Installation windows are narrower than St. George because we schedule around forecasted freezes for concrete pours — typically avoiding late December through mid-February for foundation work. Setting itself (placing the monument on an already-cured foundation) can happen year-round.</p>
            <p>Lead time is 10–20 weeks from proof approval to set stone, with the foundation-pour window being the main scheduling constraint.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Enterprise</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design an Enterprise Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Deep-foundation engineering included for the high-desert elevation.</p>
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
  { name: 'Enterprise City Cemetery', note: 'High-desert farming community', href: '/cemeteries/enterprise-cemetery' },
  { name: 'New Harmony Cemetery', note: '25 min east, small pioneer', href: '/cemeteries/new-harmony-cemetery' },
  { name: 'Central Cemetery', note: '30 min south, historic ranching', href: '/cemeteries/central-cemetery' },
  { name: 'Gunlock Cemetery', note: '35 min south, small pioneer', href: '/cemeteries/gunlock-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Restoration', price: 'Assessment free', href: '/headstones/restoration' },
];

const faqs = [
  {
    q: 'Why does an Enterprise installation cost more than St. George?',
    a: 'Two reasons: longer freight distance from our shop (45 min each way) and deeper foundations required by the high-desert freeze-thaw soil. Typical additional cost is $150–$400 depending on monument size.',
  },
  {
    q: 'Can I install a monument in Enterprise during winter?',
    a: 'Setting an existing monument on a cured foundation, yes. Pouring a new foundation, generally no — we schedule around forecasted subfreezing weeks. This affects total lead time.',
  },
  {
    q: 'Are there historic pioneer sections in Enterprise City Cemetery?',
    a: 'Yes, though smaller than the Cotton Mission cemeteries. We handle heritage-appropriate design for plots near the older sections at no additional cost.',
  },
  {
    q: 'How do I contact the Enterprise City office about cemetery matters?',
    a: 'Contact the Enterprise City office directly for current plot fees and section availability. We coordinate with them on every installation.',
  },
];

const related = [
  { label: 'Enterprise Cemetery Guide', href: '/cemeteries/enterprise-cemetery' },
  { label: 'New Harmony Cemetery Guide', href: '/cemeteries/new-harmony-cemetery' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Buying Guide — Southern Utah', href: '/resources/buying-guide' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
