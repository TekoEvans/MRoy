 @extends('layouts.master')
 @section('content')

  <!-- Banner Area -->
  <section id="common_banner_one">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_banner_text">
                    <h2>Register</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fas fa-slash"></i></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Register-Area -->
<section id="login_area" class="ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="account_form">
                    <h3>Register</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="default-form-box">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input class="form-control"  id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="form-control" />
                        </div>

                        <!-- fistname -->
                        <div class="default-form-box">
                            <x-input-label for="firstname" :value="__('Firstname')" />
                            <x-text-input class="form-control"  id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                            <x-input-error :messages="$errors->get('firstname')" class="form-control" />
                        </div>

                        <!-- Email Address -->
                        <div class="default-form-box">
                            <x-input-label  for="email" :value="__('Email')" />
                            <x-text-input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="form-control"  />
                        </div>

                        <!-- Password -->
                        <div class="default-form-box">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="form-control" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="default-form-box">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="form-control"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <x-primary-button class="theme-btn-one btn-black-overlay btn_md ">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

 @endsection
