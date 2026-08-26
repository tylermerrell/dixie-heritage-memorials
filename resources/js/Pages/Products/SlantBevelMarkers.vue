<template>
  <AppLayout>
    <Head>
      <title>Slant-Bevel Markers — Hybrid Profile for Southern Utah | St. George Memorials</title>
      <meta name="description" content="Hybrid slant-bevel grave markers designed for Washington County cemeteries — a 4-inch front, 8-inch back profile that sheds desert dust, reads clearly from graveside, and satisfies sections that restrict full slants." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/slant-bevel-markers" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Hybrid Profile Memorials</p>
          <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Slant-Bevel Markers — Halfway Between Slant and Bevel</h1>
          <p class="text-white/70 text-lg max-w-2xl">A stone with a 4-inch front and 8-inch back — more visual weight than a bevel, more restraint than a slant. Approved at nearly every Southern Utah cemetery where a middle-height marker fits the section rules.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-white/5">
          <img :src="heroImage" alt="Slant-bevel hybrid granite grave marker for Southern Utah cemetery" class="w-full h-auto max-h-[560px] object-contain" />
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Hybrid Profile</h2>
            <p>A slant-bevel is a granite marker cut with the taper of a slant but the low height of a bevel. Standard proportions run about 4 inches at the front, 8 inches at the back, and 20–28 inches wide — a monolithic stone with a clearly angled face that never rises above the mid-shin height of a visitor standing beside it.</p>
            <p>Slant-bevels exist because families here kept asking for something in between the two established profiles. A full slant (16 inches at the back, 45-degree face) is a strong visual presence — beautiful in the pioneer sections of Ivins and Santa Clara, but sometimes too much in newer flush-leaning sections. A standard bevel (10 inches at the back, 5-degree face) reads almost flat and doesn't project the memorial the way some families want. The slant-bevel splits the difference.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Why the Profile Works Well in Southern Utah</h2>
            <p>The angled face of a slant-bevel is the same self-shedding profile that has kept older slants at Santa Clara City Cemetery and <a href="/cemeteries/ivins-city-cemetery" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Ivins City Cemetery</a> reading cleanly for six decades. Red-rock dust and airborne debris slide off. Pooling irrigation water sheets away instead of leaving calcium crusts. The shorter overall height keeps the stone unobtrusive from the mowing lanes — critical in newer sections where sextons enforce aesthetic uniformity.</p>
            <p>Where the standard slant-bevel earns its keep is at intermediate cemeteries — the older half of Washington City, the pre-expansion portions of Ivins, most of Toquerville, LaVerkin, and Leeds. All of these permit visible-face markers but appreciate the lower profile.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Where Slant-Bevels Are Approved</h2>
            <ul>
              <li><strong>St. George City Cemetery</strong> — approved throughout.</li>
              <li><strong>Tonaquint Cemetery</strong> — approved in most sections outside the flush-only cremation garden.</li>
              <li><strong>Washington City Cemetery</strong> — approved throughout.</li>
              <li><strong>Hurricane City Cemetery</strong> — approved within the 42-inch height maximum (slant-bevels are well under).</li>
              <li><strong>Ivins, Santa Clara, LaVerkin, Toquerville, Leeds, Enterprise</strong> — approved.</li>
              <li><strong>Cedar City, Enoch, Parowan, Kanab, Panguitch</strong> — approved.</li>
            </ul>
            <p>Where they are not offered: Southern Utah National Cemetery uses only the VA-standardized marker set.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Sizing Options</h2>
            <ul>
              <li><strong>Standard single</strong> — 4"/8" × 24" × 12" (front / back × W × D). The workhorse size in Washington County. Room for name, dates, brief epitaph, small motif.</li>
              <li><strong>Larger single</strong> — 4"/8" × 28" × 14". Adds face area for a temple silhouette, portrait medallion, or extended inscription.</li>
              <li><strong>Companion</strong> — 4"/10" × 48" × 14". Spans two plots; slight height increase at the back to keep the face proportions right at wider dimensions.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Granite Choice</h2>
            <p>Because the face on a slant-bevel is smaller than on a standard slant, contrast matters more:</p>
            <ul>
              <li><strong>Jet Black polished</strong> — best contrast for laser-etched detail on a small face.</li>
              <li><strong>Barre Gray polished</strong> — traditional, more affordable.</li>
              <li><strong>Impala Black</strong> — warmer black with subtle mineral texture.</li>
              <li><strong>Dakota Mahogany</strong> — for the Red Mountain landscape at Ivins and Santa Clara.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5">Slant-Bevel Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Slant-bevel marker example ${i + 1} for Southern Utah cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Slant-Bevel Marker</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and design proof. We confirm section rules with the sexton before quoting.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h4 class="font-semibold text-evergreen mb-3">Starting Prices</h4>
            <ul class="text-sm text-granite space-y-2">
              <li>Standard single 4"/8" × 24": from $750</li>
              <li>Larger single 4"/8" × 28": from $950</li>
              <li>Companion 4"/10" × 48": from $1,500</li>
            </ul>
            <p class="text-xs text-granite italic mt-3">Includes design proof, foundation, freight, and sexton coordination.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Slant-bevel marker example ${lightboxIndex + 1}`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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

const heroImage = '/images/products/bevled-headstone.jpg';

const gallery = [
  '/images/products/bevled-headstone.jpg',
  '/images/products/slant-headstone.jpg',
  '/images/products/slant-headstone-2.jpg',
  '/images/products/flat-headstone.jpg',
];

const faqs = [
  {
    q: 'Why choose a slant-bevel over a standard slant?',
    a: 'Height. A full slant is 16 inches at the back; a slant-bevel is 8 inches at the back. If your cemetery section restricts vertical presence, or you want a marker that reads clearly at graveside without dominating the row, the slant-bevel is the answer.',
  },
  {
    q: 'Why choose a slant-bevel over a bevel?',
    a: 'Angle. A bevel has a 5–15 degree slope that reads almost flat. A slant-bevel has a steeper front-to-back taper — enough that the face reads as an angled panel from graveside distance. If the flat-ish appearance of a bevel feels too much like a flush marker, the slant-bevel gives you more visible face.',
  },
  {
    q: 'Do slant-bevels require a concrete foundation?',
    a: 'Yes. Same 4-inch pour extending 2 inches beyond the base perimeter as any other Washington County installation. We include the foundation in every quote.',
  },
  {
    q: 'Are slant-bevels approved in the Tonaquint upright rows?',
    a: 'Yes. The upright rows at Tonaquint (historically rows 3 and 4 of each block) accept any visible-face marker style — uprights, slants, slant-bevels, bevels. Confirm your specific row with the sexton before ordering.',
  },
  {
    q: 'Can I get a temple engraving on a slant-bevel?',
    a: 'Yes. The angled face works well for a St. George Temple silhouette or a Red Cliffs cottonwood-leaf motif. Because the face is smaller than a full slant, tower-only silhouettes are more common than full temple silhouettes.',
  },
];

const related = [
  { label: 'Slant Markers', href: '/headstones/slant-markers' },
  { label: 'Bevel Markers', href: '/headstones/bevel-markers' },
  { label: 'Flat & Flush Markers', href: '/headstones/flat-markers' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Tonaquint Cemetery Guide', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'Ivins City Cemetery Guide', href: '/cemeteries/ivins-city-cemetery' },
];
</script>
