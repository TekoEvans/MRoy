<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from andit.co/projects/html/andshop/andshop_frontend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 19:30:10 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>Mr Roy sevice bar mobile</title>
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
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="assets/img/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffcd38" />
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffcd38" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/js/app.js'])
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="assets/img/loader.gif" alt="img" />

        </div>
        @auth
            <div id="status" class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("You're logged in!") }}

                        </div>
                    </div>
                </div>
            </div>
        @endauth
    </div>



    <!-- Navebar Area -->
    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="#">
                            <img style="width: 50px; height: 50px;" src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="">
                        <img style="width: 100px; height: 100px;" src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a>

                            </li>
                            <li class="nav-item megamenu"><a href="{{ 'cocktail' }}" class="nav-link">Cocktail</a>

                            </li>
                            {{-- <li  class="nav-item"><a href="{{ 'blog' }}" class="nav-link hove" >Blog</a> --}}
                            <li class="nav-item"><a href="{{ 'reservation' }}" class="nav-link">Reservation </a>

                            </li>



                            <li class="nav-item"><a href="{{ 'contact' }}" class="nav-link">Contact </a>

                            </li>


                        </ul>

                        @if (Route::has('login'))
                            <div class="others-option">

                                <div class="option-item">

                                    <ul class="navbar-nav" class="dropdown-menu">
                                        @auth


                                            <li class="nav-item"><a href="#"
                                                    class="nav-link">{{ Auth::user()->name }} <i
                                                        class='fas fa-chevron-down'></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ 'profile' }}">profile</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </ul>
                                            </li>
                                            @if (Auth::user()->isAdmin)
                                                <li class="nav-item"><a href="/admin" class="nav-link">Admin
                                                    </a>
                                                </li>
                                            @else
                                                <div class="others-option">

                                                    <div class="option-item">
                                                        <div class="cart-btn">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#shoppingCartModal"><i
                                                                    class='fas fa-shopping-bag'></i><span>3</span></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endif
                                        @else
                                            <li class="nav-item">
                                                <div class="cart-btn">

                                                    <a href="{{ 'login' }}" class="nav-link"> Login
                                                    </a>

                                                </div>

                                            </li>

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <div class="cart-btn">

                                                        <a href="{{ 'register' }}" class="nav-link"> register </a>

                                                    </div>

                                                </li>
                                            @endif
                                        </ul>

                                    @endauth
                                </div>
                        @endif
                    </div>
            </div>
            </nav>
        </div>
    </div>
    </div>


    @yield('content')


    <!-- footer Area -->
    <footer id="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="#!"><img style="width: 150px; height: 150px;" src="assets/img/logogif.gif"
                                alt="logo" /></a>
                        <p>
                            Chaque cocktail est préparé avec soin
                            pour offrir une expérience gustative inoubliable. Nous sommes fiers de fournir
                            à nos clients une boisson exceptionnelle qui répond à leurs attentes.
                        </p>
                        <div class="footer_left_side_icon">
                            <ul>



                                <li>
                                    <a href="https://www.instagram.com/p/CpyLskyttvd/?igshid=ODBmMmZkNzkxZQ=="><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/p/CpyLskyttvd/?igshid=ODBmMmZkNzkxZQ=="><i
                                            class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>NEWSLETTER</h3>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form>
                                <div class="mc-form">
                                    <input class="form-control" type="email" required=""
                                        placeholder="Your Mail*" name="EMAIL" value="" />
                                    <div class="clear">
                                        <button class="theme-btn-one btn_md" type="submit" name="subscribe"
                                            value="">
                                            <i class="icon-cursor"></i> Send Mail
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- CopyRight Area -->
    <section id="copyright_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_left">
                        <h6>© CopyRight 2023
                            <span>Mr Roy cocktail</span>
                        </h6>
                    </div>
                </div>

            </div>
        </div>
    </section>





    {{-- <!-- Product Modal Area Start-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="product_one_modal_top modal-content">
                <button type="button" class="close close_modal_icon" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body" id="product_slider_one">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="products_modal_sliders owl-carousel owl-theme">
                                <img src="assets/img/product-image/produ.png" alt="img" />
                                <img src="assets/img/product-image/product2.png" alt="img" />
                                <img src="assets/img/product-image/product3.png" alt="img" />
                                <img src="assets/img/product-image/product4.png" alt="img" />
                                <img src="assets/img/product-image/product5.png" alt="img" />
                                <img src="assets/img/product-image/product6.png" alt="img" />
                                <img src="assets/img/product-image/product7.png" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="modal_product_content_one">
                                <h3>Black fashion handbag JI9023</h3>
                                <div class="reviews_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(2 Customer Review)</span>
                                </div>
                                <h4>$317.76</h4>
                                <p>
                                    Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen.
                                </p>
                                <div class="variable-single-item">
                                    <span>Color</span>
                                    <div class="product-variable-color">
                                        <label for="modal-product-color-red1">
                                            <input name="modal-product-color" id="modal-product-color-red1"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-red"></span>
                                        </label>
                                        <label for="modal-product-color-green3">
                                            <input name="modal-product-color" id="modal-product-color-green3"
                                                class="color-select" type="radio">
                                            <span class="product-color-green"></span>
                                        </label>

                                        <label for="modal-product-color-blue5">
                                            <input name="modal-product-color" id="modal-product-color-blue5"
                                                class="color-select" type="radio">
                                            <span class="product-color-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <form action="#!" id="product_count_form_one">
                                    <div class="product_count_one">
                                        <div class="plus-minus-input">
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="minus"
                                                    data-field="quantity">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="quantity"
                                                value="0" />
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="plus"
                                                    data-field="quantity">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="theme-btn-one btn-black-overlay btn_sm">Add To
                                            Cart</a>
                                    </div>
                                </form>
                                <div class="modal_share_icons_one">
                                    <h4>SHARE THIS PRODUCT</h4>
                                    <div class="posted_icons_one">
                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#!"><i class="fab fa-instagram"></i></a>
                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <!-- Wishlist Modal Area Start-->

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Count js -->
    <script src="assets/js/count.js"></script>
    <!-- Timer js -->
    <script src="assets/js/timer.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script>
        new WOW().init();
    </script>
</body>



</html>
