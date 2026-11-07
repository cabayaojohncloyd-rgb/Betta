<nav class="navbar bg-white fixed-top">
    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/BETTA.jpg') }}" alt="BETTA">
        </a>

        <!-- DESKTOP NAVIGATION -->
        <div class="desktop-nav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ourimpact') ? 'active' : '' }}"
                        href="{{ route('ourimpact') }}">Our Impact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('req') ? 'active' : '' }}"
                        href="{{ route('req') }}">Request a Donation</a>
                </li>

                <!-- DONATE DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('donate', 'sc') ? 'active' : '' }}"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Donate
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('donate') ? 'active' : '' }}"
                                href="{{ route('donate') }}">
                                Fund a Project
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item {{ request()->routeIs('sc') ? 'active' : '' }}"
                                href="{{ route('sc') }}">
                                Select a Cause
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <!-- DESKTOP USER ACCOUNT -->
        @auth
        <div class="dropdown signup-pill-desktop">

            <button class="profile-btn dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                aria-label="Open profile menu">

                <i class="bi bi-person-circle"></i>
            </button>

            <ul class="dropdown-menu dropdown-menu-end profile-dropdown">

                <!-- USER INFORMATION -->
                <li class="profile-header">
                    <strong>{{ auth()->user()->name }}</strong>
                    <small>{{ auth()->user()->email }}</small>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <!-- MY PROFILE -->
                <li>
                    <a class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#profileModal">
                        <i class="bi bi-person me-2"></i>
                        My Profile
                    </a>
                </li>

                <!-- NOTIFICATIONS -->
                <li>
                    <a class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#notificationsModal">
                        <i class="bi bi-bell me-2"></i>
                        Notifications
                    </a>
                </li>

                <!-- DONATION HISTORY -->
                <li>
                    <a class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#donationHistoryModal">
                        <i class="bi bi-clock-history me-2"></i>
                        Donation History
                    </a>
                </li>

                <!-- ACCOUNT SETTINGS -->
                <li>
                    <a class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#accountSettingsModal">
                        <i class="bi bi-gear me-2"></i>
                        Account Settings
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <!-- SIGN OUT -->
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Sign Out
                        </button>
                    </form>
                </li>

            </ul>
        </div>

        @else

        <!-- GUEST USER -->
        <a href="{{ route('register') }}"
            class="signup-pill signup-pill-desktop">
            Sign In
        </a>

        @endauth

        <!-- MOBILE MENU BUTTON -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu"
            aria-controls="mobileMenu"
            aria-label="Open menu">

            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>


<!-- MOBILE OFFCANVAS MENU -->
<div class="offcanvas offcanvas-end"
    tabindex="-1"
    id="mobileMenu"
    aria-labelledby="mobileMenuLabel">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="mobileMenuLabel">
            Menu
        </h5>

        <button type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close">
        </button>

    </div>

    <div class="offcanvas-body">

        <!-- MOBILE NAVIGATION -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    href="{{ route('about') }}">
                    About Us
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ourimpact') ? 'active' : '' }}"
                    href="{{ route('ourimpact') }}">
                    Our Impact
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('req') ? 'active' : '' }}"
                    href="{{ route('req') }}">
                    Request a Donation
                </a>
            </li>

            <!-- MOBILE DONATE DROPDOWN -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle {{ request()->routeIs('donate', 'sc') ? 'active' : '' }}"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Donate
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item"
                            href="{{ route('donate') }}">
                            Fund a Project
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item"
                            href="{{ route('sc') }}">
                            Select a Cause
                        </a>
                    </li>
                </ul>

            </li>

        </ul>

        <hr>

        <!-- MOBILE USER ACCOUNT -->
        @auth

        <div class="mobile-profile">

            <!-- USER INFORMATION -->
            <div class="d-flex align-items-center gap-3 mb-3">

                <div class="mobile-profile-icon">
                    <i class="bi bi-person-circle"></i>
                </div>

                <div>
                    <strong>{{ auth()->user()->name }}</strong>

                    <small class="d-block text-muted">
                        {{ auth()->user()->email }}
                    </small>
                </div>

            </div>

            <hr>

            <!-- MY PROFILE -->
            <a href="#"
                class="mobile-account-link"
                data-bs-toggle="modal"
                data-bs-target="#profileModal"
                data-bs-dismiss="offcanvas">
                <i class="bi bi-person"></i>
                My Profile
            </a>

            <!-- NOTIFICATIONS -->
            <a href="#"
                class="mobile-account-link"
                data-bs-toggle="modal"
                data-bs-target="#notificationsModal"
                data-bs-dismiss="offcanvas">
                <i class="bi bi-bell"></i>
                Notifications
            </a>

            <!-- DONATION HISTORY -->
            <a href="#"
                class="mobile-account-link"
                data-bs-toggle="modal"
                data-bs-target="#donationHistoryModal"
                data-bs-dismiss="offcanvas">
                <i class="bi bi-clock-history"></i>
                Donation History
            </a>

            <!-- ACCOUNT SETTINGS -->
            <a href="#"
                class="mobile-account-link"
                data-bs-toggle="modal"
                data-bs-target="#accountSettingsModal"
                data-bs-dismiss="offcanvas">
                <i class="bi bi-gear"></i>
                Account Settings
            </a>

            <hr>

            <!-- SIGN OUT -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="mobile-logout-btn">
                    <i class="bi bi-box-arrow-right"></i>
                    Sign Out
                </button>
            </form>

        </div>

        @else

        <!-- GUEST MOBILE USER -->
        <a href="{{ route('register') }}"
            class="signup-pill mobile-signin">
            Sign In
        </a>

        @endauth

    </div>
