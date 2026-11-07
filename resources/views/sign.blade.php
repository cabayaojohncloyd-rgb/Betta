<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Sign Up</title>
</head>

<body>

    @include('partials.navbar')

    <br><br>

    <div class="signup-page" style="--bg-image: url('{{ asset('images/aimg.jpg') }}')">

        <div class="signup-card">

            <div class="logo">BETTA</div>

            <h1>Create Your Account</h1>

            <p class="description">
                Join BETTA today and be part of a community dedicated to making a difference.
            </p>

                {{-- REGISTRATION STATUS --}}
                @if (session('registration_notice'))
                    <div class="alert alert-info" role="alert">
                        {{ session('registration_notice') }}
                    </div>
                @endif

                <form
                    id="registration-form"
                    action="{{ route('registration.store') }}"
                    method="POST"
                    novalidate
                >
                    @csrf

                <!-- Full Name -->
                <div class="form-group">
                    <label for="name">Full Name<span>*</span></label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Type your full name"
                        value="{{ old('name') }}"
                        autocomplete="name"
                        maxlength="255"
                        required
                    >

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <p class="text-danger small field-error" id="nameError" hidden></p>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email<span>*</span></label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Type your email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        maxlength="255"
                        required
                    >

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <p class="text-danger small field-error" id="emailError" hidden></p>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password<span>*</span></label>

                    <div class="password-box">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Create a password"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >
                        <button type="button" class="password-toggle" aria-label="Show password">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>

                    @error('password')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <p class="text-danger small field-error" id="passwordError" hidden></p>

                    <!-- Password strength -->
                    <div class="strength" id="strengthBox" hidden>
                        <div class="strength-bar">
                            <span id="strengthFill"></span>
                        </div>
                        <small class="strength-text" id="strengthText"></small>
                        <small class="strength-tip" id="strengthTip"></small>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="confirm-password">Confirm Password<span>*</span></label>

                    <div class="password-box">
                        <input
                            type="password"
                            id="confirm-password"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Confirm your password"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >
                        <button type="button" class="password-toggle" aria-label="Show password">
                            <i class="fa-regular fa-eye"></i>
                        </button>
                    </div>

                    <p class="text-danger small field-error" id="confirmError" hidden></p>
                </div>

                <!-- Terms -->
                <div class="terms">

                    <input
                        type="checkbox"
                        id="terms"
                        name="terms"
                        value="1"
                        class="@error('terms') is-invalid @enderror"
                        required
                    >

                    <label for="terms">
                        I agree to the
                        <a href="#" id="termsLink">Terms & Conditions</a>
                    </label>

                    @error('terms')
                        <small class="text-danger d-block">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <p class="text-danger small field-error" id="termsError" role="alert" hidden></p>

                <!-- Message shown when everything is valid (test mode) -->
                <p class="text-success small" id="formSuccess" hidden></p>

                <!-- Sign Up -->
                <button type="submit" class="signup-btn">Sign Up</button>

            </form>

            <!-- Sign In -->
            <p class="signin-text">
                Already have an account?
                <a href="{{ route('register') }}">Sign In</a>
            </p>

        </div>

    </div>

    <!-- Terms & Conditions modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content terms-modal">

                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Terms &amp; Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <h6>1. About BETTA</h6>
                    <p></p>

                    <h6>2. Your account</h6>
                    <p></p>

                    <h6>3. Donations and requests</h6>
                    <p></p>

                    <h6>4. Your information</h6>
                    <p></p>

                    <h6>5. Changes to these terms</h6>
                    <p></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="agreeBtn">I Agree</button>
                </div>

            </div>
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
            const MIN_LENGTH = 8; // shortest allowed password
            const SEND_FORM = true; // change to true when your PHP route is ready

            const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

            /* ---------- Elements ---------- */
            const form = document.getElementById('registration-form');

            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passInput = document.getElementById('password');
            const confirmInput = document.getElementById('confirm-password');
            const termsBox = document.getElementById('terms');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const passError = document.getElementById('passwordError');
            const confirmError = document.getElementById('confirmError');
            const termsError = document.getElementById('termsError');
            const formSuccess = document.getElementById('formSuccess');

            const strengthBox = document.getElementById('strengthBox');
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            const strengthTip = document.getElementById('strengthTip');

            const termsModalEl = document.getElementById('termsModal');
            const termsLink = document.getElementById('termsLink');
            const agreeBtn = document.getElementById('agreeBtn');


            /* ---------- Error helpers ---------- */
            function showError(input, errorEl, message) {
                input.classList.add('input-error');
                errorEl.textContent = message;
                errorEl.hidden = false;
                return false;
            }

            function clearError(input, errorEl) {
                input.classList.remove('input-error');
                errorEl.hidden = true;
                return true;
            }


            /* =========================================================
               1. SHOW / HIDE PASSWORD
               ========================================================= */
            document.querySelectorAll('.password-toggle').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const input = btn.parentElement.querySelector('input');
                    const icon = btn.querySelector('i');
                    const show = input.type === 'password';

                    input.type = show ? 'text' : 'password';

                    icon.classList.toggle('fa-eye', !show);
                    icon.classList.toggle('fa-eye-slash', show);
                    btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
                });
            });


            /* =========================================================
               VALIDATION
               ========================================================= */
            function validateName() {
                const value = nameInput.value.trim();

                if (value === '') {
                    return showError(nameInput, nameError, 'Please enter your full name.');
                }
                if (value.length < 2) {
                    return showError(nameInput, nameError, 'Your name must be at least 2 characters.');
                }
                return clearError(nameInput, nameError);
            }

            function validateEmail() {
                const value = emailInput.value.trim();

                if (value === '') {
                    return showError(emailInput, emailError, 'Please enter your email address.');
                }
                if (!EMAIL_PATTERN.test(value)) {
                    return showError(emailInput, emailError, 'Please enter a valid email, like name@example.com.');
                }
                return clearError(emailInput, emailError);
            }

            function validatePassword() {
                const value = passInput.value; // passwords are never trimmed

                if (value === '') {
                    return showError(passInput, passError, 'Please create a password.');
                }
                if (value.length < MIN_LENGTH) {
                    return showError(passInput, passError,
                        'Your password must be at least ' + MIN_LENGTH + ' characters.');
                }
                return clearError(passInput, passError);
            }

            function validateConfirm() {
                const value = confirmInput.value;

                if (value === '') {
                    return showError(confirmInput, confirmError, 'Please confirm your password.');
                }
                if (value !== passInput.value) {
                    return showError(confirmInput, confirmError, 'Passwords do not match.');
                }
                return clearError(confirmInput, confirmError);
            }

            function validateTerms() {
                if (!termsBox.checked) {
                    return showError(termsBox, termsError,
                        'You must agree to the Terms & Conditions to sign up.');
                }
                return clearError(termsBox, termsError);
            }


            /* =========================================================
               PASSWORD STRENGTH CHECKER
               ========================================================= */
            function getStrength(password) {
                let points = 0;

                if (password.length >= 8) points++;
                if (password.length >= 12) points++;
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) points++;
                if (/\d/.test(password)) points++;
                if (/[^A-Za-z0-9]/.test(password)) points++;

                if (password.length < 8 || points <= 2) {
                    return {
                        level: 'weak',
                        percent: 33,
                        label: 'Weak'
                    };
                }
                if (points === 3) {
                    return {
                        level: 'medium',
                        percent: 66,
                        label: 'Medium'
                    };
                }
                return {
                    level: 'strong',
                    percent: 100,
                    label: 'Strong'
                };
            }

            function updateStrength() {
                const password = passInput.value;

                if (password === '') {
                    strengthBox.hidden = true;
                    return;
                }

                const result = getStrength(password);

                strengthBox.hidden = false;
                strengthBox.dataset.level = result.level;
                strengthFill.style.width = result.percent + '%';
                strengthText.textContent = 'Password strength: ' + result.label;
                strengthTip.textContent = result.level === 'strong' ?
                    '' :
                    'Tip: use 12 or more characters with uppercase, lowercase, numbers and symbols.';
            }


            /* ---------- Live checking while the user types ---------- */
            function watch(input, errorEl, validate) {
                input.addEventListener('blur', validate);
                input.addEventListener('input', function() {
                    if (!errorEl.hidden) validate();
                });
            }

            watch(nameInput, nameError, validateName);
            watch(emailInput, emailError, validateEmail);
            watch(passInput, passError, validatePassword);
            watch(confirmInput, confirmError, validateConfirm);

            // Changing the password updates the meter and re-checks the confirm box
            passInput.addEventListener('input', function() {
                updateStrength();
                if (confirmInput.value !== '') validateConfirm();
            });

            // Clear the terms error as soon as the box is ticked
            termsBox.addEventListener('change', function() {
                if (termsBox.checked) clearError(termsBox, termsError);
            });


            /* =========================================================
               TERMS & CONDITIONS MODAL
               ========================================================= */
            const termsModal = bootstrap.Modal.getOrCreateInstance(termsModalEl);

            // Open the modal when the link is clicked
            termsLink.addEventListener('click', function(e) {
                e.preventDefault();
                termsModal.show();
            });

            // "I Agree": tick the box, clear the error, close the modal
            agreeBtn.addEventListener('click', function() {
                termsBox.checked = true;
                clearError(termsBox, termsError);
                termsModal.hide();
            });


            /* =========================================================
               SUBMIT: run every check before the form can be sent
               ========================================================= */
            form.addEventListener('submit', function(e) {
                formSuccess.hidden = true;

                // Run every check (no early exit) so all errors show at once
                const results = [
                    validateName(),
                    validateEmail(),
                    validatePassword(),
                    validateConfirm(),
                    validateTerms()
                ];

                if (!results.every(Boolean)) {
                    e.preventDefault();

                    const firstError = document.querySelector('.input-error');
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    firstError.focus({
                        preventScroll: true
                    });
                    return;
                }

                // Everything is valid
                if (!SEND_FORM) {
                    e.preventDefault(); // test mode: nothing is sent anywhere yet
                    formSuccess.textContent =
                        'All fields are valid. The form is not connected to the server yet.';
                    formSuccess.hidden = false;
                }
            });

        });
    </script>

</body>

</html>