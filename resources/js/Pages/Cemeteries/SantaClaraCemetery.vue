<template>
  <AppLayout>
    <Head>
      <title>Santa Clara City Cemetery — Swiss Pioneer Heritage & Headstone Guide | St. George Memorials</title>
      <meta name="description" content="Santa Clara City Cemetery in Washington County — Swiss pioneer heritage, Jacob Hamblin era history, monument rules, and headstone design for one of Southern Utah's most historically distinctive burial grounds." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/santa-clara-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Santa Clara City Cemetery · Santa Clara · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Santa Clara City Cemetery — Rules, Sections & Swiss Pioneer History</h1>
        <p class="text-white/70 text-lg max-w-3xl">Santa Clara City Cemetery holds four generations of Swiss immigrant families who settled the Santa Clara Creek in the 1860s and the Jacob Hamblin era before them. Its layout and rules reflect both the town's small-town pace and the growing metro pressure from expanding St. George.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Location</p>
            <p class="text-sm text-white mt-1">3780 Windmill Dr., Santa Clara, UT 84765</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">City of Santa Clara</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Type</p>
            <p class="text-sm text-white mt-1">Public — Municipal</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Advance Notice</p>
            <p class="text-sm text-white mt-1">24 hours to city clerk</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Santa Clara's Historic and Modern Sections</h2>
            <p>Santa Clara City Cemetery is a working municipal cemetery with a strong historic identity. The older sections hold generations of Swiss pioneer families whose names — Hafen, Reber, Frei, Stucki, Tobler, Graf — remain prominent on Washington County streets, businesses, and family plots. Newer sections have added capacity as the town has grown into a bedroom community for St. George.</p>

            <h3>Section Rules</h3>
            <p>Upright monuments are permitted in most sections, with height limits enforced to preserve sight lines. The city clerk enforces spacing and dimension rules that vary slightly between the historic and expansion sections. Every upright requires a poured concrete apron around the base.</p>

            <h3>Cemetery Culture</h3>
            <p>Santa Clara families frequently commission headstones that reflect the town's Swiss heritage — Alpine floral motifs, family crests, and Swiss-German inscriptions alongside English. It's one of the few cemeteries in Southern Utah where that kind of design continuity is common enough that we keep reference libraries on hand.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules on file. We verify with Santa Clara city clerk before every quote.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="rule in rules" :key="rule.label" class="bg-stone rounded-xl p-4">
                <p class="text-xs font-semibold uppercase tracking-widest text-granite mb-1">{{ rule.label }}</p>
                <p class="text-sm text-evergreen font-medium leading-snug">{{ rule.value }}</p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Grave Decoration Rules</h2>
            <p class="text-granite text-sm mb-5">Santa Clara's rules balance the town's historic character with modern maintenance needs.</p>
            <ul class="space-y-3">
              <li v-for="rule in decorationRules" :key="rule" class="flex gap-3">
                <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-bronze mt-2"></span>
                <span class="text-sm text-granite leading-relaxed">{{ rule }}</span>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>History of Santa Clara City Cemetery</h2>
            <p>Santa Clara was established in 1854 by Jacob Hamblin, the celebrated "Peacemaker of the West," and a small band of settlers assigned by Brigham Young to build relationships with the Southern Paiute nations along the Santa Clara Creek. Hamblin's sandstone home — built in 1862 and still standing on Santa Clara's main street — remains one of the most significant Mormon pioneer sites in the American West.</p>
            <p>The community's Swiss identity took hold in the 1860s and 1870s when hundreds of LDS converts emigrated directly from Switzerland to Santa Clara, drawn by proselytizing missions and a promise of Alpine-familiar farmland. Their agricultural knowledge shaped the town's terraced fields and irrigation ditches. Today, Santa Clara is one of the few Utah towns to still hold an annual Swiss Days festival, and the cemetery reflects that heritage in the sheer number of Swiss surnames on its historic stones.</p>
            <p>Search for people buried at Santa Clara City Cemetery on <a href="https://memorialmapper.com/cemetery/475/santa-clara-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Swiss-Heritage Design Motifs</h2>
            <p>Families with Santa Clara Swiss lineage frequently incorporate design elements referencing that ancestry. Common motifs we engrave:</p>
            <ul>
              <li><strong>Alpine floral</strong> — edelweiss, gentian, and other Swiss Alpine flowers rendered as sandblast or laser etch borders.</li>
              <li><strong>Family crest</strong> — Swiss family Wappen coats-of-arms, either from Swiss genealogical records or newly commissioned to reflect a family's American lineage.</li>
              <li><strong>Bilingual inscriptions</strong> — English name and dates paired with a Swiss-German epitaph or scripture. Common phrases include "In liebevoller Erinnerung" (In loving memory) and "Ruhe in Frieden" (Rest in peace).</li>
              <li><strong>Cross with Alpine peaks</strong> — a Christian cross set against a simple Alpine or Red Mountain silhouette.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Santa Clara</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Santa Clara City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Santa Clara</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Santa Clara</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Santa Clara</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Design proof before any payment.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Santa Clara Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted in most sections. Verify height with city clerk.' },
  { label: 'Concrete Border', value: '4–6 inch concrete apron required.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to Santa Clara city clerk.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Historic Sections', value: 'Design should respect neighboring Swiss-pioneer stones.' },
  { label: 'Newer Sections', value: 'Standard modern rules apply.' },
  { label: 'Cremation Section', value: 'Flush markers only.' },
  { label: 'Plot Availability', value: 'Contact city clerk for current section availability.' },
];

