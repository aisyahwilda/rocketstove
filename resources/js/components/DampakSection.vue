<template>
    <section
        class="relative bg-white py-16 lg:py-24 overflow-hidden dampak-section"
    >
        <div
            class="absolute top-12 left-0 w-80 h-80 bg-[#F1B11C]/6 rounded-full blur-3xl -ml-40"
        ></div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-[#EE5B16]/6 rounded-full blur-3xl -mr-48 -mb-24"
        ></div>

        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="dampak-heading">
                <h2 class="dampak-title">Dampak yang Diharapkan</h2>
                <p class="dampak-sub">
                    Melalui penggunaan Rocket Stove, diharapkan tercipta
                    lingkungan yang lebih bersih dan kesadaran masyarakat yang
                    semakin meningkat.
                </p>
            </div>

            <div class="dampak-loop">
                <div class="dampak-loop__track">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 dampak-loop__set"
                    >
                        <div
                            v-for="item in items"
                            :key="item.title"
                            class="dampak-card group rounded-3xl bg-gradient-to-br from-white to-gray-50 border border-gray-100 p-7 shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div
                                class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 text-white shadow-lg"
                                :class="item.bg"
                            >
                                <component :is="item.icon" class="w-7 h-7" />
                            </div>
                            <h3 class="text-xl font-bold text-[#6C1712] mb-3">
                                {{ item.title }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {{ item.desc }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 dampak-loop__set dampak-loop__set--clone"
                        aria-hidden="true"
                    >
                        <div
                            v-for="item in items"
                            :key="`${item.title}-clone`"
                            class="dampak-card group rounded-3xl bg-gradient-to-br from-white to-gray-50 border border-gray-100 p-7 shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300"
                        >
                            <div
                                class="w-14 h-14 rounded-2xl flex items-center justify-center mb-5 text-white shadow-lg"
                                :class="item.bg"
                            >
                                <component :is="item.icon" class="w-7 h-7" />
                            </div>
                            <h3 class="text-xl font-bold text-[#6C1712] mb-3">
                                {{ item.title }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                {{ item.desc }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Leaf, Wind, Recycle, Users } from "lucide-vue-next";

const items = [
    {
        title: "Aliran Asap Lebih Terarah",
        desc: "Cerobong membantu mengalirkan asap ke atas sehingga tidak langsung menyebar ke area sekitar.",
        icon: Leaf,
        bg: "bg-gradient-to-br from-[#EE5B16] to-[#D73303]",
    },
    {
        title: "Pengelolaan Sampah Lebih Baik",
        desc: "Mendorong masyarakat untuk mulai menerapkan cara pengelolaan sampah yang lebih tepat.",
        icon: Wind,
        bg: "bg-gradient-to-br from-[#DB6E15] to-[#EE5B16]",
    },
    {
        title: "Lingkungan Lebih Bersih",
        desc: "Membantu menciptakan lingkungan yang lebih nyaman dan bersih bagi masyarakat sekitar.",
        icon: Recycle,
        bg: "bg-gradient-to-br from-[#F1B11C] to-[#DB6E15]",
    },
    {
        title: "Kesadaran Masyarakat Meningkat",
        desc: "Membantu masyarakat lebih peduli terhadap kebersihan dan kesehatan lingkungan.",
        icon: Users,
        bg: "bg-gradient-to-br from-[#B22102] to-[#921802]",
    },
];
</script>

<!-- Component styles moved to `resources/css/components-sections.css` -->
