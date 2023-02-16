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
    <h3>Data Pengguna</h3>
</div>
<div class="page-content">
    <section class="row" >
            <form action="" method="post" class="">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="text" name="cari" id="" placeholder="Masukan Nama Pengguna" class="form-control">
                    </div>
                    <div class="col-lg-5">
                        <button type="submit" name="submit" class="btn btn-primary m-0 col-lg-2"><i class="bi bi-search my-auto"></i></button>
                    </div>
                    <div class="col-lg-3">
                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal-pengguna">
                            Tambah Pengguna
                        </button>
                    </div>
                    @include('data.modal-pengguna')
                </div>
            </form>
            <div class="rounded-3 mt-4 py-3 shadow shadow-md" style="background-color: #f3f3f3;">

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
                    <th scope="col" colspan="2" class="text-center">Aksi</th>
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
                    <td class="col-1">
                        <button class="btn btn-primary col-9 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                    </td>
                    <td class="col-1"><a href="" class="btn btn-danger col-9 mx-auto"><i class="bi bi-trash3"></i></a></td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>

            </div>
            {{-- <div>
                {{ $users->links() }}
            </div> --}}
    </section>
</div>

@include('data.offcanvas')

            <footer class="">

            </footer>
        </div>
    </div>

    @endsection
