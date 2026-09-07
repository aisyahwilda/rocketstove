<template>
  <section class="py-24 bg-[#faf7f2] border-t border-[#f0e8e2] text-gray-900 relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
      <div class="absolute top-0 right-0 w-[50%] h-[50%] bg-[#EE5B16] rounded-full mix-blend-multiply filter blur-[150px] opacity-10"></div>
      <div class="absolute bottom-0 left-0 w-[40%] h-[40%] bg-[#F1B11C] rounded-full mix-blend-multiply filter blur-[120px] opacity-10"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <!-- Heading Section -->
      <div class="text-center mb-16 md:mb-24">
        <div class="inline-block mb-4 px-4 py-1.5 rounded-full border border-[#DB6E15] bg-[#DB6E15]/10 text-[#C94B07] text-sm font-semibold tracking-wider uppercase shadow-[0_0_10px_rgba(219,110,21,0.1)]">
          Proses Pembakaran
        </div>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-[#1a0800] tracking-tight">
          Alur <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#DB6E15] via-[#EE5B16] to-[#B22102]">Pembakaran</span>
        </h2>
        <p class="text-lg md:text-xl text-[#6b4a3a] max-w-2xl mx-auto leading-relaxed">
          Pahami proses pembakaran secara sederhana melalui visualisasi infografis berikut ini.
        </p>
      </div>

      <!-- Infographic Container -->
      <div class="relative w-full max-w-6xl mx-auto">
        <!-- Connecting Line (Desktop: Horizontal, Mobile: Vertical) -->
        <!-- Desktop Line -->
        <div class="hidden md:block absolute top-[4.5rem] left-[10%] right-[10%] h-1.5 bg-[#e5ddd5] rounded-full z-0 overflow-hidden shadow-inner">
          <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-r from-[#B22102] via-[#EE5B16] to-[#F1B11C] opacity-70 animate-flow"></div>
        </div>
        
        <!-- Mobile Line -->
        <div class="md:hidden absolute top-[5%] bottom-[5%] left-1/2 transform -translate-x-1/2 w-1.5 bg-[#e5ddd5] rounded-full z-0 overflow-hidden shadow-inner">
          <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-[#B22102] via-[#EE5B16] to-[#F1B11C] opacity-70 animate-flow-vertical"></div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-12 md:gap-4 relative z-10">
          
          <!-- Step 1 -->
          <div class="flex flex-col items-center group w-full md:w-1/5 relative">
            <div class="w-24 h-24 md:w-36 md:h-36 rounded-full bg-white border-[4px] border-[#f0e8e2] group-hover:border-[#DB6E15] flex items-center justify-center mb-6 shadow-md group-hover:shadow-[0_10px_30px_rgba(219,110,21,0.2)] transition-all duration-500 transform group-hover:-translate-y-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 md:w-16 md:h-16 text-[#DB6E15] group-hover:text-[#EE5B16] transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </div>
            <div class="text-center px-2">
              <h3 class="text-xl md:text-2xl font-bold text-[#1a0800] group-hover:text-[#DB6E15] transition-colors duration-300 mb-2">Sampah Kering</h3>
              <p class="text-sm md:text-base text-[#6b4a3a]">Masuknya bahan bakar</p>
            </div>
          </div>

          <!-- Arrow (Mobile only) -->
          <div class="md:hidden text-[#EE5B16] opacity-70 z-10 bg-white shadow-sm p-2 rounded-full border border-[#f0e8e2]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>

          <!-- Step 2 -->
          <div class="flex flex-col items-center group w-full md:w-1/5 relative">
            <div class="w-24 h-24 md:w-36 md:h-36 rounded-full bg-white border-[4px] border-[#f0e8e2] group-hover:border-[#EE5B16] flex items-center justify-center mb-6 shadow-md group-hover:shadow-[0_10px_30px_rgba(238,91,22,0.25)] transition-all duration-500 transform group-hover:-translate-y-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 md:w-16 md:h-16 text-[#EE5B16] group-hover:text-[#D73303] transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
              </svg>
            </div>
            <div class="text-center px-2">
              <h3 class="text-xl md:text-2xl font-bold text-[#1a0800] group-hover:text-[#EE5B16] transition-colors duration-300 mb-2">Ruang Pembakaran</h3>
              <p class="text-sm md:text-base text-[#6b4a3a]">Tempat bahan dibakar</p>
            </div>
          </div>

          <!-- Arrow (Mobile only) -->
          <div class="md:hidden text-[#EE5B16] opacity-70 z-10 bg-white shadow-sm p-2 rounded-full border border-[#f0e8e2]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>

          <!-- Step 3 -->
          <div class="flex flex-col items-center group w-full md:w-1/5 relative md:-mt-8">
            <div class="w-28 h-28 md:w-40 md:h-40 rounded-full bg-[#fff8f3] border-[4px] border-[#EE5B16] group-hover:border-[#D73303] flex items-center justify-center mb-6 shadow-[0_10px_25px_rgba(238,91,22,0.3)] group-hover:shadow-[0_15px_40px_rgba(215,51,3,0.4)] transition-all duration-500 transform group-hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 md:w-20 md:h-20 text-[#EE5B16] group-hover:text-[#D73303] transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2.25m0 0v.75m0-3V5.25a2.25 2.25 0 00-4.5 0v10.158a4.5 4.5 0 109 0V5.25a2.25 2.25 0 00-4.5 0z" />
              </svg>
            </div>
            <div class="text-center px-2">
              <h3 class="text-xl md:text-2xl font-bold text-[#1a0800] group-hover:text-[#D73303] transition-colors duration-300 mb-2">Proses Pembakaran</h3>
              <p class="text-sm md:text-base text-[#6b4a3a]">Efisiensi panas maksimal</p>
            </div>
          </div>

          <!-- Arrow (Mobile only) -->
          <div class="md:hidden text-[#EE5B16] opacity-70 z-10 bg-white shadow-sm p-2 rounded-full border border-[#f0e8e2]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>

          <!-- Step 4 -->
          <div class="flex flex-col items-center group w-full md:w-1/5 relative">
            <div class="w-24 h-24 md:w-36 md:h-36 rounded-full bg-white border-[4px] border-[#f0e8e2] group-hover:border-[#C94B07] flex items-center justify-center mb-6 shadow-md group-hover:shadow-[0_10px_30px_rgba(201,75,7,0.25)] transition-all duration-500 transform group-hover:-translate-y-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 md:w-16 md:h-16 text-[#C94B07] group-hover:text-[#A43017] transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
              </svg>
            </div>
            <div class="text-center px-2">
              <h3 class="text-xl md:text-2xl font-bold text-[#1a0800] group-hover:text-[#C94B07] transition-colors duration-300 mb-2">Asap Dialirkan</h3>
              <p class="text-sm md:text-base text-[#6b4a3a]">Menuju cerobong</p>
            </div>
          </div>

          <!-- Arrow (Mobile only) -->
          <div class="md:hidden text-[#EE5B16] opacity-70 z-10 bg-white shadow-sm p-2 rounded-full border border-[#f0e8e2]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>

          <!-- Step 5 -->
          <div class="flex flex-col items-center group w-full md:w-1/5 relative">
            <div class="w-24 h-24 md:w-36 md:h-36 rounded-full bg-white border-[4px] border-[#f0e8e2] group-hover:border-[#A43017] flex items-center justify-center mb-6 shadow-md group-hover:shadow-[0_10px_30px_rgba(164,48,23,0.2)] transition-all duration-500 transform group-hover:-translate-y-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 md:w-16 md:h-16 text-[#A43017] group-hover:text-[#802210] transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
              </svg>
            </div>
            <div class="text-center px-2">
              <h3 class="text-xl md:text-2xl font-bold text-[#1a0800] group-hover:text-[#A43017] transition-colors duration-300 mb-2">Keluar Cerobong</h3>
              <p class="text-sm md:text-base text-[#6b4a3a]">Pelepasan sisa gas</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'AlurPembakaranSection',
}
</script>

<style scoped>
@keyframes flow-horizontal {
  0% { transform: translateX(-100%); }
  100% { transform: translateX(100%); }
}
@keyframes flow-vertical {
  0% { transform: translateY(-100%); }
  100% { transform: translateY(100%); }
}
.animate-flow {
  animation: flow-horizontal 3s linear infinite;
}
.animate-flow-vertical {
  animation: flow-vertical 3s linear infinite;
}
</style>
