  @extends('layouts.master')
  @section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="contact_area" class="ptb-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="contact_form_one">
                        <h3>Get In Touch</h3>
                        <form action="#!">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea rows="7" class="form-control" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="submit_bitton_contact_one">
                                        <button class="theme-btn-one btn-black-overlay btn_md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="left_side_contact">
                        <ul>
                            <li class="address_location">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Attiegou</p>
                            </li>
                            <li class="address_location">
                                <i class="fas fa-phone-volume"></i>
                                <div class="contact_widget">
                                    <a href="#!">+(228) 92423387</a>
                                    <a href="#!">+(228)</a>
                                </div>
                            </li>
                            <li class="address_location">
                                <i class="far fa-envelope"></i>
                                <div class="contact_widget">
                                    <a href="#!">evans.degbe@gmail.com</a>
                                    <a href="#!">degbegeoffroy66@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection
