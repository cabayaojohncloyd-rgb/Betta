<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])

    <title>BETTA | Admin Causes/Projects</title>
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


            <div class="page-header">



                <h1>

                    Causes & Projects

                </h1>



            </div>





            <!-- SUMMARY -->
            <div class="row g-4 mb-4">

                <div class="col-md-4">
                    <div class="summary-card">

                        <p>Total Projects</p>

                        <h2>3</h2>

                        <span>All BETTA projects</span>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="summary-card">

                        <p>Total Causes</p>

                        <h2>8</h2>

                        <span>All BETTA causes</span>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="summary-card">

                        <p>Active Projects</p>

                        <h2>3</h2>

                        <span>Currently accepting support</span>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="summary-card">

                        <p>Active Causes</p>

                        <h2>6</h2>

                        <span>Currently accepting support</span>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="summary-card">

                        <p>Completed</p>

                        <h2>2</h2>

                        <span>Successfully completed</span>

                    </div>
                </div>


            </div>


            <!-- PROJECTS -->



            <div class="projects-container">

                <div class="projects-header">

                    <div>
                        <h3>All Causes & Projects</h3>
                        <p>Manage your current BETTA projects.</p>
                    </div>

                    <button type="button"
                        class="add-project-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#addProjectModal">
                        + Add Project
                    </button>

                </div>

                <!-- SEARCH + STATUS FILTER (added) -->
                <div class="row g-2 mb-4">
                    <div class="col-md-8">
                        <input type="search" id="projectSearch" class="form-control"
                            placeholder="Search by project name or barangay...">
                    </div>
                    <div class="col-md-4">
                        <select id="projectStatusFilter" class="form-select">
                            <option value="all">All Projects</option>
                            <option value="active">Active</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">

                    <!-- PROJECT 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fam1.jpg') }}" alt="Community Pantry">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Feed families in Tagpore</h4>

                                <p>
                                    Your support funds complete grocery packs, providing local
                                    families with essential, nutritious food daily.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>80 meals provided</span>
                                        <span>100 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject1">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/childeating.jpg') }}" alt="Fresh Meals for Children">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Help Us Serve Fresh Meals to Children in Buenavista</h4>

                                <p>
                                    Your support funds daily, nutrient-rich meals, helping local
                                    children stay healthy, focused, and nourished.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>60 meals provided</span>
                                        <span>100 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 60%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject2">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fam2.jpg') }}" alt="Food Packs">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Donate life-saving food in Maduao</h4>

                                <p>
                                    Your generosity delivers essential food packs,
                                    providing immediate hunger relief and hope to vulnerable households.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>50 meals provided</span>
                                        <span>120 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 41.6%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject3">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fam5.jpg') }}" alt="Warm Cooked Meals">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Warm Cooked Meals for Nanyo Families</h4>

                                <p>
                                    Bringing healthy, nutritious meals and direct support
                                    to families in need across "Location".
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>50 meals provided</span>
                                        <span>100 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject4">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fam4.jpg') }}" alt="Food Packs">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Food Packs for Katualan Families</h4>

                                <p>
                                    Giving essential food items and direct support to needy
                                    families living across all of "Location".
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>30 meals provided</span>
                                        <span>100 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 30%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject5">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fam6.jpg') }}" alt="Hot Meals">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Hot Meals for New Malaga Families</h4>

                                <p>
                                    Giving good food and real help to needy families
                                    in Davao City.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>25 meals provided</span>
                                        <span>100 meals goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 25%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject6">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>


                <!-- LONG-TERM PROJECTS -->
                <br>

                <div class="row g-4">

                    <!-- PROJECT 7 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/chicken.jpg') }}" alt="Neighborhood Cluster Poultry Coops">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Neighborhood Cluster Poultry Coops</h4>

                                <p>
                                    Establishes 10 shared neighborhood coops, providing 100
                                    families with a continuous supply of fresh food and shared income.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>250,000 provided</span>
                                        <span>125,500 goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50.2%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject7">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 8 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/seed1.jpg') }}" alt="Community Seed Libraries">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Community Seed Libraries & Composting Hubs</h4>

                                <p>
                                    Provides free seeds and organic compost to local families,
                                    enabling continuous home gardening through a shared community-borrowing model.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>53,000 provided</span>
                                        <span>100,000 goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 53%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject8">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- PROJECT 9 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/fimg3.jpg') }}" alt="Coconut and Fruit Tree Nursery">
                            </div>

                            <div class="project-content">

                                <span class="project-status active">
                                    Active
                                </span>

                                <h4>Barangay Shared Coconut & Fruit Tree Nursery</h4>

                                <p>
                                    Grows fruit and coconut saplings for families, providing
                                    climate-resilient food and long-term income.
                                </p>

                                <div class="project-progress">

                                    <div class="progress-info">
                                        <span>97,000 provided</span>
                                        <span>150,000 goal</span>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 64.67%;"></div>
                                    </div>

                                </div>

                                <div class="project-actions">
                                    <button class="edit-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editProject9">
                                        Edit
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>


            <!-- EDIT PROJECT 1 -->
            <div class="modal fade" id="editProject1" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Feed families in Tagpore'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Your support funds complete grocery packs, providing local families with essential, nutritious food daily.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="80">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides nutritious food packs to families experiencing food insecurity in the local community.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">Tagpore Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">October 25, 2026</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Food Pack Includes</label>
                                    <textarea class="form-control" rows="6">5 kg Rice
