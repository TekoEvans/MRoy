@extends('layouts.master')
@section('content')


    <!-- Banner Area -->
    <section id="banner_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_text_one">
                        <h1 class="wow flipInX" data-wow-duration="3.0s" data-wow-delay=".3s">Mr Roy<span
                                class="wow flipInX" data-wow-duration="2.0s" data-wow-delay=".5s"> cocktail</span></h1>
                        <h3>Service bar mobile</h3>
                        <a href="{{('cocktail')}}" class="theme-btn-one bg-black btn_md">Voir nos cocktail</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero_img">
                        <img src="assets/img/common/geo.png" alt="img" class="wow slideInRight" data-wow-duration="3.0s"
                            data-wow-delay=".3s">
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- Hot Product Area -->
    <section id="hot_Product_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Hot Product</h2>
                        <h4> Bienvenue sur notre site de commande de cocktails en ligne ! Nous sommes
                             ravis de vous offrir une expérience unique
                            pour vous permettre de profiter de délicieux cocktails,
                              confortablement installé chez vous ou à vos evenements.</h4>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-lg-12">
                    <div class="tabs_el_wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div id="new_arrival" class="tab-pane fade show in active" role="tabpanel">
                                <div class="row">
@foreach ($cocktails as $cocktails )
<div class="col-lg-3 col-md-4 col-sm-6 col-12">
    <div class="product_wrappers_one">
        <div class="thumb">
            <a href="https://www.instagram.com/p/CpyLskyttvd/?igshid=ODBmMmZkNzkxZQ==" class="image">
                <img src="assets/img/product-image/product1.png" alt="Product" />
                <img class="hover-image" src="assets/img/product-image/product7.png"
                    alt="Product" />
            </a>


        </div>
        <div class="content">
            {{-- <h4 class="title">
                <a href="{{ 'cocktail' }}" >{{ $cocktails->libele }} </a>
            </h4> --}}
            <h4 class="title"><a href="{{ 'cocktail' }}" >{{ $cocktails->libele }} </a>
            </h4>

        </div>
    </div>
</div>

@endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- Latest Blog Arae -->
    <section id="blog_area_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Latest Events</h2>
                        <p> Plongez-vous dans une expérience immersive remplie de moments mémorables, de performances époustouflantes et de rencontres enrichissantes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">

                                <img src="assets/img/blog/post1.png" alt="img" />

                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <a href=" ">16 November 2018</a>
                            </h5>
                            <h4 class="heading">
                                <a href=" ">Dinner de Gala au palas des eperviers</a>
                            </h4>
                        <p class="ara">


                        Le dîner de gala des étudiants est un événement spécial organisé par les étudiants, généralement dans un cadre formel et élégant. C'est une soirée qui célèbre les réalisations et les moments forts de l'année scolaire, tout en offrant une occasion de se rassembler et de socialiser.
                        </p>
                            <a href="https://www.instagram.com/p/Cey1nYWqgU9/?igshid=ODBmMmZkNzkxZQ==" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">

                                <img src="assets/img/blog/post2.png" alt="img" />

                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <p>10 Jna 2021</p>
                            </h5>
                            <h4 class="heading">
                                <a href=""> Une journée d'integration remplie de fraicheur  </a>
                            </h4>
                            <p class="para">
                                une occasion passionnante où les nouveaux membres d'un groupe se réunissent pour se connaître, créer des liens et renforcer l'esprit d'équipe à travers diverses activités ludiques et collaboratives
                            </p>
                            <a href=" https://m.facebook.com/story.php?story_fbid=pfbid02tNXK9scJW6EW2x4Mwisz8CZyAwT5Rovn3dXeGF2cJhsccbDApAU9CNmdtG5WbRZMl&id=662170647572441&mibextid=Nif5oz" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">

                                <img src="assets/img/blog/post3.png" alt="img" />

                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <a href=" ">25 February 2019</a>
                            </h5>
                            <h4 class="heading">
                                <a href=" "> Stantand de vente d'article poues les Etudiantsa leur sortie</a>
                            </h4>
                            <p class="para">
                                un espace dédié où des produits ou des services sont présentés et vendus aux clients. Il peut s'agir d'une structure temporaire ou permanente, souvent utilisée lors d'événements, de foires commerciales, de salons professionnels ou dans des lieux de vente au détail tels que les marchés.
                            </p>
                            <a href="https://made-in-togo.com/evenements/semaine-culturelle-a-l-ucao-uut-454" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Arae -->
    <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CpyLskyttvd/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post2.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CpyLskyttvd/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post3.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">

                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post4.png" alt="img" />

                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/Cey1nYWqgU9/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post5.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">

                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post6.png" alt="img" />

                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CoX7xMcKLiE/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post7.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CpQXwVrtT7X/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post8.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CpQXwVrtT7X/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post9.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/p/CqBrD7zNXxK/?igshid=ODBmMmZkNzkxZQ==">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post10.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">

                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post1.png" alt="img" />

                        </div>
                        <div class="instgram_post">

                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post11.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">

                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post12.png" alt="img" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection
