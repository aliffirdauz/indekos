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
              src="./assets/images/photo.webp"
              alt="Photo Profile"
              class="photo-profile"
            />
            <div>
              <p class="title-content mb-2">Good Morning, Yeager</p>
              <p class="subtitle-content">
                Finish your profile.
                <a href="#" class="btn-link">Edit now</a>
              </p>
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
        </div>
        <div class="d-flex gap-4 flex-wrap">
          @for($i=0; $i<9; $i++)
          <div class="product-card">
            <img
              src="/assets/img/luar.jfif"
              alt="Kosan"
              width="260"
              height="180"
            />
            <div class="product-detail pt-3">
              <div>
                <p class="label-detail mb-1">Putra</p>
                <p class="title-detail">Kost Abah Abaw</p>
              </div>
            </div>
            <div class="product-detail pt-4">
              <div>
                <p class="label-detail mb-1">Harga:</p>
                <p class="price-detail">Rp 750.000</p>
              </div>
              <button
                class="buy-product button btn-rounded active"
                onclick="handleBuy(this)"
              >
                Lihat
              </button>
            </div>
          </div>
          @endfor
      </section>
    </main>
@endsection