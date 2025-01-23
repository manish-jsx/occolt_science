<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>All India Institute of Occult Science | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon start -->
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admin') }}/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin') }}/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin') }}/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('admin') }}/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('admin') }}/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon end -->
    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/AeonikFont.css">



    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="loginForm auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="text-center">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="{{ asset('admin') }}/assets/images/logo.png" alt="" height="140px">
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0 login-title">Admin Panel</h5>
                                </div>
                                    <form class="mt-4 pt-2 admin-login-form" action="{{ route('custom_login') }}" method="POST">
                                        @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter username">
                                        <div class="alert-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <label class="form-label">Password</label>
                                            </div>
                                            <!--   <div class="flex-shrink-0">
                                                    <div class="">
                                                        <a href="#" class="text-muted">Forgot password?</a>
                                                    </div>
                                                </div> -->
                                        </div>

                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password"
                                                aria-label="Password" name="password" aria-describedby="password-addon">
                                            <button class="btn btn-light shadow-none ms-0" type="button"
                                                id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                        <div class="alert-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!--   <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>  
                                            </div>
                                            
                                        </div> -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary3 w-100 log-in-btn" type="submit">Log
                                            In</button>
                                    </div>
                                </form>




                            </div>
                            <div class="mt-3 mt-md-5 text-center">
                                <p class="mb-0">©
                                    <script> document.write(new Date().getFullYear())</script> All India Institute of Occult Science | All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xxl-12 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-primary bg-primary2"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div
                                            class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>

                                        </div>
                                        <!-- end carouselIndicators -->

                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="{{ asset('admin') }}/assets/libs/pace-js/pace.min.js"></script>
    <!-- password addon init -->
    <script src="{{ asset('admin') }}/assets/js/pages/pass-addon.init.js"></script>


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

</body>

</html>