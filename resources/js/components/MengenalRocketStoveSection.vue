<template>
    <section class="mrs-section" ref="sectionRef" id="mengenal-rocket-stove">

        <!-- subtle background texture -->
        <div class="mrs-bg-dots" aria-hidden="true"></div>
        <div class="mrs-bg-glow mrs-bg-glow--l" aria-hidden="true"></div>
        <div class="mrs-bg-glow mrs-bg-glow--r" aria-hidden="true"></div>

        <div class="mrs-wrapper">

            <!-- ══ HEADER ══ -->
            <header class="mrs-header" :class="{ 'mrs--in': visible }">
                <h2 class="mrs-heading">
                    Mengenal <em class="mrs-heading-em">Rocket Stove</em>
                </h2>

                <p class="mrs-desc">
                    Rocket Stove merupakan alat pembakaran yang dirancang untuk membantu proses pembakaran
                    menjadi lebih terarah melalui sistem aliran udara alami. Dengan desain yang sederhana,
                    alat ini dapat membantu menghasilkan pembakaran yang lebih optimal dibandingkan
                    pembakaran sampah secara terbuka.
                </p>
            </header>

            <!-- ══ PHOTO ROW ══ -->
            <div class="mrs-row" :class="{ 'mrs--row-in': visible }">
                <div
                    v-for="(view, i) in views"
                    :key="view.id"
                    class="mrs-card"
                    :style="{ '--ci': i }"
                    @click="openLightbox(i)"
                    :aria-label="`Lihat ${view.label}`"
                    role="button"
                    tabindex="0"
                    @keydown.enter="openLightbox(i)"
                    @keydown.space.prevent="openLightbox(i)"
                >
                    <!-- photo -->
                    <div class="mrs-photo">
                        <img
                            :src="view.src"
                            :alt="view.label"
                            class="mrs-photo-img"
                            loading="lazy"
                        />
                        <!-- hover zoom icon -->
                        <div class="mrs-photo-hover" aria-hidden="true">
                            <svg class="mrs-zoom-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"/>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                <line x1="11" y1="8" x2="11" y2="14"/>
                                <line x1="8" y1="11" x2="14" y2="11"/>
                            </svg>
                        </div>
                    </div>

                    <!-- caption below photo -->
                    <div class="mrs-caption">
                        <span class="mrs-caption-num">{{ String(i + 1).padStart(2, '0') }}</span>
                        <div class="mrs-caption-info">
                            <strong class="mrs-caption-title">{{ view.label }}</strong>
                            <span class="mrs-caption-sub">Klik untuk perbesar</span>
                        </div>
                        <span class="mrs-caption-arrow" aria-hidden="true">
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 8h10M9 4l4 4-4 4"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>



        </div>

        <!-- ══ LIGHTBOX ══ -->
        <Teleport to="body">
            <Transition name="lb">
                <div
                    v-if="lbOpen"
                    class="mrs-lb"
                    @click.self="closeLb"
                    role="dialog"
                    aria-modal="true"
                    :aria-label="views[lbIdx].label"
                >
                    <!-- close -->
                    <button class="mrs-lb-close" @click="closeLb" aria-label="Tutup">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                            <line x1="18" y1="6" x2="6" y2="18"/>
                            <line x1="6" y1="6" x2="18" y2="18"/>
                        </svg>
                    </button>

                    <!-- counter -->
                    <div class="mrs-lb-counter">
                        <span class="mrs-lb-count-cur">{{ String(lbIdx + 1).padStart(2, '0') }}</span>
                        <span class="mrs-lb-count-sep">/</span>
                        <span class="mrs-lb-count-tot">{{ String(views.length).padStart(2, '0') }}</span>
                    </div>

                    <!-- image -->
                    <div class="mrs-lb-stage">
                        <button class="mrs-lb-nav mrs-lb-nav--l" @click="lbPrev" aria-label="Sebelumnya">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 18l-6-6 6-6"/>
                            </svg>
                        </button>

                        <Transition name="lb-img" mode="out-in">
                            <figure :key="lbIdx" class="mrs-lb-fig">
                                <img
                                    :src="views[lbIdx].src"
                                    :alt="views[lbIdx].label"
                                    class="mrs-lb-img"
                                />
                                <figcaption class="mrs-lb-cap">{{ views[lbIdx].label }}</figcaption>
                            </figure>
                        </Transition>

                        <button class="mrs-lb-nav mrs-lb-nav--r" @click="lbNext" aria-label="Berikutnya">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18l6-6-6-6"/>
                            </svg>
                        </button>
                    </div>

                    <!-- thumb strip -->
                    <div class="mrs-lb-thumbs">
                        <button
                            v-for="(v, i) in views"
                            :key="v.id"
                            class="mrs-lb-thumb"
                            :class="{ 'mrs-lb-thumb--on': lbIdx === i }"
                            @click="lbIdx = i"
                            :aria-label="v.label"
                        >
                            <img :src="v.src" :alt="v.label" />
                        </button>
                    </div>
                </div>
            </Transition>
        </Teleport>

    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

