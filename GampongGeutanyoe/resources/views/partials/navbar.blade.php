<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logo.png') }}" width="150px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
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
          <a class="nav-link {{ Request::is('keuangan*') ? 'active' : '' }}" href="/keuangan">KEUANGAN</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link {{ Request::is('tentang*') ? 'active' : '' }}" href="/tentang">TENTANG</a>
        </li>
      </ul>
    </div>

    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        username
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="list-user dropdown-item" href="/profile">Profile</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="list-user dropdown-item" href="/">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
