 @extends('layouts.master')
 @section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>New Reservation</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">New Reservation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Product Area -->
    <section id="add_product_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="add_product_wrapper">
                        <div class="back_to_area">
                            <a href="{{ url('reservation') }}"><i class="fas fa-long-arrow-alt-left"></i> Back To Dashboard</a>
                        </div>
                        <h3>Adding New Reservation</h3>
                        <form  method="POST" action="{{url("reservationpost")}}" class="add_product_form">
                            @csrf

                            <div class="row">
                                <div class="col-lg-12">

                                </div>
                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="name_event">Events Name*</label>
                                        <input type="text" id="name_event"  name="libelle" class="form-control"
                                            placeholder="Anniverssaire/mariage...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="lieu">Lieu*</label>
                                        <input type="text" autocomplete="username" id="lieu"  name="lieu" class="form-control"
                                        placeholder="ville/quartier">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="type_cocktail">Type Cocktail </label>

                                        <select required name="type_cocktail" id="type_cocktail">
                                            <option value="Cocktail sans alcool">Cocktail sans alcool </option>
                                            <option value="Cocktail  alcooliser">Cocktail  alcooliser </option>
                                            <option value="alcol & soft">alcol & soft</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="date">Date of Event*</label>
                                        <input required type="date" name="Date" id="date" class="form-control name='date' @error('date_naissance') is-invalid @enderror"   value= "{{old('date')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="estimate_people">Estimate peoples*</label>
                                        <input type="number" name="nbrPeople" id="estimate_people" class="form-control"
                                            placeholder="30" required>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="telephone">Telephone*</label>
                                        <input required type="number" name="telephone" id=" telephone" class="form-control" placeholder="+228 91518939">

                                    </div>


                                </div>

                                <div class="col-lg-6">
                                    <div class="fotm-group">
                                        <label for="describ"> Description*</label>
                                        <textarea required id="describ" name="description" class="form-control" placeholder="detail sur l'evenement"  ></textarea>
                                    </div>
                                </div>



                                </div>
                                <div class="col-lg-12">
                                    <div class="btn_right_table">
                                        <button type="submit"  id="formatButton" class="theme-btn-one bg-yellow btn_sm">passer la reservation</button>
                                         
                                    </div>
                                </div>


                                <div id="myDiv" class="col-lg-4 container d-none">
                                    <h3 id="prix">   </h3>
                                </div>

                            </div>
                        </form>
                        <div class="col-lg-12">
                            <div class="btn_left_table">
                                <button   onclick= app(); id="formatButton" class="theme-btn-one bg-black btn_sm">Voir prix</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function app() {
        const myDiv = document.getElementById('myDiv');
        const input = document.getElementById('estimate_people');
        const prix = document.getElementById('prix');
        var contenu = input.value;
        prix.textContent = (contenu * 1500)+" FCFA";
        myDiv.classList.remove("d-none");
    }


    </script>


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
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post2.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post3.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post4.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post5.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post6.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post7.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post8.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post9.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post10.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post1.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post11.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/instagram/post12.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
