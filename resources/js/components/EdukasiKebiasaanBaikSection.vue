<template>
  <section class="py-24 relative overflow-hidden bg-[#0a0402] text-white">
    <!-- Ambient Glows -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(241,177,28,0.03)_1px,transparent_1px)] bg-[size:50px_50px] pointer-events-none"></div>
    <div class="absolute top-1/4 left-0 w-96 h-96 bg-[#898321] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-pulse-slow"></div>
    <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-[#EE5B16] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-pulse-slow" style="animation-delay: 2s;"></div>

    <div class="max-w-5xl mx-auto px-6 relative z-10">
      
      <!-- Header -->
      <div class="text-center mb-16 md:mb-20" v-animate-on-scroll>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight text-white">
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#898321] to-[#F1B11C]">Kebiasaan Baik</span> untuk Lingkungan
        </h2>
        <div class="w-24 h-1.5 bg-gradient-to-r from-[#898321] to-[#F1B11C] rounded-full mx-auto mb-6"></div>
        <p class="text-gray-400 text-lg md:text-xl font-medium max-w-2xl mx-auto">
          Lima langkah kecil yang dapat kita mulai hari ini untuk memberikan dampak besar bagi kelestarian alam dan lingkungan sekitar.
        </p>
      </div>

      <!-- Centered Vertical Checklist Layout -->
      <div class="space-y-6">
        
        <!-- Item 1 -->
        <div class="group" v-animate-on-scroll="{ delay: 0 }">
          <div class="rs-habit-card border-[#898321]/20 group-hover:border-[#898321] group-hover:shadow-[0_10px_30px_rgba(137,131,33,0.15)]">
            <div class="flex items-center gap-6">
              <div class="w-14 h-14 shrink-0 rounded-2xl bg-[#898321]/10 flex items-center justify-center group-hover:bg-[#898321] group-hover:shadow-[0_0_20px_rgba(137,131,33,0.4)] transition-all duration-500">
                <svg class="w-7 h-7 text-[#898321] group-hover:text-white group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl md:text-2xl font-bold text-gray-200 group-hover:text-white transition-colors">
                Pisahkan sampah sesuai jenisnya
              </h3>
            </div>
            <!-- Glow Effect -->
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-32 h-full bg-gradient-to-l from-[#898321]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-r-2xl"></div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="group" v-animate-on-scroll="{ delay: 100 }">
          <div class="rs-habit-card border-[#EE5B16]/20 group-hover:border-[#EE5B16] group-hover:shadow-[0_10px_30px_rgba(238,91,22,0.15)] md:ml-8">
            <div class="flex items-center gap-6">
              <div class="w-14 h-14 shrink-0 rounded-2xl bg-[#EE5B16]/10 flex items-center justify-center group-hover:bg-[#EE5B16] group-hover:shadow-[0_0_20px_rgba(238,91,22,0.4)] transition-all duration-500">
                <svg class="w-7 h-7 text-[#EE5B16] group-hover:text-white group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl md:text-2xl font-bold text-gray-200 group-hover:text-white transition-colors">
                Kurangi penggunaan plastik sekali pakai
              </h3>
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-32 h-full bg-gradient-to-l from-[#EE5B16]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-r-2xl"></div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="group" v-animate-on-scroll="{ delay: 200 }">
          <div class="rs-habit-card border-[#F1B11C]/20 group-hover:border-[#F1B11C] group-hover:shadow-[0_10px_30px_rgba(241,177,28,0.15)]">
            <div class="flex items-center gap-6">
              <div class="w-14 h-14 shrink-0 rounded-2xl bg-[#F1B11C]/10 flex items-center justify-center group-hover:bg-[#F1B11C] group-hover:shadow-[0_0_20px_rgba(241,177,28,0.4)] transition-all duration-500">
                <svg class="w-7 h-7 text-[#F1B11C] group-hover:text-white group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl md:text-2xl font-bold text-gray-200 group-hover:text-white transition-colors">
                Buang sampah pada tempatnya
              </h3>
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-32 h-full bg-gradient-to-l from-[#F1B11C]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-r-2xl"></div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="group" v-animate-on-scroll="{ delay: 300 }">
          <div class="rs-habit-card border-[#D73303]/20 group-hover:border-[#D73303] group-hover:shadow-[0_10px_30px_rgba(215,51,3,0.15)] md:ml-8">
            <div class="flex items-center gap-6">
              <div class="w-14 h-14 shrink-0 rounded-2xl bg-[#D73303]/10 flex items-center justify-center group-hover:bg-[#D73303] group-hover:shadow-[0_0_20px_rgba(215,51,3,0.4)] transition-all duration-500">
                <svg class="w-7 h-7 text-[#D73303] group-hover:text-white group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl md:text-2xl font-bold text-gray-200 group-hover:text-white transition-colors">
                Jaga kebersihan lingkungan sekitar rumah
              </h3>
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-32 h-full bg-gradient-to-l from-[#D73303]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-r-2xl"></div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="group" v-animate-on-scroll="{ delay: 400 }">
          <div class="rs-habit-card border-[#B22102]/20 group-hover:border-[#B22102] group-hover:shadow-[0_10px_30px_rgba(178,33,2,0.15)]">
            <div class="flex items-center gap-6">
              <div class="w-14 h-14 shrink-0 rounded-2xl bg-[#B22102]/10 flex items-center justify-center group-hover:bg-[#B22102] group-hover:shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500">
                <svg class="w-7 h-7 text-[#B22102] group-hover:text-white group-hover:scale-110 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h3 class="text-xl md:text-2xl font-bold text-gray-200 group-hover:text-white transition-colors">
                Ajak keluarga dan tetangga untuk peduli
              </h3>
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-32 h-full bg-gradient-to-l from-[#B22102]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none rounded-r-2xl"></div>
          </div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
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
  transform: translateY(30px);
  transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) !important;
}

/* Base Card Styling */
.rs-habit-card {
  position: relative;
  background: rgba(255, 255, 255, 0.02);
  backdrop-filter: blur(10px);
  border-width: 1px;
  border-style: solid;
  padding: 1.5rem 2rem;
  border-radius: 1.5rem;
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  overflow: hidden;
  cursor: default;
}

.group:hover .rs-habit-card {
  background: rgba(255, 255, 255, 0.05);
  transform: translateX(10px);
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.05; transform: scale(1); }
  50% { opacity: 0.15; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
