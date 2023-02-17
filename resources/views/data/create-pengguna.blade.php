@extends('data.layout')
@section('admin')

    <div id="app">
        @include('data.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    <h3>Tambah Pengguna</h3>
</div>
<div class="page-content">
    <section class="row col-lg-10 mx-auto" >
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ url('/store') }}">
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
                      <div class="col-lg-6 my-2">
                        <label for="check" class="form-text">Role</label><br>
                        @foreach ($roles as $role)
                            <label for="check-{{ $role->id }}" class="form-text">{{ $role->name }}</label>
                            <input type="checkbox" name="role[]" class="btn" id="check-{{ $role->id }}" value="{{ $role->name }}">
                        @endforeach
                      </div>
                      <div class="border-top border-2 py-3">
                        <button type="submit" name="submit" class="btn btn-primary float-end">Simpan</button>
                        <button type="submit" class="btn btn-danger float-end mx-2" data-bs-dismiss="offcanvas" aria-label="Close">Batal</button>
                      </div>
                </form>
                {{-- <div class="row">
                    <div class="col-lg-4">
                        <input type="text" name="cari" id="" placeholder="Masukan Nama Pengguna" class="form-control">
                    </div>
                    <div class="col-lg-3 ">
                        <button type="submit" name="submit" class="btn btn-primary m-0 col-lg-3"><i class="fa-solid fa-magnifying-glass my-auto"></i></i></button>
                    </div>
                    <div class="col-lg-5 row ">
                        @hasrole('admin')
                        <div class="col-lg-6 ">
                        <a href="/cetakpengguna" class="btn btn-outline-primary float-end ">
                            Cetak Laporan
                        </a>
                    </div>
                        @endhasrole
                       <div class="col-lg-6 ">
                        <button type="button" class="btn btn-primary {{ ($title === "Cetak Pengguna") ? 'active' : ''  }}" data-bs-toggle="modal" data-bs-target="#modal-pengguna">
                            Tambah Pengguna
                        </button>
                    </div>


                    </div>
                </div>
            </form>
            <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">

              <table class="table table-striped">
                <thead>
                  <tr class="">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Pekerjaan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
              @if ($user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->tglahir }}</td>
                    <td>{{ $user->jk }}</td>
                    <td>{{ $user->notelp }}</td>
                    <td>{{ $user->pekerjaan }}</td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>

            </div> --}}
            {{-- <div>
                {{ $users->links() }}
            </div> --}}
    </section>
</div>
            <footer class="">

            </footer>
        </div>
    </div>

    @endsection
