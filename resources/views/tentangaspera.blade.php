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
<div class="container">
    <h1 class="mt-5 text-center">A S P E R A</h1>
    <div class="border-bottom border-2 col-lg-3 mx-auto"></div>
    <p class="mt-4 ms-5 fs-5">Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional.</p>

    <p class="ms-5 fs-5">Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (Aspera) - Layanan Aspirasi dan Pengaduan Online Rakyat (Aspera) adalah layanan penyampaian semua aspirasi dan pengaduan masyarakat Indonesia melalui beberapa kanal pengaduan yaitu website www.aspera.com, SMS 1708 (Telkomsel, Indosat, Three), Twitter @aspera. Lembaga pengelola Aspera adalah Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden (KSP) sebagai Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai Pengawas Pelayanan Publik. LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (Aspera) berdasarkan Peraturan Presiden Nomor 76 Tahun 2013 dan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2015.</p>

    <P class="ms-5 fs-5">ASPERA dibentuk untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang menanganinya. ASPERA bertujuan agar:</p>

    <ul class="ms-5 fs-5">
        <li>Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan terkoordinasi dengan baik;</li>
        <li>Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan; dan</li>
        <li>Meningkatkan kualitas pelayanan publik.</li>
    </ul>
</div>
<div class="mt-5 py-4" style="background-color: #00AFF5;">
    <h4 class="fw-semibold text-center text-light">Jumlah pengaduan saat ini</h4>
    <h1 class="text-center text-light">100</h1>
</div>
@include('layout.footer')
@endsection