const decorationRules = [
  'Flowers must be secured to the monument or its concrete border.',
  'Glass containers are not permitted on the grounds.',
  'Fences and freestanding structures on plots are prohibited.',
  'Wind-vulnerable décor should be avoided during Santa Clara\'s afternoon canyon winds.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'The city clerk removes items obstructing mowing without notice.',
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
  { name: 'St. George Temple Engraving', price: 'From $1,400', href: '/headstones/st-george-temple-headstones' },
  { name: 'Companion / Double Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  { title: 'Confirm your section', body: 'Historic sections require more design context than newer sections. We ask the city clerk to confirm your plot before quoting.' },
  { title: 'We contact the city clerk', body: 'The 24-hour notice, current height maximum, and any section-specific rules get verified before production.' },
  { title: 'Design proof with heritage motifs', body: 'For Swiss-heritage families, we include Alpine floral, crest, or bilingual inscription options in your digital proof.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time from proof approval is 8–16 weeks. Swiss-heritage engravings may add one week for design iteration.' },
  { title: 'Foundation and setting', body: 'We pour the required concrete apron and coordinate the setting with the city clerk. First cleaning at six months included.' },
];

const faqs = [
  { q: 'Where is Santa Clara City Cemetery?', a: 'At 3780 Windmill Drive in Santa Clara, Utah 84765, west of the Jacob Hamblin Home historic site.' },
  { q: 'Can I have Swiss-heritage motifs engraved?', a: 'Yes. We keep reference libraries of Swiss family crests, Alpine floral designs, and bilingual German-English inscriptions specifically because Santa Clara families request them often.' },
  { q: 'What\'s the connection to Jacob Hamblin?', a: 'Santa Clara was founded in 1854 by Jacob Hamblin, the LDS "Peacemaker of the West." His 1862 sandstone home stands on the town\'s main street and is a National Historic Site.' },
  { q: 'How much does a plot cost?', a: 'Plot fees are set by the City of Santa Clara and can change annually. Contact the city clerk for current rates.' },
  { q: 'Is Santa Clara the same as Ivins?', a: 'No. Both are neighboring Washington County cities. Santa Clara has its own cemetery; Ivins has its own separate cemetery.' },
];

const related = [
  { label: 'Ivins City Cemetery', href: '/cemeteries/ivins-city-cemetery' },
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Gunlock Cemetery', href: '/cemeteries/gunlock-cemetery' },
  { label: 'Santa Clara Service Area', href: '/service-areas/santa-clara' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
