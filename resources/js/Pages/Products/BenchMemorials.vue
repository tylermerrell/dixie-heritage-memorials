<template>
  <AppLayout>
    <Head>
      <title>Granite Bench Memorials for Southern Utah Cemeteries | St. George Memorials</title>
      <meta name="description" content="Granite memorial benches for Washington and Iron County cemeteries — a memorial that serves as visitor seating in the desert heat. Companion inscriptions, red-rock landscape design integration, cemetery-specific placement rules." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/bench-memorials" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Functional Memorial Seating</p>
          <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Granite Bench Memorials — A Memorial That Invites You to Stay</h1>
          <p class="text-white/70 text-lg max-w-2xl">In the Southern Utah heat, a bench at graveside is more than a memorial. It is the place a widowed spouse sits every Wednesday morning, the seat where grandchildren rest during Memorial Day visits, the small shaded stone that turns a five-minute stop into an hour of remembering. That is why bench memorials are the fastest-growing custom design in Washington County.</p>
        </div>
        <div class="rounded-2xl overflow-hidden bg-white/5">
          <img :src="heroImage" alt="Granite memorial bench with engraved seat and back for Southern Utah cemetery" class="w-full h-auto max-h-[560px] object-contain" />
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>What a Bench Memorial Is</h2>
            <p>A memorial bench is a piece of graveside furniture cut from solid granite — a seat and back (or just a seat, in the more minimalist versions) engraved with a name, dates, and family motifs. The bench sits on a concrete foundation like any other monument and serves the same commemorative function as a headstone. It also does something no other memorial can do: it gives visitors a place to sit.</p>
            <p>In Washington County — where summer graveside visits happen in 105-degree heat and where many mourners are older retirees — that seat matters. Families who install bench memorials tell us the practical reason is often the emotional reason: the bench is where they actually spend time with the memory of the person they lost.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Two Configurations</h2>
            <h3>Full Bench (Seat + Back)</h3>
            <p>The traditional configuration — a granite seat with a supported back, engraved with the primary inscription on the back panel (visible when approaching from the plot side). Some designs also engrave the seat itself with a scripture band, family name, or continuation of the inscription. Typical dimensions: 48"–60" wide seat, 36"–42" tall back, 18"–24" deep seat.</p>
            <h3>Bench with Cremation Niche</h3>
            <p>A less common but distinctive variation — a full bench with a small cremation niche integrated into the base. Cremated remains rest within the bench itself. Requires cemetery approval and is not permitted at all Washington County cemeteries. Verify with the sexton before designing.</p>
            <h3>Curved and Serpentine Benches</h3>
            <p>Custom bench shapes with a curved seat, softened back, or asymmetric proportions. Popular for cemeteries with a red-rock landscape where a curved profile echoes the horizon. Costs more due to additional cutting and finishing.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Where Bench Memorials Are Approved</h2>
            <p>Most Washington County municipal cemeteries permit bench memorials, but not all sections within each cemetery accept them. The typical constraints are footprint (a bench takes more concrete than an upright), aesthetic uniformity (some sections are visually curated), and mowing access (a bench blocks the mowing lane more than a flat marker does).</p>
            <ul>
              <li><strong>Tonaquint Cemetery</strong> — approved in most sections. Verify placement with the sexton.</li>
              <li><strong>St. George City Cemetery</strong> — approved in family plot sections; check dimensions.</li>
              <li><strong>Ivins City Cemetery</strong> — approved in most sections; a natural fit for the red-rock backdrop.</li>
              <li><strong>Santa Clara City Cemetery</strong> — approved.</li>
              <li><strong>Washington City Cemetery</strong> — approved.</li>
              <li><strong>Hurricane City Cemetery</strong> — approved within height limit.</li>
              <li><strong>Southern Utah National Cemetery</strong> — bench memorials are not part of the VA standardized program; families who want a bench for a veteran can install one at a private or municipal cemetery instead.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Design Integration with the Red-Rock Landscape</h2>
            <p>Bench memorials are one of the few marker styles where design integration with the surrounding landscape genuinely works. In Ivins, Santa Clara, and Washington City — where the cemetery backdrops include red-rock cliffs, Snow Canyon views, or Virgin River corridor terrain — a Dakota Mahogany granite bench with a subtle carved landscape motif on the back reads as part of the setting rather than as a separate object. Families visiting a memorial like this often tell us the bench "belongs" in the landscape in a way an upright doesn't.</p>
            <p>We recommend against ornate carving on bench memorials — the profile does the work. A simple inscription, a family name, and one or two small motifs (a temple silhouette, a scripture band, a subtle red-rock horizon line on the back) usually give the strongest result.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Granite Choices</h2>
            <ul>
              <li><strong>Barre Gray</strong> — the workhorse for benches. Timeless, holds sandblast lettering well, ages gracefully into any landscape.</li>
              <li><strong>Dakota Mahogany</strong> — the red-rock landscape tone. Distinctive; ties the bench to Southern Utah's terrain.</li>
              <li><strong>Jet Black</strong> — makes the inscription pop. Best for benches where the family wants the memorial function to lead and the seating function to feel secondary.</li>
              <li><strong>Salt-and-Pepper</strong> — often used for benches because the pattern hides hard-water spotting on the flat seat surface where dust and calcium accumulate most.</li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-5">Bench Memorial Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Granite bench memorial example ${i + 1} for Southern Utah cemetery`" class="w-full h-full object-cover" />
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Bench Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We confirm bench approval with the sexton before quoting.</p>
            <button @click="openModal" class="w-full bg-bronze hover:bg-bronze-dark text-white font-semibold py-3 rounded-lg transition-colors text-sm">Request a Quote</button>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h4 class="font-semibold text-evergreen mb-3">Starting Prices</h4>
            <ul class="text-sm text-granite space-y-2">
              <li>Full bench (seat + back) 48": from $3,500</li>
              <li>Full bench 60": from $4,500</li>
              <li>Serpentine bench: from $5,200</li>
              <li>Bench with cremation niche: from $6,500</li>
            </ul>
            <p class="text-xs text-granite italic mt-3">Includes foundation, freight, and sexton coordination. Delivery includes cemetery placement approval.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Bench memorial example ${lightboxIndex + 1}`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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

const heroImage = '/images/products/bench-headstone.jpg';

const gallery = [
  '/images/products/bench-headstone.jpg',
  '/images/products/bench-headstone-1.jpg',
  '/images/products/bench-headstone-2.jpg',
  '/images/products/bench-headstone-3.jpg',
  '/images/products/bench-headstone-4.jpg',
  '/images/products/bench-headstone-5.jpg',
];

const faqs = [
  {
    q: 'Can a bench memorial replace a headstone, or does the plot need both?',
    a: 'A bench alone typically serves as the memorial and no separate headstone is required. The engraved back and inscription satisfy the cemetery\'s marker requirement. That said, some families install a small flush marker on the plot itself and a bench alongside — the flush marker for the burial location and the bench as a visitor space.',
  },
  {
    q: 'Do bench memorials require a larger foundation than an upright?',
    a: 'Yes. A bench sits on a foundation extending the full footprint of the seat plus overhang — typically 4"–6" of concrete underneath, extending several inches beyond the base. We handle the foundation as part of every install. Cemetery sextons verify placement before we pour.',
  },
  {
    q: 'How comfortable is granite seating in the summer?',
    a: 'Granite absorbs heat. On a 105-degree August day, a bench in direct sun can be genuinely too hot to sit on comfortably in shorts — a real Southern Utah consideration. Families often position bench memorials to face the direction that offers afternoon shade from the plot\'s neighboring trees or from the cemetery\'s natural terrain. We think about orientation during the design consultation.',
  },
  {
    q: 'Can a bench memorial serve two spouses?',
    a: 'Yes. Companion bench memorials with two names on the back panel are common — often with a shared central design element (temple silhouette, scripture band, family symbol) between the two names. See our <a href="/headstones/companion-headstones">companion headstones page</a> for related configurations.',
  },
  {
    q: 'How long does a bench memorial take to install?',
    a: '10–18 weeks from design approval. Slightly longer than a single upright because the manufacturing includes more cutting and the foundation pour and setting take longer. Southern Utah\'s year-round install climate means we do not have seasonal delays, but bench-specific manufacturing lead time is real.',
  },
  {
    q: 'Are bench memorials appropriate at cemeteries with historic pioneer markers?',
    a: 'Yes, and they can be beautifully integrated. In cemeteries with strong pioneer character (St. George City Cemetery downtown, older sections at Washington City, Santa Clara), a bench in Barre Gray with a simple sandblast inscription reads as respectful of the cemetery\'s historical aesthetic. Highly polished jet black benches with laser etching are more contemporary and read that way.',
  },
];

const related = [
  { label: 'Companion Headstones', href: '/headstones/companion-headstones' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'Unique Options', href: '/headstones/unique-options' },
  { label: 'Tonaquint Cemetery Guide', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'Ivins City Cemetery Guide', href: '/cemeteries/ivins-city-cemetery' },
];
</script>
