<template>
  <AppLayout>
    <Head>
      <title>Southern Utah Cities We Serve — Headstones Across 5 Counties | St. George Memorials</title>
      <meta name="description" content="Custom headstone and monument service across Washington, Iron, Kane, Beaver, and Garfield counties. City-specific guides for St. George, Hurricane, Ivins, Santa Clara, Cedar City, Kanab, and every community in between." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Service Areas</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Cities We Serve Across Southern Utah</h1>
        <p class="text-white/70 text-lg max-w-3xl">St. George is home base. From there we serve 20+ communities across Washington, Iron, Kane, Beaver, and Garfield counties — the entire five-county Southern Utah footprint, from the Arizona Strip to the Bryce Canyon plateau.</p>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">

        <div v-for="county in counties" :key="county.name">
          <div class="mb-6">
            <h2 class="font-serif text-2xl font-semibold text-evergreen">{{ county.name }}</h2>
            <p class="text-granite text-sm mt-1">{{ county.description }}</p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <Link
              v-for="city in county.cities"
              :key="city.href"
              :href="city.href"
              class="group bg-white rounded-2xl border border-stone-dark hover:border-evergreen hover:shadow-md transition-all p-6 flex flex-col"
            >
              <div class="flex items-start justify-between gap-2 mb-2">
                <h3 class="font-serif text-lg font-semibold text-evergreen group-hover:text-evergreen-light transition-colors">{{ city.name }}</h3>
                <span v-if="city.drive" class="text-xs text-granite whitespace-nowrap">{{ city.drive }}</span>
              </div>
              <p class="text-granite text-sm leading-relaxed mb-3">{{ city.desc }}</p>
              <span class="text-bronze text-sm font-medium flex items-center gap-1 mt-auto">
                City guide
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              </span>
            </Link>
          </div>
        </div>

      </div>
    </section>

    <section class="py-14 bg-white border-t border-stone-dark">
      <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="font-serif text-2xl font-semibold text-evergreen mb-3">Snowbird? Out of State?</h2>
        <p class="text-granite mb-6">Many of our Washington County families split the year between St. George and home states. We handle the entire design and coordination remotely — no cemetery visits required. Digital design layout, sexton called on your behalf, monument freighted directly to the plot.</p>
        <button @click="openModal" class="bg-evergreen hover:bg-evergreen-light text-white font-semibold px-8 py-3 rounded-lg transition-colors">
          Request a Quote
        </button>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();

