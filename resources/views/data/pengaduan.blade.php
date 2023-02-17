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
                </div>
                @hasrole('admin')
                        <a href="/cetakpengaduan" class="btn btn-succes ">
                            Cetak Laporan
                        </a>
                        @endhasrole
            </form>
            <div class="rounded-3 mt-4 py-3 shadow" style="background-color: #f3f3f3;">
                <table class="table table-striped">
                    <thead>
                      <tr class="">
                        <th scope="col">No</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Asal Pelapor</th>
                        <th scope="col">Lampiran</th>
                        <th scope="col" colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($pengaduans as $pengaduan)
                    @if ($pengaduan)
                      <tr>
                        <td>{{ $pengaduan->id }}</td>
                        <td>{{ $pengaduan->isi }}</td>
                        <td>{{ $pengaduan->alamat }}</td>
                        <td>{{ $pengaduan->tglpengaduan }}</td>
                        <td>{{ $pengaduan->kirim }}</td>
                        <td>{{ $pengaduan->lampiran }}</td>
                        <td></td>
                        <td class="col-1">
                            <a class="btn btn-primary col-9 " href="{{ $pengaduan->id }}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                      </tr>
                    @endif
                    @endforeach
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
