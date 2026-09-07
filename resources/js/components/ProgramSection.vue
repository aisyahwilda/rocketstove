<template>
    <section class="ps" ref="sectionRef">

        <!-- Atmospheric glows -->
        <div class="ps__glow ps__glow--1"></div>
        <div class="ps__glow ps__glow--2"></div>

        <div class="ps__container">

            <!-- ══ HEADER ══ -->
            <div class="ps__header" ref="headerRef" :class="{ 'ps__header--in': headerVisible }">

                <h2 class="ps__title">
                    Program yang Kami
                    <span class="ps__accent">Jalankan</span>
                </h2>
                <p class="ps__subtitle">
                    Tiga langkah nyata mewujudkan lingkungan yang lebih bersih dan teredukasi.
                </p>
            </div>

            <!-- ══ TIMELINE ══ -->
            <div class="ps__timeline">

                <!-- Central vertical line -->
                <div class="ps__line"></div>

                <!-- ── Item 1 ── -->
                <div class="ps__item ps__item--left" ref="row0" :class="{ 'ps__item--in': rowsVisible[0] }">

                    <!-- Photo side -->
                    <div class="ps__photo-side">
                        <div class="ps__photo-card" @mouseenter="hovered=0" @mouseleave="hovered=null"
                             :class="{ 'ps__photo-card--hovered': hovered===0 }">
                            <img src="/images/pengembangan.jpeg" alt="Pengembangan Rocket Stove" class="ps__photo-img" />
                            <div class="ps__photo-shine"></div>
                            <div class="ps__photo-tag">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                                </svg>
                                Pengembangan
                            </div>
                        </div>
                    </div>

                    <!-- Center dot -->
                    <div class="ps__node">
                        <div class="ps__node-outer"></div>
                        <div class="ps__node-inner">
                            <span class="ps__node-num">01</span>
                        </div>
                    </div>

                    <!-- Text side -->
                    <div class="ps__text-side">
                        <div class="ps__text-card">
                            <span class="ps__step-tag">Step 01</span>
                            <h3 class="ps__item-title">Pengembangan Rocket Stove</h3>
                            <p class="ps__item-desc">
                                Merancang dan membangun unit Rocket Stove berbasis teknologi tepat guna sebagai
                                alternatif pembakaran sampah yang lebih efisien, aman, dan minim asap
                                bagi masyarakat sekitar.
                            </p>
                            <div class="ps__item-bar"></div>
                        </div>
                    </div>

                </div>

                <!-- ── Item 2 ── -->
                <div class="ps__item ps__item--right" ref="row1" :class="{ 'ps__item--in': rowsVisible[1] }">

                    <!-- Text side -->
                    <div class="ps__text-side">
                        <div class="ps__text-card">
                            <span class="ps__step-tag">Step 02</span>
                            <h3 class="ps__item-title">Sosialisasi dan Edukasi</h3>
                            <p class="ps__item-desc">
                                Melaksanakan kegiatan sosialisasi langsung kepada warga untuk memperkenalkan
                                Rocket Stove dan menumbuhkan kesadaran pentingnya pengelolaan sampah
                                yang bertanggung jawab.
                            </p>
                            <div class="ps__item-bar"></div>
                        </div>
                    </div>

                    <!-- Center dot -->
                    <div class="ps__node">
                        <div class="ps__node-outer"></div>
                        <div class="ps__node-inner">
                            <span class="ps__node-num">02</span>
                        </div>
                    </div>

                    <!-- Photo side -->
                    <div class="ps__photo-side">
                        <div class="ps__photo-card" @mouseenter="hovered=1" @mouseleave="hovered=null"
                             :class="{ 'ps__photo-card--hovered': hovered===1 }">
                            <img src="/images/sosialisasi.jpeg" alt="Sosialisasi dan Edukasi" class="ps__photo-img" />
                            <div class="ps__photo-shine"></div>
                            <div class="ps__photo-tag">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                Sosialisasi
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ── Item 3 ── -->
                <div class="ps__item ps__item--left" ref="row2" :class="{ 'ps__item--in': rowsVisible[2] }">

                    <!-- Photo side -->
                    <div class="ps__photo-side">
                        <div class="ps__photo-card" @mouseenter="hovered=2" @mouseleave="hovered=null"
                             :class="{ 'ps__photo-card--hovered': hovered===2 }">
                            <img src="/images/edukasi.jpg" alt="Website Edukasi EcoBurner" class="ps__photo-img" />
                            <div class="ps__photo-shine"></div>
                            <div class="ps__photo-tag">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>
                                </svg>
                                Website
                            </div>
                        </div>
                    </div>

                    <!-- Center dot -->
                    <div class="ps__node">
                        <div class="ps__node-outer"></div>
                        <div class="ps__node-inner">
                            <span class="ps__node-num">03</span>
                        </div>
                    </div>

                    <!-- Text side -->
                    <div class="ps__text-side">
                        <div class="ps__text-card">
                            <span class="ps__step-tag">Step 03</span>
                            <h3 class="ps__item-title">Website Edukasi EcoBurner</h3>
                            <p class="ps__item-desc">
                                Mengembangkan platform digital sebagai pusat informasi dan edukasi EcoBurner
                                yang dapat diakses kapan saja melalui perangkat apapun.
                            </p>
                            <div class="ps__item-bar"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, reactive, onMounted, onUnmounted } from 'vue';

