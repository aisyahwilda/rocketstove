<template>
  <section class="cp-section" id="cara-penggunaan">
    
    <!-- ══ BACKGROUND DECORATIONS ══ -->
    <div class="cp-bg-pattern" aria-hidden="true"></div>
    <div class="cp-bg-glow cp-bg-glow--1" aria-hidden="true"></div>
    <div class="cp-bg-glow cp-bg-glow--2" aria-hidden="true"></div>
    <div class="cp-bg-glow cp-bg-glow--3" aria-hidden="true"></div>

    <div class="cp-container">
      
      <!-- ══ HEADER ══ -->
      <header class="cp-header" v-animate-on-scroll>
        <div class="cp-badge">
          <span class="cp-badge-dot"></span>
          Panduan Praktis
        </div>
        <h2 class="cp-heading">
          Cara <span class="cp-heading-highlight">Penggunaan</span>
        </h2>
        <p class="cp-subtitle">
          Langkah demi langkah menyalakan dan menggunakan Rocket Stove untuk menghasilkan pembakaran yang maksimal, efisien, dan ramah lingkungan.
        </p>
      </header>

      <!-- ══ LAYOUT ══ -->
      <div class="cp-layout">
        
        <!-- Left: Sticky Visualizer (Images/Animations) -->
        <div class="cp-visual-col">
          <div class="cp-sticky-box">
            <div class="cp-visual-frame">
              <!-- Decorative elements around the frame -->
              <div class="cp-frame-ring cp-frame-ring--1"></div>
              <div class="cp-frame-ring cp-frame-ring--2"></div>
              
              <div class="cp-image-wrapper">
                <Transition name="fade-img" mode="out-in">
                  <div :key="activeStep" class="cp-image-inner">
                    
                    <!-- Fallback Visual -->
                    <div class="cp-img-fallback" v-show="imageError">
                      <div class="cp-fallback-circle">
                         <span class="cp-fallback-num">{{ activeStep + 1 }}</span>
                      </div>
                      <div class="cp-fallback-glow"></div>
                    </div>

                    <!-- Actual Image -->
                    <img 
                      :src="`/images/langkah-${activeStep + 1}.png`" 
                      :alt="steps[activeStep].title"
                      class="cp-img"
                      @error="imageError = true"
                      @load="imageError = false"
                      v-show="!imageError"
                    />
                    
                    <!-- Gradient overlay to blend image nicely -->
                    <div class="cp-img-overlay"></div>
                  </div>
                </Transition>
                
                <!-- Floating Info Card inside Visualizer -->
                <div class="cp-floating-info" :key="'info-'+activeStep">
                  <div class="cp-floating-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                  </div>
                  <div class="cp-floating-text">
                    <span class="cp-ft-label">Langkah {{ activeStep + 1 }}</span>
                    <strong class="cp-ft-title">{{ steps[activeStep].shortTitle }}</strong>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Right: Scrollable Steps List -->
        <div class="cp-steps-col" ref="stepsCol">
          <div 
            v-for="(step, index) in steps" 
            :key="index"
            class="cp-step-card"
            :class="{ 'cp-step-card--active': activeStep === index }"
            :data-index="index"
            @click="scrollToStep(index)"
          >
            <!-- Timeline Line joining the markers -->
            <div class="cp-timeline-line" v-if="index !== steps.length - 1"></div>
            
            <!-- Step Marker (The Circle) -->
            <div class="cp-step-marker">
              <div class="cp-step-dot"></div>
              <div class="cp-step-pulse"></div>
              <span class="cp-step-num">{{ index + 1 }}</span>
            </div>

            <!-- Content Box -->
            <div class="cp-step-content-box">
              <h3 class="cp-step-title">{{ step.title }}</h3>
              <p class="cp-step-desc">{{ step.desc }}</p>
              
              <!-- Mobile Inline Image -->
              <div class="cp-mob-image" v-if="activeStep === index">
                <div class="cp-mob-img-wrap">
                  <div class="cp-mob-fallback" v-if="mobileImgError[index]">
                     <span class="cp-mob-fallback-num">{{ index + 1 }}</span>
                  </div>
                  <img 
                    :src="`/images/langkah-${index + 1}.png`" 
                    :alt="step.title"
                    class="cp-m-img"
                    @error="mobileImgError[index] = true"
                    v-show="!mobileImgError[index]"
                  />
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const activeStep = ref(0);
const imageError = ref(false);
const mobileImgError = ref({});

