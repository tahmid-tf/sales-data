<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard</title>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        crossorigin="anonymous"
    ></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css"
        rel="stylesheet"
    />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}"/>
    <script
        data-search-pseudo-elements
        defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        crossorigin="anonymous"
    ></script>
</head>
<body class="nav-fixed">
<nav
    class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion"
>
    <!-- Sidenav Toggle Button-->
    <button
        class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0"
        id="sidebarToggle"
    >
        <i data-feather="menu"></i>
    </button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">Dashboard</a>
    <!-- Navbar Search Input-->
    <!-- * * Note: * * Visible only on and above the lg breakpoint-->
    <form class="form-inline me-auto d-none d-lg-block me-3">
        <div class="input-group input-group-joined input-group-solid">
            <input
                class="form-control pe-0"
                type="search"
                placeholder="Search"
                aria-label="Search"
            />
            <div class="input-group-text"><i data-feather="search"></i></div>
        </div>
    </form>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Documentation Dropdown-->
        {{--        <li class="nav-item dropdown no-caret d-none d-md-block me-3">--}}
        {{--            <a--}}
        {{--                class="nav-link dropdown-toggle"--}}
        {{--                id="navbarDropdownDocs"--}}
        {{--                href="javascript:void(0);"--}}
        {{--                role="button"--}}
        {{--                data-bs-toggle="dropdown"--}}
        {{--                aria-haspopup="true"--}}
        {{--                aria-expanded="false"--}}
        {{--            >--}}
        {{--                <div class="fw-500">Documentation</div>--}}
        {{--                <i class="fas fa-chevron-right dropdown-arrow"></i>--}}
        {{--            </a>--}}
        {{--            <div--}}
        {{--                class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up"--}}
        {{--                aria-labelledby="navbarDropdownDocs"--}}
        {{--            >--}}
        {{--                <a--}}
        {{--                    class="dropdown-item py-3"--}}
        {{--                    href="https://docs.startbootstrap.com/sb-admin-pro"--}}
        {{--                    target="_blank"--}}
        {{--                >--}}
        {{--                    <div class="icon-stack bg-primary-soft text-primary me-4">--}}
        {{--                        <i data-feather="book"></i>--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <div class="small text-gray-500">Documentation</div>--}}
        {{--                        Usage instructions and reference--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--                <div class="dropdown-divider m-0"></div>--}}
        {{--                <a--}}
        {{--                    class="dropdown-item py-3"--}}
        {{--                    href="https://docs.startbootstrap.com/sb-admin-pro/components"--}}
        {{--                    target="_blank"--}}
        {{--                >--}}
        {{--                    <div class="icon-stack bg-primary-soft text-primary me-4">--}}
        {{--                        <i data-feather="code"></i>--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <div class="small text-gray-500">Components</div>--}}
        {{--                        Code snippets and reference--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--                <div class="dropdown-divider m-0"></div>--}}
        {{--                <a--}}
        {{--                    class="dropdown-item py-3"--}}
        {{--                    href="https://docs.startbootstrap.com/sb-admin-pro/changelog"--}}
        {{--                    target="_blank"--}}
        {{--                >--}}
        {{--                    <div class="icon-stack bg-primary-soft text-primary me-4">--}}
        {{--                        <i data-feather="file-text"></i>--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <div class="small text-gray-500">Changelog</div>--}}
        {{--                        Updates and changes--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--        </li>--}}
        <!-- Navbar Search Dropdown-->
        <!-- * * Note: * * Visible only below the lg breakpoint-->
        <li class="nav-item dropdown no-caret me-3 d-lg-none">
            <a
                class="btn btn-icon btn-transparent-dark dropdown-toggle"
                id="searchDropdown"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            ><i data-feather="search"></i
                ></a>
            <!-- Dropdown - Search-->
            <div
                class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up"
                aria-labelledby="searchDropdown"
            >
                <form class="form-inline me-auto w-100">
                    <div class="input-group input-group-joined input-group-solid">
                        <input
                            class="form-control pe-0"
                            type="text"
                            placeholder="Search for..."
                            aria-label="Search"
                            aria-describedby="basic-addon2"
                        />
                        <div class="input-group-text">
                            <i data-feather="search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <!-- Alerts Dropdown-->
        <li
            class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications"
        >
            <a
                class="btn btn-icon btn-transparent-dark dropdown-toggle"
                id="navbarDropdownAlerts"
                href="javascript:void(0);"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            ><i data-feather="bell"></i
                ></a>
            <div
                class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownAlerts"
            >
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="bell"></i>
                    Alerts Center
                </h6>
                <!-- Example Alert 1-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-warning">
                        <i data-feather="activity"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">
                            December 29, 2021
                        </div>
                        <div class="dropdown-notifications-item-content-text">
                            This is an alert message. It's nothing serious, but it
                            requires your attention.
                        </div>
                    </div>
                </a>
                <!-- Example Alert 2-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-info">
                        <i data-feather="bar-chart"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">
                            December 22, 2021
                        </div>
                        <div class="dropdown-notifications-item-content-text">
                            A new monthly report is ready. Click here to view!
                        </div>
                    </div>
                </a>
                <!-- Example Alert 3-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-danger">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">
                            December 8, 2021
                        </div>
                        <div class="dropdown-notifications-item-content-text">
                            Critical system failure, systems shutting down.
                        </div>
                    </div>
                </a>
                <!-- Example Alert 4-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <div class="dropdown-notifications-item-icon bg-success">
                        <i data-feather="user-plus"></i>
                    </div>
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-details">
                            December 2, 2021
                        </div>
                        <div class="dropdown-notifications-item-content-text">
                            New user request. Woody has requested access to the
                            organization.
                        </div>
                    </div>
                </a>
                <a class="dropdown-item dropdown-notifications-footer" href="#!"
                >View All Alerts</a
                >
            </div>
        </li>
        <!-- Messages Dropdown-->
        <li
            class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications"
        >
            <a
                class="btn btn-icon btn-transparent-dark dropdown-toggle"
                id="navbarDropdownMessages"
                href="javascript:void(0);"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            ><i data-feather="mail"></i
                ></a>
            <div
                class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownMessages"
            >
                <h6 class="dropdown-header dropdown-notifications-header">
                    <i class="me-2" data-feather="mail"></i>
                    Message Center
                </h6>
                <!-- Example Message 1  -->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img
                        class="dropdown-notifications-item-img"
                        src="{{ asset('assets/img/illustrations/profiles/profile-2.png') }}"
                    />
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">
                            Thomas Wilcox · 58m
                        </div>
                    </div>
                </a>
                <!-- Example Message 2-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img
                        class="dropdown-notifications-item-img"
                        src="{{ asset('assets/img/illustrations/profiles/profile-3.png') }}"
                    />
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">
                            Emily Fowler · 2d
                        </div>
                    </div>
                </a>
                <!-- Example Message 3-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img
                        class="dropdown-notifications-item-img"
                        src="{{ asset('assets/img/illustrations/profiles/profile-4.png') }}"
                    />
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">
                            Marshall Rosencrantz · 3d
                        </div>
                    </div>
                </a>
                <!-- Example Message 4-->
                <a class="dropdown-item dropdown-notifications-item" href="#!">
                    <img
                        class="dropdown-notifications-item-img"
                        src="{{ asset('assets/img/illustrations/profiles/profile-5.png') }}"
                    />
                    <div class="dropdown-notifications-item-content">
                        <div class="dropdown-notifications-item-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </div>
                        <div class="dropdown-notifications-item-content-details">
                            Colby Newton · 3d
                        </div>
                    </div>
                </a>
                <!-- Footer Link-->
                <a class="dropdown-item dropdown-notifications-footer" href="#!"
                >Read All Messages</a
                >
            </div>
        </li>
        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a
                class="btn btn-icon btn-transparent-dark dropdown-toggle"
                id="navbarDropdownUserImage"
                href="javascript:void(0);"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            ><img
                    class="img-fluid"
                    src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                /></a>
            <div
                class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownUserImage"
            >
                <h6 class="dropdown-header d-flex align-items-center">
                    <img
                        class="dropdown-user-img"
                        src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}"
                    />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">Valerie Luna</div>
                        <div class="dropdown-user-details-email">vluna@aol.com</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon">
                        <i data-feather="settings"></i>
                    </div>
                    Account
                </a>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon">
                        <i data-feather="log-out"></i>
                    </div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">


            {{--  ------------------------------------------- Admin Sidebar Panel ------------------------------------------- --}}

            <x-admin.admin-sidebar></x-admin.admin-sidebar>

            {{--  ------------------------------------------- Admin Sidebar Panel ------------------------------------------- --}}

            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Valerie Luna</div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <header
                class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10"
            >
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon">
                                        <i data-feather="activity"></i>
                                    </div>
                                    Dashboard
                                </h1>
                                {{--                                <div class="page-header-subtitle">--}}
                                {{--                                    Example dashboard overview and content summary--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="col-12 col-xl-auto mt-4">
                                <div
                                    class="input-group input-group-joined border-0"
                                    style="width: 16.5rem"
                                >
                      <span class="input-group-text"
                      ><i class="text-primary" data-feather="calendar"></i
                          ></span>
                                    <input
                                        class="form-control ps-0 pointer"
                                        id="litepickerRangePlugin"
                                        placeholder="Select date range..."
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-n10">
                <div class="row">
                    <div class="col-xxl-4 col-xl-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body h-100 p-5">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-xxl-12">
                                        <div
                                            class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4"
                                        >
                                            <h1 class="text-primary">Welcome to Dashboard!</h1>
                                            <p class="text-gray-700 mb-0">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-12 text-center">
                                        <img
                                            class="img-fluid"
                                            src="{{ asset('assets/img/illustrations/at-work.svg') }}"
                                            style="max-width: 26rem"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-6 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Recent Activity
                                <div class="dropdown no-caret">
                                    <button
                                        class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                        id="dropdownMenuButton"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i
                                            class="text-gray-500"
                                            data-feather="more-vertical"
                                        ></i>
                                    </button>
                                    {{--                                    <div--}}
                                    {{--                                        class="dropdown-menu dropdown-menu-end animated--fade-in-up"--}}
                                    {{--                                        aria-labelledby="dropdownMenuButton"--}}
                                    {{--                                    >--}}
                                    {{--                                        <h6 class="dropdown-header">Filter Activity:</h6>--}}
                                    {{--                                        <a class="dropdown-item" href="#!"--}}
                                    {{--                                        ><span class="badge bg-green-soft text-green my-1"--}}
                                    {{--                                            >Commerce</span--}}
                                    {{--                                            ></a--}}
                                    {{--                                        >--}}
                                    {{--                                        <a class="dropdown-item" href="#!"--}}
                                    {{--                                        ><span class="badge bg-blue-soft text-blue my-1"--}}
                                    {{--                                            >Reporting</span--}}
                                    {{--                                            ></a--}}
                                    {{--                                        >--}}
                                    {{--                                        <a class="dropdown-item" href="#!"--}}
                                    {{--                                        ><span class="badge bg-yellow-soft text-yellow my-1"--}}
                                    {{--                                            >Server</span--}}
                                    {{--                                            ></a--}}
                                    {{--                                        >--}}
                                    {{--                                        <a class="dropdown-item" href="#!"--}}
                                    {{--                                        ><span class="badge bg-purple-soft text-purple my-1"--}}
                                    {{--                                            >Users</span--}}
                                    {{--                                            ></a--}}
                                    {{--                                        >--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="timeline timeline-xs">
                                    <!-- Timeline Item 1-->
                                    @foreach($sales as $sale)
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div
                                                    class="timeline-item-marker-text">{{ $sale->created_at->diffForHumans() }}</div>
                                                <div
                                                    class="timeline-item-marker-indicator bg-green"
                                                ></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                New order placed!
                                                <a class="fw-bold text-dark"
                                                   href="#!">Order {{ $sale->transaction_id }}</a>
                                                has been successfully placed.
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="col-xxl-4 col-xl-6 mb-4">--}}
                    {{--                        <div class="card card-header-actions h-100">--}}
                    {{--                            <div class="card-header">--}}
                    {{--                                Progress Tracker--}}
                    {{--                                <div class="dropdown no-caret">--}}
                    {{--                                    <button--}}
                    {{--                                        class="btn btn-transparent-dark btn-icon dropdown-toggle"--}}
                    {{--                                        id="dropdownMenuButton"--}}
                    {{--                                        type="button"--}}
                    {{--                                        data-bs-toggle="dropdown"--}}
                    {{--                                        aria-haspopup="true"--}}
                    {{--                                        aria-expanded="false"--}}
                    {{--                                    >--}}
                    {{--                                        <i--}}
                    {{--                                            class="text-gray-500"--}}
                    {{--                                            data-feather="more-vertical"--}}
                    {{--                                        ></i>--}}
                    {{--                                    </button>--}}
                    {{--                                    <div--}}
                    {{--                                        class="dropdown-menu dropdown-menu-end animated--fade-in-up"--}}
                    {{--                                        aria-labelledby="dropdownMenuButton"--}}
                    {{--                                    >--}}
                    {{--                                        <a class="dropdown-item" href="#!">--}}
                    {{--                                            <div class="dropdown-item-icon">--}}
                    {{--                                                <i class="text-gray-500" data-feather="list"></i>--}}
                    {{--                                            </div>--}}
                    {{--                                            Manage Tasks--}}
                    {{--                                        </a>--}}
                    {{--                                        <a class="dropdown-item" href="#!">--}}
                    {{--                                            <div class="dropdown-item-icon">--}}
                    {{--                                                <i--}}
                    {{--                                                    class="text-gray-500"--}}
                    {{--                                                    data-feather="plus-circle"--}}
                    {{--                                                ></i>--}}
                    {{--                                            </div>--}}
                    {{--                                            Add New Task--}}
                    {{--                                        </a>--}}
                    {{--                                        <a class="dropdown-item" href="#!">--}}
                    {{--                                            <div class="dropdown-item-icon">--}}
                    {{--                                                <i--}}
                    {{--                                                    class="text-gray-500"--}}
                    {{--                                                    data-feather="minus-circle"--}}
                    {{--                                                ></i>--}}
                    {{--                                            </div>--}}
                    {{--                                            Delete Tasks--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <h4 class="small">--}}
                    {{--                                    Server Migration--}}
                    {{--                                    <span class="float-end fw-bold">20%</span>--}}
                    {{--                                </h4>--}}
                    {{--                                <div class="progress mb-4">--}}
                    {{--                                    <div--}}
                    {{--                                        class="progress-bar bg-danger"--}}
                    {{--                                        role="progressbar"--}}
                    {{--                                        style="width: 20%"--}}
                    {{--                                        aria-valuenow="20"--}}
                    {{--                                        aria-valuemin="0"--}}
                    {{--                                        aria-valuemax="100"--}}
                    {{--                                    ></div>--}}
                    {{--                                </div>--}}
                    {{--                                <h4 class="small">--}}
                    {{--                                    Sales Tracking--}}
                    {{--                                    <span class="float-end fw-bold">40%</span>--}}
                    {{--                                </h4>--}}
                    {{--                                <div class="progress mb-4">--}}
                    {{--                                    <div--}}
                    {{--                                        class="progress-bar bg-warning"--}}
                    {{--                                        role="progressbar"--}}
                    {{--                                        style="width: 40%"--}}
                    {{--                                        aria-valuenow="40"--}}
                    {{--                                        aria-valuemin="0"--}}
                    {{--                                        aria-valuemax="100"--}}
                    {{--                                    ></div>--}}
                    {{--                                </div>--}}
                    {{--                                <h4 class="small">--}}
                    {{--                                    Customer Database--}}
                    {{--                                    <span class="float-end fw-bold">60%</span>--}}
                    {{--                                </h4>--}}
                    {{--                                <div class="progress mb-4">--}}
                    {{--                                    <div--}}
                    {{--                                        class="progress-bar"--}}
                    {{--                                        role="progressbar"--}}
                    {{--                                        style="width: 60%"--}}
                    {{--                                        aria-valuenow="60"--}}
                    {{--                                        aria-valuemin="0"--}}
                    {{--                                        aria-valuemax="100"--}}
                    {{--                                    ></div>--}}
                    {{--                                </div>--}}
                    {{--                                <h4 class="small">--}}
                    {{--                                    Payout Details--}}
                    {{--                                    <span class="float-end fw-bold">80%</span>--}}
                    {{--                                </h4>--}}
                    {{--                                <div class="progress mb-4">--}}
                    {{--                                    <div--}}
                    {{--                                        class="progress-bar bg-info"--}}
                    {{--                                        role="progressbar"--}}
                    {{--                                        style="width: 80%"--}}
                    {{--                                        aria-valuenow="80"--}}
                    {{--                                        aria-valuemin="0"--}}
                    {{--                                        aria-valuemax="100"--}}
                    {{--                                    ></div>--}}
                    {{--                                </div>--}}
                    {{--                                <h4 class="small">--}}
                    {{--                                    Account Setup--}}
                    {{--                                    <span class="float-end fw-bold">Complete!</span>--}}
                    {{--                                </h4>--}}
                    {{--                                <div class="progress">--}}
                    {{--                                    <div--}}
                    {{--                                        class="progress-bar bg-success"--}}
                    {{--                                        role="progressbar"--}}
                    {{--                                        style="width: 100%"--}}
                    {{--                                        aria-valuenow="100"--}}
                    {{--                                        aria-valuemin="0"--}}
                    {{--                                        aria-valuemax="100"--}}
                    {{--                                    ></div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="card-footer position-relative">--}}
                    {{--                                <div--}}
                    {{--                                    class="d-flex align-items-center justify-content-between small text-body"--}}
                    {{--                                >--}}
                    {{--                                    <a class="stretched-link text-body" href="#!"--}}
                    {{--                                    >Visit Task Center</a--}}
                    {{--                                    >--}}
                    {{--                                    <i class="fas fa-angle-right"></i>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <!-- Example Colored Cards for Dashboard Demo-->
                <div class="row">


                    @foreach($tasks as $task)

                        <div class="col-lg-6 col-xl-3 mb-4">
                            <div class="card bg-primary text-white h-100"
                                 style="background-color: {{ $task->color }} !important;">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-center"
                                    >
                                        <div class="me-3">
                                            <div class="text-white-75 small">
                                                {{ $task->title }}
                                            </div>
                                            <div class="text-lg fw-bold">{{ $task->income }}</div>
                                        </div>
                                        <i
                                            class="feather-xl text-white-50"
                                            data-feather="{{ $task->data_feather }}"
                                        ></i>
                                    </div>
                                </div>
                                <div
                                    class="card-footer d-flex align-items-center justify-content-between small"
                                >
                                    <a class="text-white stretched-link" href="{{ $task->link }}"
                                    >View Report</a
                                    >
                                    <div class="text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
                <!-- Example Charts for Dashboard Demo-->
                <div class="row">
                    <div class="col-xl-6 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Earnings Breakdown
                                <div class="dropdown no-caret">
                                    <button
                                        class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                        id="areaChartDropdownExample"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i
                                            class="text-gray-500"
                                            data-feather="more-vertical"
                                        ></i>
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                        aria-labelledby="areaChartDropdownExample"
                                    >
                                        {{--                                        <a class="dropdown-item" href="#!">Last 12 Months</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Last 30 Days</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Last 7 Days</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">This Month</a>--}}
                                        {{--                                        <div class="dropdown-divider"></div>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Custom Range</a>--}}
                                    </div>
                                </div>
                            </div>


                            {{-- ------------------------------------------------ Earnings Breakdown component ------------------------------------------------ --}}

                            <x-admin.charts.earning></x-admin.charts.earning>

                            {{-- ------------------------------------------------ Earnings Breakdown component ------------------------------------------------ --}}


                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Monthly Revenue
                                <div class="dropdown no-caret">
                                    <button
                                        class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                        id="areaChartDropdownExample"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i
                                            class="text-gray-500"
                                            data-feather="more-vertical"
                                        ></i>
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                        aria-labelledby="areaChartDropdownExample"
                                    >
                                        {{--                                        <a class="dropdown-item" href="#!">Last 12 Months</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Last 30 Days</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Last 7 Days</a>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">This Month</a>--}}
                                        {{--                                        <div class="dropdown-divider"></div>--}}
                                        {{--                                        <a class="dropdown-item" href="#!">Custom Range</a>--}}
                                    </div>
                                </div>
                            </div>

                            {{-- ------------------------------------------------- Monthly Revenue chart component ------------------------------------------------- --}}


                            <x-admin.charts.revenue></x-admin.charts.revenue>


                            {{-- ------------------------------------------------- Monthly Revenue chart component ------------------------------------------------- --}}


                        </div>
                    </div>
                </div>
                <!-- Example DataTable for Dashboard Demo-->

                {{-- ------------------------------------------------- Sales management ------------------------------------------------- --}}

                <div class="card mb-4">
                    <div style="display: flex; justify-content: space-between; flex-wrap:  wrap">
                        <div class="card-header">Sales Data</div>
                        <div class="card-header" style="border-bottom: none">Export Data</div>

                    </div>
                    {{-- -------------------------------------- Sales Data Table -------------------------------------- --}}


                    <div style="padding: 15px">
                        <table id="exampleDataTable" class="card-body" style="width:100%">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Type</th>
                                <th>No. of items</th>
                                <th>Sold to</th>
                                <th>Payment Type</th>
                                <th>Address</th>
                                <th>Transaction_id</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sales as $sale)
                                <tr>
                                    <td>{{ $sale->product_name }}</td>
                                    <td>{{ $sale->type }}</td>
                                    <td>{{ $sale->no_of_items }}</td>
                                    <td>{{ $sale->sold_to }}</td>
                                    <td>{{ $sale->payment_type }}</td>
                                    <td>{{ $sale->address }}</td>
                                    <td>{{ $sale->transaction_id }}</td>
                                    <td>
                                        <div class="badge bg-primary text-white rounded-pill">
                                            Full-time
                                        </div>
                                    </td>
                                    <td>
                                        <button
                                            class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        >
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <button
                                            class="btn btn-datatable btn-icon btn-transparent-dark"
                                        >
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>

                    <br><br>

                    {{-- -------------------------------------- Sales Data Table -------------------------------------- --}}

                </div>

                {{-- ------------------------------------------------- Sales management ------------------------------------------------- --}}


            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">
                        Copyright &copy; Your Website 2021
                    </div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
    crossorigin="anonymous"
></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

<script>
    $(document).ready(function () {
        // $('#example').DataTable();
        var table = $('#exampleDataTable').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>


<script>
    $(document).ready(function () {
        // $('#example').DataTable();
        var table = $('#example').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>

{{--<script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>--}}
<script
    src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js"
    crossorigin="anonymous"
></script>
<script src="{{ asset('js/litepicker.js') }}"></script>
</body>
</html>

