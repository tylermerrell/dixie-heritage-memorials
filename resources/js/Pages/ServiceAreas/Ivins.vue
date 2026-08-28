<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Ivins, Utah — Red Mountain Country | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Ivins, Utah families — served by Ivins City Cemetery and the Shivwits Cemetery, framed by Red Mountain and Snow Canyon. HOA-friendly pet memorial options, retirement community pre-planning, and delivery from our nearby St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/ivins" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Washington County · Service Area · 15 minutes west</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Ivins — Red Mountain Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Ivins is framed by Red Mountain, backed by Snow Canyon, and increasingly defined by the master-planned communities that made it one of Southern Utah's most sought-after retirement destinations. We design headstones for the Ivins City Cemetery, the nearby Shivwits Cemetery, and the retirement-community pet-memorial market that no other Southern Utah monument company treats seriously.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Washington</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Character</p>
            <p class="text-sm text-white mt-1">Retirement destination</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~15 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Backdrop</p>
            <p class="text-sm text-white mt-1">Red Mountain, Snow Canyon</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Retirement Destination of Southern Utah</h2>
            <p>Ivins has been transformed over the last two decades from a small agricultural town into one of the highest-desirability retirement destinations in Utah. Kayenta, Entrada, and Padre Canyon developments brought in a population of active retirees who chose the town specifically for its Red Mountain backdrop, proximity to Snow Canyon State Park, and quieter character compared to St. George itself. That demographic shapes our work here more than in any other city in the county.</p>
            <p>The Ivins market skews toward pre-need planning — couples who want their headstone designed and paid for before either has passed, so their children never face the decision. It also skews toward companion (double) monuments and toward pet memorials for the many retirees who consider their pets close family. Snow Canyon-inspired design elements (petroglyph-influenced motifs, red-rock horizon silhouettes, cottonwood tree references) are more common on Ivins headstones than anywhere else in Southern Utah.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Ivins</h2>
            <p class="text-granite text-sm mb-6">Ivins is anchored by its city cemetery, with the Shivwits Cemetery nearby serving the Paiute community.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="cem in cemeteries" :key="cem.href" :href="cem.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <div>
                  <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light block">{{ cem.name }}</span>
                  <span class="text-xs text-granite">{{ cem.note }}</span>
                </div>
                <svg class="w-4 h-4 text-bronze flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Ivins City Cemetery — Rules Snapshot</h2>
            <p>Ivins City Cemetery is located at 200 West 400 North and administered by the City of Ivins. It requires 48-hour advance notice to the city before installation, and every monument requires a 4-to-6-inch concrete border. The cemetery has both upright and flush sections; newer expansion areas are increasingly flush-only for maintenance uniformity. We verify your specific section's rules before quoting — full details on our <Link href="/cemeteries/ivins-city-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Ivins City Cemetery guide page</Link>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Pet Memorials in HOA-Regulated Retirement Communities</h2>
            <p>Kayenta, Sun River, and other master-planned communities in and near Ivins have HOA rules that prohibit visible outdoor pet grave markers on private property. That leaves families with a real problem when a beloved dog or cat passes: they want a permanent memorial, but a visible headstone in the yard is not allowed. We design <Link href="/headstones/pet-memorials" class="text-bronze font-medium underline hover:text-evergreen transition-colors">HOA-compliant pet memorials</Link> specifically for this market — planter-integrated markers, hidden garden stones, and interior memorial plaques. It is not a market Kenworthy or Utah Monument Company treats, and it is one of the ways we differentiate in Ivins.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Ivins</h2>
            <p class="text-granite text-sm mb-6">Ivins families gravitate toward companion designs, benches, and red-rock-inspired custom elements.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Ivins</h2>
            <p>Ivins is 15 minutes west of our St. George shop via Santa Clara Drive. We install year-round in the freeze-free zone that includes both cities. Typical lead time is 8–14 weeks from proof approval to set stone. Because so many Ivins families are pre-need planning rather than in acute grief, the design conversations tend to be longer and more considered — we build the timeline around that rather than rushing.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Ivins families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Ivins`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Ivins</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design an Ivins Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Pre-need planning welcomed. Red-rock landscape design elements are our specialty.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>
          <RelatedLinks :links="related" />
        </aside>

      </div>
    </section>

    <Teleport to="body">
      <div
        v-if="lightboxIndex !== null"
        class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
        @click.self="lightboxIndex = null"
      >
        <button class="absolute top-4 right-4 text-white/70 hover:text-white p-2" @click="lightboxIndex = null" aria-label="Close">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <button v-if="lightboxIndex > 0" class="absolute left-4 text-white/70 hover:text-white p-2" @click="lightboxIndex--" aria-label="Previous">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <img :src="gallery[lightboxIndex]" alt="Memorial style example" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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

const cemeteries = [
  { name: 'Ivins City Cemetery', note: '200 W 400 N — upright & flush sections', href: '/cemeteries/ivins-city-cemetery' },
  { name: 'Santa Clara City Cemetery', note: '5 min east, Swiss pioneer heritage', href: '/cemeteries/santa-clara-cemetery' },
  { name: 'St. George City Cemetery', note: '15 min east, historic downtown', href: '/cemeteries/st-george-city-cemetery' },
  { name: 'Gunlock Cemetery', note: '25 min north, small pioneer cemetery', href: '/cemeteries/gunlock-cemetery' },
];

const headstoneTypes = [
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
  { name: 'Pet Memorials (HOA-friendly)', price: 'From $300', href: '/headstones/pet-memorials' },
  { name: 'Unique / Custom Designs', price: 'Quoted per design', href: '/headstones/unique-options' },
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
];

const faqs = [
  {
    q: 'Can I put a pet grave marker in my Kayenta or Sun River yard?',
    a: 'Most HOAs in Ivins prohibit visible outdoor pet markers on private property. We design HOA-compliant alternatives — planter-integrated markers, hidden garden stones, and interior memorial plaques. Check your HOA rules first; we can help interpret them.',
  },
  {
    q: 'What is a companion monument and why is it common in Ivins?',
    a: 'A companion monument is a single stone designed for two people, typically a married couple, buried side by side. It is common in Ivins because pre-need planning is common here — retired couples often design their memorial together while both are living.',
  },
  {
    q: 'Can I incorporate a Snow Canyon or Red Mountain design element?',
    a: 'Yes. Red-rock horizon silhouettes, cottonwood tree motifs, and stylized landscape elements are all part of our custom design library. We avoid using actual Shivwits Paiute sacred imagery in any design out of respect for the community.',
  },
  {
    q: 'What is pre-need planning?',
    a: 'Designing and paying for a headstone before it is needed. It removes the decision burden from surviving family and locks in current pricing. Very common in Ivins given the demographic mix.',
  },
];

const related = [
  { label: 'Ivins Cemetery Guide', href: '/cemeteries/ivins-city-cemetery' },
  { label: 'Santa Clara Service Area', href: '/service-areas/santa-clara' },
  { label: 'Pet Memorials', href: '/headstones/pet-memorials' },
  { label: 'Bench Memorials', href: '/headstones/bench-memorials' },
  { label: 'Companion Headstones', href: '/headstones/companion-headstones' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-4.jpg',
  '/images/products/upright-headstones-5.jpg',
  '/images/products/flat-headstone-2.jpg',
  '/images/products/slant-headstone-2.jpg',
  '/images/products/bronze-headstone-3.jpg',
  '/images/products/bench-headstone.jpg',
];
</script>
