@extends('layout.layout')
@section('content')
<div class="card  mx-auto my-5 pb-5 shadow" style="width: 40rem;">
    <div class="card-title container row py-3">
        <div class="col-lg-4    mb-3">
        <img src="img/logo.png" class="img-fluid" width="50px" alt="">
        </div>
        <div class="col-lg-8 text-end my-auto fw-semibold">
            <p>Belum mempunyai akun?
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-decoration-none">Daftar</a>
            @endif
            </p>
        </div>
    </div>
    <div class="card-body">
        <h4 class="text-bold text-center mb-5"><b> Selamat Siang</b></h4>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="col-lg-6 mx-auto">
                <label for="" class="form-text">Email</label>
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 col-lg-6 mx-auto">
                <label for="" class="form-text">Kata Sandi</label>
                <x-input id="password" class="block mt-1 w-full form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="row col-lg-6 mt-2 mx-auto">
            <div class="col-lg-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>
                <div class="col-lg-6 text-end">
            @if (Route::has('password.request'))
                    <a class="text-decoration-none text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa kata sandi') }}
                    </a>
                @endif
                </div>
            </div>

            <div class=" col-lg-6 my-5 mx-auto justify-end">
                <x-button class="ml-3 btn btn-primary col-lg-12">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
    </div>
  </div>
@endsection
