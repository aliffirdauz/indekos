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
                <h4 class="title-section-content">Detail User</h4>
            </div>
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    <h5>
                        {{$user->nama}}
                    </h5>
                    <p class="list-group-item">{{$user->nim}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6>Jenis Kelamin</h6>
                        {{$user->jenis_kelamin}}
                    </li>
                    <li class="list-group-item">
                        <h6>Perguruan Tinggi Asal</h6>
                        {{$user->asal_pt}}
                    </li>
                    <li class="list-group-item">
                        <h6>Program Studi Asal</h6>
                        {{$user->prodi}}
                    </li>
                    <li class="list-group-item">
                        <h6>Alamat Asal</h6>
                        {{$user->alamat_asal}}
                    </li>
                    <li class="list-group-item">
                        <h6>Nomor Telepon</h6>
                        {{$user->no_telp}}
                    </li>
                    <li class="list-group-item">
                        <h6>Alamat Email</h6>
                        {{$user->email}}
                    </li>
                    <li class="list-group-item">
                        <h6>Role</h6>
                        {{$user->role}}
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection