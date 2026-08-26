<template>
  <AppLayout>
    <Head>
      <title>Bevel Markers — The Quiet Middle Ground for Southern Utah | St. George Memorials</title>
      <meta name="description" content="Bevel grave markers for Washington County families who want more presence than a flat marker without the visual weight of an upright. Approved in nearly every Southern Utah cemetery — including sections where uprights are restricted." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/bevel-markers" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Low-Profile Memorials</p>
          <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Bevel Markers: The Understated Choice for Southern Utah Cemeteries</h1>
          <p class="text-white/70 text-lg max-w-2xl">A bevel is neither flat nor upright — it is the quiet middle. Six to twelve inches tall, gently pitched from back to front, approved in nearly every Washington County cemetery, and often the only visible-face marker permitted in sections that restrict full uprights.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-white/5">
          <img :src="heroImage" alt="Bevel grave marker in granite for Southern Utah cemetery" class="w-full h-auto max-h-[560px] object-contain" />
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>What a Bevel Marker Is</h2>
            <p>A bevel marker (sometimes called a pillow marker or hickey marker) is a solid granite block cut with a shallow slope on the engraved face — typically 5 to 15 degrees, rising 6 to 12 inches at the back and 3 to 6 inches at the front. Unlike a slant, which reads as a clearly angled panel, a bevel reads almost flat from a distance and reveals its slope only up close.</p>
            <p>That is exactly what many Southern Utah families want. Bevels have more visual presence than a flush marker — the raised profile catches light and casts a subtle shadow that draws the eye — but they don't dominate a cemetery landscape the way an upright does. In an era when many families want a beautiful, personal memorial without a monument that "shouts" from three rows away, the bevel is the answer.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Snowbird and Retiree Case for Bevels</h2>
            <p>Washington County has one of the largest per-capita concentrations of part-year residents in Utah. Many families spend six months in St. George and six months back in the Wasatch Front, Boise, Las Vegas, or California. When one spouse dies during the snowbird half of the year, the surviving spouse often chooses a bevel for a very specific reason: it does not visually broadcast the loss during the months they are away.</p>
            <p>A tall upright at Tonaquint or Ivins is visible from the road. A bevel — especially in polished Jet Black or Barre Gray — is nearly invisible from the mowing lanes and reads only when a family member walks directly to the plot. For families who prefer a private grief posture, that quiet visibility matters.</p>
            <p>It also matters for cemeteries with strict aesthetic uniformity. The Ivins expansion sections and the newer Washington City blocks lean toward flush-only or low-profile markers. A bevel splits the difference: still a real memorial face, but low enough to satisfy sextons who want the mowing line clean.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Where Bevels Are Approved in Southern Utah</h2>
            <p>Nearly every cemetery in our service area accepts bevel markers, including several that restrict full uprights:</p>
            <ul>
              <li><strong>Tonaquint Cemetery</strong> — approved in all sections including the cremation garden.</li>
              <li><strong>Ivins City Cemetery</strong> — approved throughout, including the flush-preferred expansion sections where a bevel is often the tallest marker permitted.</li>
              <li><strong>Washington City Cemetery</strong> — approved throughout.</li>
              <li><strong>Santa Clara, Hurricane, LaVerkin, Toquerville, Leeds</strong> — approved throughout the older and newer sections.</li>
              <li><strong>Cedar City, Enoch, Parowan, Kanab</strong> — approved throughout.</li>
              <li><strong>Southern Utah National Cemetery</strong> — VA program does not use bevels; standardized upright and flat only.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Sizing Options</h2>
            <ul>
              <li><strong>Standard single bevel</strong> — 8" × 24" × 10" (H at back × W × D). Room for name, dates, brief epitaph, small emblem.</li>
              <li><strong>Larger single bevel</strong> — 10" × 28" × 12". Adds face area for a temple silhouette, portrait medallion, or extended inscription.</li>
              <li><strong>Companion bevel</strong> — 10" × 44" × 12". Two names across a single stone.</li>
              <li><strong>Extended companion bevel</strong> — 12" × 60" × 14". Larger companion configuration for cemeteries that permit it.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Granite Recommendations for Bevels</h2>
            <p>Because the bevel face catches oblique light most of the day rather than direct sun, granite choice is slightly more forgiving than with slants or flats:</p>
            <ul>
              <li><strong>Jet Black polished</strong> — the most-ordered. Laser-etched detail reads sharply. Hides hard-water crust between cleanings.</li>
              <li><strong>Barre Gray polished</strong> — traditional, understated, holds sandblast lettering with paint fill for decades.</li>
              <li><strong>Impala Black polished</strong> — a slightly warmer, more textured black. Distinctive without being loud.</li>
              <li><strong>Dakota Mahogany</strong> — the red-rock landscape tone; particularly striking on Ivins and Santa Clara installations backed by red cliff terrain.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5">Bevel Marker Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Bevel marker example ${i + 1} for Southern Utah cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions</h2>
            <div class="space-y-5">
              <div v-for="faq in faqs" :key="faq.q">
                <p class="font-semibold text-evergreen mb-1">{{ faq.q }}</p>
                <p class="text-sm text-granite leading-relaxed" v-html="faq.a"></p>
              </div>
            </div>
          </div>

        </div>

        <aside class="space-y-6">
          <div class="bg-evergreen rounded-2xl p-6 text-white sticky top-36">
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Bevel Marker</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation and design proof. We verify your cemetery's rules before we quote.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Free Design Proof</button>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h4 class="font-semibold text-evergreen mb-3">Starting Prices</h4>
            <ul class="text-sm text-granite space-y-2">
              <li>Standard single 8" × 24": from $650</li>
              <li>Larger single 10" × 28": from $850</li>
              <li>Companion 10" × 44": from $1,300</li>
              <li>Extended companion 12" × 60": from $1,700</li>
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
        <img :src="gallery[lightboxIndex]" :alt="`Bevel marker example ${lightboxIndex + 1}`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  '/images/products/flat-headstone.jpg',
  '/images/products/flat-headstone-2.jpg',
  '/images/products/slant-headstone.jpg',
];

