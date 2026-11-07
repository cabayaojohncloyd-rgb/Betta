<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <title>BETTA | Admin Dashboard</title>
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

        <!-- MAIN CONTENT -->
        <main class="main-content distribution-monitoring-content">

            <div class="container-fluid py-4">

                <!-- HEADER -->
                <div class="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
                    <div>
                        <h4 class="fw-bold mb-1">Distribution Monitoring</h4>
                        <p class="text-body-secondary mb-0">
                            Track food distributions and review the barangays that have received assistance.
                        </p>
                    </div>
                    <button type="button" class="btn btn-primary" id="newDistributionBtn"
                        data-bs-toggle="modal" data-bs-target="#newDistributionModal">
                        <i class="bi bi-plus-lg me-1"></i>New Distribution
                    </button>
                </div>


                <!-- SUMMARY CARDS -->
                <div class="row row-cols-2 row-cols-xl-4 g-3 mb-4">

                    <!-- TOTAL BARANGAYS -->
                    <div class="col">
                        <div class="card monitoring-stat h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <p class="text-body-secondary mb-2">Total Barangays</p>
                                        <h3 class="fw-bold mb-1" id="statTotal">40</h3>
                                        <small class="text-muted">Panabo City</small>
                                    </div>
                                    <div class="monitoring-icon icon-blue">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BARANGAYS SERVED -->
                    <div class="col">
                        <div class="card monitoring-stat h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <p class="text-body-secondary mb-2">Barangays Served</p>
                                        <h3 class="fw-bold mb-1" id="statServed">0</h3>
                                        <small class="text-muted">Received assistance</small>
                                    </div>
                                    <div class="monitoring-icon icon-green">
                                        <i class="bi bi-check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ONGOING DISTRIBUTIONS -->
                    <div class="col">
                        <div class="card monitoring-stat h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <p class="text-body-secondary mb-2">Ongoing</p>
                                        <h3 class="fw-bold mb-1" id="statOngoing">6</h3>
                                        <small class="text-muted">Active distributions</small>
                                    </div>
                                    <div class="monitoring-icon icon-orange">
                                        <i class="bi bi-arrow-repeat"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COMPLETED DISTRIBUTIONS -->
                    <div class="col">
                        <div class="card monitoring-stat h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <p class="text-body-secondary mb-2">Completed</p>
                                        <h3 class="fw-bold mb-1" id="statCompleted">2</h3>
                                        <small class="text-muted">Finished distributions</small>
                                    </div>
                                    <div class="monitoring-icon icon-green">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- PAGINATION CONTROLS (old CSS-radio pagination, no longer used; JS handles paging.
                     Kept only because sdg2.css may still depend on them. Remove together with the old CSS rules.) -->
                <input type="radio" name="barangayPage" id="barangayPage1" checked hidden>
                <input type="radio" name="barangayPage" id="barangayPage2" hidden>
                <input type="radio" name="barangayPage" id="barangayPage3" hidden>
                <input type="radio" name="barangayPage" id="barangayPage4" hidden>

                <!-- BARANGAY COVERAGE TABLE -->
                <div class="card monitoring-card mb-4">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                            <div>
                                <h5 class="fw-bold mb-1">Barangay Distributions</h5>
                                <p class="text-body-secondary small mb-0">
                                    Barangays of Panabo City with a recorded distribution. Only past distributions count as served.
                                </p>
                            </div>

                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2" id="coverageBadge">
                                0 of 40 Served
                            </span>
                        </div>

                        <!-- COVERAGE PROGRESS -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold small">Overall Barangay Coverage</span>
                                <span class="fw-semibold small" id="coveragePercent">0%</span>
                            </div>

                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-success"
                                    id="coverageBar"
                                    role="progressbar"
                                    style="width: 0%;"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>

                            <small class="text-muted d-block mt-2" id="coverageText">
                                0 barangays have received assistance.
                            </small>
                        </div>

                        <!-- SEARCH -->
                        <div class="row g-2 mb-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-search"></i>
                                    </span>

                                    <input type="text"
                                        id="barangaySearch"
                                        class="form-control"
                                        placeholder="Search barangay"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <!-- TABLE (barangays with a recorded distribution are listed).
                             The dates below are placeholders: JS rewrites them from the records. -->
                        <div class="table-responsive">

                            <table class="table monitoring-table align-middle barangay-pagination-table">

                                <thead>
                                    <tr>
                                        <th>Barangay</th>
                                        <th>Distribution Type</th>
                                        <th>Last Distribution</th>
                                        <th>Coverage Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">Tagpore</td>
                                        <td>Food Packs</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">Buenavista</td>
                                        <td>Prepared Meals</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">Maduao</td>
                                        <td>Food Packs</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">Nanyo</td>
                                        <td>Prepared Meals</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">Katualan</td>
                                        <td>Food Packs</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                    <tr class="barangay-page page-1">
                                        <td class="fw-semibold">New Malaga</td>
                                        <td>Prepared Meals</td>
                                        <td>Jan 1, 2027</td>
                                        <td><span class="badge bg-info-subtle text-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#distributionDetailsModal">View Details</button>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <!-- PAGINATION -->
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3">

                            <small class="text-muted" id="paginationInfo">
                                Total: 6 barangays
                            </small>

                            <div class="barangay-pagination" id="paginationControls"></div>

                        </div>

                    </div>

                </div>

                <!-- DISTRIBUTION ALERT -->
                <div class="alert monitoring-alert d-flex align-items-start gap-3 mb-4">

                    <i class="bi bi-exclamation-triangle-fill fs-5"></i>

                    <div>

                        <h6 class="fw-bold mb-1">
                            Prevent Duplicate Distributions
                        </h6>

                        <p class="mb-0 small">
                            Review each barangay's distribution history, dates, and
                            quantities to avoid unintentionally providing duplicate assistance.
                        </p>

                    </div>

                </div>


                <!-- UPDATE AND PHOTOS -->
                <div class="row g-3">

                    <!-- UPDATE DISTRIBUTION -->
                    <div class="col-lg-6">

                        <div class="card monitoring-card h-100">

                            <div class="card-body">

                                <h5 class="fw-bold mb-1">Update Distribution</h5>

                                <p class="text-body-secondary small mb-3">
                                    Update distribution progress and results.
                                </p>

                                <form id="updateForm" novalidate>

                                    <div class="mb-3">
                                        <label for="upBarangay" class="form-label">Select Barangay</label>
                                        <select class="form-select" id="upBarangay" name="barangay" data-barangay-select required>
                                            <option value="" selected disabled>Select barangay</option>
                                        </select>
                                    </div>

                                    <div class="row g-3 mb-3">

                                        <div class="col-md-6">
                                            <label for="upStatus" class="form-label">Distribution Status</label>
                                            <select class="form-select" id="upStatus">
                                                <option>Planned</option>
                                                <option selected>Ongoing</option>
                                                <option>Completed</option>
                                                <option>Failed</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="upQty" class="form-label">Quantity Distributed</label>
                                            <input type="number" class="form-control" id="upQty" placeholder="Enter quantity" min="0">
                                        </div>

                                    </div>

                                    <p class="small text-muted mb-3" id="upProgressText"></p>

                                    <div class="mb-3">
                                        <label for="upCoords" class="form-label">Map coordinates <span class="text-muted small">(optional, latitude, longitude)</span></label>
                                        <input type="text" class="form-control" id="upCoords" placeholder="e.g. 7.3087, 125.6841" autocomplete="off">
                                    </div>

                                    <label for="distributionPhotos" class="upload-box mb-3">
                                        <i class="bi bi-upload fs-5"></i>
                                        <span>Upload distribution photos</span>
                                        <input type="file" id="distributionPhotos" class="visually-hidden" accept="image/jpeg,image/png,image/webp" multiple>
                                    </label>

                                    <div id="upPhotoPreview"></div>

                                    <div class="mb-3">
                                        <label for="upPhotoCategory" class="form-label">Photo category</label>
                                        <select class="form-select" id="upPhotoCategory">
                                            <option>Food Packs</option>
                                            <option>Prepared Meals</option>
                                            <option>Volunteers</option>
                                        </select>
                                    </div>

                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" role="switch" id="showInGallery">
                                        <label class="form-check-label" for="showInGallery">Show in the Our impact gallery</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="upRemarks" class="form-label">Remarks</label>
                                        <textarea class="form-control" id="upRemarks" rows="3"
                                            placeholder="Enter updates, observations, or reasons for failure"></textarea>
                                    </div>

                                    <div class="text-end">
                                        <button type="button" class="btn btn-primary" id="saveUpdateBtn">
                                            Save Update
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>


                    <!-- DISTRIBUTION PHOTOS -->
                    <div class="col-lg-6">

                        <div class="card monitoring-card h-100">

                            <div class="card-body">

                                <h5 class="fw-bold mb-1">Distribution Documentation</h5>

                                <p class="text-body-secondary small mb-3">
                                    Upload photos as evidence of distribution activities.
                                </p>

                                <div class="mb-3">
                                    <label for="docBarangay" class="form-label">Select Barangay</label>
                                    <select class="form-select" id="docBarangay" name="barangay" data-barangay-select required>
                                        <option value="" selected disabled>Select barangay</option>
                                    </select>
                                </div>

                                <label for="projectPhotos" class="monitoring-upload mb-3">

                                    <i class="bi bi-cloud-arrow-up fs-3"></i>

                                    <span class="fw-semibold">Click to upload distribution photos</span>

                                    <small class="text-muted">JPG, PNG, or WEBP</small>

                                    <input type="file" id="projectPhotos" class="visually-hidden" accept="image/jpeg,image/png,image/webp" multiple>

                                </label>

                                <div id="docPhotoPreview"></div>

                                <div class="mb-3">
                                    <label for="docPhotoCategory" class="form-label">Photo category</label>
                                    <select class="form-select" id="docPhotoCategory">
                                        <option>Food Packs</option>
                                        <option>Prepared Meals</option>
                                        <option>Volunteers</option>
                                    </select>
                                </div>

                                <div class="form-check form-switch d-flex justify-content-between align-items-center ps-0">
                                    <label class="form-check-label" for="showOnImpact">
                                        Show photos on Our Impact page
                                    </label>
                                    <input class="form-check-input ms-0" type="checkbox" id="showOnImpact" checked>
                                </div>

                                <div class="text-end mt-3">
                                    <button type="button" class="btn btn-primary" id="savePhotosBtn">
                                        Save Photos
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- DISTRIBUTION DETAILS MODAL (with Distribution History) -->
            <div class="modal fade"
                id="distributionDetailsModal"
                tabindex="-1"
                aria-labelledby="distributionDetailsModalLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="distributionDetailsModalLabel">Distribution Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <h6 class="fw-bold mb-3" id="detailBarangay">Barangay</h6>

                            <div class="distribution-detail-row">
                                <span>Distribution Type</span>
                                <strong id="detailType">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Distribution Date</span>
                                <strong id="detailDate">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Quantity Distributed</span>
                                <strong id="detailQty">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Target</span>
                                <strong id="detailTarget">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Progress</span>
                                <strong id="detailProgress">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Status</span>
                                <span class="badge bg-primary-subtle text-primary" id="detailStatus">—</span>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Records in this barangay</span>
                                <strong id="detailCount">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Program</span>
                                <strong id="detailProgram">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Map location</span>
                                <strong id="detailLocation">—</strong>
                            </div>

                            <div class="distribution-detail-row">
                                <span>Photos saved</span>
                                <strong id="detailPhotos">—</strong>
                            </div>

                            <!-- DISTRIBUTION HISTORY -->
                            <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                <h6 class="fw-bold mb-0">
                                    <i class="bi bi-clock-history me-1"></i>Distribution History
                                </h6>
                                <span class="badge bg-primary-subtle text-primary rounded-pill" id="historyCount">0 records</span>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-sm align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th class="text-end">Distributed</th>
                                            <th class="text-end">Target</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyBody"></tbody>
                                </table>
                            </div>

                            <div class="alert alert-info small mt-3 mb-0">
                                Review previous distribution history before
                                providing more assistance to this barangay.
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- NEW DISTRIBUTION MODAL -->
            <div class="modal fade"
                id="newDistributionModal"
                tabindex="-1"
                aria-labelledby="newDistributionModalLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="newDistributionModalLabel">New Distribution</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">

                            <form id="newForm" novalidate>

                                <div class="mb-3">
                                    <label for="ndBarangay" class="form-label">Barangay</label>
                                    <select class="form-select" id="ndBarangay" required>
                                        <option value="" selected disabled>Select barangay</option>
                                    </select>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="ndType" class="form-label">Distribution Type</label>
                                        <select class="form-select" id="ndType">
                                            <option>Food Packs</option>
                                            <option>Prepared Meals</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ndTarget" class="form-label">Target Quantity</label>
                                        <input type="number" class="form-control" id="ndTarget" placeholder="e.g. 100" min="1">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="ndTitle" class="form-label">Program Title <span class="text-muted small">(optional)</span></label>
                                    <input type="text" class="form-control" id="ndTitle" maxlength="80" autocomplete="off">
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="ndDate" class="form-label">Distribution Date</label>
                                        <input type="date" class="form-control" id="ndDate">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ndStatus" class="form-label">Status</label>
                                        <select class="form-select" id="ndStatus">
                                            <option selected>Planned</option>
                                            <option>Ongoing</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-1">
                                    <label for="ndCoords" class="form-label">Map coordinates <span class="text-muted small">(optional)</span></label>
                                    <input type="text" class="form-control" id="ndCoords" placeholder="e.g. 7.3087, 125.6841" autocomplete="off">
                                </div>
                                <small class="text-muted">Latitude first, then longitude. In Google Maps, right-click a spot and click the numbers to copy them. They place the pin on the public map.</small>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="saveNewBtn">Add Distribution</button>
                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3" id="toastContainer" style="z-index: 2000;"></div>


    <script>
        /* =====================================================================
           DISTRIBUTION MONITORING - VANILLA JAVASCRIPT
           Everything is wrapped in one function so it does not clash with other scripts.
           ===================================================================== */
        (function() {
            'use strict';

            /* ---------------------------------------------------------------
               1. SETTINGS AND DATA
               --------------------------------------------------------------- */
            const TOTAL_BARANGAYS = 40; // all barangays of Panabo City (only served ones are listed in the table)
            const PER_PAGE = 10; // barangays per page
            const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5 MB per image
            const MAX_FILES = 10; // max images per upload box
            const ALLOWED_TYPES = ['image/jpeg', 'image/png', 'image/webp'];

            // The 40 barangays of Panabo City (check the spelling against your official list)
            const BARANGAY_LIST = [
                'A. O. Floirendo', 'Buenavista', 'Cacao', 'Cagangohan', 'Consolacion', 'Dapco', 'Datu Abdul Dadia',
                'Gredu (Poblacion)', 'J.P. Laurel', 'Kasilak', 'Katipunan', 'Katualan', 'Kauswagan', 'Kiotoy',
                'Little Panay', 'Lower Panaga (Roxas)', 'Mabunao', 'Maduao', 'Malativas', 'Manay', 'Nanyo',
                'New Malaga (Dalisay)', 'New Malitbog', 'New Pandan (Poblacion)', 'New Visayas', 'Quezon', 'Salvacion',
                'San Francisco (Poblacion)', 'San Nicolas', 'San Pedro', 'San Roque', 'San Vicente', 'Santa Cruz',
                'Santo Niño (Poblacion)', 'Sindaton', 'Southern Davao', 'Tagpore', 'Tibungol', 'Upper Licanan', 'Waterfall'
            ];

            // Rough box around Panabo City, used to catch swapped or mistyped coordinates
            const PANABO_BOUNDS = {
                minLat: 7.10,
                maxLat: 7.60,
                minLng: 125.45,
                maxLng: 126.00
            };

            // CSS classes for each distribution status badge
            const STATUS_CLASSES = {
                Planned: 'bg-secondary-subtle text-secondary',
                Ongoing: 'bg-primary-subtle text-primary',
                Completed: 'bg-success-subtle text-success',
                Failed: 'bg-danger-subtle text-danger'
            };

            // The current search / page the admin is looking at
            const state = {
                search: '',
                page: 1
            };

            // All distribution records live here (in memory only - they reset on page refresh)
            const distributions = [];
            let nextId = 1;

            // Photos saved per barangay (in memory only)
            const savedPhotos = {};

            // Map coordinates per barangay: { 'Tagpore': { lat: 7.3, lng: 125.6 } } (in memory only)
            const locations = {};

            // Rows that match the current search (used by pagination)
            let filteredRows = [];

            // Short helper to find elements by id
            const $ = (id) => document.getElementById(id);

            // Table body, all barangay rows, and a name -> row lookup
            const tbody = document.querySelector('.barangay-pagination-table tbody');
            const allRows = Array.from(tbody.querySelectorAll('tr.barangay-page'));
            const rowByName = {};

            /* Sample records. The target / distributed numbers are SAMPLE values - replace them with your real data.
               Current records are dated Jan 1, 2027 (still in the future), so they show as "Scheduled", not "Served".
               The last two entries are genuinely OLDER records (Oct 1) so they no longer
               override the current Ongoing records in getLatest(). */
            const seedData = [{
                    barangay: 'Tagpore',
                    type: 'Food Packs',
                    date: '2027-01-01',
                    target: 100,
                    distributed: 80,
                    status: 'Ongoing'
                },
                {
                    barangay: 'Buenavista',
                    type: 'Prepared Meals',
                    date: '2027-01-01',
                    target: 150,
                    distributed: 90,
                    status: 'Ongoing'
                },
                {
                    barangay: 'Maduao',
                    type: 'Food Packs',
                    date: '2027-01-01',
                    target: 200,
                    distributed: 120,
                    status: 'Ongoing'
                },
                {
                    barangay: 'Nanyo',
                    type: 'Prepared Meals',
                    date: '2027-01-01',
                    target: 120,
                    distributed: 60,
                    status: 'Ongoing'
                },
                {
                    barangay: 'Katualan',
                    type: 'Food Packs',
                    date: '2027-01-01',
                    target: 100,
                    distributed: 50,
                    status: 'Ongoing'
                },
                {
                    barangay: 'New Malaga',
                    type: 'Prepared Meals',
                    date: '2027-01-01',
                    target: 80,
                    distributed: 40,
                    status: 'Ongoing'
                },
                {
                    barangay: 'Tagpore',
                    type: 'Prepared Meals',
                    date: '2026-10-01',
                    target: 90,
                    distributed: 90,
                    status: 'Completed'
                },
                {
                    barangay: 'Maduao',
                    type: 'Food Packs',
                    date: '2026-10-01',
                    target: 150,
                    distributed: 140,
                    status: 'Completed'
                }
            ];

            /* ---------------------------------------------------------------
               2. SMALL HELPER FUNCTIONS
               --------------------------------------------------------------- */

            // Create an element with an optional class and text (safe: uses textContent)
            function el(tag, className, text) {
                const node = document.createElement(tag);
                if (className) node.className = className;
                if (text !== undefined) node.textContent = text;
                return node;
            }

            // Turn "2026-10-10" into "Oct 10, 2026" (no timezone problems)
            function formatDate(iso) {
                const parts = iso.split('-').map(Number);
                return new Date(parts[0], parts[1] - 1, parts[2])
                    .toLocaleDateString('en-US', {
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
            }

            // Today as "YYYY-MM-DD" in local time (same format as the record dates)
            function todayISO() {
                const t = new Date();
                return t.getFullYear() + '-' +
                    String(t.getMonth() + 1).padStart(2, '0') + '-' +
                    String(t.getDate()).padStart(2, '0');
            }

            // Progress % = distributed / target, limited to 0-100
            function calcProgress(distributed, target) {
                if (!target || target <= 0) return 0;
                return Math.min(100, Math.round((distributed / target) * 100));
            }

            // Unit label for the quantity ("packs" for Food Packs, "meals" for Prepared Meals)
            function unitLabel(type) {
                return type === 'Food Packs' ? 'packs' : 'meals';
            }

            // Read "7.3087, 125.6841" -> { lat, lng }, or { error } when it is not valid
            function parseCoords(text) {
                const parts = text.trim().split(/[,\s]+/).filter(Boolean);
                if (parts.length !== 2) return {
                    error: 'Enter latitude and longitude, e.g. 7.3087, 125.6841.'
                };
                const lat = Number(parts[0]);
                const lng = Number(parts[1]);
                if (!Number.isFinite(lat) || !Number.isFinite(lng)) return {
                    error: 'Latitude and longitude must be numbers.'
                };
                if (lat < PANABO_BOUNDS.minLat || lat > PANABO_BOUNDS.maxLat ||
                    lng < PANABO_BOUNDS.minLng || lng > PANABO_BOUNDS.maxLng) return {
                    error: 'These coordinates are outside Panabo City. Latitude goes first, then longitude.'
                };
                return {
                    lat: lat,
                    lng: lng
                };
            }

            // { lat, lng } -> "7.30870, 125.68410"
            function formatCoords(c) {
                return c.lat.toFixed(5) + ', ' + c.lng.toFixed(5);
            }

            // Default program title, same wording as the public page
            function defaultTitle(name, type) {
                return (type === 'Food Packs' ? 'Food Packs for ' : 'Hot Meals for ') + name + ' Families';
            }

            // A record's program title (falls back to the default one)
            function getTitle(d) {
                return d.title || defaultTitle(d.barangay, d.type);
            }

            // Turn a file size in bytes into "350 KB" / "1.2 MB"
            function formatSize(bytes) {
                return bytes < 1024 * 1024 ?
                    Math.round(bytes / 1024) + ' KB' :
                    (bytes / (1024 * 1024)).toFixed(1) + ' MB';
            }

            // Get every distribution record of one barangay, newest first (latest date, then newest id)
            function getBarangayRecords(name) {
                return distributions
                    .filter(function(d) {
                        return d.barangay === name;
                    })
                    .sort(function(a, b) {
                        if (a.date !== b.date) return a.date < b.date ? 1 : -1;
                        return b.id - a.id;
                    });
            }

            // Get the most recent distribution of a barangay
            function getLatest(name) {
                const records = getBarangayRecords(name);
                return records.length ? records[0] : null;
            }

            // Coverage status comes from the LATEST record of the barangay:
            //  - dated after today                      -> "Scheduled" (not served yet)
            //  - dated today or earlier + Ongoing/Completed -> "Served"
            //  - otherwise the record's own status (Planned / Failed)
            function getCoverage(name) {
                const latest = getLatest(name);
                if (!latest) return {
                    label: 'Not served',
                    cls: 'bg-secondary-subtle text-secondary',
                    served: false
                };
                if (latest.date > todayISO()) return {
                    label: 'Scheduled',
                    cls: 'bg-info-subtle text-info',
                    served: false
                };
                if (latest.status === 'Ongoing' || latest.status === 'Completed') return {
                    label: 'Served',
                    cls: 'bg-success-subtle text-success',
                    served: true
                };
                return {
                    label: latest.status,
                    cls: STATUS_CLASSES[latest.status],
                    served: false
                };
            }

            // A barangay is "Served" only when its latest distribution has actually happened
            function isServed(name) {
                return getCoverage(name).served;
            }

            /* ---------------------------------------------------------------
               3. TOAST NOTIFICATIONS
               --------------------------------------------------------------- */

            // Show a Bootstrap toast. type = success | danger | warning | info
            function showToast(message, type) {
                type = type || 'success';
                const toast = el('div', 'toast align-items-center border-0 text-bg-' + type);
                toast.setAttribute('role', 'alert');

                const flex = el('div', 'd-flex');
                flex.appendChild(el('div', 'toast-body', message));

                const closeBtn = el('button', 'btn-close me-2 m-auto' + (type === 'warning' ? '' : ' btn-close-white'));
                closeBtn.type = 'button';
                closeBtn.setAttribute('data-bs-dismiss', 'toast');
                closeBtn.setAttribute('aria-label', 'Close');
                flex.appendChild(closeBtn);

                toast.appendChild(flex);
                $('toastContainer').appendChild(toast);

                toast.addEventListener('hidden.bs.toast', function() {
                    toast.remove();
                });
                new bootstrap.Toast(toast, {
                    delay: 4000
                }).show();
            }

            /* ---------------------------------------------------------------
               4. FORM VALIDATION HELPERS
               --------------------------------------------------------------- */

            // Mark a field as invalid and show a red message under it
            function setError(field, message) {
                field.classList.add('is-invalid');
                let feedback = field.nextElementSibling;
                if (!feedback || !feedback.classList.contains('invalid-feedback')) {
                    feedback = el('div', 'invalid-feedback');
                    field.insertAdjacentElement('afterend', feedback);
                }
                feedback.textContent = message;
            }

            // Remove all red error styles and messages inside a container
            function clearErrors(container) {
                container.querySelectorAll('.is-invalid').forEach(function(f) {
                    f.classList.remove('is-invalid');
                });
                container.querySelectorAll('.invalid-feedback').forEach(function(f) {
                    f.remove();
                });
            }

            // Remove the red error as soon as the user edits that field
            function clearErrorOnEdit(form) {
                ['input', 'change'].forEach(function(evt) {
                    form.addEventListener(evt, function(e) {
                        if (e.target.classList) e.target.classList.remove('is-invalid');
                    });
                });
            }

            /* ---------------------------------------------------------------
               5. TABLE ROWS (one row per served barangay)
               --------------------------------------------------------------- */

            // Rebuild one table row from the distribution records
            function updateRow(row) {
                const name = row.dataset.name;
                const latest = getLatest(name);
                const cells = row.children;
                const served = isServed(name);

                if (latest) {
                    cells[1].textContent = latest.type;
                    cells[2].textContent = formatDate(latest.date);
                }

                // Coverage Status badge follows the latest record (Served / Scheduled / Planned / Failed)
                const cov = getCoverage(name);
                cells[3].replaceChildren(el('span', 'badge ' + cov.cls, cov.label));

                // data-status is used by the summary cards; rows are listed whenever a record exists
                row.dataset.status = served ? 'served' : 'unserved';
            }

            // Create a table row for a barangay that does not have one yet (first record added from "New Distribution")
            function createRow(name) {
                const tr = el('tr', 'barangay-page page-1');
                tr.dataset.name = name;
                tr.appendChild(el('td', 'fw-semibold', name));
                tr.appendChild(document.createElement('td')); // type
                tr.appendChild(document.createElement('td')); // last distribution
                tr.appendChild(document.createElement('td')); // coverage status

                const actionCell = document.createElement('td');
                const btn = el('button', 'btn btn-sm btn-outline-primary', 'View Details');
                btn.type = 'button';
                btn.setAttribute('data-bs-toggle', 'modal');
                btn.setAttribute('data-bs-target', '#distributionDetailsModal');
                actionCell.appendChild(btn);
                tr.appendChild(actionCell);

                tbody.insertBefore(tr, $('noResultsRow'));
                allRows.push(tr);
                rowByName[name] = tr;
                return tr;
            }

            // Fill the barangay dropdowns (only barangays that have distribution records).
            // Runs at start and again whenever a barangay gets its first record.
            function refreshBarangaySelects() {
                const names = allRows.map(function(r) {
                        return r.dataset.name;
                    })
                    .filter(function(name) {
                        return getLatest(name) !== null;
                    })
                    .sort(function(a, b) {
                        return a.localeCompare(b);
                    });

                document.querySelectorAll('select[data-barangay-select]').forEach(function(select) {
                    const current = select.value;
                    while (select.options.length > 1) select.remove(1); // keep "Select barangay"
                    names.forEach(function(name) {
                        const option = document.createElement('option');
                        option.value = name;
                        option.textContent = name;
                        select.appendChild(option);
                    });
                    select.value = current; // keep the admin's selection
                });
            }

            /* ---------------------------------------------------------------
               6. SEARCH + PAGINATION
               --------------------------------------------------------------- */

            // Show or hide a table row (!important so it beats the old CSS pagination rules)
            function setRowVisible(row, visible) {
                row.style.setProperty('display', visible ? 'table-row' : 'none', 'important');
            }

            // Main function: keep served rows that match the search, cut into pages, show the current page
            // Pass true to jump back to page 1 (used when the search changes)
            function applyFilters(resetPage) {
                if (resetPage) state.page = 1;

                // 1) Keep only served barangays that match the search text
                filteredRows = allRows.filter(function(row) {
                    return getLatest(row.dataset.name) !== null &&
                        row.dataset.name.toLowerCase().indexOf(state.search) !== -1;
                });

                // 2) Work out how many pages there are and keep the current page valid
                const totalPages = Math.max(1, Math.ceil(filteredRows.length / PER_PAGE));
                if (state.page > totalPages) state.page = totalPages;

                // 3) Show only the rows that belong to the current page
                const start = (state.page - 1) * PER_PAGE;
                const pageRows = filteredRows.slice(start, start + PER_PAGE);
                allRows.forEach(function(row) {
                    setRowVisible(row, pageRows.indexOf(row) !== -1);
                });

                // 4) "No results" message
                const listedCount = allRows.filter(function(r) {
                    return getLatest(r.dataset.name) !== null;
                }).length;
                const noRow = $('noResultsRow');
                noRow.hidden = filteredRows.length > 0;
                noRow.firstChild.textContent = state.search ?
                    'No barangays found matching "' + $('barangaySearch').value.trim() + '".' :
                    'No distributions recorded yet.';

                // 5) Footer text and page buttons
                $('paginationInfo').textContent = filteredRows.length === 0 ?
                    'No results (Total: ' + listedCount + ' barangays)' :
                    'Showing ' + (start + 1) + '–' + (start + pageRows.length) + ' of ' + filteredRows.length +
                    ' (Total: ' + listedCount + ' barangays)';

                renderPagination(totalPages);
            }

            // Draw the page number buttons and highlight the active one
            // FIX: real <button>s (keyboard accessible) instead of <label>s
            function renderPagination(totalPages) {
                const box = $('paginationControls');
                box.replaceChildren();
                if (filteredRows.length === 0 || totalPages < 2) return;

                for (let p = 1; p <= totalPages; p++) {
                    const btn = el('button', 'page-btn', String(p));
                    btn.type = 'button';
                    btn.setAttribute('aria-label', 'Page ' + p);
                    if (p === state.page) {
                        btn.classList.add('active');
                        btn.setAttribute('aria-current', 'page');
                        // inline highlight so the active page is always visible
                        btn.style.backgroundColor = '#0d6efd';
                        btn.style.borderColor = '#0d6efd';
                        btn.style.color = '#fff';
                    }
                    btn.addEventListener('click', function() {
                        state.page = p;
                        applyFilters(false);
                    });
                    box.appendChild(btn);
                }
            }

            /* ---------------------------------------------------------------
               7. DYNAMIC SUMMARY CARDS + COVERAGE BAR
               --------------------------------------------------------------- */
            function updateSummary() {
                const served = allRows.filter(function(r) {
                    return r.dataset.status === 'served';
                }).length;
                const ongoing = distributions.filter(function(d) {
                    return d.status === 'Ongoing';
                }).length;
                const completed = distributions.filter(function(d) {
                    return d.status === 'Completed';
                }).length;
                const percent = Math.round((served / TOTAL_BARANGAYS) * 100);

                $('statTotal').textContent = TOTAL_BARANGAYS;
                $('statServed').textContent = served;
                $('statOngoing').textContent = ongoing;
                $('statCompleted').textContent = completed;

                $('coverageBadge').textContent = served + ' of ' + TOTAL_BARANGAYS + ' Served';
                $('coveragePercent').textContent = percent + '%';
                $('coverageBar').style.width = percent + '%';
                $('coverageBar').setAttribute('aria-valuenow', percent);
                $('coverageText').textContent = served + (served === 1 ? ' barangay has' : ' barangays have') + ' received assistance.';
            }

            // Call this after any record changes: row, summary cards and table view all refresh
            function refreshAfterChange(barangayName) {
                updateRow(rowByName[barangayName]);
                updateSummary();
                applyFilters(false); // stay on the same page
            }

            /* ---------------------------------------------------------------
               8. DISTRIBUTION DETAILS MODAL + DISTRIBUTION HISTORY
               --------------------------------------------------------------- */

            // Fill the history table with every record of the barangay (newest first)
            function renderHistory(name) {
                const records = getBarangayRecords(name);
                const body = $('historyBody');
                body.replaceChildren();

                $('historyCount').textContent = records.length + (records.length === 1 ? ' record' : ' records');

                if (records.length === 0) {
                    const tr = document.createElement('tr');
                    const td = el('td', 'text-center text-muted py-3', 'No previous distributions recorded for this barangay.');
                    td.colSpan = 5;
                    tr.appendChild(td);
                    body.appendChild(tr);
                    return;
                }

                records.forEach(function(d, index) {
                    const tr = document.createElement('tr');

                    // Date (the newest record gets a "Latest" badge)
                    const dateCell = el('td', 'text-nowrap');
                    dateCell.appendChild(el('span', 'fw-semibold', formatDate(d.date)));
                    if (index === 0) {
                        dateCell.appendChild(el('span', 'badge bg-primary-subtle text-primary ms-2', 'Latest'));
                    }
                    tr.appendChild(dateCell);

                    // Type
                    tr.appendChild(el('td', '', d.type));

                    // Quantity distributed (with its progress %)
                    const qtyCell = el('td', 'text-end text-nowrap', String(d.distributed));
                    qtyCell.appendChild(el('small', 'text-muted ms-1', '(' + calcProgress(d.distributed, d.target) + '%)'));
                    tr.appendChild(qtyCell);

                    // Target quantity
                    tr.appendChild(el('td', 'text-end', String(d.target)));

                    // Status badge
                    const statusCell = document.createElement('td');
                    statusCell.appendChild(el('span', 'badge ' + STATUS_CLASSES[d.status], d.status));
                    tr.appendChild(statusCell);

                    body.appendChild(tr);
                });
            }

            $('distributionDetailsModal').addEventListener('show.bs.modal', function(e) {
                const row = e.relatedTarget && e.relatedTarget.closest('tr');
                if (!row) return;

                const name = row.dataset.name;
                const d = getLatest(name);
                $('detailBarangay').textContent = 'Barangay ' + name;
                if (!d) return;

                const progress = calcProgress(d.distributed, d.target);
                const unit = unitLabel(d.type);
                $('detailType').textContent = d.type;
                $('detailDate').textContent = formatDate(d.date);
                $('detailQty').textContent = d.distributed + ' ' + unit;
                $('detailTarget').textContent = d.target + ' ' + unit;
                $('detailProgress').textContent = progress + '%';
                $('detailStatus').textContent = d.status;
                $('detailStatus').className = 'badge ' + STATUS_CLASSES[d.status];
                $('detailCount').textContent = getBarangayRecords(name).length;
                $('detailProgram').textContent = getTitle(d);
                $('detailLocation').textContent = locations[name] ? formatCoords(locations[name]) : 'Not set';
                $('detailPhotos').textContent = (savedPhotos[name] || []).length;

                renderHistory(name);
            });

            /* ---------------------------------------------------------------
               9. UPDATE DISTRIBUTION FORM
               --------------------------------------------------------------- */
            const updateForm = $('updateForm');

            // Show the calculated progress under the quantity field
            function showUpdateProgress() {
                const name = $('upBarangay').value;
                const text = $('upProgressText');
                if (!name) {
                    text.textContent = '';
                    return;
                }

                const d = getLatest(name);
                if (!d) {
                    text.textContent = 'No distribution recorded for this barangay.';
                    return;
                }
                const qty = $('upQty').value === '' ? d.distributed : Number($('upQty').value);
                text.textContent = 'Progress: ' + calcProgress(qty, d.target) + '% (' + qty + ' of ' + d.target + ' target)';
            }

            // When a barangay is selected, pre-fill its current status, quantity and remarks
            $('upBarangay').addEventListener('change', function() {
                const d = getLatest(this.value);
                $('upStatus').value = d ? d.status : 'Ongoing';
                $('upQty').value = d ? d.distributed : '';
                $('upRemarks').value = d && d.remarks ? d.remarks : '';
                $('upCoords').value = locations[this.value] ? formatCoords(locations[this.value]) : '';
                $('upPhotoCategory').value = d ? d.type : 'Food Packs'; // photo category follows the distribution type
                showUpdateProgress();
            });
            $('upQty').addEventListener('input', showUpdateProgress);

            // Save the update to the barangay's latest distribution record
            function saveUpdate() {
                clearErrors(updateForm);
                const name = $('upBarangay').value;
                const qtyText = $('upQty').value;
                const qty = Number(qtyText);
                let valid = true;

                if (!name) {
                    setError($('upBarangay'), 'Please select a barangay.');
                    valid = false;
                }
                if (qtyText === '' || !Number.isInteger(qty) || qty < 0) {
                    setError($('upQty'), 'Enter a whole number of 0 or more.');
                    valid = false;
                }

                // Optional map coordinates
                let coords = null;
                if ($('upCoords').value.trim() !== '') {
                    const parsed = parseCoords($('upCoords').value);
                    if (parsed.error) {
                        setError($('upCoords'), parsed.error);
                        valid = false;
                    } else {
                        coords = parsed;
                    }
                }
                if (!valid) return;

                const d = getLatest(name);
                if (!d) {
                    setError($('upBarangay'), 'This barangay has no distribution record.');
                    return;
                }

                // FIX: quantity checks against the target
                if (qty > d.target) {
                    setError($('upQty'), 'Quantity cannot be more than the target (' + d.target + ').');
                    return;
                }
                if ($('upStatus').value === 'Completed' && qty < d.target) {
                    setError($('upQty'), 'Completed requires the full target (' + d.target + ').');
                    return;
                }

                // Apply the changes
                d.status = $('upStatus').value;
                d.distributed = qty;
                // FIX: always save the remarks box, so old remarks can be cleared
                d.remarks = $('upRemarks').value.trim();

                // Save (or clear) the map location of this barangay
                if (coords) locations[name] = coords;
                else delete locations[name];

                // Save any previewed photos
                const photos = updateUploader.takeItems();
                if (photos.length) {
                    savedPhotos[name] = (savedPhotos[name] || []).concat(photos.map(function(p) {
                        return {
                            name: p.file.name,
                            size: p.file.size,
                            url: p.url,
                            showInGallery: $('showInGallery').checked,
                            category: $('upPhotoCategory').value,
                            barangay: name,
                            date: d.date
                        };
                    }));
                }

                const progress = calcProgress(d.distributed, d.target);
                refreshAfterChange(name);

                // Tell the admin when the barangay is not counted as served yet (e.g. future date)
                const cov = getCoverage(name);
                if (cov.served) {
                    showToast('Update saved for ' + name + ': ' + d.status + ', ' + progress + '% complete.', 'success');
                } else {
                    showToast('Update saved for ' + name + ', but it is not counted as served yet (' + cov.label + ', ' + formatDate(d.date) + ').', 'warning');
                }

                updateForm.reset();
                $('upProgressText').textContent = '';
            }

            /* ---------------------------------------------------------------
               10. PHOTO UPLOAD + PREVIEW
               Creates an uploader for one file input and one preview box.
               --------------------------------------------------------------- */
            function createPhotoUploader(inputId, previewId) {
                const input = $(inputId);
                const preview = $(previewId);
                let items = []; // each item: { file, url }

                // Draw the preview list (thumbnail, file name, size, remove button)
                function render() {
                    preview.replaceChildren();
                    items.forEach(function(item) {
                        const row = el('div', 'd-flex align-items-center gap-2 border rounded p-2 mb-2');

                        const img = document.createElement('img');
                        img.src = item.url;
                        img.alt = item.file.name;
                        img.style.cssText = 'width:48px;height:48px;object-fit:cover;border-radius:6px;';

                        const info = el('div', 'flex-grow-1 small');
                        info.style.minWidth = '0';
                        info.appendChild(el('div', 'fw-semibold text-truncate', item.file.name));
                        info.appendChild(el('div', 'text-muted', formatSize(item.file.size)));

                        const removeBtn = el('button', 'btn-close');
                        removeBtn.type = 'button';
                        removeBtn.setAttribute('aria-label', 'Remove ' + item.file.name);
                        removeBtn.addEventListener('click', function() {
                            URL.revokeObjectURL(item.url);
                            items.splice(items.indexOf(item), 1);
                            render();
                        });

                        row.appendChild(img);
                        row.appendChild(info);
                        row.appendChild(removeBtn);
                        preview.appendChild(row);
                    });
                }

                // When files are chosen: validate type + size, then add to the list
                input.addEventListener('change', function() {
                    const problems = [];

                    Array.from(input.files).forEach(function(file) {
                        const exists = items.some(function(i) {
                            return i.file.name === file.name && i.file.size === file.size && i.file.lastModified === file.lastModified;
                        });
                        if (exists) return;

                        if (ALLOWED_TYPES.indexOf(file.type) === -1) {
                            problems.push(file.name + ': only JPG, PNG, or WEBP images are allowed.');
                        } else if (file.size > MAX_FILE_SIZE) {
                            problems.push(file.name + ': larger than 5 MB (' + formatSize(file.size) + ').');
                        } else if (items.length >= MAX_FILES) {
                            problems.push(file.name + ': maximum of ' + MAX_FILES + ' photos reached.');
                        } else {
                            items.push({
                                file: file,
                                url: URL.createObjectURL(file)
                            });
                        }
                    });

                    input.value = ''; // lets the same file be chosen again later
                    render();
                    if (problems.length) showToast(problems.slice(0, 3).join(' '), 'danger');
                });

                // The form's reset() empties the input, so also empty the preview list
                if (input.form) {
                    input.form.addEventListener('reset', function() {
                        items.forEach(function(i) {
                            URL.revokeObjectURL(i.url);
                        });
                        items = [];
                        render();
                    });
                }

                return {
                    // Hand over the items (e.g. for saving) and empty the preview without revoking URLs
                    takeItems: function() {
                        const out = items;
                        items = [];
                        render();
                        return out;
                    },
                    count: function() {
                        return items.length;
                    }
                };
            }

            const updateUploader = createPhotoUploader('distributionPhotos', 'upPhotoPreview');
            const docUploader = createPhotoUploader('projectPhotos', 'docPhotoPreview');

            // "Save Photos" button in the Distribution Documentation card
            function saveDocPhotos() {
                const select = $('docBarangay');
                clearErrors(select.parentElement);

                if (!select.value) {
                    setError(select, 'Please select a barangay.');
                    return;
                }
                if (docUploader.count() === 0) {
                    showToast('Please choose at least one photo to upload.', 'warning');
                    return;
                }

                const name = select.value;
                const photos = docUploader.takeItems();
                savedPhotos[name] = (savedPhotos[name] || []).concat(photos.map(function(p) {
                    return {
                        name: p.file.name,
                        size: p.file.size,
                        url: p.url,
                        showInGallery: $('showOnImpact').checked,
                        category: $('docPhotoCategory').value,
                        barangay: name,
                        date: (getLatest(name) || {}).date || ''
                    };
                }));

                select.selectedIndex = 0;
                showToast(photos.length + ' photo(s) saved for ' + name + '.', 'success');
            }

            /* ---------------------------------------------------------------
               10B. NEW DISTRIBUTION FORM (modal)
               --------------------------------------------------------------- */
            const newForm = $('newForm');

            // Show the default program title as the placeholder of the title box
            function updateTitlePlaceholder() {
                const name = $('ndBarangay').value;
                $('ndTitle').placeholder = name ? defaultTitle(name, $('ndType').value) : 'e.g. Food Packs for Tagpore Families';
            }

            // Fill the barangay list with ALL barangays (a new barangay can get its first record here)
            function fillNewBarangayList() {
                BARANGAY_LIST.forEach(function(name) {
                    const option = document.createElement('option');
                    option.value = name;
                    option.textContent = name;
                    $('ndBarangay').appendChild(option);
                });
            }

            function saveNewDistribution() {
                clearErrors(newForm);
                const name = $('ndBarangay').value;
                const type = $('ndType').value;
                const title = $('ndTitle').value.trim();
                const targetText = $('ndTarget').value;
                const target = Number(targetText);
                const date = $('ndDate').value; // "YYYY-MM-DD"
                const status = $('ndStatus').value;
                let coords = null;
                let valid = true;

                if (!name) {
                    setError($('ndBarangay'), 'Please select a barangay.');
                    valid = false;
                }
                if (targetText === '' || !Number.isInteger(target) || target < 1) {
                    setError($('ndTarget'), 'Enter a whole number of 1 or more.');
                    valid = false;
                }
                if (!date) {
                    setError($('ndDate'), 'Please choose the distribution date.');
                    valid = false;
                }
                if ($('ndCoords').value.trim() !== '') {
                    const parsed = parseCoords($('ndCoords').value);
                    if (parsed.error) {
                        setError($('ndCoords'), parsed.error);
                        valid = false;
                    } else {
                        coords = parsed;
                    }
                }
                if (!valid) return;

                // Block an exact duplicate (same barangay, type and date)
                const duplicate = distributions.some(function(d) {
                    return d.barangay === name && d.type === type && d.date === date;
                });
                if (duplicate) {
                    setError($('ndDate'), type + ' for this barangay is already recorded on ' + formatDate(date) + '.');
                    return;
                }

                // Warn (but allow) when an unfinished distribution of the same type already exists
                const unfinished = getBarangayRecords(name).some(function(d) {
                    return d.type === type && (d.status === 'Planned' || d.status === 'Ongoing');
                });

                distributions.push({
                    id: nextId++,
                    barangay: name,
                    type: type,
                    title: title || defaultTitle(name, type),
                    date: date,
                    target: target,
                    distributed: 0,
                    status: status,
                    location: '',
                    notes: '',
                    remarks: ''
                });
                if (coords) locations[name] = coords;

                if (!rowByName[name]) createRow(name);
                refreshBarangaySelects();
                refreshAfterChange(name);

                bootstrap.Modal.getOrCreateInstance($('newDistributionModal')).hide();
                showToast('Distribution added for ' + name + ': ' + (title || defaultTitle(name, type)) + ', target ' + target + ' ' + unitLabel(type) + ', ' + formatDate(date) + '.', 'success');
                if (unfinished) {
                    showToast(name + ' already has an unfinished ' + type + ' distribution. Review its history to avoid duplicates.', 'warning');
                }
            }

            /* ---------------------------------------------------------------
               11. START EVERYTHING
               --------------------------------------------------------------- */
            function init() {
                // Give each row a data-name and remember it
                allRows.forEach(function(row) {
                    row.dataset.name = row.children[0].textContent.trim();
                    rowByName[row.dataset.name] = row;
                });

                // Hidden "no results" row
                const noRow = document.createElement('tr');
                noRow.id = 'noResultsRow';
                noRow.hidden = true;
                noRow.innerHTML = '<td colspan="5" class="text-center text-muted py-4"></td>';
                tbody.appendChild(noRow);

                // Load sample records, then rebuild every row from the data
                seedData.forEach(function(item) {
                    distributions.push({
                        id: nextId++,
                        barangay: item.barangay,
                        type: item.type,
                        date: item.date,
                        target: item.target,
                        distributed: item.distributed,
                        status: item.status,
                        location: '',
                        notes: '',
                        remarks: ''
                    });
                });
                allRows.forEach(updateRow);

                refreshBarangaySelects();

                // Search: runs on every keystroke
                $('barangaySearch').addEventListener('input', function() {
                    state.search = this.value.trim().toLowerCase();
                    applyFilters(true);
                });

                // Buttons
                $('saveUpdateBtn').addEventListener('click', saveUpdate);
                $('savePhotosBtn').addEventListener('click', saveDocPhotos);

                // Pressing Enter inside the update form must not reload the page
                updateForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    saveUpdate();
                });

                // Clear red errors while typing
                clearErrorOnEdit(updateForm);
                $('docBarangay').addEventListener('change', function() {
                    this.classList.remove('is-invalid');
                    const latest = getLatest(this.value);
                    if (latest) $('docPhotoCategory').value = latest.type; // category follows the distribution type
                });

                // New Distribution modal
                fillNewBarangayList();
                $('saveNewBtn').addEventListener('click', saveNewDistribution);
                newForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    saveNewDistribution();
                });
                clearErrorOnEdit(newForm);
                $('ndType').addEventListener('change', updateTitlePlaceholder);
                $('ndBarangay').addEventListener('change', function() {
                    $('ndCoords').value = locations[this.value] ? formatCoords(locations[this.value]) : '';
                    updateTitlePlaceholder();
                });
                $('newDistributionModal').addEventListener('show.bs.modal', function() {
                    newForm.reset();
                    clearErrors(newForm);
                    $('ndDate').value = todayISO();
                    updateTitlePlaceholder();
                });

                updateSummary();
                applyFilters(true);
            }

            init();
        })();
    </script>

</body>

</html>