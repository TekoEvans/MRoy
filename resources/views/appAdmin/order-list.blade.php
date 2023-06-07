@extends('layouts.masterAdmin')
@section('content')

            <!-- Order section Start -->
            <div class="page-body">
                <!-- Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Order List</h5>
                                        <a href="{{ url('list-reservation') }}" class="btn btn-solid">Rafraichir</a>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                             @if(session('message'))
                                                         <div   class="text-primary container">
                                                               <h3>{{ session('message') }}</h3>
                                                         </div>

                                            @endif
                                            <table class="table all-package order-table theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Event</th>
                                                        <th>Date</th>
                                                        <th>peoples</th>
                                                        <th>lieu</th>
                                                        <th>Telephone</th>
                                                        <th>Status</th>
                                                        <th>Decision/Voir</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($reservations as $reservation)
                                                    <tr data-bs-toggle="offcanvas" href="#order-details">


                                                        <td> {{ $reservation->libelle }}</td>

                                                        <td>{{ $reservation->date }}</td>

                                                        <td>{{ $reservation->nbrPeople }}</td>

                                                        <td >
                                                         {{ $reservation->lieu }}
                                                        </td>

                                                        <td class="order-success"><span>{{ $reservation->telephone }}</span></td>


                                                    @if($reservation->isAccept==1)
                                                    <td style=" color: green;">vous avez accepter</td>
                                                    @elseif ($reservation->isAccept==2)
                                                        <td style="  color: orange;">Aucune decision</td>
                                                    @elseif ($reservation->isAccept==3)
                                                        <td style="color: blue;"> le client a annuler</td>
                                                  @elseif($reservation->isAccept==0)
                                                  <td style=" color: red;">vous avez Refuser</td>

                                                    @else
                                                    <td style=" background-color: rgb(93, 93, 102); color: white;">----</td>

                                                    @endif
                                                        <td>
                                                            <ul>


                                                                <li>
                                                                    <form action="{{ url('ReservationAccept/'.$reservation->id) }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <button type="submit"  class="btn btn-sm btn-solid text-white">
                                                                            Accepter
                                                                        </button>
                                                                    </form>


                                                                </li>
                                                                <li>
                                                                    <form action="{{ url('ReservationRefus/'.$reservation->id) }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-sm btn-danger text-white">
                                                                            Refuser
                                                                        </button>
                                                                    </form>
                                                                </li>


                                                            </ul>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
 @endsection