</div>


@auth

<!-- ACCOUNT MODALS -->

<!-- PROFILE MODAL -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">My Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                    <h5 class="mt-2 mb-0">{{ auth()->user()->name }}</h5>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span class="text-muted">Email</span>
                    <span>{{ auth()->user()->email }}</span>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                    <span class="text-muted">Phone</span>
                    <span>{{ auth()->user()->phone ?? 'Not added' }}</span>
                </div>
                <div class="d-flex justify-content-between py-2">
                    <span class="text-muted">Address</span>
                    <span>{{ auth()->user()->address ?? 'Not added' }}</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    data-bs-dismiss="modal"
                    data-bs-toggle="modal"
                    data-bs-target="#accountSettingsModal">Edit profile</button>
            </div>
        </div>
    </div>
</div>

<!-- NOTIFICATIONS MODAL -->
<div class="modal fade" id="notificationsModal" tabindex="-1" aria-labelledby="notificationsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationsModalLabel">Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="list-group list-group-flush">

                    {{-- Later: loop over real notifications from MySQL --}}
                    <div class="list-group-item d-flex gap-3 bg-primary-subtle">
                        <i class="bi bi-check-circle text-success mt-1"></i>
                        <div>
                            <div class="small">Your donation of 50 kg rice was received.</div>
                            <div class="text-muted" style="font-size: .75rem;">2 hours ago</div>
                        </div>
                    </div>

                    <div class="list-group-item d-flex gap-3">
                        <i class="bi bi-truck text-primary mt-1"></i>
                        <div>
                            <div class="small">Food Packs were delivered to Brgy. Mangagoy.</div>
                            <div class="text-muted" style="font-size: .75rem;">Yesterday</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- DONATION HISTORY MODAL -->
<div class="modal fade" id="donationHistoryModal" tabindex="-1" aria-labelledby="donationHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donationHistoryModalLabel">Donation History</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-2">

                {{-- Later: pass $donations from your controller --}}
                @forelse (($donations ?? []) as $d)
                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                        <div>
                            <div class="fw-semibold small">{{ $d->cause }}</div>
                            <div class="text-muted small">{{ $d->item }} · {{ $d->created_at->format('M j, Y') }}</div>
                        </div>
                        <span class="badge rounded-pill {{ $d->status === 'Delivered' ? 'text-bg-success' : 'text-bg-warning' }}">
                            {{ $d->status }}
                        </span>
                    </div>
                @empty
                    <p class="text-muted my-3">You haven't made any donations yet.</p>
                @endforelse

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ACCOUNT SETTINGS MODAL -->
<div class="modal fade" id="accountSettingsModal" tabindex="-1" aria-labelledby="accountSettingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            {{-- Later: change action="#" to your update route and add @method('PUT') if needed --}}
            <form action="#" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="accountSettingsModalLabel">Account Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="setName" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="setName" name="name" value="{{ auth()->user()->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="setEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="setEmail" name="email" value="{{ auth()->user()->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="setPassword" class="form-label">New password</label>
                        <input type="password" class="form-control" id="setPassword" name="password" minlength="8"
                            placeholder="Leave blank to keep your current password">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="setEmailNotif" name="email_notifications" checked>
                        <label class="form-check-label" for="setEmailNotif">Email notifications</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endauth    