<template>
  <section class="py-24 bg-[#1b1b18] text-white relative overflow-hidden">
    <!-- Background glowing accents -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
      <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-[#D73303] rounded-full mix-blend-screen filter blur-[150px] opacity-10 animate-pulse"></div>
      <div class="absolute bottom-[10%] -right-[10%] w-[30%] h-[30%] bg-[#F1B11C] rounded-full mix-blend-screen filter blur-[120px] opacity-10"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
      <div class="text-center mb-20 relative">
        <div class="inline-block mb-4 px-4 py-1.5 rounded-full border border-[#D73303] bg-[#D73303]/10 text-[#F1B11C] text-sm font-semibold tracking-wider uppercase">
          Mekanisme
        </div>
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-white tracking-tight">
          Bagaimana <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#F1B11C] via-[#EE5B16] to-[#D73303]">Rocket Stove</span> Bekerja?
        </h2>
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
          Proses pembakaran inovatif yang memaksimalkan efisiensi energi dan meminimalisir emisi, langkah demi langkah.
        </p>
      </div>

      <div class="relative">
        <!-- Vertical Line (Slightly Thicker) -->
        <div class="absolute left-8 md:left-1/2 transform md:-translate-x-1/2 w-2 h-full bg-[#D73303] rounded-full shadow-[0_0_15px_rgba(215,51,3,0.8)] opacity-90 z-0"></div>

        <div class="space-y-12 md:space-y-16">
          
          <!-- Step 1 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between group">
            <!-- Content Left -->
            <div class="w-full md:w-5/12 pl-24 md:pl-0 md:pr-12 md:text-right order-2 md:order-1 mt-2 md:mt-0 z-10">
              <div class="p-6 md:p-7 bg-[#2A2A2A] rounded-2xl border border-transparent shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_35px_rgba(178,33,2,0.7)] relative overflow-hidden group-hover:border-[#EE5B16]">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <!-- Icon -->
                <div class="flex justify-start md:justify-end mb-3">
                  <div class="p-3 bg-[#EE5B16]/10 rounded-xl border border-[#EE5B16]/30 group-hover:bg-[#EE5B16]/20 transition-colors duration-300 shadow-[0_0_15px_rgba(238,91,22,0.15)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 md:w-11 md:h-11 text-[#EE5B16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-2xl md:text-[1.65rem] font-bold text-white mb-2 transition-colors duration-300 group-hover:text-[#F1B11C] tracking-wide">
                   Bahan Bakar
                </h3>
                <p class="text-gray-300 leading-relaxed text-base md:text-[1.05rem] group-hover:text-white transition-colors duration-300">
                  Bahan bakar dimasukkan ke ruang pembakaran.
                </p>
              </div>
            </div>

            <!-- Number/Icon Indicator -->
            <div class="absolute left-0 md:left-1/2 transform translate-x-0 md:-translate-x-1/2 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#1b1b18] border-[6px] border-[#D73303] text-[#EE5B16] shadow-[0_0_15px_rgba(215,51,3,0.6)] group-hover:bg-[#D73303] group-hover:text-white group-hover:shadow-[0_0_25px_rgba(215,51,3,0.9)] z-20 transition-all duration-500 order-1 md:order-2">
              <span class="font-extrabold text-2xl md:text-3xl">1</span>
            </div>

            <!-- Empty Space Right -->
            <div class="hidden md:block w-5/12 order-3"></div>
          </div>

          <!-- Step 2 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between group">
            <!-- Empty Space Left -->
            <div class="hidden md:block w-5/12 order-1"></div>
            
            <!-- Number/Icon Indicator -->
            <div class="absolute left-0 md:left-1/2 transform translate-x-0 md:-translate-x-1/2 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#1b1b18] border-[6px] border-[#D73303] text-[#EE5B16] shadow-[0_0_15px_rgba(215,51,3,0.6)] group-hover:bg-[#D73303] group-hover:text-white group-hover:shadow-[0_0_25px_rgba(215,51,3,0.9)] z-20 transition-all duration-500 order-1 md:order-2">
              <span class="font-extrabold text-2xl md:text-3xl">2</span>
            </div>

            <!-- Content Right -->
            <div class="w-full md:w-5/12 pl-24 md:pl-12 md:text-left order-2 md:order-3 mt-2 md:mt-0 z-10">
              <div class="p-6 md:p-7 bg-[#2A2A2A] rounded-2xl border border-transparent shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_35px_rgba(178,33,2,0.7)] relative overflow-hidden group-hover:border-[#EE5B16]">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <!-- Icon -->
                <div class="flex justify-start mb-3">
                  <div class="p-3 bg-[#EE5B16]/10 rounded-xl border border-[#EE5B16]/30 group-hover:bg-[#EE5B16]/20 transition-colors duration-300 shadow-[0_0_15px_rgba(238,91,22,0.15)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 md:w-11 md:h-11 text-[#EE5B16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-2xl md:text-[1.65rem] font-bold text-white mb-2 transition-colors duration-300 group-hover:text-[#F1B11C] tracking-wide">
                   Sirkulasi Udara
                </h3>
                <p class="text-gray-300 leading-relaxed text-base md:text-[1.05rem] group-hover:text-white transition-colors duration-300">
                  Udara masuk melalui saluran udara.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between group">
            <!-- Content Left -->
            <div class="w-full md:w-5/12 pl-24 md:pl-0 md:pr-12 md:text-right order-2 md:order-1 mt-2 md:mt-0 z-10">
              <div class="p-6 md:p-7 bg-[#2A2A2A] rounded-2xl border border-transparent shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_35px_rgba(178,33,2,0.7)] relative overflow-hidden group-hover:border-[#EE5B16]">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <!-- Icon -->
                <div class="flex justify-start md:justify-end mb-3">
                  <div class="p-3 bg-[#EE5B16]/10 rounded-xl border border-[#EE5B16]/30 group-hover:bg-[#EE5B16]/20 transition-colors duration-300 shadow-[0_0_15px_rgba(238,91,22,0.15)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 md:w-11 md:h-11 text-[#EE5B16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-2xl md:text-[1.65rem] font-bold text-white mb-2 transition-colors duration-300 group-hover:text-[#F1B11C] tracking-wide">
                   Proses Pengapian
                </h3>
                <p class="text-gray-300 leading-relaxed text-base md:text-[1.05rem] group-hover:text-white transition-colors duration-300">
                  Api menyala dan menghasilkan panas.
                </p>
              </div>
            </div>

            <!-- Number/Icon Indicator -->
            <div class="absolute left-0 md:left-1/2 transform translate-x-0 md:-translate-x-1/2 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#1b1b18] border-[6px] border-[#D73303] text-[#EE5B16] shadow-[0_0_15px_rgba(215,51,3,0.6)] group-hover:bg-[#D73303] group-hover:text-white group-hover:shadow-[0_0_25px_rgba(215,51,3,0.9)] z-20 transition-all duration-500 order-1 md:order-2">
              <span class="font-extrabold text-2xl md:text-3xl">3</span>
            </div>

            <!-- Empty Space Right -->
            <div class="hidden md:block w-5/12 order-3"></div>
          </div>

          <!-- Step 4 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between group">
            <!-- Empty Space Left -->
            <div class="hidden md:block w-5/12 order-1"></div>
            
            <!-- Number/Icon Indicator -->
            <div class="absolute left-0 md:left-1/2 transform translate-x-0 md:-translate-x-1/2 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#1b1b18] border-[6px] border-[#D73303] text-[#EE5B16] shadow-[0_0_15px_rgba(215,51,3,0.6)] group-hover:bg-[#D73303] group-hover:text-white group-hover:shadow-[0_0_25px_rgba(215,51,3,0.9)] z-20 transition-all duration-500 order-1 md:order-2">
              <span class="font-extrabold text-2xl md:text-3xl">4</span>
            </div>

            <!-- Content Right -->
            <div class="w-full md:w-5/12 pl-24 md:pl-12 md:text-left order-2 md:order-3 mt-2 md:mt-0 z-10">
              <div class="p-6 md:p-7 bg-[#2A2A2A] rounded-2xl border border-transparent shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_35px_rgba(178,33,2,0.7)] relative overflow-hidden group-hover:border-[#EE5B16]">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <!-- Icon -->
                <div class="flex justify-start mb-3">
                  <div class="p-3 bg-[#EE5B16]/10 rounded-xl border border-[#EE5B16]/30 group-hover:bg-[#EE5B16]/20 transition-colors duration-300 shadow-[0_0_15px_rgba(238,91,22,0.15)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 md:w-11 md:h-11 text-[#EE5B16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-2xl md:text-[1.65rem] font-bold text-white mb-2 transition-colors duration-300 group-hover:text-[#F1B11C] tracking-wide">
                   Aliran Panas & Asap
                </h3>
                <p class="text-gray-300 leading-relaxed text-base md:text-[1.05rem] group-hover:text-white transition-colors duration-300">
                  Panas dan asap mengalir menuju cerobong.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="relative flex flex-col md:flex-row items-start md:items-center justify-between group">
            <!-- Content Left -->
            <div class="w-full md:w-5/12 pl-24 md:pl-0 md:pr-12 md:text-right order-2 md:order-1 mt-2 md:mt-0 z-10">
              <div class="p-6 md:p-7 bg-[#2A2A2A] rounded-2xl border border-transparent shadow-[0_0_20px_rgba(178,33,2,0.4)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_35px_rgba(178,33,2,0.7)] relative overflow-hidden group-hover:border-[#EE5B16]">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-[#D73303] to-[#EE5B16] opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <!-- Icon -->
                <div class="flex justify-start md:justify-end mb-3">
                  <div class="p-3 bg-[#EE5B16]/10 rounded-xl border border-[#EE5B16]/30 group-hover:bg-[#EE5B16]/20 transition-colors duration-300 shadow-[0_0_15px_rgba(238,91,22,0.15)]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 md:w-11 md:h-11 text-[#EE5B16]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                </div>
                <h3 class="text-2xl md:text-[1.65rem] font-bold text-white mb-2 transition-colors duration-300 group-hover:text-[#F1B11C] tracking-wide">
                   Pembakaran Optimal
                </h3>
                <p class="text-gray-300 leading-relaxed text-base md:text-[1.05rem] group-hover:text-white transition-colors duration-300">
                  Pembakaran berlangsung lebih terarah dan optimal.
                </p>
              </div>
            </div>

            <!-- Number/Icon Indicator -->
            <div class="absolute left-0 md:left-1/2 transform translate-x-0 md:-translate-x-1/2 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#1b1b18] border-[6px] border-[#D73303] text-[#EE5B16] shadow-[0_0_15px_rgba(215,51,3,0.6)] group-hover:bg-[#D73303] group-hover:text-white group-hover:shadow-[0_0_25px_rgba(215,51,3,0.9)] z-20 transition-all duration-500 order-1 md:order-2">
              <span class="font-extrabold text-2xl md:text-3xl">5</span>
            </div>

            <!-- Empty Space Right -->
            <div class="hidden md:block w-5/12 order-3"></div>
          </div>

        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'CaraKerjaRocketStoveSection',
}
</script>

<style scoped>
/* Optional specific overrides or custom animations */
</style>
