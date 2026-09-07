<template>
  <section class="py-24 relative overflow-hidden bg-[#F8F9FA] text-[#1C1C1C]">
    <!-- Ambient Background Accents -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(178,33,2,0.03)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#D73303] rounded-full mix-blend-multiply filter blur-[150px] opacity-[0.05] animate-pulse-slow"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      
      <!-- Section Header -->
      <div class="text-center mb-16 md:mb-24" v-animate-on-scroll>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight text-[#1C1C1C]">
          Dampak Pembakaran <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#D73303] to-[#921802]">Sembarangan</span>
        </h2>
        
        <div class="w-24 h-1.5 bg-gradient-to-r from-[#B22102] to-[#EE5B16] rounded-full mx-auto mb-8"></div>
        
        <p class="text-lg md:text-xl text-gray-600 leading-relaxed font-medium max-w-3xl mx-auto">
          Pembakaran sampah secara terbuka masih sering dilakukan karena dianggap praktis. Namun, kebiasaan ini dapat menimbulkan berbagai dampak negatif bagi lingkungan dan kesehatan.
        </p>
      </div>

      <!-- Grid Layout for Impacts (2x2) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
        
        <!-- Impact 1 -->
        <div class="group" v-animate-on-scroll="{ delay: 0 }">
          <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_25px_50px_rgba(178,33,2,0.08)] transition-all duration-500 h-full border border-gray-50 hover:-translate-y-2 relative overflow-hidden">
            <!-- Decorative gradient orb -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-[#898321]/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="w-16 h-16 rounded-2xl bg-[#898321]/10 flex items-center justify-center mb-8 group-hover:bg-[#898321] group-hover:shadow-[0_0_20px_rgba(137,131,33,0.3)] transition-all duration-500">
              <svg class="w-8 h-8 text-[#898321] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
            </div>
            
            <h3 class="text-2xl font-bold text-[#1C1C1C] mb-4 group-hover:text-[#898321] transition-colors">Menimbulkan Asap yang Mengganggu</h3>
            <p class="text-gray-500 leading-relaxed text-lg">
              Asap tebal dapat menghalangi jarak pandang, meninggalkan bau menyengat, dan membuat aktivitas di luar rumah menjadi sangat tidak nyaman.
            </p>
          </div>
        </div>

        <!-- Impact 2 -->
        <div class="group" v-animate-on-scroll="{ delay: 100 }">
          <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_25px_50px_rgba(178,33,2,0.08)] transition-all duration-500 h-full border border-gray-50 hover:-translate-y-2 relative overflow-hidden md:translate-y-8">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-[#EE5B16]/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="w-16 h-16 rounded-2xl bg-[#EE5B16]/10 flex items-center justify-center mb-8 group-hover:bg-[#EE5B16] group-hover:shadow-[0_0_20px_rgba(238,91,22,0.3)] transition-all duration-500">
              <svg class="w-8 h-8 text-[#EE5B16] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            </div>
            
            <h3 class="text-2xl font-bold text-[#1C1C1C] mb-4 group-hover:text-[#EE5B16] transition-colors">Menyebabkan Gangguan Pernapasan</h3>
            <p class="text-gray-500 leading-relaxed text-lg">
              Asap beracun memicu penyakit ISPA, asma, dan gangguan paru-paru, yang sangat berisiko tinggi bagi kesehatan anak-anak serta lansia.
            </p>
          </div>
        </div>

        <!-- Impact 3 -->
        <div class="group" v-animate-on-scroll="{ delay: 200 }">
          <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_25px_50px_rgba(178,33,2,0.08)] transition-all duration-500 h-full border border-gray-50 hover:-translate-y-2 relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-[#B22102]/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="w-16 h-16 rounded-2xl bg-[#B22102]/10 flex items-center justify-center mb-8 group-hover:bg-[#B22102] group-hover:shadow-[0_0_20px_rgba(178,33,2,0.3)] transition-all duration-500">
              <svg class="w-8 h-8 text-[#B22102] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            
            <h3 class="text-2xl font-bold text-[#1C1C1C] mb-4 group-hover:text-[#B22102] transition-colors">Menurunkan Kualitas Udara</h3>
            <p class="text-gray-500 leading-relaxed text-lg">
              Melepaskan gas karbon dioksida dan polutan berbahaya yang merusak oksigen dan memperburuk kondisi pemanasan global.
            </p>
          </div>
        </div>

        <!-- Impact 4 -->
        <div class="group" v-animate-on-scroll="{ delay: 300 }">
          <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:shadow-[0_25px_50px_rgba(178,33,2,0.08)] transition-all duration-500 h-full border border-gray-50 hover:-translate-y-2 relative overflow-hidden md:translate-y-8">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-br from-[#C94B07]/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
            
            <div class="w-16 h-16 rounded-2xl bg-[#C94B07]/10 flex items-center justify-center mb-8 group-hover:bg-[#C94B07] group-hover:shadow-[0_0_20px_rgba(201,75,7,0.3)] transition-all duration-500">
              <svg class="w-8 h-8 text-[#C94B07] group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            
            <h3 class="text-2xl font-bold text-[#1C1C1C] mb-4 group-hover:text-[#C94B07] transition-colors">Mengganggu Kenyamanan Warga</h3>
            <p class="text-gray-500 leading-relaxed text-lg">
              Abu pembakaran dapat beterbangan mengotori rumah warga sekitar, merusak estetika lingkungan, dan sering kali memicu konflik bertetangga.
            </p>
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
.rs-pre-animate {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) !important;
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.03; transform: scale(1); }
  50% { opacity: 0.06; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
