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
                <h4 class="title-section-content">Edit User</h4>
            </div>
            <form action="/admin/userlist/{{$mhsw->id}}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukkan nama anda" required value="{{ old('nama', $mhsw->nama) }}" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="masukkan nim anda" required value="{{ old('nim', $mhsw->nim) }}" autofocus>
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        @if (old('jenis_kelamin', $mhsw->jenis_kelamin) == "L")
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                        @else
                            <option value="L">Laki-laki</option>
                            <option value="P" selected>Perempuan</option>
                            <option value="">Pilih Jenis Kelamin</option>
                        @endif
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="asal_pt" class="form-label">Perguruan Tinggi Asal</label>
                    <input type="text" class="form-control @error('asal_pt') is-invalid @enderror" id="asal_pt" name="asal_pt" placeholder="masukkan perguruan tinggi asal anda" required value="{{ old('asal_pt', $mhsw->asal_pt) }}" autofocus>
                    @error('asal_pt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="prodi" class="form-label">Program Studi Asal</label>
                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" placeholder="masukkan perguruan tinggi asal anda" required value="{{ old('prodi', $mhsw->prodi) }}" autofocus>
                    @error('prodi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat_asal" class="form-label">Alamat Asal</label>
                    <textarea class="form-control @error('alamat_asal') is-invalid @enderror" id="alamat_asal" name="alamat_asal" rows="3" required value="{{ old('alamat_asal') }}" autofocus>{{$mhsw->alamat_asal}}</textarea>
                    @error('alamat_asal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="masukkan nomor telepon anda" required value="{{ old('no_telp', $mhsw->no_telp) }}" autofocus>
                    @error('no_telp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan email anda" required value="{{ old('email', $mhsw->email) }}" autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="masukkan password anda" required value="{{ old('password', $mhsw->password) }}" autofocus>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="role">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        @if (old('role', $mhsw->role) == "user")
                            <option value="">Pilih Role</option>
                            <option value="user" selected>User</option>
                            <option value="admin">Admin</option>
                        @else
                            <option value="">Pilih Role</option>
                            <option value="user">User</option>
                            <option value="admin" selected>Admin</option>
                        @endif
                    </select>
                </div>
                <div>
                    <a class="btn btn-secondary mt-3 me-2" href="/admin/userlist/index">Kembali</a>
                    <button type="submit" value="submit" class="btn btn-primary mt-3">Simpan</button>
                </div>
            </form>
        </section>
    </main>
@endsection