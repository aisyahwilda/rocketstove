<template>
  <section class="tp-section" id="tips-penggunaan">
    
    <!-- Background Decor -->
    <div class="tp-bg-pattern"></div>
    <div class="tp-glow tp-glow--left"></div>
    <div class="tp-glow tp-glow--right"></div>

    <div class="tp-container">
      
      <!-- Header -->
      <header class="tp-header" v-animate-on-scroll>
        <div class="tp-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="tp-badge-icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
          Perhatian Penting
        </div>
        <h2 class="tp-heading">
          Tips <span class="tp-heading-highlight">Penggunaan</span>
        </h2>
        <p class="tp-subtitle">
          Demi keamanan dan kenyamanan bersama, perhatikan beberapa hal berikut saat mengoperasikan Rocket Stove.
        </p>
      </header>

      <!-- Bento Box Grid -->
      <div class="tp-bento-grid">
        
        <!-- Card 1: Area Terbuka (Wide) -->
        <div class="tp-card tp-card--wide" v-animate-on-scroll>
          <div class="tp-card-bg"></div>
          <div class="tp-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 15h18M5 15l1-7h12l1 7M9 21h6" />
              <!-- Wind/Air icon representation -->
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.5 9a2.5 2.5 0 000-5h-9" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M10 11a2.5 2.5 0 010-5h8" />
            </svg>
          </div>
          <div class="tp-card-content">
            <h3 class="tp-card-title">Gunakan di Area Terbuka</h3>
            <p class="tp-card-desc">Selalu operasikan alat di ruang terbuka atau area dengan ventilasi udara yang sangat baik untuk menghindari penumpukan asap dan gas.</p>
          </div>
          <div class="tp-card-border"></div>
        </div>

        <!-- Card 2: Permukaan Stabil -->
        <div class="tp-card tp-card--square" v-animate-on-scroll>
          <div class="tp-card-bg"></div>
          <div class="tp-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 19h16M7 19v-2a2 2 0 012-2h6a2 2 0 012 2v2M9 15V9a2 2 0 012-2h2a2 2 0 012 2v6" />
            </svg>
          </div>
          <div class="tp-card-content">
            <h3 class="tp-card-title">Permukaan Stabil</h3>
            <p class="tp-card-desc">Pastikan alat berada di atas permukaan yang rata, padat, dan tidak mudah terbakar agar alat tidak terguling saat digunakan.</p>
          </div>
          <div class="tp-card-border"></div>
        </div>

        <!-- Card 3: Hindari Bahan Berbahaya -->
        <div class="tp-card tp-card--square tp-card--warning" v-animate-on-scroll>
          <div class="tp-card-bg"></div>
          <div class="tp-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
          </div>
          <div class="tp-card-content">
            <h3 class="tp-card-title">Hindari Bahan Berbahaya</h3>
            <p class="tp-card-desc">Jangan pernah memasukkan sampah plastik, karet, atau bahan kimia berbahaya karena dapat menghasilkan asap beracun dan merusak lingkungan.</p>
          </div>
          <div class="tp-card-border"></div>
        </div>

        <!-- Card 4: Jangan Sentuh Logam Panas -->
        <div class="tp-card tp-card--square tp-card--danger" v-animate-on-scroll>
          <div class="tp-card-bg"></div>
          <div class="tp-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01" />
            </svg>
          </div>
          <div class="tp-card-content">
            <h3 class="tp-card-title">Awas Panas!</h3>
            <p class="tp-card-desc">Jangan menyentuh bagian bodi logam alat dengan tangan kosong saat sedang beroperasi atau beberapa saat setelah dimatikan karena suhunya sangat tinggi.</p>
          </div>
          <div class="tp-card-border"></div>
        </div>

        <!-- Card 5: Pastikan Api Padam (Wide) -->
        <div class="tp-card tp-card--wide" v-animate-on-scroll>
          <div class="tp-card-bg"></div>
          <div class="tp-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <div class="tp-card-content">
            <h3 class="tp-card-title">Pastikan Api Benar-Benar Padam</h3>
            <p class="tp-card-desc">Sebelum meninggalkan lokasi, periksa dan pastikan sisa bara api di dalam ruang pembakaran sudah benar-benar padam sepenuhnya untuk mencegah risiko kebakaran.</p>
          </div>
          <div class="tp-card-border"></div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue';

