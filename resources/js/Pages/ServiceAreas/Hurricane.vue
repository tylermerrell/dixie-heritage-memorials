<template>
  <AppLayout>
    <Head>
      <title>Hurricane, Utah Headstones — Hurricane City Cemetery Specialists | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Hurricane, Utah families — with plot fees still under $600 for residents, Hurricane City Cemetery remains one of the most accessible burial grounds in Washington County. Sexton coordination, 42-inch height rules, and delivery from our St. George base." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/hurricane" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 20 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones for Hurricane City Cemetery Families</h1>
        <p class="text-white/70 text-lg max-w-3xl">Hurricane sits at the mouth of the Virgin River Gorge — an agricultural pioneer town that grew fruit for the Cotton Mission and is now a fast-growing bedroom community for families priced out of St. George. Hurricane City Cemetery is one of the most affordable municipal cemeteries in the county, and its 42-inch upright height rule shapes every design we build for the community.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Resident Plot</p>
            <p class="text-sm text-white mt-1">~$550</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Upright Height Max</p>
            <p class="text-sm text-white mt-1">42 inches</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~25 minutes</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Hurricane — Agricultural Pioneer Country</h2>
            <p>Hurricane was settled in the 1890s after decades of engineering effort to bring water from the Virgin River up to the flat, arable Hurricane Bench. Peach orchards, alfalfa, and cotton followed. The town's cemetery holds four generations of the families who worked those fields, and the surnames on the older stones repeat across the newer sections in ways that tell the story of continuity uncommon in the fast-growing rest of the county.</p>
            <p>Today Hurricane is one of Washington County's fastest-growing bedroom communities — families who work in St. George but chose Hurricane for its lower cost of living. That mix means we design headstones here for both families with deep pioneer roots and newer arrivals looking for their first permanent memorial in Southern Utah. The city cemetery welcomes both.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Hurricane</h2>
            <p class="text-granite text-sm mb-6">Hurricane is anchored by its city cemetery, with several nearby options across the Hurricane Valley.</p>
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
            <h2>Hurricane City Cemetery — Rules & Fees Snapshot</h2>
            <p>Hurricane City Cemetery is administered by the City of Hurricane and remains one of the most affordable municipal cemeteries in Washington County. Traditional burial plots are available at approximately <strong>$550 for residents</strong> and <strong>$2,000 for non-residents</strong>, with perpetual care included in the plot fee. Upright monuments are permitted but capped at a maximum height of 42 inches from grade including the base — a specific rule that shapes every upright design we submit for a Hurricane installation. Setting requires minimum 24-hour advance notice to the Cemetery Clerk.</p>
            <p>Headstones are treated as personal property under city ordinance. Full rules and current fees are on our <Link href="/cemeteries/hurricane-city-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Hurricane City Cemetery guide page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Memorial Culture at the Mouth of the Virgin River</h2>
            <p>Hurricane's memorial culture reflects the town's agricultural roots. Compared to the more suburban St. George market, Hurricane families more often choose straightforward upright designs, single-plot markers over ornate companion monuments, and understated engraving over photographic laser etching. The town's Peach Days heritage (celebrated every Labor Day weekend since 1901) sometimes appears as a design motif — a small orchard silhouette, a peach blossom, or the Hurricane Bench horizon.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Hurricane</h2>
            <p class="text-granite text-sm mb-6">Hurricane families most often commission mid-range upright and flat markers.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Hurricane</h2>
            <p>Hurricane is about 25 minutes east of our St. George shop via SR-9. We install year-round — Hurricane's elevation is essentially the same as St. George, so the freeze-free installation window that governs our home city applies here as well. Typical timeline is 10–18 weeks from first consultation to set stone.</p>
            <p>The one Hurricane-specific factor: the 42-inch upright height limit is enforced strictly, and it's tighter than most cemeteries in the county. We size every upright design in a proof at exact scale so families see what will actually fit before we cut.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Hurricane</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Hurricane Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation, sexton verification of the 42-inch rule, and a digital proof before any payment is due.</p>
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
  { name: 'Hurricane City Cemetery', note: '$550 resident / $2,000 non-resident, 42" upright max', href: '/cemeteries/hurricane-city-cemetery' },
  { name: 'La Verkin City Cemetery', note: '5 min north, agricultural pioneer', href: '/cemeteries/laverkin-city-cemetery' },
  { name: 'Toquerville Cemetery', note: '10 min north on SR-17', href: '/cemeteries/toquerville-cemetery' },
  { name: 'Washington City Cemetery', note: '15 min west, historic', href: '/cemeteries/washington-city-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments (≤42")', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Slant Markers', price: 'From $700', href: '/headstones/slant-markers' },
  { name: 'Bevel Markers', price: 'From $650', href: '/headstones/bevel-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
];

const faqs = [
  {
    q: 'What is the 42-inch height rule at Hurricane City Cemetery?',
    a: 'Upright monuments at Hurricane City Cemetery cannot exceed 42 inches from grade including the base. The rule protects sight lines across the cemetery and is enforced strictly at installation. We size every upright design against this limit in the proof stage.',
  },
  {
    q: 'What does a plot at Hurricane City Cemetery cost?',
    a: 'Approximately $550 for Hurricane residents and $2,000 for non-residents at last verification, with perpetual care included. Contact the City of Hurricane at (435) 635-2811 for current rates.',
  },
  {
    q: 'Do I have to be a Hurricane resident to be buried here?',
    a: 'No, but non-resident plot fees are significantly higher. Many families with long ties to Hurricane maintain plots in the cemetery even after moving away.',
  },
  {
    q: 'Can I install a headstone in the winter?',
    a: 'Yes. Hurricane\'s elevation is close to St. George\'s, so we install year-round. There is no seasonal shutdown as there is in Northern Utah cemeteries.',
  },
];

const related = [
  { label: 'Hurricane City Cemetery Guide', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'La Verkin Service Area', href: '/service-areas/la-verkin' },
  { label: 'Toquerville Service Area', href: '/service-areas/toquerville' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
