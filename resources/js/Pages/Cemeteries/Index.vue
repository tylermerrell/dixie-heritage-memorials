<template>
  <AppLayout>
    <Head>
      <title>Southern Utah Cemetery Guide — 30+ Cemeteries Across 5 Counties | St. George Memorials</title>
      <meta name="description" content="Searchable cemetery guides for Washington, Iron, Kane, Beaver, and Garfield counties — rules, fees, sections, and monument regulations. Includes Tonaquint, St. George City, Hurricane, Ivins, and Southern Utah National Cemetery." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Cemetery Directory</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Southern Utah Cemetery Guides</h1>
        <p class="text-white/70 text-lg max-w-3xl mb-3">Rules, fees, section-by-section requirements, and monument regulations for 30+ cemeteries across Washington, Iron, Kane, Beaver, and Garfield counties. Cities publish these as PDFs. We turned them into searchable pages.</p>
        <p class="text-white/60 text-sm max-w-3xl">The single biggest mistake families make is ordering a headstone that the sexton then rejects — because a flush-only section requires a flush marker, or an upright exceeds the section height limit, or the required concrete apron was left out of the quote. Start here. Read the guide for your cemetery. Then contact us so we can call the sexton and verify anything that's changed.</p>
      </div>
    </section>

    <!-- Priority callout: Southern Utah National Cemetery -->
    <section class="py-10 bg-white border-b border-stone-dark">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-evergreen rounded-2xl p-8 md:p-10 text-white flex flex-col lg:flex-row gap-6 lg:items-center lg:justify-between">
          <div class="max-w-2xl">
            <p class="text-sage-light text-xs font-semibold uppercase tracking-widest mb-2">Veterans · Iron County</p>
            <h2 class="font-serif text-2xl md:text-3xl font-semibold mb-2">Southern Utah National Cemetery</h2>
            <p class="text-white/70 text-sm md:text-base">Dedicated 10 September 2025 in Cedar City. The first VA national cemetery in Southern Utah. Free burial and government marker for eligible veterans — no cost to the family. 45 minutes north of St. George.</p>
          </div>
          <Link href="/cemeteries/southern-utah-national-cemetery" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-6 py-3 rounded-lg transition-colors text-sm whitespace-nowrap self-start lg:self-auto">
            Read the SUNC Family Guide
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </Link>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div v-for="group in groups" :key="group.county" class="mb-14">
          <div class="mb-5">
            <h2 class="font-serif text-2xl font-semibold text-evergreen">{{ group.county }}</h2>
            <p class="text-sm text-granite mt-1">{{ group.sub }}</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <template v-for="cem in group.cemeteries" :key="cem.name">
              <Link
                v-if="cem.href"
                :href="cem.href"
                class="group bg-white rounded-2xl border border-stone-dark hover:border-evergreen hover:shadow-md transition-all p-4 flex flex-col"
              >
                <div class="flex items-start justify-between gap-2 mb-1">
                  <h3 class="font-semibold text-evergreen text-sm group-hover:text-evergreen-light leading-snug">{{ cem.name }}</h3>
                  <span class="flex-shrink-0 w-5 h-5 rounded-full bg-evergreen/10 flex items-center justify-center mt-0.5">
                    <svg class="w-3 h-3 text-evergreen" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                  </span>
                </div>
                <p class="text-xs text-granite mb-2">{{ cem.location }}</p>
                <p v-if="cem.note" class="text-xs text-bronze">{{ cem.note }}</p>
                <div class="mt-auto pt-2 text-xs text-evergreen font-medium">View cemetery guide</div>
              </Link>

              <div v-else class="bg-white rounded-2xl border border-stone-dark p-4 flex flex-col">
                <h3 class="font-semibold text-granite text-sm leading-snug mb-1">{{ cem.name }}</h3>
                <p class="text-xs text-granite mb-2 flex-1">{{ cem.location }}</p>
                <p v-if="cem.note" class="text-xs text-bronze mb-2">{{ cem.note }}</p>
                <Link href="/contact" class="mt-auto text-xs text-bronze hover:text-bronze-dark font-medium transition-colors">
                  Request a free proof →
                </Link>
              </div>
            </template>
          </div>
        </div>

        <!-- Historical / ghost town -->
        <div class="mb-14">
          <div class="mb-5">
            <h2 class="font-serif text-2xl font-semibold text-evergreen">Historical & Ghost Town Cemeteries</h2>
            <p class="text-sm text-granite mt-1">Preserved pioneer burial grounds and mining-era cemeteries. We restore pioneer sandstone markers where families want the work.</p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <div v-for="cem in historical" :key="cem.name" class="bg-white rounded-2xl border border-stone-dark p-4 flex flex-col">
              <h3 class="font-semibold text-granite text-sm leading-snug mb-1">{{ cem.name }}</h3>
              <p class="text-xs text-granite mb-2 flex-1">{{ cem.location }}</p>
              <p v-if="cem.note" class="text-xs text-bronze mb-2">{{ cem.note }}</p>
              <Link href="/contact" class="mt-auto text-xs text-bronze hover:text-bronze-dark font-medium transition-colors">
                Ask about restoration work →
              </Link>
            </div>
          </div>
        </div>

        <div class="bg-evergreen text-white rounded-2xl p-8 text-center mt-4">
          <h2 class="font-serif text-2xl font-semibold mb-3">Don't See Your Cemetery?</h2>
          <p class="text-white/70 mb-6 max-w-xl mx-auto">We serve every cemetery in Washington, Iron, Kane, Beaver, and Garfield counties. If yours isn't listed with a dedicated guide, contact us — we'll call the sexton, get the current rules, and design your monument to spec.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">
            Contact a Specialist
          </Link>
        </div>

      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const groups = [
  {
    county: 'Washington County',
    sub: 'St. George metro, Hurricane Valley, Santa Clara Bench, Ivins, and Southern Utah\'s Cotton Mission communities.',
    cemeteries: [
      { name: 'Tonaquint Cemetery', location: 'South St. George', href: '/cemeteries/tonaquint-cemetery', note: 'Largest active cemetery. Fence rule change Jan 16, 2026.' },
      { name: 'St. George City Cemetery', location: 'Downtown St. George', href: '/cemeteries/st-george-city-cemetery', note: 'Historic pioneer sections' },
      { name: 'Washington City Cemetery', location: 'Washington City', href: '/cemeteries/washington-city-cemetery', note: '36" max height; mow strip required' },
      { name: 'Hurricane City Cemetery', location: 'Hurricane', href: '/cemeteries/hurricane-city-cemetery', note: '42" max height; $550 resident plot' },
      { name: 'Santa Clara City Cemetery', location: 'Santa Clara', href: '/cemeteries/santa-clara-cemetery', note: 'First-grade granite only' },
      { name: 'Ivins City Cemetery', location: 'Ivins', href: '/cemeteries/ivins-city-cemetery', note: '4-6" concrete apron; 48-hr advance notice' },
      { name: 'Toquerville Cemetery', location: 'Toquerville', href: '/cemeteries/toquerville-cemetery', note: '6" border; 3ft max height' },
      { name: 'Enterprise Cemetery', location: 'Enterprise', href: '/cemeteries/enterprise-cemetery' },
      { name: 'Leeds Cemetery', location: 'Leeds', href: '/cemeteries/leeds-cemetery', note: 'Silver Reef pioneer heritage' },
      { name: 'Gunlock Cemetery', location: 'Gunlock', href: '/cemeteries/gunlock-cemetery' },
      { name: 'New Harmony Cemetery', location: 'New Harmony', href: '/cemeteries/new-harmony-cemetery' },
      { name: 'Central Cemetery', location: 'Central', href: '/cemeteries/central-cemetery' },
    ],
  },
  {
    county: 'Iron County',
    sub: 'Cedar City, Parowan (the "mother town of southern Utah"), and the Iron Mission communities.',
    cemeteries: [
      { name: 'Southern Utah National Cemetery', location: 'Cedar City', href: '/cemeteries/southern-utah-national-cemetery', note: 'VA · Dedicated Sep 2025' },
      { name: 'Cedar City Cemetery', location: 'Cedar City', href: '/cemeteries/cedar-city-cemetery', note: 'Strict decoration policies' },
      { name: 'Parowan City Cemetery', location: 'Parowan', href: '/cemeteries/parowan-city-cemetery', note: 'Flush markers only — no uprights' },
      { name: 'Enoch City Cemetery', location: 'Enoch', href: '/cemeteries/enoch-city-cemetery' },
      { name: 'Paragonah Cemetery', location: 'Paragonah', href: '/cemeteries/paragonah-cemetery' },
      { name: 'Kanarraville Cemetery', location: 'Kanarraville', href: '/cemeteries/kanarraville-cemetery' },
      { name: 'Summit Cemetery', location: 'Summit', href: '/cemeteries/summit-cemetery' },
    ],
  },
  {
    county: 'Kane County',
    sub: 'Kanab ("Little Hollywood"), Orderville, and the Long Valley canyon communities. Includes cross-border service into Fredonia, Arizona.',
    cemeteries: [
      { name: 'Kanab City Cemetery', location: 'Kanab', href: '/cemeteries/kanab-city-cemetery', note: '40" single / 80" double max' },
      { name: 'Fredonia Cemetery', location: 'Fredonia, AZ', href: '/cemeteries/fredonia-cemetery', note: 'Arizona Strip community' },
      { name: 'Orderville Cemetery', location: 'Orderville', href: '/cemeteries/orderville-cemetery', note: 'United Order pioneer heritage' },
      { name: 'Glendale Cemetery', location: 'Glendale', href: '/cemeteries/glendale-cemetery' },
      { name: 'Alton Cemetery', location: 'Alton', href: '/cemeteries/alton-cemetery' },
      { name: 'Big Water Cemetery', location: 'Big Water', href: '/cemeteries/big-water-cemetery' },
    ],
  },
  {
    county: 'Beaver County',
    sub: 'Beaver City (Butch Cassidy\'s birthplace), Milford (railroad heritage), Minersville, and the western high desert.',
    cemeteries: [
      { name: 'Mountain View Cemetery', location: 'Beaver City', href: '/cemeteries/mountain-view-cemetery', note: '90-day settlement policy may apply' },
      { name: 'Milford Cemetery', location: 'Milford', href: '/cemeteries/milford-cemetery' },
      { name: 'Minersville Cemetery', location: 'Minersville', href: '/cemeteries/minersville-cemetery' },
      { name: 'Adamsville Cemetery', location: 'Adamsville', href: '/cemeteries/adamsville-cemetery' },
    ],
  },
  {
    county: 'Garfield County',
    sub: 'Panguitch (high plateau, Bryce Canyon gateway), Bryce Valley towns, and the remote plateau communities.',
    cemeteries: [
      { name: 'Panguitch City Cemetery', location: 'Panguitch', href: '/cemeteries/panguitch-city-cemetery' },
      { name: 'Hatch Town Cemetery', location: 'Hatch', href: '/cemeteries/hatch-town-cemetery' },
      { name: 'Tropic City Cemetery', location: 'Tropic', href: '/cemeteries/tropic-city-cemetery', note: 'May 20 placement for Memorial Day' },
      { name: 'Cannonville Cemetery', location: 'Cannonville', href: '/cemeteries/cannonville-cemetery' },
      { name: 'Escalante Cemetery', location: 'Escalante', href: '/cemeteries/escalante-cemetery' },
      { name: 'Boulder Cemetery', location: 'Boulder', href: '/cemeteries/boulder-cemetery' },
    ],
  },
];

const historical = [
  { name: 'Silver Reef Historic Cemeteries', location: 'Leeds area, Washington County', note: 'Catholic, Chinese, Protestant sections — silver-mining boom 1870s' },
  { name: 'Grafton Ghost Town Cemetery', location: 'Near Rockville, Washington County', note: 'Butch Cassidy filming location' },
  { name: 'Harrisburg Ghost Town', location: 'Between Leeds and Washington City', note: 'Pioneer settlement 1861' },
  { name: 'Hamblin Ghost Town', location: 'Mountain Meadows region', note: 'Pioneer-era, abandoned' },
  { name: 'Duncan\'s Retreat', location: 'Virgin River corridor', note: 'Small pioneer burial ground' },
  { name: 'Shunesburg', location: 'Zion National Park boundary', note: 'Pioneer burial ground, respectful visiting only' },
  { name: 'Mountain Meadows Cemetery', location: 'Washington County', note: 'National Historic Site — no commercial work' },
  { name: 'Shivwits Cemetery', location: 'Ivins area', note: 'Shivwits Band of Paiutes — sensitive, coordinated with community' },
];
</script>
