<template>
  <AppLayout>
    <Head>
      <title>New Harmony Cemetery — 1852 Pioneer Settlement Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="New Harmony Cemetery — one of Southern Utah's earliest LDS pioneer settlements founded 1852. Cemetery rules, historic context near Kolob Canyons, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/new-harmony-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">New Harmony Cemetery · New Harmony · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones for New Harmony Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">New Harmony was founded in 1852 by John D. Lee — a name that carries significant weight in Southern Utah history. The small cemetery below the Kolob Canyons holds four generations of pioneer families whose original settlement predated most of the Cotton Mission communities.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Community</p><p class="text-sm text-white mt-1">New Harmony, UT 84757</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1852 — pre-Cotton Mission</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Setting</p><p class="text-sm text-white mt-1">Below Kolob Canyons</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,300 ft — cool winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Cemetery With Deep Pioneer Roots</h2>
            <p>New Harmony Cemetery is a small, quiet burial ground serving the community of New Harmony beneath the red cliffs of the Kolob Canyons section of Zion National Park. The community itself is small and rural — a few hundred residents — and the cemetery reflects that scale. What it lacks in size it makes up in historical density: many of the pioneer names on the older stones connect directly to the founding of Southern Utah settlement itself.</p>
            <p>Because the community is small and unincorporated, cemetery coordination is direct — through community stewards and Washington County. The 24-hour advance notice standard applies. Upright monuments permitted; concrete borders required.</p>
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
            <h2>History of New Harmony</h2>
            <p>New Harmony was founded in 1852 by John D. Lee — a controversial figure in Southern Utah history whose later involvement in the Mountain Meadows Massacre would forever complicate his legacy. The settlement itself began as one of the earliest LDS pioneer footholds south of the Wasatch Front, founded four years before the Cotton Mission arrived at St. George. The name "Harmony" reflected the settlers\' aspiration for peaceful cooperation among themselves and with the Southern Paiute nations of the region.</p>
            <p>The original Harmony site suffered from flooding and was moved to its current bench location, prompting the "New" prefix. The cemetery holds pioneer families whose descendants populated much of southwestern Utah — including families whose historical positioning around Mountain Meadows makes them significant to Utah historical scholarship. We treat every family plot here with the historical gravity the community\'s complexity warrants.</p>
            <p>Search for people buried at New Harmony Cemetery on <a href="https://memorialmapper.com/cemetery/365/new-harmony-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for New Harmony Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at New Harmony</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for New Harmony</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Direct coordination with community stewards.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>
      </div>
    </section>

    <Teleport to="body">
      <div v-if="lightboxIndex !== null" class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" @click.self="lightboxIndex = null">
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous"><svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg></button>
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at New Harmony Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted.' },
  { label: 'Concrete Border', value: 'Required around every monument.' },
  { label: 'Coordination', value: 'Small unincorporated community — through Washington County or stewards.' },
  { label: 'Elevation Considerations', value: '~5,300 ft — foundations reflect local frost line.' },
  { label: 'Installation Season', value: 'March–November preferred for concrete pours.' },
  { label: 'Historic Sensitivity', value: 'Design should respect neighboring pioneer stones from the 1850s–1870s.' },
  { label: 'Approval Required', value: 'Verify with county before larger monuments.' },
  { label: 'Setting Coordination', value: 'Direct with community stewards.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its border.',
  'Glass containers are not permitted.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor is subject to freeze damage.',
  'Wind-vulnerable items should be avoided given the exposure below Kolob Canyons.',
  'Historic pioneer stones are not to be touched or cleaned by visitors.',
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
  { title: 'Confirm the plot', body: 'We coordinate with community stewards or Washington County to verify plot records before quoting.' },
  { title: 'Verify local rules', body: 'Small-community coordination — we\'re respectful of the informal stewardship structure.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving. For pioneer plots, neighboring-stone context reviewed.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Installation March–November preferred.' },
  { title: 'Foundation and setting', body: 'Deeper frost-line pour, monument set with community coordination, first cleaning included.' },
];

const faqs = [
  { q: 'Where is New Harmony?', a: 'A small unincorporated community off I-15 exit 42, about 30 minutes north of St. George at the foot of the Kolob Canyons section of Zion.' },
  { q: 'Why "New" Harmony?', a: 'The original Harmony settlement suffered from flooding and was relocated to the current higher bench. The "New" prefix distinguishes it from the earlier site.' },
  { q: 'Who founded New Harmony?', a: 'John D. Lee led the original 1852 settlement, four years before the Cotton Mission arrived at St. George.' },
  { q: 'Can I visit historic pioneer graves?', a: 'The cemetery is open to visitors. We ask visitors not to touch or clean historic stones — the sandstone weathers if disturbed.' },
];

const related = [
  { label: 'Enterprise Cemetery', href: '/cemeteries/enterprise-cemetery' },
  { label: 'Central Cemetery', href: '/cemeteries/central-cemetery' },
  { label: 'Kanarraville Cemetery', href: '/cemeteries/kanarraville-cemetery' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'Sandstone Restoration', href: '/headstones/restoration' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
