@extends('admin.layouts.main')

@section('content')
    <main class="content flex-fill">
      <section>
        <button
          aria-controls="sidebar"
          data-bs-toggle="offcanvas"
          data-bs-target=".sidebar"
          aria-label="Button Hamburger"
          class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <nav class="nav-content gap-5">
          <div class="d-flex gap-3 align-items-center">
            <img
              src="/assets/images/photo.webp"
              alt="Photo Profile"
              class="photo-profile"
            />
            <div>
              <p class="title-content mb-2">Welcome back, Admin!</p>
            </div>
          </div>
          <div class="search-wrapper">
            <div class="search-bar flex-fill">
              <input
                class="form-control"
                type="text"
                placeholder="Cari Kosan"
              />
            </div>
          </div>
        </nav>
      </section>

      <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">Daftar Kost</h4>
          <a class="btn btn-primary" href="/admin/create">
            <i class="bi bi-plus-circle"></i>
            Tambah Kost
          </a>
        </div>
        <div class="d-flex gap-4 flex-wrap">
          <div class="row">
            @foreach ($kosans as $kosan)
            <div class="col-md-4 mb-3">
              <div class="product-card">
                @if ($kosan->foto)
                  <img src="{{ asset('storage/' . $kosan->foto) }}" alt="{{ $kosan->foto }}" class="img-fluid"  width="260" height="180">
                @else
                  <img src="https://source.unsplash.com/260x180?house" alt="{{ $kosan->foto }}" class="img-fluid" width="260" height="180">
                @endif
                <div class="product-detail pt-3">
                  <div>
                    <p class="label-detail mb-1">{{$kosan->jenis}}</p>
                    <p class="title-detail">{{$kosan->nama_kosan}}</p>
                  </div>
                </div>
                <div class="product-detail pt-4">
                  <div>
                    <p class="label-detail mb-1">Harga:</p>
                    <p class="price-detail">Rp {{number_format($kosan->harga)}}</p>
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
    </main>
@endsection