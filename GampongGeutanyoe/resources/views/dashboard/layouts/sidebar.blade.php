<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">

    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    {{-- Dashboard --}}
    <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a href="/dashboard" class="menu-link">
        <i class="fa-duotone fa-grid-2 me-3"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    {{-- Berita --}}
    <li class="menu-item {{ Request::is('dashboard/berita*') ? 'active' : '' }}">
      <a href="/dashboard/berita" class="menu-link">
        <i class="fa-duotone fa-newspaper me-3"></i>
        <div data-i18n="Analytics">Berita</div>
      </a>
    </li>

    {{-- Administrasi --}}
    <li class="menu-item {{ Request::is('dashboard/administrasi*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="fa-duotone fa-envelope me-3"></i>
        <div data-i18n="Layouts">Administrasi</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item {{ Request::is('dashboard/administrasi/solusi*') ? 'active' : '' }}">
          <a href="/dashboard/administrasi/solusi" class="menu-link">
            <div data-i18n="solusi">Solusi</div>
          </a>
        </li>
        <li class="menu-item {{ Request::is('dashboard/administrasi/data-surat*') ? 'active' : '' }}">
          <a href="/dashboard/administrasi/data-surat" class="menu-link">
            <div data-i18n="data surat">Data Surat</div>
          </a>
        </li>
        <li class="menu-item {{ Request::is('dashboard/administrasi/perizinan*') ? 'active' : '' }}">
          <a href="/dashboard/administrasi/perizinan" class="menu-link">
            <div data-i18n="perizinan">Perizinan</div>
          </a>
        </li>
      </ul>
    </li>

    {{-- Laporan --}}
    <li class="menu-item {{ Request::is('dashboard/laporan*') ? 'active' : '' }}">
      <a href="/dashboard/laporan" class="menu-link">
        <i class="fa-duotone fa-circle-dollar me-3"></i>
        <div data-i18n="Analytics">Laporan</div>
      </a>
    </li>
    {{-- Perangkat Gampong --}}
    <li class="menu-item {{ Request::is('dashboard/perangkat-gampong*') ? 'active' : '' }}">
      <a href="/dashboard/perangkat-gampong" class="menu-link">
        <i class="fa-duotone fa-list-tree me-3"></i>
        <div data-i18n="Analytics">Perangkat Gampong</div>
      </a>
    </li>
    {{-- Users --}}
    <li class="menu-item {{ Request::is('dashboard/users*') ? 'active' : '' }}">
      <a href="/dashboard/users" class="menu-link">
        <i class="fa-duotone fa-user-group fa-sm me-3"></i>
        <div data-i18n="Analytics">Users</div>
      </a>
    </li>
  </ul>
</aside>
