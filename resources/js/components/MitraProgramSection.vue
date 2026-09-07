<template>
    <section class="mp" ref="sectionRef">

        <!-- ── Atmosphere ── -->
        <div class="mp__glow mp__glow--tl"></div>
        <div class="mp__glow mp__glow--br"></div>
        <div class="mp__orb mp__orb--1"></div>
        <div class="mp__orb mp__orb--2"></div>

        <div class="mp__container">

            <!-- ══ HEADER ══ -->
            <div class="mp__header" :class="{ 'mp__reveal': visible }">
                <h2 class="mp__title">Mitra <span class="mp__title-accent">Program</span></h2>
                <p class="mp__subtitle">
                    Bersama mitra terpercaya, kami mewujudkan dampak nyata bagi lingkungan dan masyarakat lokal.
                </p>
            </div>

            <!-- ══ PARTNER CARD ══ -->
            <div
                class="mp__card-wrap"
                :class="{ 'mp__reveal': visible }"
                style="transition-delay: 0.22s"
            >
                <div
                    class="mp__card"
                    :class="{ 'mp__card--active': cardHovered }"
                    @mouseenter="cardHovered = true"
                    @mouseleave="cardHovered = false"
                >
                    <!-- Animated border gradient -->
                    <div class="mp__card-border"></div>

                    <!-- Left accent column -->
                    <div class="mp__card-accent"></div>

                    <!-- Content -->
                    <div class="mp__card-inner">

                        <!-- Icon + Label row -->
                        <div class="mp__card-top">
                            <div class="mp__icon-wrap">
                                <svg class="mp__icon" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="1.7"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                    <polyline points="9 22 9 12 15 12 15 22"/>
                                </svg>
                                <div class="mp__icon-ring"></div>
                            </div>
                            <span class="mp__card-tag">Mitra Utama Program</span>
                        </div>

                        <!-- Name -->
                        <h3 class="mp__card-name">RT 68 KM 8</h3>

                        <!-- Divider bar -->
                        <div class="mp__divider"></div>

                        <!-- Address row -->
                        <div class="mp__address">
                            <div class="mp__address-icon">
                                <svg viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="mp__address-text">
                                <span class="mp__address-line">Graha Indah</span>
                                <span class="mp__address-sub">Balikpapan Utara, Kalimantan Timur</span>
                            </div>
                        </div>

                        <!-- Shine overlay -->
                        <div class="mp__card-shine"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const sectionRef  = ref(null);
const visible     = ref(false);
const cardHovered = ref(false);

let observer;
onMounted(() => {
    observer = new IntersectionObserver(
        ([e]) => { if (e.isIntersecting) visible.value = true; },
        { threshold: 0.12 }
    );
    if (sectionRef.value) observer.observe(sectionRef.value);
});
onUnmounted(() => observer?.disconnect());
</script>

<style scoped>
/* ══════════════════════════════════════════════
   BASE
══════════════════════════════════════════════ */
.mp {
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    padding: 7rem 0 8rem;
    position: relative;
    overflow: hidden;
}

/* ── Glows ── */
.mp__glow {
    position: absolute; border-radius: 50%;
    filter: blur(140px); pointer-events: none; z-index: 0;
}
.mp__glow--tl {
    width: 560px; height: 560px;
    background: radial-gradient(circle, rgba(238,91,22,0.08), transparent 70%);
    top: -160px; left: -180px;
    animation: mpDrift 24s ease-in-out infinite alternate;
}
.mp__glow--br {
    width: 420px; height: 420px;
    background: radial-gradient(circle, rgba(178,33,2,0.06), transparent 70%);
    bottom: -100px; right: -140px;
    animation: mpDrift 30s ease-in-out infinite alternate-reverse;
}
@keyframes mpDrift {
    from { transform: translate(0,0); }
    to   { transform: translate(22px, 16px); }
}

