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

    <title>BETTA | Admin Donated Goods</title>
</head>

<body>

    <div class="admin-layout">

        <!-- Sidebar (unchanged) -->
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


        <!-- Donate Goods Content -->
        <main class="dashboard" id="goodsPage" data-donations="{{ json_encode($goodsDonations ?? []) }}">

            <div class="page-header">

                <div>

                    <h1>Donate Goods</h1>

                </div>

            </div>

            <!-- Success / info message shown after a status update (filled by JavaScript) -->
            <div id="goodsAlert" class="alert d-none" role="alert"></div>


            <!-- Summary Cards (values are calculated by JavaScript; they start at 0) -->
            <div class="row g-4 mb-4">

                <div class="col-md-4">

                    <div class="summary-card">

                        <p>Total Goods Donations</p>

                        <h2 id="totalGoodsCount">0</h2>

                        <span>All recorded goods donations</span>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="summary-card">

                        <p>Types of Goods</p>

                        <h2 id="goodsTypesCount">0</h2>

                        <span id="goodsTypesText">No goods recorded yet</span>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="summary-card">

                        <p>Pending</p>

                        <h2 id="pendingGoodsCount">0</h2>

                        <span>Waiting for confirmation</span>

                    </div>

                </div>

            </div>


            <!-- Goods Donations Table -->

            <div class="donations-container">

                <div class="donations-header d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>
                        <h3>All Goods Donations</h3>

                        <p>
                            List of goods donated by users.
                        </p>
                    </div>

                    <div class="d-flex flex-wrap gap-2">

                        <button
                            type="button"
                            id="exportCsvBtn"
                            class="history-btn">

                            <i class="fa-solid fa-file-csv me-2"></i>
                            Export Data

                        </button>

                        <button
                            type="button"
                            class="history-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#goodsHistoryModal">

                            <i class="fa-solid fa-clock-rotate-left me-2"></i>
                            Goods Donation History

                        </button>

                    </div>

                </div>


                <!-- Search, status filter and date sorting (uses plain Bootstrap form classes) -->
                <div class="row g-2 mb-3">

                    <div class="col-md-6">
                        <input
                            type="search"
                            id="goodsSearch"
                            class="form-control"
                            placeholder="Search donor, email, cause, or goods..."
                            aria-label="Search goods donations">
                    </div>

                    <div class="col-6 col-md-3">
                        <select id="goodsStatusFilter" class="form-select" aria-label="Filter by status">
                            <option value="all" selected>All Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                        </select>
                    </div>

                    <div class="col-6 col-md-3">
                        <select id="goodsSortOrder" class="form-select" aria-label="Sort by date">
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
                                <th>Goods</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>

                        <!-- Rows are created by JavaScript (renderTable) -->
                        <tbody id="goodsTableBody">
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    No goods donations available yet.
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>

            </div>


            <!-- Goods Donation History Modal -->

            <div class="modal fade"
                id="goodsHistoryModal"
                tabindex="-1"
                aria-labelledby="goodsHistoryModalLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content history-modal">

                        <div class="modal-header">

                            <div>
                                <h5 class="modal-title" id="goodsHistoryModalLabel">
                                    Goods Donation History
                                </h5>

                                <p class="text-muted mb-0">
                                    Records of completed and declined goods donations.
                                </p>
                            </div>

                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>

                        </div>


                        <div class="modal-body">

                            <!-- Date Filter -->

                            <div class="d-flex justify-content-end mb-3">

                                <div class="history-filter">

                                    <label class="filter-label" for="goodsHistorySort">
                                        Sort by:
                                    </label>

                                    <select
                                        class="form-select history-select"
                                        id="goodsHistorySort">

                                        <option value="newest" selected>
                                            Newest First
                                        </option>

                                        <option value="oldest">
                                            Oldest First
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <!-- Goods History Table (now with Reason and Remarks columns) -->

                            <div class="table-responsive">

                                <table class="table align-middle">

                                    <thead>

                                        <tr>
                                            <th>Donor</th>
                                            <th>Email</th>
                                            <th>Cause</th>
                                            <th>Goods</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reason</th>
                                            <th>Remarks</th>
                                        </tr>

                                    </thead>

                                    <!-- Rows are created by JavaScript (renderHistory) -->
                                    <tbody id="goodsHistoryBody">
                                        <tr>
                                            <td colspan="9" class="text-center text-muted py-4">
                                                No donation history available yet.
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                        </div>


                        <div class="modal-footer">

                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Close
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!--
                GOODS DONATION DETAILS MODAL
                One reusable modal. JavaScript fills it with the donation of
                whichever View Details button was clicked.
            -->
            <div class="modal fade" id="goodsDetailsModal" tabindex="-1" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content donation-modal">

                        <div class="modal-header">

                            <div>
                                <h5 class="modal-title">Goods Donation Details</h5>
                                <p class="modal-subtitle">
                                    Review the goods and update the donation status.
                                </p>
                            </div>

                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>

                        <div class="modal-body">

                            <h6 class="donation-section-title">Donor Information</h6>

                            <div class="donation-details">

                                <div class="detail-item">
                                    <span>Donor</span>
                                    <strong id="detailDonor">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Email</span>
                                    <strong id="detailEmail">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Contact Number</span>
                                    <strong id="detailContact">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Donation Date</span>
                                    <strong id="detailDate">-</strong>
                                </div>

                            </div>


                            <h6 class="donation-section-title">Goods Donation Information</h6>

                            <div class="donation-details" id="detailGoodsList">

                                <div class="detail-item">
                                    <span>Cause</span>
                                    <strong id="detailCause">-</strong>
                                </div>

                                <!-- One .detail-item per goods item (Rice, Canned Goods, ...) is added here by JavaScript -->

                            </div>


                            <h6 class="donation-section-title">Drop-Off Information</h6>

                            <div class="donation-details">

                                <div class="detail-item">
                                    <span>Drop-Off Center</span>
                                    <strong id="detailDropCenter">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Location</span>
                                    <strong id="detailLocation">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Expected Drop-Off</span>
                                    <strong id="detailExpected">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Date Received</span>
                                    <strong id="detailReceived">-</strong>
                                </div>

                                <div class="detail-item">
                                    <span>Reference Number</span>
                                    <strong id="detailReference">-</strong>
                                </div>

                            </div>


                            <!-- Shown only when the donation was declined -->
                            <div id="declineInfoSection" class="d-none">

                                <h6 class="donation-section-title">Decline Information</h6>

                                <div class="donation-details">

                                    <div class="detail-item">
                                        <span>Reason</span>
                                        <strong id="detailDeclineReason">-</strong>
                                    </div>

                                    <div class="detail-item">
                                        <span>Additional Feedback</span>
                                        <strong id="detailDeclineFeedback">-</strong>
                                    </div>

                                </div>

                            </div>


                            <!-- Shown only when the donation was approved and has remarks -->
                            <div id="approveInfoSection" class="d-none">

                                <h6 class="donation-section-title">Approval Information</h6>

                                <div class="donation-details">

                                    <div class="detail-item">
                                        <span>Remarks</span>
                                        <strong id="detailApproveRemarks">-</strong>
                                    </div>

                                </div>

                            </div>


                            <div id="goodsMapSection" class="d-none">

                                <h6 class="donation-section-title">Drop-Off Location Map</h6>

                                <div class="goods-map-section">

                                    <div class="goods-map-container">

                                        <!-- src is set by JavaScript from the donation's location -->
                                        <iframe
                                            id="goodsMapFrame"
                                            src="about:blank"
                                            width="100%"
                                            height="250"
                                            style="border:0;"
                                            loading="lazy"
                                            allowfullscreen
                                            referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>

                                    </div>

                                    <a id="goodsMapLink"
                                        href="#"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="goods-view-map-btn">

                                        <i class="bi bi-box-arrow-up-right"></i>
                                        View Larger Map

                                    </a>

                                </div>

                            </div>


                            <!-- Decision Log: every status change, newest first (filled by JavaScript) -->
                            <div id="decisionLogSection" class="d-none">

                                <h6 class="donation-section-title">Decision Log</h6>

                                <div class="donation-details" id="decisionLogList">
                                    <!-- One .detail-item per status change is added here by JavaScript -->
                                </div>

                            </div>


                            <div class="status-section">

                                <label for="goodsStatus">Donation Status</label>

                                <!-- "Declined" is NOT a choice here. Use the Decline Donation button instead.
                                     JavaScript adds a "Declined" option only for donations that are already declined. -->
                                <select id="goodsStatus" name="status" class="form-select">

                                    <option value="Pending">Pending</option>

                                    <option value="Approved">Approved</option>

                                </select>

                                <!-- Optional remarks, shown only when "Approved" is selected -->
                                <div id="approveRemarksWrap" class="mt-3 d-none">

                                    <label for="approveRemarks" class="form-label">
                                        Remarks (optional)
                                    </label>

                                    <textarea
                                        id="approveRemarks"
                                        name="approve_remarks"
                                        class="form-control"
                                        rows="3"
                                        placeholder="e.g. Goods checked and complete. Received in good condition."></textarea>

                                </div>

                                <!-- Shown when the admin confirms without changing the status -->
                                <div id="goodsModalAlert" class="text-danger small mt-2 d-none"></div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button" class="cancel-btn"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button"
                                id="openGoodsDeclineBtn"
                                class="decline-donation-btn">
                                Decline Donation
                            </button>

                            <button type="button"
                                id="confirmGoodsStatusBtn"
                                class="confirm-status-btn">

                                Confirm Status

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Decline Feedback Modal (same ID and design as before) -->
            <div class="modal fade"
                id="declineFeedbackModal"
                tabindex="-1"
                aria-labelledby="declineFeedbackModalLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content decline-modal">

                        <div class="modal-header">

                            <div>
                                <h5 class="modal-title" id="declineFeedbackModalLabel">
                                    Decline Donation
                                </h5>

                                <p class="modal-subtitle">
                                    Please provide a reason for declining this donation.
                                </p>
                            </div>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
                            </button>

                        </div>

                        <div class="modal-body">

                            <div class="decline-notice">

                                <i class="bi bi-exclamation-circle"></i>

                                <p>
                                    This donation will be marked as declined.
                                    Please provide feedback so the donor
                                    understands the reason.
                                </p>

                            </div>

                            <div class="mb-3">

                                <label for="declineReason" class="form-label">
                                    Reason for Declining *
                                </label>

                                <!-- Goods-specific reasons (the old payment reasons were removed) -->
                                <select id="declineReason"
                                    name="decline_reason"
                                    class="form-select"
                                    required>

                                    <option value="" selected disabled>
                                        Select a reason
                                    </option>

                                    <option value="Goods do not match the donation details">
                                        Goods do not match the donation details
                                    </option>

                                    <option value="Expired goods">
                                        Expired goods
                                    </option>

                                    <option value="Damaged or spoiled goods">
                                        Damaged or spoiled goods
                                    </option>

                                    <option value="Incomplete or incorrect quantity">
                                        Incomplete or incorrect quantity
                                    </option>

                                    <option value="Items not accepted for this cause">
                                        Items not accepted for this cause
                                    </option>

                                    <option value="Goods not received at the drop-off center">
                                        Goods not received at the drop-off center
                                    </option>

                                    <option value="Incorrect donation information">
                                        Incorrect donation information
                                    </option>

                                    <option value="Other">
                                        Other
                                    </option>

                                </select>

                                <!-- Bootstrap shows this automatically when the select has .is-invalid -->
                                <div class="invalid-feedback">
                                    Please select a reason for declining this donation.
                                </div>

                            </div>

                            <div class="mb-3">

                                <label for="declineFeedback" class="form-label">
                                    Additional Feedback
                                    <span id="declineFeedbackStar" class="d-none">*</span>
                                </label>

                                <textarea
                                    id="declineFeedback"
                                    name="decline_feedback"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Explain why the donation was declined..."></textarea>

                                <!-- Shown when the reason is "Other" and feedback is empty -->
                                <div class="invalid-feedback">
                                    Please explain the reason when you choose "Other".
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">

                            <button type="button"
                                class="cancel-btn"
                                data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button type="button"
                                id="confirmDeclineBtn"
                                class="decline-confirm-btn">

                                Confirm Decline

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>


    <script>
        /* =====================================================================
           BETTA Admin - Donated Goods page
           Vanilla JavaScript only (Bootstrap 5 is already loaded in the <head>).
 
           IMPORTANT: Changes made here (status, remarks, decline reason, decision
           log) are TEMPORARY. They live only in the browser and disappear when the
           page is refreshed. Saving them permanently requires a Laravel route that
           updates the database.
           ===================================================================== */


        /* ---------------------------------------------------------------------
           1. DATA
           $goodsDonations comes from your Laravel controller. It is stored in the
           data-donations attribute of <main id="goodsPage"> and read here.
 
           Each donation is expected to look like this:
           {
             id: 1,
             donor: "Name",           email: "a@b.com",   contact: "0912...",
             cause: "Cause title",
             items: [ { name: "Rice", quantity: 50, unit: "kg" } ],
             donation_date: "2026-09-19",        // YYYY-MM-DD (used for sorting)
             status: "Pending",                  // Pending | Approved | Declined
             dropoff_center: "...", location: "...",
             expected_dropoff: "2026-09-21", date_received: null,
             reference: "GD-2026-000001",
             remarks: "",                        // optional note when approved
             decline_reason: "", decline_feedback: "",
             history: []                         // decision log, filled by JavaScript
           }
        --------------------------------------------------------------------- */
        const donations = JSON.parse(document.getElementById('goodsPage').dataset.donations);


        /* ===== TEST DONATION (START) ==============================================
           One sample donation so you can try Approve / Decline / the decision log.
           It shows as the first row of the table: "Sample Donor (TEST)", reference
           GD-TEST-0001.
 
           TO REMOVE IT, either:
             a) change  SHOW_SAMPLE_DONATION  below from true to false, or
             b) delete everything from "TEST DONATION (START)" to "TEST DONATION (END)".
           Nothing else in the page depends on it.
           ========================================================================= */
        const SHOW_SAMPLE_DONATION = true;

        const sampleDonations = [{
            id: 'sample-1',
            donor: 'Sample Donor (TEST)',
            email: 'sample.donor@example.com',
            contact: '09123456789',
            cause: 'Typhoon Relief Drive',
            items: [{
                    name: 'Rice',
                    quantity: 50,
                    unit: 'kg'
                },
                {
                    name: 'Canned Goods',
                    quantity: 120,
                    unit: 'cans'
                },
                {
                    name: 'Noodles',
                    quantity: 80,
                    unit: 'packs'
                }
            ],
            donation_date: '2026-11-06',
            status: 'Pending',
            dropoff_center: 'Panabo City Hall Drop-Off Center',
            location: 'Panabo City Hall, Panabo City, Davao del Norte',
            expected_dropoff: '2026-11-08',
            date_received: null,
            reference: 'GD-TEST-0001',
            remarks: '',
            decline_reason: '',
            decline_feedback: '',
            history: []
        }];

        if (SHOW_SAMPLE_DONATION) {
            donations.push(...sampleDonations);
        }
        /* ===== TEST DONATION (END) ================================================ */


        // The id of the donation currently open in the details modal
        let currentDonationId = null;


        /* ---------------------------------------------------------------------
           2. ELEMENTS (looked up once)
        --------------------------------------------------------------------- */
        const tableBody = document.getElementById('goodsTableBody');
        const historyBody = document.getElementById('goodsHistoryBody');
        const searchInput = document.getElementById('goodsSearch');
        const statusFilter = document.getElementById('goodsStatusFilter');
        const sortOrder = document.getElementById('goodsSortOrder');
        const historySort = document.getElementById('goodsHistorySort');

        const detailsModalEl = document.getElementById('goodsDetailsModal');
        const declineModalEl = document.getElementById('declineFeedbackModal');
        const detailsModal = bootstrap.Modal.getOrCreateInstance(detailsModalEl);
        const declineModal = bootstrap.Modal.getOrCreateInstance(declineModalEl);

        const statusSelect = document.getElementById('goodsStatus');
        const modalAlert = document.getElementById('goodsModalAlert');
        const approveRemarksWrap = document.getElementById('approveRemarksWrap');
        const approveRemarks = document.getElementById('approveRemarks');
        const declineReason = document.getElementById('declineReason');
        const declineFeedback = document.getElementById('declineFeedback');
        const declineFeedbackStar = document.getElementById('declineFeedbackStar');


        /* ---------------------------------------------------------------------
           3. SMALL HELPERS
        --------------------------------------------------------------------- */

        // Makes text safe to put inside HTML (prevents broken layout / script injection)
        function escapeHtml(text) {
            return String(text ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        // Turns "2026-09-19" into "Sep 19, 2026" (or "September 19, 2026" if long = true)
        function formatDate(dateString, long = false) {
            if (!dateString) return 'Not Yet Received';
            const date = new Date(dateString);
            if (isNaN(date)) return escapeHtml(dateString);
            return date.toLocaleDateString('en-US', {
                month: long ? 'long' : 'short',
                day: 'numeric',
                year: 'numeric',
                timeZone: 'UTC'
            });
        }

        // Turns an ISO timestamp into "Nov 6, 2026, 3:45 PM" (used by the decision log)
        function formatDateTime(isoString) {
            const date = new Date(isoString);
            if (isNaN(date)) return '';
            return date.toLocaleString('en-US', {
                month: 'short',
                day: 'numeric',
                year: 'numeric',
                hour: 'numeric',
                minute: '2-digit'
            });
        }

        // Today's date as "YYYY-MM-DD" in the admin's local time
        function todayString() {
            const now = new Date();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            return now.getFullYear() + '-' + month + '-' + day;
        }

        // Picks the CSS badge class. Approved reuses your existing green "completed" style.
        function getBadgeClass(status) {
            if (status === 'Approved') return 'completed';
            if (status === 'Declined') return 'declined';
            return 'pending';
        }

        // "Rice, Canned Goods, Noodles"
        function getGoodsText(donation) {
            return (donation.items || []).map(item => item.name).join(', ');
        }

        // "4 items"
        function getQuantityText(donation) {
            const count = (donation.items || []).length;
            return count + (count === 1 ? ' item' : ' items');
        }

        // History table "Reason": the decline reason, or "-" for approved donations
        function getReasonText(donation) {
            return donation.status === 'Declined' ? (donation.decline_reason || '-') : '-';
        }

        // History table "Remarks": decline feedback (declined) or approval remarks (approved)
        function getRemarksText(donation) {
            const text = donation.status === 'Declined' ? donation.decline_feedback : donation.remarks;
            return text || '-';
        }

        // Finds a donation by its id (works even if the id is a number or a string)
        function findDonation(id) {
            return donations.find(donation => String(donation.id) === String(id));
        }

        // Sorts a list by the real donation date. "newest" or "oldest".
        // It sorts a copy, so the original array order is not changed.
        function sortByDate(list, direction) {
            return [...list].sort((a, b) => {
                const diff = new Date(a.donation_date) - new Date(b.donation_date);
                return direction === 'oldest' ? diff : -diff;
            });
        }

        // Shows a Bootstrap alert at the top of the page for a few seconds
        function showAlert(message, type = 'success') {
            const alertBox = document.getElementById('goodsAlert');
            alertBox.className = 'alert alert-' + type;
            alertBox.textContent = message;
            clearTimeout(showAlert.timer);
            showAlert.timer = setTimeout(() => alertBox.classList.add('d-none'), 4000);
        }

        // Builds one "no records" row that spans the whole table
        function emptyRow(columns, message) {
            return '<tr><td colspan="' + columns + '" class="text-center text-muted py-4">' +
                message + '</td></tr>';
        }


        /* ---------------------------------------------------------------------
           4. MAIN TABLE: search + status filter + date sort
        --------------------------------------------------------------------- */

        // Returns only the donations that match the search box and status filter,
        // already sorted by the selected date order.
        function getVisibleDonations() {
            const keyword = searchInput.value.trim().toLowerCase();
            const status = statusFilter.value;

            const matches = donations.filter(donation => {
                // Search donor, email, cause and the type of goods
                const searchable = [
                    donation.donor,
                    donation.email,
                    donation.cause,
                    getGoodsText(donation)
                ].join(' ').toLowerCase();

                const matchesSearch = searchable.includes(keyword);
                const matchesStatus = status === 'all' || donation.status === status;
                return matchesSearch && matchesStatus;
            });

            return sortByDate(matches, sortOrder.value);
        }

        // Redraws the main table body
        function renderTable() {
            // Case 1: the system has no records at all
            if (donations.length === 0) {
                tableBody.innerHTML = emptyRow(8, 'No goods donations available yet.');
                return;
            }

            const visible = getVisibleDonations();

            // Case 2: records exist, but none match the search / filter
            if (visible.length === 0) {
                tableBody.innerHTML = emptyRow(8, 'No matching goods donations found.');
                return;
            }

            // Case 3: draw one row per matching donation
            tableBody.innerHTML = visible.map(donation => `
                <tr>
                    <td><strong>${escapeHtml(donation.donor)}</strong></td>
                    <td>${escapeHtml(donation.email)}</td>
                    <td>${escapeHtml(donation.cause)}</td>
                    <td>${escapeHtml(getGoodsText(donation))}</td>
                    <td>${getQuantityText(donation)}</td>
                    <td>${formatDate(donation.donation_date)}</td>
                    <td>
                        <span class="status ${getBadgeClass(donation.status)}">
                            ${escapeHtml(donation.status)}
                        </span>
                    </td>
                    <td>
                        <button type="button" class="view-btn" data-id="${escapeHtml(donation.id)}">View Details</button>
                    </td>
                </tr>
            `).join('');
        }


        /* ---------------------------------------------------------------------
           5. HISTORY MODAL: only Approved (completed) and Declined donations,
              now with Reason and Remarks columns
        --------------------------------------------------------------------- */
        function renderHistory() {
            const finished = donations.filter(donation => donation.status !== 'Pending');

            if (finished.length === 0) {
                historyBody.innerHTML = emptyRow(9, 'No donation history available yet.');
                return;
            }

            historyBody.innerHTML = sortByDate(finished, historySort.value).map(donation => `
                <tr>
                    <td><strong>${escapeHtml(donation.donor)}</strong></td>
                    <td>${escapeHtml(donation.email)}</td>
                    <td>${escapeHtml(donation.cause)}</td>
                    <td>${escapeHtml(getGoodsText(donation))}</td>
                    <td>${getQuantityText(donation)}</td>
                    <td>${formatDate(donation.donation_date)}</td>
                    <td>
                        <span class="status ${getBadgeClass(donation.status)}">
                            ${escapeHtml(donation.status)}
                        </span>
                    </td>
                    <td>${escapeHtml(getReasonText(donation))}</td>
                    <td>${escapeHtml(getRemarksText(donation))}</td>
                </tr>
            `).join('');
        }


        /* ---------------------------------------------------------------------
           6. SUMMARY CARDS (always calculated from ALL records, not the filter)
        --------------------------------------------------------------------- */
        function updateSummaryCards() {
            // Total = every record
            document.getElementById('totalGoodsCount').textContent = donations.length;

            // Pending = records whose status is Pending
            document.getElementById('pendingGoodsCount').textContent =
                donations.filter(donation => donation.status === 'Pending').length;

            // Types of goods = distinct item names (Rice and rice count as one)
            const types = {};
            donations.forEach(donation => {
                (donation.items || []).forEach(item => {
                    types[item.name.trim().toLowerCase()] = item.name.trim();
                });
            });
            const names = Object.values(types);

            document.getElementById('goodsTypesCount').textContent = names.length;
            document.getElementById('goodsTypesText').textContent =
                names.length ? names.join(', ') : 'No goods recorded yet';
        }

        // Redraws everything that depends on the donation data
        function refreshPage() {
            renderTable();
            renderHistory();
            updateSummaryCards();
        }


        /* ---------------------------------------------------------------------
           7. DECISION LOG
           Every time a status changes, one entry is added to donation.history:
           { from, to, at (ISO time), reason, remarks }
           This is how the system remembers "Approved, then changed back to Pending".
        --------------------------------------------------------------------- */

        // Saves the new status and adds a log entry. `extra` can hold reason / remarks.
        function changeStatus(donation, newStatus, extra = {}) {
            donation.history = donation.history || [];
            donation.history.push({
                from: donation.status,
                to: newStatus,
                at: new Date().toISOString(),
                reason: extra.reason || '',
                remarks: extra.remarks || ''
            });
            donation.status = newStatus;
        }

        // Draws the log inside the details modal (newest first)
        function renderDecisionLog(donation) {
            const section = document.getElementById('decisionLogSection');
            const list = document.getElementById('decisionLogList');
            const entries = donation.history || [];

            list.innerHTML = '';

            if (entries.length === 0) {
                section.classList.add('d-none');
                return;
            }

            [...entries].reverse().forEach(entry => {
                const notes = [];
                if (entry.reason) notes.push('Reason: ' + entry.reason);
                if (entry.remarks) notes.push('Remarks: ' + entry.remarks);

                const row = document.createElement('div');
                row.className = 'detail-item';
                row.innerHTML =
                    '<span>' + escapeHtml(entry.from) + ' → ' + escapeHtml(entry.to) + '</span>' +
                    '<strong>' + escapeHtml(formatDateTime(entry.at)) +
                    (notes.length ?
                        '<small class="d-block fw-normal text-muted">' +
                        notes.map(escapeHtml).join('<br>') + '</small>' : '') +
                    '</strong>';
                list.appendChild(row);
            });

            section.classList.remove('d-none');
        }


        /* ---------------------------------------------------------------------
           8. DETAILS MODAL: opened by the View Details button
        --------------------------------------------------------------------- */

        // Fills one <strong> with text (shows "-" if there is no value)
        function setText(id, value) {
            document.getElementById(id).textContent = value || '-';
        }

        // The remarks box is only needed while "Approved" is selected
        function toggleRemarksBox() {
            approveRemarksWrap.classList.toggle('d-none', statusSelect.value !== 'Approved');
        }

        function openDetails(id) {
            const donation = findDonation(id);
            if (!donation) return;

            currentDonationId = donation.id;

            // Donor information
            setText('detailDonor', donation.donor);
            setText('detailEmail', donation.email);
            setText('detailContact', donation.contact);
            setText('detailDate', formatDate(donation.donation_date, true));

            // Goods information: remove old item rows, then add the new ones
            setText('detailCause', donation.cause);
            document.querySelectorAll('#detailGoodsList .goods-item').forEach(el => el.remove());
            (donation.items || []).forEach(item => {
                const row = document.createElement('div');
                row.className = 'detail-item goods-item';
                row.innerHTML = '<span>' + escapeHtml(item.name) + '</span>' +
                    '<strong>' + escapeHtml(item.quantity) + ' ' + escapeHtml(item.unit || '') + '</strong>';
                document.getElementById('detailGoodsList').appendChild(row);
            });

            // Drop-off information
            setText('detailDropCenter', donation.dropoff_center);
            setText('detailLocation', donation.location);
            setText('detailExpected', formatDate(donation.expected_dropoff, true));
            setText('detailReceived', formatDate(donation.date_received, true));
            setText('detailReference', donation.reference);

            // Map: show only when a location exists
            const mapSection = document.getElementById('goodsMapSection');
            if (donation.location) {
                const query = encodeURIComponent(donation.location);
                document.getElementById('goodsMapFrame').src =
                    'https://www.google.com/maps?q=' + query + '&output=embed';
                document.getElementById('goodsMapLink').href =
                    'https://www.google.com/maps/search/?api=1&query=' + query;
                mapSection.classList.remove('d-none');
            } else {
                mapSection.classList.add('d-none');
            }

            // Decline information: show only for declined donations
            const declineSection = document.getElementById('declineInfoSection');
            if (donation.status === 'Declined') {
                setText('detailDeclineReason', donation.decline_reason);
                setText('detailDeclineFeedback', donation.decline_feedback);
                declineSection.classList.remove('d-none');
            } else {
                declineSection.classList.add('d-none');
            }

            // Approval remarks: show only for approved donations that have remarks
            const approveSection = document.getElementById('approveInfoSection');
            if (donation.status === 'Approved' && donation.remarks) {
                setText('detailApproveRemarks', donation.remarks);
                approveSection.classList.remove('d-none');
            } else {
                approveSection.classList.add('d-none');
            }

            // Decision log (hidden when the donation has never changed status)
            renderDecisionLog(donation);

            // Status dropdown: only Pending and Approved are choices.
            // "Declined" is added only when this donation is already declined, so the
            // dropdown can show its current status.
            const declinedOption = statusSelect.querySelector('option[value="Declined"]');
            if (declinedOption) declinedOption.remove();
            if (donation.status === 'Declined') {
                const opt = document.createElement('option');
                opt.value = 'Declined';
                opt.textContent = 'Declined';
                statusSelect.appendChild(opt);
            }
            statusSelect.value = donation.status;

            // Already declined -> the Decline button is not needed
            document.getElementById('openGoodsDeclineBtn').disabled = donation.status === 'Declined';

            // Empty remarks box and clear any old message
            approveRemarks.value = '';
            toggleRemarksBox();
            modalAlert.classList.add('d-none');

            detailsModal.show();
        }


        /* ---------------------------------------------------------------------
           9. CONFIRM STATUS (details modal)
        --------------------------------------------------------------------- */
        function confirmStatus() {
            const donation = findDonation(currentDonationId);
            if (!donation) return;

            const newStatus = statusSelect.value;

            // Nothing changed -> do not update anything
            if (newStatus === donation.status) {
                modalAlert.textContent = 'The status has not changed. Please select a different status.';
                modalAlert.classList.remove('d-none');
                return;
            }

            // Approved: save the optional remarks and set Date Received (if not set yet)
            if (newStatus === 'Approved') {
                const remarks = approveRemarks.value.trim();
                changeStatus(donation, 'Approved', {
                    remarks
                });
                donation.remarks = remarks;
                donation.date_received = donation.date_received || todayString();
            }

            // Pending (changed back): clear the old decision details and the received date.
            // The decision log still remembers what happened before.
            if (newStatus === 'Pending') {
                changeStatus(donation, 'Pending');
                donation.remarks = '';
                donation.date_received = null;
            }

            donation.decline_reason = '';
            donation.decline_feedback = '';

            detailsModal.hide();
            refreshPage();
            showAlert('Donation from ' + donation.donor + ' was updated to ' + newStatus + '.');
        }

        // Closes the details modal first, THEN opens the decline modal.
        // Waiting for "hidden.bs.modal" avoids two Bootstrap modals fighting each other.
        function openDeclineModal() {
            detailsModalEl.addEventListener('hidden.bs.modal', () => {
                declineModal.show();
            }, {
                once: true
            });
            detailsModal.hide();
        }


        /* ---------------------------------------------------------------------
           10. CONFIRM DECLINE (decline modal) with validation
        --------------------------------------------------------------------- */
        function confirmDecline() {
            const donation = findDonation(currentDonationId);
            if (!donation) return;

            const reason = declineReason.value;
            const feedback = declineFeedback.value.trim();

            // A reason is required
            if (!reason) {
                declineReason.classList.add('is-invalid'); // shows the red validation message
                return;
            }

            // "Other" also needs an explanation
            if (reason === 'Other' && !feedback) {
                declineFeedback.classList.add('is-invalid');
                declineFeedback.focus();
                return;
            }

            // Save the status, reason and feedback on the correct record
            changeStatus(donation, 'Declined', {
                reason,
                remarks: feedback
            });
            donation.decline_reason = reason;
            donation.decline_feedback = feedback;
            donation.remarks = '';

            declineModal.hide();
            refreshPage();
            showAlert('Donation from ' + donation.donor + ' was declined.');
        }


        /* ---------------------------------------------------------------------
           11. EXPORT CSV
           Downloads the donations currently shown in the table (so the search,
           status filter and date sort are respected). Everything happens in the
           browser; nothing is sent to the server.
        --------------------------------------------------------------------- */

        // Wraps one value so commas, quotes and line breaks do not break the CSV.
        // A leading = + - @ is neutralized so Excel never runs it as a formula.
        function csvCell(value) {
            let text = String(value ?? '');
            if (/^[=+\-@]/.test(text)) text = "'" + text;
            return '"' + text.replace(/"/g, '""') + '"';
        }

        function exportCsv() {
            const list = getVisibleDonations();

            // Nothing to export
            if (list.length === 0) {
                showAlert('There are no goods donations to export.', 'warning');
                return;
            }

            const header = [
                'Donor', 'Email', 'Contact Number', 'Cause', 'Goods', 'Quantities',
                'Donation Date', 'Status', 'Drop-Off Center', 'Location',
                'Expected Drop-Off', 'Date Received', 'Reference Number',
                'Decline Reason', 'Decline Feedback', 'Approval Remarks'
            ];

            const rows = list.map(d => [
                d.donor,
                d.email,
                d.contact,
                d.cause,
                getGoodsText(d),
                (d.items || []).map(i => i.name + ': ' + i.quantity + ' ' + (i.unit || '')).join('; '),
                d.donation_date,
                d.status,
                d.dropoff_center,
                d.location,
                d.expected_dropoff,
                d.date_received,
                d.reference,
                d.decline_reason,
                d.decline_feedback,
                d.remarks
            ]);

            // Join everything into CSV text. The \uFEFF at the start helps Excel read it correctly.
            const csv = '\uFEFF' + [header, ...rows]
                .map(row => row.map(csvCell).join(','))
                .join('\r\n');

            // Create a temporary download link and click it
            const link = document.createElement('a');
            link.href = URL.createObjectURL(new Blob([csv], {
                type: 'text/csv;charset=utf-8;'
            }));
            link.download = 'goods-donations-' + todayString() + '.csv';
            document.body.appendChild(link);
            link.click();
            link.remove();
            URL.revokeObjectURL(link.href);

            showAlert('Exported ' + list.length + ' goods donation(s) to CSV.');
        }


        /* ---------------------------------------------------------------------
           12. EVENT LISTENERS
        --------------------------------------------------------------------- */

        // Search while typing, filter and sort
        searchInput.addEventListener('input', renderTable);
        statusFilter.addEventListener('change', renderTable);
        sortOrder.addEventListener('change', renderTable);

        // History sorting
        historySort.addEventListener('change', renderHistory);

        // Export CSV
        document.getElementById('exportCsvBtn').addEventListener('click', exportCsv);

        // One listener for every View Details button (works for rows added later too)
        tableBody.addEventListener('click', event => {
            const button = event.target.closest('.view-btn');
            if (button) openDetails(button.dataset.id);
        });

        // Confirm buttons
        document.getElementById('confirmGoodsStatusBtn').addEventListener('click', confirmStatus);
        document.getElementById('confirmDeclineBtn').addEventListener('click', confirmDecline);

        // "Decline Donation" button in the details modal opens the decline popup
        document.getElementById('openGoodsDeclineBtn').addEventListener('click', () => {
            const donation = findDonation(currentDonationId);
            if (!donation || donation.status === 'Declined') return;
            openDeclineModal();
        });

        // When the admin picks another status: hide the "not changed" message
        // and show the remarks box only for "Approved"
        statusSelect.addEventListener('change', () => {
            modalAlert.classList.add('d-none');
            toggleRemarksBox();
        });

        // Hide the red validation message once a reason is chosen, and mark the
        // feedback box as required when the reason is "Other"
        declineReason.addEventListener('change', () => {
            declineReason.classList.remove('is-invalid');
            declineFeedbackStar.classList.toggle('d-none', declineReason.value !== 'Other');
            if (declineReason.value !== 'Other') declineFeedback.classList.remove('is-invalid');
        });

        // Hide the feedback validation message as soon as the admin types
        declineFeedback.addEventListener('input', () => declineFeedback.classList.remove('is-invalid'));

        // Start every decline modal fresh (empty reason, empty feedback, no red borders)
        declineModalEl.addEventListener('show.bs.modal', () => {
            declineReason.value = '';
            declineFeedback.value = '';
            declineReason.classList.remove('is-invalid');
            declineFeedback.classList.remove('is-invalid');
            declineFeedbackStar.classList.add('d-none');
        });

        // First draw when the page loads
        refreshPage();
    </script>

</body>

</html>