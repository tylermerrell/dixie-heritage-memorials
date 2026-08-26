<template>
  <AppLayout>
    <Head>
      <title>Washington County Headstone Pricing 2026 | St. George Memorials</title>
      <meta name="description" content="Transparent 2026 pricing for headstones in Washington County, Utah — including Tonaquint concrete apron adder, VA offsets for veterans, snowbird freight, and rush vs. standard timeline. What Northern Utah shops don't include." />
      <link rel="canonical" href="https://stgeorgememorials.com/resources/pricing" />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Pricing</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Washington County Headstone Pricing — 2026</h1>
        <p class="text-white/70 text-lg max-w-3xl">Every price includes the local anchors — Tonaquint's concrete apron, sexton coordination, freight to the cemetery, and first-year cleaning. Nothing added at delivery. Nothing hidden.</p>
      </div>
    </section>

    <section class="py-16 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Pricing cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-14">
          <div v-for="item in pricing" :key="item.title" class="bg-white rounded-2xl border border-stone-dark p-6 flex flex-col">
            <h2 class="font-serif text-lg font-semibold text-evergreen mb-1">{{ item.title }}</h2>
            <div class="text-2xl font-bold text-bronze mb-3">{{ item.range }}</div>
            <p class="text-sm text-granite mb-4 leading-relaxed">{{ item.description }}</p>
            <ul class="space-y-1.5 text-sm text-granite mb-4">
              <li v-for="note in item.notes" :key="note" class="flex items-start gap-2">
                <svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ note }}
              </li>
            </ul>
            <Link v-if="item.href" :href="item.href" class="mt-auto text-sm text-bronze font-medium hover:text-bronze-dark flex items-center gap-1">
              Product details
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </Link>
          </div>
        </div>

        <!-- Included / not included -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-14">
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <p class="text-xs font-semibold uppercase tracking-widest text-evergreen mb-3">Included in our quote</p>
            <ul class="space-y-2.5 text-sm text-granite">
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Granite monument, cut and polished to spec</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>All engraving — name, dates, epitaph, symbols, temple silhouette</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Digital design proof at exact scale (unlimited revisions until you approve)</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Sexton coordination — we call your cemetery, verify current rules for your section, and submit dimensions for approval</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Required concrete apron / mow strip (Tonaquint 4–6 inch, Ivins 4–6 inch, Hurricane rock-pitch base, etc.)</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Freight to any Washington, Iron, Kane, Beaver, or Garfield County cemetery</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>Professional setting under sexton supervision</span></li>
              <li class="flex gap-2"><svg class="w-4 h-4 text-evergreen flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span>First-year maintenance cleaning at six months (to address first-season hard-water spotting)</span></li>
            </ul>
          </div>
          <div class="bg-white rounded-2xl border border-stone-dark p-8">
            <p class="text-xs font-semibold uppercase tracking-widest text-evergreen mb-3">Not included (paid separately to the city)</p>
            <ul class="space-y-2.5 text-sm text-granite">
              <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-granite flex-shrink-0 mt-2"></span><span><strong class="text-evergreen">Plot cost</strong> — paid directly to the city cemetery. Hurricane: $550 resident, $2,000 non-resident. Other cities vary; contact the sexton for current rates.</span></li>
              <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-granite flex-shrink-0 mt-2"></span><span><strong class="text-evergreen">Burial / opening & closing fees</strong> — cemetery labor for the actual interment. Paid to the city.</span></li>
              <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-granite flex-shrink-0 mt-2"></span><span><strong class="text-evergreen">Perpetual care</strong> — where applicable, paid at plot purchase to the city, not the monument company.</span></li>
              <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-granite flex-shrink-0 mt-2"></span><span><strong class="text-evergreen">Funeral home services</strong> — the monument is separate from funeral arrangements.</span></li>
            </ul>
          </div>
        </div>

        <!-- Comparison table -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8 mb-10">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-4">Buying direct vs. buying through the funeral home</h2>
          <p class="text-sm text-granite mb-6">The same physical monument, quoted through different channels. Utah families are not legally required to buy the headstone from the funeral home handling arrangements — the FTC Funeral Rule specifically protects the right to shop direct.</p>
          <div class="overflow-x-auto">
            <table class="w-full text-sm">
              <thead>
                <tr class="bg-stone">
                  <th class="text-left px-4 py-3 font-semibold text-evergreen">Line item</th>
                  <th class="text-right px-4 py-3 font-semibold text-evergreen">Direct with us</th>
                  <th class="text-right px-4 py-3 font-semibold text-evergreen">Through funeral home</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-stone-dark"><td class="px-4 py-3">Standard upright monument (36" x 24" jet black)</td><td class="text-right px-4 py-3">$2,400</td><td class="text-right px-4 py-3">$3,600 – $4,200</td></tr>
                <tr class="border-b border-stone-dark bg-cream/30"><td class="px-4 py-3">Companion double monument (48" x 24")</td><td class="text-right px-4 py-3">$3,600</td><td class="text-right px-4 py-3">$5,400 – $6,300</td></tr>
                <tr class="border-b border-stone-dark"><td class="px-4 py-3">Flat marker with basic engraving</td><td class="text-right px-4 py-3">$650</td><td class="text-right px-4 py-3">$1,000 – $1,200</td></tr>
                <tr class="border-b border-stone-dark bg-cream/30"><td class="px-4 py-3">Bronze marker (VA-eligible veteran)</td><td class="text-right px-4 py-3">$0 (from VA)</td><td class="text-right px-4 py-3">$400+ setting fee</td></tr>
                <tr class="border-b border-stone-dark"><td class="px-4 py-3">Temple engraving add-on (St. George or Red Cliffs)</td><td class="text-right px-4 py-3">$250 – $600</td><td class="text-right px-4 py-3">$400 – $900</td></tr>
              </tbody>
            </table>
          </div>
          <p class="text-xs text-granite italic mt-4">Funeral home pricing varies. These are approximate ranges reflecting the 30–60% typical markup we see quoted for the same monument. Ask any funeral home for an itemized quote and you can verify.</p>
        </div>

        <!-- Cemetery-specific adders -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8 mb-10 prose-custom">
          <h2>Cemetery-specific adders in Washington County</h2>
          <p>Some Southern Utah cemeteries have specific installation requirements that add to base pricing. These are included in every quote we produce — but if you're comparing to a Northern Utah shop, verify what they include.</p>
          <ul>
            <li><strong>Tonaquint concrete apron (4–6 inch):</strong> included. Never quote without it.</li>
            <li><strong>Ivins concrete apron and 48-hour advance notice fee:</strong> included.</li>
            <li><strong>Hurricane rock-pitch base:</strong> included where the sexton requires it.</li>
            <li><strong>Santa Clara first-grade granite verification:</strong> we source only first-grade granite for Santa Clara — no first-grade markup because it's our standard everywhere.</li>
            <li><strong>Cedar City / higher-elevation freeze-adjusted foundation:</strong> +$150–$300 for the deeper concrete pour where frost matters. Included in Cedar City, Enterprise, Central, and Panguitch quotes.</li>
          </ul>
        </div>

        <!-- Snowbird / out of state -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8 mb-10 prose-custom">
          <h2>Snowbird & out-of-state ordering</h2>
          <p>Freight to a Washington County cemetery does not add meaningful cost — the monument is being freighted either way. Coordination is the value we add for out-of-state families, and we do not upcharge it. Design proof by email, sexton called on your behalf, monument freighted directly to the cemetery, setting under sexton supervision, photo documentation to you at completion.</p>
          <p>For families who do want an expedited timeline (typically for a Memorial Day or anniversary date), we offer rush production at a $200–$400 add-on. This buys about 3 weeks in the manufacturing step. Sexton approval and freight timelines are fixed and cannot be compressed.</p>
        </div>

        <!-- Budget tiers -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8 mb-10 prose-custom">
          <h2>Budget tier framing</h2>
          <p>Most Washington County families fall into one of three budget tiers. Each is a valid choice for the right family:</p>
          <ul>
            <li><strong>Under $1,500 — flat / flush marker path.</strong> Suitable at any cemetery, required in Parowan and flush-only sections. Gets you a dignified, well-engraved granite marker. Common for cremation garden installations and for families wanting a lower-profile memorial.</li>
            <li><strong>$1,500 – $3,500 — upright monument path.</strong> The traditional Southern Utah headstone. Includes room for a temple silhouette or basic laser-etched motif. Common at Tonaquint upright rows, Hurricane, Ivins, Washington City.</li>
            <li><strong>$3,500 – $9,000 — companion or custom upright path.</strong> Double monument for a couple, or a single upright with photorealistic laser-etched portrait plus temple silhouette. Common in retirement-community sections and for pre-planned memorials.</li>
          </ul>
          <p>Bench memorials, civic monuments, and elaborate custom pedestals fall above this range. The pricing guide is a starting point — we produce written itemized quotes for every specific order.</p>
        </div>

        <!-- What affects price -->
        <div class="bg-white rounded-2xl border border-stone-dark p-8 prose-custom">
          <h2>What actually moves the price</h2>
          <ul>
            <li><strong>Size.</strong> Larger monuments require more granite and more elaborate foundations.</li>
            <li><strong>Granite color.</strong> Imported granites (Blue Pearl from Norway) run higher than domestic black or gray. Dakota Mahogany is mid-range.</li>
            <li><strong>Engraving complexity.</strong> Simple lettering is the base; laser-etched portraits and detailed temple silhouettes add materially.</li>
            <li><strong>Foundation depth.</strong> High-elevation cemeteries (Cedar City, Enterprise, Panguitch) need freeze-rated foundations. Tonaquint's concrete apron is standard.</li>
            <li><strong>Bronze vs. granite.</strong> Bronze runs higher than equivalent granite due to material and casting time — unless it's a free VA-issued bronze marker for a veteran, which is free.</li>
            <li><strong>Rush timeline.</strong> $200–$400 to compress the manufacturing window when Memorial Day or an anniversary is fixed.</li>
          </ul>
        </div>

        <!-- CTA -->
        <div class="text-center mt-14">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-3">Get an itemized written quote</h2>
          <p class="text-granite mb-6 max-w-xl mx-auto">Every quote we produce is itemized — stone, engraving, apron, freight, sexton coordination, first cleaning. Tell us the cemetery and the style you're considering; we'll respond within one business day.</p>
          <Link href="/contact" class="inline-flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-8 py-3.5 rounded-lg transition-colors">Request a Free Design Proof & Quote</Link>
        </div>

      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const pricing = [
  {
    title: 'Flat & Flush Markers',
    range: '$500 – $1,800',
    description: 'Polished granite flush markers. Required at Parowan City Cemetery and in Tonaquint\'s cremation garden. The most affordable option and often the required one.',
    notes: ['Standard sizes: 12"×24" to 20"×36"', 'Custom lettering & engraving included', 'Concrete apron included where required'],
    href: '/headstones/flat-markers',
  },
  {
    title: 'Slant & Bevel Markers',
    range: '$700 – $2,000',
    description: 'Angled markers with higher visibility than flush. The angled face resists dust and pollen accumulation better than flat markers in Southern Utah\'s desert.',
    notes: ['Polished face for portraits', 'Common in older Ivins and Santa Clara sections', 'Foundation base included'],
    href: '/headstones/slant-markers',
  },
  {
    title: 'Upright Monuments',
    range: '$1,200 – $4,000+',
    description: 'The traditional standing headstone. Permitted at most Washington County cemeteries within section-specific height caps. Section rules at Tonaquint and Hurricane matter here.',
    notes: ['42-inch max at Hurricane City Cemetery', '36-inch max at Washington City Cemetery', 'Includes required concrete apron'],
    href: '/headstones/upright-monuments',
  },
  {
    title: 'Companion / Double Monuments',
    range: '$1,800 – $9,000+',
    description: 'For spouses and long-married couples. Common for snowbird retiree pairs planning ahead. One side engraved now, second inscription added later at no re-mobilization fee.',
    notes: ['Second-inscription add-on typically $200–$400', 'St. George Temple + Red Cliffs Temple on one stone available', 'Foundation sized for combined weight'],
    href: '/headstones/companion-headstones',
  },
  {
    title: 'St. George Temple Engraving',
    range: '+$150 – $700',
    description: 'The 1877 castellated silhouette added to any upright, slant, or flush marker. Best rendered as sandblast on Barre Gray or laser etch on jet black. Add-on to base monument price.',
    notes: ['Full silhouette, tower-only, photorealistic, or combined motif', 'Jet black recommended for laser etch', 'Same pricing whether applied to a new or existing order'],
    href: '/headstones/st-george-temple-headstones',
  },
  {
    title: 'Red Cliffs Temple Engraving',
    range: '+$175 – $850',
    description: 'The 2024 contemporary silhouette with cottonwood-leaf motif. Best on polished jet black or Dakota Mahogany. Zero competition on this design in Southern Utah.',
    notes: ['Contemporary silhouette or tower + leaf', 'Photorealistic laser etch option', 'Both-temples-on-one-stone design available'],
    href: '/headstones/red-cliffs-temple-headstones',
  },
  {
    title: 'Bronze Markers',
    range: '$900 – $2,500',
    description: 'Cast bronze on granite bases. Standard at Southern Utah National Cemetery. Free for eligible veterans in any cemetery — the VA supplies the marker, we help with the application.',
    notes: ['Free VA marker for eligible veterans (VA Form 40-1330)', 'VA medallion for private stone (Form 40-1330M)', 'UV-resistant patina finish'],
    href: '/headstones/bronze-memorials',
  },
  {
    title: 'Bench Memorials',
    range: '$3,500 – $7,500',
    description: 'Functional visitor seating in Southern Utah\'s summer heat. Red-rock landscape integration common. Sizing varies by cemetery — verify section allowance first.',
    notes: ['Granite construction, weathered finish options', 'Family seating for cemetery visits', 'Not permitted in all sections'],
    href: '/headstones/bench-memorials',
  },
  {
    title: 'Monument Restoration',
    range: '$200 – $1,500',
    description: 'Cleaning, resetting, re-engraving for older Southern Utah memorials. Pioneer-era sandstone restoration is a regional specialty — we handle the work most Northern Utah shops decline.',
    notes: ['Hard-water calcium deposit removal', 'Pioneer sandstone stabilization', 'Cemetery approval handled for you'],
    href: '/headstones/restoration',
  },
];
</script>
