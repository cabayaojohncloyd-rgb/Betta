<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Donate</title>
</head>

<body>

    @include('partials.navbar')



    <br><br>


    <section class="donation-section">
        <div class="container">
            <div class="goods-donation-box">
                <div class="row g-5">

                    <!-- DONOR INFORMATION -->
                    <div class="col-lg-5">
                        <h2>Donor Information</h2>

                        <div class="mb-4">
                            <label class="form-label" for="donorName">Full Name</label>
                            <input type="text" class="form-control" id="donorName"
                                placeholder="Enter your full name">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="donorEmail">Email Address</label>
                            <input type="email" class="form-control" id="donorEmail"
                                placeholder="Enter your email">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="donorPhone">Phone Number</label>
                            <input type="tel" class="form-control" id="donorPhone"
                                placeholder="Enter your phone number">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <!-- DONATION DETAILS -->
                    <div class="col-lg-7">
                        <h2>Donation Details</h2>
                        <p class="section-description">What would you like to donate?</p>

                        <div class="how-to">
                            <p class="how-to-title">How to fill this out:</p>
                            <ol>
                                <li>Type the amount next to each food you want to give.</li>
                                <li>Leave the others empty.</li>
                                <li>Check your list in the Donation Summary below.</li>
                            </ol>
                        </div>

                        <!-- RICE -->
                        <div class="food-item">
                            <div class="food-name">
                                <input type="checkbox" class="form-check-input" id="rice">
                                <label for="rice">Rice</label>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <input type="number" class="form-control" min="0" placeholder="0">
                                <span>kg</span>
                            </div>
                        </div>

                        <!-- CANNED GOODS -->
                        <div class="food-item">
                            <div class="food-name">
                                <input type="checkbox" class="form-check-input" id="canned">
                                <label for="canned">Canned Goods</label>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <input type="number" class="form-control" min="0" placeholder="0">
                                <span>cans</span>
                            </div>
                        </div>

                        <!-- PASTA -->
                        <div class="food-item">
                            <div class="food-name">
                                <input type="checkbox" class="form-check-input" id="pasta">
                                <label for="pasta">Pasta / Noodles</label>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <input type="number" class="form-control" min="0" placeholder="0">
                                <span>kg</span>
                            </div>
                        </div>

                        <!-- COOKING OIL -->
                        <div class="food-item">
                            <div class="food-name">
                                <input type="checkbox" class="form-check-input" id="oil">
                                <label for="oil">Cooking Oil</label>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <input type="number" class="form-control" min="0" placeholder="0">
                                <span>liters</span>
                            </div>
                        </div>

                        <!-- OTHER FOOD -->
                        <div class="food-item">
                            <div class="food-name">
                                <input type="checkbox" class="form-check-input" id="other">
                                <label for="other">Other Food Items</label>
                            </div>
                            <div class="quantity">
                                <span>Quantity:</span>
                                <input type="number" class="form-control" min="0" placeholder="0">
                                <span>kg</span>
                            </div>
                        </div>

                        <!-- food selection error -->
                        <div class="text-danger small mb-3" id="foodError" hidden></div>

                        <!-- DONATION SUMMARY -->
                        <div class="donation-summary" id="donationSummary">
                            <h6>Donation Summary</h6>
                            <p class="summary-empty" id="summaryEmpty">You have not entered any food yet.</p>
                            <ul id="summaryList"></ul>
                        </div>

                        <!-- ADDITIONAL DETAILS -->
                        <div class="additional-details">
                            <label class="form-label" for="additionalDetails">Additional Details</label>
                            <textarea class="form-control" id="additionalDetails" rows="3"
                                placeholder="Tell us about your donation..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- DIVIDER -->
                <div class="section-divider"></div>

                <!-- DROP-OFF DETAILS -->
                <div class="goods-dropoff-section">
                    <h2>Drop-Off Details</h2>
                    <p>Your donation will be delivered to a BETTA drop-off location.</p>

                    <button type="button" class="dropoff-btn"
                        data-bs-toggle="modal" data-bs-target="#dropoffModal">
                        View Drop-Off Details
                    </button>
                </div>

                <!-- DROP-OFF MODAL -->
                <div class="modal fade" id="dropoffModal" tabindex="-1"
                    aria-labelledby="dropoffModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="dropoffModalLabel">Drop-Off Details</h5>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <h6>BETTA Drop-Off Center</h6>
                                <p>📍 Panabo City</p>

                                <h6>Opening Hours</h6>
                                <p>
                                    Monday – Saturday<br>
                                    8:00 AM – 5:00 PM
                                </p>

                                <p class="modal-note">
                                    Please bring your donation in properly
                                    sealed and clean packaging.
                                </p>

                                <div class="dropoff-map-container">
                                    <iframe
                                        src="https://www.google.com/maps?q=Panabo+City,Davao+del+Norte&output=embed"
                                        width="100%" height="350" style="border:0;"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>

                                <div class="map-info">
                                    <div>
                                        <h6>BETTA Drop-Off Center</h6>
                                        <p>Panabo City, Davao del Norte</p>
                                    </div>

                                    <a href="https://www.google.com/maps/dir/?api=1&destination=Panabo+City%2C+Davao+del+Norte"
                                        target="_blank" rel="noopener noreferrer"
                                        class="map-direction-btn">
                                        Get Directions ↗
                                    </a>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="modal-close-btn" data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- CONFIRMATION MODAL -->
                <div class="modal fade" id="confirmModal" tabindex="-1"
                    aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmModalLabel">Review Your Donation</h5>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <h6>Donor Information</h6>
                                <p class="mb-1"><strong>Name:</strong> <span id="cName"></span></p>
                                <p class="mb-1"><strong>Email:</strong> <span id="cEmail"></span></p>
                                <p><strong>Phone:</strong> <span id="cPhone"></span></p>

                                <h6>Items to Donate</h6>
                                <ul id="cItems"></ul>

                                <h6>Additional Details</h6>
                                <p id="cDetails"></p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="modal-close-btn" data-bs-dismiss="modal">
                                    Go Back
                                </button>
                                <button type="button" class="goods-submit-btn" id="confirmSubmit">
                                    Confirm &amp; Submit
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- SUBMIT BUTTON -->
                <div class="submit-container">
                    <a href="{{ route('submitted') }}" class="goods-submit-btn" id="submitDonation">
                        Submit Donation →
                    </a>
                </div>

            </div>
        </div>
    </section>

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
                    <a href="{{ route('adminlog') }}" class="admin-login">Admin Login</a>
                </div>

            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /* ---------- Elements ---------- */
            const nameInput = document.getElementById('donorName');
            const emailInput = document.getElementById('donorEmail');
            const phoneInput = document.getElementById('donorPhone');
            const detailsInput = document.getElementById('additionalDetails');

            const foodItems = document.querySelectorAll('.food-item');
            const foodError = document.getElementById('foodError');
            const summaryList = document.getElementById('summaryList');
            const summaryEmpty = document.getElementById('summaryEmpty');

            const submitLink = document.getElementById('submitDonation');
            const confirmBtn = document.getElementById('confirmSubmit');
            const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));

            const submitUrl = submitLink.href;
            const submitText = submitLink.textContent.trim();
            const confirmText = confirmBtn.textContent.trim();
            let isSubmitting = false;


            /* =========================================================
               2. FOOD ITEMS: quantity boxes are always open
               ========================================================= */

            // Keeps the checkbox and the row marker in sync with the typed amount
            function syncItem(item) {
                const checkbox = item.querySelector('input[type="checkbox"]');
                const qty = parseFloat(item.querySelector('.quantity input').value);
                const hasQty = !isNaN(qty) && qty > 0;

                checkbox.checked = hasQty;
                item.classList.toggle('has-qty', hasQty);
            }

            // An item counts as donated when its amount is greater than 0
            function getSelectedItems() {
                const selected = [];

                foodItems.forEach(function(item) {
                    const qtyInput = item.querySelector('.quantity input');
                    const qty = parseFloat(qtyInput.value);
                    if (isNaN(qty) || qty <= 0) return;

                    const spans = item.querySelectorAll('.quantity span');

                    selected.push({
                        name: item.querySelector('label').textContent.trim(),
                        qty: qty,
                        unit: spans[spans.length - 1].textContent.trim(),
                        input: qtyInput
                    });
                });

                return selected;
            }


            /* =========================================================
               3. DONATION SUMMARY: live list of items with an amount
               ========================================================= */
            function renderList(listEl, items) {
                listEl.innerHTML = '';

                items.forEach(function(item) {
                    const li = document.createElement('li');
                    li.textContent = item.name + ': ' + item.qty + ' ' + item.unit;
                    listEl.appendChild(li);
                });
            }

            function updateSummary() {
                const items = getSelectedItems();
                renderList(summaryList, items);
                summaryEmpty.hidden = items.length > 0;
            }


            /* =========================================================
               1. FORM VALIDATION
               ========================================================= */
            function setInvalid(input, message) {
                input.classList.add('is-invalid');
                const feedback = input.parentElement.querySelector('.invalid-feedback');
                if (feedback) feedback.textContent = message;
                return false;
            }

            function clearInvalid(input) {
                input.classList.remove('is-invalid');
            }

            function validateName() {
                const value = nameInput.value.trim();
                if (value.length < 2) {
                    return setInvalid(nameInput, 'Please enter your full name.');
                }
                clearInvalid(nameInput);
                return true;
            }

            function validateEmail() {
                const value = emailInput.value.trim();
                const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!pattern.test(value)) {
                    return setInvalid(emailInput, 'Please enter a valid email address.');
                }
                clearInvalid(emailInput);
                return true;
            }

            function validatePhone() {
                const value = phoneInput.value.trim();
                const digits = value.replace(/\D/g, '');
                const allowed = /^\+?[0-9\s\-()]+$/;

                if (!allowed.test(value) || digits.length < 7 || digits.length > 15) {
                    return setInvalid(phoneInput, 'Please enter a valid phone number.');
                }
                clearInvalid(phoneInput);
                return true;
            }

            function validateFood() {
                let valid = true;

                foodError.hidden = true;
                foodItems.forEach(function(item) {
                    const input = item.querySelector('.quantity input');
                    input.classList.remove('is-invalid');

                    // A negative amount is not allowed
                    if (input.value !== '' && parseFloat(input.value) < 0) {
                        input.classList.add('is-invalid');
                        valid = false;
                    }
                });

                if (!valid) {
                    foodError.textContent = 'Amounts cannot be negative.';
                    foodError.hidden = false;
                    return false;
                }

                // At least one food item needs an amount
                if (getSelectedItems().length === 0) {
                    foodError.textContent = 'Please enter an amount for at least one food item.';
                    foodError.hidden = false;
                    return false;
                }

                return true;
            }

            function validateForm() {
                // Run every check (no early exit) so all errors show at once
                const results = [
                    validateName(),
                    validateEmail(),
                    validatePhone(),
                    validateFood()
                ];

                if (results.every(Boolean)) return true;

                // Scroll to and focus the first problem
                const firstError = document.querySelector('.is-invalid') || foodError;
                firstError.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                if (firstError.focus) firstError.focus({
                    preventScroll: true
                });

                return false;
            }


            /* =========================================================
               4. CONFIRMATION MODAL
               ========================================================= */
            function fillConfirmModal() {
                document.getElementById('cName').textContent = nameInput.value.trim();
                document.getElementById('cEmail').textContent = emailInput.value.trim();
                document.getElementById('cPhone').textContent = phoneInput.value.trim();
                document.getElementById('cDetails').textContent =
                    detailsInput.value.trim() || 'None';

                renderList(document.getElementById('cItems'), getSelectedItems());
            }


            /* =========================================================
               5. SUBMIT BUTTON FEEDBACK: block repeated clicks
               ========================================================= */
            function setSubmitting(state) {
                isSubmitting = state;

                submitLink.classList.toggle('is-submitting', state);
                submitLink.setAttribute('aria-disabled', state ? 'true' : 'false');
                submitLink.textContent = state ? 'Submitting...' : submitText;

                confirmBtn.disabled = state;
                confirmBtn.innerHTML = state ?
                    '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Submitting...' :
                    confirmText;
            }


            /* ---------- Event listeners ---------- */

            // Food items: typing an amount ticks the item and updates the summary
            foodItems.forEach(function(item) {
                const checkbox = item.querySelector('input[type="checkbox"]');
                const qtyInput = item.querySelector('.quantity input');

                syncItem(item); // set the correct state on page load

                // Typing an amount ticks the item automatically
                qtyInput.addEventListener('input', function() {
                    syncItem(item);
                    updateSummary();
                    if (!foodError.hidden) validateFood();
                });

                // Leaving the box empty unticks the item
                qtyInput.addEventListener('blur', function() {
                    syncItem(item);
                });

                // Ticking the checkbox jumps to the box; unticking clears the amount
                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        qtyInput.focus();
                    } else {
                        qtyInput.value = '';
                        syncItem(item);
                        updateSummary();
                        if (!foodError.hidden) validateFood();
                    }
                });
            });

            // Validate fields when the user leaves them, and clear errors while typing
            [
                [nameInput, validateName],
                [emailInput, validateEmail],
                [phoneInput, validatePhone]
            ]
            .forEach(function(pair) {
                const input = pair[0],
                    validate = pair[1];
                input.addEventListener('blur', validate);
                input.addEventListener('input', function() {
                    if (input.classList.contains('is-invalid')) validate();
                });
            });

            // Submit link: validate first, then show the confirmation modal
            submitLink.addEventListener('click', function(e) {
                e.preventDefault();
                if (isSubmitting) return;

                if (validateForm()) {
                    fillConfirmModal();
                    confirmModal.show();
                }
            });

            // Confirm: lock the buttons and go to the next page
            confirmBtn.addEventListener('click', function() {
                if (isSubmitting) return;

                try {
                    sessionStorage.setItem('bettaDonation', JSON.stringify({
                        name: nameInput.value.trim(),
                        email: emailInput.value.trim(),
                        phone: phoneInput.value.trim(),
                        details: detailsInput.value.trim(),
                        items: getSelectedItems().map(function(i) {
                            return {
                                name: i.name,
                                qty: i.qty,
                                unit: i.unit
                            };
                        })
                    }));
                    sessionStorage.removeItem('bettaReference'); // new donation, new reference number
                } catch (e) {
                    /* storage unavailable */ }

                setSubmitting(true);
                window.location.href = submitUrl;
            });

            
            // If the user presses the browser Back button, reset the buttons
            window.addEventListener('pageshow', function(e) {
                if (e.persisted) {
                    setSubmitting(false);
                    confirmModal.hide();
                }
            });

            updateSummary();
        });
    </script>

</body>

</html>