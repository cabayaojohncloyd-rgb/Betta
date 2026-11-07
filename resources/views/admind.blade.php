<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BETTA | Admin Donation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="admin-layout">

        <!-- SIDEBAR -->
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


        <!-- MAIN CONTENT -->
        <main class="dashboard">

            <div class="page-header">
                <div>
                    <h1>Donations</h1>
                </div>
            </div>


            <!-- SUMMARY CARDS -->
            <div class="row g-4 mb-4">

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Total Donations</p>
                        <h2 id="totalDonations">0</h2>
                        <span>All recorded donations</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Total Amount for Causes</p>
                        <h2 id="totalCausesAmount">₱0</h2>
                        <span>Total donated amount</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Total Amount for Projects</p>
                        <h2 id="totalProjectsAmount">₱0</h2>
                        <span>Total donated amount</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <p>Pending</p>
                        <h2 id="pendingDonations">0</h2>
                        <span>Waiting for confirmation</span>
                    </div>
                </div>

            </div>


            <!-- DONATIONS TABLE -->
            <div class="donations-container">

                <div class="donations-header d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>
                        <h3>All Donations</h3>
                        <p>List of donations submitted by users.</p>
                    </div>

                    <div class="d-flex flex-wrap gap-2">

                        <button
                            type="button"
                            class="history-btn"
                            id="exportDonationsBtn">

                            <i class="fa-solid fa-file-csv me-2"></i>
                            Export Data

                        </button>

                        <button
                            type="button"
                            class="history-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#donationHistoryModal">

                            <i class="fa-solid fa-clock-rotate-left me-2"></i>
                            Donation History

                        </button>

                    </div>

                </div>


                <div class="row g-2 my-3">

                    <div class="col-md-8">
                        <input type="search"
                            id="donationSearch"
                            class="form-control"
                            placeholder="Search by donor name, email, or cause..."
                            aria-label="Search donations"
                            autocomplete="off">
                    </div>

                    <div class="col-md-4">
                        <select id="donationStatusFilter"
                            class="form-select"
                            aria-label="Filter donations by status">
                            <option value="All" selected>All</option>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Declined">Declined</option>
                        </select>
                    </div>

                </div>


                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>Donor</th>
                                <th>Email</th>
                                <th>Cause</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="donationsTableBody">

                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    No donations available yet.
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

    </div>


    <!-- DONATION HISTORY MODAL -->
    <div class="modal fade"
        id="donationHistoryModal"
        tabindex="-1"
        aria-labelledby="donationHistoryModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content history-modal">

                <div class="modal-header">

                    <div>
                        <h5 class="modal-title" id="donationHistoryModalLabel">
                            Donation History
                        </h5>

                        <p class="text-muted mb-0">
                            Records of approved and declined donations.
                        </p>
                    </div>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="d-flex justify-content-end mb-3">

                        <div class="history-filter">

                            <label class="filter-label" for="donationHistorySort">
                                Sort by:
                            </label>

                            <select class="form-select history-select"
                                id="donationHistorySort">

                                <option value="newest" selected>Newest First</option>
                                <option value="oldest">Oldest First</option>

                            </select>

                        </div>

                    </div>

                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>
                                <tr>
                                    <th>Donor</th>
                                    <th>Email</th>
                                    <th>Cause</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason / Remarks</th>
                                </tr>
                            </thead>

                            <tbody id="donationHistoryBody">

                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        No donation history available.
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Close
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- DONATION DETAILS MODAL -->
    <div class="modal fade"
        id="donationDetailsModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

            <div class="modal-content donation-modal">

                <div class="modal-header">

                    <div>
                        <h5 class="modal-title">Donation Details</h5>
                        <p class="modal-subtitle">
                            Review and verify donation information.
                        </p>
                    </div>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>

                <div class="modal-body">

                    <h6 class="donation-section-title">
                        Donation Information
                    </h6>

                    <div class="donation-details">

                        <div class="detail-item">
                            <span>Donor</span>
                            <strong id="detailDonor">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Email</span>
                            <strong id="detailEmail">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Cause</span>
                            <strong id="detailCause">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Amount</span>
                            <strong id="detailAmount">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Donation Date</span>
                            <strong id="detailDate">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Admin Remarks</span>
                            <strong id="detailRemarks">—</strong>
                        </div>

                    </div>


                    <h6 class="donation-section-title">
                        Payment Verification
                    </h6>

                    <div class="donation-details">

                        <div class="detail-item">
                            <span>Payment Method</span>
                            <strong id="detailPaymentMethod">—</strong>
                        </div>

                        <div class="detail-item">
                            <span>Transaction Reference</span>
                            <strong id="detailReference">—</strong>
                        </div>

                    </div>


                    <div class="receipt-section">

                        <label>Payment Receipt</label>

                        <div class="receipt-preview" id="detailReceiptPreview">
                            <img id="detailReceiptImg"
                                src=""
                                alt="Payment Receipt">
                        </div>

                        <a href="#"
                            id="detailReceiptLink"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="view-receipt-btn">

                            <i class="fa-regular fa-eye"></i>
                            View Full Receipt

                        </a>

                        <p id="detailNoReceipt" class="text-muted small mb-0 d-none">
                            No receipt uploaded.
                        </p>

                    </div>


                    <div class="status-section">

                        <label for="donationStatus">
                            Donation Status
                        </label>

                        <!-- "Declined" is NOT a choice here. Use the Decline Donation button instead.
                             JavaScript adds a "Declined" option only for donations that are already declined. -->
                        <select id="donationStatus"
                            name="status"
                            class="form-select">

                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>

                        </select>

                        <!-- Optional remarks, shown only when Approved is chosen -->
                        <div id="remarksGroup" class="mt-3 d-none">
                            <label for="donationRemarks" class="form-label">
                                Remarks <span class="text-muted">(optional)</span>
                            </label>
                            <textarea id="donationRemarks"
                                class="form-control"
                                rows="3"
                                maxlength="500"
                                placeholder="Add a note about this approval..."></textarea>
                        </div>

                        <div id="detailDeclineInfo" class="alert alert-danger small mt-3 mb-0 d-none">
                            <div><strong>Reason:</strong> <span id="detailDeclineReason"></span></div>
                            <div id="detailDeclineFeedbackRow" class="mt-1 d-none">
                                <strong>Feedback:</strong> <span id="detailDeclineFeedback"></span>
                            </div>
                        </div>

                    </div>


                    <!-- Status History -->
                    <h6 class="donation-section-title mt-4">
                        Status History
                    </h6>

                    <ul id="detailHistoryList" class="list-unstyled small mb-0">
                        <li class="text-muted">No history yet.</li>
                    </ul>

                </div>


                <div class="modal-footer">

                    <button type="button"
                        class="cancel-btn"
                        data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="button"
                        id="openDeclineBtn"
                        class="decline-donation-btn">
                        Decline Donation
                    </button>

                    <button type="button"
                        id="confirmStatusBtn"
                        class="confirm-status-btn">
                        Confirm Status
                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- DECLINE FEEDBACK MODAL -->
    <div class="modal fade"
        id="declineDonationModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content donation-modal">

                <div class="modal-header">

                    <div>
                        <h5 class="modal-title">
                            Decline Donation
                        </h5>

                        <p class="modal-subtitle" id="declineModalSubtitle">
                            Provide feedback for the donor.
                        </p>
                    </div>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>


                <!-- When you connect Laravel, add @csrf inside this form and set a real action. -->
                <form action="#" method="POST" id="declineDonationForm" novalidate>

                    <div class="modal-body">

                        <div class="alert alert-danger small">
                            This donation will be marked as declined.
                            Please provide a reason for the donor.
                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Donor
                            </label>

                            <input type="text"
                                id="declineDonorName"
                                class="form-control"
                                value=""
                                readonly>

                        </div>

                        <div class="mb-3">

                            <label for="declineReason"
                                class="form-label">
                                Reason for Declining *
                            </label>

                            <select
                                id="declineReason"
                                name="decline_reason"
                                class="form-select"
                                required>

                                <option value="" selected disabled>
                                    Select a reason
                                </option>

                                <option value="Invalid payment receipt">
                                    Invalid Payment Receipt
                                </option>

                                <option value="Payment not received">
                                    Payment Not Received
                                </option>

                                <option value="Incorrect transaction details">
                                    Incorrect Transaction Details
                                </option>

                                <option value="Unable to verify payment">
                                    Unable to Verify Payment
                                </option>

                                <option value="Other">
                                    Other
                                </option>

                            </select>

                            <div class="invalid-feedback">
                                Please select a reason for declining this donation.
                            </div>

                        </div>


                        <div class="mb-3">

                            <label for="declineFeedback"
                                class="form-label">
                                Additional Feedback
                                <span id="declineFeedbackRequired" class="text-danger d-none">*</span>
                            </label>

                            <textarea
                                id="declineFeedback"
                                name="decline_feedback"
                                class="form-control"
                                rows="4"
                                placeholder="Explain why the donation was declined..."></textarea>

                            <div class="invalid-feedback">
                                Please enter at least 5 characters when the reason is "Other".
                            </div>

                        </div>

                    </div>


                    <div class="modal-footer">

                        <button type="button"
                            class="cancel-btn"
                            data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit"
                            class="decline-confirm-btn">
                            Confirm Decline
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <script>
        /*
         * BETTA Admin Donations - front-end behavior (vanilla JavaScript).
         *
         * Everything below works on an in-memory array. It never writes to the
         * Laravel database and never calls fetch/XHR. Changes made on this page
         * disappear on refresh until backend saving is added.
         */
        document.addEventListener('DOMContentLoaded', function() {
            'use strict';

            /* =========================================================
               SETTINGS
               ========================================================= */

            // true  = Total Amount cards count only Approved donations
            // false = Pending donations are counted in the amounts too (Declined never is)
            var COUNT_ONLY_APPROVED_IN_AMOUNTS = true;

            // true  = Export CSV exports what the table currently shows (search + filter)
            // false = Export CSV always exports every donation
            var EXPORT_FILTERED_ONLY = true;

            // Minimum feedback length when the decline reason is "Other"
            var OTHER_MIN_LENGTH = 5;

            /* =========================================================
               DATA (sample donations for testing)
               Replace with [] or real data from Laravel later.
               ========================================================= */

            var initialDonations = [{
                    id: 1,
                    donor: 'Maria Santos',
                    email: 'maria.santos@example.com',
                    cause: 'Typhoon Relief Fund',
                    type: 'cause',
                    amount: 1500,
                    date: '2026-11-02',
                    status: 'Pending',
                    paymentMethod: 'GCash',
                    reference: 'GC-20261102-0001',
                    receiptUrl: 'data:image/svg+xml;utf8,' + encodeURIComponent(
                        '<svg xmlns="http://www.w3.org/2000/svg" width="300" height="400"><rect width="300" height="400" fill="#f3f4f6"/><text x="150" y="200" text-anchor="middle" font-size="22" fill="#555">Sample Receipt</text></svg>'
                    ),
                    history: [{
                        at: '2026-11-02T09:15:00',
                        status: 'Pending',
                        note: 'Donation submitted'
                    }]
                },
            ];

            var donations = []; // the working list for this page
            var currentDonationId = null; // donation open in the details modal
            var decliningDonationId = null; // donation open in the decline modal

            var STATUSES = ['Approved', 'Pending', 'Declined'];
            var MONTHS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

            /* =========================================================
               ELEMENT REFERENCES
               ========================================================= */

            function byId(id) {
                return document.getElementById(id);
            }

            var el = {
                totalDonations: byId('totalDonations'),
                totalCauses: byId('totalCausesAmount'),
                totalProjects: byId('totalProjectsAmount'),
                pending: byId('pendingDonations'),

                tableBody: byId('donationsTableBody'),
                search: byId('donationSearch'),
                statusFilter: byId('donationStatusFilter'),
                exportBtn: byId('exportDonationsBtn'),

                historyBody: byId('donationHistoryBody'),
                historySort: byId('donationHistorySort'),

                detailsModal: byId('donationDetailsModal'),
                detailDonor: byId('detailDonor'),
                detailEmail: byId('detailEmail'),
                detailCause: byId('detailCause'),
                detailAmount: byId('detailAmount'),
                detailDate: byId('detailDate'),
                detailRemarks: byId('detailRemarks'),
                detailPaymentMethod: byId('detailPaymentMethod'),
                detailReference: byId('detailReference'),
                receiptPreview: byId('detailReceiptPreview'),
                receiptImg: byId('detailReceiptImg'),
                receiptLink: byId('detailReceiptLink'),
                noReceipt: byId('detailNoReceipt'),
                statusSelect: byId('donationStatus'),
                remarksGroup: byId('remarksGroup'),
                remarksInput: byId('donationRemarks'),
                declineInfo: byId('detailDeclineInfo'),
                declineInfoReason: byId('detailDeclineReason'),
                declineInfoFeedbackRow: byId('detailDeclineFeedbackRow'),
                declineInfoFeedback: byId('detailDeclineFeedback'),
                historyList: byId('detailHistoryList'),
                openDeclineBtn: byId('openDeclineBtn'),
                confirmBtn: byId('confirmStatusBtn'),

                declineModal: byId('declineDonationModal'),
                declineForm: byId('declineDonationForm'),
                declineSubtitle: byId('declineModalSubtitle'),
                declineDonorName: byId('declineDonorName'),
                declineReason: byId('declineReason'),
                declineFeedback: byId('declineFeedback'),
                declineFeedbackRequired: byId('declineFeedbackRequired')
            };

            /* =========================================================
               HELPERS
               ========================================================= */

            function escapeHtml(value) {
                return String(value === null || value === undefined ? '' : value)
                    .replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;')
                    .replace(/'/g, '&#39;');
            }

            function capitalize(text) {
                text = String(text || '');
                return text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
            }

            // Cleans up a status value. The old name "Completed" now means "Approved".
            function normalizeStatus(value) {
                var status = capitalize(value || 'Pending');
                if (status === 'Completed') {
                    status = 'Approved';
                }
                return STATUSES.indexOf(status) !== -1 ? status : 'Pending';
            }

            function parseAmount(value) {
                var n = Number(String(value === null || value === undefined ? '' : value).replace(/[^0-9.\-]/g, ''));
                return isFinite(n) ? n : 0;
            }

            function formatPeso(number) {
                return '₱' + Number(number).toLocaleString('en-US', {
                    maximumFractionDigits: 2
                });
            }

            function parseDate(value) {
                if (!value) {
                    return null;
                }
                var m = /^(\d{4})-(\d{2})-(\d{2})$/.exec(String(value));
                var d = m ? new Date(Number(m[1]), Number(m[2]) - 1, Number(m[3])) : new Date(value);
                return isNaN(d.getTime()) ? null : d;
            }

            function formatShortDate(value) {
                var d = parseDate(value);
                return d ? MONTHS[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear() : '—';
            }

            function formatLongDate(value) {
                var d = parseDate(value);
                return d ? d.toLocaleDateString('en-US', {
                    month: 'long',
                    day: 'numeric',
                    year: 'numeric'
                }) : '—';
            }

            function formatIsoDate(value) {
                var d = parseDate(value);
                if (!d) {
                    return '';
                }
                var mm = String(d.getMonth() + 1).padStart(2, '0');
                var dd = String(d.getDate()).padStart(2, '0');
                return d.getFullYear() + '-' + mm + '-' + dd;
            }

            // "Nov 6, 2026, 3:45 PM" (used in the status history list)
            function formatDateTime(value) {
                var d = parseDate(value);
                return d ? d.toLocaleString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric',
                    hour: 'numeric',
                    minute: '2-digit'
                }) : '—';
            }

            // "2026-11-06 15:45" (used in the CSV)
            function formatIsoDateTime(value) {
                var d = parseDate(value);
                if (!d) {
                    return '';
                }
                return formatIsoDate(d) + ' ' +
                    String(d.getHours()).padStart(2, '0') + ':' +
                    String(d.getMinutes()).padStart(2, '0');
            }

            // Approved reuses your existing green "completed" badge style.
            function statusBadge(status) {
                var cssClass = status === 'Approved' ? 'completed' : status.toLowerCase();
                return '<span class="status ' + escapeHtml(cssClass) + '">' + escapeHtml(status) + '</span>';
            }

            function findDonation(id) {
                for (var i = 0; i < donations.length; i++) {
                    if (donations[i].id === String(id)) {
                        return donations[i];
                    }
                }
                return null;
            }

            // Adds one entry to a donation's status history (never removes old ones).
            function addHistory(donation, status, note) {
                donation.history.push({
                    at: new Date().toISOString(),
                    status: status,
                    note: note || ''
                });
            }

            // "Reason: feedback" text for a decline
            function buildDeclineNote(reason, feedback) {
                return reason + (feedback ? ': ' + feedback : '');
            }

            function normalizeHistory(raw, status, date) {
                if (Array.isArray(raw.history) && raw.history.length) {
                    return raw.history.map(function(h) {
                        return {
                            at: h.at || h.created_at || null,
                            status: normalizeStatus(h.status),
                            note: String(h.note || '')
                        };
                    });
                }
                // No history supplied: start with one entry for the current status.
                var d = parseDate(date);
                return [{
                    at: d ? d.toISOString() : new Date().toISOString(),
                    status: status,
                    note: status === 'Pending' ? 'Donation submitted' : ''
                }];
            }

            /*
             * Accepts a raw record (for example from Laravel) and returns a clean donation.
             * Expected fields: id, donor, email, cause, type ("cause" or "project"), amount,
             * date, status (Pending | Approved | Declined), paymentMethod, reference, receiptUrl,
             * declineReason, declineFeedback, remarks, history [{at, status, note}].
             * Common snake_case names (donor_name, payment_method, ...) are accepted too.
             * The old status "Completed" is treated as "Approved".
             */
            function normalizeDonation(raw, index) {
                raw = raw || {};
                var status = normalizeStatus(raw.status);
                var type = String(raw.type || '').toLowerCase();

                if (type !== 'cause' && type !== 'project') {
                    type = null;
                    console.warn('Donation "' + (raw.id !== undefined ? raw.id : index) +
                        '" has no valid type ("cause" or "project"), so its amount is not added to either card.');
                }

                var date = raw.date || raw.created_at || null;

                return {
                    id: String(raw.id !== undefined && raw.id !== null ? raw.id : 'local-' + index),
                    order: index,
                    donor: String(raw.donor || raw.donor_name || ''),
                    email: String(raw.email || ''),
                    cause: String(raw.cause || raw.cause_title || ''),
                    type: type,
                    amount: parseAmount(raw.amount),
                    date: date,
                    status: status,
                    paymentMethod: String(raw.paymentMethod || raw.payment_method || ''),
                    reference: String(raw.reference || raw.transaction_reference || ''),
                    receiptUrl: String(raw.receiptUrl || raw.receipt_url || ''),
                    declineReason: String(raw.declineReason || raw.decline_reason || ''),
                    declineFeedback: String(raw.declineFeedback || raw.decline_feedback || ''),
                    remarks: String(raw.remarks || raw.admin_remarks || ''),
                    history: normalizeHistory(raw, status, date)
                };
            }

            function sortByDate(list, direction) {
                var dir = direction === 'oldest' ? 1 : -1;
                return list.slice().sort(function(a, b) {
                    var da = parseDate(a.date) ? parseDate(a.date).getTime() : 0;
                    var db = parseDate(b.date) ? parseDate(b.date).getTime() : 0;
                    if (da !== db) {
                        return (da - db) * dir;
                    }
                    return (a.order - b.order) * dir;
                });
            }

            function showAlert(message, type) {
                var container = document.querySelector('.donations-container');
                if (!container) {
                    return;
                }

                var old = document.getElementById('donationAlert');
                if (old) {
                    old.remove();
                }

                var box = document.createElement('div');
                box.id = 'donationAlert';
                box.className = 'alert alert-' + (type || 'success') + ' alert-dismissible fade show mb-3';
                box.setAttribute('role', 'alert');

                var text = document.createElement('span');
                text.textContent = message;
                box.appendChild(text);

                var close = document.createElement('button');
                close.type = 'button';
                close.className = 'btn-close';
                close.setAttribute('data-bs-dismiss', 'alert');
                close.setAttribute('aria-label', 'Close');
                box.appendChild(close);

                container.parentNode.insertBefore(box, container);

                setTimeout(function() {
                    if (box.parentNode) {
                        box.remove();
                    }
                }, 4000);
            }

            /* =========================================================
               SEARCH AND STATUS FILTER
               ========================================================= */

            function getFilteredDonations() {
                var query = el.search.value.trim().toLowerCase();
                var status = el.statusFilter.value;

                var result = donations.filter(function(d) {
                    var statusOk = status === 'All' || d.status === status;
                    var searchOk = !query ||
                        d.donor.toLowerCase().indexOf(query) !== -1 ||
                        d.email.toLowerCase().indexOf(query) !== -1 ||
                        d.cause.toLowerCase().indexOf(query) !== -1;
                    return statusOk && searchOk;
                });

                return sortByDate(result, 'newest');
            }

            /* =========================================================
               RENDERING
               ========================================================= */

            function renderDonationsTable() {
                var rows = getFilteredDonations();

                if (rows.length === 0) {
                    var message = donations.length === 0 ?
                        'No donations available yet.' :
                        'No donations match your search or filter.';
                    el.tableBody.innerHTML =
                        '<tr><td colspan="7" class="text-center text-muted py-4">' + message + '</td></tr>';
                    return;
                }

                el.tableBody.innerHTML = rows.map(function(d) {
                    return '<tr>' +
                        '<td><strong>' + escapeHtml(d.donor) + '</strong></td>' +
                        '<td>' + escapeHtml(d.email) + '</td>' +
                        '<td>' + escapeHtml(d.cause) + '</td>' +
                        '<td>' + escapeHtml(formatPeso(d.amount)) + '</td>' +
                        '<td>' + escapeHtml(formatShortDate(d.date)) + '</td>' +
                        '<td>' + statusBadge(d.status) + '</td>' +
                        '<td>' +
                        '<button type="button" class="view-btn" data-bs-toggle="modal" ' +
                        'data-bs-target="#donationDetailsModal" data-donation-id="' + escapeHtml(d.id) + '">View Details</button>' +
                        '</td>' +
                        '</tr>';
                }).join('');
            }

            // Text for the history table's "Reason / Remarks" column.
            function reasonOrRemarks(d) {
                if (d.status === 'Declined') {
                    return buildDeclineNote(d.declineReason || '-', d.declineFeedback);
                }
                return d.remarks || '-';
            }

            // History = Approved and Declined donations, sorted by date.
            function renderHistory() {
                var history = donations.filter(function(d) {
                    return d.status === 'Approved' || d.status === 'Declined';
                });

                if (history.length === 0) {
                    el.historyBody.innerHTML =
                        '<tr><td colspan="7" class="text-center text-muted py-4">No donation history available.</td></tr>';
                    return;
                }

                el.historyBody.innerHTML = sortByDate(history, el.historySort.value).map(function(d) {
                    return '<tr>' +
                        '<td><strong>' + escapeHtml(d.donor) + '</strong></td>' +
                        '<td>' + escapeHtml(d.email) + '</td>' +
                        '<td>' + escapeHtml(d.cause) + '</td>' +
                        '<td>' + escapeHtml(formatPeso(d.amount)) + '</td>' +
                        '<td>' + escapeHtml(formatShortDate(d.date)) + '</td>' +
                        '<td>' + statusBadge(d.status) + '</td>' +
                        '<td>' + escapeHtml(reasonOrRemarks(d)) + '</td>' +
                        '</tr>';
                }).join('');
            }

            // Summary cards are always calculated from ALL donations.
            function renderSummary() {
                var causes = 0;
                var projects = 0;
                var pending = 0;

                donations.forEach(function(d) {
                    if (d.status === 'Pending') {
                        pending++;
                    }

                    var counts = COUNT_ONLY_APPROVED_IN_AMOUNTS ?
                        d.status === 'Approved' :
                        d.status !== 'Declined';

                    if (counts) {
                        if (d.type === 'cause') {
                            causes += d.amount;
                        }
                        if (d.type === 'project') {
                            projects += d.amount;
                        }
                    }
                });

                el.totalDonations.textContent = donations.length;
                el.totalCauses.textContent = formatPeso(causes);
                el.totalProjects.textContent = formatPeso(projects);
                el.pending.textContent = pending;
            }

            function refreshAll() {
                renderSummary();
                renderDonationsTable();
                renderHistory();
            }

            /* =========================================================
               DONATION DETAILS MODAL + CONFIRM STATUS
               ========================================================= */

            // Shows the Remarks box only when "Approved" is the chosen status.
            function toggleRemarksBox() {
                el.remarksGroup.classList.toggle('d-none', el.statusSelect.value !== 'Approved');
            }

            // Newest entry first.
            function renderStatusHistory(d) {
                if (!d.history.length) {
                    el.historyList.innerHTML = '<li class="text-muted">No history yet.</li>';
                    return;
                }

                el.historyList.innerHTML = d.history.slice().reverse().map(function(h) {
                    return '<li class="border-start border-3 ps-3 pb-3">' +
                        statusBadge(h.status) +
                        ' <span class="text-muted ms-1">' + escapeHtml(formatDateTime(h.at)) + '</span>' +
                        (h.note ? '<div class="mt-1">' + escapeHtml(h.note) + '</div>' : '') +
                        '</li>';
                }).join('');
            }

            function fillDetailsModal(d) {
                el.detailDonor.textContent = d.donor || '—';
                el.detailEmail.textContent = d.email || '—';
                el.detailCause.textContent = d.cause || '—';
                el.detailAmount.textContent = formatPeso(d.amount);
                el.detailDate.textContent = formatLongDate(d.date);
                el.detailRemarks.textContent = d.remarks || '—';
                el.detailPaymentMethod.textContent = d.paymentMethod || '—';
                el.detailReference.textContent = d.reference || '—';

                // Receipt
                if (d.receiptUrl) {
                    el.receiptImg.src = d.receiptUrl;
                    el.receiptImg.alt = (d.donor || 'Donor') + ' Payment Receipt';
                    el.receiptLink.href = d.receiptUrl;
                    el.receiptPreview.classList.remove('d-none');
                    el.receiptLink.classList.remove('d-none');
                    el.noReceipt.classList.add('d-none');
                } else {
                    el.receiptImg.removeAttribute('src');
                    el.receiptLink.removeAttribute('href');
                    el.receiptPreview.classList.add('d-none');
                    el.receiptLink.classList.add('d-none');
                    el.noReceipt.classList.remove('d-none');
                }

                // Status dropdown: only Pending and Approved are choices.
                // "Declined" is added only when this donation is already declined, so the
                // dropdown can show its current status. It can still be switched back to
                // Pending or Approved.
                var declinedOption = el.statusSelect.querySelector('option[value="Declined"]');
                if (declinedOption) {
                    declinedOption.remove();
                }

                if (d.status === 'Declined') {
                    var opt = document.createElement('option');
                    opt.value = 'Declined';
                    opt.textContent = 'Declined';
                    el.statusSelect.appendChild(opt);

                    el.statusSelect.value = 'Declined';
                    el.openDeclineBtn.disabled = true;

                    el.declineInfo.classList.remove('d-none');
                    el.declineInfoReason.textContent = d.declineReason || '—';
                    el.declineInfoFeedback.textContent = d.declineFeedback;
                    el.declineInfoFeedbackRow.classList.toggle('d-none', !d.declineFeedback);
                } else {
                    el.statusSelect.value = d.status;
                    el.openDeclineBtn.disabled = false;
                    el.declineInfo.classList.add('d-none');
                }

                el.statusSelect.disabled = false;
                el.confirmBtn.disabled = false;

                // Remarks box: prefilled so remarks can be edited later.
                el.remarksInput.value = d.remarks || '';
                toggleRemarksBox();

                renderStatusHistory(d);
            }

            el.statusSelect.addEventListener('change', toggleRemarksBox);

            el.detailsModal.addEventListener('show.bs.modal', function(event) {
                var trigger = event.relatedTarget;
                var id = trigger && trigger.getAttribute ? trigger.getAttribute('data-donation-id') : null;
                var donation = id !== null ? findDonation(id) : null;

                if (!donation) {
                    event.preventDefault();
                    return;
                }

                currentDonationId = donation.id;
                fillDetailsModal(donation);
            });

            // Hook for the future: this is where a request to Laravel would be sent.
            function saveStatusToServer(donation) {
                // Not connected yet. Nothing is saved to the database from this page.
            }

            el.confirmBtn.addEventListener('click', function() {
                var donation = findDonation(currentDonationId);
                if (!donation) {
                    return;
                }

                var newStatus = el.statusSelect.value;
                var modal = bootstrap.Modal.getOrCreateInstance(el.detailsModal);

                // Still "Declined": nothing to change (use Pending / Approved to reverse it).
                if (newStatus === 'Declined') {
                    modal.hide();
                    showAlert('Status was not changed.', 'info');
                    return;
                }

                if (newStatus !== 'Pending' && newStatus !== 'Approved') {
                    return;
                }

                var statusChanged = donation.status !== newStatus;
                var newRemarks = newStatus === 'Approved' ? el.remarksInput.value.trim() : '';
                var remarksChanged = newRemarks !== donation.remarks;

                if (!statusChanged && !remarksChanged) {
                    modal.hide();
                    showAlert('Nothing was changed.', 'info');
                    return;
                }

                if (statusChanged) {
                    // Log the change. Earlier entries (including a decline) are kept.
                    addHistory(donation, newStatus, newStatus === 'Approved' ? newRemarks : 'Status set back to Pending');
                } else {
                    // Same status, only the remarks were edited.
                    addHistory(donation, newStatus, newRemarks ? 'Remarks updated: ' + newRemarks : 'Remarks cleared');
                }

                donation.status = newStatus;
                donation.remarks = newRemarks;

                modal.hide();
                refreshAll();
                saveStatusToServer(donation);
                showAlert(statusChanged ? 'Donation status updated to ' + newStatus + '.' : 'Remarks updated.', 'success');
            });

            /* =========================================================
               DECLINE DONATION (reason required; "Other" needs feedback)
               ========================================================= */

            function updateOtherRequirement() {
                var isOther = el.declineReason.value === 'Other';
                el.declineFeedbackRequired.classList.toggle('d-none', !isOther);
                if (!isOther) {
                    el.declineFeedback.classList.remove('is-invalid');
                }
            }

            function resetDeclineForm() {
                el.declineForm.reset();
                el.declineReason.classList.remove('is-invalid');
                el.declineFeedback.classList.remove('is-invalid');
                updateOtherRequirement();
            }

            el.openDeclineBtn.addEventListener('click', function() {
                var donation = findDonation(currentDonationId);
                if (!donation || donation.status === 'Declined') {
                    return;
                }

                decliningDonationId = donation.id;

                el.detailsModal.addEventListener('hidden.bs.modal', function() {
                    resetDeclineForm();
                    el.declineDonorName.value = donation.donor;
                    el.declineSubtitle.textContent = 'Provide feedback for ' + (donation.donor || 'the donor') + '.';
                    bootstrap.Modal.getOrCreateInstance(el.declineModal).show();
                }, {
                    once: true
                });

                bootstrap.Modal.getOrCreateInstance(el.detailsModal).hide();
            });

            el.declineReason.addEventListener('change', function() {
                if (el.declineReason.value) {
                    el.declineReason.classList.remove('is-invalid');
                }
                updateOtherRequirement();
            });

            el.declineFeedback.addEventListener('input', function() {
                if (el.declineReason.value === 'Other' &&
                    el.declineFeedback.value.trim().length >= OTHER_MIN_LENGTH) {
                    el.declineFeedback.classList.remove('is-invalid');
                }
            });

            el.declineForm.addEventListener('submit', function(event) {
                event.preventDefault(); // nothing is posted to the server from here

                if (!el.declineReason.value) {
                    el.declineReason.classList.add('is-invalid');
                    el.declineReason.focus();
                    return;
                }

                var feedback = el.declineFeedback.value.trim();

                if (el.declineReason.value === 'Other' && feedback.length < OTHER_MIN_LENGTH) {
                    el.declineFeedback.classList.add('is-invalid');
                    el.declineFeedback.focus();
                    return;
                }

                var donation = findDonation(decliningDonationId);
                if (!donation) {
                    return;
                }

                donation.status = 'Declined';
                donation.declineReason = el.declineReason.value;
                donation.declineFeedback = feedback;
                donation.remarks = ''; // approval remarks no longer apply (they stay in the history log)
                addHistory(donation, 'Declined', buildDeclineNote(donation.declineReason, feedback));

                bootstrap.Modal.getOrCreateInstance(el.declineModal).hide();
                refreshAll();
                saveStatusToServer(donation);
                showAlert('Donation declined. It now appears in Donation History.', 'success');
            });

            el.declineModal.addEventListener('hidden.bs.modal', function() {
                resetDeclineForm();
                decliningDonationId = null;
            });

            /* =========================================================
               EXPORT CSV
               ========================================================= */

            // Escapes one CSV cell. Text starting with = + - @ is prefixed with ' so Excel
            // will not run it as a formula (CSV injection protection).
            function csvCell(value) {
                if (typeof value === 'number') {
                    return String(value);
                }

                var text = String(value === null || value === undefined ? '' : value);
                if (['=', '+', '-', '@', '\t', '\r'].indexOf(text.charAt(0)) !== -1) {
                    text = "'" + text;
                }
                if (/[",\r\n]/.test(text)) {
                    text = '"' + text.replace(/"/g, '""') + '"';
                }
                return text;
            }

            // "2026-10-20 09:00 Pending - Donation submitted | 2026-10-21 10:30 Declined - ..."
            function historyToText(d) {
                return d.history.map(function(h) {
                    return formatIsoDateTime(h.at) + ' ' + h.status + (h.note ? ' - ' + h.note : '');
                }).join(' | ');
            }

            el.exportBtn.addEventListener('click', function() {
                var rows = EXPORT_FILTERED_ONLY ? getFilteredDonations() : sortByDate(donations, 'newest');

                if (rows.length === 0) {
                    showAlert('There are no donation records to export.', 'warning');
                    return;
                }

                var lines = [
                    ['Donor Name', 'Email', 'Cause', 'Amount', 'Date', 'Status', 'Approval Remarks', 'Status History']
                ];
                rows.forEach(function(d) {
                    lines.push([
                        d.donor,
                        d.email,
                        d.cause,
                        d.amount,
                        formatIsoDate(d.date),
                        d.status,
                        d.remarks,
                        historyToText(d)
                    ]);
                });

                var csv = '\uFEFF' + lines.map(function(line) {
                    return line.map(csvCell).join(',');
                }).join('\r\n');

                var blob = new Blob([csv], {
                    type: 'text/csv;charset=utf-8;'
                });
                var url = URL.createObjectURL(blob);
                var link = document.createElement('a');
                link.href = url;
                link.download = 'betta-donations-' + formatIsoDate(new Date().toISOString().slice(0, 10)) + '.csv';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(url);
            });

            /* =========================================================
               EVENT LISTENERS FOR SEARCH, FILTER, SORT
               ========================================================= */

            el.search.addEventListener('input', renderDonationsTable);
            el.statusFilter.addEventListener('change', renderDonationsTable);
            el.historySort.addEventListener('change', renderHistory);

            /* =========================================================
               PUBLIC HELPERS (front-end only)
               ========================================================= */

            window.bettaDonations = {
                load: function(records) {
                    donations = (Array.isArray(records) ? records : []).map(normalizeDonation);
                    refreshAll();
                },

                reset: function() {
                    donations = [];
                    currentDonationId = null;
                    decliningDonationId = null;
                    el.search.value = '';
                    el.statusFilter.value = 'All';
                    el.historySort.value = 'newest';
                    refreshAll();
                },

                getAll: function() {
                    return donations.map(function(d) {
                        return Object.assign({}, d);
                    });
                }
            };

            window.bettaDonations.load(initialDonations);
        });
    </script>

</body>

</html>