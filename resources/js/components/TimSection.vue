<template>
    <section class="ts" ref="sectionRef">

        <!-- ── Grain + atmosphere ── -->
        <div class="ts__grain"></div>
        <div class="ts__glow ts__glow--left"></div>
        <div class="ts__glow ts__glow--right"></div>

        <div class="ts__container">

            <!-- ══════════ EYEBROW + HEADING ══════════ -->
            <div class="ts__header" :class="{ 'ts__reveal': visible }">

                <div class="ts__eyebrow">
                    <span class="ts__eyebrow-dot"></span>
                    Kelompok 57 &nbsp;·&nbsp; Program Inovasi Sosial ITK
                </div>

                <h2 class="ts__heading">
                    Tim di Balik
                    <br />
                    <span class="ts__heading-accent">EcoBurner</span>
                </h2>



            </div>

            <!-- ══════════ PHOTO ══════════ -->
            <div
                class="ts__photo-wrap"
                :class="{ 'ts__reveal': visible }"
                style="transition-delay: 0.15s"
            >
                <div class="ts__photo">
                    <img
                        src="/images/DSC01415.JPG"
                        alt="Tim EcoBurner – Kelompok 57 ITK"
                        class="ts__img"
                        :class="{ 'ts__img--show': imgLoaded }"
                        @load="imgLoaded = true"
                    />
                    <div class="ts__photo-vignette"></div>
                </div>

                <!-- Subtle corner label -->
                <div class="ts__photo-label">
                    <span class="ts__photo-label-dot"></span>
                    Tim EcoBurner — 2024/2025
                </div>
            </div>

            <!-- ══════════ PARAGRAPH ══════════ -->
            <div
                class="ts__prose"
                :class="{ 'ts__reveal': visible }"
                style="transition-delay: 0.28s"
            >
                <p class="ts__para">
                    EcoBurner merupakan program yang dikembangkan oleh
                    <strong>Kelompok 57 Program Inovasi Sosial Institut Teknologi Kalimantan (ITK).</strong>
                    Program ini dikerjakan bersama oleh mahasiswa dari berbagai program studi
                    yang saling melengkapi, mulai dari proses perancangan Rocket Stove, kegiatan
                    sosialisasi kepada masyarakat, hingga pengembangan website sebagai media edukasi.
                </p>
            </div>

            <!-- ══════════ BIDANG KEILMUAN ══════════ -->
            <div
                class="ts__prodi-block"
                :class="{ 'ts__reveal': visible }"
                style="transition-delay: 0.38s"
            >
                <p class="ts__prodi-heading">Bidang Keilmuan dalam Tim</p>

                <div class="ts__prodi-grid">
                    <div
                        v-for="(p, i) in prodis"
                        :key="i"
                        class="ts__prodi-card"
                        :style="{ transitionDelay: (0.45 + i * 0.09) + 's' }"
                        :class="{ 'ts__prodi-card--reveal': visible, 'ts__prodi-card--hovered': hovered === i }"
                        @mouseenter="hovered = i"
                        @mouseleave="hovered = null"
                    >
                        <!-- Icon circle -->
                        <div class="ts__prodi-icon-wrap">
                            <span class="ts__prodi-icon" v-html="p.icon"></span>
                            <div class="ts__prodi-icon-ring"></div>
                        </div>
                        <!-- Label -->
                        <span class="ts__prodi-name">{{ p.name }}</span>
                    </div>
                </div>
            </div>

            <!-- ══════════ CLOSING QUOTE ══════════ -->
            <div
                class="ts__closing"
                :class="{ 'ts__reveal': visible }"
                style="transition-delay: 0.9s"
            >
                <div class="ts__closing-inner">
                    <span class="ts__closing-qmark">"</span>
                    <p class="ts__closing-text">
                        Melalui kerja sama ini, kami berharap EcoBurner dapat menjadi
                        langkah kecil yang memberikan manfaat bagi lingkungan dan
                        masyarakat sekitar.
                    </p>
                    <span class="ts__closing-qmark ts__closing-qmark--close">"</span>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const sectionRef = ref(null);
const visible    = ref(false);
const imgLoaded  = ref(false);
const hovered    = ref(null);

const prodis = [
    {
        name: 'Teknik Kimia',
        icon: `<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 3h6v11l3 7H6l3-7V3z"/>
                    <path d="M6.5 15h11"/>
                    <path d="M9 3a3 3 0 0 0 6 0"/>
               </svg>`,
    },
    {
        name: 'Teknik Mesin',
        icon: `<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
               </svg>`,
    },
    {
        name: 'Teknik Elektro',
        icon: `<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
               </svg>`,
    },
    {
        name: 'Informatika',
        icon: `<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2"/>
                    <path d="M8 21h8M12 17v4"/>
                    <path d="M9 8h1M12 8h3"/>
                    <path d="M9 12h6"/>
               </svg>`,
    },
];

let observer;
onMounted(() => {
    observer = new IntersectionObserver(
        ([e]) => { if (e.isIntersecting) visible.value = true; },
        { threshold: 0.1 }
    );
    if (sectionRef.value) observer.observe(sectionRef.value);
});
onUnmounted(() => observer?.disconnect());
</script>

