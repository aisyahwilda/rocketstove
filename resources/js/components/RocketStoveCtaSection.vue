<template>
  <section class="rs-cta-section" id="cta-edukasi">
    
    <!-- Deep Dark Background with ambient glowing orbs -->
    <div class="rs-cta-bg"></div>
    <div class="rs-cta-glow rs-cta-glow--1"></div>
    <div class="rs-cta-glow rs-cta-glow--2"></div>

    <div class="rs-cta-container">
      <div class="rs-cta-card" v-animate-on-scroll>
        
        <!-- Decorative Pattern inside the Card -->
        <div class="rs-cta-card-pattern"></div>
        
        <div class="rs-cta-content">
          <div class="rs-cta-icon-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          
          <h2 class="rs-cta-title">Ingin Belajar Lebih Banyak?</h2>
          
          <p class="rs-cta-desc">
            Pelajari berbagai informasi mendalam mengenai pengelolaan sampah dan lingkungan secara komprehensif pada halaman Edukasi kami.
          </p>
          
          <div class="rs-cta-action">
            <a href="/edukasi" class="rs-cta-button">
              <span class="rs-cta-btn-text">Jelajahi Edukasi</span>
              <span class="rs-cta-btn-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </span>
              <!-- Hover Glow Effect -->
              <div class="rs-cta-btn-glow"></div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</template>

<script setup>
const vAnimateOnScroll = {
  mounted: (el) => {
    el.classList.add('rs-pre-animate');
    const obs = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        el.classList.add('rs-animate-in');
        obs.disconnect();
      }
    }, { threshold: 0.1 });
    obs.observe(el);
  }
};
</script>

<style scoped>
/* ══════════════════════════════════════════════
   SECTION BASE (Zebra Striping - Light Background)
══════════════════════════════════════════════ */
.rs-cta-section {
  font-family: 'Inter', sans-serif;
  background-color: #F8F9FA; /* Sangat Terang / Putih Abu-abu */
  position: relative;
  overflow: hidden;
  padding: 8rem 0;
  /* Tambahan padding bawah agar tidak sesak dengan footer */
  padding-bottom: 10rem;
}

/* ══════════════════════════════════════════════
   BACKGROUND AMBIENCE
══════════════════════════════════════════════ */
.rs-cta-bg {
  position: absolute;
  inset: 0;
  background-image: radial-gradient(rgba(215, 51, 3, 0.08) 1px, transparent 1px);
  background-size: 50px 50px;
  opacity: 0.8;
  pointer-events: none;
}

.rs-cta-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  filter: blur(150px);
  z-index: 0;
}
.rs-cta-glow--1 {
  background: #D73303;
  width: 600px;
  height: 600px;
  top: -200px;
  left: -200px;
  opacity: 0.15;
  animation: floatOrb 12s infinite alternate ease-in-out;
}
.rs-cta-glow--2 {
  background: #F1B11C;
  width: 500px;
  height: 500px;
  bottom: -200px;
  right: -100px;
  opacity: 0.15;
  animation: floatOrb 10s infinite alternate-reverse ease-in-out;
}

@keyframes floatOrb {
  100% { transform: translateY(50px) scale(1.1); }
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.rs-cta-container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 1.5rem;
  position: relative;
  z-index: 10;
}

/* ══════════════════════════════════════════════
   HIGH-CONTRAST DARK CARD
══════════════════════════════════════════════ */
.rs-cta-card {
  position: relative;
  background: linear-gradient(145deg, #1C1C1C 0%, #0a0402 100%);
  border: 1px solid rgba(238, 91, 22, 0.4);
  border-radius: 32px;
  padding: 5rem 3rem;
  text-align: center;
  overflow: hidden;
  box-shadow: 
    0 40px 80px rgba(0,0,0,0.2),
    0 20px 40px rgba(215, 51, 3, 0.15);
}

.rs-cta-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at top, rgba(238, 91, 22, 0.15), transparent 60%);
  pointer-events: none;
}

.rs-cta-card-pattern {
  position: absolute;
  top: 0;
  right: 0;
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(241, 177, 28, 0.1) 0%, transparent 70%);
  pointer-events: none;
}

/* ══════════════════════════════════════════════
   CONTENT
══════════════════════════════════════════════ */
.rs-cta-content {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.rs-cta-icon-wrap {
  width: 72px;
  height: 72px;
  background: linear-gradient(135deg, #EE5B16, #B22102);
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  margin-bottom: 2rem;
  box-shadow: 
    0 10px 25px rgba(238, 91, 22, 0.4),
    inset 0 2px 0 rgba(255,255,255,0.2);
  transform: rotate(-5deg);
  transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.rs-cta-card:hover .rs-cta-icon-wrap {
  transform: rotate(0deg) scale(1.1);
}

.rs-cta-icon-wrap svg {
  width: 36px;
  height: 36px;
}

.rs-cta-title {
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 900;
  color: #ffffff;
  margin-bottom: 1.2rem;
  line-height: 1.1;
  letter-spacing: -0.02em;
}

.rs-cta-desc {
  font-size: clamp(1rem, 2vw, 1.15rem);
  color: #d1c7c2;
  max-width: 600px;
  line-height: 1.7;
  margin-bottom: 2.5rem;
}

/* ══════════════════════════════════════════════
   BUTTON
══════════════════════════════════════════════ */
.rs-cta-action {
  position: relative;
}

.rs-cta-button {
  position: relative;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 1.2rem 2.5rem;
  background: linear-gradient(90deg, #D73303, #EE5B16);
  border-radius: 99px;
  color: #ffffff;
  font-weight: 800;
  font-size: 1.1rem;
  text-decoration: none;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 10px 25px rgba(215, 51, 3, 0.4);
}

.rs-cta-btn-text {
  position: relative;
  z-index: 2;
}

.rs-cta-btn-icon {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
}

.rs-cta-btn-icon svg {
  width: 22px;
  height: 22px;
}

/* Button Hover Effects */
.rs-cta-btn-glow {
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, #F1B11C, #EE5B16);
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 1;
}

.rs-cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(238, 91, 22, 0.6);
}

.rs-cta-button:hover .rs-cta-btn-glow {
  opacity: 1;
}

.rs-cta-button:hover .rs-cta-btn-icon {
  transform: translateX(5px);
}

/* ══════════════════════════════════════════════
   ANIMATION CLASSES
══════════════════════════════════════════════ */
.rs-pre-animate {
  opacity: 0;
  transform: translateY(40px) scale(0.98);
  transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
}

.rs-animate-in {
  opacity: 1;
  transform: translateY(0) scale(1);
}

/* ══════════════════════════════════════════════
   RESPONSIVE DESIGN
══════════════════════════════════════════════ */
@media (max-width: 768px) {
  .rs-cta-section {
    padding: 6rem 0;
    padding-bottom: 8rem;
  }
  .rs-cta-card {
    padding: 3rem 2rem;
    border-radius: 24px;
  }
}

@media (max-width: 576px) {
  .rs-cta-section {
    padding: 4rem 0;
    padding-bottom: 6rem;
  }
  .rs-cta-card {
    padding: 2.5rem 1.5rem;
  }
  .rs-cta-icon-wrap {
    width: 60px;
    height: 60px;
    margin-bottom: 1.5rem;
  }
  .rs-cta-icon-wrap svg {
    width: 30px;
    height: 30px;
  }
  .rs-cta-button {
    padding: 1rem 2rem;
    width: 100%;
    justify-content: center;
  }
}
</style>
