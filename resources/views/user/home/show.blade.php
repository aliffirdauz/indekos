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
        <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/1200x400?house" alt="..." /></figure>
        <h1>{{$kosans->nama_kosan}}</h1>
        <h5>Rp.{{$kosans->harga}}/Bulan</h5>
        <h5>{{$kosans->alamat}}</h5>
        <h5>{{$kosans->jenis}}</h5>
        <h5>{{$kosans->kapasitas}}</h5>
        <h4 class="mt-4">Deskripsi</h4>
        <p>{!! $kosans->deskripsi !!}</p>
        <h4>Pemilik Kosan</h4>
        <div class="wrapfooter">
          <span>
            <a href="#"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Pemilik"></a>
            <span class="post-name"><a>{{ $kosans->pemilik->nama_pemilik }}</a></span><br/>
            <span class="post-name"><a>{{ $kosans->pemilik->no_hp }}</a></span><br/>
          </span>
        </div>
        <h4 class="mt-4">Fasilitas Kamar</h4>
        <p>{{$kosans->fasilitas_kamar}}</p>
        <h4 class="mt-4">Fasilitas Kamar Mandi</h4>
        <p>{{$kosans->fasilitas_kamar_mandi}}</p>
        <h4 class="mt-4">Fasilitas Umum</h4>
        <p>{{$kosans->fasilitas_umum}}</p>
        <h4 class="mt-4">Fasilitas Parikir</h4>
        <p>{{$kosans->fasilitas_parkir}}</p>
        <h4 class="mt-4">Peraturan</h4>
        <p>{{$kosans->peraturan}}</p>
        <h4 class="mt-4">Status</h4>
        <p>{{$kosans->status}}</p>

      </div>
    </section>


@endsection