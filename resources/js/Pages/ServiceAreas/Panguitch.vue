<template>
  <AppLayout>
    <Head>
      <title>Headstones for Panguitch, Utah — Bryce Canyon Gateway | St. George Memorials</title>
      <meta name="description" content="Custom headstones for Panguitch, Utah families — the Garfield County seat and gateway to Bryce Canyon National Park at 6,700 feet elevation. Deep-foundation engineering for extreme freeze-thaw and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/panguitch" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Garfield County · Service Area · 145 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Headstones for Panguitch — Bryce Canyon Gateway</h1>
        <p class="text-white/70 text-lg max-w-3xl">Panguitch sits at nearly 6,700 feet, the seat of Garfield County and the gateway to Bryce Canyon National Park. It has one of the highest cemetery elevations in our service area — which means the deepest foundations, the narrowest install window, and the most careful concrete-pour scheduling in our practice.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Garfield (seat)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p>
            <p class="text-sm text-white mt-1">~6,700 ft</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~2 hours 20 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Bryce Canyon gateway, Quilt Walk</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The High-Elevation Seat of Garfield County</h2>
            <p>Panguitch was founded in 1864 by pioneers pushed into the Upper Sevier Valley by earlier settlement in the Beaver and Iron County corridors. The town's name comes from a Paiute word for "big fish," a reference to the trout in Panguitch Lake. The famous "Quilt Walk" of March 1864 — when starving settlers walked to Parowan on quilts spread across the snow to keep from sinking — is central to the town's founding story and is commemorated each year at the Panguitch Quilt Walk Festival.</p>
            <p>Panguitch Cemetery sits above the town at high elevation. The stones there tell a story of endurance — pioneer families who survived brutal winters, ranching generations who built the local economy, and modern residents who chose to stay in one of Utah's most remote and beautiful high-desert towns.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Panguitch</h2>
            <p class="text-granite text-sm mb-6">The city cemetery plus Garfield County outlying cemeteries.</p>
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
            <h2>Panguitch City Cemetery — Rules Snapshot</h2>
            <p>Panguitch City Cemetery is administered by the City of Panguitch. At ~6,700 feet, this is the deepest-foundation and narrowest-install-window cemetery in our regular service area. Winters bring hard freezes and heavy snow. Concrete pours are impossible from roughly November through mid-March; setting existing monuments on cured foundations is still possible in favorable weather. We plan every Panguitch project's timeline around these constraints from day one.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Ranching, Pioneer Endurance, and Design</h2>
            <p>Panguitch families sometimes reference the town's ranching heritage or the Quilt Walk in memorial design — a mountain silhouette, a stylized quilt pattern, or a wagon-and-horses motif. The town's practical, endurance-oriented character often shows in headstone choices: durable dark granite, plain lettering, and readable proportion over decorative excess.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Panguitch</h2>
            <p class="text-granite text-sm mb-6">Practical, durable designs suited to hard winters and ranching heritage.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Panguitch</h2>
            <p>Panguitch is 2 hours 20 minutes east of our St. George shop via I-15 and US-89. Freight cost is significant. We consolidate Panguitch with Tropic, Hatch, and other Garfield County installations to reduce per-monument cost. Lead time is 14–24 weeks and can extend longer if the foundation-pour must wait through winter.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Panguitch families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Panguitch`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Panguitch</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Panguitch Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Deepest-foundation engineering in our service area, with careful winter scheduling for the 6,700-foot elevation.</p>
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
  { name: 'Panguitch City Cemetery', note: 'Highest-elevation cemetery in our service area', href: '/cemeteries/panguitch-city-cemetery' },
  { name: 'Hatch Town Cemetery', note: '20 min south, small pioneer', href: '/cemeteries/hatch-town-cemetery' },
  { name: 'Tropic City Cemetery', note: '25 min east, Bryce Canyon country', href: '/cemeteries/tropic-city-cemetery' },
  { name: 'Escalante Cemetery', note: '80 min east, Grand Staircase gateway', href: '/cemeteries/escalante-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
  { name: 'Headstone Restoration', price: 'Assessment free', href: '/headstones/restoration' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
];

const faqs = [
  {
    q: 'Why is a Panguitch installation so much longer than St. George?',
    a: 'Panguitch sits at ~6,700 feet with a real mountain winter. Foundations must be dug deeper for freeze-thaw stability, and concrete cannot be poured during subfreezing weeks. Lead time is 14–24 weeks and can extend through winter delays.',
  },
  {
    q: 'Can I install a monument at Panguitch in December?',
    a: 'Setting an existing monument on an already-cured foundation, sometimes yes if weather cooperates. Pouring a new foundation, no — we schedule those for the shoulder seasons (April-May and September-October) and summer.',
  },
  {
    q: 'What is the Quilt Walk?',
    a: 'A March 1864 event when starving Panguitch settlers walked to Parowan across the mountains, spreading quilts on the snow to keep from sinking. The town commemorates it each year at the Quilt Walk Festival. Some Panguitch families reference it in memorial design.',
  },
  {
    q: 'Do you serve Bryce Canyon City?',
    a: 'Bryce Canyon City is a small town at the entrance to the national park. We serve it through the Tropic and Panguitch corridor. Contact us for specifics.',
  },
];

const related = [
  { label: 'Panguitch Cemetery Guide', href: '/cemeteries/panguitch-city-cemetery' },
  { label: 'Tropic Service Area', href: '/service-areas/tropic' },
  { label: 'Hatch Cemetery Guide', href: '/cemeteries/hatch-town-cemetery' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Buying Guide — Southern Utah', href: '/resources/buying-guide' },
  { label: 'All Garfield County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-2.jpg',
  '/images/products/upright-headstones-3.jpg',
  '/images/products/flat-headstone-1.jpg',
  '/images/products/slant-headstone-1.jpg',
  '/images/products/bronze-headstone-1.jpg',
  '/images/products/bevel-headstone-1.jpg',
];
</script>
