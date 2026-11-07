<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <title>BETTA | Admin Settings</title>
</head>

<body>



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

                <a href="{{ route('adminset') }}" class="nav-item active">
                    <span>⚙</span>
                    Settings
                </a>

                <a href="{{ route('home') }}" class="nav-item logout">
                    <span>↪</span>
                    Logout
                </a>

            </div>

        </aside>





        <main class="dashboard">


            <!-- PAGE HEADER -->

            <div class="page-header">



                <h1>
                    Settings
                </h1>

                <!-- ADDED: Reset Settings button (Function 7) -->
                <button type="button" id="resetSettingsBtn" class="reset-btn">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>


            </div>



            <div class="row g-4">


                <!-- ADMIN ACCOUNT -->

                <div class="col-lg-6">

                    <div class="settings-card">

                        <div class="settings-header">

                            <div class="settings-icon">
                                ♙
                            </div>

                            <div>

                                <h3>
                                    Admin Account
                                </h3>

                                <p>
                                    Manage your administrator account information.
                                </p>

                            </div>

                        </div>


                        <div class="settings-field">

                            <label for="adminFullName">
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="adminFullName"
                                class="form-control"
                                value="BETTA Admin">
                            <div class="invalid-feedback" id="adminFullNameError"></div>

                        </div>


                        <div class="settings-field">

                            <label for="adminEmail">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="adminEmail"
                                class="form-control"
                                value="admin@BETTA.com">
                            <div class="invalid-feedback" id="adminEmailError"></div>

                        </div>


                        <div class="settings-field">

                            <label for="adminUsername">
                                Username
                            </label>

                            <input
                                type="text"
                                id="adminUsername"
                                class="form-control"
                                value="admin">
                            <div class="invalid-feedback" id="adminUsernameError"></div>

                        </div>


                        <button type="button" id="saveAdminBtn" class="save-btn">
                            Save Changes
                        </button>

                        <div id="adminAlert" class="alert d-none mt-3 mb-0" role="alert"></div>

                    </div>

                </div>



                <!-- PASSWORD -->

                <div class="col-lg-6">

                    <div class="settings-card">

                        <div class="settings-header">

                            <div class="settings-icon">
                                •••
                            </div>

                            <div>

                                <h3>
                                    Change Password
                                </h3>

                                <p>
                                    Update your administrator account password.
                                </p>

                            </div>

                        </div>


                        <div class="settings-field">

                            <label for="currentPassword">
                                Current Password
                            </label>

                            <div class="input-group">
                                <input
                                    type="password"
                                    id="currentPassword"
                                    class="form-control"
                                    autocomplete="current-password"
                                    placeholder="Enter current password">
                                <button type="button" class="btn btn-outline-secondary toggle-password"
                                    data-target="currentPassword" aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback" id="currentPasswordError"></div>

                        </div>


                        <div class="settings-field">

                            <label for="newPassword">
                                New Password
                            </label>

                            <div class="input-group">
                                <input
                                    type="password"
                                    id="newPassword"
                                    class="form-control"
                                    autocomplete="new-password"
                                    placeholder="Enter new password">
                                <button type="button" class="btn btn-outline-secondary toggle-password"
                                    data-target="newPassword" aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback" id="newPasswordError"></div>

                            <!-- ADDED: password strength indicator (Function 4) -->
                            <div class="progress mt-2" style="height: 6px;">
                                <div id="passwordStrengthBar" class="progress-bar" role="progressbar"
                                    style="width: 0%;" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"></div>
                            </div>
                            <small id="passwordStrengthText" class="form-text"></small>

                        </div>


                        <div class="settings-field">

                            <label for="confirmPassword">
                                Confirm New Password
                            </label>

                            <div class="input-group">
                                <input
                                    type="password"
                                    id="confirmPassword"
                                    class="form-control"
                                    autocomplete="new-password"
                                    placeholder="Confirm new password">
                                <button type="button" class="btn btn-outline-secondary toggle-password"
                                    data-target="confirmPassword" aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback" id="confirmPasswordError"></div>

                        </div>


                        <button type="button" id="updatePasswordBtn" class="save-btn">
                            Update Password
                        </button>

                        <div id="passwordAlert" class="alert d-none mt-3 mb-0" role="alert"></div>

                    </div>

                </div>



                <!-- WEBSITE SETTINGS -->

                <div class="col-lg-6">

                    <div class="settings-card">

                        <div class="settings-header">

                            <div class="settings-icon">
                                ⚙
                            </div>

                            <div>

                                <h3>
                                    Website Settings
                                </h3>

                                <p>
                                    Manage basic BETTA website information.
                                </p>

                            </div>

                        </div>


                        <div class="settings-field">

                            <label for="websiteName">
                                Website Name
                            </label>

                            <input
                                type="text"
                                id="websiteName"
                                class="form-control"
                                value="BETTA">
                            <div class="invalid-feedback" id="websiteNameError"></div>

                        </div>


                        <div class="settings-field">

                            <label for="contactEmail">
                                Contact Email
                            </label>

                            <input
                                type="email"
                                id="contactEmail"
                                class="form-control"
                                value="support@BETTA.com">
                            <div class="invalid-feedback" id="contactEmailError"></div>

                        </div>


                        <div class="settings-field">

                            <label for="contactNumber">
                                Contact Number
                            </label>

                            <input
                                type="text"
                                id="contactNumber"
                                class="form-control"
                                value="+63 900 000 0000">
                            <div class="invalid-feedback" id="contactNumberError"></div>

                        </div>


                        <button type="button" id="saveWebsiteBtn" class="save-btn">
                            Save Settings
                        </button>

                        <div id="websiteAlert" class="alert d-none mt-3 mb-0" role="alert"></div>

                    </div>

                </div>



                <!-- NOTIFICATIONS -->

                <div class="col-lg-6">

                    <div class="settings-card">

                        <div class="settings-header">

                            <div class="settings-icon">
                                ♢
                            </div>

                            <div>

                                <h3>
                                    Notifications
                                </h3>

                                <p>
                                    Manage important admin notifications.
                                </p>

                            </div>

                        </div>


                        <div class="setting-option">

                            <div>

                                <strong>
                                    New Donation Requests
                                </strong>

                                <span>

                                </span>

                            </div>

                            <div class="form-check form-switch">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="notifDonationRequests"
                                    data-pref="donationRequests"
                                    checked>

                            </div>

                        </div>


                        <div class="setting-option">

                            <div>

                                <strong>
                                    New Donations
                                </strong>

                                <span>

                                </span>

                            </div>

                            <div class="form-check form-switch">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="notifDonations"
                                    data-pref="donations"
                                    checked>

                            </div>

                        </div>


                        <div class="setting-option">

                            <div>

                                <strong>
                                    Project Updates
                                </strong>

                                <span>

                                </span>

                            </div>

                            <div class="form-check form-switch">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="notifProjectUpdates"
                                    data-pref="projectUpdates">

                            </div>

                        </div>

                        <div id="notificationAlert" class="alert d-none mt-3 mb-0" role="alert"></div>

                    </div>

                </div>



                <!-- SYSTEM INFORMATION -->

                <div class="col-12">

                    <div class="settings-card system-card">

                        <div class="settings-header">

                            <div class="settings-icon">
                                ℹ
                            </div>

                            <div>

                                <h3>
                                    System Information
                                </h3>

                                <p>
                                    Information about the BETTA admin system.
                                </p>

                            </div>

                        </div>


                        <div class="row g-4">

                            <div class="col-md-4">

                                <div class="system-info">

                                    <span>
                                        Website
                                    </span>

                                    <strong>
                                        BETTA
                                    </strong>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="system-info">

                                    <span>
                                        Admin Version
                                    </span>

                                    <strong>
                                        Version 1.0
                                    </strong>

                                </div>

                            </div>


                            <div class="col-md-4">

                                <div class="system-info">

                                    <span>
                                        Status
                                    </span>

                                    <strong class="system-active">
                                        System Active
                                    </strong>

                                </div>

                            </div>


                            <!-- ADDED: live date and time (Function 9) -->
                            <div class="col-12">

                                <div class="system-info">

                                    <span>
                                        Current Date &amp; Time
                                    </span>

                                    <strong id="currentDateTime">
                                        Loading...
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </main>

    </div>


    <script>
        (function() {
            'use strict';

            /* NOTE (Blade): the "@" character in the email regex below is written as \u0040
               so Blade never mistakes it for a directive. */

            /* =========================================================
               DEFAULT VALUES (must match the original HTML values)
               ========================================================= */
            var DEFAULT_ADMIN = {
                fullName: 'BETTA Admin',
                email: 'admin\u0040BETTA.com',
                username: 'admin'
            };

            var DEFAULT_WEBSITE = {
                websiteName: 'BETTA',
                contactEmail: 'support\u0040BETTA.com',
                contactNumber: '+63 900 000 0000'
            };

            var DEFAULT_NOTIFICATIONS = {
                donationRequests: true,
                donations: true,
                projectUpdates: false
            };

            var STORAGE_KEYS = {
                admin: 'betta_admin_info',
                website: 'betta_website_settings',
                notifications: 'betta_notification_prefs'
            };

            /* Last saved values. Used to detect unsaved changes (Function 8). */
            var savedAdmin = null;
            var savedWebsite = null;

            var alertTimers = {};
            var listenersAttached = false;

            /* =========================================================
               SMALL HELPERS
               ========================================================= */
            function byId(id) {
                return document.getElementById(id);
            }

            function readStorage(key, fallback) {
                try {
                    var raw = localStorage.getItem(key);
                    if (raw === null) {
                        return fallback;
                    }
                    var parsed = JSON.parse(raw);
                    return (parsed && typeof parsed === 'object') ? parsed : fallback;
                } catch (error) {
                    return fallback;
                }
            }

            function writeStorage(key, value) {
                try {
                    localStorage.setItem(key, JSON.stringify(value));
                    return true;
                } catch (error) {
                    return false;
                }
            }

            function removeStorage(key) {
                try {
                    localStorage.removeItem(key);
                } catch (error) {
                    /* ignore */
                }
            }

            function mergeWithDefaults(defaults, stored) {
                var result = {};
                Object.keys(defaults).forEach(function(key) {
                    result[key] = (stored && typeof stored[key] !== 'undefined') ? stored[key] : defaults[key];
                });
                return result;
            }

            function showAlert(alertId, type, message) {
                var box = byId(alertId);
                if (!box) {
                    return;
                }
                clearTimeout(alertTimers[alertId]);
                box.className = 'alert alert-' + type + ' mt-3 mb-0';
                box.textContent = message;
                alertTimers[alertId] = setTimeout(function() {
                    hideAlert(alertId);
                }, 5000);
            }

            function hideAlert(alertId) {
                var box = byId(alertId);
                if (!box) {
                    return;
                }
                clearTimeout(alertTimers[alertId]);
                box.className = 'alert d-none mt-3 mb-0';
                box.textContent = '';
            }

            function setFieldError(inputId, message) {
                var input = byId(inputId);
                var feedback = byId(inputId + 'Error');
                if (input) {
                    input.classList.add('is-invalid');
                }
                if (feedback) {
                    feedback.textContent = message;
                    feedback.classList.add('d-block');
                }
            }

            function clearFieldError(inputId) {
                var input = byId(inputId);
                var feedback = byId(inputId + 'Error');
                if (input) {
                    input.classList.remove('is-invalid');
                }
                if (feedback) {
                    feedback.textContent = '';
                    feedback.classList.remove('d-block');
                }
            }

            function clearFieldErrors(inputIds) {
                inputIds.forEach(clearFieldError);
            }

            /* Basic format checks */
            function isValidEmail(value) {
                return /^[^\s\u0040]+\u0040[^\s\u0040]+\.[^\s\u0040]{2,}$/.test(value);
            }

            function isValidPhone(value) {
                if (!/^[+]?[0-9\s\-()]+$/.test(value)) {
                    return false;
                }
                var digits = value.replace(/\D/g, '');
                return digits.length >= 7 && digits.length <= 15;
            }

            /* =========================================================
               READ / WRITE FORM VALUES
               ========================================================= */
            function getAdminFormValues() {
                return {
                    fullName: byId('adminFullName').value.trim(),
                    email: byId('adminEmail').value.trim(),
                    username: byId('adminUsername').value.trim()
                };
            }

            function setAdminFormValues(values) {
                byId('adminFullName').value = values.fullName;
                byId('adminEmail').value = values.email;
                byId('adminUsername').value = values.username;
            }

            function getWebsiteFormValues() {
                return {
                    websiteName: byId('websiteName').value.trim(),
                    contactEmail: byId('contactEmail').value.trim(),
                    contactNumber: byId('contactNumber').value.trim()
                };
            }

            function setWebsiteFormValues(values) {
                byId('websiteName').value = values.websiteName;
                byId('contactEmail').value = values.contactEmail;
                byId('contactNumber').value = values.contactNumber;
            }

            /* =========================================================
               1. SAVE ADMIN INFORMATION
               ========================================================= */
            function validateAdminInfo() {
                var values = getAdminFormValues();
                var valid = true;

                clearFieldErrors(['adminFullName', 'adminEmail', 'adminUsername']);

                if (values.fullName === '') {
                    setFieldError('adminFullName', 'Full name is required.');
                    valid = false;
                } else if (values.fullName.length < 2 || values.fullName.length > 50) {
                    setFieldError('adminFullName', 'Full name must be 2 to 50 characters long.');
                    valid = false;
                } else if (!/^[A-Za-z\s.'\-]+$/.test(values.fullName)) {
                    setFieldError('adminFullName', 'Full name may only contain letters, spaces, periods, apostrophes, and hyphens.');
                    valid = false;
                }

                if (values.email === '') {
                    setFieldError('adminEmail', 'Email address is required.');
                    valid = false;
                } else if (!isValidEmail(values.email)) {
                    setFieldError('adminEmail', 'Please enter a valid email address.');
                    valid = false;
                }

                if (values.username === '') {
                    setFieldError('adminUsername', 'Username is required.');
                    valid = false;
                } else if (!/^[A-Za-z0-9._]{3,20}$/.test(values.username)) {
                    setFieldError('adminUsername', 'Username must be 3 to 20 characters: letters, numbers, periods, or underscores only.');
                    valid = false;
                }

                return valid;
            }

            function saveAdminInfo() {
                hideAlert('adminAlert');

                if (!validateAdminInfo()) {
                    showAlert('adminAlert', 'danger', 'Please fix the highlighted fields and try again.');
                    return;
                }

                var values = getAdminFormValues();
                setAdminFormValues(values); /* write back the trimmed values */

                if (writeStorage(STORAGE_KEYS.admin, values)) {
                    savedAdmin = values;
                    showAlert('adminAlert', 'success',
                        'Admin information saved in this browser. (Demo only: no account was updated on a server.)');
                } else {
                    savedAdmin = values;
                    showAlert('adminAlert', 'warning',
                        'Information accepted for this session, but this browser blocked local storage so it will not persist.');
                }
            }

            /* =========================================================
               3. SHOW / HIDE PASSWORD
               ========================================================= */
            function togglePasswordVisibility(button) {
                var input = byId(button.getAttribute('data-target'));
                var icon = button.querySelector('i');
                if (!input) {
                    return;
                }

                var showing = input.type === 'text';
                input.type = showing ? 'password' : 'text';
                button.setAttribute('aria-label', showing ? 'Show password' : 'Hide password');

                if (icon) {
                    icon.className = showing ? 'bi bi-eye' : 'bi bi-eye-slash';
                }
            }

            function hideAllPasswords() {
                document.querySelectorAll('.toggle-password').forEach(function(button) {
                    var input = byId(button.getAttribute('data-target'));
                    var icon = button.querySelector('i');
                    if (input) {
                        input.type = 'password';
                    }
                    button.setAttribute('aria-label', 'Show password');
                    if (icon) {
                        icon.className = 'bi bi-eye';
                    }
                });
            }

            /* =========================================================
               4. PASSWORD STRENGTH CHECKER
               ========================================================= */
            function getPasswordStrength(password) {
                if (password === '') {
                    return {
                        level: '',
                        percent: 0
                    };
                }

                var score = 0;
                if (password.length >= 8) {
                    score++;
                }
                if (password.length >= 12) {
                    score++;
                }
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) {
                    score++;
                }
                if (/[0-9]/.test(password)) {
                    score++;
                }
                if (/[^A-Za-z0-9]/.test(password)) {
                    score++;
                }

                if (score <= 2) {
                    return {
                        level: 'Weak',
                        percent: 33
                    };
                }
                if (score === 3) {
                    return {
                        level: 'Medium',
                        percent: 66
                    };
                }
                return {
                    level: 'Strong',
                    percent: 100
                };
            }

            function updatePasswordStrengthIndicator() {
                var bar = byId('passwordStrengthBar');
                var text = byId('passwordStrengthText');
                var result = getPasswordStrength(byId('newPassword').value);

                var colors = {
                    Weak: 'bg-danger',
                    Medium: 'bg-warning',
                    Strong: 'bg-success'
                };
                var textColors = {
                    Weak: 'text-danger',
                    Medium: 'text-warning',
                    Strong: 'text-success'
                };

                bar.className = 'progress-bar' + (result.level ? ' ' + colors[result.level] : '');
                bar.style.width = result.percent + '%';
                bar.setAttribute('aria-valuenow', result.percent);

                text.className = 'form-text' + (result.level ? ' ' + textColors[result.level] : '');
                text.textContent = result.level ? 'Password strength: ' + result.level : '';
            }

            /* =========================================================
               2. PASSWORD VALIDATION
               ========================================================= */
            function getMissingPasswordRules(password) {
                var missing = [];
                if (password.length < 8) {
                    missing.push('at least 8 characters');
                }
                if (!/[A-Z]/.test(password)) {
                    missing.push('an uppercase letter');
                }
                if (!/[a-z]/.test(password)) {
                    missing.push('a lowercase letter');
                }
                if (!/[0-9]/.test(password)) {
                    missing.push('a number');
                }
                if (!/[^A-Za-z0-9]/.test(password)) {
                    missing.push('a special character');
                }
                return missing;
            }

            function validatePasswordForm() {
                var current = byId('currentPassword').value;
                var next = byId('newPassword').value;
                var confirmation = byId('confirmPassword').value;
                var valid = true;

                clearFieldErrors(['currentPassword', 'newPassword', 'confirmPassword']);

                if (current === '') {
                    setFieldError('currentPassword', 'Please enter your current password.');
                    valid = false;
                }

                if (next === '') {
                    setFieldError('newPassword', 'Please enter a new password.');
                    valid = false;
                } else {
                    var missing = getMissingPasswordRules(next);
                    if (missing.length > 0) {
                        setFieldError('newPassword', 'New password must contain ' + missing.join(', ') + '.');
                        valid = false;
                    } else if (current !== '' && next === current) {
                        setFieldError('newPassword', 'New password must be different from the current password.');
                        valid = false;
                    }
                }

                if (confirmation === '') {
                    setFieldError('confirmPassword', 'Please confirm your new password.');
                    valid = false;
                } else if (next !== confirmation) {
                    setFieldError('confirmPassword', 'Passwords do not match.');
                    valid = false;
                }

                return valid;
            }

            function clearPasswordForm() {
                ['currentPassword', 'newPassword', 'confirmPassword'].forEach(function(id) {
                    byId(id).value = '';
                });
                clearFieldErrors(['currentPassword', 'newPassword', 'confirmPassword']);
                hideAllPasswords();
                updatePasswordStrengthIndicator();
            }

            function updatePassword() {
                hideAlert('passwordAlert');

                if (!validatePasswordForm()) {
                    showAlert('passwordAlert', 'danger', 'Please fix the highlighted fields and try again.');
                    return;
                }

                /* Front-end demo: the current password cannot be verified and nothing is stored or sent. */
                clearPasswordForm();
                showAlert('passwordAlert', 'success',
                    'Password fields passed validation. (Demo only: no password was changed or stored.)');
            }

            /* =========================================================
               5. SAVE WEBSITE SETTINGS
               ========================================================= */
            function validateWebsiteSettings() {
                var values = getWebsiteFormValues();
                var valid = true;

                clearFieldErrors(['websiteName', 'contactEmail', 'contactNumber']);

                if (values.websiteName === '') {
                    setFieldError('websiteName', 'Website name is required.');
                    valid = false;
                } else if (values.websiteName.length < 2 || values.websiteName.length > 50) {
                    setFieldError('websiteName', 'Website name must be 2 to 50 characters long.');
                    valid = false;
                }

                if (values.contactEmail === '') {
                    setFieldError('contactEmail', 'Contact email is required.');
                    valid = false;
                } else if (!isValidEmail(values.contactEmail)) {
                    setFieldError('contactEmail', 'Please enter a valid email address.');
                    valid = false;
                }

                if (values.contactNumber === '') {
                    setFieldError('contactNumber', 'Contact number is required.');
                    valid = false;
                } else if (!isValidPhone(values.contactNumber)) {
                    setFieldError('contactNumber', 'Enter a valid phone number (7 to 15 digits; numbers, spaces, +, -, and parentheses only).');
                    valid = false;
                }

                return valid;
            }

            function saveWebsiteSettings() {
                hideAlert('websiteAlert');

                if (!validateWebsiteSettings()) {
                    showAlert('websiteAlert', 'danger', 'Please fix the highlighted fields and try again.');
                    return;
                }

                var values = getWebsiteFormValues();
                setWebsiteFormValues(values);

                if (writeStorage(STORAGE_KEYS.website, values)) {
                    savedWebsite = values;
                    showAlert('websiteAlert', 'success',
                        'Website settings saved in this browser. (Demo only: the live website was not changed.)');
                } else {
                    savedWebsite = values;
                    showAlert('websiteAlert', 'warning',
                        'Settings accepted for this session, but this browser blocked local storage so they will not persist.');
                }
            }

            /* =========================================================
               6. NOTIFICATION TOGGLES (saved instantly in localStorage)
               ========================================================= */
            function getNotificationPreferences() {
                var prefs = {};
                document.querySelectorAll('input[data-pref]').forEach(function(toggle) {
                    prefs[toggle.getAttribute('data-pref')] = toggle.checked;
                });
                return prefs;
            }

            function setNotificationPreferences(prefs) {
                document.querySelectorAll('input[data-pref]').forEach(function(toggle) {
                    toggle.checked = !!prefs[toggle.getAttribute('data-pref')];
                });
            }

            function saveNotificationPreferences() {
                if (writeStorage(STORAGE_KEYS.notifications, getNotificationPreferences())) {
                    showAlert('notificationAlert', 'success', 'Notification preferences saved in this browser.');
                } else {
                    showAlert('notificationAlert', 'warning', 'This browser blocked local storage, so preferences will not persist.');
                }
            }

            /* =========================================================
               8. UNSAVED CHANGES WARNING
               ========================================================= */
            function valuesDiffer(current, saved) {
                return Object.keys(saved).some(function(key) {
                    return current[key] !== saved[key];
                });
            }

            function hasUnsavedChanges() {
                if (valuesDiffer(getAdminFormValues(), savedAdmin)) {
                    return true;
                }
                if (valuesDiffer(getWebsiteFormValues(), savedWebsite)) {
                    return true;
                }

                /* Any text typed into the password fields also counts as unsaved. */
                return ['currentPassword', 'newPassword', 'confirmPassword'].some(function(id) {
                    return byId(id).value !== '';
                });
            }

            function warnBeforeLeaving(event) {
                if (hasUnsavedChanges()) {
                    event.preventDefault();
                    event.returnValue = ''; /* browsers show their own generic message */
                    return '';
                }
            }

            /* =========================================================
               7. RESET SETTINGS
               ========================================================= */
            function resetSettings() {
                var confirmed = window.confirm(
                    'Reset all settings to their default values?\n\n' +
                    'This will discard your saved settings and any unsaved changes on this page.'
                );

                if (!confirmed) {
                    return; /* Cancelled: change nothing. */
                }

                removeStorage(STORAGE_KEYS.admin);
                removeStorage(STORAGE_KEYS.website);
                removeStorage(STORAGE_KEYS.notifications);

                savedAdmin = mergeWithDefaults(DEFAULT_ADMIN, null);
                savedWebsite = mergeWithDefaults(DEFAULT_WEBSITE, null);

                setAdminFormValues(savedAdmin);
                setWebsiteFormValues(savedWebsite);
                setNotificationPreferences(DEFAULT_NOTIFICATIONS);

                clearPasswordForm();
                clearFieldErrors(['adminFullName', 'adminEmail', 'adminUsername',
                    'websiteName', 'contactEmail', 'contactNumber'
                ]);

                ['adminAlert', 'passwordAlert', 'websiteAlert', 'notificationAlert'].forEach(hideAlert);
                showAlert('notificationAlert', 'info', 'All settings were reset to their default values.');
            }

            /* =========================================================
               9. CURRENT DATE AND TIME
               ========================================================= */
            function updateCurrentDateTime() {
                var target = byId('currentDateTime');
                if (!target) {
                    return;
                }

                target.textContent = new Date().toLocaleString('en-US', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
            }

            /* =========================================================
               INITIALIZE (listeners are attached exactly once)
               ========================================================= */
            function loadSavedSettings() {
                savedAdmin = mergeWithDefaults(DEFAULT_ADMIN, readStorage(STORAGE_KEYS.admin, null));
                savedWebsite = mergeWithDefaults(DEFAULT_WEBSITE, readStorage(STORAGE_KEYS.website, null));
                var prefs = mergeWithDefaults(DEFAULT_NOTIFICATIONS, readStorage(STORAGE_KEYS.notifications, null));

                setAdminFormValues(savedAdmin);
                setWebsiteFormValues(savedWebsite);
                setNotificationPreferences(prefs);
            }

            function attachEventListeners() {
                if (listenersAttached) {
                    return;
                }
                listenersAttached = true;

                byId('saveAdminBtn').addEventListener('click', saveAdminInfo);
                byId('updatePasswordBtn').addEventListener('click', updatePassword);
                byId('saveWebsiteBtn').addEventListener('click', saveWebsiteSettings);
                byId('resetSettingsBtn').addEventListener('click', resetSettings);

                document.querySelectorAll('.toggle-password').forEach(function(button) {
                    button.addEventListener('click', function() {
                        togglePasswordVisibility(button);
                    });
                });

                byId('newPassword').addEventListener('input', updatePasswordStrengthIndicator);

                document.querySelectorAll('input[data-pref]').forEach(function(toggle) {
                    toggle.addEventListener('change', saveNotificationPreferences);
                });

                /* Clear a field's error message as soon as the admin edits it. */
                ['adminFullName', 'adminEmail', 'adminUsername',
                    'currentPassword', 'newPassword', 'confirmPassword',
                    'websiteName', 'contactEmail', 'contactNumber'
                ].forEach(function(id) {
                    byId(id).addEventListener('input', function() {
                        clearFieldError(id);
                    });
                });

                window.addEventListener('beforeunload', warnBeforeLeaving);
            }

            function initializeSettingsPage() {
                loadSavedSettings();
                attachEventListeners();
                updatePasswordStrengthIndicator();
                updateCurrentDateTime();
                setInterval(updateCurrentDateTime, 1000);
            }

            initializeSettingsPage();
        })();
    </script>

</body>

</html>