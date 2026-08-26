<template>
  <AppLayout>
    <Head>
      <title>Panguitch City Cemetery — Garfield County Seat & Quilt Walk Heritage Cemetery Guide | St. George Memorials</title>
      <meta name="description" content="Panguitch City Cemetery in Garfield County — 1864 pioneer settlement, famous Quilt Walk history, Bryce Canyon gateway. High-elevation cemetery rules and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/panguitch-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Panguitch City Cemetery · Panguitch · Garfield County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Panguitch City Cemetery — Garfield County Seat, Bryce Canyon Gateway</h1>
        <p class="text-white/70 text-lg max-w-3xl">Panguitch is Garfield County\'s seat and one of Southern Utah\'s highest-elevation municipal cemeteries at ~6,600 ft. Its 1864 pioneer founding produced the legendary "Panguitch Quilt Walk" — an act of survival that saved the settlement in its first winter. The cemetery holds those founders and their descendants.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">City</p><p class="text-sm text-white mt-1">Panguitch, UT 84759</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Panguitch</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~6,600 ft — deep winter</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1864</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A High-Elevation Cemetery With Deep History</h2>
            <p>Panguitch City Cemetery serves the county seat of Garfield County — a small city that serves as the gateway to Bryce Canyon National Park. Its elevation (~6,600 ft) creates one of the harshest winter environments in our service area, and installation planning reflects that. Upright monuments permitted; concrete borders required to significant depth.</p>
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
            <h2>History of Panguitch and the Quilt Walk</h2>
            <p>Panguitch was founded in 1864 by LDS pioneer families at high elevation on the East Fork of the Sevier River. The town\'s founding winter was brutal — the settlement nearly starved. In the spring of 1864, seven pioneer men from Panguitch walked over 40 miles across deep snow to Parowan for supplies. When they realized they were postholing through the snow, they laid down quilts to walk across, retrieved them, and moved forward. They saved the settlement and returned with grain and provisions. The event became known as the "Panguitch Quilt Walk" and is commemorated annually with a Quilt Walk Festival.</p>
            <p>The cemetery holds these founding families and their descendants. Panguitch has retained its small-town character even as Bryce Canyon tourism has brought regular visitors through.</p>
            <p>Search for people buried at Panguitch City Cemetery on <a href="https://memorialmapper.com/cemetery/398/panguitch-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Panguitch City Cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Panguitch</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Winter installation planning included.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Panguitch City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Concrete Border', value: 'Required — deep foundation for ~6,600 ft frost line.' },
  { label: 'Installation Notice', value: '24 hours to city clerk.' },
  { label: 'Installation Season', value: 'April–October for concrete pours.' },
  { label: 'Approval Required', value: 'Yes.' },
  { label: 'Historic Sensitivity', value: '1860s pioneer stones — Quilt Walk families present.' },
  { label: 'Plot Availability', value: 'Contact Panguitch city clerk.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured given exposure.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Winter décor subject to severe freeze damage at Panguitch elevation.',
  'Solar lights and wind chimes subject to city clerk approval.',
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
  { title: 'Confirm the plot', body: 'Panguitch city clerk maintains plot records.' },
  { title: 'Rules verified', body: '24-hour notice, current rules confirmed.' },
  { title: 'Design proof', body: 'For pioneer plots — including Quilt Walk descendant families — we include neighboring-stone context.' },
  { title: 'Manufacturing', body: 'Typical lead time 8–16 weeks. April–October preferred for pours.' },
  { title: 'Setting', body: 'Deep frost-line foundation, setting coordinated with city clerk.' },
];

const faqs = [
  { q: 'What is the Panguitch Quilt Walk?', a: 'A commemorative event marking the seven pioneer men who walked 40+ miles to Parowan in the spring of 1864 to save the starving Panguitch settlement — laying quilts on deep snow to walk across it. The town holds a Quilt Walk Festival annually.' },
  { q: 'Are Quilt Walk pioneers buried here?', a: 'Some are. Panguitch City Cemetery holds several of the founding families whose ancestors participated in the walk.' },
  { q: 'How harsh is winter?', a: 'Panguitch is at ~6,600 ft. Real winter with substantial snow accumulation. Installation planning reflects the April–October pour window.' },
  { q: 'Is Panguitch near Bryce Canyon?', a: 'Yes. Panguitch is one of the primary gateway towns to Bryce Canyon National Park, about 25 minutes from the park entrance.' },
];

const related = [
  { label: 'Tropic City Cemetery', href: '/cemeteries/tropic-city-cemetery' },
  { label: 'Hatch Town Cemetery', href: '/cemeteries/hatch-town-cemetery' },
  { label: 'Escalante Cemetery', href: '/cemeteries/escalante-cemetery' },
  { label: 'Panguitch Service Area', href: '/service-areas/panguitch' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Cemeteries', href: '/cemeteries' },
];
</script>
