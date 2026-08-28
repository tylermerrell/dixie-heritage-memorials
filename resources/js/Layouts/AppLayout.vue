<template>
  <div class="min-h-screen flex flex-col bg-stone font-sans">

    <!-- Header -->
    <header class="bg-evergreen text-white sticky top-0 z-40 shadow-lg">
      <!-- Top bar -->
      <div class="bg-evergreen-dark text-xs text-white/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between py-1.5">
          <a href="tel:+14352543122" class="flex items-center gap-1.5 hover:text-white transition-colors">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
            (435) 254-3122
          </a>
          <span class="hidden sm:block font-medium text-white/90">Serving Southern Utah &bull; Cemetery Approval Guaranteed</span>
          <a href="sms:+14352543122" class="flex items-center gap-1.5 hover:text-white transition-colors">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/></svg>
            Text Us
          </a>
        </div>
      </div>

      <!-- Main header -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-3">
          <Link href="/" class="flex flex-col leading-tight">
            <span class="font-serif text-2xl font-semibold tracking-wide text-white">St. George Memorials</span>
            <span class="text-xs text-sage-light tracking-widest uppercase">St. George Headstones & Monuments</span>
          </Link>

          <!-- Desktop CTA -->
          <button
            @click="openModal"
            class="hidden md:flex items-center gap-2 bg-bronze hover:bg-bronze-dark text-white font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm shadow"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.5-6.5a2.121 2.121 0 013 3L12 16H9v-3z"/></svg>
            Request a Quote
          </button>

          <!-- Mobile menu toggle -->
          <button @click="mobileOpen = !mobileOpen" class="md:hidden text-white p-1" aria-label="Toggle menu">
            <svg v-if="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>
      </div>

      <!-- Nav -->
      <nav class="border-t border-white/10 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <ul class="flex items-center gap-1 py-0.5">
            <li v-for="item in navItems" :key="item.href">
              <Link
                :href="item.href"
                class="block px-4 py-2.5 text-sm font-medium text-white/80 hover:text-white hover:bg-white/10 rounded transition-colors"
                :class="{ 'text-white bg-white/10': isActive(item) }"
              >{{ item.label }}</Link>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Mobile nav -->
      <div v-if="mobileOpen" class="md:hidden border-t border-white/10 bg-evergreen-dark">
        <ul class="px-4 py-2 space-y-1">
          <li v-for="item in navItems" :key="item.href">
            <Link
              :href="item.href"
              @click="mobileOpen = false"
              class="block px-4 py-2.5 text-sm font-medium text-white/80 hover:text-white rounded"
            >{{ item.label }}</Link>
          </li>
          <li class="pt-2 pb-1">
            <button
              @click="openModal(); mobileOpen = false"
              class="w-full bg-bronze text-white font-semibold px-4 py-2.5 rounded-lg text-sm"
            >Request a Quote</button>
          </li>
        </ul>
      </div>
    </header>

    <!-- Page content -->
    <main class="flex-1">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-evergreen-deeper text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

          <!-- Brand col -->
          <div class="md:col-span-1">
            <p class="font-serif text-xl font-semibold mb-3">St. George Memorials</p>
            <p class="text-white/60 text-sm leading-relaxed mb-4">Honoring lives across Southern Utah with handcrafted headstones, monuments, and memorial markers. Cemetery approval guaranteed.</p>
            <div class="flex flex-col gap-2 text-sm text-white/70">
              <a href="tel:+14352543122" class="hover:text-white transition-colors">(435) 254-3122</a>
              <a href="sms:+14352543122" class="hover:text-white transition-colors">Text us anytime</a>
              <a href="mailto:hello@stgeorgememorials.com" class="hover:text-white transition-colors">hello@stgeorgememorials.com</a>
            </div>
          </div>

          <!-- Cemetery guide -->
          <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-white/40 mb-4">Cemeteries We Serve</h4>
            <ul class="space-y-2 text-sm text-white/70">
              <li v-for="cem in footerCemeteries" :key="cem.href">
                <Link :href="cem.href" class="hover:text-sage-light transition-colors">{{ cem.label }}</Link>
              </li>
            </ul>
          </div>

          <!-- Products -->
          <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-white/40 mb-4">Products</h4>
            <ul class="space-y-2 text-sm text-white/70">
              <li><Link href="/headstones/upright-monuments" class="hover:text-sage-light transition-colors">Upright Monuments</Link></li>
              <li><Link href="/headstones/flat-markers" class="hover:text-sage-light transition-colors">Flat Grave Markers</Link></li>
              <li><Link href="/headstones/slant-markers" class="hover:text-sage-light transition-colors">Slant Markers</Link></li>
              <li><Link href="/headstones/bevel-markers" class="hover:text-sage-light transition-colors">Bevel Markers</Link></li>
              <li><Link href="/headstones/companion-headstones" class="hover:text-sage-light transition-colors">Companion Headstones</Link></li>
              <li><Link href="/headstones/lds-pioneer-headstones" class="hover:text-sage-light transition-colors">LDS & Pioneer Headstones</Link></li>
              <li><Link href="/headstones/infant-child-memorials" class="hover:text-sage-light transition-colors">Infant & Child Memorials</Link></li>
              <li><Link href="/headstones/bronze-memorials" class="hover:text-sage-light transition-colors">Bronze Memorials & Plaques</Link></li>
              <li><Link href="/headstones/bench-memorials" class="hover:text-sage-light transition-colors">Bench Memorials</Link></li>
              <li><Link href="/headstones/pet-memorials" class="hover:text-sage-light transition-colors">Pet Memorials</Link></li>
              <li><Link href="/headstones/civic-monuments" class="hover:text-sage-light transition-colors">Civic Monuments & Plaques</Link></li>
              <li><Link href="/headstones/custom-engraving" class="hover:text-sage-light transition-colors">Custom Engraving</Link></li>
              <li><Link href="/headstones/restoration" class="hover:text-sage-light transition-colors">Cleaning & Restoration</Link></li>
              <li><Link href="/headstones" class="hover:text-sage-light transition-colors font-medium text-white/50">View All Products →</Link></li>
            </ul>
          </div>

          <!-- Resources -->
          <div>
            <h4 class="text-sm font-semibold uppercase tracking-widest text-white/40 mb-4">Resources</h4>
            <ul class="space-y-2 text-sm text-white/70">
              <li><Link href="/resources/buying-guide" class="hover:text-sage-light transition-colors">Guide to Buying a Headstone</Link></li>
              <li><Link href="/resources/pricing" class="hover:text-sage-light transition-colors">Headstone Pricing & Costs</Link></li>
              <li><Link href="/resources/faq" class="hover:text-sage-light transition-colors">Frequently Asked Questions</Link></li>
              <li><Link href="/gallery" class="hover:text-sage-light transition-colors">Design Inspiration Gallery</Link></li>
              <li><Link href="/service-areas/st-george" class="hover:text-sage-light transition-colors">St. George Service Area</Link></li>
              <li><Link href="/about" class="hover:text-sage-light transition-colors">About St. George Memorials</Link></li>
              <li><Link href="/contact" class="hover:text-sage-light transition-colors">Contact / Request a Quote</Link></li>
            </ul>
          </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-white/10 mt-10 pt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-white/40">
          <p>&copy; {{ currentYear }} St. George Memorials. All rights reserved. Southern Utah.</p>
          <div class="flex gap-6">
            <Link href="/contact" class="hover:text-white/70">Contact Us</Link>
          </div>
        </div>
      </div>
    </footer>

    <!-- Design Form Modal -->
    <DesignFormModal v-if="showModal" @close="closeModal" />
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import DesignFormModal from '@/Components/DesignFormModal.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { showModal, openModal, closeModal } = useDesignModal();
const mobileOpen = ref(false);
const currentYear = new Date().getFullYear();

