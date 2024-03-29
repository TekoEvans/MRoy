<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from andit.co/projects/html/andshop/andshop_frontend/invoice-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 19:38:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Invoice - AndShop</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- color css -->
    <link rel="stylesheet" href="assets/css/color.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="assets/img/loader.gif" alt="img">
        </div>
    </div>

    <section class="theme-invoice-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 m-auto">
                    <div class="invoice-wrapper">
                        <div class="invoice-header">
                            <img src="assets/img/invoice/bg3.jpg" class="background-invoice">
                            <img src="assets/img/logo.png" class="img-fluid" alt="logo">
                        </div>
                        <div class="invoice-body">
                            <div class="top-sec">
                                <div class="row">
                                    <div class="col-xxl-8 col-md-7">
                                        <div class="address-detail">
                                            <div class="mt-2">
                                                <h4 class="mb-2">
                                                    2664 Tail Ends Road,
                                                </h4>
                                                <h4 class="mb-2"> ORADELL, New Jersey</h4>
                                                <h4 class="mb-0">NJ, 07649</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-5">
                                        <ul class="date-detail">
                                            <li><span>issue date :</span>
                                                <h4> 20 march, 2020</h4>
                                            </li>
                                            <li><span>invoice no :</span>
                                                <h4> 908452</h4>
                                            </li>
                                            <li><span>email :</span>
                                                <h4> user@gmail.com</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="title-sec">
                                <h2 class="title">invoice</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#" class="theme-btn-one btn-black-overlay btn_sm"
                                            onclick="window.print();">export as PDF</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" class="theme-btn-one btn-black-overlay btn_sm"
                                            onclick="window.print();">print</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sec">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">description</th>
                                                <th scope="col">price</th>
                                                <th scope="col">hrs.</th>
                                                <th scope="col">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Logo Designing</td>
                                                <td>$50</td>
                                                <td>2</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>website & banner design</td>
                                                <td>$30</td>
                                                <td>3</td>
                                                <td>$90</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>frontend development</td>
                                                <td>$95</td>
                                                <td>1</td>
                                                <td>$95</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>backend development</td>
                                                <td>$95</td>
                                                <td>1</td>
                                                <td>$95</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <div class="table-footer">
                                        <span>Grand Total:</span>
                                        <span>$1933.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer">
                            <img src="assets/img/invoice/shape.png" class="img-fluid design-shape" alt="">
                            <ul>
                                <li>
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <div>
                                        <h4>Andshop demo store</h4>
                                        <h4>USA, 362351</h4>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div>
                                        <h4>+1-202-555-0144</h4>
                                        <h4>+1-202-555-0117</h4>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div>
                                        <h4>support@Andshop.com</h4>
                                        <h4>demo@Andshop.com</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- img-upload js -->
    <script src="assets/js/img-upload.js"></script>
    <!-- Count js -->
    <script src="assets/js/count.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from andit.co/projects/html/andshop/andshop_frontend/invoice-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 19:38:05 GMT -->
</html>