/* ── Section visibility ── */
const sectionRef = ref(null);
const visible    = ref(false);
let   observer;

/* ── Lightbox state ── */
const lbOpen = ref(false);
const lbIdx  = ref(0);

const views = [
    { id: 'depan',    label: 'Tampak Depan',    src: '/images/depan.png'    },
    { id: 'samping',  label: 'Tampak Samping',  src: '/images/samping.png'  },
    { id: 'belakang', label: 'Tampak Belakang', src: '/images/belakang.png' },
    { id: 'atas',     label: 'Tampak Atas',     src: '/images/atas.png'     },
];

function openLightbox(i) {
    lbIdx.value  = i;
    lbOpen.value = true;
    document.body.style.overflow = 'hidden';
}
function closeLb() {
    lbOpen.value = false;
    document.body.style.overflow = '';
}
function lbNext() { lbIdx.value = (lbIdx.value + 1) % views.length; }
function lbPrev() { lbIdx.value = (lbIdx.value - 1 + views.length) % views.length; }

function onKey(e) {
    if (!lbOpen.value) return;
    if (e.key === 'Escape')     closeLb();
    if (e.key === 'ArrowRight') lbNext();
    if (e.key === 'ArrowLeft')  lbPrev();
}

onMounted(() => {
    const node = sectionRef.value;
    if (!node) return;
    observer = new IntersectionObserver(
        ([entry]) => { if (entry.isIntersecting) { visible.value = true; observer.disconnect(); } },
        { threshold: 0.1 }
    );
    observer.observe(node);
    window.addEventListener('keydown', onKey);
});

onUnmounted(() => {
    observer?.disconnect();
    window.removeEventListener('keydown', onKey);
    document.body.style.overflow = '';
});
</script>

<style scoped>
/* ══════════════════════════════════════
   SECTION
══════════════════════════════════════ */
.mrs-section {
    font-family: 'Inter', sans-serif;
    position: relative;
    padding: 6rem 0 5rem;
    background: #ffffff;
    overflow: hidden;
}

/* subtle warm dot grid */
.mrs-bg-dots {
    position: absolute; inset: 0; z-index: 0; pointer-events: none;
    background-image: radial-gradient(rgba(201,75,7,0.07) 1px, transparent 1px);
    background-size: 26px 26px;
}

/* corner glow blobs */
.mrs-bg-glow {
    position: absolute; border-radius: 9999px;
    pointer-events: none; z-index: 0; filter: blur(100px);
}
.mrs-bg-glow--l {
    width: 500px; height: 400px;
    top: -150px; left: -180px;
    background: rgba(238,91,22,0.07);
}
.mrs-bg-glow--r {
    width: 420px; height: 360px;
    bottom: -120px; right: -140px;
    background: rgba(241,177,28,0.08);
}

/* ══════════════════════════════════════
   WRAPPER
══════════════════════════════════════ */
.mrs-wrapper {
    position: relative; z-index: 1;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
}

