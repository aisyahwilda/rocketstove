<template>
  <section class="py-24 relative overflow-hidden bg-white text-[#1C1C1C]">
    
    <!-- Decorative Background Glows -->
    <div class="absolute -top-32 -right-32 w-[600px] h-[600px] bg-gradient-to-br from-[#F1B11C]/10 to-[#EE5B16]/10 rounded-full blur-[100px] pointer-events-none animate-float"></div>
    <div class="absolute -bottom-32 -left-32 w-[600px] h-[600px] bg-gradient-to-tr from-[#898321]/10 to-[#D73303]/10 rounded-full blur-[100px] pointer-events-none animate-float-delayed"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center" v-animate-on-scroll>
      
      <!-- Eyebrow Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#1b1b18]/5 border border-[#1b1b18]/10 mb-8">
        <svg class="w-4 h-4 text-[#EE5B16]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
        <span class="text-[#D73303] text-sm font-bold tracking-widest uppercase">Ucapan Terima Kasih</span>
      </div>

      <!-- Main Headline -->
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-8 leading-tight tracking-tight text-[#1C1C1C]">
        Terima Kasih atas <br class="hidden md:block" />
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#D73303] via-[#EE5B16] to-[#F1B11C]">Dukungannya</span>
      </h2>
      
      <!-- Decorative Separator -->
      <div class="w-24 h-1 bg-gradient-to-r from-[#D73303] to-[#F1B11C] rounded-full mx-auto mb-10"></div>

      <!-- Description -->
      <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-3xl mx-auto font-medium">
        Kami mengucapkan terima kasih kepada seluruh <span class="text-[#B22102] font-bold">masyarakat</span>, <span class="text-[#B22102] font-bold">mitra program</span>, serta pihak yang telah mendukung pelaksanaan <span class="text-[#EE5B16] font-bold">EcoBurner</span> sehingga program ini dapat berjalan dengan baik.
      </p>

    </div>
  </section>
</template>

<script setup>
const vAnimateOnScroll = {
  mounted: (el) => {
    el.classList.add('rs-pre-animate');
    
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
  transform: translateY(40px) scale(0.95);
  transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) scale(1) !important;
}

@keyframes float {
  0% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-30px) rotate(5deg); }
  100% { transform: translateY(0px) rotate(0deg); }
}

.animate-float {
  animation: float 10s ease-in-out infinite;
}

.animate-float-delayed {
  animation: float 12s ease-in-out infinite reverse;
}
</style>
