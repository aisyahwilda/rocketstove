<template>
  <section class="py-24 relative overflow-hidden bg-[#1b1b18] text-white">
    <!-- Ambient Background Accent -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(215,51,3,0.02)_1px,transparent_1px)] bg-[size:30px_30px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
      
      <!-- Masonry Gallery Grid -->
      <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 sm:gap-6 space-y-4 sm:space-y-6">
        
        <!-- Image Item -->
        <div 
          v-for="(img, index) in images" 
          :key="index"
          class="rs-gallery-item group relative rounded-2xl overflow-hidden cursor-pointer bg-[#0a0402] border border-white/5 break-inside-avoid"
          v-animate-on-scroll="{ delay: (index % 4) * 100 }"
        >
          <!-- Image -->
          <img 
            :src="img.src" 
            :alt="img.title" 
            class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
            loading="lazy"
          />
          
          <!-- Hover Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a0402]/90 via-[#0a0402]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
            <!-- Glow Accent -->
            <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-[#D73303] via-[#F1B11C] to-[#898321] transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-700"></div>
            
            <h3 class="text-xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">{{ img.title }}</h3>
            <p class="text-sm text-gray-300 translate-y-4 group-hover:translate-y-0 transition-transform duration-500 delay-75">{{ img.category }}</p>
          </div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

// Gallery Image Data
const images = ref([
  { src: '/images/OPENING.jpeg', title: 'Grand Opening', category: 'Peresmian' },
  { src: '/images/1.jpeg', title: 'Aksi Nyata', category: 'Kegiatan Warga' },
  { src: '/images/sosialisasi.jpeg', title: 'Sosialisasi Alat', category: 'Edukasi' },
  { src: '/images/2.jpeg', title: 'Penerapan', category: 'Implementasi' },
  { src: '/images/edukasihe.png', title: 'Penyuluhan Lingkungan', category: 'Edukasi' },
  { src: '/images/3.jpeg', title: 'Kolaborasi', category: 'Kegiatan Warga' },
  { src: '/images/pengembangan.jpeg', title: 'Pengembangan Alat', category: 'Riset & Teknologi' },
  { src: '/images/4.jpeg', title: 'Proses Daur Ulang', category: 'Implementasi' },
  { src: '/images/5.jpeg', title: 'Kerja Bakti', category: 'Aksi Nyata' },
  { src: '/images/6.jpeg', title: 'Hasil Positif', category: 'Dampak' },
  { src: '/images/7.jpeg', title: 'Lingkungan Bersih', category: 'Dampak' }
]);

const vAnimateOnScroll = {
  mounted: (el, binding) => {
    el.classList.add('rs-pre-animate');
    
    if (binding.value && binding.value.delay) {
      el.style.transitionDelay = `${binding.value.delay}ms`;
    }
    
    const obs = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        el.classList.add('rs-animate-in');
        obs.disconnect();
      }
    }, { threshold: 0.1 });
    obs.observe(el);
  }
};
</script>

<style scoped>
/* Scroll Animation */
.rs-pre-animate {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) !important;
}

/* Gallery Item Styling */
.rs-gallery-item {
  transform: translateZ(0); /* Hardware acceleration */
}

/* Subtle border glow on hover */
.rs-gallery-item::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem; /* matches rounded-2xl */
  box-shadow: inset 0 0 0 1px rgba(255,255,255,0);
  transition: box-shadow 0.5s ease;
  pointer-events: none;
}

.rs-gallery-item:hover::after {
  box-shadow: inset 0 0 0 2px rgba(241,177,28,0.5); /* Yellow/Orange border */
}
</style>
