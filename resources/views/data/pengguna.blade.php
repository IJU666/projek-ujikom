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
                        <button type="submit" name="submit" class="btn btn-primary m-0 col-lg-2"><i class="fa-solid fa-magnifying-glass my-auto"></i></button>
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
                        <th scope="col">Jenis Laporan</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col" colspan="2" class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Fauzi Maulana Akbar</td>
                        <td>Pengaduan</td>
                        <td>Terjadi perampokan di pasar cicaheum</td>
                        <td>Jalan pochinok duwar</td>
                        <td>08986283764</td>
                        <td class="col-1">
                            <button class="btn btn-primary col-9 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </button>
                        </td>
                        <td class="col-1"><a href="" class="btn btn-danger col-9 mx-auto"><i class="fa-solid fa-trash"></i></a></td>
                      </tr>

                      {{-- useless --}}
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>cinta sementara, epep selamanya</td>
                        <td>08238623223</td>
                        <td class="col-1"> <button class="btn btn-primary col-9 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="fa-solid fa-pen-to-square"></i>
                          </button></td>
                        <td class="col-1"><a href="" class="btn btn-danger col-9"><i class="fa-solid fa-trash"></i></a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>epep selamanya</td>
                        <td>08238623223</td>
                        <td class="col-1"> <button class="btn btn-primary col-9 float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="fa-solid fa-pen-to-square"></i>
                          </button></td>
                        <td class="col-1"><a href="" class="btn btn-danger col-9"><i class="fa-solid fa-trash"></i></a></td>
                      </tr>
                      {{-- useless --}}
                    </tbody>
                  </table>
            </div>
    </section>
</div>

@include('data.offcanvas')

            <footer class="">

            </footer>
        </div>
    </div>

    @endsection
