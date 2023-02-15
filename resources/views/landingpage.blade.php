@extends('layout.layout')
@include('layout.navbar')
@section('content')
<div class="col-lg-12 py-5" style="background-color: #F5F5F5;">
    <div class="col-lg-10 mx-auto row">
        <div class="col-lg-5 align-self-center mx-auto">
            <h5 class="fw-semibold">A S P E R A</h5>
            <h5 class="fw-semibold">Layanan Aspirasi</h5>
            <h5 class="fw-semibold">dan Pengaduan Masyarakat</h5>
            <p>Laporkan Keluhan atau Aspirasi Kepada Lembaga Pemerintah Berwenang</p>
        </div>
        <div class="col-lg-5 float-end mx-auto">
            <img src="img/konten1.png" class="img-fluid" width="350" alt="">
        </div>
    </div>
</div>
<div class="container mt-4">
    <h5 class="fw-semibold text-center">Alur Aspera</h5>
    <div class="border-top border-3 col-lg-1 mx-auto"></div>
    <div class="mt-4">
        <img src="img/alur.png" class="img-fluid" width="" alt="">
    </div>
<div class="mt-5">
    <h5 class="fw-semibold text-center">Sampaikan laporan anda</h5>
    <div class="col-lg-1 border-top border-3 mx-auto "></div>
</div>
<div class="col-lg-4 mt-5 mx-auto">
    <p><small>Pilih Klasifikasi Laporan</small></p>
    <form action="" method="post">
        <div class="row col-lg-12 mx-auto">
        <div class="form-check d-inline col-lg-5 p-2 rounded-2" style="background-color: #F5F5F5;">
            <input class="form-check-input mx-auto" type="radio" name="pengaduan" id="exampleRadios1">
            <label class="form-check-label ms-1" for="exampleRadios1">
              Pengaduan
            </label>
          </div>
          <div class="form-check d-inline col-lg-5 ms-2 p-2 justify-content-center rounded-2" style="background-color: #F5F5F5;">
            <input class="form-check-input mx-auto" type="radio" name="aspirasi" id="exampleRadios2">
            <label class="form-check-label ms-1" for="exampleRadios2">
              Aspirasi
            </label>
          </div>
        </div>
        </div>
        <div class="rounded-3 col-lg-10 mx-auto mt-5 pt-5 pb-3 shadow shadow-3" style="background-color: #F5F5F5;">
            <div class="form-floating col-lg-10 mx-auto mb-3">
                <textarea class="form-control" name="isi" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px;" required></textarea>
                <label for="floatingTextarea" class="fw-semibold text-secondary">Ketik isi laporan anda*</label>
                <div class="row">
                <div class="form-floating col-lg-6 mt-3">
                    <textarea class="form-control" name="alamat" placeholder="Leave a comment here" id="floatingTextarea" style="height: 120px;" required></textarea>
                    <label for="floatingTextarea" class=" ms-2 fw-semibold text-secondary">Masukan alamat lengkap kejadian*</label>
                  </div>
                  <div class="mt-3 col-lg-6">
                    <label for="tanggal" class="form-text mt-2 text-secondary">Upload lampiran</label>
                    <input type="date" name="tglpengaduan" id="tanggal" class="form-control" required>
                    <label for="lampiran" class="form-text mt-2 text-secondary">Upload lampiran</label>
                    <input type="file" name="lampiran" id="lampiran" class="form-control" required>
                    <div class="form-text text-end">Format jpg, jpeg dan png*</div>
                  </div>
                </div>
                <div class="col-lg-4 mt-4 border mx-auto">
                <button type="submit" name="kirim" class="btn btn-outline-primary col-lg-12">Kirim</button>
            </div>
              </div>
        </div>
    </form>
</div>
<div class="mt-5 py-4" style="background-color: #00AFF5;">
    <h4 class="fw-semibold text-center text-light">Jumlah pengaduan saat ini</h4>
    <h1 class="text-center text-light">100</h1>
</div>
@include('layout.footer')
@endsection