const vAnimateOnScroll = {
  mounted: (el) => {
    el.classList.add('tp-pre-animate');
    const obs = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        el.classList.add('tp-animate-in');
        obs.disconnect();
      }
    }, { threshold: 0.1 });
    obs.observe(el);
  }
};
</script>

<style scoped>
/* ══════════════════════════════════════════════
   SECTION BASE (Clean Light Theme)
══════════════════════════════════════════════ */
.tp-section {
  font-family: 'Inter', sans-serif;
  background-color: #ffffff;
  color: #1a0800;
  padding: 8rem 0 9rem;
  position: relative;
  overflow: hidden;
}

/* ══════════════════════════════════════════════
   BACKGROUND DECORATIONS
══════════════════════════════════════════════ */
.tp-bg-pattern {
  position: absolute;
  inset: 0;
  z-index: 0;
  background-image: linear-gradient(rgba(238, 91, 22, 0.03) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(238, 91, 22, 0.03) 1px, transparent 1px);
  background-size: 40px 40px;
  pointer-events: none;
}

.tp-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  filter: blur(120px);
  z-index: 0;
  opacity: 0.1;
  animation: pulseGlow 10s infinite alternate ease-in-out;
}
.tp-glow--left {
  background: #B22102;
  width: 500px;
  height: 500px;
  top: -100px;
  left: -200px;
}
.tp-glow--right {
  background: #F1B11C;
  width: 600px;
  height: 600px;
  bottom: -150px;
  right: -250px;
  animation-delay: -5s;
}

@keyframes pulseGlow {
  0% { transform: scale(1); opacity: 0.08; }
  100% { transform: scale(1.2); opacity: 0.15; }
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.tp-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1.5rem;
  position: relative;
  z-index: 10;
}

/* ══════════════════════════════════════════════
   HEADER
══════════════════════════════════════════════ */
.tp-header {
  text-align: center;
  margin-bottom: 5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.tp-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 0.5rem 1.4rem;
  background: #fff5f2;
  border: 1px solid rgba(215, 51, 3, 0.2);
  color: #D73303;
  border-radius: 99px;
  font-size: 0.85rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 1.5rem;
  box-shadow: 0 4px 20px rgba(215, 51, 3, 0.08);
}
.tp-badge-icon {
  width: 18px;
  height: 18px;
  animation: shake 3s infinite cubic-bezier(.36,.07,.19,.97) both;
}
@keyframes shake {
  0%, 100% { transform: rotate(0deg); }
  10%, 30%, 50%, 70%, 90% { transform: rotate(-10deg); }
  20%, 40%, 60%, 80% { transform: rotate(10deg); }
}

.tp-heading {
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 900;
  line-height: 1.1;
  color: #1a0800;
  margin-bottom: 1.2rem;
  letter-spacing: -0.03em;
}

.tp-heading-highlight {
  background: linear-gradient(135deg, #B22102, #EE5B16);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.tp-subtitle {
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: #6b4a3a;
  max-width: 600px;
  line-height: 1.8;
}

/* Entrance Animations */
.tp-pre-animate {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1), transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
}
.tp-animate-in {
  opacity: 1;
  transform: translateY(0);
}

/* ══════════════════════════════════════════════
   BENTO BOX GRID
══════════════════════════════════════════════ */
.tp-bento-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 1.5rem;
}

/* Card Base */
.tp-card {
  position: relative;
  background: #ffffff;
  border-radius: 24px;
  padding: 2.5rem;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05), 0 0 0 1px rgba(0,0,0,0.03);
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  cursor: default;
}

.tp-card:hover {
  transform: translateY(-8px) scale(1.01);
  box-shadow: 0 20px 40px -10px rgba(238, 91, 22, 0.15), 0 0 0 1px rgba(238, 91, 22, 0.2);
}

/* Sizing Modifiers for 2-Row Layout */
.tp-bento-grid > :nth-child(1) { grid-column: span 2; }
.tp-bento-grid > :nth-child(2) { grid-column: span 2; }
.tp-bento-grid > :nth-child(3) { grid-column: span 2; }
.tp-bento-grid > :nth-child(4) { grid-column: span 3; }
.tp-bento-grid > :nth-child(5) { grid-column: span 3; }

