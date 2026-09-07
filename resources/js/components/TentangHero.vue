<template>
    <section class="th relative overflow-hidden flex items-center justify-center">

        <!-- Background photo -->
        <img
            src="/images/OPENING.jpeg"
            alt="EcoBurner Background"
            class="th__photo absolute inset-0 w-full h-full object-cover"
            :class="{ 'th__photo--loaded': imgLoaded }"
            @load="imgLoaded = true"
        />

        <!-- Gradient overlay: dark at top (for navbar) + dark vignette -->
        <div class="th__overlay absolute inset-0"></div>

        <!-- Animated grain texture -->
        <div class="th__grain absolute inset-0 pointer-events-none"></div>

        <!-- Subtle animated light streak -->
        <div class="th__streak th__streak--1"></div>
        <div class="th__streak th__streak--2"></div>

        <!-- Content: centered -->
        <div class="th__content relative z-10 flex flex-col items-center text-center px-6 lg:px-16">


            <!-- Main heading -->
            <h1 class="th__heading" :class="{ 'th__heading--in': visible }">
                Tentang
                <span class="th__heading-accent">EcoBurner</span>
            </h1>

            <!-- Divider -->
            <div class="th__bar" :class="{ 'th__bar--in': visible }">
                <span class="th__bar-long"></span>
                <span class="th__bar-dot"></span>
                <span class="th__bar-long"></span>
            </div>

            <!-- Quote -->
            <blockquote class="th__quote" :class="{ 'th__quote--in': visible }">
                <span class="th__qmark">"</span>
                Program inovasi sosial yang menggabungkan teknologi tepat guna
                dan edukasi masyarakat untuk mendukung pengelolaan sampah
                yang lebih baik.
                <span class="th__qmark">"</span>
            </blockquote>

            <!-- Scroll indicator -->
            <div class="th__scroll" :class="{ 'th__scroll--in': visible }">
                <div class="th__scroll-mouse">
                    <div class="th__scroll-dot"></div>
                </div>
                <span class="th__scroll-label">Scroll</span>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const visible = ref(false);
const imgLoaded = ref(false);

onMounted(() => {
    setTimeout(() => { visible.value = true; }, 200);
});
</script>

<style scoped>
/* ── Section ────────────────────────────────────────── */
.th {
    font-family: 'Inter', sans-serif;
    background: #1a0503;
    /* 40–50vh on all screens, min so content never gets clipped */
    min-height: 45vh;
}

/* ── Content padding ── */
.th__content {
    padding-top: 9rem;
    padding-bottom: 3rem;
    width: 100%;
}

/* Tablet */
@media (max-width: 1024px) {
    .th { min-height: 42vh; }
    .th__content { padding-top: 8rem; padding-bottom: 2.5rem; }
}

/* Mobile */
@media (max-width: 640px) {
    .th { min-height: 40vh; }
    .th__content { padding-top: 7rem; padding-bottom: 2rem; }
}

/* ── Photo ──────────────────────────────────────────── */
.th__photo {
    object-position: center center;
    opacity: 0;
    transition: opacity 1.2s ease;
    transform: scale(1.04);
    animation: photoKen 18s ease-in-out infinite alternate;
}
.th__photo--loaded { opacity: 1; }

@keyframes photoKen {
    from { transform: scale(1.04) translateX(0); }
    to   { transform: scale(1.0) translateX(-1%); }
}

/* ── Overlay ────────────────────────────────────────── */
.th__overlay {
    background:
        linear-gradient(to bottom,
            rgba(10,2,1,0.72) 0%,
            rgba(18,4,1,0.55) 40%,
            rgba(18,4,1,0.72) 80%,
            rgba(10,2,1,0.92) 100%
        ),
        radial-gradient(ellipse at center, transparent 30%, rgba(10,2,1,0.55) 100%);
}

/* ── Grain ──────────────────────────────────────────── */
.th__grain {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    opacity: 0.5;
}

/* ── Light streaks ──────────────────────────────────── */
.th__streak {
    position: absolute; pointer-events: none;
    width: 1px; height: 35%;
    background: linear-gradient(to bottom, transparent, rgba(241,177,28,0.25), transparent);
    border-radius: 9px;
}
.th__streak--1 { left: 28%; top: 10%; animation: streakFade 5s ease-in-out infinite; }
.th__streak--2 { right: 30%; top: 5%; animation: streakFade 7s ease-in-out infinite 2s; }
@keyframes streakFade {
    0%,100% { opacity: 0; transform: scaleY(0.7) translateY(0); }
    50%      { opacity: 1; transform: scaleY(1)   translateY(8px); }
}

