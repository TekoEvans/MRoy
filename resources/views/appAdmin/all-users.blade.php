@extends('layouts.masterAdmin')
@section('content')

            <!-- Container-fluid starts-->
            <div class="page-body">
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>All Users</h5>
                                        <form class="d-inline-flex">
                                            <a href="#" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather=""></i>Raffraichir
                                            </a>
                                        </form>
                                    </div>

                                    <div class="table-responsive table-product">
                                        <table class="table all-package theme-table" id="table_id">
                                            <thead>



                                                <tr>
                                                    <th>firstname</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ( $Users as $users )
                                                <tr>
                                                    <td>
                                                        <div class="user-name">
                                                            <span> {{ $users->name }}</span>

                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="user-name">
                                                             {{ $users->firstname }}

                                                        </div>
                                                    </td>

                                                    <td>  {{ $users->firstname}} </td>

                                                    <td>{{ $users->email }}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(1)">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModalToggle">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
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
                <!-- All User Table Ends-->
 @endsection

