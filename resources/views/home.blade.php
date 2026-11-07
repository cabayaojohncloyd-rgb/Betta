<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <title>BETTA | Home</title>
</head>

<body>

    @include('partials.navbar')

    <br><br><br>

    <!-- HERO -->
    <section class="hero-container">
        <div class="container py-5">
            <div class="row align-items-center g-5">

                <div class="col-lg-6 hero-text">
                    <span class="hero-badge">Community-powered food security</span>

                    <h1 class="hero-title mt-3">
                        Bringing every table to abundance.
                    </h1>

                    <p class="hero-desc">
                        By sharing funds and essential supplies, we unite local people to
                        eliminate empty plates and build sustainable, long-term food security everywhere.
                    </p>

                    <div class="hero-actions d-flex flex-wrap gap-3">
                        <a href="{{ route('sc') }}" class="btn btn-hero">Donate now</a>
                        <a href="{{ route('req') }}" class="btn btn-hero-outline">Request a donation</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image-wrap">
                        <img src="{{ asset('images/aimg.jpg') }}"
                            alt="Volunteer handing a bag of food to a neighbor at a community distribution"
                            class="hero-image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- IMPACT -->
    <section class="impact-section">
        <div class="container">
            <div class="impact-card">
                <div class="row row-cols-2 row-cols-md-4 g-0">

                    <div class="col impact-col">
                        <div class="impact-item">
                            <h3 class="impact-number" data-target="0">0</h3>
                            <span class="impact-label">meals shared</span>
                        </div>
                    </div>

                    <div class="col impact-col">
                        <div class="impact-item">
                            <h3 class="impact-number" data-target="0">0</h3>
                            <span class="impact-label">families helped</span>
                        </div>
                    </div>

                    <div class="col impact-col">
                        <div class="impact-item">
                            <h3 class="impact-number" data-target="0">0</h3>
                            <span class="impact-label">active donors</span>
                        </div>
                    </div>

                    <div class="col impact-col">
                        <div class="impact-item">
                            <h3 class="impact-number" data-target="0">0</h3>
                            <span class="impact-label">active projects</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section class="how-it-works">
        <div class="container">

            <div class="text-center">
                <h2 class="how-title">How BETTA works</h2>
                <p class="section-text">Three simple steps from giving to a full plate.</p>
            </div>

            <div class="row g-4 mt-3">

                <div class="col-md-4">
                    <div class="step scroll-scale">
                        <div class="step-icon"><i class="bi bi-heart"></i></div>
                        <h4>1. Donate</h4>
                        <p>Quickly provide financial support or essential daily supplies by using only a few simple taps.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step scroll-scale">
                        <div class="step-icon"><i class="bi bi-people"></i></div>
                        <h4>2. Match</h4>
                        <p>We seamlessly match your thoughtful donations directly with a verified local request in your community.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step scroll-scale">
                        <div class="step-icon"><i class="bi bi-truck"></i></div>
                        <h4>3. Deliver</h4>
                        <p>Dedicated volunteers bring it straight to the table, letting you see the direct results clearly.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br><br>

    <!-- WHY FOOD DONATION MATTERS -->
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-6">
                <div class="image-collage scroll-scale">
                    <img src="{{ asset('images/img1.jpg') }}" alt="" class="img-fluid img-top">
                    <img src="{{ asset('images/img2.jpg') }}" alt="" class="img-fluid img-bottom">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="scroll-scale">
                    <h5 class="h5text">Why food donation matters</h5>
                    <h1 class="h1text">Together, We Can End Hunger</h1>
                    <h3 class="h3text">
                        Every donation helps feed a hungry family and supports people in need.
                        Together, we can share our resources to ensure no one in our community goes hungry.
                    </h3>
                </div>
            </div>

        </div>
    </div>

    <br><br><br>

    <!-- DONATION CARDS -->
    <div class="container mt-2 mb-5">
        <div class="row g-4 donation-grid">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Feed families in <br> Tagpore</h3>
                    </div>

                    <img src="{{ asset('images/fam1.jpg') }}" alt="Food donation">

                    <div class="card-content">

                        <p>
                            Your support funds complete grocery packs, providing local
                            families with essential, nutritious food daily.
                        </p>

                        <div class="donation-info">
                            <div>
                                <small>Goal</small>
                                <strong>100 meals</strong>
                            </div>

                            <div class="text-end">
                                <small>Provided</small>
                                <strong>0 meals</strong>
                            </div>
                        </div>

                        <div class="progress-meta">
                            <span class="progress-percent">0% funded</span>
                            <span class="deadline" data-deadline="2027-01-01"></span>
                        </div>

                        <div class="progress" role="progressbar"
                            aria-label="Funding progress"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-valuenow="0">

                            <div class="progress-bar"
                                data-goal="100"
                                data-provided="0"
                                style="width: 0%;">
                            </div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal1">
                                Read More
                            </button>

                            <a href="{{ route('foodpack1') }}" class="donate-btn">Donate</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Help Us Serve Fresh Meals to Children in Buenavista.</h3>
                    </div>

                    <img src="{{ asset('images/childeating.jpg') }}" alt="Children eating">

                    <div class="card-content">

                        <p>
                            Your support funds daily, nutrient-rich meals, helping local
                            children stay healthy, focused, and nourished.
                        </p>

                        <div class="donation-info">
                            <div>
                                <small>Goal</small>
                                <strong>100 meals</strong>
                            </div>

                            <div class="text-end">
                                <small>Provided</small>
                                <strong>0 meals</strong>
                            </div>
                        </div>

                        <div class="progress-meta">
                            <span class="progress-percent">0% funded</span>
                            <span class="deadline" data-deadline="2027-01-01"></span>
                        </div>

                        <div class="progress" role="progressbar"
                            aria-label="Funding progress"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-valuenow="0">

                            <div class="progress-bar"
                                data-goal="100"
                                data-provided="0"
                                style="width: 0%;">
                            </div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal2">
                                Read More
                            </button>

                            <a href="{{ route('fund') }}" class="donate-btn">Donate</a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Donate life-saving food in Maduao</h3>
                    </div>

                    <img src="{{ asset('images/fam2.jpg') }}" alt="Community pantry">

                    <div class="card-content">

                        <p>
                            Your generosity delivers essential food packs,
                            providing immediate hunger relief and hope to vulnerable households.
                        </p>

                        <div class="donation-info">
                            <div>
                                <small>Goal</small>
                                <strong>100 meals</strong>
                            </div>

                            <div class="text-end">
                                <small>Provided</small>
                                <strong>0 meals</strong>
                            </div>
                        </div>

                        <div class="progress-meta">
                            <span class="progress-percent">0% funded</span>
                            <span class="deadline" data-deadline="2027-01-01"></span>
                        </div>

                        <div class="progress" role="progressbar"
                            aria-label="Funding progress"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            aria-valuenow="0">

                            <div class="progress-bar"
                                data-goal="100"
                                data-provided="0"
                                style="width: 0%;">
                            </div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal3">
                                Read More
                            </button>

                            <a href="{{ route('foodpack1') }}" class="donate-btn">Donate</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- MODAL 1 -->
    <div class="modal fade" id="foodPackModal1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Feed Families in Tagpore</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>
                        This project provides nutritious food packs to families
                        experiencing food insecurity in the local community.
                    </p>

                    <h6>Location</h6>
                    <p>Tagpore, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Food Pack Includes</h6>
                    <ul>
                        <li>5 kg Rice</li>
                        <li>4 Cans of Canned Goods</li>
                        <li>2 Packs Noodles</li>
                        <li>1 Liter Cooking Oil</li>
                        <li>Other Essential Food Items</li>
                    </ul>

                    <h6>Estimated Cost</h6>
                    <p><strong>₱500 per food pack</strong></p>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL 2 -->
    <div class="modal fade" id="foodPackModal2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        Help Us Serve Fresh Meals to Children in Buenavista.
                    </h5>

                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>
                        This project provides fresh and nutritious meals to children
                        who may not have regular access to healthy food.
                    </p>

                    <h6>Location</h6>
                    <p>Buenavista, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Meal Includes</h6>
                    <ul>
                        <li>Rice</li>
                        <li>Protein or Meat</li>
                        <li>Vegetables</li>
                        <li>Fruit</li>
                        <li>Drinking Water</li>
                    </ul>

                    <h6>Estimated Cost</h6>
                    <p><strong>₱100 per meal</strong></p>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL 3 -->
    <div class="modal fade" id="foodPackModal3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Donate life-saving food in Maduao</h5>

                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>
                        This project provides immediate, essential food packs
                        to vulnerable families in need across Maduao.
                    </p>

                    <h6>Location</h6>
                    <p>Maduao, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Pantry Supplies Include</h6>
                    <ul>
                        <li>5 kg Rice</li>
                        <li>4 Cans of Canned Goods</li>
                        <li>2 Packs Noodles</li>
                        <li>1 Liter Cooking Oil</li>
                        <li>Other Essential Food Items</li>
                    </ul>

                    <h6>Estimated Cost</h6>
                    <p><strong>₱500 per family food package</strong></p>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">

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

                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('req') }}">Request a donation</a>
                    <a href="{{ route('sc') }}">Select a Cause</a>
                    <a href="{{ route('donate') }}">Fund a Project</a>
                </div>

                <div class="col-md-4">
                    <h4>Contact</h4>
                    <p>BETTA</p>
                    <p>BETTA@gmail.com</p>
                    <p>+63 900 000 0000</p>
                </div>

                <div class="footer-bottom">
                    <a href="{{ route('adminlog') }}" class="admin-login">Admin Login</a>
                </div>

            </div>
        </div>
    </footer>

    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top"
        aria-label="Back to top">

        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round"
            aria-hidden="true">

            <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </button>

    <!-- JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* ---------- Scroll reveal ---------- */
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            document.querySelectorAll('.scroll-scale').forEach(el => {
                revealObserver.observe(el);
            });

            /* ---------- Impact counter ---------- */
            function countUp(el) {
                const target = +el.dataset.target;
                const duration = 1500;
                const start = performance.now();

                function tick(now) {
                    const progress = Math.min((now - start) / duration, 1);

                    el.textContent = Math.floor(progress * target).toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    }
                }

                requestAnimationFrame(tick);
            }

            const impactCard = document.querySelector('.impact-card');

            if (impactCard) {
                const impactObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.querySelectorAll('.impact-number').forEach(countUp);
                            impactObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.4
                });

                impactObserver.observe(impactCard);
            }

            /* ---------- Progress bars + percentage ---------- */
            const barObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;

                    const bar = entry.target;
                    const goal = Number(bar.dataset.goal);
                    const provided = Number(bar.dataset.provided);

                    const percent = goal > 0 ?
                        Math.min(Math.round((provided / goal) * 100), 100) :
                        0;

                    bar.style.width = percent + '%';

                    bar.parentElement.setAttribute('aria-valuenow', percent);

                    const label = bar.closest('.donation-card')
                        .querySelector('.progress-percent');

                    if (label) {
                        label.textContent = percent + '% funded';
                    }

                    barObserver.unobserve(bar);
                });
            }, {
                threshold: 0.5
            });

            document.querySelectorAll('.progress-bar[data-goal]').forEach(bar => {
                barObserver.observe(bar);
            });

            /* ---------- Deadline countdown ---------- */
            document.querySelectorAll('.deadline[data-deadline]').forEach(el => {

                const deadline = new Date(el.dataset.deadline + 'T23:59:59');
                const days = Math.ceil((deadline - new Date()) / 86400000);

                if (days > 1) {
                    el.textContent = days + ' days left';
                } else if (days === 1) {
                    el.textContent = '1 day left';
                } else if (days === 0) {
                    el.textContent = 'Last day!';
                } else {
                    el.textContent = 'Deadline passed';
                }

            });

            /* ---------- Back to top + navbar shadow ---------- */
            const backToTop = document.getElementById('backToTop');
            const navbar = document.querySelector('.navbar');

            window.addEventListener('scroll', () => {

                const y = window.scrollY;

                if (backToTop) {
                    backToTop.classList.toggle('show', y > 400);
                }

                if (navbar) {
                    navbar.classList.toggle('scrolled', y > 10);
                }

            }, {
                passive: true
            });

            if (backToTop) {
                backToTop.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

        });
    </script>

</body>

</html>