 @extends('layouts.master')
 @section('content')


    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Login</h2>
                        <ul>
                            <li><a href=" {{url('/')}}">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Login</h3>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

             <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="default-form-box">
            <x-input-label for="email" :value="__('Username or email *')" class="space-y-1" required autofocus autocomplete="username"/>
            <x-text-input id="email"   type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  class="form-control  "/>
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <!-- Password -->
        <div class="default-form-box">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" class="form-control" />

            <x-input-error :messages="$errors->get('password')"  class="form-control " />
        </div>

        <!-- Remember Me -->
        <div  class="remember_area"  >
            <label for="remember_me"  class="checkbox-default">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

        </div>
        <div>
            <a href="{{url('register')}}">Create Your Account?</a>
        </div>

        <div class="login_submit" >
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="theme-btn-one btn-black-overlay btn_md">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
