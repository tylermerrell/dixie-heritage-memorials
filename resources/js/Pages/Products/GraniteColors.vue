<template>
  <AppLayout>
    <Head>
      <title>Granite Colors for Headstones — Southern Utah | St. George Memorials</title>
      <meta name="description" content="Every granite color available for headstones in Southern Utah — Georgia Gray, Jet Black, Mahogany, India Red, Mountain Rose, and more. Hand-selected for durability in Washington County's high-desert climate." />
      <link rel="canonical" href="https://stgeorgememorials.com/headstones/granite-colors" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Stone Selection</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Granite Colors for Southern Utah Headstones</h1>
        <p class="text-white/70 text-lg max-w-3xl">Every color we offer is selected for durability in Southern Utah's climate — 300+ days of direct sun, calcium-heavy hard water, and red-rock dust. Some lighter granites that hold up well in northern climates degrade quickly here. These don't.</p>
        <div class="mt-8 flex flex-wrap gap-3">
          <button @click="openModal" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
            Request a Quote
          </button>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
          <div
            v-for="color in colors"
            :key="color.name"
            class="bg-white rounded-2xl border border-stone-dark overflow-hidden shadow-sm hover:shadow-md hover:border-evergreen transition-all group"
          >
            <div class="h-44 overflow-hidden bg-slate-200">
              <img
                :src="color.image"
                :alt="color.name + ' granite for headstones'"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
            </div>
            <div class="px-5 py-4">
              <p class="font-serif text-base font-semibold text-evergreen mb-1">{{ color.name }}</p>
              <p class="text-granite text-xs leading-relaxed">{{ color.desc }}</p>
              <div v-if="color.tags.length" class="flex flex-wrap gap-1 mt-3">
                <span v-for="tag in color.tags" :key="tag" class="text-xs bg-stone px-2 py-0.5 rounded-full text-granite border border-stone-dark">{{ tag }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Climate note -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-2xl font-semibold text-evergreen mb-4">Why Granite Color Matters in Southern Utah</h2>
        <div class="space-y-4 text-granite leading-relaxed">
          <p>Southern Utah averages over 300 sunny days a year. At elevation, UV exposure is significantly higher than at sea level, and the calcium-heavy hard water leaves mineral deposits that are difficult to remove from rough or porous surfaces. These conditions narrow the field of truly durable granite options.</p>
          <p><strong class="text-evergreen">Polished black and dark granites</strong> — Jet Black, Impala Black, Black Mist — provide the highest contrast for laser-etched portraits and white-filled lettering, and their dense crystalline structure resists UV fading and mineral absorption better than most alternatives.</p>
          <p><strong class="text-evergreen">Georgia Gray</strong> is the most commonly requested mid-tone color in Washington County. It holds a polished finish well, photographs clearly in bright sun, and complements the red-rock landscape without competing with it.</p>
          <p><strong class="text-evergreen">Red and rose granites</strong> — India Red, Mahogany, Mountain Rose — are a natural fit for Southern Utah. The warm tones echo the regional geology and age gracefully in the desert environment. They are particularly popular at Tonaquint and in newer sections of Ivins City Cemetery.</p>
          <p>We do not recommend marble for any Southern Utah cemetery. Marble is soft enough that our hard water and UV levels cause visible surface degradation within a few years. If a competitor quotes marble for a St. George plot, ask why.</p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-evergreen-deeper text-white text-center">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl font-semibold mb-4">Not Sure Which Color to Choose?</h2>
        <p class="text-white/70 mb-8">Tell us the cemetery, the type of monument you're considering, and we'll help you match the right granite to your loved one's story and your cemetery's requirements.</p>
        <button @click="openModal" class="inline-flex items-center justify-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-10 py-4 rounded-lg transition-colors text-base shadow-xl">
          Request a Free Consultation
        </button>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();

const colors = [
  {
    name: 'Georgia Gray',
    image: '/images/granite-colors/georgia-gray.jpg',
    desc: 'The most popular mid-tone in Washington County. Classic, versatile, and excellent contrast for engraving in direct sunlight.',
    tags: ['Most popular', 'UV resistant'],
  },
  {
    name: 'Jet Black',
    image: '/images/granite-colors/jet-black.jpg',
    desc: 'Maximum contrast for laser-etched portraits and white-filled lettering. Dense crystalline structure resists mineral staining.',
    tags: ['Best for portraits', 'Hard water resistant'],
  },
  {
    name: 'Impala Black',
    image: '/images/granite-colors/impala-black.jpg',
    desc: 'A slightly warmer black with fine grain. Imported from South Africa — one of the hardest granites available.',
    tags: ['Premium density'],
  },
  {
    name: 'Black Mist',
    image: '/images/granite-colors/black-mist.jpg',
    desc: 'Deep black with subtle gray flecking. A classic choice for traditional upright monuments.',
    tags: [],
  },
  {
    name: 'Mahogany',
    image: '/images/granite-colors/mahogany.jpg',
    desc: 'Rich reddish-brown tones that complement Southern Utah\'s red rock landscape naturally.',
    tags: ['Desert complement'],
  },
  {
    name: 'India Red',
    image: '/images/granite-colors/india-red.jpg',
    desc: 'Bold, warm red from India. Striking against both black lettering and white-filled engraving.',
    tags: ['Bold choice'],
  },
  {
    name: 'Mountain Rose',
    image: '/images/granite-colors/mountain-rose.jpg',
    desc: 'Softer pink-rose tones. Popular for infant and child memorials and for families seeking a warm, gentle color.',
    tags: ['Warm tone'],
  },
  {
    name: 'Antique Rose',
    image: '/images/granite-colors/antique-rose.jpg',
    desc: 'Muted rose with fine grain. A subtle, elegant alternative to the deeper pinks.',
    tags: [],
  },
  {
    name: 'Blue Pearl',
    image: '/images/granite-colors/blue-pearl.jpg',
    desc: 'Norwegian granite with a distinctive blue iridescence. Among the hardest and most durable granites available.',
    tags: ['Import • Premium'],
  },
  {
    name: 'Bahama Blue',
    image: '/images/granite-colors/bahama-blue.jpg',
    desc: 'Deep blue-gray with silver flecking. A distinctive alternative to standard gray.',
    tags: [],
  },
  {
    name: 'Paradiso',
    image: '/images/granite-colors/paradiso.jpg',
    desc: 'Dark green with gold and burgundy patterning. Unique and striking — a standout choice.',
    tags: ['Distinctive'],
  },
  {
    name: 'Vermont Gray',
    image: '/images/granite-colors/vermont-gray.jpg',
    desc: 'Light silver-gray from New England quarries. A traditional choice for upright monuments in pioneer-era cemetery sections.',
    tags: [],
  },
];
</script>
