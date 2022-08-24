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
        <div class="card" style="width: 81rem;">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                @if ($kosans->foto)
                  <img src="{{ asset('assets/images'.'/'. $kosans->foto) }}" alt="Foto Kosan" class="img-fluid"  width="2048" height="768">
                @else
                  <img src="https://source.unsplash.com/260x180?house" alt="{{ $kosan->foto }}" class="img-fluid" width="2048" height="768">
                @endif
              </div>
              @foreach ($fotos as $f)
                <div class="carousel-item">
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
          <div class="card-body">
            <h1 class="mb-2">{{$kosans->nama_kosan}}</h1>
            <h5><i class="bi bi-geo-alt"></i>   {{$kosans->alamat}}</h5>
            <h5><i class="bi bi-tags"></i>    Rp.{{number_format($kosans->harga)}}/bulan</h5>
            <h5><i class="bi bi-geo"></i>    {{$kosans->jarak}}m</h5>
            <h5><i class="bi bi-people"></i>    {{$kosans->jenis}}</h5>
            <h5><i class="bi bi-house-door"></i>    Tersedia {{$kosans->kapasitas}} kamar</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h4>Deskripsi</h4>
              <p>{!! $kosans->deskripsi !!}</p>
            </li>
            <li class="list-group-item">
              <h4>Fasilitas Kamar</h4>
              <p>{!! $kosans->fasilitas_kamar !!}</p>
            </li>
            <li class="list-group-item">
              <h4>Fasilitas Kamar Mandi</h4>
              <p>{!! $kosans->fasilitas_kamar_mandi !!}</p>
            </li>
            <li class="list-group-item">
              <h4>Fasilitas Umum</h4>
              <p>{!! $kosans->fasilitas_umum !!}</p>
            </li>
            <li class="list-group-item">
              <h4>Fasilitas Parkir</h4>
              <p>{!! $kosans->fasilitas_parkir !!}</p>
            </li>
            <li class="list-group-item">
              <h4>Peraturan</h4>
              <p>{!! $kosans->peraturan !!}</p>
            </li>
          </ul>
          <div class="card-body">
            @if($mhsw->pembayaran == 'sudah')
              @if($mhsw->kosan_id == $kosans->id)
                <div>
                  <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                  <button type="submit" value="submit" class="btn btn-primary mt-3" disabled>Kamar Dipesan</button>
                  <p class="text-danger mt-2">Perhatian : Anda tidak dapat memilih kost lain karena telah membayar kost ini.</p>
                </div>
              @else
                <div>
                  <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                  <button type="submit" value="submit" class="btn btn-primary mt-3" disabled>Pesan Kamar</button>
                  <p class="text-danger mt-2">Perhatian : Anda tidak dapat memilih kost lain karena telah membayar kost pesanan anda sebelumnya.</p>
                </div>
              @endif
            @else
              @if($mhsw->kosan_id != null)
                  @if($mhsw->kosan_id == $kosans->id)
                    <form action="/post/unbook/{{$kosans->nama_kosan}}" method="POST">
                      @csrf
                      @method('delete')
                      <div>
                        <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                        <button type="submit" class="btn btn-danger mt-3 me-2" onclick="return confirm('Yakin ingin membatalkan pesanan?');">Batalkan Pesanan</button>
                      </div>
                    </form>
                  @else
                    <div>
                      <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                      <button type="submit" value="submit" class="btn btn-primary mt-3" disabled>Pesan Kamar</button>
                      <p class="text-danger mt-2">Perhatian : Anda telah memesan kamar lain, mohon batalkan pesanan anda terlebih dahulu.</p>
                    </div>
                  @endif
              @else
                @if($kosans->kapasitas != 0)
                  @if(($mhsw->jenis_kelamin == 'L' && $kosans->jenis == 'Putra')||($mhsw->jenis_kelamin == 'P' && $kosans->jenis == 'Putri')||($kosans->jenis == 'Putra/Putri'))
                    <form action="/post/{{$kosans->nama_kosan}}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                      @method('put')
                      @csrf
                      <div>
                        <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                        <button type="submit" value="submit" class="btn btn-primary mt-3" onclick="return confirm('Yakin ingin memesan kamar ini?');">Pesan Kamar</button>
                      </div>
                    </form>
                  @else
                    <div>
                      <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                      <button type="submit" value="submit" class="btn btn-primary mt-3" disabled>Pesan Kamar</button>
                      <p class="text-danger mt-2">Perhatian : Jenis kost tidak sesuai dengan jenis kelamin anda.</p>
                    </div>
                  @endif
                @else
                  <div>
                    <a class="btn btn-secondary mt-3 me-2" href="/">Kembali</a>
                    <button type="submit" value="submit" class="btn btn-primary mt-3" disabled>Pesan Kamar</button>
                    <p class="text-danger mt-2">Perhatian : Kamar kost telah terpesan semua.</p>
                  </div>
                @endif
              @endif
            @endif
          </div>
        </div>
    </section>


@endsection