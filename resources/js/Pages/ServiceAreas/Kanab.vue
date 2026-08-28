<template>
  <AppLayout>
    <Head>
      <title>Custom Headstones in Kanab, Utah — Little Hollywood & Jacob Hamblin's Country | St. George Memorials</title>
      <meta name="description" content="Headstones for Kanab, Utah families — the Kane County seat, filmmaking heritage of Little Hollywood, and site of the Jacob Hamblin monument. Kanab City Cemetery service and delivery from our St. George shop." />
      <link rel="canonical" href="https://stgeorgememorials.com/service-areas/kanab" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Kane County · Service Area · 90 minutes east</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Custom Headstones in Kanab — Little Hollywood and Jacob Hamblin's Country</h1>
        <p class="text-white/70 text-lg max-w-3xl">Kanab is the seat of Kane County and the crossroads of Southern Utah's Western-film history. From the 1920s through the 1970s, Kanab was a filming base for dozens of Hollywood Westerns — earning the nickname "Little Hollywood." The town is also home to a bronze monument to Jacob Hamblin, the Southern Utah pioneer whose Santa Clara home has been preserved.</p>

        <div class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-3 max-w-3xl">
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">County</p>
            <p class="text-sm text-white mt-1">Kane (seat)</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Nickname</p>
            <p class="text-sm text-white mt-1">Little Hollywood</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Drive Time</p>
            <p class="text-sm text-white mt-1">~90 minutes</p>
          </div>
          <div class="bg-white/5 rounded-xl p-3">
            <p class="text-xs text-sage-light uppercase tracking-widest">Landmark</p>
            <p class="text-sm text-white mt-1">Jacob Hamblin monument</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2 space-y-6">

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>The Kane County Seat, and Little Hollywood</h2>
            <p>Kanab was settled in the 1860s by pioneers pushed south from Utah's core Cotton Mission communities, and became the seat of Kane County soon after. Its striking red-rock canyons and desert landscape attracted Hollywood filmmakers starting in the 1920s, and dozens of classic Westerns were filmed in and around Kanab — earning the town the "Little Hollywood" nickname it still carries. That heritage is visible today at the Little Hollywood Museum downtown.</p>
            <p>Kanab is also the location of the Jacob Hamblin monument — a bronze sculpture of Hamblin and his horse honoring the pioneer missionary whose diplomacy with Southern Paiute and other Native nations opened the region to settlement. For families with pioneer descent, that heritage remains a design consideration on headstones here.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Cemeteries in and Near Kanab</h2>
            <p class="text-granite text-sm mb-6">The city cemetery plus Kane County outlying cemeteries and the Fredonia (AZ) cross-border option.</p>
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
            <h2>Kanab City Cemetery — Rules Snapshot</h2>
            <p>Kanab City Cemetery is administered by the City of Kanab. Elevation is around 4,900 feet — high enough for meaningful winter freezes but milder than Cedar City. We use foundation depths matched to that elevation. The cemetery follows standard patterns: sexton advance notice, concrete apron, section-specific rules.</p>
            <p>Because Kanab is a tourism town, the cemetery also serves families of long-time residents who left for larger cities but wished to be buried at home. That "returning home" pattern is more common in Kanab than in most cemeteries we serve.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Design Elements Distinctive to Kanab</h2>
            <p>Kanab's cinematic and pioneer heritage occasionally shapes headstone design. We've built stones with Western-motif carvings (a saddle, a horse silhouette) for families with movie-industry connections, and stones honoring Jacob Hamblin's peacemaking heritage for descendants of the pioneer generation. Neither is standard — most Kanab families choose conventional designs — but the options exist and are worth knowing about.</p>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-2">Popular Headstone Styles in Kanab</h2>
            <p class="text-granite text-sm mb-6">Mixed — from pioneer heritage designs to modern uprights.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <Link v-for="type in headstoneTypes" :key="type.href" :href="type.href" class="flex items-center justify-between p-4 rounded-xl border border-stone-dark hover:border-evergreen hover:shadow-sm transition-all group">
                <span class="text-sm font-medium text-evergreen group-hover:text-evergreen-light">{{ type.name }}</span>
                <span class="text-xs text-bronze font-semibold">{{ type.price }}</span>
              </Link>
            </div>
          </div>

          <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
            <h2>Delivery & Installation to Kanab</h2>
            <p>Kanab is about 90 minutes east of our St. George shop via SR-9 and US-89, one of the longer regular runs in our service footprint. Freight cost is higher, and we often consolidate a Kanab trip with nearby Fredonia (Arizona) and Orderville installations to reduce per-monument freight. Lead time is 12–20 weeks. The Kanab installation window is narrower in December and January but broader than Cedar City or Parowan.</p>
          </div>


          <div class="bg-white rounded-2xl border border-stone-dark p-6">
            <h2 class="font-serif text-xl font-semibold text-evergreen mb-1">Memorial Style Examples</h2>
            <p class="text-granite text-sm mb-4">Headstone styles we craft for Kanab families — verified against local cemetery rules before production. Tap any image to enlarge.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
              <button
                v-for="(img, i) in gallery"
                :key="img"
                class="aspect-[4/3] overflow-hidden rounded-xl bg-stone hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-bronze"
                @click="lightboxIndex = i"
              >
                <img :src="img" :alt="`Headstone and monument example for Kanab`" class="w-full h-full object-cover" />
              </button>
            </div>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <h2 class="font-serif text-2xl font-semibold text-evergreen mb-6">Frequently Asked Questions — Kanab</h2>
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
            <h3 class="font-serif text-xl font-semibold mb-3">Design a Kanab Memorial</h3>
            <p class="text-white/70 text-sm mb-5">Free consultation. Kane County heritage design available, from pioneer to Western cinematic motifs.</p>
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
  { name: 'Kanab City Cemetery', note: 'Main Kane County municipal cemetery', href: '/cemeteries/kanab-city-cemetery' },
  { name: 'Fredonia Cemetery (AZ)', note: '10 min south, Arizona Strip', href: '/cemeteries/fredonia-cemetery' },
  { name: 'Orderville Cemetery', note: '25 min north, United Order heritage', href: '/cemeteries/orderville-cemetery' },
  { name: 'Glendale Cemetery', note: '30 min north, small pioneer', href: '/cemeteries/glendale-cemetery' },
];

