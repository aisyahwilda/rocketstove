<template>
    <section class="mw" ref="sectionRef">

        <div class="mw__bg-glow mw__bg-glow--1"></div>
        <div class="mw__bg-glow mw__bg-glow--2"></div>

        <div class="mw__container">

            <!-- Header -->
            <div class="mw__header" :class="{ 'mw__in': visible }">
                <div class="mw__eyebrow">
                    <span class="mw__eyebrow-line"></span>
                    Keunggulan Kami
                    <span class="mw__eyebrow-line"></span>
                </div>
                <h2 class="mw__title">
                    Mengapa <span class="mw__title-accent">EcoBurner?</span>
                </h2>
            </div>

            <!-- 3 Cards -->
            <div class="mw__grid">

                <!-- Card 1: Api / Efisiensi -->
                <div
                    class="mw__card mw__card--fire"
                    :class="{ 'mw__card--in': visible }"
                    style="--delay: 0s"
                >
                    <div class="mw__icon-stage">
                        <!-- 3D Platform base -->
                        <div class="mw__platform">
                            <div class="mw__platform-top"></div>
                            <div class="mw__platform-side"></div>
                        </div>
                        <!-- 3D Icon layers -->
                        <div class="mw__icon-3d">
                            <div class="mw__icon-shadow"></div>
                            <div class="mw__icon-body mw__icon-body--fire">
                                <span class="mw__icon-main">🔥</span>
                                <span class="mw__icon-glow-ring"></span>
                            </div>
                        </div>
                        <!-- Floating sparks -->
                        <span class="mw__spark mw__spark--1">✦</span>
                        <span class="mw__spark mw__spark--2">·</span>
                        <span class="mw__spark mw__spark--3">✦</span>
                    </div>
                    <div class="mw__card-content">
                        <h3 class="mw__card-title">🔥 Lebih Efisien</h3>
                        <p class="mw__card-desc">Pembakaran lebih optimal dengan panas yang maksimal dan asap yang lebih terarah.</p>
                    </div>
                </div>

                <!-- Card 2: Daun / Lingkungan -->
                <div
                    class="mw__card mw__card--leaf"
                    :class="{ 'mw__card--in': visible }"
                    style="--delay: 0.15s"
                >
                    <div class="mw__icon-stage">
                        <div class="mw__platform">
                            <div class="mw__platform-top"></div>
                            <div class="mw__platform-side"></div>
                        </div>
                        <div class="mw__icon-3d">
                            <div class="mw__icon-shadow"></div>
                            <div class="mw__icon-body mw__icon-body--leaf">
                                <span class="mw__icon-main">🌿</span>
                                <span class="mw__icon-glow-ring"></span>
                            </div>
                        </div>
                        <span class="mw__spark mw__spark--1">🌱</span>
                        <span class="mw__spark mw__spark--2">·</span>
                        <span class="mw__spark mw__spark--3">✦</span>
                    </div>
                    <div class="mw__card-content">
                        <h3 class="mw__card-title">🌿 Lebih Ramah Lingkungan</h3>
                        <p class="mw__card-desc">Membantu mengurangi dampak pembakaran sampah terbuka terhadap lingkungan sekitar.</p>
                    </div>
                </div>

                <!-- Card 3: Laptop / Edukasi -->
                <div
                    class="mw__card mw__card--edu"
                    :class="{ 'mw__card--in': visible }"
                    style="--delay: 0.3s"
                >
                    <div class="mw__icon-stage">
                        <div class="mw__platform">
                            <div class="mw__platform-top"></div>
                            <div class="mw__platform-side"></div>
                        </div>
                        <div class="mw__icon-3d">
                            <div class="mw__icon-shadow"></div>
                            <div class="mw__icon-body mw__icon-body--edu">
                                <span class="mw__icon-main">💻</span>
                                <span class="mw__icon-glow-ring"></span>
                            </div>
                        </div>
                        <span class="mw__spark mw__spark--1">⚡</span>
                        <span class="mw__spark mw__spark--2">·</span>
                        <span class="mw__spark mw__spark--3">✦</span>
                    </div>
                    <div class="mw__card-content">
                        <h3 class="mw__card-title">💻 Edukasi Mudah Diakses</h3>
                        <p class="mw__card-desc">Website ini menjadi Informasi dan edukasi yang dapat diakses kapan saja melalui website EcoBurner.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const sectionRef = ref(null);
const visible    = ref(false);

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
/* ── Section ─────────────────────────────────────────── */
.mw {
    position: relative;
    background: #f9f6f3;
    padding: 7rem 0;
    font-family: 'Inter', sans-serif;
    overflow: hidden;
}

