<template>
  <AppLayout>
    <Head>
      <title>Leeds Cemetery — Silver Reef Ghost Town Neighbor & Pioneer Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Leeds Cemetery in Washington County — 1867 pioneer cemetery, Silver Reef mining boom neighbor, strict monument dimensions, and headstone design guidance for a historic small-town cemetery." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/leeds-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Leeds Cemetery · Leeds · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Leeds Cemetery — 1867 Pioneer Ground Beside Silver Reef</h1>
        <p class="text-white/70 text-lg max-w-3xl">Leeds sat quietly through the 1870s silver rush that made neighboring Silver Reef one of the largest towns in Southern Utah — and quietly outlived it. Its cemetery holds the Mormon agricultural families who kept the community alive through boom and bust. Strict single-marker size limits (18" × 36") shape monument design here.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Town</p>
            <p class="text-sm text-white mt-1">Leeds, UT 84746</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">Leeds Town Hall</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Est.</p>
            <p class="text-sm text-white mt-1">1867</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Single Marker Max</p>
            <p class="text-sm text-white mt-1">18" wide × 36" long</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Small-Town Cemetery Beside a Ghost Town</h2>
            <p>Leeds Cemetery is a rare thing: a working pioneer cemetery that predates and outlived the boom town beside it. Silver Reef — a mile up the highway — was in the 1870s one of Southern Utah's largest communities, drawing miners, gamblers, saloonkeepers, and prostitutes to a silver deposit found in sandstone (a geological rarity). Silver Reef had its own Catholic and Protestant cemeteries. When the silver played out in the 1880s, Silver Reef collapsed. Leeds — the quieter Mormon agricultural community that had fed the miners — kept going.</p>

            <h3>Strict Size Rules</h3>
            <p>Leeds has some of the tightest single-marker dimension rules in Southern Utah: <strong>18 inches wide by 36 inches long maximum</strong> for single headstones. Larger monuments require special approval from Town Hall. If you commission a monument that exceeds this without prior approval, the town won\'t install it. Every quote we produce for Leeds is checked against these dimensions.</p>

            <h3>Height Maximum</h3>
            <p>Uprights are permitted with a <strong>42 inch maximum height</strong> from grade including the base. Concrete borders required. No gravel, decorative rock, or fences allowed.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules on file. We verify with Leeds Town Hall before every quote.</p>
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
            <h2>History of Leeds Cemetery</h2>
            <p>Leeds was settled in 1867 by LDS families as an agricultural outpost supplying the Cotton Mission from the wetter benches at the eastern edge of the Pine Valley Mountains. Within a decade, silver was found in the Harrisburg Formation sandstone just up the highway. By 1877, Silver Reef exploded from empty desert into a town of nearly 2,000 miners, complete with a Wells Fargo office, a Catholic mission, a newspaper, and a red-light district. Leeds farmers and orchard growers supplied the boom town with food.</p>
            <p>The silver played out by 1884. Silver Reef emptied within a decade. Leeds, quieter and never dependent on the mining economy, absorbed some families who chose to stay in the region and kept going. Today Silver Reef is a well-preserved ghost town with a museum. Its Catholic, Chinese, and Protestant cemeteries — separate historical sites — are not the same as Leeds Cemetery, which continued as the Mormon community\'s municipal burial ground and still does.</p>
            <p>Search for people buried at Leeds Cemetery on <a href="https://memorialmapper.com/cemetery/290/leeds-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Leeds</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Leeds Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Leeds</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Leeds</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Leeds</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Every quote checked against Leeds\' strict 18"×36" dimension rules.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Leeds Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted — 42 inch maximum height from grade.' },
  { label: 'Single Marker Max Size', value: '18" wide × 36" long — strict.' },
  { label: 'Concrete Border', value: 'Required around every monument.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to Leeds Town Hall.' },
  { label: 'Approval Required', value: 'Yes — larger-than-standard monuments require Town Hall approval.' },
  { label: 'Gravel / Rock / Fences', value: 'Not permitted on plots.' },
  { label: 'Plot Availability', value: 'Contact Leeds Town Hall for current section availability.' },
  { label: 'Small-Town Coordination', value: 'Town Hall handles cemetery arrangements directly.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are prohibited.',
  'Fences, gravel, rock borders, and any freestanding structures are prohibited on plots.',
  'Solar lights and hanging décor require Town Hall approval.',
  'Wind-vulnerable items should be avoided given the ridge exposure.',
  'Anything obstructing mowing is removed by staff without notice.',
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
  { name: 'Flat & Flush Markers (up to 18×36)', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Bevel Markers', price: 'From $650', href: '/headstones/bevel-markers' },
  { name: 'Slant Markers', price: 'From $700', href: '/headstones/slant-markers' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Upright Granite Headstones (up to 42" high)', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Headstones', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Sandstone Restoration', price: 'Quoted', href: '/headstones/restoration' },
];

const steps = [
  { title: 'Confirm dimensions early', body: 'Leeds\' 18×36 rule is strict. Every design starts with confirming your intended dimensions against the town\'s current limits.' },
  { title: 'We contact Leeds Town Hall', body: 'The 24-hour notice, height maximum, and any special approvals for oversized monuments get verified before quoting.' },
  { title: 'Design layout', body: 'Digital layout shows exact dimensions and engraving. If you\'ve requested a larger-than-standard monument, we include Town Hall approval status.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time from proof approval is 8–16 weeks. Year-round installation.' },
  { title: 'Foundation and setting', body: 'Concrete apron poured, setting coordinated with Town Hall staff, first cleaning included at six months.' },
];

const faqs = [
  { q: 'Where is Leeds?', a: 'On I-15 between St. George and Cedar City, about 15 minutes north of St. George. Population is around 900.' },
  { q: 'What are the size restrictions?', a: 'Single markers max out at 18 inches wide by 36 inches long. Uprights max at 42 inches from grade including the base. Anything larger requires special Town Hall approval before order.' },
  { q: 'What\'s the difference between Leeds Cemetery and Silver Reef cemeteries?', a: 'Leeds Cemetery is the working Mormon municipal cemetery. Silver Reef\'s Catholic, Chinese, and Protestant cemeteries are historical ghost-town sites — separate places, not open for active burials.' },
  { q: 'Can I install a bench at Leeds?', a: 'Bench memorials require Town Hall approval given their footprint. We include the approval process in our quote if you request one.' },
  { q: 'Is the town office actually called Town Hall?', a: 'Yes — Leeds is small enough that it operates from a single Town Hall rather than separate departments. Cemetery arrangements go through the same office.' },
];

const related = [
  { label: 'Hurricane City Cemetery', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'Toquerville Cemetery', href: '/cemeteries/toquerville-cemetery' },
  { label: 'Washington City Cemetery', href: '/cemeteries/washington-city-cemetery' },
  { label: 'Sandstone Restoration', href: '/headstones/restoration' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
