<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Select a Cause</title>
</head>

<body>

    @include('partials.navbar')

    <!-- HERO -->
    <section class="hero1">
        <div class="hero1-content">
            <p class="hero1-small-title">SELECT A CAUSE</p>
            <h1>Help Us Feed<br>Stronger Communities</h1>
            <p class="hero1-text">
                Your support helps provide food, meals, and essential
                resources to schools, families, and communities in need.
            </p>
        </div>

        <div class="hero1-image">
            <img src="{{ asset('images/himg.jpg') }}" alt="">
        </div>
    </section>

    <!-- CONTROLS -->
    <div class="container mt-5">
        <div class="cause-controls">

            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="search" id="searchInput" class="form-control"
                    placeholder="Search by title or barangay" aria-label="Search campaigns">
            </div>

            <div class="type-filters" role="group" aria-label="Filter by donation type">
                <button type="button" class="type-btn active" data-type-filter="all" aria-pressed="true">All</button>
                <button type="button" class="type-btn" data-type-filter="food-pack" aria-pressed="false">Food Packs</button>
                <button type="button" class="type-btn" data-type-filter="prepared-meal" aria-pressed="false">Prepared Meals</button>
            </div>

            <select id="sortSelect" class="form-select" aria-label="Sort campaigns">
                <option value="default">Sort: Default</option>
                <option value="progress-high">Most funded</option>
                <option value="progress-low">Least funded</option>
                <option value="urgency">Most urgent</option>
                <option value="az">Alphabetical (A–Z)</option>
            </select>

            <button type="button" class="reset-btn js-reset">
                <i class="bi bi-arrow-counterclockwise"></i> Reset
            </button>

        </div>

        <p id="resultCount" class="result-count" aria-live="polite"></p>

        <div id="noResults" class="no-results d-none" role="status">
            <i class="bi bi-search"></i>
            <h4>No campaigns found</h4>
            <p>Try a different keyword or donation type, or reset the filters.</p>
            <button type="button" class="reset-btn js-reset">Reset filters</button>
        </div>
    </div>

    <!-- CAMPAIGNS -->
    <div class="container mt-4 mb-5">
        <div class="row g-4 donation-grid" id="campaignGrid">

            <!-- CARD 1: TAGPORE -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Feed families in Tagpore"
                data-place="Tagpore"
                data-type="food-pack"
                data-goal="100"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Feed families in Tagpore</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/fam1.jpg') }}" alt="A family sharing a meal in Tagpore">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Your support funds complete grocery packs, providing local families with essential, nutritious food daily.</p>

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
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal1">Read More</button>

                            <a href="{{ route('foodpack1') }}" class="donate-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2: BUENAVISTA -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Help Us Serve Fresh Meals to Children in Buenavista"
                data-place="Buenavista"
                data-type="prepared-meal"
                data-goal="100"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Help Us Serve Fresh Meals to Children in Buenavista.</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/childeating.jpg') }}" alt="Children eating together in Buenavista">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Your support funds daily, nutrient-rich meals, helping local children stay healthy, focused, and nourished.</p>

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
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal2">Read More</button>

                            <a href="{{ route('fund') }}" class="donate-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3: MADUAO -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Donate life-saving meals in Maduao"
                data-place="Maduao"
                data-type="food-pack"
                data-goal="120"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Donate life-saving meals in Maduao</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/fam2.jpg') }}" alt="A mother and her children sharing food in Maduao">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Your generosity delivers essential food packs, providing immediate hunger relief and hope to vulnerable households.</p>

                        <div class="donation-info">
                            <div>
                                <small>Goal</small>
                                <strong>120 meals</strong>
                            </div>

                            <div class="text-end">
                                <small>Provided</small>
                                <strong>0 meals</strong>
                            </div>
                        </div>

                        <div class="progress-meta">
                            <span class="progress-percent">0% funded</span>
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal3">Read More</button>

                            <a href="{{ route('foodpack1') }}" class="donate-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 4: NANYO -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Warm Cooked Meals for Nanyo Families"
                data-place="Nanyo"
                data-type="prepared-meal"
                data-goal="100"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Warm Cooked Meals for Nanyo Families</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/fam5.jpg') }}" alt="Warm cooked meals for families in Nanyo">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Bringing healthy, nutritious meals and direct support to families in need across Nanyo.</p>

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
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal4">Read More</button>

                            <a href="{{ route('fund') }}" class="donate-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 5: KATUALAN -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Food Packs for Katualan Families"
                data-place="Katualan"
                data-type="food-pack"
                data-goal="100"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Food Packs for Katualan Families</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/fam4.jpg') }}" alt="Food packs for families in Katualan">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Giving essential food items and direct support to needy families living across Katualan.</p>

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
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal5">Read More</button>

                            <a href="{{ route('foodpack1') }}" class="donate-btn">Donate</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 6: NEW MALAGA -->
            <div class="col-lg-4 col-md-6 campaign"
                data-title="Hot Meals for New Malaga Families"
                data-place="New Malaga"
                data-type="prepared-meal"
                data-goal="100"
                data-provided="0"
                data-deadline="2027-01-01">

                <div class="donation-card scroll-scale">

                    <div class="card-content">
                        <h3>Hot Meals for New Malaga Families</h3>
                    </div>

                    <div class="card-img-wrap">
                        <img src="{{ asset('images/fam6.jpg') }}" alt="Hot meals for families in New Malaga">

                        <div class="badge-stack">
                            <span class="badge-status"></span>
                            <span class="badge-urgent d-none"><i class="bi bi-alarm-fill"></i> Urgent</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <p>Giving good food and real help to needy families in New Malaga.</p>

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
                            <span class="deadline"></span>
                        </div>

                        <div class="progress" role="progressbar" aria-label="Funding progress"
                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar" style="width: 0%;"></div>
                        </div>

                        <div class="card-buttons">
                            <button type="button" class="read-more-btn"
                                data-bs-toggle="modal" data-bs-target="#foodPackModal6">Read More</button>

                            <a href="{{ route('fund') }}" class="donate-btn">Donate</a>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides nutritious food packs to families experiencing food insecurity in the local community.</p>

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
                    <h5 class="modal-title">Help Us Serve Fresh Meals to Children in Buenavista</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides fresh and nutritious meals to children who may not have regular access to healthy food.</p>

                    <h6>Location</h6>
                    <p>Buenavista, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Meal Includes</h6>
                    <ul>
                        <li>Rice</li>
                        <li>Protein</li>
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
                    <h5 class="modal-title">Donate life-saving meals in Maduao</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides immediate, essential food packs to vulnerable families in need across Maduao.</p>

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

    <!-- MODAL 4 -->
    <div class="modal fade" id="foodPackModal4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warm Cooked Meals for Nanyo Families</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides warm, balanced, and nutritious meals to local families in Nanyo who need regular food support.</p>

                    <h6>Location</h6>
                    <p>Nanyo, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Meal Includes</h6>
                    <ul>
                        <li>Rice</li>
                        <li>Protein</li>
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

    <!-- MODAL 5 -->
    <div class="modal fade" id="foodPackModal5" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Food Packs for Katualan Families</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides essential grocery food packs to local families in Katualan who need food support.</p>

                    <h6>Location</h6>
                    <p>Katualan, Panabo City, Davao del Norte</p>

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

    <!-- MODAL 6 -->
    <div class="modal fade" id="foodPackModal6" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hot Meals for New Malaga Families</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>Overview</h6>
                    <p>This project provides hot and healthy meals to local families in New Malaga who need food support.</p>

                    <h6>Location</h6>
                    <p>New Malaga, Panabo City, Davao del Norte</p>

                    <h6>Date Needed</h6>
                    <p>January 1, 2027</p>

                    <h6>Meal Includes</h6>
                    <ul>
                        <li>Rice</li>
                        <li>Protein</li>
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

    <!-- BACK TO TOP -->
    <button type="button" id="backToTop" class="back-to-top" aria-label="Back to top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </button>

    <!-- FOOTER -->
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

                <!-- QUICK LINKS -->
                <div class="col-md-3">
                    <h4>Quick Links</h4>
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('req') }}">Request a donation</a>
                    <a href="{{ route('sc') }}">Select a Cause</a>
                    <a href="{{ route('donate') }}">Fund a Project</a>
                </div>

                <!-- CONTACT -->
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

    <!-- JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const DAY = 86400000;

            /* ---------- SCROLL REVEAL ---------- */
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


            /* ---------- CAMPAIGNS ---------- */
            const grid = document.getElementById('campaignGrid');

            if (grid) {

                const searchInput = document.getElementById('searchInput');
                const sortSelect = document.getElementById('sortSelect');
                const typeButtons = document.querySelectorAll('[data-type-filter]');
                const resetButtons = document.querySelectorAll('.js-reset');
                const noResults = document.getElementById('noResults');
                const resultCount = document.getElementById('resultCount');

                const state = {
                    query: '',
                    type: 'all',
                    sort: 'default'
                };

                const STATUS_LABELS = {
                    active: 'Active',
                    completed: 'Completed',
                    expired: 'Expired'
                };


                /* BUILD CAMPAIGN RECORDS */
                const items = [...grid.querySelectorAll('.campaign')].map((el, index) => {

                    const d = el.dataset;

                    const goal = Number(d.goal);
                    const provided = Number(d.provided);

                    const percent = goal > 0 ?
                        Math.min(Math.round((provided / goal) * 100), 100) :
                        0;

                    const today = new Date();
                    today.setHours(0, 0, 0, 0);

                    const end = new Date(d.deadline + 'T00:00:00');
                    const days = Math.round((end - today) / DAY);

                    let status = 'active';

                    if (provided >= goal) {
                        status = 'completed';
                    } else if (days < 0) {
                        status = 'expired';
                    }

                    const urgent = status === 'active' && days <= 7;

                    return {
                        el,
                        index,
                        percent,
                        days,
                        status,
                        urgent,
                        title: d.title,
                        titleLower: d.title.toLowerCase(),
                        placeLower: d.place.toLowerCase(),
                        type: d.type
                    };

                });


                /* UPDATE CAMPAIGN INFORMATION */
                items.forEach(it => {

                    const card = it.el.querySelector('.donation-card');

                    /* STATUS BADGE */
                    const statusBadge = it.el.querySelector('.badge-status');

                    statusBadge.textContent = STATUS_LABELS[it.status];

                    statusBadge.classList.add('status-' + it.status);

                    card.classList.add('is-' + it.status);


                    /* URGENT BADGE */
                    it.el.querySelector('.badge-urgent')
                        .classList.toggle('d-none', !it.urgent);


                    /* DEADLINE COUNTDOWN */
                    const deadlineEl = it.el.querySelector('.deadline');

                    let deadlineText;

                    if (it.status === 'completed') {
                        deadlineText = 'Goal reached';
                    } else if (it.status === 'expired') {
                        deadlineText = 'Deadline passed';
                    } else if (it.days === 0) {
                        deadlineText = 'Last day!';
                    } else if (it.days === 1) {
                        deadlineText = '1 day left';
                    } else {
                        deadlineText = it.days + ' days left';
                    }

                    deadlineEl.textContent = deadlineText;

                    deadlineEl.classList.toggle(
                        'deadline-urgent',
                        it.urgent
                    );


                    /* FUNDING PERCENTAGE */
                    it.el.querySelector('.progress-percent').textContent =
                        it.percent + '% funded';


                    /* PROGRESS BAR */
                    const progressBar = it.el.querySelector('.progress-bar');

                    progressBar.style.width = it.percent + '%';

                    const progressContainer = progressBar.parentElement;

                    progressContainer.setAttribute(
                        'aria-valuenow',
                        it.percent
                    );


                    /* DONATE BUTTON */
                    const donateBtn = it.el.querySelector('.donate-btn');

                    if (it.status !== 'active') {

                        donateBtn.setAttribute('aria-disabled', 'true');

                        donateBtn.setAttribute('tabindex', '-1');

                        donateBtn.textContent =
                            it.status === 'completed' ?
                            'Fully funded' :
                            'Closed';

                    }

                });


                /* PREVENT DONATION IF CAMPAIGN IS CLOSED */
                grid.addEventListener('click', (e) => {

                    if (e.target.closest('.donate-btn[aria-disabled="true"]')) {
                        e.preventDefault();
                    }

                });


                /* ---------- ANIMATED PROGRESS BARS ---------- */
                const barObserver = new IntersectionObserver((entries) => {

                    entries.forEach(entry => {

                        if (!entry.isIntersecting) return;

                        const bar = entry.target;

                        const it = items.find(item => item.el.contains(bar));

                        if (it) {

                            bar.style.width = it.percent + '%';

                            bar.parentElement.setAttribute(
                                'aria-valuenow',
                                it.percent
                            );

                        }

                        barObserver.unobserve(bar);

                    });

                }, {
                    threshold: 0.5
                });


                grid.querySelectorAll('.progress-bar').forEach(bar => {
                    barObserver.observe(bar);
                });


                /* ---------- SEARCH, FILTER AND SORT ---------- */

                const urgencyKey = it => {

                    return it.status === 'active' ?
                        it.days :
                        Infinity;

                };


                const sorters = {

                    'default': (a, b) => a.index - b.index,

                    'progress-high': (a, b) =>
                        b.percent - a.percent || a.index - b.index,

                    'progress-low': (a, b) =>
                        a.percent - b.percent || a.index - b.index,

                    'urgency': (a, b) => {

                        const ka = urgencyKey(a);
                        const kb = urgencyKey(b);

                        return ka === kb ?
                            a.index - b.index :
                            ka < kb ? -1 : 1;

                    },

                    'az': (a, b) =>
                        a.title.localeCompare(b.title)

                };


                /* UPDATE CAMPAIGN DISPLAY */
                function update() {

                    const q = state.query.trim().toLowerCase();

                    let visible = 0;

                    items.forEach(it => {

                        const matchesText = !q ||
                            it.titleLower.includes(q) ||
                            it.placeLower.includes(q);

                        const matchesType =
                            state.type === 'all' ||
                            it.type === state.type;

                        const show = matchesText && matchesType;

                        it.el.classList.toggle('d-none', !show);

                        if (show) {
                            visible++;
                        }

                    });


                    /* REORDER CAMPAIGN CARDS */
                    [...items]
                    .sort(sorters[state.sort])
                        .forEach(it => grid.appendChild(it.el));


                    /* NO RESULTS MESSAGE */
                    noResults.classList.toggle('d-none', visible !== 0);


                    /* RESULT COUNT */
                    resultCount.textContent = visible === 0 ?
                        '' :
                        `Showing ${visible} of ${items.length} campaigns`;

                }


                /* SYNC FILTER CONTROLS */
                function syncControls() {

                    searchInput.value = state.query;

                    sortSelect.value = state.sort;

                    typeButtons.forEach(btn => {

                        const active =
                            btn.dataset.typeFilter === state.type;

                        btn.classList.toggle('active', active);

                        btn.setAttribute('aria-pressed', active);

                    });

                }


                /* SEARCH */
                let searchTimer;

                searchInput.addEventListener('input', () => {

                    clearTimeout(searchTimer);

                    searchTimer = setTimeout(() => {

                        state.query = searchInput.value;

                        update();

                    }, 150);

                });


                /* FILTER BY DONATION TYPE */
                typeButtons.forEach(btn => {

                    btn.addEventListener('click', () => {

                        state.type = btn.dataset.typeFilter;

                        syncControls();

                        update();

                    });

                });


                /* SORT CAMPAIGNS */
                sortSelect.addEventListener('change', () => {

                    state.sort = sortSelect.value;

                    update();

                });


                /* RESET SEARCH, FILTER AND SORT */
                resetButtons.forEach(btn => {

                    btn.addEventListener('click', () => {

                        state.query = '';

                        state.type = 'all';

                        state.sort = 'default';

                        syncControls();

                        update();

                    });

                });


                /* INITIAL DISPLAY */
                update();

            }


            /* ---------- BACK TO TOP + NAVBAR SHADOW ---------- */

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


            /* BACK TO TOP BUTTON */
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