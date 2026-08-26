<template>
  <AppLayout>
    <Head>
      <title>Gunlock Cemetery — Frontier Pioneer Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Gunlock Cemetery in western Washington County — 1857 pioneer settlement, William 'Gunlock Bill' Hamblin heritage, small-town cemetery rules and headstone guidance." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/gunlock-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Gunlock Cemetery · Gunlock · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Gunlock Cemetery — 1857 Hamblin-Family Pioneer Ground</h1>
        <p class="text-white/70 text-lg max-w-3xl">Gunlock takes its name from William "Gunlock Bill" Hamblin — brother of Jacob Hamblin and a legendary Southern Utah gunsmith and frontiersman. The small cemetery holds four generations of the Hamblin extended family and the settlers who joined them along the Santa Clara River.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Community</p><p class="text-sm text-white mt-1">Gunlock, UT 84733</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Managed by</p><p class="text-sm text-white mt-1">Washington County</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Est.</p><p class="text-sm text-white mt-1">1857 settlement era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Small pioneer cemetery</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Frontier Cemetery on the Santa Clara</h2>
            <p>Gunlock Cemetery is a small unincorporated-community cemetery serving Gunlock proper and surrounding Santa Clara River drainage. It is not administered by a city — the community is unincorporated — so arrangements go through Washington County or the informal community stewardship that has kept the cemetery maintained since the 1860s.</p>
            <p>Upright monuments are permitted. Concrete borders required. Because of the small scale and community stewardship, coordination is direct — a phone call rather than a bureaucratic process.</p>
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
            <h2>History of Gunlock</h2>
            <p>William "Gunlock Bill" Hamblin — younger brother of the LDS "Peacemaker of the West" Jacob Hamblin — settled the Santa Clara River bench that bears his name in 1857. He earned the "Gunlock" nickname as a young man for his mechanical aptitude with firearms; he was Southern Utah's go-to gunsmith through the 1850s and 1860s. The town he founded stayed small and never grew beyond a few dozen ranching and farming families, but its cemetery reflects that frontier pioneer identity.</p>
            <p>The Gunlock Reservoir was built downstream in the 20th century, drowning some of the original settlement footprint. The cemetery sits on higher ground and remains active.</p>
            <p>Search for people buried at Gunlock Cemetery on <a href="https://memorialmapper.com/cemetery/195/gunlock-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Gunlock Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Gunlock</h2>
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
                <div>
                  <p class="font-semibold text-evergreen mb-1">{{ step.title }}</p>
                  <p class="text-sm text-granite leading-relaxed">{{ step.body }}</p>
                </div>
              </li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">FAQ</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Gunlock</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Small-community coordination directly.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Gunlock Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted throughout the cemetery.' },
  { label: 'Concrete Border', value: 'Required around every monument.' },
  { label: 'Coordination', value: 'Unincorporated community — arrangements through Washington County or community stewardship.' },
  { label: 'Approval', value: 'Verify with county before larger monuments.' },
  { label: 'Historic Sections', value: 'Design should respect neighboring pioneer stones.' },
  { label: 'Plot Availability', value: 'Verify with Washington County recorder.' },
  { label: 'Installation Notice', value: 'Advance notice recommended given small-community coordination.' },
  { label: 'Setting Coordination', value: 'Direct with community steward or county.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its border.',
  'Glass containers are not permitted.',
  'Fences or freestanding structures on plots are prohibited.',
  'Wind-vulnerable décor should be avoided given canyon exposure.',
  'Community stewards remove items obstructing access.',
  'Historic pioneer stones are not to be touched.',
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
  { title: 'Confirm the plot', body: 'Since Gunlock is unincorporated, we confirm plot records with Washington County or community stewards.' },
  { title: 'We contact the county', body: 'Verify any coordination requirements before design.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving. Written approval starts production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Year-round installation window.' },
  { title: 'Setting', body: 'Concrete apron poured, monument set with direct community coordination.' },
];

const faqs = [
  { q: 'Who was Gunlock Bill Hamblin?', a: 'William Hamblin — brother of Jacob Hamblin the "Peacemaker of the West" — was a legendary Southern Utah gunsmith and pioneer who settled the town that bears his name in 1857.' },
  { q: 'Is Gunlock a real town?', a: 'It\'s an unincorporated community, roughly 30 minutes northwest of St. George on the Santa Clara River. Small — a few dozen ranching families historically, more residents today.' },
  { q: 'How do I coordinate a burial here?', a: 'Because Gunlock is unincorporated, arrangements go through Washington County or through the community stewardship that has kept the cemetery active. We handle the coordination.' },
  { q: 'Are Jacob Hamblin descendants buried here?', a: 'Some — though Jacob himself is buried in Alpine, Arizona. Gunlock holds his brother William\'s family and descendants.' },
];

const related = [
  { label: 'Santa Clara Cemetery', href: '/cemeteries/santa-clara-cemetery' },
  { label: 'Ivins City Cemetery', href: '/cemeteries/ivins-city-cemetery' },
  { label: 'Enterprise Cemetery', href: '/cemeteries/enterprise-cemetery' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
