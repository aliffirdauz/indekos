<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="d-flex justify-content-center container">
      <ul class="navbar-nav">
              <li class="nav-item"> Hubungi kami </li>
              <li class="nav-item">  || <i class="bi bi-envelope"></i>   <a href="#">cdc@itenas.ac.id</a>   </li>
              <li class="nav-item">  || <i class="bi bi-telephone"></i>    +62-22-7272215 (ext.235)   </li>
              <li class="nav-item">  || <i class="bi bi-clock"></i>    Mon-Fri 8am - 5pm    </li>
            </ul>
    </div>
  </nav>
  <div class="container mediumnavigation">
    <!-- Begin Logo -->
    <a class="navbar-brand" href="/">
      <img src="/assets/img/logos.png" alt="logo">
    </a>
    <!-- End Logo -->
    <div class="d-flex gap-3 align-items-center mb-2 mt-3">
      @auth
        @can('admin')
          <a class="btn btn-primary" href="/admin">Admin</a>
        @endcan
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      @else
        <a class="btn btn-primary" href="/login">Login</a>
      @endauth
      <!-- <p id="label-mode" class="flex-fill label-mode">Light Mode</p> -->
      <!-- <div>
        <input
          id="checkbox"
          type="checkbox"
          class="toggle-theme"
          aria-label="Toggle Theme"
        />
        <label for="checkbox" class="label-toggle">
          <img
            src="/assets/icons/ic_moon.svg"
            width="50%"
            class="ic-theme"
            id="ic-dark"
            alt="Icon Dark"
          />
          <img
            src="/assets/icons/ic_sun.svg"
            width="50%"
            class="ic-theme"
            id="ic-light"
            alt="Icon Light"
          />
        </label>
      </div> -->
    </div>
  </div>
</nav>