const sectionRef  = ref(null);
const headerRef   = ref(null);
const row0        = ref(null);
const row1        = ref(null);
const row2        = ref(null);
const hovered     = ref(null);
const headerVisible = ref(false);
const rowsVisible   = reactive([false, false, false]);

let observers = [];

onMounted(() => {
    const makeObs = (el, cb, threshold = 0.18) => {
        if (!el) return;
        const obs = new IntersectionObserver(([e]) => {
            if (e.isIntersecting) { cb(); obs.disconnect(); }
        }, { threshold });
        obs.observe(el);
        observers.push(obs);
    };

    makeObs(headerRef.value, () => { headerVisible.value = true; }, 0.3);
    makeObs(row0.value, () => { rowsVisible[0] = true; });
    makeObs(row1.value, () => { rowsVisible[1] = true; });
    makeObs(row2.value, () => { rowsVisible[2] = true; });
});
onUnmounted(() => observers.forEach(o => o.disconnect()));
</script>

<style scoped>
/* ══════════════════════════════════════════════
   BASE
══════════════════════════════════════════════ */
.ps {
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    padding: 7rem 0 8rem;
    position: relative;
    overflow: hidden;
}

/* glows */
.ps__glow {
    position: absolute; border-radius: 50%;
    filter: blur(120px); pointer-events: none; z-index: 0;
}
.ps__glow--1 {
    width: 640px; height: 640px;
    background: radial-gradient(circle, rgba(238,91,22,0.07), transparent 70%);
    top: -10%; left: -200px;
}
.ps__glow--2 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(178,33,2,0.05), transparent 70%);
    bottom: 0; right: -150px;
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.ps__container {
    max-width: 1040px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative; z-index: 1;
}