const headstoneTypes = [
  { name: 'Upright Monuments', price: 'From $1,200', href: '/headstones/upright-monuments' },
  { name: 'LDS Pioneer Designs', price: 'From $1,300', href: '/headstones/lds-pioneer-headstones' },
  { name: 'Custom Engraving', price: 'Quoted per design', href: '/headstones/custom-engraving' },
  { name: 'Flat & Flush Markers', price: 'From $500', href: '/headstones/flat-markers' },
  { name: 'Companion Headstones', price: 'From $1,800', href: '/headstones/companion-headstones' },
  { name: 'Bronze / VA Markers', price: 'From $900', href: '/headstones/bronze-memorials' },
];

const faqs = [
  {
    q: 'Where is the Jacob Hamblin monument in Kanab?',
    a: 'The bronze sculpture of Jacob Hamblin and his horse is located in downtown Kanab and honors his role as the "Peacemaker of the West." Jacob Hamblin himself is buried in Alpine, Arizona, but his descendants and neighbors are represented in Kanab and Santa Clara cemeteries.',
  },
  {
    q: 'Can I get a Western-motif engraving for a Kanab family member with movie-industry connections?',
    a: 'Yes. We\'ve designed stones with saddle, horse, and pioneer wagon motifs for Kanab families whose relatives worked in the Little Hollywood era. Custom engraving pricing depends on complexity.',
  },
  {
    q: 'How much longer is Kanab freight than St. George?',
    a: 'Approximately 90 minutes each way. Freight surcharge typically adds $150–$300 to the installation compared to a St. George base. We often consolidate Kanab, Fredonia, and Orderville trips to reduce per-monument cost.',
  },
  {
    q: 'Can I bury at Kanab City Cemetery if I do not live in Kanab?',
    a: 'Yes, but non-resident plot fees are typically higher. Many Kanab families keep plots for members who moved away — the "returning home" pattern is common here.',
  },
];

const related = [
  { label: 'Kanab Cemetery Guide', href: '/cemeteries/kanab-city-cemetery' },
  { label: 'Fredonia Service Area (AZ)', href: '/service-areas/fredonia' },
  { label: 'Orderville Service Area', href: '/service-areas/orderville' },
  { label: 'Custom Engraving', href: '/headstones/custom-engraving' },
  { label: 'LDS Pioneer Headstones', href: '/headstones/lds-pioneer-headstones' },
  { label: 'All Kane County Cemeteries', href: '/cemeteries' },
];
const gallery = [
  '/images/products/upright-headstones-6.jpg',
  '/images/products/upright-headstones-7.jpg',
  '/images/products/flat-headstone-3.jpg',
  '/images/products/slant-headstone-3.jpg',
  '/images/products/bronze-headstone-5.jpg',
  '/images/products/bevel-headstone-2.jpg',
];
</script>
