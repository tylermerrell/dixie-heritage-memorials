<template>
  <AppLayout>
    <Head>
      <title>Washington City Cemetery — Cotton Mill Heritage & Monument Guide | St. George Memorials</title>
      <meta name="description" content="Washington City Cemetery in Washington County — one of the oldest continuously used cemeteries in Southern Utah. Cotton mill heritage, monument rules, decoration policies, and headstone design guidance." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/washington-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington City Cemetery · Washington · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Washington City Cemetery — Cotton Mill Pioneer Ground</h1>
        <p class="text-white/70 text-lg max-w-3xl">Washington was settled in 1857 — four years before St. George — as an early Cotton Mission outpost. Its cemetery is among the oldest continuously used burial grounds in Southern Utah and holds the pioneers who ran the Washington Cotton Mill, one of the region's most historically significant industrial sites.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">City</p>
            <p class="text-sm text-white mt-1">Washington, UT 84780</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">City of Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Est.</p>
            <p class="text-sm text-white mt-1">1857 — pre-Cotton Mission</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Notice Required</p>
            <p class="text-sm text-white mt-1">24 hours to city clerk</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Cotton Mill Town's Burial Ground</h2>
            <p>Washington City Cemetery is a working historic cemetery serving a rapidly growing municipality. The town itself now runs from the base of the Pine Valley Mountains all the way to I-15 with newer subdivisions expanding annually, but the cemetery preserves the story of the original 1857 settlement — the failed cotton experiment, the mill that briefly employed hundreds, and the families who stayed after the crops did not.</p>

            <h3>Sections and What They Allow</h3>
            <p>Washington City Cemetery has historic pioneer sections holding stones from the 1860s and 1870s, plus expansion sections added over the last few decades to serve the city's suburban growth. Upright monuments are permitted in most sections; some newer expansions favor flush markers. Verify your section with the city clerk before design begins.</p>

            <h3>Foundation and Approval</h3>
            <p>Every monument requires a poured concrete apron around the base. Washington enforces the same 24-hour advance notice standard as St. George and Hurricane. Dimensions must be approved before production; the city has rejected non-conforming monuments at delivery in past years.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules on file. We verify with Washington city clerk before every quote.</p>
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
            <h2>History of Washington City Cemetery</h2>
            <p>Washington was established in 1857 by 28 families sent south by Brigham Young to attempt cotton cultivation. Their arrival predated St. George by four years, and Washington briefly served as the small population center for the entire Cotton Mission region. The Washington Cotton Mill (built 1866, one of the oldest surviving industrial structures in the American West) was the mission's most ambitious project — an attempt to convert the local crop into finished textiles. The mill operated until 1898, and its stone shell still stands as a National Historic Landmark.</p>
            <p>The cemetery holds the mill workers, the cotton farmers who tried to make the mission's economics work, and the families who quietly remade Washington as a small farming community once the cotton experiment ended. Names on the older stones — Covington, Petty, Rowley, Barlow — remain prominent in Southern Utah civic and religious life today.</p>
            <p>Search for people buried at Washington City Cemetery on <a href="https://memorialmapper.com/cemetery/540/washington-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Washington City</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Washington City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Washington City</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Washington City</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Washington City</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We verify before any payment.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>

      </div>
    </section>

    <Teleport to="body">
      <div v-if="lightboxIndex !== null" class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" @click.self="lightboxIndex = null">
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Washington City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted in most sections. Verify height with city clerk.' },
  { label: 'Concrete Border', value: '4–6 inch apron required around every monument.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to Washington city clerk.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Historic Sections', value: 'Design should respect neighboring pre-1900 pioneer stones.' },
  { label: 'Expansion Sections', value: 'Standard modern rules.' },
  { label: 'Plot Availability', value: 'Contact city clerk for current section availability.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting appointment.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are not permitted anywhere on the grounds.',
  'Freestanding fences or coping around plots is prohibited.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'Anything obstructing mowing is removed without notice.',
  'Wind-vulnerable items are removed to the maintenance bin during peak wind season.',
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
  { name: 'Sandstone Restoration', price: 'Quoted', href: '/headstones/restoration' },
];

const steps = [
  { title: 'Identify your section', body: 'Historic sections carry different design context than newer expansions. We verify your plot with the city clerk before quoting.' },
  { title: 'We contact the city clerk', body: '24-hour notice, current dimensions rules, and any section-specific approvals confirmed before production.' },
  { title: 'You approve a design layout', body: 'For plots in historic sections, we include neighboring-stone photo review so the new monument fits its context. Written approval starts production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time from proof approval is 8–16 weeks. Year-round installation window.' },
  { title: 'Foundation and setting', body: 'Concrete apron poured, setting coordinated with the city clerk, first cleaning at six months included.' },
];

const faqs = [
  { q: 'How old is Washington City Cemetery?', a: 'The community was settled in 1857 and the cemetery has been in continuous use since then — pre-dating St. George by four years.' },
  { q: 'What is the Washington Cotton Mill?', a: 'The 1866 stone mill built by the Cotton Mission — a National Historic Landmark that still stands. Many of its workers and their families are buried in the historic sections of the cemetery.' },
  { q: 'Can I have pioneer-heritage motifs on a new headstone?', a: 'Yes. We frequently engrave designs referencing the cotton mission, the mill, or pioneer surname heritage. See our LDS Pioneer Headstones page for design variations.' },
  { q: 'Do I need to buy the headstone through the funeral home?', a: 'No. Utah families are free to purchase the monument directly from any monument company; funeral-home markups typically run 30–60% higher.' },
  { q: 'How does Washington City Cemetery compare to St. George City Cemetery?', a: 'Both are pioneer-era municipal cemeteries. Washington predates St. George by four years; St. George City is larger and holds the temple-era pioneer generation. Many Southern Utah families have relatives in both.' },
];

const related = [
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Tonaquint Cemetery Guide', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'Hurricane City Cemetery', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'Washington City Service Area', href: '/service-areas/washington-city' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'Sandstone Restoration', href: '/headstones/restoration' },
];
</script>
