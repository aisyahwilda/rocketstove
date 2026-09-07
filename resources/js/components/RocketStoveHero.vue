<template>
    <section class="rsh" ref="sectionRef">

        <!-- ── Background image (right half) ── -->
        <div class="rsh__img-wrap">
            <img
                src="/images/rocket-stove.png"
                alt="Rocket Stove EcoBurner"
                class="rsh__img"
                :class="{ 'rsh__img--loaded': imgLoaded }"
                @load="imgLoaded = true"
            />
        </div>

        <!-- ── Content ── -->
        <div class="rsh__container">
            <div class="rsh__left">

                <!-- Heading -->
                <h1 class="rsh__heading" :class="{ 'rsh__in': visible }" style="transition-delay:0.15s">
                    Mengenal Rocket&nbsp;Stove
                    <span class="rsh__heading-accent">Lebih Dekat</span>
                </h1>

                <!-- Quote -->
                <p class="rsh__quote" :class="{ 'rsh__in': visible }" style="transition-delay:0.28s">
                    <span class="rsh__qmark">"</span>
                    Teknologi pembakaran yang dirancang untuk membantu proses pembakaran
                    menjadi lebih terarah dan efisien.
                    <span class="rsh__qmark">"</span>
                </p>

                <!-- CTA Button -->
                <div class="rsh__cta" :class="{ 'rsh__in': visible }" style="transition-delay:0.42s">
                    <a href="#cara-kerja" class="rsh__btn">
                        <span>Lihat Cara Kerja</span>
                        <svg class="rsh__btn-icon" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2.2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>

        <!-- ── Scroll hint ── -->
        <div class="rsh__scroll" :class="{ 'rsh__scroll--in': visible }">
            <div class="rsh__scroll-mouse">
                <div class="rsh__scroll-dot"></div>
            </div>
            <span class="rsh__scroll-label">Scroll</span>
        </div>

    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const sectionRef = ref(null);
const visible    = ref(false);
const imgLoaded  = ref(false);

let observer;
onMounted(() => {
    setTimeout(() => { visible.value = true; }, 180);
});
onUnmounted(() => observer?.disconnect());
</script>

<style scoped>
/* ══════════════════════════════════════════════
   BASE SECTION
══════════════════════════════════════════════ */
.rsh {
    font-family: 'Inter', sans-serif;
    position: relative;
    background: #0e0200;
    min-height: 60vh;
    padding-top: 80px; /* clear fixed navbar */
    display: flex;
    align-items: center;
    overflow: hidden;
}

/* ══════════════════════════════════════════════
   BACKGROUND IMAGE (right half)
   ══════════════════════════════════════════════ */
.rsh__img-wrap {
    position: absolute;
    top: 80px; right: 2%;
    bottom: 20px;
    width: 50%;
    z-index: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: center;
}
.rsh__img {
    width: 100%; height: 100%;
    object-fit: contain;
    object-position: right center;
    opacity: 0;
    transform: scale(0.95);
    filter: drop-shadow(0px 0px 0px rgba(238, 91, 22, 0)) brightness(1) contrast(1);
    transition: opacity 1.2s ease, transform 18s ease, filter 1.2s ease;
    z-index: 1;
}
.rsh__img--loaded {
    opacity: 1;
    transform: scale(1.05);
    filter: drop-shadow(0px 0px 80px rgba(238, 91, 22, 0.25)) brightness(1.2) contrast(1.1);
}

/* Clean solid background, removed streaks and glows */

/* ══════════════════════════════════════════════
   CONTAINER / LAYOUT
══════════════════════════════════════════════ */
.rsh__container {
    position: relative; z-index: 2;
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    padding: 3rem 1.5rem 4rem;
    display: flex;
    align-items: center;
}

.rsh__left {
    max-width: 540px;
    display: flex; flex-direction: column;
    gap: 0;
}

