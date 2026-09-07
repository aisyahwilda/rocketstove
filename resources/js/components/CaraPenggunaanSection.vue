<template>
  <section class="cp-section" ref="sectionRef" id="cara-penggunaan">
    
    <!-- ══ BACKGROUND DECORATIONS ══ -->
    <div class="cp-bg-pattern" aria-hidden="true"></div>
    <div class="cp-bg-glow cp-bg-glow--1" aria-hidden="true"></div>
    <div class="cp-bg-glow cp-bg-glow--2" aria-hidden="true"></div>

    <div class="cp-container">
      
      <!-- ══ HEADER ══ -->
      <header class="cp-header" :class="{ 'cp--in': visible }">
        <h2 class="cp-heading">
          Cara <span class="cp-heading-highlight">Penggunaan</span>
        </h2>
        <p class="cp-subtitle">
          Langkah demi langkah menyalakan dan menggunakan Rocket Stove untuk menghasilkan pembakaran yang maksimal, efisien, dan ramah lingkungan.
        </p>
      </header>

      <!-- ══ CARD GRID ══ -->
      <div class="cp-row" :class="{ 'cp--row-in': visible }">
        <div
          v-for="(step, i) in steps"
          :key="i"
          class="cp-card"
          :style="{ '--ci': i }"
          @click="openLightbox(i)"
          role="button"
          tabindex="0"
          :aria-label="`Lihat Langkah ${i + 1}: ${step.title}`"
          @keydown.enter="openLightbox(i)"
          @keydown.space.prevent="openLightbox(i)"
        >
          <!-- photo -->
          <div class="cp-photo">
            <img
              :src="`/images/${i + 1}.jpg`"
              :alt="step.title"
              class="cp-photo-img"
              loading="lazy"
            />
            <!-- hover zoom icon -->
            <div class="cp-photo-hover" aria-hidden="true">
              <svg class="cp-zoom-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"/>
                <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                <line x1="11" y1="8" x2="11" y2="14"/>
                <line x1="8" y1="11" x2="14" y2="11"/>
              </svg>
            </div>
          </div>

          <!-- content below photo -->
          <div class="cp-caption">
            <div class="cp-caption-header">
              <span class="cp-caption-num">LANGKAH {{ i + 1 }}</span>
              <span class="cp-caption-click">Klik untuk perbesar</span>
            </div>
            <h3 class="cp-caption-title">{{ step.title }}</h3>
            <p class="cp-caption-desc">{{ step.desc }}</p>
          </div>
        </div>
      </div>

    </div>

    <!-- ══ LIGHTBOX ══ -->
    <Teleport to="body">
      <Transition name="lb">
        <div
          v-if="lbOpen"
          class="cp-lb"
          @click.self="closeLb"
          role="dialog"
          aria-modal="true"
        >
          <!-- close -->
          <button class="cp-lb-close" @click="closeLb" aria-label="Tutup">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
              <line x1="18" y1="6" x2="6" y2="18"/>
              <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
          </button>

          <!-- counter -->
          <div class="cp-lb-counter">
            <span class="cp-lb-count-cur">{{ String(lbIdx + 1).padStart(2, '0') }}</span>
            <span class="cp-lb-count-sep">/</span>
            <span class="cp-lb-count-tot">{{ String(steps.length).padStart(2, '0') }}</span>
          </div>

          <!-- stage -->
          <div class="cp-lb-stage">
            <button class="cp-lb-nav cp-lb-nav--l" @click.stop="lbPrev" aria-label="Sebelumnya">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 18l-6-6 6-6"/>
              </svg>
            </button>

            <Transition name="lb-img" mode="out-in">
              <figure :key="lbIdx" class="cp-lb-fig">
                <img
                  :src="`/images/${lbIdx + 1}.jpg`"
                  :alt="steps[lbIdx].title"
                  class="cp-lb-img"
                />
                <figcaption class="cp-lb-cap">
                  <strong>Langkah {{ lbIdx + 1 }}: {{ steps[lbIdx].title }}</strong>
                  <p>{{ steps[lbIdx].desc }}</p>
                </figcaption>
              </figure>
            </Transition>

            <button class="cp-lb-nav cp-lb-nav--r" @click.stop="lbNext" aria-label="Berikutnya">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18l6-6-6-6"/>
              </svg>
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

