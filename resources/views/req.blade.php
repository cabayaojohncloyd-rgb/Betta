<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>BETTA | Request a Donation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.navbar')

    <section class="hero1">
        <div class="hero1-content">
            <p class="hero1-small-title">REQUEST A DONATION</p>
            <h1>Request Food and Financial Support</h1>
            <p class="hero1-text">
                We are here to help. Request food supplies or financial support to strengthen our community.
            </p>
        </div>

        <div class="hero1-image">
            <img src="{{ asset('images/himg.jpg') }}" alt="Food donation">
        </div>
    </section>

    <section class="request-steps">
        <div class="container">
            <div class="steps-heading">
                <h2>How the Request Works</h2>
                <p>It's simple. Just follow these steps.</p>
            </div>

            <div class="row steps-row">
                <div class="col-md-3 step">
                    <div class="step-number">01</div>
                    <h5>Submit Request</h5>
                    <p>Fill out the donation<br>request form.</p>
                    <span class="step-arrow">→</span>
                </div>

                <div class="col-md-3 step">
                    <div class="step-number">02</div>
                    <h5>Review</h5>
                    <p>We review your<br>request.</p>
                    <span class="step-arrow">→</span>
                </div>

                <div class="col-md-3 step">
                    <div class="step-number">03</div>
                    <h5>Confirmation</h5>
                    <p>Get confirmation and<br>details about the request.</p>
                    <span class="step-arrow">→</span>
                </div>

                <div class="col-md-3 step">
                    <div class="step-number">04</div>
                    <h5>Receive Support</h5>
                    <p>Approved donations are<br>arranged and provided.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="donation-request">
        <div class="container">
            <div class="row g-3">

                <div class="col-lg-8">
                    <div class="form-box">
                        <h2>Donation Request Form</h2>

                        <p class="form-subtitle">
                            Fill out the form below and tell us what your organization needs.
                        </p>

                        <!-- Draft restored notice -->
                        <div id="draftNotice" class="alert alert-info d-none">
                            Your saved draft was restored.
                            <button type="button" id="clearDraftBtn" class="btn btn-link p-0 align-baseline">Start over</button>
                        </div>

                        <!-- Progress indicator -->
                        <div class="form-progress">
                            <div class="d-flex justify-content-between">
                                <small>Form completion</small>
                                <small id="progressText">0%</small>
                            </div>
                            <div class="progress">
                                <div id="progressBar" class="progress-bar" style="width:0%"></div>
                            </div>
                        </div>

                        <form id="requestForm" method="POST" action="{{ route('req.store') }}"
                            enctype="multipart/form-data" novalidate>
                            @csrf

                            <h5 class="form-section-title">Organization Information</h5>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label for="organization" class="form-label">Organization Name *</label>
                                    <input type="text" id="organization" name="organization"
                                        class="form-control" placeholder="Enter organization name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="contact" class="form-label">Contact Person *</label>
                                    <input type="text" id="contact" name="contact"
                                        class="form-control" placeholder="Enter full name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" id="email" name="email"
                                        class="form-control" placeholder="Enter email address" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="form-control" placeholder="09XX XXX XXXX" required>
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Distribution Address *</label>

                                    <input type="text" id="address" name="address"
                                        class="form-control"
                                        placeholder="Enter barangay, city or municipality" required>

                                    <button type="button" class="map-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <i class="bi bi-geo-alt"></i>
                                        View Map
                                    </button>

                                    <input type="hidden" id="latitude" name="latitude">
                                    <input type="hidden" id="longitude" name="longitude">

                                    <small class="form-text d-block mt-2">
                                        Pinpoint the exact location on the map.
                                    </small>

                                    <small id="savedLocationMessage" class="saved-location-message">
                                        No map location selected yet.
                                    </small>
                                </div>

                            </div>

                            <h5 class="form-section-title">Donation Requirements</h5>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label for="request_type" class="form-label">Request Type *</label>

                                    <select id="request_type" name="request_type"
                                        class="form-select" required>
                                        <option value="" selected disabled>Select type</option>
                                        <option value="Food Packs">Food Packs</option>
                                        <option value="Meal Sponsorship">Meal Sponsorship</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="beneficiary_count" class="form-label">
                                        Number of People to Support *
                                    </label>

                                    <input type="number" id="beneficiary_count"
                                        name="beneficiary_count" class="form-control"
                                        min="1" placeholder="Enter estimated number" required>
                                </div>

                                <!-- Conditional fields: Food Packs -->
                                <div class="col-md-6 conditional d-none" data-for="Food Packs">
                                    <label for="pack_count" class="form-label">Number of Food Packs Needed *</label>
                                    <input type="number" id="pack_count" name="pack_count" class="form-control"
                                        min="1" placeholder="e.g. 50" required disabled>
                                </div>
                                <div class="col-md-6 conditional d-none" data-for="Food Packs">
                                    <label for="dietary_notes" class="form-label">Dietary Notes (optional)</label>
                                    <input type="text" id="dietary_notes" name="dietary_notes" class="form-control"
                                        placeholder="Allergies, halal, etc." disabled>
                                </div>

                                <!-- Conditional fields: Meal Sponsorship -->
                                <div class="col-md-6 conditional d-none" data-for="Meal Sponsorship">
                                    <label for="meals_per_day" class="form-label">Meals per Day *</label>
                                    <select id="meals_per_day" name="meals_per_day" class="form-select" required disabled>
                                        <option value="" selected disabled>Select</option>
                                        <option value="1">1 meal</option>
                                        <option value="2">2 meals</option>
                                        <option value="3">3 meals</option>
                                    </select>
                                </div>
                                <div class="col-md-6 conditional d-none" data-for="Meal Sponsorship">
                                    <label for="sponsorship_days" class="form-label">Number of Days *</label>
                                    <input type="number" id="sponsorship_days" name="sponsorship_days" class="form-control"
                                        min="1" max="365" placeholder="e.g. 7" required disabled>
                                </div>

                                <div class="col-12">
                                    <label for="reason" class="form-label">Reason for Request *</label>

                                    <textarea id="reason" name="reason"
                                        class="form-control" rows="2"
                                        placeholder="Tell us why your organization needs support"
                                        required></textarea>
                                </div>

                            </div>

                            <h5 class="form-section-title">Distribution Details</h5>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label for="preferred_date" class="form-label">
                                        Preferred Distribution Date
                                    </label>

                                    <input type="date" id="preferred_date"
                                        name="preferred_date" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="distribution_method" class="form-label">
                                        Distribution Method *
                                    </label>

                                    <select id="distribution_method" name="distribution_method"
                                        class="form-select" required>
                                        <option value="" selected disabled>Select method</option>
                                        <option value="Community Feeding Program">Community Feeding Program</option>
                                        <option value="Community Pantry">Community Pantry</option>
                                        <option value="Direct Distribution to Families">Direct Distribution to Families</option>
                                        <option value="Organization Pickup">Organization Pickup</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="additional_info" class="form-label">
                                        Additional Information
                                    </label>

                                    <textarea id="additional_info" name="additional_info"
                                        class="form-control" rows="2"
                                        placeholder="Any other details"></textarea>
                                </div>

                                <div class="col-12">
                                    <label for="document" class="form-label">
                                        Supporting Document (Required)
                                    </label>

                                    <input type="file" id="document" name="document"
                                        class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>

                                    <small class="form-text">
                                        Upload an organization ID or supporting any ID or document.
                                        Accepted formats: PDF, JPG, PNG (max 5 MB).
                                    </small>
                                </div>

                            </div>

                            <div class="form-consent">
                                <input type="checkbox" id="consent" name="consent"
                                    value="1" required>

                                <label for="consent">
                                    I confirm that the information provided is accurate
                                    and that I am authorized to submit this request
                                    on behalf of the organization. *
                                </label>
                            </div>

                            <div class="form-submit">
                                <button type="submit" class="submit-btn">
                                    Submit Request
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="request-info">

                        <h3>What Can You Request?</h3>

                        <p class="info-subtitle">
                            We provide different types of support to meet your needs.
                        </p>

                        <div class="support-card">
                            <div class="support-icon">
                                <i class="bi bi-basket"></i>
                            </div>

                            <div>
                                <h5>Food Pack</h5>
                                <ul>
                                    <li>Rice</li>
                                    <li>Canned goods</li>
                                    <li>Cooking oil</li>
                                    <li>Noodles</li>
                                    <li>Other food supplies</li>
                                </ul>
                            </div>
                        </div>

                        <div class="support-card">
                            <div class="support-icon">
                                <i class="bi bi-basket2"></i>
                            </div>

                            <div>
                                <h5>Meal Sponsorship</h5>
                                <ul>
                                    <li>Rice</li>
                                    <li>Protein</li>
                                    <li>Vegetables</li>
                                    <li>Fruit</li>
                                    <li>Drinking water</li>
                                </ul>
                            </div>
                        </div>

                        <div class="request-reminder">
                            <i class="bi bi-info-circle"></i>
                            <p>
                                Please provide complete and accurate information.
                                All requests are subject to review and availability.
                                Submitting a request does not guarantee approval.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Location pinning modal -->
    <div class="modal fade" id="locationModal" tabindex="-1"
        aria-labelledby="locationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locationModalLabel">Pin Distribution Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-2">
                        <input type="text" id="mapSearch" class="form-control"
                            placeholder="Search barangay, street or landmark">
                        <button type="button" class="btn btn-outline-secondary" id="mapSearchBtn">Search</button>
                        <button type="button" class="btn btn-outline-secondary" id="myLocationBtn"
                            title="Use my current location"><i class="bi bi-crosshair"></i></button>
                    </div>
                    <p class="small text-muted mb-2" id="pendingLocation">
                        Click the map to drop a pin. Drag the pin to adjust it.
                    </p>
                    <div id="map" style="height:400px; border-radius:8px;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="confirmLocation" disabled>Confirm Location</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary modal -->
    <div class="modal fade" id="summaryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review Your Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="duplicateWarning" class="alert alert-warning d-none"></div>
                    <dl class="summary-list mb-2" id="summaryList"></dl>
                    <p class="small text-muted mb-0">Your reference number will be shown after submission.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go Back &amp; Edit</button>
                    <button type="button" class="btn btn-primary" id="confirmSubmit">Confirm &amp; Submit</button>
                </div>
            </div>
        </div>
    </div>

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
                    <a href="{{ route('req') }}">Request a Donation</a>
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

    <!-- Leaflet (map) -->


    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Bootstrap JavaScript: Load before custom JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const $ = id => document.getElementById(id);
            const form = $('requestForm');

            const DRAFT_KEY = 'betta_request_draft';
            const HISTORY_KEY = 'betta_request_history';

            const DRAFT_DAYS = 7;
            const DUP_DAYS = 7;
            const MAX_FILE_MB = 5;

            const ALLOWED_EXT = ['pdf', 'jpg', 'jpeg', 'png'];
            const DEFAULT_CENTER = [7.3083, 125.6842];

            const touched = new Set();

            /* ---------- Preferred date ---------- */

            const d = new Date();
            const pad = n => String(n).padStart(2, '0');

            const todayStr =
                `${d.getFullYear()}-${pad(d.getMonth() + 1)}-${pad(d.getDate())}`;

            $('preferred_date').min = todayStr;


            /* ---------- Validation ---------- */

            function fileError(el) {

                const f = el.files[0];

                if (!f) return 'Please upload a supporting document.';

                const ext = f.name.split('.').pop().toLowerCase();

                if (!ALLOWED_EXT.includes(ext)) {
                    return 'Only PDF, JPG or PNG files are allowed.';
                }

                if (f.size > MAX_FILE_MB * 1024 * 1024) {
                    return `File is too large (max ${MAX_FILE_MB} MB).`;
                }

                return '';
            }


            const validators = {

                organization: v =>
                    v.trim().length < 3 ?
                    'Enter at least 3 characters.' :
                    '',

                contact: v =>
                    /^[A-Za-zÀ-ÿ.'\- ]{3,}$/.test(v.trim()) ?
                    '' :
                    'Enter a valid full name.',

                email: v =>
                    /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v.trim()) ?
                    '' :
                    'Enter a valid email address.',

                phone: v =>
                    /^09\d{2} \d{3} \d{4}$/.test(v) ?
                    '' :
                    'Enter a valid mobile number (09XX XXX XXXX).',

                address: v =>
                    v.trim().length < 5 ?
                    'Enter the distribution address.' :
                    '',

                request_type: v =>
                    v ? '' : 'Select a request type.',

                beneficiary_count: v =>
                    Number.isInteger(+v) && +v >= 1 && +v <= 100000 ?
                    '' :
                    'Enter a whole number of 1 or more.',

                pack_count: v =>
                    Number.isInteger(+v) && +v >= 1 ?
                    '' :
                    'Enter a whole number of 1 or more.',

                meals_per_day: v =>
                    v ? '' : 'Select meals per day.',

                sponsorship_days: v =>
                    Number.isInteger(+v) && +v >= 1 && +v <= 365 ?
                    '' :
                    'Enter 1 to 365 days.',

                reason: v =>
                    v.trim().length < 15 ?
                    'Please explain in at least 15 characters.' :
                    '',

                preferred_date: v =>
                    v && v < todayStr ?
                    'Date cannot be in the past.' :
                    '',

                distribution_method: v =>
                    v ? '' : 'Select a distribution method.',

                document: (v, el) => fileError(el),

                consent: v =>
                    v ? '' : 'You must confirm before submitting.'
            };


            const valueOf = el =>
                el.type === 'checkbox' ? el.checked : el.value;

            const activeFields = () =>
                Object.keys(validators)
                .map(id => $(id))
                .filter(el => el && !el.disabled);


            function feedbackFor(el) {

                let fb = el.parentElement.querySelector(
                    `.invalid-feedback[data-for="${el.id}"]`
                );

                if (!fb) {

                    fb = document.createElement('div');

                    fb.className = 'invalid-feedback';
                    fb.dataset.for = el.id;

                    if (el.type === 'checkbox') {
                        el.parentElement.appendChild(fb);
                    } else {
                        el.insertAdjacentElement('afterend', fb);
                    }
                }

                return fb;
            }


            function setState(el, msg) {

                const hasValue =
                    el.type === 'checkbox' ?
                    el.checked :
                    el.value !== '';

                el.classList.toggle('is-invalid', !!msg);
                el.classList.toggle('is-valid', !msg && hasValue);

                const fb = feedbackFor(el);

                fb.textContent = msg;
                fb.style.display = msg ? 'block' : 'none';
            }


            function clearState(el) {

                el.classList.remove('is-invalid', 'is-valid');

                const fb = el.parentElement.querySelector(
                    `.invalid-feedback[data-for="${el.id}"]`
                );

                if (fb) {
                    fb.textContent = '';
                    fb.style.display = 'none';
                }
            }


            function validateField(el) {

                const rule = validators[el.id];

                if (!rule || el.disabled) return true;

                const msg = rule(valueOf(el), el);

                setState(el, msg);

                return !msg;
            }


            function validateAll() {

                let firstBad = null;

                activeFields().forEach(el => {

                    touched.add(el.id);

                    if (!validateField(el) && !firstBad) {
                        firstBad = el;
                    }
                });

                if (firstBad) {

                    firstBad.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    firstBad.focus({
                        preventScroll: true
                    });
                }

                return !firstBad;
            }


            /* ---------- Phone formatting ---------- */

            function formatPhone(raw) {

                let digits = raw.replace(/\D/g, '');

                if (digits.startsWith('63')) {
                    digits = '0' + digits.slice(2);
                } else if (digits.startsWith('9')) {
                    digits = '0' + digits;
                }

                digits = digits.slice(0, 11);

                const parts = [
                    digits.slice(0, 4),
                    digits.slice(4, 7),
                    digits.slice(7, 11)
                ];

                return parts.filter(Boolean).join(' ');
            }


            /* ---------- Conditional fields ---------- */

            function toggleConditional() {

                const type = $('request_type').value;

                document.querySelectorAll('.conditional').forEach(group => {

                    const show = group.dataset.for === type;

                    group.classList.toggle('d-none', !show);

                    group.querySelectorAll('input, select, textarea')
                        .forEach(input => {

                            input.disabled = !show;

                            if (!show) {
                                clearState(input);
                            }
                        });
                });

                updateProgress();
            }


            /* ---------- Progress indicator ---------- */

            function updateProgress() {

                const required = activeFields().filter(el => el.required);

                const done = required.filter(el =>
                    !validators[el.id](valueOf(el), el)
                ).length;

                const pct = required.length ?
                    Math.round(done / required.length * 100) :
                    0;

                $('progressBar').style.width = pct + '%';
                $('progressText').textContent = pct + '%';
            }


            /* ---------- Draft saving ---------- */

            const draftFields = () => [...form.elements].filter(el =>
                el.name &&
                el.name !== '_token' &&
                !['file', 'submit', 'button'].includes(el.type)
            );

            let draftTimer;


            function saveDraft() {

                clearTimeout(draftTimer);

                draftTimer = setTimeout(() => {

                    const data = {};

                    draftFields().forEach(el => {

                        data[el.name] =
                            el.type === 'checkbox' ?
                            el.checked :
                            el.value;
                    });

                    const hasContent = draftFields().some(el =>
                        el.type !== 'checkbox' && el.value
                    );

                    if (!hasContent) return;

                    try {

                        localStorage.setItem(DRAFT_KEY, JSON.stringify({
                            t: Date.now(),
                            data
                        }));

                    } catch (e) {}
                }, 400);
            }


            function restoreDraft() {

                try {

                    const saved = JSON.parse(
                        localStorage.getItem(DRAFT_KEY) || 'null'
                    );

                    if (!saved || Date.now() - saved.t > DRAFT_DAYS * 864e5) {
                        return;
                    }

                    draftFields().forEach(el => {

                        if (!(el.name in saved.data)) return;

                        if (el.type === 'checkbox') {
                            el.checked = !!saved.data[el.name];
                        } else {
                            el.value = saved.data[el.name];
                        }
                    });

                    $('draftNotice').classList.remove('d-none');

                } catch (e) {}
            }


            $('clearDraftBtn').addEventListener('click', () => {

                localStorage.removeItem(DRAFT_KEY);

                form.reset();

                activeFields().forEach(clearState);

                $('latitude').value = '';
                $('longitude').value = '';

                updateLocationMessage();
                toggleConditional();

                $('draftNotice').classList.add('d-none');
            });


            /* ---------- Duplicate request warning ---------- */

            const signature = () => [
                $('email').value.trim().toLowerCase(),
                $('organization').value.trim().toLowerCase(),
                $('request_type').value
            ].join('|');


            function getHistory() {

                try {
                    return JSON.parse(localStorage.getItem(HISTORY_KEY) || '[]');
                } catch (e) {
                    return [];
                }
            }


            function checkDuplicate() {

                const cutoff = Date.now() - DUP_DAYS * 864e5;

                return getHistory().find(h =>
                    h.sig === signature() && h.t > cutoff
                ) || null;
            }


            function saveHistory() {

                const cutoff = Date.now() - 30 * 864e5;

                const list = getHistory().filter(h => h.t > cutoff);

                list.push({
                    sig: signature(),
                    t: Date.now()
                });

                try {
                    localStorage.setItem(HISTORY_KEY, JSON.stringify(list));
                } catch (e) {}
            }


            /* ---------- Summary modal ---------- */

            const summaryModal = new bootstrap.Modal($('summaryModal'));


            function buildSummary() {

                const rows = [

                    ['Organization', $('organization').value],
                    ['Contact Person', $('contact').value],
                    ['Email', $('email').value],
                    ['Phone', $('phone').value],
                    ['Distribution Address', $('address').value],

                    [
                        'Map Pin',
                        $('latitude').value ?
                        `${$('latitude').value}, ${$('longitude').value}` :
                        'Not pinned'
                    ],

                    ['Request Type', $('request_type').value],
                    ['People to Support', $('beneficiary_count').value]
                ];


                const optional = [

                    ['Food Packs Needed', 'pack_count'],
                    ['Dietary Notes', 'dietary_notes'],
                    ['Meals per Day', 'meals_per_day'],
                    ['Number of Days', 'sponsorship_days']
                ];


                optional.forEach(([label, id]) => {

                    if (!$(id).disabled && $(id).value) {
                        rows.push([label, $(id).value]);
                    }
                });


                rows.push(

                    ['Reason', $('reason').value],

                    [
                        'Preferred Date',
                        $('preferred_date').value || 'Not specified'
                    ],

                    ['Distribution Method', $('distribution_method').value],

                    [
                        'Additional Info',
                        $('additional_info').value || 'None'
                    ],

                    [
                        'Document',
                        $('document').files[0] ?
                        $('document').files[0].name :
                        'None'
                    ]
                );


                const list = $('summaryList');

                list.replaceChildren();

                rows.forEach(([label, value]) => {

                    const dt = document.createElement('dt');
                    dt.textContent = label;

                    const dd = document.createElement('dd');
                    dd.textContent = value;

                    list.append(dt, dd);
                });


                const warn = $('duplicateWarning');
                const dup = checkDuplicate();

                if (dup) {

                    const when = new Date(dup.t).toLocaleDateString();

                    warn.textContent =
                        `You may have already submitted a similar request on ${when}. ` +
                        'Submit again only if this is a different request.';

                    warn.classList.remove('d-none');

                } else {

                    warn.classList.add('d-none');
                }
            }


            /* ---------- Submit flow ---------- */

            let confirmed = false;
            let submitting = false;


            function setLoading(on) {

                const btn = form.querySelector('.submit-btn');

                submitting = on;

                btn.disabled = on;

                btn.innerHTML = on ?
                    '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...' :
                    'Submit Request <i class="bi bi-arrow-right"></i>';
            }


            form.addEventListener('submit', e => {

                if (submitting) {
                    e.preventDefault();
                    return;
                }

                if (confirmed) {
                    setLoading(true);
                    return;
                }

                e.preventDefault();

                if (!validateAll()) return;

                buildSummary();

                summaryModal.show();
            });


            $('confirmSubmit').addEventListener('click', () => {

                confirmed = true;

                saveHistory();

                summaryModal.hide();

                form.requestSubmit();
            });


            window.addEventListener('pageshow', e => {

                if (e.persisted) {

                    confirmed = false;

                    setLoading(false);
                }
            });


            /* ---------- Live validation ---------- */

            activeFields()
                .concat([
                    $('pack_count'),
                    $('meals_per_day'),
                    $('sponsorship_days')
                ])
                .forEach(el => {

                    const immediate =
                        el.tagName === 'SELECT' || ['file', 'checkbox'].includes(el.type);

                    el.addEventListener('blur', () => {

                        touched.add(el.id);

                        validateField(el);
                    });

                    ['input', 'change'].forEach(evt => {

                        el.addEventListener(evt, () => {

                            if (touched.has(el.id) || immediate) {
                                validateField(el);
                            }

                            updateProgress();
                        });
                    });
                });


            $('phone').addEventListener('input', e => {
                e.target.value = formatPhone(e.target.value);
            });

            $('request_type').addEventListener('change', toggleConditional);

            form.addEventListener('input', saveDraft);
            form.addEventListener('change', saveDraft);


            /* ---------- Interactive map ---------- */

            let map;
            let marker;
            let pending = null;


            function updatePendingLabel(text) {

                $('pendingLocation').textContent = text ||
                    (
                        pending ?
                        `Pin at ${pending.lat.toFixed(5)}, ${pending.lng.toFixed(5)}. Drag to adjust.` :
                        ''
                    );
            }


            function setPin(lat, lng) {

                pending = {
                    lat,
                    lng
                };

                if (marker) {

                    marker.setLatLng([lat, lng]);

                } else {

                    marker = L.marker([lat, lng], {
                        draggable: true
                    }).addTo(map);

                    marker.on('dragend', () => {

                        const p = marker.getLatLng();

                        pending = {
                            lat: p.lat,
                            lng: p.lng
                        };

                        updatePendingLabel();
                    });
                }

                $('confirmLocation').disabled = false;

                updatePendingLabel();
            }


            function updateLocationMessage() {

                const msg = $('savedLocationMessage');

                if ($('latitude').value) {

                    msg.textContent =
                        `Location pinned: ${$('latitude').value}, ${$('longitude').value}`;

                    msg.classList.add('ok');

                } else {

                    msg.textContent = 'No map location selected yet.';

                    msg.classList.remove('ok');
                }
            }


            $('locationModal').addEventListener('shown.bs.modal', () => {

                if (!map) {

                    map = L.map('map').setView(DEFAULT_CENTER, 13);

                    L.tileLayer(
                        'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; OpenStreetMap contributors'
                        }
                    ).addTo(map);

                    map.on('click', e => {
                        setPin(e.latlng.lat, e.latlng.lng);
                    });
                }

                map.invalidateSize();

                const lat = parseFloat($('latitude').value);
                const lng = parseFloat($('longitude').value);

                if (!isNaN(lat) && !isNaN(lng)) {

                    setPin(lat, lng);

                    map.setView([lat, lng], 16);
                }
            });


            /* ---------- Map search ---------- */

            async function searchPlace() {

                const q = $('mapSearch').value.trim();

                if (!q) return;

                updatePendingLabel('Searching...');

                try {

                    const r = await fetch(
                        'https://nominatim.openstreetmap.org/search?format=jsonv2&limit=1&countrycodes=ph&q=' +
                        encodeURIComponent(q)
                    );

                    const results = await r.json();

                    if (!results.length) {

                        updatePendingLabel(
                            'No results found. Try a different search.'
                        );

                        return;
                    }

                    const lat = parseFloat(results[0].lat);
                    const lng = parseFloat(results[0].lon);

                    map.setView([lat, lng], 17);

                    setPin(lat, lng);

                } catch (e) {

                    updatePendingLabel(
                        'Search failed. Click the map to pin manually.'
                    );
                }
            }


            $('mapSearchBtn').addEventListener('click', searchPlace);

            $('mapSearch').addEventListener('keydown', e => {

                if (e.key === 'Enter') {

                    e.preventDefault();

                    searchPlace();
                }
            });


            /* ---------- Current location ---------- */

            $('myLocationBtn').addEventListener('click', () => {

                if (!navigator.geolocation) {

                    updatePendingLabel(
                        'Geolocation is not supported by this browser.'
                    );

                    return;
                }

                updatePendingLabel('Getting your location...');

                navigator.geolocation.getCurrentPosition(

                    pos => {

                        map.setView(
                            [pos.coords.latitude, pos.coords.longitude],
                            17
                        );

                        setPin(
                            pos.coords.latitude,
                            pos.coords.longitude
                        );
                    },

                    () => {

                        updatePendingLabel(
                            'Could not get your location. Click the map instead.'
                        );
                    }
                );
            });


            /* ---------- Reverse geocoding ---------- */

            async function reverseGeocode(lat, lng) {

                try {

                    const r = await fetch(
                        `https://nominatim.openstreetmap.org/reverse?format=jsonv2&zoom=18&lat=${lat}&lon=${lng}`
                    );

                    if (!r.ok) return '';

                    return (await r.json()).display_name || '';

                } catch (e) {

                    return '';
                }
            }


            /* ---------- Confirm map location ---------- */

            $('confirmLocation').addEventListener('click', async () => {

                if (!pending) return;

                $('latitude').value = pending.lat.toFixed(6);
                $('longitude').value = pending.lng.toFixed(6);

                if (!$('address').value.trim()) {

                    $('address').value = await reverseGeocode(
                        pending.lat,
                        pending.lng
                    );

                    validateField($('address'));
                }

                updateLocationMessage();

                updateProgress();

                saveDraft();

                bootstrap.Modal.getInstance(
                    $('locationModal')
                ).hide();
            });


            /* ---------- Initialize ---------- */

            restoreDraft();

            toggleConditional();

            updateLocationMessage();

            updateProgress();

        });
    </script>



    
</body>

</html>