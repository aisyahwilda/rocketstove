<template>
    <footer class="eco-footer">

        <!-- Animated ambient orbs -->
        <div class="orb orb-left" aria-hidden="true"></div>
        <div class="orb orb-right" aria-hidden="true"></div>

        <!-- Centered brand -->
        <div class="footer-inner">
            <div class="brand-wrap">
                <img src="/images/logo.png" alt="EcoBurner Logo" class="brand-logo" />
                <span class="brand-name">EcoBurner</span>
            </div>
        </div>

        <!-- Full-width divider -->
        <div class="footer-divider" role="separator"></div>

        <!-- Full-width bottom bar: [quick links] ────── [text] ────── [instagram] -->
        <div class="footer-bottom">
            <!-- Far left: Quick links -->
            <nav class="footer-quick-links" aria-label="Footer navigation">
                <a href="#" class="quick-link">Beranda</a>
                <a href="#" class="quick-link">Tentang Program</a>
                <a href="#" class="quick-link">Kontak</a>
            </nav>

            <!-- Center: copyright + credit -->
            <div class="footer-text-group">
                <p class="copyright-text">© 2026 EcoBurner. All Rights Reserved.</p>
                <p class="credit-text">Dikembangkan oleh Kelompok 57 Inovasi Sosial Institut Teknologi Kalimantan.</p>
            </div>

            <!-- Far right: Instagram -->
            <div class="footer-social">
                <a
                    href="https://www.instagram.com/ecoburner.itk?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    class="social-button"
                    aria-label="Follow EcoBurner on Instagram"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.266.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/>
                    </svg>
                    <span class="social-label">Instagram</span>
                </a>
            </div>
        </div>

    </footer>
</template>

<script setup>
// Footer component – EcoBurner
</script>

<style scoped>
/* ─── Color palette tokens ─────────────────────────────── */
:root {
    --clr-fire-deep:   #6C1712;
    --clr-fire-dark:   #921802;
    --clr-fire-rich:   #B22102;
    --clr-fire-base:   #C94B07;
    --clr-fire-mid:    #A43017;
    --clr-fire-vivid:  #D73303;
    --clr-fire-bright: #EE5B16;
    --clr-amber:       #DB6E15;
    --clr-gold:        #F1B11C;
    --clr-olive:       #898321;
}

/* ─── Footer shell ────────────────────────────────────── */
.eco-footer {
    position: relative;
    overflow: hidden;
    background:
        linear-gradient(
            160deg,
            #0f0f0f 0%,
            #1a1008 55%,
            #120a04 100%
        );
    border-top: 1px solid rgba(238, 91, 22, 0.18);
    padding: 1.6rem 1.5rem 1.4rem;
    animation: footerReveal 0.7s cubic-bezier(0.22, 1, 0.36, 1) both;
}

@keyframes footerReveal {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ─── Ambient orbs ────────────────────────────────────── */
.orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    z-index: 0;
}
.orb-left {
    width: 260px;
    height: 260px;
    background: radial-gradient(circle, rgba(178, 33, 2, 0.12) 0%, transparent 70%);
    top: -100px;
    left: -80px;
    animation: floatOrb 9s ease-in-out infinite;
}
.orb-right {
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(241, 177, 28, 0.07) 0%, transparent 70%);
    bottom: -70px;
    right: -60px;
    animation: floatOrb 12s ease-in-out infinite reverse;
}

@keyframes floatOrb {
    0%, 100% { transform: translateY(0) scale(1); }
    50%       { transform: translateY(-16px) scale(1.04); }
}

/* ─── Inner container (brand only — centered) ────────── */
.footer-inner {
    position: relative;
    z-index: 1;
    max-width: 960px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 0.85rem;
}

/* ─── Brand row ───────────────────────────────────────── */
.brand-wrap {
    display: flex;
    align-items: center;
    gap: 0.7rem;
    animation: brandIn 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.15s both;
}

@keyframes brandIn {
    from { opacity: 0; transform: scale(0.92) translateY(6px); }
    to   { opacity: 1; transform: scale(1)   translateY(0); }
}

.brand-logo {
    width: 2.2rem;
    height: 2.2rem;
    object-fit: contain;
    filter: drop-shadow(0 0 6px rgba(238, 91, 22, 0.35));
    transition: filter 0.35s ease, transform 0.35s ease;
}

.brand-wrap:hover .brand-logo {
    filter: drop-shadow(0 0 12px rgba(241, 177, 28, 0.55));
    transform: rotate(6deg) scale(1.08);
}

.brand-name {
    font-size: 1.35rem;
    font-weight: 700;
    letter-spacing: -0.02em;
    background: linear-gradient(130deg, #f5e8d0 0%, #EE5B16 55%, #F1B11C 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    transition: filter 0.3s ease;
}

.brand-wrap:hover .brand-name {
    filter: drop-shadow(0 0 10px rgba(241, 177, 28, 0.4));
}

/* ─── Divider — full width ───────────────────────────── */
.footer-divider {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 1px;
    background: linear-gradient(
        90deg,
        rgba(108, 23, 18, 0.4) 0%,
        rgba(201, 75, 7, 0.5) 20%,
        rgba(238, 91, 22, 0.7) 50%,
        rgba(201, 75, 7, 0.5) 80%,
        rgba(108, 23, 18, 0.4) 100%
    );
    animation: dividerGlow 3s ease-in-out infinite alternate;
}

@keyframes dividerGlow {
    from { opacity: 0.6; }
    to   { opacity: 1; }
}

.footer-divider::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #EE5B16;
    box-shadow: 0 0 8px 2px rgba(238, 91, 22, 0.6);
    animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
    50%       { transform: translate(-50%, -50%) scale(1.6); opacity: 0.5; }
}

