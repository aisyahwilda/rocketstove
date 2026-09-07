<template>
  <section class="py-24 relative overflow-hidden bg-[#0a0402] text-white">
    <!-- Ambient Background Glows -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(238,91,22,0.05)_1px,transparent_1px)] bg-[size:50px_50px] pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#EE5B16] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-pulse-slow"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#898321] rounded-full mix-blend-screen filter blur-[200px] opacity-10 animate-pulse-slow" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      
      <!-- Section Header -->
      <div class="text-center mb-16" v-animate-on-scroll>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
          Mengapa Sampah <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#F1B11C] via-[#EE5B16] to-[#D73303]">Perlu Dipilah?</span>
        </h2>
        <div class="w-24 h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] rounded-full mx-auto mb-6"></div>
      </div>

      <!-- Grid Layout for 4 Reasons -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-8 max-w-5xl mx-auto">
        
        <!-- Reason 1: Memudahkan Pengelolaan -->
        <div class="rs-reason-card group" v-animate-on-scroll="{ delay: 0 }">
          <div class="rs-card-inner border-white/5 group-hover:border-[#EE5B16]/50">
            <div class="rs-card-glow bg-[#EE5B16]"></div>
            
            <div class="relative z-10 flex items-start gap-6">
              <div class="w-16 h-16 shrink-0 rounded-2xl bg-[#EE5B16]/10 flex items-center justify-center group-hover:bg-[#EE5B16] group-hover:shadow-[0_0_20px_rgba(238,91,22,0.5)] transition-all duration-500">
                <!-- Recycle Icon -->
                <svg class="w-8 h-8 text-[#EE5B16] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#EE5B16] transition-colors">Memudahkan Pengelolaan</h3>
                <p class="text-gray-400 leading-relaxed text-sm md:text-base">
                  Memudahkan proses pengelolaan dan pemilahan sampah di fasilitas daur ulang, sehingga prosesnya menjadi lebih efisien.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Reason 2: Mengurangi Pencemaran -->
        <div class="rs-reason-card group" v-animate-on-scroll="{ delay: 100 }">
          <div class="rs-card-inner border-white/5 group-hover:border-[#898321]/50">
            <div class="rs-card-glow bg-[#898321]"></div>
            
            <div class="relative z-10 flex items-start gap-6">
              <div class="w-16 h-16 shrink-0 rounded-2xl bg-[#898321]/10 flex items-center justify-center group-hover:bg-[#898321] group-hover:shadow-[0_0_20px_rgba(137,131,33,0.5)] transition-all duration-500">
                <!-- Leaf Icon -->
                <svg class="w-8 h-8 text-[#898321] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#898321] transition-colors">Mengurangi Pencemaran</h3>
                <p class="text-gray-400 leading-relaxed text-sm md:text-base">
                  Mencegah tercampurnya bahan berbahaya dengan lingkungan sekitar, secara langsung mengurangi polusi dan pencemaran tanah.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Reason 3: Membantu Pengangkutan -->
        <div class="rs-reason-card group" v-animate-on-scroll="{ delay: 200 }">
          <div class="rs-card-inner border-white/5 group-hover:border-[#F1B11C]/50">
            <div class="rs-card-glow bg-[#F1B11C]"></div>
            
            <div class="relative z-10 flex items-start gap-6">
              <div class="w-16 h-16 shrink-0 rounded-2xl bg-[#F1B11C]/10 flex items-center justify-center group-hover:bg-[#F1B11C] group-hover:shadow-[0_0_20px_rgba(241,177,28,0.5)] transition-all duration-500">
                <!-- Truck Icon -->
                <svg class="w-8 h-8 text-[#F1B11C] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#F1B11C] transition-colors">Membantu Pengangkutan</h3>
                <p class="text-gray-400 leading-relaxed text-sm md:text-base">
                  Membantu dan mempercepat proses pengangkutan sampah oleh petugas kebersihan dan memastikan pengolahannya tepat sasaran.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Reason 4: Menjaga Lingkungan Bersih -->
        <div class="rs-reason-card group" v-animate-on-scroll="{ delay: 300 }">
          <div class="rs-card-inner border-white/5 group-hover:border-[#D73303]/50">
            <div class="rs-card-glow bg-[#D73303]"></div>
            
            <div class="relative z-10 flex items-start gap-6">
              <div class="w-16 h-16 shrink-0 rounded-2xl bg-[#D73303]/10 flex items-center justify-center group-hover:bg-[#D73303] group-hover:shadow-[0_0_20px_rgba(215,51,3,0.5)] transition-all duration-500">
                <!-- Home Icon -->
                <svg class="w-8 h-8 text-[#D73303] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </div>
              <div>
                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#D73303] transition-colors">Lingkungan Bersih & Nyaman</h3>
                <p class="text-gray-400 leading-relaxed text-sm md:text-base">
                  Menjaga area pemukiman Anda tetap bersih, terhindar dari bau tidak sedap, dan nyaman untuk ditinggali keluarga Anda.
                </p>
              </div>
            </div>
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
    
    // Apply delay if provided
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
  transform: translateY(30px) scale(0.95);
  transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) scale(1);
}

/* Card Styling */
.rs-reason-card {
  height: 100%;
}

.rs-card-inner {
  height: 100%;
  position: relative;
  background: rgba(27, 27, 24, 0.6);
  backdrop-filter: blur(10px);
  border-width: 1px;
  border-style: solid;
  border-radius: 20px;
  padding: 2rem;
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.rs-reason-card:hover .rs-card-inner {
  transform: translateY(-5px);
  background: rgba(27, 27, 24, 0.9);
  box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}

.rs-card-glow {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  border-radius: 50%;
  filter: blur(60px);
  opacity: 0;
  transition: opacity 0.5s ease;
  pointer-events: none;
  background-image: radial-gradient(circle at center, currentColor 0%, transparent 50%);
}

.rs-reason-card:hover .rs-card-glow {
  opacity: 0.08;
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.05; transform: scale(1); }
  50% { opacity: 0.15; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
