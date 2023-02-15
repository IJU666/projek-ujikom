@extends('layout.layout')
@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <h2 class="text-center">Lupa Kata Sandi?</h2>

        <div class="mb-4 col-lg-7 text-center mx-auto text-sm text-gray-600">
            {{ __('jika anda lupa atau terjadi kesalahan pada kata sandi anda, anda dapat merubah password disini') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <div class="col-lg-10 mx-auto text-center">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="col-lg-3 mx-auto">
                <x-label for="email" class="form-text" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                <div class="flex items-center justify-end mt-4">
                    <x-button class="btn btn-danger col-lg-12">
                        {{ __('Kirim link reset kata sandi') }}
                    </x-button>
                </div>
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