/* ══════════════════════════════════════════════
   SHARED REVEAL
══════════════════════════════════════════════ */
.rsh__heading,
.rsh__quote,
.rsh__cta {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.rsh__in {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

/* Badge styles removed */

/* ══════════════════════════════════════════════
   HEADING
══════════════════════════════════════════════ */
.rsh__heading {
    font-size: clamp(2.2rem, 5.5vw, 3.8rem);
    font-weight: 800; line-height: 1.08;
    letter-spacing: -0.03em;
    color: #ffffff;
    margin: 0 0 1.4rem;
}
.rsh__heading-accent {
    display: block;
    background: linear-gradient(90deg, #F1B11C 0%, #EE5B16 45%, #B22102 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* ══════════════════════════════════════════════
   QUOTE
══════════════════════════════════════════════ */
.rsh__quote {
    font-size: clamp(0.88rem, 1.7vw, 1rem);
    line-height: 1.8; color: rgba(255,255,255,0.65);
    font-style: italic;
    padding: 1.2rem 1.5rem;
    background: rgba(255,255,255,0.04);
    border-left: 3px solid #EE5B16;
    border-radius: 0 12px 12px 0;
    margin-bottom: 2rem;
    position: relative;
}
.rsh__qmark {
    font-family: Georgia, serif;
    font-size: 1.8rem; line-height: 0;
    color: rgba(241,177,28,0.5);
    vertical-align: -0.4em;
    font-style: normal;
}

/* ══════════════════════════════════════════════
   CTA BUTTON
══════════════════════════════════════════════ */
.rsh__cta { margin-bottom: 0; }

.rsh__btn {
    display: inline-flex; align-items: center; gap: 10px;
    background: linear-gradient(135deg, #B22102 0%, #EE5B16 55%, #DB6E15 100%);
    color: #fff;
    font-size: 0.88rem; font-weight: 700;
    letter-spacing: 0.04em;
    padding: 0.85rem 2rem;
    border-radius: 999px;
    text-decoration: none;
    box-shadow:
        0 4px 24px rgba(178,33,2,0.35),
        0 0 0 0 rgba(238,91,22,0);
    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        filter 0.3s ease;
    position: relative;
    overflow: hidden;
}
.rsh__btn::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg,
        rgba(255,255,255,0.15) 0%,
        transparent 60%
    );
    border-radius: inherit;
    pointer-events: none;
}
.rsh__btn:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow:
        0 10px 40px rgba(178,33,2,0.45),
        0 0 0 4px rgba(238,91,22,0.15);
    filter: brightness(1.08);
}
.rsh__btn-icon {
    width: 17px; height: 17px;
    transition: transform 0.3s ease;
}
.rsh__btn:hover .rsh__btn-icon {
    transform: translateX(4px);
}

/* ══════════════════════════════════════════════
   SCROLL INDICATOR
══════════════════════════════════════════════ */
.rsh__scroll {
    position: absolute;
    bottom: 1.6rem; left: 50%; transform: translateX(-50%);
    z-index: 3;
    display: flex; flex-direction: column; align-items: center; gap: 7px;
    opacity: 0;
    transition: opacity 0.6s ease 1.2s;
}
.rsh__scroll--in { opacity: 1; }
.rsh__scroll-label {
    font-size: 0.62rem; letter-spacing: 0.15em;
    text-transform: uppercase; color: rgba(255,255,255,0.3);
}
.rsh__scroll-mouse {
    width: 22px; height: 34px; border-radius: 99px;
    border: 1.5px solid rgba(255,255,255,0.2);
    display: flex; justify-content: center; padding-top: 5px;
}
.rsh__scroll-dot {
    width: 3px; height: 6px; border-radius: 9px;
    background: #EE5B16;
    animation: rshBounce 2.2s ease-in-out infinite;
}
@keyframes rshBounce {
    0%   { transform: translateY(0);    opacity: 1; }
    80%  { transform: translateY(9px);  opacity: 0; }
    100% { transform: translateY(0);    opacity: 0; }
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Tablet
══════════════════════════════════════════════ */
@media (max-width: 900px) {
    .rsh { min-height: 55vh; padding-top: 72px; }
    .rsh__container { padding: 2.5rem 1.5rem 3.5rem; }
    .rsh__img-wrap { width: 44%; top: 72px; }
    .rsh__left { max-width: 460px; }
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Mobile
══════════════════════════════════════════════ */
@media (max-width: 640px) {
    .rsh { min-height: auto; padding-top: 80px; flex-direction: column; }
    
    .rsh__img-wrap {
        position: relative;
        width: 100%;
        height: 280px;
        top: auto; right: auto; bottom: auto;
        margin-top: 1rem;
    }
    .rsh__img {
        object-fit: contain;
        object-position: center;
        transform: scale(1) !important;
    }
    .rsh__container {
        padding: 1rem 1.25rem 3rem;
    }
    .rsh__left { max-width: 100%; }
    .rsh__quote { padding: 1rem 1.1rem; }
    .rsh__scroll { display: none; }
}

/* ══════════════════════════════════════════════
   RESPONSIVE — Small Mobile
══════════════════════════════════════════════ */
@media (max-width: 420px) {
    .rsh__container { padding: 6.5rem 1rem 2.5rem; }
}
</style>
