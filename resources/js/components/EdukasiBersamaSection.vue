<template>
  <section class="py-32 relative overflow-hidden bg-white text-[#1C1C1C]">
    <!-- Ambient Background Elements -->
    <div class="absolute inset-0 bg-[radial-gradient(rgba(178,33,2,0.03)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-[#F1B11C]/10 to-[#EE5B16]/10 rounded-full blur-[100px] pointer-events-none animate-float"></div>
    <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-gradient-to-tr from-[#898321]/10 to-[#D73303]/10 rounded-full blur-[100px] pointer-events-none animate-float-delayed"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center" v-animate-on-scroll>
      
      <!-- Decorative Icon -->
      <div class="w-20 h-20 mx-auto mb-10 relative">
        <div class="absolute inset-0 bg-[#898321] rounded-full filter blur-[20px] opacity-20 animate-pulse-slow"></div>
        <div class="relative w-full h-full bg-white border border-[#898321]/20 rounded-full shadow-lg flex items-center justify-center">
          <svg class="w-10 h-10 text-[#898321]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
        </div>
      </div>

      <h2 class="text-4xl md:text-6xl font-extrabold mb-8 leading-tight tracking-tight text-[#1C1C1C]">
        Bersama Menjaga <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#898321] via-[#D73303] to-[#EE5B16]">Lingkungan</span>
      </h2>
      
      <div class="relative inline-block">
        <svg class="absolute -top-8 -left-8 w-16 h-16 text-[#D73303]/10 transform -scale-x-100" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
        
        <p class="text-xl md:text-3xl text-gray-600 leading-relaxed font-medium md:leading-[1.6]">
          Lingkungan yang bersih tidak tercipta karena satu orang saja, tetapi karena <span class="text-[#B22102] font-bold">kepedulian dan kerja sama banyak orang</span>.
        </p>
        
        <svg class="absolute -bottom-8 -right-8 w-16 h-16 text-[#D73303]/10" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
      </div>

      <div class="w-24 h-1 bg-gradient-to-r from-[#D73303] to-[#F1B11C] rounded-full mx-auto my-10"></div>

      <p class="text-lg md:text-xl text-gray-500 leading-relaxed max-w-2xl mx-auto">
        Melalui kebiasaan sederhana yang dilakukan setiap hari, kita dapat membantu menciptakan lingkungan yang lebih sehat, nyaman, dan bersih untuk semua.
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

@keyframes pulse-slow {
  0%, 100% { opacity: 0.1; transform: scale(1); }
  50% { opacity: 0.3; transform: scale(1.1); }
}

.animate-pulse-slow {
  animation: pulse-slow 4s infinite ease-in-out;
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