/* ── Floating orbs ── */
.mp__orb {
    position: absolute; border-radius: 50%; pointer-events: none; z-index: 0;
}
.mp__orb--1 {
    width: 160px; height: 160px;
    background: radial-gradient(circle, rgba(241,177,28,0.07), transparent 70%);
    top: 10%; right: 7%;
    animation: orbFloat 16s ease-in-out infinite;
}
.mp__orb--2 {
    width: 100px; height: 100px;
    background: radial-gradient(circle, rgba(215,51,3,0.07), transparent 70%);
    bottom: 18%; left: 5%;
    animation: orbFloat 20s ease-in-out infinite reverse;
}
@keyframes orbFloat {
    0%,100% { transform: translateY(0) scale(1); }
    50%      { transform: translateY(-16px) scale(1.06); }
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.mp__container {
    max-width: 720px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative; z-index: 1;
    display: flex; flex-direction: column;
    align-items: center;
}

/* ══════════════════════════════════════════════
   REVEAL ANIMATION
══════════════════════════════════════════════ */
.mp__header,
.mp__card-wrap {
    width: 100%;
    opacity: 0; transform: translateY(32px);
    transition: opacity 0.85s ease, transform 0.85s ease;
}
.mp__reveal {
    opacity: 1 !important; transform: translateY(0) !important;
}

/* ══════════════════════════════════════════════
   HEADER
══════════════════════════════════════════════ */
.mp__header {
    text-align: center;
    margin-bottom: 3.4rem;
}

.mp__title {
    font-size: clamp(2.4rem, 5.5vw, 3.8rem);
    font-weight: 800; line-height: 1.08;
    letter-spacing: -0.03em; color: #1a1a1a;
    margin: 0 0 1rem;
    white-space: nowrap;   /* ← keeps "Mitra Program" on one line */
}
.mp__title-accent {
    background: linear-gradient(90deg, #B22102 0%, #EE5B16 45%, #DB6E15 80%, #F1B11C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.mp__subtitle {
    font-size: clamp(0.9rem, 1.6vw, 1.02rem);
    color: #888; line-height: 1.78;
    max-width: 480px; margin: 0 auto;
}

/* ══════════════════════════════════════════════
   CARD WRAPPER
══════════════════════════════════════════════ */
.mp__card-wrap {
    display: flex; justify-content: center;
}

/* ══════════════════════════════════════════════
   PARTNER CARD
══════════════════════════════════════════════ */
.mp__card {
    position: relative;
    width: 100%;
    max-width: 560px;
    border-radius: 28px;
    overflow: hidden;
    background: #fff;
    border: 1.5px solid rgba(201,75,7,0.12);
    box-shadow:
        0 2px 0 rgba(0,0,0,0.03),
        0 14px 52px rgba(0,0,0,0.07);
    cursor: default;
    transition: transform 0.45s ease, box-shadow 0.45s ease, border-color 0.45s ease;
}
.mp__card--active {
    transform: translateY(-7px);
    border-color: rgba(238,91,22,0.3);
    box-shadow:
        0 2px 0 rgba(0,0,0,0.03),
        0 32px 80px rgba(178,33,2,0.13),
        0 0 0 1px rgba(238,91,22,0.07);
}

/* Animated top border */
.mp__card-border {
    position: absolute; top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #B22102, #EE5B16, #F1B11C, #DB6E15, #B22102);
    background-size: 200% 100%;
    animation: borderFlow 4s linear infinite;
    z-index: 2;
    opacity: 0.7;
    transition: opacity 0.4s ease;
}
.mp__card--active .mp__card-border { opacity: 1; }
@keyframes borderFlow {
    0%   { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}

/* Left accent bar */
.mp__card-accent {
    position: absolute; top: 3px; left: 0; bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #EE5B16, #B22102, rgba(178,33,2,0.1));
    z-index: 1;
    transition: width 0.4s ease;
}
.mp__card--active .mp__card-accent { width: 5px; }

/* Inner padding */
.mp__card-inner {
    position: relative;
    padding: 2.6rem 2.4rem 2.2rem 2.8rem;
    z-index: 1;
}

/* ── Top row: icon + tag ── */
.mp__card-top {
    display: flex; align-items: center; gap: 1rem;
    margin-bottom: 1.5rem;
}

.mp__icon-wrap {
    position: relative;
    width: 60px; height: 60px;
    flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
}
.mp__icon {
    width: 60px; height: 60px;
    padding: 14px;
    border-radius: 18px;
    background: linear-gradient(135deg, #B22102 0%, #EE5B16 60%, #DB6E15 100%);
    color: #fff;
    box-shadow: 0 6px 28px rgba(178,33,2,0.3), 0 0 0 5px rgba(238,91,22,0.08);
    position: relative; z-index: 1;
    transition: transform 0.45s ease, box-shadow 0.45s ease;
}
.mp__card--active .mp__icon {
    transform: scale(1.08) rotate(-5deg);
    box-shadow: 0 10px 38px rgba(178,33,2,0.42), 0 0 0 7px rgba(238,91,22,0.1);
}

/* dashed spinning ring */
.mp__icon-ring {
    position: absolute; inset: -6px;
    border-radius: 22px;
    border: 1.5px dashed rgba(238,91,22,0.22);
    transition: border-color 0.4s ease;
}
.mp__card--active .mp__icon-ring {
    border-color: rgba(238,91,22,0.5);
    animation: ringRot 7s linear infinite;
}
@keyframes ringRot { to { transform: rotate(360deg); } }

.mp__card-tag {
    font-size: 0.64rem; font-weight: 800;
    letter-spacing: 0.15em; text-transform: uppercase;
    color: #EE5B16;
}

/* ── Name ── */
.mp__card-name {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800; line-height: 1.05;
    letter-spacing: -0.025em; color: #1a1a1a;
    margin: 0 0 1.4rem;
    transition: color 0.35s ease;
}
.mp__card--active .mp__card-name { color: #B22102; }

/* ── Divider ── */
.mp__divider {
    height: 2px; width: 100%;
    background: linear-gradient(90deg,
        rgba(238,91,22,0.2) 0%,
        rgba(241,177,28,0.15) 50%,
        transparent 100%
    );
    margin-bottom: 1.4rem;
    border-radius: 9px;
    transition: background 0.4s ease;
}
.mp__card--active .mp__divider {
    background: linear-gradient(90deg,
        rgba(238,91,22,0.4) 0%,
        rgba(241,177,28,0.25) 50%,
        transparent 100%
    );
}

/* ── Address ── */
.mp__address {
    display: flex; align-items: flex-start; gap: 0.9rem;
}
.mp__address-icon {
    width: 38px; height: 38px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    border-radius: 12px;
    background: rgba(238,91,22,0.08);
    border: 1px solid rgba(238,91,22,0.16);
    color: #EE5B16;
    transition: background 0.35s ease, border-color 0.35s ease, transform 0.35s ease;
}
.mp__address-icon svg { width: 17px; height: 17px; }
.mp__card--active .mp__address-icon {
    background: rgba(238,91,22,0.14);
    border-color: rgba(238,91,22,0.35);
    transform: scale(1.08);
}

.mp__address-text {
    display: flex; flex-direction: column; gap: 0.25rem;
    padding-top: 0.15rem;
}
.mp__address-line {
    font-size: 1rem; font-weight: 700;
    color: #2a2a2a; line-height: 1.2;
    transition: color 0.35s ease;
}
.mp__card--active .mp__address-line { color: #921802; }

.mp__address-sub {
    font-size: 0.82rem; font-weight: 500;
    color: #999; line-height: 1.45;
    transition: color 0.35s ease;
}
.mp__card--active .mp__address-sub { color: #C94B07; }

/* corner shine */
.mp__card-shine {
    position: absolute; inset: 0; border-radius: inherit;
    background: linear-gradient(135deg,
        rgba(255,255,255,0.5) 0%,
        transparent 45%,
        rgba(238,91,22,0.015) 100%
    );
    pointer-events: none; z-index: 0;
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Tablet
══════════════════════════════════════════════ */
@media (max-width: 640px) {
    .mp { padding: 5rem 0 6rem; }
    .mp__title { white-space: normal; }
    .mp__card-inner { padding: 2rem 1.6rem 1.8rem 2rem; }
    .mp__icon { width: 50px; height: 50px; padding: 11px; border-radius: 15px; }
    .mp__card-name { font-size: clamp(1.7rem, 6vw, 2.4rem); }
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Small Mobile
══════════════════════════════════════════════ */
@media (max-width: 420px) {
    .mp__card-inner { padding: 1.7rem 1.2rem 1.5rem 1.6rem; }
    .mp__card-top { gap: 0.75rem; }
    .mp__icon { width: 44px; height: 44px; padding: 10px; border-radius: 13px; }
    .mp__address-icon { width: 32px; height: 32px; }
    .mp__address-icon svg { width: 14px; height: 14px; }
}
</style>
