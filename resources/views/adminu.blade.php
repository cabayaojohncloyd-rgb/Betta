<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <title>BETTA | Admin Users</title>
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




        <main class="dashboard">


            <!-- PAGE HEADER -->

            <div class="page-header">



                <h1>
                    Users
                </h1>



            </div>



            <!-- SUMMARY CARDS -->

            <div class="row g-4 mb-4">


                <div class="col-md-4">

                    <div class="summary-card">

                        <p>
                            Total Users
                        </p>

                        <!-- CHANGED: added id="totalUsers", value starts at 0 -->
                        <h2 id="totalUsers">
                            0
                        </h2>

                        <span>
                            Registered accounts
                        </span>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="summary-card">

                        <p>
                            Active Users
                        </p>

                        <!-- CHANGED: added id="activeUsers", value starts at 0 -->
                        <h2 id="activeUsers">
                            0
                        </h2>

                        <span>
                            Currently active accounts
                        </span>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="summary-card">

                        <p>
                            New Users
                        </p>

                        <!-- CHANGED: added id="newUsers", value starts at 0 -->
                        <h2 id="newUsers">
                            0
                        </h2>

                        <span>
                            Registered this month
                        </span>

                    </div>

                </div>

            </div>



            <!-- USERS TABLE -->

            <div class="users-container">


                <div class="users-header">

                    <h3>
                        All Users
                    </h3>

                    <p>
                        Users registered on the BETTA website.
                    </p>

                </div>


                <!-- ADDED: controls (search, filters, sort, reset). Uses only Bootstrap classes. -->
                <div class="row g-2 mb-3">

                    <div class="col-lg-4 col-md-12">
                        <input type="text" id="searchInput" class="form-control"
                            placeholder="Search by name, username, or email..." autocomplete="off">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <select id="roleFilter" class="form-select">
                            <option value="all">All Roles</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <select id="statusFilter" class="form-select">
                            <option value="all">All Statuses</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <select id="sortSelect" class="form-select">
                            <option value="newest">Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="name-asc">Name (A-Z)</option>
                            <option value="name-desc">Name (Z-A)</option>
                            <option value="status">Status (Active First)</option>
                        </select>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <button type="button" id="resetFiltersBtn" class="btn btn-outline-secondary w-100">
                            Reset Filters
                        </button>
                    </div>

                </div>



                <div class="table-responsive">

                    <table class="table align-middle users-table">

                        <thead>

                            <tr>

                                <th>
                                    User
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Joined
                                </th>

                                <th>
                                    Status
                                </th>

                                <!-- ADDED: Actions column for the buttons -->
                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <!-- CHANGED: sample rows removed; JavaScript fills this tbody -->
                        <tbody id="usersTableBody">
                        </tbody>

                    </table>

                </div>


                <!-- ADDED: pagination area -->
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2">
                    <small id="paginationInfo" class="text-muted"></small>
                    <nav aria-label="Users pagination">
                        <ul class="pagination mb-0" id="pagination"></ul>
                    </nav>
                </div>

            </div>

        </main>

    </div>


    <!-- ADDED: USER DETAILS MODAL -->
    <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2"><strong>Name:</strong> <span id="detailName"></span></p>
                    <p class="mb-2"><strong>Username:</strong> <span id="detailUsername"></span></p>
                    <p class="mb-2"><strong>Email:</strong> <span id="detailEmail"></span></p>
                    <p class="mb-2"><strong>Role:</strong> <span id="detailRole"></span></p>
                    <p class="mb-2"><strong>Registered:</strong> <span id="detailJoined"></span></p>
                    <p class="mb-0"><strong>Status:</strong> <span id="detailStatus"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADDED: STATUS CONFIRMATION MODAL -->
    <div class="modal fade" id="confirmStatusModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmTitle">Confirm Action</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0" id="confirmMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmStatusBtn">Confirm</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        /* =====================================================
   BETTA ADMIN USERS - VANILLA JAVASCRIPT
   ===================================================== */

        /* -----------------------------------------------------
           1. DATA
           The page starts with ZERO users (all samples removed).
           Each user is an object like the example below.
           `joined` uses the format YYYY-MM-DD.
         
           TO TEST: temporarily replace `[]` below with this:
           [
             { id: 1, name: 'Alex Santos',  username: 'alexsantos',  email: 'alex@email.com',  role: 'user',  joined: '2026-09-15', status: 'active' },
             { id: 2, name: 'Maria Santos', username: 'mariasantos', email: 'maria@email.com', role: 'admin', joined: '2026-11-02', status: 'inactive' }
           ]
           ----------------------------------------------------- */
        let users = [];

        const USERS_PER_PAGE = 10; // how many rows per page
        let currentPage = 1; // page currently shown
        let pendingStatusUserId = null; // user waiting for confirmation

        /* Grab the page elements once so we can reuse them */
        const tableBody = document.getElementById('usersTableBody');
        const searchInput = document.getElementById('searchInput');
        const roleFilter = document.getElementById('roleFilter');
        const statusFilter = document.getElementById('statusFilter');
        const sortSelect = document.getElementById('sortSelect');
        const resetBtn = document.getElementById('resetFiltersBtn');
        const paginationEl = document.getElementById('pagination');
        const paginationInfo = document.getElementById('paginationInfo');

        const detailsModal = bootstrap.Modal.getOrCreateInstance(document.getElementById('userDetailsModal'));
        const confirmModal = bootstrap.Modal.getOrCreateInstance(document.getElementById('confirmStatusModal'));

        /* -----------------------------------------------------
           HELPERS
           ----------------------------------------------------- */

        // Protects the page from HTML characters typed in user data
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        // Turns "2026-09-15" into "Sept 15, 2026" (same style as your original table)
        function formatDate(isoDate) {
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
            const parts = isoDate.split('-');
            return months[parseInt(parts[1], 10) - 1] + ' ' + parseInt(parts[2], 10) + ', ' + parts[0];
        }

        // Gets initials for the avatar, e.g. "Alex Santos" -> "AS"
        function getInitials(name) {
            const words = name.trim().split(/\s+/);
            const first = words[0] ? words[0][0] : '';
            const last = words.length > 1 ? words[words.length - 1][0] : '';
            return (first + last).toUpperCase();
        }

        // Capitalizes first letter, e.g. "admin" -> "Admin"
        function capitalize(text) {
            return text.charAt(0).toUpperCase() + text.slice(1);
        }

        /* -----------------------------------------------------
           2. SEARCH + ROLE FILTER + STATUS FILTER + SORT
           Returns the list of users that match everything,
           already sorted. Works fine when `users` is empty.
           ----------------------------------------------------- */
        function getFilteredUsers() {
            const searchText = searchInput.value.trim().toLowerCase();
            const role = roleFilter.value;
            const status = statusFilter.value;
            const sortBy = sortSelect.value;

            // Keep only users that match search, role, and status together
            let result = users.filter(function(user) {
                const matchesSearch =
                    user.name.toLowerCase().includes(searchText) ||
                    user.username.toLowerCase().includes(searchText) ||
                    user.email.toLowerCase().includes(searchText);

                const matchesRole = (role === 'all') || (user.role === role);
                const matchesStatus = (status === 'all') || (user.status === status);

                return matchesSearch && matchesRole && matchesStatus;
            });

            // Sort the matching users
            result.sort(function(a, b) {
                if (sortBy === 'name-asc') return a.name.localeCompare(b.name);
                if (sortBy === 'name-desc') return b.name.localeCompare(a.name);
                if (sortBy === 'newest') return b.joined.localeCompare(a.joined);
                if (sortBy === 'oldest') return a.joined.localeCompare(b.joined);
                if (sortBy === 'status') {
                    // "active" comes before "inactive"; ties sorted by name
                    if (a.status === b.status) return a.name.localeCompare(b.name);
                    return a.status === 'active' ? -1 : 1;
                }
                return 0;
            });

            return result;
        }

        /* -----------------------------------------------------
           3. RENDER THE TABLE (with pagination slice)
           ----------------------------------------------------- */
        function renderTable() {
            const filtered = getFilteredUsers();
            const totalPages = Math.max(1, Math.ceil(filtered.length / USERS_PER_PAGE));

            // Make sure the current page is never beyond the last page
            if (currentPage > totalPages) currentPage = totalPages;
            if (currentPage < 1) currentPage = 1;

            // Pick only the 10 users for the current page
            const start = (currentPage - 1) * USERS_PER_PAGE;
            const pageUsers = filtered.slice(start, start + USERS_PER_PAGE);

            // Empty table: show a message that matches the situation
            if (pageUsers.length === 0) {
                const message = users.length === 0 ?
                    'No users registered yet.' :
                    'No users found matching your search or filters.';
                tableBody.innerHTML =
                    '<tr><td colspan="6" class="text-center text-muted py-4">' + message + '</td></tr>';
            } else {
                // Build one table row per user, using your original markup/classes
                tableBody.innerHTML = pageUsers.map(function(user) {
                    const roleClass = user.role === 'admin' ? 'role-admin' : 'role-user';
                    const isActive = user.status === 'active';
                    const toggleText = isActive ? 'Deactivate' : 'Activate';
                    const toggleClass = isActive ? 'btn-outline-danger' : 'btn-outline-success';

                    return `
                <tr>
                    <td>
                        <div class="user-info">
                            <div class="user-avatar">${escapeHtml(getInitials(user.name))}</div>
                            <div>
                                <strong>${escapeHtml(user.name)}</strong>
                                <small>${'@' + escapeHtml(user.username)}</small>
                            </div>
                        </div>
                    </td>
                    <td>${escapeHtml(user.email)}</td>
                    <td><span class="${roleClass}">${capitalize(user.role)}</span></td>
                    <td>${formatDate(user.joined)}</td>
                    <td><span class="user-status ${user.status}">${capitalize(user.status)}</span></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1"
                            data-action="view" data-id="${user.id}">View Details</button>
                        <button type="button" class="btn btn-sm ${toggleClass}"
                            data-action="toggle" data-id="${user.id}">${toggleText}</button>
                    </td>
                </tr>`;
                }).join('');
            }

            renderPagination(filtered.length, totalPages, start, pageUsers.length);
        }

        /* -----------------------------------------------------
           4. PAGINATION
           Builds Previous / page numbers / Next.
           The active page gets Bootstrap's "active" class.
           ----------------------------------------------------- */
        function renderPagination(totalItems, totalPages, start, shownCount) {
            // Nothing to paginate when there are no results
            if (totalItems === 0) {
                paginationEl.innerHTML = '';
                paginationInfo.textContent = '';
                return;
            }

            paginationInfo.textContent =
                'Showing ' + (start + 1) + '-' + (start + shownCount) + ' of ' + totalItems + ' users';

            let html = '';

            // Previous button
            html += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" data-page="${currentPage - 1}">Previous</a></li>`;

            // Page number buttons
            for (let i = 1; i <= totalPages; i++) {
                html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" data-page="${i}">${i}</a></li>`;
            }

            // Next button
            html += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" data-page="${currentPage + 1}">Next</a></li>`;

            paginationEl.innerHTML = html;
        }

        // Clicking a page number
        paginationEl.addEventListener('click', function(event) {
            event.preventDefault();
            const link = event.target.closest('a[data-page]');
            if (!link || link.parentElement.classList.contains('disabled')) return;

            currentPage = parseInt(link.dataset.page, 10);
            renderTable();
        });

        /* -----------------------------------------------------
           5. SUMMARY CARDS
           Total, Active, and New (registered this month).
           ----------------------------------------------------- */
        function updateSummaryCards() {
            const now = new Date();
            const thisYear = now.getFullYear();
            const thisMonth = now.getMonth() + 1; // JS months start at 0

            const total = users.length;
            const active = users.filter(function(u) {
                return u.status === 'active';
            }).length;
            const newThisMonth = users.filter(function(u) {
                const parts = u.joined.split('-');
                return parseInt(parts[0], 10) === thisYear && parseInt(parts[1], 10) === thisMonth;
            }).length;

            document.getElementById('totalUsers').textContent = total;
            document.getElementById('activeUsers').textContent = active;
            document.getElementById('newUsers').textContent = newThisMonth;
        }

        /* -----------------------------------------------------
           6. VIEW DETAILS + ACTIVATE/DEACTIVATE (button clicks)
           One listener handles every button in the table.
           ----------------------------------------------------- */
        tableBody.addEventListener('click', function(event) {
            const button = event.target.closest('button[data-action]');
            if (!button) return;

            const userId = parseInt(button.dataset.id, 10);
            const user = users.find(function(u) {
                return u.id === userId;
            });
            if (!user) return;

            if (button.dataset.action === 'view') {
                openDetailsModal(user);
            } else if (button.dataset.action === 'toggle') {
                askToChangeStatus(user);
            }
        });

        // Fill the details modal with the selected user's real info
        function openDetailsModal(user) {
            document.getElementById('detailName').textContent = user.name;
            document.getElementById('detailUsername').textContent = '@' + user.username;
            document.getElementById('detailEmail').textContent = user.email;
            document.getElementById('detailRole').textContent = capitalize(user.role);
            document.getElementById('detailJoined').textContent = formatDate(user.joined);
            document.getElementById('detailStatus').textContent = capitalize(user.status);
            detailsModal.show();
        }

        // Show the confirmation modal before changing a status
        function askToChangeStatus(user) {
            pendingStatusUserId = user.id;
            const newStatus = user.status === 'active' ? 'deactivate' : 'activate';

            document.getElementById('confirmTitle').textContent = capitalize(newStatus) + ' Account';
            document.getElementById('confirmMessage').textContent =
                'Are you sure you want to ' + newStatus + ' the account of ' + user.name + '?';
            confirmModal.show();
        }

        // When the admin clicks "Confirm", actually change the status
        document.getElementById('confirmStatusBtn').addEventListener('click', function() {
            const user = users.find(function(u) {
                return u.id === pendingStatusUserId;
            });
            if (user) {
                user.status = user.status === 'active' ? 'inactive' : 'active';
                updateSummaryCards(); // refresh the numbers
                renderTable(); // refresh badge, buttons, and filters
            }
            pendingStatusUserId = null;
            confirmModal.hide();
        });

        /* -----------------------------------------------------
           7. LIVE SEARCH, FILTERS, SORT
           Any change goes back to page 1 and redraws the table.
           ----------------------------------------------------- */
        function onControlsChanged() {
            currentPage = 1;
            renderTable();
        }

        searchInput.addEventListener('input', onControlsChanged); // while typing
        roleFilter.addEventListener('change', onControlsChanged);
        statusFilter.addEventListener('change', onControlsChanged);
        sortSelect.addEventListener('change', onControlsChanged);

        /* -----------------------------------------------------
           8. RESET FILTERS
           Clears search, role, status, and sort. Back to page 1.
           (This does NOT delete users.)
           ----------------------------------------------------- */
        resetBtn.addEventListener('click', function() {
            searchInput.value = '';
            roleFilter.value = 'all';
            statusFilter.value = 'all';
            sortSelect.value = 'newest';
            currentPage = 1;
            renderTable();
        });

        /* -----------------------------------------------------
           9. START THE PAGE
           Draw the empty table and set the summary cards to 0.
           ----------------------------------------------------- */
        updateSummaryCards();
        renderTable();
    </script>

</body>

</html>