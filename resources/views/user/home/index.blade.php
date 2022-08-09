@extends('user.layouts.main')

@section('content')
  <!-- Begin Site Title -->
  <div class="container">
    <div class="mainheading">
      <h1 class="sitetitle">Sistem Informasi Indekos Dekat ITENAS</h1>
    </div>
    <!-- End Site Title -->

      <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">Daftar Kost</h4>
        </div>
        <div class="d-flex gap-4 flex-wrap">
          <div class="row">
            @foreach ($kosans as $kosan)
            <div class="col-md-3 mb-3">
              <div class="product-card">
                @if ($kosan->foto)
                  <img src="{{ asset('storage/' . $kosan->foto) }}" alt="{{ $kosan->foto }}" class="img-fluid"  width="260" height="180">
                @else
                  <img src="https://source.unsplash.com/260x180?house" alt="{{ $kosan->foto }}" class="img-fluid" width="260" height="180">
                @endif
                <div class="product-detail pt-3">
                  <div>
                    <p class="label-detail mb-1">Kost {{$kosan->jenis}}</p>
                    <p class="title-detail">{{$kosan->nama_kosan}}</p>
                  </div>
                </div>
                <div class="product-detail pt-4">
                  <div>
                    <p class="label-detail mb-1">Harga:</p>
                    <p class="price-detail">Rp {{number_format($kosan->harga)}}/bulan</p>
                  </div>
                  <button
                    class="buy-product button btn-rounded active"
                    onclick="handleBuy(this)"
                  >
                    <a href="/post/{{$kosan->nama_kosan}}" class="text-white text-decoration-none">Lihat</a>
                  </button>
                </div>
              </div>
            </div>
            @endforeach
          </div>
      </section>
      {{$kosans->links()}}
  </div>
@endsection
