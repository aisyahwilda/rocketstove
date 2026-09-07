<template>
  <section class="relative w-full h-[80vh] min-h-[600px] flex items-center justify-center overflow-hidden bg-[#0a0402]">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
      <img src="/images/edukasihe.png" alt="Edukasi Lingkungan" class="w-full h-full object-cover object-top scale-105 animate-slow-pan" />
      
      <!-- Overlay Gradient using color palette -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#0a0402]/95 via-[#1b1b18]/70 to-transparent"></div>
      
      <!-- Secondary Vertical Overlay for Text Legibility -->
      <div class="absolute inset-0 bg-gradient-to-t from-[#0a0402] via-transparent to-transparent opacity-90"></div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full h-full flex flex-col justify-center pt-24 md:pt-32">
      <div class="max-w-3xl">
        <!-- Decorative Badge -->
        <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-[#1b1b18]/60 border border-[#EE5B16]/30 backdrop-blur-md mb-8 opacity-0 animate-fade-in-up" style="animation-delay: 0.1s; animation-fill-mode: forwards;">
          <span class="w-2.5 h-2.5 rounded-full bg-[#F1B11C] shadow-[0_0_10px_#F1B11C] animate-pulse"></span>
          <span class="text-[#F1B11C] text-sm md:text-base font-bold tracking-widest uppercase">Platform Edukasi</span>
        </div>

        <!-- Main Title -->
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 leading-tight tracking-tight opacity-0 animate-fade-in-up" style="animation-delay: 0.3s; animation-fill-mode: forwards;">
          Edukasi <br class="hidden md:block"/>
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#F1B11C] via-[#EE5B16] to-[#D73303]">Lingkungan</span>
        </h1>

        <!-- Subtitle / Quote -->
        <div class="relative pl-6 border-l-[5px] border-[#D73303] opacity-0 animate-fade-in-up" style="animation-delay: 0.5s; animation-fill-mode: forwards;">
          <p class="text-xl md:text-2xl text-gray-300 font-medium italic leading-relaxed">
            "Langkah kecil yang dilakukan bersama dapat membantu menciptakan lingkungan yang lebih bersih dan nyaman."
          </p>
        </div>
      </div>
    </div>

    <!-- Abstract Glowing Ambient Light -->
    <div class="absolute top-[20%] right-[10%] w-72 h-72 bg-[#D73303] rounded-full mix-blend-screen filter blur-[150px] opacity-20 animate-pulse-slow pointer-events-none z-0"></div>
  </section>
</template>

<script>
export default {
  name: 'EdukasiHeroSection'
}
</script>

<style scoped>
@keyframes slow-pan {
  0% { transform: scale(1.05) translate(0, 0); }
  50% { transform: scale(1.1) translate(-1%, -1%); }
  100% { transform: scale(1.05) translate(0, 0); }
}

@keyframes fade-in-up {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@keyframes bounce-scroll {
  0% { transform: translateY(0); opacity: 1; }
  80% { transform: translateY(20px); opacity: 0; }
  100% { transform: translateY(0); opacity: 0; }
}

@keyframes pulse-slow {
  0%, 100% { opacity: 0.15; transform: scale(1); }
  50% { opacity: 0.3; transform: scale(1.1); }
}

.animate-slow-pan {
  animation: slow-pan 20s ease-in-out infinite alternate;
}

.animate-fade-in-up {
  animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1);
}

.animate-fade-in {
  animation: fade-in 1.5s ease-out;
}

.animate-bounce-scroll {
  animation: bounce-scroll 2s infinite cubic-bezier(0.15, 0.41, 0.69, 0.94);
}

.animate-pulse-slow {
  animation: pulse-slow 8s infinite ease-in-out;
}
</style>
