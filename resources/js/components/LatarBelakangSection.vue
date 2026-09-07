<template>
    <section class="lb" ref="sectionRef">
        <div class="lb__container">

            <!-- ── LEFT: Overlapping photos ──────────── -->
            <div class="lb__photos" :class="{ 'lb__in': visible }">

                <!-- Large photo (behind) -->
                <div class="lb__photo-main">
                    <img
                        src="/images/PENSAMPAH.jpeg"
                        alt="Penumpukan sampah"
                        class="lb__img"
                        :class="{ 'lb__img--show': pensampahLoaded }"
                        @load="pensampahLoaded = true"
                    />
                </div>

                <!-- Small photo (overlap, foreground) -->
                <div class="lb__photo-small">
                    <img
                        src="/images/BAKAR.jpg"
                        alt="Pembakaran sampah"
                        class="lb__img"
                        :class="{ 'lb__img--show': bakarLoaded }"
                        @load="bakarLoaded = true"
                    />
                </div>

                <!-- Decorative elements -->
                <div class="lb__deco-ring"></div>
                <div class="lb__deco-dot lb__deco-dot--1"></div>
                <div class="lb__deco-dot lb__deco-dot--2"></div>
            </div>

            <!-- ── RIGHT: Text ──────────────────────── -->
            <div class="lb__text" :class="{ 'lb__in': visible }">

                <h2 class="lb__heading">
                    Awal Mula
                    <span class="lb__heading-accent">EcoBurner</span>
                </h2>

                <div class="lb__rule"></div>

                <p class="lb__body">
                    <span class="lb__em lb__em--brand">EcoBurner</span>
                    lahir dari hasil observasi yang menunjukkan bahwa sebagian
                    masyarakat masih melakukan pembakaran sampah secara terbuka
                    karena keterbatasan sarana pengelolaan sampah. Melalui
                    program ini, kami berupaya menghadirkan solusi yang lebih
                    terarah melalui pengembangan
                    <span class="lb__em">Rocket Stove</span>
                    dan media edukasi digital.
                </p>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const sectionRef   = ref(null);
const visible      = ref(false);
const bakarLoaded  = ref(false);
const pensampahLoaded = ref(false);

let observer;
onMounted(() => {
    observer = new IntersectionObserver(
        ([e]) => { if (e.isIntersecting) visible.value = true; },
        { threshold: 0.15 }
    );
    if (sectionRef.value) observer.observe(sectionRef.value);
});
onUnmounted(() => observer?.disconnect());
</script>

<style scoped>
/* ── Layout ─────────────────────────────────────────── */
.lb {
    background: #fff;
    padding: 7rem 0;
    font-family: 'Inter', sans-serif;
    overflow: hidden;
}

.lb__container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6rem;
    align-items: center;
}

/* ── Shared entrance animation ──────────────────────── */
.lb__photos {
    opacity: 0;
    transform: translateX(-36px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}
.lb__text {
    opacity: 0;
    transform: translateX(36px);
    transition: opacity 0.9s ease 0.2s, transform 0.9s ease 0.2s;
}
.lb__in {
    opacity: 1 !important;
    transform: translateX(0) !important;
}

/* ── Photos ─────────────────────────────────────────── */
.lb__photos {
    position: relative;
    height: 380px;
}

/* Big photo — square, left, vertically centered */
.lb__photo-main {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 68%;
    aspect-ratio: 1 / 1;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
    background: #1a0503;
    z-index: 1;
}

/* Small photo — square, overlaps right edge of big photo, vertically centered */
.lb__photo-small {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 44%;
    aspect-ratio: 1 / 1;
    border-radius: 18px;
    overflow: hidden;
    box-shadow:
        0 0 0 5px #fff,
        0 14px 40px rgba(178,33,2,0.22);
    background: #1a0503;
    z-index: 2;
}

/* Image fade-in on load */
.lb__img {
    width: 100%; height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.8s ease, transform 7s ease;
    transform: scale(1.05);
}
.lb__img--show    { opacity: 1; transform: scale(1); }
.lb__photo-main:hover .lb__img,
.lb__photo-small:hover .lb__img { transform: scale(1.07); }

/* Decorative ring */
.lb__deco-ring {
    position: absolute;
    width: 90px; height: 90px;
    border-radius: 50%;
    border: 2px dashed rgba(238,91,22,0.25);
    bottom: -24px; right: 6px;
    z-index: 0;
    animation: ringRotate 22s linear infinite;
}
@keyframes ringRotate { to { transform: rotate(360deg); } }

/* Decorative dots */
.lb__deco-dot {
    position: absolute;
    border-radius: 50%;
}
.lb__deco-dot--1 {
    width: 13px; height: 13px;
    background: #EE5B16;
    top: -10px; left: 52%;
    animation: dotBounce 3s ease-in-out infinite;
}
.lb__deco-dot--2 {
    width: 8px; height: 8px;
    background: #F1B11C;
    right: -10px; top: 30%;
    animation: dotBounce 4s ease-in-out infinite 1s;
}
@keyframes dotBounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-10px)} }

/* ── Text ───────────────────────────────────────────── */
.lb__eyebrow {
    display: flex; align-items: center; gap: 10px;
    font-size: 0.72rem; font-weight: 700;
    letter-spacing: 0.12em; text-transform: uppercase;
    color: #EE5B16; margin-bottom: 1.1rem;
}
.lb__eyebrow-bar {
    display: block; width: 28px; height: 2px;
    background: #EE5B16; border-radius: 9px; flex-shrink: 0;
}

.lb__heading {
    font-size: clamp(2rem, 3.8vw, 3rem);
    font-weight: 800; line-height: 1.1; letter-spacing: -0.02em;
    color: #1a1a1a; margin-bottom: 1rem;
}
.lb__heading-accent {
    display: block;
    background: linear-gradient(90deg, #B22102, #EE5B16, #DB6E15);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}

.lb__rule {
    width: 48px; height: 3px; border-radius: 9px;
    background: linear-gradient(90deg, #EE5B16, #F1B11C);
    margin-bottom: 1.6rem;
}

.lb__body {
    font-size: 1rem; line-height: 1.85; color: #525252;
    text-align: justify;
}

.lb__em {
    color: #6C1712; font-weight: 600;
}
.lb__em--brand {
    color: #B22102; font-weight: 700;
}

/* ── Responsive ─────────────────────────────────────── */
@media (max-width: 1023px) {
    .lb__container {
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }
    .lb__photos {
        height: 340px;
        max-width: 500px;
        margin: 0 auto;
        /* Reset directional translate for stacked layout */
        transform: translateY(24px) !important;
    }
    .lb__photos.lb__in { transform: translateY(0) !important; }
    .lb__text {
        transform: translateY(24px) !important;
    }
    .lb__text.lb__in { transform: translateY(0) !important; }
}

@media (max-width: 560px) {
    .lb { padding: 5rem 0; }
    .lb__photos { height: 260px; }
    .lb__photo-small { width: 55%; height: 55%; }
}
</style>