/* Background gradient per card type */
.tp-card-bg {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at top right, rgba(241, 177, 28, 0.05) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.4s;
  z-index: 0;
}
.tp-card:hover .tp-card-bg {
  opacity: 1;
}

/* Icons */
.tp-icon-wrapper {
  position: relative;
  z-index: 2;
  width: 64px;
  height: 64px;
  border-radius: 16px;
  background: #fffaf7;
  border: 1px solid rgba(238, 91, 22, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #EE5B16;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}
.tp-icon-wrapper svg {
  width: 32px;
  height: 32px;
  transition: transform 0.4s;
}

.tp-card:hover .tp-icon-wrapper {
  background: linear-gradient(135deg, #EE5B16, #B22102);
  color: #ffffff;
  box-shadow: 0 10px 20px rgba(238, 91, 22, 0.3);
  transform: scale(1.1) rotate(-5deg);
}
.tp-card:hover .tp-icon-wrapper svg {
  transform: scale(1.1);
}

/* Content */
.tp-card-content {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
  flex: 1;
}

.tp-card-title {
  font-size: 1.4rem;
  font-weight: 800;
  color: #1a0800;
  line-height: 1.3;
  transition: color 0.3s;
}
.tp-card:hover .tp-card-title {
  color: #B22102;
}

.tp-card-desc {
  font-size: 1rem;
  line-height: 1.7;
  color: #6b4a3a;
}

/* Special Danger/Warning Cards */
.tp-card--danger:hover .tp-icon-wrapper {
  background: linear-gradient(135deg, #D73303, #921802);
  box-shadow: 0 10px 20px rgba(215, 51, 3, 0.3);
}
.tp-card--warning:hover .tp-icon-wrapper {
  background: linear-gradient(135deg, #DB6E15, #898321);
  box-shadow: 0 10px 20px rgba(219, 110, 21, 0.3);
}

/* Glowing Border on Hover */
.tp-card-border {
  position: absolute;
  inset: 0;
  border-radius: 24px;
  padding: 2px;
  background: linear-gradient(135deg, #F1B11C, #EE5B16, #B22102);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  opacity: 0;
  transition: opacity 0.4s;
  pointer-events: none;
}
.tp-card:hover .tp-card-border {
  opacity: 1;
}

/* Delay animations for cards based on DOM order */
.tp-bento-grid > :nth-child(1) { transition-delay: 0.1s; }
.tp-bento-grid > :nth-child(2) { transition-delay: 0.2s; }
.tp-bento-grid > :nth-child(3) { transition-delay: 0.3s; }
.tp-bento-grid > :nth-child(4) { transition-delay: 0.4s; }
.tp-bento-grid > :nth-child(5) { transition-delay: 0.5s; }

/* Remove delay once animated in so hover is fast */
.tp-animate-in {
  transition-delay: 0s !important;
}

/* ══════════════════════════════════════════════
   RESPONSIVE DESIGN
══════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .tp-bento-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .tp-bento-grid > :nth-child(1) { grid-column: span 2; }
  .tp-bento-grid > :nth-child(2) { grid-column: span 1; }
  .tp-bento-grid > :nth-child(3) { grid-column: span 1; }
  .tp-bento-grid > :nth-child(4) { grid-column: span 1; }
  .tp-bento-grid > :nth-child(5) { grid-column: span 1; }
}

@media (max-width: 768px) {
  .tp-bento-grid {
    grid-template-columns: 1fr;
  }
  .tp-bento-grid > :nth-child(1),
  .tp-bento-grid > :nth-child(2),
  .tp-bento-grid > :nth-child(3),
  .tp-bento-grid > :nth-child(4),
  .tp-bento-grid > :nth-child(5) {
    grid-column: span 1;
  }
  .tp-section {
    padding: 6rem 0 7rem;
  }
  .tp-heading {
    font-size: 2.5rem;
  }
}

@media (max-width: 576px) {
  .tp-card {
    padding: 1.8rem;
    gap: 1.2rem;
  }
  .tp-icon-wrapper {
    width: 54px;
    height: 54px;
  }
  .tp-icon-wrapper svg {
    width: 26px;
    height: 26px;
  }
  .tp-card-title {
    font-size: 1.25rem;
  }
  .tp-card-desc {
    font-size: 0.95rem;
  }
}
</style>
