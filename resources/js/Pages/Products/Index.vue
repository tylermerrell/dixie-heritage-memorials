<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones for Every Washington County Cemetery — Styles & Pricing | St. George Memorials</title>
      <meta name="description" content="Every headstone style built for Southern Utah — upright, flat, slant, bevel, companion, LDS temple engravings, bronze VA markers, pet memorials, restoration, and custom shapes. Approved at every Washington, Iron, Kane, Beaver, and Garfield County cemetery." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Complete Headstone Catalog · Southern Utah</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones for Every Washington County Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">
          Every style of headstone built for the specific rules, climate, and heritage of Southern Utah — including two motifs no other regional monument company offers as a first-class product: St. George Utah Temple engravings and Red Cliffs Utah Temple engravings. Approved at every municipal cemetery from Alton to Woodside.
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
          <div class="bg-white/5 rounded-full px-4 py-2 text-sm">Local manufacturing</div>
          <div class="bg-white/5 rounded-full px-4 py-2 text-sm">Cemetery-verified before design</div>
          <div class="bg-white/5 rounded-full px-4 py-2 text-sm">Free design proofs</div>
          <div class="bg-white/5 rounded-full px-4 py-2 text-sm">Year-round install (Southern Utah climate)</div>
          <div class="bg-white/5 rounded-full px-4 py-2 text-sm">Direct-from-shop pricing</div>
        </div>
      </div>
    </section>

    <!-- Regional intro -->
    <section class="py-14 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl font-semibold text-evergreen mb-4">Every Style, Every Southern Utah Cemetery</h2>
        <p class="text-granite leading-relaxed mb-4">Choosing a headstone in Southern Utah is not the same as choosing one in Utah Valley or the Wasatch Front. The desert climate — over 300 sunny days a year, calcium-heavy hard water, red-rock dust, and summer highs above 105°F — favors certain granites, certain engraving techniques, and certain marker profiles more than others. The cemeteries themselves also differ: newer expansion sections at Tonaquint, Ivins, and Washington City are flush-marker-only; older pioneer sections at St. George City Cemetery still accept full uprights and even Victorian-era pedestals.</p>
        <p class="text-granite leading-relaxed mb-4">Every one of our product pages below is written with those Southern Utah specifics in mind. Which granite colors hold up in the sun. Which engraving techniques age gracefully in the hard water. Which cemetery sections require flush markers and which accept 42-inch uprights. Which product fits which family's story.</p>
        <p class="text-granite leading-relaxed">Two of the products below are unique to Southern Utah in a way no other regional monument company has: dedicated temple-engraving product pages for the <Link href="/headstones/st-george-temple-headstones" class="text-bronze font-medium underline hover:text-evergreen transition-colors">St. George Utah Temple</Link> (dedicated 1877, the oldest operating temple in the Church) and the <Link href="/headstones/red-cliffs-temple-headstones" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Red Cliffs Utah Temple</Link> (dedicated 2024). If you or your family are Latter-day Saint and Washington County was your endowment home, these are the design references most families here choose.</p>
      </div>
    </section>

    <!-- Product grid -->
    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <Link
            v-for="product in products"
            :key="product.href"
            :href="product.href"
            class="group bg-white rounded-2xl border border-stone-dark hover:border-evergreen hover:shadow-md transition-all overflow-hidden"
          >
            <div class="h-44 overflow-hidden relative" :class="product.bgClass">
              <img
                v-if="product.image"
                :src="product.image"
                :alt="`${product.name} for Southern Utah cemetery`"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
              <span v-if="product.badge" class="absolute top-3 left-3 bg-bronze text-white text-xs font-semibold uppercase tracking-widest px-2 py-1 rounded">{{ product.badge }}</span>
            </div>
            <div class="p-6">
              <h3 class="font-serif text-xl font-semibold text-evergreen group-hover:text-evergreen-light transition-colors mb-2">{{ product.name }}</h3>
              <p class="text-granite text-sm leading-relaxed mb-4">{{ product.desc }}</p>
              <div class="flex items-center justify-between">
                <span class="text-bronze font-medium text-sm">{{ product.price }}</span>
                <span class="text-sm text-evergreen font-medium flex items-center gap-1">
                  Explore
                  <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
              </div>
            </div>
          </Link>
        </div>
      </div>
    </section>

    <!-- Trust bar -->
    <section class="py-14 bg-white border-t border-stone-dark">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <h3 class="font-serif text-xl font-semibold text-evergreen mb-2">We Call the Sexton First</h3>
            <p class="text-granite text-sm leading-relaxed">Every design starts with a call to the cemetery. We confirm your section's rules, height limits, concrete requirements, and installation window before we quote — nothing goes to production without written cemetery confirmation.</p>
          </div>
          <div>
            <h3 class="font-serif text-xl font-semibold text-evergreen mb-2">Direct-From-Shop Pricing</h3>
            <p class="text-granite text-sm leading-relaxed">Funeral home markups on the same monument typically run 30–60% higher. We manufacture in-house and freight direct to the cemetery, cutting the middleman markup entirely.</p>
          </div>
          <div>
            <h3 class="font-serif text-xl font-semibold text-evergreen mb-2">Year-Round Installation</h3>
            <p class="text-granite text-sm leading-relaxed">Southern Utah's mild winters let us install year-round. Unlike Northern Utah cemeteries that freeze from November to March, we can set stones in December at Tonaquint or Ivins with no ground-thaw delays.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-14 bg-evergreen text-white">
      <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="font-serif text-3xl font-semibold mb-3">Not Sure Which Style Fits Your Cemetery?</h2>
        <p class="text-white/70 mb-8">Southern Utah cemeteries restrict monument styles differently — Tonaquint's cremation garden is flush-only, Hurricane has a 42-inch height max, Ivins expansion is flush-preferred. Tell us where your loved one is buried and we'll tell you exactly what is allowed before we quote.</p>
        <button @click="openModal" class="bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-4 rounded-lg transition-colors">
          Get a Free Cemetery Check
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

