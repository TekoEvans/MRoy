@extends('layouts.master')
@section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Reservation</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Reservation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--vendor-area-Area -->
    <section id="vendor_area" class="ptb-100">
        @if (session()->has('message'))
        <div class="col-lg-6 container">
            <div class="fotm-group alert alert-success">

                    {{ session()->get('message') }}
            </div>
        </div>

         @endif
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">

                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#vendor_dashboard" class=" active"><i
                                class="fas fa-shopping-bag"></i>History</a></li>



                            <li><a href="{{url('newReservation')}}"><i class="fas fa-cart-plus"></i>New Reservation</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="vendor_dashboard">
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-sm-6 col-12">
                                    <div class="vendor_top_box">
                                        <h2>{{ $reservationCount  }}</h2>
                                        <h4>Total Reservation</h4>
                                    </div>
                                </div>


                            </div>



                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>Pending Resevation</h4>
                                        <table class="table pending_table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Reservation Id</th>
                                                    <th scope="col"> Evement</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                    <th scope="col">Montant</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($reservation as $reservations)
                                                <tr>

                                                    <td>#{{ $reservations->id }}</td>
                                                    <td>{{ $reservations->libelle}}</td>
                                                    <td>{{ $reservations->date}}</td>
                                                    @if($reservations->isAccept==1)
                                                    <td style="background-color: green; color: white;">Accepter</td>
                                                    @elseif ($reservations->isAccept==2)
                                                        <td style="background-color: orange; color: white;">En attent</td>
                                                    @elseif ($reservations->isAccept==3)
                                                        <td style=" background-color: blue; color: white;">Interomput</td>
                                                  @elseif($reservations->isAccept==0)
                                                  <td style=" background-color: red; color: white;">Refuser</td>

                                                    @else
                                                    <td style=" background-color: rgb(93, 93, 102); color: white;">----</td>
                                                    @endif
                                                    <td>

                                                        <form action="{{ url('reservationAnnuler/'.$reservations->id) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-outline-primary "> Annuler</button>



                                                    </form>




                                                </td>

                                                    <td>
                                                       {{($reservations->nbrPeople)* 1499,002  }}FCFA
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="tab-pane fade" id="all_order">
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-sm-6 col-12">
                                    <div class="vendor_top_box">
                                        <h2>{{ $reservationCount  }}</h2>
                                        <h4>Total Reservation</h4>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>All Reservation</h4>
                                        <div class="table-responsive">
                                            <table class="table pending_table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Reservation Id</th>
                                                        <th scope="col"> Evement</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($reservation as $reservations)
                                                    <tr>

                                                        <td>#{{ $reservations->id }}</td>
                                                        <td>{{ $reservations->libelle }}</td>
                                                        <td>{{ $reservations->date}}</td>
                                                        <td>Confrimed</td>
                                                        <td>$234</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="btn_right_table">
                                            <a href="{url('newReservation')}}" class="theme-btn-one bg-yellow btn_sm">Add
                                                Resevation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection
