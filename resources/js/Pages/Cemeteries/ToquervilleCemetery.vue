<template>
  <AppLayout>
    <Head>
      <title>Toquerville City Cemetery — Pioneer Winery Town Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Toquerville City Cemetery in Washington County — 1858 pioneer settlement, historic winery town heritage, cemetery rules, and headstone design guide for one of Southern Utah's most distinctive small towns." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/toquerville-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Toquerville City Cemetery · Toquerville · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Toquerville City Cemetery — 1858 Pioneer Cemetery Guide</h1>
        <p class="text-white/70 text-lg max-w-3xl">Toquerville — named for a local Southern Paiute chief and one of the earliest LDS settlements south of the Black Ridge — holds five generations of pioneer families in its cemetery. The town's identity as a 19th-century winery community shapes its historic character today.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">City</p>
            <p class="text-sm text-white mt-1">Toquerville, UT 84774</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">City of Toquerville</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Founded</p>
            <p class="text-sm text-white mt-1">1858 — pioneer settlement</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Notice Required</p>
            <p class="text-sm text-white mt-1">24 hours to town office</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Small Town Cemetery with Big Historical Weight</h2>
            <p>Toquerville City Cemetery is a small municipal cemetery serving a town of roughly 2,000 residents. Its scale is modest but its historical density is significant — the pioneer families who founded Toquerville in 1858 include names still prominent across Washington County. Because the town is small, the town office handles cemetery arrangements directly, with less bureaucratic overhead than St. George or Hurricane. That also means shorter notice periods and more direct family-to-official communication.</p>

            <h3>Section Layout</h3>
            <p>The historic sections hold stones from the 1860s onward. Newer sections have been added slowly as the town has grown. Upright monuments are permitted throughout most of the cemetery. Concrete borders are required around every monument for mowing protection.</p>

            <h3>Small-Town Coordination</h3>
            <p>Toquerville does not have a dedicated sexton — the town office manages cemetery operations. When we schedule an installation, we coordinate directly with town office staff. Communication is usually faster than in larger cities.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules on file. We verify with the Toquerville town office before every quote.</p>
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
            <h2>History of Toquerville</h2>
            <p>Toquerville was settled in 1858 by a group of LDS families under the leadership of Joshua Terry Willis. The town's name honors Toquer, a Southern Paiute chief whose people lived along Ash Creek — a rare Utah pioneer community to be named for a Native American individual. The settlers found the town's warm microclimate ideal for wine grape cultivation. By the 1860s, Toquerville was one of the Utah Territory's small handful of commercial wine producers — a fact that made the town simultaneously important to the Cotton Mission economy and doctrinally awkward for a religiously teetotal community. The wineries closed at the end of the 19th century as the local church leadership emphasized the Word of Wisdom prohibition on alcohol.</p>
            <p>The cemetery holds the settlers who managed that ambiguity — the winery families, the ranchers, and the orchard growers who kept Toquerville viable when many other small Cotton Mission towns emptied out. Ash Creek continues to run through the town, and the cemetery sits within earshot of it.</p>
            <p>Search for people buried at Toquerville Cemetery on <a href="https://memorialmapper.com/cemetery/533/toquerville-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Toquerville</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Toquerville Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Toquerville</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Toquerville</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Toquerville</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Design proof before any payment.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Toquerville Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted throughout the cemetery.' },
  { label: 'Concrete Border', value: '4–6 inch apron required around every monument.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to the town office.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Historic Sections', value: 'Design context matters for older sections.' },
  { label: 'Small-Town Coordination', value: 'No dedicated sexton — town office manages arrangements directly.' },
  { label: 'Plot Availability', value: 'Contact the town office for current availability.' },
  { label: 'Setting Coordination', value: 'Town office schedules the setting appointment.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures around plots are prohibited.',
  'Solar lights and wind chimes are subject to town office approval.',
  'Wind-vulnerable décor should be avoided given Ash Creek canyon winds.',
  'The town office removes items obstructing mowing without notice.',
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
  { title: 'Confirm the plot', body: 'The town office maintains the plot records. We confirm exact location before quoting.' },
  { title: 'We contact the town office', body: 'Given Toquerville\'s small size, the town office handles coordination directly. We verify current rules before we quote.' },
  { title: 'Design proof', body: 'A digital proof shows exact dimensions and engraving. For pioneer-family plots, we include neighboring-stone context so the new design fits.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time from proof approval is 8–16 weeks. Year-round installation window.' },
  { title: 'Foundation and setting', body: 'Concrete apron poured, setting coordinated with the town office, first cleaning included at six months.' },
];

const faqs = [
  { q: 'Where is Toquerville?', a: 'On U.S. Route 89 north of Hurricane, about 20 minutes northeast of St. George. Small town of roughly 2,000 people.' },
  { q: 'What\'s the town named for?', a: 'Toquer, a Southern Paiute chief whose people lived along Ash Creek. It\'s one of the few Utah pioneer towns named for a Native American individual.' },
  { q: 'Was Toquerville really a winery town?', a: 'Yes — in the 1860s and 1870s Toquerville was one of the Utah Territory\'s few commercial wine producers, supplying local Cotton Mission communities. The wineries closed by 1900 under Word of Wisdom pressure.' },
  { q: 'How does small-town coordination work?', a: 'No dedicated sexton. Cemetery arrangements go through the town office. Communication is direct and usually faster than in larger cities.' },
  { q: 'Can I do a pioneer-heritage engraving?', a: 'Yes. Given Toquerville\'s historical density, we work with many families on pioneer-heritage motifs including grape vine designs referencing the town\'s winery history.' },
];

const related = [
  { label: 'Hurricane City Cemetery', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'LaVerkin Service Area', href: '/service-areas/la-verkin' },
  { label: 'Toquerville Service Area', href: '/service-areas/toquerville' },
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
