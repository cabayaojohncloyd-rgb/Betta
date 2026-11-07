<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <!-- Only styles the "Declined" badge, which your CSS did not have yet. Nothing existing is changed. -->
    <style>
        .request-status.declined {
            background: #fee2e2;
            color: #b91c1c;
        }
    </style>

    <title>BETTA | Admin Donation Request</title>
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

                <a href="{{ route('admin') }}" class="nav-item {{ request()->routeIs('admin') ? 'active' : '' }}">
                    <span>⌂</span> Dashboard
                </a>

                <a href="{{ route('admind') }}" class="nav-item {{ request()->routeIs('admind') ? 'active' : '' }}">
                    <span>♡</span> Donations
                </a>

                <a href="{{ route('admingoods') }}" class="nav-item {{ request()->routeIs('admingoods') ? 'active' : '' }}">
                    <span>▤</span> Donated Goods
                </a>

                <a href="{{ route('adminr') }}" class="nav-item {{ request()->routeIs('adminr') ? 'active' : '' }}">
                    <span>▣</span> Donation Requests
                </a>

                <a href="{{ route('adminc') }}" class="nav-item {{ request()->routeIs('adminc') ? 'active' : '' }}">
                    <span>◆</span> Causes / Projects
                </a>

                <!-- MONITORING -->
                <a href="{{ route('adminmonitor') }}" class="nav-item {{ request()->routeIs('adminmonitor') ? 'active' : '' }}">
                    <span><i class="bi bi-geo-alt"></i></span> Monitoring
                </a>

                <a href="{{ route('adminu') }}" class="nav-item {{ request()->routeIs('adminu') ? 'active' : '' }}">
                    <span>♙</span> Users
                </a>

                <a href="{{ route('adminreport') }}" class="nav-item {{ request()->routeIs('adminreport') ? 'active' : '' }}">
                    <span>▥</span> Reports
                </a>

            </nav>

            <div class="sidebar-bottom">

                <a href="{{ route('adminset') }}" class="nav-item">
                    <span>⚙</span> Settings
                </a>

                <a href="{{ route('home') }}" class="nav-item logout">
                    <span>↪</span> Logout
                </a>

            </div>

        </aside>

        <!-- Main Content -->
        <!-- DONATION REQUEST DASHBOARD -->
        <main class="dashboard">

            <div class="page-header">
                <h1>Donation Requests</h1>
            </div>

            <!-- SUMMARY -->

            <div class="row g-4 mb-4">

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Total Requests</p>
                        <h2 id="totalRequests">0</h2>
                        <span>All submitted requests</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Pending Requests</p>
                        <h2 id="pendingRequests">0</h2>
                        <span>Waiting for review</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Approved Requests</p>
                        <h2 id="approvedRequests">0</h2>
                        <span>Approved requests</span>
                    </div>
                </div>

            </div>

            <!-- REQUEST TABLE -->

            <div class="requests-container">

                <div class="requests-header d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>
                        <h3>Recent Requests</h3>
                        <p>New requests appear here for review.</p>
                    </div>

                    <div class="d-flex flex-wrap gap-2">

                        <button type="button" class="history-btn" id="exportCsvBtn">
                            <i class="fa-solid fa-file-csv me-2"></i>
                            Export CSV
                        </button>

                        <button type="button" class="history-btn" data-bs-toggle="modal" data-bs-target="#requestHistoryModal">
                            <i class="fa-solid fa-clock-rotate-left me-2"></i>
                            Request History
                        </button>

                    </div>

                </div>

                <!-- Search + Status filter
                     "Pending" is the default view. Choosing Approved or Declined lists those requests. -->
                <div class="row g-2 mb-3">
                    <div class="col-md-8">
                        <input type="text" id="requestSearch" class="form-control"
                            placeholder="Search by organization, contact person, or request type..." autocomplete="off">
                    </div>
                    <div class="col-md-4">
                        <select id="statusFilter" class="form-select history-select">
                            <option value="pending" selected>Pending</option>
                            <option value="approved">Approved</option>
                            <option value="declined">Declined</option>
                        </select>
                    </div>
                </div>

                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>Organization</th>
                                <th>Contact Person</th>
                                <th>Request Type</th>
                                <th>People</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <!-- Rows are generated by JavaScript from the request data -->
                        <tbody id="requestsTableBody"></tbody>

                    </table>

                </div>

            </div>

            <!-- Detail modals (one per request) are created here by JavaScript -->
            <div id="requestModals"></div>

            <!-- DECISION MODAL: Approve / Decline with remarks (same look as the Donations page) -->
            <div class="modal fade" id="decisionModal" tabindex="-1" aria-labelledby="decisionModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content donation-modal">

                        <div class="modal-header">
                            <div>
                                <h5 class="modal-title" id="decisionModalLabel">Decision</h5>
                                <p class="modal-subtitle" id="decisionModalSubtitle">Add remarks for this request.</p>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <div class="alert alert-danger small d-none" id="decisionDeclineNotice">
                                This request will be marked as declined.
                                Please provide a reason for the requester.
                            </div>

                            <p class="mb-3" id="decisionSummary"></p>

                            <label for="decisionRemarks" class="form-label" id="decisionRemarksLabel">Remarks</label>
                            <textarea class="form-control" id="decisionRemarks" rows="4" maxlength="500"></textarea>
                            <div class="invalid-feedback" id="decisionError"></div>

                            <div class="d-flex justify-content-between mt-1">
                                <small class="text-muted" id="decisionHint"></small>
                                <small class="text-muted"><span id="decisionCount">0</span>/500</small>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="confirm-status-btn" id="decisionConfirmBtn">Confirm</button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Request History Modal -->

            <div class="modal fade" id="requestHistoryModal" tabindex="-1" aria-labelledby="requestHistoryModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content history-modal">

                        <div class="modal-header">

                            <div>
                                <h5 class="modal-title" id="requestHistoryModalLabel">Request History</h5>
                                <p class="text-muted mb-0">Records of approved and declined donation requests.</p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <div class="modal-body">

                            <!-- Date Filter -->
                            <div class="d-flex justify-content-end mb-3">
                                <div class="history-filter">
                                    <label class="filter-label" for="requestHistorySort">Sort by:</label>
                                    <select class="form-select history-select" id="requestHistorySort">
                                        <option value="newest" selected>Newest First</option>
                                        <option value="oldest">Oldest First</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Request History Table -->
                            <div class="table-responsive">

                                <table class="table align-middle">

                                    <thead>
                                        <tr>
                                            <th>Organization</th>
                                            <th>Contact Person</th>
                                            <th>Request Type</th>
                                            <th>People</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>

                                    <tbody id="requestHistoryBody"></tbody>

                                </table>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>

            </div>


        </main>

    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3" id="toastContainer" style="z-index: 2000;"></div>


    <!-- =====================================================
         JAVASCRIPT - Donation Request Management (Vanilla JS)
         ===================================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            /* ---------- 1. REQUEST DATA ----------
               No requests yet (fresh system). Each request uses these fields:
               {
                 id: 1,                          // unique number
                 organization: '', contact: '', email: '', phone: '',
                 type: '', people: 0, address: '',
                 submitted: '2026-11-06',        // YYYY-MM-DD
                 preferredDate: '2026-12-01',    // YYYY-MM-DD or text
                 method: '',                     // distribution method
                 status: 'pending'               // pending | approved | declined
                 // remarks, decidedAt are filled in when the admin approves or declines
               }
               Later, with Laravel you can load real data here:  const ORIGINAL_REQUESTS = @json($requests ?? []);  */

            const SHOW_SAMPLE_REQUESTS = true;

            const SAMPLE_REQUESTS = [{
                id: 9001,
                organization: 'Sample: Try Approve Here (TEST)',
                contact: 'Maria Santos',
                email: 'maria.santos@example.com',
                phone: '09171234567',
                type: 'Food Packs',
                people: 120,
                address: 'Purok 3, Brgy. Gredu, Panabo City, Davao del Norte',
                submitted: '2026-11-05',
                preferredDate: '2026-11-15',
                method: 'Door-to-door',
                status: 'pending'
            }, ];

            const ORIGINAL_REQUESTS = SHOW_SAMPLE_REQUESTS ? SAMPLE_REQUESTS : [];
            /* ===== TEST REQUESTS (END) ===== */

            const MAX_REMARKS = 500;
            const MIN_DECLINE_REMARKS = 5;

            let requests = cloneData(ORIGINAL_REQUESTS).map(normalizeRequest);

            /* ---------- 2. ELEMENTS ---------- */
            const $ = function(id) {
                return document.getElementById(id);
            };
            const tableBody = $('requestsTableBody');
            const historyBody = $('requestHistoryBody');
            const modalsBox = $('requestModals');
            const searchInput = $('requestSearch');
            const statusFilter = $('statusFilter');
            const historySort = $('requestHistorySort');
            const totalEl = $('totalRequests');
            const pendingEl = $('pendingRequests');
            const approvedEl = $('approvedRequests');

            const decisionModalEl = $('decisionModal');
            const decisionModal = new bootstrap.Modal(decisionModalEl);
            const decisionRemarks = $('decisionRemarks');
            let pendingDecision = null; // { id, action } while the decision modal is open

            /* ---------- 3. HELPERS ---------- */
            function cloneData(data) {
                return data.map(function(item) {
                    return Object.assign({}, item);
                });
            }

            // Escapes text for use inside HTML text AND quoted attributes
            function escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = text == null ? '' : String(text);
                return div.innerHTML.replace(/"/g, '&quot;').replace(/'/g, '&#39;');
            }

            function capitalize(text) {
                return text.charAt(0).toUpperCase() + text.slice(1);
            }

            // "2026-11-06" -> "Nov 6, 2026" (no timezone problems)
            function formatDate(iso) {
                const parts = String(iso).split('-').map(Number);
                return new Date(parts[0], parts[1] - 1, parts[2])
                    .toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
            }

            // Shows a formatted date when the value looks like YYYY-MM-DD, otherwise the text as it is
            function displayDate(value) {
                if (!value) return '—';
                return /^\d{4}-\d{2}-\d{2}$/.test(value) ? formatDate(value) : value;
            }

            function formatDateTime(date) {
                return date.toLocaleString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric',
                    hour: 'numeric',
                    minute: '2-digit'
                });
            }

            // Fills in anything a request is missing
            function normalizeRequest(r) {
                r.status = r.status || 'pending';
                r.modalId = r.modalId || 'requestModal-' + r.id;
                r.submittedLabel = r.submittedLabel || displayDate(r.submitted);
                r.remarks = r.remarks || '';
                r.decidedAt = r.decidedAt || '';
                return r;
            }

            function findRequest(id) {
                return requests.find(function(r) {
                    return r.id === Number(id);
                });
            }

            function statusBadge(status) {
                return '<span class="request-status ' + status + '">' + capitalize(status) + '</span>';
            }

            function emptyRow(message, colspan) {
                return '<tr><td colspan="' + colspan + '" class="text-center text-muted py-4">' + message + '</td></tr>';
            }

            // Bootstrap toast. type = success | danger | warning | info
            function showToast(message, type) {
                type = type || 'success';
                const toast = document.createElement('div');
                toast.className = 'toast align-items-center border-0 text-bg-' + type;
                toast.setAttribute('role', 'alert');
                toast.innerHTML = '<div class="d-flex"><div class="toast-body"></div>' +
                    '<button type="button" class="btn-close' + (type === 'warning' ? '' : ' btn-close-white') +
                    ' me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div>';
                toast.querySelector('.toast-body').textContent = message;
                $('toastContainer').appendChild(toast);
                toast.addEventListener('hidden.bs.toast', function() {
                    toast.remove();
                });
                new bootstrap.Toast(toast, {
                    delay: 4000
                }).show();
            }

            /* ---------- 4. SEARCH + FILTER ---------- */
            function getVisibleRequests() {
                const term = searchInput.value.trim().toLowerCase();
                const status = statusFilter.value; // pending | approved | declined

                return requests.filter(function(r) {
                    if (r.status !== status) return false;
                    if (term === '') return true;
                    return String(r.organization).toLowerCase().includes(term) ||
                        String(r.contact).toLowerCase().includes(term) ||
                        String(r.type).toLowerCase().includes(term);
                });
            }

            /* ---------- 5. RENDER: REQUESTS TABLE + EMPTY STATES ---------- */
            function renderRequestsTable() {
                const visible = getVisibleRequests();

                if (visible.length === 0) {
                    const searching = searchInput.value.trim() !== '';
                    const status = statusFilter.value;
                    let message;
                    if (searching) message = 'No matching requests found.';
                    else if (status === 'pending') message = 'There are no pending requests at the moment.';
                    else message = 'There are no ' + status + ' requests yet.';
                    tableBody.innerHTML = emptyRow(message, 7);
                    return;
                }

                tableBody.innerHTML = visible.map(function(r) {
                    return '<tr>' +
                        '<td><strong>' + escapeHtml(r.organization) + '</strong></td>' +
                        '<td>' + escapeHtml(r.contact) + '</td>' +
                        '<td>' + escapeHtml(r.type) + '</td>' +
                        '<td>' + escapeHtml(r.people) + '</td>' +
                        '<td>' + escapeHtml(r.submittedLabel) + '</td>' +
                        '<td>' + statusBadge(r.status) + '</td>' +
                        '<td><button type="button" class="view-btn" data-bs-toggle="modal" data-bs-target="#' + escapeHtml(r.modalId) + '">View Details</button></td>' +
                        '</tr>';
                }).join('');
            }

            /* ---------- 6. RENDER: REQUEST HISTORY (approved + declined, with remarks) ---------- */
            function renderHistory() {
                const newestFirst = historySort.value === 'newest';

                // Each request exists once in the array, so it can only appear once here.
                const history = requests.filter(function(r) {
                    return r.status !== 'pending';
                });

                history.sort(function(a, b) {
                    if (a.submitted === b.submitted) return a.id - b.id;
                    const result = a.submitted < b.submitted ? -1 : 1;
                    return newestFirst ? -result : result;
                });

                if (history.length === 0) {
                    historyBody.innerHTML = emptyRow('No request history yet.', 7);
                    return;
                }

                historyBody.innerHTML = history.map(function(r) {
                    return '<tr>' +
                        '<td><strong>' + escapeHtml(r.organization) + '</strong></td>' +
                        '<td>' + escapeHtml(r.contact) + '</td>' +
                        '<td>' + escapeHtml(r.type) + '</td>' +
                        '<td>' + escapeHtml(r.people) + '</td>' +
                        '<td>' + escapeHtml(r.submittedLabel) + '</td>' +
                        '<td>' + statusBadge(r.status) + '</td>' +
                        '<td class="small" style="min-width:200px;">' + (r.remarks ? escapeHtml(r.remarks) : '<span class="text-muted">No remarks</span>') + '</td>' +
                        '</tr>';
                }).join('');
            }

            /* ---------- 7. SUMMARY CARDS ---------- */
            function updateSummary() {
                totalEl.textContent = requests.length;
                pendingEl.textContent = requests.filter(function(r) {
                    return r.status === 'pending';
                }).length;
                approvedEl.textContent = requests.filter(function(r) {
                    return r.status === 'approved';
                }).length;
            }

            /* ---------- 8. DETAIL MODALS (one per request, created by JavaScript) ---------- */
            function detailRow(label, value) {
                return '<div class="col-sm-6"><div class="text-muted small">' + label + '</div>' +
                    '<div class="fw-semibold">' + escapeHtml(value || '—') + '</div></div>';
            }

            function buildDetailModal(r) {
                const modal = document.createElement('div');
                modal.className = 'modal fade request-detail-modal';
                modal.id = r.modalId;
                modal.tabIndex = -1;
                modal.dataset.requestId = r.id;
                modal.setAttribute('aria-hidden', 'true');
                modal.setAttribute('aria-labelledby', r.modalId + 'Label');

                modal.innerHTML =
                    '<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">' +
                    '<div class="modal-content donation-modal">' +
                    '<div class="modal-header">' +
                    '<div><h5 class="modal-title" id="' + escapeHtml(r.modalId) + 'Label">Request Details</h5>' +
                    '<span class="request-status-wrapper"><span class="request-status pending">Pending</span></span></div>' +
                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                    '</div>' +
                    '<div class="modal-body">' +
                    '<div class="row g-3">' +
                    detailRow('Organization Name', r.organization) +
                    detailRow('Contact Person', r.contact) +
                    detailRow('Email Address', r.email) +
                    detailRow('Phone Number', r.phone) +
                    detailRow('Request Type', r.type) +
                    detailRow('Number of People', r.people) +
                    detailRow('Distribution Address', r.address) +
                    detailRow('Distribution Method', r.method) +
                    detailRow('Submission Date', r.submittedLabel) +
                    detailRow('Preferred Distribution Date', displayDate(r.preferredDate)) +
                    '</div>' +
                    '<div class="decision-box border rounded p-3 mt-4 d-none">' +
                    '<div class="d-flex justify-content-between flex-wrap gap-2 mb-1">' +
                    '<strong class="decision-title"></strong>' +
                    '<small class="text-muted decision-date"></small>' +
                    '</div>' +
                    '<p class="mb-0 decision-text" style="white-space:pre-wrap;"></p>' +
                    '</div>' +
                    '</div>' +
                    '<div class="modal-footer">' +
                    '<button type="button" class="cancel-btn" data-bs-dismiss="modal">Close</button>' +
                    '<button type="button" class="decline-donation-btn" data-action="decline">Decline Request</button>' +
                    '<button type="button" class="confirm-status-btn" data-action="approve">Approve Request</button>' +
                    '</div>' +
                    '</div></div>';

                return modal;
            }

            // Creates the modal of every new request and updates the status, buttons and remarks of all of them
            function syncModals() {
                requests.forEach(function(r) {
                    let modal = $(r.modalId);
                    if (!modal) {
                        modal = buildDetailModal(r);
                        modalsBox.appendChild(modal);
                    }

                    const badge = modal.querySelector('.request-status-wrapper .request-status');
                    badge.className = 'request-status ' + r.status;
                    badge.textContent = capitalize(r.status);

                    modal.querySelectorAll('[data-action]').forEach(function(btn) {
                        btn.classList.toggle('d-none', r.status !== 'pending');
                    });

                    // Show the decision remarks once the request is approved or declined
                    const box = modal.querySelector('.decision-box');
                    if (r.status === 'pending') {
                        box.classList.add('d-none');
                    } else {
                        box.classList.remove('d-none');
                        box.querySelector('.decision-title').textContent = r.status === 'approved' ? 'Approval remarks' : 'Reason for declining';
                        box.querySelector('.decision-date').textContent = r.decidedAt ? formatDateTime(new Date(r.decidedAt)) : '';
                        box.querySelector('.decision-text').textContent = r.remarks || 'No remarks provided.';
                    }
                });
            }

            function refreshAll() {
                renderRequestsTable();
                renderHistory();
                updateSummary();
                syncModals();
            }

            /* ---------- 9. APPROVE / DECLINE WITH REMARKS ---------- */

            // Step 1: Approve or Decline clicked inside a detail modal -> close it, then open the decision modal
            function startDecision(id, action) {
                const request = findRequest(id);
                if (!request || request.status !== 'pending') return;

                pendingDecision = {
                    id: request.id,
                    action: action
                };

                const detailsEl = $(request.modalId);
                const detailsInstance = bootstrap.Modal.getInstance(detailsEl);
                if (detailsInstance && detailsEl.classList.contains('show')) {
                    // wait until it is fully closed so two modals never overlap
                    detailsEl.addEventListener('hidden.bs.modal', function() {
                        decisionModal.show();
                    }, {
                        once: true
                    });
                    detailsInstance.hide();
                } else {
                    decisionModal.show();
                }
            }

            // Set up the decision modal every time it opens
            decisionModalEl.addEventListener('show.bs.modal', function() {
                if (!pendingDecision) return;
                const request = findRequest(pendingDecision.id);
                const approving = pendingDecision.action === 'approve';

                $('decisionModalLabel').textContent = approving ? 'Approve Request' : 'Decline Request';
                $('decisionModalSubtitle').textContent = approving ?
                    'Add optional remarks for this approval.' :
                    'Provide feedback for ' + request.organization + '.';
                $('decisionDeclineNotice').classList.toggle('d-none', approving);
                $('decisionSummary').textContent = (approving ? 'Approve' : 'Decline') + ' the request from "' + request.organization + '"?';
                $('decisionRemarksLabel').textContent = approving ? 'Remarks (optional)' : 'Reason for declining (required)';
                $('decisionHint').textContent = approving ?
                    'You can add notes for your records.' :
                    'At least ' + MIN_DECLINE_REMARKS + ' characters. This is saved in the request history.';

                const confirmBtn = $('decisionConfirmBtn');
                confirmBtn.textContent = approving ? 'Confirm Approval' : 'Confirm Decline';
                confirmBtn.className = approving ? 'confirm-status-btn' : 'decline-confirm-btn';

                decisionRemarks.value = '';
                decisionRemarks.classList.remove('is-invalid');
                $('decisionCount').textContent = '0';
            });

            decisionModalEl.addEventListener('shown.bs.modal', function() {
                decisionRemarks.focus();
            });

            // Forget the decision if the admin cancels
            decisionModalEl.addEventListener('hidden.bs.modal', function() {
                pendingDecision = null;
            });

            decisionRemarks.addEventListener('input', function() {
                $('decisionCount').textContent = decisionRemarks.value.length;
                decisionRemarks.classList.remove('is-invalid');
            });

            // Step 2: Confirm -> save the status and remarks
            function confirmDecision() {
                if (!pendingDecision) return;
                const request = findRequest(pendingDecision.id);
                if (!request || request.status !== 'pending') return;

                const approving = pendingDecision.action === 'approve';
                const remarks = decisionRemarks.value.trim();

                if (!approving && remarks.length < MIN_DECLINE_REMARKS) {
                    $('decisionError').textContent = 'Please enter the reason for declining (at least ' + MIN_DECLINE_REMARKS + ' characters).';
                    decisionRemarks.classList.add('is-invalid');
                    decisionRemarks.focus();
                    return;
                }

                request.status = approving ? 'approved' : 'declined';
                request.remarks = remarks;
                request.decidedAt = new Date().toISOString();
                pendingDecision = null; // stops a double click from saving twice

                decisionModal.hide();
                refreshAll();
                showToast('Request from "' + request.organization + '" was ' + request.status + '.', approving ? 'success' : 'warning');
            }

            // One listener handles every Approve/Decline button in every detail modal.
            document.addEventListener('click', function(event) {
                const btn = event.target.closest('[data-action]');
                if (!btn) return;
                const modal = btn.closest('.request-detail-modal');
                if (!modal) return;
                startDecision(modal.dataset.requestId, btn.dataset.action);
            });

            $('decisionConfirmBtn').addEventListener('click', confirmDecision);

            /* ---------- 10. EXPORT CSV ---------- */
            function csvCell(value) {
                let text = value == null ? '' : String(value);
                // stop spreadsheet formulas typed into a form from running when the file is opened
                if (/^[=+\-@\t\r]/.test(text)) text = "'" + text;
                return '"' + text.replace(/"/g, '""') + '"';
            }

            function exportCsv() {
                const headers = ['Organization Name', 'Contact Person', 'Email Address', 'Phone Number',
                    'Request Type', 'Number of People', 'Distribution Address', 'Submission Date',
                    'Preferred Distribution Date', 'Distribution Method', 'Status',
                    'Decision Remarks', 'Decision Date'
                ];

                const rows = requests.map(function(r) { // ALL records, active and historical
                    return [r.organization, r.contact, r.email, r.phone, r.type, r.people,
                        r.address, r.submitted, r.preferredDate, r.method, capitalize(r.status),
                        r.remarks, r.decidedAt ? formatDateTime(new Date(r.decidedAt)) : ''
                    ];
                });

                const lines = [headers].concat(rows).map(function(row) {
                    return row.map(csvCell).join(',');
                });

                // "\uFEFF" (BOM) makes Excel read the file as UTF-8.
                const blob = new Blob(['\uFEFF' + lines.join('\r\n')], {
                    type: 'text/csv;charset=utf-8;'
                });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'BETTA_Donation_Requests.csv';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(url);
            }

            /* ---------- 11. EVENT LISTENERS ---------- */
            searchInput.addEventListener('input', renderRequestsTable); // updates while typing
            statusFilter.addEventListener('change', renderRequestsTable);
            historySort.addEventListener('change', renderHistory);
            $('exportCsvBtn').addEventListener('click', exportCsv);

            /* ---------- 12. START ---------- */
            refreshAll();
        });
    </script>

</body>

</html>