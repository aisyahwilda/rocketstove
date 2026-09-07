<template>
  <section class="py-24 relative overflow-hidden bg-white text-[#1C1C1C]">
    <!-- Ambient Background Accents -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(215,51,3,0.03)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      
      <!-- Section Header -->
      <div class="text-center mb-16" v-animate-on-scroll>

        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
          Kenali Jenis <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#F1B11C] via-[#EE5B16] to-[#D73303]">Sampah</span> di Sekitar Kita
        </h2>
        <p class="text-gray-600 text-lg md:text-xl max-w-2xl mx-auto font-medium">
          Pahami kategori sampah untuk memudahkan proses daur ulang dan menjaga lingkungan kita tetap bersih.
        </p>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Card 1: Organik -->
        <div class="rs-type-card group" v-animate-on-scroll="{ delay: 0 }">
          <div class="rs-card-inner bg-white border border-gray-100 group-hover:border-[#898321]/30">
            <!-- Image Hero -->
            <div class="relative h-56 w-full overflow-hidden rounded-t-[22px] mb-6">
              <div class="absolute inset-0 bg-[#898321]/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
              <img src="/images/organik.jpg" alt="Sampah Organik" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
              <div class="absolute bottom-0 left-0 w-full h-2/3 bg-gradient-to-t from-white via-white/80 to-transparent z-10"></div>
            </div>
            
            <div class="px-8 pb-8 relative z-20 -mt-16">
              <h3 class="text-2xl font-bold text-[#1C1C1C] mb-3 flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#898321] shadow-[0_0_10px_rgba(137,131,33,0.5)]"></span>
                Organik
              </h3>
              
              <p class="text-gray-600 mb-6 h-20 text-sm leading-relaxed">
                Sampah yang berasal dari sisa makhluk hidup dan mudah terurai secara alami oleh alam.
              </p>
              
              <div class="pt-6 border-t border-gray-100">
                <h4 class="text-[#898321] font-bold text-sm uppercase tracking-wider mb-4">Contoh:</h4>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#898321] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Sisa makanan</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#898321] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Daun kering</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#898321] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Kulit buah</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#898321] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Sayuran</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Anorganik -->
        <div class="rs-type-card group" v-animate-on-scroll="{ delay: 200 }">
          <div class="rs-card-inner bg-white border border-gray-100 group-hover:border-[#EE5B16]/30 transform md:-translate-y-4">
            <!-- Image Hero -->
            <div class="relative h-56 w-full overflow-hidden rounded-t-[22px] mb-6">
              <div class="absolute inset-0 bg-[#EE5B16]/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
              <img src="/images/anorganik.jpg" alt="Sampah Anorganik" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
              <div class="absolute bottom-0 left-0 w-full h-2/3 bg-gradient-to-t from-white via-white/80 to-transparent z-10"></div>
            </div>
            
            <div class="px-8 pb-8 relative z-20 -mt-16">
              <h3 class="text-2xl font-bold text-[#1C1C1C] mb-3 flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#EE5B16] shadow-[0_0_10px_rgba(238,91,22,0.5)]"></span>
                Anorganik
              </h3>
              
              <p class="text-gray-600 mb-6 h-20 text-sm leading-relaxed">
                Sampah yang sangat sulit terurai secara alami dan umumnya berasal dari bahan buatan manusia.
              </p>
              
              <div class="pt-6 border-t border-gray-100">
                <h4 class="text-[#EE5B16] font-bold text-sm uppercase tracking-wider mb-4">Contoh:</h4>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#EE5B16] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Botol plastik</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#EE5B16] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Kaleng minuman</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#EE5B16] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Kaca</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#EE5B16] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Kemasan makanan</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: B3 -->
        <div class="rs-type-card group" v-animate-on-scroll="{ delay: 400 }">
          <div class="rs-card-inner bg-white border border-gray-100 group-hover:border-[#B22102]/30">
            <!-- Image Hero -->
            <div class="relative h-56 w-full overflow-hidden rounded-t-[22px] mb-6">
              <div class="absolute inset-0 bg-[#B22102]/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
              <img src="/images/b3.png" alt="Sampah B3" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition-transform duration-700">
              <div class="absolute bottom-0 left-0 w-full h-2/3 bg-gradient-to-t from-white via-white/80 to-transparent z-10"></div>
            </div>
            
            <div class="px-8 pb-8 relative z-20 -mt-16">
              <h3 class="text-2xl font-bold text-[#1C1C1C] mb-3 flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-[#B22102] shadow-[0_0_10px_rgba(178,33,2,0.5)]"></span>
                B3 (Berbahaya)
              </h3>
              
              <p class="text-gray-600 mb-6 h-20 text-sm leading-relaxed">
                Sampah yang mengandung bahan berbahaya, beracun, dan memerlukan penanganan khusus.
              </p>
              
              <div class="pt-6 border-t border-gray-100">
                <h4 class="text-[#B22102] font-bold text-sm uppercase tracking-wider mb-4">Contoh:</h4>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#B22102] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Baterai bekas</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#B22102] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Lampu bekas</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#B22102] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Obat kedaluwarsa</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-5 h-5 text-[#B22102] mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-700 font-medium">Cairan kimia tertentu</span>
                  </li>
                </ul>
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
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0);
}

/* Card Styling */
.rs-type-card {
  height: 100%;
}

.rs-card-inner {
  height: 100%;
  position: relative;
  border-width: 1px;
  border-style: solid;
  border-radius: 24px;
  padding: 0;
  overflow: hidden;
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 10px 30px rgba(0,0,0,0.04);
}

.rs-type-card:hover .rs-card-inner {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
</style>
