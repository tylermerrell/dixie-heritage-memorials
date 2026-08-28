<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Default Open Graph / Twitter (pages override via <Head>) -->
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="St. George Memorials" />
        <meta property="og:image" content="https://stgeorgememorials.com/images/og-default.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="St. George Memorials — Custom headstones for Southern Utah" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@StGeorgeMemorials" />
        <meta name="twitter:image" content="https://stgeorgememorials.com/images/og-default.jpg" />

        <!-- Global structured data: Organization + WebSite -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@graph": [
            {
              "@type": ["LocalBusiness", "HomeAndConstructionBusiness"],
              "@id": "https://stgeorgememorials.com/#business",
              "name": "St. George Memorials",
              "alternateName": "St George Memorials",
              "description": "Custom headstones, monuments, and memorial markers for Southern Utah families. Cemetery approval guaranteed before every order. Serving Washington, Iron, Kane, Beaver, and Garfield counties.",
              "url": "https://stgeorgememorials.com",
              "telephone": "+14355550000",
              "email": "hello@stgeorgememorials.com",
              "logo": {
                "@type": "ImageObject",
                "url": "https://stgeorgememorials.com/images/geneva-memorials-logo.png"
              },
              "image": "https://stgeorgememorials.com/images/hero-bg.jpg",
              "address": {
                "@type": "PostalAddress",
                "addressLocality": "St. George",
                "addressRegion": "UT",
                "postalCode": "84770",
                "addressCountry": "US"
              },
              "geo": {
                "@type": "GeoCoordinates",
                "latitude": 37.0965,
                "longitude": -113.5684
              },
              "areaServed": [
                { "@type": "City", "name": "St. George", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Hurricane", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Ivins", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Santa Clara", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Washington City", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Cedar City", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Kanab", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "City", "name": "Panguitch", "containedInPlace": { "@type": "State", "name": "Utah" } },
                { "@type": "AdministrativeArea", "name": "Washington County, Utah" },
                { "@type": "AdministrativeArea", "name": "Iron County, Utah" },
                { "@type": "AdministrativeArea", "name": "Kane County, Utah" },
                { "@type": "AdministrativeArea", "name": "Beaver County, Utah" },
                { "@type": "AdministrativeArea", "name": "Garfield County, Utah" }
              ],
              "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Memorial Products & Services",
                "itemListElement": [
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Upright Monuments", "url": "https://stgeorgememorials.com/headstones/upright-monuments" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Flat Grave Markers", "url": "https://stgeorgememorials.com/headstones/flat-markers" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Slant Markers", "url": "https://stgeorgememorials.com/headstones/slant-markers" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Bevel Markers", "url": "https://stgeorgememorials.com/headstones/bevel-markers" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Companion Headstones", "url": "https://stgeorgememorials.com/headstones/companion-headstones" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Bronze Memorials & Plaques", "url": "https://stgeorgememorials.com/headstones/bronze-memorials" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Bench Memorials", "url": "https://stgeorgememorials.com/headstones/bench-memorials" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Infant & Child Memorials", "url": "https://stgeorgememorials.com/headstones/infant-child-memorials" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Pet Memorials", "url": "https://stgeorgememorials.com/headstones/pet-memorials" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "St. George Temple Engravings", "url": "https://stgeorgememorials.com/headstones/st-george-temple-headstones" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Product", "name": "Red Cliffs Temple Engravings", "url": "https://stgeorgememorials.com/headstones/red-cliffs-temple-headstones" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Headstone Cleaning & Restoration", "url": "https://stgeorgememorials.com/headstones/restoration" } },
                  { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Custom Engraving", "url": "https://stgeorgememorials.com/headstones/custom-engraving" } }
                ]
              },
              "knowsAbout": [
                "Headstones",
                "Grave Markers",
                "Monuments",
                "Memorial Plaques",
                "Cemetery Regulations",
                "LDS Temple Engravings",
                "VA Grave Markers",
                "Granite Selection",
                "Sandstone Restoration",
                "Southern Utah Cemeteries"
              ]
            },
            {
              "@type": "WebSite",
              "@id": "https://stgeorgememorials.com/#website",
              "url": "https://stgeorgememorials.com",
              "name": "St. George Memorials",
              "description": "Custom headstones and monuments for Southern Utah families — cemetery approval guaranteed.",
              "publisher": { "@id": "https://stgeorgememorials.com/#business" },
              "inLanguage": "en-US"
            }
          ]
        }
        </script>

        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1L63B907S"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-K1L63B907S');
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Tighten\Ziggy\BladeRouteGenerator')->generate(); ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"]); ?>
        <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>
    </head>
    <body class="font-sans antialiased">
        <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } elseif (config('inertia.use_script_element_for_initial_page')) { ?><script data-page="app" type="application/json"><?php echo json_encode($page); ?></script><div id="app"></div><?php } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
    </body>
</html>
<?php /**PATH /Users/tylermerrell/Documents/my-repos/stgeorge-memorials/resources/views/app.blade.php ENDPATH**/ ?>