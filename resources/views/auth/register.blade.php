@extends('layout.layout')
@section('content')
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<div class="card mb-3 col-lg-10 mx-auto mt-3 " >
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/daftar.png" class="img-fluid rounded-start" alt="..." style="height: 100vh;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="card-text">
              <h4 class="text-center fw-bold mt-3">ASPERA</h4>
              <p class="text-center text-secondary">Memulai dengan mudah</p>
              <div class="mt-3">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                      <div class=" col-lg-12 mx-auto">
                          <div class="row mx-auto">
                              <div class="col-lg-6">
                                  <label for="nama" class="form-text">Nama Lengkap</label>
                                  <input type="text" name="name" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" :value="old('name')" required autofocus>
                              </div>
                              <div class="col-lg-6">
                                  <label for="nik" class="form-text">Nomor Induk Kependudukan (NIK)</label>
                                  <input type="number" name="nik" id="nik" class="form-control col-lg-5" :value="old('nik')" placeholder="Masukan Nomor Induk Kependudukan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="tglahir" class="form-text">Tanggal Lahir</label>
                                  <input type="date" name="tglahir" id="tglahir" class="form-control col-lg-5" :value="old('tglahir')" placeholder="Masukan Nomor Induk Kependudukan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="jk" class="form-text">Jenis Kelamin</label>
                                  <select name="jk" id="jk" class="form-select" :value="old('jk')">
                                      <option selected>Pilih jenis kelamin</option>
                                      <option value="Laki - laki">Laki - laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                              <div class="col-lg-6">
                                  <label for="notelp" class="form-text">Nomor Telepon Aktif</label>
                                  <input type="number" name="notelp" id="notelp" class="form-control col-lg-5" :value="old('notelp')" placeholder="Masukan Nomor Telepon" required>
                              </div>
                              <div class="col-lg-6">
                                  <label for="pekerjaan" class="form-text">Pekerjaan</label>
                                  <input type="text" name="pekerjaan" id="pekerjaan" class="form-control col-lg-5" :value="old('pekerjaan')" placeholder="Masukan Pekerjaan" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="username" class="form-text">Nama Pengguna</label>
                                  <input type="text" name="username" id="username" class="form-control" :value="old('username')" placeholder="Masukan Nama Pengguna" required>
                              </div>
                              <div class="col-lg-6 my-2">
                                  <label for="email" class="form-text">Masukan Email Pengguna</label>
                                  <input type="email" name="email" id="email" class="form-control" :value="old('email')" placeholder="Masukan Email Aktif" required>
                              </div>
                              <div class="col-lg-6">
                                  <label for="password" class="form-text">Masukan Kata Sandi</label>
                                  <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Kata Sandi" required>
                              </div>
                              <div class="col-lg-6">
                                  <label for="password_confirmation" class="form-text">Ulang Kata Sandi</label>
                                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulang Kata Sandi" required>
                              </div>
                              <div class="form-check ms-3 mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Data yang dimasukan sudah sesuai dengan data diri
                                  </label>
                                </div>
                              <button value="submit" name="submit" class="col-lg-5 mx-auto btn btn-primary mt-4">{{ __('Buat Akun') }}</button>
                          </div>
                      </div>
                  </form>
              </div>
              <p class=" text-center fw-semibold">Sudah mempunyai akun?<a href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="mx-1 text-decoration-none">Masuk</a></p>
              @include('layout.masuk')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
