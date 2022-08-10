@extends('user.layouts.main')

@section('content')
  <!-- Begin Site Title -->
  <div class="container">
    <div class="mainheading">
      <h1 class="sitetitle">Sistem Informasi Indekos Dekat ITENAS</h1>
    </div>
    <!-- End Site Title -->

    <!-- Begin List Posts -->
    <section>
      <div class="section-title">
        <h2><span>Detail Kost</span></h2>
      </div>
      <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @foreach ($fotos as $f)
          <div class="carousel-item active">
            <img src="{{ asset('assets/images').'/'.$f->nama_file}}" class="d-block w-100" alt="...">
          </div>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        <h1>{{$kosans->nama_kosan}}</h1>
        <h5><i class="bi bi-geo-alt"></i>   {{$kosans->alamat}}</h5>
        <h5><i class="bi bi-tags"></i>    Rp.{{number_format($kosans->harga)}}/bulan</h5>
        <h5><i class="bi bi-people"></i>    {{$kosans->jenis}}</h5>
        <h5><i class="bi bi-house-door"></i>    Maks. {{$kosans->kapasitas}} orang/kamar</h5>
        <h4 class="mt-4">Deskripsi</h4>
        <p>{!! $kosans->deskripsi !!}</p>
        <h4 class="mt-4">Fasilitas Kamar</h4>
        <p>{!! $kosans->fasilitas_kamar !!}</p>
        <h4 class="mt-4">Fasilitas Kamar Mandi</h4>
        <p>{!! $kosans->fasilitas_kamar_mandi !!}</p>
        <h4 class="mt-4">Fasilitas Umum</h4>
        <p>{!! $kosans->fasilitas_umum !!}</p>
        <h4 class="mt-4">Fasilitas Parikir</h4>
        <p>{!! $kosans->fasilitas_parkir !!}</p>
        <h4 class="mt-4">Peraturan</h4>
        <p>{!! $kosans->peraturan !!}</p>
      </div>
    </section>


@endsection