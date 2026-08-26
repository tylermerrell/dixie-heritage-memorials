<template>
  <AppLayout>
    <Head>
      <title>Hurricane City Cemetery — Plot Fees, Rules & Headstone Guide | St. George Memorials</title>
      <meta name="description" content="Hurricane City Cemetery in Washington County — 2026 plot fees ($550 resident / $2,000 non-resident), monument rules, decoration policies, and how to order a headstone that meets the sexton's specifications." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/hurricane-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Hurricane City Cemetery · Hurricane · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones for Hurricane City Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">Hurricane City Cemetery is one of the most affordable municipal cemeteries in the region for residents — $550 for a plot with perpetual care. Its rules balance the town's canal-era agricultural roots with modern maintenance requirements. Here's what you need to know before ordering a monument.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">City</p>
            <p class="text-sm text-white mt-1">Hurricane, Utah 84737</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">City of Hurricane</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Resident Plot</p>
            <p class="text-sm text-white mt-1">$550 with perpetual care</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Advance Notice</p>
            <p class="text-sm text-white mt-1">24 hours before install</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Overview: Hurricane's Municipal Cemetery</h2>
            <p>Hurricane City Cemetery serves the town of Hurricane and the surrounding communities of LaVerkin, Virgin, Rockville, and Springdale — Washington County's eastern corridor toward Zion National Park. The cemetery is one of the region's more affordable choices for residents ($550 per plot including perpetual care) with a materially higher non-resident rate. That resident-preference pricing means Hurricane families with local roots keep their generations close, while newer residents often plan carefully around eligibility.</p>

            <h3>Cemetery Layout</h3>
            <p>Hurricane City Cemetery is a traditional grid-layout municipal cemetery. Upright monuments are permitted in most sections, with height maximums enforced to preserve sight lines across the grounds. Newer sections lean toward flush-marker conventions but do not exclusively require them.</p>

            <h3>Headstone Placement Rules</h3>
            <p>Arrangements for burials and monument placement must be made with the Cemetery Clerk a minimum of 24 hours in advance. Headstones are considered personal property, but the placement, foundation, and dimensions are all subject to city approval before installation. Every upright monument requires a concrete border poured around the base for structural stability and mowing protection.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules and fees on file. We verify each quote directly with the Cemetery Clerk before design begins.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="rule in rules" :key="rule.label" class="bg-stone rounded-xl p-4">
                <p class="text-xs font-semibold uppercase tracking-widest text-granite mb-1">{{ rule.label }}</p>
                <p class="text-sm text-evergreen font-medium leading-snug">{{ rule.value }}</p>
              </div>
            </div>
            <p class="text-xs text-granite italic mt-4">Plot and opening/closing fees are paid to the City of Hurricane. Monument, foundation, freight, and setting are what we quote.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Grave Decoration Rules</h2>
            <p class="text-granite text-sm mb-5">Hurricane maintains a working municipal cemetery on a mowing schedule. Items outside the rules are removed to keep the grounds mowable.</p>
            <ul class="space-y-3">
              <li v-for="rule in decorationRules" :key="rule" class="flex gap-3">
                <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-bronze mt-2"></span>
                <span class="text-sm text-granite leading-relaxed">{{ rule }}</span>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>History of Hurricane City Cemetery</h2>
            <p>Hurricane was founded in 1893, but the city didn't come alive until the Hurricane Canal — a 7.5-mile engineering feat cut into red-rock cliffs by pioneer settlers — brought Virgin River water to the bench above town in 1904. That canal transformed the arid slope into farmland, and Hurricane grew from a struggling outpost into a productive Washington County agricultural community by the 1910s. The cemetery holds the canal builders, the orchard families who planted the peach and apple groves that once ringed the town, and generations of ranching families who worked the LaVerkin bench.</p>
            <p>The name "Hurricane" traces to an 1860s wagon-train incident in which strong winds tore the cover off a wagon in the pass now called Hurricane Cliffs. Locals commemorated the moment; the name stuck. Today the cemetery serves a growing bedroom community for the St. George metro area, but its historic sections tell the canal-and-orchard story of the town's founding families.</p>
            <p>Search for people buried at Hurricane City Cemetery on <a href="https://memorialmapper.com/cemetery/216/hurricane-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Maintaining a Headstone at Hurricane</h2>
            <p>Hurricane sits at a slightly higher elevation (~3,300 ft) than St. George, and its wind exposure on the bench is materially higher. Two environmental factors matter for monument longevity here:</p>
            <ol>
              <li><strong>Wind and dust.</strong> The winds that named the town still blow through the cemetery. Anything unweighted — small flags, plastic flowers, wire trellises — gets scattered. Design your decoration plan around wind-fastened options only.</li>
              <li><strong>Hard water on the granite face.</strong> Municipal irrigation and rainfall both leave calcium deposits. Dark polished granites (Jet Black, Dakota Mahogany) hide the mineral more forgivingly than light stones. A gentle non-ionic cleaning every 18 to 24 months keeps the polished face clear.</li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Hurricane City Cemetery</h2>
            <p class="text-granite text-sm mb-6">Common headstone styles we install at Hurricane. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone example ${i + 1} for Hurricane City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Hurricane City Cemetery</h2>
            <p class="text-granite text-sm mb-6">Prices delivered and set at Hurricane, including foundation and city coordination.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link
                v-for="item in pricing"
                :key="item.href"
                :href="item.href"
                class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group"
              >
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
            <p class="text-xs text-granite mt-4">Prices reflect direct-from-manufacturer rates. Funeral-home markups for the same monument typically run 30–60% higher.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Hurricane City Cemetery</h2>
            <ol class="space-y-6">
              <li v-for="(step, i) in steps" :key="i" class="flex gap-4">
                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-evergreen text-white flex items-center justify-center text-sm font-bold">{{ i + 1 }}</div>
                <div>
                  <p class="font-semibold text-evergreen mb-1">{{ step.title }}</p>
                  <p class="text-sm text-granite leading-relaxed">{{ step.body }}</p>
                </div>
              </li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Hurricane</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We call the Cemetery Clerk, verify your plot, and send a digital proof before any payment.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>

      </div>
    </section>

    <Teleport to="body">
      <div
        v-if="lightboxIndex !== null"
        class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
        @click.self="lightboxIndex = null"
      >
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Hurricane City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
        <button v-if="lightboxIndex < gallery.length - 1" class="absolute right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex++" aria-label="Next">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </Teleport>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import RelatedLinks from '@/Components/RelatedLinks.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();