const products = [
  {
    href: '/headstones/upright-monuments',
    name: 'Upright Granite Monuments',
    desc: 'The classical vertical headstone with a die on a base. Approved in upright sections at Tonaquint, Hurricane, Washington City, and older pioneer cemeteries throughout Southern Utah.',
    price: 'From $1,200',
    image: '/images/products/upright-headstones-8.jpg',
    bgClass: 'bg-slate-100',
  },
  {
    href: '/headstones/st-george-temple-headstones',
    name: 'St. George Utah Temple Engravings',
    desc: 'The 1877 castellated Neo-Gothic silhouette on your headstone. Four design variations from tower-only minimalist to photorealistic laser etch. Unique to Washington County families.',
    price: 'From $1,400',
    image: '/images/products/upright-headstones-4.jpg',
    bgClass: 'bg-slate-50',
    badge: 'Unique to Us',
  },
  {
    href: '/headstones/red-cliffs-temple-headstones',
    name: 'Red Cliffs Utah Temple Engravings',
    desc: 'The 2024 temple with its distinctive cottonwood-leaf motif. Contemporary designs including "both temples on one stone" companion options. The fastest-growing custom motif in Washington County.',
    price: 'From $1,400',
    image: '/images/products/upright-headstones-6.jpg',
    bgClass: 'bg-slate-50',
    badge: 'Unique to Us',
  },
  {
    href: '/headstones/flat-markers',
    name: 'Flat & Flush Grave Markers',
    desc: 'Required in the Tonaquint cremation garden, the Ivins expansion, and flush-only sections at Washington City. Hard-water durability considerations built into every quote.',
    price: 'From $500',
    image: '/images/products/flat-headstone.jpg',
    bgClass: 'bg-stone-100',
  },
  {
    href: '/headstones/slant-markers',
    name: 'Slant Markers',
    desc: 'The 45-degree angled face sheds red-rock dust and hard water better than any other profile. Dominant in the older sections of Ivins and Santa Clara.',
    price: 'From $700',
    image: '/images/products/slant-headstone.jpg',
    bgClass: 'bg-zinc-100',
  },
  {
    href: '/headstones/bevel-markers',
    name: 'Bevel Markers',
    desc: 'The quiet middle ground — more presence than flush, less visual weight than an upright. Approved throughout Southern Utah, including sections that restrict full uprights.',
    price: 'From $650',
    image: '/images/products/bevled-headstone.jpg',
    bgClass: 'bg-neutral-100',
  },
  {
    href: '/headstones/slant-bevel-markers',
    name: 'Slant-Bevel Markers',
    desc: 'A hybrid 4"/8" profile — halfway between a bevel and a slant. For cemetery sections where a full slant is too much and a bevel is too little.',
    price: 'From $750',
    image: '/images/products/bevled-headstone.jpg',
    bgClass: 'bg-neutral-100',
  },
  {
    href: '/headstones/companion-headstones',
    name: 'Companion & Double Headstones',
    desc: 'One stone for two names — the most-ordered custom design in Washington County. Includes the "engrave both names now" pre-need option snowbird couples request most.',
    price: 'From $1,800',
    image: '/images/products/upright-headstones-1.jpg',
    bgClass: 'bg-slate-100',
  },
  {
    href: '/headstones/lds-pioneer-headstones',
    name: 'LDS Pioneer Heritage Headstones',
    desc: 'Cotton Mission heritage designs — sego lily, cottonwood leaf, beehive, sea gull, angel Moroni, temple silhouettes. For families whose ancestors settled Southern Utah with Erastus Snow.',
    price: 'From $1,200',
    image: '/images/products/upright-headstones-3.jpg',
    bgClass: 'bg-sky-50',
  },
  {
    href: '/headstones/infant-child-memorials',
    name: 'Infant & Child Memorials',
    desc: 'Small-scale designs handled with warmth. Tonaquint Angel section, portrait etchings, gentle motifs, and warm handoffs to Southern Utah grief resources — no additional design fees.',
    price: 'From $450',
    image: '/images/products/flat-baby-headstone.jpg',
    bgClass: 'bg-pink-50',
  },
  {
    href: '/headstones/bronze-memorials',
    name: 'Bronze & VA Markers',
    desc: 'The dominant marker at Southern Utah National Cemetery. Free VA markers for eligible veterans, custom private bronze on granite bases, and VA medallion affixture for post-1990 veterans.',
    price: 'From $400 (VA-eligible)',
    image: '/images/products/bronze-headstone.jpg',
    bgClass: 'bg-amber-50',
  },
  {
    href: '/headstones/bench-memorials',
    name: 'Bench Memorials',
    desc: 'A memorial that doubles as visitor seating in the Southern Utah heat. Approved at most Washington County cemeteries; a natural fit for the red-rock landscape at Ivins and Santa Clara.',
    price: 'From $3,500',
    image: '/images/products/bench-headstone.jpg',
    bgClass: 'bg-stone-100',
  },
  {
    href: '/headstones/pet-memorials',
    name: 'Pet Memorials',
    desc: 'HOA-friendly designs for Sun River, Kayenta, and Coral Canyon residents where visible outdoor markers are restricted. Planter-integrated, hidden garden, and portable indoor plaques.',
    price: 'From $175',
    image: '/images/products/flat-headstone-2.jpg',
    bgClass: 'bg-orange-50',
  },
  {
    href: '/headstones/civic-monuments',
    name: 'Civic Monuments & Plaques',
    desc: 'Larger-scale monuments for cities, veterans groups, historical societies, and LDS wards. Veterans plaza monuments, pioneer commemoratives, ghost-town markers, and dedication plaques.',
    price: 'From $850',
    image: '/images/products/civic-monument.jpg',
    bgClass: 'bg-blue-50',
  },
  {
    href: '/headstones/unique-options',
    name: 'Unique Custom Shapes',
    desc: 'Pedestals, ledger stones, obelisks, stele designs, and custom shapes inspired by Southern Utah\'s red-rock landscape. For families whose lives resist the standard catalog.',
    price: 'From $2,800',
    image: '/images/products/custom-headstone.jpg',
    bgClass: 'bg-rose-50',
  },
  {
    href: '/headstones/custom-engraving',
    name: 'Custom Engraving',
    desc: 'Sandblasting for tradition, laser etching for durability. Portraits, temple silhouettes, family motifs, landscape scenes, and handwriting reproduction — every add-on quoted at exact scale.',
    price: 'Add-on to base',
    image: '/images/products/upright-headstones-4.jpg',
    bgClass: 'bg-slate-100',
  },
  {
    href: '/headstones/restoration',
    name: 'Restoration & Cleaning',
    desc: 'Pioneer sandstone marker restoration in the older sections of St. George City, Santa Clara, and Washington City. Plus routine hard-water cleaning for modern granite across Washington County.',
    price: 'From $150 (cleaning)',
    image: '/images/products/flat-headstone-3.jpg',
    bgClass: 'bg-stone-100',
  },
];
</script>