/* ── Eyebrow tag ────────────────────────────────────── */
.th__tag {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(241,177,28,0.35);
    backdrop-filter: blur(10px);
    border-radius: 999px; padding: 6px 20px;
    font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em;
    text-transform: uppercase; color: #F1B11C;
    margin-bottom: 1.8rem;
    opacity: 0; transform: translateY(18px);
    transition: opacity 0.7s ease 0.1s, transform 0.7s ease 0.1s;
}
.th__tag--in { opacity: 1; transform: translateY(0); }
.th__tag-dot {
    width: 7px; height: 7px; border-radius: 50%; background: #F1B11C;
    animation: pulse 2s ease-in-out infinite;
}
@keyframes pulse { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.6);opacity:0.5} }

/* ── Heading ────────────────────────────────────────── */
.th__heading {
    font-size: clamp(3rem, 8vw, 7rem);
    font-weight: 800; line-height: 1.0; letter-spacing: -0.03em;
    color: #ffffff;
    margin-bottom: 1.2rem;
    opacity: 0; transform: translateY(28px);
    transition: opacity 0.8s ease 0.25s, transform 0.8s ease 0.25s;
}
.th__heading--in { opacity: 1; transform: translateY(0); }
.th__heading-accent {
    display: block;
    background: linear-gradient(90deg, #F1B11C 0%, #EE5B16 50%, #DB6E15 100%);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* ── Divider bar ────────────────────────────────────── */
.th__bar {
    display: flex; align-items: center; gap: 10px;
    margin-bottom: 2rem;
    opacity: 0; transform: scaleX(0.4);
    transition: opacity 0.6s ease 0.45s, transform 0.6s ease 0.45s;
}
.th__bar--in { opacity: 1; transform: scaleX(1); }
.th__bar-long {
    display: block; height: 2px; width: 56px; border-radius: 9px;
    background: linear-gradient(90deg, transparent, #EE5B16, transparent);
}
.th__bar-dot {
    display: block; width: 7px; height: 7px; border-radius: 50%;
    background: #F1B11C;
    box-shadow: 0 0 10px #F1B11C;
}

/* ── Quote ──────────────────────────────────────────── */
.th__quote {
    max-width: 680px;
    font-size: clamp(1.05rem, 2.2vw, 1.3rem);
    line-height: 1.75; color: rgba(255,255,255,0.78);
    font-style: italic; font-weight: 400;
    padding: 1.6rem 2rem;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    backdrop-filter: blur(14px);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.07);
    margin-bottom: 3.5rem;
    opacity: 0; transform: translateY(22px);
    transition: opacity 0.8s ease 0.55s, transform 0.8s ease 0.55s;
}
.th__quote--in { opacity: 1; transform: translateY(0); }
.th__qmark {
    font-family: Georgia, serif; font-size: 2.2rem;
    color: #F1B11C; line-height: 0; vertical-align: -0.45em;
    font-style: normal;
}

/* ── Scroll indicator ───────────────────────────────── */
.th__scroll {
    display: flex; flex-direction: column; align-items: center; gap: 8px;
    opacity: 0;
    transition: opacity 0.6s ease 1.4s;
}
.th__scroll--in { opacity: 1; }
.th__scroll-label {
    font-size: 0.65rem; letter-spacing: 0.15em; text-transform: uppercase;
    color: rgba(255,255,255,0.35);
}
.th__scroll-mouse {
    width: 22px; height: 36px; border-radius: 99px;
    border: 1.5px solid rgba(255,255,255,0.25);
    display: flex; justify-content: center; padding-top: 6px;
}
.th__scroll-dot {
    width: 3px; height: 7px; border-radius: 9px;
    background: #F1B11C;
    animation: scrollBounce 2.2s ease-in-out infinite;
}
@keyframes scrollBounce {
    0%     { transform: translateY(0);   opacity: 1; }
    80%    { transform: translateY(10px); opacity: 0; }
    100%   { transform: translateY(0);   opacity: 0; }
}

/* ── Responsive ─────────────────────────────────────── */
@media (max-width: 768px) {
    .th__quote { padding: 1.2rem 1.4rem; }
    .th__heading-accent { display: inline; }
}
</style>
