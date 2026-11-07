<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Payment Method</title>
</head>

<body>

    @include('partials.navbar')


    <br><br><br><br>


    <input type="radio" name="checkout-step" id="step1-control" checked>
    <input type="radio" name="checkout-step" id="step2-control">
    <input type="radio" name="checkout-step" id="step3-control">
    <input type="radio" name="checkout-step" id="step4-control">
    <input type="radio" name="checkout-step" id="summary-control">

    <input type="checkbox" id="gcash-modal">
    <input type="checkbox" id="bank-modal">

    <div class="checkout-wrapper">

        <div class="checkout-header">
            <h1>BETTA</h1>
            <p>Pay securely via GCash or Bank Transfer</p>
        </div>


        <!-- PROGRESS INDICATOR -->
        <div class="progress-container">

            <label for="step1-control" class="progress-step progress-step-1">
                <div class="step-circle">1</div>
                <div class="step-label">Amount</div>
            </label>

            <div class="progress-line line-1"></div>

            <label for="step2-control" class="progress-step progress-step-2">
                <div class="step-circle">2</div>
                <div class="step-label">Payment Method</div>
            </label>

            <div class="progress-line line-2"></div>

            <label for="step3-control" class="progress-step progress-step-3">
                <div class="step-circle">3</div>
                <div class="step-label">Confirmation</div>
            </label>

            <div class="progress-line line-3"></div>

            <label for="step4-control" class="progress-step progress-step-4">
                <div class="step-circle">4</div>
                <div class="step-label">Verification</div>
            </label>

        </div>


        <!-- STEP 1: AMOUNT -->
        <section class="checkout-step step-one">

            <h2 class="section-title">Step 1: Choose or Enter Amount</h2>

            <div class="row g-2 mb-4">

                <div class="col-md-3 col-6">
                    <input type="radio" name="amount" id="amount100" class="amount-radio" value="100">
                    <label for="amount100" class="quick-amount">₱100</label>
                </div>

                <div class="col-md-3 col-6">
                    <input type="radio" name="amount" id="amount500" class="amount-radio" value="500">
                    <label for="amount500" class="quick-amount">₱500</label>
                </div>

                <div class="col-md-3 col-6">
                    <input type="radio" name="amount" id="amount1000" class="amount-radio" value="1000" checked>
                    <label for="amount1000" class="quick-amount">₱1,000</label>
                </div>

                <div class="col-md-3 col-6">
                    <input type="radio" name="amount" id="amount5000" class="amount-radio" value="5000">
                    <label for="amount5000" class="quick-amount">₱5,000</label>
                </div>

            </div>


            <label class="form-label" for="customAmount">Custom Amount (PHP)</label>

            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input type="number"
                    class="form-control custom-amount"
                    id="customAmount"
                    name="custom_amount"
                    value="1000"
                    min="1"
                    step="0.01">
            </div>

            <p class="minimum-text">Minimum payment amount is ₱1.00</p>

            <!-- NEW: amount error -->
            <p class="text-danger small" id="amountError" hidden></p>


            <div class="button-right">
                <label for="step2-control" class="next-btn">
                    Next: Payment Method →
                </label>
            </div>

        </section>


        <!-- STEP 2: PAYMENT METHOD -->
        <section class="checkout-step step-two">

            <h2 class="section-title">Step 2: Select Payment Option</h2>

            <p class="payment-note">Only GCash and Bank Transfer are accepted.</p>


            <!-- GCASH -->
            <label for="gcash-modal"
                class="payment-option"
                data-method-label="GCash"
                data-account-name="BETTA">

                <div class="payment-option-content">
                    <div class="payment-icon">📱</div>

                    <div class="payment-information">
                        <div class="payment-title">GCash</div>
                        <div class="payment-description">Pay via GCash App or QR Scan</div>
                    </div>

                    <span class="payment-badge">E-Wallet</span>
                </div>

            </label>


            <!-- BANK TRANSFER -->
            <label for="bank-modal"
                class="payment-option"
                data-method-label="Bank Transfer"
                data-account-name="BETTA Philippines Inc.">

                <div class="payment-option-content">
                    <div class="payment-icon">🏦</div>

                    <div class="payment-information">
                        <div class="payment-title">Bank Transfer</div>
                        <div class="payment-description">Transfer via online banking</div>
                    </div>

                    <span class="payment-badge bank-badge">Online Banking</span>
                </div>

            </label>

            <!-- NEW: method error -->
            <p class="text-danger small" id="methodError" hidden></p>


            <div class="step-navigation">

                <label for="step1-control" class="back-btn">← Back</label>

                <label for="step3-control" class="submit-btn">
                    Next: Confirmation →
                </label>

            </div>

        </section>


        <!-- STEP 3: CONFIRMATION -->
        <section class="checkout-step step-three">

            <h2 class="section-title">Step 3: Confirmation</h2>

            <p class="payment-note">
                Please review your payment information before proceeding.
            </p>


            <div class="confirmation-card">

                <div class="confirmation-header">Payment Details</div>

                <div class="confirmation-body">

                    <div class="detail-row">
                        <span class="detail-label">Amount</span>
                        <span class="amount-highlight js-amount">₱1,000.00</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Payment Method</span>
                        <span class="detail-value js-method">—</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Account Name</span>
                        <span class="detail-value js-account">—</span>
                    </div>

                </div>

            </div>


            <div class="confirmation-check">
                <label>
                    <input type="checkbox" id="confirmPayment">
                    I confirm that I have sent the exact amount
                    and that the payment details are correct.
                </label>
            </div>

            <!-- NEW: confirmation error -->
            <p class="text-danger small" id="confirmError" hidden></p>


            <div class="step-navigation">

                <label for="step2-control" class="back-btn">← Back</label>

                <label for="step4-control" class="submit-btn">
                    Next: Verification →
                </label>

            </div>

        </section>


        <!-- STEP 4: PAYMENT VERIFICATION -->
        <section class="checkout-step step-four">

            <h2 class="section-title">Step 4: Payment Verification</h2>

            <p class="payment-note">
                Upload your payment receipt so our team can verify your donation.
            </p>


            <div class="verification-container">

                <div class="verification-header">
                    <h5>Upload Payment Receipt</h5>
                    <p>Accepted formats: JPG, JPEG, PNG</p>
                </div>


                <div class="receipt-upload-box">

                    <div class="upload-icon">↑</div>

                    <h6>Upload Your Receipt</h6>

                    <p>
                        Select a clear image of your GCash
                        or Bank Transfer transaction receipt.
                    </p>

                    <input type="file"
                        id="paymentReceipt"
                        name="payment_receipt"
                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                        class="receipt-file-input"
                        required>

                    <p class="upload-limit">Maximum file size: 5 MB</p>

                    <!-- NEW: receipt preview -->
                    <div class="receipt-preview" id="receiptPreview" hidden>
                        <img id="receiptImg" alt="Preview of your uploaded receipt">
                        <div class="receipt-meta">
                            <span id="receiptInfo"></span>
                            <button type="button" class="remove-receipt" id="removeReceipt">Remove</button>
                        </div>
                    </div>

                    <!-- NEW: receipt error -->
                    <p class="text-danger small" id="receiptError" hidden></p>

                </div>


                <div class="verification-note">
                    <strong>Important Reminder</strong>
                    <p>
                        Make sure your receipt clearly shows
                        the payment amount, transaction date,
                        and reference number.
                    </p>
                </div>

            </div>


            <div class="step-navigation">

                <label for="step3-control" class="back-btn">← Back</label>

                <label for="summary-control" class="submit-btn" id="submitPayment">
                    ✓ Submit Payment
                </label>

            </div>

        </section>


        <!-- PAYMENT SUMMARY -->
        <section class="checkout-step payment-summary">

            <div class="success-icon">✓</div>

            <h2 class="success-title">Payment Submitted!</h2>

            <p class="success-text">
                Your payment details have been recorded successfully.
            </p>


            <div class="summary-card">

                <div class="summary-header">Payment Summary</div>

                <div class="summary-body">

                    <div class="detail-row">
                        <span class="detail-label">Payment Amount</span>
                        <span class="amount-highlight js-amount">₱1,000.00</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Payment Method</span>
                        <span class="detail-value js-method">—</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Account Name</span>
                        <span class="detail-value js-account">—</span>
                    </div>

                    <div class="detail-row">
                        <span class="detail-label">Status</span>
                        <span class="status-badge">Pending Verification</span>
                    </div>

                    <div class="reference-number">
                        <small>Payment Reference Number</small>
                        <strong>FB-2026-001024</strong>
                    </div>

                </div>

            </div>


            <p class="summary-message">
                Thank you for your donation! Your payment
                will be verified by our team.
            </p>


            <div class="home-button-container">
                <a href="{{ route('home') }}" class="home-btn">Back to Home</a>
            </div>

        </section>

    </div>


    <!-- GCASH MODAL -->
    <div class="custom-modal gcash-modal">

        <div class="modal-box">

            <div class="modal-top">
                <h3>GCash Payment</h3>
                <label for="gcash-modal" class="modal-close">&times;</label>
            </div>

            <p class="modal-description">
                Scan the QR code using your GCash app
                to complete your payment.
            </p>


            <div class="qr-box">
                <img src="{{ asset('images/gcash-qr.jpg') }}" alt="GCash QR Code">
            </div>


            <div class="payment-details">

                <div class="detail-row">
                    <span class="detail-label">Account Name</span>
                    <span class="detail-value">BETTA</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">GCash Number</span>

                    <!-- NEW: copy button -->
                    <span class="copy-group">
                        <span class="detail-value">0900 000 0000</span>
                        <button type="button" class="copy-btn">Copy</button>
                    </span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Amount</span>
                    <span class="amount-highlight js-amount">₱1,000.00</span>
                </div>

            </div>


            <label for="gcash-modal" class="modal-confirm-btn">Done</label>

        </div>

    </div>


    <!-- BANK TRANSFER MODAL -->
    <div class="custom-modal bank-modal">

        <div class="modal-box">

            <div class="modal-top">
                <h3>Bank Transfer</h3>
                <label for="bank-modal" class="modal-close">&times;</label>
            </div>

            <p class="modal-description">
                Transfer the exact amount to the following bank account.
            </p>


            <div class="payment-details">

                <div class="detail-row">
                    <span class="detail-label">Bank Name</span>
                    <span class="detail-value">BDO Unibank</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Account Name</span>
                    <span class="detail-value">BETTA Philippines Inc.</span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Account Number</span>

                    <!-- NEW: copy button -->
                    <span class="copy-group">
                        <span class="detail-value">0000-0000-0000</span>
                        <button type="button" class="copy-btn">Copy</button>
                    </span>
                </div>

                <div class="detail-row">
                    <span class="detail-label">Amount</span>
                    <span class="amount-highlight js-amount">₱1,000.00</span>
                </div>

            </div>


            <label for="bank-modal" class="modal-confirm-btn">Done</label>

        </div>

    </div>


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

            /* ---------- Settings ---------- */
            const MIN_AMOUNT = 1;
            const MAX_AMOUNT = 1000000; // change if you want a different limit
            const MAX_FILE_BYTES = 5 * 1024 * 1024; // 5 MB
            const ALLOWED_EXT = ['jpg', 'jpeg', 'png'];
            const ALLOWED_MIME = ['image/jpeg', 'image/png'];

            /* ---------- Elements ---------- */
            const wrapper = document.querySelector('.checkout-wrapper');
            const stepRadios = [
                document.getElementById('step1-control'),
                document.getElementById('step2-control'),
                document.getElementById('step3-control'),
                document.getElementById('step4-control'),
                document.getElementById('summary-control')
            ];
            const stepIndexByControl = {
                'step1-control': 0,
                'step2-control': 1,
                'step3-control': 2,
                'step4-control': 3,
                'summary-control': 4
            };

            const quickRadios = document.querySelectorAll('.amount-radio');
            const amountInput = document.getElementById('customAmount');
            const amountError = document.getElementById('amountError');

            const methodOptions = document.querySelectorAll('.payment-option');
            const methodError = document.getElementById('methodError');

            const confirmBox = document.getElementById('confirmPayment');
            const confirmError = document.getElementById('confirmError');

            const receiptInput = document.getElementById('paymentReceipt');
            const receiptPreview = document.getElementById('receiptPreview');
            const receiptImg = document.getElementById('receiptImg');
            const receiptInfo = document.getElementById('receiptInfo');
            const receiptError = document.getElementById('receiptError');
            const removeReceipt = document.getElementById('removeReceipt');

            const submitBtn = document.getElementById('submitPayment');
            const submitText = submitBtn.innerHTML;

            let selectedMethod = null; // { label, account }
            let lastIndex = 0;
            let previewUrl = null;
            let isSubmitting = false;
            let isSubmitted = false;


            /* ---------- Small helpers ---------- */
            function showError(el, message) {
                el.textContent = message;
                el.hidden = false;
            }

            function hideError(el) {
                el.hidden = true;
            }

            function formatPeso(n) {
                return '₱' + n.toLocaleString('en-PH', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function formatSize(bytes) {
                return bytes < 1024 * 1024 ?
                    Math.max(1, Math.round(bytes / 1024)) + ' KB' :
                    (bytes / (1024 * 1024)).toFixed(1) + ' MB';
            }

            // If the amount or method changes, the donor must confirm again
            function resetConfirmation() {
                confirmBox.checked = false;
                hideError(confirmError);
            }


            /* =========================================================
               1. AUTOMATIC AMOUNT SELECTION
               ========================================================= */
            quickRadios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    amountInput.value = radio.value;
                    amountInput.classList.remove('is-invalid');
                    hideError(amountError);
                    resetConfirmation();
                    updateSummary();
                });
            });

            // Typing a custom amount selects the matching quick button, or none
            function syncQuickAmounts() {
                const typed = parseFloat(amountInput.value);
                quickRadios.forEach(function(radio) {
                    radio.checked = (parseFloat(radio.value) === typed);
                });
            }

            // Block characters that make no sense in a peso amount
            amountInput.addEventListener('keydown', function(e) {
                if (['e', 'E', '+', '-'].includes(e.key)) e.preventDefault();
            });

            amountInput.addEventListener('input', function() {
                syncQuickAmounts();
                resetConfirmation();
                if (amountInput.classList.contains('is-invalid')) validateAmount();
                updateSummary();
            });


            /* =========================================================
               2. CUSTOM AMOUNT VALIDATION
               ========================================================= */
            function parseAmount() {
                const raw = amountInput.value.trim();

                if (!/^\d+(\.\d{1,2})?$/.test(raw)) {
                    return {
                        ok: false,
                        message: raw === '' ?
                            'Please enter an amount.' :
                            'Please enter a valid amount (up to 2 decimal places).'
                    };
                }

                const value = parseFloat(raw);

                if (value < MIN_AMOUNT) {
                    return {
                        ok: false,
                        message: 'The minimum payment amount is ' + formatPeso(MIN_AMOUNT) + '.'
                    };
                }
                if (value > MAX_AMOUNT) {
                    return {
                        ok: false,
                        message: 'The maximum payment amount is ' + formatPeso(MAX_AMOUNT) + '.'
                    };
                }

                return {
                    ok: true,
                    value: value
                };
            }

            function validateAmount() {
                const result = parseAmount();
                amountInput.classList.toggle('is-invalid', !result.ok);

                if (!result.ok) {
                    showError(amountError, result.message);
                    return false;
                }

                hideError(amountError);
                return true;
            }


            /* =========================================================
               3. PAYMENT METHOD SELECTION
               ========================================================= */
            function selectMethod(option) {
                const changed = !selectedMethod || selectedMethod.label !== option.dataset.methodLabel;

                selectedMethod = {
                    label: option.dataset.methodLabel,
                    account: option.dataset.accountName
                };

                methodOptions.forEach(function(o) {
                    o.classList.toggle('selected', o === option);
                });

                hideError(methodError);
                if (changed) resetConfirmation();
                updateSummary();
            }

            function validateMethod() {
                if (!selectedMethod) {
                    showError(methodError, 'Please choose GCash or Bank Transfer.');
                    return false;
                }
                hideError(methodError);
                return true;
            }


            /* =========================================================
               4. DYNAMIC PAYMENT SUMMARY
               ========================================================= */
            function updateSummary() {
                const result = parseAmount();
                const amountText = result.ok ? formatPeso(result.value) : '—';

                document.querySelectorAll('.js-amount').forEach(function(el) {
                    el.textContent = amountText;
                });
                document.querySelectorAll('.js-method').forEach(function(el) {
                    el.textContent = selectedMethod ? selectedMethod.label : '—';
                });
                document.querySelectorAll('.js-account').forEach(function(el) {
                    el.textContent = selectedMethod ? selectedMethod.account : '—';
                });
            }


            /* =========================================================
               9. CONFIRMATION CHECKBOX VALIDATION
               ========================================================= */
            function validateConfirm() {
                if (!confirmBox.checked) {
                    showError(confirmError, 'Please tick the box to confirm your payment details.');
                    return false;
                }
                hideError(confirmError);
                return true;
            }

            confirmBox.addEventListener('change', function() {
                if (confirmBox.checked) hideError(confirmError);
            });


            /* =========================================================
               7. RECEIPT FILE VALIDATION
               ========================================================= */
            function receiptProblem(file) {
                const ext = file.name.split('.').pop().toLowerCase();
                const typeOk = !file.type || ALLOWED_MIME.includes(file.type);

                if (!ALLOWED_EXT.includes(ext) || !typeOk) {
                    return 'Only JPG, JPEG or PNG images are allowed.';
                }
                if (file.size === 0) {
                    return 'This file is empty. Please choose another one.';
                }
                if (file.size > MAX_FILE_BYTES) {
                    return 'This file is too large (' + formatSize(file.size) + '). The maximum size is 5 MB.';
                }
                return '';
            }

            function validateReceipt() {
                const file = receiptInput.files[0];

                if (!file) {
                    showError(receiptError, 'Please upload your payment receipt.');
                    return false;
                }

                const problem = receiptProblem(file);
                if (problem) {
                    showError(receiptError, problem);
                    return false;
                }

                hideError(receiptError);
                return true;
            }


            /* =========================================================
               6. PAYMENT RECEIPT PREVIEW
               ========================================================= */
            function clearReceipt() {
                receiptInput.value = '';

                if (previewUrl) {
                    URL.revokeObjectURL(previewUrl); // frees the memory
                    previewUrl = null;
                }

                receiptImg.removeAttribute('src');
                receiptPreview.hidden = true;
            }

            receiptInput.addEventListener('change', function() {
                const file = receiptInput.files[0];

                clearReceipt.call(null); // remove any older preview first
                if (!file) return;

                // The input was cleared above, so put the file back before checking it
                const transfer = new DataTransfer();
                transfer.items.add(file);
                receiptInput.files = transfer.files;

                const problem = receiptProblem(file);
                if (problem) {
                    clearReceipt();
                    showError(receiptError, problem);
                    return;
                }

                hideError(receiptError);
                previewUrl = URL.createObjectURL(file);
                receiptImg.src = previewUrl;
                receiptInfo.textContent = file.name + ' (' + formatSize(file.size) + ')';
                receiptPreview.hidden = false;
            });

            removeReceipt.addEventListener('click', function() {
                clearReceipt();
                hideError(receiptError);
            });


            /* =========================================================
               8. COPY PAYMENT DETAILS
               ========================================================= */
            function copyText(text) {
                if (navigator.clipboard && window.isSecureContext) {
                    return navigator.clipboard.writeText(text);
                }

                // Fallback for older browsers or pages without HTTPS
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

            document.querySelectorAll('.copy-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    // Copy the digits only, so it pastes cleanly into GCash or a banking app
                    const shown = btn.parentElement.querySelector('.detail-value').textContent;
                    const digits = shown.replace(/\D/g, '');

                    function feedback(message) {
                        btn.textContent = message;
                        setTimeout(function() {
                            btn.textContent = 'Copy';
                        }, 2000);
                    }

                    copyText(digits)
                        .then(function() {
                            feedback('Copied ✓');
                        })
                        .catch(function() {
                            feedback('Copy failed');
                        });
                });
            });


            /* =========================================================
               5. STEP-BY-STEP VALIDATION
               ========================================================= */
            // Check for leaving step 1, 2, 3 and 4, in order
            const stepChecks = [validateAmount, validateMethod, validateConfirm, validateReceipt];
            const stepErrors = [amountError, methodError, confirmError, receiptError];

            function currentIndex() {
                return stepRadios.findIndex(function(r) {
                    return r.checked;
                });
            }

            function go(index) {
                stepRadios[index].checked = true;
                lastIndex = index;
            }

            function navigateTo(target) {
                if (isSubmitting || isSubmitted) return;

                const current = currentIndex();
                if (target === current) return;

                // Going back is always allowed
                if (target < current) {
                    go(target);
                    return;
                }

                // Going forward: every step before the target must be valid
                for (let i = 0; i < target; i++) {
                    if (!stepChecks[i]()) {
                        if (i !== current) go(i); // jump to the first step that needs attention

                        if (i === 0) amountInput.focus({
                            preventScroll: true
                        });
                        stepErrors[i].scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        return;
                    }
                }

                if (target === 4) {
                    submitPayment();
                    return;
                }

                go(target);
            }

            // Every step button and progress circle is a label, so catch them all here
            document.addEventListener('click', function(e) {
                const label = e.target.closest('label[for]');
                if (!label) return;

                const forId = label.getAttribute('for');

                // Step buttons: we move the step ourselves after checking
                if (forId in stepIndexByControl) {
                    e.preventDefault();
                    navigateTo(stepIndexByControl[forId]);
                    return;
                }

                // Payment options: remember the choice (the modal still opens normally)
                if (label.classList.contains('payment-option')) {
                    selectMethod(label);
                }
            });

            // Safety net: if a step radio is ever changed another way (keyboard), re-check it
            stepRadios.forEach(function(radio, index) {
                radio.addEventListener('change', function() {
                    if (index === lastIndex) return;
                    stepRadios[lastIndex].checked = true;
                    navigateTo(index);
                });
            });


            /* =========================================================
               10. SUBMISSION LOADING STATE
               ========================================================= */
            function setSubmitButton(loading) {
                submitBtn.classList.toggle('is-submitting', loading);
                submitBtn.innerHTML = loading ?
                    '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Submitting...' :
                    submitText;
            }

            // Replace this with a real request to your Laravel route (see the notes below)
            function savePayment() {
                return new Promise(function(resolve) {
                    setTimeout(resolve, 1200);
                });
            }

            function submitPayment() {
                if (isSubmitting) return;

                isSubmitting = true;
                setSubmitButton(true);

                savePayment()
                    .then(function() {
                        isSubmitted = true;
                        wrapper.classList.add('is-submitted');
                        go(4);
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    })
                    .catch(function() {
                        showError(receiptError, 'Something went wrong while saving. Please try again.');
                    })
                    .finally(function() {
                        isSubmitting = false;
                        setSubmitButton(false);
                    });
            }


            /* ---------- Start state ---------- */
            // Some browsers restore old form values on refresh, so start clean
            go(0);
            document.getElementById('gcash-modal').checked = false;
            document.getElementById('bank-modal').checked = false;
            confirmBox.checked = false;
            clearReceipt();
            syncQuickAmounts();
            updateSummary();
        });
    </script>



</body>

</html>