<style scoped>
/* ══════════════════════════════════════════════
   BASE
══════════════════════════════════════════════ */
.ts {
    font-family: 'Inter', sans-serif;
    background: #0c0100;
    padding: 7rem 0 8rem;
    position: relative;
    overflow: hidden;
}

/* grain */
.ts__grain {
    position: absolute; inset: 0; pointer-events: none; z-index: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    opacity: 0.5;
}

/* ambient glows */
.ts__glow {
    position: absolute; border-radius: 50%;
    filter: blur(100px); pointer-events: none; z-index: 0;
}
.ts__glow--left {
    width: 480px; height: 480px;
    background: radial-gradient(circle, rgba(178,33,2,0.14), transparent 70%);
    top: -100px; left: -180px;
    animation: glowDrift 20s ease-in-out infinite alternate;
}
.ts__glow--right {
    width: 360px; height: 360px;
    background: radial-gradient(circle, rgba(241,177,28,0.07), transparent 70%);
    bottom: -80px; right: -120px;
    animation: glowDrift 26s ease-in-out infinite alternate-reverse;
}
@keyframes glowDrift {
    from { transform: translate(0, 0); }
    to   { transform: translate(24px, 18px); }
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.ts__container {
    max-width: 820px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative; z-index: 1;
    display: flex; flex-direction: column;
    align-items: center;
    gap: 0;
}

/* ══════════════════════════════════════════════
   SHARED REVEAL ANIMATION
══════════════════════════════════════════════ */
.ts__header,
.ts__photo-wrap,
.ts__prose,
.ts__prodi-block,
.ts__closing {
    width: 100%;
    opacity: 0; transform: translateY(32px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.ts__reveal {
    opacity: 1 !important; transform: translateY(0) !important;
}

/* ══════════════════════════════════════════════
   HEADER
══════════════════════════════════════════════ */
.ts__header {
    text-align: center;
    margin-bottom: 3rem;
}

.ts__eyebrow {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(178,33,2,0.12);
    border: 1px solid rgba(238,91,22,0.28);
    backdrop-filter: blur(10px);
    border-radius: 999px; padding: 6px 20px;
    font-size: 0.68rem; font-weight: 700;
    letter-spacing: 0.12em; text-transform: uppercase;
    color: #EE5B16; margin-bottom: 1.5rem;
}
.ts__eyebrow-dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: #EE5B16;
    animation: blink 2s ease-in-out infinite;
    flex-shrink: 0;
}
@keyframes blink {
    0%,100% { opacity: 1; transform: scale(1); }
    50%      { opacity: 0.4; transform: scale(1.5); }
}

.ts__heading {
    font-size: clamp(2.8rem, 7.5vw, 5.8rem);
    font-weight: 800; line-height: 1.02;
    letter-spacing: -0.03em; color: #fff;
    margin: 0 0 1.4rem;
}
.ts__heading-accent {
    background: linear-gradient(90deg, #F1B11C 0%, #EE5B16 50%, #B22102 100%);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}



/* ══════════════════════════════════════════════
   PHOTO
══════════════════════════════════════════════ */
.ts__photo-wrap {
    margin-bottom: 2.6rem;
    position: relative;
}

.ts__photo {
    width: 100%;
    aspect-ratio: 16 / 9;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    background: #1a0503;
    box-shadow:
        0 0 0 1px rgba(238,91,22,0.1),
        0 30px 80px rgba(0,0,0,0.5),
        0 0 60px rgba(178,33,2,0.1);
    transition: box-shadow 0.4s ease;
}
.ts__photo:hover {
    box-shadow:
        0 0 0 1px rgba(238,91,22,0.2),
        0 40px 100px rgba(0,0,0,0.55),
        0 0 80px rgba(178,33,2,0.18);
}

.ts__img {
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center top;
    opacity: 0;
    transition: opacity 1.0s ease, transform 14s ease;
    transform: scale(1.05);
}
.ts__img--show { opacity: 1; transform: scale(1); }
.ts__photo:hover .ts__img { transform: scale(1.03); }

.ts__photo-vignette {
    position: absolute; inset: 0;
    background:
        linear-gradient(to bottom,
            rgba(12,1,0,0.08) 0%,
            transparent 40%,
            rgba(12,1,0,0.45) 100%
        );
    border-radius: inherit;
    pointer-events: none;
}

/* caption label bottom-right */
.ts__photo-label {
    position: absolute;
    bottom: 14px; right: 16px;
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(12,1,0,0.65);
    backdrop-filter: blur(14px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 999px;
    padding: 5px 14px;
    font-size: 0.66rem; font-weight: 600;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: rgba(255,255,255,0.55);
}
.ts__photo-label-dot {
    width: 6px; height: 6px; border-radius: 50%;
    background: #EE5B16; flex-shrink: 0;
    animation: blink 2.5s ease-in-out infinite;
}

/* ══════════════════════════════════════════════
   PARAGRAPH
══════════════════════════════════════════════ */
.ts__prose {
    margin-bottom: 3rem;
    text-align: center;
}
.ts__para {
    font-size: clamp(0.95rem, 1.85vw, 1.1rem);
    line-height: 1.9; color: rgba(255,255,255,0.62);
    margin: 0;
}
.ts__para strong {
    color: #F1B11C; font-weight: 700;
}

/* ══════════════════════════════════════════════
   PRODI BLOCK
══════════════════════════════════════════════ */
.ts__prodi-block {
    margin-bottom: 3.2rem;
    text-align: center;
}
.ts__prodi-heading {
    font-size: 0.68rem; font-weight: 700;
    letter-spacing: 0.14em; text-transform: uppercase;
    color: rgba(255,255,255,0.35);
    margin: 0 0 1.6rem;
}

.ts__prodi-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
}

/* individual prodi card */
.ts__prodi-card {
    display: flex; flex-direction: column;
    align-items: center; gap: 0.85rem;
    padding: 1.6rem 1rem 1.4rem;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    cursor: default;
    opacity: 0; transform: translateY(20px);
    transition:
        opacity 0.6s ease,
        transform 0.6s ease,
        background 0.35s ease,
        border-color 0.35s ease,
        box-shadow 0.35s ease;
}
.ts__prodi-card--reveal {
    opacity: 1 !important; transform: translateY(0) !important;
}
.ts__prodi-card--hovered {
    background: rgba(238,91,22,0.08);
    border-color: rgba(238,91,22,0.38);
    box-shadow: 0 12px 40px rgba(178,33,2,0.18), 0 0 0 1px rgba(238,91,22,0.1);
    transform: translateY(-5px) !important;
}

/* icon wrap */
.ts__prodi-icon-wrap {
    position: relative;
    width: 56px; height: 56px;
    display: flex; align-items: center; justify-content: center;
}
.ts__prodi-icon {
    display: flex; align-items: center; justify-content: center;
    width: 56px; height: 56px;
    border-radius: 16px;
    background: rgba(238,91,22,0.1);
    border: 1px solid rgba(238,91,22,0.2);
    color: #EE5B16;
    transition: background 0.35s ease, border-color 0.35s ease, color 0.35s ease, transform 0.35s ease;
    position: relative; z-index: 1;
}
.ts__prodi-card--hovered .ts__prodi-icon {
    background: rgba(238,91,22,0.18);
    border-color: rgba(238,91,22,0.5);
    color: #F1B11C;
    transform: scale(1.1) rotate(-5deg);
}

/* spinning ring on hover */
.ts__prodi-icon-ring {
    position: absolute; inset: -4px;
    border-radius: 20px;
    border: 1.5px dashed rgba(238,91,22,0);
    transition: border-color 0.35s ease;
}
.ts__prodi-card--hovered .ts__prodi-icon-ring {
    border-color: rgba(238,91,22,0.35);
    animation: ringRot 6s linear infinite;
}
@keyframes ringRot { to { transform: rotate(360deg); } }

/* name */
.ts__prodi-name {
    font-size: 0.82rem; font-weight: 700;
    color: rgba(255,255,255,0.7); text-align: center;
    line-height: 1.3;
    transition: color 0.3s ease;
}
.ts__prodi-card--hovered .ts__prodi-name {
    color: #fff;
}

/* ══════════════════════════════════════════════
   CLOSING QUOTE
══════════════════════════════════════════════ */
.ts__closing {
    max-width: 640px;
    margin: 0 auto;
}
.ts__closing-inner {
    position: relative;
    padding: 2rem 2.2rem;
    background: rgba(178,33,2,0.07);
    border: 1px solid rgba(238,91,22,0.16);
    border-radius: 18px;
    backdrop-filter: blur(12px);
    text-align: center;
}
.ts__closing-qmark {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 3rem; line-height: 0;
    color: rgba(241,177,28,0.45);
    vertical-align: -0.5em;
    display: inline-block;
    font-style: normal;
}
.ts__closing-qmark--close { vertical-align: -0.5em; }
.ts__closing-text {
    font-size: clamp(0.9rem, 1.6vw, 1.02rem);
    line-height: 1.85; color: rgba(255,255,255,0.58);
    margin: 0.4rem 0;
    font-style: italic;
}

/* ══════════════════════════════════════════════
   RESPONSIVE
══════════════════════════════════════════════ */

/* Tablet */
@media (max-width: 900px) {
    .ts__prodi-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.85rem;
    }
}

/* Large mobile */
@media (max-width: 680px) {
    .ts { padding: 5rem 0 6rem; }
    .ts__photo { aspect-ratio: 4 / 3; }
    .ts__photo-label { font-size: 0.6rem; padding: 4px 10px; }
    .ts__closing-inner { padding: 1.6rem 1.4rem; }
}

/* Small mobile */
@media (max-width: 480px) {
    .ts__photo { aspect-ratio: 3 / 4; border-radius: 14px; }
    .ts__prodi-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.7rem;
    }
    .ts__prodi-card { padding: 1.3rem 0.75rem 1.1rem; }
    .ts__prodi-icon { width: 46px; height: 46px; border-radius: 13px; }
    .ts__prodi-name { font-size: 0.76rem; }
    .ts__heading { letter-spacing: -0.02em; }
}
</style>
