@extends('layouts.masterAdmin')
@section('content')

            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Cocktails Informations</h5>
                                            </div>

                                            <form  action="{{ url('addcocktailpost') }}" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">

                                                @csrf

                                                <div class="row justify-content-center">

                                                    @if ($errors->any())
                                                    <div class="col-md-6 danger">
                                                        @foreach ( $errors->all() as  $error)
                                                        <ul>
                                                           <strong><li class=" text-danger">{{ $error }}</li></strong>
                                                        </ul>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Cocktail Name</label>

                                                    <div class="col-sm-9">
                                                        <input class="form-control" name="libelle" type="text" placeholder="Cocktail Name">

                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Type Cocktail</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="type_cocktail">
                                                            <option value="alcoolisé">alcoolisé</option>
                                                            <option value="Sans alcool">Sans alcool</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state">
                                                            <option disabled>Category Menu</option>
                                                            <option>Electronics</option>
                                                            <option>TV & Appliances</option>
                                                            <option>Home & Furniture</option>
                                                            <option>Another</option>
                                                            <option>Baby & Kids</option>
                                                            <option>Health, Beauty & Perfumes</option>
                                                            <option>Uncategorized</option>
                                                        </select>
                                                    </div>
                                                </div> --}}


                                                        <div class="card-header-2">
                                                            <h5>Description</h5>
                                                        </div>


                                                            <div class="row">
                                                                <div class="mb-4 row">

                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        <div class="card-header-2">
                                                            <h5>Product Images</h5>
                                                        </div>


                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-3 col-form-label form-label-title">Image1</label>

                                                                <div class="col-sm-9">
                                                                    <input class="form-control form-choose" type="file"
                                                                        id="formFile"  name="image1" multiple>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label class="col-sm-3 col-form-label form-label-title">
                                                                    Image 2</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control form-choose" name="image2" type="file"
                                                                        id="formFileMultiple1" multiple>
                                                                </div>
                                                            </div>

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-header-2">
                                                            <h5>Product Price</h5>
                                                        </div>


                                                            <div class="mb-4 row align-items-center">
                                                                <label class="col-sm-3 form-label-title">price</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control" type="number"  name="prix" placeholder="0">
                                                                </div>
                                                            </div>

                                                            </div>

                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <button type="submit"   class="  btn btn-solid ">Ajouter</button>
                                                        </div>
                                                    </div>


                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->
                @endsection