const faqs = [
  {
    q: 'How is a bevel marker different from a flat marker?',
    a: 'A flat marker sits level with the ground. A bevel is raised 3 to 12 inches at the back with a shallow slope. From ten feet away, a bevel and a flat marker can look similar. Up close, the bevel\'s raised profile catches light and shadow that a flat marker cannot.',
  },
  {
    q: 'How is a bevel different from a slant?',
    a: 'Angle and height. A slant is roughly 45 degrees off horizontal — a clearly tilted face. A bevel is 5 to 15 degrees — nearly flat. Bevels are shorter and more subtle. Slants are taller and read as an angled panel.',
  },
  {
    q: 'Do bevel markers require a concrete foundation?',
    a: 'Yes. Every Washington County municipal cemetery requires a concrete foundation under a bevel marker — typically a 4-inch pour extending 2 inches beyond the base perimeter. We include the foundation in every quote.',
  },
  {
    q: 'Can I get a temple engraving on a bevel marker?',
    a: 'Yes, though the face is smaller than a slant or upright. Tower-only silhouettes and small tower + cottonwood leaf motifs work well. See our <a href="/headstones/st-george-temple-headstones">St. George Temple</a> and <a href="/headstones/red-cliffs-temple-headstones">Red Cliffs Temple</a> engravings pages.',
  },
  {
    q: 'Are bevel markers approved at Ivins City Cemetery expansion?',
    a: 'Yes. The newer flush-preferred sections at Ivins permit bevels as the tallest visible marker style. This is one of the most common installations we do in Ivins — families who want more presence than flush without exceeding the sexton\'s aesthetic guideline.',
  },
  {
    q: 'How long does a bevel marker last in the Southern Utah climate?',
    a: 'A polished granite bevel — jet black or Barre gray — will read cleanly for 75–100+ years with basic maintenance every 18–24 months to remove hard-water spotting. The monolithic construction (no die-to-base joint) makes bevels among the longest-lived markers we install.',
  },
];

const related = [
  { label: 'Slant Markers', href: '/headstones/slant-markers' },
  { label: 'Slant-Bevel Markers', href: '/headstones/slant-bevel-markers' },
  { label: 'Flat & Flush Markers', href: '/headstones/flat-markers' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Ivins City Cemetery Guide', href: '/cemeteries/ivins-city-cemetery' },
  { label: 'Washington City Cemetery Guide', href: '/cemeteries/washington-city-cemetery' },
];
</script>
