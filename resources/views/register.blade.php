<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Sign In</title>
</head>

<body>

    @include('partials.navbar')

    <div class="login-page" style="--bg-image: url('{{ asset('images/aimg.jpg') }}')">

        <div class="login-card">

            <!-- Logo -->
            <div class="logo">
                BETTA
            </div>

            <!-- Heading -->
            <h1>Welcome Back to BETTA</h1>

            <p class="description">
                Sign in to your account to continue making a difference in our community.
            </p>

            <!-- Login Form -->
            <form id="loginForm" method="POST" action="{{ route('login.submit') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email">
                        Email<span>*</span>
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') input-error @enderror"
                        placeholder="Type your email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        maxlength="254"
                        aria-describedby="emailError"
                        @error('email') aria-invalid="true" @enderror
                        required>

                    <div class="field-error @error('email') show @enderror"
                        id="emailError"
                        role="alert">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group password-group">
                    <label for="password">
                        Password<span>*</span>
                    </label>

                    <div class="password-box">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control @error('password') input-error @enderror"
                            placeholder="Type your Password"
                            autocomplete="current-password"
                            aria-describedby="passwordError"
                            @error('password') aria-invalid="true" @enderror
                            required>

                        <button type="button" class="password-toggle" id="passwordToggle"
                            aria-label="Show password" aria-pressed="false">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>

                    <div class="field-error @error('password') show @enderror"
                        id="passwordError"
                        role="alert">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Remember / Forgot -->
                <div class="login-options">

                    <div class="remember">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>

                    <a href="{{ route('password.reset.page') }}" class="forgot">
                        Forgot Password?
                    </a>


                </div>

                <!-- Sign In -->
                <button type="submit" class="signin-btn" id="signinBtn">
                    <span class="signin-label">Sign In</span>
                </button>

            </form>


            <!-- Sign Up -->
            <p class="signup-text">
                Don't have an account?
                <a href="{{ route('sign') }}">Sign Up</a>
            </p>

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

            const form = document.getElementById('loginForm');
            if (!form) return;

            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const toggleBtn = document.getElementById('passwordToggle');
            const toggleIcon = toggleBtn.querySelector('i');
            const submitBtn = document.getElementById('signinBtn');
            const submitLabel = submitBtn.querySelector('.signin-label');

            const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
            const SUBMIT_TEXT = submitLabel.textContent;

            let isSubmitting = false;

            // We show our own messages, so turn off the browser's default bubbles.
            // (Done in JS so the browser's built-in checks still work if JS fails.)
            form.noValidate = true;


            /* ---------- Error helpers ---------- */
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


            /* ---------- Validation ---------- */
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

            function validatePassword() {
                // Only check that it isn't empty. Length rules belong on the sign-up form,
                // and the server decides whether the password is correct.
                if (passwordInput.value === '') {
                    showError(passwordInput, passwordError, 'Please enter your password.');
                    return false;
                }

                clearError(passwordInput, passwordError);
                return true;
            }

            // Check the email when the user leaves the field (only if they typed something)
            emailInput.addEventListener('blur', () => {
                if (emailInput.value.trim() !== '') validateEmail();
            });

            // Once an error is showing, re-check while typing so it clears as soon as it's fixed
            emailInput.addEventListener('input', () => {
                if (emailInput.classList.contains('input-error')) validateEmail();
            });

            passwordInput.addEventListener('input', () => {
                if (passwordInput.classList.contains('input-error')) validatePassword();
            });


            /* ---------- Show / hide password ---------- */
            function setPasswordVisible(visible) {
                passwordInput.type = visible ? 'text' : 'password';
                toggleIcon.classList.toggle('fa-eye', !visible);
                toggleIcon.classList.toggle('fa-eye-slash', visible);
                toggleBtn.setAttribute('aria-pressed', visible);
                toggleBtn.setAttribute('aria-label', visible ? 'Hide password' : 'Show password');
            }

            toggleBtn.addEventListener('click', () => {
                const start = passwordInput.selectionStart;
                const end = passwordInput.selectionEnd;

                setPasswordVisible(passwordInput.type === 'password');

                // keep the cursor where it was so typing isn't interrupted
                passwordInput.focus();
                passwordInput.setSelectionRange(start, end);
            });


            /* ---------- Loading state (prevents repeat clicks) ---------- */
            function setLoading(loading) {
                submitBtn.disabled = loading;
                submitBtn.setAttribute('aria-busy', loading);

                if (loading) {
                    submitLabel.innerHTML =
                        '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>Signing in…';
                } else {
                    submitLabel.textContent = SUBMIT_TEXT;
                }
            }


            /* ---------- Submit (button click AND the Enter key both land here) ---------- */
            form.addEventListener('submit', (e) => {

                // ignore a second submit while the first one is processing
                if (isSubmitting) {
                    e.preventDefault();
                    return;
                }

                emailInput.value = emailInput.value.trim();

                const emailOk = validateEmail();
                const passwordOk = validatePassword();

                if (!emailOk || !passwordOk) {
                    e.preventDefault();
                    (emailOk ? passwordInput : emailInput).focus(); // jump to the first problem
                    return;
                }

                isSubmitting = true;
                setLoading(true);
                setPasswordVisible(false); // never leave the password showing on screen
                // no preventDefault(): the form now submits normally
            });


            /* ---------- Back button: reset if the page comes back from the browser cache ---------- */
            window.addEventListener('pageshow', (e) => {
                if (e.persisted) {
                    isSubmitting = false;
                    setLoading(false);
                    setPasswordVisible(false);
                }
            });

        });
    </script>

</body>

</html>