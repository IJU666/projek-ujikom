@extends('data.layout')
@section('admin')
<h3 class="text-center mt-3 mb-3">Data Pengaduan</h3>
<table class="table border-1 container">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Isi Laporan</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Asal Pelapor</th>
        <th scope="col">Lampiran</th>
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
        @endif
        @endforeach
    </tbody>
  </table>
  <script type="text/javascript">
    window.print()
  </script>
  @endsection
