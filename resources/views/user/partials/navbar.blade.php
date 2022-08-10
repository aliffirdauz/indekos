<nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top mediumnavigation">
  <div class="container">
    <!-- Begin Logo -->
    <a class="navbar-brand" href="/">
      <img src="/assets/img/logos.png" alt="logo">
    </a>
    <!-- End Logo -->
    <div class="d-flex gap-3 align-items-center mb-4">
      <img src="/assets/icons/ic_mode.svg" alt="Mode Display" />
      <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
      <div>
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
      </div>
    </div>
  </div>
</nav>
