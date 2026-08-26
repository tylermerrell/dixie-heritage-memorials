<template>
  <AppLayout>
    <Head>
      <title>Cedar City Cemetery — Iron Mission Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Cedar City Cemetery — the 1851 Iron Mission burial ground and Iron County\'s largest municipal cemetery. Rules, historic sections, veterans, and Southern Utah University heritage context." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/cedar-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Cedar City Cemetery · Cedar City · Iron County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Cedar City Cemetery — Iron Mission Heritage & Modern Rules</h1>
        <p class="text-white/70 text-lg max-w-3xl">Cedar City Cemetery is Iron County\'s largest municipal cemetery and one of the oldest continuously used burial grounds in the state — founded in 1851 as part of Brigham Young\'s Iron Mission. It sits within a short drive of the new Southern Utah National Cemetery and the Cedar City Utah Temple.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Cedar City, UT 84720</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Cedar City</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Est.</p><p class="text-sm text-white mt-1">1851 — Iron Mission era</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,800 ft — real winters</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Iron Mission Legacy, Modern Municipal Cemetery</h2>
            <p>Cedar City Cemetery has been in continuous operation since 1851, ten years before the Cotton Mission arrived at St. George. Its historic sections hold the founding families of the Iron Mission — the coal miners and iron workers Brigham Young called south to establish the region\'s first industrial community. Modern sections have absorbed generations of Southern Utah University families, Utah Shakespeare Festival community members, and the growing suburban population of Iron County.</p>

            <h3>Sections and Layout</h3>
            <p>Cedar City Cemetery permits upright monuments in most historic and traditional sections, with height limits enforced. Newer expansions favor flush markers. The cemetery includes a dedicated veterans section that predates the September 2025 dedication of the <a href="/cemeteries/southern-utah-national-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Southern Utah National Cemetery</a> across town.</p>

            <h3>Foundation and Freeze Considerations</h3>
            <p>Cedar City sits at ~5,800 feet and gets real winter. Foundation depth is deeper than at any Washington County cemetery, and installation season effectively runs March through November for concrete apron pours. We plan accordingly.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
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
            <h2>History of Cedar City Cemetery</h2>
            <p>Cedar City was founded in 1851 as an iron-manufacturing community. Brigham Young dispatched Welsh, English, and Scottish immigrants — many with mining and iron-working experience — to smelt local iron ore into finished goods. The Iron Mission struggled economically (iron production ceased in 1858) but the community survived and pivoted to farming, ranching, and later to educational institutions. The Branch Normal School founded in 1897 eventually became Southern Utah University.</p>
            <p>The cemetery holds Iron Mission founding families, generations of SUU faculty and students who stayed, Utah Shakespeare Festival community members, and — in the modern era — a growing veteran presence tied to the region\'s military heritage. The Cedar City Utah Temple (dedicated 2017) has added a Latter-day Saint temple identity to the community that hadn\'t existed within the county for the previous 160 years.</p>
            <p>Search for people buried at Cedar City Cemetery on <a href="https://memorialmapper.com/cemetery/86/cedar-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Cedar City Utah Temple Engravings</h2>
            <p>Since the temple\'s 2017 dedication, engravings of the Cedar City Utah Temple silhouette have become common on Cedar City family monuments. Our design library includes the temple in tower-only and full-silhouette variants. Laser etching on jet black granite is the recommended pairing.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Cedar City</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Cedar City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Cedar City</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Cedar City</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Design proof before any payment.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Cedar City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Flush / Flat Markers', value: 'Required in newer expansion sections.' },
  { label: 'Concrete Border', value: 'Required — deeper foundation for Cedar City frost line.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred for concrete apron pours.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Veterans Section', value: 'Dedicated section; VA markers common.' },
  { label: 'Plot Availability', value: 'Contact city clerk for current section availability.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are not permitted.',
  'Freestanding fences or coping on plots are prohibited.',
  'Winter décor is subject to freeze damage; plan durability.',
  'Solar lights and hanging décor are subject to city clerk approval.',
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
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  { title: 'Confirm your section', body: 'Cedar City has both historic and modern sections with different rules. We verify with the city clerk.' },
  { title: 'We contact the city clerk', body: 'The 24-hour notice, current dimensions rules, and any special approvals confirmed before production.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving — including Cedar City Utah Temple silhouettes if you choose.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time 8–16 weeks. March–November installation window for concrete pours.' },
  { title: 'Foundation and setting', body: 'Deeper frost-line foundation, setting coordinated with city clerk, first cleaning included at six months.' },
];

const faqs = [
  { q: 'How old is Cedar City Cemetery?', a: 'The community was founded in 1851 as part of the Iron Mission — ten years before the Cotton Mission arrived at St. George. The cemetery has been in continuous use since the founding.' },
  { q: 'How is it different from the Southern Utah National Cemetery?', a: 'The National Cemetery (dedicated September 2025) is VA-operated and free for eligible veterans. Cedar City Cemetery is municipal and open to any Cedar City family. Many families with veteran loved ones use both.' },
  { q: 'Can I have a Cedar City Utah Temple engraving?', a: 'Yes. The 2017 temple has become a common engraving element on Cedar City monuments. We keep design references on hand.' },
  { q: 'What about winter installation?', a: 'Cedar City\'s elevation and real winter mean we prefer to pour concrete aprons March through November. Existing monuments can be set year-round if no new pour is required.' },
  { q: 'Are veterans buried at Cedar City?', a: 'Yes — Cedar City has a dedicated veterans section that has served Iron County families for decades. The Southern Utah National Cemetery is now nearby as an additional option.' },
];

const related = [
  { label: 'Southern Utah National Cemetery', href: '/cemeteries/southern-utah-national-cemetery' },
  { label: 'Enoch City Cemetery', href: '/cemeteries/enoch-city-cemetery' },
  { label: 'Parowan City Cemetery', href: '/cemeteries/parowan-city-cemetery' },
  { label: 'Cedar City Service Area', href: '/service-areas/cedar-city' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
