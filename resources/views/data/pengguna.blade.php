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

            </div>
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