4 Cans of Canned Goods
2 Packs Noodles
1 Liter Cooking Oil
Other Essential Food Items</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per food pack">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 2 -->
            <div class="modal fade" id="editProject2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Help Us Serve Fresh Meals to Children in Buenavista'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Your support funds daily, nutrient-rich meals, helping local children stay healthy, focused, and nourished.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="60">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides fresh and nutritious meals to children who may not have regular access to healthy food.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">Buenavista Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">Nov 21, 2026</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meal Includes</label>
                                    <textarea class="form-control" rows="6">Rice
Protein or Meat
Vegetables
Fruit
Drinking Water</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per meal">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 3 -->
            <div class="modal fade" id="editProject3" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Donate life-saving food in Maduao'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Your generosity delivers essential food packs, providing immediate hunger relief and hope to vulnerable households.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="120">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="50">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides nutritious food packs to families experiencing food insecurity in the local community.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">Maduao Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">December 18, 2026</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Food Pack Includes</label>
                                    <textarea class="form-control" rows="6">5 kg Rice
4 Cans of Canned Goods
2 Packs Noodles
1 Liter Cooking Oil
Other Essential Food Items</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per food pack">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 4 -->
            <div class="modal fade" id="editProject4" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Warm Cooked Meals for Nanyo Families'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Bringing healthy, nutritious meals and direct support to families in need across "Location".</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="50">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides fresh and nutritious meals to children who may not have regular access to healthy food.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">Nanyo Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">November 30, 2026</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meal Includes</label>
                                    <textarea class="form-control" rows="6">Rice
Protein or Meat
Vegetables
Fruit
Drinking Water</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per meal">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 5 -->
            <div class="modal fade" id="editProject5" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Food Packs for Katualan Families'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Giving essential food items and direct support to needy families living across all of "Location".</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="30">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides nutritious food packs to families experiencing food insecurity in the local community.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">Katualan Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">January 5, 2027</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Food Pack Includes</label>
                                    <textarea class="form-control" rows="6">5 kg Rice
4 Cans of Canned Goods
2 Packs Noodles
1 Liter Cooking Oil
Other Essential Food Items</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per food pack">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 6 -->
            <div class="modal fade" id="editProject6" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value='Hot Meals for New Malaga Families'>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4">Giving good food and real help to needy families in Davao City.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number" class="form-control" value="100">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number" class="form-control" value="25">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides fresh and nutritious meals to children who may not have regular access to healthy food.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <textarea class="form-control" rows="1">New Malaga Panabo City Davao del Norte</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <textarea class="form-control" rows="1">January 18, 2027</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meal Includes</label>
                                    <textarea class="form-control" rows="6">Rice
