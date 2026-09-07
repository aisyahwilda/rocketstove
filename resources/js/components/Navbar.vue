<template>
    <nav
        :class="[
            'fixed top-0 left-0 w-full z-50 px-6 lg:px-16 py-3 flex justify-between items-center text-white transition-all duration-300',
            scrolled ? 'bg-[#1b1b18]/90 backdrop-blur-md border-b border-white/10 shadow-lg py-3' : 'bg-transparent border-b border-transparent py-5'
        ]"
    >
        <div class="flex items-center gap-2 cursor-pointer">
            <div class="bg-black/40 rounded-lg p-1.5">
                <img
                    src="/images/logo.png"
                    alt="EcoBurner Logo"
                    class="w-14 h-14"
                />
            </div>
            <span class="font-bold text-xl tracking-wide">EcoBurner</span>
        </div>

        <div
            class="hidden lg:flex space-x-8 text-[16px] font-semibold opacity-90"
        >
            <a href="/" class="hover:text-p-9 transition">Beranda</a>
            <a href="/tentang-kami" class="hover:text-p-9 transition">Tentang Kami</a>
            <a href="/rocket-stove" class="hover:text-p-9 transition">Rocket Stove</a>
            <a href="/edukasi" class="hover:text-p-9 transition">Edukasi</a>
            <a href="/dokumentasi" class="hover:text-p-9 transition">Dokumentasi</a>
        </div>

        <div class="flex items-center space-x-6">
            <svg
                class="w-5 h-5 cursor-pointer hover:text-p-9"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                ></path>
            </svg>
            <svg
                class="w-5 h-5 cursor-pointer hover:text-p-9"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                ></path>
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                ></path>
            </svg>
            <svg
                class="w-6 h-6 cursor-pointer lg:hidden"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                ></path>
            </svg>
        </div>
    </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const scrolled = ref(false);

const handleScroll = () => {
    scrolled.value = window.scrollY > 10;
};

onMounted(() => window.addEventListener('scroll', handleScroll));
onUnmounted(() => window.removeEventListener('scroll', handleScroll));
</script>
