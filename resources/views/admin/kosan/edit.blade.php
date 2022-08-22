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
                <h4 class="title-section-content">Edit Kost</h4>
            </div>
            <form action="/admin/{{$kosans->id}}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_kosan" class="form-label">Nama Kost</label>
                    <input type="text" class="form-control @error('nama_kosan') 'is-invalid' @enderror" id="nama_kosan" name="nama_kosan" placeholder="masukkan nama kost" required value="{{ old('nama_kosan', $kosans->nama_kosan) }}" autofocus>
                    @error('nama_kosan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') 'is-invalid' @enderror" id="alamat" name="alamat" rows="3" required value="{{ old('alamat',) }}" autofocus>{{$kosans->alamat}}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control @error('harga') 'is-invalid' @enderror" id="harga" name="harga" placeholder="masukkan harga kost" required value="{{ old('harga', $kosans->harga) }}" autofocus>
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas Kamar</label>
                    <input type="number" class="form-control @error('kapasitas') 'is-invalid' @enderror" id="kapasitas" name="kapasitas" placeholder="masukkan kapasitas kamar" required value="{{ old('kapasitas', $kosans->kapasitas) }}" autofocus>
                    @error('kapasitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jenis" class="form-label">Jenis Kost</label>
                    <select class="form-select" name="jenis" aria-label="Jenis Kost">
                        @if (old('jenis', $kosans->jenis) == "Putra")
                            <option value="Putra" selected>Putra</option>
                        @elseif (old('jenis', $kosans->jenis) == "Putri")
                            <option value="Putri" selected>Putri</option>
                        @else
                            <option value="Putra/Putri" selected>Putra/Putri</option>
                        @endif
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="jarak" class="form-label">Jarak Kost ke Itenas</label>
                    <input type="number" class="form-control @error('jarak') 'is-invalid' @enderror" id="jarak" name="jarak" placeholder="masukkan jarak kost ke Itenas" required value="{{ old('kapasitas', $kosans->jarak) }}" autofocus>
                    @error('jarak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="foto" class="form-label">Foto Cover</label>
                    <input type="hidden" name="old_foto" value="{{ $kosans->foto }}">
                    @if($kosans->foto)
                        <img src="{{ asset('assets/images/' . $kosans->foto) }}" class="img-preview img-fluid mb-2 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-2 col-sm-5">
                    @endif
                        <label for="foto" class="form-label">Ubah Foto Cover</label>
                        <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto" onchange="previewImage()">
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <!-- <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi Kost</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $kosans->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> -->
                <div class="form-group mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Kost</label>
                    <textarea class="form-control @error('deskripsi') 'is-invalid' @enderror" id="deskripsi" name="deskripsi" rows="3" required value="{{ old('deskripsi',) }}" autofocus>{{$kosans->deskripsi}}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_kamar">Fasilitas Kamar</label>
                    <input id="fasilitas_kamar" type="hidden" name="fasilitas_kamar" value="{{ old('fasilitas_kamar', $kosans->fasilitas_kamar) }}">
                    <trix-editor input="fasilitas_kamar"></trix-editor>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_kamar_mandi">Fasilitas Kamar Mandi</label>
                    <input id="fasilitas_kamar_mandi" type="hidden" name="fasilitas_kamar_mandi" value="{{ old('fasilitas_kamar_mandi', $kosans->fasilitas_kamar_mandi) }}">
                    <trix-editor input="fasilitas_kamar_mandi"></trix-editor>
                    @error('fasilitas_kamar_mandi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_umum">Fasilitas Umum</label>
                    <input id="fasilitas_umum" type="hidden" name="fasilitas_umum" value="{{ old('fasilitas_umum', $kosans->fasilitas_umum) }}">
                    <trix-editor input="fasilitas_umum"></trix-editor>
                    @error('fasilitas_umum')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="fasilitas_parkir">Fasilitas Parkir</label>
                    <input id="fasilitas_parkir" type="hidden" name="fasilitas_parkir" value="{{ old('fasilitas_parkir', $kosans->fasilitas_parkir) }}">
                    <trix-editor input="fasilitas_parkir"></trix-editor>
                    @error('fasilitas_parkir')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="peraturan">Peraturan Kost</label>
                    <input id="peraturan" type="hidden" name="peraturan" value="{{ old('peraturan', $kosans->peraturan) }}">
                    <trix-editor input="peraturan"></trix-editor>
                    @error('peraturan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <a class="btn btn-warning" href="#">Unggah Foto</a>
                <div>
                    <a class="btn btn-secondary mt-3 me-2" href="/admin">Kembali</a>
                    <button type="submit" value="submit" class="btn btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </section>
    </main>
@endsection