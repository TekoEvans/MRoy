@extends('layouts.master')
@section('content')

<x-app-layout>
{{-- <section id="common_banner_one">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_banner_text">
                    <h2>Profile</h2>
                    <ul>
                        <li><a href=" {{url('/')}}">Home</a></li>
                        <li><i class="fas fa-slash"></i></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>--}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
