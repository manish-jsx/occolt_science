<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>All India Institute of Occult Science | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon start -->
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin') }}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('admin') }}/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('admin') }}/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('admin') }}/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('admin') }}/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon end -->
    <!-- plugin css -->
    <!-- <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/all.css"> -->
    <link href="{{ asset('admin') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" type="text/css" />
    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/preloader.min.css" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/AeonikFont.css">


    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <style>
        .required {
            color: red;
            font-size: 15px;
        }
    </style>


{{-- data table  --}}
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

<style>
    .edu-form-table tr td {
      border-right: none !important;
    }

    .panel .panel-body hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 2px solid #333;
    }

    .panel .panel-body p {
      margin-bottom: 0px;
    }

    .table-first-col {
      width: 50%;
    }

    .table-second-col {
      width: 40%;
      border: 2px solid #000;
    }

    .img-table-col {
      width: 40%;
    }

    .course-col-td {
      border-right: none !important;
    }
  </style>

</head>

<body>
    <!-- <body data-layout="horizontal"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box"> <a href="{{ route('admin.dashbord') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('admin') }}/assets/images/small_logo.png" alt=""
                                    height="24"> </span> <span class="logo-lg"> <img
                                    src="{{ asset('admin') }}/assets/images/logo.png" alt="" height="60">
                            </span> </a> <a href="{{ route('admin.dashbord') }}" class="logo logo-light"> <span
                                class="logo-sm"> <img src="{{ asset('admin') }}/assets/images/logo-sm.svg"
                                    alt="" height="24">
                            </span> <span class="logo-lg"> <img src="{{ asset('admin') }}/assets/images/logo-sm.svg"
                                    alt="" height="24"> <span class="logo-txt">Minia</span> </span> </a>
                    </div>
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn"> <i
                            class="fa fa-fw fa-bars"></i> </button>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                data-feather="search" class="icon-lg"></i> </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Search Result">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button"
                            class="btn header-item topbar-light bg-light-subtle border-start border-end cls"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <img class="rounded-circle header-profile-user"
                                src="{{ asset('admin') }}/assets/images/small_logo.png" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">All India Institute of Occult
                                Science</span> <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> </button>
                        <div class="dropdown-menu dropdown-menu-end cls">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('admin.change_password') }}"><i
                                    class="mdi mdi-lock font-size-16 align-middle me-1"></i> Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu mm-active">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <!--  <li class="menu-title" data-key="t-menu">Menu</li> -->
                        <li> <a href="{{ route('admin.dashbord') }}"
                                class="{{ Route::is('admin.dashbord') ? 'dashboard' : '' }}"> <i
                                    data-feather="home"></i>
                                <span>Dashboard</span> </a> </li>
                        <li> <a href="{{ route('admin.applicationform') }}"
                                class="{{ Route::is('admin.applicationform') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i>
                                <span>Application
                                    Forms</span> </a> </li>
                                    <li> <a href="{{ route('admin.registration_form') }}"
                                        class="{{ Route::is('admin.registration_form') ? 'dashboard' : '' }}"> <i
                                            data-feather="grid"></i>
                                        <span>Registration Form</span> </a> </li>
                        <li> <a href="javascript: void(0);"
                                class="has-arrow {{ Route::is('admin.enquiry*') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i> <span data-key="t-apps">Enquiries</span> </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.enquiry.course_enquiry') }}">Course Enquiries</a></li>
                                <li><a href="{{ route('admin.enquiry.course_download_pdf') }}">Syllabus PDF Download</a></li>
                                <li><a href="{{ route('admin.enquiry.generaenquiry') }}">General Enquiries</a></li>
                                <li><a href="{{ route('admin.enquiry.contactusenquiry') }}">Contact Enquiries</a></li>
                                <li><a href="{{ route('admin.enquiry.enquiry') }}"> Enquiries</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('admin.banner.create') }}"
                                class="{{ Route::is('admin.banner.create') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i> <span>Home
                                    Banner</span> </a>
                        </li>
                        <li> <a href="{{ route('admin.syllabus.create') }}"
                                class="{{ Route::is('admin.syllabus.create') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i> <span>Upload
                                    Syllabus</span>
                            </a> </li>
                        <li> <a href="javascript: void(0);"
                                class="has-arrow  {{ Route::is('admin.gallery*') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i> <span data-key="t-apps">Gallery</span> </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.gallery.imagegallery.create') }}">Image Gallery</a></li>
                                <li><a href="{{ route('admin.gallery.videogallery.create') }}">Video Gallery</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('admin.blog.create') }}"
                                class="{{ Route::is('admin.blog.create') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i>
                                <span>Blog</span> </a> </li>
                        <li> <a href="{{ route('admin.testimonial.create') }}"
                                class="{{ Route::is('admin.testimonial.create') ? 'dashboard' : '' }}"> <i
                                    data-feather="grid"></i>
                                <span>Our Testimonials
                                </span> </a> </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="main-content">



            @yield('section')



            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6"> Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> All India Institute of Occult Science | All Rights
                            Reserved.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block"> <a href="https://www.akswebsoft.com/"
                                    title="AKS Websoft Consulting Pvt. Ltd." target="_blank"><img
                                        src="{{ asset('admin') }}/assets/images/aks2.png"
                                        alt="AKS Websoft Consulting Pvt. Ltd." class="powerd"></a> </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">
                    <h5 class="m-0 me-2">Theme Customizer</h5>
                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto"> <i
                            class="mdi mdi-close noti-icon"></i> </a>
                </div>
                <!-- Settings -->
                <hr class="m-0" />
                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                            value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                            value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                            value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                            value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                            value="fuild" onChange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                            value="boxed" onChange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onChange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onChange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                            value="light" onChange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                            value="dark" onChange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                            value="default" onChange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                            value="compact" onChange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                            value="small" onChange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                            value="light" onChange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                            value="dark" onChange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                            value="brand" onChange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>
            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('admin') }}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('admin') }}/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="{{ asset('admin') }}/assets/libs/pace-js/pace.min.js"></script>
        <!-- apexcharts -->
        <script src="{{ asset('admin') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Plugins js-->
        <script src="{{ asset('admin') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
        </script>
        <script
            src="{{ asset('admin') }}/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
        </script>
        <!-- dashboard init -->
        <script src="{{ asset('admin') }}/assets/js/pages/dashboard.init.js"></script>
        <script src="{{ asset('admin') }}/assets/js/app.js"></script>


        <script type="text/javascript" src="https://parsleyjs.org/dist/parsley.js"></script>
        <!---------------- Toaster ------------------->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>


<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@yield('scripts')
</body>

</html>
