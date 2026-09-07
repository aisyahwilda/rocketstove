<template>
    <div class="relative bg-white py-16 lg:py-24 overflow-hidden">
        <!-- Decorative background -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-[#EE5B16]/5 rounded-full blur-3xl -ml-48 -mt-48"
        ></div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-[#F1B11C]/5 rounded-full blur-3xl -mr-40 -mb-40"
        ></div>

        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <!-- Header -->
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#6C1712] mb-4">
                    Highlight Kegiatan Kami
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Perjalanan transformasi mulai dari sosialisasi hingga
                    implementasi lapangan untuk masyarakat
                </p>
            </div>

            <!-- Timeline / Cards -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-4"
            >
                <!-- Stage 1: Sosialisasi -->
                <div class="group relative">
                    <!-- Connector Line -->
                    <div
                        class="hidden lg:block absolute top-[80px] -right-8 w-16 h-1 bg-gradient-to-r from-[#EE5B16] to-transparent"
                    ></div>

                    <div
                        class="h-full bg-white rounded-2xl p-8 border-2 border-[#EE5B16]/30 hover:border-[#EE5B16] transition-all duration-300 shadow-lg hover:shadow-2xl overflow-hidden relative"
                    >
                        <!-- Background accent -->
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#EE5B16]/10 rounded-bl-3xl -mr-1 -mt-1"
                        ></div>

                        <!-- Step Number -->
                        <div class="relative z-10 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#EE5B16] to-[#D73303] rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg"
                            >
                                1
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-[#6C1712] mb-3">
                                Sosialisasi
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Perkenalan teknologi Rocket Stove kepada
                                masyarakat melalui forum, penyuluhan, dan
                                diskusi interaktif
                            </p>

                            <!-- Icon -->
                            <div class="flex justify-center mt-6">
                                <svg
                                    class="w-12 h-12 text-[#EE5B16]/60"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 2: Pembuatan Alat -->
                <div class="group relative">
                    <!-- Connector Line -->
                    <div
                        class="hidden lg:block absolute top-[80px] -right-8 w-16 h-1 bg-gradient-to-r from-[#D73303] to-transparent"
                    ></div>

                    <div
                        class="h-full bg-white rounded-2xl p-8 border-2 border-[#D73303]/30 hover:border-[#D73303] transition-all duration-300 shadow-lg hover:shadow-2xl overflow-hidden relative"
                    >
                        <!-- Background accent -->
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#D73303]/10 rounded-bl-3xl -mr-1 -mt-1"
                        ></div>

                        <!-- Step Number -->
                        <div class="relative z-10 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#D73303] to-[#B22102] rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg"
                            >
                                2
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-[#6C1712] mb-3">
                                Pembuatan Alat
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Melibatkan masyarakat dalam proses pembuatan
                                Rocket Stove, melatih keterampilan, dan
                                membangun kepemilikan bersama
                            </p>

                            <!-- Icon -->
                            <div class="flex justify-center mt-6">
                                <svg
                                    class="w-12 h-12 text-[#D73303]/60"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 3: Implementasi -->
                <div class="group relative">
                    <!-- Connector Line -->
                    <div
                        class="hidden lg:block absolute top-[80px] -right-8 w-16 h-1 bg-gradient-to-r from-[#C94B07] to-transparent"
                    ></div>

                    <div
                        class="h-full bg-white rounded-2xl p-8 border-2 border-[#C94B07]/30 hover:border-[#C94B07] transition-all duration-300 shadow-lg hover:shadow-2xl overflow-hidden relative"
                    >
                        <!-- Background accent -->
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#C94B07]/10 rounded-bl-3xl -mr-1 -mt-1"
                        ></div>

                        <!-- Step Number -->
                        <div class="relative z-10 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#C94B07] to-[#921802] rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg"
                            >
                                3
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-[#6C1712] mb-3">
                                Implementasi
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Penempatan alat di lapangan dan monitoring
                                penggunaan untuk memastikan efektivitas dan
                                keberlanjutan program
                            </p>

                            <!-- Icon -->
                            <div class="flex justify-center mt-6">
                                <svg
                                    class="w-12 h-12 text-[#C94B07]/60"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stage 4: Edukasi Warga -->
                <div class="group relative">
                    <div
                        class="h-full bg-white rounded-2xl p-8 border-2 border-[#DB6E15]/30 hover:border-[#DB6E15] transition-all duration-300 shadow-lg hover:shadow-2xl overflow-hidden relative"
                    >
                        <!-- Background accent -->
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#DB6E15]/10 rounded-bl-3xl -mr-1 -mt-1"
                        ></div>

                        <!-- Step Number -->
                        <div class="relative z-10 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-[#DB6E15] to-[#B22102] rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg"
                            >
                                4
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-[#6C1712] mb-3">
                                Edukasi Warga
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Program berkelanjutan untuk peningkatan
                                kesadaran lingkungan dan pengelolaan sampah yang
                                lebih bertanggung jawab
                            </p>

                            <!-- Icon -->
                            <div class="flex justify-center mt-6">
                                <svg
                                    class="w-12 h-12 text-[#DB6E15]/60"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M12 6.253v13m0-13C6.5 6.75 3.25 10.5 3.25 15M12 6.253c5.5-.5 8.75 3.25 8.75 8.747"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div
                class="mt-16 bg-gradient-to-r from-[#6C1712] via-[#921802] to-[#B22102] rounded-3xl p-12 lg:p-16 text-center text-white shadow-2xl"
            >
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    Bergabunglah dengan Gerakan Perubahan
                </h3>
                <p class="text-lg opacity-90 mb-8 max-w-2xl mx-auto">
                    Jadilah bagian dari solusi untuk lingkungan yang lebih
                    bersih dan masyarakat yang lebih sehat
                </p>
                <button
                    class="inline-flex items-center gap-3 bg-[#F1B11C] hover:bg-[#FFD700] text-[#6C1712] font-bold px-8 py-4 rounded-lg transition-all transform hover:scale-105 shadow-lg"
                >
                    Mulai Perubahan Sekarang
                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"
                        ></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
