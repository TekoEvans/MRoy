@extends('layouts.master')

@section('content')


<!-- Banner Area -->
<section id="common_banner_one">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_banner_text">
                    <h2>Forgot password</h2>
                    <ul>
                        <li><a href=" {{url('/')}}">Home</a></li>
                        <li><i class="fas fa-slash"></i></li>
                        <li class="active">Forgot password</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="login_area" class="ptb-100">
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
<div class="account_form">
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="default-form-box">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  class="form-control" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div  class="login_submit"  >
            <div class="login_submit" >  
            <x-primary-button class="theme-btn-one btn-black-overlay btn_md">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
           </div>
        </div>
    </form>

</div>
</div>
</div>
</div>
</section>
@endsection
