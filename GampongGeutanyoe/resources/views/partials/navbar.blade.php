<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      <span class="merek">GAMPONG</span> GEUTANYO
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item me-5">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">BERANDA</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="/berita">BERITA</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link {{ Request::is('administrasi*') ? 'active' : '' }}" href="/administrasi">ADMINISTRASI</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link {{ Request::is('tentang*') ? 'active' : '' }}" href="/tentang">TENTANG</a>
        </li>
      </ul>

      @auth
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->nama }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  Logout
                </button>
              </form>
            </li>
          </ul>
        @else
          <div class="d-flex">
            <a class="btn btn-light btn-login fw-semibold px-4 rounded-pill" href="/login">Login</a>
          </div>
        @endauth
      </div>
    </div>
  </div>
</nav>
