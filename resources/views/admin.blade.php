<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <title>BETTA | Admin Dashboard</title>
</head>

<body data-dashboard="{{ json_encode($dashboardData ?? null) }}"
    data-refresh-url="{{ Route::has('admin.dashboard.data') ? route('admin.dashboard.data') : '' }}">


    <div class="admin-layout">

        <!-- Sidebar -->
        <aside class="sidebar">

            <div class="logo">
                <h3>BETTA</h3>
                
                <span>Admin Panel</span>
            </div>

            <nav class="side-nav">

                <a href="{{ route('admin') }}"
                    class="nav-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                    <span>⌂</span>
                    Dashboard
                </a>

                <a href="{{ route('admind') }}"
                    class="nav-item {{ request()->routeIs('admind') ? 'active' : '' }}">
                    <span>♡</span>
                    Donations
                </a>

                <a href="{{ route('admingoods') }}"
                    class="nav-item {{ request()->routeIs('admingoods') ? 'active' : '' }}">
                    <span>▤</span>
                    Donated Goods
                </a>

                <a href="{{ route('adminr') }}"
                    class="nav-item {{ request()->routeIs('adminr') ? 'active' : '' }}">
                    <span>▣</span>
                    Donation Requests
                </a>

                <a href="{{ route('adminc') }}"
                    class="nav-item {{ request()->routeIs('adminc') ? 'active' : '' }}">
                    <span>◆</span>
                    Causes / Projects
                </a>

                <!-- MONITORING -->
                <a href="{{ route('adminmonitor') }}"
                    class="nav-item {{ request()->routeIs('adminmonitor') ? 'active' : '' }}">
                    <span><i class="bi bi-geo-alt"></i></span>
                    Monitoring
                </a>

                <a href="{{ route('adminu') }}"
                    class="nav-item {{ request()->routeIs('adminu') ? 'active' : '' }}">
                    <span>♙</span>
                    Users
                </a>

                <a href="{{ route('adminreport') }}"
                    class="nav-item {{ request()->routeIs('adminreport') ? 'active' : '' }}">
                    <span>▥</span>
                    Reports
                </a>

            </nav>


            <div class="sidebar-bottom">

                <a href="{{ route('adminset') }}" class="nav-item">
                    <span>⚙</span>
                    Settings
                </a>

                <a href="{{ route('home') }}" class="nav-item logout">
                    <span>↪</span>
                    Logout
                </a>

            </div>

        </aside>



        <!-- MAIN DASHBOARD -->
        <main class="dashboard">

            <!-- DASHBOARD HEADER -->
            <div class="dashboard-header">

                <div>

                    <p class="small-title">
                        ADMIN DASHBOARD
                    </p>

                    <h1>
                        Welcome back, Admin
                    </h1>

                </div>

            </div>



            <!-- DASHBOARD CARDS -->
            <div class="dashboard-stats mt-4 mb-4">

                <!-- LARGE CARD -->
                <div class="dashboard-card main-donation-card">

                    <div class="monetary-header">

                        <div class="card-icon">
                            ₱
                        </div>

                        <span class="monetary-badge">
                            Total Contributions
                        </span>

                    </div>

                    <div class="monetary-total">

                        <p>Total Monetary Donations</p>

                        <h2>₱0</h2>

                        <span class="monetary-subtitle">
                            Combined donations from causes and projects
                        </span>

                    </div>

                    <div class="monetary-divider"></div>

                    <div class="monetary-breakdown">

                        <div class="monetary-breakdown-header">
                            <h4>Donation Breakdown</h4>
                            <span>2026</span>
                        </div>

                        <div class="monetary-progress">
                            <div class="progress-causes"></div>
                            <div class="progress-projects"></div>
                        </div>

                        <div class="monetary-item">

                            <div class="monetary-item-label">
                                <span class="monetary-dot causes-dot"></span>
                                <span>Causes</span>
                            </div>

                            <strong>₱0</strong>

                        </div>

                        <div class="monetary-item">

                            <div class="monetary-item-label">
                                <span class="monetary-dot projects-dot"></span>
                                <span>Projects</span>
                            </div>

                            <strong>₱0</strong>

                        </div>

                    </div>

                </div>


                <!-- TOTAL GOODS -->
                <div class="dashboard-card goods-card">

                    <div class="card-icon">
                        <i class="bi bi-basket"></i>
                    </div>

                    <p>Total Goods</p>

                    <h2>0</h2>

                </div>


                <!-- DONATIONS RECEIVED -->
                <div class="dashboard-card received-card">

                    <div class="card-icon">
                        ♡
                    </div>

                    <p>Donations Received</p>

                    <h2>0</h2>

                </div>


                <!-- USERS -->
                <div class="dashboard-card users-card">

                    <div class="card-icon">
                        ♙
                    </div>

                    <p>Users</p>

                    <h2>0</h2>

                </div>


                <!-- ACTIVE CAUSES -->
                <div class="dashboard-card causes-card">

                    <div class="card-icon">
                        ◆
                    </div>

                    <p>Active Causes</p>

                    <h2>0</h2>

                </div>

            </div>


            <!-- DONATION ANALYTICS -->
            <section class="donation-analytics">

                <div class="analytics-header">
                    <br>
                    <div>
                        <h3>Donation Analytics</h3>
                    </div>

                    <br>

                    <!-- FILTER CONTROLS -->
                    <div class="analytics-controls">

                        <input type="radio" name="donationType" id="filterAll" checked>
                        <input type="radio" name="donationType" id="filterCauses">
                        <input type="radio" name="donationType" id="filterProjects">

                        <input type="radio" name="timePeriod" id="filterWeekly">
                        <input type="radio" name="timePeriod" id="filterMonthly" checked>
                        <input type="radio" name="timePeriod" id="filterAnnually">

                        <div class="analytics-filters">

                            <div class="filter-group">

                                <span>Donation Type</span>

                                <div class="filter-buttons">

                                    <label for="filterAll" class="filter-btn all-btn">
                                        All Donations
                                    </label>

                                    <label for="filterCauses" class="filter-btn causes-btn">
                                        Causes
                                    </label>

                                    <label for="filterProjects" class="filter-btn projects-btn">
                                        Projects
                                    </label>

                                </div>

                            </div>

                            <div class="filter-group">

                                <span>Time Period</span>

                                <div class="filter-buttons">

                                    <label for="filterWeekly" class="filter-btn weekly-btn">
                                        Weekly
                                    </label>

                                    <label for="filterMonthly" class="filter-btn monthly-btn">
                                        Monthly
                                    </label>

                                    <label for="filterAnnually" class="filter-btn annually-btn">
                                        Annually
                                    </label>

                                </div>

                            </div>

                        </div>


                        <!-- ANALYTICS GRAPH -->
                        <div class="analytics-chart-card">

                            <div class="chart-header">

                                <div>
                                    <h4>Donation Trends</h4>
                                    <p>Cause and project donation performance.</p>
                                </div>

                                <div class="chart-legend">

                                    <span class="legend-causes">
                                        <i></i> Cause Donations
                                    </span>

                                    <span class="legend-projects">
                                        <i></i> Project Donations
                                    </span>

                                </div>

                            </div>


                            <!-- MONTHLY GRAPH -->
                            <div class="chart-panel monthly-panel">

                                <div class="chart-scroll">

                                    <svg viewBox="0 0 900 350"
                                        class="donation-line-chart"
                                        role="img"
                                        aria-label="Monthly cause and project donation trends">

                                        <!-- GRID -->
                                        <line x1="80" y1="50" x2="850" y2="50" class="grid-line" />
                                        <line x1="80" y1="110" x2="850" y2="110" class="grid-line" />
                                        <line x1="80" y1="170" x2="850" y2="170" class="grid-line" />
                                        <line x1="80" y1="230" x2="850" y2="230" class="grid-line" />
                                        <line x1="80" y1="290" x2="850" y2="290" class="grid-line" />

                                        <!-- Y AXIS -->
                                        <text x="15" y="55">₱120k</text>
                                        <text x="25" y="115">₱90k</text>
                                        <text x="25" y="175">₱60k</text>
                                        <text x="25" y="235">₱30k</text>
                                        <text x="45" y="295">₱0</text>

                                        <!-- X AXIS (Nov to Oct) -->
                                        <text x="120.0" y="325" text-anchor="middle">Nov</text>
                                        <text x="183.6" y="325" text-anchor="middle">Dec</text>
                                        <text x="247.3" y="325" text-anchor="middle">Jan</text>
                                        <text x="310.9" y="325" text-anchor="middle">Feb</text>
                                        <text x="374.5" y="325" text-anchor="middle">Mar</text>
                                        <text x="438.2" y="325" text-anchor="middle">Apr</text>
                                        <text x="501.8" y="325" text-anchor="middle">May</text>
                                        <text x="565.5" y="325" text-anchor="middle">Jun</text>
                                        <text x="629.1" y="325" text-anchor="middle">Jul</text>
                                        <text x="692.7" y="325" text-anchor="middle">Aug</text>
                                        <text x="756.4" y="325" text-anchor="middle">Sep</text>
                                        <text x="820.0" y="325" text-anchor="middle">Oct</text>

                                        <!-- PROJECT LINE -->
                                        <polyline
                                            class="project-line"
                                            points="120.0,290 183.6,290 247.3,290 310.9,290 374.5,290 438.2,290 501.8,290 565.5,290 629.1,290 692.7,290 756.4,290 820.0,290" />

                                        <!-- PROJECT POINTS -->
                                        <g class="project-points">
                                            <circle cx="120.0" cy="290" r="6" />
                                            <circle cx="183.6" cy="290" r="6" />
                                            <circle cx="247.3" cy="290" r="6" />
                                            <circle cx="310.9" cy="290" r="6" />
                                            <circle cx="374.5" cy="290" r="6" />
                                            <circle cx="438.2" cy="290" r="6" />
                                            <circle cx="501.8" cy="290" r="6" />
                                            <circle cx="565.5" cy="290" r="6" />
                                            <circle cx="629.1" cy="290" r="6" />
                                            <circle cx="692.7" cy="290" r="6" />
                                            <circle cx="756.4" cy="290" r="6" />
                                            <circle cx="820.0" cy="290" r="6" />
                                        </g>

                                        <!-- CAUSE LINE -->
                                        <polyline
                                            class="cause-line"
                                            points="120.0,290 183.6,290 247.3,290 310.9,290 374.5,290 438.2,290 501.8,290 565.5,290 629.1,290 692.7,290 756.4,290 820.0,290" />

                                        <!-- CAUSE POINTS -->
                                        <g class="cause-points">
                                            <circle cx="120.0" cy="290" r="6" />
                                            <circle cx="183.6" cy="290" r="6" />
                                            <circle cx="247.3" cy="290" r="6" />
                                            <circle cx="310.9" cy="290" r="6" />
                                            <circle cx="374.5" cy="290" r="6" />
                                            <circle cx="438.2" cy="290" r="6" />
                                            <circle cx="501.8" cy="290" r="6" />
                                            <circle cx="565.5" cy="290" r="6" />
                                            <circle cx="629.1" cy="290" r="6" />
                                            <circle cx="692.7" cy="290" r="6" />
                                            <circle cx="756.4" cy="290" r="6" />
                                            <circle cx="820.0" cy="290" r="6" />
                                        </g>

                                    </svg>

                                </div>

                            </div>


                            <!-- WEEKLY GRAPH -->
                            <div class="chart-panel weekly-panel">

                                <div class="chart-scroll">

                                    <svg viewBox="0 0 900 350"
                                        class="donation-line-chart"
                                        role="img"
                                        aria-label="Weekly cause and project donation trends">

                                        <line x1="80" y1="50" x2="850" y2="50" class="grid-line" />
                                        <line x1="80" y1="110" x2="850" y2="110" class="grid-line" />
                                        <line x1="80" y1="170" x2="850" y2="170" class="grid-line" />
                                        <line x1="80" y1="230" x2="850" y2="230" class="grid-line" />
                                        <line x1="80" y1="290" x2="850" y2="290" class="grid-line" />

                                        <text x="20" y="55">₱10k</text>
                                        <text x="25" y="115">₱7.5k</text>
                                        <text x="25" y="175">₱5k</text>
                                        <text x="25" y="235">₱2.5k</text>
                                        <text x="45" y="295">₱0</text>

                                        <text x="105" y="325">Mon</text>
                                        <text x="225" y="325">Tue</text>
                                        <text x="345" y="325">Wed</text>
                                        <text x="465" y="325">Thu</text>
                                        <text x="585" y="325">Fri</text>
                                        <text x="705" y="325">Sat</text>
                                        <text x="815" y="325">Sun</text>

                                        <polyline
                                            class="project-line"
                                            points="120,290 240,290 360,290 480,290 600,290 720,290 820,290" />

                                        <g class="project-points">
                                            <circle cx="120" cy="290" r="6" />
                                            <circle cx="240" cy="290" r="6" />
                                            <circle cx="360" cy="290" r="6" />
                                            <circle cx="480" cy="290" r="6" />
                                            <circle cx="600" cy="290" r="6" />
                                            <circle cx="720" cy="290" r="6" />
                                            <circle cx="820" cy="290" r="6" />
                                        </g>

                                        <polyline
                                            class="cause-line"
                                            points="120,290 240,290 360,290 480,290 600,290 720,290 820,290" />

                                        <g class="cause-points">
                                            <circle cx="120" cy="290" r="6" />
                                            <circle cx="240" cy="290" r="6" />
                                            <circle cx="360" cy="290" r="6" />
                                            <circle cx="480" cy="290" r="6" />
                                            <circle cx="600" cy="290" r="6" />
                                            <circle cx="720" cy="290" r="6" />
                                            <circle cx="820" cy="290" r="6" />
                                        </g>

                                    </svg>

                                </div>

                            </div>


                            <!-- ANNUAL GRAPH -->
                            <div class="chart-panel annually-panel">

                                <div class="chart-scroll">

                                    <svg viewBox="0 0 900 350"
                                        class="donation-line-chart"
                                        role="img"
                                        aria-label="Annual cause and project donation trends">

                                        <line x1="80" y1="50" x2="850" y2="50" class="grid-line" />
                                        <line x1="80" y1="110" x2="850" y2="110" class="grid-line" />
                                        <line x1="80" y1="170" x2="850" y2="170" class="grid-line" />
                                        <line x1="80" y1="230" x2="850" y2="230" class="grid-line" />
                                        <line x1="80" y1="290" x2="850" y2="290" class="grid-line" />

                                        <text x="15" y="55">₱400k</text>
                                        <text x="15" y="115">₱300k</text>
                                        <text x="15" y="175">₱200k</text>
                                        <text x="15" y="235">₱100k</text>
                                        <text x="45" y="295">₱0</text>

                                        <text x="110" y="325">2026</text>
                                        <text x="280" y="325">2027</text>
                                        <text x="450" y="325">2028</text>
                                        <text x="620" y="325">2029</text>
                                        <text x="790" y="325">2030</text>

                                        <polyline
                                            class="project-line"
                                            points="120,290 295,290 470,290 645,290 820,290" />

                                        <g class="project-points">
                                            <circle cx="120" cy="290" r="6" />
                                            <circle cx="295" cy="290" r="6" />
                                            <circle cx="470" cy="290" r="6" />
                                            <circle cx="645" cy="290" r="6" />
                                            <circle cx="820" cy="290" r="6" />
                                        </g>

                                        <polyline
                                            class="cause-line"
                                            points="120,290 295,290 470,290 645,290 820,290" />

                                        <g class="cause-points">
                                            <circle cx="120" cy="290" r="6" />
                                            <circle cx="295" cy="290" r="6" />
                                            <circle cx="470" cy="290" r="6" />
                                            <circle cx="645" cy="290" r="6" />
                                            <circle cx="820" cy="290" r="6" />
                                        </g>

                                    </svg>

                                </div>

                            </div>

                            <p class="chart-note">
                                Donation tracking starts in November 2026.
                                All charts show real donation data as it is received.
                            </p>

                        </div>

                    </div>


                    <!-- SUMMARY CARDS -->
                    <div class="row g-4 mt-1">

                        <!-- CAUSE SUMMARY -->
                        <div class="col-lg-6">

                            <div class="analytics-summary cause-summary">

                                <h4>Donation Cause Summary</h4>
                                <p>Current cause status.</p>

                                <div class="summary-item">
                                    <div>
                                        <strong>Active Causes</strong>
                                        <span>Currently accepting donations</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                                <div class="summary-item">
                                    <div>
                                        <strong>Completed Causes</strong>
                                        <span>Successfully completed</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                                <div class="summary-item">
                                    <div>
                                        <strong>Total Causes</strong>
                                        <span>All causes</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                            </div>

                        </div>


                        <!-- PROJECT SUMMARY -->
                        <div class="col-lg-6">

                            <div class="analytics-summary project-summary">

                                <h4>Project Summary</h4>
                                <p>Current project status.</p>

                                <div class="summary-item">
                                    <div>
                                        <strong>Active Projects</strong>
                                        <span>Currently accepting donations</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                                <div class="summary-item">
                                    <div>
                                        <strong>Completed Projects</strong>
                                        <span>Successfully completed</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                                <div class="summary-item">
                                    <div>
                                        <strong>Total Projects</strong>
                                        <span>All projects</span>
                                    </div>
                                    <h3>0</h3>
                                </div>

                            </div>

                        </div>

                    </div>

            </section>


        </main>

    </div>


    <script>
        (function() {
            'use strict';

            /* =====================================================================
               CONFIG + DATA SOURCE (Laravel)
               ---------------------------------------------------------------------
               SERVER_DATA   : the controller may pass $dashboardData to this view.
               REFRESH_URL   : JSON endpoint used by Auto Refresh. It stays empty
                               (auto refresh does nothing) until you create a route
                               named 'admin.dashboard.data'.
               If neither exists, the dashboard shows an empty system (all zeros).
               ===================================================================== */
            const SERVER_DATA = JSON.parse(document.body.dataset.dashboard || 'null');
            const REFRESH_URL = document.body.dataset.refreshUrl || null;
            const REFRESH_MS = 30000; // 30 seconds

            const NS = 'http://www.w3.org/2000/svg';
            const PANELS = {
                weekly: {
                    sel: '.weekly-panel',
                    points: 7,
                    defaultMax: 10000
                },
                monthly: {
                    sel: '.monthly-panel',
                    points: 12,
                    defaultMax: 120000
                },
                annually: {
                    sel: '.annually-panel',
                    points: 5,
                    defaultMax: 400000
                }
            };
            const TYPE_IDS = {
                filterAll: 'all',
                filterCauses: 'causes',
                filterProjects: 'projects'
            };
            const PERIOD_IDS = {
                filterWeekly: 'weekly',
                filterMonthly: 'monthly',
                filterAnnually: 'annually'
            };

            const $ = (s, r) => (r || document).querySelector(s);
            const $$ = (s, r) => Array.from((r || document).querySelectorAll(s));

            /* ---------- number helpers ---------- */
            const num = v => {
                v = Number(v);
                return isFinite(v) ? v : 0;
            };
            const peso = n => '₱' + num(n).toLocaleString('en-PH', {
                maximumFractionDigits: 2
            });
            const whole = n => Math.round(num(n)).toLocaleString('en-PH');

            function axisLabel(v) {
                if (v >= 1000000) return '₱' + +(v / 1000000).toFixed(2) + 'M';
                if (v >= 1000) return '₱' + +(v / 1000).toFixed(2) + 'k';
                return '₱' + +v.toFixed(2);
            }

            function niceMax(v) {
                const p = Math.pow(10, Math.floor(Math.log10(v)));
                const f = v / p;
                return (f <= 1 ? 1 : f <= 2 ? 2 : f <= 5 ? 5 : 10) * p;
            }

            /* =====================================================================
               DATA NORMALIZER  (also guarantees a clean all-zero start)
               Expected JSON shape:
               {
                 stats:     { totalMonetary, causesAmount, projectsAmount, totalGoods,
                              donationsReceived, users, activeCauses },
                 summary:   { causes:{active,completed,total}, projects:{...} },
                 analytics: { weekly:{labels,causes,projects}, monthly:{...}, annually:{...} }
               }
               ===================================================================== */
            function series(arr, n) {
                const a = Array.isArray(arr) ? arr.slice(-n).map(num) : [];
                while (a.length < n) a.push(0);
                return a;
            }

            function normalize(raw) {
                raw = raw || {};
                const s = raw.stats || {},
                    sm = raw.summary || {},
                    an = raw.analytics || {};
                const grp = g => ({
                    active: num(g && g.active),
                    completed: num(g && g.completed),
                    total: num(g && g.total)
                });
                const out = {
                    stats: {
                        causesAmount: num(s.causesAmount),
                        projectsAmount: num(s.projectsAmount),
                        totalGoods: num(s.totalGoods),
                        donationsReceived: num(s.donationsReceived),
                        users: num(s.users),
                        activeCauses: num(s.activeCauses)
                    },
                    summary: {
                        causes: grp(sm.causes),
                        projects: grp(sm.projects)
                    },
                    analytics: {}
                };
                out.stats.totalMonetary = s.totalMonetary != null ? num(s.totalMonetary) :
                    out.stats.causesAmount + out.stats.projectsAmount;

                Object.keys(PANELS).forEach(k => {
                    const n = PANELS[k].points,
                        a = an[k] || {};
                    out.analytics[k] = {
                        labels: Array.isArray(a.labels) ? a.labels.slice(-n).map(String) : null,
                        causes: series(a.causes, n),
                        projects: series(a.projects, n)
                    };
                });

                return out;
            }

            let state = normalize(null);
            const filters = {
                type: 'all',
                period: 'monthly'
            };

            /* =====================================================================
               ANIMATED DASHBOARD STATISTICS (start at 0, end at value)
               ===================================================================== */
            const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function animateNumber(el, to, fmt) {
                if (!el) return;
                const from = el._val || 0;
                if (el._raf) cancelAnimationFrame(el._raf);
                if (from === to || reduceMotion) {
                    el._val = to;
                    el.textContent = fmt(to);
                    return;
                }
                const start = performance.now(),
                    dur = 1200;
                (function step(now) {
                    const t = Math.min((now - start) / dur, 1);
                    const eased = 1 - Math.pow(1 - t, 3);
                    el._val = from + (to - from) * eased;
                    el.textContent = fmt(el._val);
                    if (t < 1) el._raf = requestAnimationFrame(step);
                    else {
                        el._val = to;
                        el.textContent = fmt(to);
                    }
                })(start);
            }

            function updateStats() {
                const s = state.stats;
                animateNumber($('.main-donation-card .monetary-total h2'), s.totalMonetary, peso);
                const items = $$('.monetary-item strong');
                animateNumber(items[0], s.causesAmount, peso);
                animateNumber(items[1], s.projectsAmount, peso);
                animateNumber($('.goods-card h2'), s.totalGoods, whole);
                animateNumber($('.received-card h2'), s.donationsReceived, whole);
                animateNumber($('.users-card h2'), s.users, whole);
                animateNumber($('.causes-card h2'), s.activeCauses, whole);

                const total = s.causesAmount + s.projectsAmount;
                const pc = $('.progress-causes'),
                    pp = $('.progress-projects');
                if (pc) pc.style.width = (total ? (s.causesAmount / total) * 100 : 0) + '%';
                if (pp) pp.style.width = (total ? (s.projectsAmount / total) * 100 : 0) + '%';

                const c = state.summary.causes,
                    p = state.summary.projects;
                const cs = $$('.cause-summary .summary-item h3'),
                    ps = $$('.project-summary .summary-item h3');
                [c.active, c.completed, c.total].forEach((v, i) => animateNumber(cs[i], v, whole));
                [p.active, p.completed, p.total].forEach((v, i) => animateNumber(ps[i], v, whole));
            }

            /* =====================================================================
               INTERACTIVE ANALYTICS FILTERS (+ chart drawing)
               ===================================================================== */
            function drawSeries(svg, key, values, max, visible, name, labels) {
                const line = $('.' + key + '-line', svg),
                    g = $('.' + key + '-points', svg);
                if (!line || !g) return;
                const n = values.length;
                const pts = values.map((v, i) => ({
                    x: n === 1 ? 470 : 120 + i * (700 / (n - 1)),
                    y: 290 - (Math.min(v, max) / max) * 240,
                    v: v
                }));
                line.setAttribute('points', pts.map(p => p.x.toFixed(1) + ',' + p.y.toFixed(1)).join(' '));
                g.replaceChildren.apply(g, pts.map((p, i) => {
                    const c = document.createElementNS(NS, 'circle');
                    c.setAttribute('cx', p.x.toFixed(1));
                    c.setAttribute('cy', p.y.toFixed(1));
                    c.setAttribute('r', '6');
                    c.dataset.value = p.v;
                    c.dataset.label = labels[i] || '';
                    c.dataset.series = name;
                    c.style.cursor = 'pointer';
                    return c;
                }));
                line.style.display = g.style.display = visible ? '' : 'none';
            }

            function renderPanel(key) {
                const cfg = PANELS[key],
                    panel = $(cfg.sel);
                if (!panel) return;
                const svg = $('svg', panel),
                    d = state.analytics[key];
                const showC = filters.type !== 'projects',
                    showP = filters.type !== 'causes';

                const visible = [].concat(showC ? d.causes : [], showP ? d.projects : []);
                const vmax = Math.max.apply(null, [0].concat(visible));
                const max = vmax > 0 ? niceMax(vmax) : cfg.defaultMax;

                // Y axis labels (top to bottom)
                $$('text:not([y="325"])', svg).forEach((t, i) => {
                    t.textContent = axisLabel(max * (4 - i) / 4);
                });

                // X axis labels (only replaced when the server sends matching labels)
                const xl = $$('text[y="325"]', svg);
                if (d.labels && d.labels.length === xl.length) xl.forEach((t, i) => {
                    t.textContent = d.labels[i];
                });
                const labels = xl.map(t => t.textContent);

                drawSeries(svg, 'project', d.projects, max, showP, 'Project donations', labels);
                drawSeries(svg, 'cause', d.causes, max, showC, 'Cause donations', labels);
            }

            function renderCharts() {
                Object.keys(PANELS).forEach(k => {
                    const panel = $(PANELS[k].sel);
                    if (panel) panel.style.display = (k === filters.period) ? 'block' : 'none';
                    renderPanel(k);
                });
                const lc = $('.legend-causes'),
                    lp = $('.legend-projects');
                if (lc) lc.style.opacity = filters.type === 'projects' ? '0.35' : '';
                if (lp) lp.style.opacity = filters.type === 'causes' ? '0.35' : '';
            }

            function readFilters() {
                const t = $('input[name="donationType"]:checked'),
                    p = $('input[name="timePeriod"]:checked');
                filters.type = (t && TYPE_IDS[t.id]) || 'all';
                filters.period = (p && PERIOD_IDS[p.id]) || 'monthly';
            }
            $$('input[name="donationType"], input[name="timePeriod"]').forEach(r =>
                r.addEventListener('change', () => {
                    readFilters();
                    renderCharts();
                }));

            /* =====================================================================
               CHART TOOLTIPS
               ===================================================================== */
            const tip = document.createElement('div');
            tip.setAttribute('role', 'tooltip');
            Object.assign(tip.style, {
                position: 'fixed',
                zIndex: '2000',
                pointerEvents: 'none',
                display: 'none',
                padding: '6px 10px',
                borderRadius: '6px',
                background: '#212529',
                color: '#fff',
                fontSize: '13px',
                lineHeight: '1.35',
                boxShadow: '0 2px 8px rgba(0,0,0,.25)'
            });
            document.body.appendChild(tip);

            function moveTip(e) {
                const w = tip.offsetWidth,
                    h = tip.offsetHeight;
                let x = e.clientX + 14,
                    y = e.clientY - h - 10;
                if (x + w > window.innerWidth - 8) x = e.clientX - w - 14;
                if (y < 8) y = e.clientY + 18;
                tip.style.left = x + 'px';
                tip.style.top = y + 'px';
            }
            const chartCircle = e => (e.target instanceof Element) ? e.target.closest('.donation-line-chart circle') : null;

            document.addEventListener('pointerover', e => {
                const c = chartCircle(e);
                if (!c) return;
                tip.replaceChildren();
                const a = document.createElement('strong');
                a.textContent = c.dataset.series;
                const b = document.createElement('div');
                b.textContent = (c.dataset.label ? c.dataset.label + ': ' : '') + peso(c.dataset.value);
                tip.append(a, b);
                tip.style.display = 'block';
                moveTip(e);
            });
            document.addEventListener('pointermove', e => {
                if (tip.style.display === 'block' && chartCircle(e)) moveTip(e);
            });
            document.addEventListener('pointerout', e => {
                if (chartCircle(e)) tip.style.display = 'none';
            });

            /* =====================================================================
               AUTO REFRESH (fetch JSON, no page reload)
               ===================================================================== */
            function applyData(raw) {
                state = normalize(raw);
                updateStats();
                renderCharts();
            }

            let refreshing = false;
            async function refresh() {
                if (!REFRESH_URL || refreshing || document.hidden) return;
                refreshing = true;
                try {
                    const res = await fetch(REFRESH_URL, {
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        credentials: 'same-origin',
                        cache: 'no-store'
                    });
                    if (!res.ok) throw new Error('HTTP ' + res.status);
                    applyData(await res.json());
                } catch (err) {
                    console.warn('BETTA dashboard refresh failed:', err.message);
                } finally {
                    refreshing = false;
                }
            }
            setInterval(refresh, REFRESH_MS);
            document.addEventListener('visibilitychange', () => {
                if (!document.hidden) refresh();
            });

            /* =====================================================================
               INIT
               ===================================================================== */
            readFilters();
            applyData(SERVER_DATA); // null => fresh system, everything 0
            if (!SERVER_DATA && REFRESH_URL) refresh();
        })();
    </script>

</body>

</html>