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
          <h4 class="title-section-content">Daftar User</h4>
          <a class="btn btn-primary" href="/admin/userlist/create">
            <i class="bi bi-plus-circle"></i>
            Tambah User
          </a>
        </div>
        <div class="d-flex justify-content-center">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Jenis Kelamin</th>
                      <th>Asal Perguruan Tinggi</th>
                      <th>Program Studi</th>
                      <th>Alamat Asal</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$user->nama}}</td>
                      <td>{{$user->nim}}</td>
                      <td>{{$user->jenis_kelamin}}</td>
                      <td>{{$user->asal_pt}}</td>
                      <td>{{$user->prodi}}</td>
                      <td>{{$user->alamat_asal}}</td>
                      <td class="text-center fs-5">
                      <a href="/admin/userlist/{{$user->nama}}" class="badge rounded-pill text-bg-primary"><i class="bi bi-eye-fill"></i></a>
                      <a href="/admin/userlist/{{$user->id}}/edit" class="badge rounded-pill text-bg-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="/admin/userlist/{{$user->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge rounded-pill text-bg-danger border-0" onclick="return confirm('Yakin hapus data?');"><i class="bi bi-trash-fill"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </section>
    </main>
@endsection