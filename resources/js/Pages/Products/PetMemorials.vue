<template>
  <AppLayout>
    <Head>
      <title>Pet Memorial Markers for Southern Utah Backyards & Retirement Communities | St. George Memorials</title>
      <meta name="description" content="Granite and bronze pet memorial markers for Washington County homes, backyards, and pet cemeteries. HOA-friendly hidden and planter-integrated designs for Sun River and Kayenta residents, plus outdoor markers built for the Southern Utah climate." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/pet-memorials" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Companion Animal Memorials</p>
          <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Pet Memorials Designed for Southern Utah Backyards</h1>
          <p class="text-white/70 text-lg max-w-2xl">Granite and bronze pet markers built to last in the desert sun, with HOA-conscious designs for the retirement communities of St. George — Sun River, Kayenta, SunRiver, Coral Canyon — where visible outdoor markers are often restricted.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-white/5">
          <img :src="heroImage" alt="Granite pet memorial marker for Southern Utah backyard" class="w-full h-auto max-h-[560px] object-contain" />
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Pet Memorials in Southern Utah</h2>
            <p>Most pet memorials in Washington County are installed on private property — backyards, family gardens, private pet cemeteries — rather than in commercial pet cemeteries. Utah state law permits burial of a domestic animal on private property provided the burial is at least two feet below ground surface and located away from wells and water sources. Local municipal codes may add restrictions; verify with your city if you plan a backyard burial.</p>
            <p>The Southern Utah environment is punishing on outdoor markers. High UV, red-rock dust, hard-water irrigation, and summer highs above 100°F degrade cheaper cast-concrete or resin markers within a few years. Granite and bronze — the same materials we use for cemetery headstones — hold up for decades.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The HOA-Regulated Retirement Community Constraint</h2>
            <p>Washington County has one of the highest concentrations of HOA-regulated retirement communities in Utah — Sun River (in St. George), Kayenta (in Ivins), SunRiver (55+ community), Coral Canyon (Washington City), and many smaller developments. Most of these communities have covenants that prohibit "visible outdoor markers, memorials, or gravesites" on private lots. The rules are enforced.</p>
            <p>For families in these communities, we design pet memorials that comply with the HOA guidelines. Three approaches work particularly well:</p>
            <h3>Planter-Integrated Marker</h3>
            <p>A small granite plaque set into the base or side of a decorative planter. Reads as landscape furniture rather than a memorial. HOAs almost universally approve because the planter is a permitted landscape element.</p>
            <h3>Hidden Garden Marker</h3>
            <p>A flush granite plate installed at ground level in a landscape bed, screened by low plantings. Visible only when a family member walks directly to the location. Complies with "no visible memorials from the street" rules.</p>
            <h3>Portable Indoor Bronze Plaque</h3>
            <p>A small bronze plaque with a stand — kept indoors on a shelf or mantle, brought outdoors during a memorial visit, stored inside otherwise. Not restricted by any HOA because it is not permanently installed. Popular with condo residents.</p>
            <p>None of these compromise on materials — granite and bronze are the same as we use for cemetery installations. The design constraint is placement, not durability.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Standard Pet Memorial Sizes</h2>
            <ul>
              <li><strong>Small stake marker</strong> — 4" × 6" × 1", inserted into the ground with a granite stake. Compact, minimal profile. Good for HOA-restricted lots.</li>
              <li><strong>Small flush marker</strong> — 6" × 10" × 2", set flat with the ground. Room for pet name, dates, brief inscription.</li>
              <li><strong>Standard flush marker</strong> — 8" × 12" × 2", room for portrait etching, dates, longer inscription, small motif.</li>
              <li><strong>Upright small marker</strong> — 10" × 8" × 4", small standing marker for households with garden space. Reads visually as a memorial rather than a stake.</li>
              <li><strong>Companion pet marker</strong> — 8" × 20" × 2", two pets on one stone.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Motifs Families Choose</h2>
            <ul>
              <li><strong>Portrait etching</strong> — a laser-etched portrait of the pet on polished jet black granite. The most popular design. Works from any daylight phone photo.</li>
              <li><strong>Paw print</strong> — from an ink impression of the pet's paw or a photograph, etched to actual scale.</li>
              <li><strong>Species silhouette</strong> — a stylized dog, cat, horse, or bird outline.</li>
              <li><strong>Named symbol</strong> — a specific breed silhouette, a favorite toy, a leash or collar.</li>
              <li><strong>"Rainbow Bridge" or scripture</strong> — for families who want a specific quotation.</li>
              <li><strong>Family name association</strong> — the pet's marker can carry the same design elements as the family's cemetery marker, creating visual continuity across memorials.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Granite Choice for Outdoor Pet Markers</h2>
            <ul>
              <li><strong>Jet Black polished</strong> — the top choice for portrait etching. Handles UV and hard water without fading.</li>
              <li><strong>Dakota Mahogany</strong> — warm reddish-brown that ties to Southern Utah landscape. Distinctive and beautiful.</li>
              <li><strong>Barre Gray</strong> — traditional, understated, most affordable.</li>
              <li><strong>Bronze plate on granite base</strong> — for families who want the aged patina character of bronze. Especially fitting for portrait plaques.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5">Pet Memorial Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Pet memorial marker example ${i + 1} for Southern Utah`" class="w-full h-full object-cover" />
              </button>
            </div>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Pet Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We help with HOA-friendly options for Sun River, Kayenta, and other Washington County retirement communities.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h4 class="font-semibold text-evergreen mb-3">Starting Prices</h4>
            <ul class="text-sm text-granite space-y-2">
              <li>Small stake marker: from $175</li>
              <li>Small flush marker 6" × 10": from $225</li>
              <li>Standard flush 8" × 12": from $325</li>
              <li>Upright small 10" × 8": from $425</li>
              <li>Bronze portrait plaque: from $500</li>
            </ul>
            <p class="text-xs text-granite italic mt-3">Includes shipping. Backyard installation guidance provided at no charge.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Pet memorial example ${lightboxIndex + 1}`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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

const heroImage = '/images/products/flat-headstone-2.jpg';

const gallery = [
  '/images/products/pet-headstone.jpg',
  '/images/products/pet-headstone-1.jpg',
  '/images/products/pet-headstone-2.jpg',
  '/images/products/flat-headstone.jpg',
  '/images/products/flat-headstone-2.jpg',
];

const faqs = [
  {
    q: 'Is pet burial legal on private property in Utah?',
    a: 'Yes, under state law, with two main requirements: burial at least two feet below the ground surface, and location away from wells and municipal water sources. Some cities have additional restrictions — St. George city code, Hurricane, Ivins, and Washington City each maintain municipal ordinances that may apply. Contact your city\'s animal services or public works department to verify before burying.',
  },
  {
    q: 'Will an HOA-approved planter marker really satisfy Sun River / Kayenta covenants?',
    a: 'In our experience yes, but every HOA is different and enforcement varies. We recommend submitting the design to your HOA architectural review committee before ordering. Most committees approve planter-integrated markers because they read as decorative landscape elements rather than gravesite markers. If yours does not, we can adjust the design.',
  },
  {
    q: 'Can I use a portrait of my pet on the marker?',
    a: 'Yes. Laser-etched portraits reproduce beautifully from a daylight phone photo. Jet black polished granite is the best surface for portrait detail. We show the etched portrait at exact scale on the design layout before manufacturing.',
  },
  {
    q: 'How long does a granite pet marker last outdoors in Southern Utah?',
    a: 'A polished granite pet marker, properly maintained, will read cleanly for 50+ years. Hard-water spotting from irrigation over-spray is the main maintenance issue — the same protocol as cemetery headstones applies (gentle non-ionic cleaning every 18–24 months, no vinegar or household descalers).',
  },
  {
    q: 'Can I get a pet marker that matches my family\'s cemetery headstone design?',
    a: 'Yes, and many families choose to. Carrying the same family name typeface, a shared motif (temple silhouette, family symbol, scripture band), or matching granite color creates a visual continuity across the family\'s memorials. We can pull the design elements from your existing headstone if we have photographs or if we did the original installation.',
  },
];

const related = [
  { label: 'Flat & Flush Markers', href: '/headstones/flat-markers' },
  { label: 'Bronze Memorials', href: '/headstones/bronze-memorials' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Unique Options', href: '/headstones/unique-options' },
  { label: 'Ivins Service Area', href: '/service-areas/ivins' },
  { label: 'St. George Service Area', href: '/service-areas/st-george' },
];
</script>
