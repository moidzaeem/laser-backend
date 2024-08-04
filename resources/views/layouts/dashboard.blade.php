<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapget.com/demos/medflex-medical-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 11:04:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laser Addict - CRM</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:title" content="Admin Templates - Dashboard Templates">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- *************
  ************ CSS Files *************
 ************* -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/remix/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">

    <!-- *************
  ************ Vendor Css Files *************
 ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">


</head>

<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class='spin-wrapper'>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
        </div>
    </div>
    <!-- Loading ends -->

    <!-- Page wrapper starts -->
    <div class="page-wrapper">
        <div class="main-container">

            <!-- Sidebar wrapper starts -->
            <nav id="sidebar" class="sidebar-wrapper">

                <!-- Sidebar profile starts -->
                <div class="">
                    <img src="{{ asset('assets/images/award/logo.png') }}" class="" alt=""
                        style="width: 180px;padding-top: 10px;    margin-left: 18px;">
                </div>
                <!-- Sidebar profile ends -->
                <br>
                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        @if (Auth::user()->user_type == 1)
                            <li class="pation">
                                <span class="menu-text">Practitioner Menu</span>
                            </li>
                            <li class="active current-page">
                                <a href="{{ url('/login') }}">
                                    <img src="{{ asset('assets/images/award/1.png') }}" style="width:30px ">
                                    <span class="menu-text new-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <img src="{{ asset('assets/images/award/booking.png') }}" style="width:30px ">
                                    <span class="menu-text  new-text">RDV</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="doctor-dashboard.html">My appointments</a>
                                    </li>
                                    <li>
                                        <a href="doctors-list.html">My center's appointments</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <img src="{{ asset('assets/images/award/3.png') }}" style="width:30px ">
                                    <span class="menu-text new-text">Customers</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{route('center.customer')}}">My center's customers</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <img src="{{ asset('assets/images/award/4.png') }}" style="width:30px ">
                                    <span class="menu-text new-text">Planning</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="patient-dashboard.html">My availabilities</a>
                                    </li>
                                    <li>
                                        <a href="patients-list.html">My vacations </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <img src="{{ asset('assets/images/award/5.png') }}" style="width:30px ">
                                    <span class="menu-text new-text">My Center</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{route('stats.index')}}">Statistics</a>
                                    </li>
                                    {{-- <li>
                                        <a href="patients-list.html">Billing</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('center.services.index') }}">Services</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <br>
                        <br>
                        @if (Auth::user()->user_type == 0)
                        <li class="pation">
                            <span class="menu-text">Admin Menu</span>
                        </li>

                        <li class="">
                            <a href="#!">
                                <img src="{{ asset('assets/images/award/6.png') }}" style="width:30px ">
                                <span class="menu-text new-text">All customers files</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('center.index') }}">
                                <img src="{{ asset('assets/images/award/5.png') }}" style="width:30px ">
                                <span class="menu-text new-text">All centers</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('practicioners.index') }}">
                                <img src="{{ asset('assets/images/award/7.png') }}" style="width:30px ">
                                <span class="menu-text new-text">Practicioners</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('stats.index') }}">
                                <img src="{{ asset('assets/images/award/8.png') }}" style="width:30px ">
                                <span class="menu-text new-text">All Statistics</span>
                            </a>
                        </li>
                        {{-- <li class="">
                            <a href="#!">
                                <img src="{{ asset('assets/images/award/9.png') }}" style="width:30px ">
                                <span class="menu-text new-text">All invoices</span>
                            </a>
                        </li> --}}

                        <li class="">
                            <a href="{{ route('services.index.all') }}">
                                <img src="{{ asset('assets/images/award/9.png') }}" style="width:30px ">
                                <span class="menu-text new-text">Services</span>
                            </a>
                        </li>
                        @endif
                        <br><br><br><br><br>
                        {{-- <li class="treeview">
                            <a href="#!">
                                <img src="{{ asset('assets/images/award/10.png') }}" style="width:30px ">
                                <span class="menu-text new-text">Setting</span>
                            </a>
                        </li> --}}
                        <li class="">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                <img src="{{ asset('assets/images/award/11.png') }}" style="width:30px ">
                                <span class="menu-text new-text">Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                        <br><br><br><br><br><br>
                        <!-- Sidebar menu ends -->


                        <!-- Sidebar contact ends -->

            </nav>
            <!-- Sidebar wrapper ends -->

            <!-- App container starts -->
            <div class="app-container">
                <!-- App Hero header ends -->
                <div class="app-header d-flex align-items-center">
                    <div class="header-actions">

                        <!-- Search container starts -->
                        <div class="search-container d-lg-block d-none mx-3">
                            <input type="text" class="form-control" id="searchId" placeholder="Search">
                            <i class="ri-search-line"></i>
                        </div>
                        <!-- Search container ends -->

                        <!-- Header actions starts -->
                        <div class="d-lg-flex d-none gap-2">

                            <!-- Select country dropdown starts -->
                            <div class="dropdown">
                                <a class="dropdown-toggle header-icon" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/flags/1x1/fr.svg') }}"
                                        class="header-country-flag" alt="Bootstrap Dashboards">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-mini">
                                    <div class="country-container">
                                        <a href="index.html" class="py-2">
                                            <img src="{{ asset('assets/images/flags/1x1/us.svg') }}"
                                                alt="Admin Panel">
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img src="{{ asset('assets/images/flags/1x1/in.svg') }}"
                                                alt="Admin Panels">
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img src="{{ asset('assets/images/flags/1x1/br.svg') }}"
                                                alt="Admin Dashboards">
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img src="{{ asset('assets/images/flags/1x1/tr.svg') }}"
                                                alt="Admin Templatess">
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img src="{{ asset('assets/images/flags/1x1/gb.svg') }}"
                                                alt="Google Admin">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Select country dropdown ends -->


                            <!-- Notifications dropdown starts -->
                            <div class="dropdown d-none">
                                <a class="dropdown-toggle header-icon" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-alarm-warning-line"></i>
                                    <span class="count-label success"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-300">
                                    <h5 class="fw-semibold px-3 py-2 text-primary">Alerts</h5>

                                    <!-- Scroll starts -->
                                    <div class="scroll300">

                                        <!-- Alert list starts -->
                                        <div class="p-3">
                                            <div class="d-flex py-2">
                                                <div class="icon-box md bg-info rounded-circle me-3">
                                                    <span class="fw-bold fs-6 text-white">DS</span>
                                                </div>
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Douglass Shaw</h6>
                                                    <p class="mb-1">
                                                        Appointed as a new President 2014-2025
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 07:30pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
                                                <div class="icon-box md bg-danger rounded-circle me-3">
                                                    <span class="fw-bold fs-6 text-white">WG</span>
                                                </div>
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Willie Garrison</h6>
                                                    <p class="mb-1">
                                                        Congratulate, James for new job.
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 08:00pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
                                                <div class="icon-box md bg-warning rounded-circle me-3">
                                                    <span class="fw-bold fs-6 text-white">TJ</span>
                                                </div>
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Terry Jenkins</h6>
                                                    <p class="mb-1">
                                                        Lewis added new doctors training schedule.
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 09:30pm</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Alert list ends -->

                                    </div>
                                    <!-- Scroll ends -->

                                    <!-- View all button starts -->
                                    <div class="d-grid m-3">
                                        <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                                    </div>
                                    <!-- View all button ends -->

                                </div>
                            </div>
                            <!-- Notifications dropdown ends -->

                            <!-- Messages dropdown starts -->
                            {{-- <div class="dropdown">
                                <a class="dropdown-toggle header-icon" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-message-3-line"></i>
                                    <span class="count-label"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-300">
                                    <h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>

                                    <!-- Scroll starts -->
                                    <div class="scroll300">

                                        <!-- Messages list starts -->
                                        <div class="p-3">
                                            <div class="d-flex py-2">
                                                <img src="assets/images/user3.png"
                                                    class="img-shadow img-3x me-3 rounded-5"
                                                    alt="Hospital Admin Templates">
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Nick Gonzalez</h6>
                                                    <p class="mb-1">
                                                        Appointed as a new President 2014-2025
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 07:30pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
                                                <img src="assets/images/user1.png"
                                                    class="img-shadow img-3x me-3 rounded-5"
                                                    alt="Hospital Admin Templates">
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Clyde Fowler</h6>
                                                    <p class="mb-1">
                                                        Congratulate, James for new job.
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 08:00pm</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
                                                <img src="assets/images/user4.png"
                                                    class="img-shadow img-3x me-3 rounded-5"
                                                    alt="Hospital Admin Templates">
                                                <div class="m-0">
                                                    <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                                    <p class="mb-1">
                                                        Lewis added new doctors training schedule.
                                                    </p>
                                                    <p class="small m-0 opacity-50">Today, 09:30pm</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Messages list ends -->

                                    </div>
                                    <!-- Scroll ends -->

                                    <!-- View all button starts -->
                                    <div class="d-grid m-3">
                                        <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                                    </div>
                                    <!-- View all button ends -->

                                </div>
                            </div> --}}
                        </div>
                        <!-- Header actions ends -->

                        <!-- Header user settings starts -->
                        <div class="dropdown ms-2">
                            <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar-box">
                                    {{ \Illuminate\Support\Str::limit(Auth::user()->name, 2, '') }}
                                    <span class="status busy"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg">
                                <div class="px-3 py-2">
                                    <h6 class="m-0">{{ Auth::user()->name }}</h6>
                                </div>
                                {{-- <div class="mx-3 my-2 d-grid">
                                    <a href="login.html" class="btn btn-danger">Logout</a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Header user settings ends -->

                    </div>
                    <!-- App header actions ends -->

                </div>
                <!-- App body starts -->
                <div class="app-body">
                    @yield('content')

                </div>
                <!-- App body ends -->


            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
   ************ JavaScript Files *************
  ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/area.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/line.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/bar.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/column-area.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/candlestick.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/heatmap.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/donut.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/pie.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/gauge.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/radial-bar.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/funnel.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/graphs/pyramid.js') }}"></script>


    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/apex/custom/doc-dashboard/patients.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/doc-dashboard/appointments.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/doc-dashboard/gender.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/doc-dashboard/surgeries.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/doc-dashboard/income.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/patients.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/treatment.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/available-beds.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/earnings.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/gender-age.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home/claims.js') }}"></script>

    <script src="{{ asset('assets/vendor/apex/custom/patients/sparklines.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/patients/insuranceClaims.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/patients/medicalExpenses.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/patients/healthActivity.js') }}"></script>

    <!-- Apex Charts -->


    <!-- Custom JS files -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from bootstrapget.com/demos/medflex-medical-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 11:04:36 GMT -->

</html>
