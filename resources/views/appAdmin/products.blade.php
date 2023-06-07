
        @extends('layouts.masterAdmin')
        @section('content')

            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>Products List</h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-solid" href="{{ url('adminAddCoktail')}}">Add Cocktail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            @if(session('message'))
                                                <div class="order-success">
                                                    {{ session('message') }}
                                                </div>
                                              @endif

                                            <table style="word-break: break-all; " class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>

                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($cocktails as $cocktail)
                                                    <tr>
                                                        <td>
                                                            <div class="table-image">
                                                                <img src="assets/img/product-image/product1.png" class="img-fluid"
                                                                    alt="">
                                                            </div>
                                                        </td>

                                                        <td>{{ $cocktail->libele }}</td>

                                                        <td>{{ $cocktail->description }}</td>

                                                        <td class="td-price">{{ $cocktail->prix }}</td>



                                                        <td>
                                                            <ul>
                                                                {{-- <li>
                                                                    <a href="order-detail.html">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li> --}}



                                                                <li>

                                                                    <form action="{{ url('cocktailDelete/'.$cocktail->id) }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                         <button type='submit'>
                                                                        <i class="ri-delete-bin-line"></i>
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
                <!-- Container-fluid Ends-->
                @endsection
                {{-- <div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <!-- page-wrapper End-->

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
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->

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

    <!-- Sidebar js -->
    <script src="adminAssets/js/config.js"></script>

    <!-- customizer js -->
    <script src="adminAssets/js/customizer.js"></script>

    <!-- Plugins js -->
    <script src="adminAssets/js/sidebar-menu.js"></script>
    <script src="adminAssets/js/notify/bootstrap-notify.min.js"></script>
    <script src="adminAssets/js/notify/index.js"></script>

    <!-- Data table js -->
    <script src="adminAssets/js/jquery.dataTables.js"></script>
    <script src="adminAssets/js/custom-data-table.js"></script>

    <!-- sidebar effect -->
    <script src="adminAssets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="adminAssets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:42:08 GMT -->
</html> --}}
