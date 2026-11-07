<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BETTA | Our Impact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

</head>

<body>

    @include('partials.navbar')

    <!-- HERO -->
    <section class="hero1">
        <div class="hero1-content">
            <p class="hero1-small-title">OUR IMPACT</p>

            <h1>Making a Difference, One Community at a Time</h1>

            <p class="hero1-text">
                Discover how BETTA transforms donations into meaningful change.
                Explore the communities we've reached, the projects we've supported,
                and the impact we've made together.
            </p>
        </div>

        <div class="hero1-image">
            <img src="{{ asset('images/himg.jpg') }}" alt="BETTA Community Impact">
        </div>
    </section>


    <!-- PROJECTS -->
    <section class="projects-section py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-1">Our Community Impact</h2>

            <p class="text-center text-body-secondary mb-4">
                Discover the projects and donation distributions making a difference in our communities.
            </p>

            <!-- PROJECT FILTERS -->
            <div class="project-filters" role="group" aria-label="Filter projects by category">

                <button type="button" class="filter-chip active"
                    data-project-filter="all" aria-pressed="true">
                    All Projects
                </button>

                <button type="button" class="filter-chip"
                    data-project-filter="livelihood" aria-pressed="false">
                    Livelihood
                </button>

                <button type="button" class="filter-chip"
                    data-project-filter="food_packs" aria-pressed="false">
                    Food Packs
                </button>

                <button type="button" class="filter-chip"
                    data-project-filter="meals" aria-pressed="false">
                    Prepared Meals
                </button>

            </div>

            <p id="projectCount" class="text-center small text-body-secondary" aria-live="polite"></p>

            <div id="projectsCarousel" class="carousel slide" data-bs-ride="false">

                <div class="carousel-inner">

                    <!-- PROJECT 1: POULTRY COOPS -->
                    <div class="carousel-item active" data-category="livelihood">

                        <div class="card project-card">
                            <div class="row g-0">

                                <div class="col-md-7">
                                    <img src="{{ asset('images/chicken.jpg') }}"
                                        class="project-img"
                                        alt="Neighborhood Cluster Poultry Coops">
                                </div>

                                <div class="col-md-5">
                                    <div class="card-body p-4">

                                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                                            Ongoing
                                        </span>

                                        <h5 class="card-title fw-semibold mt-2 mb-2">
                                            Neighborhood Cluster Poultry Coops
                                        </h5>

                                        <p class="text-body-secondary small mb-3">
                                            <i class="bi bi-geo-alt"></i>
                                            Panabo City, Davao del Norte
                                        </p>

                                        <p class="card-text small">
                                            Establishes 10 shared neighborhood coops,
                                            providing 100 families with a continuous
                                            supply of fresh food and shared income.
                                        </p>

                                        <div class="project-progress mt-4">

                                            <div class="d-flex justify-content-between mb-2">

                                                <div>
                                                    <span class="small text-body-secondary">Goal</span>
                                                    <h6 class="fw-bold mb-0">₱250,000</h6>
                                                </div>

                                                <div class="text-end">
                                                    <span class="small text-body-secondary">Provided</span>
                                                    <h6 class="fw-bold mb-0">₱0</h6>
                                                </div>

                                            </div>

                                            <div class="progress" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

                                                <div class="progress-bar"
                                                    style="width: 0%; background-color: #328CC1;">
                                                </div>

                                            </div>

                                            <p class="small text-body-secondary mt-2 mb-0">
                                                0% of funding goal reached
                                            </p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- PROJECT 2: TAGPORE -->
                    <div class="carousel-item" data-category="food_packs">

                        <div class="card project-card">
                            <div class="row g-0">

                                <div class="col-md-7">
                                    <img src="{{ asset('images/fam1.jpg') }}"
                                        class="project-img"
                                        alt="Feed Families in Tagpore">
                                </div>

                                <div class="col-md-5">
                                    <div class="card-body p-4">

                                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                                            Ongoing
                                        </span>

                                        <h5 class="card-title fw-semibold mt-2 mb-2">
                                            Feed Families in Tagpore
                                        </h5>

                                        <p class="text-body-secondary small mb-3">
                                            <i class="bi bi-geo-alt"></i>
                                            Barangay Tagpore, Panabo City
                                        </p>

                                        <p class="card-text small">
                                            Your support funds complete grocery packs,
                                            providing local families with essential,
                                            nutritious food daily.
                                        </p>

                                        <div class="project-progress mt-4">

                                            <div class="d-flex justify-content-between mb-2">

                                                <div>
                                                    <span class="small text-body-secondary">Goal</span>
                                                    <h6 class="fw-bold mb-0">100 packs</h6>
                                                </div>

                                                <div class="text-end">
                                                    <span class="small text-body-secondary">Provided</span>
                                                    <h6 class="fw-bold mb-0">0 packs</h6>
                                                </div>

                                            </div>

                                            <div class="progress" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

                                                <div class="progress-bar"
                                                    style="width: 0%; background-color: #328CC1;">
                                                </div>

                                            </div>

                                            <p class="small text-body-secondary mt-2 mb-0">
                                                0% of distribution goal reached
                                            </p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>


                    <!-- PROJECT 3: BUENAVISTA -->
                    <div class="carousel-item" data-category="meals">

                        <div class="card project-card">
                            <div class="row g-0">

                                <div class="col-md-7">
                                    <img src="{{ asset('images/childeating.jpg') }}"
                                        class="project-img"
                                        alt="Fresh Meals for Children in Buenavista">
                                </div>

                                <div class="col-md-5">
                                    <div class="card-body p-4">

                                        <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                                            Ongoing
                                        </span>

                                        <h5 class="card-title fw-semibold mt-2 mb-2">
                                            Fresh Meals for Children in Buenavista
                                        </h5>

                                        <p class="text-body-secondary small mb-3">
                                            <i class="bi bi-geo-alt"></i>
                                            Barangay Buenavista, Panabo City
                                        </p>

                                        <p class="card-text small">
                                            Providing nutritious daily meals to children,
                                            helping them stay healthy and nourished.
                                        </p>

                                        <div class="project-progress mt-4">

                                            <div class="d-flex justify-content-between mb-2">

                                                <div>
                                                    <span class="small text-body-secondary">Goal</span>
                                                    <h6 class="fw-bold mb-0">100 meals</h6>
                                                </div>

                                                <div class="text-end">
                                                    <span class="small text-body-secondary">Provided</span>
                                                    <h6 class="fw-bold mb-0">0 meals</h6>
                                                </div>

                                            </div>

                                            <div class="progress" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

                                                <div class="progress-bar"
                                                    style="width: 0%; background-color: #328CC1;">
                                                </div>

                                            </div>

                                            <p class="small text-body-secondary mt-2 mb-0">
                                                0% of distribution goal reached
                                            </p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>


                <!-- CAROUSEL CONTROLS -->
                <div id="carouselControls"
                    class="d-flex justify-content-center align-items-center gap-3 mt-4">

                    <button class="btn btn-outline-secondary nav-btn"
                        type="button"
                        data-bs-target="#projectsCarousel"
                        data-bs-slide="prev"
                        aria-label="Previous project">

                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <div class="carousel-indicators project-dots">

                        <button type="button"
                            data-bs-target="#projectsCarousel"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Project 1">
                        </button>

                        <button type="button"
                            data-bs-target="#projectsCarousel"
                            data-bs-slide-to="1"
                            aria-label="Project 2">
                        </button>

                        <button type="button"
                            data-bs-target="#projectsCarousel"
                            data-bs-slide-to="2"
                            aria-label="Project 3">
                        </button>

                    </div>

                    <button class="btn btn-outline-secondary nav-btn"
                        type="button"
                        data-bs-target="#projectsCarousel"
                        data-bs-slide="next"
                        aria-label="Next project">

                        <i class="bi bi-chevron-right"></i>
                    </button>

                </div>

            </div>
        </div>
    </section>


    <!-- DISTRIBUTION GALLERY -->
    <section class="gallery-section py-5">

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold mb-2">Distribution Gallery</h2>

                <p class="text-body-secondary mb-0">
                    See how BETTA brings food and assistance to communities across Panabo City.
                </p>

            </div>


            <!-- GALLERY FILTERS -->
            <div class="gallery-filters">

                <div class="filter-chips" role="group" aria-label="Filter photos by distribution type">

                    <button type="button" class="filter-chip active"
                        data-gallery-type="all" aria-pressed="true">
                        All
                    </button>

                    <button type="button" class="filter-chip"
                        data-gallery-type="food_packs" aria-pressed="false">
                        Food Packs
                    </button>

                    <button type="button" class="filter-chip"
                        data-gallery-type="meals" aria-pressed="false">
                        Prepared Meals
                    </button>

                    <button type="button" class="filter-chip"
                        data-gallery-type="volunteers" aria-pressed="false">
                        Volunteers
                    </button>

                </div>

                <select id="galleryBarangay"
                    class="form-select"
                    aria-label="Filter photos by barangay">

                    <option value="all">All barangays</option>
                    <option value="tagpore">Tagpore</option>
                    <option value="buenavista">Buenavista</option>
                    <option value="maduao">Maduao</option>
                    <option value="nanyo">Nanyo</option>
                    <option value="katualan">Katualan</option>
                    <option value="new-malaga">New Malaga</option>

                </select>

            </div>


            <!-- GALLERY PHOTOS -->
            <div class="row g-3" id="galleryRow">

                <!-- PHOTO 1 -->
                <div class="col-6 col-md-3 gallery-item"
                    data-brgy="tagpore" data-type="food_packs">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo1.jpg') }}"
                            class="gallery-img"
                            alt="Food pack distribution in Barangay Tagpore">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. Tagpore</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 2 -->
                <div class="col-6 col-md-3 gallery-item"
                    data-brgy="buenavista" data-type="meals">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo2.jpg') }}"
                            class="gallery-img"
                            alt="Prepared meal distribution in Barangay Buenavista">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. Buenavista</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 3 -->
                <div class="col-6 col-md-3 gallery-item"
                    data-brgy="maduao" data-type="food_packs">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo3.jpg') }}"
                            class="gallery-img"
                            alt="Food distribution in Barangay Maduao">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. Maduao</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 4 -->
                <div class="col-6 col-md-3 gallery-item"
                    data-brgy="nanyo" data-type="meals">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo4.jpg') }}"
                            class="gallery-img"
                            alt="Prepared meal distribution in Barangay Nanyo">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. Nanyo</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 5 -->
                <div class="col-6 col-md-3 gallery-item gallery-extra"
                    data-brgy="katualan" data-type="food_packs">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo5.jpg') }}"
                            class="gallery-img"
                            alt="Food distribution in Barangay Katualan">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. Katualan</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 6 -->
                <div class="col-6 col-md-3 gallery-item gallery-extra"
                    data-brgy="new-malaga" data-type="meals">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo6.jpg') }}"
                            class="gallery-img"
                            alt="Prepared meals in Barangay New Malaga">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Brgy. New Malaga</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 7 -->
                <div class="col-6 col-md-3 gallery-item gallery-extra"
                    data-brgy="general" data-type="volunteers">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo7.jpg') }}"
                            class="gallery-img"
                            alt="Volunteers preparing food donations">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Food Preparation</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>


                <!-- PHOTO 8 -->
                <div class="col-6 col-md-3 gallery-item gallery-extra"
                    data-brgy="general" data-type="volunteers">

                    <div class="card gallery-card h-100">

                        <img src="{{ asset('images/gallery/photo8.jpg') }}"
                            class="gallery-img"
                            alt="BETTA volunteers preparing distribution supplies">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">BETTA Volunteers</h6>

                            <small class="text-body-secondary">
                                <i class="bi bi-calendar3 me-1"></i>Jan 1, 2027
                            </small>
                        </div>

                    </div>
                </div>

            </div>


            <p id="noPhotos"
                class="text-center text-body-secondary py-4 d-none">
                No photos match your filters.
            </p>


            <div class="text-center mt-4" id="galleryMoreWrap">

                <button class="btn btn-outline-primary gallery-more-btn"
                    type="button"
                    id="galleryMoreBtn"
                    aria-expanded="false">

                    <i class="bi bi-images me-2"></i>
                    <span>View More Photos</span>

                </button>

            </div>

        </div>
    </section>


    <!-- WHERE WE DISTRIBUTE -->
    <section class="distribute-section py-5">

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold mb-2">Where We Distribute</h2>

                <p class="text-body-secondary">
                    Explore the barangays reached by BETTA through
                    food pack distributions and prepared meal programs.
                </p>

            </div>


            <!-- SEARCH AND FILTER -->
            <div class="distribution-filter mb-4">

                <div class="row g-3 align-items-center">

                    <div class="col-lg-5">

                        <div class="input-group">

                            <span class="input-group-text bg-white">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text"
                                id="barangaySearch"
                                class="form-control"
                                placeholder="Search barangay or community">

                        </div>

                    </div>


                    <div class="col-lg-3 col-md-6">

                        <select class="form-select"
                            id="distributionType"
                            aria-label="Filter by distribution type">

                            <option value="">All Distributions</option>
                            <option value="food_packs">Food Packs</option>
                            <option value="meals">Prepared Meals</option>

                        </select>

                    </div>


                    <div class="col-lg-2 col-md-6">

                        <select class="form-select"
                            id="distributionStatus"
                            aria-label="Filter by status">

                            <option value="">All Statuses</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Completed">Completed</option>

                        </select>

                    </div>


                    <div class="col-lg-2 d-grid">

                        <button type="button"
                            id="filterDistributions"
                            class="btn btn-primary distribution-filter-btn">

                            <i class="bi bi-funnel me-1"></i> Filter

                        </button>

                    </div>

                </div>
            </div>


            <!-- MAP AND DISTRIBUTION CARDS -->
            <div class="row g-4">


                <!-- MAP -->
                <div class="col-lg-7">

                    <div class="distribution-map-card">

                        <div class="map-header">

                            <div>
                                <h5 class="fw-bold mb-1">
                                    <i class="bi bi-geo-alt-fill me-2"></i>
                                    Food Distribution Map
                                </h5>

                                <p class="small text-body-secondary mb-0">
                                    Panabo City, Davao del Norte
                                </p>
                            </div>

                            <span class="badge bg-success-subtle text-success-emphasis"
                                id="barangayCount">
                                6 Barangays
                            </span>

                        </div>


                        <div class="distribution-map-wrap">

                            <div class="map-tools">

                                <button type="button"
                                    id="mapReset"
                                    class="map-tool-btn"
                                    title="Reset map view"
                                    aria-label="Reset map view">

                                    <i class="bi bi-arrow-counterclockwise"></i>

                                </button>

                                <button type="button"
                                    id="mapFullscreen"
                                    class="map-tool-btn"
                                    title="Fullscreen"
                                    aria-label="Toggle fullscreen map"
                                    aria-pressed="false">

                                    <i class="bi bi-arrows-fullscreen"></i>

                                </button>

                            </div>

                            <div class="distribution-map" id="distributionMap"></div>

                        </div>


                        <div class="map-footer">

                            <div class="d-flex flex-wrap align-items-center gap-3">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Click a pin to view distribution details.
                                </span>

                                <span class="small">
                                    <i class="bi bi-circle-fill text-primary me-1"></i>
                                    Food Packs
                                </span>

                                <span class="small">
                                    <i class="bi bi-circle-fill text-success me-1"></i>
                                    Prepared Meals
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- BARANGAY LIST -->
                <div class="col-lg-5">

                    <div class="distribution-list-header mb-3">

                        <h5 class="fw-bold mb-1">Communities Reached</h5>

                        <p class="small text-body-secondary mb-0">
                            Track ongoing food pack and meal distributions.
                        </p>

                    </div>


                    <div id="distributionList" class="distribution-scroll">


                        <!-- TAGPORE -->
                        <div class="distribution-card mb-3"
                            data-barangay="tagpore"
                            data-type="food_packs">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay Tagpore</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-box-seam me-1"></i>
                                Feed Families in Tagpore
                            </p>

                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-body-secondary">
                                    Food Packs Distributed
                                </span>

                                <span class="small fw-semibold">0 / 100 packs</span>
                            </div>

                            <div class="progress distribution-progress mb-3">
                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('tagpore')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>


                        <!-- BUENAVISTA -->
                        <div class="distribution-card mb-3"
                            data-barangay="buenavista"
                            data-type="meals">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay Buenavista</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-cup-hot me-1"></i>
                                Fresh Meals for Children in Buenavista
                            </p>

                            <div class="d-flex justify-content-between mb-2">

                                <span class="small text-body-secondary">
                                    Meals Distributed
                                </span>

                                <span class="small fw-semibold">0 / 100 meals</span>

                            </div>

                            <div class="progress distribution-progress mb-3">

                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('buenavista')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>


                        <!-- MADUAO -->
                        <div class="distribution-card mb-3"
                            data-barangay="maduao"
                            data-type="food_packs">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay Maduao</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-box-seam me-1"></i>
                                Life-Saving Food in Maduao
                            </p>

                            <div class="d-flex justify-content-between mb-2">

                                <span class="small text-body-secondary">
                                    Food Packs Distributed
                                </span>

                                <span class="small fw-semibold">0 / 120 packs</span>

                            </div>

                            <div class="progress distribution-progress mb-3">

                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('maduao')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>


                        <!-- NANYO -->
                        <div class="distribution-card mb-3"
                            data-barangay="nanyo"
                            data-type="meals">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay Nanyo</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-cup-hot me-1"></i>
                                Warm Cooked Meals for Nanyo Families
                            </p>

                            <div class="d-flex justify-content-between mb-2">

                                <span class="small text-body-secondary">
                                    Meals Distributed
                                </span>

                                <span class="small fw-semibold">0 / 100 meals</span>

                            </div>

                            <div class="progress distribution-progress mb-3">

                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('nanyo')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>


                        <!-- KATUALAN -->
                        <div class="distribution-card mb-3"
                            data-barangay="katualan"
                            data-type="food_packs">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay Katualan</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-box-seam me-1"></i>
                                Food Packs for Katualan Families
                            </p>

                            <div class="d-flex justify-content-between mb-2">

                                <span class="small text-body-secondary">
                                    Food Packs Distributed
                                </span>

                                <span class="small fw-semibold">0 / 100 packs</span>

                            </div>

                            <div class="progress distribution-progress mb-3">

                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('katualan')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>


                        <!-- NEW MALAGA -->
                        <div class="distribution-card mb-3"
                            data-barangay="new-malaga"
                            data-type="meals">

                            <div class="d-flex justify-content-between align-items-start mb-2">

                                <h6 class="fw-bold mb-0">Barangay New Malaga</h6>

                                <span class="badge bg-primary-subtle text-primary-emphasis">
                                    Ongoing
                                </span>

                            </div>

                            <p class="distribution-type mb-2">
                                <i class="bi bi-cup-hot me-1"></i>
                                Hot Meals for New Malaga Families
                            </p>

                            <div class="d-flex justify-content-between mb-2">

                                <span class="small text-body-secondary">
                                    Meals Distributed
                                </span>

                                <span class="small fw-semibold">0 / 100 meals</span>

                            </div>

                            <div class="progress distribution-progress mb-3">

                                <div class="progress-bar"
                                    style="width: 0%;"
                                    role="progressbar"
                                    aria-valuenow="0"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>

                            </div>

                            <div class="d-flex justify-content-between align-items-center">

                                <span class="small text-body-secondary">
                                    <i class="bi bi-geo-alt me-1"></i>Panabo City
                                </span>

                                <button type="button"
                                    class="distribution-location-btn"
                                    onclick="showDistribution('new-malaga')">

                                    View on Map
                                    <i class="bi bi-arrow-up-right ms-1"></i>

                                </button>

                            </div>

                        </div>

                    </div>


                    <p id="noDistributions"
                        class="text-center text-body-secondary py-4 d-none">
                        No matching distributions found.
                    </p>

                </div>

            </div>

        </div>
    </section>


    <!-- CALL TO ACTION -->
    <section class="cta-banner py-5 text-center">

        <div class="container">

            <h4 class="fw-semibold mb-2">
                Help Us Reach More Barangays
            </h4>

            <p class="mb-4">
                Your generosity helps BETTA provide nutritious meals
                and essential food supplies to communities in need.
            </p>

            <a href="{{ route('donate') }}"
                class="btn btn-primary distribution-donate-btn">

                <i class="bi bi-heart-fill me-2"></i>
                Donate Now

            </a>

        </div>

    </section>


    <!-- PHOTO LIGHTBOX -->
    <div class="modal fade"
        id="galleryLightbox"
        tabindex="-1"
        aria-label="Photo viewer"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-xl">

            <div class="modal-content lightbox-content">

                <button type="button"
                    class="btn-close btn-close-white lightbox-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

                <button type="button"
                    class="lightbox-nav lightbox-prev"
                    id="lightboxPrev"
                    aria-label="Previous photo">

                    <i class="bi bi-chevron-left"></i>

                </button>

                <figure class="lightbox-figure">

                    <img id="lightboxImg" src="" alt="">

                    <figcaption>
                        <strong id="lightboxTitle"></strong>
                        <span id="lightboxDate"></span>
                        <span id="lightboxCount"></span>
                    </figcaption>

                </figure>

                <button type="button"
                    class="lightbox-nav lightbox-next"
                    id="lightboxNext"
                    aria-label="Next photo">

                    <i class="bi bi-chevron-right"></i>

                </button>

            </div>

        </div>

    </div>


    <!-- DISTRIBUTION DETAILS MODAL -->
    <div class="modal fade"
        id="distributionModal"
        tabindex="-1"
        aria-labelledby="distributionModalTitle"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <div>
                        <h5 class="modal-title" id="distributionModalTitle"></h5>
                        <small class="text-body-secondary" id="distributionModalSub"></small>
                    </div>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>

                </div>


                <div class="modal-body">

                    <div class="d-flex gap-2 mb-3">

                        <span class="badge" id="dmStatus"></span>

                        <span class="badge bg-secondary-subtle text-secondary-emphasis"
                            id="dmType">
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-1">

                        <span class="small text-body-secondary">Progress</span>

                        <span class="small fw-semibold" id="dmProgressText"></span>

                    </div>


                    <div class="progress mb-3">

                        <div class="progress-bar"
                            id="dmBar"
                            role="progressbar"
                            aria-valuenow="0"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: 0%;">
                        </div>

                    </div>


                    <h6>Location</h6>
                    <p id="dmLocation"></p>

                    <h6>Date Needed</h6>
                    <p id="dmDate"></p>

                    <h6 id="dmIncludesLabel"></h6>
                    <ul id="dmIncludes"></ul>

                    <h6>Estimated Cost</h6>
                    <p><strong id="dmCost"></strong></p>

                </div>


                <div class="modal-footer">

                    <button type="button"
                        class="btn btn-outline-secondary"
                        id="dmViewMap">

                        View on Map

                    </button>

                    <a href="{{ route('donate') }}"
                        class="btn btn-primary">

                        Donate

                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-5">

                    <a class="navbar-brand"
                        href="{{ route('home') }}"
                        style="margin-left: -20px;">

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


                <div class="col-md-3">

                    <h4>Quick Links</h4>

                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('req') }}">Request a donation</a>
                    <a href="{{ route('sc') }}">Select a Cause</a>
                    <a href="{{ route('donate') }}">Fund a Project</a>

                </div>


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


    <!-- BACK TO TOP -->
    <button type="button"
        id="backToTop"
        class="back-to-top"
        aria-label="Back to top">

        <svg width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true">

            <path d="M12 19V5M5 12l7-7 7 7" />

        </svg>

    </button>


    <!-- FIRST JAVASCRIPT: PROJECTS, GALLERY, LIGHTBOX, BACK TO TOP -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const reduceMotion =
                window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            const hasBootstrap = typeof bootstrap !== 'undefined';


            /* PROGRESS BAR HELPERS */

            function prepBar(bar) {

                const target = parseFloat(bar.style.width);

                if (isNaN(target)) return;

                bar.dataset.target = target;

                if (!reduceMotion) {
                    bar.style.width = '0%';
                }

            }


            function fillBar(bar) {

                const target = bar.dataset.target;

                if (target === undefined) return;

                if (reduceMotion) {
                    bar.style.width = target + '%';
                    return;
                }

                bar.style.width = '0%';

                void bar.offsetWidth;

                bar.style.width = target + '%';

            }


            /* PROJECT CAROUSEL AND FILTERS */

            const carouselEl = document.getElementById('projectsCarousel');

            if (carouselEl) {

                const inner = carouselEl.querySelector('.carousel-inner');
                const dots = carouselEl.querySelector('.carousel-indicators');
                const controls = document.getElementById('carouselControls');
                const count = document.getElementById('projectCount');

                const chips = document.querySelectorAll('[data-project-filter]');

                const allSlides = [...inner.querySelectorAll('.carousel-item')];

                carouselEl.querySelectorAll('.project-progress .progress-bar')
                    .forEach(prepBar);


                const fillActiveBar = () => {

                    const bar = carouselEl.querySelector(
                        '.carousel-item.active .progress-bar'
                    );

                    if (bar) fillBar(bar);

                };


                if ('IntersectionObserver' in window) {

                    new IntersectionObserver((entries, obs) => {

                        if (entries[0].isIntersecting) {

                            fillActiveBar();

                            obs.disconnect();

                        }

                    }, {
                        threshold: 0.3
                    }).observe(carouselEl);

                } else {

                    fillActiveBar();

                }


                carouselEl.addEventListener('slid.bs.carousel', (e) => {

                    const bar = e.relatedTarget.querySelector('.progress-bar');

                    if (bar) fillBar(bar);

                });


                function filterProjects(category) {

                    const matching = allSlides.filter(slide =>
                        category === 'all' ||
                        slide.dataset.category === category
                    );


                    allSlides.forEach(slide => {

                        slide.classList.remove(
                            'active',
                            'carousel-item-next',
                            'carousel-item-prev',
                            'carousel-item-start',
                            'carousel-item-end'
                        );

                        slide.remove();

                    });


                    matching.forEach(slide => inner.appendChild(slide));


                    if (matching[0]) {
                        matching[0].classList.add('active');
                    }


                    /* REBUILD INDICATOR DOTS */

                    dots.innerHTML = '';

                    matching.forEach((slide, index) => {

                        const button = document.createElement('button');

                        button.type = 'button';

                        button.dataset.bsTarget = '#projectsCarousel';
                        button.dataset.bsSlideTo = index;

                        button.setAttribute(
                            'aria-label',
                            'Project ' + (index + 1)
                        );

                        if (index === 0) {

                            button.className = 'active';

                            button.setAttribute('aria-current', 'true');

                        }

                        dots.appendChild(button);

                    });


                    controls.classList.toggle('d-none', matching.length < 2);

                    count.textContent =
                        `Showing ${matching.length} of ${allSlides.length} projects`;

                    fillActiveBar();

                }


                chips.forEach(chip => {

                    chip.addEventListener('click', () => {

                        chips.forEach(c => {

                            const on = c === chip;

                            c.classList.toggle('active', on);

                            c.setAttribute('aria-pressed', on);

                        });

                        filterProjects(chip.dataset.projectFilter);

                    });

                });

            }


            /* DISTRIBUTION PROGRESS BARS */

            const distBars = document.querySelectorAll(
                '.distribution-progress .progress-bar'
            );

            distBars.forEach(prepBar);


            if ('IntersectionObserver' in window && !reduceMotion) {

                const barObserver = new IntersectionObserver((entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            fillBar(entry.target);

                            barObserver.unobserve(entry.target);

                        }

                    });

                }, {
                    threshold: 0.6
                });


                distBars.forEach(bar => barObserver.observe(bar));

            } else {

                distBars.forEach(fillBar);

            }


            /* GALLERY FILTERS AND VIEW MORE */

            const galleryRow = document.getElementById('galleryRow');

            if (galleryRow) {

                const photos = [...galleryRow.querySelectorAll('.gallery-item')];

                const typeChips = document.querySelectorAll('[data-gallery-type]');

                const brgySelect = document.getElementById('galleryBarangay');

                const noPhotos = document.getElementById('noPhotos');

                const moreWrap = document.getElementById('galleryMoreWrap');

                const moreBtn = document.getElementById('galleryMoreBtn');


                const gState = {
                    type: 'all',
                    brgy: 'all',
                    expanded: false
                };


                function updateGallery() {

                    const filtering =
                        gState.type !== 'all' ||
                        gState.brgy !== 'all';

                    let shown = 0;


                    photos.forEach(photo => {

                        const matches =
                            (gState.type === 'all' ||
                                photo.dataset.type === gState.type) &&

                            (gState.brgy === 'all' ||
                                photo.dataset.brgy === gState.brgy);


                        const collapsed = !filtering &&
                            !gState.expanded &&
                            photo.classList.contains('gallery-extra');


                        const show = matches && !collapsed;

                        photo.classList.toggle('d-none', !show);

                        if (show) shown++;

                    });


                    moreWrap.classList.toggle('d-none', filtering);

                    noPhotos.classList.toggle('d-none', shown !== 0);

                }


                typeChips.forEach(chip => {

                    chip.addEventListener('click', () => {

                        gState.type = chip.dataset.galleryType;

                        typeChips.forEach(c => {

                            const on = c === chip;

                            c.classList.toggle('active', on);

                            c.setAttribute('aria-pressed', on);

                        });

                        updateGallery();

                    });

                });


                if (brgySelect) {

                    brgySelect.addEventListener('change', () => {

                        gState.brgy = brgySelect.value;

                        updateGallery();

                    });

                }


                moreBtn.addEventListener('click', () => {

                    gState.expanded = !gState.expanded;

                    moreBtn.setAttribute(
                        'aria-expanded',
                        gState.expanded
                    );

                    moreBtn.querySelector('span').textContent =
                        gState.expanded ?
                        'Show Fewer Photos' :
                        'View More Photos';

                    updateGallery();

                });


                updateGallery();


                /* PHOTO LIGHTBOX */

                const lbEl = document.getElementById('galleryLightbox');

                if (lbEl && hasBootstrap) {

                    const lightbox =
                        bootstrap.Modal.getOrCreateInstance(lbEl);

                    const lbImg = document.getElementById('lightboxImg');

                    const lbTitle = document.getElementById('lightboxTitle');

                    const lbDate = document.getElementById('lightboxDate');

                    const lbCount = document.getElementById('lightboxCount');

                    const lbPrev = document.getElementById('lightboxPrev');

                    const lbNext = document.getElementById('lightboxNext');


                    let current = 0;


                    const visiblePhotos = () =>
                        photos.filter(photo =>
                            !photo.classList.contains('d-none')
                        );


                    function renderPhoto() {

                        const list = visiblePhotos();

                        if (!list.length) return;

                        current = (current + list.length) % list.length;

                        const item = list[current];

                        const img = item.querySelector('.gallery-img');


                        lbImg.src = img.currentSrc || img.src;

                        lbImg.alt = img.alt;

                        lbTitle.textContent =
                            item.querySelector('h6').textContent.trim();

                        lbDate.textContent =
                            item.querySelector('small').textContent.trim();

                        lbCount.textContent =
                            (current + 1) + ' / ' + list.length;


                        lbPrev.classList.toggle('d-none', list.length < 2);

                        lbNext.classList.toggle('d-none', list.length < 2);

                    }


                    function openLightbox(item) {

                        current = visiblePhotos().indexOf(item);

                        renderPhoto();

                        lightbox.show();

                    }


                    /* KEYBOARD SUPPORT */

                    photos.forEach(photo => {

                        const img = photo.querySelector('.gallery-img');

                        img.tabIndex = 0;

                        img.setAttribute('role', 'button');

                        img.setAttribute(
                            'aria-label',
                            'View larger photo: ' +
                            photo.querySelector('h6').textContent.trim()
                        );

                    });


                    galleryRow.addEventListener('click', e => {

                        const img = e.target.closest('.gallery-img');

                        if (img) {
                            openLightbox(img.closest('.gallery-item'));
                        }

                    });


                    galleryRow.addEventListener('keydown', e => {

                        const img = e.target.closest('.gallery-img');

                        if (img && (e.key === 'Enter' || e.key === ' ')) {

                            e.preventDefault();

                            openLightbox(img.closest('.gallery-item'));

                        }

                    });


                    lbPrev.addEventListener('click', () => {

                        current--;

                        renderPhoto();

                    });


                    lbNext.addEventListener('click', () => {

                        current++;

                        renderPhoto();

                    });


                    document.addEventListener('keydown', e => {

                        if (!lbEl.classList.contains('show')) return;

                        if (e.key === 'ArrowLeft') {

                            current--;

                            renderPhoto();

                        }

                        if (e.key === 'ArrowRight') {

                            current++;

                            renderPhoto();

                        }

                    });


                    /* TOUCH SWIPE */

                    let touchX = null;

                    lbImg.addEventListener('touchstart', e => {

                        touchX = e.changedTouches[0].clientX;

                    }, {
                        passive: true
                    });


                    lbImg.addEventListener('touchend', e => {

                        if (touchX === null) return;

                        const dx = e.changedTouches[0].clientX - touchX;

                        if (Math.abs(dx) > 50) {

                            current += dx < 0 ? 1 : -1;

                            renderPhoto();

                        }

                        touchX = null;

                    }, {
                        passive: true
                    });


                    lbEl.addEventListener('hidden.bs.modal', () => {

                        lbImg.src = '';

                    });

                }

            }


            /* BACK TO TOP */

            const backToTop = document.getElementById('backToTop');

            if (backToTop) {

                window.addEventListener('scroll', () => {

                    backToTop.classList.toggle(
                        'show',
                        window.scrollY > 400
                    );

                }, {
                    passive: true
                });


                backToTop.addEventListener('click', () => {

                    window.scrollTo({
                        top: 0,
                        behavior: reduceMotion ? 'auto' : 'smooth'
                    });

                });

            }

        });
    </script>


    <!-- LEAFLET JAVASCRIPT -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


    <!-- SECOND JAVASCRIPT: DISTRIBUTION MAP AND DETAILS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const mapElement = document.getElementById('distributionMap');

            if (!mapElement || typeof L === 'undefined') return;


            const reduceMotion =
                window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            const hasBootstrap = typeof bootstrap !== 'undefined';

            const $ = (id) => document.getElementById(id);


            const DEFAULT_CENTER = [7.3081, 125.6682];

            const DEFAULT_ZOOM = 11;

            const LOCATION = 'Panabo City, Davao del Norte';

            const mapCard = mapElement.closest('.distribution-map-card');


            /* MAP INITIALIZATION */

            const map = L.map('distributionMap').setView(
                DEFAULT_CENTER,
                DEFAULT_ZOOM
            );


            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

                attribution: '&copy; OpenStreetMap contributors',

                maxZoom: 19

            }).addTo(map);


            /* DISTRIBUTION TYPES */

            const TYPE_INFO = {

                food_packs: {

                    label: 'Food Packs',

                    color: '#328CC1',

                    cost: '₱500 per food pack',

                    includesLabel: 'Food Pack Includes',

                    includes: [
                        '5 kg Rice',
                        '4 Cans of Canned Goods',
                        '2 Packs Noodles',
                        '1 Liter Cooking Oil',
                        'Other Essential Food Items'
                    ]

                },

                meals: {

                    label: 'Prepared Meals',

                    color: '#28a745',

                    cost: '₱100 per meal',

                    includesLabel: 'Meal Includes',

                    includes: [
                        'Rice',
                        'Protein',
                        'Vegetables',
                        'Fruit',
                        'Drinking Water'
                    ]

                }

            };


            /* ALL DISTRIBUTION DATA RESET TO ZERO */

            const distributions = [

                {
                    id: 'tagpore',
                    barangay: 'Tagpore',
                    title: 'Feed Families in Tagpore',
                    type: 'food_packs',
                    provided: 0,
                    goal: 100,
                    unit: 'packs',
                    needed: 'January 1, 2027',
                    lat: 7.2743,
                    lng: 125.6250
                },

                {
                    id: 'buenavista',
                    barangay: 'Buenavista',
                    title: 'Fresh Meals for Children in Buenavista',
                    type: 'meals',
                    provided: 0,
                    goal: 100,
                    unit: 'meals',
                    needed: 'January 1, 2027',
                    lat: 7.2756,
                    lng: 125.5907
                },

                {
                    id: 'maduao',
                    barangay: 'Maduao',
                    title: 'Life-Saving Food in Maduao',
                    type: 'food_packs',
                    provided: 0,
                    goal: 120,
                    unit: 'packs',
                    needed: 'January 1, 2027',
                    lat: 7.2796,
                    lng: 125.6433
                },

                {
                    id: 'nanyo',
                    barangay: 'Nanyo',
                    title: 'Warm Cooked Meals for Nanyo Families',
                    type: 'meals',
                    provided: 0,
                    goal: 100,
                    unit: 'meals',
                    needed: 'January 1, 2027',
                    lat: 7.3329,
                    lng: 125.6361
                },

                {
                    id: 'katualan',
                    barangay: 'Katualan',
                    title: 'Food Packs for Katualan Families',
                    type: 'food_packs',
                    provided: 0,
                    goal: 100,
                    unit: 'packs',
                    needed: 'January 1, 2027',
                    lat: 7.2301,
                    lng: 125.5543
                },

                {
                    id: 'new-malaga',
                    barangay: 'New Malaga',
                    title: 'Hot Meals for New Malaga Families',
                    type: 'meals',
                    provided: 0,
                    goal: 100,
                    unit: 'meals',
                    needed: 'January 1, 2027',
                    lat: 7.3442,
                    lng: 125.5725
                }

            ];


            /* CALCULATE PROGRESS AND STATUS */

            const byId = {};

            distributions.forEach(function(d) {

                d.percent = Math.min(
                    Math.round((d.provided / d.goal) * 100),
                    100
                );

                d.status = d.provided >= d.goal ?
                    'Completed' :
                    'Ongoing';

                byId[d.id] = d;

            });


            const statusBadgeClass = (status) => {

                return status === 'Completed' ?
                    'bg-success-subtle text-success-emphasis' :
                    'bg-primary-subtle text-primary-emphasis';

            };


            /* MAP MARKER STYLES */

            const BASE_STYLE = {

                radius: 10,

                weight: 2,

                color: '#ffffff'

            };


            const ACTIVE_STYLE = {

                radius: 15,

                weight: 4,

                color: '#0d4a6b'

            };


            const markers = {};

            const markerLayer = L.layerGroup().addTo(map);

            let activeId = null;


            /* SET ACTIVE MARKER */

            function setActive(id, options) {

                options = options || {};

                activeId = id;


                distributions.forEach(function(d) {

                    markers[d.id].setStyle(
                        d.id === id ? ACTIVE_STYLE : BASE_STYLE
                    );

                });


                if (markers[id]) {

                    markers[id].bringToFront();

                }


                document.querySelectorAll(
                    '#distributionList .distribution-card'
                ).forEach(function(card) {

                    const on = card.dataset.barangay === id;

                    card.classList.toggle('is-active', on);


                    if (on && options.scrollCard) {

                        card.scrollIntoView({

                            behavior: reduceMotion ? 'auto' : 'smooth',

                            block: 'nearest'

                        });

                    }

                });

            }


            /* CLEAR ACTIVE MARKER */

            function clearActive() {

                activeId = null;


                distributions.forEach(function(d) {

                    markers[d.id].setStyle(BASE_STYLE);

                });


                document.querySelectorAll(
                    '#distributionList .distribution-card'
                ).forEach(function(card) {

                    card.classList.remove('is-active');

                });

            }


            /* CREATE MAP MARKERS */

            distributions.forEach(function(d) {

                const info = TYPE_INFO[d.type];


                const marker = L.circleMarker(
                    [d.lat, d.lng], {

                        radius: BASE_STYLE.radius,

                        color: BASE_STYLE.color,

                        weight: BASE_STYLE.weight,

                        fillColor: info.color,

                        fillOpacity: 1

                    }
                );


                marker.bindPopup(`

                    <div class="distribution-popup">

                        <h6>Barangay ${d.barangay}</h6>

                        <p>
                            <strong>Activity:</strong>
                            ${d.title}
                        </p>

                        <p>
                            <strong>Distribution:</strong>
                            ${info.label}
                        </p>

                        <p>
                            <strong>Provided:</strong>
                            ${d.provided} ${d.unit}
                        </p>

                        <p>
                            <strong>Goal:</strong>
                            ${d.goal} ${d.unit}
                        </p>

                        <p>
                            <strong>Progress:</strong>
                            ${d.percent}%
                        </p>

                        <p>
                            <strong>Status:</strong>
                            ${d.status}
                        </p>

                        <p>
                            <strong>Date:</strong>
                            ${d.needed}
                        </p>

                        <p class="text-muted">
                            <small>
                                Pin represents a barangay reference location.
                            </small>
                        </p>

                    </div>

                `);


                marker.on('click', function() {

                    setActive(d.id, {
                        scrollCard: true
                    });

                });


                marker.on('popupclose', function() {

                    if (activeId === d.id) {

                        clearActive();

                    }

                });


                markers[d.id] = marker;

            });


            /* FIT VISIBLE MARKERS */

            function fitVisibleMarkers(visible) {

                if (visible.length === 0) {

                    map.setView(DEFAULT_CENTER, DEFAULT_ZOOM);

                    return;

                }


                const bounds = L.latLngBounds(

                    visible.map(function(d) {

                        return [d.lat, d.lng];

                    })

                );


                map.fitBounds(bounds, {

                    padding: [40, 40],

                    maxZoom: 13

                });

            }


            /* SEARCH AND FILTER DISTRIBUTIONS */

            function filterDistributions() {

                const search = $('barangaySearch') ?
                    $('barangaySearch').value.toLowerCase().trim() :
                    '';


                const selectedType = $('distributionType') ?
                    $('distributionType').value :
                    '';


                const selectedStatus = $('distributionStatus') ?
                    $('distributionStatus').value :
                    '';


                const visible = [];

                markerLayer.clearLayers();


                distributions.forEach(function(d) {

                    const matchesSearch =

                        d.barangay.toLowerCase().includes(search) ||

                        d.title.toLowerCase().includes(search);


                    const matchesType =

                        selectedType === '' ||
                        d.type === selectedType;


                    const matchesStatus =

                        selectedStatus === '' ||
                        d.status === selectedStatus;


                    if (
                        matchesSearch &&
                        matchesType &&
                        matchesStatus
                    ) {

                        visible.push(d);

                        markerLayer.addLayer(markers[d.id]);

                    }

                });


                /* FILTER DISTRIBUTION CARDS */

                document.querySelectorAll(
                    '#distributionList .distribution-card'
                ).forEach(function(card) {

                    const d = byId[card.dataset.barangay];

                    card.classList.toggle(
                        'd-none',
                        !d || !visible.includes(d)
                    );

                });


                if (activeId && !visible.includes(byId[activeId])) {

                    clearActive();

                }


                /* UPDATE BARANGAY COUNT */

                const count = $('barangayCount');

                if (count) {

                    count.textContent =
                        visible.length +
                        (visible.length === 1 ?
                            ' Barangay' :
                            ' Barangays');

                }


                /* NO RESULTS MESSAGE */

                const none = $('noDistributions');

                if (none) {

                    none.classList.toggle(
                        'd-none',
                        visible.length !== 0
                    );

                }


                fitVisibleMarkers(visible);

            }


            /* VIEW BARANGAY ON MAP */

            window.showDistribution = function(id) {

                const d = byId[id];

                if (!d) return;


                if ($('barangaySearch')) {

                    $('barangaySearch').value = '';

                }

                if ($('distributionType')) {

                    $('distributionType').value = '';

                }

                if ($('distributionStatus')) {

                    $('distributionStatus').value = '';

                }


                filterDistributions();


                map.setView(
                    [d.lat, d.lng],
                    15, {
                        animate: !reduceMotion
                    }
                );


                if (markers[id]) {

                    markers[id].openPopup();

                }


                setActive(id);


                if (window.innerWidth < 992) {

                    mapElement.scrollIntoView({

                        behavior: reduceMotion ? 'auto' : 'smooth',

                        block: 'center'

                    });

                }

            };


            /* DISTRIBUTION DETAILS MODAL */

            const modalEl = $('distributionModal');


            const detailsModal = modalEl && hasBootstrap

                ?
                bootstrap.Modal.getOrCreateInstance(modalEl)

                :
                null;


            let modalId = null;


            function openDetails(id) {

                const d = byId[id];

                if (!d || !detailsModal) return;


                const info = TYPE_INFO[d.type];


                $('distributionModalTitle').textContent = d.title;

                $('distributionModalSub').textContent =
                    'Barangay ' + d.barangay;


                const status = $('dmStatus');

                status.textContent = d.status;

                status.className =
                    'badge ' + statusBadgeClass(d.status);


                $('dmType').textContent = info.label;


                $('dmProgressText').textContent =

                    d.provided + ' / ' +
                    d.goal + ' ' +
                    d.unit + ' (' +
                    d.percent + '%)';


                const bar = $('dmBar');

                bar.style.width = '0%';

                bar.dataset.target = d.percent;

                bar.setAttribute('aria-valuenow', d.percent);


                $('dmLocation').textContent =

                    'Barangay ' + d.barangay + ', ' + LOCATION;


                $('dmDate').textContent = d.needed;

                $('dmIncludesLabel').textContent = info.includesLabel;

                $('dmCost').textContent = info.cost;


                /* UPDATE INCLUDED ITEMS */

                const list = $('dmIncludes');

                list.innerHTML = '';


                info.includes.forEach(function(item) {

                    const li = document.createElement('li');

                    li.textContent = item;

                    list.appendChild(li);

                });


                modalId = id;

                detailsModal.show();

            }


            if (modalEl && detailsModal) {

                modalEl.addEventListener('shown.bs.modal', function() {

                    const bar = $('dmBar');

                    bar.style.width = bar.dataset.target + '%';

                });


                $('dmViewMap').addEventListener('click', function() {

                    const id = modalId;


                    modalEl.addEventListener(
                        'hidden.bs.modal',
                        function() {

                            window.showDistribution(id);

                        }, {
                            once: true
                        }
                    );


                    detailsModal.hide();

                });

            }


            /* ADD DETAILS BUTTON AND UPDATE CARD DATA */

            document.querySelectorAll(
                '#distributionList .distribution-card'
            ).forEach(function(card) {

                const id = card.dataset.barangay;

                const d = byId[id];

                const mapBtn = card.querySelector(
                    '.distribution-location-btn'
                );


                if (!mapBtn || !d) return;


                /* UPDATE STATUS */

                const badge = card.querySelector('.badge');

                if (badge) {

                    badge.textContent = d.status;

                    badge.className =
                        'badge ' + statusBadgeClass(d.status);

                }


                /* UPDATE DISTRIBUTION AMOUNT */

                const amount = card.querySelector('.fw-semibold');

                if (amount) {

                    amount.textContent =
                        d.provided + ' / ' +
                        d.goal + ' ' +
                        d.unit;

                }


                /* UPDATE PROGRESS */

                const progress = card.querySelector('.progress-bar');

                if (progress) {

                    progress.style.width = d.percent + '%';

                    progress.setAttribute(
                        'aria-valuenow',
                        d.percent
                    );

                }


                /* CREATE DETAILS BUTTON */

                const detailsBtn = document.createElement('button');

                detailsBtn.type = 'button';

                detailsBtn.className = 'distribution-location-btn';

                detailsBtn.innerHTML =
                    'Details <i class="bi bi-info-circle ms-1"></i>';


                detailsBtn.addEventListener('click', function() {

                    openDetails(id);

                });


                /* GROUP BUTTONS */

                const group = document.createElement('div');

                group.className = 'd-flex gap-3';


                mapBtn.replaceWith(group);

                group.append(detailsBtn, mapBtn);

            });


            /* RESET MAP */

            const resetBtn = $('mapReset');

            if (resetBtn) {

                resetBtn.addEventListener('click', function() {

                    map.closePopup();

                    clearActive();


                    if (reduceMotion) {

                        map.setView(
                            DEFAULT_CENTER,
                            DEFAULT_ZOOM, {
                                animate: false
                            }
                        );

                    } else {

                        map.flyTo(
                            DEFAULT_CENTER,
                            DEFAULT_ZOOM, {
                                duration: 0.8
                            }
                        );

                    }

                });

            }


            /* FULLSCREEN MAP */

            const fsBtn = $('mapFullscreen');


            function setFullscreen(on) {

                if (!mapCard || !fsBtn) return;


                mapCard.classList.toggle('is-fullscreen', on);

                document.body.classList.toggle('map-fs-open', on);


                fsBtn.setAttribute('aria-pressed', on);

                fsBtn.title = on ?
                    'Exit fullscreen' :
                    'Fullscreen';


                fsBtn.innerHTML = on

                    ?
                    '<i class="bi bi-fullscreen-exit"></i>'

                    :
                    '<i class="bi bi-arrows-fullscreen"></i>';


                setTimeout(function() {

                    map.invalidateSize();

                }, 150);

            }


            if (fsBtn && mapCard) {

                fsBtn.addEventListener('click', function() {

                    setFullscreen(
                        !mapCard.classList.contains('is-fullscreen')
                    );

                });


                document.addEventListener('keydown', function(e) {

                    if (
                        e.key === 'Escape' &&
                        mapCard.classList.contains('is-fullscreen')
                    ) {

                        setFullscreen(false);

                    }

                });

            }


            /* FILTER EVENTS */

            if ($('filterDistributions')) {

                $('filterDistributions').addEventListener(
                    'click',
                    filterDistributions
                );

            }


            if ($('distributionType')) {

                $('distributionType').addEventListener(
                    'change',
                    filterDistributions
                );

            }


            if ($('distributionStatus')) {

                $('distributionStatus').addEventListener(
                    'change',
                    filterDistributions
                );

            }


            if ($('barangaySearch')) {

                $('barangaySearch').addEventListener(
                    'input',
                    filterDistributions
                );

            }


            /* INITIAL DISPLAY */

            filterDistributions();


            setTimeout(function() {

                map.invalidateSize();

                fitVisibleMarkers(

                    distributions.filter(function(d) {

                        return markerLayer.hasLayer(markers[d.id]);

                    })

                );

            }, 200);

        });
    </script>

</body>

</html>