const steps = [
  {
    title: 'Siapkan Alat & Bahan',
    desc: 'Siapkan unit Rocket Stove di tempat yang aman. Kumpulkan ranting, daun kering, atau kertas sebagai bahan bakar utama.'
  },
  {
    title: 'Masukkan Bahan Bakar',
    desc: 'Masukkan sedikit bahan bakar kering ke dalam ruang pembakaran. Jangan terlalu padat agar udara tetap bisa bersirkulasi.'
  },
  {
    title: 'Nyalakan Api',
    desc: 'Nyalakan api dari bagian bawah atau pintu masuk bahan bakar. Biarkan api menyala perlahan dan mulai membesar.'
  },
  {
    title: 'Tambahkan Sampah',
    desc: 'Setelah api stabil, tambahkan sampah kering secara bertahap. Hindari memasukkan terlalu banyak sekaligus agar api tidak mati.'
  },
  {
    title: 'Jaga Saluran Udara',
    desc: 'Pastikan saluran udara (air intake) tetap terbuka dan tidak tertutup abu agar sirkulasi oksigen tetap lancar.'
  },
  {
    title: 'Tunggu Hingga Selesai',
    desc: 'Tunggu proses pembakaran selesai sepenuhnya. Setelah api padam, biarkan abu mendingin sebelum dibersihkan.'
  }
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
function lbNext() { lbIdx.value = (lbIdx.value + 1) % steps.length; }
function lbPrev() { lbIdx.value = (lbIdx.value - 1 + steps.length) % steps.length; }

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
.cp-section {
    font-family: 'Inter', sans-serif;
    position: relative;
    padding: 7rem 0 6rem;
    background: #ffffff;
    overflow: hidden;
    border-top: 1px solid rgba(238,91,22,0.1);
}

.cp-bg-pattern {
    position: absolute; inset: 0; z-index: 0; pointer-events: none;
    background-image: radial-gradient(rgba(201,75,7,0.08) 1.5px, transparent 1.5px);
    background-size: 32px 32px; opacity: 0.6;
}

.cp-bg-glow {
    position: absolute; border-radius: 9999px;
    pointer-events: none; z-index: 0; filter: blur(100px);
}
.cp-bg-glow--1 {
    width: 500px; height: 500px;
    top: -150px; left: -180px;
    background: rgba(238,91,22,0.08);
}
.cp-bg-glow--2 {
    width: 420px; height: 420px;
    bottom: -120px; right: -140px;
    background: rgba(241,177,28,0.08);
}

.cp-container {
    position: relative; z-index: 1;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
}

/* ══════════════════════════════════════
   HEADER
══════════════════════════════════════ */
.cp-header {
    text-align: center;
    margin-bottom: 4rem;
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.cp--in { opacity: 1 !important; transform: none !important; }

.cp-badge {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 0.4rem 1.2rem;
    background: #fff; border: 1px solid rgba(238, 91, 22, 0.2);
    color: #C94B07; border-radius: 99px;
    font-size: 0.8rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 0.12em;
    margin-bottom: 1.2rem;
    box-shadow: 0 4px 15px rgba(238, 91, 22, 0.08);
}
.cp-badge-dot {
    width: 6px; height: 6px;
    background: #F1B11C; border-radius: 50%;
    box-shadow: 0 0 8px #F1B11C;
    animation: pulseDot 2s infinite;
}
@keyframes pulseDot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.5); }
}