/* ══════════════════════════════════════
   HEADER
══════════════════════════════════════ */
.mrs-header {
    text-align: center;
    margin-bottom: 3.5rem;
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.mrs--in { opacity: 1 !important; transform: none !important; }

/* eyebrow */
.mrs-eyebrow {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 0.72rem; font-weight: 700;
    letter-spacing: 0.14em; text-transform: uppercase;
    color: #C94B07;
    margin-bottom: 1rem;
}
.mrs-eyebrow-icon {
    width: 14px; height: 14px;
}

/* heading */
.mrs-heading {
    font-size: clamp(2rem, 4.5vw, 3.2rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.03em;
    color: #1a0800;
    margin: 0 0 1.1rem;
    font-style: normal;
}
.mrs-heading-em {
    font-style: normal;
    background: linear-gradient(100deg, #B22102 0%, #EE5B16 55%, #F1B11C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* description */
.mrs-desc {
    font-size: clamp(0.9rem, 1.7vw, 1.03rem);
    line-height: 1.9;
    color: #6b4a3a;
    max-width: 660px;
    margin: 0 auto;
}

/* ══════════════════════════════════════
   PHOTO ROW  — 4 cards in one line
══════════════════════════════════════ */
.mrs-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.1rem;
    margin-bottom: 2.8rem;
}

/* stagger-reveal each card */
.mrs-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    border: 1.5px solid #f0e8e2;
    box-shadow:
        0 2px 6px rgba(0,0,0,0.05),
        0 6px 20px rgba(178,34,2,0.06);
    opacity: 0;
    transform: translateY(28px);
    transition:
        opacity 0.6s cubic-bezier(0.22,1,0.36,1) calc(var(--ci,0) * 100ms),
        transform 0.6s cubic-bezier(0.22,1,0.36,1) calc(var(--ci,0) * 100ms),
        box-shadow 0.3s ease,
        border-color 0.3s ease;
    outline: none;
}
.mrs--row-in .mrs-card {
    opacity: 1;
    transform: none;
}
.mrs-card:hover,
.mrs-card:focus-visible {
    box-shadow:
        0 8px 20px rgba(178,34,2,0.13),
        0 20px 40px rgba(0,0,0,0.09);
    border-color: rgba(238,91,22,0.35);
    transform: translateY(-6px) !important;
}
.mrs-card:focus-visible {
    outline: 3px solid #EE5B16;
    outline-offset: 3px;
}

/* photo */
.mrs-photo {
    position: relative;
    aspect-ratio: 3/4;
    overflow: hidden;
    background: #f9f0eb;
}
.mrs-photo-img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.55s cubic-bezier(0.22,1,0.36,1);
}
.mrs-card:hover .mrs-photo-img,
.mrs-card:focus-visible .mrs-photo-img {
    transform: scale(1.07);
}

/* hover overlay + zoom icon */
.mrs-photo-hover {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(
        to bottom,
        rgba(178,34,2,0.0) 0%,
        rgba(178,34,2,0.45) 100%
    );
    opacity: 0;
    transition: opacity 0.3s ease;
}
.mrs-card:hover .mrs-photo-hover,
.mrs-card:focus-visible .mrs-photo-hover {
    opacity: 1;
}
.mrs-zoom-icon {
    width: 38px; height: 38px;
    color: #fff;
    filter: drop-shadow(0 2px 6px rgba(0,0,0,0.35));
    transform: scale(0.7);
    transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1);
}
.mrs-card:hover .mrs-zoom-icon,
.mrs-card:focus-visible .mrs-zoom-icon {
    transform: scale(1);
}

/* caption strip below photo */
.mrs-caption {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 0.85rem 0.95rem;
    background: #fff;
    border-top: 1.5px solid #f5ece6;
}

.mrs-caption-num {
    font-size: 0.68rem;
    font-weight: 800;
    color: #EE5B16;
    letter-spacing: 0.06em;
    font-variant-numeric: tabular-nums;
    flex-shrink: 0;
    opacity: 0.7;
}

.mrs-caption-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 1px;
}
.mrs-caption-title {
    font-size: 0.82rem;
    font-weight: 700;
    color: #1a0800;
    line-height: 1.2;
}
.mrs-caption-sub {
    font-size: 0.67rem;
    color: #a88070;
    font-weight: 500;
}

.mrs-caption-arrow {
    flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    width: 28px; height: 28px;
    border-radius: 8px;
    background: rgba(238,91,22,0.06);
    color: #C94B07;
    transition: background 0.25s, color 0.25s, transform 0.25s;
}
.mrs-caption-arrow svg { width: 14px; height: 14px; }
.mrs-card:hover .mrs-caption-arrow,
.mrs-card:focus-visible .mrs-caption-arrow {
    background: linear-gradient(135deg, #EE5B16, #B22102);
    color: #fff;
    transform: translateX(2px);
}

/* ══════════════════════════════════════
    box-shadow: 0 1px 4px rgba(178,34,2,0.07);
    white-space: nowrap;
    opacity: 0;
    transform: translateY(10px) scale(0.96);
    transition:
        background 0.25s, color 0.25s, border-color 0.25s, box-shadow 0.25s,
        opacity 0.4s ease calc(var(--chi,0) * 65ms + 0.55s),
        transform 0.4s cubic-bezier(0.22,1,0.36,1) calc(var(--chi,0) * 65ms + 0.55s);
    cursor: default;
}
.mrs--chips-in .mrs-chip { opacity: 1; transform: none; }
.mrs-chip:hover {
    background: linear-gradient(135deg, #EE5B16, #B22102);
    color: #fff;
    border-color: transparent;
    box-shadow: 0 4px 14px rgba(178,34,2,0.28);
    transform: translateY(-2px) !important;
}

/* ══════════════════════════════════════
   LIGHTBOX
══════════════════════════════════════ */
.mrs-lb {
    position: fixed; inset: 0; z-index: 9999;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 1.5rem;
    background: rgba(16,4,0,0.92);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
}

/* close btn */
.mrs-lb-close {
    position: absolute; top: 1.2rem; right: 1.2rem;
    width: 44px; height: 44px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.85);
    cursor: pointer;
    transition: background 0.2s, transform 0.25s;
}
.mrs-lb-close svg { width: 18px; height: 18px; }
.mrs-lb-close:hover { background: rgba(238,91,22,0.65); transform: rotate(90deg) scale(1.08); }

