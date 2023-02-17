@extends('data.layout')
@hasrole('masyarakat')
@include('layout.navbar')
@endhasrole
@section('admin')
@hasanyrole('admin|petugas')
    <div id="app">
        @include('data.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Data Pengaduan</h3>
            </div>
@endhasanyrole
<div class="page-content container">
    <section class="row" >
            <form action="" method="post" class="">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="text" name="cari" id="" placeholder="Masukan Nama Pengguna" class="form-control">
                    </div>
                    <div class="col-lg-1 ">
                        <button type="submit" name="submit" class="btn btn-primary m-0 col-lg-12"><i class="fa-solid fa-magnifying-glass my-auto"></i></button>
                    </div>

                @hasrole('admin')
                <div class=" col-lg-7">
                        <a href="/cetakpengaduan" class="btn btn-outline-primary float-end ">
                            Cetak Laporan
                        </a>
                    </div>
                        @endhasrole
                    </div>
            </form>
            <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
                <table class="table table-striped">
                    <thead>
                      <tr class="">
                        <th scope="col">No</th>
                        <th scope="col" class="col-lg-2">Jenis Laporan</th>
                        <th scope="col" class="col-lg-2">Isi Laporan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col" class="col-lg-2">Tanggal</th>
                        <th scope="col" class="col-lg-2">Asal Pelapor</th>
                        <th scope="col" class="text-center">Lampiran</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pengaduans as $pengaduan)
                    @if ($pengaduan)
                      <tr>
                        <td>{{ $pengaduan->id }}</td>
                        <td>{{ $pengaduan->jenis }}</td>
                        <td>{{ $pengaduan->isi }}</td>
                        <td>{{ $pengaduan->alamat }}</td>
                        <td>{{ $pengaduan->tglpengaduan }}</td>
                        <td>{{ $pengaduan->kirim }}</td>
                        <td class="text-center"><img src="{{ asset('/storage/' . $pengaduan->lampiran) }}" class="col-lg-12" alt=""></td>
                        <td class="col-1">
                            <button type="button" class="btn btn-primary col-9" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling{{ $pengaduan->id }}" aria-controls="offcanvasScrolling">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                        <td>@include('data.offcanvas')</td>
                        <td>
                        </td>
                      </tr>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
            </div>
    </section>
</div>


            <footer class="">

            </footer>
        </div>
    </div>

    @endsection