.cp-heading {
    font-size: clamp(2.2rem, 4.5vw, 3.5rem);
    font-weight: 900; line-height: 1.1;
    letter-spacing: -0.03em; color: #1a0800;
    margin: 0 0 1.2rem;
}
.cp-heading-highlight {
    background: linear-gradient(135deg, #B22102, #EE5B16, #F1B11C);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}

.cp-subtitle {
    font-size: clamp(0.95rem, 1.8vw, 1.1rem);
    line-height: 1.8; color: #6b4a3a;
    max-width: 700px;
}

/* ══════════════════════════════════════
   CARD GRID
══════════════════════════════════════ */
.cp-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.cp-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    cursor: pointer;
    border: 1.5px solid #f0e8e2;
    box-shadow:
        0 4px 12px rgba(0,0,0,0.03),
        0 10px 30px rgba(178,34,2,0.04);
    opacity: 0;
    transform: translateY(30px);
    transition:
        opacity 0.6s cubic-bezier(0.22,1,0.36,1) calc(var(--ci,0) * 100ms),
        transform 0.6s cubic-bezier(0.22,1,0.36,1) calc(var(--ci,0) * 100ms),
        box-shadow 0.3s ease,
        border-color 0.3s ease;
    outline: none;
    display: flex;
    flex-direction: column;
}
.cp--row-in .cp-card {
    opacity: 1; transform: none;
}
.cp-card:hover, .cp-card:focus-visible {
    box-shadow:
        0 12px 30px rgba(178,34,2,0.1),
        0 24px 50px rgba(0,0,0,0.08);
    border-color: rgba(238,91,22,0.35);
    transform: translateY(-8px) !important;
}

/* photo */
.cp-photo {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
    background: #fdfaf7;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}
.cp-photo-img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
    transition: transform 0.6s cubic-bezier(0.22,1,0.36,1);
}
.cp-card:hover .cp-photo-img {
    transform: scale(1.08);
}

.cp-photo-hover {
    position: absolute; inset: 0;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(to bottom, rgba(178,34,2,0.0) 0%, rgba(178,34,2,0.4) 100%);
    opacity: 0; transition: opacity 0.3s ease;
}
.cp-card:hover .cp-photo-hover { opacity: 1; }
.cp-zoom-icon {
    width: 44px; height: 44px; color: #fff;
    filter: drop-shadow(0 4px 10px rgba(0,0,0,0.4));
    transform: scale(0.7);
    transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1);
}
.cp-card:hover .cp-zoom-icon { transform: scale(1); }

/* caption */
.cp-caption {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.cp-caption-header {
    display: flex; align-items: center; justify-content: space-between;
    margin-bottom: 0.8rem;
}
.cp-caption-num {
    font-size: 0.75rem; font-weight: 800; color: #EE5B16;
    letter-spacing: 0.08em; padding: 4px 10px;
    background: rgba(238,91,22,0.08); border-radius: 6px;
}
.cp-caption-click {
    font-size: 0.7rem; font-weight: 600; color: #a88070;
    opacity: 0; transform: translateX(-10px);
    transition: all 0.3s ease;
}
.cp-card:hover .cp-caption-click {
    opacity: 1; transform: translateX(0);
}

.cp-caption-title {
    font-size: 1.25rem; font-weight: 800; color: #1a0800;
    margin-bottom: 0.5rem; line-height: 1.3;
}
.cp-caption-desc {
    font-size: 0.95rem; color: #6b4a3a; line-height: 1.6;
}

/* ══════════════════════════════════════
   LIGHTBOX
══════════════════════════════════════ */
.cp-lb {
    position: fixed; inset: 0; z-index: 9999;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 1.5rem;
    background: rgba(16,4,0,0.92);
    backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px);
}

.cp-lb-close {
    position: absolute; top: 1.2rem; right: 1.2rem;
    width: 48px; height: 48px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.85); cursor: pointer;
    transition: all 0.3s ease; z-index: 10;
}
.cp-lb-close svg { width: 22px; height: 22px; }
.cp-lb-close:hover { background: rgba(238,91,22,0.7); transform: rotate(90deg) scale(1.1); }