/* Ambient glows */
.mw__bg-glow {
    position: absolute; border-radius: 50%; pointer-events: none; filter: blur(100px);
}
.mw__bg-glow--1 {
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(238,91,22,0.07) 0%, transparent 70%);
    top: -200px; left: -150px;
}
.mw__bg-glow--2 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(178,33,2,0.06) 0%, transparent 70%);
    bottom: -150px; right: -100px;
}

/* ── Container ───────────────────────────────────────── */
.mw__container {
    max-width: 1100px; margin: 0 auto; padding: 0 2rem;
    position: relative; z-index: 1;
}

/* ── Header ──────────────────────────────────────────── */
.mw__header {
    text-align: center; margin-bottom: 4.5rem;
    opacity: 0; transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.mw__in { opacity: 1 !important; transform: translateY(0) !important; }

.mw__eyebrow {
    display: inline-flex; align-items: center; gap: 12px;
    font-size: 0.72rem; font-weight: 700; letter-spacing: 0.13em;
    text-transform: uppercase; color: #EE5B16; margin-bottom: 0.9rem;
}
.mw__eyebrow-line {
    display: block; width: 24px; height: 1.5px;
    background: #EE5B16; border-radius: 9px;
}

.mw__title {
    font-size: clamp(2rem, 4.5vw, 3.2rem);
    font-weight: 800; letter-spacing: -0.025em; color: #1a1a1a; line-height: 1.1;
}
.mw__title-accent {
    background: linear-gradient(90deg, #B22102, #EE5B16, #F1B11C);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}

/* ── Grid ────────────────────────────────────────────── */
.mw__grid {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;
}

/* ── Card base ───────────────────────────────────────── */
.mw__card {
    position: relative;
    background: #fff;
    border-radius: 28px;
    border: 1px solid rgba(0,0,0,0.07);
    box-shadow: 0 6px 28px rgba(0,0,0,0.06);
    overflow: hidden;
    display: flex; flex-direction: column;
    opacity: 0; transform: translateY(40px);
    /* Single smooth transition for all states */
    transition:
        opacity 0.7s ease var(--delay),
        transform 0.7s ease var(--delay),
        box-shadow 0.35s ease,
        border-color 0.35s ease;
    cursor: default;
}
.mw__card--in {
    opacity: 1;
    transform: translateY(0);
}

/* Hover: elevate + soft brand glow — NO text side-effects */
.mw__card--in:hover {
    transform: translateY(-8px);
    border-color: rgba(238, 91, 22, 0.25);
    box-shadow:
        0 20px 56px rgba(238, 91, 22, 0.16),
        0 4px 16px rgba(0, 0, 0, 0.06),
        0 0 0 1px rgba(238, 91, 22, 0.18);
}

/* Per-card accent colors */
.mw__card--fire {
    --c1: #EE5B16; --c2: #F1B11C;
    --glow: rgba(238,91,22,0.22);
    --platform-top: #FFF3EC;
    --platform-side: #EE5B1630;
    --icon-bg: linear-gradient(135deg, #FFF3EC, #FFEBD8);
    --icon-border: rgba(238,91,22,0.3);
    --ring-color: rgba(238,91,22,0.15);
}
.mw__card--leaf {
    --c1: #D73303; --c2: #EE5B16;
    --glow: rgba(215,51,3,0.20);
    --platform-top: #FFF0EC;
    --platform-side: #D7330330;
    --icon-bg: linear-gradient(135deg, #FFF0EC, #FFE4DC);
    --icon-border: rgba(215,51,3,0.28);
    --ring-color: rgba(215,51,3,0.12);
}
.mw__card--edu {
    --c1: #B22102; --c2: #D73303;
    --glow: rgba(178,33,2,0.18);
    --platform-top: #FFEEEA;
    --platform-side: #B2210230;
    --icon-bg: linear-gradient(135deg, #FFEEEA, #FFE0D8);
    --icon-border: rgba(178,33,2,0.26);
    --ring-color: rgba(178,33,2,0.10);
}

/* hover handled by .mw__card--in:hover above */

/* ── Icon stage (top area) ───────────────────────────── */
.mw__icon-stage {
    position: relative;
    height: 200px;
    display: flex; align-items: center; justify-content: center;
    /* Warm subtle gradient ceiling per card */
    background: linear-gradient(160deg, var(--platform-top) 0%, #fff 100%);
    border-bottom: 1px solid rgba(0,0,0,0.05);
    overflow: hidden;
}

/* ── 3D Platform base ────────────────────────────────── */
.mw__platform {
    position: absolute;
    bottom: 28px;
    width: 80px;
    perspective: 400px;
}
.mw__platform-top {
    width: 80px; height: 14px;
    background: var(--platform-top);
    border: 1px solid var(--icon-border);
    border-radius: 6px;
    transform: rotateX(45deg) translateY(4px);
}
.mw__platform-side {
    width: 80px; height: 10px;
    background: var(--platform-side);
    border: 1px solid var(--icon-border);
    border-radius: 0 0 6px 6px;
    transform: rotateX(-20deg) translateY(-2px);
}

/* ── 3D Icon block ───────────────────────────────────── */
.mw__icon-3d {
    position: relative; z-index: 2;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
}

.mw__icon-shadow {
    position: absolute;
    bottom: -16px; left: 50%; transform: translateX(-50%);
    width: 72px; height: 16px;
    background: radial-gradient(ellipse, var(--glow), transparent 70%);
    border-radius: 50%;
    animation: shadowPulse 3s ease-in-out infinite;
}
@keyframes shadowPulse {
    0%,100% { transform: translateX(-50%) scaleX(1); opacity: 0.8; }
    50%      { transform: translateX(-50%) scaleX(0.75); opacity: 0.4; }
}

.mw__icon-body {
    position: relative;
    width: 88px; height: 88px;
    border-radius: 26px;
    background: var(--icon-bg);
    border: 2px solid var(--icon-border);
    display: flex; align-items: center; justify-content: center;
    /* 3D depth via box-shadow layers */
    box-shadow:
        0 0 0 4px rgba(255,255,255,0.9),
        4px 6px 0px var(--icon-border),
        0 14px 40px var(--glow);
    transition: transform 0.45s ease, box-shadow 0.45s ease;
    animation: iconFloat 4s ease-in-out infinite;
}
@keyframes iconFloat {
    0%,100% { transform: translateY(0) rotate(0deg); }
    50%      { transform: translateY(-8px) rotate(-3deg); }
}
.mw__card:hover .mw__icon-body {
    transform: translateY(-6px) rotate(-6deg) scale(1.06);
    box-shadow:
        0 0 0 5px rgba(255,255,255,0.95),
        5px 8px 0 var(--icon-border),
        0 20px 50px var(--glow);
}

.mw__icon-main {
    font-size: 2.8rem; line-height: 1;
    filter: drop-shadow(2px 3px 6px rgba(0,0,0,0.18));
    position: relative; z-index: 1;
}

/* Spinning ring behind icon */
.mw__icon-glow-ring {
    position: absolute; inset: -10px;
    border-radius: 50%;
    border: 1.5px dashed var(--ring-color);
    animation: ringRotate 12s linear infinite;
}
@keyframes ringRotate { to { transform: rotate(360deg); } }

/* ── Floating sparks ─────────────────────────────────── */
.mw__spark {
    position: absolute; pointer-events: none;
    color: var(--c1); font-size: 0.7rem; opacity: 0.55;
    animation: sparkFloat ease-in-out infinite;
}
.mw__spark--1 { top: 18px; left: 20%; animation-duration: 3.8s; animation-delay: 0s; }
.mw__spark--2 { top: 24px; right: 18%; animation-duration: 5s;   animation-delay: 0.7s; font-size: 1rem; }
.mw__spark--3 { bottom: 34px; right: 22%; animation-duration: 4.2s; animation-delay: 1.3s; }
@keyframes sparkFloat {
    0%,100% { transform: translateY(0) scale(1); opacity: 0.5; }
    50%      { transform: translateY(-12px) scale(1.3); opacity: 1; }
}

/* ── Card content ────────────────────────────────────── */
.mw__card-content {
    padding: 1.6rem 1.8rem 2rem;
    flex: 1; display: flex; flex-direction: column; gap: 0.7rem;
}

.mw__card-title {
    font-size: 1.05rem; font-weight: 800;
    color: #1a1a1a; line-height: 1.3;
}

.mw__card-desc {
    font-size: 0.875rem; line-height: 1.78;
    color: #5a5a5a; text-align: justify;
}

/* ── Responsive ──────────────────────────────────────── */
@media (max-width: 900px) {
    .mw__grid { grid-template-columns: 1fr; max-width: 460px; margin: 0 auto; gap: 1.5rem; }
    .mw__icon-stage { height: 180px; }
}
@media (max-width: 560px) {
    .mw { padding: 5rem 0; }
    .mw__card-content { padding: 1.4rem 1.5rem 1.6rem; }
}
</style>
