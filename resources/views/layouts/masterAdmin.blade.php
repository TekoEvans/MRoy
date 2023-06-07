<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:41:25 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="adminAssets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="adminAssets/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="adminAssets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/ratio.css">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/datatables.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/feather-icon.css">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/dropzone.css">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/select2.min.css">


    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/date-picker.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/bootstrap.css">

 <!-- Bootstrap-tag input css -->
 <link rel="stylesheet" type="text/css" href="adminAssets/css/vendors/bootstrap-tagsinput.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="adminAssets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="adminAssets/css/style.css">

    <style>
        td {
            word-wrap: break-word;
            /* ou overflow-wrap: break-word; pour une meilleure prise en charge des navigateurs */
        }
    </style>

</head>

<body>

    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper m-0">
                <div class="header-logo-wrapper p-0">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo" src="adminAssets/images/logo/1.png" alt="logo">
                            <img class="img-fluid white-logo" src="adminAssets/images/logo/1-white.png" alt="logo">
                        </a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                        <a href="index.html">
                            <img src="adminAssets/images/logo/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
             <!--search bar-->
                {{-- <form class="form-inline search-full" action="javascript:void(0)" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Fastkart .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form> --}}
                <div class="container"><h3 class="container">  GESTION DU SITE  MROY COCTAIL</h3></div>

                <!-- photo admin-->
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="ri-notification-line"></i>
                                <span class="badge rounded-pill badge-theme">4</span>
                            </div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li>
                                    <i class="ri-notification-line"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
                                            class="pull-right">10 min.</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="mode">
                                <i class="ri-moon-line"></i>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="adminAssets/images/users/4.jpg" alt="">
                                <div class="user-name-hide media-body">
                                    <span>{{ Auth::user()->name }}</span>
                                    <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="{{ url('all-users')}}">
                                        <i data-feather="users"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('list-reservation') }}">
                                        <i data-feather="archive"></i>
                                        <span>Orders</span>
                                    </a>
                                </li>


                                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        href="javascript:void(0)">
                                        <i data-feather="log-out"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="index.html" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="adminAssets/images/logo/full-white.png" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html">
                            <img class="img-fluid main-logo main-white" src="adminAssets/images/logo/logo.png" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="adminAssets/images/logo/logo-white.png"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin') }}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>Product</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href= "{{ url('adminCocktails') }}">Cocktails</a>
                                        </li>

                                        <li>
                                            <a href="{{ url('adminAddCoktail')}}">Add New Products</a>
                                        </li>
                                    </ul>
                                </li>




                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ url('all-users') }}">All users</a>
                                        </li>
                                        <li>
                                            <a href="add-new-user.html">Add new user</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{ url('list-reservation') }}">Reservation List</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('details-reservation') }}">reservation Detail</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
        <!-- Page Header Ends-->
@yield('content')

 <!-- footer start-->
 <div class="container-fluid">
    <footer class="footer">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2023 ©  MR COCKTAIL BAR</p>
            </div>
        </div>
    </footer>
</div>
<!-- footer End-->
</div>


<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
    <p>Are you sure you want to log out?</p>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="button-box">
        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
       <a href="{{ url('/') }}"> <button type="button"  class="btn  btn--yes btn-primary">Yes</button></a>
    </div>
</div>
</div>
</div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="adminAssets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="adminAssets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js -->
<script src="adminAssets/js/icons/feather-icon/feather.min.js"></script>
<script src="adminAssets/js/icons/feather-icon/feather-icon.js"></script>

<!-- scrollbar simplebar js -->
<script src="adminAssets/js/scrollbar/simplebar.js"></script>
<script src="adminAssets/js/scrollbar/custom.js"></script>

<!-- Sidebar jquery -->
<script src="adminAssets/js/config.js"></script>

<!-- tooltip init js -->
<script src="adminAssets/js/tooltip-init.js"></script>

<!-- Plugins JS -->
<script src="adminAssets/js/sidebar-menu.js"></script>
<script src="adminAssets/js/notify/bootstrap-notify.min.js"></script>
<script src="adminAssets/js/notify/index.js"></script>

<!-- Apexchar js -->
<script src="adminAssets/js/chart/apex-chart/apex-chart1.js"></script>
<script src="adminAssets/js/chart/apex-chart/moment.min.js"></script>
<script src="adminAssets/js/chart/apex-chart/apex-chart.js"></script>
<script src="adminAssets/js/chart/apex-chart/stock-prices.js"></script>
<script src="adminAssets/js/chart/apex-chart/chart-custom1.js"></script>


<!-- slick slider js -->
<script src="adminAssets/js/slick.min.js"></script>
<script src="adminAssets/js/custom-slick.js"></script>

<!-- customizer js -->
<script src="adminAssets/js/customizer.js"></script>

<!-- ratio js -->
<script src="adminAssets/js/ratio.js"></script>

<!-- sidebar effect -->
<script src="adminAssets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="adminAssets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:41:50 GMT -->
</html>