.cp-lb-counter {
    position: absolute; top: 1.4rem; left: 1.5rem;
    display: flex; align-items: baseline; gap: 4px;
}
.cp-lb-count-cur { font-size: 1.5rem; font-weight: 800; color: #EE5B16; }
.cp-lb-count-sep { font-size: 1rem; color: rgba(255,255,255,0.3); margin: 0 4px; }
.cp-lb-count-tot { font-size: 0.95rem; color: rgba(255,255,255,0.4); }

.cp-lb-stage {
    display: flex; align-items: center; gap: 1.5rem;
    width: 100%; max-width: 1000px;
    flex: 1; max-height: 80vh;
}

.cp-lb-nav {
    width: 54px; height: 54px; flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.85); cursor: pointer;
    transition: all 0.2s; z-index: 10;
}
.cp-lb-nav svg { width: 24px; height: 24px; }
.cp-lb-nav:hover { background: rgba(238,91,22,0.7); transform: scale(1.1); color: #fff; }

.cp-lb-fig {
    flex: 1; display: flex; flex-direction: column; align-items: center;
    margin: 0;
}
.cp-lb-img {
    max-width: 100%; max-height: 55vh;
    object-fit: contain; border-radius: 16px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.5);
    display: block; margin-bottom: 1.5rem;
    background: #fdfaf7;
}
.cp-lb-cap {
    background: rgba(255,255,255,0.05);
    padding: 1.2rem 1.8rem; border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.1);
    max-width: 700px; text-align: center;
}
.cp-lb-cap strong {
    display: block; font-size: 1.3rem; color: #fff; margin-bottom: 0.4rem;
}
.cp-lb-cap p {
    font-size: 1rem; color: rgba(255,255,255,0.75); line-height: 1.6; margin: 0;
}

/* transitions */
.lb-enter-active, .lb-leave-active { transition: opacity 0.3s ease; }
.lb-enter-from, .lb-leave-to { opacity: 0; }
.lb-img-enter-active, .lb-img-leave-active { transition: opacity 0.2s ease, transform 0.2s ease; }
.lb-img-enter-from { opacity: 0; transform: scale(0.96) translateX(15px); }
.lb-img-leave-to   { opacity: 0; transform: scale(1.03) translateX(-15px); }

/* ══════════════════════════════════════
   RESPONSIVE
══════════════════════════════════════ */
@media (max-width: 1024px) {
    .cp-row { grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }
    .cp-lb-stage { max-width: 800px; }
}

@media (max-width: 768px) {
    .cp-section { padding: 5rem 0 4rem; }
    .cp-heading { font-size: 2.2rem; }
    .cp-row {
        grid-template-columns: unset;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 1.2rem;
        padding-bottom: 1rem;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        margin: 0 -1.5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .cp-row::-webkit-scrollbar { display: none; }
    .cp-card {
        min-width: 80vw;
        max-width: 80vw;
        flex-shrink: 0;
        scroll-snap-align: center;
        opacity: 1; /* override stagger on mobile */
        transform: none;
    }
    
    .cp-lb { padding: 1rem; }
    .cp-lb-stage { flex-direction: column; justify-content: center; gap: 1rem; }
    .cp-lb-nav { display: none; } 
    .cp-lb-img { max-height: 45vh; margin-bottom: 1rem; }
    .cp-lb-cap { padding: 1rem; }
    .cp-lb-cap strong { font-size: 1.15rem; }
    .cp-lb-cap p { font-size: 0.95rem; }
}

@media (prefers-reduced-motion: reduce) {
    .cp-card, .cp-header, .cp-photo-img, .cp-zoom-icon, .cp-caption-click {
        transition: none !important; animation: none !important; transform: none !important; opacity: 1 !important;
    }
}
</style>
