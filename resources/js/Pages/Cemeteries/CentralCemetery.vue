<template>
  <AppLayout>
    <Head>
      <title>Central Cemetery — Pine Valley Foothills Small-Town Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Central Cemetery in western Washington County near the Pine Valley Mountains — small unincorporated community cemetery, high-elevation considerations, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/central-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Central Cemetery · Central · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Central Cemetery — Pine Valley Foothills Cemetery Guide</h1>
        <p class="text-white/70 text-lg max-w-3xl">Central is a small unincorporated community tucked into the western foothills of the Pine Valley Mountains, between St. George and Enterprise. Its cemetery serves a few dozen ranching and second-home families in a genuinely rural setting at meaningful elevation.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Community</p><p class="text-sm text-white mt-1">Central, UT 84722</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Setting</p><p class="text-sm text-white mt-1">Pine Valley foothills</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,200 ft — cool winters</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Small rural cemetery</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Small Community Cemetery in the Foothills</h2>
            <p>Central Cemetery serves the unincorporated community of Central, which sits along State Route 18 between St. George and Enterprise. The town began as a pioneer waystation and small ranching outpost. Today it hosts a small residential community plus second-home owners drawn to the cool summer climate at the base of the Pine Valley Mountains. The cemetery is small and quiet, with community stewardship handling arrangements.</p>
            <p>Upright monuments permitted. Concrete borders required. Foundation depth reflects the local frost line, which is deeper than St. George\'s.</p>
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
            <h2>Central and the Pine Valley Foothills</h2>
            <p>Central grew up as a pioneer waystation between St. George and the reservoir farming communities to the west. It has never incorporated as a city. The community is small enough that residents recognize each other by pickup truck, and cemetery arrangements have historically gone through informal community stewardship. The nearby Pine Valley community (higher elevation, cooler still) shares similar rural character.</p>
            <p>The setting matters for monument design: high-desert scrubland with mountain backdrops. Bronze markers, dakota mahogany, and jet black granite all read well against the sagebrush landscape.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Central Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Central</h3>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Central Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Concrete Border', value: 'Required — poured to accommodate local frost line.' },
  { label: 'Coordination', value: 'Small unincorporated community — through Washington County or stewards.' },
  { label: 'Elevation', value: '~5,200 ft — cool-winter climate.' },
  { label: 'Installation Season', value: 'March–November preferred for concrete pours.' },
  { label: 'Approval Required', value: 'Verify with county before larger monuments.' },
  { label: 'Plot Availability', value: 'Contact Washington County recorder.' },
  { label: 'Setting Coordination', value: 'Direct with community stewards.' },
];

const decorationRules = [
  'Flowers must be secured given wind exposure.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor subject to freeze damage.',
  'Community stewards remove items obstructing access.',
  'Historic pioneer stones should not be touched or cleaned.',
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
];

const steps = [
  { title: 'Confirm the plot', body: 'We coordinate with community stewards or Washington County recorder.' },
  { title: 'Verify local rules', body: 'Direct communication given the small-community structure.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Installation March–November preferred for concrete.' },
  { title: 'Setting', body: 'Deeper frost-line foundation, monument set with community coordination, first cleaning included.' },
];

const faqs = [
  { q: 'Where is Central, Utah?', a: 'On State Route 18 in western Washington County, between St. George and Enterprise. Small unincorporated community.' },
  { q: 'What\'s the elevation?', a: 'Roughly 5,200 feet — cool-winter climate with snow possible. Foundation depths reflect this.' },
  { q: 'Is Central the same as Pine Valley?', a: 'They\'re neighboring foothill communities but not the same. Pine Valley sits higher in the mountains. Both are unincorporated.' },
  { q: 'Can I visit the cemetery?', a: 'Yes — the cemetery is open to visitors. Small and quiet.' },
];

const related = [
  { label: 'Enterprise Cemetery', href: '/cemeteries/enterprise-cemetery' },
  { label: 'New Harmony Cemetery', href: '/cemeteries/new-harmony-cemetery' },
  { label: 'Gunlock Cemetery', href: '/cemeteries/gunlock-cemetery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Enterprise Service Area', href: '/service-areas/enterprise' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
