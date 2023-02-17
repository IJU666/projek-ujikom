@extends('data.layout')
@section('admin')
<h3 class="text-center mt-3 mb-3">Data Pengguna</h3>
<table class="table border-1 container">
    <thead>
      <tr>
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
        @endif
        @endforeach
    </tbody>
  </table>
  <script type="text/javascript">
    window.print()
  </script>
  @endsection
