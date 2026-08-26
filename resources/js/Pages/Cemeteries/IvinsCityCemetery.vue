<template>
  <AppLayout>
    <Head>
      <title>Ivins City Cemetery — Rules, Sections & Headstone Design Guide | St. George Memorials</title>
      <meta name="description" content="Ivins City Cemetery at the foot of Red Mountain — cemetery rules, flush-only expansion sections, decoration policies, and headstone design for a growing retirement destination in Washington County." />
      <link rel="canonical" href="https://stgeorgememorials.com/cemeteries/ivins-city-cemetery" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Ivins City Cemetery · Ivins · Washington County</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Ivins City Cemetery — A Family's Guide to Sections & Rules</h1>
        <p class="text-white/70 text-lg max-w-3xl">Ivins City Cemetery sits at the foot of Red Mountain, framed by some of the most dramatic sandstone in Southern Utah. Its section rules reflect the shift from a small pioneer community to a fast-growing retirement destination — older sections permit uprights, newer expansions are flush-only. Here's what families need to know before ordering a headstone.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Location</p>
            <p class="text-sm text-white mt-1">200 W. 400 N., Ivins, UT 84738</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Operator</p>
            <p class="text-sm text-white mt-1">City of Ivins</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Type</p>
            <p class="text-sm text-white mt-1">Public — Municipal</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Notice Required</p>
            <p class="text-sm text-white mt-1">48 hours to city clerk</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Ivins in the 2020s: A Cemetery for a Fast-Growing Town</h2>
            <p>Ivins has been one of Southern Utah's fastest-growing small cities since 2010, driven by retirees drawn to the Red Mountain backdrop and the small-town character that St. George itself has largely outgrown. The cemetery is expanding to keep pace — but the expansions have different rules than the original sections.</p>

            <h3>Old Sections vs. New Expansions</h3>
            <p>The historic Ivins sections permit upright monuments and were laid out on generous plot spacing. Newer expansion sections — added as the city has grown — are largely flush-only for uniform maintenance. If your loved one is buried in an expansion section and you order an upright monument, the city will refuse installation. Confirm your section number with the city clerk before design begins.</p>

            <h3>Concrete Border Requirement</h3>
            <p>Ivins requires a 4-to-6-inch concrete border poured around every monument base. This protects the mowing crew, keeps the granite level as the sandy soil settles, and prevents dust and hard-water accumulation directly on the stone. We include the border in every quote.</p>

            <h3>48-Hour City Notification</h3>
            <p>Ivins requires 48 hours advance notice to the city clerk before any installation, longer than St. George or Hurricane. Plan your schedule accordingly if you're coordinating with an out-of-state family arrival.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Fees & Regulations</h2>
            <p class="text-granite text-sm mb-6">Current rules on file. We verify with the Ivins city clerk before every quote.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="rule in rules" :key="rule.label" class="bg-stone rounded-xl p-4">
                <p class="text-xs font-semibold uppercase tracking-widest text-granite mb-1">{{ rule.label }}</p>
                <p class="text-sm text-evergreen font-medium leading-snug">{{ rule.value }}</p>
              </div>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Grave Decoration Rules</h2>
            <p class="text-granite text-sm mb-5">Ivins enforces decoration rules through a working mowing schedule. Items outside the rules are removed.</p>
            <ul class="space-y-3">
              <li v-for="rule in decorationRules" :key="rule" class="flex gap-3">
                <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-bronze mt-2"></span>
                <span class="text-sm text-granite leading-relaxed">{{ rule }}</span>
              </li>
            </ul>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>History of Ivins City Cemetery</h2>
            <p>Ivins takes its name from Anthony W. Ivins, a Southern Utah stake president and later LDS apostle who was instrumental in early 20th-century irrigation projects that made the small town viable. Ivins was formally established as a community in 1922 when the Santa Clara Bench Reservoir began delivering reliable water to the sandy soil at the foot of Red Mountain. The cemetery holds several generations of the founding irrigation-era families and, in more recent decades, the retirees who came from across the country to spend their final years within sight of some of the most iconic red-rock scenery in the American West.</p>
            <p>The town has also served as the population center closest to the Shivwits Band of Paiute Indians reservation, and the cemetery reflects some of that cross-cultural history. The Shivwits maintain their own burial grounds separately, but Ivins has been the market town and civic hub for the reservation for generations.</p>
            <p>Search for people buried at Ivins City Cemetery on <a href="https://memorialmapper.com/cemetery/234/ivins-city-cemetery" target="_blank" rel="noopener noreferrer" class="text-bronze font-medium underline hover:text-evergreen transition-colors">Memorial Mapper</a>.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Red Mountain Backdrop and Design Considerations</h2>
            <p>Ivins has a design context that no other cemetery in the county quite matches: the massive red sandstone cliff of Red Mountain rises directly north of the grounds. Families designing monuments here often want to reflect the setting in some way. Common approaches:</p>
            <ul>
              <li><strong>Dakota Mahogany granite</strong> — warm red-brown tones that echo the Red Mountain landscape without competing with it.</li>
              <li><strong>Landscape motif engravings</strong> — a simplified Red Mountain silhouette or a Snow Canyon-inspired horizon behind the primary inscription.</li>
              <li><strong>Contrasting jet black</strong> — for families who want the monument to stand as its own distinct visual element rather than blending into the setting.</li>
            </ul>
            <p>Any of these work; the choice is aesthetic and personal.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Memorial Styles for Ivins City Cemetery</h2>
            <p class="text-granite text-sm mb-6">Sample headstone styles for Ivins. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button v-for="(img, i) in gallery" :key="img" class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze" @click="lightboxIndex = i">
                <img :src="img" :alt="`Headstone example ${i + 1} for Ivins City Cemetery`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Starting Prices at Ivins City Cemetery</h2>
            <p class="text-granite text-sm mb-6">Prices delivered and set at Ivins, including foundation and city coordination.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="item in pricing" :key="item.href" :href="item.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ item.name }}</span>
                <span class="text-sm font-semibold text-bronze">{{ item.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">How to Order a Headstone for Ivins</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Order a Headstone for Ivins</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. We verify your section with the city clerk before we quote.</p>
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
        <img :src="gallery[lightboxIndex]" :alt="`Headstone example ${lightboxIndex + 1} at Ivins City Cemetery`" class="max-h-[90vh] max-w-full rounded-lg object-contain" />
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
  { label: 'Upright Headstones', value: 'Permitted in original sections. Flush-only in newer expansion sections.' },
  { label: 'Concrete Border', value: '4–6 inch apron required around every monument.' },
  { label: 'Installation Notice', value: '48 hours minimum notice to Ivins city clerk.' },
  { label: 'Height Maximum', value: 'Verify with city clerk — varies by section.' },
  { label: 'Approval Required', value: 'Yes — dimensions submitted before production.' },
  { label: 'Cremation Section', value: 'Flush markers only.' },
  { label: 'Plot Availability', value: 'Active — new sections opening as city grows.' },
  { label: 'Setting Coordination', value: 'City clerk coordinates the setting appointment.' },
];

const decorationRules = [
  'Flowers, real or artificial, must be secured to the monument or its concrete border.',
  'Glass containers are not permitted anywhere on the grounds.',
  'Freestanding fences, coping stones, and structures around plots are prohibited.',
  'Solar lights and wind chimes are subject to city clerk approval.',
  'Anything obstructing the mowing crew is removed without notice.',
  'Wind-vulnerable items should be avoided given exposure to Red Mountain gusts.',
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
  {
    title: 'Confirm your section number',
    body: 'Ivins rules vary by section. If your plot is in a newer expansion, uprights are prohibited. Section confirmation upfront prevents a rejected design.',
  },
  {
    title: 'We contact the city clerk',
    body: 'We verify the 48-hour notice requirement, height maximum for your section, and current border rules before quoting.',
  },
  {
    title: 'You approve a design proof',
    body: 'Your digital proof shows the monument at exact scale — including any Red Mountain or Snow Canyon landscape motifs you choose. Written approval starts production.',
  },
  {
    title: 'Manufacturing and freight',
    body: 'Typical lead time from proof approval is 8–16 weeks. Southern Utah\'s mild winters mean Ivins installations happen year-round.',
  },
  {
    title: 'Foundation and setting',
    body: 'We pour the required concrete apron, coordinate the setting with the city clerk, and confirm placement.',
  },
];

const faqs = [
  {
    q: 'Where is Ivins City Cemetery?',
    a: 'At 200 West 400 North in Ivins, Utah 84738. The grounds sit directly south of Red Mountain.',
  },
  {
    q: 'Can I put an upright monument at Ivins?',
    a: 'Only in the original sections. Newer expansion sections require flush markers exclusively. Verify your section number with the city clerk before ordering.',
  },
  {
    q: 'How much advance notice does Ivins require?',
    a: 'The city requires 48 hours notice to the clerk before any installation — longer than most Washington County cemeteries. Plan for it.',
  },
  {
    q: 'What granite color reads best against Red Mountain?',
    a: 'Dakota Mahogany echoes the sandstone landscape. Jet Black stands out as a distinct visual element. Both are common choices for Ivins.',
  },
  {
    q: 'Is Ivins the same as the Shivwits Cemetery?',
    a: 'No. The Shivwits Band of Paiute Indians maintains its own burial ground on the reservation. Ivins City Cemetery is the municipal cemetery operated by the City of Ivins.',
  },
  {
    q: 'Can I install a bench memorial at Ivins?',
    a: 'In sections where uprights are permitted, yes. Contact the city clerk to verify placement in your specific section.',
  },
];

const related = [
  { label: 'Santa Clara Cemetery', href: '/cemeteries/santa-clara-cemetery' },
  { label: 'St. George City Cemetery', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Tonaquint Cemetery Guide', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'All Washington County Cemeteries', href: '/cemeteries' },
  { label: 'Ivins Service Area', href: '/service-areas/ivins' },
  { label: 'Flat Markers', href: '/headstones/flat-markers' },
];
</script>
