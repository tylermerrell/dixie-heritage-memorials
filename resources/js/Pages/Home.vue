<template>
  <AppLayout>
    <Head>
      <title>St. George Headstones & Southern Utah Monuments | St. George Memorials</title>
      <meta name="description" content="Custom headstones for every Washington County cemetery — Tonaquint, St. George City, Hurricane, Ivins, Santa Clara, and beyond. St. George and Red Cliffs Temple engravings. VA marker help for Southern Utah National Cemetery." />
      <link rel="canonical" href="https://stgeorgememorials.com/" />
      <meta property="og:title" content="St. George Headstones & Southern Utah Monuments | St. George Memorials" />
      <meta property="og:description" content="Custom headstones for every Washington County cemetery. Temple engravings, VA markers, snowbird ordering. Cemetery approval guaranteed." />
      <meta property="og:url" content="https://stgeorgememorials.com/" />
      <meta name="twitter:title" content="St. George Headstones & Southern Utah Monuments | St. George Memorials" />
      <meta name="twitter:description" content="Custom headstones for every Washington County cemetery. Temple engravings, VA markers." />
    </Head>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-evergreen-deeper text-white">
      <div class="absolute inset-0 bg-[url('/images/hero-bg.jpg')] bg-cover bg-center bg-no-repeat" />
      <div class="absolute inset-0 bg-evergreen-deeper/80 mix-blend-multiply" />
      <div class="absolute inset-0 bg-gradient-to-br from-evergreen-deeper/70 via-evergreen/50 to-evergreen-dark/60" />

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="max-w-3xl">
          <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-4">Southern Utah's Cemetery-Specific Memorial Company</p>
          <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight mb-6">
            Custom Headstones for Every<br class="hidden sm:block" />
            <span class="text-sage-light">Washington County Cemetery</span>
          </h1>
          <p class="text-lg sm:text-xl text-white/80 leading-relaxed mb-8 max-w-2xl">
            From Tonaquint to Pine Valley, from the historic pioneer sections of the St. George City Cemetery to the Veterans Memorial at Cedar City's Southern Utah National Cemetery — we know what the sexton will approve before we quote the stone. St. George Utah Temple and Red Cliffs Utah Temple engravings a specialty.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <button
              @click="openModal"
              class="inline-flex items-center justify-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-4 rounded-lg transition-colors text-base shadow-lg"
            >
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.5-6.5a2.121 2.121 0 013 3L12 16H9v-3z"/></svg>
              Request a Quote
            </button>
            <Link href="/cemeteries" class="inline-flex items-center justify-center gap-2 border border-white/30 hover:border-white/60 text-white font-medium px-8 py-4 rounded-lg transition-colors text-base">
              Browse Cemetery Guides
            </Link>
          </div>
          <div class="flex flex-wrap gap-6 mt-10 text-sm text-white/60">
            <span class="flex items-center gap-2">
              <svg class="w-4 h-4 text-bronze" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Sexton called before we quote
            </span>
            <span class="flex items-center gap-2">
              <svg class="w-4 h-4 text-bronze" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Free consultation, no obligation
            </span>
            <span class="flex items-center gap-2">
              <svg class="w-4 h-4 text-bronze" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Year-round install — no winter freeze delays
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- Trust Ribbon -->
    <section class="bg-evergreen-dark py-3 overflow-hidden">
      <div class="flex whitespace-nowrap animate-marquee text-white/70 text-sm font-medium">
        <span v-for="i in 3" :key="i" class="inline-flex shrink-0">
          <span v-for="cem in trustCemeteries" :key="`${i}-${cem}`" class="inline-flex items-center gap-3 px-6">
            <span class="w-1.5 h-1.5 rounded-full bg-bronze flex-shrink-0" />
            {{ cem }}
          </span>
        </span>
      </div>
    </section>

    <!-- Why us -->
    <section class="py-20 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div>
            <p class="text-bronze text-sm font-semibold uppercase tracking-widest mb-3">Why Families Choose Us</p>
            <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-6">Locally Managed. Built for Southern Utah's Climate, Cemeteries, and Families.</h2>
            <p class="text-granite leading-relaxed mb-8">
              Southern Utah is unique in every way that matters to a headstone. Two LDS temples in Washington County — one built in 1877 from red sandstone, one dedicated in 2024 with a cottonwood-leaf motif — anchor a memorial culture no other Utah market can replicate. Add hard-water calcium, 300+ sunny days a year, the Southern Utah National Cemetery an hour up I-15, and a snowbird retiree population moving between St. George and their home states, and you get a market with rules our Northern Utah competitors have never had to learn.
            </p>
            <ul class="space-y-6">
              <li class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0 mt-0.5">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen mb-1">We know the section-by-section rules</p>
                  <p class="text-granite text-sm leading-relaxed">Tonaquint's upright rows differ from its cremation garden. Hurricane City Cemetery caps upright height at 42 inches. Parowan is flush-only. Ivins requires a 48-hour notice and a 4-to-6-inch concrete apron. We check the exact rules for your block and row before we quote the stone.</p>
                </div>
              </li>
              <li class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0 mt-0.5">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen mb-1">We build for Southern Utah's climate</p>
                  <p class="text-granite text-sm leading-relaxed">Polished jet-black granite for laser-etched portraits and temple silhouettes — the only combination that reliably shrugs off UV, red-rock dust, and calcium staining for decades. We do not put marble in the desert sun.</p>
                </div>
              </li>
              <li class="flex gap-4">
                <div class="w-10 h-10 rounded-lg bg-evergreen flex items-center justify-center flex-shrink-0 mt-0.5">
                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <div>
                  <p class="font-semibold text-evergreen mb-1">You approve the proof before we cut anything</p>
                  <p class="text-granite text-sm leading-relaxed">A digital design layout shows the exact granite color, layout, engraving, and any temple silhouette at real scale. No production, no invoice, and no pressure until you sign off in writing.</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="grid grid-cols-2 gap-5">
            <div v-for="stat in stats" :key="stat.label" class="bg-white rounded-2xl p-6 shadow-sm border border-stone-dark text-center">
              <p class="font-serif text-4xl font-bold text-evergreen mb-2">{{ stat.value }}</p>
              <p class="text-granite text-sm">{{ stat.label }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product grid -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="font-serif text-3xl font-semibold text-evergreen mb-3">Every Style of Headstone, Designed for Washington County</h2>
          <p class="text-granite max-w-xl mx-auto">Same craft standards across every product. Different rules apply cemetery-by-cemetery — we handle that on the back end so you can focus on the design.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <Link
            v-for="cat in productCategories"
            :key="cat.href"
            :href="cat.href"
            class="group overflow-hidden rounded-2xl bg-stone border border-stone-dark hover:border-evergreen transition-colors shadow-sm"
          >
            <div class="h-44 overflow-hidden relative bg-slate-200">
              <img
                :src="cat.image"
                :alt="cat.alt"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
              />
            </div>
            <div class="p-5">
              <h3 class="font-serif text-lg font-semibold text-evergreen group-hover:text-evergreen-light transition-colors mb-1">{{ cat.name }}</h3>
              <p class="text-granite text-sm">{{ cat.desc }}</p>
              <p class="text-bronze text-sm font-medium mt-3">{{ cat.price }}</p>
            </div>
          </Link>
        </div>
        <div class="text-center mt-10">
          <Link href="/headstones" class="inline-flex items-center gap-2 text-evergreen font-semibold hover:text-evergreen-light transition-colors">
            View All Memorial Styles
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </Link>
        </div>
      </div>
    </section>

    <!-- Two temples specialty -->
    <section class="py-20 bg-evergreen text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
          <div>
            <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-4">Washington County's Two Temples</p>
            <h2 class="font-serif text-3xl sm:text-4xl font-semibold mb-5">Temple Engravings, Done Locally</h2>
            <p class="text-white/70 leading-relaxed mb-6">
              The St. George Utah Temple was dedicated in 1877 — the oldest operating temple in the Church of Jesus Christ of Latter-day Saints, and a fixture in more Southern Utah headstone engravings than any other single motif. In 2024, the Red Cliffs Utah Temple joined it. Two temples in one county is a piece of memorial culture no other Utah region can claim, and it is a specialty we design for every week.
            </p>
            <p class="text-white/70 leading-relaxed mb-6">
              We handle both — the traditional castellated silhouette of the St. George Temple in sandblasted line drawing on Barre Gray, and the contemporary cottonwood-leaf profile of Red Cliffs in laser-etched detail on polished jet black. Companion monuments with both temples on one stone are becoming one of our most requested designs.
            </p>
            <div class="flex flex-col sm:flex-row gap-3">
              <Link href="/headstones/st-george-temple-headstones" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm">
                St. George Temple Engravings
              </Link>
              <Link href="/headstones/red-cliffs-temple-headstones" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/60 text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm">
                Red Cliffs Temple Engravings
              </Link>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4 text-sm text-white/80">
            <div v-for="design in heritageDesigns" :key="design" class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3">
              <span class="w-2 h-2 rounded-full bg-bronze flex-shrink-0" />
              {{ design }}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Veterans / SUNC -->
    <section class="py-20 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1 bg-white rounded-2xl border border-stone-dark p-8">
            <h3 class="font-serif text-xl font-semibold text-evergreen mb-3">Your veteran family member has two paths</h3>
            <ul class="space-y-4 text-sm text-granite">
              <li class="flex gap-3">
                <span class="font-semibold text-evergreen flex-shrink-0 w-6">1.</span>
                <span><strong class="text-evergreen">Free VA-issued marker</strong> at Southern Utah National Cemetery or any private/municipal cemetery. Granite flat, marble flat, or bronze — no cost to the family. VA Form 40-1330.</span>
              </li>
              <li class="flex gap-3">
                <span class="font-semibold text-evergreen flex-shrink-0 w-6">2.</span>
                <span><strong class="text-evergreen">Custom private headstone</strong> with a bronze VA medallion affixed — full design flexibility (temple silhouettes, laser portraits, companion monuments) with the VA emblem for post-1990 veterans. VA Form 40-1330M.</span>
              </li>
            </ul>
            <p class="text-xs text-granite italic mt-5">The VA marker is free. We say so. We help families weigh the tradeoff without pressure.</p>
          </div>
          <div class="order-1 lg:order-2">
            <p class="text-bronze text-sm font-semibold uppercase tracking-widest mb-3">Veterans</p>
            <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-5">Southern Utah National Cemetery, Cedar City</h2>
            <p class="text-granite leading-relaxed mb-4">
              Dedicated 10 September 2025, the Southern Utah National Cemetery is the first VA national cemetery in Southern Utah — 45 minutes north of St. George on I-15, in Cedar City. For veteran families who don't want the five-hour round trip to Fort Douglas in Salt Lake, it changes the entire memorial calculus.
            </p>
            <p class="text-granite leading-relaxed mb-6">
              We help families work through the choice between a free VA marker at the national cemetery and a custom private headstone with a VA medallion in a hometown cemetery like Tonaquint or Hurricane. Both are valid. We do not push families toward the more expensive option.
            </p>
            <Link href="/cemeteries/southern-utah-national-cemetery" class="inline-flex items-center gap-2 bg-evergreen hover:bg-evergreen-light text-white font-semibold px-6 py-3 rounded-lg transition-colors text-sm">
              Read the SUNC Family Guide
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- Cemetery finder -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-bronze text-sm font-semibold uppercase tracking-widest mb-3">Cemetery-Specific Guides</p>
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-4">Find Your Cemetery's Rules Before You Order</h2>
        <p class="text-granite text-lg max-w-2xl mx-auto mb-10">
          Every cemetery in Southern Utah has its own regulations for monument size, base requirements, granite color, and decoration. Cities publish these rules as PDFs that nobody reads. We turned them into pages you can search — and use.
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 max-w-4xl mx-auto mb-10">
          <Link
            v-for="cem in featuredCemeteries"
            :key="cem.href"
            :href="cem.href"
            class="bg-stone hover:bg-evergreen hover:text-white border border-stone-dark hover:border-evergreen text-evergreen text-sm font-medium rounded-xl px-3 py-3 transition-colors text-center leading-tight"
          >{{ cem.label }}</Link>
        </div>
        <Link href="/cemeteries" class="inline-flex items-center gap-2 bg-evergreen hover:bg-evergreen-light text-white font-semibold px-8 py-4 rounded-lg transition-colors">
          Browse All Southern Utah Cemetery Guides
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </Link>
      </div>
    </section>

    <!-- Snowbird -->
    <section class="py-20 bg-evergreen-dark text-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">For Snowbird & Part-Year Families</p>
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold mb-5">Ordering From Out of State? We Handle the Coordination.</h2>
        <p class="text-white/70 leading-relaxed mb-8">
          Washington County is a top-ten US snowbird destination. Families often split the year between St. George and home states — Idaho, California, Nevada, Oregon. When death happens, the coordination across state lines is a real pain point that Northern Utah shops rarely handle well. We do this every week. We manage the design coordination by email, coordinate the sexton entirely by phone, and freight the finished monument to the cemetery. You never have to be in Southern Utah for the ordering process.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
          <div class="bg-white/5 rounded-xl p-5">
            <p class="font-serif text-2xl font-semibold text-sage-light mb-2">Design remotely</p>
            <p class="text-white/70 text-sm">Approve the digital proof by email — no cemetery visit required.</p>
          </div>
          <div class="bg-white/5 rounded-xl p-5">
            <p class="font-serif text-2xl font-semibold text-sage-light mb-2">Sexton handled</p>
            <p class="text-white/70 text-sm">We contact your Washington County cemetery on your behalf and get written approval before production.</p>
          </div>
          <div class="bg-white/5 rounded-xl p-5">
            <p class="font-serif text-2xl font-semibold text-sage-light mb-2">Freight direct</p>
            <p class="text-white/70 text-sm">Monument ships from our fabricator directly to the cemetery and we set it under sexton supervision.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How it works -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="font-serif text-3xl font-semibold text-evergreen mb-3">How the Process Works</h2>
          <p class="text-granite text-lg max-w-xl mx-auto">Four steps from your first call to a finished monument. Southern Utah's mild winters mean we install year-round — no November-to-March freeze delays.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <div v-for="step in steps" :key="step.number" class="bg-stone rounded-2xl p-6 border border-stone-dark">
            <div class="w-11 h-11 rounded-full bg-evergreen text-white font-serif text-lg font-semibold flex items-center justify-center mb-4">
              {{ step.number }}
            </div>
            <h3 class="font-serif text-lg font-semibold text-evergreen mb-2">{{ step.title }}</h3>
            <p class="text-granite text-sm leading-relaxed">{{ step.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Southern Utah context -->
    <section class="py-20 bg-stone">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-bronze text-sm font-semibold uppercase tracking-widest mb-3 text-center">Rooted in Southern Utah</p>
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-evergreen mb-6 text-center">Cotton Mission Heritage, Modern Practice</h2>
        <div class="space-y-4 text-granite leading-relaxed">
          <p>
            The pioneer families sent south by Brigham Young in 1861 built the cemeteries where their descendants still rest — St. George City Cemetery, Washington City Cemetery, Santa Clara City Cemetery, and dozens of smaller pioneer burial grounds across five counties. Erastus Snow led the settlement of St. George. Jacob Hamblin, the &ldquo;Peacemaker of the West,&rdquo; built his home in Santa Clara. Silver Reef boomed and busted through the 1870s and 1880s, leaving Catholic, Chinese, and Protestant cemeteries scattered through the sandstone.
          </p>
          <p>
            We are not a call center. We work with one family at a time. We know the rules at Tonaquint's block 3 row 4. We know that Parowan's cemetery is flush-only. We know that Hurricane's plot fee is one price for residents and another for non-residents. We know that pioneer sandstone markers erode faster than granite and we do the restoration work when families ask. This is not a business we run out of Salt Lake or Provo — this is where we live, and it is the only market we serve.
          </p>
        </div>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-evergreen-deeper text-white text-center">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-serif text-3xl sm:text-4xl font-semibold mb-5">Request a Quote</h2>
        <p class="text-white/70 text-lg mb-8">Tell us the cemetery, the section if you know it, and a few details about your loved one. A Southern Utah specialist reaches out within one business day with cemetery-verified options and transparent pricing. No cost. No obligation.</p>
        <button
          @click="openModal"
          class="inline-flex items-center justify-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-10 py-4 rounded-lg transition-colors text-base shadow-xl"
        >
          Request a Quote
        </button>
        <p class="text-white/40 text-sm mt-4">Or call us directly: <a href="tel:+14352543122" class="text-white/60 hover:text-white underline">(435) 254-3122</a></p>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';
import { useJsonLd } from '@/composables/useJsonLd.js';

useJsonLd({
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  '@id': 'https://stgeorgememorials.com/#webpage',
  url: 'https://stgeorgememorials.com/',
  name: 'St. George Headstones & Southern Utah Monuments | St. George Memorials',
  description: 'Custom headstones for every Washington County cemetery. Cemetery approval guaranteed.',
  isPartOf: { '@id': 'https://stgeorgememorials.com/#website' },
  about: { '@id': 'https://stgeorgememorials.com/#business' },
  breadcrumb: {
    '@type': 'BreadcrumbList',
    itemListElement: [
      { '@type': 'ListItem', position: 1, name: 'Home', item: 'https://stgeorgememorials.com/' },
    ],
  },
  mainEntity: {
    '@type': 'ItemList',
    name: 'Memorial Products',
    itemListElement: [
      { '@type': 'ListItem', position: 1, url: 'https://stgeorgememorials.com/headstones/upright-monuments', name: 'Upright Monuments' },
      { '@type': 'ListItem', position: 2, url: 'https://stgeorgememorials.com/headstones/flat-markers', name: 'Flat Grave Markers' },
      { '@type': 'ListItem', position: 3, url: 'https://stgeorgememorials.com/headstones/st-george-temple-headstones', name: 'St. George Temple Engravings' },
      { '@type': 'ListItem', position: 4, url: 'https://stgeorgememorials.com/headstones/red-cliffs-temple-headstones', name: 'Red Cliffs Temple Engravings' },
      { '@type': 'ListItem', position: 5, url: 'https://stgeorgememorials.com/headstones/bronze-memorials', name: 'Bronze VA Markers' },
      { '@type': 'ListItem', position: 6, url: 'https://stgeorgememorials.com/headstones/companion-headstones', name: 'Companion Headstones' },
    ],
  },
});

const { openModal } = useDesignModal();

const steps = [
  {
    number: 1,
    title: 'Tell us your cemetery',
    description: 'The section, block, and row if you know them. Tonaquint\'s rules vary by row. Ivins requires 48-hour notice. Parowan is flush-only. We start here so we quote what will actually be approved.',
  },
  {
    number: 2,
    title: 'We call the sexton',
    description: 'Direct call to the cemetery. Written confirmation of the current dimensions, base requirements, and any section-specific rules. Everything we quote is verified.',
  },
  {
    number: 3,
    title: 'You approve the proof',
    description: 'We coordinate the design, verify cemetery rules, and provide an itemized quote. Nothing goes to production without your written sign-off.',
  },
  {
    number: 4,
    title: 'Fabrication and setting',
    description: 'Manufacture, freight to the cemetery, pour the required concrete apron, and set under sexton supervision. First maintenance cleaning at six months is included.',
  },
];

const trustCemeteries = [
  'Tonaquint Cemetery', 'St. George City Cemetery', 'Hurricane City Cemetery',
  'Ivins City Cemetery', 'Santa Clara Cemetery', 'Washington City Cemetery',
  'Southern Utah National Cemetery', 'Cedar City Cemetery', 'Parowan Cemetery',
  'Kanab City Cemetery', 'Toquerville Cemetery', 'Panguitch City Cemetery',
];

const stats = [
  { value: '30+', label: 'Southern Utah cemeteries with dedicated guides' },
  { value: '2', label: 'LDS temples we engrave in Washington County' },
  { value: '5', label: 'Counties served — Washington, Iron, Kane, Beaver, Garfield' },
  { value: 'Free', label: 'Sexton verification included' },
];

const productCategories = [
  {
    name: 'Upright Monuments',
    desc: 'Traditional standing headstones in granite, marble, or blue pearl. Custom engraved to Southern Utah cemetery specifications.',
    price: 'Starting around $1,200',
    href: '/headstones/upright-monuments',
    image: '/images/products/upright-headstones-8.jpg',
    alt: 'Upright granite headstone at a Washington County cemetery',
  },
  {
    name: 'St. George Temple Engravings',
    desc: 'The 1877 castellated silhouette on jet-black granite. Our specialty. Zero competition on this design in the region.',
    price: 'Complete monument from $1,400',
    href: '/headstones/st-george-temple-headstones',
    image: '/images/products/upright-headstones-4.jpg',
    alt: 'Headstone featuring St. George Utah Temple engraving',
  },
  {
    name: 'Red Cliffs Temple Engravings',
    desc: 'The 2024 contemporary silhouette with cottonwood-leaf motif. Laser-etched on jet black or midnight granite.',
    price: 'Complete monument from $1,400',
    href: '/headstones/red-cliffs-temple-headstones',
    image: '/images/products/upright-headstones-6.jpg',
    alt: 'Headstone featuring Red Cliffs Utah Temple engraving',
  },
  {
    name: 'Bronze VA Markers',
    desc: 'VA-issued bronze markers for eligible veterans — free from the VA, coordinated through us. Also for private-cemetery use with medallion.',
    price: 'VA marker at no cost',
    href: '/headstones/bronze-memorials',
    image: '/images/products/bronze-headstone.jpg',
    alt: 'Bronze grave marker on granite base',
  },
  {
    name: 'Flat & Flush Markers',
    desc: 'Required in flush-only sections — Tonaquint cremation garden, Parowan City Cemetery, Ivins expansion sections.',
    price: 'Starting around $500',
    href: '/headstones/flat-markers',
    image: '/images/products/flat-headstone.jpg',
    alt: 'Flush granite grave marker',
  },
  {
    name: 'Companion Headstones',
    desc: 'Double monuments for spouses and long-married couples. Common in Ivins, Santa Clara, and retirement-community sections.',
    price: 'Starting around $1,800',
    href: '/headstones/companion-headstones',
    image: '/images/products/upright-headstones-1.jpg',
    alt: 'Companion double headstone',
  },
  {
    name: 'LDS Pioneer Motifs',
    desc: 'Cotton Mission heritage designs — sego lily, beehive, sea gull, temple silhouettes. Southern Utah\'s pioneer language.',
    price: 'Add-on from $150',
    href: '/headstones/lds-pioneer-headstones',
    image: '/images/products/upright-headstones-3.jpg',
    alt: 'LDS pioneer heritage headstone motif',
  },
  {
    name: 'Infant & Child Memorials',
    desc: 'Sensitive designs for the Tonaquint Angel section and similar spaces. Handled with the care every family deserves.',
    price: 'From $500',
    href: '/headstones/infant-child-memorials',
    image: '/images/products/flat-headstone.jpg',
    alt: 'Child memorial marker',
  },
];

const heritageDesigns = [
  'St. George Utah Temple silhouette',
  'Red Cliffs Utah Temple silhouette',
  'Cedar City Utah Temple silhouette',
  'Sego lily & Utah state flower',
  'Beehive (pioneer industry symbol)',
  'Sea gull (Utah state bird)',
  'Handcart heritage designs',
  'Cottonwood-leaf motif',
];

const featuredCemeteries = [
  { label: 'Tonaquint', href: '/cemeteries/tonaquint-cemetery' },
  { label: 'St. George City', href: '/cemeteries/st-george-city-cemetery' },
  { label: 'Hurricane City', href: '/cemeteries/hurricane-city-cemetery' },
  { label: 'Ivins City', href: '/cemeteries/ivins-city-cemetery' },
  { label: 'Santa Clara', href: '/cemeteries/santa-clara-cemetery' },
  { label: 'Southern Utah National', href: '/cemeteries/southern-utah-national-cemetery' },
];
</script>

<style scoped>
@keyframes marquee {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-33.333%); }
}
.animate-marquee {
  animation: marquee 40s linear infinite;
}
</style>