/* ══════════════════════════════════════════════
   HEADER
══════════════════════════════════════════════ */
.ps__header {
    text-align: center;
    margin-bottom: 5.5rem;
    opacity: 0; transform: translateY(28px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.ps__header--in { opacity: 1; transform: translateY(0); }


.ps__title {
    font-size: clamp(2.4rem, 5.5vw, 4rem);
    font-weight: 800; line-height: 1.1;
    letter-spacing: -0.03em; color: #1a1a1a;
    margin: 0 0 1rem;
}
.ps__accent {
    display: block;
    background: linear-gradient(90deg, #B22102, #EE5B16, #DB6E15);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ps__subtitle {
    font-size: clamp(0.92rem, 1.6vw, 1.05rem);
    color: #888; line-height: 1.7; max-width: 480px; margin: 0 auto;
}

/* ══════════════════════════════════════════════
   TIMELINE WRAPPER
══════════════════════════════════════════════ */
.ps__timeline {
    position: relative;
    display: flex; flex-direction: column;
    gap: 5rem;
}

/* center vertical line */
.ps__line {
    position: absolute;
    top: 0; bottom: 0;
    left: 50%; transform: translateX(-50%);
    width: 2px;
    background: linear-gradient(to bottom,
        transparent 0%,
        rgba(238,91,22,0.25) 10%,
        rgba(238,91,22,0.25) 90%,
        transparent 100%
    );
    z-index: 0;
}

/* ══════════════════════════════════════════════
   TIMELINE ITEM
══════════════════════════════════════════════ */
.ps__item {
    display: grid;
    grid-template-columns: 1fr 80px 1fr;
    align-items: center;
    gap: 0;
    position: relative; z-index: 1;
}

/* Entrance animation */
.ps__item--left {
    opacity: 0;
    transition: opacity 0.8s ease, transform 0.8s ease;
    transform: translateX(-40px);
}
.ps__item--right {
    opacity: 0;
    transition: opacity 0.8s ease 0.1s, transform 0.8s ease 0.1s;
    transform: translateX(40px);
}
.ps__item--in {
    opacity: 1 !important; transform: translateX(0) !important;
}

/* ══════════════════════════════════════════════
   CENTER NODE (dot)
══════════════════════════════════════════════ */
.ps__node {
    position: relative;
    width: 80px; height: 80px;
    display: flex; align-items: center; justify-content: center;
    z-index: 2; flex-shrink: 0;
}
.ps__node-outer {
    position: absolute; inset: 0;
    border-radius: 50%;
    border: 2px solid rgba(238,91,22,0.22);
    animation: nodeRing 3s ease-in-out infinite;
}
@keyframes nodeRing {
    0%,100% { transform: scale(1); opacity: 0.5; }
    50%      { transform: scale(1.12); opacity: 1; }
}
.ps__node-inner {
    width: 52px; height: 52px;
    border-radius: 50%;
    background: linear-gradient(135deg, #B22102, #EE5B16);
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 20px rgba(178,33,2,0.35);
    position: relative; z-index: 1;
}
.ps__node-num {
    font-size: 0.75rem; font-weight: 800;
    color: #fff; letter-spacing: 0.04em;
}

/* ══════════════════════════════════════════════
   PHOTO CARD
══════════════════════════════════════════════ */
.ps__photo-side {
    padding: 0 1.5rem;
}
/* left item: photo on left → align right */
.ps__item--left .ps__photo-side {
    display: flex; justify-content: flex-end;
}
/* right item: photo on right → align left */
.ps__item--right .ps__photo-side {
    display: flex; justify-content: flex-start;
}

.ps__photo-card {
    position: relative;
    width: 100%;
    max-width: 380px;
    border-radius: 18px;
    overflow: hidden;
    aspect-ratio: 4 / 3;
    background: #f0ece8;
    box-shadow:
        0 2px 0 rgba(0,0,0,0.04),
        0 8px 32px rgba(0,0,0,0.1);
    transition: transform 0.45s ease, box-shadow 0.45s ease;
    cursor: default;
}
.ps__photo-card--hovered {
    transform: translateY(-6px) scale(1.012);
    box-shadow:
        0 2px 0 rgba(0,0,0,0.04),
        0 24px 56px rgba(178,33,2,0.14);
}

.ps__photo-img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 10s ease;
}
.ps__photo-card--hovered .ps__photo-img {
    transform: scale(1.05);
}

/* subtle shine overlay */
.ps__photo-shine {
    position: absolute; inset: 0;
    background: linear-gradient(135deg,
        rgba(255,255,255,0.06) 0%,
        transparent 50%,
        rgba(0,0,0,0.08) 100%
    );
    pointer-events: none;
    border-radius: inherit;
}

/* tag label */
.ps__photo-tag {
    position: absolute;
    bottom: 12px; left: 12px;
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(10px);
    border-radius: 999px;
    padding: 5px 12px;
    font-size: 0.7rem; font-weight: 700;
    letter-spacing: 0.06em; color: #EE5B16;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* ══════════════════════════════════════════════
   TEXT CARD
══════════════════════════════════════════════ */
.ps__text-side {
    padding: 0 1.5rem;
}
/* left item: text on right → align left */
.ps__item--left .ps__text-side {
    display: flex; justify-content: flex-start;
}
/* right item: text on left → align right */
.ps__item--right .ps__text-side {
    display: flex; justify-content: flex-end;
}

.ps__text-card {
    max-width: 340px;
    width: 100%;
}

.ps__step-tag {
    display: inline-block;
    font-size: 0.65rem; font-weight: 800;
    letter-spacing: 0.14em; text-transform: uppercase;
    color: #EE5B16; margin-bottom: 0.8rem;
}

.ps__item-title {
    font-size: clamp(1.3rem, 2.5vw, 1.65rem);
    font-weight: 800; line-height: 1.2;
    letter-spacing: -0.02em; color: #1a1a1a;
    margin: 0 0 0.85rem;
}

.ps__item-desc {
    font-size: 0.95rem; line-height: 1.8;
    color: #666; margin: 0 0 1.2rem;
}

.ps__item-bar {
    height: 3px; width: 40px; border-radius: 9px;
    background: linear-gradient(90deg, #EE5B16, #F1B11C);
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Tablet
══════════════════════════════════════════════ */
@media (max-width: 860px) {
    .ps__item {
        grid-template-columns: 1fr 60px 1fr;
    }
    .ps__photo-card { max-width: 300px; }
    .ps__text-card  { max-width: 280px; }
    .ps__photo-side, .ps__text-side { padding: 0 0.75rem; }
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Mobile
══════════════════════════════════════════════ */
@media (max-width: 640px) {
    .ps { padding: 5rem 0 6rem; }
    .ps__timeline { gap: 3.5rem; }
    .ps__line { display: none; }

    /* Stack all items vertically: photo → node → text */
    .ps__item,
    .ps__item--left,
    .ps__item--right {
        grid-template-columns: 1fr;
        grid-template-rows: auto auto auto;
        gap: 1.2rem;
        transform: translateY(30px) !important;
    }
    .ps__item--in {
        transform: translateY(0) !important;
    }

    .ps__node {
        width: 56px; height: 56px;
        margin: 0 auto;
        justify-self: center;
    }
    .ps__node-inner { width: 38px; height: 38px; }
    .ps__node-num { font-size: 0.65rem; }

    /* Reset photo/text alignment */
    .ps__item--left .ps__photo-side,
    .ps__item--right .ps__photo-side,
    .ps__item--left .ps__text-side,
    .ps__item--right .ps__text-side {
        justify-content: center;
        padding: 0;
    }

    .ps__photo-card { max-width: 100%; }
    .ps__text-card  { max-width: 100%; text-align: center; }
    .ps__item-bar   { margin: 0 auto; }

    /* Reorder: photo top, node middle, text bottom for all */
    .ps__photo-side { order: 1; }
    .ps__node       { order: 2; }
    .ps__text-side  { order: 3; }
}
</style>
