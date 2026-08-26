# St. George Memorials — SEO Research & Content Strategy

**Purpose:** Ground-up SEO research for stgeorgememorials.com so every piece of content on the site can rank for the searches that put customers in front of us — and so nothing on the site duplicates content from genevamemorials.com. This document is the source of truth for what pages to build, what keywords each targets, what angles to write from, and how to differentiate from our Utah County sister site.

**Audience for this doc:** the writer(s) / dev team producing the site content. Every page brief below is written to be handed to a writer and produce a unique, ranking page.

**Domain:** stgeorgememorials.com
**Brand as currently in code:** "St. George Memorials" (in `resources/js/Layouts/AppLayout.vue`). **Recommendation:** move the primary brand to **"St. George Memorials"** to match the domain and dominant search behavior; use "Dixie" only as heritage/legacy language sparingly (see §3.5). The existing folder was preserved as requested — updating the brand string is a follow-on decision, not part of this research.

---

## Table of contents

1. [Executive summary](#1-executive-summary)
2. [Competitive landscape](#2-competitive-landscape)
3. [Regional & demographic context](#3-regional--demographic-context)
4. [Keyword universe](#4-keyword-universe)
5. [Site architecture & URL plan](#5-site-architecture--url-plan)
6. [Per-page content briefs — product / headstone type pages](#6-per-page-content-briefs--product--headstone-type-pages)
7. [Per-page content briefs — service-area pages](#7-per-page-content-briefs--service-area-pages)
8. [Per-page content briefs — cemetery guide pages](#8-per-page-content-briefs--cemetery-guide-pages)
9. [Resource-article roadmap (must be different from Geneva)](#9-resource-article-roadmap-must-be-different-from-geneva)
10. [Technical SEO recommendations](#10-technical-seo-recommendations)
11. [Uniqueness checklist (vs. Geneva)](#11-uniqueness-checklist-vs-geneva)
12. [Sources](#12-sources)

---

## 1. Executive summary

### 1.1 The market in one paragraph

Washington County is a ~200k-population market growing 3%+ annually, anchored by St. George (~111k people, fastest-growing US metro of the early 2020s). It has an older-skewing, LDS-heavy, retiree-dense population — combined with a permanent snowbird flow and a large Southern Utah National Cemetery (Cedar City, opened Sep 2025) that pulls veteran demand into our footprint. The desert climate, hard water, high UV, and two major LDS temples (St. George Utah Temple 1877, Red Cliffs Utah Temple 2024) create SEO angles Geneva Memorials **cannot** copy without lying to their audience.

### 1.2 Our SEO thesis

We win by out-covering the local competitors on **specific cemetery pages** and **specific city pages**, then dominating a resource library of Southern-Utah-specific how-to and comparison articles that the existing competitors (Kenworthy, Utah Monument Co, Rocky Mountain Monument, DuCrest) do not have. All three of the strongest competitors are old-school local shops with thin websites and no content marketing. That is the wedge.

### 1.3 The three primary keyword clusters

1. **Local commercial** — "headstones st george utah", "washington county monument company", "hurricane utah headstone" (this is where Kenworthy competes).
2. **Cemetery-specific** — "tonaquint cemetery rules", "hurricane city cemetery headstone regulations", "ivins city cemetery plot cost" (mostly uncontested — cities publish PDFs, no competitor has SEO-friendly pages).
3. **Informational / long-tail** — "how to clean hard water off a headstone in Utah", "St. George Utah Temple headstone engraving", "VA headstone Southern Utah National Cemetery" (also mostly uncontested).

### 1.4 Content differentiation rule of thumb

If a page on genevamemorials.com and the same page on stgeorgememorials.com could both be true, the St. George page is generic and needs a rewrite. Every page should reference at least one of: a specific Washington County cemetery, a specific city (St. George, Hurricane, Ivins, Santa Clara, Washington City, La Verkin, Toquerville, Enterprise, etc.), a Washington County LDS temple, the desert/hard-water environment, or a Southern Utah pioneer / historical reference (Jacob Hamblin, Silver Reef, Erastus Snow, Brigham Young Winter Home, Cotton Mission).

### 1.5 Priority order (build in this sequence)

Rank-hardest last, and go after uncontested pages first:

1. **Cemetery guide pages** (22 Washington County + 3 ghost-town / historical) — build these before anything else. Almost zero competition in SERPs and highest local commercial intent.
2. **Service-area / city pages** (St. George, Hurricane, Washington City, Ivins, Santa Clara, La Verkin, Toquerville, Enterprise, plus overflow into Kane / Iron / Beaver / Garfield). Kenworthy and DuCrest have thin location pages we can beat.
3. **Headstone / product-type pages** rewritten from scratch — every type of headstone Geneva has, plus two unique-to-us: **St. George Temple headstones** and **Red Cliffs Temple headstones** (these do not exist on Geneva).
4. **Resource library** — 20+ articles, none duplicated from Geneva (see §9).
5. **Homepage** rewrite — last, because the homepage should reflect the pages that exist.

---

## 2. Competitive landscape

### 2.1 Direct competitors (headstone / monument shops)

| Company | URL | Age | Locations claimed | SEO strengths | SEO weaknesses |
|---|---|---|---|---|---|
| **Kenworthy Monuments** | kenworthymonuments.com | Multi-generational | St. George, Hurricane, Washington, Ivins, Santa Clara, Cedar City, Veyo, Kanab, Mesquite | Own "Monuments and Headstones in St. George, Utah" H1. Has one Southern-Utah-specific content asset (hard-water cleaning). 9 location pages. Product category depth (uprights / benches / slants / flats / cremation / pet / laser-etched). | Thin homepage copy. No cemetery-specific pages. No resource library / blog. No temple content. No veteran content. |
| **Utah Monument Company (Connell's)** | utahmonumentcompany.com | 55 years, 3 generations | St. George (510 E Tabernacle) | Strong "family / three generations" narrative. Directory citations. | Minimal site — 6 pages total. No product depth. No location pages beyond St. George. |
| **Rocky Mountain Monument & Vault** | rockymountainvault.com | Since 1985 | UT / ID / WY / western CO / NV / northern AZ (regional) | Multi-state coverage. Also sells burial vaults (DORIC) — a moat we shouldn't chase. | Generic "areas served" template pages. Not focused on St. George narratives. |
| **DuCrest Monument Company** | ducrestmonument.com | — | St. George, Washington, Ivins, Santa Clara, Hurricane Valley | Local coverage. | Very small site, no depth. |

### 2.2 Adjacent / online competitors

- **ProMonuments** — sells nationally with a "St George Memorial Headstone" landing page. Thin, templated content. Beatable.
- **BuyGraveMarkers.com** — Utah page, national vendor.
- **Utah Headstone Design** (Layton) — reaches into southern Utah via mail-order.
- **Cache Valley Monuments** — northern-Utah shop but has good "hard water" content that ranks nationally.
- **Great Basin Monuments** (Las Vegas) — cross-border into Mesquite / St. George.

### 2.3 What competitors are NOT doing (our opportunity)

Every one of these gaps is a page we should build:

- **No competitor has a searchable Washington County cemetery guide.** Cities publish PDFs — Google can't parse those well.
- **No competitor has a St. George Utah Temple headstone page** (temple-engraving specialty).
- **No competitor has a Red Cliffs Utah Temple headstone page** (opened 2024, huge unmet demand from families whose loved ones' funerals were held around the dedication).
- **No competitor has a Southern Utah National Cemetery guide** (opened Sep 2025 — every veteran family in the region is going to search this in the next 5 years).
- **No competitor has a hard-water-in-southern-Utah cleaning guide with photos and step-by-step** (Kenworthy has *one* paragraph; Cache Valley has a generic post).
- **No competitor has a snowbird / part-year resident pre-planning page.**
- **No competitor has a "how to order a headstone from out of state" page** targeting families who moved children or grandparents to St. George for retirement then moved home.
- **No competitor has a Shivwits Paiute cemetery / Native American memorial page.**
- **No competitor has any grief / bereavement resource content** — this is table stakes elsewhere.

### 2.4 Competitor headline patterns to beat (or invert)

| Competitor pattern | Our upgrade |
|---|---|
| "Monuments and Headstones in St. George, Utah" (Kenworthy H1) | "Custom Headstones for Every Washington County Cemetery — Design, Approval, Delivery" |
| "Custom Memorials — 55 Years Experience" (Utah Monument) | Lead with the customer, not our tenure. Their moat is the tenure story; ours has to be transparency + digital process. |
| "Family owned since 1985" (Rocky Mountain) | "Locally managed. Built for Southern Utah's climate, cemeteries, and families." |

---

## 3. Regional & demographic context

### 3.1 Population & growth

- **St. George city:** 111,344 (2026), growing 2.42% annually. Median household income $76,508. Median age 38.3. 22,225 seniors.
- **Washington County:** ~195,500 (2022), 3.16% annual growth.
- **Fastest-growing metro area in the US** as of March 2022.

**SEO implication:** growth = constant new residents who don't know the local cemetery landscape. Content that orients newcomers ("moving to St. George — cemetery options in Washington County") gets a steady click stream.

### 3.2 Religious composition

- Predominantly Latter-day Saint, though less concentrated than Utah County.
- **Two LDS temples in the county:**
  - **St. George Utah Temple** — dedicated 1877, the *oldest operating temple* in the LDS Church. Castellated Neo-Gothic, native red sandstone plastered white.
  - **Red Cliffs Utah Temple** — dedicated 24 Mar 2024. 230 ft tall. Exterior inspired by cottonwood trees and red rock canyons. Stylized cottonwood leaves on the exterior walls and tower.
- Nearby: **Cedar City Utah Temple** (Iron County, dedicated 2017).

**SEO implication:** Temple-engraving content is a highly localized moat. Geneva can only own the Provo / Mount Timpanogos / Payson temples. We own St. George Temple + Red Cliffs Temple.

### 3.3 Veterans

- **Southern Utah National Cemetery** — Cedar City, 2181 W 1600 S, dedicated 10 Sep 2025. 157th VA-operated cemetery. Capacity ~13,434 gravesites, ~215 interments/year.
- **Fort Douglas Military Cemetery** (Salt Lake City) is on the Deseret Memorials site, but retirees in St. George often have veteran spouses/parents interred at Fort Douglas.
- VA provides free markers (flat granite / marble / bronze, upright granite / marble) to eligible veterans, regardless of date of death, in any cemetery — including private cemeteries — since Nov 1990.

**SEO implication:** "VA headstone Southern Utah National Cemetery" is a *fresh* keyword (cemetery is 11 months old at time of writing). We should own it.

### 3.4 Snowbirds & retirees

Washington County is a top-10 US snowbird destination. Families often live 6 months in St. George / 6 months elsewhere. When death occurs "back home," the family may still want burial in St. George near a Winter Home congregation, or vice versa. Interstate coordination is a real pain point.

**SEO implication:** "how to order a headstone from out of state Utah", "pre-need headstone snowbird", "shipping a headstone to St. George" are underserved queries with high commercial intent.

### 3.5 The "Dixie" question — how to handle it

Historical context: The region has been called "Utah's Dixie" since the 1860s (cotton mission, warm climate — not Confederate). "Dixie" has been contested since 2020 and formally removed from the state university's name (Dixie State → Utah Tech, effective July 2022). Utah Tech re-introduced a limited "Dixie" heritage line in March 2026, and the term remains politically live.

**SEO / editorial rule of thumb:**
- **Primary geographic anchor across the site: "Southern Utah" and "Washington County"** (these are ~5–10× the search volume of "Dixie" in cemetery/headstone contexts).
- **Use "Dixie" only where it appears in proper nouns** (e.g., "1777 S. Dixie Drive" is the actual Tonaquint Cemetery address; "Dixie Drive" is a street name; some older residents still self-identify as Dixie natives).
- **Do not use "Dixie" in H1s, meta titles, or nav.**
- **Do not use "Dixie" in product / service page copy** at all.
- Optional: one heritage / history article ("A brief history of Utah's Dixie and the Cotton Mission") if it can be written respectfully and factually. Skip if not.

### 3.6 Climate & environment (unique content angles)

- **Extreme UV** — St. George gets ~300 sunny days/year. Impacts granite color choice: dark stones (jet black, dakota mahogany) hold color; lighter stones (imperial red, salt & pepper) show pollen/dust more.
- **Hard water** — Southern Utah has some of the hardest municipal water in the state. Calcium deposits on headstones are a documented Southern-Utah phenomenon (Kenworthy touches on it; nobody has a full guide).
- **Dust storms & red-rock dust** — infiltrates carved lettering, especially over sandblast-etched stones.
- **Freeze-thaw is mild** but not zero — Cedar City / Enterprise / high-elevation cemeteries (Pine Valley, Central) do freeze.
- **Wildfire proximity** — 2020 Turkey Farm Road fire came within 2 miles of Ivins cemetery. Rare but real.

Every one of these is a content angle Geneva cannot credibly touch.

### 3.7 Cultural / heritage anchors for content

- **Jacob Hamblin** — "Peacemaker of the West," home in Santa Clara. Buried in Alpine, AZ, but revered locally.
- **Erastus Snow** — apostle who led the St. George settlement.
- **Brigham Young Winter Home** — historic site downtown.
- **Silver Reef ghost town** — silver-mining boom 1870s. Chinese, Catholic, and Protestant cemeteries survive.
- **Grafton ghost town** — filming location for *Butch Cassidy and the Sundance Kid*, small pioneer cemetery.
- **Shivwits Band of Paiutes** — federally recognized tribe west of Ivins. Shivwits Cemetery is part of Washington County's memorial landscape.
- **Cotton Mission (1861)** — the founding narrative of the county.

Any resource article that ties a modern topic (granite colors, epitaphs, symbols) to a Southern-Utah pioneer or Native heritage moment can rank in a lane Geneva can't.

### 3.8 Cross-border customer flow

- **Mesquite, NV** (30 min SW) — many retirees maintain households in both. Memorial services may cross state lines.
- **Beaver Dam / Littlefield, AZ** (35 min SW) — small Arizona Strip communities.
- **Colorado City / Hildale** (45 min E) — the AZ/UT twin towns, historically FLDS-affiliated. Hildale Cemetery is in Washington County; a page here has near-zero competition.

---

## 4. Keyword universe

Keyword targets grouped by page type + funnel stage. Where I have observed search intent signals from SERPs I note it; where I don't, I've marked the intent inference.

### 4.1 Local commercial (transactional intent — bottom of funnel)

These are the queries that convert. Land these on the homepage and city pages.

| Keyword | Target page | Notes |
|---|---|---|
| headstones st george utah | /service-areas/st-george | Kenworthy owns H1. Beatable with cemetery-specific depth. |
| st george utah monument company | Homepage + /service-areas/st-george | |
| headstone company washington county | Homepage | |
| monuments st george | /service-areas/st-george | |
| grave markers st george utah | /service-areas/st-george | |
| custom headstone st george | /service-areas/st-george | |
| headstone hurricane utah | /service-areas/hurricane | |
| ivins utah headstone | /service-areas/ivins | |
| santa clara utah monument | /service-areas/santa-clara | |
| washington city utah headstone | /service-areas/washington-city | |
| la verkin utah monument | /service-areas/la-verkin | |
| toquerville utah headstone | /service-areas/toquerville | |
| enterprise utah cemetery marker | /service-areas/enterprise | |
| cedar city utah headstone | /service-areas/cedar-city | Overlaps with iron-memorials; keep because existing routes have it. |
| kanab utah monument | /service-areas/kanab | |
| southern utah headstone | Homepage | Regional umbrella term — best geo anchor. |
| mesquite nevada headstone st george | /service-areas/st-george | Cross-border page opportunity. |
| best headstone company st george utah | Homepage | High-intent commercial query. |

### 4.2 Product-type / commercial-informational (mid funnel)

Same product names as Geneva by design (user directive), but rewritten copy.

| Keyword cluster | Target page | Unique angle for St. George |
|---|---|---|
| upright headstone / upright monument | /headstones/upright-monuments | Tonaquint, Hurricane, St. George City Cemetery upright section rules. |
| flat marker / flush marker | /headstones/flat-markers | Which Washington County cemeteries require flush-only. |
| slant marker | /headstones/slant-markers | Common in Ivins / Santa Clara older sections. |
| bevel marker | /headstones/bevel-markers | |
| slant-bevel marker | /headstones/slant-bevel-markers | Not on Geneva — unique product page. |
| companion / double headstone | /headstones/companion-headstones | Snowbird couples / long-married retiree market. |
| **LDS pioneer headstones** | /headstones/lds-pioneer-headstones | *Distinct route name from Geneva's "lds-headstones."* Frame around Cotton Mission pioneer motifs (beehive, sego lily, sea gull, temple silhouette) plus Erastus Snow / Jacob Hamblin heritage designs. |
| infant / child memorial | /headstones/infant-child-memorials | Reference Tonaquint's Angel Section. |
| bronze marker | /headstones/bronze-memorials | VA bronze markers (Southern Utah National Cemetery). |
| bench memorial | /headstones/bench-memorials | Red rock landscape imagery. |
| pet memorial | /headstones/pet-memorials | Backyard install in HOA-regulated retirement communities. |
| civic monument | /headstones/civic-monuments | Pioneer / veteran memorial monuments in city plazas. |
| unique / custom options | /headstones/unique-options | Red Cliffs Temple silhouettes, Snow Canyon sandstone motifs. |
| custom engraving | /headstones/custom-engraving | Laser etching for photographic realism. |
| headstone restoration | /headstones/restoration | Pioneer sandstone stone restoration — a Southern Utah specialty. |

**Two products to add that Geneva does not have:**

- **St. George Utah Temple headstones** — new route: `/headstones/st-george-temple-headstones`
- **Red Cliffs Utah Temple headstones** — new route: `/headstones/red-cliffs-temple-headstones`

### 4.3 Cemetery-specific (bottom of funnel — highest ROI SEO)

Each of these should be its own page under `/cemetery-guide/{slug}` (new set of routes to add — the existing stgeorge-memorials app doesn't have a cemetery guide index).

Washington County cemeteries (from the original brief):

| Cemetery | Slug | Primary keyword targets |
|---|---|---|
| St. George City Cemetery | st-george-city-cemetery | "st george city cemetery", "st george utah cemetery rules", "st george city cemetery plots" |
| Tonaquint Cemetery | tonaquint-cemetery | "tonaquint cemetery rules", "tonaquint cemetery st george", "tonaquint cemetery veterans" |
| Hurricane City Cemetery | hurricane-city-cemetery | "hurricane city cemetery utah", "hurricane cemetery rules", "hurricane cemetery plot cost" |
| Ivins City Cemetery | ivins-city-cemetery | "ivins city cemetery", "ivins utah cemetery" |
| Santa Clara City Cemetery | santa-clara-city-cemetery | "santa clara cemetery utah", "santa clara city cemetery" |
| Washington City Cemetery | washington-city-cemetery | "washington city cemetery utah" |
| LaVerkin City Cemetery | laverkin-city-cemetery | "laverkin cemetery utah" |
| Leeds City Cemetery | leeds-city-cemetery | "leeds cemetery utah" |
| Toquerville City Cemetery | toquerville-city-cemetery | |
| Virgin City Cemetery | virgin-city-cemetery | |
| Rockville City Cemetery | rockville-city-cemetery | |
| Springdale Cemetery | springdale-cemetery | Near Zion NP — pulls in tourist / genealogy traffic. |
| Enterprise City Cemetery | enterprise-city-cemetery | |
| New Harmony Cemetery | new-harmony-cemetery | |
| Pine Valley Cemetery | pine-valley-cemetery | High-elevation, seasonal install rules. |
| Veyo Cemetery | veyo-cemetery | |
| Gunlock Cemetery | gunlock-cemetery | |
| Hebron Cemetery | hebron-cemetery | Historic. |
| Hildale Cemetery | hildale-cemetery | Near-zero competition. |
| Shivwits Cemetery | shivwits-cemetery | Native American — sensitive; see §3.7. |
| Pioneer Memorial Cemetery (Virgin) | pioneer-memorial-cemetery-virgin | |
| Mountain Meadows Cemetery | mountain-meadows-cemetery | Historic massacre site — content must be respectful and factual. Refer to National Historic Site guidelines. |

Plus (historical / ghost town — combine into one page, don't do 6 thin ones):

- Duncan's Retreat, Grafton, Hamblin, Harrisburg, Silver Reef (Catholic / Chinese / Protestant) — combined page `/cemetery-guide/washington-county-historical-cemeteries`.

Regional expansion (from existing service-area routes):

- Kane County cemeteries (Kanab, Alton, Glendale, Long Valley, Mountain Dell, Orderville, Paria/Pahreah ghost town)
- Iron County cemeteries (already covered by iron-memorials but stgeorge routes include them)
- Beaver County (Beaver, Milford, Minersville, Adamsville, Frisco ghost town, Mountain View)
- Garfield County (Panguitch, Antimony, Boulder, Bryce Canyon Pioneer, Cannonville, Escalante, Hatch, Henrieville, Spry, Widtsoe ghost town)

**Recommendation:** for regional-expansion counties, keep as service-area *and* build cemetery pages, since existing routes commit us to covering them. This creates internal-link surface area that helps every page.

### 4.4 LDS / Temple (unique moat)

| Keyword | Target page | Notes |
|---|---|---|
| st george temple headstone | /headstones/st-george-temple-headstones | New page. |
| red cliffs temple headstone | /headstones/red-cliffs-temple-headstones | New page. Zero competition — temple only 2 years old. |
| lds pioneer headstone | /headstones/lds-pioneer-headstones | |
| angel moroni headstone | Resource article (see §9) | |
| beehive symbol headstone | Resource article | |
| sego lily headstone engraving | Resource article | Utah state flower + LDS pioneer motif — high uniqueness. |
| lds temple engraving guide | Resource article | Include ALL Southern Utah temples (SG, Red Cliffs, Cedar City) — differentiate from Geneva's list. |
| lds handcart headstone | Resource article | |

### 4.5 Veterans (fresh keyword territory)

| Keyword | Target page | Notes |
|---|---|---|
| southern utah national cemetery | /cemetery-guide/southern-utah-national-cemetery | Zero competition. |
| va headstone southern utah | Resource article | |
| va headstone cedar city | Resource article | |
| government headstone application utah | Resource article | Include VA Form 40-1330 walkthrough. |
| military marker st george utah | /service-areas/st-george | |
| veteran headstone eligibility 2026 | Resource article | Post-Nov 1990 rule. |

### 4.6 Cost / pricing (mid funnel, high volume)

| Keyword | Target page | Notes |
|---|---|---|
| how much does a headstone cost in st george | Resource article | *Don't reuse Geneva's "Utah County" article.* |
| headstone prices southern utah | Resource article | |
| granite headstone cost 2026 utah | Resource article | Include installation, foundation, VA offsets. |
| cheapest headstone st george | Resource article — but soft-sell; commercial-informational | |
| flat marker vs upright headstone cost | Resource article | |

### 4.7 Informational / educational

| Keyword | Target page | Notes |
|---|---|---|
| how to clean a headstone hard water | Resource article | Long-form: Southern Utah desert climate specifics, calcium deposits, non-ionic cleaner protocol, when NOT to use vinegar. |
| how long after funeral to order headstone | Resource article | *Different angle from Geneva*: Southern Utah winter-less installation window (year-round), no ground-settling freeze-thaw penalty. |
| headstone epitaph ideas | Resource article | LDS-heavy but include Christian, secular, veteran, pioneer heritage. |
| granite colors for headstones utah | Resource article | *Differentiate from Geneva*: UV / dust performance in Southern Utah, not just visual comparison. |
| types of headstones explained | Resource article | Include slant-bevel (Geneva omits). |
| headstone cleaning southern utah | Resource article | See "hard water" above — split into two pieces. |
| what to put on a headstone | Resource article | |
| how to write an epitaph | Resource article | |
| headstone symbols meaning | Resource article | LDS + Christian + secular + military symbols with Southern Utah pioneer additions. |
| pre-need headstone planning | Resource article | Snowbird-focused. |
| out-of-state headstone order | Resource article | Snowbird-focused. |

### 4.8 Cemetery-service transactional

| Keyword | Target page | Notes |
|---|---|---|
| headstone engraving st george | /services/engraving | |
| headstone installation st george | /services/installation | |
| headstone cleaning service utah | /services/cleaning | |
| headstone restoration southern utah | /services/restoration | Pioneer sandstone specialty. |
| add date to headstone | /services/adding-dates | |
| online headstone design tool | /services/design-tool | |

---

## 5. Site architecture & URL plan

The existing app has:

- `/`, `/about`, `/gallery`, `/contact`
- `/headstones` + 15 child routes
- `/service-areas` + 22 child routes

Recommend **adding** (routes to create in `routes/web.php`):

- `/cemetery-guide` — index of all cemeteries in service area
- `/cemetery-guide/{slug}` — one page per cemetery (22 Washington County + 3 combined historical + expansion counties)
- `/resources` — index
- `/resources/{slug}` — one page per article (20+ articles per §9)
- `/services` — index
- `/services/{slug}` — engraving, installation, cleaning, restoration, adding-dates, design-tool
- `/faq`
- `/terms-of-service`
- `/privacy-policy`

**Two new headstone-type pages:**

- `/headstones/st-george-temple-headstones`
- `/headstones/red-cliffs-temple-headstones`

**URL patterns to match:**

- Cemetery guide slugs use hyphenated lowercase (e.g., `tonaquint-cemetery`).
- Service-area slugs already exist and are fine.
- Headstone slugs are already fine (`upright-monuments`, `flat-markers`, etc.).
- Resource slugs should mirror the primary keyword ("how-to-clean-hard-water-off-a-headstone-in-southern-utah") — long slugs are fine and align with search.

**Internal-linking rule:** every cemetery page links out to the city page (service area) it's in and to at least 2 relevant product pages. Every product page links to 2 cemetery pages where that product type is common and to 2 relevant resource articles. Every resource article links to 2 product pages and 1 service page. This is how you build topical authority without a real backlink profile.

---

## 6. Per-page content briefs — product / headstone type pages

**Rule for every product page:** the product name is the same as on Geneva, but the copy must be original. Do not paraphrase Geneva; do not translate + back-translate. Write from scratch using this brief.

### 6.1 `/headstones` (index)

- **Title:** Headstones & Monuments for Every Washington County Cemetery | St. George Memorials
- **H1:** Custom Headstones for St. George and All of Southern Utah
- **Meta description:** Family-managed custom headstones for every cemetery in Washington County. Upright, flat, slant, bevel, companion, LDS temple, veteran, and pet memorials — designed, approved, and delivered locally.
- **Word count:** 800–1,200
- **Must include:**
  - Regional angle (Southern Utah, hard water, UV, red rock climate).
  - Grid or list of 17 product types with 40-word blurbs each.
  - Trust bar: family-managed, cemetery approvals, transparent pricing.
  - Call out the two temple-specific product pages.
- **Do NOT copy:** Geneva's `/products` intro copy or product blurbs. Write fresh.

### 6.2 `/headstones/upright-monuments`

- **Primary keyword:** upright headstone st george utah
- **Secondary:** granite upright monument, upright grave marker Utah, headstone with base
- **H1:** Upright Granite Headstones & Monuments for Washington County
- **Structure:**
  1. What an upright monument is (die + base), 150 words. Do not copy Geneva's exact framing.
  2. **Where uprights are allowed in Washington County** — call out St. George City Cemetery upright sections, Hurricane, Ivins, Santa Clara. Compare to flush-only requirements at newer parks (Ivins expansion). This section is unique to us; Geneva talks Utah Valley cemeteries.
  3. Size, granite thickness (typical 6" die), foundation depth for Southern Utah caliche soil (see §3.6).
  4. UV / color performance callout — dark granites recommended for Southern Utah exposure.
  5. Pricing range with local anchor: "Uprights typically run $2,800–$6,500 delivered and set in Washington County."
  6. Gallery from `/images/products/upright-*.jpg`.
- **CTA:** Link to design tool + call.
- **Uniqueness verification:** Every paragraph should contain at least one Washington County reference. If it could apply to any US market, rewrite.

### 6.3 `/headstones/flat-markers`

- **Primary keyword:** flat marker st george, flush grave marker utah
- **H1:** Flat & Flush Grave Markers for Washington County Cemeteries
- **Unique angles vs Geneva:**
  - Ivins City Cemetery's newer sections are flush-only.
  - Tonaquint's cremation garden requires flat markers only.
  - Hard-water spotting: flush markers accumulate more calcium than uprights because they hold puddles. Include maintenance tip.
- **Structure:** same as 6.2 — but Southern Utah–specific throughout.

### 6.4 `/headstones/slant-markers`

- **Primary:** slant headstone utah
- **Unique angle:** slant markers are common in older Ivins and Santa Clara sections; the angled face resists dust/pollen accumulation better than flat in the desert climate. That's a real Southern-Utah selling point.

### 6.5 `/headstones/bevel-markers`

- **Primary:** bevel marker utah
- **Unique angle:** bevel is the compromise between flat and slant — often the ONLY option approved in mixed sections. Southern Utah–specific: use as the "quiet middle" option for Snowbird families who don't want a visible upright signaling absence during summer months back east.

### 6.6 `/headstones/slant-bevel-markers`

- **Primary:** slant bevel marker
- **Note:** Geneva does not have this product page. Own the keyword. Content: hybrid design, 4" front and 8" back, dust-shedding profile, cemeteries that allow.

### 6.7 `/headstones/companion-headstones`

- **Primary:** companion headstone utah, double headstone st george
- **Unique angle:** snowbird / long-married retiree pair — huge market. Write from that persona.
- **Content:** side-by-side vs stacked, matching engraving planning, engraving one side "in memoriam" while the second party is living (the "left blank for a date" convention).

### 6.8 `/headstones/lds-pioneer-headstones`

- **Primary:** lds pioneer headstone, lds heritage headstone
- **Unique angle vs Geneva:** Geneva's "LDS headstones" page lists all Utah temples and generic LDS imagery. Ours frames LDS heritage through the *Cotton Mission* narrative — pioneers sent south by Brigham Young in 1861. Feature Erastus Snow, Jacob Hamblin, Silver Reef context. Include distinctive Southern Utah motifs: sego lily, cottonwood leaf (mirroring Red Cliffs Temple), beehive, sea gull.
- **Do NOT** duplicate Geneva's temple list. Feature only Southern Utah temples with prominence; mention others in a short "families relocated from northern Utah" note.

### 6.9 `/headstones/st-george-temple-headstones` (NEW)

- **Primary:** st george utah temple headstone engraving, st george temple silhouette
- **H1:** St. George Utah Temple Headstone Engravings
- **Unique lede:** "The St. George Utah Temple, dedicated in 1877, is the oldest operating temple in the Church of Jesus Christ of Latter-day Saints. For four generations of Southern Utah families, its castellated tower has been the most recognizable religious silhouette in Washington County. Etching it into a family headstone connects a life to that pioneer heritage in a way no other design element can."
- **Content:**
  - History of the temple (1877, sandstone quarry, plaster finish, castellated Neo-Gothic).
  - Design options: full silhouette, tower only, stylized outline, laser-etched photorealistic.
  - Which cemeteries in Washington County have the highest density of St. George Temple engravings (anecdotal — St. George City, Tonaquint, Washington City).
  - Sizing, granite color pairing (Jet Black holds contrast best for laser etching of the temple).
  - Pricing add-on estimate: $150–$400 depending on complexity.
- This page has near-zero competition on Google. It should rank fast.

### 6.10 `/headstones/red-cliffs-temple-headstones` (NEW)

- **Primary:** red cliffs utah temple headstone engraving, red cliffs temple design
- **H1:** Red Cliffs Utah Temple Headstone Engravings
- **Unique lede:** "The Red Cliffs Utah Temple, dedicated 24 March 2024, is the second temple in Washington County and the newest religious landmark most families here worship in. Its cottonwood-leaf motif and 230-foot spire are becoming a signature of a new generation of memorial designs across Southern Utah."
- **Content:**
  - Temple history, dedication, architects (NWL Architects).
  - Design elements to consider: cottonwood leaf motif, red-rock landscape backdrop, spire silhouette.
  - How designs differ from St. George Temple engravings (contemporary vs pioneer).
  - Family stories angle: "For families whose loved ones attended the temple open house in early 2024 before passing, incorporating Red Cliffs is deeply personal."
- Zero competitors. Rank fast.

### 6.11 `/headstones/infant-child-memorials`

- **Primary:** infant headstone st george, child memorial utah
- **Unique angle:** Tonaquint Cemetery Angel Section (verify current name with cemetery). Also address the Arcadia "Red Cap" Baby Cemetery reference for regional families — a delicate, respectful mention that this is historic and closed.
- **Tone:** exceptionally gentle. Include grief resource links (see §9).

### 6.12 `/headstones/bronze-memorials`

- **Primary:** bronze grave marker utah, VA bronze marker southern utah
- **Unique angle:** VA-issued bronze markers are the *dominant* marker type at Southern Utah National Cemetery (Cedar City). Any veteran family in Washington County researching bronze will land on this page if we write it right.
- **Content:** VA eligibility, application (VA Form 40-1330), sizing, private-cemetery use, mount options.

### 6.13 `/headstones/bench-memorials`

- **Primary:** bench memorial utah, granite bench headstone
- **Unique angle:** in the desert climate, benches double as functional seating for visiting family. Include Southern Utah cemeteries that have designated bench sections.

### 6.14 `/headstones/pet-memorials`

- **Primary:** pet memorial utah, dog grave marker st george
- **Unique angle:** HOA-regulated retirement communities in Washington County (Sun River, SunRiver, etc.) often prohibit visible outdoor markers — write to that constraint with a "planter-integrated" and "hidden garden marker" recommendation.
- Include note on Utah state law re. pet burial on private property.

### 6.15 `/headstones/civic-monuments`

- **Primary:** civic monument utah, pioneer monument southern utah, veterans plaza monument
- **Unique angle:** feature the Veteran's Memorial at Tonaquint Cemetery. Reference the Jacob Hamblin monument in Kanab (adjacent service area).

### 6.16 `/headstones/unique-options`

- **Primary:** custom headstone design st george, unique memorial ideas utah
- **Unique angle:** Red-rock landscape motifs, Snow Canyon petroglyph inspiration (with cultural caveats — do not use actual Shivwits sacred imagery). Pedestals, ledgers, stele designs.

### 6.17 `/headstones/custom-engraving`

- **Primary:** custom headstone engraving st george, laser etched headstone utah
- **Unique angle:** desert dust and hard water make certain engraving techniques age differently. Laser etching over polished black granite is the most Southern-Utah-durable finish. Include maintenance-year expectations.

### 6.18 `/headstones/restoration`

- **Primary:** headstone restoration utah, pioneer headstone cleaning, sandstone marker restoration
- **Unique angle:** Southern Utah has more surviving pioneer-era *sandstone* markers than northern Utah — Payson / Provo pioneer stones are often granite. St. George's earliest cemetery markers were carved from local red sandstone and are actively eroding. This is a specialty positioning that Geneva cannot claim.
- Include: cleaning cadence for hard-water zones, when to reset vs replace, historical marker preservation guidelines.

---

## 7. Per-page content briefs — service-area pages

**Common structure** for all city pages (roughly 800–1,200 words):

1. **Intro** — who we are, what we do, in this city.
2. **Cemeteries in this city** — list all cemeteries in this city with links to `/cemetery-guide/{slug}`.
3. **Typical rules & fees** — one-paragraph summary of the dominant cemetery's rules with a link to the detail page.
4. **Local landmarks** — 1–2 sentences on what makes this city's memorial culture distinctive.
5. **Popular headstone types** in this city (varies by cemetery mix).
6. **Delivery & installation logistics** from our St. George base.
7. **CTA** — call, contact form, design tool.

**Per-city angles that make each page unique:**

- **St. George** — City Cemetery + Tonaquint; largest city; two temples in-town.
- **Hurricane** — Hurricane City Cemetery; agricultural pioneer heritage; low resident plot fees.
- **Washington City** — Washington City Cemetery; oldest continuously used cemetery in the county (pre-1861 mission).
- **Ivins** — Ivins City Cemetery + Shivwits Cemetery nearby; retirement destination; red rock backdrop.
- **Santa Clara** — Santa Clara City Cemetery + Jacob Hamblin Home heritage; Swiss pioneer settlers.
- **La Verkin** — LaVerkin City Cemetery; agricultural heritage.
- **Toquerville** — Toquerville City Cemetery; historic winery / pioneer.
- **Enterprise** — Enterprise City Cemetery; high-desert farming.
- **Cedar City** — Cedar City Cemetery + Pioneer Cemetery + Southern Utah National Cemetery; college town (SUU); veteran hub.
- **Enoch** — Enoch City Cemetery; suburb of Cedar City.
- **Parowan** — Parowan Cemetery; "mother town of southern Utah" (1851).
- **Paragonah** — small, historic.
- **Kanab** — Kanab City Cemetery; movie-town heritage; Jacob Hamblin monument.
- **Fredonia (AZ)** — Fredonia is in Arizona. Frame as cross-border service. Very low competition.
- **Orderville** — historic United Order community.
- **Beaver** — Beaver City Cemetery; Butch Cassidy's birthplace.
- **Milford** — Milford Cemetery; railroad heritage.
- **Minersville** — mining heritage.
- **Panguitch** — Panguitch City Cemetery; high-elevation; Bryce Canyon gateway.

**Rule:** every city page must reference at least one *specific-to-that-city* historical or cultural fact. If a page is generic ("we serve Toquerville"), rewrite it.

---

## 8. Per-page content briefs — cemetery guide pages

**Common structure** for cemetery pages (aim for 900–1,500 words, but not fluff):

1. **Header** — name, city, type (public/private), address, phone, hours, sexton contact.
2. **Overview** — 100 words on the cemetery's role in the community.
3. **Sections / layout** — where uprights are allowed, where flush is required.
4. **Rules & fees table** — resident plot cost, non-resident plot cost, opening/closing, setting fee, holiday policy.
5. **Decoration rules** — mowing schedule, prohibited items, seasonal windows.
6. **History** — 150–300 words with named pioneers, founding year, notable interments (where public record).
7. **What St. George Memorials handles for this cemetery** — cemetery-specific installation notes (foundation type, dowels, apron, gravel base).
8. **CTA** + gallery.

**Every cemetery page must include a rules table.** This is the SEO moat — the cities publish these as PDFs and Google can't parse them, so a clean HTML table with a rules schema wins the featured snippet.

**Priority order (build these first):**

1. **Tonaquint Cemetery** — most-searched Washington County cemetery. Include Jan 16 2026 fence-removal policy update. Include Veteran's Memorial section.
2. **St. George City Cemetery** — oldest, largest, downtown.
3. **Hurricane City Cemetery** — plot fees $550 resident / $2,000 non-resident.
4. **Southern Utah National Cemetery** (Cedar City) — new, huge veteran demand, zero competition. **Highest priority per capita.**
5. **Ivins City Cemetery**
6. **Santa Clara City Cemetery**
7. **Washington City Cemetery**

**For Mountain Meadows Cemetery specifically:** treat with historical gravity. Reference the National Historic Site status. Do not add commercial CTAs at the top — put contact info in a footer only.

---

## 9. Resource-article roadmap (must be different from Geneva)

**Rule:** Not one of these articles should share a slug or a substantive angle with Geneva's `/resources/*` slugs. Geneva's slug list is:

- headstone-cost-utah-county
- types-of-headstones
- when-to-order-headstone
- headstone-epitaph-ideas
- veteran-headstone-benefits-utah
- granite-colors-headstones
- cemetery-approval-process
- lds-headstone-symbols
- buy-headstone-online-utah
- granite-colors-utah-county
- grief-support-utah-valley
- monument-companies-southern-utah

**Do not reuse any of these slugs.** Where a topic overlaps (cost, types, veterans, granite colors, symbols, grief), write from a genuinely different angle using a different slug and title.

### 9.1 Priority tier 1 — build these first

| Slug | Title | Primary keyword | Unique angle |
|---|---|---|---|
| `headstone-cost-washington-county-utah` | How Much Does a Headstone Cost in Washington County, Utah? A 2026 Local Price Guide | headstone cost st george utah | Local price ranges by cemetery, hard-water cleaning add-on, snowbird shipping surcharges. |
| `how-to-clean-hard-water-off-a-headstone-in-southern-utah` | How to Clean Hard Water Stains Off a Headstone in Southern Utah | headstone cleaning hard water utah | Long-form pillar. Southern Utah water chemistry. Step-by-step with non-ionic cleaner. When NOT to use vinegar. Photos. |
| `southern-utah-national-cemetery-headstone-guide` | Southern Utah National Cemetery: A Family's Guide to Headstones, Markers, and Benefits | southern utah national cemetery headstone | Location, eligibility, VA-issued markers vs private headstone with medallion, application process. |
| `st-george-utah-temple-headstone-engraving-guide` | Engraving the St. George Utah Temple on a Headstone: A Design Guide | st george temple headstone | Pillar for the product page. Design variations. Which granite colors carry the etch. |
| `red-cliffs-utah-temple-headstone-engraving-guide` | Engraving the Red Cliffs Utah Temple on a Headstone: A Design Guide | red cliffs temple headstone | Same treatment as above. |
| `tonaquint-cemetery-rules-and-fees-2026` | Tonaquint Cemetery Rules, Fees, and Monument Guidelines (2026) | tonaquint cemetery rules | Full 2026 policy digest, including 16 Jan 2026 fence-removal rule. |
| `flat-vs-upright-headstone-southern-utah` | Flat Marker vs. Upright Headstone in Southern Utah: A Practical Comparison | flat vs upright headstone utah | Southern-Utah–specific: which local cemeteries require which, UV / dust performance, cost in local dollars. |
| `types-of-headstones-southern-utah-guide` | A Southern Utah Family's Guide to Headstone Types | types of headstones utah | Different angle from Geneva: includes slant-bevel, sandstone-restoration options for pioneer plots. |

### 9.2 Priority tier 2 — build next

| Slug | Title | Primary keyword |
|---|---|---|
| `granite-colors-southern-utah-uv-and-dust` | Granite Colors for Headstones in Southern Utah: UV, Dust, and Hard Water Performance | granite headstone colors utah |
| `snowbird-pre-need-headstone-planning-st-george` | Pre-Need Headstone Planning for St. George Snowbirds and Part-Year Residents | pre need headstone utah snowbird |
| `how-to-order-a-headstone-from-out-of-state` | How to Order a Headstone in Utah From Out of State | out of state headstone order utah |
| `pioneer-sandstone-marker-restoration-southern-utah` | Restoring Pioneer Sandstone Grave Markers in Southern Utah | pioneer headstone restoration utah |
| `lds-pioneer-headstone-symbols-southern-utah` | LDS Pioneer Headstone Symbols: A Southern Utah Guide | lds headstone symbols |
| `southern-utah-cemetery-comparison-hurricane-vs-ivins-vs-st-george` | Choosing a Cemetery in Washington County: Hurricane vs. Ivins vs. St. George | washington county cemetery |
| `grief-support-resources-st-george-hurricane` | Grief and Bereavement Support Resources in St. George and Washington County | grief support st george utah |
| `veteran-headstone-benefits-southern-utah-2026` | VA Headstones and Veteran Memorial Benefits in Southern Utah (2026) | va headstone southern utah |
| `epitaph-ideas-for-southern-utah-families` | Epitaph Ideas for Southern Utah Families: Pioneer Heritage, Scripture, and Personal Voice | headstone epitaph ideas utah |
| `cemetery-approval-process-washington-county` | How Cemetery Approval Works in Washington County: A Family's Guide | cemetery approval washington county |
| `headstone-installation-timeline-southern-utah-year-round` | Why Southern Utah Is a Year-Round Headstone Installation Market | when to order a headstone utah |
| `dixie-cotton-mission-and-a-brief-history-of-southern-utahs-cemeteries` | The Cotton Mission and a Brief History of Southern Utah's Cemeteries | southern utah pioneer history |
| `custom-headstone-designs-inspired-by-red-rock-landscape` | Custom Headstone Designs Inspired by the Red Rock Landscape | custom headstone design utah |
| `how-to-mark-a-grave-in-a-private-family-cemetery-utah` | How to Mark a Grave in a Private Family Cemetery in Utah | family cemetery marker utah |
| `bronze-va-marker-vs-granite-headstone` | Bronze VA Marker vs. Granite Headstone: A Cost and Longevity Comparison for Southern Utah Veterans | bronze va marker vs granite |

### 9.3 Priority tier 3 — long tail

| Slug | Title | Primary keyword |
|---|---|---|
| `hildale-cemetery-guide` | Hildale Cemetery, Utah: A Family Guide | hildale cemetery |
| `silver-reef-and-southern-utahs-ghost-town-cemeteries` | Silver Reef and Washington County's Ghost Town Cemeteries | silver reef cemetery |
| `mountain-meadows-cemetery-memorial-guide` | Mountain Meadows Memorial: What Visiting Families Should Know | mountain meadows cemetery |
| `shivwits-cemetery-context-and-respectful-visiting` | The Shivwits Cemetery: Context and Respectful Visiting (compiled with community input) | shivwits cemetery |
| `paria-pahreah-ghost-town-cemetery-kane-county` | Paria / Pahreah Ghost Town Cemetery: A Kane County Guide | paria pahreah cemetery |
| `bryce-canyon-pioneer-cemetery-guide` | Bryce Canyon Pioneer Cemetery: A Garfield County Guide | bryce canyon pioneer cemetery |
| `how-to-move-a-headstone-utah` | How to Move or Relocate a Headstone in Utah | move headstone utah |
| `winter-headstone-installation-cedar-city-vs-st-george` | Winter Headstone Installation: Why Cedar City and Enterprise Freeze but St. George Doesn't | winter headstone installation utah |

**Total resource articles planned:** 27+ across three tiers. Compare to Geneva's 12. Our topical authority in the region should exceed Geneva's if we execute even Tier 1 + Tier 2.

### 9.4 Explicit anti-duplication guidance for writers

If the writer is coming from Geneva Memorials copy, enforce these substitutions and reframings **for every article**:

- Do not use the phrase "Utah Valley" — replace with "Southern Utah" or "Washington County."
- Do not name Provo, Orem, Springville, Lehi, Spanish Fork, Payson, Salem, Saratoga Springs, Eastlawn, or Alpine cemeteries as examples. Use only Washington County, Kane County, Iron County, Beaver County, Garfield County cemeteries.
- Do not reference the Mount Timpanogos Temple, Provo City Center Temple, Payson Temple, or Utah Valley Temple. Use St. George Temple, Red Cliffs Temple, and Cedar City Temple.
- Every article must reference at least one specific: (a) Washington County cemetery, (b) Southern Utah pioneer figure, (c) local climate factor (UV, hard water, dust, elevation), or (d) local temple.

---

## 10. Technical SEO recommendations

### 10.1 On-page basics

- **`<title>` tags:** primary keyword first, brand at end. Pattern: `[Page Topic] in [City / Region], Utah | St. George Memorials`. Max 60 chars.
- **Meta descriptions:** 150–160 chars. Include primary keyword and a specific CTA verb ("design," "order," "compare").
- **H1:** exactly one per page. Contains the primary keyword.
- **H2 / H3 structure:** headings should mirror the "People Also Ask" style — question-format H2s rank well.
- **Image alt text:** every product image should have a descriptive alt with a location or product qualifier. Not "upright headstone.jpg" — "Upright granite headstone at Tonaquint Cemetery, St. George Utah."

### 10.2 Structured data (schema.org)

Add JSON-LD blocks for:

- **Cemetery** (custom, based on `Place`) — on every cemetery guide page.
- **Product** — on every headstone type page.
- **Service** — on every service page.
- **Article** — on every resource article.
- **LocalBusiness** (`Cemetery` or `FuneralHome`? Neither fits. Use `Organization` with `LocalBusiness` extension and `address` in Washington County). Include hours, phone, service area (all cities).
- **FAQPage** — on the FAQ page and on any resource article with an FAQ section.
- **BreadcrumbList** — on every non-home page.

### 10.3 Sitemap & robots

- `public/sitemap.xml` generated at build time; include priority hints (cemetery + city pages `0.9`; product pages `0.8`; resource articles `0.7`; utility pages `0.4`).
- `public/robots.txt` — allow all, point to sitemap.
- If using Laravel + Inertia, generate the sitemap in a `php artisan sitemap:generate` command that iterates the cemetery/product/service/resource arrays in `PageController`. This keeps it in sync automatically.

### 10.4 Speed & Core Web Vitals

- Images: convert all product images to WebP, keep JPG fallback. Use `<img srcset>` for responsive.
- Hero LCP: preload the hero image on each page.
- Defer non-critical JS. The Inertia + Vue setup is already SSR-capable — turn on SSR (already scripted in `package.json` — `vite build --ssr`).
- Font: self-host the serif font; do not pull from Google Fonts (adds LCP delay).

### 10.5 Internal linking topology

Enforce these link rules in the shared layout / components (not per-page manual):

- Every product page has a "Popular in Washington County" widget linking to 3 cemetery guide pages.
- Every cemetery page has a "Nearby cemeteries" list (auto-generated by shared city).
- Every resource article has a "Related products" widget + "Related cemeteries" widget.
- Homepage links to top 5 cities + top 5 cemeteries + top 5 resources (rotate).

### 10.6 Local citations & off-page (for later, not code work)

Not part of this SEO research document strictly, but for completeness: Google Business Profile, Bing Places, Apple Maps Connect, Utah state directories (utah.gov small business), Chamber of Commerce (St. George Chamber, Washington County Chamber), Nextdoor (organic), industry directories (Everloved, iMortuary, Yelp). These are external and don't affect the codebase.

---

## 11. Uniqueness checklist (vs. Geneva)

Before publishing any page, verify:

- [ ] No sentence in this page appears verbatim in the corresponding Geneva page.
- [ ] The page references at least one specific Washington County (or expansion county) cemetery, city, temple, pioneer figure, or climate/environmental factor.
- [ ] The primary keyword contains a Southern Utah / Washington County geographic anchor OR a local cemetery / temple proper noun.
- [ ] The page does not name any Utah County city (Provo, Orem, Springville, Lehi, Spanish Fork, Payson, Saratoga Springs, Salem, Alpine, American Fork, Highland, Mapleton).
- [ ] The page does not reference the Mount Timpanogos Temple, Provo City Center Temple, Payson Temple, Provo Utah Temple, Orem Temple, or Lindon Temple.
- [ ] The page's meta description uses the local geographic anchor.
- [ ] The URL slug is not identical to any slug on Geneva.
- [ ] Where the page discusses cost, the numbers reference the local Washington County market (not Geneva's Utah County numbers).
- [ ] Images used are either genuinely different files OR are correctly re-aliased with locally-relevant alt text.
- [ ] At least one internal link is to a Washington County cemetery page.
- [ ] The tone reflects that we are a Southern Utah company, not a Utah Valley company.

**If any box is unchecked, the page is not ready to publish.** Treat this list as a definition-of-done gate.

---

## 12. Sources

Competitor and market research (accessed August 2026):

- [Kenworthy Monuments — St. George, Utah](https://kenworthymonuments.com/)
- [Kenworthy Monuments — Monuments and Headstones in St. George](https://kenworthymonuments.com/monuments-in-st-george/)
- [Kenworthy Monuments — Hurricane location](https://kenworthymonuments.com/hurricane-location/)
- [Utah Monument Company (Connell's)](https://www.utahmonumentcompany.com/)
- [Rocky Mountain Monument & Vault — St. George](https://www.rockymountainvault.com/areas-served/st.-george/utah/)
- [Rocky Mountain Monument & Vault — Hurricane](https://www.rockymountainvault.com/areas-served/hurricane/utah/)
- [DuCrest Monument Company — Traditional Monuments](https://ducrestmonument.com/traditional-monuments/)
- [Utah Monument Company Yelp listing](https://www.yelp.com/biz/utah-monument-st-george)
- [Utah Monuments Company — WCHS listing](https://wchsutah.org/businesses/utah-monuments.php)

Cemetery-specific research:

- [Tonaquint Cemetery — St. George City](https://sgcityutah.gov/business_detail_T18_R482.php)
- [City of St. George Cemetery Policies 2023 PDF](https://cms3.revize.com/revize/stgeorge/Documents/Activity%20Events/Cemetery/St.%20George%20City%20Cemetery/stgeorgecemeterypoliciesbrochure-2023.pdf)
- [City of St. George Cemetery Policies 2025 PDF](https://cms3.revize.com/revize/stgeorge/Documents/Activity%20Events/Cemetery/St.%20George%20City%20Cemetery/City_of_St_George_Cemeteries_Brochure_PP2025.pdf)
- [Tonaquint Cemetery on BillionGraves](https://billiongraves.com/cemetery/Tonaquint-Cemetery/147027)
- [Tonaquint Cemetery — WCHS](https://wchsutah.org/cemeteries/tonaquint-cemetery.php)
- [Veteran's Memorial at Tonaquint Cemetery — WCHS](https://wchsutah.org/cemeteries/tonaquint-cemetery1.php)
- [Tonaquint Cemetery Grave Map — Names In Stone](https://www.namesinstone.com/ViewMap.aspx?cemeteryId=141)
- [Hurricane City Cemetery — City of Hurricane](https://www.cityofhurricane.com/246/City-Cemetery)
- [Hurricane City Cemetery Headstone Guidelines PDF](https://www.cityofhurricane.com/DocumentCenter/View/2520/Headstone-Guidelinespdf)
- [Hurricane City Cemetery — Ever Loved](https://everloved.com/cemeteries/UT/hurricane/hurricane-city-cemetery-hurricane-ut-84737/)
- [Cemeteries in Santa Clara — Ever Loved](https://everloved.com/cemeteries/UT/santa-clara/)
- [Cemeteries in St George — Ever Loved](https://everloved.com/cemeteries/UT/st-george/)
- [St George City Cemetery burial list — WCHS](https://wchsutah.org/cemeteries/st-george-cemetery8.pdf)
- [List of cemeteries in Utah — Wikipedia](https://en.wikipedia.org/wiki/List_of_Cemeteries_in_Utah)
- [Exploring the Forgotten: St. George's Untouched Cemetery Plots — KDXU](https://890kdxu.com/?p=23758)
- [Utah Cemeteries Records — Access Genealogy](https://accessgenealogy.com/utah/utah-cemeteries-records.htm)

Regulatory / cemetery rules:

- [Salt Lake City Code 15.24.240 — Headstone limitations](https://codelibrary.amlegal.com/codes/saltlakecityut/latest/saltlakecity_ut/0-0-0-56339)
- [Murray City — Headstone Regulations](https://www.murray.utah.gov/191/Headstone-Regulations)
- [Lindon — Headstone Requirements](https://lindon.gov/cemetery-headstone-requirements)
- [Brigham City — Monument Requirements](https://codelibrary.amlegal.com/codes/brighamcityut/latest/brighamcity_ut/0-0-0-1953)
- [Cemetery Rules Before Ordering a Headstone — Didericksen Memorial](https://didericksenmemorial.com/blog/cemetery-rules-before-ordering-headstone)

LDS temple research:

- [St. George Utah Temple — Wikipedia](https://en.wikipedia.org/wiki/St._George_Utah_Temple)
- [Red Cliffs Utah Temple — Wikipedia](https://en.wikipedia.org/wiki/Red_Cliffs_Utah_Temple)
- [Red Cliffs Utah Temple — Church of Jesus Christ Temples](https://churchofjesuschristtemples.org/red-cliffs-utah-temple/)
- [Red Cliffs Utah Temple — Church News Almanac](https://www.thechurchnews.com/almanac/temples/red-cliffs-utah/)
- [Red Cliffs Utah Temple interior release — Church News](https://www.thechurchnews.com/temples/2024/1/29/24053935/red-cliffs-utah-temple-st-george-interior-images-media-day/)
- [Red Cliffs Utah Temple — NWL Architects](https://www.nwlarchitects.com/projects/red-cliffs-utah-temple)
- [LDS Headstone Symbolism & Meaning — Cache Valley Monuments](https://cachevalleymonuments.com/the-significance-and-symbolism-of-lds-headstones-a-guide/)
- [Symbolism in the Church of Jesus Christ of Latter-day Saints — Wikipedia](https://en.wikipedia.org/wiki/Symbolism_in_the_Church_of_Jesus_Christ_of_Latter-day_Saints)

Veterans research:

- [Southern Utah National Cemetery — VA NCA](https://www.cem.va.gov/cems/nchp/SouthernUtah.asp)
- [VA dedicates Southern Utah National Cemetery — VA news](https://news.va.gov/press-room/va-dedicates-new-southern-utah-national-cemetery/)
- [VA dedicates Southern Utah National Cemetery — Iron County Today](https://ironcountytoday.com/2025/09/12/va-dedicates-new-southern-utah-national-cemetery/)
- [Veteran Headstones — Southern Utah Mortuary](https://mortuary.org/resources/veteran-headstones/)
- [Utah Veterans burial benefits](https://veterans.utah.gov/burial-benefits)
- [Utah Veterans Cemetery brochure 2026 PDF](https://veterans.utah.gov/wp-content/uploads/2026/03/CemeteryBrochure2026.pdf)
- [VA marker options in private cemeteries — American Legion Post 24](https://valegionpost24.com/marking-veterans-graves)

Demographics & regional context:

- [St. George Utah population 2026 — World Population Review](https://worldpopulationreview.com/us-cities/utah/st-george)
- [St. George City Demographics](https://sgcityutah.gov/departments/economic_development/demographics.php)
- [Washington County — Wikipedia](https://en.wikipedia.org/wiki/Washington_County,_Utah)
- [St. George — Wikipedia](https://en.wikipedia.org/wiki/St._George,_Utah)

Historical / cultural:

- [Utah's Dixie — Wikipedia](https://en.wikipedia.org/wiki/Utah's_Dixie)
- ["Dixie" name returns to Utah Tech — stgeorgeutah.com](https://www.stgeorgeutah.com/news/amid-ongoing-controversy-dixie-name-returns-to-utah-tech-but-in-a-limited-way/article_3af02fee-5810-479d-8f4d-5142c181282b.html)
- [Utah Legislature passes Dixie State name change — KSL](https://www.ksl.com/article/50281001/utah-legislature-passes-dixie-state-name-change)
- [Three years after name change — Sun News Daily](https://sunnewsdaily.com/stories/articles/2025/09/07/three-years-after-name-change-utah-tech-still-uses-dixie-in-traditions/)
- [Jacob Hamblin Home — Utah.com](https://www.utah.com/things-to-do/attractions/mormon/jacob-hamblin-home/)
- [Pioneer home day; Young and Hamblin homes — St George News](https://www.stgeorgeutah.com/story-series/days-series/pioneer-home-day-young-and-hamblin-homes-stand-as-reminders-of-early-pioneer-legacy/article_28e450dd-9125-54ff-8af3-44b926dc22df.html)
- [St. George History — Utah.com](https://www.utah.com/destinations/cities-towns/st-george/things-to-do/history/)
- [Snow Canyon State Park — Wikipedia](https://en.wikipedia.org/wiki/Snow_Canyon_State_Park)
- [Snow Canyon Petroglyphs — Greater Zion](https://greaterzion.com/snow-canyon-secrets-petroglyphs/)

Product-type / educational research:

- [Flat vs Upright Headstones — Memorials.com](https://www.memorials.com/info/headstones-guide/flat-vs-upright-headstones)
- [Flat vs Upright — Bakerview Memorial](https://bakerviewmemorial.ca/flat-vs-upright-headstones-pros-cons-and-family-preferences/)
- [Flat Grave Markers vs. Upright Headstones — Austin Stone](https://www.austinstoneandmonument.com/flat-marker-vs-upright-headstones)
- [Upright vs Flat vs Slant — Forever in Stone](https://foreverinstone.net/upright-flat-or-slant-understanding-different-types-of-monuments/)
- [23 Granite Headstone Colors — Milano Monuments](https://www.milanomonuments.com/blog/what-color-options-are-available-for-headstones)
- [Popular Granite Headstone Colors 2026 — Stone Discover](https://www.stonediscover.com/blog/granite-headstone-colors/)
- [Granite Colors for Headstones — Gifford Monument](https://giffordmonument.com/blog/granite-colors-headstones-durability-meaning)

Hard water / desert climate / cleaning:

- [How to Remove Hard Water Stains from Headstones — Heavenly Funerals](https://heavenlyfunerals.com/how-to-remove-hard-water-stains-from-headstones-the-ultimate-guide/)
- [What Cleans Hard Water Off a Headstone — Classroom Synonym](https://classroom.synonym.com/what-cleans-hard-water-off-a-headstone-12082203.html)
- [Removing Hard Water on Granite Headstones — Cache Valley Monuments](https://cachevalleymonuments.com/how-to-remove-hard-water-stains-from-granite-headstones/)
- [Calcium Deposits on Stone — Texas Stone Sealers](https://texasstonesealers.com/calcium-deposits-on-stone/)
- [Cleaning Granite Memorials PDF — Olivewood Cemetery](https://olivewoodcem.com/wp-content/uploads/2021/04/Cleaning-Memorials-in-the-Cemetery.pdf)
- [Monument Care — Accent Monuments](https://accentmonuments.com/monument-care/)

Cost / pricing / cremation:

- [Headstone Costs 2026 — Alix](https://www.meetalix.com/resources/headstone-cost-complete-price-guide)
- [Headstone Cost 2026 — SilkStone Memorial](https://silkstonememorial.com/blog/headstone-cost-guide)
- [Cost of Cremation in Utah 2026 — After.com](https://www.after.com/articles/cost-of-cremation-in-utah)
- [Utah Cremation Guide — Funeral.com](https://funeral.com/blogs/the-journal/utah-cremation-guide-costs-laws-options)

Epitaphs & symbolism:

- [Bible Verses for Headstones — Stoneletters](https://stoneletters.com/blog/bible-verses-for-headstones)
- [Short Bible Verses for Headstones — Funeral.com](https://funeral.com/blogs/the-journal/short-bible-verses-for-headstones-faith-filled-epitaph-ideas-for-christian-families)
- [50 Christian Epitaphs — Memorial Compass](https://memorialcompass.com/50-christian-epitaphs-for-headstones/)
- [Written in Stone: Mormon Grave Symbology — By Common Consent](https://bycommonconsent.com/2005/09/20/written-in-stone-some-thoughts-on-mormon-grave-symbology/)

Grief / bereavement:

- [Grief & Healing — Serenity Funeral Home of Southern Utah](https://www.serenitystg.com/grief-and-healing/)
- [Grief Support — Southern Utah Mortuary](https://mortuary.org/resources/grief-support/)
- [Grief Healing Services — Spilsbury Mortuary](https://www.spilsburymortuary.com/services/grief-healing)
- [Grief Support Groups — Intermountain Healthcare PDF](https://intermountainhealthcare.org/-/media/files-sc9/calendar/events/grief-support-classes-by-area.ashx)

---

*End of research document. Deliverable is intentionally comprehensive so it can be handed as-is to a writer, an SEO consultant, or a developer, with no further oral briefing required.*
