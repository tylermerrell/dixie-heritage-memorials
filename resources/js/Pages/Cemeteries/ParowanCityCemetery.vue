<template>
  <AppLayout>
    <Head>
      <title>Parowan City Cemetery — Mother Town of Southern Utah Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Parowan City Cemetery — 1851 founding, Mother Town of Southern Utah. Iron Mission heritage, cemetery rules, and headstone design guide for one of the region\'s earliest pioneer cemeteries." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/parowan-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Parowan City Cemetery · Parowan · Iron County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Parowan City Cemetery — Mother Town of Southern Utah</h1>
        <p class="text-white/70 text-lg max-w-3xl">Parowan was founded in January 1851 — the first non-Native American settlement in Southern Utah, earning it the title "Mother Town of Southern Utah." The cemetery holds the founding families of the Iron Mission, including the party led by George A. Smith that established the town under Brigham Young\'s direction.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Parowan, UT 84761</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Parowan</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Est.</p><p class="text-sm text-white mt-1">January 1851 — 1st Southern Utah town</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~6,000 ft — real winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Southern Utah\'s Oldest Cemetery</h2>
            <p>Parowan City Cemetery is the oldest continuously used pioneer cemetery in Southern Utah, older than Cedar City by mere months and older than St. George by nearly a decade. Its historic sections hold Iron Mission founders, including some of the most significant figures in early Latter-day Saint colonization of the American West.</p>
            <p>Because of the cemetery\'s historic status, design decisions on new monuments in older sections require sensitivity to the surrounding pioneer stones. Newer sections have absorbed the growing modern community.</p>

            <h3>Elevation Considerations</h3>
            <p>Parowan sits at ~6,000 feet — the highest of any Iron County cemetery. Winter is real; concrete pours effectively pause December through February. Foundation depth is deeper than at Cedar City.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Rules & Regulations</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="rule in rules" :key="rule.label" class="bg-stone rounded-xl p-4">
                <p class="text-xs font-semibold uppercase tracking-widest text-granite mb-1">{{ rule.label }}</p>
                <p class="text-sm text-evergreen font-medium leading-snug">{{ rule.value }}</p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Grave Decoration Rules</h2>
            <ul class="space-y-3">
              <li v-for="rule in decorationRules" :key="rule" class="flex gap-3">
                <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-bronze mt-2"></span>
                <span class="text-sm text-granite leading-relaxed">{{ rule }}</span>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>History of Parowan</h2>
            <p>Parowan was founded on January 13, 1851, by a party of 168 settlers led by George A. Smith under Brigham Young\'s direction. The goal was to establish an iron-producing colony in the Parowan Valley, with iron ore identified in the mountains west of the settlement site. Parowan predates Cedar City by months and served as the initial base for Iron Mission expansion. Cedar City was later established closer to the iron ore deposits, but Parowan remained the political center of the Iron Mission and the county seat of Iron County (a distinction it holds today).</p>
            <p>The town\'s early history includes some of the most consequential Iron Mission figures. Parowan\'s "Old Rock Church" (1861) is one of the oldest LDS church buildings still standing. The cemetery holds the mission founders and generations of Iron County civic life. Because Parowan is the county seat, county-level historical figures are often buried here.</p>
            <p>Search for people buried at Parowan Cemetery on <a href="https://memorialmapper.com/cemetery/406/parowan-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Parowan City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order</h2>
            <ol class="space-y-6">
              <li v-for="(step, i) in steps" :key="i" class="flex gap-4">
                <div class="flex-shrink-0 w-8 h-8 rounded-full bg-evergreen text-white flex items-center justify-center text-sm font-bold">{{ i + 1 }}</div>
                <div><p class="font-semibold text-evergreen mb-1">{{ step.title }}</p><p class="text-sm text-granite leading-relaxed">{{ step.body }}</p></div>
              </li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">FAQ</h2>
            <div class="space-y-5">
              <div v-for="faq in faqs" :key="faq.q"><p class="font-semibold text-evergreen mb-1">{{ faq.q }}</p><p class="text-sm text-granite leading-relaxed">{{ faq.a }}</p></div>
            </div>
          </div>

        </div>

        <aside class="space-y-6">
          <div class="bg-evergreen rounded-2xl p-6 text-white sticky top-36">
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Parowan</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We verify before any payment.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>
      </div>
    </section>

    <Teleport to="body">
      <div v-if="lightboxIndex !== null" class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" @click.self="lightboxIndex = null">
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg></button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Parowan City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
        <button v-if="lightboxIndex < gallery.length - 1" class="absolute right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex++" aria-label="Next"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg></button>
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
  { label: 'Upright Headstones', value: 'Permitted in historic and traditional sections.' },
  { label: 'Concrete Border', value: 'Required — deep frost-line foundation.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred for concrete apron pours.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Historic Sensitivity', value: 'Older sections carry 1850s pioneer stones — design context matters.' },
  { label: 'Plot Availability', value: 'Contact Parowan city clerk for current section availability.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are prohibited.',
  'Freestanding fences or coping on plots are prohibited.',
  'Winter décor is subject to significant freeze damage at Parowan elevation.',
  'Solar lights and hanging décor are subject to city clerk approval.',
  'Items obstructing mowing are removed without notice.',
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
  { name: 'LDS Pioneer Headstones', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Sandstone Restoration', price: 'Quoted', href: '/headstones/restoration' },
];

const steps = [
  { title: 'Confirm the section', body: 'Historic sections carry more design context; newer sections carry more procedural formality. We verify plot location before quoting.' },
  { title: 'We contact the city clerk', body: '24-hour notice, current rules, dimensions verified before production.' },
  { title: 'Design layout', body: 'For plots near pioneer stones, we include neighboring-stone context so the new monument fits its historical setting.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Installation March–November preferred for concrete pours.' },
  { title: 'Foundation and setting', body: 'Deep frost-line foundation for Parowan\'s ~6,000 ft elevation. Setting coordinated with city clerk.' },
];

const faqs = [
  { q: 'Is Parowan really the oldest town in Southern Utah?', a: 'Yes. Founded January 13, 1851 — the first non-Native settlement south of the Wasatch Front. Predates Cedar City by months and St. George by nearly a decade.' },
  { q: 'What was the Iron Mission?', a: 'A Brigham Young–directed colonization effort to establish iron manufacturing in the Parowan Valley. Iron ore was mined in the surrounding mountains and smelted through the 1850s.' },
  { q: 'Can I have pioneer-heritage motifs on a monument?', a: 'Yes. Parowan\'s historic density makes pioneer-heritage designs common. We keep a library of Iron Mission motifs, LDS pioneer imagery, and Old Rock Church references.' },
  { q: 'What about winter installation?', a: 'Parowan\'s elevation makes December–February impractical for concrete pours. We plan installations March through November.' },
  { q: 'What\'s the "Old Rock Church"?', a: 'The 1861 Parowan Rock Church — one of the oldest LDS church buildings still standing in the state, on the National Register of Historic Places.' },
];

const related = [
  { label: 'Cedar City Cemetery', href: '/cemeteries/cedar-city-cemetery' },
  { label: 'Paragonah Cemetery', href: '/cemeteries/paragonah-cemetery' },
  { label: 'Summit Cemetery', href: '/cemeteries/summit-cemetery' },
  { label: 'Southern Utah National Cemetery', href: '/cemeteries/southern-utah-national-cemetery' },
  { label: 'Parowan Service Area', href: '/service-areas/parowan' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
];
</script>
