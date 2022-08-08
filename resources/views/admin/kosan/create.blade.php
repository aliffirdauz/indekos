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
            </nav>
        </section>

        <section class="d-flex flex-column gap-4">
            <div class="d-flex justify-content-between align-items-center gap-3">
                <h4 class="title-section-content">Tambah Kost</h4>
            </div>
            <form action="/admin" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="form-group mb-3">
                <label for="pemilik_id" class="form-label">Nama Pemilik Kost</label>
                <select class="form-select" aria-label="Pemilik Kost">
                    <option selected>Pilih Pemilik Kost</option>
                    @foreach ($pemiliks as $pemilik)
                        <option value="{{ $pemilik->id }}">{{ $pemilik->nama_pemilik }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_kosan" class="form-label">Nama Kost</label>
                    <input type="text" class="form-control @error('nama_kosan') 'is-invalid' @enderror" id="nama_kosan" name="nama_kosan" placeholder="masukkan nama kost" required value="{{ old('nama_kosan') }}" autofocus>
                    @error('nama_kosan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') 'is-invalid' @enderror" id="alamat" name="alamat" rows="3" required value="{{ old('alamat') }}" autofocus></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control @error('harga') 'is-invalid' @enderror" id="harga" name="harga" placeholder="masukkan harga kost" required value="{{ old('harga') }}" autofocus>
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas Kamar</label>
                    <input type="number" class="form-control @error('kapasitas') 'is-invalid' @enderror" id="kapasitas" name="kapasitas" placeholder="masukkan kapasitas kamar" required value="{{ old('kapasitas') }}" autofocus>
                    @error('kapasitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jenis" class="form-label">Jenis Kost</label>
                    <select class="form-select" aria-label="Jenis Kost">
                        <option selected>Pilih Jenis Kost</option>
                        <option value="Putra">Putra</option>
                        <option value="Putri">Putri</option>
                        <option value="Putra/Putri">Putra/Putri</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="foto" class="form-label">Foto Kost</label>
                    <img class="img-preview img-fluid mb-2 col-sm-5">
                    <input class="form-control @error('foto') 'is-invalid' @enderror" type="file" id="foto" name="foto" onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi Kost</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                    <trix-editor input="deskripsi"></trix-editor>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_kamar">Fasilitas Kamar</label>
                    <input id="fasilitas_kamar" type="hidden" name="fasilitas_kamar" value="{{ old('fasilitas_kamar') }}">
                    <trix-editor input="fasilitas_kamar"></trix-editor>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_kamar_mandi">Fasilitas Kamar Mandi</label>
                    <input id="fasilitas_kamar_mandi" type="hidden" name="fasilitas_kamar_mandi" value="{{ old('fasilitas_kamar_mandi') }}">
                    <trix-editor input="fasilitas_kamar_mandi"></trix-editor>
                    @error('fasilitas_kamar_mandi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_umum">Fasilitas Umum</label>
                    <input id="fasilitas_umum" type="hidden" name="fasilitas_umum" value="{{ old('fasilitas_umum') }}">
                    <trix-editor input="fasilitas_umum"></trix-editor>
                    @error('fasilitas_umum')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_parkir">Fasilitas Parkir</label>
                    <input id="fasilitas_parkir" type="hidden" name="fasilitas_parkir" value="{{ old('fasilitas_parkir') }}">
                    <trix-editor input="fasilitas_parkir"></trix-editor>
                    @error('fasilitas_parkir')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="peraturan">Peraturan Kost</label>
                    <input id="peraturan" type="hidden" name="peraturan" value="{{ old('peraturan') }}">
                    <trix-editor input="peraturan"></trix-editor>
                    @error('peraturan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status" class="form-label">Status Kamar</label>
                    <select class="form-select" aria-label="Status Kamar">
                        <option selected>Pilih Status Kamar</option>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Tidak Tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <div>
                    <a class="btn btn-secondary mt-3 me-2" href="/admin">Kembali</a>
                    <button type="submit" value="submit" class="btn btn-primary mt-3">Tambah Kost</button>
                </div>
            </form>
        </section>
    </main>
@endsection