const steps = [
  {
    shortTitle: 'Persiapan',
    title: 'Siapkan Alat & Bahan',
    desc: 'Siapkan unit Rocket Stove di tempat yang datar dan aman. Kumpulkan sampah kering seperti ranting, daun kering, atau kertas sebagai bahan bakar utama.'
  },
  {
    shortTitle: 'Isi Bahan Bakar',
    title: 'Masukkan Bahan Bakar Awal',
    desc: 'Masukkan sedikit bahan bakar kering ke dalam ruang pembakaran. Jangan terlalu padat agar udara tetap bisa bersirkulasi dengan baik ke dalam sistem.'
  },
  {
    shortTitle: 'Penyalaan',
    title: 'Nyalakan Api',
    desc: 'Nyalakan api dari bagian bawah atau pintu masuk bahan bakar. Biarkan api menyala perlahan, mengonsumsi oksigen, dan mulai membesar.'
  },
  {
    shortTitle: 'Maintenance',
    title: 'Tambahkan Sampah Bertahap',
    desc: 'Setelah api stabil dan suhu naik, tambahkan sampah kering secara perlahan dan bertahap. Hindari memasukkan terlalu banyak sekaligus agar api tidak mati.'
  },
  {
    shortTitle: 'Sirkulasi',
    title: 'Jaga Saluran Udara',
    desc: 'Pastikan saluran udara (air intake) tetap terbuka dan tidak tertutup abu. Aliran oksigen yang lancar sangat krusial untuk menjaga efisiensi pembakaran.'
  },
  {
    shortTitle: 'Penyelesaian',
    title: 'Tunggu Hingga Selesai',
    desc: 'Tunggu hingga proses pembakaran selesai sepenuhnya. Setelah api padam secara alami, biarkan abu mendingin sebelum dibersihkan atau dimanfaatkan.'
  }
];

let observer;

onMounted(() => {
  const options = {
    root: null,
    rootMargin: '-45% 0px -45% 0px', 
    threshold: 0
  };

  observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const index = parseInt(entry.target.getAttribute('data-index'));
        if (!isNaN(index)) {
          activeStep.value = index;
          imageError.value = false;
        }
      }
    });
  }, options);

  const stepCards = document.querySelectorAll('.cp-step-card');
  stepCards.forEach(card => observer.observe(card));
});

onUnmounted(() => {
  if (observer) observer.disconnect();
});

// Allow clicking a step to scroll to it smoothly
function scrollToStep(index) {
  const stepCards = document.querySelectorAll('.cp-step-card');
  if(stepCards[index]) {
    const y = stepCards[index].getBoundingClientRect().top + window.pageYOffset - 250;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }
}

const vAnimateOnScroll = {
  mounted: (el) => {
    el.classList.add('cp-pre-animate');
    const obs = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        el.classList.add('cp-animate-in');
        obs.disconnect();
      }
    }, { threshold: 0.1 });
    obs.observe(el);
  }
};
</script>

<style scoped>
/* ══════════════════════════════════════════════
   SECTION BASE (Vibrant Light Theme)
══════════════════════════════════════════════ */
.cp-section {
  font-family: 'Inter', sans-serif;
  background-color: #faf7f2;
  color: #1a0800;
  padding: 7rem 0 4rem;
  position: relative;
  overflow: hidden;
  border-top: 1px solid rgba(238,91,22,0.1);
}

/* ══════════════════════════════════════════════
   BACKGROUND DECORATIONS
══════════════════════════════════════════════ */
/* Grid Pattern */
.cp-bg-pattern {
  position: absolute;
  inset: 0;
  z-index: 0;
  pointer-events: none;
  background-image: radial-gradient(rgba(201, 75, 7, 0.08) 1.5px, transparent 1.5px);
  background-size: 32px 32px;
  opacity: 0.6;
}

