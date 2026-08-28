<template>
  <AppLayout>
    <Head>
      <title>Boulder Cemetery — America\'s Last Mail-by-Mule Community Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Boulder Cemetery in Garfield County — historic remote settlement, one of the last U.S. towns to receive mail by mule. High-elevation cemetery rules and headstone guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/boulder-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Boulder Cemetery · Boulder · Garfield County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Boulder Cemetery — Historic Remote Community</h1>
        <p class="text-white/70 text-lg max-w-3xl">Boulder — famously one of the last U.S. communities to receive mail by mule train (until 1940) — sits high on Boulder Mountain in Garfield County. Its small cemetery reflects a community that was among the most isolated in the American West well into the 20th century.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Community</p><p class="text-sm text-white mt-1">Boulder, UT 84716</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Setting</p><p class="text-sm text-white mt-1">Boulder Mountain</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~6,700 ft — deep winter</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Mail-by-Mule Until</p><p class="text-sm text-white mt-1">1940</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Cemetery of a Historic Isolated Community</h2>
            <p>Boulder Cemetery serves the tiny town of Boulder, one of the most historically remote communities in the American West. Boulder received its mail by mule train — carried over the Aquarius Plateau on trails only mules could navigate — until 1940, when a road was finally completed connecting the town to the outside world. Its cemetery preserves the pioneer families who chose that isolation and made lives in it. Upright monuments permitted; concrete borders required.</p>
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
            <h2>History of Boulder</h2>
            <p>Boulder was settled by LDS pioneer families in the 1880s and 1890s in a beautiful but severely isolated location on the Boulder Mountain plateau. Roads to Boulder were impossible to build for most of the town\'s early history. Mail — and most supplies — came in by mule train over trails that only mules could safely navigate, until a road was finally completed in 1940. Boulder retains its remote character today, and the cemetery holds four generations of the ranching and farming families who made lives at the edge of the accessible United States.</p>
            <p>Search for people buried at Boulder Cemetery on <a href="https://memorialmapper.com/cemetery/54/boulder-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Boulder Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Boulder</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Remote-location freight included.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Boulder Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Concrete Border', value: 'Required — deep foundation for ~6,700 ft frost line.' },
  { label: 'Coordination', value: 'Small town office or community stewards.' },
  { label: 'Installation Season', value: 'April–October for concrete pours.' },
  { label: 'Approval Required', value: 'Verify with town office.' },
  { label: 'Remote-Location Freight', value: 'Included in quoted price.' },
  { label: 'Plot Availability', value: 'Contact Boulder town office.' },
  { label: 'Setting Coordination', value: 'Community coordinates.' },
];

const decorationRules = [
  'Flowers must be secured given exposure.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures prohibited.',
  'Winter décor subject to severe freeze damage.',
  'Wind-vulnerable items should be avoided.',
  'Items obstructing mowing removed by community.',
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
];

const steps = [
  { title: 'Confirm the plot', body: 'We coordinate with Boulder town office or community stewards.' },
  { title: 'Rules verified', body: 'Small-community coordination.' },
  { title: 'Design layout', body: 'Digital layout before production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. Remote-location freight included.' },
  { title: 'Setting', body: 'Deep frost-line foundation, monument set with community coordination.' },
];

const faqs = [
  { q: 'Really mail by mule?', a: 'Yes. Boulder received its mail by mule train from Escalante until 1940, when a road was finally completed. It was one of the last places in the U.S. served that way.' },
  { q: 'Where is Boulder?', a: 'On Utah State Route 12 (Scenic Byway) in Garfield County, atop the Boulder Mountain plateau.' },
  { q: 'Is it accessible in winter?', a: 'Route 12 over Boulder Mountain closes to normal traffic in heavy winter conditions. We plan installation and freight around the accessible season.' },
];

const related = [
  { label: 'Escalante Cemetery', href: '/cemeteries/escalante-cemetery' },
  { label: 'Tropic City Cemetery', href: '/cemeteries/tropic-city-cemetery' },
  { label: 'Panguitch City Cemetery', href: '/cemeteries/panguitch-city-cemetery' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