const counties = [
  {
    name: 'Washington County',
    description: 'St. George metro area, Hurricane Valley, and the Cotton Mission pioneer communities. Two LDS temples in the county — St. George Utah Temple (1877) and Red Cliffs Utah Temple (2024).',
    cities: [
      { name: 'St. George', href: '/service-areas/st-george', drive: 'Home base', desc: 'Fastest-growing US metro. Two cemeteries downtown and at Tonaquint. Two operating LDS temples. The core of Washington County memorial work.' },
      { name: 'Washington City', href: '/service-areas/washington-city', drive: '10 min', desc: 'One of the county\'s oldest continuously used cemeteries — burials predating the 1861 Cotton Mission. 36-inch height max in newer sections.' },
      { name: 'Hurricane', href: '/service-areas/hurricane', drive: '20 min', desc: 'Hurricane Valley agricultural pioneer heritage. Hurricane City Cemetery: $550 resident plots, 42-inch upright max, city-preferred rock-pitch base.' },
      { name: 'Santa Clara', href: '/service-areas/santa-clara', drive: '10 min', desc: 'Swiss pioneer settlement, Jacob Hamblin Home heritage. First-grade granite only at Santa Clara City Cemetery — no marble.' },
      { name: 'Ivins', href: '/service-areas/ivins', drive: '15 min', desc: 'Retirement destination framed by Red Mountain. Shivwits Cemetery nearby. HOA-regulated communities (Sun River, Kayenta) have distinct memorial constraints.' },
      { name: 'La Verkin', href: '/service-areas/la-verkin', drive: '25 min', desc: 'Gateway to Zion National Park. Agricultural heritage. We pull all permits and verify plot dimensions before any stone is cut.' },
      { name: 'Toquerville', href: '/service-areas/toquerville', drive: '30 min', desc: 'Historic pioneer winery town. 3-foot upright max with mandatory 6-inch concrete border at Toquerville Cemetery.' },
      { name: 'Enterprise', href: '/service-areas/enterprise', drive: '50 min', desc: 'High-desert farming plateau (Enterprise, Gunlock, Central). Granite Marker Only sections. Winter installations require freeze-adjusted foundations.' },
    ],
  },
  {
    name: 'Iron County',
    description: 'Cedar City (SUU college town, home to the Southern Utah National Cemetery as of Sep 2025), Parowan ("mother town of southern Utah," 1851 Iron Mission), and surrounding communities.',
    cities: [
      { name: 'Cedar City', href: '/service-areas/cedar-city', drive: '45 min', desc: 'Iron County seat. Southern Utah National Cemetery for veterans. Cedar City Utah Temple. Higher-elevation freeze-thaw cycles require deeper foundation pours.' },
      { name: 'Enoch', href: '/service-areas/enoch', drive: '55 min', desc: 'Growing Midvalley suburb of Cedar City. Municipal cemetery with pioneer roots dating to Fort Johnson (1851).' },
      { name: 'Parowan', href: '/service-areas/parowan', drive: '1 hr 5 min', desc: '"Mother town of southern Utah" — settled 1851 for the Iron Mission. Strict flush-marker policy; 6-inch thickness requirement.' },
      { name: 'Paragonah', href: '/service-areas/paragonah', drive: '1 hr 10 min', desc: 'Small pioneer community north of Parowan. We coordinate rural transport and town-board approvals.' },
    ],
  },
  {
    name: 'Kane County',
    description: 'Kanab ("Little Hollywood" — movie-town heritage), Long Valley canyon communities, and the Arizona Strip corridor including Fredonia, AZ.',
    cities: [
      { name: 'Kanab', href: '/service-areas/kanab', drive: '1 hr 15 min', desc: 'Kane County seat. Movie-town heritage. Jacob Hamblin monument nearby. Kanab City Cemetery: 40-inch single / 80-inch double maxima, east-oriented inscriptions.' },
      { name: 'Fredonia, AZ', href: '/service-areas/fredonia', drive: '1 hr 20 min', desc: 'Arizona Strip community just south of Kanab. Cross-border memorial service — we navigate Fredonia\'s grave-bordering and delivery rules.' },
      { name: 'Orderville', href: '/service-areas/orderville', drive: '1 hr 30 min', desc: 'Long Valley canyon: Orderville, Glendale, Alton, Mount Carmel. Historic United Order community. Rural transport coordinated.' },
    ],
  },
  {
    name: 'Beaver County',
    description: 'Beaver City (Butch Cassidy\'s birthplace, pioneer and agricultural heritage), Milford (railroad hub), Minersville (mining heritage). High-desert elevation with freeze-thaw considerations.',
    cities: [
      { name: 'Beaver', href: '/service-areas/beaver', drive: '1 hr 40 min', desc: 'Beaver City — Butch Cassidy\'s birthplace. Township-approved concrete foundations required. Mountain View Cemetery has 90-day settlement policy.' },
      { name: 'Milford', href: '/service-areas/milford', drive: '2 hr', desc: 'Railroad and ranching hub of western Beaver County. High-contrast granites specified for extreme desert conditions.' },
      { name: 'Minersville', href: '/service-areas/minersville', drive: '1 hr 55 min', desc: 'Farming and mining heritage. Serves Minersville, Greenville, and Adamsville. Strict marker-vs.-monument height classification.' },
    ],
  },
  {
    name: 'Garfield County',
    description: 'Panguitch (high plateau county seat, Bryce Canyon gateway), Bryce Valley towns, and the remote plateau communities of the Grand Staircase-Escalante region.',
    cities: [
      { name: 'Panguitch', href: '/service-areas/panguitch', drive: '1 hr 45 min', desc: 'Garfield County seat at 6,700 feet elevation. Ordinance requests monument placement within 90 days of interment; we expedite.' },
      { name: 'Tropic', href: '/service-areas/tropic', drive: '2 hr 15 min', desc: 'Bryce Valley: Tropic, Cannonville, Henrieville. 5-inch cement border required. May 20th spring installation preference for Memorial Day.' },
    ],
  },
];
</script>
