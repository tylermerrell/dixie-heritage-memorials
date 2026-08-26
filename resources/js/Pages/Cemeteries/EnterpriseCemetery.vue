<template>
  <AppLayout>
    <Head>
      <title>Enterprise City Cemetery — High-Desert Farming Community Guide | St. George Memorials</title>
      <meta name="description" content="Enterprise City Cemetery in western Washington County — 1896 high-desert reservoir farming town, cemetery rules, elevation considerations, and headstone design guide." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/enterprise-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Enterprise City Cemetery · Enterprise · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Enterprise City Cemetery — High-Desert Reservoir Town Cemetery</h1>
        <p class="text-white/70 text-lg max-w-3xl">Enterprise sits on a high sagebrush plateau at 5,300 feet in the far western reaches of Washington County. Its cemetery holds four generations of ranching and reservoir-farming families whose grandparents dammed Shoal Creek in the 1890s to bring water to a landscape most Cotton Mission settlers had passed over.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Town</p><p class="text-sm text-white mt-1">Enterprise, UT 84725</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Operator</p><p class="text-sm text-white mt-1">City of Enterprise</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Elevation</p><p class="text-sm text-white mt-1">~5,300 ft — cool winters</p></div>
          <div class="bg-white/5 rounded-xl p-3"><p class="text-xs text-sage-light uppercase tracking-widest">Founded</p><p class="text-sm text-white mt-1">1896</p></div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>A High-Elevation Cemetery in a Warm-Weather County</h2>
            <p>Enterprise is anomalous among Washington County cemeteries: its elevation puts it into a genuinely cold-winter climate that most of the rest of the county doesn't experience. Snow falls annually. Ground freeze is real. That changes how we install monuments here compared to St. George or Hurricane — installation season effectively runs March through November for most designs, with January and February typically avoided for concrete apron pours.</p>

            <h3>Cemetery Rules</h3>
            <p>Enterprise permits upright monuments throughout most sections. Concrete borders required. The city clerk handles cemetery arrangements. Standard 24-hour advance notice for installation.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
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
            <h2>History of Enterprise</h2>
            <p>Enterprise was founded in 1896 by LDS ranching families who dammed Shoal Creek to create the Enterprise Reservoir — one of the largest early irrigation projects in Southern Utah. The reservoir made high-desert farming viable and turned a sagebrush plateau into productive alfalfa, wheat, and cattle country. The cemetery holds the founding reservoir-building families and their descendants, along with the neighboring Mountain Meadows community.</p>
            <p>The cemetery is a working municipal cemetery serving Enterprise proper and the surrounding ranching country toward the Nevada state line. Small in scale but historically consequential — the families here made western Washington County habitable for agriculture.</p>
            <p>Search for people buried at Enterprise Cemetery on <a href="https://memorialmapper.com/cemetery/141/enterprise-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Installing at Elevation — What Changes</h2>
            <p>Two things matter more at Enterprise than at cemeteries closer to St. George:</p>
            <ol>
              <li><strong>Freeze-thaw cycles.</strong> Concrete aprons poured December through February can freeze before curing. We schedule pours March through November unless the design absolutely requires winter installation.</li>
              <li><strong>Deeper frost line.</strong> Foundation depth is greater at Enterprise than in St. George. We pour to a depth sufficient to sit below the local frost line.</li>
            </ol>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Enterprise</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Enterprise Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Enterprise</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Enterprise</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Enterprise</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We schedule installation around Enterprise\'s freeze-thaw season.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Enterprise Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted throughout most sections.' },
  { label: 'Concrete Border', value: 'Required — poured to depth accommodating local frost line.' },
  { label: 'Installation Notice', value: '24 hours minimum notice to Enterprise city clerk.' },
  { label: 'Installation Season', value: 'March–November preferred. December–February by exception.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Plot Availability', value: 'Contact the city clerk for current section availability.' },
  { label: 'Freeze Line', value: 'Local frost line deeper than St. George — foundations reflect this.' },
  { label: 'Setting Coordination', value: 'City clerk schedules the setting.' },
];

const decorationRules = [
  'Flowers must be secured — Enterprise wind gets strong on the plateau.',
  'Glass containers are prohibited.',
  'Fences and freestanding structures on plots are prohibited.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'Winter décor is subject to freeze damage — plan durability.',
  'Anything obstructing mowing is removed without notice.',
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
  { name: 'Bench Memorials', price: 'From $3,500', href: '/headstones/bench-memorials' },
];

const steps = [
  { title: 'Confirm your plot', body: 'We verify plot number with the Enterprise city clerk before quoting.' },
  { title: 'We check the season', body: 'Enterprise\'s freeze season affects installation timing. We recommend March–November pours for the concrete apron.' },
  { title: 'Design proof', body: 'Digital proof shows exact dimensions and engraving. Written approval starts production.' },
  { title: 'Manufacturing and freight', body: 'Typical lead time from proof approval is 8–16 weeks.' },
  { title: 'Foundation and setting', body: 'Deeper frost-line pour, setting coordinated with city clerk, first cleaning included at six months.' },
];

const faqs = [
  { q: 'Where is Enterprise?', a: 'On State Route 18 in far western Washington County, about 45 minutes northwest of St. George at ~5,300 feet elevation.' },
  { q: 'Does it snow at Enterprise?', a: 'Yes. Enterprise gets real winter weather, unlike lower-elevation Washington County. Snow falls annually and ground freeze affects installation.' },
  { q: 'Can I install a monument in winter?', a: 'The concrete apron typically waits for March–November. Existing monuments can be set year-round if no fresh pour is required.' },
  { q: 'What\'s the Enterprise Reservoir?', a: 'A late-19th-century dam project that made high-desert farming viable. Founding families of Enterprise built it; many are buried in the cemetery.' },
  { q: 'How is Enterprise connected to Mountain Meadows?', a: 'Enterprise is the closest active community to the Mountain Meadows Massacre National Historic Site. Some families from that area rest in Enterprise Cemetery.' },
];

const related = [
  { label: 'Central Cemetery', href: '/cemeteries/central-cemetery' },
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Gunlock Cemetery', href: '/cemeteries/gunlock-cemetery' },
  { label: 'Enterprise Service Area', href: '/service-areas/enterprise' },
  { label: 'Upright Monuments', href: '/headstones/upright-monuments' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
];
</script>