const page = usePage();

const navItems = [
  { href: '/headstones', label: 'Products', activePrefix: '/headstones' },
  { href: '/service-areas', label: 'Service Areas', activePrefix: '/service-areas' },
  { href: '/cemeteries', label: 'Cemeteries' },
  { href: '/gallery', label: 'Gallery' },
  { href: '/resources', label: 'Resources' },
  { href: '/about', label: 'About' },
  { href: '/contact', label: 'Contact' },
];

const isActive = (item) => {
  const prefix = item.activePrefix || item.href;
  return page.url === item.href || page.url.startsWith(prefix + '/') || (item.activePrefix && page.url.startsWith(item.activePrefix));
};

const footerCemeteries = [
  { href: '/cemeteries/st-george-city-cemetery', label: 'St. George City Cemetery' },
  { href: '/cemeteries/tonaquint-cemetery', label: 'Tonaquint Cemetery' },
  { href: '/cemeteries/hurricane-city-cemetery', label: 'Hurricane City Cemetery' },
  { href: '/cemeteries/cedar-city-cemetery', label: 'Cedar City Cemetery' },
  { href: '/cemeteries/kanab-city-cemetery', label: 'Kanab City Cemetery' },
  { href: '/cemeteries/washington-city-cemetery', label: 'Washington City Cemetery' },
  { href: '/cemeteries/panguitch-city-cemetery', label: 'Panguitch City Cemetery' },
  { href: '/cemeteries', label: 'View All Cemeteries →' },
];
</script>
