<template>
    <section class="srs-section" ref="sectionRef" id="struktur-rocket-stove">

        <div class="srs-bg-glow srs-bg-glow--tl" aria-hidden="true"></div>
        <div class="srs-bg-glow srs-bg-glow--br" aria-hidden="true"></div>

        <div class="srs-wrap">

            <!-- ══ HEADER ══ -->
            <header class="srs-header" :class="{ 'srs--in': visible }">
                <h2 class="srs-heading">
                    Struktur <span class="srs-heading-hi">Rocket Stove</span>
                </h2>
                <p class="srs-lead">
                    Setiap bagian memiliki peran penting dalam menghasilkan
                    pembakaran yang terarah dan optimal.
                </p>
            </header>

            <!-- ══ DIAGRAM — desktop ≥ 900px ══ -->
            <div class="srs-diagram" ref="diagramRef" :class="{ 'srs-diagram--in': visible }">

                <!-- SVG connector lines (dynamically computed via refs) -->
                <svg class="srs-svg" ref="svgRef" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <!-- Normal arrowhead -->
                        <marker id="arr" markerWidth="8" markerHeight="8" refX="7" refY="4" orient="auto">
                            <path d="M0,0.5 L7,4 L0,7.5 L1.8,4 Z" fill="#EE5B16"/>
                        </marker>
                        <!-- Active arrowhead (gold) -->
                        <marker id="arr-on" markerWidth="8" markerHeight="8" refX="7" refY="4" orient="auto">
                            <path d="M0,0.5 L7,4 L0,7.5 L1.8,4 Z" fill="#F1B11C"/>
                        </marker>
                    </defs>

                    <path
                        v-for="(line, li) in svgLines"
                        :key="'l-' + line.id"
                        :d="line.d"
                        fill="none"
                        class="srs-svgl"
                        :class="{
                            'srs-svgl--on':  activeId === line.id,
                            'srs-svgl--dim': activeId && activeId !== line.id,
                            'srs-svgl--vis': diagramVisible,
                        }"
                        :stroke="activeId === line.id ? '#F1B11C' : '#EE5B16'"
                        :stroke-width="activeId === line.id ? 2 : 1.5"
                        :stroke-dasharray="activeId === line.id ? '0' : '6 4'"
                        stroke-linecap="round"
                        :stroke-opacity="activeId ? (activeId === line.id ? 1 : 0.12) : 0.5"
                        :marker-end="activeId === line.id ? 'url(#arr-on)' : 'url(#arr)'"
                        :style="{ animationDelay: li * 0.08 + 's' }"
                    />
                </svg>

                <!-- LEFT CARDS (Cerobong + Ruang Pembakaran) -->
                <div
                    v-for="(p, i) in leftParts"
                    :key="'lw-' + p.id"
                    class="srs-wrap-card srs-wrap-card--l"
                    :ref="(el) => { if (el) cardRefs[p.id] = el; else delete cardRefs[p.id]; }"
                    :style="{ '--si': i }"
                    @mouseenter="activeId = p.id"
                    @mouseleave="activeId = null"
                    @focus="activeId = p.id"
                    @blur="activeId = null"
                    tabindex="0"
                >
                    <div
                        class="srs-card"
                        :class="{
                            'srs-card--on':  activeId === p.id,
                            'srs-card--dim': activeId && activeId !== p.id,
                        }"
                    >
                        <span class="srs-card-num">{{ p.num }}</span>
                        <h3 class="srs-card-h">{{ p.title }}</h3>
                        <p class="srs-card-p">{{ p.desc }}</p>
                    </div>
                </div>

                <!-- CENTER IMAGE + HOTSPOTS -->
                <div class="srs-center" ref="centerRef">
                    <div class="srs-ring srs-ring--1" aria-hidden="true"></div>
                    <div class="srs-ring srs-ring--2" aria-hidden="true"></div>

                    <div class="srs-imgbox">
                        <img
                            src="/images/struktur.png"
                            alt="Struktur Rocket Stove"
                            class="srs-img"
                            :class="{ 'srs-img--on': imgLoaded }"
                            @load="onImgLoad"
                        />
                    </div>

                    <!-- Hotspot buttons on image -->
                    <button
                        v-for="(p, hi) in allParts"
                        :key="'hs-' + p.id"
                        class="srs-hs"
                        :class="{
                            'srs-hs--on':  activeId === p.id,
                            'srs-hs--dim': activeId && activeId !== p.id,
                        }"
                        :ref="(el) => { if (el) hsRefs[p.id] = el; else delete hsRefs[p.id]; }"
                        :style="{ top: p.y, left: p.x, '--hi': hi }"
                        @mouseenter="activeId = p.id"
                        @mouseleave="activeId = null"
                        :aria-label="p.title"
                        :title="p.title"
                    >
                        <span class="srs-hs-pulse" aria-hidden="true"></span>
                        <span class="srs-hs-ring" aria-hidden="true"></span>
                        <span class="srs-hs-dot">{{ p.num }}</span>
                    </button>
                </div>

                <!-- RIGHT CARDS (Saluran Udara + Rangka Utama) -->
                <div
                    v-for="(p, i) in rightParts"
                    :key="'rw-' + p.id"
                    class="srs-wrap-card srs-wrap-card--r"
                    :ref="(el) => { if (el) cardRefs[p.id] = el; else delete cardRefs[p.id]; }"
                    :style="{ '--si': i }"
                    @mouseenter="activeId = p.id"
                    @mouseleave="activeId = null"
                    @focus="activeId = p.id"
                    @blur="activeId = null"
                    tabindex="0"
                >
                    <div
                        class="srs-card"
                        :class="{
                            'srs-card--on':  activeId === p.id,
                            'srs-card--dim': activeId && activeId !== p.id,
                        }"
                    >
                        <span class="srs-card-num">{{ p.num }}</span>
                        <h3 class="srs-card-h">{{ p.title }}</h3>
                        <p class="srs-card-p">{{ p.desc }}</p>
                    </div>
                </div>

            </div><!-- /diagram -->

            <!-- ══ MOBILE VIEW ══ -->
            <div class="srs-mobile" :class="{ 'srs-mobile--in': visible }">
                <div class="srs-mob-img-box">
                    <img src="/images/struktur.png" alt="Struktur Rocket Stove" class="srs-mob-img" />
                </div>
                <div class="srs-mob-grid">
                    <div
                        v-for="(p, i) in allParts"
                        :key="'mc-' + p.id"
                        class="srs-mob-card"
                        :style="{ '--mi': i }"
                    >
                        <span class="srs-mob-num">{{ p.num }}</span>
                        <div class="srs-mob-body">
                            <strong class="srs-mob-h">{{ p.title }}</strong>
                            <span class="srs-mob-p">{{ p.desc }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /wrap -->
    </section>
</template>

<script setup>
import { ref, watch, onMounted, onUnmounted, nextTick } from 'vue';

/* ── State ── */
const sectionRef    = ref(null);
const diagramRef    = ref(null);
const svgRef        = ref(null);
const visible       = ref(false);
const diagramVisible = ref(false);
const activeId      = ref(null);
const imgLoaded     = ref(false);
const svgLines      = ref([]);

/* plain objects — no need for Vue reactivity on DOM refs */
const cardRefs = {};
const hsRefs   = {};

let sectionObs, resizeObs;

/* ── Data ── */
/* cardTop: vertical position of the card within the diagram
   y / x  : hotspot position as % within the image container  */
/* LEFT  → kiri: Cerobong (atas) + Saluran Udara (bawah)
   cardTop diatur agar pusat kartu sejajar dengan hotspot-nya
   sehingga garis konektor hampir horizontal = rapi */
const leftParts = [
    {
        id: 'cerobong', num: '01',
        title: 'Cerobong',
        desc:  'Mengarahkan panas dan asap ke atas.',
        cardTop: '40px',
        y: '10%', x: '50%',
    },
    {
        id: 'udara', num: '03',
        title: 'Saluran Udara',
        desc:  'Membantu memasok oksigen agar api tetap stabil.',
        cardTop: '500px',
        y: '67%', x: '28%',
    },
];

/* RIGHT → kanan: Ruang Pembakaran (atas) + Rangka Utama (bawah) */
const rightParts = [
    {
        id: 'ruang', num: '02',
        title: 'Ruang Pembakaran',
        desc:  'Tempat terjadinya proses pembakaran.',
        cardTop: '360px',
        y: '50%', x: '48%',
    },
    {
        id: 'rangka', num: '04',
        title: 'Rangka Utama',
        desc:  'Menjadi penopang seluruh bagian Rocket Stove.',
        cardTop: '640px',
        y: '84%', x: '50%',
    },
];

const allParts = [...leftParts, ...rightParts];

/* ── Compute SVG connector paths ── */
function calcLines() {
    if (!diagramRef.value) return;
    const base = diagramRef.value.getBoundingClientRect();
    if (base.width === 0) return;

    const lines = [];
    for (const p of allParts) {
        const cardEl = cardRefs[p.id];
        const hsEl   = hsRefs[p.id];
        if (!cardEl || !hsEl) continue;

        const cR = cardEl.getBoundingClientRect();
        const hR = hsEl.getBoundingClientRect();

        /* Hotspot centre relative to diagram */
        const hx = hR.left + hR.width  / 2 - base.left;
        const hy = hR.top  + hR.height / 2 - base.top;

        /* Set top exactly to hy. CSS `translate(..., -50%)` will keep it perfectly centered */
        cardEl.style.top = `${hy}px`;

        const isLeft = leftParts.some(lp => lp.id === p.id);

        /* Card anchor point using pure layout metrics (ignores CSS transform) */
        const cx = isLeft
            ? (cardEl.offsetLeft + cardEl.offsetWidth)
            : cardEl.offsetLeft;
        const cy = hy;

        /* Offset endpoint to not cover the hotspot number (radius is ~18px) */
        const endpointX = isLeft ? hx - 18 : hx + 18;

        /* Straight perfectly horizontal line */
        lines.push({
            id: p.id,
            d: `M ${cx.toFixed(1)} ${cy.toFixed(1)} L ${endpointX.toFixed(1)} ${hy.toFixed(1)}`,
        });
    }
    svgLines.value = lines;
}

async function onImgLoad() {
    imgLoaded.value = true;
    await nextTick();
    calcLines();
}

watch(visible, async (val) => {
    if (!val) return;
    await nextTick();
    calcLines();
    // slight delay so entrance animation doesn't mask lines
    setTimeout(() => { diagramVisible.value = true; }, 400);
});

onMounted(async () => {
    const node = sectionRef.value;
    if (!node) return;

    sectionObs = new IntersectionObserver(
        ([e]) => { if (e.isIntersecting) { visible.value = true; sectionObs.disconnect(); } },
        { threshold: 0.08 }
    );
    sectionObs.observe(node);

    await nextTick();
    calcLines();

    resizeObs = new ResizeObserver(() => nextTick().then(calcLines));
    if (diagramRef.value) resizeObs.observe(diagramRef.value);
});

onUnmounted(() => {
    sectionObs?.disconnect();
    resizeObs?.disconnect();
});
</script>

<style scoped>
/* ══════════════════════════════════════════
   SECTION
══════════════════════════════════════════ */
.srs-section {
    font-family: 'Inter', sans-serif;
    position: relative;
    padding: 4.5rem 0 3.5rem;
    background: #FFFFFF; /* Pure White Canvas */
    overflow: hidden;
}

.srs-bg-glow {
    position: absolute; border-radius: 9999px;
    pointer-events: none; z-index: 0; filter: blur(110px);
}
.srs-bg-glow--tl {
    width: 520px; height: 440px; top: -170px; left: -150px;
    background: radial-gradient(circle, rgba(238,91,22,0.12) 0%, transparent 70%);
}
.srs-bg-glow--br {
    width: 440px; height: 400px; bottom: -130px; right: -130px;
    background: radial-gradient(circle, rgba(241,177,28,0.12) 0%, transparent 70%);
}

/* ══════════════════════════════════════════
   WRAPPER
══════════════════════════════════════════ */
.srs-wrap {
    position: relative; z-index: 1;
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 1.5rem;
}

/* ══════════════════════════════════════════
   HEADER
══════════════════════════════════════════ */
.srs-header {
    text-align: center;
    margin-bottom: 1.5rem;
    opacity: 0; transform: translateY(22px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
.srs--in { opacity: 1 !important; transform: none !important; }

.srs-heading {
    font-size: clamp(2rem, 4.5vw, 3.4rem);
    font-weight: 800; line-height: 1.1;
    letter-spacing: -0.03em; color: #1F2937; /* Dark Gray */
    margin: 0 0 1.1rem;
}
.srs-heading-hi {
    color: #EE5B16; /* Solid Branding Orange */
}

.srs-lead {
    font-size: clamp(0.9rem, 1.7vw, 1.02rem);
    line-height: 1.85; color: rgba(108, 23, 18, 0.75);
    max-width: 560px; margin: 0 auto;
}

/* ══════════════════════════════════════════
   DIAGRAM  (desktop ≥ 900px)
══════════════════════════════════════════ */
.srs-diagram {
    position: relative;
    min-height: 590px; /* Compensate for pushed down image */
    margin-bottom: 0;
    opacity: 0; transform: translateY(24px);
    transition: opacity 0.8s ease 0.15s, transform 0.8s ease 0.15s;
}
.srs-diagram--in { opacity: 1; transform: none; }

/* SVG overlay */
.srs-svg {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    pointer-events: none; z-index: 2;
    overflow: visible;
}

.srs-svgl {
    opacity: 0;
    transition: stroke-opacity 0.3s ease, stroke 0.3s ease, stroke-width 0.3s ease, opacity 0.5s ease;
}
.srs-svgl--vis {
    opacity: 1;
    animation: srsMoveDash 1.6s linear infinite;
}
.srs-svgl--on {
    animation: none !important;
    opacity: 1 !important;
}
.srs-svgl--dim {
    animation-play-state: paused !important;
}

@keyframes srsMoveDash {
    to { stroke-dashoffset: -20; }
}

/* ── Card wrapper (handles entrance animation) ── */
.srs-wrap-card {
    position: absolute;
    width: 268px;
    z-index: 3;
    opacity: 0;
    cursor: default;
    outline: none;
}
.srs-wrap-card--l {
    left: 6%;
    transform: translate(-22px, -50%);
    transition:
        opacity 0.55s cubic-bezier(0.22,1,0.36,1) calc(var(--si,0) * 130ms + 0.3s),
        transform 0.55s cubic-bezier(0.22,1,0.36,1) calc(var(--si,0) * 130ms + 0.3s);
}
.srs-wrap-card--r {
    right: 6%;
    transform: translate(22px, -50%);
    transition:
        opacity 0.55s cubic-bezier(0.22,1,0.36,1) calc(var(--si,0) * 130ms + 0.3s),
        transform 0.55s cubic-bezier(0.22,1,0.36,1) calc(var(--si,0) * 130ms + 0.3s);
}
.srs-diagram--in .srs-wrap-card--l,
.srs-diagram--in .srs-wrap-card--r {
    opacity: 1; transform: translate(0, -50%);
}

/* ── Card inner (handles hover effect, independent of entrance) ── */
.srs-card {
    padding: 1.2rem 1.15rem;
    background: #FFFFFF;
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 16px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); /* Soft drop shadow */
    display: flex; flex-direction: column; gap: 0.45rem;
    transition: background 0.28s, border-color 0.28s, box-shadow 0.28s, transform 0.28s;
}
.srs-card--on {
    background: #ffffff;
    border-color: rgba(238,91,22,0.7);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(238,91,22,0.3);
    transform: scale(1.03);
}
.srs-card--dim { opacity: 0.32; }

.srs-card-num {
    font-size: 0.62rem; font-weight: 800;
    letter-spacing: 0.1em; text-transform: uppercase;
    color: #EE5B16; opacity: 0.85;
}
.srs-card-h {
    font-size: 0.88rem; font-weight: 800;
    color: #1F2937; line-height: 1.3; margin: 0; /* Dark gray */
}
.srs-card-p {
    font-size: 0.77rem; line-height: 1.68;
    color: #374151; margin: 0; /* Dark gray pekat */
}

/* ── Center image area ── */
.srs-center {
    position: absolute;
    left: 50%; top: 90px; /* Pushed down so rings don't overlap header text */
    transform: translateX(-50%);
    z-index: 1;
    display: flex; align-items: center; justify-content: center;
}

/* decorative rings */
.srs-ring {
    position: absolute; border-radius: 50%;
    border-style: solid; pointer-events: none;
}
.srs-ring--1 {
    width: 580px; height: 580px;
    border-width: 1px; border-color: rgba(0, 0, 0, 0.08); /* Faded gray */
    animation: srsRingSpin 22s linear infinite;
}
.srs-ring--2 {
    width: 480px; height: 480px;
    border-width: 1px; border-color: rgba(0, 0, 0, 0.05); /* Faded gray */
    animation: srsRingSpin 16s linear infinite reverse;
}
@keyframes srsRingSpin { to { transform: rotate(360deg); } }

.srs-imgbox {
    position: relative; z-index: 1;
    width: 420px;
    border-radius: 18px; overflow: hidden;
    box-shadow:
        0 0 0 1.5px rgba(238,91,22,0.15),
        0 32px 70px rgba(108,23,18,0.15),
        0 0 70px rgba(238,91,22,0.1);
}
.srs-img {
    width: 100%; display: block;
    object-fit: cover;
    opacity: 0;
    transition: opacity 0.9s ease;
}
.srs-img--on { opacity: 1; }

/* ── Hotspot markers ── */
.srs-hs {
    position: absolute;
    transform: translate(-50%, -50%);
    width: 36px; height: 36px;
    display: flex; align-items: center; justify-content: center;
    background: none; border: none;
    cursor: pointer; padding: 0; z-index: 5;
}

/* pulsing glow */
.srs-hs-pulse {
    position: absolute; inset: -10px; border-radius: 50%;
    background: radial-gradient(circle, rgba(238,91,22,0.28) 0%, transparent 70%);
    animation: srsHsPulse calc(2.2s + var(--hi, 0) * 0.35s) ease-in-out infinite;
    animation-delay: calc(var(--hi, 0) * 0.55s);
    pointer-events: none;
}
@keyframes srsHsPulse {
    0%, 100% { transform: scale(0.65); opacity: 0.7; }
    50%       { transform: scale(1.5);  opacity: 0; }
}
.srs-hs--on .srs-hs-pulse {
    background: radial-gradient(circle, rgba(241,177,28,0.4) 0%, transparent 70%);
    animation: srsHsPulseOn 1s ease-in-out infinite;
}
@keyframes srsHsPulseOn {
    0%, 100% { transform: scale(1);   opacity: 0.8; }
    50%       { transform: scale(1.8); opacity: 0; }
}

/* ring border */
.srs-hs-ring {
    position: absolute; inset: 0; border-radius: 50%;
    border: 1.5px solid rgba(238,91,22,0.55);
    pointer-events: none;
    transition: border-color 0.3s, transform 0.3s;
}
.srs-hs--on .srs-hs-ring {
    border-color: #F1B11C;
    transform: scale(1.35);
}

/* dot */
.srs-hs-dot {
    position: relative; z-index: 1;
    width: 24px; height: 24px; border-radius: 50%;
    background: linear-gradient(135deg, #EE5B16, #B22102);
    display: flex; align-items: center; justify-content: center;
    font-size: 0.55rem; font-weight: 800; color: #fff;
    box-shadow: 0 3px 10px rgba(178,34,2,0.55);
    transition: transform 0.35s cubic-bezier(0.34,1.56,0.64,1), background 0.3s, box-shadow 0.3s;
}
.srs-hs--on .srs-hs-dot {
    transform: scale(1.28);
    background: linear-gradient(135deg, #F1B11C, #EE5B16);
    box-shadow: 0 4px 18px rgba(241,177,28,0.65);
}
.srs-hs--dim { opacity: 0.35; }

/* ══════════════════════════════════════════
   MOBILE VIEW  (≤ 900px)
══════════════════════════════════════════ */
.srs-mobile { display: none; }

@media (max-width: 900px) {
    .srs-section { padding: 4.5rem 0 4rem; }
    .srs-diagram { display: none; }
    .srs-mobile {
        display: block;
        opacity: 0; transform: translateY(24px);
        transition: opacity 0.75s ease 0.2s, transform 0.75s ease 0.2s;
    }
    .srs-mobile--in { opacity: 1; transform: none; }
    .srs-header { margin-bottom: 2.5rem; }
}

.srs-mob-img-box {
    width: 100%; max-width: 320px;
    margin: 0 auto 2.5rem;
    border-radius: 18px; overflow: hidden;
    box-shadow: 0 16px 48px rgba(108,23,18,0.12), 0 0 40px rgba(238,91,22,0.1);
}
.srs-mob-img {
    width: 100%; display: block;
    object-fit: cover;
}

.srs-mob-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.9rem;
}

.srs-mob-card {
    display: flex; flex-direction: column; gap: 0.5rem;
    padding: 1.1rem 1rem;
    background: #FFFFFF;
    border: 1px solid rgba(0,0,0,0.05);
    border-radius: 14px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    opacity: 0; transform: translateY(16px);
    transition:
        background 0.25s, border-color 0.25s,
        opacity 0.5s ease calc(var(--mi,0) * 90ms + 0.3s),
        transform 0.5s cubic-bezier(0.22,1,0.36,1) calc(var(--mi,0) * 90ms + 0.3s);
}
.srs-mobile--in .srs-mob-card { opacity: 1; transform: none; }
.srs-mob-card:hover {
    background: #ffffff;
    border-color: rgba(238,91,22,0.5);
    box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.1);
}

.srs-mob-num {
    font-size: 0.62rem; font-weight: 800;
    letter-spacing: 0.1em; color: #EE5B16; opacity: 0.85;
}
.srs-mob-h {
    font-size: 0.85rem; font-weight: 800;
    color: #1F2937; line-height: 1.3; display: block;
}
.srs-mob-p {
    font-size: 0.76rem; line-height: 1.68;
    color: #374151; display: block;
}

/* ══════════════════════════════════════════
   SMALL MOBILE  (≤ 440px)
══════════════════════════════════════════ */
@media (max-width: 440px) {
    .srs-section { padding: 3.5rem 0 3rem; }
    .srs-mob-grid { grid-template-columns: 1fr; }
}

/* ══════════════════════════════════════════
   REDUCED MOTION
══════════════════════════════════════════ */
@media (prefers-reduced-motion: reduce) {
    .srs-header, .srs-diagram, .srs-mobile,
    .srs-mob-card, .srs-wrap-card,
    .srs-svgl, .srs-img, .srs-hs-pulse,
    .srs-hs-ring, .srs-ring {
        animation: none !important;
        transition: none !important;
    }
}
</style>
