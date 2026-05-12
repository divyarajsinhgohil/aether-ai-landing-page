<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aether AI | Next-Gen Fintech Intelligence</title>
    <meta name="description" content="Predictive analytics and high-frequency security for the modern financial era. Join the future of banking.">
    <link rel="stylesheet" href="style.css">
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <nav>
        <div class="logo">
            <div class="logo-dot"></div>
            AETHER AI
        </div>
        <div class="nav-links">
            <a href="#features" class="nav-link">Features</a>
            <a href="#about" class="nav-link">Technology</a>
            <button class="btn-submit" style="padding: 10px 24px; font-size: 13px;">Get Started</button>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-visuals">
                <div class="glow-blob blob-1"></div>
                <div class="glow-blob blob-2"></div>
            </div>
            
            <div class="container">
                <div class="hero-tag reveal-up">The Intelligence Layer for Finance</div>
                <h1 id="hero-title">Predict the<br>Market. <span style="color: var(--primary);">Secure</span> Life.</h1>
                <p class="reveal-up">Experience a new era of wealth management. Aether AI leverages deep neural networks to safeguard and grow your assets in real-time.</p>
                
                <div class="waitlist-container reveal-up">
                    <form id="waitlist-form" class="waitlist-form">
                        <input type="email" id="email" placeholder="Enter your work email" required>
                        <button type="submit" class="btn-submit">Join Waitlist</button>
                    </form>
                    <div id="status-msg" class="status-msg"></div>
                </div>
            </div>
        </section>

        <!-- Marquee Section -->
        <div class="marquee-container">
            <div class="marquee-content">
                <div class="marquee-item"><i data-lucide="cpu"></i> NEURAL ENGINE</div>
                <div class="marquee-item"><i data-lucide="database"></i> QUANTUM LEDGER</div>
                <div class="marquee-item"><i data-lucide="shield"></i> MULTI-SIG</div>
                <div class="marquee-item"><i data-lucide="activity"></i> REAL-TIME</div>
                <div class="marquee-item"><i data-lucide="link"></i> WEB3 READY</div>
                <div class="marquee-item"><i data-lucide="lock"></i> AES-256</div>
                <!-- Duplicate for seamless loop -->
                <div class="marquee-item"><i data-lucide="cpu"></i> NEURAL ENGINE</div>
                <div class="marquee-item"><i data-lucide="database"></i> QUANTUM LEDGER</div>
                <div class="marquee-item"><i data-lucide="shield"></i> MULTI-SIG</div>
                <div class="marquee-item"><i data-lucide="activity"></i> REAL-TIME</div>
                <div class="marquee-item"><i data-lucide="link"></i> WEB3 READY</div>
                <div class="marquee-item"><i data-lucide="lock"></i> AES-256</div>
            </div>
        </div>

        <!-- Bento Grid Features -->
        <section id="features" class="container" style="padding: 100px 0;">
            <div class="section-title reveal-up">
                <h2>Built for the <span style="color: var(--primary);">1%</span> of Builders</h2>
                <p style="color: var(--text-med);">Our infrastructure handles billions in volume with microsecond latency.</p>
            </div>

            <div class="bento-grid">
                <div class="bento-item large reveal-up">
                    <div class="bento-icon"><i data-lucide="brain-circuit"></i></div>
                    <h3>Predictive Treasury</h3>
                    <p>Advanced AI models that forecast market volatility before it happens. Stay ahead of every curve with 99.8% accuracy.</p>
                </div>
                <div class="bento-item tall reveal-up">
                    <div class="bento-icon"><i data-lucide="shield-check"></i></div>
                    <h3>Ironclad Security</h3>
                    <p>Military-grade encryption with multi-sig protocols. Your assets are stored in disconnected cold-storage nodes spread across 5 continents.</p>
                </div>
                <div class="bento-item reveal-up">
                    <div class="bento-icon"><i data-lucide="zap"></i></div>
                    <h3>Instant Settlement</h3>
                    <p>Move assets globally in milliseconds, not days.</p>
                </div>
                <div class="bento-item reveal-up">
                    <div class="bento-icon"><i data-lucide="layers"></i></div>
                    <h3>Unified API</h3>
                    <p>Connect your entire stack with a single, elegant endpoint.</p>
                </div>
                <div class="bento-item large reveal-up">
                    <div class="bento-icon"><i data-lucide="globe"></i></div>
                    <h3>Global Compliance</h3>
                    <p>Automated regulatory reporting across 120+ jurisdictions. We handle the paperwork, you handle the growth.</p>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section id="about" class="tech-section">
            <div class="container">
                <div class="tech-grid">
                    <div class="tech-content reveal-up">
                        <div class="hero-tag">Core Technology</div>
                        <h2>The Engine of <span style="color: var(--secondary);">Autonomy</span></h2>
                        <p style="margin-bottom: 32px;">Aether AI runs on a proprietary distributed ledger optimized for sub-millisecond execution. Our neural engines are trained on 15 years of global market data.</p>
                        
                        <div class="tech-stats">
                            <div class="stat-item">
                                <h4><span class="counter">0.1</span>ms</h4>
                                <p>Transaction Latency</p>
                            </div>
                            <div class="stat-item">
                                <h4>99.9%</h4>
                                <p>Prediction Confidence</p>
                            </div>
                            <div class="stat-item">
                                <h4>256-bit</h4>
                                <p>Quantum Security</p>
                            </div>
                            <div class="stat-item">
                                <h4>10M+</h4>
                                <p>Requests per Sec</p>
                            </div>
                        </div>
                    </div>
                    <div class="tech-visual reveal-up">
                        <img src="assets/tech-visual.png" alt="Aether AI Neural Architecture">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <div class="logo-dot"></div>
                    AETHER AI
                </div>
                <div class="copyright">&copy; 2026 Aether AI. All rights reserved.</div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Icons
        lucide.createIcons();

        // GSAP Registration
        gsap.registerPlugin(ScrollTrigger, TextPlugin);

        // --- Animations ---
        
        // Entrance Animations with ScrollTrigger
        gsap.utils.toArray('.reveal-up').forEach(el => {
            gsap.from(el, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 90%",
                    toggleActions: "play none none none"
                },
                y: 40,
                opacity: 0,
                duration: 1.2,
                ease: "expo.out"
            });
        });

        // Hero Specific Title Animation
        gsap.from("#hero-title", {
            y: 60,
            opacity: 0,
            duration: 1.5,
            delay: 0.3,
            ease: "expo.out"
        });

        // Floating Blobs Parallax
        gsap.to(".blob-1", {
            x: 100,
            y: 50,
            duration: 20,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        gsap.to(".blob-2", {
            x: -150,
            y: -80,
            duration: 25,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Custom Cursor Logic
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Delay outline for smooth effect
            gsap.to(cursorOutline, {
                x: posX - 20,
                y: posY - 20,
                duration: 0.5,
                ease: "power3.out"
            });
        });

        // Mouse Parallax for Hero
        document.querySelector('.hero').addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;
            const xPos = (clientX / window.innerWidth - 0.5) * 40;
            const yPos = (clientY / window.innerHeight - 0.5) * 40;

            gsap.to("#hero-title", {
                x: xPos,
                y: yPos,
                duration: 1,
                ease: "power2.out"
            });
        });

        // Interactive Button Effects
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursorOutline, { scale: 1.5, background: "rgba(0, 242, 255, 0.1)", duration: 0.3 });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursorOutline, { scale: 1, background: "transparent", duration: 0.3 });
            });
        });

        // Bento Grid Reveal
        gsap.utils.toArray('.bento-item').forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 90%",
                    toggleActions: "play none none none"
                },
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "expo.out"
            });
        });

        // --- Form Submission ---
        const form = document.getElementById('waitlist-form');
        const statusMsg = document.getElementById('status-msg');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const btn = form.querySelector('button');
            
            // Loading state
            btn.innerHTML = "Processing...";
            btn.disabled = true;

            try {
                const response = await fetch('api/save_waitlist.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `email=${encodeURIComponent(email)}`
                });

                const data = await response.json();

                if (data.success) {
                    gsap.to(form, { scale: 0.95, opacity: 0, duration: 0.5, ease: "expo.inOut" });
                    setTimeout(() => {
                        form.style.display = 'none';
                        statusMsg.innerHTML = `<span style="color: var(--primary); font-weight: 700; font-size: 24px;">Welcome to the inner circle.</span><br><span style="color: var(--text-med); font-size: 18px;">Check your inbox for early access details.</span>`;
                        statusMsg.style.opacity = 1;
                        gsap.from(statusMsg, { y: 20, opacity: 0, duration: 1, ease: "expo.out" });
                    }, 500);
                } else {
                    statusMsg.textContent = data.message;
                    statusMsg.style.color = "#ff4d4d";
                    statusMsg.style.opacity = 1;
                    btn.innerHTML = "Join Waitlist";
                    btn.disabled = false;
                }
            } catch (err) {
                statusMsg.textContent = "Something went wrong. Please try again.";
                statusMsg.style.color = "#ff4d4d";
                statusMsg.style.opacity = 1;
                btn.innerHTML = "Join Waitlist";
                btn.disabled = false;
            }
        });

        // Mouse Parallax for Cards
        document.querySelectorAll('.bento-item').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                gsap.to(card, {
                    rotateX: rotateX,
                    rotateY: rotateY,
                    duration: 0.5,
                    ease: "power2.out"
                });
            });
            
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotateX: 0,
                    rotateY: 0,
                    duration: 0.5,
                    ease: "power2.out"
                });
            });
        });
    </script>
</body>
</html>
