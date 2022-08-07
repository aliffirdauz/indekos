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
          <div class="row justify-content-center">
            @foreach ($kosans as $kosan)
            <div class="col-md-3 mb-3">
              <div class="product-card">
                <img
                  src="https://source.unsplash.com/1200x400?house"
                  alt="Kosan"
                  width="260"
                  height="180"
                />
                <div class="product-detail pt-3">
                  <div>
                    <p class="label-detail mb-1">{{$kosan->jenis}}</p>
                    <p class="title-detail">{{$kosan->nama_kosan}}</p>
                  </div>
                </div>
                <div class="product-detail pt-4">
                  <div>
                    <p class="label-detail mb-1">Harga:</p>
                    <p class="price-detail">Rp {{$kosan->harga}}</p>
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