/* Animated Glow Orbs */
.cp-bg-glow {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  filter: blur(100px);
  z-index: 0;
  mix-blend-mode: multiply;
  opacity: 0.15;
  animation: floatGlow 15s ease-in-out infinite alternate;
}
.cp-bg-glow--1 {
  background: #EE5B16;
  width: 600px;
  height: 600px;
  top: -150px;
  left: -200px;
  animation-delay: 0s;
}
.cp-bg-glow--2 {
  background: #F1B11C;
  width: 450px;
  height: 450px;
  bottom: -100px;
  right: -100px;
  animation-delay: -5s;
}
.cp-bg-glow--3 {
  background: #D73303;
  width: 350px;
  height: 350px;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation-delay: -10s;
  opacity: 0.08;
}

@keyframes floatGlow {
  0% { transform: translate(0, 0) scale(1); }
  100% { transform: translate(50px, 50px) scale(1.1); }
}

/* ══════════════════════════════════════════════
   CONTAINER
══════════════════════════════════════════════ */
.cp-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 1.5rem;
  position: relative;
  z-index: 10;
}

/* ══════════════════════════════════════════════
   HEADER
══════════════════════════════════════════════ */
.cp-header {
  text-align: center;
  margin-bottom: 4.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.cp-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 0.4rem 1.2rem;
  background: #fff;
  border: 1px solid rgba(238, 91, 22, 0.2);
  color: #C94B07;
  border-radius: 99px;
  font-size: 0.8rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  margin-bottom: 1.2rem;
  box-shadow: 0 4px 15px rgba(238, 91, 22, 0.08);
}
.cp-badge-dot {
  width: 6px;
  height: 6px;
  background: #F1B11C;
  border-radius: 50%;
  box-shadow: 0 0 8px #F1B11C;
  animation: pulseDot 2s infinite;
}
@keyframes pulseDot {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.5; transform: scale(1.5); }
}

.cp-heading {
  font-size: clamp(2.4rem, 5vw, 3.8rem);
  font-weight: 900;
  line-height: 1.1;
  color: #1a0800;
  margin-bottom: 1.2rem;
  letter-spacing: -0.03em;
}

.cp-heading-highlight {
  background: linear-gradient(135deg, #B22102, #EE5B16, #F1B11C);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  position: relative;
  display: inline-block;
}

.cp-subtitle {
  font-size: clamp(0.95rem, 1.8vw, 1.15rem);
  color: #6b4a3a;
  max-width: 650px;
  line-height: 1.85;
}

.cp-pre-animate {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1), transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
}
.cp-animate-in {
  opacity: 1;
  transform: translateY(0);
}

/* ══════════════════════════════════════════════
   LAYOUT: DESKTOP
══════════════════════════════════════════════ */
.cp-layout {
  display: flex;
  gap: 5rem;
  align-items: stretch; /* Explicitly stretch so the sticky child has a track to move along */
}

/* ─── LEFT: VISUALIZER ─── */
.cp-visual-col {
  flex: 1.1; /* Give visualizer slightly more space */
  position: relative;
  padding-bottom: 2rem;
}

.cp-sticky-box {
  position: sticky;
  top: 130px; 
  width: 100%;
}

.cp-visual-frame {
  position: relative;
  width: 100%;
  aspect-ratio: 4 / 5;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Decorative Rings behind the image */
.cp-frame-ring {
  position: absolute;
  border-radius: 50%;
  border: 1px dashed rgba(238, 91, 22, 0.25);
  pointer-events: none;
}
.cp-frame-ring--1 {
  width: 105%;
  height: 105%;
  animation: spinRing 40s linear infinite;
}
.cp-frame-ring--2 {
  width: 115%;
  height: 115%;
  border: 1px solid rgba(241, 177, 28, 0.15);
  animation: spinRing 50s linear infinite reverse;
}
@keyframes spinRing {
  100% { transform: rotate(360deg); }
}

.cp-image-wrapper {
  position: absolute;
  inset: 0;
  background: #ffffff;
  border-radius: 28px;
  overflow: hidden;
  box-shadow: 
    0 25px 50px -12px rgba(108, 23, 18, 0.15),
    0 0 0 1px rgba(238, 91, 22, 0.08),
    inset 0 0 0 2px rgba(255, 255, 255, 0.8);
  transform: translateZ(0); /* Force hardware acceleration */
}

.cp-image-inner {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fdfaf7;
}

.cp-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 1s cubic-bezier(0.22, 1, 0.36, 1);
}
.cp-image-inner:hover .cp-img {
  transform: scale(1.06);
}

