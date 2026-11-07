<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <<title>BETTA | Donate</title>
</head>

<body>

    @include('partials.navbar')



    <br><br>

    <section class="confirmation-section">
        <div class="container">
            <div class="confirmation-box">

                <!-- SUCCESS -->
                <div class="success-section">

                    <div class="success-icon" id="successIcon">✓</div>

                    <h1>Donation Submitted!</h1>

                    <p>
                        Thank you for supporting BETTA.
                        Your donation has been successfully recorded.
                    </p>

                    <div class="reference-number">
                        Reference No.
                        <strong id="refNumber" data-ref="">—</strong>
                        <button type="button" class="copy-btn no-print" id="copyRef">Copy</button>
                    </div>

                </div>


                <!-- DONATION SUMMARY -->
                <div class="summary-section">

                    <h2>Donation Summary</h2>

                    <p id="noDonation" hidden>
                        We could not find your donation details.
                        Please submit your donation again from the donation form.
                    </p>

                    <div id="summaryContent">

                        <div class="summary-row">
                            <span>Donor Name</span>
                            <strong id="summaryName"></strong>
                        </div>

                        <div class="summary-row">
                            <span>Email</span>
                            <strong id="summaryEmail"></strong>
                        </div>

                        <div class="items-title">Items Donated</div>

                        <div id="itemsList"></div>

                    </div>

                </div>


                <!-- DROP-OFF -->
                <div class="dropoff-section">

                    <h2>Drop-Off Information</h2>

                    <div class="dropoff-card">

                        <h3>BETTA Drop-Off Center</h3>

                        <p>📍 Panabo City, Davao del Norte</p>

                        <p>
                            <strong>Monday – Saturday</strong><br>
                            8:00 AM – 5:00 PM
                        </p>

                        <div class="dropoff-note">
                            Please bring your donation properly
                            sealed and clean.
                        </div>

                        <a href="https://www.google.com/maps/dir/?api=1&destination=Panabo+City%2C+Davao+del+Norte"
                            id="getDirections"
                            class="action-btn no-print"
                            target="_blank" rel="noopener noreferrer">
                            Get Directions ↗
                        </a>

                    </div>

                </div>


                <!-- BUTTONS -->
                <div class="confirmation-buttons no-print">

                    <button type="button" class="action-btn" id="printReceipt">
                        Print / Save as PDF
                    </button>

                    <a href="{{ route('home') }}" class="home-btn">
                        Back to Home
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
                    <h3>BETTA</h3>
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
        document.addEventListener('DOMContentLoaded', function() {

            /* ---------- Elements ---------- */
            const refEl = document.getElementById('refNumber');
            const copyBtn = document.getElementById('copyRef');
            const printBtn = document.getElementById('printReceipt');
            const iconEl = document.getElementById('successIcon');
            const nameEl = document.getElementById('summaryName');
            const emailEl = document.getElementById('summaryEmail');
            const itemsList = document.getElementById('itemsList');
            const content = document.getElementById('summaryContent');
            const noDonation = document.getElementById('noDonation');
            const dirLink = document.getElementById('getDirections');

            // Drop-off address in one place
            const DROPOFF_ADDRESS = 'Panabo City, Davao del Norte';


            /* =========================================================
               1. DYNAMIC DONATION SUMMARY
               ========================================================= */
            function loadDonation() {
                try {
                    return JSON.parse(sessionStorage.getItem('bettaDonation'));
                } catch (e) {
                    return null;
                }
            }

            function renderSummary(data) {
                const hasData = data && Array.isArray(data.items) && data.items.length > 0;

                content.hidden = !hasData;
                noDonation.hidden = hasData;

                if (!hasData) return false;

                // textContent keeps anything the donor typed from being treated as HTML
                nameEl.textContent = data.name;
                emailEl.textContent = data.email;

                itemsList.innerHTML = '';
                data.items.forEach(function(item) {
                    const row = document.createElement('div');
                    const label = document.createElement('span');
                    const amount = document.createElement('strong');

                    row.className = 'item-row';
                    label.textContent = item.name;
                    amount.textContent = item.qty + ' ' + item.unit;

                    row.appendChild(label);
                    row.appendChild(amount);
                    itemsList.appendChild(row);
                });

                return true;
            }


            /* =========================================================
               2. DYNAMIC REFERENCE NUMBER
               ========================================================= */
            function generateReference() {
                const year = new Date().getFullYear();
                const number = String(Math.floor(Math.random() * 100000)).padStart(5, '0');
                return 'FB-' + year + '-' + number;
            }

            function getReference() {
                // 1) A number from your server (Laravel) always wins
                if (refEl.dataset.ref) return refEl.dataset.ref;

                // 2) Keep the same number if the page is refreshed
                try {
                    let saved = sessionStorage.getItem('bettaReference');
                    if (!saved) {
                        saved = generateReference();
                        sessionStorage.setItem('bettaReference', saved);
                    }
                    return saved;
                } catch (e) {
                    return generateReference();
                }
            }


            /* =========================================================
               4. COPY REFERENCE NUMBER
               ========================================================= */
            function copyText(text) {
                if (navigator.clipboard && window.isSecureContext) {
                    return navigator.clipboard.writeText(text);
                }

                // Fallback for older browsers or non-HTTPS pages
                return new Promise(function(resolve, reject) {
                    const box = document.createElement('textarea');
                    box.value = text;
                    box.style.position = 'fixed';
                    box.style.opacity = '0';
                    document.body.appendChild(box);
                    box.select();

                    try {
                        document.execCommand('copy') ? resolve() : reject();
                    } catch (err) {
                        reject(err);
                    }

                    document.body.removeChild(box);
                });
            }

            function showCopyFeedback(message) {
                copyBtn.textContent = message;
                setTimeout(function() {
                    copyBtn.textContent = 'Copy';
                }, 2000);
            }


            /* =========================================================
               5. SUCCESS ANIMATION
               ========================================================= */
            function playSuccessAnimation() {
                iconEl.classList.remove('animate');
                void iconEl.offsetWidth; // restarts the animation
                iconEl.classList.add('animate');
            }


            /* =========================================================
               6. GET DIRECTIONS
               ========================================================= */
            function setupDirections() {
                dirLink.href = 'https://www.google.com/maps/dir/?api=1&destination=' +
                    encodeURIComponent(DROPOFF_ADDRESS);
            }


            /* ---------- Run on page load ---------- */
            const hasDonation = renderSummary(loadDonation());

            if (hasDonation) {
                refEl.textContent = getReference();
            } else {
                refEl.textContent = '—';
                copyBtn.disabled = true;
                printBtn.disabled = true;
            }

            playSuccessAnimation();
            setupDirections();


            /* ---------- Event listeners ---------- */

            // 4. Copy the reference number
            copyBtn.addEventListener('click', function() {
                copyText(refEl.textContent.trim())
                    .then(function() {
                        showCopyFeedback('Copied ✓');
                    })
                    .catch(function() {
                        showCopyFeedback('Copy failed');
                    });
            });

            // 3. Print or save as PDF
            printBtn.addEventListener('click', function() {
                window.print();
            });
        });
    </script>






</body>

</html>