Protein or Meat
Vegetables
Fruit
Drinking Water</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Estimated Cost</label>
                                    <input type="text" class="form-control" value="₱100 per meal">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 7 -->
            <div class="modal fade" id="editProject7" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <form id="editProjectForm7">

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value="Neighborhood Cluster Poultry Coops">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">Establishes 10 shared neighborhood poultry coops in selected barangays of Panabo City, providing 100 families with fresh food and additional income opportunities.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal (₱)</label>
                                        <input type="number" class="form-control" value="250000">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided (₱)</label>
                                        <input type="number" class="form-control" value="125500">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project establishes 10 shared neighborhood poultry coops in selected barangays of Panabo City, providing 100 families with a sustainable source of fresh food and opportunities for additional income.</textarea>
                                </div>

                                <h6 class="fw-bold mt-4 mb-3">Budget Breakdown</h6>

                                <div class="row g-3">

                                    <div class="col-md-8">
                                        <label class="form-label">Expense</label>
                                        <input type="text" class="form-control" value="Construction of 10 poultry coops">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Estimated Cost (₱)</label>
                                        <input type="number" class="form-control" value="95000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="150 chickens">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="18000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Chicken feeds">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="35000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Feeding and water containers">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="7000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Vitamins and vaccinations">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="10000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Equipment and maintenance materials">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="29000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Transportation and training">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="25000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Emergency fund">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="31000">
                                    </div>

                                </div>

                                <div class="mt-4">
                                    <label class="form-label fw-bold">Total Project Budget (₱)</label>
                                    <input type="number" class="form-control fw-bold" value="250000">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" form="editProjectForm7" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 8 -->
            <div class="modal fade" id="editProject8" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <form id="editProjectForm8">

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value="Community Seed Libraries & Composting Hubs">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">Provides free vegetable seeds and organic compost to families in selected barangays of Panabo City, promoting sustainable home gardening.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal (₱)</label>
                                        <input type="number" class="form-control" value="100000">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided (₱)</label>
                                        <input type="number" class="form-control" value="53000">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project provides free vegetable seeds and organic compost to families in selected barangays of Panabo City, promoting sustainable home gardening through shared community seed libraries and composting hubs.</textarea>
                                </div>

                                <h6 class="fw-bold mt-4 mb-3">Budget Breakdown</h6>

                                <div class="row g-3">

                                    <div class="col-md-8">
                                        <label class="form-label">Expense</label>
                                        <input type="text" class="form-control" value="Vegetable seeds">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Estimated Cost (₱)</label>
                                        <input type="number" class="form-control" value="15000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Seed storage and organizers">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="15000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Composting bins">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="15000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Organic fertilizers and soil">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="12500">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Gardening tools and equipment">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="20000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Community workshops">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="7500">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Transportation">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="5000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Emergency fund">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="10000">
                                    </div>

                                </div>

                                <div class="mt-4">
                                    <label class="form-label fw-bold">Total Project Budget (₱)</label>
                                    <input type="number" class="form-control fw-bold" value="100000">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" form="editProjectForm8" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>


            <!-- EDIT PROJECT 9 -->
            <div class="modal fade" id="editProject9" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <form id="editProjectForm9">

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control"
                                        value="Barangay Shared Coconut & Fruit Tree Nursery">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">Grows coconut and fruit tree seedlings in selected barangays of Panabo City, providing sustainable food sources and long-term livelihood opportunities.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal (₱)</label>
                                        <input type="number" class="form-control" value="150000">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided (₱)</label>
                                        <input type="number" class="form-control" value="97000">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea class="form-control" rows="4">This project establishes a community nursery in selected barangays of Panabo City, growing coconut and fruit tree seedlings to provide local families with sustainable food sources and long-term livelihood opportunities.</textarea>
                                </div>

                                <h6 class="fw-bold mt-4 mb-3">Budget Breakdown</h6>

                                <div class="row g-3">

                                    <div class="col-md-8">
                                        <label class="form-label">Expense</label>
                                        <input type="text" class="form-control" value="Nursery construction">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Estimated Cost (₱)</label>
                                        <input type="number" class="form-control" value="42000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="500 coconut and fruit seedlings">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="42000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Organic fertilizers and compost">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="10000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Planting bags and containers">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="5000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Gardening tools">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="7000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Watering equipment">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="14000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Transportation and training">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="15000">
                                    </div>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="Emergency fund">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" value="15000">
                                    </div>

                                </div>

                                <div class="mt-4">
                                    <label class="form-label fw-bold">Total Project Budget (₱)</label>
                                    <input type="number" class="form-control fw-bold" value="150000">
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" form="editProjectForm9" class="btn btn-primary">
                                Save Changes
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ADD PROJECT MODAL -->
            <div class="modal fade" id="addProjectModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Add Project</h5>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>
                        </div>

                        <div class="modal-body">

                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Enter project name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Short Description</label>
                                    <textarea
                                        class="form-control"
                                        rows="3"
                                        placeholder="Enter a short description of the project"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Project Image</label>
                                    <input type="file"
                                        class="form-control"
                                        accept="image/*">
                                </div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Goal</label>
                                        <input type="number"
                                            class="form-control"
                                            placeholder="Enter target amount">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Provided</label>
                                        <input type="number"
                                            class="form-control"
                                            value="0"
                                            min="0">
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>

                                    <select class="form-select">
                                        <option selected>Active</option>
                                        <option>Completed</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Overview</label>
                                    <textarea
                                        class="form-control"
                                        rows="5"
                                        placeholder="Explain the project and its purpose"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">What People Receive</label>
                                    <textarea
                                        class="form-control"
                                        rows="6"
                                        placeholder="Enter what beneficiaries will receive"></textarea>
                                    <small class="form-text text-muted">
                                        You can list each benefit on a separate line.
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Cost of One</label>
                                    <input type="text"
                                        class="form-control"
                                        placeholder="Example: ₱8,000 – ₱9,000 per setup">
                                </div>

                            </form>

                        </div>

                        <div class="modal-footer">

                            <button type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button"
                                class="btn btn-primary add-project-submit">
                                Add Project
                            </button>

                        </div>

                    </div>
                </div>
            </div>


            <!-- COMPLETED PROJECTS -->

            <div class="completed-projects">

                <div class="projects-header">

                    <div>

                        <h3>
                            Completed Projects
                        </h3>

                        <p>
                            Previous projects that have successfully reached their goals.
                        </p>

                    </div>

                </div>


                <div class="row g-4">


                    <!-- COMPLETED PROJECT 1 -->

                    <div class="col-lg-4 col-md-6">

                        <div class="project-card">

                            <div class="project-image">

                                <img
                                    src="{{ asset('images/dimg1.jpg') }}" alt="Community Meals">
                                alt="Community Meals">

                            </div>


                            <div class="project-content">

                                <span class="project-status completed">
                                    Completed
                                </span>


                                <h4>
                                    Community Meals
                                </h4>


                                <p>
                                    Provided prepared meals for families
                                    in underserved communities.
                                </p>


                                <div class="completed-info">

                                    <span>
                                        100 Meals Provided
                                    </span>

                                    <span>
                                        Goal reached
                                    </span>

                                </div>



                            </div>

                        </div>

                    </div>


                    <!-- COMPLETED PROJECT 2 -->

                    <div class="col-lg-4 col-md-6">

                        <div class="project-card">

                            <div class="project-image">

                                <img
                                    src="{{ asset('images/dimg2.jpg') }}" alt="Emergency Food Drive">
                                alt="Emergency Food Drive">

                            </div>


                            <div class="project-content">

                                <span class="project-status completed">
                                    Completed
                                </span>


                                <h4>
                                    Emergency Food Drive
                                </h4>


                                <p>
                                    Distributed emergency food supplies
                                    to families affected by flooding.
                                </p>


                                <div class="completed-info">

                                    <span>
                                        150 Meals Provided
                                    </span>

                                    <span>
                                        Goal reached
                                    </span>

                                </div>



                            </div>

                        </div>

                    </div>


                </div>

            </div>



    </div>

    </div>

    </main>

    </div>


    <!-- ================= PROJECT MANAGEMENT JAVASCRIPT ================= -->
    <script>
        /**
         * BETTA Admin – Causes / Projects
         * Pure JavaScript (Bootstrap 5 compatible). No PHP, no localStorage.
         * Place just before </body>, after the Bootstrap bundle has loaded.
         */
        (function() {
            'use strict';

            /* ------------------------------------------------------------------ *
             * CONFIG
             * ------------------------------------------------------------------ */
            const CONFIG = {
                MIN_DATE: '2027-01-10',
                MIN_DATE_LABEL: 'January 1, 2027',
                RESET_ON_LOAD: true, // reset all 9 active projects to 0 when page loads
                SHOW_PERCENT_TEXT: true, // show "80%" text inside the progress bar
                DEFAULT_DATES: {
                    1: '2027-01-01', // Tagpore
                    2: '2027-01-01', // Buenavista
                    3: '2027-01-01', // Maduao
                    4: '2027-01-01', // Nanyo
                    5: '2027-01-01', // Katualan
                    6: '2026-01-01', // New Malaga
                    7: '2027-01-01', // Poultry Coops
                    8: '2027-01-01', // Seed Libraries
                    9: '2027-01-01' // Tree Nursery
                },
                PLACEHOLDER_IMG: 'data:image/svg+xml;utf8,' + encodeURIComponent(
                    '<svg xmlns="http://www.w3.org/2000/svg" width="600" height="400"><rect width="100%" height="100%" fill="#e9ecef"/></svg>')
            };

            /* ------------------------------------------------------------------ *
             * HELPERS
             * ------------------------------------------------------------------ */
            const $ = (sel, root = document) => root.querySelector(sel);
            const $$ = (sel, root = document) => Array.from(root.querySelectorAll(sel));
            const fmt = n => Number(n).toLocaleString('en-US');
            const norm = t => t.replace(/\(.*?\)/g, '').replace(/\s+/g, ' ').trim().toLowerCase();

            /** Find the input/textarea/select that belongs to a .form-label (parentheses ignored). */
            function field(root, label) {
                const lab = $$('.form-label', root).find(l => norm(l.textContent) === label.toLowerCase());
                return lab ? lab.parentElement.querySelector('input, textarea, select') : null;
            }

            function setVal(el, v) {
                if (el) {
                    el.value = v;
                    el.defaultValue = v;
                }
            }

            /** Make the current form values the "default" so form.reset() restores saved values. */
            function commit(form) {
                $$('input:not([type=file]), textarea', form).forEach(el => {
                    el.defaultValue = el.value;
                });
                $$('select', form).forEach(s => Array.from(s.options).forEach(o => {
                    o.defaultSelected = o.selected;
                }));
            }

            /* ---- validation messages ---- */
            function clearErrors(root) {
                $$('.is-invalid', root).forEach(e => e.classList.remove('is-invalid'));
                $$('.js-error', root).forEach(e => e.remove());
            }

            function showError(input, msg) {
                input.classList.add('is-invalid');
                const d = document.createElement('div');
                d.className = 'invalid-feedback js-error';
                d.textContent = msg;
                input.insertAdjacentElement('afterend', d);
            }

            /* ------------------------------------------------------------------ *
             * STATE
             * ------------------------------------------------------------------ */
            const projects = []; // every tracked project
            const cardMap = new Map(); // .project-card -> project
            let nextId = 10;

            const activeRows = () => $$('.projects-container > .row');
            const completedRow = () => $('.completed-projects .row');

            /* ------------------------------------------------------------------ *
             * CALCULATIONS
             * ------------------------------------------------------------------ */
            function percent(p) {
                if (!(p.goal > 0) || !(p.provided >= 0)) return 0;
                return Math.round(Math.min(100, p.provided / p.goal * 100) * 100) / 100;
            }

            function autoStatus(p) {
                p.status = (p.goal > 0 && p.provided >= p.goal) ? 'Completed' : 'Active';
            }

            /* ------------------------------------------------------------------ *
             * RENDER ONE CARD
             * ------------------------------------------------------------------ */
            function render(p) {
                const c = p.card,
                    pct = percent(p);
                const done = p.status === 'Completed';

                $('h4', c).textContent = p.name;
                $('.project-content > p', c).textContent = p.description;

                const badge = $('.project-status', c);
                badge.textContent = p.status;
                badge.className = 'project-status ' + (done ? 'completed' : 'active');

                const [provSpan, goalSpan] = $$('.progress-info span', c);
                if (p.type === 'money') {
                    provSpan.textContent = '₱' + fmt(p.provided) + ' provided';
                    goalSpan.textContent = '₱' + fmt(p.goal) + ' goal';
                } else {
                    provSpan.textContent = fmt(p.provided) + ' meals provided';
                    goalSpan.textContent = fmt(p.goal) + ' meals goal';
                }

                const bar = $('.progress-bar', c);
                bar.style.width = pct + '%';
                bar.setAttribute('role', 'progressbar');
                bar.setAttribute('aria-valuenow', pct);
                bar.setAttribute('aria-valuemin', 0);
                bar.setAttribute('aria-valuemax', 100);
                bar.textContent = (CONFIG.SHOW_PERCENT_TEXT && pct > 0) ? Math.round(pct) + '%' : '';

                c.dataset.search = (p.name + ' ' + p.description + ' ' + p.location).toLowerCase();

                // Move between Active rows and Completed section
                const wrapper = c.parentElement;
                const target = done ? completedRow() : p.homeRow;
                if (target && wrapper.parentElement !== target) target.appendChild(wrapper);
            }

            /** Push state values into the modal inputs (and make them the reset defaults). */
            function syncFields(p) {
                setVal(field(p.modal, 'Goal'), p.goal);
                setVal(field(p.modal, 'Provided'), p.provided);
                const date = field(p.modal, 'Date');
                if (date && p.date) setVal(date, p.date);
                const st = field(p.modal, 'Status');
                if (st) st.value = p.status;
                commit(p.form);
            }

            /* ------------------------------------------------------------------ *
             * SUMMARY CARDS
             * ------------------------------------------------------------------ */
            function updateStats() {
                let totalP = 0,
                    totalC = 0,
                    activeP = 0,
                    activeC = 0,
                    completed = 0;
                $$('.project-card').forEach(c => {
                    const p = cardMap.get(c);
                    const isMeal = p ? p.type === 'meal' : /meal/i.test(c.textContent);
                    const isDone = $('.project-status', c).classList.contains('completed');
                    if (isMeal) {
                        totalC++;
                        if (!isDone) activeC++;
                    } else {
                        totalP++;
                        if (!isDone) activeP++;
                    }
                    if (isDone) completed++;
                });
                const values = {
                    'Total Projects': totalP,
                    'Total Causes': totalC,
                    'Active Projects': activeP,
                    'Active Causes': activeC,
                    'Completed': completed
                };
                $$('.summary-card').forEach(s => {
                    const key = $('p', s).textContent.trim();
                    if (key in values) $('h2', s).textContent = values[key];
                });
            }

            /* ------------------------------------------------------------------ *
             * SEARCH + STATUS FILTER
             * ------------------------------------------------------------------ */
            function applyFilters() {
                const search = $('#projectSearch'),
                    filter = $('#projectStatusFilter');
                const q = search ? search.value.trim().toLowerCase() : '';
                const f = filter ? filter.value : 'all';
                let visible = 0;

                $$('.project-card').forEach(c => {
                    const done = $('.project-status', c).classList.contains('completed');
                    const text = c.dataset.search || c.textContent.toLowerCase();
                    const show = (f === 'all' || (f === 'completed') === done) && text.includes(q);
                    c.parentElement.classList.toggle('d-none', !show);
                    if (show) visible++;
                });

                const section = $('.completed-projects');
                if (section) {
                    section.classList.toggle('d-none', $$('.project-card:not(.d-none)', section)
                        .filter(c => !c.parentElement.classList.contains('d-none')).length === 0);
                }

                let msg = $('#noProjectsMessage');
                if (!msg) {
                    msg = document.createElement('div');
                    msg.id = 'noProjectsMessage';
                    msg.className = 'alert alert-light text-center d-none my-4';
                    msg.textContent = 'No projects found matching your search.';
                    (section || $('.projects-container')).insertAdjacentElement(section ? 'beforebegin' : 'afterend', msg);
                }
                msg.classList.toggle('d-none', visible > 0);
            }

            function refresh() {
                updateStats();
                applyFilters();
            }

            /* ------------------------------------------------------------------ *
             * VALIDATION (shared by Edit + Add)
             * ------------------------------------------------------------------ */
            function validate(root, isNew) {
                clearErrors(root);
                let ok = true;
                const bad = (el, msg) => {
                    if (el) showError(el, msg);
                    ok = false;
                };

                const fName = field(root, 'Project Name');
                const fDesc = field(root, isNew ? 'Short Description' : 'Description');
                const fGoal = field(root, 'Goal');
                const fProv = field(root, 'Provided');
                const fDate = field(root, 'Date');
                const fLoc = field(root, 'Location');
                const fStat = field(root, 'Status');

                const name = fName.value.trim();
                const description = fDesc.value.trim();
                if (!name) bad(fName, 'Project name is required.');
                if (!description) bad(fDesc, 'Description is required.');

                const goal = parseFloat(fGoal.value);
                if (!isFinite(goal) || goal <= 0) bad(fGoal, 'Goal must be greater than zero.');

                const provided = parseFloat(fProv.value);
                if (!isFinite(provided) || provided < 0) bad(fProv, 'Provided must be 0 or more (no negative numbers).');
                else if (isFinite(goal) && goal > 0 && provided > goal)
                    bad(fProv, 'Provided cannot exceed the goal (' + fmt(goal) + ').');

                const date = fDate.value;
                if (!date || isNaN(Date.parse(date))) bad(fDate, 'Please choose a valid date.');
                else if (date < CONFIG.MIN_DATE) bad(fDate, 'Date cannot be earlier than ' + CONFIG.MIN_DATE_LABEL + '.');

                const location = fLoc ? fLoc.value.trim() : '';
                if (isNew && !location) bad(fLoc, 'Location (barangay) is required.');

                return ok ? {
                    name,
                    description,
                    goal,
                    provided,
                    date,
                    location,
                    status: fStat.value
                } : null;
            }

            /* ------------------------------------------------------------------ *
             * SAVE (Edit modal)
             * ------------------------------------------------------------------ */
            function save(p) {
                const v = validate(p.modal, false);
                if (!v) return;

                let provided = v.provided;
                // Admin switched to Completed -> mark goal as reached
                if (v.status === 'Completed' && p.status !== 'Completed' && provided < v.goal) provided = v.goal;
                // Goal reached -> cannot be set back to Active without lowering Provided
                if (v.status === 'Active' && p.status === 'Completed' && provided >= v.goal) {
                    showError(field(p.modal, 'Status'),
                        'The goal is reached, so this project stays Completed. Lower the Provided value to reopen it.');
                    return;
                }

                p.name = v.name;
                p.goal = v.goal;
                p.provided = provided;
                p.date = v.date;
                p.location = v.location;
                if (v.description !== p.descModal) {
                    p.description = v.description;
                    p.descModal = v.description;
                }
                autoStatus(p);

                const file = field(p.modal, 'Project Image').files[0];
                if (file) $('img', p.card).src = URL.createObjectURL(file);

                syncFields(p);
                render(p);
                refresh();
                bootstrap.Modal.getOrCreateInstance(p.modal).hide();
            }

            /* ------------------------------------------------------------------ *
             * REGISTER A PROJECT (used for the 9 existing + new ones)
             * ------------------------------------------------------------------ */
            function bindModal(p) {
                p.modal.addEventListener('show.bs.modal', () => {
                    p.form.reset();
                    clearErrors(p.modal);
                });
                p.form.addEventListener('submit', e => e.preventDefault());
                $('.modal-footer .btn-primary', p.modal).addEventListener('click', e => {
                    e.preventDefault();
                    save(p);
                });
            }

            function ensureDateInput(root, value) {
                let el = field(root, 'Date');
                if (!el) return null;
                if (el.tagName !== 'INPUT') {
                    const input = document.createElement('input');
                    input.type = 'date';
                    input.className = 'form-control';
                    el.replaceWith(input);
                    el = input;
                }
                el.min = CONFIG.MIN_DATE;
                if (value) setVal(el, value);
                return el;
            }

            function register(p) {
                projects.push(p);
                cardMap.set(p.card, p);
                p.form = $('form', p.modal);
                ['Goal', 'Provided'].forEach(l => {
                    const f = field(p.modal, l);
                    f.min = l === 'Goal' ? 1 : 0;
                    f.step = 'any';
                });
                bindModal(p);
            }

            function registerExisting(n) {
                const modal = $('#editProject' + n);
                const btn = $('[data-bs-target="#editProject' + n + '"]');
                if (!modal || !btn) return;
                const card = btn.closest('.project-card');
                const goalLabel = $$('.form-label', modal).find(l => norm(l.textContent) === 'goal');
                const p = {
                    id: n,
                    builtIn: true,
                    card,
                    modal,
                    name: $('h4', card).textContent.trim(),
                    description: $('.project-content > p', card).textContent.replace(/\s+/g, ' ').trim(),
                    descModal: field(modal, 'Description').value.trim(),
                    goal: parseFloat(field(modal, 'Goal').value),
                    provided: parseFloat(field(modal, 'Provided').value),
                    type: goalLabel && goalLabel.textContent.includes('₱') ? 'money' : 'meal',
                    location: field(modal, 'Location') ? field(modal, 'Location').value.trim() : '',
                    date: CONFIG.DEFAULT_DATES[n],
                    status: 'Active',
                    homeRow: card.closest('.row')
                };
                ensureDateInput(modal, p.date);
                register(p);
            }

            /* ------------------------------------------------------------------ *
             * 1. RESET ALL PROGRESS (goals & budgets unchanged)
             * ------------------------------------------------------------------ */
            function resetAllProgress() {
                projects.filter(p => p.builtIn).forEach(p => {
                    p.provided = 0;
                    autoStatus(p);
                    syncFields(p);
                    render(p);
                });
                refresh();
            }
            window.resetAllProjectProgress = resetAllProgress; // callable from console / a button

            /* ------------------------------------------------------------------ *
             * 5. ADD NEW PROJECT
             * ------------------------------------------------------------------ */
            const cardHTML = id => `
    <div class="project-card">
      <div class="project-image"><img src="${CONFIG.PLACEHOLDER_IMG}" alt="Project"></div>
      <div class="project-content">
        <span class="project-status active">Active</span>
        <h4></h4>
        <p></p>
        <div class="project-progress">
          <div class="progress-info"><span></span><span></span></div>
          <div class="progress"><div class="progress-bar" style="width: 0%;"></div></div>
        </div>
        <div class="project-actions">
          <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#editProject${id}">Edit</button>
        </div>
      </div>
    </div>`;

            const modalHTML = money => `
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable"><div class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Edit Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body"><form>
        <div class="mb-3"><label class="form-label">Project Name</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Description</label><textarea class="form-control" rows="3"></textarea></div>
        <div class="mb-3"><label class="form-label">Project Image</label><input type="file" class="form-control" accept="image/*"></div>
        <div class="row">
          <div class="col-md-6 mb-3"><label class="form-label">Goal${money ? ' (₱)' : ''}</label><input type="number" class="form-control"></div>
          <div class="col-md-6 mb-3"><label class="form-label">Provided${money ? ' (₱)' : ''}</label><input type="number" class="form-control"></div>
        </div>
        <div class="mb-3"><label class="form-label">Status</label>
          <select class="form-select"><option>Active</option><option>Completed</option></select></div>
        <div class="mb-3"><label class="form-label">Overview</label><textarea class="form-control" rows="4"></textarea></div>
        <div class="mb-3"><label class="form-label">Location</label><input type="text" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Date</label><input type="date" class="form-control"></div>
        <div class="mb-3"><label class="form-label">What People Receive</label><textarea class="form-control" rows="5"></textarea></div>
        <div class="mb-3"><label class="form-label">Cost of One</label><input type="text" class="form-control"></div>
      </form></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div></div>`;

            function createProject(v, type, extras) {
                const id = nextId++;
                const addModal = $('#addProjectModal');

                const wrap = document.createElement('div');
                wrap.className = 'col-lg-4 col-md-6';
                wrap.innerHTML = cardHTML(id);
                const rows = activeRows();
                const homeRow = rows[rows.length - 1];
                homeRow.appendChild(wrap);
                const card = $('.project-card', wrap);
                if (extras.file) $('img', card).src = URL.createObjectURL(extras.file);

                const modal = document.createElement('div');
                modal.className = 'modal fade';
                modal.id = 'editProject' + id;
                modal.tabIndex = -1;
                modal.innerHTML = modalHTML(type === 'money');
                addModal.parentElement.appendChild(modal);

                const p = {
                    id,
                    builtIn: false,
                    card,
                    modal,
                    homeRow,
                    type,
                    name: v.name,
                    description: v.description,
                    descModal: v.description,
                    goal: v.goal,
                    provided: 0,
                    location: v.location,
                    date: v.date,
                    status: 'Active'
                };

                setVal(field(modal, 'Project Name'), v.name);
                setVal(field(modal, 'Description'), v.description);
                setVal(field(modal, 'Overview'), extras.overview);
                setVal(field(modal, 'Location'), v.location);
                setVal(field(modal, 'What People Receive'), extras.receive);
                setVal(field(modal, 'Cost of One'), extras.cost);
                ensureDateInput(modal, v.date);

                register(p);
                autoStatus(p);
                syncFields(p);
                render(p);
                refresh();
            }

            function setupAddModal() {
                const modal = $('#addProjectModal');
                if (!modal) return;
                const form = $('form', modal);

                // Inject Project Type, Location and Date fields (the Add modal doesn't have them)
                const mk = (label, el) => {
                    const d = document.createElement('div');
                    d.className = 'mb-3';
                    const l = document.createElement('label');
                    l.className = 'form-label';
                    l.textContent = label;
                    d.append(l, el);
                    return d;
                };
                const typeSel = document.createElement('select');
                typeSel.className = 'form-select';
                typeSel.innerHTML = '<option value="meal">Meals / Food Packs (counted in meals)</option>' +
                    '<option value="money">Financial (counted in ₱)</option>';
                const loc = document.createElement('input');
                loc.type = 'text';
                loc.className = 'form-control';
                loc.placeholder = 'Example: Tagpore, Panabo City';
                const date = document.createElement('input');
                date.type = 'date';
                date.className = 'form-control';
                date.min = CONFIG.MIN_DATE;

                const statusSel = field(modal, 'Status');
                statusSel.closest('.mb-3').after(mk('Project Type', typeSel), mk('Location', loc), mk('Date', date));

                // New projects always start at 0 and Active
                const prov = field(modal, 'Provided');
                prov.value = 0;
                prov.defaultValue = '0';
                prov.readOnly = true;
                field(modal, 'Goal').min = 1;
                statusSel.value = 'Active';
                statusSel.disabled = true;

                modal.addEventListener('show.bs.modal', () => {
                    form.reset();
                    clearErrors(modal);
                });

                $('.add-project-submit', modal).addEventListener('click', () => {
                    const v = validate(modal, true);
                    if (!v) return;
                    createProject(v, typeSel.value, {
                        overview: field(modal, 'Overview').value.trim(),
                        receive: field(modal, 'What People Receive').value.trim(),
                        cost: field(modal, 'Cost of One').value.trim(),
                        file: field(modal, 'Project Image').files[0]
                    });
                    bootstrap.Modal.getOrCreateInstance(modal).hide();
                    form.reset();
                });
            }

            /* ------------------------------------------------------------------ *
             * GLOBAL INPUT GUARDS (inside any modal)
             * ------------------------------------------------------------------ */
            function setupInputGuards() {
                document.addEventListener('keydown', e => {
                    const t = e.target;
                    if (t.type === 'number' && t.closest('.modal') && ['-', '+', 'e', 'E'].includes(e.key)) e.preventDefault();
                });
                document.addEventListener('input', e => {
                    const t = e.target;
                    if (!t.closest || !t.closest('.modal')) return;
                    t.classList.remove('is-invalid');
                    const nxt = t.nextElementSibling;
                    if (nxt && nxt.classList.contains('js-error')) nxt.remove();
                    if (t.type === 'number' && parseFloat(t.value) < 0) t.value = 0;
                });
            }

            /* ------------------------------------------------------------------ *
             * INIT
             * ------------------------------------------------------------------ */
            function init() {
                for (let n = 1; n <= 9; n++) registerExisting(n);

                projects.forEach(p => {
                    syncFields(p);
                    render(p);
                });
                if (CONFIG.RESET_ON_LOAD) resetAllProgress();

                setupAddModal();
                setupInputGuards();

                const search = $('#projectSearch'),
                    filter = $('#projectStatusFilter');
                if (search) search.addEventListener('input', applyFilters);
                if (filter) filter.addEventListener('change', applyFilters);
                if (!search || !filter) console.warn('Add the search/filter HTML (#projectSearch, #projectStatusFilter).');

                refresh();
            }

            if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
            else init();
        })();
    </script>

</body>

</html>