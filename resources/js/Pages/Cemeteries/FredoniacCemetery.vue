<template>
  <AppLayout>
    <Head>
      <title>Fredonia Cemetery — Arizona Strip Cross-Border Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Fredonia Cemetery on the Arizona side of the Kanab-Fredonia twin-town border — Arizona Strip pioneer heritage, cross-border cemetery guidance." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/fredonia-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Fredonia Cemetery · Fredonia, Arizona · Coconino County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Fredonia Cemetery — The Arizona Side of the Twin-Town Border</h1>
        <p class="text-white/70 text-lg max-w-3xl">Fredonia sits directly across the Utah state line from Kanab — one of the most unusual twin-town borders in the American West. Its cemetery serves Arizona Strip pioneer families and the polygamy-era history of the region.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Town</p><p class="text-sm text-white mt-1">Fredonia, AZ 86022</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">State</p><p class="text-sm text-white mt-1">Arizona — cross-border service</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~4,700 ft — mild winters</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Character</p><p class="text-sm text-white mt-1">Small pioneer-era cemetery</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A Cross-Border Cemetery</h2>
            <p>Fredonia is a small town in Coconino County, Arizona — one of the "Arizona Strip" communities isolated north of the Colorado River from the rest of Arizona. Fredonia and Kanab share a functional metro area straddling the state line; residents cross the border daily. The cemetery serves Fredonia proper and the surrounding Arizona Strip ranching country.</p>
            <p>Coordination with an Arizona cemetery has a few procedural quirks — Arizona cemetery boards operate under different state statutes than Utah. We handle the cross-border coordination as part of every quote.</p>
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
            <h2>History of Fredonia</h2>
            <p>Fredonia was founded in the 1880s as a refuge community for LDS families during the federal anti-polygamy prosecutions. The Arizona Strip\'s remote geography — separated from law enforcement by the Colorado River and mostly inaccessible from mainland Arizona — made it a haven. The name "Fredonia" derives from a combination of "free" and "doña" and reflects the settlers\' aspirations. As federal enforcement eased, Fredonia developed into a small ranching community. Today it functions as the Arizona half of the Kanab-Fredonia metro area, with a population of a few hundred and cross-border economic ties to Kanab.</p>
            <p>Search for people buried at Fredonia Cemetery on <a href="https://memorialmapper.com/cemetery/163/fredonia-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Fredonia Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Fredonia</h3>
            <p class="text-white/70 text-sm mb-5">Cross-border coordination handled at no extra charge.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Fredonia Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Coordination', value: 'Small Arizona town — through the town office.' },
  { label: 'State', value: 'Arizona (Coconino County) — different statutes from Utah.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Elevation', value: '~4,700 ft — mild winters, year-round install viable.' },
  { label: 'Historic Sensitivity', value: '1880s pioneer stones — design context matters.' },
  { label: 'Setting Coordination', value: 'Town office coordinates.' },
];

const decorationRules = [
  'Flowers must be secured.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Solar lights and hanging décor subject to town office approval.',
  'Wind-vulnerable items should be avoided.',
  'Items obstructing mowing removed without notice.',
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
  { title: 'Confirm the plot', body: 'We coordinate with the Fredonia town office to verify plot records.' },
  { title: 'Cross-border rules verified', body: 'Arizona statutes differ from Utah. We check current town rules before quoting.' },
  { title: 'Design layout', body: 'Digital layout shows exact dimensions and engraving.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Cross-border freight handled at no extra charge.' },
  { title: 'Setting', body: 'Concrete apron, monument set with town office coordination.' },
];

const faqs = [
  { q: 'Fredonia is in Arizona — do you serve it?', a: 'Yes. Fredonia and Kanab function as a single metro area across the state line. We handle Fredonia installations as part of our regular Southern Utah service area.' },
  { q: 'Do Arizona rules differ from Utah?', a: 'Yes — cemetery statutes differ, though the practical monument process is similar. We handle the cross-border coordination.' },
  { q: 'What\'s the Arizona Strip?', a: 'The part of Arizona north of the Colorado River — physically separated from the rest of the state. Fredonia is on the Utah-Arizona border.' },
  { q: 'Any extra fees for cross-border delivery?', a: 'No. Freight to Fredonia is included in our quoted price the same as any Southern Utah or Kane County cemetery.' },
];

const related = [
  { label: 'Kanab City Cemetery', href: '/cemeteries/kanab-city-cemetery' },
  { label: 'Orderville Cemetery', href: '/cemeteries/orderville-cemetery' },
  { label: 'Fredonia Service Area', href: '/service-areas/fredonia' },
  { label: 'Big Water Cemetery', href: '/cemeteries/big-water-cemetery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
