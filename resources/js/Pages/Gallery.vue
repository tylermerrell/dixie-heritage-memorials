<template>
  <AppLayout>
    <Head>
      <title>Design Inspiration Gallery | Southern Utah | St. George Memorials</title>
      <meta name="description" content="Browse headstone designs and memorial styles delivered to Southern Utah cemeteries by St. George Memorials. Upright monuments, flat markers, bronze plaques, custom engraving, and more." />
    </Head>

    <section class="bg-evergreen text-white py-14">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sage-light text-sm font-semibold uppercase tracking-widest mb-3">Ideas & Inspiration</p>
        <h1 class="font-serif text-4xl sm:text-5xl font-semibold mb-4">Design Inspiration Gallery</h1>
        <p class="text-white/70 text-lg max-w-2xl">Browse styles, engravings, and layouts to help shape your vision. Every design shown can be fully customized for your loved one and your cemetery.</p>
      </div>
    </section>

    <section class="py-14 bg-stone">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Category filter -->
        <div class="flex flex-wrap gap-2 mb-10">
          <button
            v-for="cat in categories"
            :key="cat"
            @click="activeCategory = cat"
            class="px-4 py-1.5 rounded-full text-sm font-medium border transition-colors"
            :class="activeCategory === cat
              ? 'bg-evergreen text-white border-evergreen'
              : 'bg-white text-granite border-stone-dark hover:border-evergreen hover:text-evergreen'"
          >
            {{ cat }}
          </button>
        </div>

        <!-- Image grid (masonry) -->
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
          <div
            v-for="item in filteredItems"
            :key="item.id"
            class="break-inside-avoid"
          >
            <button
              class="w-full overflow-hidden rounded-2xl bg-white shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-bronze group"
              @click="lightboxIndex = filteredItems.indexOf(item)"
            >
              <img
                :src="item.src"
                :alt="item.title"
                class="w-full object-cover group-hover:scale-[1.02] transition-transform duration-500"
              />
              <div class="px-4 py-3 flex items-center justify-between">
                <span class="text-xs font-semibold uppercase tracking-widest text-granite">{{ item.category }}</span>
                <span class="text-xs text-bronze font-medium">{{ item.title }} →</span>
              </div>
            </button>
          </div>
        </div>

        <!-- CTA -->
        <div class="mt-16 text-center">
          <h2 class="font-serif text-2xl font-semibold text-evergreen mb-3">Ready to Design Your Own?</h2>
          <p class="text-granite mb-6 max-w-xl mx-auto">Free design proof. We verify your cemetery's rules and send a proof before any payment is due.</p>
          <button @click="openModal" class="bg-evergreen hover:bg-evergreen-light text-white font-semibold px-8 py-3 rounded-lg transition-colors">
            Request a Free Design Proof
          </button>
        </div>
      </div>
    </section>

    <!-- Lightbox -->
    <Teleport to="body">
      <div
        v-if="lightboxIndex !== null"
        class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
        @click.self="lightboxIndex = null"
      >
        <button
          class="absolute top-4 right-4 text-white/70 hover:text-white p-2"
          @click="lightboxIndex = null"
          aria-label="Close"
        >
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <button
          v-if="lightboxIndex > 0"
          class="absolute left-4 text-white/70 hover:text-white p-2"
          @click="lightboxIndex--"
          aria-label="Previous"
        >
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <div class="flex flex-col items-center gap-3 max-h-[90vh]">
          <img
            :src="filteredItems[lightboxIndex].src"
            :alt="filteredItems[lightboxIndex].title"
            class="max-h-[80vh] max-w-full rounded-lg object-contain"
          />
          <span class="text-white/60 text-sm font-medium uppercase tracking-widest">{{ filteredItems[lightboxIndex].category }} — {{ filteredItems[lightboxIndex].title }}</span>
        </div>
        <button
          v-if="lightboxIndex < filteredItems.length - 1"
          class="absolute right-4 text-white/70 hover:text-white p-2"
          @click="lightboxIndex++"
          aria-label="Next"
        >
          <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </Teleport>
  </AppLayout>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useDesignModal } from '@/composables/useDesignModal.js';

