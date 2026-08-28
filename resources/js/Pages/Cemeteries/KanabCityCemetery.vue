<template>
  <AppLayout>
    <Head>
      <title>Kanab City Cemetery — Little Hollywood & Kane County Seat Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Kanab City Cemetery in Kane County — pioneer heritage, Jacob Hamblin monument connection, Little Hollywood filming legacy. Rules, sections, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/kanab-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Kanab City Cemetery · Kanab · Kane County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Kanab City Cemetery — Kane County Seat Cemetery Guide</h1>
        <p class="text-white/70 text-lg max-w-3xl">Kanab — the Kane County seat and "Little Hollywood" of the American West — holds a distinctive cemetery. Its pioneer families settled the town in the 1870s under Jacob Hamblin\'s guidance, and generations of Kanab families have since worked the ranches, ran the small tourism businesses, and staffed the film shoots that made the town famous.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Kanab, UT 84741</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">County</p><p class="text-sm text-white mt-1">Kane County seat</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1870s pioneer era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~4,900 ft — mild winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Kane County Seat, Little Hollywood, Pioneer Cemetery</h2>
            <p>Kanab City Cemetery serves the county seat of Kane County — a small city best known nationally for the more than 100 Western films shot in the surrounding red-rock landscape from the 1920s through the 1980s. Locally the town is defined by its pioneer heritage, its position as a gateway between Zion, Bryce Canyon, and Grand Canyon national parks, and its multi-generational ranching families.</p>
            <p>The cemetery holds pioneer settlers, ranching families, filmmakers and film-industry workers, and (in the modern era) the tourism-industry families who built Kanab\'s hospitality economy. Upright monuments permitted throughout most sections; concrete borders required.</p>
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
            <h2>History of Kanab</h2>
            <p>Kanab was founded in the early 1870s under Jacob Hamblin\'s guidance as an outpost for continued exploration and diplomacy with Native American nations of the Arizona Strip. The town became the county seat when Kane County was formed. Its long stretch of open desert and dramatic sandstone formations attracted Hollywood beginning in the 1920s, and the town earned "Little Hollywood" as a nickname during the mid-20th century when Western films dominated the American box office.</p>
            <p>A larger-than-life bronze sculpture of Jacob Hamblin and his horse — commissioned by his descendants — stands in downtown Kanab. Many of Hamblin\'s extended-family descendants and other pioneer families are buried in Kanab City Cemetery.</p>
            <p>Search for people buried at Kanab City Cemetery on <a href="https://memorialmapper.com/cemetery/258/kanab-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Kanab</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Kanab City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Kanab</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Kanab</h3>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Kanab City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted in most sections.' },
  { label: 'Concrete Border', value: 'Required around every monument.' },
  { label: 'Installation Notice', value: '24 hours minimum to Kanab city clerk.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Elevation', value: '~4,900 ft — mild winters, year-round install viable.' },
  { label: 'Historic Sensitivity', value: 'Older sections carry 1870s pioneer stones.' },
  { label: 'Plot Availability', value: 'Contact Kanab city clerk for current availability.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'Wind-vulnerable items should be avoided given open exposure.',
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
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  { title: 'Confirm the section', body: 'We verify plot location with the Kanab city clerk before quoting.' },
  { title: 'Rules verified', body: '24-hour notice and current dimensions confirmed before production.' },
  { title: 'Design layout', body: 'Digital layout shows exact dimensions and engraving. For pioneer plots, neighboring-stone context reviewed.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Year-round installation given mild winters.' },
  { title: 'Setting', body: 'Concrete apron poured, setting coordinated with city clerk, first cleaning at six months included.' },
];

const faqs = [
  { q: 'Where is Kanab?', a: 'In Kane County, southern Utah — near the Arizona border, about 80 miles east of St. George. The Kane County seat.' },
  { q: 'Why "Little Hollywood"?', a: 'More than 100 Western films were shot in and around Kanab from the 1920s through the 1980s. The town\'s red-rock scenery served as the American West on film.' },
  { q: 'Where\'s the Jacob Hamblin statue?', a: 'In downtown Kanab. A larger-than-life bronze sculpture commissioned by Hamblin\'s descendants. Many Hamblin extended family members are buried in Kanab City Cemetery.' },
  { q: 'Can I have a Western-heritage motif engraved?', a: 'Yes. Kanab families sometimes commission Western landscape motifs, mountain-range silhouettes, or brand-inspired designs reflecting the town\'s ranching and film heritage.' },
];

const related = [
  { label: 'Fredonia Cemetery', href: '/cemeteries/fredonia-cemetery' },
  { label: 'Orderville Cemetery', href: '/cemeteries/orderville-cemetery' },
  { label: 'Big Water Cemetery', href: '/cemeteries/big-water-cemetery' },
  { label: 'Kanab Service Area', href: '/service-areas/kanab' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