/* ─── Bottom bar — full-width, edges to edges ─────────── */
.footer-bottom {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    align-items: center;
    gap: 1rem;
    padding: 0.9rem 1.5rem 0;
    animation: bottomIn 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.3s both;
}

@keyframes bottomIn {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}

.footer-bottom-spacer {
    /* invisible — mirrors the Instagram button width to keep text truly centered */
}

.footer-social {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

/* ─── Text group (copyright + credit) ─────────────────── */
.footer-text-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 0.2rem;
}

.copyright-text {
    margin: 0;
    font-size: 0.82rem;
    font-weight: 600;
    color: #e8d0b8;
    letter-spacing: 0.3px;
}

.credit-text {
    margin: 0;
    font-size: 0.75rem;
    color: rgba(255, 255, 255, 0.52);
    letter-spacing: 0.2px;
}

/* ─── Quick links ─────────────────────────────────────── */
.footer-quick-links {
    display: flex;
    flex-direction: column;
    gap: 0.28rem;
    align-items: flex-start;
}

.quick-link {
    font-size: 0.78rem;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.32);
    text-decoration: none;
    letter-spacing: 0.3px;
    position: relative;
    padding-bottom: 1px;
    transition: color 0.22s ease;
}

/* animated underline on hover */
.quick-link::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 0;
    height: 1px;
    background: linear-gradient(90deg, #EE5B16, #F1B11C);
    border-radius: 1px;
    box-shadow: 0 0 6px rgba(238, 91, 22, 0.5);
    transition: width 0.28s cubic-bezier(0.22, 1, 0.36, 1);
}

.quick-link:hover {
    color: #EE5B16;
}

.quick-link:hover::after {
    width: 100%;
}

/* ─── Social button ───────────────────────────────────── */
.social-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.45rem;
    padding: 0.42rem 1rem 0.42rem 0.65rem;
    border-radius: 999px;
    background: linear-gradient(135deg, rgba(178,33,2,0.18), rgba(238,91,22,0.1));
    border: 1.5px solid rgba(238, 91, 22, 0.28);
    color: #EE5B16;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.3px;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
    transition: all 0.32s cubic-bezier(0.22, 1, 0.36, 1);
    flex-shrink: 0;
}

.social-button::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #B22102, #EE5B16, #F1B11C);
    opacity: 0;
    transition: opacity 0.32s ease;
    border-radius: inherit;
}

.social-button:hover,
.social-button:focus-visible {
    color: #fff;
    border-color: #EE5B16;
    transform: translateY(-2px) scale(1.04);
    box-shadow: 0 8px 22px rgba(238, 91, 22, 0.3), 0 0 0 3px rgba(238,91,22,0.12);
    outline: none;
}

.social-button:hover::before {
    opacity: 1;
}

.social-icon {
    width: 1.1rem;
    height: 1.1rem;
    position: relative;
    z-index: 1;
    flex-shrink: 0;
}

.social-label {
    position: relative;
    z-index: 1;
}

/* ─── Responsive — tablet (≤ 768px) ──────────────────── */
@media (max-width: 768px) {
    .eco-footer {
        padding: 1.4rem 1.2rem 1.2rem;
    }

    .footer-bottom {
        grid-template-columns: 1fr;
        gap: 0.75rem;
        justify-items: center;
        padding: 0.8rem 1.2rem 0;
    }

    .footer-quick-links {
        flex-direction: row;
        gap: 1.2rem;
        justify-content: center;
        flex-wrap: wrap;
        align-items: center;
        order: 2;
    }

    .quick-link {
        padding-bottom: 2px;
    }

    .footer-social {
        justify-content: center;
        order: 3;
    }
}

/* ─── Responsive — mobile (≤ 480px) ──────────────────── */
@media (max-width: 480px) {
    .eco-footer {
        padding: 1.2rem 1rem 1rem;
    }

    .footer-inner {
        gap: 0.7rem;
    }

    .brand-logo {
        width: 1.9rem;
        height: 1.9rem;
    }

    .brand-name {
        font-size: 1.15rem;
    }

    .copyright-text {
        font-size: 0.78rem;
    }

    .credit-text {
        font-size: 0.72rem;
    }

    .social-button {
        font-size: 0.76rem;
        padding: 0.38rem 0.85rem 0.38rem 0.55rem;
    }

    .social-icon {
        width: 1rem;
        height: 1rem;
    }
}

/* ─── Reduced motion ──────────────────────────────────── */
@media (prefers-reduced-motion: reduce) {
    .eco-footer,
    .orb-left,
    .orb-right,
    .brand-wrap,
    .footer-bottom,
    .footer-divider,
    .footer-divider::before,
    .social-button {
        animation: none !important;
        transition: none !important;
    }
}
</style>