.cp-img-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(26,8,0,0.4) 0%, rgba(26,8,0,0) 40%);
  pointer-events: none;
}

/* Fallback Design */
.cp-img-fallback {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  background: radial-gradient(circle at bottom right, #fcece3 0%, #ffffff 100%);
}
.cp-fallback-circle {
  width: 180px;
  height: 180px;
  background: linear-gradient(135deg, rgba(238,91,22,0.1), rgba(241,177,28,0.1));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
  box-shadow: inset 0 0 20px rgba(255,255,255,0.5), 0 10px 30px rgba(238,91,22,0.1);
  border: 1px solid rgba(238,91,22,0.2);
}
.cp-fallback-num {
  font-size: 6rem;
  font-weight: 900;
  background: linear-gradient(135deg, #EE5B16, #F1B11C);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  opacity: 0.9;
}
.cp-fallback-glow {
  position: absolute;
  width: 200px;
  height: 200px;
  background: #EE5B16;
  filter: blur(60px);
  opacity: 0.15;
  z-index: 1;
  animation: pulseFallback 3s infinite alternate;
}
@keyframes pulseFallback {
  100% { transform: scale(1.2); opacity: 0.25; }
}

/* Floating Info Card on top of image */
.cp-floating-info {
  position: absolute;
  bottom: 24px;
  left: 24px;
  right: 24px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 1rem 1.2rem;
  display: flex;
  align-items: center;
  gap: 1rem;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1), 0 0 0 1px rgba(0,0,0,0.05);
  animation: floatInfo 0.5s cubic-bezier(0.22, 1, 0.36, 1) backwards;
}
@keyframes floatInfo {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

.cp-floating-icon {
  width: 44px;
  height: 44px;
  background: linear-gradient(135deg, #EE5B16, #B22102);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  flex-shrink: 0;
  box-shadow: 0 4px 12px rgba(238, 91, 22, 0.3);
}
.cp-floating-icon svg {
  width: 20px;
  height: 20px;
}
.cp-floating-text {
  display: flex;
  flex-direction: column;
}
.cp-ft-label {
  font-size: 0.75rem;
  font-weight: 800;
  color: #C94B07;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.cp-ft-title {
  font-size: 1.1rem;
  font-weight: 800;
  color: #1a0800;
}

/* Image Transitions */
.fade-img-enter-active,
.fade-img-leave-active {
  transition: opacity 0.5s ease, transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
}
.fade-img-enter-from { opacity: 0; transform: scale(1.05) translateY(10px); }
.fade-img-leave-to { opacity: 0; transform: scale(0.95) translateY(-10px); }


/* ─── RIGHT: STEPS ─── */
.cp-steps-col {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding-top: 5vh;
}

.cp-step-card {
  position: relative;
  display: flex;
  gap: 1.8rem;
  padding: 1.5rem 0;
  cursor: pointer;
}

/* The vertical connecting line */
.cp-timeline-line {
  position: absolute;
  left: 27px; /* 54px / 2 */
  top: 5rem; 
  bottom: -1.5rem; 
  width: 3px;
  background: rgba(238, 91, 22, 0.1);
  z-index: 0;
  border-radius: 3px;
  transition: background 0.4s;
}

.cp-step-card--active .cp-timeline-line {
  background: linear-gradient(to bottom, #EE5B16 0%, rgba(238, 91, 22, 0.1) 100%);
}

/* Marker Circle */
.cp-step-marker {
  position: relative;
  z-index: 2;
  width: 54px;
  height: 54px;
  flex-shrink: 0;
  background: #ffffff;
  border: 2px solid rgba(238, 91, 22, 0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  margin-top: 0.5rem;
}

.cp-step-pulse {
  position: absolute;
  inset: -6px;
  border-radius: 50%;
  background: rgba(238, 91, 22, 0.2);
  opacity: 0;
  transform: scale(0.8);
  transition: all 0.4s;
}

.cp-step-dot {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: linear-gradient(135deg, #EE5B16, #B22102);
  opacity: 0;
  transform: scale(0);
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.cp-step-num {
  position: relative;
  z-index: 3;
  font-size: 1.2rem;
  font-weight: 800;
  color: #C94B07;
  transition: color 0.4s;
}

/* Active Marker Styles */
.cp-step-card--active .cp-step-marker {
  border-color: transparent;
  box-shadow: 0 8px 20px rgba(238, 91, 22, 0.3);
  transform: scale(1.1);
}
.cp-step-card--active .cp-step-pulse {
  opacity: 1;
  transform: scale(1.1);
  animation: pulseRing 2s infinite;
}
@keyframes pulseRing {
  100% { transform: scale(1.4); opacity: 0; }
}
.cp-step-card--active .cp-step-dot {
  opacity: 1;
  transform: scale(1);
}
.cp-step-card--active .cp-step-num {
  color: #fff;
}

/* Content Box */
.cp-step-content-box {
  flex: 1;
  background: transparent;
  padding: 1.5rem;
  border-radius: 20px;
  transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  border: 1px solid transparent;
}

.cp-step-title {
  font-size: 1.45rem;
  font-weight: 800;
  color: #6b4a3a;
  margin-bottom: 0.6rem;
  transition: color 0.4s;
}
.cp-step-desc {
  font-size: 1.05rem;
  line-height: 1.75;
  color: #8c6e5e;
  transition: color 0.4s;
}

/* Active Box Styles */
.cp-step-card--active .cp-step-content-box {
  background: #ffffff;
  border: 1px solid rgba(238, 91, 22, 0.15);
  box-shadow: 0 15px 35px -10px rgba(238, 91, 22, 0.1);
  transform: translateX(10px);
}
.cp-step-card--active .cp-step-title {
  color: #B22102;
}
.cp-step-card--active .cp-step-desc {
  color: #1a0800;
}

/* Hover effect on inactive cards */
.cp-step-card:not(.cp-step-card--active):hover .cp-step-content-box {
  background: rgba(255,255,255,0.5);
  transform: translateX(5px);
}
.cp-step-card:not(.cp-step-card--active):hover .cp-step-title {
  color: #C94B07;
}

/* Mobile Image (Hidden on Desktop) */
.cp-mob-image {
  display: none;
}

/* ══════════════════════════════════════════════
   RESPONSIVE DESIGN
══════════════════════════════════════════════ */
@media (max-width: 992px) {
  .cp-visual-col {
    display: none; /* Hide visualizer on mobile/tablet */
  }
  .cp-layout {
    display: block;
  }
  .cp-steps-col {
    padding-top: 0;
    padding-bottom: 0;
  }
  
  .cp-step-card {
    padding: 1rem 0;
    gap: 1.2rem;
  }
  
  /* Ensure active transform isn't too drastic on mobile */
  .cp-step-card--active .cp-step-content-box {
    transform: translateX(0);
    padding: 1.2rem;
  }
  .cp-step-card:not(.cp-step-card--active):hover .cp-step-content-box {
    transform: translateX(0);
  }
  
  .cp-step-content-box {
    padding: 0.5rem 0; 
  }
  
  .cp-mob-image {
    display: block;
    margin-top: 1.5rem;
    animation: slideDown 0.5s cubic-bezier(0.22, 1, 0.36, 1);
  }
  
  .cp-mob-img-wrap {
    width: 100%;
    aspect-ratio: 16 / 9;
    border-radius: 16px;
    background: #ffffff;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(238,91,22,0.1);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
  }
  
  .cp-m-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .cp-mob-fallback {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: radial-gradient(circle at center, #fcece3 0%, #ffffff 100%);
  }
  
  .cp-mob-fallback-num {
    font-size: 5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #EE5B16, #F1B11C);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    opacity: 0.5;
  }
}

@media (max-width: 576px) {
  .cp-section {
    padding: 5rem 0 6rem;
  }
  .cp-heading {
    font-size: 2.2rem;
  }
  .cp-step-card {
    gap: 1rem;
  }
  .cp-step-marker {
    width: 44px;
    height: 44px;
  }
  .cp-timeline-line {
    left: 22px;
  }
  .cp-step-title {
    font-size: 1.25rem;
  }
  .cp-step-desc {
    font-size: 0.95rem;
  }
}

@keyframes slideDown {
  from { opacity: 0; transform: translateY(-10px) scale(0.98); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}
</style>
