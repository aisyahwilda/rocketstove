<template>
  <section class="py-24 relative overflow-hidden bg-[#F8F9FA] text-[#1b1b18]">
    <!-- Ambient Background Pattern / Glow for Light Theme -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(215,51,3,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#D73303] rounded-full mix-blend-multiply filter blur-[150px] opacity-[0.08] animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#F1B11C] rounded-full mix-blend-multiply filter blur-[150px] opacity-[0.08] animate-pulse-slow" style="animation-delay: 2s;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Left Column: Interactive Illustration -->
        <div class="order-2 lg:order-1 relative group flex justify-center" v-animate-on-scroll>
          <div class="relative flex items-center justify-center">
            <img src="/images/tongsampah.png" alt="Tong Sampah" class="w-full max-w-md object-contain drop-shadow-2xl" />
          </div>
        </div>

        <!-- Right Column: Text Content -->
        <div class="order-1 lg:order-2 flex flex-col justify-center" v-animate-on-scroll>
          
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight text-[#1C1C1C]">
            Mulai dari Hal yang <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#F1B11C] to-[#EE5B16]">Sederhana</span>
          </h2>
          
          <div class="w-20 h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] rounded-full mb-8"></div>
          
          <p class="text-lg md:text-xl text-gray-600 leading-relaxed font-medium mb-8">
            Menjaga lingkungan tidak harus dimulai dari hal yang besar. Kebiasaan sederhana seperti <span class="text-[#D73303] font-bold">membuang sampah pada tempatnya</span> dan <span class="text-[#D73303] font-bold">memilah sampah sesuai jenisnya</span> dapat memberikan dampak yang luar biasa baik bagi lingkungan sekitar.
          </p>

          <!-- Interactive Action Cards for Light Theme -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-5 rounded-2xl hover:border-[#F1B11C]/40 hover:-translate-y-1 transition-all duration-300 group">
              <div class="w-12 h-12 rounded-full bg-[#F1B11C]/10 flex items-center justify-center mb-4 group-hover:bg-[#F1B11C]/20 transition-colors">
                <svg class="w-6 h-6 text-[#DB6E15]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
              </div>
              <h4 class="text-[#1C1C1C] text-lg font-bold mb-1">Pilahkan</h4>
              <p class="text-sm text-gray-500">Pisahkan sesuai jenisnya</p>
            </div>
            <div class="bg-white border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-5 rounded-2xl hover:border-[#EE5B16]/40 hover:-translate-y-1 transition-all duration-300 group">
              <div class="w-12 h-12 rounded-full bg-[#EE5B16]/10 flex items-center justify-center mb-4 group-hover:bg-[#EE5B16]/20 transition-colors">
                <svg class="w-6 h-6 text-[#EE5B16]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <h4 class="text-[#1C1C1C] text-lg font-bold mb-1">Biasakan</h4>
              <p class="text-sm text-gray-500">Jadikan rutinitas harian</p>
            </div>
          </div>
          
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
  transform: translateY(30px);
  transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0);
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.05; transform: scale(1); }
  50% { opacity: 0.15; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
