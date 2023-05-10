@extends('user.layouts.main')

@section('content')
  <!-- Begin Site Title -->
  <div class="container">
    <div class="mainheading">
      <h1 class="title-section-content">Sistem Informasi Indekos Dekat ITENAS</h1>
    </div>
    <!-- End Site Title -->

      <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">Daftar Kost</h4>
        </div>
        <div class="d-flex gap-4 flex-wrap">
          {{-- <div class="row row-cols-1 row-cols-md-4 g-4"> --}}
          <div class="row g-4">
            @foreach ($kosans as $kosan)
            <div class="col">
              <div class="card h-100">
                @if ($kosan->foto)
                  <img src="{{ asset('assets/images'.'/'. $kosan->foto) }}" alt="Foto Kosan" class="img-fluid"
                    style="width: 100%; height: 200px;">
                @else
                  <img src="https://source.unsplash.com/260x180?house" alt="{{ $kosan->foto }}" class="img-fluid" width="2048" height="768">
                @endif
                <div class="card-body">
                  <div class="text-limit">
                    <div class="d-flex justify-content-between">
                      <p class="label-detail mb-1"><i class="bi bi-geo"></i> {{$kosan->jarak}}m</p>
                      <p class="label-detail mb-1"><i class="bi bi-people"></i> Kost {{$kosan->jenis}}</p>
                    </div>
                    <p class="title-detail">{{$kosan->nama_kosan}}</p>
                    <p class="label-detail">{{$kosan->deskripsi}}</p>
                  </div>
                </div>
                <div class="product-detail pt-4 container mb-4">
                  <div>
                    <p class="label-detail mb-1">Harga:</p>
                    <p class="price-detail">Rp {{number_format($kosan->harga)}}/bulan</p>
                  </div>
                  <a href="/post/{{$kosan->nama_kosan}}" class="buy-product button btn-rounded active text-white text-decoration-none" onclick="handleBuy(this)">Lihat</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </section>
      {{$kosans->links()}}
  </div>
@endsection
