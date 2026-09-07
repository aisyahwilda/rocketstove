<template>
  <section class="py-24 md:py-32 relative overflow-hidden bg-[#F8F9FA]">
    <!-- Ambient glowing orbs in the background -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(215,51,3,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
    <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-[#EE5B16] rounded-full filter blur-[150px] opacity-[0.05] pointer-events-none animate-pulse-slow"></div>

    <div class="max-w-5xl mx-auto px-6 relative z-10">
      
      <!-- High Contrast Dark Card -->
      <div class="relative bg-gradient-to-br from-[#1C1C1C] to-[#0a0402] border border-[#EE5B16]/30 rounded-[2.5rem] p-10 md:p-16 lg:p-20 text-center overflow-hidden shadow-[0_40px_80px_rgba(0,0,0,0.15)] group" v-animate-on-scroll>
        
        <!-- Inner Card Glows -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-[radial-gradient(circle,rgba(241,177,28,0.15)_0%,transparent_70%)] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-[radial-gradient(circle,rgba(215,51,3,0.15)_0%,transparent_70%)] pointer-events-none"></div>
        
        <!-- Icon Container -->
        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-[#EE5B16] to-[#B22102] rounded-2xl flex items-center justify-center text-white mb-8 shadow-[0_10px_25px_rgba(238,91,22,0.4)] transform -rotate-6 group-hover:rotate-0 group-hover:scale-110 transition-all duration-500 relative z-10">
          <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
        </div>

        <!-- Headline -->
        <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight relative z-10 tracking-tight">
          Ingin Mengenal Solusi yang <br class="hidden md:block" />Kami Kembangkan?
        </h2>
        
        <!-- Description -->
        <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-2xl mx-auto mb-10 font-medium relative z-10">
          Pelajari lebih lanjut mengenai alat inovatif ini dan bagaimana <span class="text-white font-bold">Rocket Stove</span> membantu pengelolaan sampah bebas asap di lingkungan masyarakat.
        </p>

        <!-- CTA Button -->
        <div class="relative z-10">
          <a href="/rocket-stove" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-[#D73303] to-[#EE5B16] hover:from-[#EE5B16] hover:to-[#F1B11C] text-white font-bold text-lg rounded-full shadow-[0_10px_25px_rgba(215,51,3,0.4)] hover:shadow-[0_15px_35px_rgba(238,91,22,0.6)] transition-all duration-300 hover:-translate-y-1">
            <span>Lihat Rocket Stove</span>
            <svg class="w-6 h-6 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>
        
      </div>

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
.rs-pre-animate {
  opacity: 0;
  transform: translateY(50px) scale(0.95);
  transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) scale(1) !important;
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.05; transform: scale(1); }
  50% { opacity: 0.1; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
