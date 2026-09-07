<template>
  <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-[#0a0402] pt-20">
    <!-- Abstract Background -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(241,177,28,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
    <div class="absolute -top-1/4 -right-1/4 w-[800px] h-[800px] bg-[#EE5B16] rounded-full filter blur-[150px] opacity-[0.07] animate-pulse-slow"></div>
    <div class="absolute -bottom-1/4 -left-1/4 w-[800px] h-[800px] bg-[#898321] rounded-full filter blur-[150px] opacity-[0.05] animate-pulse-slow" style="animation-delay: 2s;"></div>

    <div class="max-w-5xl mx-auto px-6 relative z-10 text-center" v-animate-on-scroll>
      
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 backdrop-blur-sm border border-white/10 mb-8">
        <span class="w-2 h-2 rounded-full bg-[#F1B11C] animate-pulse"></span>
        <span class="text-[#F1B11C] text-sm font-bold tracking-widest uppercase">Galeri Kegiatan</span>
      </div>

      <!-- Main Heading -->
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold mb-8 text-white leading-tight tracking-tight">
        Dokumentasi <br class="hidden md:block" />
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#D73303] via-[#EE5B16] to-[#F1B11C]">Perjalanan Kami</span>
      </h1>

      <!-- Description -->
      <p class="text-lg md:text-2xl text-gray-400 font-medium leading-relaxed max-w-3xl mx-auto mb-10">
        Menyaksikan langsung jejak langkah <span class="text-white font-bold">EcoBurner</span> dalam mensosialisasikan, mengembangkan, dan mengedukasi masyarakat tentang pentingnya lingkungan bebas asap.
      </p>

    </div>
  </section>
</template>

<script setup>
const vAnimateOnScroll = {
  mounted: (el) => {
    el.classList.add('rs-pre-animate');
    
    // Trigger animation almost immediately for Hero
    setTimeout(() => {
      el.classList.add('rs-animate-in');
    }, 100);
  }
};
</script>

<style scoped>
.rs-pre-animate {
  opacity: 0;
  transform: translateY(40px) scale(0.98);
  transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) scale(1) !important;
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.05; transform: scale(1); }
  50% { opacity: 0.1; transform: scale(1.05); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}

@keyframes scroll-down {
  0% { transform: translateY(0); opacity: 1; }
  100% { transform: translateY(15px); opacity: 0; }
}

.animate-scroll-down {
  animation: scroll-down 2s infinite ease-in-out;
}
</style>
