<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BETTA | About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    @include('partials.navbar')



    <!-- HERO -->
    <section class="hero1" id="aboutHero">

        <div class="hero1-content">
            <p class="hero1-small-title hero-anim">ABOUT US</p>

            <h1 class="hero-anim">Uniting Communities to Feed People</h1>

            <p class="hero1-text hero-anim">
                Bringing everyone together to share food supplies and financial support, making sure every family gets the meals they need.
            </p>
        </div>

        <div class="hero1-image hero-anim hero-anim-right">
            <img src="{{ asset('images/himg.jpg') }}" alt="Food donation">
        </div>

    </section>


    <!-- Fundraiser -->
    <section class="fundraiser">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="image-collage collage" id="collage">
                        <img src="{{ asset('images/1img.jpg') }}" class="main-image collage-img collage-main" data-speed="0.04" alt="">
                        <img src="{{ asset('images/2img.jpg') }}" class="small-image image-two collage-img collage-pop" data-speed="0.08" alt="">
                        <img src="{{ asset('images/3img.jpg') }}" class="small-image image-three collage-img collage-spin" data-speed="0.12" alt="">
                        <img src="{{ asset('images/4img.jpg') }}" class="small-image image-four collage-img collage-blur" data-speed="0.06" alt="">

                        <span class="dot dot-one collage-dot"></span>
                        <span class="dot dot-two collage-dot"></span>
                        <span class="dot dot-three collage-dot"></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fundraiser-text scroll-scale">
                        <h1>
                            Fighting Hunger, <br>
                            Sharing Food
                        </h1>

                        <p class="small-title">
                            Bringing Communities Together Through Every Meal
                        </p>

                        <p>
                            At BETTA, we believe everyone deserves access to fresh, healthy food. We make it easy for local businesses and neighbors to share extra food directly with people and shelters who need it most.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Mission -->
    <section class="mission-section">
        <div class="container text-center">

            <div class="scroll-scale">
                <h2>What We Stand For</h2>
                <div class="title-line"></div>
                <p class="section-description">
                    Our commitment to building stronger communities and ending hunger.
                </p>
            </div>

            <div class="row mt-5 g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card scroll-scale" data-tilt>
                        <div class="icon-box"><i class="fa-solid fa-bullseye"></i></div>
                        <h3>Mission</h3>
                        <p>
                            Our mission is to end hunger by connecting communities to share
                            food and financial support, ensuring every family has enough to eat.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card scroll-scale" data-tilt>
                        <div class="icon-box"><i class="fa-solid fa-eye"></i></div>
                        <h3>Vision</h3>
                        <p>
                            To build strong, supportive communities where fresh
                            food and financial resources flow freely to end local hunger.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card scroll-scale" data-tilt>
                        <div class="icon-box"><i class="fa-solid fa-flag"></i></div>
                        <h3>Goals</h3>
                        <p>
                            In alignment with SDG 2: Zero Hunger, our goal is to unite communities to end hunger,
                            improve nutrition, and support sustainable food access for every family by 2030.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top" aria-label="Back to top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </button>

    <noscript>
        <style>
            .hero-anim,
            .scroll-scale,
            .collage-img,
            .collage-dot {
                opacity: 1 !important;
                translate: none !important;
                transform: none !important;
                scale: none !important;
                rotate: none !important;
                filter: none !important;
            }

            .title-line {
                transform: none !important;
            }
        </style>
    </noscript>



    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- BETTA -->
                <div class="col-md-5">
                    <a class="navbar-brand" href="{{ route('home') }}" style="margin-left: -20px;">
                        <img src="{{ asset('images/BETTA.jpg') }}" alt="BETTA">
                    </a>
                    <p>
                        Connecting communities and resources to fight hunger
                        and create lasting solutions.
                    </p>

                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('req') }}">Request a donation</a>
                    <a href="{{ route('sc') }}">Select a Cause</a>
                    <a href="{{ route('donate') }}">Fund a Project</a>
                </div>

                <!-- Contact -->
                <div class="col-md-4">
                    <h4>Contact</h4>
                    <p>BETTA</p>
                    <p>BETTA@gmail.com</p>
                    <p>+63 900 000 0000</p>
                </div>

                <div class="footer-bottom">
                    <a href="{{ route('adminlog') }}" class="admin-login">
                        Admin Login
                    </a>
                </div>

            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;


            /* ---------- 1. Hero entrance ---------- */
            const hero = document.getElementById('aboutHero');
            if (hero) {
                // two frames, so the hidden state is painted before the animation starts
                requestAnimationFrame(() => requestAnimationFrame(() => hero.classList.add('hero-ready')));
            }


            /* ---------- 2. Scroll reveal + animated title underline ---------- */
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            document
                .querySelectorAll('.scroll-scale:not(.mission-card), .title-line')
                .forEach(el => revealObserver.observe(el));


            /* ---------- 3. Staggered mission cards ---------- */
            const STAGGER = 150; // ms between cards

            const cardObserver = new IntersectionObserver((entries) => {
                entries
                    .filter(entry => entry.isIntersecting)
                    .forEach((entry, i) => {
                        const card = entry.target;

                        card.style.transitionDelay = (i * STAGGER) + 'ms';
                        card.classList.add('is-visible');
                        cardObserver.unobserve(card);

                        // after the entrance finishes, clear the delay so the tilt feels instant
                        setTimeout(() => {
                            card.style.transitionDelay = '';
                            card.classList.add('tilt-ready');
                        }, i * STAGGER + 700);
                    });
            }, {
                threshold: 0.2
            });

            const cards = document.querySelectorAll('.mission-card');
            cards.forEach(card => cardObserver.observe(card));


            /* ---------- 4. Interactive mission cards (mouse tilt) ---------- */
            if (canHover && !reduceMotion) {
                const MAX_TILT = 8; // degrees

                cards.forEach(card => {
                    card.addEventListener('mousemove', (e) => {
                        if (!card.classList.contains('tilt-ready')) return;

                        const rect = card.getBoundingClientRect();
                        const x = (e.clientX - rect.left) / rect.width; // 0 to 1
                        const y = (e.clientY - rect.top) / rect.height; // 0 to 1

                        card.style.setProperty('--rx', ((0.5 - y) * MAX_TILT * 2).toFixed(2) + 'deg');
                        card.style.setProperty('--ry', ((x - 0.5) * MAX_TILT * 2).toFixed(2) + 'deg');
                    });

                    card.addEventListener('mouseleave', () => {
                        card.style.removeProperty('--rx');
                        card.style.removeProperty('--ry');
                    });
                });
            }


            /* ---------- 5. Image collage entrance ---------- */
            const collage = document.getElementById('collage');
            if (collage) {
                const collageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            collageObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.25
                });
                collageObserver.observe(collage);


                /* ---------- 6. Parallax on the collage images ---------- */
                if (!reduceMotion) {
                    const layers = [...collage.querySelectorAll('.collage-img')];
                    const MAX_SHIFT = 40; // px
                    let ticking = false;

                    function updateParallax() {
                        const rect = collage.getBoundingClientRect();

                        // only work while the collage is on screen
                        if (rect.bottom > 0 && rect.top < window.innerHeight) {
                            const offset = (rect.top + rect.height / 2) - window.innerHeight / 2;

                            layers.forEach(img => {
                                const speed = parseFloat(img.dataset.speed) || 0.05;
                                const shift = Math.max(-MAX_SHIFT, Math.min(MAX_SHIFT, -offset * speed));
                                img.style.setProperty('--py', shift.toFixed(1) + 'px');
                            });
                        }
                        ticking = false;
                    }

                    window.addEventListener('scroll', () => {
                        if (!ticking) {
                            ticking = true;
                            requestAnimationFrame(updateParallax);
                        }
                    }, {
                        passive: true
                    });

                    updateParallax();
                }
            }


            /* ---------- 7. Back to top ---------- */
            const backToTop = document.getElementById('backToTop');
            if (backToTop) {
                window.addEventListener('scroll', () => {
                    backToTop.classList.toggle('show', window.scrollY > 400);
                }, {
                    passive: true
                });

                backToTop.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: reduceMotion ? 'auto' : 'smooth'
                    });
                });
            }

        });
    </script>


</body>

</html>