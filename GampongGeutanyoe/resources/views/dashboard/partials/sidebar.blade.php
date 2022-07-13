  <div class="flex-shrink-0 p-3 bg-white" style="width: 280px; margin-bottom:0">
    <a href="/" class="d-flex align-items-center pb-4 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
      <a href="/dashboard" class="text-decoration-none" style="color: black"><li class="mb-1"><i class="bi bi-house-fill"></i>
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          DASHBOARD
        </button></a>
      </li>
      <li class="mb-1">
        <i class="bi bi-bookmark-fill"></i>
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#berita-collapse" aria-expanded="false">
          BERITA
        </button>
        <div class="collapse" id="berita-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/upload" class="link-dark d-inline-flex text-decoration-none rounded">Upload</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <i class="bi bi-clipboard-fill"></i>
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#administrasi-collapse" aria-expanded="false">
          ADMINISTRASI
        </button>
        <div class="collapse" id="administrasi-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/solusi" class="link-dark d-inline-flex text-decoration-none rounded">Solusi</a></li>
            <li><a href="/datasurat" class="link-dark d-inline-flex text-decoration-none rounded">Data Surat</a></li>
            <li><a href="/perizinan" class="link-dark d-inline-flex text-decoration-none rounded">Perizinan</a></li>
          </ul>
        </div>
        <li class="mb-1">
            <i class="bi bi-wallet-fill"></i>
            <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#money-collapse" aria-expanded="false">
                KEUANGAN
            </button>
            <div class="collapse" id="money-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="/laporan" class="link-dark d-inline-flex text-decoration-none rounded">Laporan</a></li>
                </ul>
            </div>
      <li class="mb-1">
        <i class="bi bi-people-fill"></i>
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          USER
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/createuser" class="link-dark d-inline-flex text-decoration-none rounded">Create User</a></li>
            <li><a href="/datauser" class="link-dark d-inline-flex text-decoration-none rounded">Data User</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <i class="bi bi-person-lines-fill"></i>
        <button class="btn d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#perangkat-collapse" aria-expanded="false">
          PERANGKAT GAMPONG
        </button>
        <div class="collapse" id="perangkat-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/tambah" class="link-dark d-inline-flex text-decoration-none rounded">Tambah</a></li>
            <li><a href="/data" class="link-dark d-inline-flex text-decoration-none rounded">Data</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
