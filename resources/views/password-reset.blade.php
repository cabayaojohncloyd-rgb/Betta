<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Forgot Password</title>
</head>

<body>

    @include('partials.navbar')

    <div class="login-page" style="--bg-image: url('{{ asset('images/aimg.jpg') }}')">

        <div class="login-card">

            <!-- Logo -->
            <div class="logo">
                BETTA
            </div>

            <!-- ================= VIEW 1: request the reset link ================= -->
            <section id="requestView" class="fp-view active">

                <h1>Forgot Your Password?</h1>

                <p class="description">
                    Enter the email you signed up with and we'll send you a link to reset it.
                </p>

                <form id="requestForm" novalidate>

                    <div class="form-group">
                        <label for="email">
                            Email<span>*</span>
                        </label>

                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            placeholder="Type your email"
                            autocomplete="email"
                            maxlength="254"
                            aria-describedby="emailError"
                            required
                            autofocus>

                        <div class="field-error" id="emailError" role="alert"></div>
                    </div>

                    <button type="submit" class="signin-btn" id="sendBtn">
                        <span class="signin-label">Send Reset Link</span>
                    </button>

                </form>

                <p class="signup-text">
                    Remember your password?
                    <a href="{{ route('register') }}">Sign In</a>
                </p>

            </section>

            <!-- ================= VIEW 2: link was sent ================= -->
            <section id="sentView" class="fp-view fp-center">

                <div class="fp-icon"><i class="fa-regular fa-envelope"></i></div>

                <h1>Check Your Email</h1>

                <p class="description">
                    We sent a password reset link to <strong id="sentEmail"></strong>.
                </p>

                <p class="fp-note">Can't find it? Check your spam folder. The link expires in 60 minutes.</p>

                <!-- DEMO ONLY: shows the link that the email would contain. Delete when PHP sends real emails. -->
                <div class="fp-demo">
                    <strong><i class="fa-solid fa-circle-info"></i> Demo: the link inside the email</strong><br>
                    <a href="#" id="demoLink">link</a>
                </div>

                <button type="button" class="google-btn fp-resend" id="resendBtn" disabled>
                    <span>Resend Email <span id="resendTimer"></span></span>
                </button>

                <a href="#" class="forgot" id="useOtherEmail">Use a different email</a>

            </section>

            <!-- ================= VIEW 3: opened from the emailed link ================= -->
            <section id="resetView" class="fp-view">

                <h1>Create a New Password</h1>

                <p class="description">
                    Choose a password you haven't used before.
                </p>

                <form id="resetForm" novalidate>

                    <!-- New password -->
                    <div class="form-group password-group">
                        <label for="newPassword">
                            New Password<span>*</span>
                        </label>

                        <div class="password-box">
                            <input
                                type="password"
                                id="newPassword"
                                class="form-control"
                                placeholder="Type your new password"
                                autocomplete="new-password"
                                aria-describedby="newPasswordError"
                                required>

                            <button type="button" class="password-toggle" data-target="newPassword"
                                aria-label="Show password" aria-pressed="false">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>

                        <div class="field-error" id="newPasswordError" role="alert"></div>

                        <div class="fp-strength">
                            <div class="fp-strength-bar" id="strengthBar"></div>
                        </div>
                        <div class="fp-strength-text" id="strengthText"></div>

                        <ul class="fp-rules">
                            <li id="ruleLen"><i class="fa-regular fa-circle"></i>At least 8 characters</li>
                            <li id="ruleNum"><i class="fa-regular fa-circle"></i>At least one number</li>
                            <li id="ruleCase"><i class="fa-regular fa-circle"></i>Upper and lowercase letters</li>
                        </ul>
                    </div>

                    <!-- Confirm password -->
                    <div class="form-group password-group">
                        <label for="confirmPassword">
                            Confirm New Password<span>*</span>
                        </label>

                        <div class="password-box">
                            <input
                                type="password"
                                id="confirmPassword"
                                class="form-control"
                                placeholder="Type it again"
                                autocomplete="new-password"
                                aria-describedby="confirmError"
                                required>

                            <button type="button" class="password-toggle" data-target="confirmPassword"
                                aria-label="Show password" aria-pressed="false">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>

                        <div class="field-error" id="confirmError" role="alert"></div>
                    </div>

                    <button type="submit" class="signin-btn" id="saveBtn">
                        <span class="signin-label">Save New Password</span>
                    </button>

                </form>

            </section>

            <!-- ================= VIEW 4: password changed ================= -->
            <section id="doneView" class="fp-view fp-center">

                <div class="fp-icon"><i class="fa-solid fa-check"></i></div>

                <h1>Password Updated</h1>

                <p class="description">
                    You can now sign in with your new password.
                </p>

                <a href="{{ route('sign') }}" class="signin-btn" style="display:flex;align-items:center;justify-content:center;text-decoration:none;">
                    <span class="signin-label">Sign In</span>
                </a>

            </section>

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
                    <a href="{{ route('adminlog') }}" class="admin-login">
                        Admin Login
                    </a>
                </div>

            </div>
        </div>
    </footer>



    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const $ = (id) => document.getElementById(id);
            const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

            const requestForm = $('requestForm');
            const resetForm = $('resetForm');
            requestForm.noValidate = true;
            resetForm.noValidate = true;

            let lastEmail = '';
            let timerId;


            /* ---------- Switch between the 4 screens ---------- */
            function showView(id) {
                document.querySelectorAll('.fp-view').forEach(v => v.classList.remove('active'));
                $(id).classList.add('active');
            }


            /* ---------- Error helpers (same as the sign in page) ---------- */
            function showError(input, errorEl, message) {
                input.classList.add('input-error');
                input.setAttribute('aria-invalid', 'true');
                errorEl.textContent = message;
                errorEl.classList.add('show');
            }

            function clearError(input, errorEl) {
                input.classList.remove('input-error');
                input.removeAttribute('aria-invalid');
                errorEl.textContent = '';
                errorEl.classList.remove('show');
            }


            /* ---------- Loading state for the main buttons ---------- */
            function setLoading(btn, loading, loadingText) {
                const label = btn.querySelector('.signin-label');
                if (!btn.dataset.text) btn.dataset.text = label.textContent;

                btn.disabled = loading;
                btn.setAttribute('aria-busy', loading);

                if (loading) {
                    label.innerHTML = '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>' + loadingText;
                } else {
                    label.textContent = btn.dataset.text;
                }
            }


            /* ---------- Show / hide password (both fields) ---------- */
            document.querySelectorAll('.password-toggle').forEach(btn => {
                btn.addEventListener('click', () => {
                    const input = $(btn.dataset.target);
                    const icon = btn.querySelector('i');
                    const visible = input.type === 'password';

                    input.type = visible ? 'text' : 'password';
                    icon.classList.toggle('fa-eye', !visible);
                    icon.classList.toggle('fa-eye-slash', visible);
                    btn.setAttribute('aria-pressed', visible);
                    btn.setAttribute('aria-label', visible ? 'Hide password' : 'Show password');
                });
            });


            /* =====================================================
               VIEW 1: request the link
               ===================================================== */
            const emailInput = $('email');
            const emailError = $('emailError');

            function validateEmail() {
                const value = emailInput.value.trim();

                if (value === '') {
                    showError(emailInput, emailError, 'Please enter your email.');
                    return false;
                }
                if (!EMAIL_PATTERN.test(value)) {
                    showError(emailInput, emailError, 'Please enter a valid email, like name@example.com.');
                    return false;
                }

                clearError(emailInput, emailError);
                return true;
            }

            emailInput.addEventListener('blur', () => {
                if (emailInput.value.trim() !== '') validateEmail();
            });
            emailInput.addEventListener('input', () => {
                if (emailInput.classList.contains('input-error')) validateEmail();
            });

            requestForm.addEventListener('submit', (e) => {
                e.preventDefault();
                emailInput.value = emailInput.value.trim();

                if (!validateEmail()) {
                    emailInput.focus();
                    return;
                }

                lastEmail = emailInput.value;
                sendResetLink(lastEmail);
            });

            function sendResetLink(email) {
                const btn = $('sendBtn');
                setLoading(btn, true, 'Sending…');

                // DEMO: pretend the server took 1 second.
                // LATER (PHP): replace this setTimeout with a fetch() call to the server.
                setTimeout(() => {
                    const link = location.origin + location.pathname +
                        '?token=' + makeDemoToken() + '&email=' + encodeURIComponent(email);

                    $('sentEmail').textContent = email;
                    $('demoLink').textContent = link;
                    $('demoLink').href = link;

                    setLoading(btn, false);
                    showView('sentView');
                    startResendTimer();
                }, 1000);
            }

            // Random token for the demo only. Real tokens will be made by PHP.
            function makeDemoToken() {
                const bytes = new Uint8Array(16);
                crypto.getRandomValues(bytes);
                return Array.from(bytes, b => b.toString(16).padStart(2, '0')).join('');
            }


            /* =====================================================
               VIEW 2: resend timer
               ===================================================== */
            function startResendTimer() {
                let seconds = 60;
                const btn = $('resendBtn');
                const timer = $('resendTimer');

                clearInterval(timerId);
                btn.disabled = true;
                timer.textContent = '(' + seconds + 's)';

                timerId = setInterval(() => {
                    seconds--;
                    if (seconds <= 0) {
                        clearInterval(timerId);
                        btn.disabled = false;
                        timer.textContent = '';
                    } else {
                        timer.textContent = '(' + seconds + 's)';
                    }
                }, 1000);
            }

            $('resendBtn').addEventListener('click', () => sendResetLink(lastEmail));

            $('useOtherEmail').addEventListener('click', (e) => {
                e.preventDefault();
                clearInterval(timerId);
                showView('requestView');
                emailInput.focus();
            });


            /* =====================================================
               VIEW 3: new password
               ===================================================== */
            const newPassword = $('newPassword');
            const newPasswordError = $('newPasswordError');
            const confirmPassword = $('confirmPassword');
            const confirmError = $('confirmError');

            function setRule(id, ok) {
                const li = $(id);
                li.classList.toggle('ok', ok);
                li.querySelector('i').className = ok ? 'fa-solid fa-circle-check' : 'fa-regular fa-circle';
            }

            function checkRules() {
                const v = newPassword.value;
                const hasLen = v.length >= 8;
                const hasNum = /\d/.test(v);
                const hasCase = /[a-z]/.test(v) && /[A-Z]/.test(v);
                const hasSym = /[^A-Za-z0-9]/.test(v);

                setRule('ruleLen', hasLen);
                setRule('ruleNum', hasNum);
                setRule('ruleCase', hasCase);

                // strength bar
                const score = v ? [hasLen, hasNum, hasCase, hasSym].filter(Boolean).length : 0;
                const levels = [{
                        w: 0,
                        color: '#dc3545',
                        text: ''
                    },
                    {
                        w: 25,
                        color: '#dc3545',
                        text: 'Weak'
                    },
                    {
                        w: 50,
                        color: '#ffc107',
                        text: 'Fair'
                    },
                    {
                        w: 75,
                        color: '#318ec6',
                        text: 'Good'
                    },
                    {
                        w: 100,
                        color: '#198754',
                        text: 'Strong'
                    }
                ];
                $('strengthBar').style.width = levels[score].w + '%';
                $('strengthBar').style.background = levels[score].color;
                $('strengthText').textContent = levels[score].text;

                return hasLen && hasNum && hasCase;
            }

            function validateNewPassword() {
                if (newPassword.value === '') {
                    showError(newPassword, newPasswordError, 'Please enter a new password.');
                    return false;
                }
                if (!checkRules()) {
                    showError(newPassword, newPasswordError, 'Use at least 8 characters with a number and both upper and lowercase letters.');
                    return false;
                }
                clearError(newPassword, newPasswordError);
                return true;
            }

            function validateConfirm() {
                if (confirmPassword.value === '') {
                    showError(confirmPassword, confirmError, 'Please confirm your new password.');
                    return false;
                }
                if (confirmPassword.value !== newPassword.value) {
                    showError(confirmPassword, confirmError, "Passwords don't match.");
                    return false;
                }
                clearError(confirmPassword, confirmError);
                return true;
            }

            newPassword.addEventListener('input', () => {
                checkRules();
                if (newPassword.classList.contains('input-error')) validateNewPassword();
                if (confirmPassword.classList.contains('input-error')) validateConfirm();
            });
            confirmPassword.addEventListener('input', () => {
                if (confirmPassword.classList.contains('input-error')) validateConfirm();
            });

            resetForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const passOk = validateNewPassword();
                const confirmOk = validateConfirm();

                if (!passOk || !confirmOk) {
                    (passOk ? confirmPassword : newPassword).focus();
                    return;
                }

                const btn = $('saveBtn');
                setLoading(btn, true, 'Saving…');

                // DEMO: pretend the server saved it.
                // LATER (PHP): replace with a fetch() call that sends the token, email and new password.
                setTimeout(() => {
                    setLoading(btn, false);
                    showView('doneView');
                }, 1000);
            });


            /* =====================================================
               On page load: did the user arrive from the emailed link?
               ===================================================== */
            const params = new URLSearchParams(location.search);
            if (params.get('token')) {
                showView('resetView'); // later PHP will check the token is real and not expired
                newPassword.focus();
            }

        });
    </script>

</body>

</html>