const { openModal } = useDesignModal();
const lightboxIndex = ref(null);
const activeCategory = ref('All');

const items = [
  { id: 1,  src: '/images/products/upright-headstones-8.jpg',  category: 'Upright Monuments', title: 'Classic Upright Granite' },
  { id: 2,  src: '/images/products/upright-headstones-1.jpg',  category: 'Upright Monuments', title: 'Double Companion Monument' },
  { id: 3,  src: '/images/products/upright-headstones-4.jpg',  category: 'Upright Monuments', title: 'Heritage Upright' },
  { id: 4,  src: '/images/products/upright-headstones-7.jpg',  category: 'Upright Monuments', title: 'Custom Engraved Upright' },
  { id: 5,  src: '/images/products/upright-headstones-10.jpg', category: 'Upright Monuments', title: 'Black Granite Monument' },
  { id: 6,  src: '/images/products/flat-headstone.jpg',        category: 'Flat Markers',      title: 'Gray Granite Flat Marker' },
  { id: 7,  src: '/images/products/flat-headstone-2.jpg',      category: 'Flat Markers',      title: 'Flat Marker with Engraving' },
  { id: 8,  src: '/images/products/flat-headstone-3.jpg',      category: 'Flat Markers',      title: 'Companion Flat Marker' },
  { id: 9,  src: '/images/products/bronze-headstone.jpg',      category: 'Bronze',            title: 'Flush Bronze Marker' },
  { id: 10, src: '/images/products/bronze-headstone-1.jpg',    category: 'Bronze',            title: 'Bronze with Granite Base' },
  { id: 11, src: '/images/products/bronze-headstone-2.jpg',    category: 'Bronze',            title: 'Heritage Bronze Plaque' },
  { id: 12, src: '/images/products/bronze-headstone-3.jpg',    category: 'Bronze',            title: 'Classic Bronze Memorial' },
  { id: 13, src: '/images/products/slant-headstone.jpg',       category: 'Slant & Bevel',    title: 'Slant Marker in Blue Pearl' },
  { id: 14, src: '/images/products/slant-headstone-2.jpg',     category: 'Slant & Bevel',    title: 'Bevel Marker with Flowers' },
  { id: 15, src: '/images/products/slant-headstone-3.jpg',     category: 'Slant & Bevel',    title: 'Gray Slant Marker' },
  { id: 16, src: '/images/products/bevled-headstone.jpg',      category: 'Slant & Bevel',    title: 'Classic Bevel Marker' },
  { id: 17, src: '/images/products/custom-headstone.jpg',      category: 'Custom Engraving', title: 'Portrait Laser Engraving' },
  { id: 18, src: '/images/products/upright-headstones-9.jpg',  category: 'Custom Engraving', title: 'Pioneer Heritage Motif' },
  { id: 19, src: '/images/products/upright-headstones-3.jpg',  category: 'Veterans',         title: 'Military Upright Monument' },
  { id: 20, src: '/images/products/upright-headstones-5.jpg',  category: 'Veterans',         title: 'Veteran Tribute Stone' },
  { id: 21, src: '/images/products/flat-baby-headstone.jpg',   category: 'Pet Memorials',    title: 'Small Memorial Marker' },
  { id: 22, src: '/images/products/upright-headstones-2.jpg',  category: 'Upright Monuments', title: 'Polished Black Granite' },
  { id: 23, src: '/images/products/upright-headstones-6.jpg',  category: 'Upright Monuments', title: 'Gray Granite Upright' },
];

const categories = computed(() => ['All', ...new Set(items.map(i => i.category))]);

const filteredItems = computed(() => {
  if (activeCategory.value === 'All') return items;
  return items.filter(i => i.category === activeCategory.value);
});
</script>