/* counter */
.mrs-lb-counter {
    position: absolute; top: 1.4rem; left: 1.5rem;
    display: flex; align-items: baseline; gap: 3px;
    font-variant-numeric: tabular-nums;
}
.mrs-lb-count-cur { font-size: 1.4rem; font-weight: 800; color: #EE5B16; }
.mrs-lb-count-sep { font-size: 1rem; color: rgba(255,255,255,0.3); margin: 0 2px; }
.mrs-lb-count-tot { font-size: 0.9rem; color: rgba(255,255,255,0.4); }

/* stage */
.mrs-lb-stage {
    display: flex; align-items: center; gap: 1rem;
    width: 100%; max-width: 880px;
    flex: 1; max-height: 70vh;
}

.mrs-lb-nav {
    width: 50px; height: 50px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.85);
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
}
.mrs-lb-nav svg { width: 20px; height: 20px; }
.mrs-lb-nav:hover { background: rgba(238,91,22,0.7); transform: scale(1.08); }

.mrs-lb-fig {
    flex: 1;
    display: flex; flex-direction: column;
    align-items: center;
    overflow: hidden;
    margin: 0;
}
.mrs-lb-img {
    max-width: 100%; max-height: 62vh;
    object-fit: contain;
    border-radius: 14px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    display: block;
}
.mrs-lb-cap {
    margin-top: 0.9rem;
    font-size: 0.85rem; font-weight: 700;
    color: rgba(255,255,255,0.75);
    text-transform: uppercase; letter-spacing: 0.12em;
    text-align: center;
}

/* thumbnail strip */
.mrs-lb-thumbs {
    display: flex; gap: 0.6rem;
    margin-top: 1.2rem;
    padding: 0.4rem;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 14px;
}
.mrs-lb-thumb {
    width: 72px; height: 56px;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid transparent;
    transition: border-color 0.2s, transform 0.2s, opacity 0.2s;
    opacity: 0.5;
    padding: 0;
    flex-shrink: 0;
}
.mrs-lb-thumb img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
}
.mrs-lb-thumb--on {
    border-color: #EE5B16;
    opacity: 1;
    transform: translateY(-3px);
}
.mrs-lb-thumb:hover:not(.mrs-lb-thumb--on) {
    opacity: 0.8;
    transform: translateY(-2px);
}

/* transitions */
.lb-enter-active, .lb-leave-active { transition: opacity 0.22s ease; }
.lb-enter-from, .lb-leave-to { opacity: 0; }

.lb-img-enter-active, .lb-img-leave-active { transition: opacity 0.18s ease, transform 0.18s ease; }
.lb-img-enter-from { opacity: 0; transform: scale(0.96) translateX(10px); }
.lb-img-leave-to   { opacity: 0; transform: scale(1.03) translateX(-10px); }

/* ══════════════════════════════════════
   RESPONSIVE — Tablet (≤900px) → 2 cols
══════════════════════════════════════ */
@media (max-width: 900px) {
    .mrs-section { padding: 4.5rem 0 4rem; }
    .mrs-row {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    .mrs-photo { aspect-ratio: 4/3; }
}

/* ══════════════════════════════════════
   RESPONSIVE — Mobile (≤520px) → scroll row
══════════════════════════════════════ */
@media (max-width: 520px) {
    .mrs-section { padding: 3.5rem 0 3rem; }
    .mrs-header { margin-bottom: 2.2rem; }
    .mrs-row {
        grid-template-columns: unset;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 0.85rem;
        padding-bottom: 0.5rem;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        margin: 0 -1.5rem 2.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .mrs-row::-webkit-scrollbar { display: none; }
    .mrs-card {
        min-width: 68vw;
        max-width: 68vw;
        flex-shrink: 0;
        scroll-snap-align: start;
    }
    .mrs-photo { aspect-ratio: 3/4; }
    .mrs-lb-thumbs { display: none; }
    .mrs-lb-stage { gap: 0.5rem; }
    .mrs-lb-nav { width: 40px; height: 40px; }
}

/* ══════════════════════════════════════
   REDUCED MOTION
══════════════════════════════════════ */
@media (prefers-reduced-motion: reduce) {
    .mrs-header, .mrs-card, .mrs-chips, .mrs-chip,
    .mrs-photo-img, .mrs-photo-hover, .mrs-zoom-icon,
    .mrs-lb, .mrs-lb-fig { animation: none !important; transition: none !important; }
}
</style>