const lightboxIndex = ref(null);

const rules = [
  { label: 'Resident Plot Fee', value: '$550 with perpetual care included' },
  { label: 'Non-Resident Plot Fee', value: '$2,000 with perpetual care included' },
  { label: 'Upright Headstones', value: 'Permitted in most sections. Verify height with Cemetery Clerk.' },
  { label: 'Flush / Flat Markers', value: 'Permitted throughout. Common in newer sections.' },
  { label: 'Concrete Border', value: 'Required around every monument base.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to Cemetery Clerk.' },
  { label: 'Approval Required', value: 'Yes — dimensions and layout submitted before production.' },
  { label: 'Headstones as Personal Property', value: 'Family owns the monument; city owns the plot.' },
];

const decorationRules = [
  'Flowers, real or artificial, must be placed in a container or attached to the monument.',
  'No glass containers permitted anywhere on the grounds.',
  'Freestanding fences, corner posts, coping, or hedges are not allowed on plots.',
  'Wind-vulnerable decorations (unweighted flags, wire trellises) are especially discouraged given Hurricane\'s wind exposure.',
  'Solar lights and hanging décor are subject to Cemetery Clerk approval.',
  'Grounds are mowed on a regular schedule — items obstructing the mower are removed.',
];

const gallery = [
  '/images/products/upright-headstones-8.jpg',
  '/images/products/upright-headstones-1.jpg',
  '/images/products/flat-headstone.jpg',
  '/images/products/bronze-headstone.jpg',
  '/images/products/slant-headstone.jpg',
  '/images/products/upright-headstones-4.jpg',
];

const pricing = [
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Bevel Markers', price: 'From $650', href: '/headstones/bevel-markers' },
  { name: 'Slant Markers', price: 'From $700', href: '/headstones/slant-markers' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Upright Granite Headstones', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'St. George Temple Engraving', price: 'From $1,400', href: '/headstones/st-george-temple-headstones' },
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  {
    title: 'Confirm resident or non-resident status',
    body: 'Hurricane\'s plot fees are $550 for residents versus $2,000 for non-residents. Confirming eligibility early affects family plot planning.',
  },
  {
    title: 'We contact the Cemetery Clerk',
    body: 'We verify current section rules, height maximums, and the 24-hour notice requirement before we quote. If a monument dimension would fail approval, we tell you before you spend.',
  },
  {
    title: 'You approve a design proof',
    body: 'A digital proof shows exact dimensions, engraving, granite color, and any custom artwork — including St. George Utah Temple silhouettes if you choose. Your written approval starts production.',
  },
  {
    title: 'Manufacturing and freight',
    body: 'Typical lead time from proof approval is 8–16 weeks. Hurricane installations run year-round; no winter freeze delays.',
  },
  {
    title: 'Foundation and setting',
    body: 'We pour the required concrete border, coordinate the setting appointment with the Cemetery Clerk, and confirm placement. First cleaning at six months is included.',
  },
];

const faqs = [
  {
    q: 'How much does a plot at Hurricane City Cemetery cost?',
    a: 'Resident plots are $550 including perpetual care. Non-resident plots are $2,000. These are set by the City of Hurricane and can change annually — verify with the Cemetery Clerk before purchase.',
  },
  {
    q: 'Who qualifies as a resident?',
    a: 'Generally, current residents of Hurricane and residents of areas covered under the city\'s cemetery service agreements. Verify with the Cemetery Clerk for current eligibility rules.',
  },
  {
    q: 'Can I put an upright monument at Hurricane?',
    a: 'Yes, in most sections. Newer sections may favor flush markers. Verify with the Cemetery Clerk before ordering, particularly for the height maximum enforced at your section.',
  },
  {
    q: 'Do I have to buy the headstone through the funeral home?',
    a: 'No. Utah families are free to purchase the monument directly from any monument company. Buying through the funeral home typically adds 30–60% in markup for the same stone.',
  },
  {
    q: 'What are the wind concerns at Hurricane?',
    a: 'Hurricane\'s bench-top location gets stronger prevailing winds than downtown St. George. Any grave decorations must be wind-resistant or secured — unweighted items will be scattered across the grounds.',
  },
  {
    q: 'Can I get a veteran marker installed here?',
    a: 'Yes. The VA provides a free flat marker for eligible veterans in any cemetery, including Hurricane City. Families who want a custom private headstone can also affix a VA medallion for post-1990 veterans.',
  },
];

const related = [
  { label: 'Tonaquint Cemetery Guide', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Toquerville Cemetery', href: '/cemeteries/toquerville-cemetery' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
  { label: 'Hurricane Service Area', href: '/service-areas/hurricane' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
];
</script>
