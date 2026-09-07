<template>
    <div
        class="relative bg-white py-16 lg:py-24 overflow-hidden permasalahan-section"
    >
        <!-- Decorative background -->
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-[#F1B11C]/5 rounded-full blur-3xl -mr-32 -mt-32"
        ></div>
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-[#EE5B16]/5 rounded-full blur-3xl -ml-48 -mb-48"
        ></div>

        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <!-- Header -->
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-[#6C1712] mb-4">
                    Permasalahan Lingkungan
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Pembakaran sampah secara terbuka masih menimbulkan dampak
                    bagi lingkungan dan kesehatan masyarakat.
                </p>
            </div>

            <!-- Problems Grid -->
            <div
                class="permasalahan-grid grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 transition-all duration-700"
                :class="{
                    'opacity-100 translate-y-0': revealed,
                    'opacity-0 translate-y-6': !revealed,
                }"
            >
                <!-- Problem 1 -->
                <div
                    role="button"
                    tabindex="0"
                    @click="toggle(0)"
                    @keydown.enter.prevent="toggle(0)"
                    @keydown.space.prevent="toggle(0)"
                    :aria-expanded="expanded[0]"
                    :class="[
                        'group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border-2 border-[#EE5B16]/20 transition-all duration-300 shadow-lg cursor-pointer transform transition-transform hover:-translate-y-1',
                        expanded[0]
                            ? 'ring-2 ring-[#EE5B16]/40 hover:border-[#EE5B16]'
                            : 'hover:border-[#EE5B16] hover:shadow-xl',
                    ]"
                >
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="icon-box flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-lg border border-[#EE5B16]/20 group-hover:bg-gradient-to-br group-hover:from-[#EE5B16] group-hover:to-[#D73303] group-hover:shadow-2xl transition-all duration-300"
                            >
                                <Flame
                                    :class="[
                                        'icon-svg w-8 h-8 transition-colors duration-300',
                                        expanded[0] || true
                                            ? 'text-[#EE5B16]'
                                            : 'text-[#EE5B16]',
                                        'group-hover:text-white',
                                    ]"
                                />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-[#6C1712] mb-2">
                                Pembakaran Sampah Terbuka
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Membakar sampah di lahan terbuka masih sering
                                dilakukan sebagai cara membuang sampah
                                sehari-hari.
                            </p>
                            <transition name="fade">
                                <div
                                    v-show="expanded[0]"
                                    class="mt-4 text-sm text-gray-600"
                                >
                                    Tips singkat: Pisahkan sampah organik dan
                                    anorganik. Hindari membakar plastik dan
                                    bahan beracun karena menghasilkan asap
                                    berbahaya.
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>

                <!-- Problem 2 -->
                <div
                    role="button"
                    tabindex="0"
                    @click="toggle(1)"
                    @keydown.enter.prevent="toggle(1)"
                    @keydown.space.prevent="toggle(1)"
                    :aria-expanded="expanded[1]"
                    :class="[
                        'group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border-2 border-[#D73303]/20 transition-all duration-300 shadow-lg cursor-pointer transform transition-transform hover:-translate-y-1',
                        expanded[1]
                            ? 'ring-2 ring-[#D73303]/40 hover:border-[#D73303]'
                            : 'hover:border-[#D73303] hover:shadow-xl',
                    ]"
                >
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="icon-box flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-lg border border-[#D73303]/20 group-hover:bg-gradient-to-br group-hover:from-[#DB6E15] group-hover:to-[#D73303] group-hover:shadow-2xl transition-all duration-300"
                            >
                                <Cloud
                                    class="icon-svg w-8 h-8 text-[#DB6E15] transition-colors duration-300 group-hover:text-white"
                                />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-[#6C1712] mb-2">
                                Asap dan Pencemaran Udara
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Menghasilkan asap tebal yang mencemari udara dan
                                membahayakan kesehatan masyarakat sekitar
                            </p>
                            <transition name="fade">
                                <div
                                    v-show="expanded[1]"
                                    class="mt-4 text-sm text-gray-600"
                                >
                                    Statistik ringkas: Paparan asap meningkatkan
                                    risiko penyakit pernapasan. Gunakan tempat
                                    pembuangan sampah terkelola dan ikuti
                                    program lokal untuk pengelolaan sampah.
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>

                <!-- Problem 3 -->
                <div
                    role="button"
                    tabindex="0"
                    @click="toggle(2)"
                    @keydown.enter.prevent="toggle(2)"
                    @keydown.space.prevent="toggle(2)"
                    :aria-expanded="expanded[2]"
                    :class="[
                        'group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border-2 border-[#C94B07]/20 transition-all duration-300 shadow-lg cursor-pointer transform transition-transform hover:-translate-y-1',
                        expanded[2]
                            ? 'ring-2 ring-[#C94B07]/40 hover:border-[#C94B07]'
                            : 'hover:border-[#C94B07] hover:shadow-xl',
                    ]"
                >
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="icon-box flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-lg border border-[#C94B07]/20 group-hover:bg-gradient-to-br group-hover:from-[#F1B11C] group-hover:to-[#EE5B16] group-hover:shadow-2xl transition-all duration-300"
                            >
                                <Lightbulb
                                    class="icon-svg w-8 h-8 text-[#F1B11C] transition-colors duration-300 group-hover:text-white"
                                />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-[#6C1712] mb-2">
                                Kurangnya Edukasi
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Masyarakat kurang mendapat edukasi tentang
                                pengelolaan sampah yang ramah lingkungan dan
                                sehat
                            </p>
                            <transition name="fade">
                                <div
                                    v-show="expanded[2]"
                                    class="mt-4 text-sm text-gray-600"
                                >
                                    Solusi singkat: Ikuti pelatihan pengelolaan
                                    sampah lokal, mulai dari pemilahan sampai
                                    komposting sederhana untuk sampah organik.
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>

                <!-- Problem 4 -->
                <div
                    role="button"
                    tabindex="0"
                    @click="toggle(3)"
                    @keydown.enter.prevent="toggle(3)"
                    @keydown.space.prevent="toggle(3)"
                    :aria-expanded="expanded[3]"
                    :class="[
                        'group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border-2 border-[#DB6E15]/20 transition-all duration-300 shadow-lg cursor-pointer transform transition-transform hover:-translate-y-1',
                        expanded[3]
                            ? 'ring-2 ring-[#DB6E15]/40 hover:border-[#DB6E15]'
                            : 'hover:border-[#DB6E15] hover:shadow-xl',
                    ]"
                >
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div
                                class="icon-box flex items-center justify-center h-16 w-16 rounded-xl bg-white shadow-lg border border-[#DB6E15]/20 group-hover:bg-gradient-to-br group-hover:from-[#B22102] group-hover:to-[#DB6E15] group-hover:shadow-2xl transition-all duration-300"
                            >
                                <HeartPulse
                                    class="icon-svg w-8 h-8 text-[#B22102] transition-colors duration-300 group-hover:text-white"
                                />
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-[#6C1712] mb-2">
                                Dampak bagi Kesehatan
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Paparan asap dari pembakaran sampah dapat
                                menyebabkan gangguan pernapasan dan masalah
                                kesehatan lainnya, terutama bagi anak-anak dan
                                lansia.
                            </p>
                            <transition name="fade">
                                <div
                                    v-show="expanded[3]"
                                    class="mt-4 text-sm text-gray-600"
                                >
                                    Rekomendasi: Jika terpapar asap, cari udara
                                    bersih, tutup jendela, dan segera periksakan
                                    gejala pernapasan yang berlanjut ke
                                    fasilitas kesehatan.
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Flame, Cloud, Lightbulb, HeartPulse } from "lucide-vue-next";
import { ref, onMounted } from "vue";

// expanded state for each card (4 cards)
const expanded = ref([false, false, false, false]);

function toggle(i) {
    expanded.value[i] = !expanded.value[i];
}

// reveal animation on scroll for cards container
const revealed = ref(false);
onMounted(() => {
    const el = document.querySelector(".permasalahan-grid");
    if (!el) return;
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    revealed.value = true;
                    io.disconnect();
                }
            });
        },
        { threshold: 0.12 },
    );
    io.observe(el);
});
</script>

<!-- Component styles moved to `resources/css/components-sections.css` -->
