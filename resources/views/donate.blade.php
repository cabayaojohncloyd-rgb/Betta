<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Fund a Project</title>
</head>

<body>

    @include('partials.navbar')

    <!-- HERO -->
    <section class="hero1">
        <div class="hero1-content">
            <p class="hero1-small-title">FUND A PROJECT</p>
            <h1>Support Long-Term Solutions to End Hunger</h1>
            <p class="hero1-text">
                Help us finance long-term initiatives that provide continuous food supplies and financial
                resources to empower our community for years to come.
            </p>
        </div>

        <div class="hero1-image">
            <img src="{{ asset('images/himg.jpg') }}" alt="">
        </div>
    </section>


    <!-- PROJECTS -->
    <section class="projects-section" id="projects">
        <div class="container">

            <div class="section-heading">
                <div class="scroll-scale">
                    <p class="small-title">OUR INITIATIVES</p>
                    <h2>Choose a Project to Support</h2>
                    <p>Select a project category below to help build sustainable food security across our community.</p>
                </div>
            </div>

            <div class="row g-4" id="projectGrid">

                <!-- CARD 1 -->
                <div class="col-lg-4 col-md-6" data-category="food livelihood">
                    <div class="donation-card scroll-scale">
                        <div class="card-content">
                            <h3>Neighborhood Cluster Poultry Coops</h3>
                        </div>

                        <img src="{{ asset('images/chicken.jpg') }}" alt="Neighborhood poultry coop">

                        <div class="card-content">
                            <p>
                                Establishes 10 shared neighborhood coops, providing 100
                                families with a continuous supply of fresh food and shared income.
                            </p>

                            <div class="donation-info">
                                <div><small>Goal</small><strong>₱250,000</strong></div>
                                <div><small>Provided</small><strong>₱0</strong></div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 0%;"></div>
                            </div>

                            <div class="card-buttons">
                                <button type="button" class="read-more-btn"
                                    data-bs-toggle="modal" data-bs-target="#poultryModal">Read More</button>

                                <a href="#donation-form" class="donate-btn fund-trigger" data-project="poultry">
                                    Fund This Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-6" data-category="food environment">
                    <div class="donation-card scroll-scale">
                        <div class="card-content">
                            <h3>Community Seed Libraries & Composting Hubs</h3>
                        </div>

                        <img src="{{ asset('images/seed1.jpg') }}" alt="Community seed library">

                        <div class="card-content">
                            <p>
                                Provides free seeds and organic compost to local families,
                                enabling continuous home gardening through a shared
                                community-borrowing model.
                            </p>

                            <div class="donation-info">
                                <div><small>Goal</small><strong>₱100,000</strong></div>
                                <div><small>Provided</small><strong>₱0</strong></div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 0%;"></div>
                            </div>

                            <div class="card-buttons">
                                <button type="button" class="read-more-btn"
                                    data-bs-toggle="modal" data-bs-target="#seedModal">Read More</button>

                                <a href="#donation-form" class="donate-btn fund-trigger" data-project="seed">
                                    Fund This Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-lg-4 col-md-6" data-category="livelihood environment">
                    <div class="donation-card scroll-scale">
                        <div class="card-content">
                            <h3>Barangay Shared Coconut & Fruit Tree Nursery</h3>
                        </div>

                        <img src="{{ asset('images/fimg3.jpg') }}" alt="Community fruit tree nursery">

                        <div class="card-content">
                            <p>
                                Grows fruit and coconut saplings for families, providing
                                climate-resilient food and long-term income.
                            </p>

                            <div class="donation-info">
                                <div><small>Goal</small><strong>₱150,000</strong></div>
                                <div><small>Provided</small><strong>₱0</strong></div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar" style="width: 0%;"></div>
                            </div>

                            <div class="card-buttons">
                                <button type="button" class="read-more-btn"
                                    data-bs-toggle="modal" data-bs-target="#nurseryModal">Read More</button>

                                <a href="#donation-form" class="donate-btn fund-trigger" data-project="nursery">
                                    Fund This Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- POULTRY COOPS MODAL -->
            <div class="modal fade" id="poultryModal" tabindex="-1" aria-labelledby="poultryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content project-modal">

                        <div class="modal-header">
                            <h4 class="modal-title" id="poultryModalLabel">
                                Neighborhood Cluster Poultry Coops
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <h5>Overview</h5>
                            <p>
                                This project establishes 10 shared neighborhood poultry coops
                                in selected barangays of Panabo City, providing 100 families
                                with a sustainable source of fresh food and opportunities
                                for additional income.
                            </p>

                            <h5>Total Project Budget</h5>
                            <p class="project-budget">₱250,000</p>

                            <h5>Budget Breakdown</h5>

                            <div class="table-responsive">
                                <table class="table project-budget-table">
                                    <thead>
                                        <tr>
                                            <th>Expenses</th>
                                            <th>Estimated Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Construction of 10 poultry coops</td>
                                            <td>₱95,000</td>
                                        </tr>
                                        <tr>
                                            <td>150 chickens</td>
                                            <td>₱18,000</td>
                                        </tr>
                                        <tr>
                                            <td>Chicken feeds</td>
                                            <td>₱35,000</td>
                                        </tr>
                                        <tr>
                                            <td>Feeding and water containers</td>
                                            <td>₱7,000</td>
                                        </tr>
                                        <tr>
                                            <td>Vitamins and vaccinations</td>
                                            <td>₱10,000</td>
                                        </tr>
                                        <tr>
                                            <td>Equipment and maintenance materials</td>
                                            <td>₱29,000</td>
                                        </tr>
                                        <tr>
                                            <td>Transportation and training</td>
                                            <td>₱25,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency fund</td>
                                            <td>₱31,000</td>
                                        </tr>
                                        <tr class="total-row">
                                            <td>TOTAL</td>
                                            <td>₱250,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="donate-btn fund-trigger" data-project="poultry">
                                Fund This Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEED LIBRARIES MODAL -->
            <div class="modal fade" id="seedModal" tabindex="-1" aria-labelledby="seedModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content project-modal">

                        <div class="modal-header">
                            <h4 class="modal-title" id="seedModalLabel">
                                Community Seed Libraries & Composting Hubs
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <h5>Overview</h5>
                            <p>
                                This project provides free vegetable seeds and organic compost
                                to families in selected barangays of Panabo City, promoting
                                sustainable home gardening through shared community seed libraries
                                and composting hubs.
                            </p>

                            <h5>Total Project Budget</h5>
                            <p class="project-budget">₱100,000</p>

                            <h5>Budget Breakdown</h5>

                            <div class="table-responsive">
                                <table class="table project-budget-table">
                                    <thead>
                                        <tr>
                                            <th>Expenses</th>
                                            <th>Estimated Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vegetable seeds</td>
                                            <td>₱15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Seed storage and organizers</td>
                                            <td>₱15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Composting bins</td>
                                            <td>₱15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Organic fertilizers and soil</td>
                                            <td>₱12,500</td>
                                        </tr>
                                        <tr>
                                            <td>Gardening tools and equipment</td>
                                            <td>₱20,000</td>
                                        </tr>
                                        <tr>
                                            <td>Community workshops</td>
                                            <td>₱7,500</td>
                                        </tr>
                                        <tr>
                                            <td>Transportation</td>
                                            <td>₱5,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency fund</td>
                                            <td>₱10,000</td>
                                        </tr>
                                        <tr class="total-row">
                                            <td>TOTAL</td>
                                            <td>₱100,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="donate-btn fund-trigger" data-project="seed">
                                Fund This Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FRUIT TREE NURSERY MODAL -->
            <div class="modal fade" id="nurseryModal" tabindex="-1" aria-labelledby="nurseryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content project-modal">

                        <div class="modal-header">
                            <h4 class="modal-title" id="nurseryModalLabel">
                                Barangay Shared Coconut & Fruit Tree Nursery
                            </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <h5>Overview</h5>
                            <p>
                                This project establishes a community nursery in selected barangays
                                of Panabo City, growing coconut and fruit tree seedlings to provide
                                local families with sustainable food sources and long-term
                                livelihood opportunities.
                            </p>

                            <h5>Total Project Budget</h5>
                            <p class="project-budget">₱150,000</p>

                            <h5>Budget Breakdown</h5>

                            <div class="table-responsive">
                                <table class="table project-budget-table">
                                    <thead>
                                        <tr>
                                            <th>Expenses</th>
                                            <th>Estimated Cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nursery construction</td>
                                            <td>₱42,000</td>
                                        </tr>
                                        <tr>
                                            <td>500 coconut and fruit seedlings</td>
                                            <td>₱42,000</td>
                                        </tr>
                                        <tr>
                                            <td>Organic fertilizers and compost</td>
                                            <td>₱10,000</td>
                                        </tr>
                                        <tr>
                                            <td>Planting bags and containers</td>
                                            <td>₱5,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gardening tools</td>
                                            <td>₱7,000</td>
                                        </tr>
                                        <tr>
                                            <td>Watering equipment</td>
                                            <td>₱14,000</td>
                                        </tr>
                                        <tr>
                                            <td>Transportation and training</td>
                                            <td>₱15,000</td>
                                        </tr>
                                        <tr>
                                            <td>Emergency fund</td>
                                            <td>₱15,000</td>
                                        </tr>
                                        <tr class="total-row">
                                            <td>TOTAL</td>
                                            <td>₱150,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="donate-btn fund-trigger" data-project="nursery">
                                Fund This Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- HOW IT WORKS -->
    <section class="how-section">
        <div class="container">

            <div class="how-header scroll-scale">
                <p class="small-title">HOW IT WORKS</p>
                <h2>Turn Your Donation Into Lasting Change</h2>
                <p>Choose a project, make a contribution, and help create a sustainable solution for the community.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="step-card scroll-scale">
                        <span>01</span>
                        <h3>Choose a Project</h3>
                        <p>Select the long-term project you want to support.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step-card scroll-scale">
                        <span>02</span>
                        <h3>Make a Donation</h3>
                        <p>Choose how much you would like to contribute to the project.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="step-card scroll-scale">
                        <span>03</span>
                        <h3>Make an Impact</h3>
                        <p>Your contribution helps fund solutions that can benefit communities over time.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- PROJECT IMPACT -->
    <section class="impact-section">
        <div class="container">

            <div class="impact-header scroll-scale">
                <p class="small-title">OUR IMPACT</p>
                <h2>Building a Stronger Future Together</h2>
            </div>

            <div class="row g-4 text-center">

                <div class="col-md-3">
                    <div class="impact-card scroll-scale">
                        <h3 class="count-up" data-count="0" data-prefix="₱">₱0</h3>
                        <p>Total Funds Raised</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card scroll-scale">
                        <h3 class="count-up" data-count="0">0</h3>
                        <p>Projects Funded</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card scroll-scale">
                        <h3 class="count-up" data-count="3">3</h3>
                        <p>Total Projects</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="impact-card scroll-scale">
                        <h3 class="count-up" data-count="0" data-suffix="+">0+</h3>
                        <p>Families Supported</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- DONATION FORM -->
    <section class="donation-form-section" id="donation-form">
        <div class="container">
            <div class="donation-form-box scroll-scale">

                <div class="donation-form-heading">
                    <p class="small-title">MAKE A DIFFERENCE</p>
                    <h2>Fund a Project</h2>
                    <p>Your donation helps support long-term solutions that create lasting change in communities.</p>
                </div>

                <form id="donationForm" novalidate>
                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="project">Select a Project</label>
                            <select id="project" name="project" class="form-control" required>
                                <option value="" selected disabled>Choose a project</option>
                                <option value="poultry">Neighborhood Cluster Poultry Coops</option>
                                <option value="seed">Community Seed Libraries & Composting Hubs</option>
                                <option value="nursery">Barangay Shared Coconut & Fruit Tree Nursery</option>
                            </select>
                            <div class="invalid-feedback" id="projectError"></div>
                        </div>

                        <div class="col-md-6">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="form-control"
                                placeholder="Enter your full name" autocomplete="name" required>
                            <div class="invalid-feedback" id="fullnameError"></div>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email" autocomplete="email" required>
                            <div class="invalid-feedback" id="emailError"></div>
                        </div>

                        <!-- Amount selector -->
                        <div class="col-12">
                            <label id="amountLabel">Donation Amount</label>

                            <div class="amount-options" id="amountOptions" role="group" aria-labelledby="amountLabel">
                                <button type="button" class="amount-btn" data-amount="100" aria-pressed="false">₱100</button>
                                <button type="button" class="amount-btn" data-amount="500" aria-pressed="false">₱500</button>
                                <button type="button" class="amount-btn" data-amount="1000" aria-pressed="false">₱1,000</button>
                                <button type="button" class="amount-btn" data-amount="2500" aria-pressed="false">₱2,500</button>
                                <button type="button" class="amount-btn" data-amount="custom" aria-pressed="false">Custom</button>
                            </div>

                            <div id="customAmountWrap" class="d-none mt-2">
                                <div class="input-group">
                                    <span class="input-group-text">₱</span>
                                    <input type="text" id="customAmount" name="custom_amount" class="form-control"
                                        inputmode="numeric" placeholder="Enter amount (minimum ₱50)">
                                </div>
                            </div>

                            <div class="field-error d-none" id="amountError" role="alert"></div>

                            <!-- Impact calculator -->
                            <p class="impact-text" id="impactText" aria-live="polite">
                                Select a project and an amount to see what your gift could support.
                            </p>
                        </div>

                        <div class="col-md-12">
                            <label for="message">Message <span>(Optional)</span></label>
                            <textarea id="message" name="message" class="form-control" rows="4"
                                maxlength="500" placeholder="Leave a message..."></textarea>
                        </div>

                        <!-- Dynamic summary -->
                        <div class="col-12">
                            <div class="donation-summary d-none" id="donationSummary" aria-live="polite">
                                <h5>Donation Summary</h5>
                                <div class="summary-row"><span>Project</span><strong id="sumProject">Not selected</strong></div>
                                <div class="summary-row"><span>Amount</span><strong id="sumAmount">Not selected</strong></div>
                                <div class="summary-row"><span>Project funding</span><strong id="sumProgress">&mdash;</strong></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="submit-donation" id="paymentBtn">Payment Method →</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>


    <!-- DONATION INFORMATION -->
    <section class="donation-info-section">
        <div class="container">
            <div class="donation-info-box scroll-scale">
                <div class="row align-items-center">

                    <div class="col-lg-7">
                        <p class="small-title">YOUR SUPPORT MATTERS</p>
                        <h2>Small Donations Can Fund Big Solutions</h2>
                        <p>
                            Your contribution can help BETTA develop projects that provide
                            communities with lasting access to food and resources.
                        </p>
                    </div>

                    <div class="col-lg-5">
                        <div class="support-list">
                            <div><span>✓</span> Community food gardens</div>
                            <div><span>✓</span> Community livelihood programs</div>
                            <div><span>✓</span> Long-term food initiatives</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


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
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
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

            const $ = id => document.getElementById(id);

            const peso = n => '₱' + Number(n).toLocaleString('en-PH', {
                maximumFractionDigits: 2
            });

            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            const PAYMENT_URL = "{{ route('fund') }}";
            const PLEDGE_KEY = 'betta_fund_pledge';

            const MIN_AMOUNT = 50,
                MAX_AMOUNT = 1000000;

            /*
             * Project goals and costs remain unchanged.
             * Only the raised amounts have been reset to zero.
             */
            const PROJECTS = {
                poultry: {
                    name: 'Neighborhood Cluster Poultry Coops',
                    goal: 250000,
                    raised: 0,
                    unit: 120,
                    single: 'chicken',
                    plural: 'chickens'
                },

                seed: {
                    name: 'Community Seed Libraries & Composting Hubs',
                    goal: 100000,
                    raised: 0,
                    budgetLine: 15000,
                    budgetLabel: 'vegetable seed'
                },

                nursery: {
                    name: 'Barangay Shared Coconut & Fruit Tree Nursery',
                    goal: 150000,
                    raised: 0,
                    unit: 84,
                    single: 'seedling',
                    plural: 'seedlings'
                }
            };


            /* ---------- Scroll visibility helper ---------- */

            function onVisible(els, cb, threshold = 0.3) {

                if (!('IntersectionObserver' in window)) {
                    els.forEach(cb);
                    return;
                }

                const io = new IntersectionObserver((entries, obs) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {
                            cb(entry.target);
                            obs.unobserve(entry.target);
                        }

                    });

                }, {
                    threshold
                });

                els.forEach(el => io.observe(el));
            }


            /* ---------- Animated progress bars ---------- */

            const bars = [...document.querySelectorAll('.donation-card .progress-bar')];

            if (!reduceMotion) {

                bars.forEach(bar => {
                    bar.dataset.target = bar.style.width;
                    bar.style.width = '0%';
                });

                onVisible(bars.map(b => b.parentElement), wrap => {

                    const bar = wrap.querySelector('.progress-bar');

                    requestAnimationFrame(() => {
                        bar.style.width = bar.dataset.target;
                    });

                }, 0.4);
            }


            /* ---------- Animated impact statistics ---------- */

            function countUp(el) {

                const target = +el.dataset.count;

                const prefix = el.dataset.prefix || '';
                const suffix = el.dataset.suffix || '';

                const duration = 1500;
                const start = performance.now();

                (function tick(now) {

                    const p = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - p, 3);

                    el.textContent = prefix +
                        Math.round(target * eased).toLocaleString('en-PH') +
                        suffix;

                    if (p < 1) requestAnimationFrame(tick);

                })(start);
            }

            const counters = [...document.querySelectorAll('.count-up')];

            if (!reduceMotion) {

                counters.forEach(el => {

                    el.textContent =
                        (el.dataset.prefix || '') +
                        '0' +
                        (el.dataset.suffix || '');

                });

                onVisible(counters, countUp, 0.5);
            }


            /* ---------- Amount state ---------- */

            let amountMode = null;
            let presetAmount = 0;

            function getAmount() {

                if (amountMode === 'preset') return presetAmount;

                if (amountMode === 'custom') {

                    const v = $('customAmount').value.trim();

                    return /^\d+$/.test(v) ? parseInt(v, 10) : 0;
                }

                return 0;
            }


            function amountError() {

                if (!amountMode) return 'Choose a donation amount.';

                if (amountMode === 'custom') {

                    const v = $('customAmount').value.trim();

                    if (!v) return 'Enter your amount.';

                    if (!/^\d+$/.test(v)) {
                        return 'Enter a whole number in pesos.';
                    }
                }

                const a = getAmount();

                if (a < MIN_AMOUNT) {
                    return `Minimum donation is ${peso(MIN_AMOUNT)}.`;
                }

                if (a > MAX_AMOUNT) {
                    return `Maximum online donation is ${peso(MAX_AMOUNT)}.`;
                }

                return '';
            }


            function showAmountError(msg) {

                $('amountError').textContent = msg;

                $('amountError').classList.toggle('d-none', !msg);

                $('customAmount').classList.toggle(
                    'is-invalid',
                    amountMode === 'custom' && !!msg
                );
            }


            /* ---------- Impact calculator ---------- */

            function impactText(key, amt) {

                const p = PROJECTS[key];

                if (!p) {
                    return 'Select a project and an amount to see what your gift could support.';
                }

                if (p.unit) {

                    if (!amt) {
                        return `Each ${p.single} costs about ${peso(p.unit)} in this project's budget.`;
                    }

                    const n = Math.floor(amt / p.unit);

                    return n >= 1 ?
                        `${peso(amt)} could cover about ${n} ${n === 1 ? p.single : p.plural}.` :
                        `${peso(amt)} goes toward the cost of one ${p.single} (about ${peso(p.unit)} each).`;
                }

                if (!amt) {
                    return `The ${p.budgetLabel} budget for this project is ${peso(p.budgetLine)}.`;
                }

                const pct = Math.min(100, amt / p.budgetLine * 100);

                return `${peso(amt)} covers about ${pct.toFixed(pct < 10 ? 1 : 0)}% of the ${peso(p.budgetLine)} ${p.budgetLabel} budget.`;
            }


            /* ---------- Dynamic donation summary ---------- */

            function updateSummary() {

                const key = $('project').value;
                const p = PROJECTS[key];
                const amt = getAmount();

                $('donationSummary').classList.toggle('d-none', !p && !amt);

                $('sumProject').textContent = p ? p.name : 'Not selected';
                $('sumAmount').textContent = amt ? peso(amt) : 'Not selected';

                if (p) {

                    const cur = p.raised / p.goal * 100;
                    const after = Math.min(100, (p.raised + amt) / p.goal * 100);

                    $('sumProgress').textContent = amt ?
                        `${cur.toFixed(1)}% → ${after.toFixed(1)}% of ${peso(p.goal)}` :
                        `${cur.toFixed(1)}% of ${peso(p.goal)}`;

                } else {

                    $('sumProgress').textContent = '—';
                }
            }


            function refresh() {

                $('impactText').textContent =
                    impactText($('project').value, getAmount());

                updateSummary();
            }


            /* ---------- Amount selector events ---------- */

            $('amountOptions').addEventListener('click', e => {

                const btn = e.target.closest('.amount-btn');

                if (!btn) return;

                document.querySelectorAll('.amount-btn').forEach(b => {

                    b.classList.toggle('active', b === btn);

                    b.setAttribute('aria-pressed', b === btn);
                });

                if (btn.dataset.amount === 'custom') {

                    amountMode = 'custom';

                    $('customAmountWrap').classList.remove('d-none');

                    $('customAmount').focus();

                    showAmountError('');

                } else {

                    amountMode = 'preset';

                    presetAmount = +btn.dataset.amount;

                    $('customAmountWrap').classList.add('d-none');

                    $('customAmount').value = '';

                    showAmountError('');
                }

                refresh();
            });


            $('customAmount').addEventListener('input', () => {

                if ($('customAmount').value.trim()) {
                    showAmountError(amountError());
                } else {
                    showAmountError('');
                }

                refresh();
            });


            $('customAmount').addEventListener('blur', () => {
                showAmountError(amountError());
            });


            /* ---------- Field validation ---------- */

            const rules = {

                project: v => PROJECTS[v] ? '' : 'Please select a project.',

                fullname: v =>
                    /^[A-Za-zÀ-ÿ.'\- ]{3,}$/.test(v.trim()) ?
                    '' : 'Enter your full name (letters only, at least 3 characters).',

                email: v =>
                    /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) ?
                    '' : 'Enter a valid email address.'
            };

            const touched = new Set();


            function validateField(el) {

                const msg = rules[el.id](el.value);

                el.classList.toggle('is-invalid', !!msg);

                el.classList.toggle('is-valid', !msg && el.value !== '');

                $(el.id + 'Error').textContent = msg;

                return !msg;
            }


            Object.keys(rules).forEach(id => {

                const el = $(id);

                el.addEventListener('blur', () => {

                    touched.add(id);

                    validateField(el);
                });

                ['input', 'change'].forEach(evt => {

                    el.addEventListener(evt, () => {

                        if (touched.has(id) || id === 'project') {
                            validateField(el);
                        }

                        refresh();
                    });

                });

            });


            function validateAll() {

                let firstBad = null;

                Object.keys(rules).forEach(id => {

                    touched.add(id);

                    if (!validateField($(id)) && !firstBad) {
                        firstBad = $(id);
                    }

                });

                const aErr = amountError();

                showAmountError(aErr);

                if (aErr && !firstBad) {
                    firstBad = $('amountOptions');
                }

                if (firstBad) {

                    firstBad.scrollIntoView({
                        behavior: reduceMotion ? 'auto' : 'smooth',
                        block: 'center'
                    });

                    if (firstBad.focus) {
                        firstBad.focus({
                            preventScroll: true
                        });
                    }

                    const firstBtn = firstBad.querySelector &&
                        firstBad.querySelector('button');

                    if (firstBtn) {
                        firstBtn.focus({
                            preventScroll: true
                        });
                    }
                }

                return !firstBad;
            }


            /* ---------- Project selection and auto-fill ---------- */

            function flash(el) {

                el.classList.remove('field-flash');

                void el.offsetWidth;

                el.classList.add('field-flash');

                setTimeout(() => el.classList.remove('field-flash'), 1600);
            }


            function selectProject(key) {

                $('project').value = key;

                validateField($('project'));

                refresh();
            }


            function goToForm(key) {

                selectProject(key);

                $('donation-form').scrollIntoView({
                    behavior: reduceMotion ? 'auto' : 'smooth',
                    block: 'start'
                });

                flash($('project'));
            }


            document.querySelectorAll('.fund-trigger').forEach(trigger => {

                trigger.addEventListener('click', e => {

                    e.preventDefault();

                    const key = trigger.dataset.project;

                    const modalEl = trigger.closest('.modal');

                    if (modalEl) {

                        modalEl.addEventListener(
                            'hidden.bs.modal',
                            () => goToForm(key), {
                                once: true
                            }
                        );

                        bootstrap.Modal.getOrCreateInstance(modalEl).hide();

                    } else {

                        goToForm(key);
                    }

                });

            });


            /* ---------- Submit + loading state ---------- */

            let submitting = false;


            function setLoading(on) {

                const btn = $('paymentBtn');

                submitting = on;

                btn.disabled = on;

                btn.innerHTML = on ?
                    '<span class="spinner-border spinner-border-sm me-2" aria-hidden="true"></span>Preparing payment...' :
                    'Payment Method →';
            }


            $('donationForm').addEventListener('submit', e => {

                e.preventDefault();

                if (submitting) return;

                if (!validateAll()) return;

                const key = $('project').value;

                const pledge = {

                    project: key,

                    projectName: PROJECTS[key].name,

                    fullname: $('fullname').value.trim(),

                    email: $('email').value.trim(),

                    message: $('message').value.trim(),

                    amount: getAmount(),

                    savedAt: Date.now()
                };


                try {

                    sessionStorage.setItem(
                        PLEDGE_KEY,
                        JSON.stringify(pledge)
                    );

                } catch (err) {}


                setLoading(true);

                window.location.href = PAYMENT_URL;

                setTimeout(() => setLoading(false), 10000);
            });


            /* ---------- Reset button when returning to the page ---------- */

            window.addEventListener('pageshow', e => {

                if (e.persisted) {
                    setLoading(false);
                }

            });


            /* ---------- Initialize ---------- */

            refresh();

        });
    </script>

</body>

</html>